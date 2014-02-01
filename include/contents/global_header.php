<?php
global $s;

 $uuid=$s->value('USER_ID');
if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
			  }
	 
?><div class="header-top">
    <div class="header">
      <div class="logo"><a href="index.php"><!--<img src="images/logo.png" alt="" border="0" />--><img src="images/sapien_logo.png" alt="" border="0"  height="75px"/></a></div>
      <?php
    if($s->value('USER_LOGIN')!="true" && $s->value('R_FORM')<=0)
	  {
	  ?>
      <form method="post" action="">
      <div class="header-right">
        <div class="search_box">
          <div class="login">Logins </div>
          <div class="login-input-bg">
            <input type="text" value="Email  Id" class="input" onblur="if(this.value=='') this.value='Email  Id'"

 onfocus="if(this.value=='Email  Id') this.value=''" name="get_loginId" id="get_loginId" />
          </div>
          <div class="login-input-bg2">
            <input type="password" value="password"  class="input" onblur="if(this.value=='') this.value='password'"

 onfocus="if(this.value=='password') this.value=''"   name="get_h_password" id="get_h_password" />
          </div>
          <div class="button">
            <input name="data" type="submit"   value=""  class="input_btn" />
            <input type="hidden" id="login" name="login" value="login" />
          </div>
          <!-- <div class="betaImg"><img src="images/betaImg.jpg" alt=""  /></div>-->
          <div class="clear"></div>
        </div>
      </div>
       </form> <?php
	  }
	  ?>
   
    </div>
    <div class="navi_bg">
      <div id="navibar">
        <ul>
        <?php
			 $home="index.php";
			 $general_browsing="browse-skill-profiles.php";

     if($s->value('USER_LOGIN')=="true")
	 {
	   switch(trim($s->value('USER_TYPE')))
	   {
	   		case "R":
			$home="recruiters-dashboard.php";
			$general_browsing="browse-skill-profiles.php";
  			break;
			case "C":
			$home="candidate-dashboard.php";
			$general_browsing="browse-skill-profiles.php";
  			break;
			
  	   }
	 } 
		?>
          <li ><a href="<?php echo $home?>">Home </a></li>
          
         <?php
		 
		 
		 if($s->is_set('R_USER_ID')==true || $s->is_set('USER_ID')==false)
		 {?> <li><img src="images/menu_line.gif" alt="" /></li><li><!--<a href="skills.php">Browse  Skills </a>--><a href="browse-skills.php">Browse  Skills </a></li>
         
		 <?php }
		 ?> 
         <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="browse-jobs.php">Browse Jobs </a></li>
          
          
          
          
          <?php
           if($s->value('USER_LOGIN')=="true")
		  {
		  	///Show when recruiter is logged in
			/*  <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="list-review-made.php">Review Made</a></li>*/ 
			if($s->is_set('R_USER_ID')==true){
		  	?>
          <li><img src="images/menu_line.gif" alt="" /></li>
         <?php 
		 $bid_query="select * from bid where bidderid='".$user_id."'";
         $bid_result=mysql_query($bid_query);
         $bids=mysql_num_rows($bid_result);
		 ?>
          <li><a href="bid_list.php">View My Bids(<?php echo $bids; ?>)</a></li>
        <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="list-job-requirements.php">View My Job List </a></li>
          <!--<li><a href="job_list.php">View My Job List </a></li>-->
          <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="post-job-requirements.php">Post a Job</a></li>
         
           <?php
		   }
		   //Show when condidate is logged in
		   if($s->is_set('USER_ID')==true){
		  	?>
            <!--<li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="browse-jobs.php">Browse Jobs </a></li>-->
         <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="skills_list.php">Browse Skills </a></li>
            <li><img src="images/menu_line.gif" alt="" /></li>
         <li><a href="update_skill.php"> Update My Profile/Skill </a></li>
         <li><img src="images/menu_line.gif" alt="" /></li>
         <?php 
		 $bid_query="select * from bid where jobid='".$user_id."'";
         $bid_result=mysql_query($bid_query);
         $bids=mysql_num_rows($bid_result);
		 ?>
          <li><a href="bid_list.php">View My Bids(<?php echo $bids; ?>)</a></li>
           <?php
		   }
		   ?>
           <li><img src="images/menu_line.gif" alt="" /></li>
           <!--<li><a href="change-password.php">Change Password</a></li>-->
           <li><a href="update_account.php">Update My Account</a></li>
		    <li><img src="images/menu_line.gif" alt="" /></li>
          <!-- <li><a href="message.php">Message Board</a></li>-->
		  <li><a href="msg.php">My Messages </a></li>
          <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="logout.php">Logout</a></li>
            <li><a href="beta-release.php"><span style=color:#FFAA00;font-weight:bold;font-size:150%;position:relative;left:440px">- Beta Release - </span></a></li>
		  <!-- End VJ Changes: 29/1/2012 -->
          
		  <?php }
		  else
		  {?>
		  
		  <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="about-us.php">About us </a></li>
        
		  <?php }
		  ?>
        </ul>
      </div>
    </div>
  </div>