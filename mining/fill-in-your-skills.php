<?php
include_once('init.php');

 
	if($s->value('C_FORM')!=2)
	{
	
		switch($s->value('C_FORM'))
		{
		 case 1:
		     header('location:sign-up-candidate-profile.php');
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

$personality=$_REQUEST['personality'];
$skills=$_REQUEST['skills'];
$profile_summary=$_REQUEST['profile_summary'];
$skill_keywords=$_REQUEST['skill_keywords'];
$bid_desc=$_REQUEST['bid_desc'];
$year_completed=$_REQUEST['year_completed'];
$institution=$_REQUEST['institution'];
$qualifications=$_REQUEST['qualifications'];
$experience=$_REQUEST['experience'];
$education=$_REQUEST['education'];
$country=$_REQUEST['country'];
$introducing_url=$_REQUEST['introducing_url'];
$languages=$_REQUEST['languages'];
$personality=$_REQUEST['personality'];
 if($_REQUEST['data']=="data")
   {
     
	 $error=false;
	 
	
	 if(strlen($db->dataTrim($_REQUEST['skills']))<=0)
	 {
	    $error1=$error_msg[37];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['profile_summary']))<=0)
	 {
	    $error2=$error_msg[50];
		$error=true;
 	 }
	 
	/* if(strlen($db->dataTrim($_REQUEST['skill_keywords']))<=0)
	 {
	    $error3=$error_msg[51];
		$error=true;
 	 }
	 */
	 if(strlen($db->dataTrim($_REQUEST['bid_desc']))<=0)
	 {
	    $error4=$error_msg[45];
		$error=true;
 	 }
	 
	/* if($_REQUEST['qualifications']=="")
	 {
	    $error2=$error_msg[38];
		$error=true;
 	 }
	 if($_REQUEST['experience']=="")
	 {
	    $error3=$error_msg[39];
		$error=true;
 	 }
	 if($_REQUEST['education']=="")
	 {
	    $error4=$error_msg[40];
		$error=true;
 	 }
	 if($_REQUEST['country']=="")
	 {
	    $error5=$error_msg[35];
		$error=true;
 	 }
	 if($_REQUEST['languages']=="")
	 {
	    $error6=$error_msg[41];
		$error=true;
 	 }
	 */
	 /*if(strlen($db->dataTrim($_REQUEST['personality']))<=0)
	 {
	    $error0=$error_msg[36];
		$error=true;
 	 }*/
	 
	 //==========================================
	 if( $error==false)
	 {
	   
   /*
   add skills profile
   */
   
     $sql="INSERT INTO  `skills_profiles` 
   					set
							`user_id` =".$s->value('UESR_ID').",
							`questionnaire` ='".$db->dataTrim($_REQUEST['personality'])."',
							`skills_profile` ='".$db->dataTrim($_REQUEST['skills'])."',
							`profile_summary` ='".$db->dataTrim($_REQUEST['profile_summary'])."',
							`skill_keywords` ='".$db->dataTrim($_REQUEST['skill_keywords'])."',
							`qualifications`='".$db->dataTrim($_REQUEST['qualifications'])."' ,
							`education` ='".$db->dataTrim($_REQUEST['education'])."',
							`year_completed` ='".$db->dataTrim($_REQUEST['year_completed'])."',
							`institution` ='".$db->dataTrim($_REQUEST['institution'])."',
							`bid_desc` ='".$db->dataTrim($_REQUEST['bid_desc'])."',
							`experience` ='".$db->dataTrim($_REQUEST['experience'])."',
							`country` ='".$db->dataTrim($_REQUEST['country'])."',
							`languages` ='".$db->dataTrim($_REQUEST['languages'])."',
							`introducing_profile_url` ='".$db->dataTrim($_REQUEST['introducing_url'])."',
							`relevant_info` ='".$db->dataTrim($_REQUEST['relevant'])."',
							`interests` ='".$db->dataTrim($_REQUEST['interests'])."',
							`date` =now(),
							`status`='".ENABLE."',
						    `vertical_id'='".VERTICAL_ID."'
		";
		
		if($db->query_silent($sql) )
		{	
		$s->set('C_FORM','4');
			header('location:set-rates.php');	
		/*   $s->set('C_FORM','3'); 
		header('location:record-audio.php');*/
		}
	 }
  }	 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<script type="text/javascript" language="javascript">
function watermark(inputId,text){
  var inputBox = document.getElementById(inputId);
    if (inputBox.value.length > 0){
      if (inputBox.value == text)
        inputBox.value = '';
    }
    else
      inputBox.value = text;
}
</script>
</head>
<body>
<div id="men">
       <?php echo $get_template->process('global_header.php')?>

 <form id="tab2" method="post"   onSubmit="return form2()"  >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2clact">Fill-in your skills </div>
        <!--<div class="select_3cl"> Record an audio/video clip about yourself </div>-->
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Skills Profile </h1>
        <div class="form_area2">
          <!--<div class="row2">
            <label class="label_cl2">Some really good personality questionnaires… </label>
            <input name="personality" id="personality" type="text"  class="input_cl2" value="<?php //echo $qualifications?>" />
            <?php //if($error0!="") {?> <div class="error_msg"><?php //echo $error0?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
          <div class="row2">
            <label class="label_cl2">Skill Profile Title*</label>
            <input name="skills" id="skills" type="text"  class="input_cl2" value="<?php echo $skills?>"/>
             <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Profile Summary*</label>
               <textarea name="profile_summary" cols="40" rows="4" style="width:375px;"><?php echo $profile_summary?></textarea>
           <!-- <input name="profile_summary" id="profile_summary" type="text"  class="input_cl2" value="<?php //echo $profile_summary?>"/>-->
             <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Skill Keywords*</label>
             <textarea name="skill_keywords" cols="40" rows="4" style="width:375px;"><?php echo $skill_keywords?></textarea>
          <!--  <input name="skill_keywords" id="skill_keywords" type="text"  class="input_cl2" value="<?php //echo $skill_keywords?>"/>-->
            
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Professionals Qualifications </label>
            <input name="education" id="education" type="text"  class="input_cl2" value="E.g: CA/CPA; CRA/CFP/FSP; Series 6/7; LLP; etc" onfocus="watermark('education','E.g: CA/CPA; CRA/CFP/FSP; Series 6/7; LLP; etc');" onblur="watermark('education','E.g: CA/CPA; CRA/CFP/FSP; Series 6/7; LLP; etc');"/>
            
            <?php /*?><select name="education" id="education" size="1" class="select_cl2">
             <option value="" selected="selected">Select</option>
            <?php
			
			$C_sql='SELECT `id`, `name` FROM `education` WHERE 1 ORDER BY `education`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"   <?php if($C_data['id']==$education){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select><?php */?> 
            <div class="clear"></div>
          </div>
          
          <div class="row-n2">
            <label class="label_cl-n2">Highest Education<?php $C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`name` ASC';
			$C_run=$db->query_silent($C_sql);?></label>
             <div class="input_cl-bx">
            <select name="qualifications" id="qualifications"   size="1" class="input_cl-n2">
            <option value="" selected="selected">Select</option>
           <?php
			
			$C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`id` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  <?php if($C_data['id']==$qualifications){ echo ' selected="selected" ';}?>><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select></div>
             <label class="label_cl-n2" style="width:130px;">Year Completed</label>
            <input name="year_completed" id="year_completed" type="text"  class="input_cl-n2" value="<?php echo $year_completed?>"/>
            
            <div class="clear"></div>
          </div>
          
         
          
          <div class="row2">
            <label class="label_cl2">Institution Awarded</label>
            <input name="institution" id="institution" type="text"  class="input_cl2" value="<?php echo $institution?>"/>
             
            <div class="clear"></div>
          </div> 
          
          <div class="row2">
            <label class="label_cl2">Why should I get the highest bid*</label>
               <textarea name="bid_desc" cols="40" rows="4" style="width:375px;"><?php echo $bid_desc?></textarea>
           <!-- <input name="bid_desc" id="bid_desc" type="text"  class="input_cl2" value="<?php //echo $bid_desc?>"/>-->
             <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
            <div class="clear"></div>
          </div>
          
         
          <?php /*?><div class="row2">
            <label class="label_cl2">Experience </label>
            <select name="experience" id="experience" size="1" class="select_cl2">
             <option value="" selected="selected">Select</option>
           <?php
			 echo experience($experience);
			?>
            </select> <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div><?php */?>
          
          
          
          <?php /*?><div class="row2">
            <label class="label_cl2"> Country</label>
            <select name="country" id="country" size="1" class="select_cl2">
            <option value="" selected="selected">Select</option>
            <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"    <?php if($C_data['countries_id']==$country){ echo ' selected="selected" ';} else if($C_data['countries_id']=='13') {echo ' selected="selected" ';}?>><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            </select> <?php if($error5!="") {?> <div class="error_msg"><?php echo $error5?></div><?php }?>
            <div class="clear"></div>
          </div><?php */?>
          
          <?php /*?><div class="row2">
            <label class="label_cl2">Languages</label>
            <select name="languages" id="languages" size="1" class="select_cl2">
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
            </select> <?php if($error6!="") {?> <div class="error_msg"><?php echo $error6?></div><?php }?>
            <div class="clear"></div>
          </div>
<?php */?>  

            <div class="label_cl3">Upload or link an audio/video clip introducing your profile:</div>
         
   
    
    <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2">URL:</label>
            <input name="introducing_url" id="introducing_url" type="text"  class="input_cl2"  value=""/>
            
            <div class="clear"></div>
          </div>
              
<div class="row2">
            <label class="label_cl2">Attach Audio/Video File</label>
            <div >
            <!--<input   type="text"  class="attach" id="attached_audio" name="attached_audio" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />-->
            <input type="file" class="browsFile" id="attached_file_audio"  name="attached_file_audio" size="46" onchange="attache('#attached_file_audio','#attached_audio')"/>
             <?php if($erro_audio_video!="") {?> <div class="error_msg"><?php echo $erro_audio_video?></div><?php }?>
            </div>
            
            
          </div>
    <div class="row2">
            <label class="label_cl2">Any other relevant info</label>
             <textarea name="relevant" cols="40" rows="4" style="width:375px;"><?php echo $relevant?></textarea>
           <!-- <input name="relevant" id="relevant" type="text"  class="input_cl2"  value="<?php //echo $relevant?>"/>-->
             <?php if($error8!="") {?> <div class="error_msg"><?php echo $error8?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          
          <!--<div class="row2">
            <label class="label_cl2">Other interests</label>
            <input name="interests" id="interests" type="text"  value="<?php #echo $interests?>" class="input_cl2" />
            <div class="clear"></div>
          </div>-->
          <div class="row ">
            <input  type="image"  src="images/continue_bu.gif" class="space_lc4"  />
            <div class="clear"></div>
          </div>
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><input type="hidden" name="data" id="data" value="data" />
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