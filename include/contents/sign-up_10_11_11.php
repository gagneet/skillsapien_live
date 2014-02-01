<?php
		if(@$_REQUEST['action']=="add_user")
		{
		 
		
		////*****************************
	   }
		else
		{
		 ?>
			<h1>Sign up</h1>
		
				<table width="365" border="0" align="right" cellpadding="0" cellspacing="0">
				  
                  <?php
				  if(isset($msg)==true)
				  {
                  ?><tr>
				    <td height="30" colspan="2" ><div class="error_msg"><?php echo $msg?></div></td>
			      </tr>
                  <?php
				  }
				  ?>
				  <form name="frm1" id="frm1" action="index.php?ac=act" method="post">
				  <tr>
					<td width="120" height="30">&nbsp;</td>
					<td height="30" align="left" valign="middle"><label for="user1">Recruiter
					<?php 
					if($_REQUEST[ac]!="act")
					
					 {
					?>
					  <input type="radio" name="user" id="user1" value="R" checked="checked"   onchange="javascript:document.frm1.submit();"/>
					  <?php } ?> 
					  
					  <?php 
					if($_REQUEST[ac]=="act") {
					$user=$_REQUEST[user];
					if($user=="R") {
					?>
					  <input type="radio" name="user" id="user1" value="R" checked="checked"   onchange="javascript:document.frm1.submit();"/>
					  <?php }  if($user=="C") { ?> 
					    <input type="radio" name="user" id="user1" value="R" onchange="javascript:document.frm1.submit();"/><?php }} ?>
					  
					  </label>
					  &nbsp;&nbsp;
					  <label for="user2">Candidates
					  <?php 
					if($_REQUEST[ac]!="act") {
					?>
					  <input type="radio" name="user" id="user2" value="C" onchange="javascript:document.frm1.submit();"/> <?php } ?> 
					   <?php 
					if($_REQUEST[ac]=="act") {
					$user=$_REQUEST[user];
					if($user=="C") {
					?>
					   <input type="radio" name="user" id="user2" value="C"  checked="checked" onchange="javascript:document.frm1.submit();"/>
					  <?php } if($user=="R") { ?>   <input type="radio" name="user" id="user2" value="C"   onchange="javascript:document.frm1.submit();"/> <?php }} ?>
					  
					  
					  
					  </label> <div id="error0" class="error"   style="display:none">Please select user option.</div>					</td>
				  </tr></form>
				  <form action="index.php" method="post"  id="sign_up" >
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">First Name </td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="first_name" id="first_name" class="input3" />
					  </div>
                      <div id="error1" class="error"   style="display:none">Please enter first name.</div>                      </td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Last Name </td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="last_name" id="last_name" class="input3" />
					  </div> <div id="error2" class="error"   style="display:none">Please enter last name.</div></td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Email Address</td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="email" id="email" class="input3" />
					  </div> <div id="error3" class="error"   style="display:none">Please enter Email Address.</div>
                      <div id="error3_1" class="error"   style="display:none">Please enter valid Email Address.</div></td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Confirm Email</td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="confirm_email" id="confirm_email" class="input3" />
					  </div> <div id="error4" class="error"   style="display:none">Please enter confirm email.</div></td>
				  </tr>
				  <!--<tr>
					<td width="120" align="right" valign="middle" class="required" height="35">Password</td>
					<td valign="middle"><div class="accont-search">
						<input type="password" name="password" id="password" class="input3" />
					  </div> <div id="error5" class="error"   style="display:none">Please enter password.</div>
                      <div id="error5_1" class="error"   style="display:none">Contains 6-12 characters of letters numbers, Upper and Lower case sensitive.</div>                      </td>
				  </tr>-->
				  <tr>
					<td width="120" align="right" valign="middle" class="required"><!--Confirm Password--></td>
					<td  valign="middle"><!--<div class="accont-search">
						<input type="password" name="c_password" id="c_password" class="input3" />
					  </div><div id="error6" class="error"   style="display:none">Please enter confirm password.</div>--></td>
				  </tr>
                  <!--<tr>
					<td width="120" align="right" valign="middle" class="required" height="35">Or Sign-in with Profile</td>
					<td  valign="middle">
                    <div class="accont-search"><img src="images/facebook.png" /></div>    or    <img src="images/linkedin.png" /></div>
                    <!--<div class="accont-search">
						<input type="password" name="c_password" id="c_password" class="input3" />
					  </div><div id="error6" class="error"   style="display:none">Please enter confirm password.</div>--></td>
				  </tr>-->
				  <?php if($user=="C") {  ?>
				   <tr>
				    <td height="30" align="right" valign="middle" class="required">It Professional  </td>
				    <td height="30"><div class="accont-search"><select name="professinol"><option value="Full time">Full Time</option>
					<option value="Part time">Part Time</option>
					</select></div></td>
			      </tr> 
				  <?php } ?>
				  
				  <?php if($user!="C") {  ?>
				  <tr>
				    <td height="30" align="right" valign="middle" class="required">Company Details </td>
				    <td height="30"><div class="accont-search"><input type="text" name="company_details" id="company_details" class="input3" /></div></td>
			      </tr> 
				  
				 <!-- <tr>
					<td width="120" height="30" align="right" valign="middle" class="required">Gender</td>
					<td height="30">&nbsp;&nbsp;
					   <input type="radio" name="gender" id="gender1" value="M" />
					   <label for="gender1">
					   &nbsp;Male </label>
					  &nbsp;&nbsp;
					  <input type="radio" name="gender" id="gender2" value="F" />
					  <label for="gender2">&nbsp;Female </label>
                      <div id="error7" class="error"   style="display:none">Please select gender.</div>                      </td>
				  </tr>-->
				  <tr>
					<td width="120" align="right" valign="middle" class="required"><!--Birthdate--></td>
					<td  align="center" valign="middle"><table width="230" border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><!--<select name="dob_date" id="dob_date"   class="input5">
							  <option selected="selected" value="">-Date-</option>
							 <?php/*
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {*/
							 ?>
							 <option value="<?php #echo $d?>"><?php #  printf('%02s',$d)?></option>
							 <?php 
							# }
							 ?>
							</select>-->						  </td>
						  <td width="80" align="center" valign="middle"><!--<select name="dob_month" id="dob_month"   class="input4">
							  <option value="" selected>-Month-</option>
							  <option value="01">January</option>
							  <option value="02">February</option>
		
							  <option value="03">March</option>
							  <option value="04">April</option>
							  <option value="05">May </option>
							  <option value="06">June</option>
							  <option value="07">July</option>
							  <option value="08">August</option>
							  <option value="09">September</option>
							  <option value="10">October</option>
							  <option value="11">November</option>
							  <option value="12">December</option>
							</select>--></td>
						  <td width="80" align="center" valign="middle"><!--<select name="dob_year" id="dob_year"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							# for($d=1980;$d<= date('Y');$d++)
							# {
							 ?>
							 <option value="<?php #echo $d?>"><?php  # printf('%d',$d)?></option>
							 <?php 
							# }
							 ?>
							   
							</select>--><div id="error8" class="error"   style="display:none">Please select birthdate.</div></td>
						</tr> 
						
					  </table></td>
				  </tr><?php } ?>
				  <tr>
					<td width="120" height="80">&nbsp;</td>
					<td height="80" align="left" valign="middle"><input type="image" src="images/sign-up-btn.jpg"  width="140" height="39" border="0" ></td>
				  </tr><input type="hidden" id="data"  name="data" value="data" />
				 <?php 
					if($_REQUEST[ac]!="act") {
					?>
				  <input type="hidden" id="user"  name="user" value="R" />
				  <?php } else { ?>
				  
				  <input type="hidden" id="user"  name="user" value="<?php echo $user ; ?>"/> 
				  
				  <?php } ?>
</form>
				</table>
 <div id="dialog_true"  style="display:none" title="<?PHP echo ucwords(strtolower(SIGN_UP_TITLE))?>"><?php echo msg_sign_up_true?></div>
<div id="dialog_false"  style="display:none" title="<?PHP echo ucwords(strtolower(SIGN_UP_TITLE))?>"><?php echo msg_sign_up_false?></div>
			<?php
		}
 
?>