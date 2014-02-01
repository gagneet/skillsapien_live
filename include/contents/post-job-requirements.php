 <?php
 $urlid=$_REQUEST['id'] ; 
 ?>
 <form action="" method="post" enctype="multipart/form-data">
      <div class="sign_cl">
      <h1>Post Job Requirements</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2"> Job title : </label>
            <input name="title" id="title" type="text"  class="input_cl2"  value="<?php echo  $title?>"/>
            <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Description : </label>
            <textarea name="description" id="description" class="textarea_cl2"><?php echo  $description?></textarea>
            <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Skill Keywords :</label>
            <input name="keywords" id="keywords" type="text"  class="input_cl2"  value="<?php echo  $keywords?>"/>
            <?php if($error7!="") {?> <div class="error_msg"><?php echo $error7?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Job Category :</label>
          <div class="select-hold"><select name="proname" id="proname" class="select_cl2" size="1">
						
						<?php if($urlid>0) {  ?>
						
					<?
						$sel_pro=mysql_query("select * from profession where name!='' and id='$sel_profession'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						<?
						$sel_pro=mysql_query("select * from profession where name!='' and id!='$sel_profession'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
					
					
					
						<?php } else { ?>
						<option value="">Select</option>
						<?php					
						
						$sel_pro=mysql_query("select * from profession where name!=''");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? }  }?>
						</select> </div>
                     
            <div class="clear"></div>
          </div>
        
          <!--<div class="row2">
            <label class="label_cl2">Budget  Min</label>
         
            <select class="input5"  name="budget" id="budget" style="width:100px;">
            <?php
			
			//$list=array("0  - 50 ","50  - 100 ","100  - 150 ","150  - 200 ");
			$list=array("0","50","100 ","150 ","200 ");
			
			for($b=0;$b<count($list);$b++)
			{?>
			 <option value="<?php echo $list[$b]?>" <?php if($budget==$list[$b]){ echo '  selected="selected" ';}?>><?php echo $list[$b]?></option>
			<?php }
			?>
            </select>
            <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
					
            <div class="clear"></div>
          </div>-->
		  
		   <!--<div class="row2">
		   
            <label class="label_cl2">Budget  Max </label><select class="input5"  name="budgetmax" id="budgetmax" style="width:100px;">
            <?php
			
		//	$list=array("0  - 50 ","50  - 100 ","100  - 150 ","150  - 200 ");
			$list=array("0","50","100 ","150 ","200 ");
			
			for($b=0;$b<count($list);$b++)
			{?>
			 <option value="<?php echo $list[$b]?>" <?php if($budget==$list[$b]){ echo '  selected="selected" ';}?>><?php echo $list[$b]?></option>
			<?php }
			?>
            </select>
            
          
			
			
			&nbsp;&nbsp;&nbsp;&nbsp;<font face="Arial, Helvetica, sans-serif" color="#585757" size="2px">Currency Type</font>
			
			
			<select class="input5"  name="ctype" id="ctype" style="width:150px;">  		
			 <option value="Australian dollar AUD $">Australian dollar AUD $</option>
			 	 <option value="Canadian dollar CAD $">Canadian dollar CAD $</option>
				 	 <option value="European euro EUR €">European euro EUR &euro; </option>
					 	 <option value="Indian rupee INR Rs">Indian rupee INR Rs</option>
		            </select>           
          </div>-->

		  <div class="row2">
            <label class="label_cl2"> Reply-by Deadline : </label>
            <table  border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><select name="reply_start_d" id="reply_start_d"   class="input5">
						
							    <option selected="selected" value="">-Date-</option>
								
							  
							 <?php
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle">
						  <select name="reply_start_m" id="reply_start_m"   class="input4">
                            <option value="" selected>-Month-</option>
                            <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
                            <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>>
                              <?php  echo $month[$d]?>
                            </option>
                            <?php 
							 }
							  
							  ?>
                          </select></td>
						  <td width="80" align="center" valign="middle"><select name="reply_start_y" id="reply_start_y"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo '  selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select></td>
                            <td>
                            	<?php if($errorstart!="") {?> <div class="error_msg"><?php echo $errorstart?></div><?php }?>                            </td>
						</tr>
					  </table>
                     
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Location :</label>
            <input name="location" id="location" type="text"  class="input_cl2"  value="<?php echo  $sel_hourly?>"/>
            
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Country Based : </label>
             <div class="select-hold"><select name="country"  id="country" size="1" class="select_cl2">
			 <option value="13">Australia</option>
            <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>" <?php if($country==$C_data['countries_id']){ echo ' selected="selected"';}?>><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            </select></div>
            <div class="clear"></div>
          </div>
          
		  
		  
		  
		  
          <div class="row2">
            <label class="label_cl2"> Attach Document : </label>
            <div class="browseInput">
            <!-- <input   type="text"  class="attach" id="attached_profile_img" name="attached_profile_img"   value="<?php echo  $attached_profile_img?>"/>
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
         <input type="file" class="browsFile" id="file"  name="file" size="50"  onchange="attache('#file','#attached_profile_img')"/>--> <input name="upload" type="file" class="attach" />
		
		
			
            <?php # if($error5!="") {?> <!--<div class="error_msg"><?php #echo $error5?></div>--><?php # }?>
            </div>
            <div class="clear"></div>
          </div>
		  
		  <div class="row2">
            <label class="label_cl2"> Asking Rate :</label>
            <div class="currency">
            <select name="currency" size="1" class="bordernune"  id="currency">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>" <?php if($C_data['id']==$data['lt_currency']){ echo ' selected="selected" ';}?> ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="budget" type="text"  id="budget"  src="type" class="currency1" />
            <div class="currency">
            <select name="time_uom" size="1" class="bordernune"  id="time_uom">
               <option value="Hour">Hour</option>
               <option value="Day">Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>
             <div class="clear"></div>
              
            </div>
            
            <div class="row2">
            <label class="label_cl2">Maximum Ceiling Rate : </label>
            <div class="currency">
            <select name="currency_max" size="1" class="bordernune"  id="currency_max">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>" <?php if($C_data['id']==$data['lt_currency']){ echo ' selected="selected" ';}?> ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="budgetmax" type="text"  id="budgetmax"  src="type" class="currency1" />
            <div class="currency">
            <select name="time_uom_max" size="1" class="bordernune"  id="time_uom_max">
               <option value="Hour">Hour</option>
               <option value="Day">Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>
             <div class="clear"></div>
              
            </div>
		  
		  
		  
		  
		  
<?		  ////////////////////////**************************************************///////////////////////////////////////////////// ?>
 <div class="row2">
            <label class="label_cl2"> Proposed Start Date : </label>
            <table  border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><select name="job_start_d" id="job_start_d"   class="input5">
						
							    <option selected="selected" value="">-Date-</option>
								
							  
							 <?php
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle">
						  <select name="job_start_m" id="job_start_m"   class="input4">
                            <option value="" selected>-Month-</option>
                            <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
                            <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>>
                              <?php  echo $month[$d]?>
                            </option>
                            <?php 
							 }
							  
							  ?>
                          </select></td>
						  <td width="80" align="center" valign="middle"><select name="job_start_y" id="job_start_y"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo '  selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select></td>
                            <td>
                            	<?php if($errorstart!="") {?> <div class="error_msg"><?php echo $errorstart?></div><?php }?>                            </td>
						</tr>
					  </table>
                     
            <div class="clear"></div>
          </div>
