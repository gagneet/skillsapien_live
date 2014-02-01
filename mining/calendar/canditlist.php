<?php
include'function.php';

//print_r($_GET);



$dateargument=$_GET['date'];
$pageno=$_GET['pageno'];

$allcandidates =array();

 $allcandidates=allcandidates($dateargument, $pageno);
//print_r($allcandidates);
//$i=1;
$cdetails='';
foreach($allcandidates as $row){
	//echo $i;
	//$i++;
//print_r($row);exit;
//echo $row['id'];
$cdetails.='<div class="popuprow">

			<img src="../profile_img/'.$row['photo'].'" height="75px;" width="85px;"   style="float:left; margin-right:10px;"/>
			
			
			<div >
				<b>Title:</b> '.$row['skills_profile'].'<br>				
				<b>Skills:</b> '.displayString($row['profile_summary'], 20).'<br>				
				<a href=""><input type="button" value="" id="bidlink" ></a>
				
				</div>
				
				</div>';


}
echo $cdetails;

?>