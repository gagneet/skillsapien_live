<?php
include_once('init.php');

Is_valid_uesr();

$uuid=$s->value('USER_ID');
# echo $uuid;

 if($uuid>0)
			  {
		        $user_id=$uuid;
			  }
			  
			  if($s->value('R_USER_ID')>0)
			  {
		 	 	$user_id=$s->value('R_USER_ID');
			  }


 $user_id;

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
	 
	/* if($db->dataTrim($_REQUEST['positions'])<=0)
	 {
	    $error3= $error_msg[26];
		$error=true;
 	 }*/
	 
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
	 
	 /* if(strtotime(date('d-m-Y',strtotime($_REQUEST['job_start_d']."-".$_REQUEST['job_start_m']."-".$_REQUEST['job_start_y'])))<strtotime(date('d-m-Y')))
	 {
	    $errorstart="Please select job start date";
		$error=true;
 	 }
	 */
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
	//echo $tttt=$_REQUEST['description'];
	if($error==false)
	{
	
	
	    $file="job_post_file";
  		if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
		   $file="post_job_file_".sprintf("%-010s",$s->value('R_USER_ID'))."_".time().".".get_extension($_FILES['file']['name']);
 	       $error5=UploadImg("".POST_JOB_FILE_FOLDER.$file,$_FILES['file'],true);
	    }
	
	
	
	
	if($s->value('UESR_ID')>0)
			  {
		  	$user_id=$s->value('UESR_ID');
			
			$file_name=rand(1111,0000).$_FILES['upload']['name'];						
						$file_tmp=$_FILES['upload']['tmp_name'];
					


		
  $sql="INSERT INTO  `post_job` set 
			  			`user_id`='".$s->value('UESR_ID')."', 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`asking_currency`='".$db->dataTrim($_REQUEST['currency'])."',
						`budget`='".$db->dataTrim($_REQUEST['budget'])."',
						`asking_time_uom`='".$db->dataTrim($_REQUEST['time_uom'])."',
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						`max_currency`='".$db->dataTrim($_REQUEST['currency_max'])."',						 
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`max_time_uom`='".$db->dataTrim($_REQUEST['time_uom_max'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
						`file`='".$file_name."',
						`job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`reply_deadline_date`='".$db->dataTrim($_REQUEST['reply_start_y'])."-".$db->dataTrim($_REQUEST['reply_start_m'])."-".$db->dataTrim($_REQUEST['reply_start_d'])."', 
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',
 						`date`=now(), 
					    `status`='".ENABLE."',
						`location`='".$db->dataTrim($_REQUEST['location'])."',
						`country`='".$db->dataTrim($_REQUEST['country'])."',
						`public_display`='".$db->dataTrim($_REQUEST['public_display'])."',
						`vertical_id`='".VERTICAL_ID."'";  
						
						move_uploaded_file($_FILES["upload"]["tmp_name"],"job_post_file/" .$file_name);
						
						
			  }
			  
			  
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
				
					$file_name=rand(1111,0000).$_FILES['upload']['name'];						
						$file_tmp=$_FILES['upload']['tmp_name'];
			  
	echo $sql="INSERT INTO  `post_job` set 
			  			`user_id`='".$s->value('R_USER_ID')."', 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`asking_currency`='".$db->dataTrim($_REQUEST['currency'])."',
						`budget`='".$db->dataTrim($_REQUEST['budget'])."',
						`asking_time_uom`='".$db->dataTrim($_REQUEST['time_uom'])."',
						`profession_id`='".$db->dataTrim($_REQUEST['proname'])."',
						`disc_id`='".$db->dataTrim($_REQUEST['discname'])."',
						`role_id`='".$db->dataTrim($_REQUEST['role'])."',
						`tech_id`='".$db->dataTrim($_REQUEST['t_name'])."',
						`func_id`='".$db->dataTrim($_REQUEST['fun_ar_name'])."',
						`skillset`='".$db->dataTrim($_REQUEST['skillset'])."',
						`qualification`='".$db->dataTrim($_REQUEST['qualification'])."',
						`max_currency`='".$db->dataTrim($_REQUEST['currency_max'])."',						 
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`max_time_uom`='".$db->dataTrim($_REQUEST['time_uom_max'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
						`file`='".$file_name."',
						`job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`reply_deadline_date`='".$db->dataTrim($_REQUEST['reply_start_y'])."-".$db->dataTrim($_REQUEST['reply_start_m'])."-".$db->dataTrim($_REQUEST['reply_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',
 						`date`=now(), 
					    `status`='".ENABLE."',
						`location`='".$db->dataTrim($_REQUEST['location'])."',
						`country`='".$db->dataTrim($_REQUEST['country'])."',
						`public_display`='".$db->dataTrim($_REQUEST['public_display'])."',
						`vertical_id`='".VERTICAL_ID."'";  
					
						
						move_uploaded_file($_FILES["upload"]["tmp_name"],"job_post_file/" .$file_name);
					
			  }
	/*  echo 	  $sql="INSERT INTO  `post_job` set 
			  			`user_id`='".$s->value('R_USER_ID')."', 
						`title` ='".$db->dataTrim($_REQUEST['title'])."', 
						`description`='".$db->dataTrim($_REQUEST['description'])."', 
						`positions`='".$db->dataTrim($_REQUEST['positions'])."', 
						`budget`='".$db->dataTrim($_REQUEST['budget'])."', 
						`budgetmax`='".$db->dataTrim($_REQUEST['budgetmax'])."',
						`cur_type`='".$db->dataTrim($_REQUEST['ctype'])."',
						`file`='".$file."',
						`job_end_date`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
						`job_start_date`='".$db->dataTrim($_REQUEST['job_start_y'])."-".$db->dataTrim($_REQUEST['job_start_m'])."-".$db->dataTrim($_REQUEST['job_start_d'])."',
						`keywords`='".$db->dataTrim($_REQUEST['keywords'])."', 
						
						`hourly`='".$db->dataTrim($_REQUEST['hourly'])."',
						`monthly`='".$db->dataTrim($_REQUEST['monthly'])."',
 						`date`=now(), 
					    `status`='".ENABLE."'";  */
			  
				/*if($error5=="")
				{
					if($db->query_silent($sql)==true  )
					{
					  header('location:list-job-requirements.php');
					}
				}				*/		
				
				
				
			
				if($db->query_silent($sql)==true )
					{
					
					 header('location:list-job-requirements.php');
					 
					}
				 

	} 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>

