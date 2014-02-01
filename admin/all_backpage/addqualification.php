 <?php 
 
   include 'include/header.php';
   //set user status
 		
		if(isset($_REQUEST[save]))
		{
		
		$proid=$_REQUEST['proname'];
		$discname=$_REQUEST['discname'];
		$role=$_REQUEST['role'];
		$t_name=$_REQUEST['t_name'];
		$fun_ar_name=$_REQUEST['fun_ar_name'];
		
		
		
$ins=mysql_query("insert into functional_area set profession_id='$proid',disc_id='$discname',role_id='$role' ,tech_id='$t_name',func_area_name='$fun_ar_name'");

$ms="Data have sucessfully saved";		
header("location:functionalarealist.php?ms=$ms");
		
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


function role()
{

			 $("#role").change(function()
					 {
					
						 var role_val = $(this).val();
						
						 $.ajax({
						  type: "POST"
						   , url: "find_technology.php"
						   , cache: false
						   , data: "role=" + role_val
						   , dataType: "html"
						   , success: function(msg){
								$("#techdiv").html(msg);
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Add New Qualification </div>
							
							<div style="float:right"><a href="qualificationlist.php">Back</a></div>
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
						<option value="">Select</option>
						<?
						$sel_pro=mysql_query("select * from profession where name!=''");
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
                        <td>Select Disciplinelist Name </td>
                        <td>
						<div id="statediv">
						<select name="discname" id="discname" >
						
						<option value="">Select Disciplinelist </option>
						</select></div>						</td>
                      </tr>
					  
					   <tr>
					     <td>&nbsp;</td>
					     <td>&nbsp;</td>
				      </tr>
					   <tr>
                        <td>Select  Role Name </td>
                        <td><div id="rolediv">
						<select name="role" id="role" >
						
						<option value="">Select Role </option>
						
						</select></div></td>
                      </tr>
					  
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Technology Name </td>
                         <td>
						 
						 <div id="techdiv">
						 <select name="t_name" id="t_name">						
						<option value="">Select Technology </option>						
						</select></div>						</td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Functional Area Name </td>
                         <td>
						 
						 <div id="funcdiv">
						 <select name="fun_ar_name" id="fun_ar_name">						
						<option value="">Select Functional </option>						
						</select></div>						</td>
                       </tr>
                       
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                         <tr>
                         <td>Skillset Name </td>
                         <td>
						 
						 <div id="skilldiv">
						 <select name="skillset" id="skillset">						
						<option value="">Select Skillset </option>						
						</select></div>						</td>
                       </tr>
                       
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Qualification Name </td>
                         <td>
                           <input type="text" name="qualification" id="qualification">
                        </td>
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
                            <input name="save" type="submit" value="save" style="width:100px"></td>
                      </tr>
                    </table>
					</form>
				  </div>        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>