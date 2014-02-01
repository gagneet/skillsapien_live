<?php
include_once('init.php');
//Is_valid_uesr();

	//search result
	if($_REQUEST['data']=="data")
	{
 		$sql="SELECT * FROM `skills_profiles` ";
		$condition="  WHERE  ";
		if($_REQUEST['Search']!="")
		{
		   $condition.="     (`skills_profile` like '%".$_REQUEST['Search']."%'   or  
		  `education`  like '%".$_REQUEST['Search']."%' or   `languages`  like '%".$_REQUEST['Search']."%')  ";
		  
		  	//add and 
			if($_REQUEST['Search']!="" || count($_REQUEST['expertise'])>0)
			{ 
			$condition.="  and  ";
			}
		}
		 
 		if($_REQUEST['experience']>0)
		{
		  $condition.="   `experience` like '".$_REQUEST['experience']."' ";
		 
		   //add and 
			if(  count($_REQUEST['expertise'])>0)
			{ 
			$condition.="  and  ";
			}
		}
		
		 
		
		 
 		for($c=0;$c<count($_REQUEST['expertise']);$c++)
		{
		    $qualifications[]=" `qualifications` like '%".$_REQUEST['expertise'][$c]."%' ";
		}
		
		 
		    $sql.$condition."   (".implode(" or ",$qualifications).")";
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
<?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
       
      <form  method="post">
      <div class="sign_cl">
      <h1>Browse Skill Profiles</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2">  Search  </label>
            <input name="Search" id="Search" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Experience   </label>
            <select name="experience" id="experience" size="1" class="select_cl2">
            <option value="" selected="selected">Select</option>
            <?php
			 echo experience();
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Expertise </label>
            <select name="expertise[]" id="expertise"  size="1" class="select_cl2">
            <option value="" selected="selected"> Multiple selection </option>
		    <?php
			
			$C_sql='SELECT * FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['name']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>                
            </select>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
          <input type="hidden" name="data" id="data" value="data" />
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
           
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
