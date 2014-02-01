<?php
include_once('init.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien.com - Beta Release</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outer">
<div id="men">
    <?php echo $get_template->process('global_header1.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="center_left">
        <h1>About the Skillsapien Beta</h1> 
        <h2>Why are you reading this?</h2>
        <p>We are working extremely hard to bring the full breadth of Skillsapien services to you as quickly as possible. To be able to help us do this, one of the best ways is to launch the site whilst we're still working on it and improving it. This is the most efficient way for us to gauge your inputs and make relevant changes based on your feedback.</p>
        <p>After all there is no point building something WE think is great! We need your real world inputs and data to make Skillsapien relevant and useful for you.</p>
        <p>Unfortunately this may mean that features may not be working the way it is intended, or that we haven't yet had the necessary information or time to develop all the functionality we envisage will bring you value. Therefore, please bear with us in the meantime, we are very grateful for your patience and understanding!</p>
        </br>
        <h2>What can you get from us during the Beta period?</h2>
        <p>As a token of our appreciation for using our service, we have made ALL BIDDING TRANSACTIONS <span style=color:blue;font-weight:bold>FREE OF CHARGE</span> throughout the Beta Release period!!</p>
        <p>We hope you'll be able to enjoy our free offerings during this period! :-)</p>
		</br>
        <h2>What can you do to help us?</h2>
        <p>As with any start-up venture, Skillsapien could do with all sorts of help from users like yourself. Please write to us and let us know of: any bugs, functionality questions, features you'd like to see, helping out in a more full-time capacity (we're always open for hiring great talents!), or funding (yes please!).</br>
        Or if you simply want to have a chat, that's fine too! Just follow the "Contact Us" link below and write/phone/fax us!</p>
		</br>
		</br>
		<p>If you would like further information, why not <a href="contact-us.php">Contact Us</a>!</p>        
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

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
