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
<div id="outer">
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
  <?php  if($s->value('R_USER_ID')>0) 
		  { ?>
    
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
      </div>
      <div class="search-layout-right">
      <h2 class="messages-text">Sent Box</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a><p class="refresh-text">Delete entire message thread</p></span>
         <div class="clear"></div>
          </div>
           <form id="form1" name="form1" method="post" action="paypal.php" enctype="multipart/form-data">
        
          <p>
           <?php 		 
		  $iid=$_REQUEST['id'];
	  $sel1="select * from recruiter_interview where id='$iid'";
		  $result1=mysql_query($sel1);
		  $row1=mysql_fetch_array($result1);
		 
	     $ids=$row1['id'];
	     $user_ids=$row1['user_id'];
	      $usernames=$row1['name'];
		    $countries_names=$row1['countries_name'];
			  $dates=$row1['date'];
			    $reply=$row1['option'];
		 
	   ?><br/><br/>  <div class="employer-main">
          <?php if($reply!=""){ ?><p style="text-align:center;color:red;"><span class="emp-text">Sent Massage</span></p><br /> 
	   
	   <p><span class="emp-text">Recuiter Email : </span><?php echo $row1['primary_email'];?>.</p><br />
             <p><span class="emp-text">Subject : </span><?php echo $row1['subject'];?>.</p><br />
             <p><span class="emp-text">Massage : </span><?php echo $row1['massage'];?>.</p><br />
	   
	   
	   
	   <?php } ?>
          <div class="clear"></div>
         </div> </form>

          <div class="employer-main bottom-border"></div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    
     <? }else {
	 
	 ?> 
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
      <h2 class="messages-text">Sent Box</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a><p class="refresh-text">Delete entire message thread</p></span>
         <div class="clear"></div>
          </div>
           <form id="form1" name="form1" method="post" action="paypal.php" enctype="multipart/form-data">
        
          <p>
           <?php 		 
		    $iid=$_REQUEST['id'];
	   $sel="select * from candidate_interview where id='$iid'";
		  $result=mysql_query($sel);
		  $row=mysql_fetch_array($result);
	
	     $ids=$row['id'];
	     $user_ids=$row['user_id'];
	      $usernames=$row['name'];
		    $countries_names=$row['countries_name'];
			  $dates=$row['date'];
			  $reply=$row['option'];
		 
	   ?><br/><br/>  <div class="employer-main">
       <?php if($reply!=""){ ?><p style="text-align:center;color:red;"><span class="emp-text">Sent Massage</span></p><br /> 
	   
	   <p><span class="emp-text">Candidate Email : </span><?php echo $row['email'];?>.</p><br />
             <p><span class="emp-text">Subject : </span><?php echo $row['subject'];?>.</p><br />
             <p><span class="emp-text">Massage : </span><?php echo $row['massage'];?>.</p><br />
	   
	   
	   
	   <?php }?>
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

<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
