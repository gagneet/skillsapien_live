<?php
include_once('init.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien.com - Trends</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="outer">
<div id="men">
    <?php echo $get_template->process('global_header1.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="center_left">
        <h1>Browse Trends</h1>
        <h2>This page is currently under construction</h2>
        <p>We are working around the clock to bring you the ability to visualise skill demand and supply trends and to visualise these in simple yet powerful graphs.</p>
        <p>In the meantime, however, this functionality will not be available during the Beta phase.</p>
        </br>
		</br>
		<p>If you have any further questions, or would like to know more about the functionalities we have planned in store for you, why not <a href="contact-us.php">Contact Us</a>!</p>        
      </div>
      
      <div class="center_right">
          <?php  include('latest_news.php'); ?>
        
        <div class="social">
          <div class="social_top">
            <h2>Follow us on:</h2>
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
