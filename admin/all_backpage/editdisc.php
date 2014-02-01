 <?php 
 
   include 'include/header.php';
   //set user status
 		$id=$_REQUEST[id];
		$seldis=mysql_query("select * from disciplinelist where id='$id'");
		$rowseldis=mysql_fetch_array($seldis);
	 $pro_id=$rowseldis['profession_id']; 
		
		
		if(isset($_REQUEST[save]))
		{
		$proid=$_REQUEST['proname'];
		$disc_name=$_REQUEST['disc_name'];
		$hid=$_REQUEST['hid'];
		
$ins=mysql_query("update disciplinelist set profession_id='$proid',disc_name='$disc_name' where id='$hid'");

$ms="Data have sucessfully saved";		
header("location:disciplinelist.php?ms=$ms");
		}
   
 ?>
 
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Edit Discipiline List:</div>
							
							<div style="float:right"><a href="disciplinelist.php">Back</a></div>
													<div style="clear: both"></div>
				  </div>
                       
                      
                        
                         <div style="clear: both">&nbsp;</div>
                        
					<div class="clear"></div>
				  <div>
				  <form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="95%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2">&nbsp;<font color="#000099"><? echo $_REQUEST['ms'];  ?></font></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
					  
                      <tr>
                        <td>Select Profession Name </td>
                        <td><select name="proname">
					
						<?
						$sel_pro=mysql_query("select * from profession where id='$pro_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						
						<?
						
						$sel_pro1=mysql_query("select * from profession where id!='$pro_id'");
						while($rowpro1=mysql_fetch_array($sel_pro1))
						{
					 ?>
						<option value="<? echo $rowpro1['id'] ; ?>"><? echo $rowpro1['name'] ; ?></option>
						<? } ?>
						
						
						
						</select></td>
                      </tr>
					  
					   <tr>
					     <td>&nbsp;</td>
					     <td>&nbsp;</td>
				      </tr>
					   <tr>
                        <td>Enter Disciplinelist Name </td>
                        <td><input type="text" name="disc_name" width="350px;" value="<? echo  $rowseldis['disc_name']; ?>"></td>
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
                        <td colspan="2" align="center">&nbsp;<input type="hidden" name="hid" id="hid" value="<? echo $id ; ?>">
                            <input name="save" type="submit" value="Update" style="width:100px"></td>
                      </tr>
                    </table>
					</form>
				  </div>        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>