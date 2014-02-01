<?php
include_once('init.php');

 
	if($s->value('C_FORM')!=5)
	{
	
		switch($s->value('C_FORM'))
		{
 		 case 1:
			 header('location:sign-up-candidate-profile.php');
			 break;
		 case 2:
			 header('location:fill-in-your-skills.php');
			 break;
		case 3:
			 header('location:record-audio.php');
			 break;
	    case 4:
			 header('location:set-rates.php');
			 break;		 	 
		 default :
			header('location:index.php');	 
		}
	 
	}
	$sql='UPDATE  `user_login_details` SET `status` = "'.ENABLE.'" WHERE `vertical_id`="'.VERTICAL_ID.'" and `user_login_details`.`id` ='.$s->value('UESR_ID');
	$db->query_silent($sql);
	
	
	$sql="SELECT * FROM `user_login_details` WHERE  `vertical_id`='".VERTICAL_ID."' and `id` =".$s->value('UESR_ID');
	$user_data=$db->fetch_array($db->query_silent($sql));
	
		$s->set('USER_LOGIN',"true");
		
		$s->set('USER_TYPE',$user_data['type']);
		
		$s->set('USER_ID',$user_data['id']);
		
		$s->set('USER_NAME',$user_data['name']);
		
		$s->set('USER_LOGIN_ID',$user_data['login_id']);
		
		
 ?>
 <?php header("refresh:5;index.php"); ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>

<script src="js/recruiter-registration.js" type="text/javascript" language="javascript1.2"></script>
</head>
<body>
<div id="men">
     <?php echo $get_template->process('global_header.php')?>
  <div class="center_in">
    <div     >
          <div class="row2">
          
         <div class="post_cl">
        <h1 align="center">Congratulations!</h1>
        <h2 align="center"><span>You are now registered with Skillsapien.</span></h2>
        <p align="center"><span class="pos_bucl"><a  href="candidate-job-list.php"><img src="images/find-job.gif" border="0"     /></a></span></p>
        <div align="center" class="pos_bucl">   
        </div>
  
         <p><a href="#"> </a></p>
         </div>
         
            <div class="clear"></div>
          </div>
          <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
  
  <div class="clear"></div>
</div>
<div class="canten">
  <div class="clear"></div>
</div>
</div>
<!--Footer-->
<?php

 echo $get_template->process('global_footer.php');


	
 ?>
</body>
</html>