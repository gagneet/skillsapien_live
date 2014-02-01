<?php
require('init.php');
$s->destroy();

unset($_SESSION);

setcookie('s_leo_auth_token','yyy',time()-3600,'','www.linkedin.com');
setcookie('leo_auth_token','opopo',time()-3600,'','www.linkedin.com');

   	header('location:index.php');
 ?>