 <?php 
 
   include 'include/header.php';
   //set user status
 		include_once("fckeditor/fckeditor.php") ;
		$userid=$_REQUEST["id"];
		
		if(isset($_POST['save']))
		{
		 //$hid=$_POST['hid'];
		
		$name=$_POST['name'];
		$desc=$_POST['desc'];
		$update="update pages set title='".$name."', description='".$desc."'  where id='$userid'";
          mysql_query($update);
		  
		 
	header("location:manage_description.php?ms=$ms");
		  
		}
   
		$sql="select * from pages where id ='".$userid."'";
            $result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/_sample/sample.js" type="text/javascript"></script>
	<link href="ckeditor/_sample/sample.css" rel="stylesheet" type="text/css" />
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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;">Edit Description</div>
							
							<div style="float:right"><a href="manage_description.php">Back</a></div>
													<div style="clear: both"></div>
				  </div>
                       
                      
                        
                         <div style="clear: both">&nbsp;</div>
                        
					<div class="clear"></div>
				  <div>
				  <form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="2"><input type="hidden" name="hid" id="hid" value="<? echo $row['id'] ; ?>">&nbsp;<font color="#000099"><? echo $_REQUEST['ms'];  ?></font></td>
                      </tr>
                     
					    
					    <tr><td>
						Title
						</td>
						
						<td><input style="width:201px" type="text" name="name" id="name" value="<? echo $row['title'] ; ?>" / ></td>
						
						</tr>
					  
					   <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
				      </tr>
 
                       <tr>
                         <td>description</td>
                         <td>
						 
			 <? $ctrl_name = 'desc';
$sBasePath = 'http://182.50.141.145/applications/skillsepian_new/admin/fckeditor/';
$oFCKeditor = new FCKeditor($ctrl_name) ;
$oFCKeditor->Height = "300px";
$oFCKeditor->Width = "730px";
$oFCKeditor->BasePath = $sBasePath ;
$oFCKeditor->Value = $row['description'] ;
$oFCKeditor->Create() ;
?>
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