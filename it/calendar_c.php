






 <?php
 
	include('init.php');
	//print_r($_SESSION);exit;
	
/*	 $i=$s->is_set('R_USER_ID');
	// $j =$s->is_set('USER_ID');
    if($i ==false || $j ==false ){
		header('location:index.php');
	}*/
	//print_r($_GET);
	if(isset($_GET['canditId'])){
		
	$s->set('CAND_ID', $_GET['canditId']);
	//echo $user_id =$s->value('CAND_ID');
		
	}
  ?>


<script type='text/javascript' src='./js/jquery.js'></script>
<link href='./css/style.css' rel='stylesheet' type="text/css">
<script type='text/javascript'>
$(document).ready(function(){
  function showLoader(){
    $('.search-background').fadeIn(200);
  }
  function hideLoader(){
   $('.search-background').fadeOut(200);
  }
  
  
  $("#calendar").load("./disp-cal_candidate.php?year=&month=All&skill=Allskills");
  //$('#seldate').change(function(){
	  /*
     var getYear = $('#seldate :selected').val();
     showLoader();
     $.get("./disp-cal.php","year="+getYear,function(result){
	hideLoader();
        $("#calendar").html(result);
     });
  */
  //});
});
</script>
<script type="text/javascript">
function privew(year,viewtype){

	
	 var getYear = year;
	  //var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal_candidate.php","year="+getYear+"&month=All",function(result){
        $("#calendar").html(result);
	 });
	
}
function go(){
	
	 var getYear = document.getElementById('getYear').value;
	 var getMonth = document.getElementById('getMonth').value;
	 var getSkill = document.getElementById('getSkill').value;
	//showLoader();
     $.get("./disp-cal_candidate.php","year="+getYear+"&month="+getMonth+"&skill="+getSkill,function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function goday(){
	
	//var getYear = 22;
	//showLoader();
	 // var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal_candidate.php","day=today&skill=",function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function dayprev(day){
	
//	var day = 22;
	  //var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal_candidate.php","day="+day+"&skill=",function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function goweek(){
	
	 // var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("./disp-cal_candidate.php?week=week&skill=" );
}

function weekprev(week){
	
//	var day = 22;
	 //var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal_candidate.php","week="+week+"&skill=",function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}


function gomonth(){
	
	//var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("disp-cal_candidate.php?month=&myear=&skill=");
}

function monthprev(year, month, staus){
	
	var month=month;
	var year=year;
	var status=staus;
	//alert(staus);
	//alert(year);
	//alert(month);
	//var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("./disp-cal_candidate.php?month="+month+"&myear="+year+"&status="+status+"&skill=");
  /*   $.get("./disp-cal.php","month="+month+"&myear="+year,function(result){
	
        $("#calendar").html(result);
	 });	
	*/
}


function goyear(){
	
	//var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("./disp-cal_candidate.php?year=&month=All&skill=");
}

</script>


<body>
<div id="outer">
<div class="men2">
<div class="header">
<?php echo $get_template->process('global_header.php')?>
</div>




<div class='search-background'><img src='./loader.gif'></div>


<br />



<div id='menu1'>

		<span  class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onClick="goday()">DAY</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onClick="goweek()">WEEK</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onClick="gomonth()">MONTH</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onClick="goyear()">YEAR</span>	
        
</div>
<br />

<div id='calendar' align="center"  style="width:auto; background-color:white; margin-bottom: 20px;"></div>



</div>

























<?php echo $get_template->process('global_footer.php')?>
</div>
</div>
</body>






