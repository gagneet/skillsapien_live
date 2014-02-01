<?php
include_once('init.php');


$jid=$_REQUEST['jid'];

$seljob=mysql_query("select * from post_job where id='$jid'");
$rowseljob=mysql_fetch_array($seljob);

$proid=$rowseljob['profession_id'] ; 
$selproname=mysql_query("select * from profession where id='$proid'");
$rowselproname=mysql_fetch_array($selproname);

$proname=$rowselproname['name'];






$disid=$rowseljob['disc_id'] ; 



$seldisname=mysql_query("select disc_name from disciplinelist  where id='$disid'");
$rowseldisname=mysql_fetch_array($seldisname);
$discname=$rowseldisname['disc_name'];





function dateDiff($start, $end) {
  $start_ts = strtotime($start);
  $end_ts = strtotime($end);
  $diff = $end_ts - $start_ts;
  return round($diff / 86400);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
  <?php echo $get_template->process('global_header1.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="jobTitle-c">
        <div class="job-title"><strong><? echo  $rowseljob['title'] ; ?> </strong> <span><a href="#">Sign in to Add to Watch List</a></span></div>
		
        <div class="job-cat" ><a href="#"><? echo  $proname ; ?></a> > <a href="#"><? echo  $discname ; ?></a></div>
      </div>
      <div class="eol-layout-s3 ">
        <div class="jobdesc-bd">
          <div class="job-details">
            <ul>
              <li><span><img src="images/ux-experts-icons-1.gif" alt="" /></span>Posted: <?
			$gtdate=$rowseljob['date'] ;
			$curdate=date('Y-m-d');
			
			  $dd=dateDiff($gtdate, $curdate).'days';
$hh=$dd*24;
echo $hh.' '."hours";
			  
			  
			   ?> ago</li>
              <li><span><img src="images/ux-experts-icons-2.gif" alt="" /></span>Time Left:<?
			$gtenddate=$rowseljob['job_end_date'] ;
			$curdate=date('Y-m-d');
			
			  $dd=dateDiff($curdate, $gtenddate).'days';
$hh=$dd*24;
echo $hh.' '."hours";
			  
			  
			   ?></li>
              <li><span><img src="images/ux-experts-icons-3.gif" alt="" /></span>Location: <? echo  $rowseljob['hourly'] ; ?></li>
              <li><span><img src="images/ux-experts-icons-4.gif" alt="" /></span>Start: Immediately</li>
            </ul>
          </div>
          <div class="job-details">
            <ul>
              <li><span><img src="images/ux-experts-icons-5.gif" alt="" /></span>Hourly Rate: <? echo  $rowseljob['hourly'] ; ?></li>
              <li><span><img src="images/ux-experts-icons-6.gif" alt="" /></span>Duration Not Sure</li>
              <li><span><img src="images/ux-experts-icons-7.gif" alt="" /></span>Guaranteed with Work View™</li>
              <li><span><img src="images/ux-experts-icons-8.gif" alt="" /></span>W9 Required (U.S. contractors only)</li>
            </ul>
          </div>
          <div class="clear"></div>
          <div class="jobDetailsDivider"></div>
          <div class="clear"></div>
          <div class="buyerInfo-content ">
            <div class="left"> <? $uuid=$rowseljob['user_id'] ;
			$seluimg=mysql_query("select photo from profiles where user_id='$uuid'");
			$rowimg=mysql_fetch_array($seluimg);
			
			 ?> <img src="profile_img/<? echo $rowimg['photo'] ; ?>" alt="" height="50px" width="50px;" /> </div>
            <div class="buyerInfoDesc"><a href="jobposter.php?id=<? echo $uuid; ?>">Sign in </a>to view client's details</div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <div class="spacer"></div>
          <p class="jobDescText"> <? echo  $rowseljob['description'] ; ?>. <br />
            <br />
            <strong>Skills Required: </strong><br />
            <br />
          <? echo  $rowseljob['skillset'] ; ?>. <br />
            <br />
            <strong>What we have versus What we need:</strong><br />
            <br />
            Project background/Overview
            Competitor’s site for reference
            Competitor’s analysis
            Basic Flowcharts outlined. <br />
            <br />
            As mentioned above we expect a detailed high fidelity prototype.
            
            We prefer to work with an individual. The selected provider must be available for at least... </p>
			
			
			<?
			$selbid=mysql_query("select  * from bid where jobid='$jid'");
			while($rowbid=mysql_fetch_array($selbid))
			{
			
				$bid_bidderid=$rowbid['bidderid'];
					
					$selprofile=mysql_query("select * from profiles where user_id='$bid_bidderid'");
			$rowprofile=mysql_fetch_array($selprofile);
			$countryid=$rowprofile['country'];
			
				
				$selcountry=mysql_query("select * from countries where countries_id='$countryid'");
			$rowcountry=mysql_fetch_array($selcountry);
				
				$selpostjob=mysql_query("select * from post_job where id='$jid'");
			$rowpostjob=mysql_fetch_array($selpostjob);
			
			?>
			
			<div class="bidCard-awarded">
			<div class="bidCard-bd ">
			<div class="bidCard-icon "><a href="jobposter.php?id=<? echo $rowprofile['user_id'] ; ?>"><img src="profile_img/<? echo $rowprofile['photo'] ; ?>" alt="" height="50px" width="50px;" /></a></div>
			<div class="bidCard-summary ">
<div class="left"><a href="apply-job.php?jid=<? echo $_REQUEST['jid'] ; ?>" class="bidCard-title"><? echo $rowprofile['conpany_name'] ; ?></a></div>
<div class="bidCard-title" style="float:right"><? echo $rowbid['approved']; ?></div>
<div class="clear"></div>
<div class="bidCard-profIdentity">
				&nbsp;<? echo $rowcountry['countries_name'] ; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<!--<img border="0" title="This contractor is a Small Business Member" src="images/business-icon-xxxsmall-paid.gif" class="statIcon">-->
				</div>
<div class="bidCard-profDesc"><? echo $rowbid['bid_details']; ?>...</div>
<div class="bidCard-skills">Skills: <a href="#"><? echo $rowpostjob['skillset'] ; ?></a>...</div>
</div><div class="clear"></div>
	</div>			
			</div>
			
			<?  } ?>
			
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="eol-layout-s2">
        <div class="submit-pro">
          <div class="bidHeadline">Are you ready to post job like this one</div>
          Post a similar job and receive proposals right away
          <div class="clear"></div>
          <div  class="sum-but"><a href="post-job-requirements.php"><img src="images/submit_buttons.gif" alt="" /></a></div>
          <div class="clear"></div>
        </div>
        <div class="submit-pro">
          <div class="bidHeadline">Do you want to submit a proposal for this job?</div>
          <a href="apply-job.php?jid=<? echo $_REQUEST['jid'] ; ?>"><strong>Submit Your Bid</strong></a><strong> </strong>
          <div class="clear"></div>
        </div>
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
<!--<div id="footer">
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
</div>-->
</body>
</html>
