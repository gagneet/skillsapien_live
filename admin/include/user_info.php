<?php
		require("../../include/config.php");
		
		//database class
		
		require_once("../../include/class_database.php");

		//class.profile class
		require_once("../../include/class.profile.php");
		
		
		
		if($_REQUEST['uid']>0)
		{
		$db=new database();
		 
		$pf=new profile($db->fetch_array($db->query_silent('SELECT * FROM `user_profiles` WHERE `user_id`='.$_REQUEST['uid'])));
		
?>
<?php $query="select * from user_profiles where user_id=".$_REQUEST['uid']."";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
?>
<div class="profile_form_cont">
<div><img src="../uploads/<?php echo $row['profile_image_small']; ?>" alt="photo" height="60" width="60" /></div>
<?php /*?><div><?php echo $pf->getImage("../".WM_IMAGES.P_IMAGE_FOLDER)?></div><?php */?>
					<div class="profile_name_cont">
					<div class="profile_name">Name:</div>
					<?php echo $pf->get_name();?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">About Me:</div>
					 <?php echo $pf->abount_me();?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">Country:</div>
					  <?php /*$sql='SELECT * FROM `countries` WHERE `countries_id`='.;
					  $run=$db->query_silent($sql);
					$data=$db->fetch_array($run);
					echo $data['countries_name'];*/
					echo $pf->getCountry();
					  ?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">State:</div>
					  
					 <span id="pst"> 
					  <?php echo $pf->getState();
					  ?>
					</span></div>
					<div class="profile_name_cont">
					<div class="profile_name">WealthMash Wealth Building<br> Rank:</div>
					<?php  echo $pf->rank();?>
					</div>
					<div class="profile_name_cont">
					<div class="profile_name">Share your views on making wealth:</div>
					<?php  echo $pf->share_view();?>
					</div>
					 </div>
<?php
}
else
{
	echo "Sorry !!";
}
?>                     