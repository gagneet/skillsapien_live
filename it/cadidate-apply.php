<?php
include_once('init.php');
Is_valid_uesr();


		$post_job_sql='SELECT * FROM `post_job` WHERE `id`='.$_REQUEST['jid'].' and `status` like  "'.ENABLE.'" ';
		$post_job_run=$db->query_silent($post_job_sql);
		$post_job_data=$db->fetch_array($post_job_run);
		
		
		/*
		apply
		*/
		if($_REQUEST['data']=="data")
		{
			/*
			add proposal
			*/
		    	$p_sql="INSERT INTO `proposal` set
					 `user_id`=".$s->value('USER_ID').", 
					 `job_id`=".$_REQUEST['jid'].", 
					 `text`='".$db->dataTrim($_REQUEST['proposal'])."', 
					 `price`='".$db->dataTrim($_REQUEST['price'])."', 
					 `time`='".$db->dataTrim($_REQUEST['job_end_y'])."-".$db->dataTrim($_REQUEST['job_end_m'])."-".$db->dataTrim($_REQUEST['job_end_d'])."', 
					 `date`=now(), 
					 `status`='".ENABLE."'";
					 
		  if($db->query_silent($p_sql))
		  {
		    apply($_REQUEST['jid']);
			header("location:candidate-job-list.php?".$s->value('URL_PARA'));
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
     
    <div id="view_job"></div>
    <script>
	$.post('<?php echo WM_INCLIDE.WM_CONTENT?>view-job.php?jid=<?php echo $_REQUEST['jid']?>',function(data){$('#view_job').html(data)});
	</script>
    <div class="box-right" >
      <div class="box-top-R">
        <div class="lattest">Proposal</div>
         </div>
      <div class="box-bg">
      	<div class="postTitle">Post Your proposal</div>
         <form action="" method="post" class="message">
         	<textarea class="textPost"  id="proposal" name="proposal" rows="30" cols="50"></textarea>
            <table width="0" border="0" cellspacing="0" cellpadding="0" class="dateListTabe">
              <tr>
                <td>Time</td>
                <td><select name="job_end_d" id="job_end_d"   class="input5">
							  <option selected="selected" value="">-Date-</option>
							 <?php
							 for($d=1;$d<=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select></td>
                
                <td>
                	<select name="job_end_m" id="job_end_m"   class="input4">
							  <option value="" selected>-Month-</option>
                              <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>><?php  echo $month[$d]?></option>
							 <?php 
							 }
							  
							  ?>
							
							</select>
                </td>
               	
                <td>
                	<select name="job_end_y" id="job_end_y"   class="input4">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo '  selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select> 
                </td>
               </tr>
               <tr>
					<td>
                    	Price
                    </td>
                    <td colspan="3">
                    	<input type="text" value="" id="price" name="price" class="input3" />
                    </td>
               </tr>
            </table>
            <div align="center">
              <input type="hidden" value="data" name="data" id="data" />
              <input type="submit" value="Apply" class="applyBtn" /> 
               </div>
        </form>
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
