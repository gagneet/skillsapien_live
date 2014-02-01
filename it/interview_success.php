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
		  $user_ids=$_REQUEST['user_id'];	  
		 $id=$_REQUEST['id'];
		
		
	   
	   if(isset($_REQUEST['action'])) 
	   {
	   if($_REQUEST['action']=="done") {
	  $uuid=$_REQUEST['uuid'];
	  $ins="UPDATE `interview_success_details` SET status='1' WHERE user_id='".$uuid."' vertical_id='".VERTICAL_ID."'";
 mysql_query($ins);
 echo "<script>window.open('http://182.50.141.145/applications/skillsepian_new/interview_success.php?bid=bid','_self')</script>";
} else if($_REQUEST['action']=="notdone")
{
 $uuid=$_REQUEST['uuid'];
$insert="UPDATE `interview_success_details` SET status='2' WHERE user_id='".$uuid."'vertical_id='".VERTICAL_ID."'";
 mysql_query($insert);
 
echo "<script>window.open('http://182.50.141.145/applications/skillsepian_new/interview_success.php?bid=bid','_self')</script>";
}else if($_REQUEST['action']=="complete")
{
 $uuid=$_REQUEST['uuid'];
$insert="INSERT INTO `interview_success_details` (
`id` ,
`user_id` ,
`status` ,
`date` ,
`interview_complete` ,
`recruiter_id`,
`vertical_id`
)
VALUES (
NULL , '".$uuid."', '0', NOW(), '1', '".$user_id."', '".VERTICAL_ID."')";
 mysql_query($insert);
echo "<script>window.open('http://182.50.141.145/applications/skillsepian_new/interview_success.php?bid=bid','_self')</script>";
}}
?>	 		  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<?php echo $get_template->process('html_header.php')?>
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
    <!-- <li><a href="msg.php?post=post" onclick="javascript:form1.submit();">POST JOB</a> <input type="hidden" name="post" id="post" value="post" /></form></li>-->
     <li><a href="msg.php?bid=bid" onclick="javascript:form2.submit();" >BIDD JOB</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
     <li><a href="send_msg.php?bid=bid" onclick="javascript:form2.submit();">Sent Message</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
     </ul>
     <div class="clear"></div>
     </div>
      </div>
      </div>
      <div class="search-layout-right">
      <h2 class="messages-text">Interview Action</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a></span>
         <div class="clear"></div>
          </div>
           <form id="form1" name="form1" method="post">
        
          <p>
               <?php 		 
	   $sel="select * from bid where status='accept' and bidderid='$user_id' and `vertical_id`='".VERTICAL_ID."'";
		  $result=mysql_query($sel);
		  while($row=mysql_fetch_array($result)) { 
		    $jobids=$row['jobid'];
		  
		  
		      $fetch="select * from profiles where user_id='".$jobids."' and `vertical_id`='".VERTICAL_ID."'";
        $fetch_result=mysql_query($fetch);
        $fetch_row=mysql_fetch_array($fetch_result);
		
		 $userid=$fetch_row["user_id"]; 
		 $username=$fetch_row["username"]; 
        $emails=$fetch_row["primary_email"]; 
		 
	   ?>
	  <br/><br/>  <div class="employer-main">
       
	    <p><span class="emp-text">Candidate Name: </span><?php echo $username;?> &nbsp;&nbsp; <span class="emp-text"> Email Id : </span><?php echo $emails;?><br/>&nbsp;&nbsp;
        <?php
		 $select1="select * from interview_success_details where user_id='$userid' and interview_complete='1' and recruiter_id='".$user_id."' and `vertical_id`='".VERTICAL_ID."'";
		$record1=mysql_query($select1);
		$num1=mysql_num_rows($record1);
		$interview_complete=$num1['interview_complete'];
		if($num1==0) { ?>
          <a href="interview_success.php?bid=bid&action=complete&uuid=<?php echo $userid;?>">Interview complete</a>
		<?php }else{
		
       $select="select * from interview_success_details where user_id='$userid' and status='0' and recruiter_id='".$user_id."' and `vertical_id`='".VERTICAL_ID."'";
		$record=mysql_query($select);
		$num=mysql_num_rows($record);
		if($num!="0")
		{ ?>
		 <a href="interview_success.php?bid=bid&action=done&uuid=<?php echo $userid;?>">Placement Accepted</a> | <a href="interview_success.php?bid=bid&action=notdone&uuid=<?php echo $userid;?>">Placement Rejected</a>
		<?php }else{  }} ?>
        </p>
	  
	  
          <div class="clear"></div>
         </div> <?php }?>
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

<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
