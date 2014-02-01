 <?php 
 
   include 'include/header.php';
   //set user status
   $id=$_REQUEST['id'];
   
   	$selinds=mysql_query("select * from industry where id='$id'");
		$rowselind=mysql_fetch_array($selinds);
		
 		
		if(isset($_REQUEST[save]))
		{
		$name=$_REQUEST['indus_name'];
		$hid=$_REQUEST['hid'];
		
$ins=mysql_query("update industry set name='$name' where id='$hid'");
$ms="Data have sucessfully saved";		
header("location:industrylist.php?ms=$ms");
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;"> Edit Industries:</div>
							<div style="float:right"><a href="industrylist.php">Back</a></div>
													<div style="clear: both"></div>
				  </div>
                       
                      
                        
                         <div style="clear: both">&nbsp;</div>
                        
					<div class="clear"></div>
				  <div>
				  <form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2">&nbsp;<? echo $_REQUEST['ms'];  ?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>Enter Industry Name </td>
                        <td><input type="text" name="indus_name" width="250px;" value="<? echo $rowselind['name'] ;  ?>"><input type="hidden" name="hid" id="hid" value="<? echo $id ; ?>">                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center">&nbsp;
                            <input name="save" type="submit" value="save" style="width:100px"></td>
                      </tr>
                    </table>
					</form>
				  </div>        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>