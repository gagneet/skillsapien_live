<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skillsapien</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" /><!--Date jquery-->



    
    
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
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
	</script>
    
    
    

<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
</head>

<?php

include'./it/init.php';
include'function.php';


?>
<body>

<div id="wrapper">
<div id="containerweb">
<div id="header">
<div id="logo">
<img src="images/logo.png" />
</div>
<!--<div id="headerlogin">
<input type="text" size="20" /><input type="text" size="20" /><img src="images/loginbtn.png" align="absbottom"  />
</div>-->
<div id="menubox">
<menu>
<ul style="text-align:center; vertical-align:middle;">
<li><a href="" >Home</a></li>
<li><img src="images/buttondivider.png" align="middle" /></li>
<li><a href="" >About Skillsapien</a></li>
<li><img src="images/buttondivider.png" align="middle" /></li>
<li><a href="" >Services</a></li>
<li><img src="images/buttondivider.png" align="middle" /></li>
<li><a href="" >Beta Release</a></li>
<li><img src="images/buttondivider.png" align="middle" /></li>
<li><a href="" >Contact us</a></li>
</ul>
</menu>
</div>
</div>






<div id="text" >

<form action="" method="post" name="bigSearch">
<table align="center">
<tr>
<td colspan="5"><p>Skill Search Criteria</p></td>
</tr>


