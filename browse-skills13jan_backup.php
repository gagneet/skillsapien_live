<?php
include_once('init.php');
Is_valid_uesr();

$proid=$_REQUEST['proid'];
$discid=$_REQUEST['discid'];

$seldis=mysql_query("select * from disciplinelist where id='$discid' and profession_id='$proid'");
$rowseldis=mysql_fetch_array($seldis);


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
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="search-display">
        <div class="search-title"><strong><? echo $rowseldis['disc_name']; ?></strong> Skills <span> (1 - 25 of 2,295 results)</span> </div>
      </div>
      <div class="search-left-sec">
       
        <div class="filters"> <h4 class="fil-title">Narrow Results</h4>
        <div class="filterToggle">By Job Category </div>
      <div id="treeMenu">
  <h2>All</h2>
  
        <ul>
		<?php $sel_pro=mysql_query("select * from profession where name!=''");
		while($rowpro=mysql_fetch_array($sel_pro))
						{ 
					$pid=$rowpro['id'];
						?>
          <li><span></span><a href="" class="parent"><? echo $rowpro['name']; ?></a>
		  
		   
            <div>
			 <? $getdiciname=mysql_query("select * from disciplinelist where profession_id='$pid'");
	   while($rowgetdiciname=mysql_fetch_array($getdiciname))
	   {
	  ?>
              <ul>
                <li><span></span><a href="skills.php?proid=<? echo $pid; ?>&discid=<? echo $rowgetdiciname['id'] ; ?>" class="parent"><? echo $rowgetdiciname['disc_name'] ; ?></a></li>
              </ul>
			  <? } ?>
			  
            </div>
			
			
          </li>

          <?
	   
	   }
	     ?>
         
          
          
        
               
               
         
               
              </ul>
            </div>
          </li>
        </ul>
</div>
        
        </div><div class="search-layout-right">
        <div class="search-header">
          <div class="search-header-left"><span class="midgrey">24,477 new skills in the last 15 days</span> <a href="#" class="rss">Subscribe</a></div>
          <div class="search-header-right"> <span> Sort By:</span>
            <input type="text" value="Posted Date"  class="sea-inp" />
          </div>
          <div class="clear"></div>
        </div>
        
		
		
		
        
        <? 
		$sql="SELECT p.photo,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id";
	  $run=$db->query_silent($sql);
	  while($data=$db->fetch_array($run))
		/*$seljobs=mysql_query("select * from post_job order by id desc limit 0,4");
while($rowjobs=mysql_fetch_array($seljobs))*/
{

		?>
        <div class="jobCard">
          <p><a href="skill-details.php?sid=<?php echo $data['id']?>"><?php echo $data['skills_profile']?> </a></p>
          <div class="stats"><strong>Fixed Price: <!--$50 - $150--><?php echo CURRENCY?><?php echo $data['gt_amount']?>/<?php echo $data['gt_time_period']?></strong></div>
          <p><?php echo $data['profile_summary']?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="prof"><span>Skills:</span> <a href="#"><?php echo $data['skill_keywords']?></a><!--<a href="#">Ghostwriting</a>,<a href="#"> Editing</a>, <a href="#">eBooks </a>--></div>
          <div class="prof"><span><img src="images/buyer_rating_small.png" alt="" /></span>&nbsp;&nbsp;<a href="#">zimbah</a>&nbsp;&nbsp;<span><img src="images/us.gif" alt="" /></span>&nbsp;&nbsp;United States  </div>
        </div>
         <?php /*?><div class="jobCard">
          <p><a href="job_details.php?jid=<? echo $rowjobs['id'] ;  ?>"><? echo $rowjobs['title'] ;  ?> </a></p>
          <div class="stats"><strong>Fixed Price: <!--$50 - $150-->$<? echo $rowjobs['budget'] ;  ?>-$<? echo $rowjobs['budgetmax'] ;  ?></strong> &nbsp; |&nbsp;  E-books and Blogs   | &nbsp; Posted: 6h, 40m ago&nbsp;  | &nbsp; Ends: 29d, 17h &nbsp; |&nbsp;<a href="#"> 0 Proposals </a></div>
          <p><? echo $rowjobs['description'] ;  ?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="prof"><span>Skills:</span> <a href="#">Ghostwriting</a>,<a href="#"> Editing</a>, <a href="#">eBooks </a></div>
          <div class="prof"><span><img src="images/buyer_rating_small.png" alt="" /></span>&nbsp;&nbsp;<a href="#">zimbah</a>&nbsp;&nbsp;<span><img src="images/us.gif" alt="" /></span>&nbsp;&nbsp;United States  </div>
        </div><?php */?>
		<? }  ?>
        
        
      </div>
		<div class="clear"></div>
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

<!--<div id="footer">
  <div id="footer-box">
    <div class="footer-link">
      <ul>
        <li><a href="#">Home</a></li>
        <li>| </li>
        <li><a href="#">About Us</a> </li>
        <li> | </li>
        <li> <a href="#">Terms of Use</a></li>
        <li> |</li>
        <li> <a href="#">FAQ</a> </li>
        <li>|</li>
        <li> <a href="#">Privacy Policy</a></li>
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
