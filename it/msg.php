<?php
include_once('init.php');
Is_valid_uesr();

 $uuid=$s->value('USER_ID');
if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  if($s->value('R_USER_ID')>0)
			  {
				$user_id=$s->value('R_USER_ID');
			  }

 $user_id;
//paging 
   if($s->value('R_USER_ID')>0)
			{ 
	  $select="select * from bid where job_poster_profile_id='$user_id' and status='accept' and `vertical_id`='".VERTICAL_ID."'";
	  $record=mysql_query($select);
	  $num=mysql_num_rows($record);
	  } else {
	  $select="select * from bid where jobid='$user_id' and `vertical_id`='".VERTICAL_ID."'";
	  $record=mysql_query($select);
	  $num=mysql_num_rows($record);
	  }
	  
	  
	 $fetch="select * from profiles where user_id='".$user_id."' and `vertical_id`='".VERTICAL_ID."'";
        $fetch_result=mysql_query($fetch);
        $fetch_row=mysql_fetch_array($fetch_result);
        $namesss=$fetch_row["username"]; 
			   
     

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inbox for <?php echo $namesss ; ?> </title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<?php echo $get_template->process('html_header.php')?>
<script type="text/javascript">
function selectToggle(toggle, form) {
     var myForm = document.forms[form];
     for( var i=0; i < myForm.length; i++ ) { 
          if(toggle) {
               myForm.elements[i].checked = "checked";
          } 
          else {
               myForm.elements[i].checked = "";
          }
     }
}
</script>


</head>
<body>
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      
      
      
      
      
      
      <div class="search-left-sec">
      
      <h2 class="messages-text">Messges<span class="question-mark-img"><img src="images/question-mark.png" alt="" /></span></h2>
      
      
     <div class="filters"> 
     <div class="messages-inner">
     
     <ul>
    <li><a class="activemessages" href="inbox_msg.php" onclick="javascript:form2.submit();">Inbox</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
   <!--  <li><a href="msg.php?post=post" onclick="javascript:form1.submit();">POST JOB</a> <input type="hidden" name="post" id="post" value="post" /></form></li>-->
     <li><a href="msg.php?bid=bid" onclick="javascript:form2.submit();" >BIDD JOB</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
        <li><a href="send_msg.php?bid=bid" onclick="javascript:form2.submit();">Sent Message</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
     
     </ul>
     



     <div class="clear"></div>
     </div>
     
      </div>

<br/><br/>
<?php  if($s->value('R_USER_ID')>0)
			{ ?>
<div class="filters"> 
     <div class="messages-inner">
     <ul>
    <li><a class="activemessages" href="interview_success.php?bid=bid" onclick="javascript:form2.submit();">Interview Action</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
       </ul>
     <div class="clear"></div>
     </div>
     
      </div>

<?php }?>


      </div>
      
      
    
      <div class="search-layout-right">
      <h2 class="messages-text">Inbox 
	 
		   
		   <span class="displaying-text">Displaying1-20 of <?php echo $num; ?></span></h2>
		   
		   <div class="post-button-main">
		    <div class="post-button">
         
		   
		   </div>
	  
	  <div class="post-button"></div>
		   </div>
      <div class="select-all-main">
          <div class="select-inner">
          <form name="theForm">
         <p class="selec-text"><font color="#000000">Select:</font> <span class="all-text"><a href="javascript:selectToggle(true, 'theForm');"><font color="#FFFFFF">All</font></a></span> | <a href="javascript:selectToggle(false, 'theForm');"><font color="#FFFFFF">None</font></a></p><span><input name="" type="image" src="images/delete.png"  class="delete-button"/></span><span><input name="" type="image" src="images/mark-as-read.png"  class="delete-button"/></span>
         <div class="clear"></div>
        </div>
          
    <? /********************************************************post msg start***************************************************************************************/ ?>      
            <? 
			if($_REQUEST['bid']=="post")
		   {   
		   ?>
           <!--for candidate post start-->
		   
		   <!--for candidate post end-->
		   <?php 
		  $sel=mysql_query("select * from bid where job_poster_profile_id='$user_id' and `vertical_id`='".VERTICAL_ID."'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	  $jobid=$rowsel['jobid'];
	  $bidderuser=$rowsel['bidderid'];
	  $bidid=$rowsel['id'];
		  ?>
          <div class="employer-main">
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]"  type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 <?php 
		   $skillquery="select * from skills_profiles where user_id='$jobid' and `vertical_id`='".VERTICAL_ID."'"; 
	//	       $seljob=mysql_query("select * from post_job where id='$jobid'");
		       $seljob=mysql_query($skillquery);
		       $rowseljob=mysql_fetch_array($seljob); 
		 echo $rowseljob['skills_profile'] ;   ?><br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 $selbidder=mysql_query("select * from user_login_details where id='$jobid' and `vertical_id`='".VERTICAL_ID."'");
			 //$selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" > <!--Employer ID-->Skill ID:<? echo $rowselbidder['id'] ; ?></font> 
		  <? } else { echo "Skill ID: ".$rowselbidder['id'] ; } ?>
           </p>
