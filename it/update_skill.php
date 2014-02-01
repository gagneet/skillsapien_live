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

//echo $user_id;

if(isset($_POST['submit']))
{
$skills=$_POST['skills'];
$profile_summary=$_POST['profile_summary'];
$skill_keywords=$_POST['skill_keywords'];
$education=$_POST['education'];
$qualifications=$_POST['qualifications'];
$year_completed=$_POST['year_completed'];
$institution=$_POST['institution'];
$bid_desc=$_POST['bid_desc'];
$relevant_info=$_POST['relevant_info'];


$currency=$_POST['currency'];
$amount=$_POST['amount'];
$time_period=$_POST['time_period'];
$currency2=$_POST['currency2'];
$amount2=$_POST['amount2'];
$gt_time_period=$_POST['gt_time_period'];

$available_from=$_POST['available_from'];
$unavailable_start=$_POST['unavailable_start'];
$unavailable_end=$_POST['unavailable_end'];
$preferred_contact=$_POST['preferred_contact'];
$profile_photo=$_POST['profile_photo'];
$birth_year=$_POST['birth_year'];
$city_postcode=$_POST['city_postcode'];
$country=$_POST['country'];
$languages=$_POST['languages'];
$unavailable_time=$_POST['unavailable_time'];

    $update_query1="update skills_profiles set skills_profile='$skills',profile_summary='$profile_summary',skill_keywords='$skill_keywords',qualifications='$qualifications',education='$education',year_completed='$year_completed',institution='$institution',bid_desc='$bid_desc',relevant_info='$relevant_info' where user_id='".$user_id."'";

   $update_query2="update rates set lt_currency='$currency', lt_amount='$amount', lt_time_period='$time_period', gt_currency='$currency2', gt_amount='$amount2', gt_time_period='$gt_time_period', available_from='$available_from', unavailable_start_date='$unavailable_start',unavailable_end_date='$unavailable_end',contact_via='$preferred_contact',privacy_profile_photo='$profile_photo',privacy_birth_year='$birth_year',privacy_city_postcode='$city_postcode', privacy_country ='$country',privacy_languages='$languages',privacy_unavailable_time='$unavailable_time' where user_id='".$user_id."' ";

mysql_query($update_query1);

if(mysql_query($update_query2))
{
echo '<script type="text/javascript" language="javascript">alert("your record has successfully updated !");</script>';
}
else
{
echo '<script type="text/javascript" language="javascript">alert("your record has not updated !");</script>';
}

}


     $sql="SELECT p.photo,p.username,p.first_name,p.last_name,p.primary_contact_no,p.other_contact_no,p.primary_address,p.state,p.postcode,p.birthdate,p.city,sp.skills_profile,sp.skill_keywords,sp.profile_summary,sp.relevant_info,sp.year_completed,sp.bid_desc,sp.institution,sp.education,sp.qualifications,r.available_from,r.unavailable_start_date ,r.unavailable_end_date,r.lt_currency ,r.gt_currency,r.lt_amount,r.lt_time_period,r.gt_amount,r.gt_time_period,r.privacy_profile_photo,r.privacy_birth_year,r.privacy_city_postcode,r.privacy_country,r.privacy_languages,r.privacy_unavailable_time,r.contact_via, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$user_id."' and uld.vertical_id='".VERTICAL_ID."'";
	  $run=$db->query_silent($sql);
	 $data=$db->fetch_array($run);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<script src="js/counter-offer-acceptskill-profiles-interview.js" type="text/javascript" language="javascript1.2"></script>
