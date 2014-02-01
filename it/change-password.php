<?php
include_once('init.php');
Is_valid_uesr();
 	/*
		cancle
	*/
 $uuid=$s->value('USER_ID');
               if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  
			  if($s->value('R_USER_ID')>0)
			  {
				$user_id=$s->value('R_USER_ID');
			  }

//echo $user_id;
	
	if($_SERVER['QUERY_STRING']=="cancle")
	{ 
	  header('location:candidate-dashboard.php');
	}
	          
			  
			  /*
			  get uesr id
			  */
		/*	 
			  if($s->value('UESR_ID')>0)
			  {
			  	$user_id=$s->value('UESR_ID');
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			  	$user_id=$s->value('R_USER_ID');
			  }*/
			  

	/*
	
	update password
	*/
	if($_REQUEST['data']=="data")
	{		
		 	
			$error=false;
			/*if(strlen($db->dataTrim($_REQUEST['new_password']))=="")
			{
				$error=true;
				$error2=$error_msg[10];	
			}*/
			
			if(($db->dataTrim($_REQUEST['password']))!=($db->dataTrim($_REQUEST['new_password'])))
			{ 
				$error=true;
				$error3=$error_msg[52];	
			}
			
 			/*if(strlen($db->dataTrim($_REQUEST['new_password']))<MIN_PASSWORD ||  strlen($db->dataTrim($_REQUEST['new_password']))>MAX_PASSWORD)
			{
				$error=true;
				$new_password=$error_msg[50];	
			}*/
			 
			 //-------------match old password
		    $sql='SELECT * FROM `user_login_details`   WHERE password="'.md5($db->dataTrim($_REQUEST['old_password'])).'"  and id='.$user_id;  
   			  if($db->num_rows($db->query_silent($sql))!=1)
			  {
			    $error=true;
				$error1=$error_msg[1];	
			
			  }
			  //--------------------
			  
			//=======================================
			if($error==false)
			{
			  
		
			 $sql='update user_login_details set password="'.md5($db->dataTrim($_REQUEST['new_password'])).'" where id='.$user_id;  
			  if($db->query_silent($sql)==true)
			  {
			    $msg=$error_msg[6];
				
			  }
			 
			}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?></head>
<script src="js/counter-offer-acceptskill-profiles-interview.js" type="text/javascript" language="javascript1.2"></script>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
     <div style="padding-left: 850px;"><a href="update_account.php"><img src="images/back_bu.gif" /></a> </div>
      <form method="post" action="" id="">
      <div class="sign_cl">
      <h1>Change password</h1>
        <div class="form_area2">
        
       <?php
		if($msg!="")
		{
		?>
          <div class="row2">
            <label class="label_cl2"></label>
            <div class="okmsg"><?php echo $msg?></div>
             <div class="clear"></div>
          </div>
        <?php } ?>
        
          <div class="row2">
            <label class="label_cl2">Old Password </label>
             <input name="old_password" id="old_password" type="password"  class="input_cl2"  value="" />
			 <?php if($error1!="") {?> <div class="error_msg"><?php echo $error1?></div><?php }?>
              
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">New Password </label>
             <input name="new_password" id="new_password" type="text"  class="input_cl2"   />
            <?php /*?> <?php if($error2!="") {?> <div class="error_msg"><?php echo $error2?></div><?php }?><?php */?>
			 <?php /*?><?php if($new_password!="") {?> <div class="error_msg"><?php echo $new_password?></div><?php }?><?php */?>
            <div class="clear"></div>
          </div>
          
          <div class="row2">
            <label class="label_cl2">Re-type Password </label>
             <input name="password" id="password" type="text"  class="input_cl2"   />
             <?php if($error3!="") {?> <div class="error_msg"><?php echo $error3?></div><?php }?>
            <div class="clear"></div>
          </div>
          
             <div class="row ">
            <input  type="image"  src="images/update_buttons.gif" class="space_lc4"  />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img  src="images/cancle_buttons.gif"  onclick="javascript:window.location.href='?cancle'"  width="125"  height="35" border="0" />
            <div class="clear"></div>
          </div>
          
          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
      </div><input type="hidden" id="data" name="data" value="data" />
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
 