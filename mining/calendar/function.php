

<?php

mysql_connect("localhost", "pmuser", "promedik");
 	mysql_select_db("sapiendb1");
	
function noofcandidates($dateargument){
	
 	 $sql ="SELECT user_login_details.name, user_login_details.id, user_login_details.type, user_login_details.status, calendar.date
			FROM user_login_details
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id
			AND calendar.date !='".$dateargument."' )
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable'";
 	$result =mysql_query($sql) or die();
	$noofcandidates =mysql_num_rows($result);
	return $noofcandidates;
}

function allcandidates($dateargument, $pageNo){
	
	
	if(!$pageNo || $pageNo == 1){
			$pageNo = 1;
			$limitConditions = " LIMIT 0 , 10";
		}else if($pageNo > 1){
			$actualPage = ($pageNo - 1);
			$multiplyOffset = $actualPage * 10;
			$limitConditions = " LIMIT ".$multiplyOffset." , 10";
		}
	
	
	
	   $sql ="SELECT DISTINCT calendar.user_id,  user_login_details.id, user_login_details.name,  user_login_details.type, user_login_details.status,
			skills_profiles.skills_profile, skills_profiles.profile_summary, 
			profiles.photo,
			calendar.date
			FROM user_login_details
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id AND calendar.date !='".$dateargument."' )
			LEFT JOIN skills_profiles ON user_login_details.id =skills_profiles.user_id
			LEFT JOIN profiles ON user_login_details.id =profiles.user_id
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable'".$limitConditions." ";
			
			$result =mysql_query($sql);
			//echo mysql_num_rows($result);exit;
			$resultarray =array();
			while($row=mysql_fetch_assoc($result)){
				//print_r($row);
				$resultarray[]=$row;
				//print_r($resultarray);
				
			}
			//print_r($resultarray);
			return $resultarray;
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
	




?>