<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">


function update_t_name(){
	  $("#t_name").change(function(){
		 //alert('Hi');
		 var t_name_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "t_name=" + t_name_val
		   , dataType: "html"
		   , success: function(msg){
				$("#fun_area").html(msg);
			}
		 });
	  });
  }

function update_role(){
	  $("#role").change(function(){
		 //alert('Hi');
		 var role_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "role=" + role_val
		   , dataType: "html"
		   , success: function(msg){
				$("#techdiv").html(msg);
			}
		 });
	  });
  }


  function update_discname(){
	  $("#discname").change(function(){
		 //alert('Hi');
		 var discname_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "discname=" + discname_val
		   , dataType: "html"
		   , success: function(msg){
				$("#rolediv").html(msg);
			}
		 });
	  });
  }
  
$(document).ready(function(){
  $("#proname").change(function(){
	 var proname_val = $(this).val();
	 $.ajax({
	  type: "POST"
	   , url: "findState.php"
	   , cache: false
	   , data: "proname=" + proname_val
	   , dataType: "html"
	   , success: function(msg){
			$("#statediv").html(msg);
		}
	 });
  });
  update_discname();
					 
});

</script>
</head>
<body>
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <!--<div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3cl"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>-->
      <?php 
	  $title=$_REQUEST['title'];
	  $description=$_REQUEST['description'];
	  $positions=$_REQUEST['positions'];
	  $budget=$_REQUEST['budget'];
	  $attached_profile_img=$_REQUEST['attached_profile_img'];
	  $job_end_d=$_REQUEST['job_end_d'];
	  $job_end_m=$_REQUEST['job_end_m'];
	  $job_end_y=$_REQUEST['job_end_y'];
	  $keywords=$_REQUEST['keywords'];
	  require(WM_INCLIDE.WM_CONTENT.'post-job-requirements.php');?>
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
</div>
</body>
</html>
