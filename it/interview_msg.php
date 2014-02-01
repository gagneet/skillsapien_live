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
       <?php if($reply!=""){ ?><p style="text-align:center;color:red;"><span class="emp-text">Reply Massage</span></p><br /> 
	   
	   <p><span class="emp-text">Candidate Name : </span><?php echo $row['name'];?>.</p><br />
             <p><span class="emp-text">Subject : </span><?php echo $row['subject'];?>.</p><br />
             <p><span class="emp-text">Massage : </span><?php echo $row['massage'];?>.</p><br />
	   
	   
	   
	   <?php }else{?>
           <p><span class="emp-text">Candidate Name : </span><?php echo $row['name'];?>.</p><br />
             <p><span class="emp-text">Email Id : </span><?php echo $row['email'];?>.</p><br />
             <p><span class="emp-text">Contact No. : </span><?php echo $row['primary_contact_no'];?>.</p><br />
           <p><span class="emp-text">City : </span><?php echo $row['city'];?>.</p><br />
          <p><span class="emp-text">Country : </span><?php echo $row['countries_name'];?>.</p><br />
          <p><span class="emp-text">Skills Profile : </span><?php echo $row['skills_profile'];?>.</p><br />
            <p><span class="emp-text">Skills Keywords : </span><?php echo $row['skill_keywords'];?>.</p><br />
          <p><span class="emp-text">Rate: </span><?php echo CURRENCY?><?php echo $row['gt_amount']?>/<?php echo $row['gt_time_period']?>.</p><br />
          <p><span class="emp-text">Profile Summary: </span><?php echo $row['profile_summary'];?>.</p><br /><br />
          <?php } ?>
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
	 
	 ?> <div class="center_in">      
      <div class="search-left-sec">      
      <h2 class="messages-text">Messges<span class="question-mark-img"><img src="images/question-mark.png" alt="" /></span></h2>      
     <div class="filters"> 
     <div class="messages-inner">
     <ul>
     <li><a class="activemessages" href="inbox_msg.php" onclick="javascript:form2.submit();">Inbox</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
    <!-- <li><a href="msg.php?post=post" onclick="javascript:form1.submit();">POST JOB</a> <input type="hidden" name="post" id="post" value="post" /></form></li>-->
     <li><a href="msg.php?bid=bid" onclick="javascript:form2.submit();" >BIDD JOB</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
        <li><a href="msg.php?bid=bid" onclick="javascript:form2.submit();">Sent Message</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
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
          <?php if($reply!=""){ ?><p style="text-align:center;color:red;"><span class="emp-text">Reply Massage</span></p><br /> 
	   
	   <p><span class="emp-text">Recuiter Name : </span><?php echo $row1['username'];?>.</p><br />
             <p><span class="emp-text">Subject : </span><?php echo $row1['subject'];?>.</p><br />
             <p><span class="emp-text">Massage : </span><?php echo $row1['massage'];?>.</p><br />
	   
	   
	   
	   <?php }else{?>
           <p><span class="emp-text">Recruiter Name : </span><?php echo $row1['username'];?>.</p><br />
             <p><span class="emp-text">Email Id : </span><?php echo $row1['primary_email'];?>.</p><br />
             <p><span class="emp-text">Company Name : </span><?php echo $row1['conpany_name'];?>.</p><br />
           <p><span class="emp-text">Company Registration Id : </span><?php echo $row1['conpany_reg_id'];?>.</p><br />
          <p><span class="emp-text">Company Registration Type : </span><?php echo $row1['conpany_reg_type'];?>.</p><br />
          <p><span class="emp-text">Company Details : </span><?php echo $row1['company_details'];?>.</p><br />
            <p><span class="emp-text">Contact No. : </span><?php echo $row1['company_phone'];?>.</p><br />
          <p><span class="emp-text">Country : </span><?php echo $row1['countries_name']?>.</p><br />
           <?php } ?>
          <div class="clear"></div>
         </div> </form>

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
