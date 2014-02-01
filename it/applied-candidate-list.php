<?php
include_once('init.php');
Is_valid_uesr();

$s->set('URL_PARA',$_SERVER['QUERY_STRING']);
if($_REQUEST['data']=="data")
{
 	 $error=false;
	 
	 if(strlen($db->dataTrim($_REQUEST['title']))<=0)
	 {
	    $error1=$error_msg[24];
		$error=true;
 	 }
	 
	 if(strlen($db->dataTrim($_REQUEST['description']))<=0)
	 {
	    $error2= $error_msg[25];
		$error=true;
 	 }
	 
	 if($db->dataTrim($_REQUEST['positions'])<=0)
	 {
	    $error3= $error_msg[26];
		$error=true;
 	 }
	 
	 if($db->dataTrim($_REQUEST['budget'])=="")
	 {
	      $error4= $error_msg[27];
		$error=true;
 	 }
	 
	 if( strlen($db->dataTrim($_REQUEST['file']))<0)
	 {
	    $error5=$error_msg[28];
		$error=true;
 	 }
	 
	 if(strtotime(date('d-m-Y',strtotime($_REQUEST['job_end_d']."-".$_REQUEST['job_end_m']."-".$_REQUEST['job_end_y'])))<strtotime(date('d-m-Y')))
	 {
	    $error6=$error_msg[29];
		$error=true;
 	 }
	 
	 if( strlen($db->dataTrim($_REQUEST['keywords']))<=0)
	 {
	    $error7=$error_msg[30];
		$error=true;
 	 }
	//****************************************************
	if($error==false)
	{
	
	
	    $file="";
  		if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
		   $file="post_job_file_".sprintf("%-010s",$s->value('R_USER_ID'))."_".time().".".get_extension($_FILES['file']['name']);
 	       $error5=UploadImg("".POST_JOB_FILE_FOLDER.$file,$_FILES['file'],true);
		   $file="   `file`='".$file."',  ";
	    }
	
	  	       $sql="update   `post_job` set 
			  			 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
						 ".$file."
						`job_end_date`='".date('Y-m-d',strtotime($db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])))."', 
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
 						`date`=now(), 
					    `status`='".ENABLE."' where `user_id`='".$s->value('R_USER_ID')."' and id=".$_REQUEST['id'];  
			 
				if($error5=="")
				{
					if($db->query_silent($sql)==true  )
					{
					    header('location:list-job-requirements.php');
					}
				}						
				 

	} 
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<script type="text/javascript" language="javascript1.2" src="js/jquery.fancybox-1.3.1.js"></script>

<link href="css/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
         
        <div class="clear"></div>
      </div>
       <div class="listOfTable">
      
       
          
            <?php 
	 ?> 
      <div> <h1>List of Candidates - <?php echo show_job_title($_REQUEST['jid'])?> </h1>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
           <tr>
            <th width="6%">ID</th>
            <th width="10%">Name</th>
            <th width="20%">Qualifications</th>
            <th width="18%">Education</th>
            <th width="10%">Country</th>
            <th width="10%">Experience</th>
            <th width="10%">Languages</th>
            <th width="10%">&nbsp;</th>
            <th width="10%"> Applied Date</th>
            <th>Action</th>
          </tr><?php
		  
		  //===============================================
 		  
		   
  		  $post_run=$db->query_silent("SELECT sp.*,p.first_name,p.last_name,p.user_id,a.date as applied_date FROM 
		  `skills_profiles` as sp,
		  profiles as p,
		  applied as a 
 		  WHERE
		  p.user_id=a.user_id and 
		  a.user_id=sp.user_id and    
 		  a.`job_id`=".$_REQUEST['jid']." ");
		  $row=0;
		  while($data=$db->fetch_array($post_run))
		  {
		  		
 				$run=$db->query_silent("SELECT * FROM `accepted` WHERE `recruiter_id`=".$s->value('R_USER_ID')." and  `candidate_id`=".$data['user_id']."  and  `job_id`=".$_REQUEST['jid']."");
				
		  		if($db->num_rows($run)==0)
				{
					  $row++;
					  if($row%2!=0)
						$class=' class="odd"  ';
					  else
						$class=' class="even"  ';
					
				  ?>
					
				  <tr <?php echo $class?>>
					<td><?php echo $row?></td>
					<td><?php echo show_name($data['user_id'])?></td>
					<td><?php echo show_description($data['qualifications'])?></td>
					 <td><?php echo show_education($data['education'])?></td>
					 <td><?php echo show_country($data['country'])?></td>
					 <td><?php echo $data['experience']." Years" ?></td>
					<td><?php echo show_language($data['languages'])?></td>
					 <td><a href="<?php echo WM_INCLIDE.WM_CONTENT?>view-proposal.php?cid=<?php echo $data['user_id']?>&jid=<?php echo $_REQUEST['jid']?>" id="Proposal<?php echo $row?>">View Proposal</a></td>
					 <script type="text/javascript">
							$('#Proposal<?php echo $row?>').ready(function() {
								/*
								*   Examples - images
								*/
					
								$("a#Proposal<?php echo $row?>").fancybox({
									'titleShow'		: false
								});
							});	
					</script>
					 <td><?php echo date(DMY,strtotime($data['applied_date']))?></td>
					<td nowrap="nowrap">
					<?php
					/*if(c_replied($_REQUEST['jid']))
					{?> 
					<?php 
					}
					else
					{
					?> <a href="review-make-offers-skill-profiles.php?jid=<?php echo $_REQUEST['jid']?>&cid=<?php echo $data['user_id']?>"  >Make offers</a>
					<?php 
					}*/
					?>  <a href="counter-offer-acceptskill-profiles.php?jid=<?php echo $_REQUEST['jid']?>&cid=<?php echo $data['user_id']?>"  >Counter offer</a>         </td>
				  </tr>
				 
				  <?php	
				} 
			   
			   
			   /*
		  	NO RESULT FOUND
		  */
		   
		 
			  if($row<=0)
			  {
			     ?>
                   <tr>
		                      <td colspan="11" class="noresultfound"><?php echo $error_msg[46]?></td>
                      </tr>
                 <?php 
			  } 
		  }
 		  ?>
        </table>
        <br />

        <div  class="clear"></div>
      </div>  
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
