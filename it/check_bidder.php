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


$jobid=$_REQUEST['jobid'];


$selprofile=mysql_query("select * from profiles where user_id='$user_id'");
$rowprofile=mysql_fetch_array($selprofile);

$countryid=$rowprofile['country'];

$selectcountry=mysql_query("select * from countries where countries_id='$countryid'");
$rowcountry=mysql_fetch_array($selectcountry);
$countryname=$rowcountry['countries_name'];

$selecjob=mysql_query("select * from post_job where id='$jobid'");
$rowselecjob=mysql_fetch_array($selecjob);







?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="p-menu">
      <div class="profileImg"><img src="profile_img/<?php echo $rowprofile['photo']; ?>" alt="" style="height:80px; width:80px;"/></div>
      
      <div class="like-section">
  <div class="watchlist-btn"><a href="#">Add to Watch List</a></div>
  <div class="share-sec"><a href="#"><img src="images/mail-but.gif" alt="" /></a><a href="#"><img src="images/tweet-but.gif" alt="" /></a> <a href="#"><img src="images/like-but.gif" alt="" /></a></div>
  
  </div>
  <div class="spacer"></div>
   <div class="like-section">
<div class="midgrey">Last Sign-in: Aug 17, 2011 </div>
 
  </div>  
      
      
      </div>
      <div class="p-content">
        <div class="p-hd">
          <div class="p-layout-x3">
            <h1><?php echo $rowprofile['conpany_name']; ?>.</h1>
            <span class="p-summary-tagline"></span>
            <div class="p-summary-location">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr style="height:30px;"><td>Title</td><td><? echo $rowselecjob['title'];  ?></td></tr>
			<tr style="height:30px;"><td>Description 	</td><td><? echo $rowselecjob['description'];  ?></td></tr>
			<tr style="height:30px;"><td>Positions</td><td><? echo $rowselecjob['positions'];  ?></td></tr>
			<tr style="height:30px;"><td>Budget</td><td><? echo $rowselecjob['budget'];  ?></td></tr>
			<tr style="height:30px;"><td>Profession</td><td><? $ppid=$rowselecjob['profession_id']; $selpro=mysql_query("select name from profession where id='$ppid'");$nmpro=mysql_fetch_array($selpro); echo $nmpro['name'];  ?></td></tr>
			<tr style="height:30px;"><td>Skillset</td><td><? echo $rowselecjob['skillset'];  ?></td></tr>
			<tr style="height:30px;"><td>Qualification</td><td><? echo $rowselecjob['qualification'];  ?></td></tr>
			<tr style="height:30px;"><td>Budget Max</td><td><? echo $rowselecjob['budgetmax'];  ?></td></tr>
			<tr style="height:30px;"><td>Cur Type</td><td><? echo $rowselecjob['cur_type'];  ?></td></tr>
			<tr style="height:30px;"><td>Job Start Date</td><td><? echo $rowselecjob['job_start_date'];  ?></td></tr>
			<tr style="height:30px;"><td>Job_End_Date</td><td><? echo $rowselecjob['job_end_date'];  ?></td></tr>
			<tr style="height:30px;"><td>Keywords</td><td><? echo $rowselecjob['keywords'];  ?></td></tr>
			<tr style="height:30px;"><td>Hourly</td><td><? echo $rowselecjob['hourly'];  ?></td></tr>
			<tr style="height:30px;"><td>Monthly</td><td><? echo $rowselecjob['monthly'];  ?></td></tr>
			<tr style="height:30px;"><td>Posted Date</td><td><? echo $rowselecjob['date'];  ?></td></tr>
			
			</table>
			
			</div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="job-sec">
          <h2 class="p-header">Job Bid By </h2>
          <div class="clear"></div>
          
          
          <? /*****************************************************************************************************************************/ ?>
          <!-- <div class="experience">
            <div class="jobname">Private Job</div>
            <div class="clear"></div>
            <div class="left-rated">
              <div class="left-rat1"><span  class="feedback1of2"><img src="images/spr-watchlist-big.png" alt="" /> <img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /></span><span>Not Yet Rated</span></div>
              <div class="clear"></div>
            </div>
            <div class="feedback_details">
              <div class="user_name">Client:&nbsp;&nbsp; <a href="#">Storymind (See 6 other reviews) </a></div>
              <div class="jobdetails">
                <div class="left"> <span title="Job Accepted Date">Aug 15, 2011</span> <span class="delimiter">|</span> <span class="midgrey" title="Contractor has opted to keep earnings private.">Private</span> <span class="delimiter">|</span> Software Application <span class="delimiter">|</span> Working <span class="delimiter">|</span> </div>
                <div class="right">
                  <div class="clickable">Job Details </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="clear"></div>
            <div class="feedback_info"></div>
          </div>-->
          <? /*******************************************************************************************************************************************************/?>
          <?
			$selbid=mysql_query("select  * from bid where jobid='$jobid'");
			while($rowbid=mysql_fetch_array($selbid))
			{
			
				$bid_bidderid=$rowbid['bidderid'];
				$category_type=$rowbid['category_type'];
					
					$selprofile=mysql_query("select * from profiles where user_id='$bid_bidderid'");
			$rowprofile=mysql_fetch_array($selprofile);
			
			$countryid=$rowprofile['country'];
			
				
				$selcountry=mysql_query("select * from countries where countries_id='$countryid'");
			$rowcountry=mysql_fetch_array($selcountry);
				
				$selpostjob=mysql_query("select * from post_job where id='$jid'");
			$rowpostjob=mysql_fetch_array($selpostjob);
				
				
				$selpro=mysql_query("select * from profession where id='$category_type'");
			$rowpro=mysql_fetch_array($selpro);
				
					
			?>
<div class="experience">
            <div class="jobname"></div>
            <div class="clear"></div>
            <div class="left-rated">
              <div class="left-rat1"><span  class="feedback1of2"></span><strong><img src="profile_img/<? echo $rowprofile['photo'];  ?>" alt="" height="50px" width="50px;" /></strong></div>
              <div class="clear"></div>
            </div>
            <div class="feedback_details">
              <div class="user_name">Client:&nbsp;&nbsp; <a href="#" class="bidCard-title"><? echo $rowprofile['conpany_name'] ; ?></a></div>
              <div class="jobdetails">
                <div class="left"> <span title="Job Accepted Date"><? $mkd=$rowbid['bid_date'] ;
				$mkd1=strtotime($mkd);
$mkd2=date('M j Y', $mkd1); echo $mkd2; ?></span> <span class="delimiter">|</span> <span class="midgrey" title="Contractor has opted to keep earnings private.">Private</span> <span class="delimiter">|</span> <? echo $rowpro['name']; ?> <span class="delimiter"></span> <span class="delimiter">|</span> </div>
                <div class="right">
                  <div class="clickable"><a href="approved.php?id=<? echo $rowbid['id']; ?>&jobid=<? echo $rowbid['jobid']; ?>">Approved</a> </div>
                </div>
                <div class="clear"></div>
              </div>
              <div class="spacer"></div>
              <p> <strong>Feedback Comments:</strong></p>
              <p> “<? echo $rowbid['bid_details']; ?>”<br />
                <a href="#">—<? echo $rowprofile['first_name'].' '.$rowprofile['last_name'] ; ?></a></p>
            </div>
            <div class="clear"></div>
            <div class="feedback_info"></div>
          </div>
		  
		 <? } ?> 
		  
		  
		  
		  
		  <? /*****************************************************************************************************************************/ ?>
          
          
          
         <!-- <div class="experience">
            <div class="jobname">Private Job</div>
            <div class="clear"></div>
            <div class="left-rated">
              <div class="left-rat1"><span  class="feedback1of2"><img src="images/spr-watchlist-big.png" alt="" /> <img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /><img src="images/spr-watchlist-big.png" alt="" /></span><span>Not Yet Rated</span></div>
              <div class="clear"></div>
            </div>
            <div class="feedback_details">
              <div class="user_name">Client:&nbsp;&nbsp; <a href="#">Storymind (See 6 other reviews) </a></div>
              <div class="jobdetails">
                <div class="left"> <span title="Job Accepted Date">Aug 15, 2011</span> <span class="delimiter">|</span> <span class="midgrey" title="Contractor has opted to keep earnings private.">Private</span> <span class="delimiter">|</span> Software Application <span class="delimiter">|</span> Working <span class="delimiter">|</span> </div>
                <div class="right">
                  <div class="clickable">Job Details </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="clear"></div>
            </div>-->
        </div>
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
<div id="footer">
  <div id="footer-box">
    <div class="footer-link">
      <ul>
        <li><a href="#">Home</a></li>
        <li>| </li>
        <li><a href="#"> About Us</a> </li>
        <li> | </li>
        <li> <a href="#">Terms of Use</a></li>
        <li> |</li>
        <li> <a href="#">FAQ</a> </li>
        <li>|</li>
        <li> <a href="#"> Privacy Policy</a></li>
        <li> | </li>
        <li> <a href="#">Contact </a></li>
      </ul>
      <div class="copyright">© 2011 Skillsapien. All Rights Reserved</div>
    </div>
    <div class="footer-logo"><a href="#"><img src="images/logo-footer.jpg" alt="" border="0" /></a></div>
  </div>
</div>
</body>
</html>
