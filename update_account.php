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


/* 	Recruiter  Update  */

if($s->is_set('R_USER_ID')==true){

if(isset($_POST['submit'])){

$username = $_POST['username'];
$conpany_name = $_POST['conpany_name'];
$conpany_reg_id = $_POST['conpany_reg_id'];
$conpany_reg_type = $_POST['conpany_reg_type'];
$company_details = $_POST['company_details'];
$company_phone = $_POST['company_phone'];
$country = $_POST['country'];
$attached_photo = $_POST['attached_photo'];

$photo="C_".$s->value('UESR_ID').".".get_extension($_FILES['attached_file_photo']['name']);
		UploadImg(P_IMAGE_FOLDER.$photo,$_FILES['attached_file_photo'],true);


$update_queryr = "UPDATE  `profiles` SET username='".$username."',conpany_name='".$conpany_name."',conpany_reg_id='".$conpany_reg_id."',conpany_reg_type='".$conpany_reg_type."',company_details='".$company_details."',company_phone='".$company_phone."',country='".$country."' WHERE user_id='".$user_id."'";


$res = mysql_query($update_queryr);

if($attached_photo!=''){

$updaterr = "UPDATE  `profiles` SET photo='".$photo."' WHERE user_id='".$user_id."'";
}
$rr = mysql_query($updaterr);


if($res){

echo '<script type="text/javascript" language="javascript">alert("your record has successfully updated !");</script>';

}else{
echo '<script type="text/javascript" language="javascript">alert("Something Wrong!");</script>';
}

}



$sql="SELECT p.photo,p.username,p.user_id,p.conpany_name,p.conpany_reg_id,p.conpany_reg_type,p.company_details,p.company_phone,p.country,p.first_name,p.last_name,p.primary_email,p.primary_contact_no,p.other_contact_no,p.primary_address,p.state,p.postcode,p.birthdate,p.city,p.language,p.proficiency, uld.id,uld.type  FROM  profiles as p, user_login_details as uld where uld.type='R' and uld.id=p.user_id  and uld.id='".$user_id."'";

 $run=$db->query_silent($sql);
$data=$db->fetch_array($run);

}

