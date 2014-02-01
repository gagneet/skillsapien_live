<?php
include_once('init.php');
 /*
 USER REQUEST FROM HOME PAGE
 */
 if($s->value('R_FORM')!=2)
	{
	
		switch($s->value('R_FORM'))
		{
 		 case 1:
			 header('location:sign-up-candidate-profile.php');
			 break;
		/* case 2:
			 header('location:enter-recruiter-profile.php');
			 break;*/
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
	 
	/* if(strlen($db->dataTrim($_FILES['attached_profile_img']['name']))<=0)
	 {
	    $error1=$error_msg[17];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['p_title']))<=0)
	 {
	    $error2=$error_msg[18];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['profile_description']))<=0)
	 {
	    $error3=$error_msg[19];
		$error=true;
 	 }
	 
	  if(strlen($db->dataTrim($_REQUEST['contacts']))<=0)
	 {
	    $errorcontact="Please enter your contact no!";
		$error=true;
 	 }*/
	 
	//****************************************************
	if($error==false)
	{
	  //	$profile_image="";
		 
		if($_FILES['attached_profile_img']['name']!=""  && $_FILES['attached_profile_img']['error']==0)
		{
		 $profile_image="R_".$s->value('R_USER_ID').".".get_extension($_FILES['attached_profile_img']['name']);
 	     $error1=UploadImg(P_IMAGE_FOLDER.$profile_image,$_FILES['attached_profile_img'],true);
	    }
	
		 /*
		 add  image in profile table
		 */
		   $sql=" update profiles set photo='".$profile_image."' where `vertical_id`='".VERTICAL_ID."' and `user_id` =".$s->value('R_USER_ID')."";
		   $db->query_silent($sql);
		   
		   
		   //===========================================
		   $sql="INSERT INTO `recruiter_profile` set
				  `user_id` =".$s->value('R_USER_ID').",
				   `image`='".$profile_image."', 
				   `title`='".$db->dataTrim($_REQUEST['p_title'])."', 
				   `description`='".$db->dataTrim($_REQUEST['profile_description'])."' ,
				    `industries`='".$db->dataTrim($_REQUEST['industry'])."',
				   `contacts` ='".$db->dataTrim($_REQUEST['contacts'])."',
				   `tags`='".$db->dataTrim($_REQUEST['tags'])."' , 
				  `date` =now(),
				  `status`='".ENABLE."'";
 		 
		 		if($error1=="")
				{
					if($db->query_silent($sql)==true  )
					{
					  $s->set('R_FORM','4');
				   header('location:register-alert-levels.php');
					   /*$s->set('R_FORM','3');
					   header('location:register-subscriptions.php');*/
					}
				}						

	} 
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
<form id="tab2" method="post"  enctype="multipart/form-data"    >
 <div class="canten">
    <div class="center_in">
    
    <div class="select_area">
        <div class="select_11cl">Recruiter Registration </div>
        <div class="select_22clact"> Recruiter Profile </div>
        <!--<div class="select_33cl">Register Subscriptions	 </div>
        <div class="select_44cl " >Register Alert-levels	</div>-->
        <div class="select_33cl">Register Alert-levels </div>
        <div class="clear"></div>
      </div>
    
    <div class="sign_cl space_mn">
        <h1>Enter Recruiter Profile</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">Company Logo </label>
              <div class="browseInput">
			  
			
			
			 
			  
           <input   type="text"  class="attach" id="attached_profile_img2" name="attached_profile_img2" value="<?php echo  $attached_profile_img2?>" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_profile_img"  name="attached_profile_img" size="50" onchange="attache('#attached_profile_img','#attached_profile_img2')"/>
			
			
              </div>
              <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <!--<div class="row2">
            <label class="label_cl2">Profile title </label>
            <input name="p_title" id="p_title" type="text"  class="input_cl2" />
            <?php //if($error2!="") {?> <div class="error_msg"><?php //echo $error2?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          <!--<div class="row2">
            <label class="label_cl2">Description of your profile</label>
            <textarea name="profile_description" id="profile_description" class="textarea_cl2"></textarea>
            <?php //if($error3!="") {?> <div class="error_msg"><?php //echo $error3?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          
           <div class="row2">
            <label class="label_cl2"> Industry <?   $C_sql='SELECT * FROM `industry` WHERE 1 ORDER BY `industry`.`name` ASC';
			$C_run=$db->query_silent($C_sql);?> </label>
             <div class="select-hold"><select name="industry" id="industry"  size="1" class="select_cl2">
            <option value="" selected="selected"> Select Industry</option>
		    <?php
			
			
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>                
            </select></div>
            <div class="clear"></div>
          </div>
          <?php /*?><div class="row2">
            <label class="label_cl2">Contacts(Phone No., Mobile No.)</label>
			<input type="text" name="contacts" id="contacts"   class="input_cl2" />
            <!--<textarea name="contacts" id="contacts" class="textarea_cl2"></textarea>-->
            <?php if($errorcontact!="") {?> 
            <div class="error_msg"><?php echo $errorcontact?></div><?php }?>
          
            <div class="clear"></div>
          </div><?php */?>
          <!--<div class="row2">
            <label class="label_cl2">Tags [Comma separated]</label>
            <input name="tags" id="tags" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>-->
          <div class="row space_lc4">
            <input  type="image"  src="images/continue_bu.gif"   />
            <br />

            <!--<div class="con_cl">By Continueing, agree to the skill Sapien Terms & Service</div>-->
           
            <div class="clear"></div>
          </div>
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div> <input type="hidden" id="data" name="data" value="data" />
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