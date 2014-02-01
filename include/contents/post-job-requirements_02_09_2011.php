 <form action="" method="post" enctype="multipart/form-data">
      <div class="sign_cl">
      <h1>Post Job Requirements</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2"> Job title </label>
            <input name="title" id="title" type="text"  class="input_cl2"  value="<?php echo  $title?>"/>
            <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Description  </label>
            <textarea name="description" id="description" class="textarea_cl2"><?php echo  $description?></textarea>
            <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Number of positions</label>
            <select name="positions" id="positions" size="1" class="select_cl2">
            <option selected="selected" value="">Select</option>
            <?php
			for($i=0;$i<200;$i++)
			{?>
			  <option  value="<?php echo $i?>"  <?php if($positions==$i){ echo '  selected="selected" ';}?>><?php echo $i?></option>
			<?php }
			?>
            </select>
            <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Budget  Min</label>
         
            <select class="input5"  name="budget" id="budget" style="width:100px;">
            <?php
			
			$list=array("0  - 50 ","50  - 100 ","100  - 150 ","150  - 200 ");
			
			for($b=0;$b<count($list);$b++)
			{?>
			 <option value="<?php echo $list[$b]?>" <?php if($budget==$list[$b]){ echo '  selected="selected" ';}?>><?php echo $list[$b]?></option>
			<?php }
			?>
            </select>
            <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
					
            <div class="clear"></div>
          </div>
		  
		   <div class="row2">
		   
            <label class="label_cl2">Budget  Max </label><select class="input5"  name="budgetmax" id="budgetmax" style="width:100px;">
            <?php
			
			$list=array("0  - 50 ","50  - 100 ","100  - 150 ","150  - 200 ");
			
			for($b=0;$b<count($list);$b++)
			{?>
			 <option value="<?php echo $list[$b]?>" <?php if($budget==$list[$b]){ echo '  selected="selected" ';}?>><?php echo $list[$b]?></option>
			<?php }
			?>
            </select>
            
          
			
			
			&nbsp;&nbsp;&nbsp;&nbsp;<font face="Arial, Helvetica, sans-serif" color="#585757" size="2px"> Currency Type</font>
			
			
			<select class="input5"  name="ctype" id="ctype" style="width:150px;">  		
			 <option value="Australian dollar AUD $">Australian dollar AUD $</option>
			 	 <option value="Canadian dollar CAD $">Canadian dollar CAD $</option>
				 	 <option value="European euro EUR €">European euro EUR € </option>
					 	 <option value="Indian rupee INR Rs">Indian rupee INR Rs</option>
		            </select>           
          </div>

		  
		  
		  
		  
		  
        <!--  <div class="row2">
            <label class="label_cl2">File upload </label>
            <div class="browseInput">
             <input   type="text"  class="attach" id="attached_profile_img" name="attached_profile_img"   value="<?php echo  $attached_profile_img?>"/>
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
         <input type="file" class="browsFile" id="file"  name="file" size="50" onchange="attache('#file','#attached_profile_img')"/>
		
		
			
            <?php # if($error5!="") {?> <div class="error_msg"><?php #echo $error5?></div><?php # }?>
            </div>-->
            <div class="clear"></div>
          </div>
		  
		  
		  
		  
		  
		  
		  
<?		  ////////////////////////**************************************************///////////////////////////////////////////////// ?>
 <div class="row2">
            <label class="label_cl2"> Job Start date </label>
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
							 for($d=1975;$d<= date('Y')+10;$d++)
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
            <label class="label_cl2"> Job end date </label>
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
            <label class="label_cl2"> Hourly</label>
            <input name="hourly" id="hourly" type="text"  class="input_cl2"  value="<?php echo  $hourly?>"/>
            
            <div class="clear"></div>
          </div>
		  
		   <div class="row2">
            <label class="label_cl2"> Monthly</label>
            <input name="monthly" id="monthly" type="text"  class="input_cl2"  value="<?php echo  $monthly?>"/>
          
            <div class="clear"></div>
          </div>
		  
          <div class="row2">
            <label class="label_cl2"> Keywords</label>
            <input name="keywords" id="keywords" type="text"  class="input_cl2"  value="<?php echo  $keywords?>"/>
            <?php if($error7!="") {?> <div class="error_msg"><?php echo $error7?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
            <a href="recruiters-dashboard.php">
			<img src="images/cancel.gif" style="background:#79a72f; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px;" />
       
            </a>
            <div class="clear"> </div><div class="clear"> 
			
          </div>
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div> <input type="hidden" id="data" name="data" value="data" />
      </form>