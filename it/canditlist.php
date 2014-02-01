<?php
include'init.php';
include'function.php';

$rId =$s->value('R_USER_ID');

//print_r($_GET);



$dateargument=$_GET['date'];
$pageno=$_GET['pageno'];
$getSkill =$_GET['skill'];

$allcandidates =array();

 $allcandidates=allcandidates($dateargument, $pageno, $getSkill);
//print_r($allcandidates);
//$i=1;

/*echo '<div style="margin-bottom:15px;">';
 echo "<center><font style='font-size: 15px;font-weight: bold; color:#21610B>".$dateargument." Avaliable Candidates list</font></center>";
 echo "</div>";*/
$cdetails='';
if($allcandidates[0] ==0){
	echo "<center><b><h2> No candidates are there ...</h2></b></center>";
}else{
	
	echo "<center><font style='font-size: 15px;font-weight: bold; color:#21610B;'>".$dateargument." Avaliable Candidates list</font></center><br>";
foreach($allcandidates as $row){
	
			$unavaliable=unavaliabletime($row['id'], $dateargument);
			//print'<pre>';print_r($unavaliable);
	  $getCnt = count($unavaliable);
					if($getCnt == 0 && empty($unavaliable)){
							$tvalue= " NA ";
							}else{
								$tvalue ='';
								foreach($unavaliable as $val){
									$tvalue .= "<br><span >".$val['from_time']." to ".$val['to_time']."</span>";
								}
								
							}
					
				if($row['photo'] ==''){
					$imgName ="defaultProfileimg.png";
				}else{
					$imgName =$row['photo'];
				}
	//echo $row['id'];
					$cdetails.='
					<div class="popuprow">
								<img src="./profile_img/'.$imgName.'" height="75px;" width="85px;"   style="float:left; margin-right:10px;"/>
								<div style="margin-left:95px;">
									<b>Title:</b> '.$row['skills_profile'].'<br>				
									<b>Skills:</b> '.displayString($row['profile_summary'], 20).'<br>	
									<b>Unavaliable time: </b> '.$tvalue.'						
									<br>		
									<b>For full calendar <a href="calendar_c.php?canditId='.$row['id'].'">Click here</a> </b>		
									<br>									
									<a href="bid.php?jobid='.$row['id'].'&jpid='.$rId.'"><input type="button" value="" id="bidlink" ></a>
									</div>
									</div>';
					//echo $cdetails;
					}
			echo $cdetails;
}
?>