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
	 
				$sql1="SELECT * FROM `user_login_details` WHERE  `vertical_id`='".VERTICAL_ID."' and `login_id` like '".$db->dataTrim($_REQUEST['email'])."'";
				$result=$db->query_silent($sql1);
				$row=$db->fetch_array($result);
				  $count=$db->num_rows($db->query_silent($sql1)); 
				 if($count=='1')
				 {
				  $type=$row['type'];
				  }
				  
				if($db->num_rows($db->query_silent($sql1))==0 or ($db->num_rows($db->query_silent($sql1))==1 and $db->dataTrim($_REQUEST['user'])!=$type))
				{
				 
					 $sql="INSERT INTO  `".database."`.`user_login_details` ( `name`, `login_id`, `password`, `type`, `date`, `signup_date`, `status`,`vertical_id`) VALUES ( '".$db->dataTrim($_REQUEST['username'])."', '".$db->dataTrim($_REQUEST['email'])."', '".md5($db->dataTrim($_REQUEST['password']))."', '".$db->dataTrim($_REQUEST['user'])."', now(), now(),'".ENABLE."','".VERTICAL_ID."')"; 
			
			    $db->query_silent($sql);
			$user_id=$db->insert_id();  
					
			//add user in profile table
		// $sql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `first_name`, `last_name`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`profession_type`) VALUES ( '".$user_id."', '".$db->dataTrim($_REQUEST['first_name'])."', '".$db->dataTrim($_REQUEST['last_name'])."', '".$db->dataTrim($_REQUEST['gender'])."', '".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',  '".$db->dataTrim($_REQUEST['email'])."', now(),'".ENABLE."', '".$db->dataTrim($_REQUEST['company_details'])."', '".$db->dataTrim($_REQUEST['professinol'])."');";
		 
		 	echo  $sql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `username`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`profession_type`,`vertical_id`) VALUES ( '".$user_id."', '".$db->dataTrim($_REQUEST['username'])."','".$db->dataTrim($_REQUEST['gender'])."', '".$db->dataTrim($_REQUEST['dob_year']."-".$_REQUEST['dob_month']."-".$_REQUEST['dob_date'])."',  '".$db->dataTrim($_REQUEST['email'])."', now(),'".ENABLE."', '".$db->dataTrim($_REQUEST['company_details'])."', '".$db->dataTrim($_REQUEST['professinol'])."','".VERTICAL_ID."');";exit;
		 
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
 <script src="http://code.jquery.com/jquery-latest.js"></script>
 
 
 <script>
$("#showr").click(function () {
  $("div").first().show("fast", function showNext() {
    $(this).next("div").show("fast", showNext);
  });
});

$("#hidr").click(function () {
  $("div").hide(1000);
});
</script>



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


<div id="outer">
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
<link rel="stylesheet" href="cssimg/global.css">
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>-->
    







  
  
<!-- jquery starrt-->
 <link rel="stylesheet" href="cssimg/global.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script src="jsimg/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});
		});
	</script>
</head>

<body>

<div id="slide">

<div id="container1">
    
		<div id="example1">
        
		
            
			<div id="slides">
           
				<div class="slides_container">
                
                
                
                
					<a href="" target="_blank"><img src="img/slide.jpg" /></a>
                    
					<a href=""><img src="img/slide-1.jpg" /></a>
                    
					<a href=""><img src="img/slide-2.jpg" /></a>
                    
					<a href=""><img src="img/slide-3.jpg" /></a>
                    
					<a href=""><img src="img/slide-4.jpg" /></a>
                    
					<a href=""><img src="img/slide-5.jpg" /></a>                 
					                                        
                    <a href=""><img src="img/slide-6.jpg" /></a>
                    
                    
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
                
                
                
                
                
			</div>
			
		</div>
		
	</div>
</div>
  <!-- jquery close -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <div class="panel-left">
      <h2>
You have skills in demand?</h2><br /><br />
      <p>We have the platform to maximize your market value, now and in the future.  </p>
      <p>Skillsapien is an online skill futures exchange - we enable open market bidding on current or future availability of skilled professionals worldwide.</p>
      <p>You can sign up as a skill-provider (a Candidate) and put your skills and availability to the global market, to determine your best possible market value. </p>
      
    </div>
    <p><?php echo $header_login_error;?></p>
	<div class="panel-right">
	
      <?php 
	  $get_template->set('msg', $msg);
	  echo $get_template->process('sign-up.php')?>
      
    </div>
    <div class="clear"></div>
  </div>
  
  
 
  
</div>

  <div id="service">

<div style="padding-top:10px; margin-left:50px;" id="service1">
<div id="servicebox">
<img src="images/newsicon.png"><br><div class="servicetext">Latest News</div>
</div>
</div>

<div style="padding-top:10px;" id="service2">
<div id="servicebox">
<img src="images/charticon.png"><br><div class="servicetext">Skill Chart</div>
</div>
</div>

<div style="padding-top:10px;" id="service3">
<div id="servicebox">
<img src="images/bidicon.png"><br><div class="servicetext">Bid on Skills</div>
</div>
</div>

<div style="padding-top:10px;" id="service4">
<div id="servicebox">
<img src="images/skillicon.png" height="64" width="107" style="margin-left:40px;"><br><div class="servicetext">Skill Categories
</div>
</div>
</div>

</div>

  
  
  
  
  
  

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>

</div>
</body>
</html>
