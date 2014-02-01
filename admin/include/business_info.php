<?php
		require("../../include/config.php");
		
		//database class
		
		require_once("../../include/class_database.php");

		//class.profile class
		require_once("../../include/class.profile.php");
		
		
		
		if($_REQUEST['uid']>0)
		{
		$db=new database();
		 
		//$pf=new profile($db->fetch_array($db->query_silent('SELECT * FROM `user_profiles` WHERE `user_id`='.$_REQUEST['uid'])));
		
?>
<?php $query="select * from business_profile where id=".$_REQUEST['uid']."";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
<div class="profile_form_cont">
 
<?php /*?><div><?php echo $pf->getImage("../".WM_IMAGES.P_IMAGE_FOLDER)?></div><?php */?>
					<div class="profile_name_cont">
					<div class="profile_name">Name:</div>
					<?php /*?><?php echo $pf->get_name();?><?php */?>
                    <?php echo $row['name'];?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">Phone No.:</div>
					 <?php /*?><?php echo $pf->abount_me();?><?php */?>
                     <?php echo $row['contact_details'];?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">Country:</div>
					  <?php 
					  $country=$row['country'];
					   $sql="SELECT * FROM countries WHERE countries_id='$country'" ;
					    $run=$db->query_silent($sql);
					 $data=$db->fetch_array($run);
					 echo $data['countries_name']; 
					//echo $pf->getCountry();
					    //echo ?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">Business Address:</div>
					  
					 <span id="pst"> 
					  <?php /*?><?php echo $pf->getState();
					  ?><?php */?>
                      <?php echo $row['business_address'];?>
					</span></div>
					<div class="profile_name_cont">
					<div class="profile_name">Suburb:</div>
					<?php /*?><?php  echo $pf->rank();?><?php */?>
					<?php echo $row['suburb'];?>
                    </div>
                    
					<div class="profile_name_cont">
					<div class="profile_name">City:</div>
					<?php /*?><?php  echo $pf->share_view();?><?php */?>
                    <?php echo $row['city'];?>
					</div>
                    
                    <div class="profile_name_cont">
					<div class="profile_name">State:</div>
					<?php /*?><?php  echo $pf->rank();?><?php */?>
					<?php echo $row['state'];?>
                    </div>
                    
                    <div class="profile_name_cont">
					<div class="profile_name">Postcode/Zipcode:</div>
					<?php /*?><?php  echo $pf->rank();?><?php */?>
					<?php echo $row['postcode'];?>
                    </div>
                    
                    <div class="profile_name_cont">
					<div class="profile_name">Business Description:</div>
					<?php /*?><?php  echo $pf->rank();?><?php */?>
					<?php echo $row['business_description'];?>
                    </div>
                    
                    <div class="profile_name_cont">
					<div class="profile_name">Website:</div>
					<?php /*?><?php  echo $pf->rank();?><?php */?>
					<?php echo $row['web_site'];?>
                    </div>
                    
                 
                    
					 </div>
<?php
}
else
{
	echo "Sorry !!";
}
?>                      