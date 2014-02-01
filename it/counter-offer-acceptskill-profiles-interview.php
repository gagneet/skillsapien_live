<?php
include_once('init.php');
Is_valid_uesr();
	/*
	add reply
	*/
	if($_REQUEST['data']=="data")
	{
	    $error=false;
	 
		if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
			$file=sprintf("%-010s",$s->value('USER_ID'))."_JID_".$_REQUEST['jid']."_".time().".".get_extension($_FILES['file']['name']);
			UploadImg_accept("".ACCEPT_FOLDER.$file,$_FILES['file'],true);
			$add_photo=',`photo` = "'.$file.'"  ';
	    }
		if($error==false)
		{
		    $sql='INSERT INTO  `review_comment` set
 								`from` ='.$s->value('USER_ID').',
								`to` ='.$_REQUEST['rid'].',
								`job_id` ='.$_REQUEST['jid'].',
								`comment`="'.$db->dataTrim($_REQUEST['comment']).'" ,
								`attach_file`="'.$file.'" ,
								`date` =now(),
								`status` ="'.ENABLE.'"';
			if($db->query_silent($sql)==true  )
			{
			   $msg=$error_msg[49];
			}
								
		}
		//===========================
		
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<body>
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="sign_cl">
      <h1>Counter-offer or accept Skill Profiles for interview
</h1>
        <div class="form_area2">
        <?php
		if($msg!="")
		{
		?>
        <div class="row2">
            <label class="label_cl2">   </label>
            <b><?php
			 echo $msg;
			?><br /><a href="condidate-job-list.php?<?php echo $s->value('URL_PARA')?>">Click here</a> to go back.</b>
            <div class="clear"></div>
          </div>
        <?php
		}
		?>
        
          <div class="row2">
            <label class="label_cl2">  Recruiter Name </label>
            <b><?php
			 echo show_name($_REQUEST['rid']);
			?></b>
            <div class="clear"></div>
          </div>
         <form method="post" enctype="multipart/form-data">
          <div class="row2">
            <label class="label_cl2"> Your comment    </label>
            <textarea name="comment"  id="comment" class="textarea_cl2"></textarea>
            <div class="clear"></div>
          </div>
          <div class="row2">
            
            <div class="browseInput" style="width:auto;">
                   <label class="label_cl2"> Upload file    </label>
            <input   type="text"  class="attach" id="attached_profile_img" name="attached_profile_img" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="file"  name="file" size="50" onchange="attache('#file','#attached_profile_img')"/>
            </div>
            <div class="clear"></div>
          </div>
          <div class="row ">

            <!--<img  src="images/accept.gif" width="109" height="36" border="0" onclick="javascript:window.location='?jid=<?php //echo $_REQUEST['jid']?>'" />-->
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input  type="image"  src="images/reply.gif"   />
            <div class="clear"></div>
          </div><input type="hidden" name="data" id="data" value="data" />
         </form>
          <?php
		  $comment_sql='SELECT * FROM `review_comment` WHERE `job_id`='.$_REQUEST['jid'].' ORDER BY  `id` DESC';
		  $comment_run=$db->query_silent($comment_sql);
		  while($comment_data=$db->fetch_array($comment_run))
		  {?>
          <?php
			  if(user_type($id)=="C")
			  {
			  ?>
				<div class="row2">
                <label class="label_cl2"><?php echo show_name($comment_data['from'])?><br /><?php echo date(DMY.HIS,strtotime($comment_data['date']))?></label>
                <p style="font-size:12px; color:#333333;"><?php echo $comment_data['comment'] ?></p>
                <div class="clear"></div>
              </div>		
			  <?php
			  }
			  
			  
			  if(user_type($id)=="R")
			  {
			  ?>
				<div class="row2">
                <label class="label_cl2"><?php echo show_name($comment_data['from'])?><br /><?php echo date(DMY.HIS,strtotime($comment_data['date']))?></label>
                 <p style="font-size:11px; color:#999999;"><i><?php echo $comment_data['comment'] ?></i></p>
                <div class="clear"></div>
              </div>		
			  <?php
			  }
			  ?>
		  
		 <?php  }
		  ?>
          <!--<div class="row2">
            <label class="label_cl2">< Candidate Name ><br />< date - time ></label>
            <p style="font-size:12px; color:#333333;">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Replied<br />< date - time ></label>
            <p style="font-size:11px; color:#999999;"><i>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</i></p>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">< Candidate Name ><br />< date - time ></label>
            <p style="font-size:12px; color:#333333;">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Replied<br />< date - time ></label>
            <p style="font-size:11px; color:#999999;"><i>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</i></p>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">< Candidate Name ><br />< date - time ></label>
            <p style="font-size:12px; color:#333333;">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Replied<br />< date - time ></label>
            <p style="font-size:11px; color:#999999;"><i>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</i></p>
            <div class="clear"></div>
          </div>-->
          <div  class="clear"></div>
        </div>
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
