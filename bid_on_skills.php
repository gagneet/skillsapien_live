<?php
require('init.php');

//paging 
require(WM_INCLIDE.WM_CLASS.'split_page_results.php');

	if($s->is_set('R_USER_ID')==true &&  $s->is_set('USER_LOGIN')==true)
	{
		header('location:recruiters-dashboard.php');
	}
	if($s->is_set('USER_ID')==true &&  $s->is_set('USER_LOGIN')==true )
	{
		header('location:candidate-dashboard.php');
	}
		/*
		
		Sign up
		
		*/
 	if(@$_REQUEST['data']=="data")
		{
 		/*action=add_user& =radio&first_name=sdfdsf&last_name=sdf&email=dsfdsfdsf&confirm_email=dsfds&password=fdsf&c_password=dsfdsf&gender=radio&dob_date=2&dob_month=January&dob_year=1986*/
		//*********************add user in login tabel
	 
				$sql="SELECT * FROM `user_login_details` WHERE `login_id` like '".$db->dataTrim($_REQUEST['email'])."'";
				if($db->num_rows($db->query_silent($sql))==0)
				{
				 
					$sql="INSERT INTO  `".database."`.`user_login_details` ( `name`, `login_id`, `password`, `type`, `date`, `status`) VALUES ( '".$db->dataTrim($_REQUEST['first_name'])."', '".$db->dataTrim($_REQUEST['email'])."', '".md5($db->dataTrim($_REQUEST['password']))."', '".$db->dataTrim($_REQUEST['user'])."', now(),'".ENABLE."');";
			
			$db->query_silent($sql);
			$user_id=$db->insert_id();
			
			//add user in profile table
			 $sql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `first_name`, `last_name`, `gender`, `birthdate`, `primary_email`, `date`, `status`) VALUES ( '".$user_id."', '".$db->dataTrim($_REQUEST['first_name'])."', '".$db->dataTrim($_REQUEST['last_name'])."', '".$db->dataTrim($_REQUEST['gender'])."', '".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',  '".$db->dataTrim($_REQUEST['email'])."', now(),'".ENABLE."');";
		 
					if($db->query_silent($sql))
					{
					 
					$s->set('sign_up',"true");
					$s->set('USER_TYPE',$_REQUEST['user']);
					 
					
						if($_REQUEST['user']=="C")
						{ 
							 $s->set('C_FORM','1'); 
							 $s->set('UESR_ID',$user_id);
							 header('location:sign-up-candidate-profile.php');
						}
						if($_REQUEST['user']=="R")
						{
							
							$s->set('R_FORM','1');
							$s->set('R_USER_ID',$user_id);
 							header('location:recruiter-registration.php');
							 
						}
					}

				}
				else
				{
				   $msg=$error_msg[3];
				}  		
		
		////*****************************
	   }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<script src="js/sign-up.js" type="text/javascript" language="javascript1.1"></script>
</head>
<body>
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="center_in">
  	<div class="heading1">
    	<h1>Bid on Skills</h1>
    </div>
   <?php
		$sql="SELECT pj.id as jid,p.photo,pj.title,pj.description,pj.budget FROM `post_job` as pj , 
							profiles as p  
		WHERE pj.user_id =p.user_id     ORDER BY pj.id	  ";
		
	   $history_split = new splitPageResults("  SELECT pj.id as jid,p.photo,pj.title,pj.description,pj.budget FROM `post_job` as pj , 
							profiles as p  
		WHERE pj.user_id =p.user_id     ORDER BY pj.id	 ",MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_ORDER_HISTORY);//Paging
	   
	 
 if ( ($history_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
	?>
	
		 
 		<div class="pagination"> <span><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
		  <span class="fright"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>
	
		 
		</div>
	
	<?php   
  }
       
	 
	  $run=$db->query_silent($history_split->sql_query);
	  while($data=$db->fetch_array($run))
	  {?>
       
         <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
  <tr>
    <td><div class="image-box"><a href="apply-job.php?jid=<?php echo $data['jid']?>"><img src="profile_img/<?php echo $data['photo']?>" alt="" border="0" width="59px" height="59px"></a></div></td>
    <td>
    	<table width="0" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="tex-box"><span>Title</span><a href="apply-job.php?jid=<?php echo $data['jid']?>"><?php echo $data['title']?> </a></td>
          </tr>
          <tr>
            <td class="tex-box" ><span>Budget</span> <font color="#1c79a7" size="+2"><b><?php echo $data['budget']?></b><sup><?PHP echo CURRENCY?></sup></font> </td>
          </tr>
        </table>

    </td>
    <td class="tex-box"><span>Skill</span><font color="#666666" size="-1"><?php echo $data['description']?></font> </td>
    </tr>
    <tr>
    	<td height="10" colspan="3">
        	<div class="line"></div>
        </td>
    </tr>
</table>

	  <?php }
 	    if ( ($history_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
	?>
	
		<div class="pagination">
		  <span><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
		  <span class="fright"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>
		</div>
	
	<?php
  }
  ?></div> 
     
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?></body>
</div>
</html>
