 <?php 
 
   include 'include/header.php';
   //set user status
 		
		
		$id=$_REQUEST['id'];
		$sel=mysql_query("select * from description where id='$id'");
		
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
		
		$proid=$_REQUEST['title'];
		$discname=$_REQUEST['description'];
		
		
		
$ins=mysql_query("update description  set profession_id='$proid',disc_id='$discname',role_id='$role' ,tech_id='$t_name',func_id='$fun_ar_name',skillset='$skillset',qualification='$qualification' where id='$hid'");

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
				  <form name="frm1" id="frm1" action="" method="post" enctype="multipart/form-data">
				  <?php
    include("fckeditor.php");

                  $sBasePath = $_SERVER['PHP_SELF'] ;
            $sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;
            $oFCKeditor = new FCKeditor('FCKeditor') ;
            $oFCKeditor->BasePath   = $sBasePath ;
            $oFCKeditor->Value      = $_POST["FCKeditor"] ;
            $oFCKeditor->Create() ;
            ?>

				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2"><input type="hidden" name="hid" id="hid" value="<? echo $id ; ?>">&nbsp;<font color="#000099"><? echo $_REQUEST['ms'];  ?></font></td>
                      </tr>
                     
					    
					    <tr><td>
						Title
						</td>
						<td><input type="text" name="name" id="name"/></td>
						</tr>
					  
					   <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
				      </tr>
 
                       <tr>
                         <td>description</td>
                         <td><textarea rows="7" cols="20">
						 
						 </textarea>
						 </td>
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