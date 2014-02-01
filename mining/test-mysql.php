<?php
$dbhost = 'n7-mysql5-3.ilisys.com.au';
$dbuser = 'skillfg';
$dbpass = 'sapien2011';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                      ('Error connecting to mysql');

$dbname = 'skillfg_db';
mysql_select_db($dbname);

$query=sprintf("Select * from industry");
$result = mysql_query($query);

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

echo "This pulls all the rows from the industry table.<br /><br />";

while ($row = mysql_fetch_assoc($result)) {
	echo $row['id'] . "\n";
	echo $row['name'];
	echo "<br />";
}
?>

