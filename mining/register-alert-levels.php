<?php
include_once('init.php');
Is_valid_uesr();

 /*
 USER REQUEST FROM HOME PAGE
 */

 if($s->value('R_FORM')!=4)
	{
	
		switch($s->value('R_FORM'))
		{
 		 case 1:
			 header('location:sign-up-candidate-profile.php');
			 break;
		 case 2:
			 header('location:enter-recruiter-profile.php');
			 break;
		case 3:
			 header('location:register-subscriptions.php');
			 break;
	  /*  case 4:
			 header('location:register-alert-levels.php');
			 break;	*/	 	 
		 default :
			header('location:index.php');	 
		}
	 
	}

 
 
	$sql='UPDATE  `user_login_details` SET `status` = "'.ENABLE.'" WHERE `user_login_details`.`vertical_id`="'.VERTICAL_ID.'" and `user_login_details`.`id` ='.$s->value('R_USER_ID');
	$db->query_silent($sql);	

    
	$sql="SELECT * FROM `user_login_details` WHERE  `vertical_id`='".VERTICAL_ID."' and`id` =".$s->value('R_USER_ID');
	$user_data=$db->fetch_array($db->query_silent($sql));
    $s->set('USER_LOGIN',"true");
			 
			 $s->set('USER_TYPE',$user_data['type']);
			 
			 if($user_data['type']=="R")
				{
					$s->set('R_USER_ID',$user_data['id']);
					
					$s->set('R_USER_NAME',$user_data['name']);
					
					$s->set('R_USER_LOGIN_ID',$user_data['login_id']);
					
					//header('location:recruiters-dashboard.php');
				}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
       <?php echo $get_template->process('global_header.php')?>

  <div class="canten">
  
    <div class="center_in">
    <div class="select_area">
        <div class="select_11cl">Recruiter Registration </div>
        <div class="select_22cl"> Recruiter Profile </div>
        <!--<div class="select_33cl">Register Subscriptions	 </div>
        <div class="select_44cl " >Register Alert-levels	</div>-->
        <div class="select_33cl">Register Alert-levels </div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl" >
      
        <div class="form_area2">
          <div class="row2">
          
         <div class="post_cl">
        <h1>Congratulations!<span> Your're now registered.</span></h1>
        <p>Post a job to get proposals and hire Candidate on Skillsapien </p>
        <div align="center" class="pos_bucl" ><img src="images/post_job_buttons.gif" border="0" onclick="javascript:window.location='post-job-requirements.php'" />  </div>
		
         </div>
		 
		 <div class="buttonSet"><div class="inputButton">
				<a href="skills.php">Browse Skills</a>
			</div>
 			<!--<div class="inputButton">
				<a href="#">Browse jobs</a>
			</div>-->
			<div class="inputButton">
				<a href="list-job-requirements.php">My Job List</a>
			</div>
 			<div class="inputButton">
				<a href="recruiters-dashboard.php">My Details</a>
			</div></div><br />
          <p><a href="about-us.php">Learn more</a> about using skillsapien.</p>
         <p><a href="browse-skill-profiles.php">Search</a> and hire Candidates.</p>
            <div class="clear"></div>
          </div>
          <br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
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
<?php echo $get_template->process('global_footer.php')?>

</body>
</html>
