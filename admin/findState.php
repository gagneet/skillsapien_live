<?php 
require("include/config.php");
require_once("include/class_session.php");
$s=new session();

require_once("include/class_database.php");
$db=new database();


 $proname=intval($_REQUEST['proname']);
 
 $discname=intval($_REQUEST['discname']);
 
 $role=intval($_REQUEST['role']);
 
 $t_name=intval($_REQUEST['t_name']);
 
 

$query="SELECT * FROM disciplinelist WHERE profession_id='$proname'";
$result=mysql_query($query);


$query1="SELECT * FROM role WHERE disc_id='$discname'";
$result1=mysql_query($query1);


$query2="SELECT * FROM technology  WHERE role_id='$role'";
$result2=mysql_query($query2);


$query3="SELECT * FROM functional_area  WHERE tech_id='$t_name'";
$result3=mysql_query($query3);



if($proname!='')
{
?>
<select name="discname" id="discname">
	<option value="">Select Disciplinelist </option>
					
<? while($row=mysql_fetch_array($result)) { ?>

<option value=<?=$row['id']?>><?=$row['disc_name']?></option>

<? } ?>
</select>



<?
}

if($discname!='')
{

?>


<select name="role" id="role" onchange="role();">
	<option value="">Select Role</option>
					
<? while($row1=mysql_fetch_array($result1)) { ?>

<option value=<?=$row1['id']?>><?=$row1['role']?></option>

<? } ?>
</select>

<? } ?>

<?
if($role!='')
{

?>



 <select name="t_name" id="t_name" onchange="t_name();">	
 <option value="">Select Technology</option>	
 				<? while($row2=mysql_fetch_array($result2)) { ?>				

						<option value=<?=$row2['id']?>><?=$row2['technology']?></option>
												<? } ?>						
	</select>	
						
<? } 

if($t_name!='')
{


?>

 <select name="fun_ar_name" id="fun_ar_name" onchange="fun_ar_name();">						
						<option value="">Select Functional Area</option>	
								
								<? while($row3=mysql_fetch_array($result3)) { ?>				

						<option value=<?=$row3['id']?>><?=$row3['func_area_name']?></option>
												<? } ?>					
						</select>
						
						
						
<? }  ?>


<script type="text/javascript">
 $("#discname").change(update_discname);
 $("#discname").click(update_discname);
 
  $("#role").change(update_role);
 $("#role").click(update_role);
 
 
 
  $("#t_name").change(update_t_name);
 $("#t_name").click(update_t_name);
 
</script>

