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
      <form method="post" action="#" name="frm"  >
      <div class="signs_clpadd">
      <h1>Subscription Based Payment</h1>
        <div class="form_area2">
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
		<thead>
			<tr>
				<th class="nosort"><h3>Category</h3></th>
				<th><h3>Amount</h3></th>
				<th><h3>Credits</h3></th>
				<th><h3>Per Credit</h3></th>
				<th><h3></h3></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Basic</td>
			  <td>59</td>
				<td>100</td>
				<td>0.59</td>
				<td><input type="radio" name="pay_option" value="100" /></td>
				
			</tr>
			<tr>
				<td>Boutique</td>
				<td>199</td>
				<td>400</td>
				<td>0.50</td>
				<td><input type="radio" name="pay_option" value="100" /></td>

			</tr>
			<tr>
				<td>Business</td>
			  <td>499</td>
				<td>1100</td>
				<td>0.45</td>
				<td><input type="radio" name="pay_option" value="100" /></td>
				
			</tr>
			<tr>
				<td>Professional</td>
			  <td>1000</td>
				<td>	2500</td>
				<td>0.40</td>
			  <td><input type="radio" name="pay_option" value="100" /></td>
				
			</tr>
			<tr>
				<td>Enterprise</td>
				<td>1999</td>
				<td>6000</td>
				<td>0.33</td>
				<td><input type="radio" name="pay_option" value="100" /></td>
			</tr>
				</tbody>
        
  </table>
         <a href="buy_credit.php" style="padding-left:345px;"><img src="images/back_bu.gif" /></a>
        <input type="image" src="images/continue_bu.gif" /></td></tr> 
        
        <!--<table width="100%" border="0">
        <tr><th align="left">Category</th><th align="left">$ Amount</th><th align="left">Credits</th><th align="left">$ Per Credit</th><th>&nbsp;</th></tr>
        <tr><td colspan="5">&nbsp;</td></tr>
        <tr><td align="left">Basic</td><td align="left">$ 59</td><td align="left">100</td><td align="left">0.59</td><td align="left"><input type="radio" name="pay_option" value="59" /></td></tr>
        <tr><td align="left">Boutique</td><td align="left">$ 199</td><td align="left">400</td><td align="left">0.50</td><td align="left"><input type="radio" name="pay_option" value="199" /></td></tr>
        <tr><td align="left">Business</td><td align="left">$ 499</td><td align="left">1,100</td><td align="left">0.45</td><td align="left"><input type="radio" name="pay_option" value="499" /></td></tr>
        <tr><td align="left">Professional</td><td align="left">$ 999</td><td align="left">2,500</td><td align="left">0.40</td><td align="left"><input type="radio" name="pay_option" value="999" /></td></tr>
        <tr><td align="left">Enterprise</td><td align="left">$ 1999</td><td align="left">6,000</td><td align="left">0.33</td><td align="left"><input type="radio" name="pay_option" value="1999" /></td></tr>
     <tr><td colspan="5">&nbsp;</td></tr>
        <tr><td colspan="5" align="center">
        <div class="paddIng-bt"></div>
         <a href="update_account.php"><img src="images/back_bu.gif" /></a>
        <input type="image" src="images/continue_bu.gif" /></td></tr>
        </table>-->
        
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
 