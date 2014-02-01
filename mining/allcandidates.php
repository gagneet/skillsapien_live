
<style>
.paginations_class {
	border: 1px 005EBB #900;
	padding:2px 5px 2px 6px;
	position:relative;
	margin-left:5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bolder;
	color:#039;
	text-decoration:none;	
	background-color:#9ebeff;
	top:0px;
	cursor:pointer;
}
.paginations_class_current {
	border: 1px solid #4b8aea;
	padding:1px 4px 1px 5px;
	position:relative;
	margin-left:5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bolder;
	color:#387fea;
	text-decoration:none;	
	background-color:#e7f1fa;
	top:0px;
}


#paginations {
	float:right;
	padding:5px;
	
	width:1000px;
	top:10px;
	height:20px;
	position:relative;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bolder;
	color:#387fea;

}
.popuprow
{
	width:49%;
	float:left;
	height:auto;
	font-family:Verdana, Geneva, sans-serif;
	font-size:13px;
	color:#333;
	line-height:20px;
	border:1px solid #AFC4C9;
	margin-bottom:10px;
	margin-right:20px;
	background-color:#D5F4F3;
	margin:0 auto;
	
	
	
}


.popuprow img
{
	border:2px solid #FFF;
	margin-top:3px;
	margin-left:3px;
}

#bidlink {	
	background-color: #FFFFFF;
    background-image: url("images/BID-BUTTON.png");
    background-repeat: no-repeat;
    border: 1px solid #FFFFFF;
    cursor: pointer;
    height: 25px;
	margin-left:95px;
    width: 57px;
}

</style>

<script type='text/javascript' src='./js/jquery.js'></script>
<script type="text/javascript" >



function candlist(date, pageno){
	var date=date
	var page= pageno;
	var totalPageNo=document.getElementById('totalPageNo').value;
	for(var i=1; i<=totalPageNo; i++){
		$("#"+i+"").removeClass("paginations_class_current");
	$("#"+i+"").addClass("paginations_class");
	}
	
	$("#"+pageno+"").removeClass("paginations_class");
	$("#"+pageno+"").addClass("paginations_class_current");
	$('.popuprow').hide();
     $.get("./canditlist.php","date="+date+"&pageno="+page+"&skill=<?php echo $_GET['skill'];?>",function(result){
        $("#allcandidates").html(result);
	 });
}

</script>


<?php

include'init.php';
include'function.php';

$rId =$s->value('R_USER_ID');

?>

<div style="width:1050px; height:auto;" id="allcandidates">

<?php 


$dateargument=$_GET['date'];
 $getSkill =$_GET['skill'];
$allcandidates =array();

 $allcandidates=allcandidates($dateargument,'',$getSkill);

$cdetails='';

// old for loop it is working in ie8

 echo '<div style="margin-bottom:15px;">';
 echo "<center><font style='font-size: 15px;font-weight: bold;color:#21610B;'>".$dateargument." Avaliable Candidates list</font></center>";
 echo "</div>";
if($allcandidates[0] ==0){
	echo "<center><b><h2> No candidates are there ...</h2></b></center>";
}else{
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
									<b>view full profile  <a href="cviewprofile.php?canditId='.$row['id'].'">  Click here</a></b>	
									<br>									
									<a href="bid.php?jobid='.$row['id'].'&jpid='.$rId.'"><input type="button" value="" id="bidlink" ></a>
									</div>
									</div>';
					//echo $cdetails;
					}
					echo $cdetails;
}

?>
</div>

<?php 



$rowslimit =10;
			if($pageNo > $rowslimit){
					$startPage = $pageNo - $rowslimit;
				}else{
					$startPage = 1;
				}
				
					$count =noofcandidates($dateargument , $getSkill);
					$totalPage = $count/$rowslimit; 
					$totalPageNo = round($totalPage);
					if($totalPage  > $totalPageNo){
						$totalPageNo = $totalPageNo + 1;
					}									
			
				
				$totalPageNoVal  = $startPage +  $rowslimit;
				
				if($totalPageNo > $totalPageNoVal){
					$totalPageNo = $totalPageNoVal;
				}
				
				if(!$pageNo){
					$pageNo = 1;
				}
				
				$pagination="";
				for($i = $startPage; $i <= $totalPageNo; $i++){
					if($pageNo == $i){
						$style = "paginations_class_current";
					}else{
						$style = "paginations_class";
					}
					
					
					$pagination .= "<input type='button' class=".$style."  onclick=candlist("."'".$_GET['date']."'".",".$i.") value='".$i."'' id=".$i." />";
				}
			 ?>
            
            <input type="hidden" name="date" id="date" value="<?php echo $_GET['date'] ?>" />
          	<input type="hidden" name="totalPageNo" id="totalPageNo" value="<?php echo $totalPageNo ?>" />
            <?php if($totalPageNo > 0) { ?>
           		<div id="paginations">Pages : <?php echo $pagination; ?></div>
            <?php } ?>
  