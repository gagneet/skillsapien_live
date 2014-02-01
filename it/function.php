

<?php
include'init.php';
/*mysql_connect("localhost", "pmuser", "promedik");
 	mysql_select_db("sapiendb1");*/
	
function noofcandidates($dateargument, $getSkill=''){
//echo $getSkill; exit;
	if($getSkill =="Allskills"){
		$serchCondition="";
		$searchKey="";
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id	AND skills_profiles.skill_keywords LIKE '%' )";
	}else{
		// new like condition on 2-jun written by naresh 
		$searchKey =", skills_profiles.skill_keywords";
		$getSkillarray =array();
		$getSkillarray =explode(",", $getSkill);
		$skillCount =count($getSkillarray);
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id AND( ";
		for($i=0; $i<$skillCount; $i++){
			if($i ==0){
				$serchCondition.=" (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";	
			}else{
				$serchCondition.="AND (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";
				}
		}
		$serchCondition.=" ))";
		// old search queary 
		/*$searchKey =", skills_profiles.skill_keywords";
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id	AND (skills_profiles.skill_keywords LIKE '%".$getSkill."%'  ))";*/
	}
 	 $sql ="SELECT user_login_details.name, user_login_details.id, user_login_details.type, user_login_details.status, calendar.date".$searchKey."
			FROM user_login_details ".$serchCondition."
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id
			AND calendar.date !='".$dateargument."' )
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable' AND user_login_details.vertical_id='".VERTICAL_ID."' GROUP BY user_login_details.id";
/*echo $sql;
exit;*/
 	$result =mysql_query($sql) or die();
	$noofcandidates =mysql_num_rows($result);
	return $noofcandidates;
}

function allcandidates($dateargument, $pageNo,  $getSkill){
		
	if(!$pageNo || $pageNo == 1){
			$pageNo = 1;
			$limitConditions = " LIMIT 0 , 10";
		}else if($pageNo > 1){
			$actualPage = ($pageNo - 1);
			$multiplyOffset = $actualPage * 10;
			$limitConditions = " LIMIT ".$multiplyOffset." , 10";
		}
	if($getSkill =="Allskills"){
		//$serchSkill=")";
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id AND( skills_profiles.skill_keywords LIKE '%%'))";
		$searchKey="";
	}else{
		//$serchCondition="skill_keywords LIKE '%".$getSkill."%'";
		
		
		// new like condition on 2-jun written by naresh 
		//$searchKey =", skills_profiles.skill_keywords";
		$getSkillarray =array();
		$getSkillarray =explode(",", $getSkill);
		$skillCount =count($getSkillarray);
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id AND( ";
		for($i=0; $i<$skillCount; $i++){
			if($i ==0){
				$serchCondition.=" (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";	
			}else{
				$serchCondition.="OR (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";
				}
		}
		$serchCondition.=" ))";
		
		// old search query 
		/*	$serchSkill=" AND skills_profiles.skill_keywords LIKE '%".$getSkill."%')";
		 	$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id".$serchSkill;*/
		
	}
		
			
			 $sql ="SELECT user_login_details.id, user_login_details.name,  user_login_details.type, user_login_details.status,
			 skills_profiles.profile_summary,  skills_profiles.skills_profile,
			profiles.photo,
			calendar.date
			FROM user_login_details ".$serchCondition."
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id AND calendar.date !='".$dateargument."' )
			LEFT JOIN profiles ON user_login_details.id =profiles.user_id
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable' AND user_login_details.vertical_id='".VERTICAL_ID."' GROUP BY user_login_details.id".$limitConditions." ";
//echo $sql; exit;
			$result =mysql_query($sql);
			$rowCount= mysql_num_rows($result);
			$resultarray =array();
			if($rowCount ==0){
				return 0;
			}else{
					while($row=mysql_fetch_assoc($result)){
						$resultarray[]=$row;
					}
				return $resultarray;
			}
}

function displayString($str,$len)
{	

	 $lenStr = strlen($str);
	
		if($lenStr > $len){
 			$replaceStr = substr($str,0,$len)."..."; 
		}else{
			 $replaceStr = $str; 
		}
		return $replaceStr;	
}

