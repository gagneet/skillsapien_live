<?php
ob_start();
include_once('init.php');

$sid=$_REQUEST['sid'];

$sql="SELECT p.photo,p.username,p.first_name,p.last_name,p.primary_contact_no,p.other_contact_no,p.primary_address,p.state,p.postcode,p.language,p.country,p.birthdate,p.work_eligibility,p.city,sp.skills_profile,sp.skill_keywords,sp.profile_summary,sp.introducing_profile_url,sp.relevant_info,sp.year_completed,sp.bid_desc,sp.institution,sp.education,sp.qualifications,r.available_from,r.unavailable_start_date ,r.unavailable_end_date,r.lt_currency ,r.gt_currency,r.lt_amount,r.lt_time_period,r.gt_amount,r.gt_time_period,r.privacy_profile_photo,r.privacy_birth_year,r.privacy_city_postcode,r.privacy_country,r.privacy_languages,r.privacy_unavailable_time,r.contact_via, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$sid."' and uld.vertical_id='".VERTICAL_ID."'";

	  $run=$db->query_silent($sql);
	 $data=$db->fetch_array($run);

 $data['id'];

 $C_sql='SELECT * FROM `countries` WHERE countries_id='.$data['country'].'';
	$C_run=mysql_query($C_sql);
$C_data=mysql_fetch_array($C_run);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
     <div>  <h1 style="color:#74AC26">Skill Profile Details </h1></div><br/><br/>
      <div class="jobTitle-c">
        <?php /*?><div class="job-title"><strong><? echo  $rowseljob['title'] ; ?> </strong> <span><a href="#">Sign in to Add to Watch List</a></span></div><?php */?>
		
        <?php /*?><div class="job-cat" ><a href="#"><? echo  $proname ; ?></a> > <a href="#"><? echo  $discname ; ?></a></div><?php */?>
      </div>
      <div class="eol-layout-detail ">
        <div class="jobdesc-bddetail">
           
           <div class="candidate-cont">
           <div class="candidatePadding">
           <div class="candidate-contlft">
           <div class="row2">
           <label class="condislas">Candidate ID :</label>
           <label class="condis"><?php echo  $data['id'] ; ?></label>
           <div class="clear"></div>
           </div>
           <div class="row2">
           <label class="condislas">Base Country :</label>
           <label class="condis"><?php echo $C_data['countries_name']; ?></label>
           <div class="clear"></div>
           </div>
            <div class="row2">
           <label class="condislas">Has Work Eligibility :</label>
           <label class="condis"><?php  $sources=$data['work_eligibility']; 
     if($sources=='yes')
     {
      $sources="Yes";
     
     }
	  if($sources=='no')
     {
      $sources="No";
     
     }
    echo $sources ; ?></label>
            <div class="clear"></div>
           </div>
           <div class="row2">
           <label class="condislas">Languages :</label>
           <?php
		 $C_sql='SELECT `id`, `name` FROM `languages` WHERE id='.$data['language'].' ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);


			$C_data=$db->fetch_array($C_run);
			 $C_data['name'];
			 ?>
           <label class="condis"><?php echo  $C_data['name']; ?></label>
           
            
           <div class="clear"></div>
           </div>
           </div>   
           <div class="candidate-contRgt"><img src="profile_img/<?php echo $data['photo']?>" alt="" width="150" height="150">
           </div>
           
           
           </div>
           <div class="clear"></div>
           </div>
           
           
           
           
           
           
           
           
           <div class="form_area2">
            <div class="candidatePadding">
              <div class="row2">
            <label class="label_cl2">Skill Profile Title :</label>
           <div class="lico">  <?php echo  $data['skills_profile'] ; ?></div>
            
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Profile Summary :</label>
            <div class="lico">
          <?php echo $data['profile_summary']?></div>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Skill Keywords :</label>
          <div class="lico"> <?php echo  $data['skill_keywords'] ; ?></div>
            
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Professionals Qualifications : </label>
          <div class="lico"> <?php echo  $data['education'] ; ?></div>
            
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
            <label class="label_cl-n2">Highest Education :<?php $C_sql='SELECT `id`, `name` FROM `qualifications` WHERE 1 ORDER BY `qualifications`.`id` ASC';
			$C_run=$db->query_silent($C_sql);?></label>
            <div class="input_cl-box">
            <?php
			$C_sql='SELECT `id`, `name` FROM `qualifications` WHERE id='.$data['qualifications'].' ORDER BY `qualifications`.`id` ASC';
			$C_run=$db->query_silent($C_sql);
			$C_data=$db->fetch_array($C_run);
			
           ?> <div class="licomast"> <?php  echo $C_data['name'];?></div>
                        
            </div>
             <label class="label_cl-n2" style="width:122px;">Year Completed :</label>
           <div class="lico"> <?php echo $data['year_completed']?></div>
            
            <div class="clear"></div>
            </div>
          
         
          
          <div class="row2">
            <label class="label_cl2">Institution Awarded :</label>
           <div class="lico"> <?php echo  $data['institution'] ; ?></div>
             
            <div class="clear"></div>
          </div> 
          
          <div class="row2">
            <label class="label_cl2">Why should I get the highest bid :</label>
           <div class="lico"> <?php echo $data['bid_desc']?></div>
            <div class="clear"></div>
          </div>
          
         
           <div class="row2">
            <div class="label_cl3">Upload or link an audio/video clip introducing your profile :</div>
             <div class="clear"></div>
          </div>
    
    <div class="row2">
            <label class="label_cl2">URL :</label>
            <div class="lico"><?php echo  $data['introducing_profile_url'] ; ?></div>
            <div class="clear"></div>
          </div>
              
    <div class="row2">
            <label class="label_cl2">Any other relevant info :</label>
            <div class="lico"><?php echo  $data['relevant_info'] ; ?></div>
            <div class="clear"></div>
          </div>
           </div>
          </div>
          
          
          <div class="form_area2">
       <div class="candidatePadding">
          <div class="row2">
            <label class="label_cl2">Minimum Rate :</label>
            <div class="">
         <?php  $C_sql='SELECT `id`, `name` FROM `currency` WHERE id='.$data['lt_currency'].' ORDER BY `currency`.`name` ASC';
	$C_run=mysql_query($C_sql);
