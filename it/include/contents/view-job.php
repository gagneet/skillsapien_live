<?php
include_once('../../init.php');
 


		$post_job_sql='SELECT * FROM `post_job` WHERE `id`='.$_REQUEST['jid'].' and `status` like  "'.ENABLE.'" ';
		$post_job_run=$db->query_silent($post_job_sql);
		$post_job_data=$db->fetch_array($post_job_run);
?><div class="box">
      <div class="box-top-R">
        <div class="lattest"><!--Job Title--><?php echo $post_job_data['title']?></div>
      </div>
      <div class="box-bg fleft">
        <div class="border-box">
           <div class="jobTitle">
           	<p><?php echo $post_job_data['description']?></p>
           </div>
           <table cellpadding="0" cellspacing="0" width="100%" border="0" class="postTable">
           	<tr>
            	<td align="left" valign="middle"><span class="date"><?php echo date('d M, Y',strtotime($post_job_data['date']))?> </span></td>
                <td></td>
                <td align="right" valign="middle"><strong class="budget"><?php echo CURRENCY.$post_job_data['budget']?></strong></td>
            </tr>
           </table>
        </div>
         
       </div>
      <div class="box-bottom-R"></div>
    </div> 