 <?php 
 
   include 'include/header.php';
   //set user status
   
 		  $id=$_REQUEST[id];
		  
   $sel_tech=mysql_query("select * from technology  where id='$id'");
   $row_tech=mysql_fetch_array($sel_tech);
   
   $tech_profession_id=$row_tech['profession_id'];
   $tech_disc_id=$row_tech['disc_id'];
   $tech_role=$row_tech['role_id'];
   $tech_tech=$row_tech['technology'];
   
   
		if(isset($_REQUEST[save]))
		{
		
		$proid=$_REQUEST['proname'];
		$discname=$_REQUEST['discname'];
		$role=$_REQUEST['role'];
		$t_name=$_REQUEST['t_name'];
		
		
$ins=mysql_query("insert into technology set profession_id='$proid',disc_id='$discname',role_id='$role' ,technology='$t_name'");

$ms="Data have sucessfully saved";		
header("location:technologylist.php?ms=$ms");
		
		}
   
 ?>
 
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 $("#proname").change(function()
					 {
					
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

function text()
{
			 $("#discname").change(function()
					 {
					
						 var discname_val = $(this).val();
						
						 $.ajax({
						  type: "POST"
						   , url: "findrole.php"
						   , cache: false
						   , data: "discname=" + discname_val
						   , dataType: "html"
						   , success: function(msg){
								$("#rolediv").html(msg);
							}
						 });
					 });
					 
}
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Add New Technology</div>
							
							<div style="float:right"><a href="technologylist.php">Back</a></div>
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
					  
                      <tr>
                        <td>Select Profession Name</td>
                        <td><select name="proname" id="proname">
						
						<?
						$sel_pro=mysql_query("select * from profession where name!='' and id='$tech_profession_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						<?
						$sel_pro=mysql_query("select * from profession where name!='' and id!='$tech_profession_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						</select></td>
                      </tr>
					  
					  
					    <tr>
					      <td>&nbsp;<? 
 $query1="SELECT * FROM disciplinelist WHERE id='$tech_disc_id'";
$result1=mysql_query($query1);
$rowdisc=mysql_fetch_array($result1);
$dname=$rowdisc['disc_name'];


$query2="SELECT * FROM disciplinelist WHERE profession_id='$tech_profession_id' and disc_name!='$dname'";
$result2=mysql_query($query2);



?></td>
					      <td>&nbsp;</td>
				      </tr>
					    <tr>
                        <td>Select Disciplinelist Name </td>
                        <td>
						<div id="statediv">
						<select name="discname" id="discname" >
						
						<option value="<? echo $rowdisc['id'] ; ?>"><? echo $rowdisc['disc_name'] ; ?></option>
							
						<? 
 
while($rowdisc2=mysql_fetch_array($result2))
{
?>
						<option value="<? echo $rowdisc2['id'] ; ?>"><? echo $rowdisc2['disc_name'] ; ?></option>
						<? } ?>
						
						
						</select></div>						</td>
                      </tr>
					  
					   <tr>
					     <td>&nbsp;</td>
					     <td><?   $query_role=mysql_query("SELECT * FROM role WHERE id='$tech_role'");
						 $fetch_role=mysql_fetch_array($query_role);
  ?></td>
				      </tr>
					   <tr>
                        <td>Select  Role Name </td>
                        <td><div id="rolediv"><select name="role" id="role" >
						
						<option value="<?=$fetch_role['id']?>"><?=$fetch_role['role']?></option>
						</select></div></td>
                      </tr>
					  
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Technology Name </td>
                         <td><input type="text" name="t_name" id="t_name" value="<?=$tech_tech?>"></td>
                       </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center">&nbsp;
                            <input name="save" type="submit" value="save" style="width:100px">
                            <input type="hidden" name="hid" id="hid" value="<? echo  $id ; ?>"></td>
                      </tr>
                    </table>
					</form>
				  </div>        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>