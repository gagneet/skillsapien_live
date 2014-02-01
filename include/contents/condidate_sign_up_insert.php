<?php
include_once('../../init.php');
switch($_REQUEST['tab'])
{

  case 4:
  
     $sql="INSERT INTO  `rates` 
             set 
                 `user_id` =".$s->value('UESR_ID').",
				 `lt_currency`='".$db->dataTrim($_REQUEST['Currency'])."' , 
				 `lt_amount`='".$db->dataTrim($_REQUEST['amount'])."' ,
				 `lt_time_period`='".$db->dataTrim($_REQUEST['time_period'])."' ,
				 `gt_currency`='".$db->dataTrim($_REQUEST['Currency2'])."' , 
				 `gt_amount`='".$db->dataTrim($_REQUEST['amount2'])."' ,
				 `gt_time_period`='".$db->dataTrim($_REQUEST['timeperiod'])."' ,
				 `contact_via`='".implode(",",$_REQUEST['preferred_contact'])."' ,
				 `privacy`='".$db->dataTrim($_REQUEST['privacy'])."' ,
				 `date` =now(),
				 `status`='".ENABLE."'";
				
   if($db->query_silent($sql) )
		echo "true";
  break;
  case 3:
  /*
  Record an audio/video clip about yourself 
  */ 
  
	if($_REQUEST['data']!="skip")
	{
	$audio=sprintf("%-010s",$s->value('UESR_ID'))."_".time().".".get_extension($_FILES['attached_file_audio']['name']);
	UploadImg("../../".AUDIO_FOLDER.$audio,$_FILES['attached_file_audio'],true);
 
    $sql="INSERT INTO `skillsapien`.`audio_info` 
  		    set
				`user_id` =".$s->value('UESR_ID').",
				`name`='".$db->dataTrim($audio)."' ,
				`i_am`='".$db->dataTrim($_REQUEST['i_am'])."'  ,
				`language`='".$db->dataTrim($_REQUEST['language'])."'  ,
				`date` =now(),
				`status`='".ENABLE."'
				";
		if($db->query_silent($sql) )
		echo "true";		
	}
				
  break;
  case 2:
  
 
   /*
   add skills profile
   */
   
     $sql="INSERT INTO `skillsapien`.`skills_profiles` 
   					set
							`user_id` =".$s->value('UESR_ID').",
							`questionnaire` ='".$db->dataTrim($_REQUEST['personality'])."',
							`skills_profile` ='".$db->dataTrim($_REQUEST['skills'])."',
							`qualifications`='".$db->dataTrim($_REQUEST['qualifications'])."' ,
							`education` ='".$db->dataTrim($_REQUEST['education'])."',
							`experience` ='".$db->dataTrim($_REQUEST['experience'])."',
							`country` ='".$db->dataTrim($_REQUEST['country'])."',
							`languages` ='".$db->dataTrim($_REQUEST['languages'])."',
							`relevant_info` ='".$db->dataTrim($_REQUEST['relevant'])."',
							`interests` ='".$db->dataTrim($_REQUEST['interests'])."',
							`date` =now(),
							`status`='".ENABLE."'
		";
		
		if($db->query_silent($sql) )
		echo "true";
  break;
  case 1:
  /*
  add login detials
  
  */
    if($s->value('UESR_ID')>0)
	{
	 
	 if($s->value('UESR_ID')<=0)
	  {
	   $sql="INSERT INTO `user_login_details` 
			set  ";
	 $condition="  ";		  
	  }
	  else
	  {
	   $sql=" update  `user_login_details` set	 	  ";
	   $condition="   where `id`='".$s->value('UESR_ID')."'";
	  }
	  
	  
	 $sql.="
				`name`='".$db->dataTrim($_REQUEST['account_name'])."',
				`login_id`='".$db->dataTrim($_REQUEST['login_id'])."',
				`password`='".$db->dataTrim($_REQUEST['password'])."',
				`type`='".$s->value('USER_TYPE')."',
				`date`=NOW(),
				`status`='".ENABLE."'". $condition;
	  
	$db->query_silent($sql);
	
	$user_id=$db->insert_id();  
	$s->set("UESR_ID",$user_id);
	}
	 
	
	
	
	$photo=sprintf("%-010s",$s->value('UESR_ID'))."_".time().".".get_extension($_FILES['attached_file_photo']['name']);
 	UploadImg("../../".P_IMAGE_FOLDER.$photo,$_FILES['attached_file_photo'],true);
	
	$cv=sprintf("%-010s",$s->value('UESR_ID'))."_".time().".".get_extension($_FILES['attached_file_cv']['name']);	
	UploadImg("../../".CV_FOLDER.$cv,$_FILES['attached_file_cv'],true); 
	  /*
	  	PROFILE INFO
	  */
	
	  if($s->value('UESR_ID')<=0)
	  {
	   $profile_sql="INSERT INTO `profiles` set	 
			  `user_id`='".$s->value('UESR_ID')."',";
	 $condition="  ";		  
	  }
	  else
	  {
	   $profile_sql=" update  `profiles` set	 	  ";
	   $condition="   where `user_id`='".$s->value('UESR_ID')."'";
	  }
	   $profile_sql.=" 			
			  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
			  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."',
 			  `primary_email`='".$db->dataTrim($_REQUEST['primary_email'])."', 
			  `primary_contact_no`='".$db->dataTrim($_REQUEST['primary_contact'])."', 
			  `primary_address`='".$db->dataTrim($_REQUEST['primary_address'])."', 
			  `country`='".$db->dataTrim($_REQUEST['country'])."', 
			  `photo`='".$photo."', 
			  `conditions`='".$db->dataTrim($_REQUEST['condition'])."', 
			  `hear_about_us`='".$db->dataTrim($_REQUEST['hear_about_us'])."', 
			  `date`='".$db->dataTrim($_REQUEST['account_name'])."', 
			  `status`='".ENABLE."'" . $condition; 
			  
		
			  
			  /*
			  add  profile cv
			  */
		 	  $cv_sql="INSERT INTO  `cvs` 
			  				set
			  		 			`user_id`='".$user_id."', 
								`name`='".$cv."',
								`date`=now(),
								`status`='".ENABLE."'";	  
		if($db->query_silent($profile_sql)==true  && $db->query_silent($cv_sql)==true)
		{
		  echo "true";
		}						
  
  break;
  
  
  
}

?>