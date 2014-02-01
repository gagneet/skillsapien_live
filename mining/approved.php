<?php
include_once('init.php');
Is_valid_uesr();
$id=$_REQUEST['id'];
$jobid=$_REQUEST['jobid'];
$upbid=mysql_query("update bid set approved='Approved' where id='$id'");

$upbid1=mysql_query("update bid set approved='' where id!='$id'");

header("location:job_details.php?jid=$jobid");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
