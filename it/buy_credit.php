<?php
include_once('init.php');

session_start();
 $ses_id=session_id();

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
 
 if(isset($_REQUEST['data']))
 {
 echo $payment_method=$_POST['pay_method'];
if($payment_method=='subscription')
{
header('location:subscription_payment.php');
}
if($payment_method=='one_off')
{
header('location:one_off_payment.php');
}

 }
 
 
 
/* $reg_date=date("Y-m-d");
 
 $ins="INSERT INTO recruiter_payment (
`id` ,
`recruiter_id` ,
`session_id` ,
`date`
)
VALUES (
NULL , '".$user_id."', '".$ses_id."', '".$reg_date."'
)";
mysql_query($ins);*/

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<script src="js/counter-offer-acceptskill-profiles-interview.js" type="text/javascript" language="javascript1.2"></script>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
    
      <form method="post" action="" name="frm"  >
      <div class="sign_clpadd">
      <h1>Buy Credit</h1>
        <div class="form_area2">
        <table width="90%">
        <tr><td style="width:300px; padding-bottom:8px;"><b>Payment Method</b></td><td></td></tr>
        <tr><td style="padding-bottom:8px;">Subscription-based Model</td><td><input type="radio" name="pay_method" value="subscription" /></td></tr>
        <tr><td>One-Off Purchase Model</td><td><input type="radio" name="pay_method" value="one_off" /></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2"  style="width:500px;">
    <div class="paddIng-bt"></div>
       <a href="msg.php"><img src="images/back_bu.gif" /></a> <input type="image" src="images/continue_bu.gif"  /></td></tr>
        </table>
        
        <br /><br />
      
        <div  class="clear"></div>
      </div><input type="hidden" id="data" name="data" value="data" />
      </form>
      
      
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
 