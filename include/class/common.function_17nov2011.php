<?php
function isValidEmail($email){
		return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
	}
	
	/*  profile image upload*/
	function UploadImg($destination,$file,$condition=true)
	{
		global $error_msg;
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($file['name']);
		
		//CHECK ERROR
		$allow_ext=explode(',',ALLOW_IMAGE);
		 
		if(in_array($temp['extension'],$allow_ext)==false)
		{
		  return $error_msg[15].' "'.$temp['extension'].'"';
		}
		//-------------
		if($file['size']>ALLOW_IMAGE_SIZE)
		{
		  return $error_msg[16].' "'.$file['size'].'"';
		}
		//------------------------
		
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($destination);
 		if(move_uploaded_file($file['tmp_name'],$destination))
 		return "";
	}
	/*  profile image upload*/
	function UploadImg_audio_video($destination,$file,$condition=true)
	{
		global $error_msg;
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($file['name']);
		
		//CHECK ERROR
		$allow_ext=explode(',',ALLOW_IMAGE);
		
 		if(in_array($temp['extension'],$allow_ext)==false)
		{
		  return $error_msg[15].' "'.$temp['extension'].'"';
		}
		//-------------
		if($file['size']>ALLOW_IMAGE_SIZE)
		{
		  return $error_msg[16].' "'.$file['size'].'"';
		}
		//------------------------
		
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($destination);
 		if(move_uploaded_file($file['tmp_name'],$destination))
 		return "";
	}
	/* get extension*/
	function get_extension($file)
	{
		$temp=pathinfo("sdfds/".$file);
		return  $temp['extension'];
	}
	//experi
	function experience($value)
	{
	  $text='<option value="" selected="selected">Select</option>';
           
			for($i=0;$i<4;$i=$i + 0.2 )
				{
				  $s='';
				  if($i==$value){ 
				  	$s= ' selected="selected" ';
				  } 
			     $text.=' <option value="'.$i.'"  '.$s.'>'.$i.'</option>';
				}
  			return $text;			
	}
	
	
	//Credit Card Number
	function Credit_Card_Number($number)
	{
	   return  "";	 
	}
	
	function credit_card_expiry_date($date)
	{
	 return  "";	 
	}
	function credit_card_CVV2($number)
	{
	 return  "";	 
	}
	
	//is valid user
	function Is_valid_uesr()
	{
	  global $s;
	  if($s->is_set('R_USER_ID')==false && $s->is_set('USER_ID')==false)
	  header('location:index.php');
	  
	  
	 if($s->is_set('R_USER_ID'))//Recruiter
	 return $s->is_set('R_USER_ID');
	 
	 
	 
	 if($s->is_set('USER_ID'))//candidate
	 return $s->is_set('USER_ID');	 
	  
	}	
