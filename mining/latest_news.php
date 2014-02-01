<div class="latest">
          <div class="latest_top">
            <h2>Latest News</h2>
            <a href="#" class="latest_v"><!--View All--></a></div>
         
            <?php 
		 $sel111="select * from bid where vertical_id='".VERTICAL_ID."' order by id desc limit 0, 1"; 
		  $bidresult=mysql_query($sel111);
		  $lastbid=mysql_fetch_array($bidresult);
		
		 ?> <div class="news_di"><img src="images/image_can.gif"  alt="" width="60" height="45" align="left" />
            <p><?php echo $lastbid['posted_job']; ?> skill is now treading at $<?php echo $lastbid['total_estimated_cost']; ?> per <?php echo $lastbid['time_uom']; ?> based on latest bids... <span> Bid News | <?php echo $bid_time=date('M d, Y',strtotime($lastbid['bid_date'])); ?></span></p>
            <div class="clear"></div>
          </div>
         
           <?php $fetch="select * from interview_success_details where vertical_id='".VERTICAL_ID."' and status='1' order by id desc limit 0, 1";
			     $fetch12=mysql_query($fetch);
				   $rowws=mysql_fetch_array($fetch12);
				    $useriddd=$rowws['user_id']; 
					  $useriddd=$rowws['user_id']; 
					  
				 $query="select * from bid where jobid='".$useriddd."' and vertical_id='".VERTICAL_ID."'";
			     $query_result=mysql_query($query);
				   $pos=mysql_fetch_array($query_result);
				   $ratess=$pos['total_estimated_cost'];
				    $timess=$pos['time_uom'];
				    $idsss=$pos['jobid'];
				   
				    $query12="select * from profiles where user_id='".$idsss."' and vertical_id='".VERTICAL_ID."'";
			     $query_result12=mysql_query($query12);
				   $pos12=mysql_fetch_array($query_result12);
				   $namess=$pos12['username'];
				    $photos=$pos12['username'];
				   ?> <div class="news_di"><img src="profile_img/<?php echo $pos12['photo']; ?>"  alt="" width="60" height="45" align="left" />
            <p>Candidate <?php echo $namess ; ?> has just landed a placement worth $<?php echo $ratess; ?> per <?php echo $timess; ?>! <span> Placement News | <?php echo $placement_time=date('M d, Y',strtotime($rowws['date'])); ?></span></p>
            <div class="clear"></div>
          </div>
        
            <?php  $rec="select * from user_login_details where type='R' and vertical_id ='".VERTICAL_ID."' order by id desc limit 0, 1";
			     $rec_result=mysql_query($rec);
				   $ecuiter=mysql_fetch_array($rec_result);
				   $recid=$ecuiter['id'];
				   
		$recpro="select * from profiles where user_id='".$recid."' and vertical_id ='".VERTICAL_ID."' order by user_id desc limit 0, 1";
			     $recpro_result12=mysql_query($recpro);
				   $recuiterdetails=mysql_fetch_array($recpro_result12);
				   $recnamess=$recuiterdetails['username'];
				    $reciddd=$recuiterdetails['user_id'];
				   
				    $sqlss="select count(bidderid)  as total from bid where bidderid='".$reciddd."' and vertical_id ='".VERTICAL_ID."'";
			     $recordss=mysql_query($sqlss);
				   $rowssss=mysql_fetch_array($recordss); 
				   
				     $bidhight="select * from bid where bidderid='".$reciddd."' and vertical_id ='".VERTICAL_ID."'";
			     $hrecordss=mysql_query($bidhight);
				   $hrepus=mysql_fetch_array($hrecordss); 
				?>
                  <div class="news_di"><img src="profile_img/<?php echo $recuiterdetails['photo']; ?>"  alt="" width="60" height="45" align="left" />
            <p>Recruiter <?php echo $recnamess; ?> has just placed <?php echo $rowssss['total']; ?> bids! The highest was $<?php echo $hrepus['Max_cel_rate']; ?>/<?php echo $hrepus['max_time_uom']; ?>!<span> Recruiter News | <?php echo $recreg_time=date('M d, Y',strtotime($ecuiter['signup_date'])); ?></span></p>
            <div class="clear"></div>
          </div>
         
            <?php  $candi="select * from user_login_details where type='C' and vertical_id ='".VERTICAL_ID."' order by id desc limit 0, 1";
			     $candi_result=mysql_query($candi);
				   $candidatess=mysql_fetch_array($candi_result);
				   $candiid=$candidatess['id'];
				   
		$canpro="select * from profiles where user_id='".$candiid."' and vertical_id ='".VERTICAL_ID."' order by user_id desc limit 0, 1";
			     $canpro_result12=mysql_query($canpro);
				   $candetails=mysql_fetch_array($canpro_result12);
				   $cannamess=$candetails['username'];
				    $caniddd=$candetails['user_id'];
			
			$rates1="select * from rates where user_id='".$caniddd."' and vertical_id ='".VERTICAL_ID."'";
			$rates_query1=mysql_query($rates1);
			$rate1=mysql_fetch_array($rates_query1);
			$lt_amount1=$rate1["lt_amount"]; 
			$ltdays=$rate1["lt_time_period"]; ?>
             <div class="news_di bor_nonecl"><img src="profile_img/<?php echo $candetails['photo']; ?>"  alt="" width="60" height="45" align="left" />
            <p>New Candidate <?php echo $cannamess; ?> has just register! The ideal rate was $<?php echo $rate1['lt_amount']; ?>/<?php echo $rate1['lt_time_period']; ?>!. <span>   Candidate News | <?php echo $canreg_time=date('M d, Y',strtotime($candidatess['signup_date'])); ?></span></p>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>