$C_data=mysql_fetch_array($C_run);?>
	 <div class="lico"><?php echo $C_data['name']; ?> &nbsp;&nbsp;<?php echo number_format($data['lt_amount']);?>&nbsp;&nbsp;Per <?php echo $data['lt_time_period'];?></div>
            </div>
          
             <div class="clear"></div>
              
            </div>
         

          <div class="row2">
            <label class="label_cl2">Ideal rate :
            </label>
            <div class="">
            <?php  $C_sql1='SELECT `id`, `name` FROM `currency` WHERE id='.$data['lt_currency'].' ORDER BY `currency`.`name` ASC';
	$C_run1=mysql_query($C_sql1);
$C_data1=mysql_fetch_array($C_run1);?>
	 <div class="lico"><?php echo $C_data1['name']; ?> &nbsp;&nbsp;<?php echo number_format($data['gt_amount']);?>&nbsp;&nbsp;Per <?php echo $data['gt_time_period'];?></div>
            </div>
          
            <div class="clear"></div>
            </div>

          <div class="row2">
            <label class="label_cl2">I am first available from :</label>
         <div class="lico">  <?php echo  $data['available_from'] ; ?></div>
            <div class="clear"></div>
          </div>
          
                <div class="row2" style="margin-bottom:0px;">
            <label class="label_cl2"><i>(Optional: I am unavailable between) :</i></label>
            <div class="lico"><?php echo  $data['unavailable_start_date'] ; ?></div>
           <div class="clear"></div>
          </div> 
          <div class="row2">
            <label class="label_cl2">And :</label>
           <div class="lico"><?php echo  $data['unavailable_end_date'] ; ?></div>
            <div class="clear"></div>
          </div>
             
          
        </div>
        
        
        <div class="clear"></div>
      </div>
      
          <div class="clear"></div>
          </div>
         
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
