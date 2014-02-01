<?php
echo print_r($_GET);
exit;
mysql_connect("localhost", "pmuser", "promedik");
 	mysql_select_db("sapiendb1");
	
	$sql ="select * from user_login_details ";
	echo $sql;



?>