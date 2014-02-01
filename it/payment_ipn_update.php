<?php
if($_REQUEST['payer_status'] =='verified'){
	mysql_connect("localhost","portfolio","port123#");
	mysql_select_db("skillfg_db");
	
	echo  $userid= $_REQUEST['custom'];
	echo  $amount= $_REQUEST['mc_gross'];
	 if($amount==100){
	   $credit_amount=100;
	 }else if($amount==180){
	   $credit_amount=200;
	 }else if($amount==400){
		$credit_amount=500;
	 }else if($amount==700){
		$credit_amount=1000;
	 }else if($amount==1200){
		$credit_amount=2000;
	 }else if($amount==2500){
		$credit_amount=5000;
	 }else if($amount==5000){
		$credit_amount=12500;
	 }
	$sql="select net_bidcost from profiles where user_id='".$userid."'";
	$result = mysql_query($query);
	$credit = mysql_fetch_array($result);
	$credit['net_bidcost'];
	$final_credit=$credit['net_bidcost']+$credit_amount;
	  $update_query="update profiles set net_bidcost='".$final_credit."' where user_id='".$userid."'";
	   mysql_query($update_query);
}
?>