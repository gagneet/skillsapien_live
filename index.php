<?php

require('init.php');

$check=0;

$_SESSION['test']=$_POST['password'];

if($s->is_set('R_USER_ID')==true &&  $s->is_set('USER_LOGIN')==true)
{
    header('location:recruiters-dashboard.php');
    $check=1;
}
if($s->is_set('USER_ID')==true &&  $s->is_set('USER_LOGIN')==true )
{
    header('location:candidate-dashboard.php');
    $check=1;
}


    /*

    Sign up

    */
    if(@$_REQUEST['data']=="data")
        {
        /*action=add_user& =radio&first_name=sdfdsf&last_name=sdf&email=dsfdsfdsf&confirm_email=dsfds&password=fdsf&c_password=dsfdsf&gender=radio&dob_date=2&dob_month=January&dob_year=1986*/
        //*********************add user in login tabel

                $sql1="SELECT * FROM `user_login_details` WHERE `login_id` like '".$db->dataTrim($_REQUEST['email'])."'";
                $result=$db->query_silent($sql1);
                $row=$db->fetch_array($result);
                  $count=$db->num_rows($db->query_silent($sql1));
                 if($count=='1')
                 {
                  $type=$row['type'];
                  }

                if($db->num_rows($db->query_silent($sql1))==0 or ($db->num_rows($db->query_silent($sql1))==1 and $db->dataTrim($_REQUEST['user'])!=$type))
                {

                    $sql="INSERT INTO  `".database."`.`user_login_details` ( `name`, `login_id`, `password`, `type`, `date`, `signup_date`, `status`) VALUES ( '".$db->dataTrim($_REQUEST['username'])."', '".$db->dataTrim($_REQUEST['email'])."', '".md5($db->dataTrim($_REQUEST['password']))."', '".$db->dataTrim($_REQUEST['user'])."', now(), now(),'".ENABLE."')";

                $db->query_silent($sql);
            $user_id=$db->insert_id();

            //add user in profile table
        // $sql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `first_name`, `last_name`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`profession_type`) VALUES ( '".$user_id."', '".$db->dataTrim($_REQUEST['first_name'])."', '".$db->dataTrim($_REQUEST['last_name'])."', '".$db->dataTrim($_REQUEST['gender'])."', '".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',  '".$db->dataTrim($_REQUEST['email'])."', now(),'".ENABLE."', '".$db->dataTrim($_REQUEST['company_details'])."', '".$db->dataTrim($_REQUEST['professinol'])."');";

             $sql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `username`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`profession_type`) VALUES ( '".$user_id."', '".$db->dataTrim($_REQUEST['username'])."','".$db->dataTrim($_REQUEST['gender'])."', '".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',  '".$db->dataTrim($_REQUEST['email'])."', now(),'".ENABLE."', '".$db->dataTrim($_REQUEST['company_details'])."', '".$db->dataTrim($_REQUEST['professinol'])."');";

                    if($db->query_silent($sql))
                    {

                    $s->set('sign_up',"true");
                    $s->set('USER_TYPE',$_REQUEST['user']);


                        if($_REQUEST['user']=="C")
                        {
                             $s->set('C_FORM','1');
                             $s->set('UESR_ID',$user_id);
                             header('location:sign-up-candidate-profile.php');
                        }
                        if($_REQUEST['user']=="R")
                        {

                            $s->set('R_FORM','1');
                            $s->set('R_USER_ID',$user_id);
                            header('location:recruiter-registration.php');

                        }
                    }

                }
                else
                {
                   $msg=$error_msg[3];
                }

        ////*****************************
       }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
<!--<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />
<script src="js/sign-up.js" type="text/javascript" language="javascript1.1"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $(".fancybox").fancybox();
    });
    </script>-->
    <style type="text/css">

#dhtmltooltip{
position: absolute;
width: 200px;
border: 0px solid black;
padding: 10px;
background-color: lightyellow;
visibility: hidden;
z-index: 100;
/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}

</style>
</head>
<body>
<div id="dhtmltooltip"></div>

