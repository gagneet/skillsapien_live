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

 $user_id;
//paging 
require(WM_INCLIDE.WM_CLASS.'split_page_results.php');

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
       
      
    
	  
	   <?php if($s->value('R_USER_ID')>0) {
       $fetch="select * from profiles where user_id='".$user_id."'";
        $fetch_result=mysql_query($fetch);
        $fetch_row=mysql_fetch_array($fetch_result);
        $namesss=$fetch_row["username"]; 
 
       ?>
             <table width="100%" border="0" cellspacing="0" cellpadding="0" style="color:#000000">
          <tr>
            <td width="10%" align="left" valign="top">Recruiter ID:</td>
            <td width="20%" align="left" valign="top"><?php echo $user_id; ?></td>
             <td width="12%" align="left" valign="top">Recruiter Name:</td>
            <td width="20%" align="left" valign="top"><?php echo $namesss; ?></td>
             <td width="15%" align="left" valign="top">Preferred Currency:</td>
            <td width="15%" align="left" valign="top">AUD</td>
            <td> </td>
           </tr>
         
        </table>
       
       <tr>
                <td colspan="2" align="left" valign="top" class="font-13"><br/><br/><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <?php 
			 $sql="select count(bidderid)  as total from bid where bidderid='".$user_id."'";
			     $records=mysql_query($sql);
				   $rows=mysql_fetch_array($records);
				 
	               ?>
                 <?php 
			 $sql1="select count(bidderid)  as baccept from bid where bidderid='".$user_id."' and status='accept'";
			     $records1=mysql_query($sql1);
				   $rows1=mysql_fetch_array($records1);
	               ?>
      <?php
	       $sql12="select count(bidderid)  as breject from bid where bidderid='".$user_id."' and status='reject'";
			     $records12=mysql_query($sql12);
				   $rows12=mysql_fetch_array($records12);
      ?>
       <?php
	       $sql123="select count(bidderid)  as counter from bid where bidderid='".$user_id."' and status='counter'";
			     $records123=mysql_query($sql123);
				   $rows123=mysql_fetch_array($records123);
				   
				   	   
				$conduct="select count(recruiter_id)  as conduct from interview_success_details where recruiter_id='".$user_id."' and interview_complete='1'";
			     $conduct_result=mysql_query($conduct);
				   $conduct_row=mysql_fetch_array($conduct_result);
				   
	$made="select count(recruiter_id)  as made from interview_success_details where recruiter_id='".$user_id."' and interview_complete='1' and status='1'";
			     $made_result=mysql_query($made);
				   $made_row=mysql_fetch_array($made_result);
				   
				  $active="select count(recruiter_id)  as active from interview_success_details where recruiter_id='".$user_id."' and status='0'";
			     $active_result=mysql_query($active);
				   $active_row=mysql_fetch_array($active_result);
      ?>
          <tr>
            <td width="23%" align="left" valign="top"><strong>My Activity Summary:</strong></td>
            <td width="40%" align="left" valign="top">&nbsp;</td>
            <td width="37%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top"><?php echo $rows['total']; ?> Bids in total</td>
            <td align="left" valign="top"><?php echo $rows1['baccept']; ?>  Bids Successful</td>
            <td align="left" valign="top"><?php echo $conduct_row['conduct']; ?>  Interviews conducted</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top"><?php echo $rows123['counter']; ?>  	Bids <a href="#">Countered</a> </td>
            <td align="left" valign="top"> <?php echo $made_row['made']; ?> 	Placements made</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top"><?php echo $rows12['breject']; ?> 	Bids Rejected</td>
            <td align="left" valign="top"><?php echo $active_row['active']; ?>	Placements active</td>
          </tr>
        </table></td>
              </tr><br/><br/>

       
	  <div class="heading1"><h1>My Bids List<div style="float:right"><div class="confBtnSet"></div></div></h1></div>
      <?php
		  
		  //===============================================
  	 
		 if($uuid>0)
			  {
			   	$user_id=$s->value('UESR_ID');
				  $history_split = new splitPageResults("SELECT * FROM `bid` WHERE `jobid` =".$s->value('USER_ID') ,MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_ORDER_HISTORY);//Paging
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
				  $history_split = new splitPageResults("SELECT * FROM `bid` WHERE `bidderid` =".$s->value('R_USER_ID') ,MAX_DISPLAY_SEARCH_RESULTS, MAX_DISPLAY_ORDER_HISTORY);//Paging
			  }
		 
		
			 
	 if ( ($history_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
		?>
		
			 
		
			<div class="pagination">
              <span><?php echo $history_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></span>
			  <span class="fright"><?php echo TEXT_RESULT_PAGE . ' ' . $history_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></span>  			</div>
		
		<?php   
	  } ?>
      
      <div class="tableScoll">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="sortable">
           <tr>
            <th class="nosort"  width="6%"><h4>Bid On</h4></th>
            <th  width="12%"><h4>Profile Title</h4></th>
            <th width="10%"><h4>Bid Rate<br/>Min/Max</h4></th>
            <th width="10%"><h4>Bid UOM</h4></th>
            <th width="14%"><h4>Existing Job ?</h4></th>
             <th width="10%"><h4>Bid Status</h4></th>
            <th width="10%"><h4>From Date </h4></th>
            <th width="10%"><h4>To Date</h4></th>
            <th width="17%"><h4>Reason for Bid</h4></th>
            <th width="17%"><h4>Negotiable?</h4></th>
          </tr>
          
<?php 
$bid_query="select * from bid where bidderid='".$user_id."'";
$bid_result=mysql_query($bid_query);
while($bid=mysql_fetch_array($bid_result))
{ 
$jobid=$bid['jobid'];
$ideals=$bid['total_estimated_cost'];
$time_uoms=$bid['time_uom'];
$jobid=$bid['jobid'];




$sql="select * from rates where user_id='".$jobid."'";
$sql_query=mysql_query($sql);
while($row=mysql_fetch_array($sql_query))
{
   $gt_amounts=$row["gt_amount"]; 
  $gt_time_periods=$row["gt_time_period"]; 
  //$available_froms=$row["available_from"]; 
   //$unavailable_end_dates=$row["unavailable_end_date"]; 
    
}
$query="select * from skills_profiles where user_id='".$jobid."'";
 $result=$db->query_silent($query);
 $profile=$db->fetch_array($result);
  ?>	        <tr>
            <td><?php echo $bid['jobid'];?></td>
            <td><?php echo $profile['skills_profile'];?></td>
            <td><?php echo $bid['total_estimated_cost'];?> / <?php echo $bid['Max_cel_rate'];?></td>
            <td><?php echo $bid['time_uom'];?></td>
            <td><?php $advertised_jobss= $bid["advertised_jobs"];
  
     if($advertised_jobss=='1')
     {
      $advertised_jobss="Yes";
     
     }
	  if($advertised_jobss=='0')
     {
      $advertised_jobss="No";
     
     }
	 
    echo $advertised_jobss ; ?></td>
     <td><?php echo $bid['status'];?></td>
            <td><?php echo $bid['proposal_status'];?> </td>
            <td><?php echo $bid['finish_date'];?></td>
            <td><?php echo $bid['bid_details'];?></td>
              <td><select name="negotiable">
            <option value="">Yes</option>
            <option value="">No</option>
            </select></td>
            
           <!-- <td style="text-align:center"><table><tr><td>Yes</td><td><input type="radio" /></td><td>No</td><td><input type="radio" /></td></tr></table></td>-->
          </tr>
         
         
  <?php }?>        
        </table>
       </div>
       
       <?php 
	   } else {
	   ?>
       
       
     <?php $rates="select * from rates where user_id='".$user_id."'";
$rates_query=mysql_query($rates);
$rate=mysql_fetch_array($rates_query);
  $lt_amount=$rate["lt_amount"]; 
   $gt_amounts=$rate["gt_amount"]; 
   $available_froms=$rate["available_from"]; 
    $lt_currencys=$rate["lt_currency"]; 
	
	
 $C_sql='SELECT `id`, `name` FROM `currency` WHERE id='.$rate['lt_currency'].' ORDER BY `currency`.`name` ASC';
	$C_run=mysql_query($C_sql);
$C_data=mysql_fetch_array($C_run);
	 $C_data['name'];
	 
 $sql="select count(bidderid)  as total from bid where jobid='".$user_id."'";
	 $records=mysql_query($sql);
	   $rows=mysql_fetch_array($records);
                 
 $sql1="select count(bidderid)  as baccept from bid where jobid='".$user_id."' and status='accept'";
	 $records1=mysql_query($sql1);
	   $rows1=mysql_fetch_array($records1);
	   
	     $complete="select count(user_id)  as complete from interview_success_details where user_id='".$user_id."' and interview_complete='1'";
	 $complete1=mysql_query($complete);
	   $complete1ss=mysql_fetch_array($complete1);
	   
	    $jobwon="select count(user_id)  as job from interview_success_details where user_id='".$user_id."' and status='1'";
	 $jobwon1=mysql_query($jobwon);
	   $jobwon12=mysql_fetch_array($jobwon1);
	   
	   
	   
				 $fetch="select * from interview_success_details where status='1' and user_id='".$user_id."'";
			     $fetch12=mysql_query($fetch);
				   $ratess2=0;
				   while($rowws=mysql_fetch_array($fetch12)) { 
				    $useriddd=$rowws['recruiter_id'];
				$query="select * from bid where bidderid='".$useriddd."'";
			     $query_result=mysql_query($query);
				   $pos=mysql_fetch_array($query_result);
				   
					   $ratess=$pos['total_estimated_cost'];
				 
				    $ratess2=$ratess+$ratess2;
					}
				  $avgrate=$ratess2 / 2; 
				  
		         $feedback="SELECT * FROM all_feedbackS WHERE user_id='".$user_id."'";
	            $feedback_record=mysql_query($feedback);
	           $num1=mysql_num_rows($feedback_record);
			   
			    $feedback_avg="SELECT * FROM all_feedbackS WHERE user_id='".$user_id."'";
	            $feedbackavg_record=mysql_query($feedback_avg);
				$feedback_ratings2=0;
	           while($avg_recoeds=mysql_fetch_array($feedbackavg_record)) { 
			   
			   $feedback_ratings=$avg_recoeds['feedback_rating'];
			  $feedback_ratings2=$feedback_ratings + $feedback_ratings2;
			   
			   
			   }
			      $feedbackcal=$feedback_ratings2 / 2 * 10;
				?>
	              
			
	
	
   

       
       
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="9%" align="left" valign="top">Candidate ID:</td>
            <td width="15%" align="left" valign="top"><?php echo $user_id; ?></td>
             <td width="12%" align="left" valign="top">My Ideal Rate:</td>
            <td width="20%" align="left" valign="top">$<?php echo $lt_amount ; ?></td>
           </tr>
           <tr>
            <td width="9%" align="left" valign="top">Preferred Currency:</td>
            <td width="15%" align="left" valign="top"><?php echo $C_data['name']; ?></td>
             <td width="12%" align="left" valign="top">My Maximum Rate:</td>
            <td width="20%" align="left" valign="top">$<?php echo $gt_amounts; ?></td>
           </tr>
         
        </table>
    <td colspan="2" align="left" valign="top" class="font-13"><br/><br/><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%" align="left" valign="top"><strong>My Activity Summary:</strong></td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="13%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="24%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="3%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">Total Bids:   </td>
            <td align="left" valign="top"><?php echo $rows['total']; ?></td>
            <td align="left" valign="top">Bids Accepted:</td>
            <td align="left" valign="top"><?php echo $rows1['baccept']; ?></td>
            <td align="left" valign="top">Interviews Completed:     </td>
            <td align="left" valign="top"><?php echo $complete1ss['complete']; ?></td>
            <td align="left" valign="top">Jobs Won:  </td>
            <td align="left" valign="top"><?php echo $jobwon12['job']; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Feedbacks Given: </td>
            <td align="left" valign="top"><?php echo $num1; ?></td>
            <td align="left" valign="top">Avg Feedback Rating:</td>
            <td align="left" valign="top"><?php echo $feedbackcal; ?>%</td>
            <td align="left" valign="top">Avg Daily Rate over past Jobs:</td>
            <td align="left" valign="top">$<?php echo $avgrate; ?></td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">Next Available: </td>
            <td align="left" valign="top"><?php echo $available_froms; ?></td>
            <td align="left" valign="top">&nbsp; </td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td><br/><br/>
        <div class="heading1"><h1>List of Bid<div style="float:right"><div class="confBtnSet"></div></div></h1></div> 
         <div class="tableScollCon">
         <table width="100%" border="0" cellpadding="0" cellspacing="0" class="sortable">
       <tr>
       <th class="nosort" width="5%"><h4>From</h4></th>
				<th width="10%"><h4>Bidder Name</h4></th>
				<th width="10%"><h4>Bid Rate<br/>Min/Max</h4></th>
				<th width="10%"><h4>Bid UOM</h4></th>
				<th width="10%"><h4>Existing Job ?</h4></th>
                <th width="10%"><h4>Start Date</h4></th>
                 <th width="10%"><h4>End Date</h4></th>
				<th><h4>Bid Summary</h4></th>
                <th width="17%"><h4>Action</h4></th>
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

$sqls="select * from post_job where user_id='".$bidderid."'";
$sql_result=mysql_query($sqls);
$posted=mysql_fetch_array($sql_result);
   $title=$posted["title"]; 
  $job_start_dates=$posted["job_start_date"]; 
   $job_end_dates=$posted["job_end_date"]; 
   $hourlys=$posted["hourly"]; 
    $monthlys=$posted["monthly"]; 
  
  

$profile_query="select * from profiles where user_id='".$bidderid."'";
$profile_result=$db->query_silent($profile_query);
$profile=$db->fetch_array($profile_result);
?>		    
          <tr>
            <td><?php echo $bid['bidderid'];?></td>
            <td><?php echo $profile['username'];?> </td>
            <td><?php echo $bid['total_estimated_cost'];?> / <?php echo $bid['Max_cel_rate'];?></td>
            <td><?php echo $bid['time_uom'];?></td>
            <td><?php $advertised_jobss= $bid["advertised_jobs"];
  
     if($advertised_jobss=='1')
     {
      $advertised_jobss="Yes";
     
     }
	  if($advertised_jobss=='0')
     {
      $advertised_jobss="No";
     
     }
	 
    echo $advertised_jobss ; ?></td>
     
            <td><?php echo $job_start_dates;?></td>
            <td><?php echo $job_end_dates;?></td>
            <td><?php echo $bid['bid_details'];?></td>
            <td>
            
            <table>
            	<tr>
                	<td>Accept
                    
                    <?php 
					if($bid['status']=="accept")
					{ ?>
                    <input type="radio" name="accept<?php echo $i;?>" value="accept" checked="checked" />
					<?php }else{?>  
                     <input type="radio" name="accept<?php echo $i;?>" value="accept" />
                    <?php } ?>
                    </td>
                    <td>Counter
                    
                    <?php 
					if($bid['status']=="counter")
					{ ?>
                    <input type="radio" name="counter<?php echo $i;?>" value="counter" checked="checked" />
					<?php }else{?>  
                     <input type="radio" name="counter<?php echo $i;?>" value="counter" />
                    <?php } ?>
                    </td>
                    <td>Reject
                    
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
           </table><br/></div>
       <?php }?>
       
       
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
