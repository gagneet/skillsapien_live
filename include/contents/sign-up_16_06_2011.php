<?php
		if(@$_REQUEST['action']=="add_user")
		{
		 
		
		////*****************************
	   }
		else
		{
		 ?>
			<h1>Sign up</h1>
		<form action="index.php" method="post"  id="sign_up" >
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
				  <tr>
					<td width="120" height="30">&nbsp;</td>
					<td height="30" align="left" valign="middle"><label for="user1">Recruiters
					  <input type="radio" name="user" id="user1" value="R"  checked="checked"/>
					  </label>
					  &nbsp;&nbsp;
					  <label for="user2">Candidates
					  <input type="radio" name="user" id="user2" value="C" />
					  </label> <div id="error0" class="error"   style="display:none">Please select user option.</div>					</td>
				  </tr>
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
					<td width="120" height="35" align="right" valign="middle" class="required">Email </td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="email" id="email" class="input3" />
					  </div> <div id="error3" class="error"   style="display:none">Please enter email.</div>
                      <div id="error3_1" class="error"   style="display:none">Please enter valid email.</div></td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Confirm Email</td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="text" name="confirm_email" id="confirm_email" class="input3" />
					  </div> <div id="error4" class="error"   style="display:none">Please enter confirm email.</div></td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Password</td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="password" name="password" id="password" class="input3" />
					  </div> <div id="error5" class="error"   style="display:none">Please enter password.</div>
                      <div id="error5_1" class="error"   style="display:none">Contains 6-12 characters of letters numbers, Upper and Lower case sensitive.</div>                      </td>
				  </tr>
				  <tr>
					<td width="120" height="35" align="right" valign="middle" class="required">Confirm Password</td>
					<td height="35" valign="middle"><div class="accont-search">
						<input type="password" name="c_password" id="c_password" class="input3" />
					  </div><div id="error6" class="error"   style="display:none">Please enter confirm password.</div></td>
				  </tr>
				  <tr>
					<td width="120" height="30" align="right" valign="middle" class="required">Gender</td>
					<td height="30">&nbsp;&nbsp;
					   <input type="radio" name="gender" id="gender1" value="M" />
					   <label for="gender1">
					   &nbsp;Male </label>
					  &nbsp;&nbsp;
					  <input type="radio" name="gender" id="gender2" value="F" />
					  <label for="gender2">&nbsp;Female </label>
                      <div id="error7" class="error"   style="display:none">Please select gender.</div>                      </td>
				  </tr>
				  <tr>
					<td width="120" height="30" align="right" valign="middle" class="required">Birthdate</td>
					<td height="30" align="center" valign="middle"><table width="230" border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><select name="dob_date" id="dob_date"   class="input5">
							  <option selected="selected" value="">-Date-</option>
							 <?php
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle"><select name="dob_month" id="dob_month"   class="input4">
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
							</select></td>
						  <td width="80" align="center" valign="middle"><select name="dob_year" id="dob_year"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=1980;$d<= date('Y');$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select><div id="error8" class="error"   style="display:none">Please select birthdate.</div></td>
						</tr>
					  </table></td>
				  </tr>
				  <tr>
					<td width="120" height="80">&nbsp;</td>
					<td height="80" align="left" valign="middle"><input type="image" src="images/sign-up-btn.jpg"  width="140" height="39" border="0" ></td>
				  </tr>
				</table>
<input type="hidden" id="data"  name="data" value="data" />
			  </form> <div id="dialog_true"  style="display:none" title="<?PHP echo ucwords(strtolower(SIGN_UP_TITLE))?>"><?php echo msg_sign_up_true?></div>
<div id="dialog_false"  style="display:none" title="<?PHP echo ucwords(strtolower(SIGN_UP_TITLE))?>"><?php echo msg_sign_up_false?></div>
			<?php
		}
 
?>