<?php
include_once('init.php');

	if($s->value('C_FORM')!=1)
	{
	
		switch($s->value('C_FORM'))
		{
 		 case 2:
			 header('location:fill-in-your-skills.php');
			 break;
		case 3:
			 header('location:record-audio.php');
			 break;
	    case 4:
			 header('location:set-rates.php');
			 break;		 	 
		 default :
			header('location:index.php');	 
		}
	 
	}
	
  /*
  add login detials
  
  */
  
 
  
   if($_REQUEST['data']=="data")
   {
     
	 $error=false;
	 
	/*if(strlen($db->dataTrim($_REQUEST['account_name']))<=0)
	 {
	    $error0=$error_msg[11];
		$error=true;
 	 }*/
	if(strlen($db->dataTrim($_REQUEST['password']))<=0)
	 {
	    $error00=$error_msg[10];
		$error=true;
 	 }
	 
	 if($db->dataTrim($_REQUEST['confirm_password'])!=$db->dataTrim($_REQUEST['password']))
	 {
	    $error01=$error_msg[1];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['username']))<=0)
	 {
	    $error0=$error_msg[11];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['first_name']))<=0)
	 {
	    $error1=$error_msg[14];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['last_name']))<=0)
	 {
	    $error2=$error_msg[13];
		$error=true;
 	 }
	 
	/* if(strlen($db->dataTrim($_REQUEST['primary_email']))<=0)
	 {
	    $error3=$error_msg[12];
		$error=true;
 	 }
	 if(isValidEmail($db->dataTrim($_REQUEST['primary_email']))==false && strlen($db->dataTrim($_REQUEST['primary_email']))>0)
	 {
	    $error3=$error_msg[0];
		$error=true;
 	 }*/
	 //----------------------
	  
	 if(strlen($db->dataTrim($_REQUEST['primary_contact']))<=0)
	 {
	    $error4=$error_msg[32];
		$error=true;
 	 } 
	/* if(strlen($db->dataTrim($_REQUEST['primary_address']))<=0)
	 {
	    $error5=$error_msg[33];
		$error=true;
 	 } */
	  
/*	 if(isValidEmail($db->dataTrim($_REQUEST['Username']))==false && strlen($db->dataTrim($_REQUEST['Username']))>0)
	 {
	    $error3="Please enter valid email.";
		$error=true;
 	 }*/
	 //------------------------------
	 
	
	 
	 
	  if($db->dataTrim($_REQUEST['condition'])=="")
	 {
	     $error10=$error_msg[34];
		$error=true;
 	 }
	 
	 if($_REQUEST['country']=="")
	 {
	  $error_country=$error_msg[35];
		$error=true;
 	 }
	 $msg="";
