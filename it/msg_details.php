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
 
$bidid=$_REQUEST['bidid'];
$jobposterid=$user_id;
$jobbidderid=$_REQUEST['bidderid'];
$poster=$_REQUEST['poster'];

 $jobid=$_REQUEST['jobid'];
  $jobid_sql="SELECT net_bidcost  from profiles  where user_id='".$jobbidderid."'";
   $result=$db->query_silent($jobid_sql);
   $data=$db->fetch_array($result);
   $netcost=$data['net_bidcost'];	 
 
$post_time=date('Y-m-d');
$post_t=date('H:i:s A');

//payment
if($_REQUEST['action']=='paid')
{

 $credit_sql="SELECT total_estimated_cost from bid where id='".$bidid."'";
  
 $credit_run=$db->query_silent($credit_sql);
 $credit_data=$db->fetch_array($credit_run);
 $daily_rate=$credit_data['total_estimated_cost'];	 

if($daily_rate<500)
{
$credit_rate=5;
}
else if( $daily_rate>500 and $daily_rate<750) {
$credit_rate=6;
}
else if($daily_rate>750 and $daily_rate<1000) {
$credit_rate=7;
}	 
else if($daily_rate>1000 and $daily_rate<1250) {
$credit_rate=8;
}	 
else if($daily_rate>1250 and $daily_rate<1500) {
$credit_rate=9;
}	 
else if($daily_rate>1500 and $daily_rate<2000) {
$credit_rate=10;
}	 
else if($daily_rate>2000 and $daily_rate<3000) {
$credit_rate=15;
}	 
else if($daily_rate>3000 and $daily_rate<4000) {
$credit_rate=20;
}	 
else if($daily_rate>4000 and $daily_rate<5000) {
$credit_rate=25;
}
else if($daily_rate>5000) {
$credit_rate=30;
}	 
 
 
 $credit_query="select net_bidcost from profiles where user_id='".$jobbidderid."'"; 
 $credit_result=$db->query_silent($credit_query);
 $credit=$db->fetch_array($credit_result);

 if($credit['net_bidcost']<$credit_rate)
 {
  $msg="your payment has not done because you have not sufficient credit. Please buy the credits to proceed to interview the candidate. For payment please visit: http://www.skillsapien.com/update_account.php !";
  
  	  echo '<script type="text/javascript">
					<!--
					window.location = "buy_credit.php";
					//-->
					</script>';
 }
 else
 { 
      $bidcost=$credit['net_bidcost']-$credit_rate; 
      $payment_query="update profiles set net_bidcost='".$bidcost."' where user_id='".$jobbidderid."'"; 
     if(mysql_query($payment_query))
       {
        $result=$db->query_silent("select * from user_login_details where id='".$jobbidderid."' and `vertical_id`='".VERTICAL_ID."'");
        $row=$db->fetch_array($result);
 
//unlocking candidate details 
        $candidate_query="SELECT p.photo, p.username, p.primary_email, p.gender, p.birthdate, p.primary_contact_no, p.other_contact_no, p.city, p.state, p.postcode, p.country, sp.skills_profile, sp.skill_keywords, sp.profile_summary, r.gt_currency, r.gt_amount, r.gt_time_period, uld.id, uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$jobid."' and uld.vertical_id='".VERTICAL_ID."'";
	    $candidate_result=$db->query_silent($candidate_query);
		$candidate_info=$db->fetch_array($candidate_result);		
		$country_query="select countries_name from countries where countries_id='".$candidate_info['country']."'";
		$country_result=$db->query_silent($country_query);
		$country=$db->fetch_array($country_result);
//unlocking candidate details		
        $to = $row['login_id']; 
        $subject = "Candidate details";
		$body ='<table bgcolor=yellow width=80% style="color:black;">
                    <tr><td colspan=2><h1>Candidate Details are as follows:</h1></td></tr>
					<tr><td colspan=2><hr></td></tr>
                    <tr><td width=25%><b>Candidate Id</b>:</td><td width=25%>'.$candidate_info['id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Candidate Name</b>:</td><td width=25%>'.$candidate_info['username'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Email</b>:</td><td width=25%>'.$candidate_info['primary_email'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Contact No.</b>:</td><td width=25%>'.$candidate_info['primary_contact_no'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Other Contact No.</b>:</td><td width=25%>'.$candidate_info['other_contact_no'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>City</b>:</td><td width=25%>'.$candidate_info['city'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>State</b>:</td><td width=25%>'.$candidate_info['state'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Postcode</b>:</td><td width=25%>'.$candidate_info['postcode'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Country</b>:</td><td width=25%>'.$country['countries_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Profile Title</b>:</td><td width=25%>'.$candidate_info['skills_profile'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Skills</b>:</td><td width=25%>'.$candidate_info['skill_keywords'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
                    <tr><td width=25%><b>Rate</b>:</td><td width=25%>'.CURRENCY.''.$candidate_info['gt_amount'].''.$candidate_info['gt_time_period'].''.'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Profile Summary</b>:</td><td width=25%>'.$candidate_info['profile_summary'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
                    <tr><td colspan=2><b>Thanks & Regards</b>,<br>Candidate</td></tr>
                </table>';
				   $headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From:'.$candidate_info['primary_email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
					
      if(mail($to,$subject,$body,$headers))
	      { 
		  echo '<script type="text/javascript" language="javascript">alert("Payment has successfully done !")</script>';  
           $result1=$db->query_silent("select * from user_login_details where id='".$jobid."'");
           $row1=$db->fetch_array($result1);

//unlocking recruiter details
         $recruiter_query="SELECT p.photo, p.username, p.conpany_name, p.conpany_reg_id, p.conpany_reg_type, p.company_details, p.company_phone, p.profession_type, p.primary_email, p.gender, p.birthdate, p.primary_contact_no, p.other_contact_no, p.city, p.state, p.postcode, p.country, uld.id, uld.type  FROM  profiles as p, user_login_details as uld where uld.type='R' and uld.id=p.user_id and uld.id='".$jobbidderid."' and uld.vertical_id='".VERTICAL_ID."'";
	    $recruiter_result=$db->query_silent($recruiter_query);
		$recruiter_info=$db->fetch_array($recruiter_result);
		
		$country_query1="select countries_name from countries where countries_id='".$recruiter_info['country']."'";
		$country_result1=$db->query_silent($country_query1);
		$country1=$db->fetch_array($country_result1);
//unlocking recruiter details
          $to1 = $row1['login_id']; 
          $subject1 = "Recruiter Details";
          $body1 ='<table bgcolor=yellow width=80% style="color:black;">
                    <tr><td colspan=2><h1>Recruiter Details are as follows:</h1></td></tr>
					<tr><td colspan=2><hr></td></tr>
                    <tr><td width=25%><b>Recruiter Id</b>:</td><td width=25%>'.$recruiter_info['id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Recruiter Name</b>:</td><td width=25%>'.$recruiter_info['username'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Email</b>:</td><td width=25%>'.$recruiter_info['primary_email'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Comapany Name</b>:</td><td width=25%>'.$recruiter_info['conpany_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Registeration ID</b>:</td><td width=25%>'.$recruiter_info['conpany_reg_id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Registeration Type</b>:</td><td width=25%>'.$recruiter_info['conpany_reg_type'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Details</b>:</td><td width=25%>'.$recruiter_info['company_details'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Phone</b>:</td><td width=25%>'.$recruiter_info['company_phone'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Country</b>:</td><td width=25%>'.$country1['countries_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td colspan=2><b>Thanks & Regards</b>,<br>Recruiter</td></tr>
                </table>';
				    $headers1  = 'MIME-Version: 1.0' . "\r\n";
					$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers1 .= 'From:'.$recruiter_info['primary_email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
           mail($to1,$subject1,$body1,$headers1);
		  echo '<script type="text/javascript">
					<!--
					window.location = "buy_credit.php";
					//-->
					</script>';
          }
       }

   }

}
//payment

//accept bid 
if($_REQUEST['action']=='accept')
{
 $result=$db->query_silent("select * from user_login_details where id='".$jobbidderid."' and `vertical_id`='".VERTICAL_ID."'");
 $row=$db->fetch_array($result);
 
 $to = $row['login_id']; 
 $subject = "Bid Accept";
 
 $credit_sql="SELECT total_estimated_cost from bid where id='".$bidid."'";
 $credit_run=$db->query_silent($credit_sql);
 $credit_data=$db->fetch_array($credit_run);
 $daily_rate=$credit_data['total_estimated_cost'];	 

if($daily_rate<500)
{
$credit_rate=5;
}
else if( $daily_rate>500 and $daily_rate<750) {
$credit_rate=6;
}
else if($daily_rate>750 and $daily_rate<1000) {
$credit_rate=7;
}	 
else if($daily_rate>1000 and $daily_rate<1250) {
$credit_rate=8;
}	 
else if($daily_rate>1250 and $daily_rate<1500) {
$credit_rate=9;
}	 
else if($daily_rate>1500 and $daily_rate<2000) {
$credit_rate=10;
}	 
else if($daily_rate>2000 and $daily_rate<3000) {
$credit_rate=15;
}	 
else if($daily_rate>3000 and $daily_rate<4000) {
$credit_rate=20;
}	 
else if($daily_rate>4000 and $daily_rate<5000) {
$credit_rate=25;
}
else if($daily_rate>5000) {
$credit_rate=30;
}	 
 
 $credit_query="select net_bidcost from profiles where user_id='".$jobbidderid."'";
 $credit_result=$db->query_silent($credit_query);
 $credit=$db->fetch_array($credit_result);

 if($credit['net_bidcost']<$credit_rate)
 {
 $body ="Congratulations <Recruiter Name>!
Your bid of <$$$> per <time unit> on Candidate <Candidate ID> with Profile <Profile Name> was successful!

However, you do not currently have enough Skillsapien Credits to complete the transaction in order to interview this Candidate.

You can purchase or top-up your credits by clicking on the following link:
<http://182.50.141.145/applications/skillsepian_new/msg.php>
(Note: This transaction will consume <amount> Skillsapien Credits)

As you as you have completed the payment we will unlock the Candidate’s contact details.
Good luck and thanks for using Skillsapien!

Warm Regards,
The Skillsapien Team
<Date>";
 }
 else
 {
 $body = "Congratulations, your bid was accepted by the Candidate! You may now proceed to interview the candidate - contact details will be sent to you very shortly.";
 }
 
 $accept_query="update bid set status='accept' where id='".$bidid."'  ";
if($db->query_silent($accept_query))
{
 mail($to, $subject, $body);  
 echo '<script type="text/javascript" language="javascript">alert("The Bid has successfully accepted !")</script>';  
}
else
{
   echo '<script type="text/javascript" language="javascript">alert("The Bid has not successfully accepted !")</script>';
}
 
 
 

}
//accept bid 
 
//counter bid
if($_REQUEST['action']=='counter')
{
$result=$db->query_silent("select * from user_login_details where id='".$jobbidderid."' and `vertical_id`='".VERTICAL_ID."'");
$row=$db->fetch_array($result);
 
 $to = $row['login_id']; 
 $subject = "Bid Counter";
 $body = "Dear <Recruiter Name>,

Your bid of <$$$> per <time unit> on Candidate <Candidate ID> with Profile <Profile Name> was countered by the Candidate.

The Candidate’s counter bid is as follows:
<display details of the counter bid, including the countered rate/start-date, etc)

If you would like to accept this counter please click on the following link:
<http://182.50.141.145/applications/skillsepian_new/bid_list.php>

Once your acceptance has been confirmed by the Candidate, we will notify you immediately in order to complete the transaction and unlock their contact details!
Good luck and thanks for using Skillsapien!

Warm Regards,
The Skillsapien Team
<Date>";
 $counter_query="update bid set status='counter' where id='".$bidid."'  ";
if($db->query_silent($counter_query))
{
 mail($to, $subject, $body);  
 echo '<script type="text/javascript" language="javascript">alert("The Bid has been countered !")</script>';  
}

}
//counter bid

//Reject bid
if($_REQUEST['action']=='reject')
{
$result=$db->query_silent("select * from user_login_details where id='".$jobbidderid."' and `vertical_id`='".VERTICAL_ID."'");
$row=$db->fetch_array($result);
 
 $to = $row['login_id']; 
 $subject = "Bid Reject";
 $body = "Dear <Recruiter Name>,

Unfortunately your bid of <$$$> per <time unit> on Candidate <Candidate ID> with Profile <Profile Name> was rejected by the Candidate.

If you like, you can increase or revise your bid by clicking on the following link:
<http://182.50.141.145/applications/skillsepian_new/bid_list.php>

We will notify you as soon as the Candidate has responded to your revised bid.  Good luck and thanks for using Skillsapien!

Warm Regards,
The Skillsapien Team
<Date>";
 $reject_query="update bid set status='reject' where id='".$bidid."'  ";
if($db->query_silent($reject_query))
{
 mail($to, $subject, $body);  
 echo '<script type="text/javascript" language="javascript">alert("The Bid has has rejected !")</script>';  
}

}
//Reject bid


 
 function remove_numbers($string) {
  		$vowels = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", " ");
  		$string = str_replace($vowels, '', $string);
  		return $string;
  	}
	
	

$selcount=mysql_query("SELECT count( * ) AS msgcount FROM message  WHERE jobposter = '$poster' AND jobbidder = '$user_id' AND jobid = '$jobid'");
$rowcount=mysql_fetch_array($selcount);



if($_REQUEST['send']=="send")
{
$randno=rand(1111,44444);
 $upload=$_FILES['upload']['name'];
$uploadname=$randno.$upload;
$uploadtmp=$_FILES['upload']['tmp_name'];


$msg=$_REQUEST['msg'];
if($poster!='')
{
 $ins=mysql_query("insert into message set jobposter='$poster',jobbidder='$user_id',jobid='$jobid',message='$msg',posttime='$post_time',msgstatus='1',sender_id='$user_id',sendtime='$post_t',uploadfile='$uploadname'");
 
}
else

{
 $ins=mysql_query("insert into message set jobposter='$jobposterid',jobbidder='$jobbidderid',jobid='$jobid',message='$msg',posttime='$post_time',msgstatus='0',sender_id='$jobposterid',sendtime='$post_t',uploadfile='$uploadname'");

}

move_uploaded_file($_FILES['upload']['tmp_name'],"msgupload/".$uploadname);



}


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
      </div>
      <div class="search-layout-right">
      <h2 class="messages-text">Inbox</h2>
      <div class="select-all-main">
          <div class="select-inner">
         <span><a href="msg.php"><input name="" type="image" src="images/back-to-inbox.png"  class="delete-button"/></a><p class="refresh-text">Delete entire message thread</p></span>
         <div class="clear"></div>
          </div>
          
           <form id="form1" name="form1" method="post" action="paypal.php" enctype="multipart/form-data">
          <div class="employer-main">
          
          <p>
           <?php 
		  if($s->value('R_USER_ID')>0) 
		  {
		  $sql="SELECT  p.photo,p.primary_email,p.primary_contact_no,p.primary_address, p.username,p.city,p.country,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$jobid."' and uld.vertical_id='".VERTICAL_ID."'";
	  $run=$db->query_silent($sql);
	  $data=$db->fetch_array($run);
	  
	         $select10 ="select * from bid where id='$bidid' and `vertical_id`='".VERTICAL_ID."'";
			 $record10=mysql_query($select10);
			 $data10=mysql_fetch_array($record10);
			 $show_cinfo=$data10['show_cinfo'];
 
		  ?>
          <p><span class="emp-text">Profile Title: </span><?php echo $data['skills_profile'];?>.</p><br />
          <p><span class="emp-text">Skills: </span><?php echo $data['skill_keywords'];?>.</p><br />
          <p><span class="emp-text">Rate: </span><?php echo CURRENCY?><?php echo $data['gt_amount']?>/<?php echo $data['gt_time_period']?>.</p><br />
          <p><span class="emp-text">Profile Summary: </span><?php echo $data['profile_summary'];?>.</p><br /><br />
          
          <?php if($data10['show_cinfo']==1) {?>
            <p><span class="emp-text">User Name: </span><?php echo $data['username'];?>.</p><br />
             <p><span class="emp-text">Email Id: </span><?php echo $data['primary_email'];?>.</p><br />
             <p><span class="emp-text">Contact No.: </span><?php echo $data['primary_contact_no'];?>.</p><br />
            <p><span class="emp-text">Address: </span><?php echo $data['primary_address'];?>.</p><br />
              <p><span class="emp-text">City: </span><?php echo $data['city'];?>.</p><br />
             <?php  $countrys="select countries_name from countries where countries_id='".$data['country']."'";
		$coun_result=$db->query_silent($countrys);
		$country_name=$db->fetch_array($coun_result); ?>
             <p><span class="emp-text">Country: </span><?php echo $country_name['countries_name'];?>.</p><br />
            
          <? } ?>
          <?php if($netcost>0) { ?>
          <p><div align="center"><a href="cadidate_interview_details.php?bidderid=<?=$jobbidderid?>&jobid=<?=$jobid?>&bidid=<?=$bidid?>&action=icost"><img src="images/interviewbtn.gif" /></a></div><br />
          <? } else {?>
          <?php if($_REQUEST['status']=='accept') {?><p><div align="center"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>?<?php echo $_SERVER['QUERY_STRING'];?>&action=paid"><img src="images/pay-now-btn.gif" /></a></div></p><br /><br />
		  <?php } 
		   }?>
		  <?php 
		  } 
		  else {
		  $sql="SELECT * from bid where id='".$bidid."' and `vertical_id`='".VERTICAL_ID."'";
	  $run=$db->query_silent($sql);
	 $data=$db->fetch_array($run);
		  ?>
          <p><span class="emp-text">Bid Details: </span><?php echo $data['bid_details'];?>.</p><br />
          <p><span class="emp-text">Rate: </span><?php echo $data['total_estimated_cost']?>.</p><br />
          <p>
          <span class="emp-text">Proposal Status:</span>
          <span class="emp-text">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>?<?php echo $_SERVER['QUERY_STRING'];?>&action=accept"><img src="images/accept-btn.gif" /></a>&nbsp;&nbsp;
          <a href="<?php echo $_SERVER['REQUEST_URI'];?>&action=counter"><img src="images/counter-btn.gif" /></a>&nbsp;&nbsp;
          <a href="<?php echo $_SERVER['REQUEST_URI'];?>&action=reject"><img src="images/reject-btn.jpg" /></a>
          </span><?php echo $data['profile_summary'];?>.</p><br /><br />
		  <?php 
		  }
		  ?>
          </p>

<!--messaging system-->          
          <?php /*?><p class="emp-text">To: <?php if($s->value('R_USER_ID')>0) {?>Bidder ID:<?php } else {?>Bidder ID: <?php }?><? echo $jobbidderid; echo $poster; ?></p>
          
         <p class="emp-web"><?php $seljob=mysql_query("select * from post_job where id='$jobid'");
		 $rowseljob=mysql_fetch_array($seljob); echo $rowseljob['title'] ;  ?></p>
         <p class="emp-send">Send a private message. you may post your contact information.</p>
          
          <p class="emp-send"><strong>Status:</strong> Open</p>
          <textarea name="msg" id="msg" cols="" rows="" class="emp-textarea"></textarea>
         
         
         <div class="atechfile">
         <p class="atechfile-text"><span><img src="images/attachimg.png" alt="" /></span>Attach Files <input name="upload" id="upload" type="file" /></p><p class="send-button"><span><input name="" type="image" src="images/send.png"  class="delete-button"/>
		 <input type="hidden" name="send" id="send" value="send" /> 
		 </span></p>
         </div><?php */?>
        
         
          <div class="clear"></div>
         </div>
          
          </form>
         
         
         
         <?php /*?><div class="employer-main">
       <p class="emp-text">Message (<? echo $rowcount['msgcount']; ?>)<span class="refresh-text">Refresh</span></p>
          
          <div class="clear"></div>
         </div><?php */?>
<!--messaging system-->            
        <?php
if($poster!='')
{
 $seljobbid=mysql_query("select * from message where jobposter='$poster' and jobbidder='$user_id' and jobid='$jobid' order by id desc");
while($rowseljobbid=mysql_fetch_array($seljobbid))
{

?>  
          <div class="employer-main">
       <div class="employer-image"><?php $senderid=$rowseljobbid['sender_id']  ; 
$selprofile=mysql_query("select * from profiles where user_id='$senderid' and `vertical_id`='".VERTICAL_ID."'");
			$rowprofile=mysql_fetch_array($selprofile);
?><img src="profile_img/<? echo $rowprofile['photo'] ; ?>" alt="" height="50px" width="50px;" /></div>
       <div class="employer-image-right"> <?
	   if($senderid==$user_id)
	   {
	   ?>
	   <p class="atechfile-text"><b>Me</b></p><br />
	   <? } else { ?>
	  <p class="emp-text"> From: Employer ID: <?php echo $senderid ; ?></p>
	  <? } ?><p class="emp-text">FILE :<a href="down.php?filename=<?php echo $rowseljobbid['uploadfile']; ?>"><?php $filename=$rowseljobbid['uploadfile'] ; echo remove_numbers($filename);
?></a></p>
<span class="emp-send"><?php echo $rowseljobbid['posttime'].' '.'AT '.' '.$rowseljobbid['sendtime'] ; ?></span><br />
<span class="emp-send"><?php echo $rowseljobbid['message']  ; ?></span>
</div><div class="clear"></div>
</div>
<? } }  ?>
 <?php
if($jobbidderid!='')
{
 $seljobbid=mysql_query("select * from message where jobposter='$user_id' and jobbidder='$jobbidderid' and jobid='$jobid' order by id desc");
while($rowseljobbid=mysql_fetch_array($seljobbid))
{

?><div class="employer-main">
       <div class="employer-image"><?php $senderid=$rowseljobbid['sender_id']  ; 
$selprofile=mysql_query("select * from profiles where user_id='$senderid' and `vertical_id`='".VERTICAL_ID."'");
			$rowprofile=mysql_fetch_array($selprofile);
?><img src="profile_img/<? echo $rowprofile['photo'] ; ?>" alt="" height="50px" width="50px;" /></div>
       <div class="employer-image-right"> <?
	   if($senderid==$user_id)
	   {
	   ?>
	   <p class="atechfile-text"><b>Me</b></p><br />
	   <? } else { ?>
	  <p class="emp-text"> From: Employer ID: <?php echo $senderid ;  ?></p>
	  <? } ?><p class="emp-text">FILE :<a href="down.php?filename=<?php echo $rowseljobbid['uploadfile']; ?>"><?php $filename=$rowseljobbid['uploadfile'] ; echo remove_numbers($filename);
?></a></p>
<span class="emp-send"><?php echo $rowseljobbid['posttime']  ; ?></span><br />

<span class="emp-send"><?php echo $rowseljobbid['message']  ; ?></span>
</div><div class="clear"></div>
</div>

<? } }  ?>
          
          <div class="employer-main bottom-border"></div>
          
          
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
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