function unavaliabletime($id, $date){
//	echo $id;exit;
	  $sql="select * from calendar where user_id='".$id."' AND date='".$date."'";
	$data= mysql_query($sql);
	   $rowCount =mysql_num_rows($data);
	/*if($rowCount ==0){
		return 0;
	}else{*/
		$resultarray =array();
		while($row=mysql_fetch_assoc($data)){
		//	print_r($row);
			
						$resultarray[]=$row;
		}
		return $resultarray;
	/*}*/
	
}

function canditUnavaliableTime($dateValue, $cId){
	
	
	
	 $candsql ="select * from calendar where user_id='".$cId."' AND date ='".$dateValue."'";
	$queryData =mysql_query($candsql);
	
	if(mysql_num_rows($queryData) !=0){
	while($row =mysql_fetch_assoc($queryData)){
			if($row['from_time'] =="12 AM" && $row['to_time'] =="11 PM"){
				$avaliable =0;
			}else{
				$avaliable =1;
			}
		}
	}else{
		$avaliable =2;
	}
	
	
	return $avaliable;
	
	
}
	
function recruiterBgColor($candidatescount){
	
	 $sql =" select * from color_values where user_type ='R'";
	$data = mysql_query($sql);
	$color =array();
	while($row =mysql_fetch_assoc($data)){
		$color[$row['color_name'].'_minvalue']=$row['color_minvalue'];
		$color[$row['color_name'].'_maxvalue']=$row['color_maxvaue'];
		$color[$row['color_name'].'_colorcode'] =$row['color_code'];
		
	}
	
//echo 	print_r($color);exit;
	if($candidatescount >=$color['blue_minvalue']){
		// light blue color 
			//$bgcolor='#50A0FF';
			$bgcolor=$color['blue_colorcode'];
			}elseif($candidatescount >=$color['green_minvalue'] && $candidatescount <$color['green_maxvalue']){
				// green color
				//$bgcolor='#66FF55';		
				 $bgcolor=$color['green_colorcode'];	
			}elseif($candidatescount >=$color['yellow_minvalue'] && $candidatescount <$color['yellow_maxvalue']){
				// yellow color
					//$bgcolor ='#FFF655';
					$bgcolor =$color['yellow_colorcode'];
				}elseif($candidatescount >=$color['orange_minvalue'] && $candidatescount <$color['orange_maxvalue']){
				// orange color
				//$bgcolor ='#FFA733';
				$bgcolor =$color['orange_colorcode'];
				}elseif($candidatescount <$color['red_maxvalue'] ){
				// red color
				//$bgcolor ='#FF5757';
				$bgcolor =$color['red_colorcode'];
		}
		return $bgcolor;
}
	

function candidateBgColor($candidatescount){
	
	 $sql =" select * from color_values where user_type ='C'";
	$data = mysql_query($sql);
	$color =array();
	while($row =mysql_fetch_assoc($data)){
		
		$color[$row['color_name'].'_colorcode'] =$row['color_code'];
		
	}
	
		if($candidatescount ==0){
			// red color
				//$bgcolor ='#FF5757';		
				$bgcolor =$color['red_colorcode'];	
		}elseif($candidatescount ==1){
			// orange color
				//$bgcolor ='#FFA733';
				$bgcolor =$color['orange_colorcode'];			
		}elseif($candidatescount ==2){
			// green color
				//$bgcolor='#66FF55';	
				$bgcolor=$color['green_colorcode'];	
		}
		
		return $bgcolor;
	
}

function hourCanditList($dateargument){
			
 	   $sql ="SELECT user_login_details.id, user_login_details.name,  user_login_details.type, user_login_details.status,
			 skills_profiles.profile_summary,  skills_profiles.skills_profile,
			profiles.photo, profiles.city, rates.lt_amount, rates.gt_amount, countries.countries_name, rates.lt_amount, rates.gt_amount,  currency.name as cname
			FROM user_login_details 
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id AND calendar.date !='".$dateargument."' )
			RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id)
			RIGHT JOIN profiles ON (user_login_details.id =profiles.user_id )
			LEFT JOIN rates ON ( user_login_details.id =rates.user_id )
			LEFT JOIN countries ON (skills_profiles.country = countries.countries_id)
			LEFT JOIN currency ON (currency.id = rates.lt_currency) 
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable' 
			AND user_login_details.vertical_id='".VERTICAL_ID."' 
			 GROUP BY user_login_details.id"; 
	
	 $sqlResult =mysql_query($sql);
	 return $sqlResult;
}


?>