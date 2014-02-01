<?php 

include_once('init.php');

Is_valid_uesr();

 if($s->value('UESR_ID')>0)
			  {
			   	$user_id=$s->value('UESR_ID');
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
			  }
			  
			  

$discname=intval($_REQUEST['discname']);
 

$query="SELECT * FROM role WHERE disc_id='$discname'";
$result=mysql_query($query);

?>

<select name="role" id="role" onchange="role();"  class="input5" style="width:150px;">
	
					
<? while($row=mysql_fetch_array($result)) { ?>

<option value=<?=$row['id']?>><?=$row['role']?></option>

<? } ?>
</select>