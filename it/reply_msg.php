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
		$user_ids=$_REQUEST['user_id'];	  
		$id=$_REQUEST['id'];	  
			  
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
  <?php  if($s->value('R_USER_ID')>0) 
		  {
		  
	 if(isset($_REQUEST['submit'])){

     $names=$_REQUEST['name'];
	    $email=$_REQUEST['email'];
	     $subjects=$_REQUEST['subject'];
	   $comment=$_REQUEST['comments'];
	   
	   $sel1="select * from recruiter_interview where user_id='$user_ids'";
		  $result1=mysql_query($sel1);
		 $row5=mysql_fetch_array($result1);
	     
	      $names5=$row5['username'];
	   
	   
	   $ins="INSERT INTO `recruiter_interview` (
`id` ,
`user_id` ,
`username` ,
`primary_email` ,
`status` ,
`date` ,
`candidate_id` ,
`option` ,
`subject` ,
`massage`
)
VALUES (
NULL , '".$user_id."','".$names5."', '".$email."', '0', Now(), '".$user_ids."', 'reply', '".$subjects."', '".$comment."')";
mysql_query($ins);
	 
	 $to="ajit@w3csolutions.com";
	 $subject .="Reply Massage";
      $message .='
	  <table width="833" border="1" bgcolor="#66CCCC">
	   <tr>
		<td height="43" colspan="2" bgcolor="#FFFFFF"><strong>Welcome</strong></td>
	  </tr>
	     <tr>
		<td><font style="color:#FFFFFF"><strong>E-mail :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$email.'</font></td>
	  </tr>
	
	     <tr>
		<td><font style="color:#FFFFFF"><strong> Subject :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$subjects.'</font></td>
	  </tr>
	  <tr>
		<td><font style="color:#FFFFFF"><strong>Comment :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$comment.'</font></td>
	  </tr>
	  </table>';
   					
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From:'.$_REQUEST['email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
					
					if(@mail($to,$subject,$message,$headers)){
          //header("location:Subscrib_email.php?msg=Your Email has been send successfully.");
		  $msg = "Your email has been send successfully.";
		
	   }else{
	      //header("location:Subscrib_email.php?msg=Your Email doesn't send.");
		  $msg = "Your email doesn't send.";
	   }
}
?><div class="center_in">      
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
      <h2 class="messages-text">Inbox</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a><p class="refresh-text">Delete entire message thread</p></span>
         <div class="clear"></div>
          </div>
          
        <?php 		 
	   $sel="select * from candidate_interview where user_id='$user_ids'";
		  $result=mysql_query($sel);
		 $row=mysql_fetch_array($result);
	     $ids=$row['id'];
	     $user_ids=$row['user_id'];
	      $names=$row['name'];
          $emails=$row['email'];
       
	   
	   
	
	   ?>
          <p>
          <br/><br/>  <div class="employer-main">
          <form id="frm" name="frm" method="post">
            <p><span class="emp-text"> Name : <input type="text" name="name" size="40" value="<?php echo $names; ?>"/></span></p><br />
              <p><span class="emp-text"> Email Id : <input type="text" name="email" size="40" value="<?php echo $emails; ?>"/></span></p><br />
              <p><span class="emp-text"> Subject : <input type="text" name="subject" size="40"/></span></p><br />
              <p><span class="emp-text"> Massage : <textarea name="comments" cols="20" rows="10" style="width:375px;"></textarea></span></p><br />
               <p><span class="emp-text"><input type="submit" name="submit" value="Send" /></span></p><br />
       
          <div class="clear"></div>
         </div>
     
          </form>

          <div class="employer-main bottom-border"></div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
     <? }else {
	 
	 
	   if(isset($_REQUEST['submit'])){
        $names=$_REQUEST['name'];
	    $email=$_REQUEST['email'];
	     $subjects=$_REQUEST['subject'];
	   $comment=$_REQUEST['comments'];
	   
	   $sel1="select * from candidate_interview where user_id='$user_id'";
		  $result1=mysql_query($sel1);
		 $row5=mysql_fetch_array($result1);
	     
	      $names5=$row5['name'];
	   
	   
	   $ins="INSERT INTO `candidate_interview` (
`id` ,
`user_id` ,
`name` ,
`email` ,
`status` ,
`date` ,
`recruiter_id` ,
`option` ,
`subject` ,
`massage`
)
VALUES (
NULL , '".$user_id."', '".$names5."', '".$email."', '0', Now(), '".$user_ids."', 'reply', '".$subjects."', '".$comment."')";
mysql_query($ins);
	 
	 $to="ajit@w3csolutions.com";
	 $subject .="Reply Massage";
      $message .='
	  <table width="833" border="1" bgcolor="#66CCCC">
	   <tr>
		<td height="43" colspan="2" bgcolor="#FFFFFF"><strong>Welcome</strong></td>
	  </tr>
	     <tr>
		<td><font style="color:#FFFFFF"><strong>E-mail :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$email.'</font></td>
	  </tr>
	
	     <tr>
		<td><font style="color:#FFFFFF"><strong> Subject :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$subjects.'</font></td>
	  </tr>
	  <tr>
		<td><font style="color:#FFFFFF"><strong>Comment :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$comment.'</font></td>
	  </tr>
	  </table>';
   					
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From:'.$_REQUEST['email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
					
					if(@mail($to,$subject,$message,$headers)){
          //header("location:Subscrib_email.php?msg=Your Email has been send successfully.");
		  $msg = "Your email has been send successfully.";
		
	   }else{
	      //header("location:Subscrib_email.php?msg=Your Email doesn't send.");
		  $msg = "Your email doesn't send.";
	   }
}
	 
	 
	 
	
?>
	 
	 ?> <div class="center_in">      
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
      <h2 class="messages-text">Inbox</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a><p class="refresh-text">Delete entire message thread</p></span>
         <div class="clear"></div>
          </div>
         
        
          <p>
          <br/><br/>  <div class="employer-main">
             <?php 		 
	    $sel1="select * from recruiter_interview where user_id='$user_ids'";
		  $result1=mysql_query($sel1);
		  $row1=mysql_fetch_array($result1);
	     $ids=$row1['id'];
	     $user_ids=$row1['user_id'];
	      $usernames=$row1['username'];
		    $emailss=$row1['primary_email'];
			 ?>
         <form id="frm" name="frm" method="post">
           <p><span class="emp-text"> Name : <input type="text" name="name" size="40" value="<?php echo $usernames; ?>"/></span></p><br />
              <p><span class="emp-text"> Email Id : <input type="text" name="email" size="40" value="<?php echo $emailss; ?>"/></span></p><br />
              <p><span class="emp-text"> Subject : <input type="text" name="subject" size="40"/></span></p><br />
              <p><span class="emp-text"> Massage : <textarea name="comments" cols="20" rows="10" style="width:375px;"></textarea></span></p><br />
               <p><span class="emp-text"><input type="submit" name="submit" value="Send" /></span></p><br />
       
          <div class="clear"></div>
         </div>
     
          </form>
          <div class="employer-main bottom-border"></div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
	 
	 <?php 
       }
	  ?> 
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="canten">
  <div class="clear"></div>
</div>
</div>
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