<tr>
<td>Industry *</td>
<td>
<select name="industry" id="industry">
<option value="" >select</option>
<option value="1"   <?php if($_POST['industry'] == 1){ ?> selected="<?php echo "selected"; } ?>" >IT</option>
<option value="2"  <?php if($_POST['industry'] == 2){ ?> selected="<?php echo "selected"; } ?>"  >Mining</option>
</select>
</td>
<td>Location</td>
<td>
<?php
$countriesArray = country();
$countiresId =$countriesArray[0];
$countiresName =$countriesArray[1];
$countiesCount =$countriesArray[2];
//print_r($countiresId);

/*print'<pre>';
print_r($res);
print'</pre>';
*/
//echo $res[2];
echo "<select name='county'>";
echo '<option value="" >Select Country</option>';
for($i=0; $i<$countiesCount; $i++){
	
	echo '<option value="'.$countiresId[$i].'" id="'.$countiresId[$i].'" >'.$countiresName[$i].'</option>';
}
echo '</select>';
//exit;
?>
</td> 
<td><input type="text" size="15" value="<?php echo $_POST['country']; ?>"  name="country"  id="country" onFocus="if(this.value=='country') this.value=''" onBlur="if(this.value=='') this.value='country'" /></td>
</tr>
<tr>
<td>Skill keywords *</td>
<td colspan="4"><input type="text" size="65"  name="skillkeyword" value="<?php echo $_POST['skillkeyword']; ?>" id="skillkeyword"/></td>
</tr>


<tr>
<td colspan="5">
<table cellpadding="0" cellspacing="0" width="580px" class="color">
<tr>
<td colspan="2" width="300px"><p>Availability Required</p></td>
<td colspan="2" width="300px"><p>Rates</p></td>
</tr>


<tr>
<td width="60px">From Date *</td>
<td >


  <input  id="fdate" name="fdate" size="20" onClick="javascript:NewCal('fdate','ddmmyyyy',true,12)" class="scriptbreadcrumb" value="<?php echo $_POST['fdate']; ?>">
      <a href="javascript:NewCal('fdate','ddmmyyyy',true,12)"><img alt="Pick a date" src="images/cal.gif" height="16" border="0" width="16"></a>

  
</td>

<td>Ideal Rate</td>
<td><input type="text" size="20"  name="rate" id="idealrate"  value="<?php echo $_POST['rate']; ?>"/></td>
</tr>

<tr>
<td style="line-height:5px;">&nbsp;</td>
</tr>

<tr>
<td width="86px">To Date *</td>
<td>
<input type="text" name="todate"  size="20" id="todate" onClick="javascript:NewCal('todate','ddmmyyyy',true,12)" value="<?php echo $_POST['todate']; ?>">
 <a href="javascript:NewCal('todate','ddmmyyyy',true,12)"><img alt="Pick a date" src="images/cal.gif" height="16" border="0" width="16"></a>

</td>

<td>Max Rate</td>
<td><input type="text" size="20"   id="maxrate" name="maxrate" value="<?php echo $_POST['maxrate']; ?>"/></td>
</tr>
<tr>
<td style="line-height:10px;">&nbsp;</td>
</tr>
<tr>
<td colspan="5"  class="button">
<input type="submit" name="sub" style="background-image: url('./images/submit.png');width:121px;height:27px;background-color:#dbe4fb; border:none;cursor:pointer;" value="">
</td>
</tr>
<tr>
<td style="line-height:15px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</form>



<div id="calendar">
<?php
if(isset($_POST['sub']))
{

//print_r($_POST);exit;

 $vertical_id	=$_POST['industry'];
 $city 			=$_POST['city'];
 $country 		=$_POST['country'];
 $skillkeyword	=$_POST['skillkeyword'];
 $fdate 		=$_POST['fdate'];
 $todate 		=$_POST['todate'];
 $lrate			=$_POST['rate'];
 $maxrate		=$_POST['maxrate'];


$fyear = strrev($fdate); 
	
	$yearExplode =explode("-", $fyear);
	$fyear =strrev($yearExplode[0]);
	if(strlen($yearExplode[1]) ==1){
		$fyear.= "-0".strrev($yearExplode[1]);
	}else{
		$fyear.= "-".strrev($yearExplode[1]);
	}
	if(strlen($yearExplode[2]) ==1){
		$fyear.= "-0".strrev($yearExplode[2]);
	}else{
		$fyear.= "-".strrev($yearExplode[2]);
	}

//echo $fyear;


// reversing the year value and adding the '0' character in month and day value if it is not there ....
	$tyear = strrev($todate); 
	$yearExplode =explode("-", $tyear);
	$tyear =strrev($yearExplode[0]);

	if(strlen($yearExplode[1]) ==1){
		$tyear.= "-0".strrev($yearExplode[1]);
	}else{
		$tyear.= "-".strrev($yearExplode[1]);
	}
		
	if(strlen($yearExplode[2]) ==1){
		$tyear.= "-0".strrev($yearExplode[2]);	
	}else{
		$tyear.= "-".strrev($yearExplode[2]);
	}


//echo $tyear; exit;

		// new like condition on 2-jun written by naresh 
		$searchKey =", skills_profiles.skill_keywords";
		$getSkillarray =array();
		$getSkillarray =explode(",", $skillkeyword);
		$skillCount =count($getSkillarray);
		$serchCondition="RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id AND( ";
		for($i=0; $i<$skillCount; $i++){
			if($i ==0){
				$serchCondition.=" (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";	
			}else{
				$serchCondition.="AND (  skills_profiles.skill_keywords LIKE '%".$getSkillarray[$i]."%')";
				}
		}
		$serchCondition.=" ))";





// Difference between from date and to date 
$days = (strtotime($tyear) - strtotime($fyear)) / (60 * 60 * 24);
//print $days; 
$canditIds =array(); 
if($city =='city' || $city ==''){
	$cityConditon ="";
}else{
	$cityConditon ="AND profiles.city ='".$city."'";
}

if($country =='country' || $country ==''){
	$countryConditon ="";
}else{
	$countryConditon ="AND  countries.countries_name='".$country."'";
}

for($i=0; $i<=$days; $i++){

$dateargument = strtotime(date("Y-m-d", strtotime($fyear)) . " +".$i." day");
$dateargument = date("Y-m-d", ($dateargument));
 	  $sql ="SELECT user_login_details.id, user_login_details.name,  user_login_details.type, user_login_details.status,
			 skills_profiles.profile_summary,  skills_profiles.skills_profile,
			profiles.photo, profiles.city, rates.lt_amount, rates.gt_amount, calendar.date, countries.countries_name
			FROM user_login_details ".$serchCondition."
			LEFT JOIN calendar ON ( user_login_details.id = calendar.user_id AND calendar.date !='".$dateargument."' )
			RIGHT JOIN profiles ON (user_login_details.id =profiles.user_id ".$cityConditon.")
			LEFT JOIN rates ON ( user_login_details.id =rates.user_id AND (rates.lt_amount ='".$lrate."' OR rates.gt_amount ='".$maxrate."'))
			LEFT JOIN countries ON (skills_profiles.country = countries.countries_id)
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable' 
			AND user_login_details.vertical_id='".$vertical_id."' 
			  ".$countryConditon."
			 GROUP BY user_login_details.id";
//echo $sql;
//echo "<br><br><br><br>";


 $result =mysql_query($sql);
 $noofcandidates =mysql_num_rows($result);
 
 if($noofcandidates !=0){
	 while ($row =mysql_fetch_assoc($result)){
		 $canditIds[]=$row['id'];		 
	 }
	 //print_r($canditIds); 
 }

}


$canditIds = array_unique($canditIds);
//print_r($canditIds);
 $arrayCount =count($canditIds);
echo '<div style="background-color:white;text-align:left;">';
if($arrayCount ==0){
	echo "<br><br>";
	echo "<center><h3><font style='color:red'>Search result was empty ...</font></h3></center>";
	echo "<br><br>";

}else{
for($i=0; $i<$arrayCount; $i++){
	
	  $sql ="SELECT user_login_details.id, user_login_details.name,  user_login_details.type, user_login_details.status,
			 skills_profiles.profile_summary,  skills_profiles.skills_profile,
			profiles.photo, profiles.city, rates.lt_amount, rates.gt_amount, countries.countries_name, currency.name as cname
			FROM user_login_details 
			RIGHT JOIN skills_profiles ON ( user_login_details.id = skills_profiles.user_id)
			RIGHT JOIN profiles ON (user_login_details.id =profiles.user_id )
			LEFT JOIN rates ON ( user_login_details.id =rates.user_id )
			LEFT JOIN countries ON (skills_profiles.country = countries.countries_id)
			LEFT JOIN currency ON (currency.id = rates.lt_currency)
			WHERE user_login_details.type = 'C'
			AND user_login_details.status = 'enable' 
			AND user_login_details.vertical_id='".$vertical_id."' 
			AND user_login_details.id ='".$canditIds[$i]."'
			 GROUP BY user_login_details.id";
	//ECHO $sql."<br><br><br><br><br>";
	
	$result =mysql_query($sql);
 $noofcandidates =mysql_num_rows($result);
 
 if($noofcandidates !=0){
	 $cdetails='';
	 while ($row =mysql_fetch_assoc($result)){
		/* print '<pre>';
		 print_r($row);	
		  print '</pre>';*/
		  if($row['photo'] ==''){
					$imgName ="defaultProfileimg.png";
				}else{
					$imgName =$row['photo'];
					
				}
				if($vertical_id ==1){
					$rootfolder ="/it";
					$bidLink ="it";
				}elseif($vertical_id ==2){
					$rootfolder ="/mining";
					$bidLink ="mining";
				}
				
				
		$lenStr = strlen($row['profile_summary']);
		$len =20;
		if($lenStr > $len){
 			$replaceStr = substr($row['profile_summary'],0,$len)."..."; 
		}else{
			 $replaceStr = $row['profile_summary']; 
		}
		$profileSummary =$replaceStr;	
			
		  $cdetails.='
					<div class="popuprow">
								<img src=".'.$rootfolder.'/profile_img/'.$imgName.'" height="75px;" width="85px;"   style="float:left; margin-right:10px;"/>
								<div style="margin-left:95px;">
									<b>Title:</b> '.$row['skills_profile'].'<br>				
									<b>Skills:</b> '.$profileSummary.'<br>	
									<b>Rate:</b>Lt Amount: '.$row['cname'].' '.$row['lt_amount'].'    Gt Amount '.$row['cname'].' '.$row['gt_amount'].'<br>
									<a href="'.$bidLink.'/index.php?canditId='.$row['id'].'"><input type="button" value="" id="bidlink" ></a>
									</div>
									</div>';
	 }
	 echo $cdetails;
	 //print_r($canditIds); 
 }
	
	
}
}
echo "<div>";
}
?>
</div>
</div>



<div id="footer">
<div id="footerleft">
<p>Securing tomorrow's skills, today <br />We have the platform to maximize your market value,<br /> now and in the future.</p>
</div>
<div id="footerright">
<div id="icon">
<img src="images/news.png" alt="News" title="News" style="cursor:pointer;"/>
<img src="images/chart.png"  title="Charts" style="cursor:pointer;"/>
<img src="images/facebook.png"  title="Facebook" style="cursor:pointer;"/>
<img src="images/g.png"  title="Google Plus" style="cursor:pointer;"/>
<img src="images/in.png"  title="linkedin.in" style="cursor:pointer;"/>
<img src="images/twiter.png"  title="Twiter" style="cursor:pointer;"/>
<img src="images/youtube.png"  title="Youtube" style="cursor:pointer;"/>
</div>
</div>
</div>
<div id="footermenu">
<menu class="footer">
<ul style="text-align:center; vertical-align:middle;">
<li>Home</li>
<li>|</li>
<li>Browse Skills</li>
<li>|</li>
<li>Browse Jobs</li>
<li>|</li>
<li>Browse Trends*</li>
<li>|</li>
<li>About Skillsapien</li>
<li>|</li>
<li>Beta Release</li>
</ul>
</menu>
<p>© 2011 skillsapien.com - All Rights Reserved.  &nbsp;&nbsp; Terms |Privacy</p>
</div>


</div>
</div>
</div>
</body>
</html>
