<?php
global $s;
 ?>
 
 
 
 
 <!-------------------------logo------------------------------------>
 
    <div class="header">    
    <div class="header-top" style="height:160px">
    
    
     <div class="logo"><a href="index.php"><img src="images/sapien_logo.png" alt="Skillsapien Logo" border="0" /></a></div>    
     
     
     
     
     
     
     
    <!---------------------search---------------------------> 
    
    <form method="post" action="">
      <div class="header-right">
        <div class="search_box">
		
        
        
        <!--  <div class="login">Login</div>
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
          </div>-->
          
          
<!--          <div class="betaImg"><img src="images/betaImg.jpg" alt=""  /></div>
-->          <div class="clear"></div>
        </div>
        
      </div>
      
       </form>
       
       
       
       
       
       
       
       
      
      
      
      
      
      
      
      
      
      
      
<!---------------Muenu button----------------   -->
      
       <div class="navi_bgindex">
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
          
        <li><img src="images/menu_line.gif" alt="" /></li><li><a href="skill.php">Browse  Skills </a></li>
         
		  <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="browse_job.php">Browse Jobs </a></li>
          <li><img src="images/menu_line.gif" alt="" /></li>
          <li><a href="browse-trends.php">Browse Trends* </a></li>
         <!-- <li><img src="images/menu_line.gif" alt="" /></li>-->
          <!--<li><a href="list-job-requirements.php"> My Job List </a></li>-->
          
          <?php
           if($s->value('USER_LOGIN')=="true")
		  {
		  	///Show when recruiter is logged in
			
			/*  <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="list-review-made.php">Review Made</a></li>*/ 
			if($s->is_set('R_USER_ID')==true){
		  	?>
          
        
          <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="post-job-requirements.php">Post a Job</a></li>
           <li><img src="images/menu_line.gif" alt="" /></li>
           <?php
		   }
		   //Show when condidate is logged in
		   if($s->is_set('USER_ID')==true){
		  	?>
            
         
           <?php
		   }
		   ?><li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="change-password.php">Change Password</a></li>
		    <li><img src="images/menu_line.gif" alt="" /></li>
          <!-- <li><a href="message.php">Message Board</a></li>-->
		  <li><a href="msg.php">Message Board</a></li>
          <li><img src="images/menu_line.gif" alt="" /></li>
           <li><a href="logout.php">Logout</a></li>
           <?php }
		  else
		  {?>
		  
		   <li><img src="images/menu_line.gif" alt="" /></li>
		  <li><a href="about-us.php">About Skillsapien </a></li>
           <li><img src="images/menu_line.gif" alt="" /></li>
          <!-- <li><a href="calendar.php">Calendar</a></li>-->
		  <li><a href="beta-release.php"><span style="color:#FFAA00; font-weight:bold; font-size:100%; position:relative; float:left;">- Beta Release - </span></a></li>
		  
		  <?php }
		  ?>
        </ul>
         </div>
      </div>     
     
    </div>
  </div>