/*
	condidate apply for this project
*/	
	function apply($job_id)
	{
	    global $s,$db;
	    $already_applied='SELECT * FROM `applied` WHERE `user_id`='.$s->value('USER_ID').'  AND  `job_id`='.$job_id;
		if($db->num_rows($db->query_silent($already_applied))==1)
		{
		   return $db->num_rows($db->query_silent($already_applied));
		}
		else
		{
		   $apply_sql="INSERT INTO  `applied` ( `user_id`, `job_id`, `date`, `status`) VALUES ( '".$s->value('USER_ID')."', '".$job_id."', now(), '".ENABLE."');";
		   if($db->query_silent($apply_sql))
		   {
		     return $db->insert_id();
		   }
		   
		   
		}
		return false;
	}
	
	function is_applied($job_id)
	{
	    global $s,$db;
	    $already_applied='SELECT * FROM `applied` WHERE `user_id`='.$s->value('USER_ID').'  AND  `job_id`='.$job_id;
		if($db->num_rows($db->query_silent($already_applied))==1)
		{
		   return $db->num_rows($db->query_silent($already_applied));
		}
		 
		return false;
	}
	
	 
	
	
	
	/*
	
	
	*/  
	function total_applied($job_id)
	{
	  global $db;
 	   $run=$db->query_silent("SELECT * FROM `applied` WHERE `job_id`=".$job_id);
	   return $db->num_rows($run);
	}
	/*
	show language
	
	*/
	function show_language($id)
	{
	    global $db;
	   $run=$db->query_silent("SELECT * FROM `languages` WHERE `id`=".$id);
	   $data=$db->fetch_array($run);
	   return $data['name'];
	}
	
	
	/*
	show education
	
	*/
	function show_education($id)
	{
	     global $db;
	   $run=$db->query_silent("SELECT * FROM `education` WHERE `id`=".$id);
	   $data=$db->fetch_array($run);
	   return $data['name'];
	}
	/*
	show description
	
	*/
	function show_description($id)
	{
 		 global $db;
	   $run=$db->query_silent("SELECT * FROM `qualifications` WHERE `id`=".$id);
	   $data=$db->fetch_array($run);
	   return $data['name'];
	}
	
	/*
	show country
	
	*/
	function show_country($id)
	{
 		 global $db;
	   $run=$db->query_silent("SELECT * FROM `countries` WHERE `countries_id`=".$id);
	   $data=$db->fetch_array($run);
	   return $data['countries_name'];
	}
	
	/*
	show job title
	
	*/
	function show_job_title($id)
	{
 		 global $db;
	   $run=$db->query_silent("SELECT * FROM `post_job` WHERE `id`=".$id);
	   $data=$db->fetch_array($run);
	   return $data['title'];
	}
	
	
	/*
	candidate is replied 
	*/
	function condidate_is_replied($cid)
	{
	   
	}
	
	/*
	show name 
	*/
	function show_name($id)
	{
	    global $db;
	   $run=$db->query_silent("SELECT * FROM `profiles` WHERE `user_id`=".$id);
	   $data=$db->fetch_array($run);
 	   return $data['first_name']." ".$data['last_name'];
	}
	
	/*
	total replied by recuriter
	*/
	function r_replied($jid)
	{
	    global $db,$s;
 	   $run=$db->query_silent("SELECT * FROM `review_comment` WHERE `job_id`=".$jid." and `to`=".$s->value('USER_ID'));
	   return $db->num_rows($run);
	}
	
	/*
	total replied by candidate
	*/
	function c_replied($jid)
	{
	    global $db,$s;
 	   $run=$db->query_silent("SELECT * FROM `review_comment` WHERE `job_id`=".$jid." and `to`=".$s->value('R_USER_ID'));
	   return $db->num_rows($run);
	}
	/*
	get user type
	*/
	function user_type($id)
	{
	    global $db,$s;
 	   $run=$db->query_silent("SELECT * FROM `user_login_details` WHERE `id`".$id);
	   $data=$db->fetch_array($run);
	   return $data['type'];
	}
	
	/*  profile image upload*/
	function UploadImg_accept($destination,$file,$condition=true)
	{
		/*global $error_msg;
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($file['name']);
		
		//CHECK ERROR
		$allow_ext=explode(',',ALLOW_IMAGE);
		 
		if(in_array($temp['extension'],$allow_ext)==false)
		{
		  return $error_msg[15].' "'.$temp['extension'].'"';
		}
		//-------------
		if($file['size']>ALLOW_IMAGE_SIZE)
		{
		  return $error_msg[16].' "'.$file['size'].'"';
		}
		//------------------------
		
		if($file['error']!=0)
		return $file['error'];
		$temp=pathinfo($destination);*/
 		if(move_uploaded_file($file['tmp_name'],$destination))
 		return "";
	}	
	
	/*
	accept
	*/
	function accept($cid,$jid)
	{
	  	global $db,$s;
	  
 			   $sql="INSERT INTO  `accepted` ( `recruiter_id`, `candidate_id`, `job_id`, `date`, `status`) VALUES (  ".$s->value('R_USER_ID').", ".$cid.", ".$jid.", now(),'".ENABLE."');";
			   $run=$db->query_silent( $sql);
			   return $db->insert_id();
  	}
	
	function Awarded()
	{
	   global $db,$s;
 	   $run=$db->query_silent("SELECT * FROM `accepted` WHERE `recruiter_id`=".$s->value('R_USER_ID'));
	    
	   return $db->num_rows($run);
	}
	
	function C_awarded()
	{
	   global $db,$s;
 	   $run=$db->query_silent("SELECT * FROM `accepted` WHERE `candidate_id`=".$s->value('USER_ID'));
	    
	   return $db->num_rows($run);
	}
?> 

