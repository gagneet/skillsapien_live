<?php
include_once('init.php');
Is_valid_uesr();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien.com - Browse Jobs</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<?php echo $get_template->process('html_header.php')?>

</head>
<body>
<div id="outer">
<div id="men">
   <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="b-page-header">
        <h1>Browse Job </h1>
        <span class="b-subheader ">Browse through a range of job categories and connect with potential bidders.</span>
     <div class="search-box">
     <form name="search" action="skills.php" method="post">
     <span class="search-but"><a href="#"><img src="images/search-jobs.gif" alt="" width="95" height="30" border="0" /></a></span>
<input name="SearchMe12"  type="text" class="input-search-box" onblur="if(this.value=='') this.value='Advance Search'" onfocus="if(this.value=='Advance Search') this.value=''" value="Advance Search"  />
  <span class="search-img"><input type="hidden" name="sarchMe" /><input type="image"  name="sarchMe" src="images/search-img.gif" ></span>  
          </form></div>
        
         </div>
      <div class="b-page-content">
        <div class="job-cat">
          <h2>Skill Categories </h2>
            &nbsp;&nbsp;|&nbsp;&nbsp;Skills</div>
        <div class="b-left-section ">
		<table border="0" cellpadding="0" cellspacing="0" width="">
		<?php $sel_pro=mysql_query("select * from profession where name!='' and vertical_id='".VERTICAL_ID."'");
		
		 ?>
		<tr>
		<? 
		$i=0;
		while($rowpro=mysql_fetch_array($sel_pro))
						{ 
						
						if($i%3=='0')
						{
						echo "</tr><tr>";
						}
						?>
		<td>
		 <!--<div class="category-section">
            <div class="category-title"><? echo $rowpro['name'] ; ?></div>
			<table cellpadding="0" cellspacing="0" border="0">
			<tr>
			<td>
			
			<div class="skill-item">
			
			<? $proid=$rowpro['id'];
			
			
			$sel_disc=mysql_query("select * from disciplinelist where disc_name!='' and  profession_id='$proid'");
			
			
			 ?>
              <ul>
			  <? while($rowdis=mysql_fetch_array($sel_disc))
						{  ?>
                <li><a href="skills.php?proid=<? echo  $proid=$rowpro['id']; ?>&discid=<? echo $rowdis['id'] ; ?>"><? echo $rowdis['disc_name'] ; ?></a></li>
				<? } ?>
               
              </ul>
            </div>
			</td>
			
			</tr>
			
			</table>
            
          </div>-->
		<div class="search-left-sec">
       
       <!-- <div class="filters"> <h4 class="fil-title">Narrow Results       </h4>-->
        <div class="filterToggle">Narrow Results By Skill Categories  </div>
      <div id="treeMenu">
  <h2>All</h2>
  
        <ul>
		<?php $sel_pro=mysql_query("select * from profession where name!='' and vertical_id='".VERTICAL_ID."'");
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
        
        </div>
		
		</td>
		
		<? $i++ ; } ?>
		</tr>
		
		</table>
		
		
         
		  
		  
		  
          <!--<div class="category-section">
            <div class="category-title">Design Jobs</div>
            <div class="skill-item">
              <ul>
                <li><a href="#">Logos</a></li>
                <li><a href="#">Graphic Design </a></li>
                <li><a href="#">Illustration</a></li>
                <li><a href="#">Brochures</a></li>
                <li><a href="#">Banner Ads </a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Corpoate Identity </a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </div>
          </div>
          <div class="category-section">
            <div class="category-title">Writing Jobs</div>
            <div class="skill-item">
              <ul>
                <li><a href="#">Article writing </a></li>
                <li><a href="#">Web Content </a></li>
                <li><a href="#">Copywriting</a></li>
                <li><a href="#">Translation</a></li>
                <li><a href="#">E-books &amp; Blogs </a></li>
                <li><a href="#">Creative Writing </a></li>
                <li><a href="#">Editing &amp; Proofreading </a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </div>
          </div>
          <div class="category-section">
            <div class="category-title">Marketing Jobs</div>
            <div class="skill-item">
              <ul>
                <li><a href="#">Search Engine Marketing </a></li>
                <li><a href="#">Ad Campaigns </a></li>
                <li><a href="#">Lead Generation </a></li>
                <li><a href="#">Telemarketing</a></li>
                <li><a href="#">Email Marketing </a></li>
                <li><a href="#">Marketing strategy </a></li>
                <li><a href="#">Business Plans </a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </div>
          </div>
          <div class="category-section">
            <div class="category-title">Administrative Jobs</div>
            <div class="skill-item">
              <ul>
                <li><a href="#">Data Entry </a></li>
                <li><a href="#">Virtual Assistant </a></li>
                <li><a href="#">Research</a>
                  <ul>
                    <li><a href="#">Transcription</a></li>
                  </ul>
                </li>
                <li><a href="#">Mailing Lists1 </a></li>
                <li><a href="#">Customer Service </a></li>
                <li><a href="#">Word Processing </a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </div>
          </div>-->
          <!--<div class="category-section">+
            <div class="category-title">Consulting Jobs</div>
            <div class="skill-item">
              <ul>
                <li><a href="#">Accounting</a></li>
                <li><a href="#">Financial Planning </a></li>
                <li><a href="#">Manegement Consulting </a></li>
                <li><a href="#">Financial Reporting </a></li>
                <li><a href="#">Tax Services </a></li>
                <li><a href="#">Outsourcing Consulting </a></li>
                <li><a href="#">Budgeting &amp; Forecasting </a></li>
                <li><a href="#">Other</a></li>
              </ul>
            </div>
          </div>-->
        </div>
        <!--<div class="b-right-section">
          <h4 class="b-right-heading">Popular Skills in Demand</h4>
          <div class="b-right-item">
            <ul>
              <li> <a href="#">WordPress<span>(835)</span> </a></li>
              <li> <a href="#">PHP <span>(804)</span></a></li>
              <li><a href="#"> HTML <span>(789)</span></a></li>
              <li><a href="#"> Database <span>(740)</span></a></li>
              <li><a href="#"> SEO <span> (592) </span> </a></li>
              <li> <a href="#">iPhone <span> (555) </span> </a></li>
              <li><a href="#"> Marketing <span>(536)</span></a></li>
              <li> <a href="#">English <span> (499) </span> </a></li>
              <li><a href="#"> Facebook<span>(480)</span> </a></li>
              <li> <a href="#">Testing <span>(472)</span></a></li>
               <li> <a href="#">English <span> (499) </span> </a></li>
              <li><a href="#"> Facebook<span>(480)</span> </a></li>
              <li> <a href="#">Testing <span>(472)</span></a></li>
              
            
            </ul>
          </div>
          <div class="b-all"><a href="#">View all »</a></div>
          
        </div>-->
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
