<?php
include_once('init.php');
Is_valid_uesr();

 $uuid=$s->value('USER_ID');
if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
			  }


//paging 
require(WM_INCLIDE.WM_CLASS.'split_page_results.php');

if(isset($_REQUEST['action'])&& $_REQUEST["action"]=="delete" && $_REQUEST['id']!=""){
  
   $id = $_REQUEST['id'];
   mysql_query("delete from  post_job where id='".$id."' and vertical_id='".VERTICAL_ID."'");
 
 
 
 header("location:list-job-requirements.php?msg=Data Has Been Deleted Successully");
 exit;
 
 }




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
	 
	/* if( strlen($db->dataTrim($_REQUEST['file']))<0)
	 {
	    $error5=$error_msg[28];
		$error=true;
 	 }*/
	 
	/* if(strtotime(date('d-m-Y',strtotime($_REQUEST['job_end_d']."-".$_REQUEST['job_end_m']."-".$_REQUEST['job_end_y'])))<strtotime(date('d-m-Y')))
	 {
	    $error6=$error_msg[29];
		$error=true;
 	 }*/
	 
	 if( strlen($db->dataTrim($_REQUEST['keywords']))<=0)
	 {
	    $error7=$error_msg[30];
		$error=true;
 	 }
	//****************************************************
	if($error==false)
	{
	
	
	    $file="";
  		/*if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
		
		
		   $file="post_job_file_".sprintf("%-010s",$s->value('R_USER_ID'))."_".time().".".get_extension($_FILES['file']['name']);
 	       $error5=UploadImg("".POST_JOB_FILE_FOLDER.$file,$_FILES['file'],true);
		   $file="   `file`='".$file."',  ";
	    }*/
		
		$chkfilename=$_FILES['upload']['name'];
		
		$file_name=rand(1111,0000).$_FILES['upload']['name'];						
						$file_tmp=$_FILES['upload']['tmp_name'];	
						
						$jtitle=$_REQUEST['title'];
						if($uuid=="")
						{				
				
				if($chkfilename=="")
				{		
	
	          $sql="update   `post_job` set 
			  			 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
												
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						
						
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
					   `job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',			
 						`date`=now(), 
					    `status`='".ENABLE."' where `user_id`='".$s->value('R_USER_ID')."' and id=".$_REQUEST['id']; 
						
						}
						else  {
						
						  $sql="update   `post_job` set 
			  			 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
												
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						
						
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
						`file`='".$file_name."',
						`job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',			
 						`date`=now(), 
					    `status`='".ENABLE."' where `user_id`='".$s->value('R_USER_ID')."' and id=".$_REQUEST['id']; 
						
						}
						
						}
						
						else
						
						{
						if($chkfilename=="")
				{		
	
	         $sql="update   `post_job` set 
			  			 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
												
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						
						
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
					   `job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',			
 						`date`=now(), 
					    `status`='".ENABLE."' where `user_id`='".$uuid."' and id=".$_REQUEST['id']; 
						
						}
						else  {
						
						   $sql="update   `post_job` set 
			  			 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
												
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						
						
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
						`file`='".$file_name."',
						`job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',			
 						`date`=now(), 
					    `status`='".ENABLE."' where `user_id`='".$uuid."' and id=".$_REQUEST['id']; 
						
						}
						
						}
						
						
						
						
			 
				if($error5=="")
				{
					if($db->query_silent($sql)==true)
					{
					
					
				 $getjobid=$_REQUEST['id'];
					
					$sel_udetails=mysql_query("select * from bid where jobid='$getjobid' `vertical_id`='".VERTICAL_ID."'");
					while($rowjobid=mysql_fetch_array($sel_udetails))
					{
					$mailsendid=$rowjobid['bidderid'];
					
				$jobposterid=$rowjobid['job_poster_profile_id'];
					
					
					$selmailid=mysql_query("select login_id from user_login_details where id ='$mailsendid' and `vertical_id`='".VERTICAL_ID."'");
				     	while($rowselmailid=mysql_fetch_array($selmailid))
					          {
							  
							      $gtmailsendid=$rowselmailid['login_id'];
								  
								           $msg .="There Are Folowing Information About Changing in job  $jtitle <br>";  
             							 
   
      											  $sub="Change in job details for  $jtitle";
         											 $from="ravi.p009@gmail.com";
         											 $to=$gtmailsendid;
          												  $headers  = 'MIME-Version: 1.0' . "\r\n";
          											     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			  											    $headers .= 'From:ravi.p009@gmail.com' . "\r\n" .		   
               
                 								    'Reply-To:ravi.p009@gmail.com' . "\r\n" .
                   									  'X-Mailer: PHP/'.phpversion();
        
          
         												 @mail($to,$sub,$msg,$headers);
		  
								  
					
					
					
					          }
					}/****************************end mail to bidder **************************/
					
					$selmailid1=mysql_query("select login_id from user_login_details where id='$user_id' and `vertical_id`='".VERTICAL_ID."'");
				     	while($rowselmailid1=mysql_fetch_array($selmailid1))
					          {
							 
							  
							    $gtmailsendid1=$rowselmailid1['login_id'];
								  
								           $msg1 .="You Have sucesssfully change Information About   $jtitle <br>";  
             							 
   
      											  $sub1="Change in job details for  $jtitle";
         											 $from="ravi@w3csolutions.com";
         											 $to1=$gtmailsendid1;
          												  $headers  = 'MIME-Version: 1.0' . "\r\n";
          											     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			  											    $headers .= 'From:ravi@w3csolutions.com' . "\r\n" .		   
               
                 								    'Reply-To:ravi.p009@gmail.com' . "\r\n" .
                   									  'X-Mailer: PHP/'.phpversion();
        
          
         												 @mail($to1,$sub1,$msg1,$headers);
		  
								  
					
					
					
					          }
					
					
					
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
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
       
       <div class="listOfTable">
      
       
          
            <?php 
	if($_REQUEST['did']>0){
	$delete_sql='UPDATE `skillsapien`.`post_job` SET `status` = "'.DISABLE.'" WHERE `vertical_id`="'.VERTICAL_ID.'" and `post_job`.`id` ='.$_REQUEST['did'];
	}
	if($db->query_silent($delete_sql))
	{
	 	 
	}		
	//==============================================	
		
	 if($_REQUEST['id']>0){
	 
	  if($uuid>0)
			  {
		  $edit_sql="SELECT * FROM `post_job` WHERE `user_id` =".$uuid." and `vertical_id`='".VERTICAL_ID."' and `status` like '".ENABLE."' and id=".$_REQUEST['id'];	
		
		}
		else 
		
		{
		  $edit_sql="SELECT * FROM `post_job` WHERE `user_id` =".$s->value('R_USER_ID')."  and `vertical_id`='".VERTICAL_ID."' and `status` like '".ENABLE."' and id=".$_REQUEST['id'];	
		
		
		}	
		 $run=$db->query_silent($edit_sql);
			 if($db->num_rows($run)==1)
				 $edit=true;
			 else
				 $edit=false;
	 }
	if($edit==true){		
	  $data=$db->fetch_array($run);
	  
	  
	  if(isset($_REQUEST['title'])==true)
	  {
		  $title=$_REQUEST['title'];
		  $description=$_REQUEST['description'];
		  $positions=$_REQUEST['positions'];
		  $budget=$_REQUEST['budget'];
		  $attached_profile_img=$_REQUEST['attached_profile_img'];
		  $job_end_d=$_REQUEST['job_end_d'];
		  $job_end_m=$_REQUEST['job_end_m'];
		  $job_end_y=$_REQUEST['job_end_y'];
		  $keywords=$_REQUEST['keywords'];
	  }
	  else
	  {
		   $title=$data['title'];
		  $description=$data['description'];
		  $positions=$data['positions'];
		  $budget=$data['budget'];
		  
		  $budgetmax=$data['budgetmax'];
		  $currencytype=$data['cur_type'];
		  $uploadfile=$data['file'];
		  
		  $temp1=explode('-',$data['job_start_date']);
		  $job_start_d=$temp1[2];
		  $job_start_m=date('m',strtotime($data['job_start_date']));	  
		  $job_start_y=$temp1[0];
		
		  $temp=explode('-',$data['job_end_date']);
		  $job_end_d=$temp[2];
		  $job_end_m=date('m',strtotime($data['job_end_date']));	  
		  $job_end_y=$temp[0];
		  
		    $sel_profession=$data['profession_id'];
			$sel_disciplinelist=$data['disc_id'];
			$sel_role=$data['role_id'];
			$sel_technology=$data['tech_id'];
			$sel_functionalarea=$data['func_id'];
			$sel_skillset=$data['skillset'];
			$sel_qualification=$data['qualification'];
			$sel_hourly=$data['hourly'];
			$sel_monthly=$data['monthly'];
			
			
		  
		  $keywords=$data['keywords'];
		  
		  $attached_profile_img=$data['attached_profile_img'];
	  }
	  
	  require(WM_INCLIDE.WM_CONTENT.'post-job-requirements.php');
	 } 
	  else{?> 
      <div class="heading1"><h1>List of Posted Jobs<div style="float:right"><div class="confBtnSet"><input  class="action-input"  value="Post a similar Job" onclick="javascript:window.location='post-job-requirements.php'" type="Button"></div></div></h1></div>
      
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="listTable">
           <tr>
            <th width="3%">ID</th>
            <th width="12%">Job title </th>
            <th width="15%">Description</th>
           <!-- <th width="7%">Numb. of positions</th>-->
            <th width="15%">Budget<br/>Min &nbsp;/&nbsp;Max</th>
            <th width="8%"> File upload </th>
            <th width="10%">Job Start Date</th>
            <th width="10%"> Job end date</th>
            <th width="10%">Keywords</th>
           <!-- <th width="5%" >Total Applied</th>-->
            <th style="text-align:left">Action</th>
          </tr><?php
		  
		  //===============================================
  	 
		 if($uuid>0)
			  {
			   	$user_id=$s->value('UESR_ID');
				  $history_split = new splitPageResults("SELECT * FROM `post_job` WHERE `user_id` =".$s->value('USER_ID')." and `vertical_id`='".VERTICAL_ID."' and `status` like '".ENABLE."' ",MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_ORDER_HISTORY);//Paging
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
				  $history_split = new splitPageResults("SELECT * FROM `post_job` WHERE `user_id` =".$s->value('R_USER_ID')." and `vertical_id`='".VERTICAL_ID."' and `status` like '".ENABLE."' ",MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_ORDER_HISTORY);//Paging
			  }
		 
		
			 
	 if ( ($history_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
		?>
		
			 
		
			<div class="pagination">
              <span><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
			  <span class="fright"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>  			</div>
		
		<?php   
	  }
		  $post_run=$db->query_silent($history_split->sql_query);
		  $row=$history_split->start;
		  while($data=$db->fetch_array($post_run))
		  {
		  
		      $row++;
			  if($row%2!=0)
			  	$class=' class="odd"  ';
			  else
				$class=' class="even"  ';
				
				
				$string = $data['file'];
             $string_exploded = explode('.',$string);
			 $string_exploded[1];
			 if($string_exploded[1]=="png"){
			$immg='file-png.png';		
			} else if($string_exploded[1]=="docx"){
			$immg='file_doc.png';				
           } else if($string_exploded[1]=="pdf"){
			$immg='doc_pdf.png';					
			 } else if($string_exploded[1]=="jpg"){
			$immg='file_jpg.png';			
			 } else if($string_exploded[1]=="xls"){
			$immg='excel.png';
			}		

			
		  ?>
            
          <tr <?php echo $class?>>
            <td align="center"><?php echo $row ?></td>
            <?php
			if(total_applied($data['id'])>0)
			{
			?>
             <td><a href="applied-candidate-list.php?jid=<?php echo $data['id']?>"><?php echo $data['title']?></a></td>
            <?php 
			}
			else
			{?>
			 <td><?php echo $data['title']?></td>
			<?php }
			?>
           
            <td><?php echo $data['description']?></td>
            <!-- <td><?php echo $data['positions']?></td>-->
             <td><?php echo CURRENCY.$data['budget']?>&nbsp; | &nbsp;<?php echo CURRENCY.$data['budgetmax']?></td>
            <td align="center"><a href="job_post_file/<?php echo $data['file']?>"><img src="images/<?php echo $immg; ?>" width="30" title="<?php echo $data['file']?>" alt="<?php echo $data['file']?>" /></a></td>
             <td><?php echo date(DMY,strtotime($data['date']))?></td>
             <td><?php echo date(DMY,strtotime($data['job_end_date']))?></td>
            <td align="center"><?php echo $data['keywords']?></td>
            <!-- <td align="center"><?php 
 		      echo total_applied($data['id']);
			 ?></td>-->
             <td align="center"><a href="javascript:void(0)" onclick="show('#e<?php echo $row?>')">Edit</a>&nbsp;&nbsp;<a href="?action=delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure want to delete this job');">Delete</a></td>
          </tr>
          <tr>
              <td colspan="11"><div id="e<?php echo $row?>" class="conf"><div class="confirm-text">Are you sure you want to edit?</div>  
                  <div class="confBtnSet">
                    <input name="Button" type="Button" class="action-input" onclick="javascript:window.location='?id=<?php echo $data['id']?>'" value="Confirm" />
                    <input value="Cancel" class="action-input" onclick="hide('#e<?php echo $row?>')" type="Button">
                </div>
              </div>
              <div id="d<?php echo $row?>" class="conf delt" >
                  <div class="confirm-text">Are you sure you want to delete?</div>
                   
                  <div class="confBtnSet">
                    <input value="Confirm" class="action-input" onclick="javascript:window.location='?did=<?php echo $data['id']?>'" type="Button">
                    <input value="Cancel" class="action-input" onclick="hide('#d<?php echo $row?>')" type="Button">
                  </div>
                  </div>              </td>
             </tr>
          <?php	
			     
		  }
		   /*
		  	NO RESULT FOUND
		  */
		   
		 
			  if($db->num_rows($post_run)<=0)
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
        <?php
		if ( ($history_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
		?>
		
		 
		
			<div class="pagination">
			  <span style="float: right;"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>
		
			  <span><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
			</div>
		
		<?php   
	  }?>
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

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