<body>
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <form method="post" action="" name="frm">
      <div class="sign_cl">
      <h1>Update Skill</h1>
        <div class="form_area2">
        
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
        
      
          
            <div class="row2">
            <label class="label_cl2">Skill Profile Title*</label>
            <input name="skills" id="skills" type="text"  class="input_cl2" value="<?php echo $data['skills_profile']?>"/>
             <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
            </div>
          
            <div class="row2">
            <label class="label_cl2">Profile Summary*</label>
             <textarea name="profile_summary" cols="40" rows="4" style="width:375px;"><?php echo $data['profile_summary']?></textarea>
            <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
            </div>
          
            <div class="row2">
            <label class="label_cl2">Skill Keywords*</label>
               <textarea name="skill_keywords" cols="40" rows="4" style="width:375px;"><?php echo $data['skill_keywords']?></textarea>
             <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
            </div>
          
            <div class="row2">
            <label class="label_cl2">Professionals Qualifications </label>
            <input name="education" id="education" type="text"  class="input_cl2" value="<?php echo $data['education']?>"/>
          
            <div class="clear"></div>
            </div>
          
            <div class="row-n2">
            <label class="label_cl-n2">Highest Education<?php $C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`id` ASC';
			$C_run=$db->query_silent($C_sql);?></label>
            <div class="input_cl-bx">
            <select name="qualifications" id="qualifications"   size="1" class="input_cl-n2" >
            <option value="" selected="selected">Select</option>
           <?php
			
			$C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`id` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  <?php if($C_data['id']==$data['qualifications']){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
             <label class="label_cl-n2" style="width:122px;">Year Completed</label>
            <input name="year_completed" id="year_completed" type="text"  class="input_cl-n2" value="<?php echo $data['year_completed']?>"/>
            
            <div class="clear"></div>
            </div>
          
         
          
            <div class="row2">
            <label class="label_cl2">Institution Awarded</label>
            <input name="institution" id="institution" type="text"  class="input_cl2" value="<?php echo $data['institution']?>"/>
            <div class="clear"></div>
            </div> 
          
            <div class="row2">
            <label class="label_cl2">Why I should get the highest bid*</label>
             <textarea name="bid_desc" cols="40" rows="4" style="width:375px;"><?php echo $data['bid_desc']?></textarea>
          <!--<input name="bid_desc" id="bid_desc" type="text"  class="input_cl2" value="<?php //echo $data['bid_desc']?>"/>-->
             <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
            <div class="clear"></div>
            </div>
          
         
                  
         
            <!--<div class="label_cl3">Upload or link an audio/video clip introducing your profile:</div>-->
         
   
    
           <!-- <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2">URL:</label>
            <input name="relevant" id="relevant" type="text"  class="input_cl2"  value="<?php #echo $data['birthdate']?>"/>
             <?php #if($error8!="") {?> <div class="error_msg"><?php #echo $error8?></div><?php #}?>
            <div class="clear"></div>
            </div>
              
            <div class="row2">
            <label class="label_cl2">Attach Audio/Video File</label>
            <div >
            <input type="file" class="browsFile" id="attached_file_audio"  name="attached_file_audio" size="46" onchange="attache('#attached_file_audio','#attached_audio')"/>
             <?php #if($erro_audio_video!="") {?> <div class="error_msg"><?php #echo $erro_audio_video?></div><?php #}?>
            </div>
            </div>-->
    
            <div class="row2">
            <label class="label_cl2">Any other relevant info</label>
              <textarea name="relevant_info" cols="40" rows="4" style="width:375px;"><?php echo $data['relevant_info']?></textarea>
            <?php if($error8!="") {?> <div class="error_msg"><?php echo $error8?></div><?php }?>
            <div class="clear"></div>
            </div>
          
          
          
            <div class="row2">
            <label class="label_cl2">I would not get out of bed for <br />less than* </label>
            <div class="currency">
            <select name="currency" size="1" class="bordernune"  id="Currency">
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
            <input name="amount" type="text"  id="amount"  src="type" class="currency1" value="<?php echo $data['lt_amount']?>" />
            <!--<div class="currency">
            <select name="time_uom_max" size="1" class="bordernune"  id="time_uom_max">
               <option value="Hour">Per Hour</option>
               <option value="Day">Per Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>-->
            <input name="time_period" id="time_period1" type="radio" value="Day" style="margin: 10px  4px 0px 5px;" <?php if($data['lt_time_period']=="Day"){ echo ' checked="checked" ';}?> />
             <label for="time_period1"> Per Day</label>
            <input name="time_period" id="time_period2" type="radio" value="Month" style="margin: 10px 4px 0px 5px;" <?php if($data['lt_time_period']=="Month"){ echo ' checked="checked" ';}?> />
           <label for="time_period2">Month</label>
             <input name="time_period"  id="time_period3" type="radio" value="Year" style="margin: 10px 4px 0px 5px;" <?php if($data['lt_time_period']=="Year"){ echo ' checked="checked" ';}?> />
           <label for="time_period3">Year</label>
           <?php if($error0!="") {?> <div class="error_msg"><?php echo $error0?></div><?php }?>
             <div class="clear"></div>
              
            </div>
         

            <div class="row2">
            <label class="label_cl2">What would be my ultimate ideal rate:
            (buy-now rate) </label>
            <div class="currency">
            <select name="currency2" size="1" class="bordernune" id="Currency2">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>" <?php if($C_data['id']==$data['gt_currency']){ echo ' selected="selected" ';}?> ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="amount2" type="text" id="amount2"   src="type" class="currency1" value="<?php echo $data['gt_amount']?>" />
            <!--<div class="currency">
            <select name="time_uom_max" size="1" class="bordernune"  id="time_uom_max">
               <option value="Hour">Per Hour</option>
               <option value="Day">Per Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>-->
            <input name="gt_time_period" id="timeperiod1" type="radio" value="Day" style="margin: 10px  4px 0px 5px;" <?php if($data['gt_time_period']=="Day"){ echo ' checked="checked" ';}?> />
             <label for="timeperiod1"> Per Day</label>
            <input name="gt_time_period" id="timeperiod2" type="radio" value="Month" style="margin: 10px 4px 0px 5px;" <?php if($data['gt_time_period']=="Month"){ echo ' checked="checked" ';}?> />
           <label for="timeperiod2">Month</label>
             <input name="gt_time_period"  id="timeperiod3" type="radio" value="Year" style="margin: 10px 4px 0px 5px;" <?php if($data['gt_time_period']=="Year"){ echo ' checked="checked" ';}?> />
           <label for="timeperiod3">Year</label>
           
            <div class="clear"></div>
            </div>

            <div class="row2">
            <label class="label_cl2">I am first available from*</label>
            <input name="available_from" id="datepicker1" type="text"  class="input_cl2" value="<?php echo $data['available_from']?>" />
            <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
            </div>
          
            <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2"><i>(Optional: I am unavailable between):</i></label>
            <input name="unavailable_start" id="datepicker2" type="text"  class="input_cl2" value="<?php echo $data['unavailable_start_date']?>" /><div class="clear"></div>
            </div> 
            <div style="display:block; text-align:center" class="font-12">And:</div>
            <div class="row2">
            <label class="label_cl2"></label>
            <input name="unavailable_end" id="datepicker3" type="text"  class="input_cl2" value="<?php echo $data['unavailable_end_date']?>" />
            <div class="clear"></div>
            </div> 
          
            <div class="row2">
            <label class="label_cl2">Preferred contact via:</label>
            <input name="preferred_contact[]" id="preferred_contact1" type="checkbox" value="Phone" style="margin: 10px  4px 0px 5px;" <?php if($data['contact_via']=="Phone"){ echo ' checked="checked" ';}?> />
            <label for="preferred_contact1"> Phone </label>
            <input name="preferred_contact[]" id="preferred_contact2" type="checkbox" value="Email" style="margin: 10px 4px 0px 5px;" <?php if($data['contact_via']=="Email"){ echo ' checked="checked" ';}?> />
            <label for="preferred_contact2">Email</label>
            <input name="preferred_contact[]" id="preferred_contact3" type="checkbox" value="Sms" style="margin: 10px 4px 0px 5px;" <?php if($data['contact_via']=="Sms"){ echo ' checked="checked" ';}?> />
            <label for="preferred_contact3">Sms</label>
            <div class="clear"></div>
            </div>
          
            <div class="row2">
            <label class="label_cl2">Privacy options :</label>          
            <div   style="width:374px; float:left">
           <!-- <label >Profile Photo :</label>
            <input name="condition" type="radio" id="condition1" value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label>
            <input name="condition" id="condition2" type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label>-->
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="font-12">
  <tr>
    <td colspan="3" align="left" valign="top">Recruiters can see my:</td>
    </tr>
  <tr>
  
    <td align="left" valign="top"> <label >Profile Photo :</label></td>
    <td align="left" valign="top"> <input name="profile_photo" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_profile_photo']=="yes"){ echo ' checked="checked" ';}?> />
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="profile_photo"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_profile_photo']=="yes"){ echo ' checked="checked" ';}?>  />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Birth Year :</label></td>
    <td align="left" valign="top"> <input name="birth_year" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_birth_year']=="yes"){ echo ' checked="checked" ';}?>/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="birth_year"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_birth_year']=="no"){ echo ' checked="checked" ';}?> />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >City/Post Code :</label></td>
    <td align="left" valign="top"> <input name="city_postcode" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_city_postcode']=="yes"){ echo ' checked="checked" ';}?>/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="city_postcode"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_city_postcode']=="no"){ echo ' checked="checked" ';}?> />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Base Country :</label></td>
    <td align="left" valign="top"> <input name="country" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_country']=="yes"){ echo ' checked="checked" ';}?>/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="country"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_country']=="no"){ echo ' checked="checked" ';}?> />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Languages :</label></td>
    <td align="left" valign="top"> <input name="languages" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_languages']=="yes"){ echo ' checked="checked" ';}?>/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="languages"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_languages']=="no"){ echo ' checked="checked" ';}?> />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Unavailable Times :</label></td>
    <td align="left" valign="top"> <input name="unavailable_time" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; " <?php if($data['privacy_unavailable_time']=="yes"){ echo ' checked="checked" ';}?>/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="unavailable_time"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" <?php if($data['privacy_unavailable_time']=="no"){ echo ' checked="checked" ';}?> />
            <label for="condition2">No</label></td>
  </tr>

</table>

            </div>
            
            <div class="clear"></div>
          </div>
          
          
             <div class="row ">
             <input type="hidden" name="submit" />
            <input  type="image"  src="images/update_buttons.gif" class="space_lc4" name="submit"  />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!--<img  src="images/cancle_buttons.gif"  onclick="javascript:window.location.href='?cancle'"  width="125"  height="35" border="0" />-->
            <div class="clear"></div>
          </div>
          
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div><input type="hidden" id="data" name="data" value="data" />
      </form>
      
      
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
 