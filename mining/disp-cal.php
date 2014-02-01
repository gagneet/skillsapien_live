<link href="./css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="./js/facebox.js" type="text/javascript"></script>

<script type="text/javascript" >
$(document).ready(function(){

//Read More Popup

	$('a[rel*=facebox]').facebox({

	loadingImage : 'images/Loading.gif',

	closeImage   : 'images/x.png'

	});	
	 
});
</script>




<?php

// function for finding how many candidates are avaliable on given date 
include'function.php';

//echo  noofcandidates();exit;
/*print'<pre>';
print_r($_GET);
print'</pre>';*/
	$getSkill=$_GET['skill'];
	$getMonth=$_GET['month'];
	$getYear=$_GET['year'];
// year calendar 
if(isset($_GET['year']) && isset($_GET['month'])  && $_GET['month']=='All'){
						
				
					$year = $_GET['year'];
					if($year == '')
					   $year = date('Y');  
					   $yearpre=$year-1;
					   $yearnext=$year+1;
					// $month = date('m');
					echo "<table cellspacing=10 border=0>";
					echo "<tr><td  style='text-align:left;'> 
					
					<input type='button' onclick='privew(".$yearpre.")'  style=".'"'." border:none; background-image:url('../mining/images/pre.png'); height:25px; cursor:pointer; width:80px" .'"'."> 
					
					  </td>
					
					<td  style='text-align:center;font-size:14px; font-weight:bold; color:green;'> ".$year."</td>
					
					<td style='text-align:right;'><input type='button' onclick='privew(".$yearnext.")' style=".'"'." border:none; background-image:url(../mining/images/next.png); height:25px; width:80px; cursor:pointer;" .'"'."></td></tr>";
					
					
					for($ti=0;$ti<12;$ti++) {
							  $month = $ti+1;
							  if($ti%3==0) echo "<tr>";
								echo "<td valign='top'>";
							echo "<span class='monthnames'><b>".date( 'F', mktime(0, 0, 0, $month,1,0) )."</b></span>";
									  echo "<table border=0 class='tab' width='300px;'>";
									  
									  
											  echo "<tr class='daynames' height='20px;'>											  
											  <td width='50px;' style='text-align:center'>Sun</td>
											  <td width='50px;' style='text-align:center'>Mon</td>
											  <td width='50px;' style='text-align:center'>Tue</td>
											  <td width='50px;' style='text-align:center'>Wed</td>
											  <td width='50px;' style='text-align:center'>Thu</td>
											  <td width='50px;' style='text-align:center'>Fri</td>
											  <td width='50px;' style='text-align:center'>Sat</td>
											  </tr>";
											  
											  
														$timestamp = mktime(0,0,0,$month,1,$year);
														$maxday = date("t",$timestamp); 
														$thismonth = getdate ($timestamp);
														$startday = $thismonth['wday'];
														for($i=0; $i<($maxday+$startday); $i++) {
														if(($i % 7) == 0 ) {
																	  echo "<tr height='15px;'>\n";
																	  $style="style='font-size: 11px; background-color:#fd9b9b;'";     
															} else $style = "style='font-size: 11px; background-color: lightblue;'";
											   if($i < $startday) echo "<td></td>\n";
															   else{
											  $dateargument =$year."-".$month."-".($i - $startday + 1);
											  
											  $candidatescount =noofcandidates($dateargument, $getSkill);
											  //$candidatescount =30;
												/*if($candidatescount >=100){
													// light blue color 
													$bgcolor='#6699FF';
												}elseif($candidatescount >=50 && $candidatescount <100){
													// green color
													$bgcolor='#00CC33';		
												}elseif($candidatescount >=20 && $candidatescount <50){
													// yellow color
													$bgcolor ='#FFFF00';
												}elseif($candidatescount >=10 && $candidatescount <20){
													// orange color
													$bgcolor ='#FF9966';
												}elseif($candidatescount <10 ){
													// red color
													$bgcolor ='red';
												}*/
												
												if(isset($_GET['defaultColor']) && $_GET['defaultColor'] =='white'){
												$bgcolor ='white';
												}else{
												$bgcolor =recruiterBgColor($candidatescount);
												}
							
											  
											  
											  if($i - $startday + 1 == date('d') && date( 'F', mktime(0, 0, 0, $month,1,0) ) == date('F') && $year == date('Y')){
												echo "<td align='center' valign='top' class='curdate'>";
												echo '<a  href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox"  style="text-decoration:none;">';
												echo "<div  class='noofavaliable' style='background-color:".$bgcolor."'>";
												echo ($i - $startday + 1);						
												echo "</div></a></td>\n";
												//echo '</a>';
												}    
											  else{
												echo "<td align='center' valign='top' $style >";
												echo '<a  href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox"  style="text-decoration:none;">';
												echo "<div  class='noofavaliable' style='background-color:".$bgcolor."'>";
												echo ($i - $startday + 1);								
												echo "</div></a></td>\n";
												//echo '</a>';
											  }
																	} 
																if(($i % 7) == 6 ) echo "</tr>\n";
														}
									  echo "</table>";
								echo "</td>";
							  if($ti!=0 && ($ti+1)%3==0) echo "</tr>";
					}
					echo "</table>";
}
// month calander 
elseif(isset($_GET['month'])){   
       //print_r($_GET);
	if($_GET['myear'] ==''){
		$year = date('Y');
	}else{
		 $year = $_GET['myear'];
	}
	if(isset($_GET['year'])){
		$year =$_GET['year'];
	}
	if($_GET['month']==''){ 
	 $month=date("m"); 
	}else{
	$month =$_GET['month'];
	}

	if($month %13==0 && $_GET['status'] == 1){
		$year=$year+1;
		//$month=1;
	}

		if($month ==13){
			$month=1;
		}
		if($month == 1){
			$premonth=12;
		}else{
			$premonth=$month-1;
		}
			$nextmonth=$month+1;

		if($month %12==0 && $_GET['status'] == 0){
			$year=$year-1;
		}
		if($_GET['status'] == 0 && $month==1){
			//$month==12;
		}

	echo "<table cellspacing=0 border=0>";
	echo "<tr><td align='right' width='50px;'><input type='button' onclick='monthprev(".$year.",".$premonth.",0)' style=".'"'." border:none; background-image:url('../mining/images/pre.png'); height:25px; cursor:pointer; width:80px" .'"'."></td><td  style='text-align:center;font-size: 15px;font-weight: bold;'> ".date( 'F', mktime(0, 0, 0, $month,1,$year) )."-".$year."</td><td style='text-align:right;'><input type='button' onclick='monthprev(".$year.",".$nextmonth.",1)' style=".'"'." border:none; background-image:url('../mining/images/next.png'); height:25px; cursor:pointer; width:80px" .'"'."></td></tr>";

 
         echo "<tr>";
            echo "<td valign='center' colspan='3'>";
	    echo "<span class='monthnames'><b>".date( 'F', mktime(0, 0, 0, $month,1,0) )."</b></span>";
                  echo "<table border=0 class='tab' width='350px;'>";
				  
                   echo "<tr class='daynames' height='20px;' style='text-align:center;'>
				   
				   <td width='50px;' style='text-align:center;' >Sun</td>
				   <td width='50px;' style='text-align:center;'>Mon</td>
				   <td width='50px;' style='text-align:center;'>Tue</td>
				   <td width='50px;' style='text-align:center;'>Wed</td>
				   <td width='50px;' style='text-align:center;'>Thu</td>
				   <td width='50px;' style='text-align:center;'>Fri</td>
				   <td width='50px;' style='text-align:center;'>Sat</td>
				   
				   
				   </tr>";
                                    $timestamp = mktime(0,0,0,$month,1,$year);
                                    $maxday = date("t",$timestamp); 
                                    $thismonth = getdate ($timestamp);
                                    $startday = $thismonth['wday'];
                                    for($i=0; $i<($maxday+$startday); $i++) {
	                                if(($i % 7) == 0 ) {
                                                  echo "<tr height='35px;'>\n";
                                                  $style="style='font-size: 11px; background-color:#fd9b9b;'";     
                                        } else $style = "style='font-size: 11px; background-color: lightblue;'";
					       if($i < $startday) echo "<td></td>\n";
	                                       else{
						  $dateargument =$year."-".$month."-".($i - $startday + 1);
						  
						  $candidatescount =noofcandidates($dateargument, $getSkill);
							/*if($candidatescount >=100){
								// light blue color 
								$bgcolor='#6699FF';
							}elseif($candidatescount >=50 && $candidatescount <100){
								// green color
								$bgcolor='#00CC33';		
							}elseif($candidatescount >=20 && $candidatescount <50){
								// yellow color
								$bgcolor ='#FFFF00';
							}elseif($candidatescount >=10 && $candidatescount <20){
								// orange color
								$bgcolor ='#FF9966';
							}elseif($candidatescount <10 ){
								// red color
								$bgcolor ='red';
							}*/
							
								$bgcolor =recruiterBgColor($candidatescount);
						  
						  
						  
						  if($i - $startday + 1 == date('d') && date( 'F', mktime(0, 0, 0, $month,1,0) ) == date('F') && $year == date('Y')){
						    echo "<td align='center' valign='top' class='curdate'>";
							echo '<a href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox" style="text-decoration:none;">';
							echo "<div  class='noofavaliable' style='background-color:".$bgcolor."'>";							
							echo ($i - $startday + 1);
							
							
							//echo noofcandidates($dateargument); 
							echo "</div></a></td>\n"; 	    
							//echo '</a>';
						  }
						  else{
						    echo "<td align='center' valign='top' $style>";
							echo '<a href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox" style="text-decoration:none;">';
							echo "<div  class='noofavaliable' style='background-color:".$bgcolor."'>";
							echo ($i - $startday + 1);
							//echo noofcandidates($dateargument); 
							echo "</div></a></td>\n";
							//echo '</a>';
						  }
                                                } 
	                                        if(($i % 7) == 6 ) echo "</tr>\n";
                                    }
                  echo "</table>";
            echo "</td>";
          echo "</tr>";

echo "</table>";
}

