<?php 
require("include/config.php");
require_once("include/class_session.php");
$s=new session();

require_once("include/class_database.php");
$db=new database();

 $proname=intval($_REQUEST['proname']);

$query="SELECT * FROM disciplinelist WHERE profession_id='$proname'";
$result=mysql_query($query);

?>
<select name="discname" id="discname">
	<option value="">Select Disciplinelist </option>
					
<? while($row=mysql_fetch_array($result)) { ?>

<option value=<?=$row['id']?>><?=$row['disc_name']?></option>

<? } ?>
</select>
<script type="text/javascript">
 $("#discname").change(update_discname);
 $("#discname").click(update_discname);
</script>