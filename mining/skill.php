<?php
include_once('init.php');


$proid=$_REQUEST['proid'];
$discid=$_REQUEST['discid'];

$seldis=mysql_query("select * from disciplinelist where id='$discid' and profession_id='$proid'");
$rowseldis=mysql_fetch_array($seldis);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien.com - Browse Skills</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>

<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header1.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="search-display">
      <?php
	    if($_REQUEST['proid']){
		  $cat_id=$_REQUEST['proid'];
	   $discid1=$_REQUEST['discid'];
	  $select="SELECT * FROM post_job WHERE status='enable' AND disc_id='$discid1' AND profession_id='$cat_id' and vertical_id=".VERTICAL_ID."";
	  $record=mysql_query($select);
	  $num=mysql_num_rows($record);
	       ?>
        <div class="search-title"><strong><?php echo $rowseldis['disc_name']; ?></strong> Jobs</div>
        <?php  } else{ ?>
        <div class="search-title"><strong><?php echo $rowseldis['disc_name']; ?></strong> Skills</div>
        <?php } ?>
	<?php  $select1="SELECT * FROM skills_profiles WHERE vertical_id=".VERTICAL_ID." and status='enable'  ";
	  $record1=mysql_query($select1);
	  $num1=mysql_num_rows($record1); ?>
	
      </div>
      <div class="search-left-sec">
       
        <div class="filters"> <h4 class="fil-title">Narrow Results </h4>
        <div class="filterToggle">By Skill Categories </div>
      <div id="treeMenu">
  <h2>All</h2>
  
        <ul>
				<?php $sel_pro=mysql_query("select * from profession where name!='' and vertical_id=".VERTICAL_ID."");
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
                <li><span></span><a href="skill.php?proid=<? echo $pid; ?>&discid=<? echo $rowgetdiciname['id'] ; ?>" class="parent"><? echo $rowgetdiciname['disc_name'] ; ?></a></li>
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
          <!--<div class="search-header-left"><span class="midgrey">24,477 new jobs in the last 15 days</span> <a href="#" class="rss">Subscribe</a></div>-->
          <?php
           if($_REQUEST['proid']){
      ?>
        <div class="search-title"><span style="padding-left:20px;"> (1 - 10 of <?php echo $num; ?> results)</span> </div>
        <?php } else{?>
        <div class="search-title"><span style="padding-left:20px;"> (1 - 10 of <?php echo $num1; ?> results)</span> </div>
        <?php } ?>
        
          <div class="search-header-right"> 
           <form name="search" action="" method="post">
          
           <span> Sort By:</span>
          
            <select name="category" style="width:112px;">
            <option value="">Please Select</option>
            <option value="title">Skill Title</option>
            <option value="job_start_date">Start Date</option>
            <option value="date">Posted Date</option>
            <option value="user_id">Candidate Id</option>
            </select>
            <input type="text" name="SearchMe12" value=""  class="sea-inp" />
            <input type="submit" name="sarchMe"  value="Search">
            </form>
          </div>
          <div class="clear"></div>
        </div>
        <!--<div class="appliedFiltersSection">
          <div class="filterChevron-l">
            <div class="chevronLabel">Writing & Translation</div>
            <div class="chevronCancel"> </div>
            <div class="chevronRight"></div>
          </div>
          <div class="filterChevron-r">
            <div class="chevronLeft "></div>
            <div class="chevronLabel">Hiring Open</div>
            <div class="chevronCancel"> </div>
            <div class="chevronRight"></div>
          </div>
          <div class="save-cl"><a href="#">Save</a>&nbsp; |&nbsp; <a href="#">Clear</a> </div>
          <div class=" clear"></div>
        </div>-->
		  <div class="box-rightLats">
          
          <?php if($proid!='' && $discid!=''){ ?>
          
       <?php } else { ?>
	  <div class="box-top-RLast">
        <div class="lattest">Bid On Skill</div>
        <div class="view"><a href="skill.php?viewall=yes">View All</a></div>
      </div> <?php }?>
      <div class="box-bgLast" > 
      <div>

		
		<?php
		
		if(!isset($_REQUEST['startt']))
            {   
			
            $_REQUEST['startt']=0;
            } 
			 $intValuee=$startt;
            $rec_incc=4; 
		
		if($proid!='' && $discid!='' )
		{
	
	
	 if($_POST['SearchMe12']!=''){
		
	
	 /*echo "select * from post_job where ".$_POST['category']." Like '%".trim($_POST['SearchMe12'])."%'";
	 exit;*/
	 $seljobs=mysql_query("select * from post_job where vertical_id='".VERTICAL_ID."' AND ".$_POST['category']." Like '%".trim($_POST['SearchMe12'])."%'");
	    }
		else{
			
		 $seljobs=mysql_query("select * from post_job where disc_id='$discid' and vertical_id='".VERTICAL_ID."' AND profession_id='$proid' limit ".$_REQUEST['startt'].",".$rec_incc);
		
		}
		
while($rowjobs=mysql_fetch_array($seljobs))
{
 	?>
    
    <div class="jobCard">
          <p><strong>Job Title</strong> :  <a href="job_details.php?jid=<? echo $rowjobs['id'] ;  ?>"><? echo $rowjobs['title'] ;  ?> </a></p>
          <p><strong>Descriptions:  </strong><? echo $rowjobs['description'] ;  ?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="stats"><strong>Skills:  </strong><? echo $rowjobs['skillset'] ; ?></div>
          
          <div class="stats"><strong>Posted Date:  </strong> <? echo $rowjobs['date'] ;  ?></div>
         
        </div>
        
 
        
        <?  } 
		
		if($_POST['SearchMe12']!=''){
		
				$seljobs1=mysql_query("select * from post_job where  vertical_id=".VERTICAL_ID." and ".$_POST['category']." Like '%".trim($_POST['SearchMe12'])."%'");
				}else{
				
				
				
				$seljobs1=mysql_query("select * from post_job where vertical_id=".VERTICAL_ID." and disc_id='$discid' and profession_id='$proid'");
				}
				$rowjobs1=mysql_num_rows($seljobs1);
					
									
				echo "<table align = 'center' width='60%' style='margin-left:100px;'  border=0><tr><td  align='center'>";
				
				if($_REQUEST['startt']>0) {
				
				print "<a href='skill.php?startt=".($_REQUEST['startt']-$rec_incc).'&proid='.$_GET['proid'].'&discid='.$_GET['discid']."'>PREV</a>&nbsp;&nbsp;&nbsp;&nbsp;";
				
				}
				
				
				for($j=0;$j<ceil($rowjobs1/$rec_incc);$j=$j+1){    // ceil is used for rounding off
				
				if(($j*$rec_incc) <> $_REQUEST['startt']){
				
				echo "&nbsp;&nbsp;<strong><a href='skill.php?startt=".($j*$rec_incc).'&proid='.$_GET['proid'].'&discid='.$_GET['discid']."'>".($j+1)."</a></strong>&nbsp;&nbsp;";
				
				}
				
				else { echo "".($j+1)."";}    
				
				}
				
				if((($j-1)*$rec_incc) > $_REQUEST['startt']) {
				
				print "&nbsp;&nbsp;&nbsp;&nbsp; <a
				
				href='skill.php?startt=".($_REQUEST['startt']+$rec_incc).'&proid='.$_GET['proid'].'&discid='.$_GET['discid']."'>NEXT</a>";
				
				
				
				}
				
				
				echo "</td></tr></table>";
				
				
		
		}else {
		
		
		
		 if(!isset($_REQUEST['start']))
            {   
			
            $_REQUEST['start']=0;
            } 
            $intValue=$start;
			 if($_GET['viewall']=='yes'){
			 $rec_inc='100';
			 }else{
            $rec_inc=4; 
		}
		
		
		 if($_POST['SearchMe12']!='')
		{
			
			
	      $value=$_POST['SearchMe12'];
    $myserchQuery='and (sp.skills_profile LIKE "'.'%'.trim($value).'%'.'" or sp.skill_keywords LIKE "'.'%'.trim($value).'%'.'" or r.gt_amount LIKE "'.'%'.trim($value).'%'.'" )';
 }
 else
 {
 $myserchQuery='';
 }
		
		
	//	$seljobs=mysql_query("select * from post_job order by id desc limit 0,4");
	
	
	
	
	 $sql="SELECT p.photo,p.date,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, r.date, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id ".$myserchQuery." and uld.vertical_id=".VERTICAL_ID." limit ".$_REQUEST['start'].",".$rec_inc;
	  $run=$db->query_silent($sql);
	  while($data=$db->fetch_array($run))
	/*
		$seljobs=mysql_query("select * from post_job order by id desc");
while($rowjobs=mysql_fetch_array($seljobs))*/
{

		?>
        
          <div class="border-rightLast">       
          <div class="news-img"><a href="skilldetails.php?sid=<?php echo $data['id']?>"><img src="profile_img/<?php echo $data['photo']?>" alt="" border="0" height="70" width="70" /></a></div>
          <div class="news-tex">
              <div class="prof"><strong>Title:</strong>&nbsp;&nbsp;&nbsp;<a href="skilldetails.php?sid=<?php echo $data['id']?>"><?php echo $data['skills_profile']?> </a></div>
            <div class="prof"><strong>Skills:</strong>&nbsp;&nbsp;&nbsp; <a href="#"><?php echo $data['skill_keywords']?></a></div>
           <div class="stats"><strong>Bid:&nbsp;&nbsp; <?php echo CURRENCY?><?php echo $data['gt_amount']?><!--/<?php //echo $data['gt_time_period']?>--></strong></div>
           <?php echo $data['date']?>  </div>
          <div class="clear"></div>
        </div>
      <!--<div class="jobCard">
          <p><a href="job_details.php?jid=<? echo $rowjobs['id'] ;  ?>"><? echo $rowjobs['title'] ;  ?> </a></p>
          <div class="stats"><strong>Fixed Price: $<? echo $rowjobs['budget'] ;  ?>-$<? echo $rowjobs['budgetmax'] ;  ?></strong> &nbsp; |&nbsp;  E-books and Blogs   | &nbsp; Posted: 6h, 40m ago&nbsp;  | &nbsp; Ends: 29d, 17h &nbsp; |&nbsp;<a href="#"> 0 Proposals </a></div>
          <p><? echo $rowjobs['description'] ;  ?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="prof"><span>Skills:</span> <a href="#">Ghostwriting</a>,<a href="#"> Editing</a>, <a href="#">eBooks </a></div>
          <div class="prof"><span><img src="images/buyer_rating_small.png" alt="" /></span>&nbsp;&nbsp;<a href="#">zimbah</a>&nbsp;&nbsp;<span><img src="images/us.gif" alt="" /></span>&nbsp;&nbsp;United States  </div>
        </div>-->
		<? }  } ?>
          </div>
      </div>
         <div class="box-bottom-RLast"></div>
    </div>
    
    <?php
	
		if($_POST['SearchMe12']!='')
		{
		$value=$_POST['SearchMe12'];
		$myserchQuery1='and (sp.skills_profile LIKE "'.'%'.trim($value).'%'.'" or sp.skill_keywords LIKE "'.'%'.trim($value).'%'.'" or r.gt_amount LIKE "'.'%'.trim($value).'%'.'" )';
		}
		else
		{
		$myserchQuery1='';
		}
		
		
		
		$sql1="SELECT p.photo,p.date,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, r.date, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id ".$myserchQuery1." and uld.vertical_id=".VERTICAL_ID."";
		$run1=$db->query_silent($sql1);
		$nume=mysql_num_rows($run1);
		
	
	
	 echo "<table align = 'center' width='60%' style='margin-left:100px;'  border=0><tr><td  align='center'>";
        
        if($_REQUEST['start']>0) {
        
        print "<a href='skill.php?start=".($_REQUEST['start']-$rec_inc)."'>PREV</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        
        }
        
        
        for($i=0;$i<ceil($nume/$rec_inc);$i=$i+1){    // ceil is used for rounding off
        
        if(($i*$rec_inc) <> $_REQUEST['start']){
        
        echo "&nbsp;&nbsp;<strong><a
        
        href='skill.php?start=".($i*$rec_inc)."'>".($i+1)."</a></strong>&nbsp;&nbsp;";
        
        }
        
        else { echo "".($i+1)."";}    
        
        }
        
        if((($i-1)*$rec_inc) > $_REQUEST['start']) {
        
        print "&nbsp;&nbsp;&nbsp;&nbsp; <a
        
        href='skill.php?start=".($_REQUEST['start']+$rec_inc)."'>NEXT</a>";}
        
        echo "</td></tr></table>";
		
		
		?>
      </div>
		<div class="clear"></div>
      </div>
      
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
 



<?php echo $get_template->process('global_footer.php')?>
</div>
</body>
</html>
