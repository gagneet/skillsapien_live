<?php
 	
	/*
			call config file
	*/
		include_once('include/config.php');
	/*
			call class session file
	*/
	ini_set('error_reporting', E_ALL);
		include_once(WM_INCLIDE.WM_CLASS.'class_session.php');
	
		$s=new session();
		$s->start();
	    
	  
	/* call common.function*/
	
	include_once(WM_INCLIDE.WM_CLASS.'common.function.php');
	
    /* call  message */
	
	include_once(WM_INCLIDE.'error_msg.php');
	
	/*
			call database file
	*/
	include_once(WM_INCLIDE.WM_CLASS.'class_database.php');
	$db=new database();
		 
		 
	 
	/*
			call database file
	*/
		include_once(WM_INCLIDE.WM_CLASS.'class_template.php');


	$get_template=new template();
	$get_template->template(WM_INCLIDE.WM_CONTENT);
	
	///set template path
	
	///$template_path=WM_INCLIDE.WM_CONTENT;
	
	
	
	include_once(WM_INCLIDE.'site_msg.php');


/*
			header login section	
	*/
 	
  if($_REQUEST['login']=="login")
	{ 
		 
 		   $sql="SELECT * FROM `user_login_details` WHERE   `login_id` like '".$db->dataTrim($_REQUEST['get_loginId'])."' and  `password` like  '".md5($db->dataTrim($_REQUEST['get_h_password']))."'  ";
		   $user_fount=$db->num_rows($db->query_silent($sql));
		   $user_data=$db->fetch_array($db->query_silent($sql));
		 
		 
			if($user_fount==1)
			{
			 $sql="UPDATE `user_login_details` SET date=now() WHERE   id=".$user_data['id'];
		     $db->query_silent($sql);
			
			 $s->set('USER_LOGIN',"true");
			 
			 $s->set('USER_TYPE',$user_data['type']);
			 
			 if($user_data['type']=="R")
				{
					$s->set('R_USER_ID',$user_data['id']);
					
					$s->set('R_USER_NAME',$user_data['name']);
					
					$s->set('R_USER_LOGIN_ID',$user_data['login_id']);
					
					header('location:recruiters-dashboard.php');
				}
				else
				{
					$s->set('USER_ID',$user_data['id']);
					
					$s->set('USER_NAME',$user_data['name']);
					
					$s->set('USER_LOGIN_ID',$user_data['login_id']);
					
					if($_REQUEST['jid']>0)
					{
					header('location:cadidate-apply.php?jid='.$_REQUEST['jid']);
					exit;
					}
					header('location:candidate-dashboard.php');
				}
			   
 				 
			}
			else
			{
			     $header_login_error=LOGIN_ERROR;
				 
				 
			}
		  
	 }
	 
	/* GET PROFILE INFO*/	
	if($s->is_set('R_USER_ID')==true)	
	{
			require_once(WM_INCLIDE.WM_CLASS.'class.profile.php');
			
	 
			$profile_sql='SELECT * FROM `profiles` WHERE `user_id`='.$s->value('R_USER_ID').' and `status` like  "'.ENABLE.'" ';
			$profile_run=$db->query_silent($profile_sql);
			$profile_info=new profile($db->fetch_array($profile_run));
	 }
	 
?>