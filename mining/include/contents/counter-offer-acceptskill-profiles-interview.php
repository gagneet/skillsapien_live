<?php
           include_once('../../init.php');

			/*
			get candidate comment
			*/
			$sql="SELECT comment,user_id FROM `review_comment` WHERE `user_id`=".$_REQUEST['id'];
			$run=$db->query_silent($sql);
			while($data=$db->fetch_array($run))
			{
			?>
			 <
			<?php 
			}
			 
			 
			 
?>