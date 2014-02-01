 <?php 
 
   include 'include/header.php';
   //set user status
 		
		
		$id=$_REQUEST['id'];
		$sel=mysql_query("select * from skillset_qualification where id='$id'");
		
		$rowsel=mysql_fetch_array($sel);
		$profession_id=$rowsel['profession_id'];
		$disc_id=$rowsel['disc_id'];
		$role_id=$rowsel['role_id'];
		$tech_id=$rowsel['tech_id'];
		$func_id=$rowsel['func_id'];
		
		$skillset=$rowsel['skillset'];
		$quali=$rowsel['qualification'];
		
		
		
		if(isset($_REQUEST[save]))
		{
		$hid=$_REQUEST['hid'];
		
		$proid=$_REQUEST['proname'];
		$discname=$_REQUEST['discname'];
		$role=$_REQUEST['role'];
		$t_name=$_REQUEST['t_name'];
		$fun_ar_name=$_REQUEST['fun_ar_name'];
		$skillset=$_REQUEST['skillset'];
		$qualification=$_REQUEST['qualification'];
		
		
		
$ins=mysql_query("update skillset_qualification  set profession_id='$proid',disc_id='$discname',role_id='$role' ,tech_id='$t_name',func_id='$fun_ar_name',skillset='$skillset',qualification='$qualification' where id='$hid'");

$ms="Data have sucessfully saved";		
header("location:manage_skill.php?ms=$ms");
		
		}
   
 ?>
 
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript">


function update_t_name(){
	  $("#t_name").change(function(){
		 //alert('Hi');
		 var t_name_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "t_name=" + t_name_val
		   , dataType: "html"
		   , success: function(msg){
				$("#fun_area").html(msg);
			}
		 });
	  });
  }

function update_role(){
	  $("#role").change(function(){
		 //alert('Hi');
		 var role_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "role=" + role_val
		   , dataType: "html"
		   , success: function(msg){
				$("#techdiv").html(msg);
			}
		 });
	  });
  }


  function update_discname(){
	  $("#discname").change(function(){
		 //alert('Hi');
		 var discname_val = $(this).val();	
		 $.ajax({
		  type: "POST"
		   , url: "findState.php"
		   , cache: false
		   , data: "discname=" + discname_val
		   , dataType: "html"
		   , success: function(msg){
				$("#rolediv").html(msg);
			}
		 });
	  });
  }
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
  update_discname();
					 
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Edit Skillset and Qualification </div>
							
							<div style="float:right"><a href="manage_skill.php">Back</a></div>
													<div style="clear: both"></div>
				  </div>
                       
                      
                        
                         <div style="clear: both">&nbsp;</div>
                        
					<div class="clear"></div>
				  <div>
				  <form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2"><input type="hidden" name="hid" id="hid" value="<? echo $id ; ?>">&nbsp;<font color="#000099"><? echo $_REQUEST['ms'];  ?></font></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
					  
                      <tr>
                        <td>Select Profession Name</td>
                        <td>						
						<select name="proname" id="proname">
						
						<?
						$sel_pro=mysql_query("select * from profession where name!='' and id='$profession_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						<?
						$sel_pro=mysql_query("select * from profession where name!='' and id!='$profession_id'");
						while($rowpro=mysql_fetch_array($sel_pro))
						{
					 ?>
						<option value="<? echo $rowpro['id'] ; ?>"><? echo $rowpro['name'] ; ?></option>
						<? } ?>
						
						</select>						</td>
                      </tr>
					  
					  
					    <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
				      </tr>
					    <tr>
                        <td>Select Disciplinelist Name </td>
                        <td>
						<div id="statediv">
						<select name="discname" id="discname">
						
						<?
						$sel_dis=mysql_query("select * from disciplinelist where disc_name!='' and id='$disc_id'");
						while($rowdis=mysql_fetch_array($sel_dis))
						{
					 ?>
						<option value="<? echo $rowdis['id'] ; ?>"><? echo $rowdis['disc_name'] ; ?></option>
						<? } ?>
						
						<?
						$sel_dis=mysql_query("select * from disciplinelist where disc_name!='' and id!='$disc_id'");
						while($rowdis=mysql_fetch_array($sel_dis))
						{
					 ?>
						<option value="<? echo $rowdis['id'] ; ?>"><? echo $rowdis['disc_name'] ; ?></option>
						<? } ?>
						
						
						
						</select></div>									</td>
                      </tr>
					  
					   <tr>
					     <td>&nbsp;</td>
					     <td>&nbsp;</td>
				      </tr>
					   <tr>
                        <td>Select  Role Name </td>
                        <td><div id="rolediv"><select name="role" id="role" >
						
						<?
						$sel_role=mysql_query("select * from role where role!='' and id='$role_id'");
						while($rowrole=mysql_fetch_array($sel_role))
						{
					 ?>
						<option value="<? echo $rowrole['id'] ; ?>"><? echo $rowrole['role'] ; ?></option>
						<? } ?>
						
						<?
						$sel_role=mysql_query("select * from role where role!='' and id!='$role_id'");
						while($rowrole=mysql_fetch_array($sel_role))
						{
					 ?>
						<option value="<? echo $rowrole['id'] ; ?>"><? echo $rowrole['role'] ; ?></option>
						<? } ?>
						
						
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
						 				
							<?
						$sel_tech=mysql_query("select * from technology where technology!='' and id='$tech_id'");
						while($rowtech=mysql_fetch_array($sel_tech))
						{
					 ?>
						<option value="<? echo $rowtech['id'] ; ?>"><? echo $rowtech['technology'] ; ?></option>
						<? } ?>
						
						<?
						$sel_tech=mysql_query("select * from technology where technology!='' and id!='$tech_id'");
						while($rowtech=mysql_fetch_array($sel_tech))
						{
					 ?>
						<option value="<? echo $rowtech['id'] ; ?>"><? echo $rowtech['technology'] ; ?></option>
						<? } ?>
											
						</select></div>						</td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Functional Area Name</td>
                         <td>
						 <div id="fun_area">
					     <select name="fun_ar_name" id="fun_ar_name">	
						 					
						<?
						$sel_fun=mysql_query("select * from functional_area  where func_area_name!='' and id='$func_id'");
						while($rowfun=mysql_fetch_array($sel_fun))
						{
					 ?>
						<option value="<? echo $rowfun['id'] ; ?>"><? echo $rowfun['func_area_name'] ; ?></option>
						<? } ?>
						
						<? 
						$sel_fun=mysql_query("select * from functional_area  where func_area_name!='' and id!='$func_id'");
						while($rowfun=mysql_fetch_array($sel_fun))
						{
					 ?>
						<option value="<? echo $rowfun['id'] ; ?>"><? echo $rowfun['func_area_name'] ; ?></option>
						<? } ?>					
						</select>
						 </div>
						 </td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Skillset </td>
                         <td><input type="text" name="skillset" id="skillset" value="<? echo $skillset ; ?>"></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Qualification</td>
                         <td><input type="text" name="qualification" id="qualification" value="<? echo  $quali; ?>"></td>
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