// calendar for a day 
elseif(isset($_GET['day'])){

	 if($_GET['day']== 'today'){
		 $days=0;		 
	 }else{
		 $days=$_GET['day'];
	 }
	 $nextday=$days+1;
	 $preday=$days-1;
	 $day=mktime(0,0,0,date("m"),date("d")+$days,date("Y"));
	 $dateargument =date('Y-m-j', $day);
	
	//echo date('Y-m-j', $day);exit;
	echo "<table cellspacing=10 border=0>";
	echo "<tr><td align='right'><input type='button' onclick='dayprev(".$preday.")'  style=".'"'." border:none; background-image:url('../mining/images/pre.png'); height:25px; cursor:pointer; width:80px" .'"'."></td><td  style='text-align:center;font-size: 15px;font-weight: bold;'> ".date('j M Y', $day)."</td><td style='text-align:left;'><input type='button' onclick='dayprev(".$nextday.")'  style=".'"'." border:none; background-image:url('../mining/images/next.png'); height:25px; cursor:pointer; width:80px" .'"'."></td></tr>";
echo "</table>";





	
	
echo "<div class='daystyle'>";	
	echo '<a href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox" style="text-decoration:none;">';
	$candidatescount =noofcandidates($dateargument, $getSkill);
	/*if($candidatescount >=100){
		// light blue color 
		$bgcolor='#6699FF';
	}elseif($candidatescount >=50 && $candidatescount <100){
		// green color
		$bgcolor='#00CC33';		
	}elseif($candidatescount >=20 && $candidatescount <50){
		// yellow color
		$bgcolor ='#FFFF00';
	}elseif($candidatescount >=10 && $candidatescount <20){
		// orange color
		$bgcolor ='#FF9966';
	}elseif($candidatescount <10 ){
		// red color
		$bgcolor ='red';
	}*/
		$bgcolor =recruiterBgColor($candidatescount);
	
	
	
	echo "<div class='daynames'>";
			echo "<b>".date("l", $day)."</b>";
			echo '</div><div style="background-color:'.$bgcolor.'; width: 90px; height: 48px; font-size: 35px;">';
			echo $today = date('j', $day);
			
			//echo '<div style="background-color:yellow;text-align:center;">';
			
				//echo noofcandidates($dateargument); 
				//echo "</div>";
			
	echo "</div>";
			echo '</a>';
echo "</div>";

}




