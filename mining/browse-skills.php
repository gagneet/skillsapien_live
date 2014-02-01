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

 $user_id;

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
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="search-display">
      <?php
	  $select="SELECT * FROM skills_profiles WHERE status='enable' and vertical_id='".VERTICAL_ID."' ";
	  $record=mysql_query($select);
	  $num=mysql_num_rows($record);
      ?>
        <div class="search-title"><strong><? echo $rowseldis['disc_name']; ?></strong> Skills</div>
      </div>
      <div class="search-left-sec">
       
        <div class="filters"> <h4 class="fil-title">Narrow Results</h4>
        <div class="filterToggle">By Skill Categories </div>
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
        
        </div><div class="search-layout-right">
        <div class="search-header">
          <div class="search-header-left"> 
           <form name="search" action="" method="post"><span class="midgrey"> <span> (1 - 10 of <?php echo $num; ?> results)</span> </div>
           <div class="search-header-right"> 
            <span> Sort By:</span>
             <select name="skillcat" style="width:112px;">
            <option value="">Please Select</option>
            <option value="skills_profile">Skills Profile</option>
            <option value="skill_keywords">Skill Keywords</option>
            <option value="gt_amount">Amount</option>
            </select> 
            <input type="text" name="postField" value=""  class="sea-inp" />
            <input type="submit" name="sarchMe"  value="Search">
           </form>
          </div>
          <div class="clear"></div>
        </div>
        
		 <div class="box-rightLats" >
      <div class="box-top-RLast">
        <div class="lattest">Bid On Skill</div>
        <div class="view"><a href="browse-skills.php?viewall=yes">View All</a></div>
      </div>
      <div class="box-bgLast" > 
      <div>
		
 <? 
 
 if(!isset($_REQUEST['start']))
            {   
			
            $_REQUEST['start']=0;
            } 
            $intValue=$start;
			if($_GET['viewall']=='yes') {
			$rec_inc=100;
			}else{ 
            $rec_inc=4; 
			} 
 			
			
 if($_POST['postField']!='')
 {
   $txtvalue= $_POST['postField'];
   
   $selectVal = $_POST['skillcat'];
   
   if($selectVal=="gt_amount"){
   
   $selectVal1 = $_POST['skillcat'];
      $myserchQuery='and (r.'.$selectVal1.' LIKE "'.'%'.trim($txtvalue).'%'.'" )';
   }
   else{
      $myserchQuery='and (sp.'.$selectVal.' LIKE "'.'%'.trim($txtvalue).'%'.'" )';
   }


   
 
     
   
   
   
   
  /* echo "select * from skills_profiles where ".$_POST['skillcat']." Like '%".trim($_POST['postField'])."%'";
   exit;*/
   
    //$myserchQuery=mysql_query("select * from skills_profiles where ".$_POST['skillcat']." Like '%".trim($_POST['postField'])."%'");
 }
 else
 {
 $myserchQuery='';

 }
 	 // $sql="SELECT p.photo,p.date,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id ".$myserchQuery."";
	
	    $sql="SELECT p.photo,p.date,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, r.date, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.vertical_id='".VERTICAL_ID."' and  uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id ".$myserchQuery." limit ".$_REQUEST['start'].",".$rec_inc;
	
 
	  $run=$db->query_silent($sql);
	  $i=0;
	  while($data=$db->fetch_array($run))
		/*$seljobs=mysql_query("select * from post_job order by id desc limit 0,4");
while($rowjobs=mysql_fetch_array($seljobs))*/
{     $candidateid=$data['id'];

		?>
        <!--<div class="jobCard">
          <p><a href="skill-details.php?sid=<?php //echo $data['id']?>"><?php //echo $data['skills_profile']?> </a></p>
          <div class="stats"><strong>Fixed Price: <?php //echo CURRENCY?><?php //echo $data['gt_amount']?>/<?php //echo $data['gt_time_period']?></strong></div>
          <p><?php //echo $data['profile_summary']?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="prof"><span>Skills:</span> <a href="#"><?php //echo $data['skill_keywords']?></a></div>
          <div class="prof"><span><img src="images/buyer_rating_small.png" alt="" /></span>&nbsp;&nbsp;<a href="#">zimbah</a>&nbsp;&nbsp;<span><img src="images/us.gif" alt="" /></span>&nbsp;&nbsp;United States  </div>
        </div>-->
        
        <div class="border-rightLast">
       
          <div class="news-img"><a href="skill-details.php?sid=<?php echo $data['id']?>"><img src="profile_img/<?php echo $data['photo']?>" alt="" border="0" height="70" width="70" /></a></div>
          <div class="news-tex">
              <div class="prof"><strong>Title:</strong>&nbsp;&nbsp;&nbsp;<a href="skill-details.php?sid=<?php echo $data['id']?>"><?php echo $data['skills_profile']?> </a></div>
            <div class="prof"><strong>Skills:</strong>&nbsp;&nbsp;&nbsp; <a href="#"><?php echo $data['skill_keywords']?></a><!--<a href="#">Ghostwriting</a>,<a href="#"> Editing</a>, <a href="#">eBooks </a>--></div>
           <div class="stats"><strong>Fixed Price:&nbsp;&nbsp; <!--$50 - $150--><?php echo CURRENCY?><?php echo $data['gt_amount']?>/<?php echo $data['gt_time_period']?></strong></div>
           <?php echo $data['date']?>
           
           <?php   $feedback_avg="SELECT * FROM all_feedbackS WHERE status='0' and user_id='".$candidateid."'";
	            $feedbackavg_record=mysql_query($feedback_avg);
	           $avg_recoeds=mysql_fetch_array($feedbackavg_record);
			   $statuss=$avg_recoeds['status'];
			   
			   $useridd=$avg_recoeds['user_id']; 
			      echo $recidd=$avg_recoeds['recruiter_id'];
				  echo $candidateid;
				  if($statuss=='') {?>
				  
				   <div class="prof"><strong>You want to Feedback Given on this candidate :</strong>&nbsp;&nbsp;&nbsp; <a href="feedback.php?recuiter_id=<?php echo $user_id; ?>&candidate_id=<?php echo $candidateid; ?>">Click here</a></div>
			<?php 	  } ?>
                </div>
          <div class="clear"></div>
        </div>
         <?php /*?><div class="jobCard">
          <p><a href="job_details.php?jid=<? echo $rowjobs['id'] ;  ?>"><? echo $rowjobs['title'] ;  ?> </a></p>
          <div class="stats"><strong>Fixed Price: <!--$50 - $150-->$<? echo $rowjobs['budget'] ;  ?>-$<? echo $rowjobs['budgetmax'] ;  ?></strong> &nbsp; |&nbsp;  E-books and Blogs   | &nbsp; Posted: 6h, 40m ago&nbsp;  | &nbsp; Ends: 29d, 17h &nbsp; |&nbsp;<a href="#"> 0 Proposals </a></div>
          <p><? echo $rowjobs['description'] ;  ?>. ...<span><a href="#"><img src="images/arrow-spa.gif" alt="" /></a></span> </p>
          <div class="prof"><span>Skills:</span> <a href="#">Ghostwriting</a>,<a href="#"> Editing</a>, <a href="#">eBooks </a></div>
          <div class="prof"><span><img src="images/buyer_rating_small.png" alt="" /></span>&nbsp;&nbsp;<a href="#">zimbah</a>&nbsp;&nbsp;<span><img src="images/us.gif" alt="" /></span>&nbsp;&nbsp;United States  </div>
        </div><?php */?>
		<? $i++; }  ?>
          </div>
      </div>
        <div class="box-bottom-RLast"></div>
    </div>
      <?php
	  
		/*if($_POST['postField']!='')
		{
		
		 $txtvalue= $_POST['postField'];
   
   $selectVal = $_POST['skillcat'];
   if($selectVal=="RAte"){
   $selectVal1 = $_POST['skillcat'];
   }

   $myserchQuery1='and (sp.'.$selectVal.' LIKE "'.'%'.trim($txtvalue).'%'.'" or r.'.$selectVal1.' LIKE "'.'%'.trim($txtvalue).'%'.'" )';*/
   
   if($_POST['postField']!='')
 {
   $txtvalue= $_POST['postField'];
   
   $selectVal = $_POST['skillcat'];
   if($selectVal=="gt_amount"){
   
   $selectVal1 = $_POST['skillcat'];
      $myserchQuery1='and (r.'.$selectVal1.' LIKE "'.'%'.trim($txtvalue).'%'.'" )';
   }
   else{
      $myserchQuery1='and (sp.'.$selectVal.' LIKE "'.'%'.trim($txtvalue).'%'.'" )';
   }

   
		//$myserchQuery1='and (sp.skills_profile LIKE "'.'%'.trim($value).'%'.'" or sp.skill_keywords LIKE "'.'%'.trim($value).'%'.'" or r.gt_amount LIKE "'.'%'.trim($value).'%'.'" )';
		 //$myserchQuery=mysql_query("select * from skills_profiles where ".$_POST['skillcat']." Like '%".trim($_POST['postField'])."%'");
		}
		else
		{
		
		$myserchQuery1='';
		}
				
		 $sql1="SELECT p.photo,p.date,sp.skills_profile,sp.skill_keywords,sp.profile_summary,r.gt_currency,r.gt_amount,r.gt_time_period, r.date, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.vertical_id='".VERTICAL_ID."' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id ".$myserchQuery1."";
		
		
		$run1=$db->query_silent($sql1);
		$nume=mysql_num_rows($run1);
	  
	  
       echo "<table align = 'center' width='60%' style='margin-left:100px;'  border=0><tr><td  align='center'>";
        
        if($_REQUEST['start']>0) {
        
        print "<a href='browse-skills.php?start=".($_REQUEST['start']-$rec_inc)."'>PREV</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        
        }
        
        
        for($i=0;$i<ceil($nume/$rec_inc);$i=$i+1){    // ceil is used for rounding off
        
        if(($i*$rec_inc) <> $_REQUEST['start']){
        
        echo "&nbsp;&nbsp;<strong><a
        
        href='browse-skills.php?start=".($i*$rec_inc)."'>".($i+1)."</a></strong>&nbsp;&nbsp;";
        
        }
        
        else { echo "".($i+1)."";}    
        
        }
        
        if((($i-1)*$rec_inc) > $_REQUEST['start']) {
        
        print "&nbsp;&nbsp;&nbsp;&nbsp; <a
        
        href='browse-skills.php?start=".($_REQUEST['start']+$rec_inc)."'>NEXT</a>";}
        
        echo "</td></tr></table>";
        ?>
       
    
    
    
        
      </div>
		<div class="clear"></div>
      </div>
      
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div>
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
