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
          <form method="post" action="paypal.php?id=<?php echo $user_id; ?>" name="frm"  >
      
      <div class="signs_clpadd">
      <h1>Payment Option</h1>
        <div class="form_area2">
        <!--<table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr><th class="curveBorder">$ Amount</th><th class="curveBorder">Credits</th><th class="curveBorder">Discount</th><th class="curveBorder">$ Per Credit</th><th>&nbsp;</th></tr>
        <tr><td colspan="5">&nbsp;</td></tr>
        <tr><td align="center" style="font-size:12px;" class="curveBordertext">$ 100</td><td align="center" style="font-size:12px;">100</td><td align="center" style="font-size:12px;">0%</td><td align="center" style="font-size:12px;">1.00</td><td align="center"><input type="radio" name="pay_option" value="100" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 180</td><td align="center" style="font-size:12px;">200</td><td align="center" style="font-size:12px;">10%</td><td align="center" style="font-size:12px;">0.90</td><td align="center"><input type="radio" name="pay_option" value="180" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 400</td><td align="center" style="font-size:12px;">500</td><td align="center" style="font-size:12px;">20%</td><td align="center" style="font-size:12px;">0.80</td><td align="center"><input type="radio" name="pay_option" value="400" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 700</td><td align="center" style="font-size:12px;">1000</td><td align="center" style="font-size:12px;">30%</td><td align="center" style="font-size:12px;">0.70</td><td align="center"><input type="radio" name="pay_option" value="700" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 1200</td><td align="center" style="font-size:12px;">2000</td><td align="center" style="font-size:12px;">40%</td><td align="center" style="font-size:12px;">0.60</td><td align="center"><input type="radio" name="pay_option" value="1200" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 2500</td><td align="center" style="font-size:12px;">5000</td><td align="center" style="font-size:12px;">50%</td><td align="center" style="font-size:12px;">0.50</td><td align="center"><input type="radio" name="pay_option" value="2500" /></td></tr>
        <tr><td align="center" style="font-size:12px;">$ 5000</td><td align="center" style="font-size:12px;">12500</td><td align="center" style="font-size:12px;">60%</td><td align="center" style="font-size:12px;">0.40</td><td align="center"><input type="radio" name="pay_option" value="5000" /></td></tr>
        <tr><td colspan="5">&nbsp;</td></tr>
        <tr><td colspan="5" align="center">
        <div class="paddIng-bt"></div>
         <a href="update_account.php"><img src="images/back_bu.gif" /></a>
        <input type="image" src="images/continue_bu.gif" /></td></tr>
        </table>-->
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
		<thead>
			<tr>
				<th class="nosort"><h3>Amount</h3></th>
				<th><h3>Credits</h3></th>
				<th><h3>Discount</h3></th>
				<th><h3>Per Credit</h3></th>
				<th><h3></h3></th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>100</td>
			  <td>100</td>
				<td>0%</td>
				<td>1.00</td>
				<td><input type="radio" name="pay_option" value="100" /></td>
				
			</tr>
			<tr>
				<td>180</td>
				<td>200</td>
				<td>10%</td>
				<td>0.90</td>
				<td><input type="radio" name="pay_option" value="180" /></td>

			</tr>
			<tr>
				<td><span style="font-size:12px;">400</span></td>
			  <td>500</td>
				<td>20%</td>
				<td>0.80</td>
				<td><input type="radio" name="pay_option" value="400" /></td>
				
			</tr>
			<tr>
				<td>700</td>
			  <td>1000</td>
				<td>30%</td>
				<td>0.70</td>
			  <td><input type="radio" name="pay_option" value="700" /></td>
				
			</tr>
			<tr>
				<td>1200</td>
				<td>2000</td>
				<td>40%</td>
				<td>0.60</td>
				<td><input type="radio" name="pay_option" value="1200" /></td>
				
			</tr>
			<tr>
				<td>2500</td>
				<td>5000</td>
				<td>50%</td>
				<td>0.50</td>
				<td><input type="radio" name="pay_option" value="2500" /></td>
				
			</tr>
			<tr>
				<td>5000</td>
				<td>12500</td>
				<td>60%</td>
				<td>0.40</td>
				<td><input type="radio" name="pay_option" value="5000" /></td>
				</tr>
		</tbody>
        
  </table>
  <a href="buy_credit.php" style="padding-left:345px;"><img src="images/back_bu.gif" /></a>
        <input type="image" src="images/continue_bu.gif" /></td></tr>
        <br /><br />
      
        <div  class="clear"></div>
      </div>
      <input type="hidden" id="data" name="data" value="data" />
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

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
 