<?php 

require("include/config.php");
require_once("include/class_session.php");
$s=new session();

require_once("include/class_database.php");
$db=new database();

$discname=intval($_REQUEST['discname']);
 

$query="SELECT * FROM role WHERE disc_id='$discname'";
$result=mysql_query($query);

?>

<select name="role" id="role" onchange="role();">
	
					
<? while($row=mysql_fetch_array($result)) { ?>

<option value=<?=$row['id']?>><?=$row['role']?></option>

<? } ?>
</select>