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
   $sql="INSERT INTO  `subscriptions` 
             set 
                 `user_id` =".$s->value('UESR_ID').",
				 `payment_options`='".$db->dataTrim($_REQUEST['payment_options'])."' , 
				 `credit_card_owner`='".$db->dataTrim($_REQUEST['credit_card_owner'])."' ,
				 `credit_card_number`='".$db->dataTrim($_REQUEST['credit_card_number'])."' ,
				 `credit_card_expiry_date`='".date('Y-m',strtotime(" ".$db->dataTrim($_REQUEST['card_expire_year'])." ".$db->dataTrim($_REQUEST['card_expire_month'])))."-00' , 
				 `credit_card_CVV2`='".$db->dataTrim($_REQUEST['credit_card_CVV2'])."' ,
 				 `date` =now(),
				 `status`='".ENABLE."'";
		if($db->query_silent($sql) )
		echo "true";		
 				
  break;
  case 2:
  
 
   /*
   add skills profile
   */
    
    $profile_image="R_".sprintf("%-010s",$s->value('UESR_ID'))."_".time().".".get_extension($_FILES['attached_profile_img']['name']);
 	UploadImg("../../".P_IMAGE_FOLDER.$photo,$_FILES['attached_profile_img'],true);
	
	
     $sql="UPDATE  `user_profiles` 
   					set
 							`image` ='".$profile_image."',
							`profile_title` ='".$db->dataTrim($_REQUEST['p_title'])."',
							`profile_description`='".$db->dataTrim($_REQUEST['profile_description'])."' ,
							`contacts` ='".$db->dataTrim($_REQUEST['contacts'])."',
							`tags` ='".$db->dataTrim($_REQUEST['tags'])."' 
							 
					WHERE `user_id` =".$s->value('UESR_ID')." ";
		
		if($db->query_silent($sql) )
		echo "true";
  break;
  case 1:
  
   /*
  add login detials
  
  */
   //$s->destroy();
	 
	 $error="";
	 
	 if(strlen($db->dataTrim($_REQUEST['first_name']))<=0)
	 {
	    $error="";
		
	 }
	//****************************************************
	if($error=="")
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
						`name`='".$db->dataTrim($_REQUEST['first_name'])." ".$db->dataTrim($_REQUEST['last_name'])."',
						`login_id`='".$db->dataTrim($_REQUEST['Username'])."',
						`password`='".$db->dataTrim($_REQUEST['password'])."',
						`type`='".$s->value('USER_TYPE')."',
						`date`=NOW(),
						`status`='".ENABLE."'".$condition;
			  
			$db->query_silent($sql);
			
			$user_id=$db->insert_id();  
			$s->set("UESR_ID",$user_id);
			
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
					  `conpany_name`='".$db->dataTrim($_REQUEST['conpany_name'])."', 
					  `primary_email`='".$db->dataTrim($_REQUEST['primary_email'])."', 
					  `country`='".$db->dataTrim($_REQUEST['country'])."', 
					  `date`='".$db->dataTrim($_REQUEST['account_name'])."', 
					  `status`='".ENABLE."'" . $condition; 
					  
			  
				if($db->query_silent($profile_sql)==true  )
				{
				  echo "true";
				}						

	}  
  break;
  
  
  
}

?>