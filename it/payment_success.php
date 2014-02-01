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
  
/*$to="ajit@w3csolutions.com";
$subject .="Paypal testing";
$message .='my name is ajit';
  
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From:ajit@w3csolutions.com\r\n";

$message = '';
  $message="update profiles set net_bidcost='".$amount."' where user_id='".$userid."'";
foreach($_REQUEST as $key => $values){
	$message .= "<br>\n" . $key . "=>" . $values;
}

if(@mail($to,$subject, $message,$headers)){

}
*/


/*
--------------------Request field value--------------------------------------------------
action=>ipn
mc_gross=>2500.00
protection_eligibility=>Ineligible
address_status=>confirmed
payer_id=>YKM8WAZ5LXJPQ
tax=>0.00
address_street=>1 Main St
payment_date=>22:33:35 Feb 15, 2012 PST
payment_status=>Pending
charset=>windows-1252
address_zip=>95131
first_name=>Test
address_country_code=>US
address_name=>Test User
notify_version=>3.4
custom=>
payer_status=>verified
address_country=>United States
address_city=>San Jose
quantity=>1
verify_sign=>AObgDnOLwq0GCRjSiY7XngL02WbdA4PBQ.PErVwjw-fDJ5O-I9yMF.fb
payer_email=>ajitsi_1326884461_per@gmail.com
txn_id=>1JD66393NT248300G
payment_type=>instant
last_name=>User
address_state=>CA
receiver_email=>arvind@w3csolutions.com
pending_reason=>unilateral
txn_type=>web_accept
item_name=>Paypal Test Transaction
mc_currency=>USD
item_number=>
residence_country=>US
test_ipn=>1
handling_amount=>0.00
transaction_subject=>Paypal Test Transaction
payment_gross=>2500.00
shipping=>0.00
ipn_track_id=>4d37ff782fa04 	   
---------------------------------------------------------------------------------------------------------------------	
   die(); */



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<script src="js/counter-offer-acceptskill-profiles-interview.js" type="text/javascript" language="javascript1.2"></script>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="sign_cl">
       <h1>Your payment has successfully done !</h1>
        <div class="form_area2">
        <a href="index.php"><img src="images/continue_bu.gif" /></a>
        <br /><br />
        <div  class="clear"></div>
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
 