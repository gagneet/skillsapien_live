<?php include_once('init.php');
$desc_id=$_REQUEST['desc_id'];
 $postedjob="select * from post_job where id='$desc_id'";
              $postedjob_query=mysql_query($postedjob);
              while($myjob=mysql_fetch_array($postedjob_query)) {
        	   $description=$myjob['description'];			
				}

 echo    $description;
?>