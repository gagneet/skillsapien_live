<?php 
 
   include 'include/header.php';
   
 if($_REQUEST['login']=="Log In")
 {
   $sql='SELECT * FROM `admin_login_details` WHERE `login_id`="'.$db->dataTrim($_REQUEST['login_username']).'" and  `password`="'.md5($db->dataTrim($_REQUEST['login_password'])).'" and  `status` like "'.ENABLE.'"';
   $run=$db->query_silent($sql);
   $data=$db->fetch_array($run);
   if($db->num_rows($run)==1)
   {
     $s->set('A_USER_ID',$data['id']);
     $s->set('A_USER_NAME',$data['name']);
	 header('location:welcome.php');
   }
   else
   {
   	$login_errror='User id or password is incorrect.';
   }
   
 }
?>
</head>
<body onLoad="javascript: document.forms[0].username.focus();">

<div class="header">
      <div class="logo"><a href="#"><img height="39" border="0" width="329" alt="" src="../images/logo.png"></a></div>
      
    </div>
   
    <div id="main_cont">
         <div class="logForm dorpShadow">
          <div align="center">
	  <form name="login_form" id="logForm" action="" method="post"  >
	  <table cellpadding="0" cellspacing="0" border="0" width="50%" align="center">
	  <tr><td>&nbsp;</td><td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td colspan="2">              <?php if(	$login_errror!="") {?>
              <li>
                	<div class="error"><?php echo 	$login_errror?> </div>
              </li>
              <?php }?>
</td>
	    </tr>
	  <tr>
	    <td>Enter User Id </td>
	    <td><input class="classInput" type="Text" name="login_username" id="username"  ></td></tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr>
	    <td>Enter Password </td>
	    <td><input class="classInput" type="password" name="login_password" id="password"> </td></tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    </tr>
	  <tr><td colspan="2" align="center"> <input type="Submit"   value="Log In"  name="login" class="inputBtn"/>
	  </td></tr>
	  </table>
        </form>
        <div class="b-left-section "></div>
        <div class="clear"></div>
      </div>
        </div>
    </div>
</body> 
</html>