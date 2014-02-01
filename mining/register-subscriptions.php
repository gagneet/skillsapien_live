<?php
include_once('init.php');

  /*
 USER REQUEST FROM HOME PAGE
 */

 if($s->value('R_FORM')!=3)
	{
	
		switch($s->value('R_FORM'))
		{
 		 case 1:
			 header('location:sign-up-candidate-profile.php');
			 break;
		 case 2:
			 header('location:enter-recruiter-profile.php');
			 break;
		/*case 3:
			 header('location:register-subscriptions.php');
			 break;*/
	    case 4:
			 header('location:register-alert-levels.php');
			 break;		 	 
		 default :
			header('location:index.php');	 
		}
	 
	}
 

 

if($_REQUEST['data']=="data")
{
  	 $error=false;
	 
	 if(strlen($db->dataTrim($_REQUEST['credit_card_owner']))<=0)
	 {
	    $error1=$error_msg[20];
		 $error=true;
 	 }
	 
	 if(Credit_Card_Number()!="") 
	 {
	    $error2=Credit_Card_Number();
		$error=true;
 	 }
	 
	 if(credit_card_expiry_date()!="")
	 {
	    $error3=$error_msg[22];
		$error=true;
 	 }
	 if(credit_card_CVV2($_REQUEST['credit_card_CVV2'])!="")
	 {
	    $error4=$error_msg[23];
		$error=true;
 	 }
	 
	//****************************************************
	if($error==false)
	{
	  	   $sql="INSERT INTO  `subscriptions` 
             set 
                 `user_id` =".$s->value('R_USER_ID').",
				 `payment_options`='".$db->dataTrim($_REQUEST['payment_options'])."' , 
				 `credit_card_owner`='".$db->dataTrim($_REQUEST['credit_card_owner'])."' ,
				 `credit_card_number`='".$db->dataTrim($_REQUEST['credit_card_number'])."' ,
				 `credit_card_expiry_date`='".date('Y-m',strtotime(" ".$db->dataTrim($_REQUEST['card_expire_year'])." ".$db->dataTrim($_REQUEST['card_expire_month'])))."-00' , 
				 `credit_card_CVV2`='".$db->dataTrim($_REQUEST['credit_card_CVV2'])."' ,
 				 `date` =now(),
				 `status`='".ENABLE."' ,
				 `card_type`='".$db->dataTrim($_REQUEST['card_type'])."'";
		 		
	 			
				
				if($db->query_silent($sql)==true)
				{
				     $s->set('R_FORM','4');
				   header('location:register-alert-levels.php');
				}						

	} 
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>

<script src="js/recruiter-registration.js" type="text/javascript" language="javascript1.2"></script>
<style type="text/css">
.tooltip {
  border-bottom: 1px dotted #000000;
  color: #000000; outline: none;
  cursor: help; text-decoration: none;
  position: relative;
  padding-left:5px;
}
.tooltip span {
  margin-left: -999em;
  position: absolute;
}


.tooltip:hover span {
  font-family: Calibri, Tahoma, Geneva, sans-serif;
  position: absolute;
  left: 1em;
  top: 2em;
  z-index: 99;
  margin-left: 0;
  width: 250px;
}
.tooltip:hover img {
  border: 0;
  margin: -10px 0 0 -55px;
  float: left;
  position: absolute;
}
.tooltip:hover em {
  font-family: Candara, Tahoma, Geneva, sans-serif;
  font-size: 1.2em;
  font-weight: bold;
  display: block;
  padding: 0.2em 0 0.6em 0;
}
.classic { padding: 0.8em 1em; z-index:999;  }
.custom { padding: 0.5em 0.8em 0.8em 2em; }
* html a:hover { background: transparent; }

.classic { background: #FFFFAA; border: 1px solid #FFAD33; }
.critical { background: #FFCCAA; border: 1px solid #FF3334; }
.help { background: #9FDAEE; border: 1px solid #2BB0D7; }
.info { background: #9FDAEE; border: 1px solid #2BB0D7; }
.warning { background: #FFFFAA; border: 1px solid #FFAD33; }


</style>
</head>
<body>
<div id="men">
     <?php echo $get_template->process('global_header.php')?>
 <form method="post" id="tab3"   >
 <div class="canten">
    <div class="center_in">
    <div class="select_area">
        <div class="select_11cl">Recruiter Registration </div>
        <div class="select_22cl"> Recruiter Profile </div>
        <div class="select_33clact">Register Subscriptions	 </div>
        <div class="select_44cl " >Register Alert-levels	
</div>
        <div class="clear"></div>
      </div>
    
      <div class="sign_cl ">
        <h1>Register Subscriptions	
</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2" for="payment_option1">Payment options
           </label>
            <input name="payment_options" id="payment_option1" type="radio" value="paypal" style="margin: 10px  4px 0px 5px;" />
           <label  for="payment_option1">Paypal</label>
            <input name="payment_options" type="radio" id="payment_option2" style="margin: 10px 4px 0px 5px;" value="credit card" checked="checked" />
          
         <label  for="payment_option2"> Credit Card</label>
         
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Credit Card Owner</label>
            <input name="credit_card_owner" id="credit_card_owner" type="text"  class="input_cl2" />
            <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
            <div class="row2">
            <label class="label_cl2">Credit Card Type</label>
            <select name="card_type"  id="card_type" size="1" class="select_cl2">
             <option value="">--Select Card Type--</option>
			 <option value="master">Master Card</option>
              <option value="visa">Visa Card</option>
              <option value="Discover">Discover</option>
             
              </select>
               <div class="clear"></div>
               </div>
          
          <div class="row2">
            <label class="label_cl2">Credit Card Number</label>
            <input name="credit_card_number" id="credit_card_number" type="text"  class="input_cl2" />
            <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          
               
          <div class="row2">
            <label class="label_cl2">Credit Card Expiry Date</label>
            <select name="card_expire_month" size="1" class="currency" id="card_expire_month">
              <option value="" selected>-Month-</option>
              <option>January</option>
							  <option>February</option>
							  <option>March</option>
							  <option>April</option>
							  <option>May </option>
							  <option>June</option>
							  <option>July</option>
							  <option>August</option>
							  <option>September</option>
							  <option>October</option>
							  <option>November</option>
							  <option>December</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="card_expire_year" size="1" class="currency" id="card_expire_year">
               <option value="" selected>-Select-</option>
							 <?php
							 for($d=2011;$d<=2030;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
            </select>
            <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"><!--Credit Card CVV2-->Credit Card Secure Code (CCV) </label>
            <input name="credit_card_CVV2" id="credit_card_CVV2" type="text"   src="type" class="currency1" /> <a class="tooltip" href="#"> help? <span class="classic">A three- or four- digit security code is printed on credit and debit cards. This code is sometimes called the CVV2 or CVC2 security code.

Security code diagram On most cards, the security code is three-digits long and is printed on the top right corner of the signature panel. The signature panel is located on the back face of the card. American Experss cards have a four-digit number printed on the front of the card. The security code is printed following the card number.</span></a>
            
            <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
            <div class="clear"></div>
          </div> <br />
          
          
           <p> </p>
        
           
           
         
          <br />
           <div class="row2">
            <label class="label_cl2">&nbsp;</label>
           <input  type="image"  src="images/continue_bu.gif"   />
            <div class="clear"></div>
          </div>
          
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><input type="hidden" id="data"  name="data" value="data" />
  </form>
  
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