<div class="clear"></div>
          </div>
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		
          <div class="clear"></div>
         </div>
		   <? }  } ?>
<? /********************************************************post message end ***************************************************************************************/ ?>  		   
           
   <? /********************************************************for candidate start ***************************************************************************************/ ?>              
           <?php /*?><? 
			if($_REQUEST['bid']!="bid")
		   {
		  
		  $sel=mysql_query("select * from bid where jobid='$user_id'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	  $jobid=$rowsel['jobid'];
	  $bidderuser=$rowsel['bidderid'];
	  $bidid=$rowsel['id'];
		  ?>
          <div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 A new job has awarded to you<br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 $selbidder=mysql_query("select * from user_login_details where id='$jobid'");
			 //$selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" >Bidder ID:<? echo $bidderuser ; ?></font> 
		  <? } else { echo "Bidder ID: ".$bidderuser ; }  ?>
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		  
		 
		  
		
          <div class="clear"></div>
         </div>
		   <? } }  ?><?php */?>
   <? /********************************************************for candidate end ***************************************************************************************/ ?>              
   
   
           
		   <?php /*?><? 
			if($_REQUEST['bid']!="bid")
		   {
		   ?>
		   
		   <?php 
		  $sel=mysql_query("select * from bid where job_poster_profile_id='$user_id'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	echo  $jobid=$rowsel['jobid'];
	echo	  $bidderuser=$rowsel['bidderid'];
	echo  $bidid=$rowsel['id'];
		  ?>
          <div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 <?php   
		       $seljob=mysql_query("select * from post_job where id='$jobid'");
		       $rowseljob=mysql_fetch_array($seljob); 
		 echo $rowseljob['title'] ;   ?><br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 
			 $selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" > <!--Employer ID-->Bidder ID:<? echo $rowselbidder['id'] ; ?></font> 
		  <? } else { echo "Bidder ID: ".$rowselbidder['id'] ; } //echo "Employer ID: ".$rowselbidder['id'] ; } ?>
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		  
		 
		  
		
          <div class="clear"></div>
         </div>
		   <? } }  ?>
		   <?php */?>

<? /********************************************************bid msg start***************************************************************************************/ ?>      
		    <?  if($_REQUEST['bid']=="bid")
		   {
		   
		   ?>
<!--recruiter bid message start-->
           <?php 
		    if($s->value('R_USER_ID')>0)
			{  $user_id;
		  $sel=mysql_query("select * from bid where job_poster_profile_id='$user_id' and status='accept' and `vertical_id`='".VERTICAL_ID."'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	  $jobid=$rowsel['jobid'];
	  $bidderuser=$rowsel['bidderid'];
	  $bidid=$rowsel['id'];
		  ?>
          <div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 <?php 
		   $skillquery="select * from skills_profiles where user_id='$jobid' and `vertical_id`='".VERTICAL_ID."'"; 
	//	       $seljob=mysql_query("select * from post_job where id='$jobid'");
		       $seljob=mysql_query($skillquery);
		       $rowseljob=mysql_fetch_array($seljob); 
		 echo $rowseljob['skills_profile'] ;   ?><br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>&status=accept">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 $selbidder=mysql_query("select * from user_login_details where id='$jobid' and `vertical_id`='".VERTICAL_ID."'");
			 //$selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" > <!--Employer ID-->Skill ID:<? echo $rowselbidder['id'] ; ?></font> 
		  <? } else { echo "Skill ID: ".$rowselbidder['id'] ; } //echo "Employer ID: ".$rowselbidder['id'] ; } ?>
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		  
		 
		  
		
          <div class="clear"></div>
         </div>
		   <? } } ?>
