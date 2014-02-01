<?php
require('init.php');


		/*
		
		Sign up
		
		*/
		
		/*if()
		{
		 
		}*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<script src="js/sign-up.js" type="text/javascript" language="javascript1.1"></script>
</head>
<body>
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="panel-left">
      <h1>We Connect Recruiters to </h1>
      <h2>Skilled Professionals... </h2>
      <p>Skillsapien.com is a site to connect recruiters to skilled professionals via focusing on the value of skills and bringing a market mechanism to determine the right value.</p>
      <div class="image"><img src="images/image.png" alt="" /></div>
      <div class="recruiters-btn"><a href="#"><img src="images/recruiters-btn.png" alt="" border="0" /></a></div>
      <div class="recruiters-btn"><a href="#"><img src="images/candidates-btn.png" alt="" border="0" /></a></div>
    </div>
    <div class="panel-right">
      <?php echo $get_template->process('sign-up.php')?>
      
    </div>
    <div class="clear"></div>
  </div>
  <div class="canten">
    <div class="box">
      <div class="box-top-R">
        <div class="lattest">Bid on Skills</div>
        <div class="view"><a href="#">View All</a></div>
      </div>
      <div class="box-bg">
        <div class="border-box">
          <div class="image-box"><a href="#"><img src="images/img-1.jpg" alt="" border="0" /></a></div>
          <div class="tex-box"><span>Title</span><a href="#">Accountancy </a></div>
          <div class="tex-box"><span>Skill</span><font color="#666666" size="-1">Tax Accounting, Audit Accounting,Financial Management</font> </div>
          <div class="tex-box"><span>Bid</span> <font size="+2" color="#1c79a7"><sup> $</sup><b>857</b></font> </div>
          <div class="clear"></div>
        </div>
        <div class="border-box">
          <div class="image-box"><a href="#"><img src="images/img-2.jpg" alt="" border="0" /></a></div>
          <div class="tex-box"><span>Skill</span><a href="#">XHTML/CSS Expert</a> </div>
          <div class="tex-box"><span>Skill</span><font color="#666666" size="-1">XHTML/CSS + Wordpress Expert, Logo, BCard </font> </div>
          <div class="tex-box"><span>Bid</span> <font size="+2" color="#1c79a7"><sup> $</sup><b>500</b></font> </div>
          <div class="clear"></div>
        </div>
        <div class="border-box">
          <div class="image-box"><a href="#"><img src="images/img-3.jpg" alt="" border="0" /></a></div>
          <div class="tex-box"><span>Skill</span><a href="#">Management</a> </div>
          <div class="tex-box"><span>Skill</span><font color="#666666" size="-1">Planning, Organizing, Leading, Coordinating/Controlling</font> </div>
          <div class="tex-box"><span>Bid</span> <font size="+2" color="#1c79a7"><sup> $</sup><b>1,526</b></font> </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="box-bottom-R"></div>
    </div>
    <div class="box-right" >
      <div class="box-top-R">
        <div class="lattest">Lattest News</div>
        <div class="view"><a href="#">View All</a></div>
      </div>
      <div class="box-bg">
        <div class="border-right">
          <div class="news-img"><a href="#"><img src="images/news-img.jpg" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>XYZ </span><a href="#">skill is now treading at $456 per hour based on <br />
              latest bids...</a> </p>
            Tech News | April 17, 2011 | 1 </div>
          <div class="clear"></div>
        </div>
        <div class="border-right">
          <div class="news-img"><a href="#"><img src="images/news-img.jpg" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>ABC</span> <a href="#">just landed another job worth $123</a> <br />
            </p>
            Tech News | April 17, 2011 | 1 </div>
          <div class="clear"></div>
        </div>
        <div class="border-right">
          <div class="news-img"><a href="#"><img src="images/news-img.jpg" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>ABC </span><a href="#">just landed another job worth $123</a></p>
            Tech News | April 17, 2011 | 1 </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="box-bottom-R"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?></body>
</html>
