<?php
$todayDate = date("Y-m-d");// current date

echo "Today: ".$todayDate."<br>";

//Add one day to today
$date = strtotime(date("Y-m-d", strtotime("2012-06-19")) . " +1 day");

echo "After adding one day: ".date('Y-m-d', $date)."<br>";

?>