<?php
include_once('init.php');
 
  /*
 USER REQUEST FROM HOME PAGE
 */

if($s->value('R_FORM')!=1)
	{
	
		switch($s->value('R_FORM'))
		{
 		/* case 1:
			 header('location:sign-up-candidate-profile.php');
			 break;*/
		 case 2:
			 header('location:enter-recruiter-profile.php');
			 break;
		case 3:
			 header('location:register-subscriptions.php');
			 break;
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
	 
	 if(strlen($db->dataTrim($_REQUEST['username']))<=0)
	 {
	    $error1=$error_msg[11];
		$error=true;
 	 }
	 
	/* if(strlen($db->dataTrim($_REQUEST['last_name']))<=0)
	 {
	    $error2=$error_msg[13];
		$error=true;
 	 }*/
	 
	 if(strlen($db->dataTrim($_REQUEST['primary_email']))<=0)
	 {
	    $error3=$error_msg[12];
		$error=true;
 	 }
	 if(isValidEmail($db->dataTrim($_REQUEST['primary_email']))==false && strlen($db->dataTrim($_REQUEST['primary_email']))>0)
	 {
	    $error3=$error_msg[0];
		$error=true;
 	 }
	 //----------------------
	/*  if(strlen($db->dataTrim($_REQUEST['Username']))<=0)
	 {
	    $error4=$error_msg[11];
		$error=true;
 	 }*/
/*	 if(isValidEmail($db->dataTrim($_REQUEST['Username']))==false && strlen($db->dataTrim($_REQUEST['Username']))>0)
	 {
	    $error3="Please enter valid email.";
		$error=true;
 	 }*/
	 //------------------------------
	 
	/* if(strlen($db->dataTrim($_REQUEST['password']))<=0)
	 {
	    $error5=$error_msg[10];
		$error=true;
 	 }
	 if($db->dataTrim($_REQUEST['rt_password']) != $db->dataTrim($_REQUEST['password']))
	 {
	    $error6=$error_msg[9];
		$error=true;
 	 }*/
	
	 
	 $msg="";
	//****************************************************
	if($error==false)
	{   
	
		  	 $sql="SELECT * FROM `user_login_details` WHERE `vertical_id`='".VERTICAL_ID."' and `login_id` like '".$db->dataTrim($_REQUEST['Username'])."'";
	
			if($db->num_rows($db->query_silent($sql))==0 || $s->value('R_USER_ID')>0)
			{
					if($s->value('R_USER_ID')<=0)
					  {
					    $sql="INSERT INTO `user_login_details` 
							set  `vertical_id`='".VERTICAL_ID."'";
					   $condition="  ";
					 		  
					  }
					  else
					  {
					   $sql=" update  `user_login_details` set	 	  ";
					   $condition="   where `vertical_id`='".VERTICAL_ID."' and `id`='".$s->value('R_USER_ID')."'";
					  }
					
					 /* $sql.="
								`name`='".$db->dataTrim($_REQUEST['first_name'])." ".$db->dataTrim($_REQUEST['last_name'])."',
								`login_id`='".$db->dataTrim($_REQUEST['Username'])."',
						 	`password`='".md5($db->dataTrim($_REQUEST['password']))."',
								`type`='R',
								`date`=NOW(),
								`status`='".DISABLE."'".$condition;*/
								 $sql.="
								`name`='".$db->dataTrim($_REQUEST['username'])." ".$db->dataTrim($_REQUEST['first_name'])." ".$db->dataTrim($_REQUEST['last_name'])."',
								`login_id`='".$db->dataTrim($_REQUEST['primary_email'])."',
								`type`='R',
								`date`=NOW(),
								`status`='".DISABLE."'".$condition;
					  
					$db->query_silent($sql);
					
				 
					if($s->value('R_USER_ID')<=0)
					{
						$user_id=$db->insert_id();  
						$s->set("R_USER_ID",$user_id);
					}
					  /*
						PROFILE INFO
					  */
					
					  if($s->value('R_USER_ID')<=0)
					  {
					  echo  $profile_sql="INSERT INTO `profiles` set	 
							  `user_id`='".$s->value('R_USER_ID')."',`vertical_id`='".VERTICAL_ID."'";
					 $condition="  ";		  
					  }
					  else
					  {
					  echo   $profile_sql=" update  `profiles` set";
					  echo  $condition=" where `vertical_id`='".VERTICAL_ID."' and `user_id`='".$s->value('R_USER_ID')."'";
					  }
					 	$profile_sql.=" 			
							  `username`='".$db->dataTrim($_REQUEST['username'])."',
							  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
							  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."',
							  `conpany_name`='".$db->dataTrim($_REQUEST['conpany_name'])."',
							   `conpany_reg_id`='".$db->dataTrim($_REQUEST['conpany_reg_id'])."',
							   `conpany_reg_type`='".$db->dataTrim($_REQUEST['conpany_reg_type'])."',
							  `company_details`='".$db->dataTrim($_REQUEST['company_details'])."',
							    `company_phone`='".$db->dataTrim($_REQUEST['company_phone'])."',
							  
							   
							  `primary_email`='".$db->dataTrim($_REQUEST['primary_email'])."', 
							  `country`='".$db->dataTrim($_REQUEST['country'])."', 
							  `date`='".$db->dataTrim($_REQUEST['account_name'])."', 
							  `status`='".ENABLE."'" . $condition; 
							  
					  
						if($db->query_silent($profile_sql)==true  )
						{
						  $s->set('R_FORM','2');


						  header('location:enter-recruiter-profile.php');
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
 if($s->is_set('R_USER_ID')==true)
 { 
   $sql='SELECT * FROM `user_login_details` as uld left join profiles as p on uld.`id`=p.user_id WHERE uld.`vertical_id`="'.VERTICAL_ID.'" and uld.`id`='.$s->value('R_USER_ID');
   $data=$db->fetch_array($db->query_silent($sql));
   //print_r($data);
 	//-------------
	 $username=$data['username'];
	$first_name=$data['first_name'];
 //	$last_name=$data['last_name'];
 	$primary_email=$data['primary_email'];
 	$conpany_name=$data['conpany_name'];
	$conpany_phone=$data['company_phone'];
	$company_details=$data['company_details'];
 	$country=$data['country'];
  //	$Username=$data['login_id'];						
   $conpany_reg_id=$data['conpany_reg_id'];
   $conpany_reg_type=$data['conpany_reg_type'];
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
	$company_phone=$_REQUEST['company_phone'];
 	$country=$_REQUEST['country'];
  //	$Username=$_REQUEST['Username'];	
	$conpany_reg_id=$_REQUEST['conpany_reg_id'];
	$conpany_reg_type=$_REQUEST['conpany_reg_type'];						
 }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>

<script src="js/recruiter-registration.js" type="text/javascript" language="javascript1.2"></script>
</head>
<body>
<div id="men">
     <?php echo $get_template->process('global_header.php')?>
<div id="form_data">
 <form   method="post" id="tab1"  >
 <div class="canten">
    <div class="center_in">
    <div class="select_area">
        <div class="select_11clact">Recruiter Registration </div>
        <div class="select_22cl"> Recruiter Profile </div>
        <!--<div class="select_33cl">Register Subscriptions	 </div>
        <div class="select_44cl " >Register Alert-levels	</div>-->
        <div class="select_33cl">Register Alert-levels </div>
        <div style="padding-left: 850px;"><a href="index.php"><img src="images/back_bu.gif" /></a> </div>
        <div class="clear"></div>
      </div>
       
       <div class="sign_cl ">
      
        <h1>Recruiter Registration</h1>
        <div class="form_area2">
         <?php if($msg!="") {?>
         <div class="row2">
            <label class="label_cl2">  </label>
            <?php if($msg!="") {?> <div class="error_msg"><?php echo $msg?></div><?php }?>
            <div class="clear"></div>
          </div>
          <?php
		  }
		  ?>
          <div class="row2">
            <label class="label_cl2">User Name* </label>
            <input name="username" id="username" type="text"  class="input_cl2"  value="<?php echo $username?>"  />
           <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <!--<div class="row2">
            <label class="label_cl2">Last Name* </label>
            <input name="last_name" id="last_name" type="text"  class="input_cl2"  value="<?php //echo $last_name?>" />
             <?php //if($error2!="") {?> <div class="error_msg"><?php //echo $error2?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
		  
		  
          <div class="row2">
            <label class="label_cl2">Primary Email*</label>
            <input name="primary_email"  id="primary_email" type="text"  class="input_cl2" value="<?php echo $primary_email?>"  />
             <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div>
		  
          <div class="row2">
            <label class="label_cl2">Company Name</label>
            <input name="conpany_name" id="conpany_name" type="text"  class="input_cl2"  value="<?php echo $conpany_name?>" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Company Registration Id</label>
            <input name="conpany_reg_id" id="conpany_reg_id" type="text"  class="input_cl2"  value="<?php echo $conpany_reg_id?>" />
            <div class="clear"></div>
          </div>
            
            <div class="row2">
            <label class="label_cl2">Company Registration Type</label>
            <input name="conpany_reg_type" id="conpany_reg_type" type="text"  class="input_cl2"  value="<?php echo $conpany_reg_type?>" />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Company Phone No.</label>
            <input name="company_phone" id="company_phone" type="text"  class="input_cl2"  value="<?php echo $company_phone?>" />
            <div class="clear"></div>
          </div>
		  
		  <div class="row2">
            <label class="label_cl2">Company Address</label>
           <textarea name="company_details" cols="40" rows="4" style="width:375px;"><?php echo $company_details?></textarea>
           
            <div class="clear"></div>
          </div>
		  
		  
		  
          <div class="row2">
            <label class="label_cl2">Country </label>
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
          <!--<div class="row2">
            <label class="label_cl2"> Username </label>
            <input name="Username" id="Username" type="text"  class="input_cl2"  value="<?php //echo $Username?>" />
             <?php //if($error4!="") {?> <div class="error_msg"><?php //echo $error4?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          <!--<div class="row2">
            <label class="label_cl2">Password </label>
            <input name="password" id="password"   type="password"  class="input_cl2"  value=""/>
             <?php //if($error5!="") {?> <div class="error_msg"><?php //echo $error5?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          <!--<div class="row2">
            <label class="label_cl2"> Retype Password </label>
            <input name="rt_password" id="rt_password" type="password"  class="input_cl2"   value=""  >
             <?php //if($error6!="") {?> <div class="error_msg"><?php //echo $error6?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          
          <div class="row space_lc4">
          <input type="hidden" id="data" name="data" value="data" />
            <input  type="image"  src="images/continue_bu.gif"    />
            <br />

            <!--<div class="con_cl">By Continuing, agree to the skill Sapien Terms & Service</div>-->
           
            <div class="clear"></div>
          </div>
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
       <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
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