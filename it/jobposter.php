<?php
include_once('init.php');
Is_valid_uesr();
$uuid=$_REQUEST['id'];
$selprofile=mysql_query("select * from profiles where user_id='$uuid' and vertical_id='".VERTICAL_ID."'");
$rowprofile=mysql_fetch_array($selprofile);

$countryid=$rowprofile['country'];

$selectcountry=mysql_query("select * from countries where countries_id='$countryid'");
$rowcountry=mysql_fetch_array($selectcountry);
$countryname=$rowcountry['countries_name'];

$selecjob=mysql_query("select count(*) as total from post_job where user_id='$uuid' and vertical_id='".VERTICAL_ID."'");
$rowselecjob=mysql_fetch_array($selecjob);
$totaljob=$rowselecjob['total'];






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
      
      <div class="nav-left">
      <ul>
	<li><a href="#" class="nav-left-item"><span class="span-item"> Overview </span> </a></li>
	<li class="nav-left-selected"><a href="#" class="nav-left-item"><span class="span-item">Job History</span></a></li>
	<li><a href="#" class="nav-left-item"><span class="span-item">Portfolio</span></a></li>
	<li><a href="#" class="nav-left-item"><span class="span-item">Team</span></a></li>
	<li><a href="#" class="nav-left-item"><span class="span-item">About the Company</span></a></li>
</ul>
      
  </div> 
  
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
            <span class="p-summary-tagline">Experienced Mac/iPhone programmer</span>
            <div class="p-summary-location"><img src="images/it.gif" alt="" />&nbsp;&nbsp; <?php echo $countryname; ?>   |  <?php echo $rowprofile['primary_address']; ?>  | <?  echo date("H:i:s") ; ?> <span class="midgrey">Local Time</span></div>
          </div>
          <div class="contact-job-but"><a href="#"><img src="images/contact-job-but.gif" alt="" /></a></div>
          <div class="clear"></div>
        </div>
        <div class="job-sec">
          <h2 class="p-header">Job History (<? echo $totaljob;   ?> jobs)</h2>
          <div class="all-cat"><a href="#"><strong>All Categories</strong></a></div>
          <div class="all-cat-r"><a href="#"><strong> Last 12 months</strong></a></div>
          <div class="clear"></div>
          <div class="snapshot-bar-12mo-c">
            <div class="snapshot-bar-item-separator-left"><img src="images/elance_level_not_available.png" alt="" /></div>
            <div class="snapshot-bar-item-separator">
              <div class="snapshot-bar-label"> <strong>36</strong>&nbsp;&nbsp;Jobs</div>
              <div class="snapshot-bar-label"><strong>82</strong> Milestones</div>
              <div class="snapshot-bar-label"><strong>0</strong> Hours</div>
            </div>
            <div class="snapshot-bar-item-separator">
              <div class="snapshot-bar-label"> <strong>4.8 </strong>&nbsp;&nbsp;Jobs</div>
              <div class="snapshot-bar-label"><strong>25 </strong> Reviews</div>
              <div class="snapshot-bar-label"><strong>100% </strong> Recommended</div>
            </div>
            <div class="snapshot-bar-item-separator">
              <div class="snapshot-bar-label"> <strong>36</strong>&nbsp;&nbsp;Jobs</div>
              <div class="snapshot-bar-label"><strong>82</strong> Milestones</div>
              <div class="snapshot-bar-label"><strong>0</strong> Hours</div>
            </div>
            <div class="snapshot-bar-item-separator">
              <div class="snapshot-bar-label"> <strong>Private</strong>&nbsp;&nbsp;Earnings</div>
              <div class="snapshot-bar-label"><strong>Private</strong> Per Client</div>
            </div>
            <div class="clear"></div>
          </div>
          <div >
            <div class="all-cat"><a href="#">All Services</a></div>
            <div class="all-cat-r"><a href="#"> All job</a></div>
            <div class="right-sec">
              <div class="sort"> Sort By:</div>
              <div class="all-cat-r"><a href="#">Date</a></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="noresults">
            <div class="left">1 - 25 of 36 results found</div>
            <div class="right">
              <div class="search-sec">
                <input type="text" value="" class="search-input" onblur=""

  />
                <span class="search-search"><a href="#"><img src="images/serach.gif" alt="" /></a></span> </div>
            </div>
          </div>
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
			$selbid=mysql_query("select  * from bid where job_poster_profile_id='$uuid' and vertical_id='".VERTICAL_ID."'");
			while($rowbid=mysql_fetch_array($selbid))
			{
			
				$bid_bidderid=$rowbid['bidderid'];
				$category_type=$rowbid['category_type'];
					
					$selprofile=mysql_query("select * from profiles where user_id='$bid_bidderid' and vertical_id='".VERTICAL_ID."'");
			$rowprofile=mysql_fetch_array($selprofile);
			
			$countryid=$rowprofile['country'];
			
				
				$selcountry=mysql_query("select * from countries where countries_id='$countryid'");
			$rowcountry=mysql_fetch_array($selcountry);
				
				$selpostjob=mysql_query("select * from post_job where id='$jid' and vertical_id='".VERTICAL_ID."'");
			$rowpostjob=mysql_fetch_array($selpostjob);
				
				
				$selpro=mysql_query("select * from profession where id='$category_type' and vertical_id='".VERTICAL_ID."'");
			$rowpro=mysql_fetch_array($selpro);
				
					
			?>
		  
		  
          <div class="experience">
            <div class="jobname">Private Job</div>
            <div class="clear"></div>
            <div class="left-rated">
              <div class="left-rat1"><span  class="feedback1of2"><img src="images/arrow-ye.gif" alt="" /> <img src="images/arrow-ye.gif" alt="" /> <img src="images/arrow-ye.gif" alt="" /> <img src="images/arrow-ye.gif" alt="" /> <img src="images/arrow-ye.gif" alt="" /> </span><strong>5.0</strong></div>
              <div class="left-rat1"><span  class="feedback1of1"><img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> </span><span>Quality</span></div>
              <div class="left-rat1"><span  class="feedback1of1"><img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> </span><span>Expertise</span></div>
              <div class="left-rat1"><span  class="feedback1of1"><img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> </span><span>Cost</span></div>
              <div class="left-rat1"><span  class="feedback1of1"><img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> </span><span>Schedule</span></div>
              <div class="left-rat1"><span  class="feedback1of1"><img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> <img src="images/sque-box.gif" alt="" /> </span><span>Response</span></div>
              <div class="clear"></div>
            </div>
            <div class="feedback_details">
              <div class="user_name">Client:&nbsp;&nbsp; <a href="#" class="bidCard-title"><? echo $rowprofile['conpany_name'] ; ?></a></div>
              <div class="jobdetails">
                <div class="left"> <span title="Job Accepted Date"><? $mkd=$rowbid['bid_date'] ;
				$mkd1=strtotime($mkd);
$mkd2=date('M j Y', $mkd1); echo $mkd2; ?></span> <span class="delimiter">|</span> <span class="midgrey" title="Contractor has opted to keep earnings private.">Private</span> <span class="delimiter">|</span> <? echo $rowpro['name']; ?> <span class="delimiter"></span> <span class="delimiter">|</span> </div>
                <div class="right">
                  <div class="clickable"><a href="job_details.php?jid=<? echo $rowbid['jobid']; ?>">Job Details</a> </div>
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