//*****************************************************************************************	 	           
			if($error==false){
			  $sql="SELECT * FROM `user_login_details` WHERE `vertical_id`='".VERTICAL_ID."' and`login_id` like '".$db->dataTrim($_REQUEST['email'])."' and id=".$s->value('UESR_ID');
			
				   if($error==false && $db->num_rows($db->query_silent($sql))==0)
				   {
				     if($s->value('UESR_ID')<=0)
					  {
					   $sql="INSERT INTO `user_login_details` 
							set `vertical_id`='".VERTICAL_ID."'  ";
					   $condition="  ";
					 		  
					  }
					  else
					  {
					   $sql=" update  `user_login_details` set	 	  ";
					   $condition="   where  `vertical_id`='".VERTICAL_ID."' and`id`='".$s->value('UESR_ID')."'";
					  }
					
				  	  /*  $sql.="
								`name`='".$db->dataTrim($_REQUEST['first_name'])." ".$db->dataTrim($_REQUEST['last_name'])."',
								`login_id`='".$db->dataTrim($_REQUEST['account_name'])."',
								`password`='".md5($db->dataTrim($_REQUEST['password']))."',
								`type`='C',
								`date`=NOW(),
								`status`='".DISABLE."'".$condition;*/
								
								/*  $sql.="
								`name`='".$db->dataTrim($_REQUEST['first_name'])."',
								`login_id`='".$db->dataTrim($_REQUEST['primary_email'])."',
								`type`='C',
								`date`=NOW(),
								`status`='".DISABLE."'".$condition;*/
								  $sql.="
								`name`='".$db->dataTrim($_REQUEST['username'])."',
								`type`='C',
								`date`=NOW(),
								`status`='".DISABLE."'".$condition;
				 	  
					$db->query_silent($sql);
					
					if($s->value('UESR_ID')<=0)
					{
						$user_id=$db->insert_id();  
						$s->set("UESR_ID",$user_id);
					}
	 
	 
	
	
	
		$photo="C_".$s->value('UESR_ID').".".get_extension($_FILES['attached_file_photo']['name']);
		UploadImg(P_IMAGE_FOLDER.$photo,$_FILES['attached_file_photo'],true);
		
		$cv=$s->value('UESR_ID').".".get_extension($_FILES['attached_file_cv']['name']);	
		UploadImg(CV_FOLDER.$cv,$_FILES['attached_file_cv'],true); 
	  /*
	  	PROFILE INFO
	  */
	
			if($s->value('UESR_ID')<=0)
			{
				$profile_sql="INSERT INTO `profiles` set	 
				`user_id`='".$s->value('UESR_ID')."',`vertical_id`='".VERTICAL_ID."',";
				$condition="  ";		  
			}
			else
			{
				$profile_sql=" update  `profiles` set	 	  ";
				$condition="   where `vertical_id`='".VERTICAL_ID."' and `user_id`='".$s->value('UESR_ID')."'";
			}
			
	  
	 	           
	   /*  $profile_sql.=" 			
			  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
			  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."',
 			  `primary_email`='".$db->dataTrim($_REQUEST['primary_email'])."', 
			  `primary_contact_no`='".$db->dataTrim($_REQUEST['primary_contact'])."', 
			  `other_contact_no`='".$db->dataTrim($_REQUEST['other_contact'])."', 
			  `primary_address`='".$db->dataTrim($_REQUEST['primary_address'])."', 
			  `city`='".$db->dataTrim($_REQUEST['city'])."', 
			  `state`='".$db->dataTrim($_REQUEST['state'])."', 
			  `postcode`='".$db->dataTrim($_REQUEST['postcode'])."', 
			  `country`='".$db->dataTrim($_REQUEST['country'])."',
			  `gender`='".$db->dataTrim($_REQUEST['gender'])."',
			  `profession_type`='".$db->dataTrim($_REQUEST['professinol'])."',
			  `birthdate`='".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',
			  `language`='".$db->dataTrim($_REQUEST['language'])."'  ,
			  `photo`='".$photo."', 
			  `conditions`='".$db->dataTrim($_REQUEST['condition'])."', 
			  `hear_about_us`='".$db->dataTrim($_REQUEST['hear_about_us'])."', 
			  `date`='".$db->dataTrim($_REQUEST['account_name'])."', 
			  `status`='".ENABLE."'" . $condition; 
			  
		  */
			  $profile_sql.=" 			
			  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
			  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."',
			  `primary_contact_no`='".$db->dataTrim($_REQUEST['primary_contact'])."', 
			  `other_contact_no`='".$db->dataTrim($_REQUEST['other_contact'])."', 
			  `primary_address`='".$db->dataTrim($_REQUEST['primary_address'])."', 
			  `city`='".$db->dataTrim($_REQUEST['city'])."', 
			  `state`='".$db->dataTrim($_REQUEST['state'])."', 
			  `postcode`='".$db->dataTrim($_REQUEST['postcode'])."', 
			  `country`='".$db->dataTrim($_REQUEST['country'])."',
			  `work_eligibility`='".$db->dataTrim($_REQUEST['eligibility'])."',
			  `gender`='".$db->dataTrim($_REQUEST['gender'])."',
			  `profession_type`='".$db->dataTrim($_REQUEST['professinol'])."',
			  `birthdate`='".$_REQUEST['dob_date']."',
			  `language`='".$db->dataTrim($_REQUEST['languages'])."'  ,
			  `proficiency`='".$db->dataTrim($_REQUEST['proficiency'])."'  ,
			  `photo`='".$photo."', 
			  `conditions`='".$db->dataTrim($_REQUEST['condition'])."', 
			  `hear_about_us`='".$db->dataTrim($_REQUEST['hear_about_us'])."', 
			  `date`='".$db->dataTrim($_REQUEST['account_name'])."', 
			  `status`='".ENABLE."'" . $condition; 
			  /*
			  add  profile cv
			  
			  */
			  
			  

		 	    $cv_sql="INSERT INTO  `cvs` 
			  				set
			  		 			`user_id`='".$s->value('UESR_ID')."', 
								`name`='".$cv."',
								`date`=now(),
								`status`='".ENABLE."'";	  
 							
		if($db->query_silent($profile_sql)==true  && $db->query_silent($cv_sql)==true)
		{
		    $s->set('C_FORM','2');
			 
			header('location:fill-in-your-skills.php');
		}
		           }
				   else
				   {
				    $msg=$error_msg[3];
				   }
		    }		   
   }	  
		

 /*
 	get user info 
 */
 if($s->is_set('UESR_ID')==true)
 { 
   $sql='SELECT * FROM `user_login_details` as uld left join profiles as p on uld.`id`=p.user_id WHERE uld.`vertical_id`="'.VERTICAL_ID.'" and uld.`id`='.$s->value('UESR_ID');
   $data=$db->fetch_array($db->query_silent($sql));
   //print_r($data);
 	//-------------
	$account_name=$data['login_id'];
	$username=$data['username'];
	$password=$data['password'];
	$first_name=$data['first_name'];
 	$last_name=$data['last_name'];
 	$primary_email=$data['primary_email'];
 	$conpany_name=$data['conpany_name'];
 	$country=$data['country'];
 	$primary_contact=$data['primary_contact_no'];
	$primary_address=$data['primary_address'];	
	$profession_type=$data['profession_type'];
   
 }
 /*
 	if form is submitted
 */
 
