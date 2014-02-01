<?php
 //print_r($_GET);
include'init.php';
	/*mysql_connect("localhost", "pmuser", "promedik");
 	mysql_select_db("sapiendb1");
	*/
	$sql ="select * from user_login_details where login_id='".$_GET['emailid']."' AND vertical_id='".VERTICAL_ID."'";
	$result =mysql_query($sql) or die();
	$noofusers =mysql_num_rows($result);
	echo  $noofusers;
	



?>