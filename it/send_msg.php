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
      <h2 class="messages-text">Sent Message
	 
		   
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
           <?php 
		   $sel1="select * from recruiter_interview where `option`!=''";   // where candidate_id='$user_id'";
		  $result1=mysql_query($sel1);
		  while($row1=mysql_fetch_array($result1))
		  {
	        $ids1=$row1['id'];
	        $user_ids1=$row1['user_id'];
	       $usernames1=$row1['username'];
		     $emails=$row1['primary_email'];
		   $subjects=$row1['subject'];
		   $dates1=$row1['date'];
		     $reply=$row1['option'];
		  ?>
  
          <div class="employer-main">
		   
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]"  type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
	  Email ID : <?php echo $emails; ?> &nbsp;<span style="color:red;"></span><br />
          <a  class="all" href="send_msg_details.php?user_id=<?php echo $user_ids1; ?>&id=<?php echo $ids1; ?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text">
        Subject: <?php echo $subjects; ?>
           </p>
<div class="clear"></div>
          </div>
          <div class="checkbox-date">Date : <?php echo $dates1; ?><div class="clear"></div>
          </div> 
		
          <div class="clear"></div>
         </div>
		<?php } ?>
       
		  
          
		  
</form>
<div class="clear"></div>
</div>
      
       
      
      
        
        
      </div>
      <div class="clear"></div>
    </div>
     <?php  } else { ?>
	 <div class="center_in">      
      <div class="search-left-sec">
      
      <h2 class="messages-text">Messges<span class="question-mark-img"><img src="images/question-mark.png" alt="" /></span></h2>
      
      
     <div class="filters"> 
     <div class="messages-inner">
     
     <ul>
     <li><a class="activemessages" href="inbox_msg.php" onclick="javascript:form2.submit();">Inbox</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
   <!--  <li><a href="msg.php?post=post" onclick="javascript:form1.submit();">POST JOB</a> <input type="hidden" name="post" id="post" value="post" /></form></li>-->
     <li><a href="msg.php?bid=bid" onclick="javascript:form2.submit();">BIDD JOB</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
     <li><a href="send_msg.php?bid=bid" onclick="javascript:form2.submit();">Sent Message</a><input type="hidden" name="bid" id="bid" value="bid" /></form></li>
    
     
     </ul>
     <div class="clear"></div>
     </div>
      </div>
      </div>
      <div class="search-layout-right">
      <h2 class="messages-text">Sent Message
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
     <?php 
	  $sel="select * from candidate_interview where `option`!=''";  // where recruiter_id='$user_id'";
		  $result=mysql_query($sel);
		  while($row=mysql_fetch_array($result))
		  {
	     $ids=$row['id'];
	     $user_ids=$row['user_id'];
	      $emails=$row['email'];
		    $subjects=$row['subject'];		   
			  $dates=$row['date'];
			  $reply=$row['option'];
		  ?>
          <div class="employer-main">
          <div class="employer-id"><p class="checkbox-enployer"> <input name="answers[]"  type="checkbox" value=""  class="checkbox-enployer"/></p>
         <p class="checkbox-enployer-text">
	 Email ID : <?php echo $emails; ?><br />
          <a  class="all" href="send_msg_details.php?user_id=<?php echo $user_ids; ?>&id=<?php echo $ids; ?>">View</a> | <a class="all" href="#">Delete</a></p>
<div class="clear"></div>
          </div>
          <div class="employer-id">
         <p class="checkbox-enployer-text">
        Subject: <?php echo $subjects; ?>
           </p>
<div class="clear"></div>
          </div>
          <div class="checkbox-date">Date : <?php echo $dates; ?><div class="clear"></div>
          </div> 
		
          <div class="clear"></div>
         </div>
       <?php } ?>
</form>
<div class="clear"></div>
</div>
      </div>
      <div class="clear"></div>
    </div>
	 
	 
	 
	 
	 
	 
	 
<?php  } ?>  
     
     
     
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