<!--recruiter bid message end-->
           <!--candidate bid message start-->
           <?php 
		    if($s->value('USER_ID')>0)
			{
			 $sel=mysql_query("select * from bid where jobid='$user_id' and `vertical_id`='".VERTICAL_ID."' order by id desc");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	  $jobid=$rowsel['jobid'];
	  $bidderuser=$rowsel['bidderid'];
	  $bidid=$rowsel['id'];
		  ?>
          <div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 A new job has awarded to you<br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 $selbidder=mysql_query("select * from user_login_details where id='$jobid' and `vertical_id`='".VERTICAL_ID."'");
			 //$selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" >Bidder ID:<? echo $bidderuser ; ?></font> 
		  <? } else { echo "Bidder ID: ".$bidderuser ; }  ?>
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		  
		 
		  
		
          <div class="clear"></div>
         </div>
		   <? }  }?>
<!--candidate bid message end--> 

<!--recruiter bid message start-->           
		   <?php /*?><?php 
		   $sel=mysql_query("select * from bid where bidderid='$user_id'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
		  $jobid=$rowsel['jobid'];
		  $jobposter=$rowsel['job_poster_profile_id'] ;
		  ?>
          <div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text"><?php  $seljob=mysql_query("select * from post_job where id='$jobid'");
		 $rowseljob=mysql_fetch_array($seljob); echo $rowseljob['title'] ;  ?><br />
          <a  class="all" href="msg_details.php?poster=<?=$jobposter?>&jobid=<?=$jobid?>"">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 
			 $selbidder=mysql_query("select * from user_login_details where id='$jobposter'");
		 $rowselbidder=mysql_fetch_array($selbidder);
		 
		 $selmsg=mysql_query("select * from message where jobposter='$jobposter' and jobbidder='$user_id' and jobid='$jobid' order by id desc limit 0,1");
		  $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='0') { ?>	 
		 
		  <font color="#FF0000">Employer ID: <? echo $rowselbidder['id'] ; ?></font>
		  <?
			 }
			 else {
		 echo "Employer ID :".$rowselbidder['id'] ; } ?> 
			 
			
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 
		  
		 
		  
		
          <div class="clear"></div>
         </div>
		   <? }?><?php */?>
          <?php 
		   $sel=mysql_query("select * from bid where jobid='$user_id' and `vertical_id`='".VERTICAL_ID."'");
		  while($rowsel=mysql_fetch_array($sel))
		  {
	  $jobid=$rowsel['jobid'];
	  $bidderuser=$rowsel['bidderid'];
	  $bidid=$rowsel['id'];
		  ?>
          <?php /*?><div class="employer-main">
		
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]" type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
		 A new job has awarded to you<br />
          <a  class="all" href="msg_details.php?bidderid=<?=$bidderuser?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text"><?php  
			 $selbidder=mysql_query("select * from user_login_details where id='$jobid'");
			 //$selbidder=mysql_query("select * from user_login_details where id='$bidderuser'");
		 $rowselbidder=mysql_fetch_array($selbidder); 
		 
		 $selmsg=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$bidderuser' and jobid='$jobid' order by id desc limit 0,1");
		 $rowcountmsg=mysql_fetch_array($selmsg);
		 $msgst=$rowcountmsg['msgstatus'];
		if($msgst=='1') { ?>
		  <font  color="#009900" >Bidder ID:<? echo $bidderuser ; ?></font> 
		  <? } else { echo "Bidder ID: ".$bidderuser ; }  ?>
		  
		  
           </p>
<div class="clear"></div>
          </div>
          
          <div class="checkbox-date"><? echo  $rowsel['bid_date']  ?><div class="clear"></div>
          </div> 		
          <div class="clear"></div>
         </div><?php */?>
		   <? } 
		  ?> 
           <?php }  ?>
		
<? /********************************************************bid msg end***************************************************************************************/ ?>
</form>
<div class="clear"></div>
</div>
      
       
      
      
        
        
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

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
