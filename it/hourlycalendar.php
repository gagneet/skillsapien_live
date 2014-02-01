<!DOCTYPE HTML>
<html>

<head>
  <title>Skillsapien Hourly calendar</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  
  
  <link rel="stylesheet" type="text/css" href="css/hourcalenderstyle.css" title="style" />
  <link rel="stylesheet" type="text/css" href="css/style_accord.css" title="style" />
  <!--<link rel="stylesheet" type="text/css" href="css/style.css" title="style" />-->
 </head>
 

<body>
<div id="outer">
<div class="men">
<div class="header">
 <?php
 
	include_once('init.php');
	Is_valid_uesr();
  ?>
  <link href='./css/style.css' rel='stylesheet' type="text/css">
  <?php echo $get_template->process('global_header.php')?>
</div>

  <div id="main">
<script type="text/javascript" src="js/hourllyjquery.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>
<script type="text/javascript">


jQuery().ready(function(){	
	// applying the settings
	var getSkill = '';
	var currentTime = new Date()
	var month = currentTime.getMonth() + 1
	var day = currentTime.getDate()
	var year = currentTime.getFullYear()
	var todayDate =year+"-"+month+"-"+day;
	//alert(todayDate);

	$("#monthCalendar").load("gethourcalendar.php?month=&myear=&skill="+getSkill);
	$("#canditList").load("./gethourcalendar.php?canditList="+todayDate);
	/*jQuery('#theMenu').Accordion({
		active: 'h3.selected',
		header: 'h3.head',
		alwaysOpen: false,
		animated: true,
		showSpeed: 400,
		hideSpeed: 800
	});*/
	
});	

function monthprev(year, month, staus){
	
	var month=month;
	var year=year;
	var status=staus;
	var getSkill = '';
	$("#monthCalendar").load("./gethourcalendar.php?month="+month+"&myear="+year+"&status="+status+"&skill=");
}

function canditList(date){
	$("#canditList").load("./gethourcalendar.php?canditList="+date);
	//alert(date);
}

function getAvaliableTime(cId, date){
	//alert(cId);
	//alert(date);
	$("#avaliableTime").load("./gethourcalendar.php?canditId="+cId+"&date="+date);
}
</script>

<div id="mid">
<div id="outer1">
<div id="outerrow1">
Hourly Calendar View
</div>


<div id="outerrow2">
<div id="outercol1">
<div id="monthCalendar">
datepicker
</div>
<div id="timezone"><br>
Time Zone
</div>
<div id="avilcolor">
<h2>Calendar Legend:</h2><br>
<p>- Blue<br>
- Green<br>
- Yellow<br>
- Orage<br>
- Red<br></p>

</div>
</div>




<div id="outercol2">
<div id="avaliableTime">
<br>
<br>
 <p>Please select any candidate to view unavaliable time </p>
</div>

<div id="site_content">
      <div class="sidebar"  id="canditList">
       
      <!-- <ul id="theMenu">
			<li>
				<h3 class="head"><a href="javascript:;">1</a></h3>
				<ul>
					<li><a href="index.php">Home Loans</a></li>
					<li><a href="index.php">Home Loans</a></li>
					<li><a href="index.php">Home Loans</a></li>

				</ul>
			</li>
            </ul>-->
     </div>
     </div>
     </div>
     </div>   
     </div>      
     </div>    
     </div>
     </div>    
        <?php echo $get_template->process('global_footer.php')?>  
      
    </div>
</body>
</html>
