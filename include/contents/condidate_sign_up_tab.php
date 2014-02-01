<?php
include_once('../../init.php');

switch($_REQUEST['tab'])
{

 
 case 5:
 ?>
<div class="center_in">
    <div form_area2"="" class="sign_cl &gt;
      
        &lt;div class=">
          <div class="row2">
          
         <div class="post_cl">
        <h1>Congratulations!<span> Your're now registered.</span></h1>
        <p>&nbsp; </p>
        <div align="center" class="pos_bucl">   
        </div>
  
         <p><a href="#"> </a></p>
         </div>
         
            <div class="clear"></div>
          </div>
          <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
 <?php 
 break;
  case 4:
  ?>
 <form method="post"  id="tab4" onsubmit="return form4()" >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3cl"> Record an audio/video clip about yourself </div>
        <div class="select_4clact " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Set your rates </h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">I would not get out of bid 
            for <br />
            less than: </label>
            <select name="Currency" size="1" class="currency" id="Currency">
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
            <input name="amount" type="text"  id="amount"  src="type" class="currency1" />
            <input name="time_period" id="time_period1" type="radio" value="Day" style="margin: 10px  4px 0px 5px;" />
             <label for="time_period1"> Per Day</label>
            <input name="time_period" id="time_period2" type="radio" value="Month" style="margin: 10px 4px 0px 5px;" />
           <label for="time_period2">Month</label>
             <input name="time_period"  id="time_period3" type="radio" value="Year" style="margin: 10px 4px 0px 5px;" />
           <label for="time_period3">Year</label>
             <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">What would be my ultimate rate:
            (buy-now rate) </label>
            <select name="Currency2" size="1" class="currency" id="Currency2">
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
            <label class="label_cl2">Preferred contact via:</label>
            <input name="preferred_contact[]" id="preferred_contact1" type="checkbox" value="Phone" style="margin: 10px  4px 0px 5px;" />
             <label for="preferred_contact1"> Phone </label>
            <input name="preferred_contact[]" id="preferred_contact2" type="checkbox" value="Email" style="margin: 10px 4px 0px 5px;" />
           <label for="preferred_contact2">Email</label>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Privacy options for :</label>
            <textarea name="privacy" id="privacy" class="textarea_cl2"></textarea>
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
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
  </div>
 </form>
  <?php
  break;
  case 3:
  ?><form method="post" id="tab3" onSubmit="return form3('')"  >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3clact"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Record an audio/video clip about yourself <span>*Optional*</span> </h1>
        <div class="form_area2">
           <div class="row2">
            <label class="label_cl2">I am </label>
             <input name="i_am" id="i_am" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
        
          <div class="row2">
            <label class="label_cl2">Language </label>
            <select name="language" id="language" size="1" class="select_cl2">
            <?php
			
			$C_sql='SELECT `id`, `name` FROM `languages` WHERE 1 ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Why I should get the highest bid</label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_audio" name="attached_audio" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_audio"  name="attached_file_audio" size="50" onchange="attache('#attached_file_audio','#attached_audio')"/>
            </div>
            
            
          </div>
          <div class="row ">
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
            &nbsp;&nbsp;&nbsp;&nbsp;
           <img src="images/skip_buttons.gif" onClick="form3('skip')">
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
  </div>
  </form>
  <?php
  break;
  case 2:
  ?>
     
  <form id="tab2" method="post"   onSubmit="return form2()"  >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2clact">Fill-in your skills </div>
        <div class="select_3cl"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Skills Profile </h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">Some really good personality 
            questionnaires… </label>
            <input name="personality" id="personality" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Skills Profile </label>
            <input name="skills" id="skills" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Qualifications<?php $C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`name` ASC';
			$C_run=$db->query_silent($C_sql);?></label>
            <select name="qualifications" id="qualifications" size="1" class="select_cl2">
           <?php
			
			$C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Experience </label>
            <select name="experience" id="experience" size="1" class="select_cl2">
           <?php
			 echo experience();
			?>
            </select>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Education </label>
            <select name="education" id="education" size="1" class="select_cl2">
            <?php
			
			$C_sql='SELECT `id`, `name` FROM `education` WHERE 1 ORDER BY `education`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Country</label>
            <select name="country" id="country" size="1" class="select_cl2">
            <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"  ><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Languages</label>
            <select name="languages" id="languages" size="1" class="select_cl2">
             <?php
			
			$C_sql='SELECT `id`, `name` FROM `languages` WHERE 1 ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Other relevant info</label>
            <input name="relevant" id="relevant" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Other interests</label>
            <input name="interests" id="interests" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
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
  <?php
  break;
  default :
  ?>
 
  <form action="include/contents/condidate_sign_up_insert.php?tab=1" method="post" id="tab1" enctype="multipart/form-data"  >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1cl">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3cl"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Sign Up for a Candidate Profile </h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">Account Name* </label>
            <input name="account_name" id="account_name" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Password* </label>
            <input name="password" id="password" type="password"  class="input_cl2" />
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="border_cl2"></div>
      <div class="sign_cl">
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">First Name* </label>
            <input name="first_name" id="first_name" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Last Name* </label>
            <input name="last_name" id="last_name" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Primary Email*</label>
            <input name="primary_email" id="primary_email" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Primary Contact no </label>
            <input name="primary_contact" id="primary_contact" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Primary Address </label>
            <input name="primary_address" id="primary_address" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Listing Country* </label>
            <select name="country" id="country" size="1" class="select_cl2">
           <?php
			
			$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"  ><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            
            </select> 
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Attach CV </label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_cv" name="attached_file_cv" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_cv"  name="attached_file_cv" size="50" onchange="attache('#attached_file_cv','#attached_cv')"/>
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
            <input name="condition" type="radio" id="condition1" value="yes"  style="margin-right:10px; margin-top:5px; "/>
            <label for="condition1">Yes</label>
            <input name="condition" id="condition2" type="radio" value="no" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            <label for="condition2">Now</label>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">How did you hear about us? </label>
            <input type="text" id="hear_about_us" name="hear_about_us"  class="input_cl2"/>
            <div class="clear"></div>
          </div>
          <div class="row ">
            <input  type="image"  src="images/sign_up_buttons.gif" class="space_lc2"  />
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
  <?php 
}
?>