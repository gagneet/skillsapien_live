<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <input name="profile_summary" id="profile_summary" type="text"  class="input_cl2" value="<?php echo $profile_summary?>"/>
             <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Skill Keywords*</label>
            <input name="skill_keywords" id="skill_keywords" type="text"  class="input_cl2" value="<?php echo $skill_keywords?>"/>
            
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
            <input name="bid_desc" id="bid_desc" type="text"  class="input_cl2" value="<?php echo $bid_desc?>"/>
             <?php if($error4!="") {?> <div class="error_msg"><?php echo $error4?></div><?php }?>
            <div class="clear"></div>
          </div>
          
         
          
            <div class="label_cl3">Upload or link an audio/video clip introducing your profile:</div>
         
   
    
    <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2">URL:</label>
            <input name="introducing_url" id="introducing_url" type="text"  class="input_cl2"  value=""/>
            
            <div class="clear"></div>
          </div>
              
    <div class="row2">
            <label class="label_cl2">Any other relevant info</label>
            <input name="relevant" id="relevant" type="text"  class="input_cl2"  value=""/>
            <div class="clear"></div>
          </div>
          
          
     
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