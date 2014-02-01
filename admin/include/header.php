<?php
require("include/config.php");

//session class
require_once("include/class_session.php");
$s=new session();
//database class
require_once("include/class_database.php");
$db=new database();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<title>Administration Panel </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="inclide_html_info/style.css">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" language="javascript1.2" src="../js/common.js"></script>
<link rel="stylesheet" href="../css/style.css" />
<!--  -->

  </head>