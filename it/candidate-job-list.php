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
		   $file="".$s->value('R_USER_ID').".".get_extension($_FILES['file']['name']);
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
</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="listOfTable">
      
       
          
            <?php 
	 
	 		
	//==============================================		
	 
	 /*
	 	condidate apply for this  posted job
	 */
	 
	 if($_REQUEST['id']>0){
	    $temp=apply($_REQUEST['id']);
		 if($temp==1)
		 {
		   $applid_msg='<div class="error_msg">'.$error_msg[47].'</div>';
		 }
		 if( $temp>0)
		 {
		   $applid_msg='<div class="okmsg">'.$error_msg[48].'</div>';
		 }
 	 }
 ?>
      <div><h1>List of Posted Jobs<?php if($s->is_set('R_USER_ID')==true){?> <div style="float:right"><div class="confBtnSet"><input  class="action-input"  value="Post New Job" onclick="javascript:window.location='post-job-requirements.php'" type="Button"></div></div><?php }?></h1></div>
      <?php echo  $applid_msg?>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
           <tr>
            <th width="6%">ID</th>
            <th width="10%">Job title </th>
            <th width="35%">Description</th>
            <th width="18%">Number of positions</th>
            <th width="10%">Budget</th>
            <th width="10%">Replied</th>
            <th width="10%"> File upload </th>
            <th width="10%">Posted Date</th>
            <th width="10%"> Job end date</th>
            
             <th>Action</th>
          </tr><?php
		  
 		//==================================================
		//if recureter is login
 		  if($s->is_set('USER_ID')==true)
		  $get_condidate_skills="SELECT `skills_profile` FROM `skills_profiles` WHERE `user_id`=".$s->value('USER_ID')."";
		    
 		  $run=$db->query_silent("SELECT * FROM `post_job` WHERE  (title in (".$get_condidate_skills.") ) and `status` like '".ENABLE."' ");
			
		//==================================================	
		  while($data=$db->fetch_array($run))
		  {
		 
		  $row++;
		  if($row%2!=0)
		  $class=' class="odd"  ';
		  else
		  $class=' class="even"  ';
		  ?>
            
          <tr <?php echo $class?>>
            <td><?php echo $row?></td>
            <td><?php echo $data['title']?></td>
            <td><?php echo $data['description']?></td>
             <td><?php echo $data['positions']?></td>
             <td><?php echo CURRENCY.$data['budget']?></td>
             <td><?php
			 if(r_replied($data['id'])>0)
			 echo '<a href="counter-offer-acceptskill-profiles-interview.php?jid='.$data['id'].'&rid='.$data['user_id'].'">'."View (".r_replied($data['id']).")".'</a>';
			 else
			 echo r_replied($data['id']);
             ?></td>
            <td><img src="images/fileImg.png" width="43" title="<?php echo $data['file']?>" alt="<?php echo $data['file']?>" /></td>
             <td><?php echo date(DMY,strtotime($data['date']))?></td>
             <td><?php echo date(DMY,strtotime($data['job_end_date']))?></td>
             <?php if($s->is_set('USER_ID')==true){?>
             <td>
              <?php
			  
			 if(is_applied($data['id'])==0)
			 {
			 ?>
             <a href="javascript:void(0)" onclick="show('#e<?php echo $row?>')">Apply</a>
             <?php } else
			 {
			  echo "Applied";
			 }?>
             </td>
            
          </tr> <?php }?>
          <tr>
              <td colspan="11">
              
              <div id="e<?php echo $row?>" class="conf"><div class="confirm-text">Are you sure you want to apply this job?</div>  
                  <div class="confBtnSet">
                    <input value="Apply" class="action-input" onclick="javascript:window.location='cadidate-apply.php?jid=<?php echo $data['id']?>'" type="Button">
                    <input value="Cancel" class="action-input" onclick="hide('#e<?php echo $row?>')" type="Button">
                  </div>
              </div>              </td>
             </tr>
             
          <?php	   
		 
		  } /*
		  	NO RESULT FOUND
		  */
		   
		 
			  if($db->num_rows($run)<=0)
			  {
			     ?>
                   <tr>
		                      <td colspan="11" class="noresultfound"><?php echo $error_msg[46]?></td>
                      </tr>
                 <?php 
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
