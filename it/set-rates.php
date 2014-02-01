<?php
include_once('init.php');


	if($s->value('C_FORM')!=4)
	{
	
		switch($s->value('C_FORM'))
		{
		 case 1:
		     header('location:sign-up-candidate-profile.php');
			 break;
		 case 2:
			 header('location:fill-in-your-skills.php');
			 break;
		case 3:
			 header('location:record-audio.php');
			 break;
 		 default :
			header('location:index.php');	 
		}
	 
	}
	
	
	if($_REQUEST['data']=="data")
	{
		 $error=false;
	 
	if(strlen($db->dataTrim($_REQUEST['Currency']))<=0)
	 {
	    $error0=$error_msg[42];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['available_from']))<=0)
	 {
	    $error1=$error_msg[42];
		$error=true;
 	 }
	 
	
	//***************************************************		
			if($error==false)
			//if(1)
			{
			$sql="INSERT INTO  `rates` 
					 set 
						 `user_id` =".$s->value('UESR_ID').",
						 `lt_currency`='".$db->dataTrim($_REQUEST['Currency'])."' , 
						 `lt_amount`='".$db->dataTrim($_REQUEST['amount'])."' ,
						 `lt_time_period`='".$db->dataTrim($_REQUEST['time_period'])."' ,
						 `gt_currency`='".$db->dataTrim($_REQUEST['Currency2'])."' , 
						 `gt_amount`='".$db->dataTrim($_REQUEST['amount2'])."' ,
						 `gt_time_period`='".$db->dataTrim($_REQUEST['timeperiod'])."' ,
						 `available_from`='".$db->dataTrim($_REQUEST['available_from'])."' ,
						 `unavailable_start_date`='".$db->dataTrim($_REQUEST['unavailable_start'])."' ,
						 `unavailable_end_date`='".$db->dataTrim($_REQUEST['unavailable_end'])."' ,
						 `privacy_profile_photo`='".$db->dataTrim($_REQUEST['profile_photo'])."' ,
						 `privacy_birth_year`='".$db->dataTrim($_REQUEST['birth_year'])."' ,
						 `privacy_city_postcode`='".$db->dataTrim($_REQUEST['city_postcode'])."' ,
						 `privacy_country`='".$db->dataTrim($_REQUEST['country'])."' ,
						 `privacy_languages`='".$db->dataTrim($_REQUEST['languages'])."' ,
						 `privacy_unavailable_time`='".$db->dataTrim($_REQUEST['unavailable_time'])."' ,
						 `contact_via`='".implode(",",$_REQUEST['preferred_contact'])."' ,
						
						 `date` =now(),
						 `status`='".ENABLE."'
						 `vertical_id`='".VERTICAL_ID."'";
					
				 
				 if($db->query_silent($sql) )
				 {
					 $s->set('C_FORM','5'); 		 
					header('location:sign-up-candidate_thanks.php');
				 }	

			}
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<script type="application/javascript">
function brother_date_pick() {
  $('#datepicker1').datepicker(
    'destroy'
  ).datepicker({
    firstDay: 1
  , dateFormat: 'yy-mm-dd'
  });
  
   $('#datepicker2').datepicker(
    'destroy'
  ).datepicker({
    firstDay: 1
  , dateFormat: 'yy-mm-dd'
  });
  
   $('#datepicker3').datepicker(
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
<!--<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>-->
</head>
<body>
<div id="men">
           <?php echo $get_template->process('global_header.php')?>
   <form method="post"  id="tab4" onsubmit="return form4()" >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <!--<div class="select_3cl"> Record an audio/video clip about yourself </div>-->
        <div class="select_4clact " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Set your rates </h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">I would not get out of bed 
            for <br />
            less than* </label>
            <div class="currency">
            <select name="Currency" size="1" class="bordernune" id="Currency">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="amount" type="text"  id="amount"  src="type" class="currency1" />
            <input name="time_period" id="time_period1" type="radio" value="Day" style="margin: 10px  4px 0px 5px;" />
             <label for="time_period1"> Per Day</label>
            <input name="time_period" id="time_period2" type="radio" value="Month" style="margin: 10px 4px 0px 5px;" />
           <label for="time_period2">Month</label>
             <input name="time_period"  id="time_period3" type="radio" value="Year" style="margin: 10px 4px 0px 5px;" />
           <label for="time_period3">Year</label>
           <?php if($error0!="") {?> <div class="error_msg"><?php echo $error0?></div><?php }?>
             <div class="clear"></div>
              
          </div>
         

          <div class="row2">
            <label class="label_cl2">What would be my ultimate ideal rate:
            (buy-now rate) </label>
            <div class="currency">
            <select name="Currency2" size="1" class="bordernune" id="Currency2">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="amount2" type="text" id="amount2"   src="type" class="currency1" />
            <input name="timeperiod" id="timeperiod1" type="radio" value="Day" style="margin: 10px  4px 0px 5px;" />
             <label for="timeperiod1"> Per Day</label>
            <input name="timeperiod" id="timeperiod2" type="radio" value="Month" style="margin: 10px 4px 0px 5px;" />
           <label for="timeperiod2">Month</label>
             <input name="timeperiod"  id="timeperiod3" type="radio" value="Year" style="margin: 10px 4px 0px 5px;" />
           <label for="timeperiod3">Year</label>
           
            <div class="clear"></div>
          </div>

          <div class="row2">
            <label class="label_cl2">I am first available from*</label>
            <input name="available_from" id="datepicker1" type="text"  class="input_cl2" />
            <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          
                <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2"><i>(Optional: I am unavailable between):</i></label>
            <input name="unavailable_start" id="datepicker2" type="text"  class="input_cl2" /><div class="clear"></div>
          </div> 
            <div style="display:block; text-align:center" class="font-12">And:</div>
            <div class="row2">
            <label class="label_cl2"></label>
            <input name="unavailable_end" id="datepicker3" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div> 
          
          <div class="row2">
            <label class="label_cl2">Preferred contact via:</label>
            <input name="preferred_contact[]" id="preferred_contact1" type="checkbox" value="Phone" style="margin: 10px  4px 0px 5px;" />
             <label for="preferred_contact1"> Phone </label>
            <input name="preferred_contact[]" id="preferred_contact2" type="checkbox" value="Email" style="margin: 10px 4px 0px 5px;" />
           <label for="preferred_contact2">Email</label>
           <input name="preferred_contact[]" id="preferred_contact3" type="checkbox" value="Email" style="margin: 10px 4px 0px 5px;" />
           <label for="preferred_contact3">Sms</label>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Privacy options :</label>
            <!--<textarea name="privacy" id="privacy" class="textarea_cl2"></textarea>-->
            
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
    <td align="left" valign="top"> <input name="profile_photo" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px;"/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="profile_photo"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" checked="checked" />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Birth Year :</label></td>
    <td align="left" valign="top"> <input name="birth_year" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="birth_year"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >City/Post Code :</label></td>
    <td align="left" valign="top"> <input name="city_postcode" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="city_postcode"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Base Country :</label></td>
    <td align="left" valign="top"> <input name="country" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="country"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Languages :</label></td>
    <td align="left" valign="top"> <input name="languages" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="languages"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label></td>
  </tr>
  
  <tr>
    <td align="left" valign="top"> <label >Unavailable Times :</label></td>
    <td align="left" valign="top"> <input name="unavailable_time" type="radio"  value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label></td>
    <td align="left" valign="top"> <input name="unavailable_time"  type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">No</label></td>
  </tr>

</table>

            </div>
            
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/continue_bu.gif" class="space_lc4"  />
            <div class="clear"></div>
          </div>
          <div  class="clear"></div>
        </div>
        <p> <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        </p>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><input type="hidden" id="data" name="data" value="data" />
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
