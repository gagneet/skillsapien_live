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

echo $user_id;
//paging 
//require(WM_INCLIDE.WM_CLASS.'split_page_results.php');



 
	 
	 
	 
					
				 
					 

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
       
       <div class="listOfTable">
      
    
	  
	  
	  <div class="heading1"><h1>List of Bid<div style="float:right"><div class="confBtnSet"></div></div></h1></div>
      
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="listTable">
      <?php if($s->value('R_USER_ID')>0) {?>
           <tr>
            <th width="3%">ID</th>
            <th width="12%">Job title </th>
            <th width="15%">Description</th>
            <th width="7%">Numb. of positions</th>
            <th width="6%">Budget</th>
            <th width="8%"> File upload </th>
            <th width="10%">Posted Date</th>
            <th width="10%"> Job end date</th>
            <th width="10%">Keywords</th>
            <th width="5%" >Total Applied</th>
            <th style="text-align:center">Action</th>
          </tr>
          
		  
<?php 
//$bid_query="select * from post_job where bidderid='".$user_id."'";
$job_query="select * from post_job ";
$job_result=mysql_query($job_query);
while($job=mysql_fetch_array($job_result))
{
?>		    
          <tr>
            <td width="3%"><?php echo $job['id'];?></td>
            <td width="12%"><?php echo $job['title'];?></td>
            <td width="15%"><?php echo substr($job['description'],0,10);?></td>
            <td width="7%"><?php echo $job['positions'];?></td>
            <td width="6%"><?php echo $job['budget'];?></td>
            <td width="8%"><?php echo substr($job['file'],0,10);?></td>
            <td width="10%"><?php echo $job['date'];?></td>
            <td width="10%"><?php echo $job['job_end_date'];?></td>
            <td width="10%"><?php echo $job['keywords'];?></td>
            <td width="5%" ><?php echo $job['id'];?></td>
            <td style="text-align:center"><a href="#">Delete</a></td>
          </tr>
  <?php }?>        
       
       
       
       <?php 
	   } else {
	   ?>
       <tr>
            <th width="5%">From</th>
            <th width="12%">Bidder Name </th>
            <th width="10%">Bid Rate</th>
            <th width="10%">Bid UOM</th>
            <th width="10%">Existing Job ?</th>
            <th width="10%"> Start Date </th>
            <th width="10%">End Date</th>
            <th> Bid Summary</th>
            <th width="17%">Action</th>
          </tr>
          <?php 
$bid_query="select * from bid where jobid='".$user_id."'";
$bid_result=mysql_query($bid_query);
while($bid=mysql_fetch_array($bid_result))
{
?>		    
          <tr>
            <td width="5%"><?php echo $bid['bidderid'];?></td>
            <td width="12%"><?php echo $bid['bidderid'];?> </td>
            <td width="10%"><?php echo $bid['total_estimated_cost'];?></td>
            <td width="10%"><?php echo $bid['bidderid'];?></td>
            <td width="10%"><?php echo $bid['bidderid'];?></td>
            <td width="10%"><?php echo $bid['bid_date'];?></td>
            <td width="10%"><?php echo $bid['bid_date'];?></td>
            <td><?php echo $bid['bid_details'];?></td>
            <td width="17%">
            <table><tr><td>Accept</td><td><input type="radio" name="accept" /></td><td>Counter</td><td><input type="radio" name="accept" /></td><td>Reject</td><td><input type="radio" name="accept" /></td></tr></table>
            </td>
          </tr>
  <?php }?>    
          
       <?php }?>
        </table>
       
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
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
