<?php require("../../include/config.php");
		//database class
		 
		$get_title="";
		$get_content="";
		$get_priority="";
		$get_statue="";
	
	if($_REQUEST['id']>0)
	{
		require_once("../../include/class_database.php");
	
		$db=new database();
		
		$sql='SELECT * FROM `home_content` WHERE `id`='.$_REQUEST['id'];
		$run=$db->query_silent($sql);
		$data=$db->fetch_array($run);
		
		 
		if($db->num_rows($run)==1)
		{
		  $get_title=$data['title'];
		  $get_content=$data['content'];
		  $get_priority=$data['priority'];
  		  $get_statue=$data['status'];
		  $query="update";
		  $get_show=$data['show'];
		}
	}
	 
?>
<?php
include("../fckeditor/fckeditor.php") ;
function tep_draw_fckeditor($name, $width, $height, $text) {
 $oFCKeditor = new FCKeditor($name);
 $oFCKeditor -> Width  = $width;
 $oFCKeditor -> Height = $height;
 //$oFCKeditor -> BasePath = 'http://com4/arup_platinum/functional/fckeditor/';
 $oFCKeditor -> BasePath = 'fckeditor/'; 
 $oFCKeditor -> Value = $text;
    $field = $oFCKeditor->Create($name);
    return $field;
  }

?>

<html>
<head>
 
</head>
<body>
<form method="post">
<input type="hidden" id="data" name="data" value="<?php echo  $query?>">
<input type="hidden" id="id" name="id" value="<?php echo  $data['id']?>">
<p>&nbsp;</p>
<table width="400" border="0">
  <tr>
    <td width="67">Title</td>
    <td width="8">&nbsp;</td>
    <td width="103"><input type="text" name="get_title" id="get_title" value="<?php echo $get_title?>" size="85"></td>
  </tr>
  <tr>
    <td>Content</td>
    <td>&nbsp;</td>
     <td>
      <?php /*?><textarea rows="10" cols="70" name="get_content" id="get_content"><?php echo $get_content?></textarea> <?php */?>
     <?
    $name="get_content";//like name of text field
    $width=400;
    $height=300;
   // $text = stripslashes($page_page_body_query_result['get_content']);//like value of text field
   $text=$get_content;
    tep_draw_fckeditor($name, $width, $height, $text);
    ?>

     </td> 
 </tr>
  
  <tr>
    <td><p>Priority</p></td>
    <td>&nbsp;</td>
    <td><input type="text" name="get_priority" id="get_priority" value="<?php echo $get_priority?>"></td>
  </tr>
  <tr>
    <td>FAQ Show</td>
    <td>&nbsp;</td>
    <td><select name="get_show" id="get_show">
    <option selected="selected" value="all">All</option>
    <option  value="site">Site</option>
    <option <?php if(strtolower($get_show)==strtolower('Member')) echo ' selected="selected" ' ; ?> value="member">Member</option>
    </select></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>&nbsp;</td>
    <td><input type="radio" name="get_statue"  id="get_statue1" value="<?php echo ENABLE?>" <?php  if(strtolower($get_statue)==strtolower(ENABLE)) echo "checked";?>>&nbsp;<label for="get_statue1"><?php echo ucwords(ENABLE)?></label>&nbsp;&nbsp;<input type="radio" name="get_statue" id="get_statue2" <?php  if(strtolower($get_statue)==strtolower(DISABLE)) echo "checked";?> value="<?php echo DISABLE?>">&nbsp;<label for="get_statue2"><?php echo ucwords(DISABLE)?></label></td>
  </tr>
  <tr>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td><input type="submit"  id="Save"  class="action-input" name="Save" value="Save">&nbsp;<input type="reset"    class="action-input"   value="Clear"></td>
  </tr>
</table>          
<p>&nbsp;</p>
<p>&nbsp;</p>

</form>
</body>
</html>


 