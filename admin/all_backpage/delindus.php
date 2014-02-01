<?

  include 'include/header.php';
  
	$id=$_REQUEST['id'];
	
	$page=$_REQUEST['page'];
	
	if($page=="delindus")
	{
	$del=mysql_query("delete from industry where id='$id'");
	header("location:industrylist.php");
}

	if($page=="disclist")
	{
	$del=mysql_query("delete from disciplinelist where id='$id'");
	header("location:disciplinelist.php");
}


if($page=="professionlist")
	{
	$del=mysql_query("delete from profession where id='$id'");
	header("location:professionlist.php");
}

if($page=="role")
	{
	$del=mysql_query("delete from role  where id='$id'");
	header("location:rolelist.php");
}


?>