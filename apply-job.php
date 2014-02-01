<?php
include_once('init.php');

if($_REQUEST['jid']=="" || $_REQUEST['jid']<=0)
{
  header('location:bid_on_skills.php');
}

		$post_job_sql='SELECT * FROM `post_job` WHERE `id`='.$_REQUEST['jid'].' and `status` like  "'.ENABLE.'" ';
		$post_job_run=$db->query_silent($post_job_sql);
		$post_job_data=$db->fetch_array($post_job_run);
		
 	 
			
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
    <?php echo $get_template->process('global_header.php')?>

   <div class="canten">
     
    <div id="view_job"></div>
    <script>
	$.post('<?php echo WM_INCLIDE.WM_CONTENT?>view-job.php?jid=<?php echo $_REQUEST['jid']?>',function(data){$('#view_job').html(data)});
	</script>
    <div class="box-right" >
      <div class="box-top-R">
        <div class="lattest">Sign In</div>
         </div>
      <div class="box-bg">
       <table width="0" border="0" cellspacing="0" cellpadding="0"  class="LogIn">
  <tr>
    <td  >Login:</td>
    <td><input type="text" value="Username" class="input" onblur="if(this.value=='') this.value='Username'"

 onfocus="if(this.value=='Username') this.value=''" name="get_loginId" id="get_loginId" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" value="password"  class="input" onblur="if(this.value=='') this.value='password'"

 onfocus="if(this.value=='password') this.value=''"   name="get_h_password" id="get_h_password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td  ><div class="button"><input class="input_btn" /></div></td>
  </tr>
  
  <tr>
    <td colspan="2"><a href="index.php">Create account</a> | <a href="#">Forget password</a></td>
   </tr>
</table>

      </div>
      <div class="box-bottom-R"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>

</body>
</html>
