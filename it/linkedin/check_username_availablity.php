<?php
mysql_connect("localhost","pmuser","promedik");
mysql_select_db("testcircle");

if($_REQUEST)
{
	$username 	= $_REQUEST['username'];
	$query = "select * from username_availablity where username = '".strtolower($username)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		//echo '<div id="Error">Already Taken</div>';
		echo "Already Taken";
	}
	else
	{
		//echo '<div id="Success">Available</div>';
		echo "Available";
	}
	
}?>