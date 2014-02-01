<script type='text/javascript' src='./js/jquery.js'></script>
<script type="text/javascript" >
function deleteC(cId, dateVal){
	 $("#avaliableTime").load("./disp-cal_candidate.php?canditDeletId="+cId+"&date="+dateVal);
}
</script>




<?php
//print_r($_POST);exit;
include 'init.php';
//print_r($_SESSION);exit;

if(isset($_GET['canditId']) && $_GET['canditId'] !=''){
	$user_id =$_GET['canditId'];
}elseif($s->is_set('USER_ID')){
	$user_id =$s->value('USER_ID');
}elseif($_GET['canditIt'] !=''){
	$user_id =$_GET['canditIt'];
	//echo $user_id;exit;
}


if(isset($_POST['sub'])){
	
 	$fDateValue =$_POST['fromdate'];
 	$tDateValue =$_POST['todate'];

	//echo $fDateValue;
	$fDate= explode(" ",$fDateValue);
	$tDate= explode(" ",$tDateValue);
	
	//echo "<br>";
	// reversing the year value and adding the '0' character in month and day value if it is not there ....
	$fyear = strrev($fDate[0]); 
	
	$yearExplode =explode("-", $fyear);
	
	$fyear =strrev($yearExplode[0]);
	
	if(strlen($yearExplode[1]) ==1){
		$fyear.= "-0".strrev($yearExplode[1]);
	}else
	{
		$fyear.= "-".strrev($yearExplode[1]);
	}
	

	
	if(strlen($yearExplode[2]) ==1){
		$fyear.= "-0".strrev($yearExplode[2]);
			
	}else
	{
		$fyear.= "-".strrev($yearExplode[2]);

	}
	
	
	// reversing the year value and adding the '0' character in month and day value if it is not there ....
	$tyear = strrev($tDate[0]); 
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
	
	
	
	//echo "from year<br>".$fyear;
	//echo "<br>to year".$tyear;
		
		$interval = date_diff(date_create($fyear), date_create($tyear));

    	 $dateDifference = $interval->format('%a');


	for($i=0; $i<=$dateDifference; $i++){
		
			$newdate = strtotime ( '+'.$i.' day' , strtotime ( $fyear ) ) ;
			 $newdate = date ( 'Y-m-d' , $newdate );
		
		if($i== 0){
			$fromTime =$fDate[1]. " ".$fDate[2];
		}else{
			$fromTime ="12 AM";
		}
		
		if($i== $dateDifference){
			$toTime =$tDate[1]. " ".$tDate[2];
		}else{
			$toTime ="11 PM";
		}
		
		
	 	$recordCheckQuery ="select * from calendar where user_id ='".$user_id."' AND date='".$newdate."' AND from_time='".$fromTime."' AND to_time ='".$toTime."' ";
		 $checkResult = mysql_query($recordCheckQuery);
		 
		$rowCount =mysql_num_rows($checkResult);
		
		if($rowCount ==0){		
	  	$sql ="insert into calendar (id, user_id, date, from_time, to_time) values(NULL,'".$user_id."', '".$newdate."', '".$fromTime."', '".$toTime."')";
				mysql_query($sql);
				header('location:calendar_c.php');
				
		}
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}

?>
<script language="javascript" type="text/javascript" src="./js/datetimepicker.js">
</script>
<script type="text/javascript">
function validateDate(){
	document.getElementById('fdateerror').innerHTML="";
	document.getElementById('todateerror').innerHTML="";

	var fromdate =document.getElementById('fromdate').value;
	var todate =document.getElementById('todate').value;
	var ret=true;
	if(fromdate ==''){
		document.getElementById('fdateerror').innerHTML="<font style='color:red;'>Please select from date</font>";
		ret=false;
	}
	
	if(todate ==''){
		document.getElementById('todateerror').innerHTML="<font style='color:red;'>Please select to date</font>";
		ret=false;
	}

	var fdateValue =fromdate.split(" ");
	var tdateValue =todate.split(" ");

	var fdate =fdateValue[0].split("-");
	//alert(fdate);exit;
	fyear =fdate[2];
	fmonth =fdate[1];
	fday =fdate[0];
	
	var tdate =tdateValue[0].split("-");
	
	tyear =tdate[2];
	tmonth =tdate[1];
	tday =tdate[0];
	
	
	if(parseInt(fyear) > parseInt(tyear)){
		alert('From year should be less than to year');
	    return false;	
	}
	
	if( parseInt(fyear) == parseInt(tyear)){
		
		if( parseInt(fmonth) > parseInt(tmonth)){
			alert('From month should be less than to month');
	    return false;	
		}
		
		if( parseInt(fmonth) == parseInt(tmonth)){
				
				
				if( parseInt(fday) > parseInt(tday)){
					alert('From day should be less than to day');
	    			return false;	
				}
				
				
				
				
				
		}
		
		
	}

	return ret;
	
}
</script>



<?php

  	$sql ="select * from calendar where user_id='".$user_id."' AND date='".$_GET['date']."'";
	$queryResult = mysql_query($sql);


if($_GET['canditIt'] !='' && mysql_num_rows($queryResult) ==0){
		echo '<br><br><br>';
		echo '<center><h3 style="color:#063;margin-bottom:10px;">Unavaliable Time: NA</h3></center>';
		echo '<br><br><br>';
	
}

if(mysql_num_rows($queryResult) !=0){
	
	
		echo '<table align="center" id="avaliableTime" name="avaliableTime" border="0" cellpadding="2" width="500px" cellspacing="10" style="background-color:#BADACE; font-size:13px;">';
		echo '<caption><h3 style="color:#063;margin-bottom:10px;">Unavaliable Time</h3></caption>';
		echo '<tr> <td align="center"> DATE</td><td align="center">From</td><td align="center">To</td><td align="center">Delete</td>';
}
while ($row =mysql_fetch_assoc($queryResult)){
echo '<tr align="center">
			<td>'.$row['date'].'</td>
			<td>'.$row['from_time'].'</td>
			<td>'.$row['to_time'].'</td>
			<td><a onclick="deleteC('.$row['id'].','."'".$_GET['date']."'".')" style="cursor:pointer;">Delete</a></td>
		</tr>
';	
}
echo "</table>";




?>

<?php
//if(isset($s->is_set('USER_ID'))){	
//}
if($s->is_set('USER_ID')){
?>

<form action="today_avaliable.php" name="form1" method="post" >

<table title="" align="center" width="500px"  style="background-color:#dbf4eb; font-size:13px; color:#333;">

<caption><h3 style="color:#063; margin-bottom:10px;">Add Unavailable Time</h3></caption>
<tr>
<td colspan="2" style="line-height:15px;">&nbsp;</td>
</tr>

<tr>
	<td width="200px" align="right"><b>From Date:</b></td>
    <td><input type="text" name="fromdate" id="fromdate"   onclick="javascript:NewCal('fromdate','ddmmyyyy',true,12)" />
    	<a href="javascript:NewCal('fromdate','ddmmyyyy',true,12)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        <div id="fdateerror" ></div>
     </td>    
</tr>
<tr>
<td colspan="2" style="line-height:10px;">&nbsp;</td>
</tr>

<tr>
	<td align="right"><b>To Date:</b></td>
    <td><input type="text" name="todate" id="todate"  onclick="javascript:NewCal('todate','ddmmyyyy',true,12)"/>
    <a href="javascript:NewCal('todate','ddmmyyyy',true,12)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
    <div id="todateerror" ></div>
    </td>    
</tr>
<tr>
<td colspan="2" style="line-height:10px;">&nbsp;</td>
</tr>

<tr>
	<td colspan="2"  align="center"><input type="submit" name="sub"  value="" onclick="return validateDate()" style="background-image: url('./images/submit.png');width:121px;height:27px;background-color:#dbe4fb; border:none;"/></td>
</tr>
</table>
</form>

<?php
}
?>