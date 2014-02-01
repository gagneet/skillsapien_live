<?php
include_once('init.php');

	//if skip this section
	if($_SERVER['QUERY_STRING']=="next")
	{
	        $s->set('C_FORM','4');
			header('location:set-rates.php');	
	}
	if($s->value('C_FORM')!=3)
	{
	
		switch($s->value('C_FORM'))
		{
		 case 1:
		     header('location:sign-up-candidate-profile.php');
			 break;
		 case 2:
			 header('location:fill-in-your-skills.php');
			 break;
		 
	    case 4:
			 header('location:set-rates.php');
			 break;		 	 
		 default :
			header('location:index.php');	 
		}
	 
	}
	
	 /*
  Record an audio/video clip about yourself 
  */ 
 	if($_REQUEST['data']=="data")
	{
 	 
	$audio="";
	if($_FILES['attached_file_audio']['name']!="")
	{
	 $audio=$s->value('UESR_ID') .".".get_extension($_FILES['attached_file_audio']['name']);
 	 $erro_audio_video=UploadImg_audio_video(AUDIO_FOLDER.$audio,$_FILES['attached_file_audio'],true);
	}

      $sql="INSERT INTO  `audio_info` 
  		    set
				`user_id` =".$s->value('UESR_ID').",
				`name`='".$db->dataTrim($audio)."' ,
				`i_am`='".$db->dataTrim($_REQUEST['i_am'])."'  ,
				`language`='".$db->dataTrim($_REQUEST['language'])."'  ,
				`date` =now(),
				`status`='".ENABLE."'
				";
		if($db->query_silent($sql) )
		{
		 	$s->set('C_FORM','4');
			header('location:set-rates.php');	 	
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

  <form method="post" id="tab3" onSubmit="return form3('')" enctype="multipart/form-data" >
  <div class="canten">
    <div class="center_in">
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3clact"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
      <div class="sign_cl">
        <h1>Record an audio/video clip about yourself <span>*Optional*</span> </h1>
        <div class="form_area2">
           <div class="row2">
            <label class="label_cl2">I am </label>
             <input name="i_am" id="i_am" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>
        
          <div class="row2">
            <label class="label_cl2">Language </label>
            <select name="language" id="language" size="1" class="select_cl2">
            <?php
			
			$C_sql='SELECT `id`, `name` FROM `languages` WHERE 1 ORDER BY `languages`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>"  ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Why I should get the highest bid</label>
            <div class="browseInput">
            <input   type="text"  class="attach" id="attached_audio" name="attached_audio" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="attached_file_audio"  name="attached_file_audio" size="50" onchange="attache('#attached_file_audio','#attached_audio')"/>
             <?php if($erro_audio_video!="") {?> <div class="error_msg"><?php echo $erro_audio_video?></div><?php }?>
            </div>
            
            
          </div>
          <div class="row ">
            <input  type="image"  src="images/continue_bu.gif" class="space_lc4"  />
            &nbsp;&nbsp;&nbsp;&nbsp;
           <img src="images/skip_buttons.gif" onClick="javascript:window.location.href='?next'">
            <div class="clear"></div>
          </div>
          <div  class="clear"></div>
        </div>
        <p> <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        </p>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><input type="hidden" name="data" id="data" value="data" />
  </form>
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
