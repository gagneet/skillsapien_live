<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

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

#echo $user_id;

$jobid=$_REQUEST['jobid'];
$jpid=$_REQUEST['jpid'];



$selprofile1=mysql_query("select * from profiles where user_id='$user_id'");
$rowprofile1=mysql_fetch_array($selprofile1);
 $senderemail=$rowprofile1['primary_email'];


$selprofile=mysql_query("select * from profiles where user_id='$jpid'");
$rowprofile=mysql_fetch_array($selprofile);

$posteremail=$rowprofile['primary_email'];




$seljob=mysql_query("select * from post_job where id='$jobid'");
$rowseljob=mysql_fetch_array($seljob);

$jobname=$rowseljob['title'];


$proid=$rowseljob['profession_id'];
$disid=$rowseljob['disc_id'];


$selpro=mysql_query("select * from profession where id='$proid'");
$rowselpro=mysql_fetch_array($selpro);

$proname=$rowselpro['name'];


$seldis=mysql_query("select * from disciplinelist where id='$disid'");
$rowseldis=mysql_fetch_array($seldis);

$disname=$rowseldis['disc_name'];

if($_REQUEST['hide']=="data")
{

$biddetails=$_REQUEST['biddetails'];
$totalestimatedcost=$_REQUEST['totalestimatedcost'];

$upload=$_FILES['upload']['name'];
$uploadsize=$_FILES['upload']['size'];
$uploadtype=$_FILES['upload']['type'];
$upload_tmp=$_FILES['upload']['tmp_name'];
$dd=date('Y-m-d');



$bidcost=$_REQUEST['bidcost'];
$agreement=$_REQUEST['agreement'];

$insertbid=mysql_query("insert into bid set bidderid='$user_id',job_poster_profile_id='$jpid',jobid='$jobid',category_type='$proid',bids_left='',cost_for_premium='',proposal_status='',bid_details='$biddetails',total_estimated_cost='$totalestimatedcost',attach_files='$upload',bid_at_cost='$bidcost',agreement='$agreement',bid_date='$dd'");

move_uploaded_file($_FILES['upload']['tmp_name'],"bid_attach_file/".$upload);

     
		  
		  
		  
		
  $msg .="There Are Folowing Information About User bid on  $jobname <br>";  
                 $msg .="<b>Name</b>------------------" . $_REQUEST['name'] . "<br>";
			 $msg .="<b>Company Name</b>------------------" . $_REQUEST['company'] . "<br>";
			 $msg .="<b>Email</b>-------------------" .$_REQUEST['email']. "<br>";
			 $msg .="<b>Details</b>--------------------" . $_REQUEST['biddetails'] . "<br>";
   
        $sub="Bid Enquiry";
          $from=$_REQUEST['email'];
          $to=$posteremail;
            $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			      $headers .= 'From:'.$_REQUEST['email'] . "\r\n" .		   
               
                     'Reply-To:ravi.php08@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();
        
          
          @mail($to,$sub,$msg,$headers);
		  
	
	
	$msg1 .="Dear user you  sucessfully bid on the job  $jobname";  
        $sub1=" Sucessfully Bid On  $jobname";
		
          $from=$posteremail;
          $to1=$_REQUEST['email'];
            $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			      $headers .= 'From:'.$posteremail. "\r\n" .		   
               
                     'Reply-To:'.$posteremail . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();
        
          
          @mail($to1,$sub1,$msg1,$headers);
	
	
	
	
	
	
		 


header("location:job_details.php?jid=$jobid");
}
?>
<div id="men">
  
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <form name="form1" id="form1" action="" method="post" enctype="multipart/form-data">
	<div class="center_in">
     
      <div class="sign_cl">  <h1>skill sepint page detail </h1>
        <div class="form_area2">
          <div class="row2">
		  
            <label class="label_cl2">Profile ID :</label><div class="text-area"><?php echo $jpid ; ?></div>
			           
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Category Type  : </label>
          
         <div class="text-area">  <? echo $proname; ?>  &amp; <? echo $disname; ?></div>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Bids Left : </label>
        <div class="text-area">    456</div>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Cost for Premium </label>
        <div class="text-area">    31bid</div>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Proposal Status:</label><div class="text-area">You can apply for this job</div>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Enter Bid Details :</label>
            <textarea name="biddetails" id="biddetails" class="textarea_cl2"></textarea>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Enter Total Estimated Cost : </label>
            <input name="totalestimatedcost" id="totalestimatedcost" type="text"  class="input_cl2" />
          
            <div class="clear"></div>
          </div>
		  
		  <div class="row2">
            <label class="label_cl2"> Attach Files<strong>(C.V/Detail) </strong> :</label>
           <strong> <input name="upload" type="file" class="attach" /></strong>
            <div class="clear"></div>
          </div>
		  
		  
         <!-- <div class="row2">
            <label class="label_cl2"> Attach Files<strong>(C.V/Detail) </strong> :</label>
            <input name="input" type="text"  class="attach" />
            <input name="input" type="image"   src="images/browse_buttons.gif" class="space_lc3" />
            <div class="clear"></div>
          </div>-->
          <div class="row2">
            <label class="label_cl2">  </label><div class="text-area"><a href="#">Profile Check</a></div>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Standard Bid at a cost :</label><input name="bidcost" id="bidcost" type="radio" value="1" checked="checked" style="margin: 10px  4px 0px 5px;" />
            1Bid
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Premium Bid at a cost :</label>
            <input name="bidcost" id="bidcost" type="radio" value="0" style="margin: 10px  4px 0px 5px;" />
            6Bid
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Click Agreement Checkboxes  :</label>
            <input name="agreement" id="agreement" type="radio" value="1" checked="checked"  style="margin-right:10px; margin-top:5px; "/>
            Yes
            <input name="agreement" id="agreement" type="radio" value="0" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            No
			<input type="hidden" name="name" id="name" value="<? echo $rowprofile1['first_name']; ?>" />
			<input type="hidden" name="company" id="company" value="<? echo $rowprofile1['conpany_name']; ?>" />
			<input type="hidden" name="email" id="email" value="<? echo $rowprofile1['primary_email']; ?>" />
			
            <div class="clear"></div>
          </div>
          <div class="row ">
           <input  type="image"  src="images/submit-bid.gif" class="space_lc4"  />
            <div class="clear"></div>
          </div>
          
          <div  class="clear"><input type="hidden" name="hide" id="hide" value="data" /> </div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
	</form>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="canten">
  <div class="clear"></div>
</div>
</div>
<!--Footer-->
<div id="footer">
  <div id="footer-box">
    <div class="footer-link">
      <ul>
        <li><a href="#">Home</a></li>
        <li>| </li>
        <li><a href="#"> About Us</a> </li>
        <li> | </li>
        <li> <a href="#">Terms of Use</a></li>
        <li> |</li>
        <li> <a href="#">FAQ</a> </li>
        <li>|</li>
        <li> <a href="#"> Privacy Policy</a></li>
        <li> | </li>
        <li> <a href="#">Contact </a></li>
      </ul>
      <div class="copyright">© 2011 Skillsapien. All Rights Reserved</div>
    </div>
    <div class="footer-logo"><a href="#"><img src="images/logo-footer.jpg" alt="" border="0" /></a></div>
  </div>
</div>
</body>
</html>
