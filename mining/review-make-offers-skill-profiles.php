<?php
include_once('init.php');
 
	$s->set('R_USER_ID','161');
		$title=$_REQUEST['title'];
		$subject=$_REQUEST['subject'];
		$descriptions=$_REQUEST['descriptions'];
		if($_REQUEST['data']=="data")
		{
			$error=false;
			 
			if($db->dataTrim($_REQUEST['subject'])=="")
			{
			  $error2=$error_msg[44];
			  $error=true;
			}
			if($db->dataTrim($_REQUEST['descriptions'])=="")
			{
			  $error3=$error_msg[45];
			  $error=true;
			}
			//**********************************
				if($error==false)
				{
 				 /*
				   add comment 
				 */
				 
			    	 $sql="INSERT INTO `review_comment` (  `from`, `to`,`job_id`, `comment`, `date`, `status`) VALUES (  '".$s->value('R_USER_ID')."', '".$db->dataTrim($_REQUEST['cid'])."','".$db->dataTrim($_REQUEST['jid'])."' , '".$db->dataTrim($_REQUEST['descriptions'])."', now(), '".ENABLE."');";
					 
				 $run=$db->query_silent($sql);
				 $comment_id=$db->insert_id();
				 
				 
				 
				 
				  /*
					add comment by recruter
				  */
				 
				 
				 
				 
				   $sql="INSERT INTO  `review` set
				   `recruiters_id`='".$s->value('R_USER_ID')."', 
 				   `job_id`='".$db->dataTrim($_REQUEST['jid'])."', 
				   `subject`='".$db->dataTrim($_REQUEST['subject'])."', 
				   `date`=now(), 
				   `status`='".ENABLE."'";
				 if($run)
				 {
				   $run=$db->query_silent($sql);
				   if($run)
				   {
 				      header('location:applied-condidate-list.php?'.$s->value('URL_PARA'));
				   }
				   
				   
				 }

				}
		  //-----------------
		  
		  /* $sql="SELECT * FROM `skills_profiles` WHERE `skills_profile` like '".$db->dataTrim($_REQUEST['title'])."'";
		   $run=$db->query_silent($sql);
		   while($data=$db->fetch_array($run))
		   {
		    	 $sql="INSERT INTO  `review_comment`  set  
		  
		  		`user_id`='".$s->value('R_USER_ID')."', 
				`comment`='".$db->dataTrim($_REQUEST['descriptions'])."', 
				`date`=now(), 
				`status`='".ENABLE."'";
		        $run=$db->query_silent($sql); 
		   }	*/	   
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
      <form method="post">
      <div class="sign_cl">
      <h1>Review and make offers on Skill Profiles</h1>
        <div class="form_area2">
          <div class="row2">
            <label class="label_cl2"> Candidate Name</label>
             
            <?php
			 echo show_name($_REQUEST['cid']);
			?>
           <?php if($error1!="") { ?> <div class="error_msg"><?php echo $error1?></div><?php } ?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Subject </label>
            <input name="subject"  id="subject" type="text"  class="input_cl2" value="<?php echo $subject?>" />
            <?php if($error2!="") { ?> <div class="error_msg"><?php echo $error2?></div><?php } ?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2"> Descriptions</label>
            <textarea name="descriptions" id="descriptions" class="textarea_cl2"><?php echo $descriptions?></textarea>
            <?php if($error3!="") { ?> <div class="error_msg"><?php echo $error3?></div><?php } ?>
            <div class="clear"></div>
          </div>
          <div class="row "><input type="hidden" name="data" id="data" value="data" />
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
