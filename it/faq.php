<?php
include_once('init.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien.com - FAQ</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outer">
<div id="men">
    <?php echo $get_template->process('global_header1.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="center_left">
        <h1>Frequently Asked Questions</h1>
        <h2>How does Skillsapien work?</h2>
        <p>If you have skills that are in demand or your time is previous, simply list your profile with Skillsapien.com and have the world bid for your skill and availability.</p>
        <p>You nominate the rate that you would like to work for, per block of time (for example: hour/day/week/month/year), update your availability dates and violà! Bidders worldwide can then bid on your listed availability with their perceived appropriate market rates.</p>
        <p>If there is a match, then great! You’ve got yourself a potential work opportunity, now or into the future!</p>
        <p>For skill bidders, you can visualise candidate’s competitiveness against their peers (based on comparison of skill level, experience, rates, availability, etc) and make your bids accordingly. You may even want to hedge against possible future shortages by securing highly-sought-after candidates now, simply through future-dated bidding!</p>
        <p>Once a bid is agreed by both parties, you can both enter into what we call an  “Interview”. This is where you exchange contact details, negotiate the finer terms of the skill requirement, and when you’re both ready, sign a work agreement (not provided by Skillsapien). At this point, you enter into what we call a “Placement”.</br>
        The bidder (or Recruiter) will need to pay for both the Interview and Placement through Skillsapien Credits, which can be purchased either once-off or through monthly subscription (which offers much better value for higher volumes).</p>
        <p>**During the Beta release phase, all Interview and Placement transactions are totally free of charge! (just our way of thanking you for using our services and for being patient as we enhance these services)**</p>
        </br>
        <h2>What if I don’t want to show my name and contact details to the open world before I’ve accepted a bid?</h2>
        <p>Please refer to your Terms of Use policies. Skillsapien takes great care towards protecting our users’ privacy and will NOT release, as a matter of default, any names or contact details of Candidates until such a time they elect to do so (for example accepting an Interview after agreeing to a bid).</br>
        This is based, however, on the assumption that you fully comply with our Terms of Use and that you do not disclose your name/contacts in any of the publicly viewable text fields.</p>
        </br>
        <h2>What is the Skillsapien bidding process flow?</h2>
        <p><i>Let’s work with a couple scenarios:</i></br>
        1) A Skill Bidder (ie: a Recruiter) reviews a number of Candidate Skill Profiles.</br>
		2) The Recruiter enters a "bid" against one or more such profiles, detailing the requirement (this can include a Job Post but if not it should have at minimum the rate, start/end-date, high-level description of services required).</br>
		3) The Candidate receives email/notification that there are Bids outstanding.</br>
		4) The Candidate logs into Skillsapien and reviews the Bid, they can either Accept or Counter the bid.</br>
		5A) If Accepted, a notification is sent to the Recruiter and prompts them continue to the next step: Interviewing (they need to have sufficient Skillsapien Credits or they need to pay for this).</br>
Only at this point are the Candidate’s name and contact details unlocked for the Recruiter, in order to conduct the interview.</br>
		5B) If however, the Bid was countered by the Candidate, an alert still goes out to the Recruiter. They can then either revise the Bid upwards or cancel it.</br>
		6) Once an Interview takes place, a reminder notice is sent a week later to both the Candidate and Recruiter prompting to update the outcome of the Interview. If  it has led to a successful outcome (i.e. Placement), a Placement Fee is deducted if the Recruiter has sufficient Credits, or a Invoice raised to the Recruiter if not.</br>
		7) Finally, both parties can leave Feedbacks against the other, in order to truthfully reflect how well the job was completed, for the broader community’s benefit.</br>
		</p>
		<h2>If I have a outstanding job advertised, do I still have to enter it manually during a bid?</h2>
		<p>During the Beta Release, unfortunately you’ll have to manually enter the bid details. However we expect to implement functionality during/after the Beta period so that a Recruiter can automatically link Bids to outstanding job posts.</p>
		<p>We also expect to rollout shortly the ability for a Candidate to register their interest against an outstanding Job advert, where an alert will be sent out automatically to the advertising Recruiter, along with the Candidate's Skill Profile and preset rates (but of course with annonymised name & contacts).</p>
		</br>
		</br>
		<p>If you cannot find your question(s) answered here, why not <a href="contact-us.php">Contact Us</a>!</p>        
      </div>
      
      <div class="center_right">
      
        <?php include('latest_news.php'); ?>
        
        <!--<div class="latest">
          <div class="latest_top">
            <h2>Latest News</h2>
            <a href="#" class="latest_v">View All</a></div>
            
            
          <div class="news_di"><img src="images/news_pic.gif" alt="" width="60" height="45" align="left" />
            <p>ABC skill is now trending at $565 per hour based on latest bids... <span>Bid News | Jan 20th, 2012</span></p>
            <div class="clear"></div>
          </div>
          <div class="news_di"><img src="images/news_pic.gif" alt="" width="60" height="45" align="left" />
            <p>Candidate XYZ has just landed a placement worth $950 per day!<span>Candidate News | Jan 21st, 2012</span></p>
            <div class="clear"></div>
          </div>
          <div class="news_di"><img src="images/news_pic.gif" alt="" width="60" height="45" align="left" />
            <p>Recruiter DEF has just placed 5 bids! The highest was $1200/day!<span>Recruiter News | Jan 22nd, 2012</span></p>
            <div class="clear"></div>
          </div>
          <div class="news_di bor_nonecl"><img src="images/news_pic.gif" alt="" width="60" height="45" align="left" />
            <p>Skillsapien will soon be featured on [ABC Magazine]! Stay tuned via our Twitter channel and Facebook page! <span>Skillsapien News | Jan 23rd, 2012</span></p>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>-->
        
        <div class="social">
          <div class="social_top">
          <p></p><h2>Follow us on:</h2></p>
          </div>
			<div class="social_di"> <a href="http://www.facebook.com/Skillsapien/"><img src="images/facebook.gif" alt="" /></a> <a href="http://www.linkedin.com/company/skillsapien/"><img src="images/link_in.gif" alt="" /></a> <a href="http://plus.google.com/107493995351899544917/"><img src="images/google_plus.jpg"  alt="" /><a href="http://twitter.com/Skillsapien/"><img src="images/twitter.gif" alt="" /></a>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

<div class="canten">
  <div class="clear"></div>
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>

</body>
</div></div>
</html>
