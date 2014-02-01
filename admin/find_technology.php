
<?php 
 
   include 'include/header.php';
   //set user status
 		
		
   
 ?>
<?
 $role=intval($_REQUEST['role']);
 

$query="SELECT * FROM technology WHERE role_id='$role'";
$result=mysql_query($query);

?>

 <select name="t_name" id="t_name">	
 <? while($row=mysql_fetch_array($result)) { ?>
					
						<option value=<?=$row['id']?>><?=$row['technology']?></option>

<? } ?>						
						</select>