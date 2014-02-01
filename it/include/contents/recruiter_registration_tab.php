<?php
include_once('../../init.php');

switch($_REQUEST['tab'])
{

 
   case 4:
  ?>
 <form method="post"  id="tab4" onsubmit="return form4()" >
 <div class="canten">
  
    <div class="center_in">
    <div class="select_area">
        <div class="select_11cl">Recruiter Registration </div>
        <div class="select_22cl"> Recruiter Profile </div>
        <div class="select_33cl">Register Subscriptions	 </div>
        <div class="select_44clact" >Register Alert-levels	
</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl >
      
        <div class="form_area2">
          <div class="row2">
          
         <div class="post_cl">
        <h1>Congratulations!<span> Your're now registered.</span></h1>
        <p>Post a job to get proposals and hire Candidate on Skillsapien </p>
        <div align="center" class="pos_bucl" > <img src="images/post_job_buttons.gif" onClick="javascript:window.location='post-job-requirements.php'" >  </div>
  
         <p><a href="#">Learn more</a> about using skillsapien.</p>
         <p><a href="#">Search</a> and hire Candidates.</p>
         </div>
         
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
<br />

          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
 </form>
  <?php
  break;
  case 3:
  ?><form method="post" id="tab3" onSubmit="return form3('')"  >
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
           <label  for="payment_option2">Paypal</label>
            <input name="payment_options" id="payment_option2" type="radio" value="credit card" style="margin: 10px 4px 0px 5px;" />
           Credit Card
         
         
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Credit Card Owner</label>
            <input name="credit_card_owner" id="credit_card_owner" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Credit Card Number</label>
            <input name="credit_card_number" id="credit_card_number" type="text"  class="input_cl2" />
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
							 for($d=1980;$d<= date('Y');$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Credit Card CVV2 </label>
            <input name="credit_card_CVV2" id="credit_card_CVV2" type="text"   src="type" class="currency1" />
            <div class="clear"></div>
          </div><br />
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
  </div>
  </form>
  <?php
  break;
  case 2:
  ?>
     
   
  <?php
  break;
  default :
  ?>
 
   
  <?php 
}
?>