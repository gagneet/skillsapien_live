<?php
include_once('../../init.php');
Is_valid_uesr();


		$post_job_sql='SELECT * FROM `proposal` WHERE `user_id`='.$_REQUEST['cid'].' and `job_id`='.$_REQUEST['jid'].' and `status` like  "'.ENABLE.'" ';
		$post_job_run=$db->query_silent($post_job_sql);
		$post_job_data=$db->fetch_array($post_job_run);
?><div class="box">
      <div class="box-top-R">
        <div class="lattest"> Proposal</div>
      </div>
      <div class="box-bg fleft">
        <div class="border-box">
           <div class="jobTitle">
           	<p><?php echo $post_job_data['text']?></p>
           </div>
           <table cellpadding="0" cellspacing="0" width="100%" border="0" class="postTable">
           	<tr>
            	<td align="left" valign="middle"><span class="date"><?php echo date('d M, Y',strtotime($post_job_data['time']))?> </span></td>
                <td></td>
                <td align="right" valign="middle"><strong class="budget"><?php echo CURRENCY.$post_job_data['price']?></strong></td>
            </tr>
           </table>
        </div>
         
       </div>
      <div class="box-bottom-R"></div>
    </div>  