if($_REQUEST['data']=="data")
 {
    $username=$_REQUEST['username'];
	$first_name=$_REQUEST['first_name'];
 	$last_name=$_REQUEST['last_name'];
 	$primary_email=$_REQUEST['primary_email'];
 	$conpany_name=$_REQUEST['conpany_name'];
 	$country=$_REQUEST['country'];
  	$Username=$_REQUEST['Username'];
	$primary_contact=$_REQUEST['primary_contact'];
	$primary_address=$_REQUEST['primary_address'];
	$profession_type=$_REQUEST['profession_type'];
	$proficiency=$_REQUEST['proficiency'];
	
						
 }
		
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $get_template->process('html_header.php')?>
<script src="js/sign-up-candidate-profile.js" type="text/javascript" language="javascript1.2"></script>


<script type="application/javascript">
function brother_date_pick() {
  $('#datepicker').datepicker(
    'destroy'
  ).datepicker({
    firstDay: 1
  , dateFormat: 'yy-mm-dd'
  });
}
$(document).ready(function() {
  brother_date_pick();
});
</script>

</head>
<body>
<div id="men">
     <?php echo $get_template->process('global_header.php')?>
<div id="form_data">
<form   method="post"   enctype="multipart/form-data"  >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1cl">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <!--<div class="select_3cl"> Set your rates </div>-->
        <!--<div class="select_3cl"> Record an audio/video clip about yourself </div>-->
        <div class="select_4cl " >Set your rates</div>
       <div style="padding-left: 850px;"><a href="index.php"><img src="images/back_bu.gif" /></a> </div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Sign Up for a Candidate Profile </h1>
        <div class="form_area2">
         
         <?php if($msg!=""){?><div class="row2">
            <label class="label_cl2">&nbsp;</label>
            <?php if($msg!="") {?> <div class="error_msg"><?php echo $msg?></div><?php }?>
            <div class="clear"></div>
          </div><?php }?>
         
          <!--<div class="row2">
            <label class="label_cl2">Account Name* </label>
            <input name="account_name" id="account_name" type="text"  value="<?php //echo $account_name?>" class="input_cl2" />
             <?php //if($error0!="") {?> <div class="error_msg"><?php //echo $error0?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          
        </div>
      </div>
      <!--<div class="border_cl2"></div>-->
      <div class="sign_cl">
        <div class="form_area2">
        
        <div class="row2">
            <label class="label_cl2">User Name* </label>
            <input name="username" id="username" value="<?php echo $username//echo $first_name?>" type="text"  class="input_cl2" />
             <?php if($error0!="") {?> <div class="error_msg"><?php echo $error0?></div><?php }?>
            <div class="clear"></div>
          </div>
        
        <div class="row2">
            <label class="label_cl2">Password </label>
            <input name="password" id="password" type="password"  value="<?php echo $_SESSION['test']//echo $password?>" class="input_cl2" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Confirm Password* </label>
            <input name="confirm_password" id="confirm_password" type="password"   class="input_cl2" />
            <?php if($error01!="") {?> <div class="error_msg"><?php echo $error01?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          
          <div class="row2">
            <label class="label_cl2">First Name* </label>
            <input name="first_name" id="first_name" value="<?php echo $first_name?>" type="text"  class="input_cl2" />
             <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Last Name* </label>
            <input name="last_name" id="last_name" value="<?php echo $last_name?>" type="text"  class="input_cl2" />
             <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          <?php /*?><div class="row2">
            <label class="label_cl2">Primary Email*</label>
            <input name="primary_email" id="primary_email" value="<?php echo $primary_email?>" type="text"  class="input_cl2" />
            <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div><?php */?>
          <div class="row2">
            <label class="label_cl2">Primary Contact / Mobile* </label>
            <input name="primary_contact" id="primary_contact" value="<?php echo $primary_contact?>" type="text"  class="input_cl2" />
			<?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
            <div class="clear"></div>
          </div>
		  <div class="row2">
            <label class="label_cl2">Other Contact No's </label>
            <input name="other_contact" id="other_contact" value="<?php echo $other_contact?>" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
		  
		  <!--<div class="row2">
            <label class="label_cl2">It Professional </label>
            <select name="professinol">
			<option value="<?php #echo $profession_type?>"><?php #echo $profession_type?></option>
			<option value="">-------------</option>
			<option value="Full time">Full Time</option>
					<option value="Part time">Part Time</option>
					</select>
			
            <div class="clear"></div>
          </div>-->
		  
		  
		  
		  
		  <?php /*?><div class="row2">
            <label class="label_cl2">Gender </label>
            <input type="radio" name="gender" id="gender1" value="M" />
					   <label for="gender1">
					   &nbsp;Male </label>
					  &nbsp;&nbsp;
					  <input type="radio" name="gender" id="gender2" value="F" />
					  <label for="gender2">&nbsp;Female </label>
			
            <div class="clear"></div>
          </div><?php */?>
		  
		  
		  
		  
		  
		  
		  
          <div class="row2">
            <label class="label_cl2">  Address Line 1</label>
            <input name="primary_address" id="primary_address" value="<?php echo $primary_address?>" type="text"  class="input_cl2" />
            <?php if($error5!="") {?> <div class="error_msg"><?php echo $error5?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Address Line 2 / City </label>
            <input name="city" id="city" value="<?php echo $city?>" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> State </label>
            <input name="state" id="state" value="<?php echo $state?>" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Post Code </label>
            <input name="postcode" id="postcode" value="<?php echo $postcode?>" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Base Country* </label>
             <div class="select-hold"><select name="country" id="country" size="1" class="select_cl2">
            <option value="" selected="selected">Select</option>
           <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"  <?php if($country==$C_data['countries_id']){ echo ' selected="selected"';}else if($C_data['countries_id']=='13'){echo ' selected="selected"';}?>><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            
            </select> </div><?php if($error_country!="") {?> <div class="error_msg"><?php echo $error_country?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Has Work Eligibility</label>
           
            <div   style="width:374px; float:left"><input name="eligibility" type="radio" id="eligibility" value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label>
            <input name="eligibility" id="eligibility" type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label>
            
            </div>
            <div class="clear"></div>
          </div>
          
          <?php /*?><div class="row2">
            <label class="label_cl2">Birth Date</label>
            <select name="dob_date" id="dob_date"   class="input4">
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
							</select></td>
						  <td width="80" align="center" valign="middle"><select name="dob_year" id="dob_year"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=1901;$d<= date('Y');$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select><div id="error8" class="error"   style="display:none">Please select birthdate.</div>
			
            <div class="clear"></div>
          </div><?php */?>
          <div class="row2">
            <label class="label_cl2">Birth Date</label>
            <input name="dob_date" id="datepicker"  type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          
          
          
          <div class="row2">
            <label class="label_cl2">Languages</label>
             <div class="select-hold"><select name="languages" id="languages" size="1" class="select_cl2">
            <option value="" selected="selected">Select</option>
             <?php
			
			$C_sql='SELECT `id`, `name` FROM `languages` WHERE 1 ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"    <?php if($C_data['id']==$languages){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select> </div><?php if($error6!="") {?> <div class="error_msg"><?php echo $error6?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Proficiency </label>
             <div class="select-hold"><select name="proficiency" class="select_cl2" id="proficiency">
            <option value="" selected="selected">Select</option>
            <option value="1">basic</option>
            <option value="2">conversational</option>
            <option value="3">fluent</option></select></div>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Attach CV </label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_cv" name="attached_file_cv" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_cv"  name="attached_file_cv" size="50" onchange="attache('#attached_file_cv','#attached_cv')"/>
            <span><?php echo $_FILES['attached_file_cv']['name'];?></span>
            </div>
            <div class="clear"></div>
          </div>
            <div class="row2">
           <label class="label_cl2"> Attach Profile Photo </label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_photo" name="attached_photo" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_photo"  name="attached_file_photo" size="50" onchange="attache('#attached_file_photo','#attached_photo')"/> 
            </div>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Agreeing to our terms & conditions* </label>
           
            <div   style="width:374px; float:left"><input name="condition" type="radio" id="condition1" value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label>
            <input name="condition" id="condition2" type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label>
            
            </div>
            
             <?php if($error10!="") {?> <div class="error_msg"><?php echo $error10?></div><?php }?>
             
                         <div class="clear"></div>
                       
          </div>
         <?php  $sel="SELECT  * from pages";
		 $resultsss=mysql_query($sel);
		 $term=mysql_fetch_array($resultsss);
		  ?>
        <div style="overflow:scroll; width:380px; float:right; margin-right:263px; height:200px; display:block; margin-bottom:16px;">
        <div>
        <h1>  <?php echo $term["title"]; ?></h1>
        <?php echo $term["description"]; ?>
      
        
      </div></div>
        </div><div class="clear"></div>
          
          <div class="row2">
            <label class="label_cl2">How did you hear about us ?  </label>
            <!--<input type="text" id="hear_about_us" name="hear_about_us"  class="input_cl2"/>-->
             <div class="select-hold"><select id="hear_about_us" name="hear_about_us" class="select_cl2"><option  selected>Select</option><option>Newspapers</option><option>Friends</option><option>Job Sites</option></select></div>
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/continue_bu.gif" class="space_lc2"  />
            <div class="clear"></div>
          </div>
          
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><input type="hidden" id="data" name="data" value="data" />
  </form>
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