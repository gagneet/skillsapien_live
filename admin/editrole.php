 <?php 
 
   include 'include/header.php';
   //set user status
   $id=$_REQUEST[id];
   $sel_role=mysql_query("select * from role where id='$id'");
   $row_role=mysql_fetch_array($sel_role);
   
   $role_profession_id=$row_role['profession_id'];
   $role_disc_id=$row_role['disc_id'];
   $role_role=$row_role['role'];
 		
		if(isset($_REQUEST[save]))
		{
		
		$proid=$_REQUEST['proname'];
		$discname=$_REQUEST['discname'];
		$role=$_REQUEST['role'];
		$hid=$_REQUEST['hid'];
		
$ins=mysql_query("update role set profession_id='$proid',disc_id='$discname',role='$role' where id='$hid'");

$ms="Data have sucessfully saved";		
header("location:rolelist.php?ms=$ms");
		
		}
   
 ?>
 
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $("#proname").change(function(){
     var proname_val = $(this).val();
	 $.ajax({
	  type: "POST"
	   , url: "findState.php"
	   , cache: false
	   , data: "proname=" + proname_val
	   , dataType: "html"
	   , success: function(msg){
			$("#statediv").html(msg);
		}
	 });
 });
});
</script>
</head>
<body  >
	<div align="center">
		<table width="1003" cellpadding="0" cellspacing="0">
			<tbody> 
<?php require('include/admin_header.php');?>			<tr>
				<td id="backgroundLvl5" valign="top">
				<div style="padding-left: 20px;">
	<?php require('include/right.section.php')?>
</div>				</td>
				<td id="mainImg" valign="top" align="center" height="500">
					<div class="section-title" style="height: 32px;">
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Add New Role:</div>
							
							<div style="float:right"><a href="rolelist.php">Back</a></div>
													<div style="clear: both"></div>
				  </div>
                       
                      
                        
                         <div style="clear: both">&nbsp;</div>
                        
					<div class="clear"></div>
				  <div>
				  <form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2">&nbsp;<font color="#000099"><? echo $_REQUEST['ms'];  ?></font></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
					  
                      <tr>role_profession_id
                        <td>Select Profession Name </td>
                        <td><select name="proname" id="proname">
						
						<?
						$sel_pro1=mysql_query("select * from profession where name!='' and id='$role_profession_id'");
						while($rowpro1=mysql_fetch_array($sel_pro1))
						{
					 ?>
					 
						<option value="<? echo $rowpro1['id'] ; ?>"><? echo $rowpro1['name'] ; ?></option>
						<?
						}
						$sel_pro=mysql_query("select * from profession where name!='' and id!='$role_profession_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						</select></td>
                      </tr>
					  
					  
					    <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
				      </tr>
					    <tr>
                        <td>Select Disciplinelist Name <? 
 $query1="SELECT * FROM disciplinelist WHERE id='$role_disc_id'";
$result1=mysql_query($query1);
$rowdisc=mysql_fetch_array($result1);
$dname=$rowdisc['disc_name'];



?> </td>
                        <td>
						<div id="statediv">
						<select name="discname" id="discname" >
						

						<option value="<? echo $rowdisc['id'] ; ?>"><? echo $rowdisc['disc_name'] ; ?></option>
						
						
						<? 
 $query2="SELECT * FROM disciplinelist WHERE profession_id='$role_profession_id' and disc_name!='$dname'";
$result2=mysql_query($query2);
while($rowdisc2=mysql_fetch_array($result2))
{
?>
						<option value="<? echo $rowdisc2['id'] ; ?>"><? echo $rowdisc2['disc_name'] ; ?></option>
						<? } ?>
						
						
						
						</select></div>
						
						</td>
                      </tr>
					  
					   <tr>
					     <td>&nbsp;</td>
					     <td>&nbsp;</td>
				      </tr>
					   <tr>
                        <td>Enter Role Name </td>
                        <td><input type="text" name="role" width="250px;" value="<? echo $role_role ; ?> "></td>
                      </tr>
					  
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center">&nbsp;
                            <input name="save" type="submit" value="save" style="width:100px"><input type="hidden" name="hid" id="hid" value="<? echo  $id ; ?>"></td>
                      </tr>
                    </table>
					</form>
				  </div>        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>