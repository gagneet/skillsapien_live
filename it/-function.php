

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
				$serchCondition.="OR (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";
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
	//echo  $sql="select * from calendar where user_id='".$id."' AND date='".$date."'";
	$date= mysql_query($sql);
	$rowCount =mysql_num_rows($data);
	if($rowCount ==0){
		return 0;
	}else{
		$resultarray =array();
		while($row=mysql_fetch_assoc($date)){
						$resultarray[]=$row;
		}
		return $resultarray;
	}
	
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
	
	if($candidatescount >=100){
		// light blue color 
			$bgcolor='#6699FF';
			}elseif($candidatescount >=50 && $candidatescount <100){
				// green color
				$bgcolor='#00CC33';		
			}elseif($candidatescount >=20 && $candidatescount <50){
				// yellow color
					$bgcolor ='#FFFF00';
				}elseif($candidatescount >=10 && $candidatescount <20){
				// orange color
				$bgcolor ='#FF9966';
				}elseif($candidatescount <10 ){
				// red color
				$bgcolor ='red';
		}
		
		return $bgcolor;
}
	

function candidateBgColor($candidatescount){
	
	/*if($candidatescount >=100){
		// light blue color 
			$bgcolor='#6699FF';
			}elseif($candidatescount >=50 && $candidatescount <100){
				// green color
				$bgcolor='#00CC33';		
			}elseif($candidatescount >=20 && $candidatescount <50){
				// yellow color
					$bgcolor ='#FFFF00';
				}elseif($candidatescount >=10 && $candidatescount <20){
				// orange color
				$bgcolor ='#FF9966';
				}elseif($candidatescount <10 ){
				// red color
				$bgcolor ='red';
		}*/
		
		if($candidatescount ==0){
			// red color
				$bgcolor ='red';			
		}elseif($candidatescount ==1){
			// orange color
				$bgcolor ='#FF6600';			
		}elseif($candidatescount ==2){
			// green color
				$bgcolor='#00CC33';		
		}
		
		return $bgcolor;
	
}



?>