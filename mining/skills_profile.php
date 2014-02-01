<?php
include_once('init.php');

$sid=$_REQUEST['sid'];

$sql="SELECT p.photo,p.username,p.city,p.country,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.available_from,r.unavailable_start_date ,r.unavailable_end_date ,r.gt_currency,r.gt_amount,r.gt_time_period, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$sid."'";
	  $run=$db->query_silent($sql);
	 $data=$db->fetch_array($run);



			  
			  
	/*
	
	update password
	*/
	if($_REQUEST['data']=="data")
	{		
		 	
			$error=false;
			if(strlen($db->dataTrim($_REQUEST['new_password']))=="")
			{
				$error=true;
				$new_password=$error_msg[1];	
			}
 			if(strlen($db->dataTrim($_REQUEST['new_password']))<MIN_PASSWORD ||  strlen($db->dataTrim($_REQUEST['new_password']))>MAX_PASSWORD)
			{
				$error=true;
				$new_password=$error_msg[50];	
			}
			 //-------------match old password
		      $sql='SELECT * FROM `user_login_details`   WHERE password="'.md5($db->dataTrim($_REQUEST['old_password'])).'"  and id='.$user_id;
   			  if($db->num_rows($db->query_silent($sql))!=1)
			  {
			    $error=true;
				$old_password=$error_msg[1];	
			  }
			  //--------------------
			//=======================================
			if($error==false)
			{
			  
		
			  $sql='update user_login_details set password="'.md5($db->dataTrim($_REQUEST['new_password'])).'" where id='.$user_id;
			  if($db->query_silent($sql)==true)
			  {
			    $msg=$error_msg[51];
				
			  }
			 
			}
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<script src="js/counter-offer-acceptskill-profiles-interview.js" type="text/javascript" language="javascript1.2"></script>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <form method="post" action="" id="">
      <div class="sign_cl">
      <h1>Skill Profile</h1>
        <div class="form_area2">
        <table>
		<tr><td class="table_text"><b>Candidate Id  :</b></td><td class="table_text"><?php echo $data['id'];?></td></tr>
		<tr><td class="table_text"><b>Skill Profile Title :</b></td><td class="table_text"><?php echo $data['skills_profile'];?></td></tr>
		<tr><td class="table_text"><b>Profile Summary  :</b></td><td class="table_text"><?php echo $data['profile_summary'];?></td></tr>
        <tr><td class="table_text"><b>Skill Keywords  :</b></td><td class="table_text"><?php echo $data['skill_keywords'];?></td></tr>
		<tr><td class="table_text"><b>Available From  :</b></td><td class="table_text"><?php echo $data['available_from'];?></td></tr>
        <tr><td class="table_text"><b>Unavailable Between  :</b></td><td class="table_text"><?php echo $data['unavailable_start_date'];?></td></tr>
        <tr><td class="table_text">&nbsp;</td><td class="table_text">And</td></tr>
        <tr><td class="table_text">&nbsp;</td><td class="table_text"><?php echo $data['unavailable_end_date'];?></td></tr>
		<tr><td class="table_text"><b>Rate  :</b></td><td class="table_text"><?php echo CURRENCY?><?php echo $data['gt_amount']?>/<?php echo $data['gt_time_period']?></td></tr>
        <tr><td class="table_text" colspan="2" align="center"><h2><a href="skill-details.php?sid=<?php echo $data['id'];?>" style="text-decoration:none;">Bid on this profile !</a></h2></td></tr>
		</table>
        
          
		  
		  
		  
             <div class="row ">
            
            &nbsp;&nbsp;&nbsp;&nbsp;
            
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
<div class="canten">
  <div class="clear"></div>
</div>
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
 