<?		  ///********************************************************************************************************************************************//////// ?>
		  
		  
          <div class="row2">
            <label class="label_cl2"> Proposed Finish date : </label>
            <table  border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><select name="job_end_d" id="job_end_d"   class="input5">
							  <option selected="selected" value="">-Date-</option>
							 <?php
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle"><select name="job_end_m" id="job_end_m"   class="input4">
                            <option value="" selected>-Month-</option>
                            <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
                            <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>>
                              <?php  echo $month[$d]?>
                            </option>
                            <?php 
							 }
							  
							  ?>
                          </select></td>
						  <td width="80" align="center" valign="middle"><select name="job_end_y" id="job_end_y"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo '  selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select>  </td>
                            <td>
                            	<?php if($error6!="") {?> <div class="error_msg"><?php echo $error6?></div><?php }?>                            </td>
						</tr>
					  </table>
                     
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Do you want to publicly display <br /> your Recruiter details?
  </label>
          
            <input name="public_display" id="public_display" type="radio" value="yes" style="margin: 10px  4px 0px 5px;"/>
             <label for="time_period1"> Yes</label>
            <input name="public_display" id="public_display" type="radio" value="no" style="margin: 10px 4px 0px 5px;"/>
           <label for="time_period2">No</label>
             <div class="clear"></div>
              
            </div>
          <div class="row ">
            <input  type="image"  src="images/postJobBtn.gif" class="space_lc4"  />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="recruiters-dashboard.php"><img src="images/cancle_buttons.gif" /></a>
            <div class="clear"> </div><div class="clear"> 
			
          </div>
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div> <input type="hidden" id="data" name="data" value="data" />
      </form>