?>
<?php
if($s->is_set('R_USER_ID')==false){

if(isset($_POST['submit'])){

$username = $_POST['username']; 
$first_name = $_POST['first_name']; 
$last_name = $_POST['last_name']; 
$primary_email = $_POST['primary_email']; 
$primary_contact = $_POST['primary_contact']; 
$other_contact = $_POST['other_contact']; 
$primary_address = $_POST['primary_address']; 
$city = $_POST['city']; 
$state = $_POST['state']; 
$postcode = $_POST['postcode']; 
$country = $_POST['country']; 
$dob_date = $_POST['dob_date']; 
$language = $_POST['language']; 
$proficiency = $_POST['proficiency']; 
$attached_photo = $_POST['attached_photo']; 
$attached_file_cv = $_POST['attached_file_cv']; 

$photo="C_".$s->value('R_USER_ID').".".get_extension($_FILES['attached_file_photo']['name']);
		UploadImg(P_IMAGE_FOLDER.$photo,$_FILES['attached_file_photo'],true);
		
$cv=$s->value('UESR_ID').".".get_extension($_FILES['attached_file_cv']['name']);	
		UploadImg(CV_FOLDER.$cv,$_FILES['attached_file_cv'],true); 

$updatec = "UPDATE `profiles` SET username='".$username."',first_name='".$first_name."',last_name='".$last_name."',primary_email='".$primary_email."',primary_contact_no='".$primary_contact."',
other_contact_no='".$primary_contact."',primary_address='".$primary_address."',city='".$city."',state='".$state."',postcode='".$postcode."',country='".$country."',birthdate='".$dob_date."',language='".$language."',
proficiency='".$proficiency."' WHERE user_id = '".$user_id."'";


$resc = mysql_query($updatec);
if($attached_photo!=''){
$updatee = "UPDATE `profiles` SET photo='".$photo."' WHERE user_id = '".$user_id."'";
}
$req = mysql_query($updatee);

if($attached_file_cv!=''){
  echo $updatecc = "UPDATE `cvs` SET name='".$attached_file_cv."' WHERE user_id = '".$user_id."'";
}
$rescc = mysql_query($updatecc);

if($resc || $rescc){

echo '<script type="text/javascript" language="javascript">alert("your record has successfully updated !");</script>';

}else{

echo '<script type="text/javascript" language="javascript">alert("SomeThing Wrong!");</script>';

}

}

}
  
	$sqlc = "SELECT * FROM profiles WHERE user_id='".$user_id."'";
	
	$runc=$db->query_silent($sqlc);
	$datac=$db->fetch_array($runc);
	
	$sqlcc = "SELECT * FROM cvs WHERE user_id = '".$user_id."'";
	
	$runcc=$db->query_silent($sqlcc);
	$datacc=$db->fetch_array($runcc);
	 
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
     <div style="padding-left:20px;">
     
            <a href="change-password.php"><img src="images/change-password-btn.gif" /></a>
            &nbsp;&nbsp;
            <?php  
		        if($s->is_set('R_USER_ID')==true)
                  {
		     ?>
             <a href="buy_credit.php"><img src="images/buy-credit-btn.gif" /></a>
               
			 <?php }?></div>
      <form method="post" action="update_account.php" name="frm" enctype="multipart/form-data" >
      <div class="sign_cl" style="margin:20px 0 0 20px;">
      <h1>Update Account </h1>
      <div class="imageHolder" style="float:right; display:inline; box-shadow:0px 0px 5px rgba(0,0,0,.25); border:solid 2px #ffffff; margin-right:40px;"><?php if($s->is_set('R_USER_ID')==true)
                  {?><img src="profile_img/<?php echo $data['photo']; ?>" alt="" width="150" />
                  <?php } else { ?>
                  <img src="profile_img/<?php echo $datac['photo']; ?>" alt="" width="150" /><?php } ?></div>
      <input type="hidden" id="data" name="data" value="data" />
      	</div>
        <div class="form_area2" style="margin-left:20px; width:630px; float:left; display:inline;">
        
        <?php
		if($msg!="")
		{
		?>
          <div class="row2">
            <label class="label_cl2"></label>
            <div class="okmsg"><?php echo $msg?></div>
             <div class="clear"></div>
          </div>
        <?php } ?>
        
         <?php  
		        if($s->is_set('R_USER_ID')==true)
                  {
		     ?>
        
        	<div class="row2">
            <label class="label_cl2">Registration Id:</label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['user_id']?>" name="user_id"  readonly="readonly" />
            <div class="clear"></div>
          	</div>
          
          
          <div class="row2">
            <label class="label_cl2"> User Name </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['username']?>" name="username"  />
            <div class="clear"></div>
          </div>
          
          
           <div class="row2">
            <label class="label_cl2"> Company Name </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['conpany_name']?>" name="conpany_name"  />
            <div class="clear"></div>
          </div>
          
           <div class="row2">
            <label class="label_cl2"> Company Registration Id </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['conpany_reg_id']?>" name="conpany_reg_id"  />
            <div class="clear"></div>
          </div>
           <div class="row2">
            <label class="label_cl2">Company Registration Type</label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['conpany_reg_type']?>" name="conpany_reg_type"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Company Address</label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['company_details']?>" name="company_details"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Company Phone</label>
             <input  type="text"  class="input_cl2"  value="<?php echo $data['company_phone']?>" name="company_phone"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Base Country* </label>
            <div class="select-hold"><select  id="country" size="1" class="select_cl2" name="country" >
            <option value="" >Select</option>
           <?php
			$R_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$R_run=$db->query_silent($R_sql);
			while($R_data=$db->fetch_array($R_run))
			{
			 ?>
             <option value="<?php echo $R_data['countries_id']?>"<?php if($data['country']==$R_data['countries_id']){ echo ' selected="selected"';}?>><?php echo $R_data['countries_name']?></option>
             <?php 
			}
			?>
            
            </select>
            </div>
            
             <?php if($error_country!="") {?> <div class="error_msg"><?php echo $error_country?></div><?php }?>
            <div class="clear"></div>
           </div>
           
            <div class="row2">
           <label class="label_cl2"> Attach Profile Photo </label>
            <div class="browseInput">
            <input   type="text"  class="attach"  id="attached_photo" name="attached_photo" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />  <br />
            <input type="file" class="browsFile" id="attached_file_photo"  name="attached_file_photo" size="50" onchange="attache('#attached_file_photo','#attached_photo')"/> 
          
            <div style="margin-top:10px;"><img src="profile_img/<?php echo $data['photo']; ?>" alt="" width="50" height="50"></div>
            </div>
                  
                      
           <?php } ?>
                      
          
				<?php
                if($s->is_set('R_USER_ID')==false)
                {
                ?>
                
            <div class="row2">
            <label class="label_cl2"> User Name* </label>
            <input  type="text"  class="input_cl2"  value="<?php echo $datac['username']?>" name="username"  />
            <div class="clear"></div>
            </div>
                
          <div class="row2">
            <label class="label_cl2"> First Name* </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['first_name']?>" name="first_name"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Last Name* </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['last_name']?>" name="last_name"  />
            <div class="clear"></div>
          </div>
         
          <div class="row2">
            <label class="label_cl2">Contact Email </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['primary_email']?>" name="primary_email"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Primary Contact/ Mobile* </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['primary_contact_no']?>" name="primary_contact"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Other Contact No's </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['other_contact_no']?>" name="other_contact"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Address Line 1 </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['primary_address']?>" name="primary_address"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Address Line 2/ City </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['city']?>" name="city"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> State </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['state']?>" name="state" maxlength="10"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Post Code </label>
             <input  type="text"  class="input_cl2"  value="<?php echo $datac['postcode']?>" name="postcode" maxlength="6"  />
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Base Country* </label>
            <div class="select-hold"><select  id="country" size="1" class="select_cl2" name="country" >
            <option value="" selected="selected">Select</option>
           <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"<?php if($datac['country']==$C_data['countries_id']){ echo ' selected="selected"';}?>><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            
            </select>
            </div>
            
             <?php if($error_country!="") {?> <div class="error_msg"><?php echo $error_country?></div><?php }?>
            <div class="clear"></div>
           </div>
          
            <div class="row2">
            <label class="label_cl2">Birth Date</label>
            <input name="dob_date" id="datepicker"  type="text"  class="input_cl2" value="<?php echo $datac['birthdate']?>" />
            <div class="clear"></div>
            </div>
          
            <div class="row2">
            <label class="label_cl2">Languages</label>
            <div class="select-hold">
            <select name="language" id="language" size="1" class="select_cl2">
            <option value="">Select</option>
             <?php
			
			$C_sql='SELECT `id`, `name` FROM `languages` WHERE 1 ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"<?php if($datac['language']==$C_data['id']){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select> 
            </div>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2"> Proficiency </label>
            <div class="select-hold">
            <select name="proficiency" class="select_cl2">
            <option value="">Select</option>
             <?php
			
			$C_sql='SELECT `id`, `name` FROM `proficiency` WHERE 1 ORDER BY `proficiency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"<?php if($datac['proficiency']==$C_data['id']){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <div class="clear"></div>
            </div>
          
            
         
          <?php  
		 if($s->is_set('USER_ID')==true)
          { ?>
		   <div class="row2">
            <label class="label_cl2"> Attach CV </label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_cv" name="attached_file_cv" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_cv"  name="attached_file_cv" size="50" onchange="attache('#attached_file_cv','#attached_cv')"/>
           
            <div style="margin-top:10px;"><?php //echo $_FILES['attached_file_cv']['name'];?><?php echo $datacc['name']; ?></div>
            </div>
            <div class="clear"></div>
          </div>
          <?php }?>
         
            <div class="row2">
           <label class="label_cl2"> Attach Profile Photo </label>
            <div class="browseInput">
            <input   type="text"  class="attach"  id="attached_photo" name="attached_photo" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_photo"  name="attached_file_photo" size="50" onchange="attache('#attached_file_photo','#attached_photo')"/> 
            <br />
            <div style="margin-top:10px;"><img src="profile_img/<?php echo $datac['photo']; ?>" alt="" width="50" height="50"></div>
            </div>
            <div class="clear"></div>
          </div>
           <?php } ?>
            
          
          
             <div class="row ">
             <br />
            <input type="hidden" name="submit" />
            <input  type="image"  src="images/update_buttons.gif" class="space_lc4" name="submit"  />
            <?php  
		        if($s->is_set('R_USER_ID')==false)
                  {
		     ?>
            <!-- <a href="buy_credit.php"><img src="images/buy-credit-btn.gif" /></a>-->
			 <?php }?>
           
            <div class="clear"></div>
          </div>
          
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      
      	
        
        
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
 