<script type="text/javascript">

/***********************************************
* Cool DHTML tooltip script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var offsetxpoint=-60 //Customize x offset of tooltip
var offsetypoint=20 //Customize y offset of tooltip
var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thecolor, thewidth){
if (ns6||ie){
//if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var rightedge=ie&&!window.opera? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20
var bottomedge=ie&&!window.opera? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20

var leftedge=(offsetxpoint<0)? offsetxpoint*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth)
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=ie? ietruebody().scrollLeft+event.clientX-tipobj.offsetWidth+"px" : window.pageXOffset+e.clientX-tipobj.offsetWidth+"px"
else if (curX<leftedge)
tipobj.style.left="5px"
else
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetxpoint+"px"

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight)
tipobj.style.top=ie? ietruebody().scrollTop+event.clientY-tipobj.offsetHeight-offsetypoint+"px" : window.pageYOffset+e.clientY-tipobj.offsetHeight-offsetypoint+"px"
else
tipobj.style.top=curY+offsetypoint+"px"
tipobj.style.visibility="visible"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}

document.onmousemove=positiontip

</script>



<div id="men">

   <?php
   echo $get_template->process('global_header1.php');
  /* if($check=='0') {
   echo $get_template->process('global_header1.php');
   }
   else
   {
    echo $get_template->process('global_header.php');
    }
   */
   ?>

  <div class="canten">
    <div class="panel-left">
      <h2>You have skills in demand? We have the platform to maximize your market value, now and in the future.</h2>
      <p>Skillsapien is an online skill futures exchange - we enable open market bidding on current or future availability of skilled professionals worldwide. </p>
      <p>You can sign up as a skill-provider (a Candidate) and put your skills and availability to the global market, to determine your best possible market value.</p>
      <p>Or you can bid as a Recruiter on the availability of a skilled Candidate, now or into the future.</p>
      <p>Either way, we aim to make the global skills market completely transparent, giving you full visibility on the true demand and supply of a given skill, at any point in time.</p>
    </div>
    <p><?php echo $header_login_error;?></p>
    <div class="panel-right">

      <?php
      $get_template->set('msg', $msg);
      echo $get_template->process('sign-up.php')?>

    </div>
    <div class="clear"></div>
  </div>
  <div class="trendingMain">
  <div class="trendingImgLft"></div>
  <div class="trendingImgRgt"></div>
  <div class="clear"></div>
  </div>
  <div class="canten">
    <div class="box">
      <div class="box-top-R">
        <div class="lattest">Bid on Skills</div>
        <div class="view"><a href="bid_on_skills.php">View All</a></div>
      </div>

      <div class="box-bg" style="overflow:auto; height:290px;">

      <?php
        //$sql="SELECT pj.id as jid,p.photo,pj.title,pj.description,pj.budget FROM `post_job` as pj , profiles as p  WHERE pj.user_id =p.user_id group by p.user_id ORDER BY pj.id DESC limit 50 ";
        $sql="SELECT p.photo,sp.skills_profile,sp.skill_keywords,r.gt_currency,r.gt_amount,r.gt_time_period, uld.id,uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id";
      $run=$db->query_silent($sql);
      while($data=$db->fetch_array($run)) {
      $image=$data['photo'];
     ?>


          <div class="image-box"><a href="skills_profile.php?sid=<?php echo $data['id']?>" onMouseover="ddrivetip('<b><?php echo $data['skills_profile']?></b><br><b>Skill: </b><?php echo $data['skill_keywords']?><br><b>Rate: </b><span><?php echo CURRENCY?><?php echo $data['gt_amount']?>/<?php echo $data['gt_time_period']?></span><br>Bid!','LightSkyBlue', 300)" onMouseout="hideddrivetip()"><?php  $image=$data['photo'];
     if($image=='') {?>
       <img src="images/image_can.gif"  border="0" width="59px" height="59px">
     <?php  } else { ?>
       <img src="profile_img/<?php echo $image; ?>" border="0" width="59px" height="59px">
      <?php  }
    ?></a><br /></div>




      <?php }
      ?>

      </div>

      <?php /*?><div class="box-bg" style="overflow:auto; height:290px;">

      <?php
        $sql="SELECT pj.id as jid,p.photo,pj.title,pj.description,pj.budget FROM `post_job` as pj ,
                            profiles as p
        WHERE pj.user_id =p.user_id group by p.user_id ORDER BY pj.id DESC limit 3    ";
      $run=$db->query_silent($sql);
      while($data=$db->fetch_array($run))
      {?>


          <div class="image-box"><a href="apply-job.php?jid=<?php echo $data['jid']?>"><img src="profile_img/<?php echo $data['photo']?>" alt="" border="0" width="59px" height="59px"></a></div>
          <div class="tex-box"><span>Title</span><a href="apply-job.php?jid=<?php echo $data['job_id']?>"><?php echo $data['title']?> </a> </div>
          <div class="tex-box"><span>Skill</span><font color="#666666" size="-1"><?php echo $data['description']?></font> </div>
          <div class="tex-box"><span>Budget</span> <font color="#1c79a7" size="+2"><sup> <?php echo CURRENCY?> </sup><b><?php echo $data['budget']?></b></font> </div>
          <div class="clear"></div>

      <?php }
      ?>

      </div><?php */?>
      <div class="box-bottom-R"></div>
    </div>
    <div class="box-right" >
      <div class="box-top-R">
        <div class="lattest">Latest News</div>
        <div class="view"><a href="#">View All</a></div>
      </div>

      <div class="box-bg" >
      <div style="overflow:auto; height:290px; width:478px;">

        <!-- Start of VJ changes: 29/1/2012 -->
       <?php
         $sel111="select * from bid order by id desc limit 0, 1";
          $bidresult=mysql_query($sel111);
          $lastbid=mysql_fetch_array($bidresult);

         ?>
        <div class="border-right">
          <div class="news-img"><a href="#"><img src="images/image_can.gif" width="60" height="60" alt="" border="0" /></a></div>
          <div class="news-tex">
          <p><span><?php echo $lastbid['posted_job']; ?> </span><!--<a href="#">--> skill is now trending at $<?php echo $lastbid['total_estimated_cost']; ?> per <?php echo $lastbid['time_uom']; ?> based on latest bids...<!--</a>--></p>
            Bid News | <?php echo $bid_time=date('M d, Y',strtotime($lastbid['bid_date'])); ?></div>
          <div class="clear"></div>
        </div>
         <?php $fetch="select * from interview_success_details where status='1' order by id desc limit 0, 1";
                 $fetch12=mysql_query($fetch);
                   $rowws=mysql_fetch_array($fetch12);
                    $useriddd=$rowws['user_id'];
                      $useriddd=$rowws['user_id'];

                 $query="select * from bid where jobid='".$useriddd."'";
                 $query_result=mysql_query($query);
                   $pos=mysql_fetch_array($query_result);
                   $ratess=$pos['total_estimated_cost'];
                    $timess=$pos['time_uom'];
                    $idsss=$pos['jobid'];

                    $query12="select * from profiles where user_id='".$idsss."'";
                 $query_result12=mysql_query($query12);
                   $pos12=mysql_fetch_array($query_result12);
                   $namess=$pos12['username'];
                   ?>
        <div class="border-right">
          <div class="news-img"><a href="#"><img src="profile_img/<?php echo $pos12['photo']; ?>" width="60" height="60"  alt="" border="0" /></a></div>
          <div class="news-tex">
          <p><span>Candidate <?php echo $namess ; ?> </span><!--<a href="#"> -->has just landed a placement worth $<?php echo $ratess; ?> per <?php echo $timess; ?>!<!--</a>--> </p>
            Placement News | <?php echo $placement_time=date('M d, Y',strtotime($rowws['date'])); ?></div>
          <div class="clear"></div>
        </div>
        <?php  $rec="select * from user_login_details where type='R' order by id desc limit 0, 1";
                 $rec_result=mysql_query($rec);
                   $ecuiter=mysql_fetch_array($rec_result);
                   $recid=$ecuiter['id'];

        $recpro="select * from profiles where user_id='".$recid."' order by user_id desc limit 0, 1";
                 $recpro_result12=mysql_query($recpro);
                   $recuiterdetails=mysql_fetch_array($recpro_result12);
                   $recnamess=$recuiterdetails['username'];
                    $reciddd=$recuiterdetails['user_id'];

                    $sqlss="select count(bidderid)  as total from bid where bidderid='".$reciddd."'";
                 $recordss=mysql_query($sqlss);
                   $rowssss=mysql_fetch_array($recordss);

                     $bidhight="select * from bid where bidderid='".$reciddd."'";
                 $hrecordss=mysql_query($bidhight);
                   $hrepus=mysql_fetch_array($hrecordss);
                ?>

        <div class="border-right">
          <div class="news-img"><a href="#"><img src="profile_img/<?php echo $recuiterdetails['photo']; ?>" width="60" height="60" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>Recruiter <?php echo $recnamess; ?> </span> <!--<a href="#">--> has just placed <?php echo $rowssss['total']; ?> bids! The highest was $<?php echo $hrepus['Max_cel_rate']; ?>/<?php echo $hrepus['max_time_uom']; ?>!<!--</a>-->
            </p>
            Recruiter News | <?php echo $recreg_time=date('M d, Y',strtotime($ecuiter['signup_date'])); ?></div>
          <div class="clear"></div>
        </div>
         <?php  $candi="select * from user_login_details where type='C' order by id desc limit 0, 1";
                 $candi_result=mysql_query($candi);
                   $candidatess=mysql_fetch_array($candi_result);
                   $candiid=$candidatess['id'];

        $canpro="select * from profiles where user_id='".$candiid."' order by user_id desc limit 0, 1";
                 $canpro_result12=mysql_query($canpro);
                   $candetails=mysql_fetch_array($canpro_result12);
                   $cannamess=$candetails['username'];
                    $caniddd=$candetails['user_id'];

            $rates1="select * from rates where user_id='".$caniddd."'";
            $rates_query1=mysql_query($rates1);
            $rate1=mysql_fetch_array($rates_query1);
            $lt_amount1=$rate1["lt_amount"];
            $ltdays=$rate1["lt_time_period"];

                ?>
                <div class="border-right">
          <div class="news-img"><a href="#"><img src="profile_img/<?php echo $candetails['photo']; ?>" width="60" height="60" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>New Candidate <?php echo $cannamess; ?> </span> <!--<a href="#">--> has just register! The ideal rate was $<?php echo $rate1['lt_amount']; ?>/<?php echo $rate1['lt_time_period']; ?>!<!--</a>-->
            </p>
            Candidate News | <?php echo $canreg_time=date('M d, Y',strtotime($candidatess['signup_date'])); ?></div>
          <div class="clear"></div>
        </div>
        <!--<div class="border-right">
          <div class="news-img"><a href="#"><img src="images/news-img.jpg" alt="" border="0" /></a></div>
          <div class="news-tex">
            <p><span>Skillsapien</span> <a href="#"> will soon be featured on [ABC Magazine]! Stay tuned via our Twitter channel and Facebook page!</a>
            </p>
            Skillsapien News | Jan 23rd, 2012</div>
          <div class="clear"></div>
        </div>-->
        <!-- End of VJ changes 30/1/2012 -->

        <!-- VJ Changes: 31/1/2012: -->
        <div class="fb-like-box" data-href="http://www.facebook.com/platform" data-width="292" data-show-faces="true" data-stream="true" data-header="true"></div>
        <!-- End of VJ Changes 31/1/2012-->
        </div>
      </div>
      <div class="box-bottom-R"></div>
    </div>
    <div class="clear"></div>
  </div>
 <div class="cantenIndexs"><div class="panel-lefti"></div></div>

</div>






</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?></body>
</html>
