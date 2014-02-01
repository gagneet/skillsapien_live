
<style>
.paginations_class {
	border: 1px 005EBB #900;
	padding:2px 5px 2px 6px;
	position:relative;
	margin-left:5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bolder;
	color:#f3f6f9;
	text-decoration:none;
	background-color:#039;
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
    width: 57px;
}

</style>

<script type='text/javascript' src='./jquery.js'></script>
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
     $.get("./canditlist.php","date="+date+"&pageno="+page,function(result){
        $("#allcandidates").html(result);
	 });
}

</script>


<?php

include'function.php';


?>

<div style="width:1050px; height:auto;" id="allcandidates">

<?php 


$dateargument=$_GET['date'];

$allcandidates =array();

 $allcandidates=allcandidates($dateargument,'','');

$cdetails='';

// old for loop it is working in ie8
foreach($allcandidates as $row){
	//echo $i;
	//$i++;
//print_r($row);exit;
//echo $row['id'];
$cdetails.='
<div class="popuprow">

			<img src="../profile_img/'.$row['photo'].'" height="75px;" width="85px;"   style="float:left; margin-right:10px;"/>
			
			
			<div >
				<b>Title:</b> '.$row['skills_profile'].'<br>				
				<b>Skills:</b> '.displayString($row['profile_summary'], 20).'<br>				
				<a href=""><input type="button" value="" id="bidlink" ></a>
				
				</div>
				
				</div>';
				
				
//echo $cdetails;

}

echo $cdetails;




//new for loop 

/*foreach($allcandidates as $row){


$cdetails.='<div style="width:auto;height:auto;" >
<div class="popuprow">
		
					<img src="../profile_img/'.$row['photo'].'" height="75px;" width="85px;" />
					
					
					<div style="width:75%; height:auto;float:right;">
			
						
				<div >
						<b>Title:</b> '.$row['skills_profile'].'
				</div>
				
				
				<div >
						<b>Skills:</b> '.displayString($row['profile_summary'], 30).'
				</div>
				
			
					<a href=""><input type="button" value=""  id="bidlink" ></a>
					
					
			
			</div>
			
		</div>
		
</div>			
			
			
			
			</div>';


}
echo $cdetails;*/
?>
</div>

<?php 



$rowslimit =10;
			if($pageNo > $rowslimit){
					$startPage = $pageNo - $rowslimit;
				}else{
					$startPage = 1;
				}
				
				$count =noofcandidates($dateargument, $getSkill);
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
  