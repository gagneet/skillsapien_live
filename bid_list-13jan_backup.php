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
            <th width="6%">Bid On</th>
            <th width="12%">Profile Title </th>
            <th width="10%">Bid Rate</th>
            <th width="10%">Bid UOM</th>
            <th width="15%">Existing Job ?</th>
            <th width="10%">From Date </th>
            <th width="10%">To Date</th>
            <th width="17%"> Reason for Bid</th>
            
            <th style="text-align:center">Negotiable ?</th>
          </tr>
          
		  
<?php 
$bid_query="select * from bid where bidderid='".$user_id."'";
$bid_result=mysql_query($bid_query);
while($bid=mysql_fetch_array($bid_result))
{ $jobid=$bid['jobid'];
$query="select * from skills_profiles where user_id='".$jobid."'";
$result=$db->query_silent($query);
$profile=$db->fetch_array($result);
?>		    
          <tr>
            <td width="6%"><?php echo $bid['jobid'];?></td>
            <td width="12%"><?php echo $profile['skills_profile'];?></td>
            <td width="10%"><?php echo $bid['total_estimated_cost'];?></td>
            <td width="10%"><?php echo $bid['jobid'];?></td>
            <td width="15%"><?php echo $bid['jobid'];?></td>
            <td width="10%"><?php echo $bid['bid_date'];?> </td>
            <td width="10%"><?php echo $bid['bid_date'];?></td>
            <td width="17%"><?php echo $bid['bid_details'];?></td>
            
            <td style="text-align:center"><table><tr><td>Yes</td><td><input type="radio" /></td><td>No</td><td><input type="radio" /></td></tr></table></td>
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
$i=0;
while($bid=mysql_fetch_array($bid_result))
{
$i++;
if($bid['status']=='accept')
{
$check='checked';
}
/*if($bid['status']=='counter')
{
$check1='checked';
}*/

$bidderid=$bid['bidderid'];
$profile_query="select * from profiles where user_id='".$bidderid."'";
$profile_result=$db->query_silent($profile_query);
$profile=$db->fetch_array($profile_result);
?>		    
          <tr>
            <td width="5%"><?php echo $bid['bidderid'];?></td>
            <td width="12%"><?php echo $profile['username'];?> </td>
            <td width="10%"><?php echo $bid['total_estimated_cost'];?></td>
            <td width="10%"><?php echo $bid['bidderid'];?></td>
            <td width="10%"><?php echo $bid['bidderid'];?></td>
            <td width="10%"><?php echo $bid['bid_date'];?></td>
            <td width="10%"><?php echo $bid['bid_date'];?></td>
            <td><?php echo $bid['bid_details'];?></td>
            <td width="17%">
            
            <table>
            	<tr>
                	<td>Accept</td>
                    <td>
                    <?php 
					if($bid['status']=="accept")
					{ ?>
                    <input type="radio" name="accept<?php echo $i;?>" value="accept" checked="checked" />
					<?php }else{?>  
                     <input type="radio" name="accept<?php echo $i;?>" value="accept" />
                    <?php } ?>
                    </td>
                    <td>Counter</td>
                    <td>
                    <?php 
					if($bid['status']=="counter")
					{ ?>
                    <input type="radio" name="counter<?php echo $i;?>" value="counter" checked="checked" />
					<?php }else{?>  
                     <input type="radio" name="counter<?php echo $i;?>" value="counter" />
                    <?php } ?>
                    </td>
                    <td>Reject</td>
                    <td>
                    <?php 
					if($bid['status']=="reject")
					{ ?>
                    <input type="radio" name="reject<?php echo $i;?>" value="reject" checked="checked" />
					<?php }else{?>  
                     <input type="radio" name="reject<?php echo $i;?>" value="reject" />
                    <?php } ?>
                    </td>

                </tr>
            </table>
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