// calendar for a week 
elseif(isset($_GET['week'])){
	
 	 if($_GET['week']== 'week'){
		 $days=0;		
		 
	 }else{
		 $days=$_GET['week'];
	 }
	 
	$day=mktime(0,0,0,date("m"),date("d")+$days,date("Y"));
	$timestamp = $day;
	$maxday = date("t",$timestamp); 
	$weekno =array('Sunday'=>0, 'Monday'=>1,'Tuesday'=>2, 'Wednesday'=>3, 'Thursday'=>4, 'Friday'=>5, 'Saturday'=>6,);
	if($days ==0){
		$todayname =  date("l", $day);
		$reducevalue =$weekno[$todayname];
	}else{
		$reducevalue=0;
	}
		$todayvalue =date('j', $day)-$reducevalue;
		if($days ==0){
		 $nextweek=7-$reducevalue;
	 	 $preweek=-$reducevalue;
		}else{
		$nextweek=$days+7;
	 	$preweek=($days-7);
		}

	
	echo "<table cellspacing=10 border=0>";
echo "<tr><td align='right'><input type='button' onclick='weekprev(".$preweek.")'  style=".'"'." border:none; background-image:url('../mining/images/pre.png'); height:25px; cursor:pointer; width:80px" .'"'."></td><td  style='text-align:center;font-size: 15px;font-weight: bold;'> ".date('M Y', $day)."</td><td style='text-align:left;'><input type='button' onclick='weekprev(".$nextweek.")'  style=".'"'." border:none; background-image:url('../mining/images/next.png'); height:25px; cursor:pointer; width:80px" .'"'."></td></tr>";
echo "</table>";

$weekarray= array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
echo '<table>
			<tr class="daynames">';
			for($i=0; $i<7; $i++){
				echo '<td width="50px" style="text-align:center" >';
				echo $weekarray[$i];
				echo "</td>";
			}
			echo '</tr>';
			
			echo '<tr>';
			for($i=0; $i<7; $i++){
				if($todayvalue == $maxday){
					$nextmonthvalue=1;
				}
				$dateargument =date('Y-m-', $day).$todayvalue;
				$candidatescount =noofcandidates($dateargument, $getSkill);
				
				/*if($candidatescount >=100){
					// light blue color 
					$bgcolor='#6699FF';
				}elseif($candidatescount >=50 && $candidatescount <100){
					// green color
					$bgcolor='#00CC33';		
				}elseif($candidatescount >=20 && $candidatescount <50){
					// yellow color
					$bgcolor ='#FFFF00';
				}elseif($candidatescount >=10 && $candidatescount <20){
					// orange color
					$bgcolor ='#FF9966';
				}elseif($candidatescount <10 ){
					// red color
					$bgcolor ='red';
				}*/
					$bgcolor =recruiterBgColor($candidatescount);
				
				if($todayvalue == date('j', $day)){
					echo '<td width="50px" height="50px" style="font-size: 20px; background-color: yellow;" valign="top">';
					echo '<a href="allcandidates.php?date='.$dateargument.'" rel="facebox" style="text-decoration:none;">';
					echo '<div style="position: absolute;background-color:'.$bgcolor.';text-align:center;width: 50px;height: 50px;">';
				}
				else{
					echo '<td width="50px" height="50px" style="font-size: 20px; background-color: lightblue;" valign="top">';
							if($todayvalue > 0){
					echo '<a href="allcandidates.php?date='.$dateargument.'&skill='.$getSkill.'" rel="facebox" style="text-decoration:none;">';
							}
					echo '<div style="position: absolute;background-color:'.$bgcolor.';text-align:center;width: 50px;height: 50px;">';
				}
				
				//echo '<div style="margin-top:20px;position: absolute;background-color:yellow;text-align:center;width: 50px;">';
				//echo '<a href="allcandidates.php?date='.$dateargument.'" rel="facebox" style="text-decoration:none;">';
				
				//echo noofcandidates($dateargument); echo "</div>";
				//echo '</a>';
				if($todayvalue <= $maxday ){
					if($todayvalue > 0){
						echo $todayvalue;
					}
				$todayvalue++;				
				}else{
				echo $nextmonthvalue;
				 $nextmonthvalue =$nextmonthvalue + 1;
				$todayvalue++;
				}
				echo "</div>";
					if($todayvalue > 0){
							echo '</a>';
					}
				echo "</td>";
				
			}
			echo '</tr>';
			
echo '</table>';
}
?>