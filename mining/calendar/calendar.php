
<script type='text/javascript' src='./jquery.js'></script>
<link href='./style.css' rel='stylesheet' type="text/css">
<script type='text/javascript'>
$(document).ready(function(){
  function showLoader(){
    $('.search-background').fadeIn(200);
  }
  function hideLoader(){
   $('.search-background').fadeOut(200);
  }
  
  
  $("#calendar").load("./disp-cal.php?year=&month=All&skill=All");
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
	  var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal.php","year="+getYear+"&month=All&skill="+getSkill,function(result){
        $("#calendar").html(result);
	 });
	
}
function go(){
	
	 var getYear = document.getElementById('getYear').value;
	 var getMonth = document.getElementById('getMonth').value;
	 var getSkill = document.getElementById('getSkill').value;
	//showLoader();
     $.get("./disp-cal.php","year="+getYear+"&month="+getMonth+"&skill="+getSkill,function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function goday(){
	
	//var getYear = 22;
	//showLoader();
	  var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal.php","day=today&skill="+getSkill,function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function dayprev(day){
	
//	var day = 22;
	  var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal.php","day="+day+"&skill="+getSkill,function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}

function goweek(){
	
	  var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("./disp-cal.php?week=week&skill=" );
}

function weekprev(week){
	
//	var day = 22;
	 var getSkill = document.getElementById('getSkill').value;
     $.get("./disp-cal.php","week="+week+"&skill="+getSkill,function(result){
	//hideLoader();
        $("#calendar").html(result);
	 });	
}


function gomonth(){
	
	var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("disp-cal.php?month=&myear=&skill="+getSkill);
}

function monthprev(year, month, staus){
	
	var month=month;
	var year=year;
	var status=staus;
	//alert(staus);
	//alert(year);
	//alert(month);
	var getSkill = document.getElementById('getSkill').value;
	$("#calendar").load("./disp-cal.php?month="+month+"&myear="+year+"&status="+status+"&skill="+getSkill);
  /*   $.get("./disp-cal.php","month="+month+"&myear="+year,function(result){
	
        $("#calendar").html(result);
	 });	
	*/
}


function goyear(){
	
	$("#calendar").load("./disp-cal.php?year=&month=All");
}

</script>

<div class='search-background'><img src='./loader.gif'></div>
<div id='content' align=center>
	  <span style='margin-left: 0px;'>
 
      Skill:
      <select name="getSkill" id="getSkill" >
      	<option >Allskills</option>
        <option >Oracle</option>
        <option >PHP</option>
        <option >Java</option>
        <option >DBA</option>
        <option >.Net</option>
        <option >Jsp</option>
        <option >linux</option>
        </select>
        
      	
       Month: <select id='getMonth' name="getMonth">
      											<?php
												$montharray =array('','Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
												echo "<option value='All'>Select All</option>";
												for($i=1; $i<13; $i++){
												echo "<option value='".$i."'>".$montharray[$i]."</option>";
												}
												?>
                                                </select>
      									Year:<select id='getYear' name="getYear">
		    <?php

		       for($i=2000;$i<=date('Y')+3;$i++){ 
			   if($i == date('Y')) {
				   $selected ="selected=selected";
			   }else{
				   $selected="";
			   }
			  $option= "<option ".$selected.">".$i."</option>";
			  echo $option;
		       }
		    ?>
	  </select>
      <input type="button" name="go" id="go" value="Go" onclick="go()"/>
     
      </span>
</div>
<br />
<div id='menu'>

		<span  class="calendermenu" style="margin-left:500px; font-size:14px; font-weight:bold; color:green;" onclick="goday()">DAY</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onclick="goweek()">WEEK</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onclick="gomonth()">MONTH</span>
        <span class="calendermenu" style="font-size:14px; font-weight:bold; color:green;" onclick="goyear()">YEAR</span>	
        
</div>
<br />
<div id='calendar' align="center"  style="width:auto;"></div>

<div align=center></div>