<?php
include_once('init.php');
//Is_valid_uesr();

$uuid=$s->value('USER_ID');

if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
			  }
//echo $user_id;
if(isset($_POST['sub'])){
	
	$userName =$_POST['username'];
 	$email	  =$_POST['email'];
	$password =$_POST['password'];
	
 $sql ="update user_login_details set name='".$userName."', login_id='".$email."', password='".md5($password)."' where id='".$user_id."'";
 mysql_query($sql);
 //print_r($_SESSION);
  $userType = $s->value('USER_TYPE');
  if($userType =='R'){
	  header('location:recruiters-dashboard.php');
}elseif($userType =='C'){
	  header('location:candidate-dashboard.php');	
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<script type="text/javascript">

function usercheck(){
	//alert('hii');
	var emailid	 =document.getElementById('email').value;
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		var str11 = xmlhttp.responseText;
		//alert(str11);
		document.getElementById('rowcount').value =str11;
		
		
    }
	
  }
xmlhttp.open("GET","checkuser.php?emailid="+emailid, true);
xmlhttp.send();

}

function funsubmit(){
	
	//var username =document.getElementById('username').value;
	var emailid	 =document.getElementById('email').value;
	var password =document.getElementById('password').value;
	/*if( username ==''){
		alert('Please Enter username');
		return false;
	}*/
	if( emailid ==''){
		alert('Please Enter your Email id ');
		return false;
	}else{
			 var validemail = echeck(emailid);
			 if(validemail == false){
				 return false;
			 }
		}
	
	if( password ==''){
		alert('Please Enter your Password');
		return false;
	}
	
	if((document.getElementById('rowcount').value)==0 && (document.getElementById('rowcount').value)!=''){
		//alert(document.getElementById('rowcount').value);
		//alert('valid');
		return true;
	}else{
		
		//alert(document.getElementById('rowcount').value);
		alert('Your Email id is allready existed');
		return false;
	}
	
	
}

function echeck(email) {
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
		return (true);
	}
	message = "Invalid E-mail Address";
	alert(message);
	//document.getElementById('errorReg').innerHTML = message;
	//document.getElementById('emailError').innerHTML = message;
	return (false);
}

</script>
<body>
<div id="outer">
<div id="men">
    <?php echo $get_template->process('global_header.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="sign_cl space_mn">
      
        <div class="form_area2">
          <div class="row2">
          <form name="linkedinupdate" action="" method="post" >
            <table   style="margin-left:325px;">
            	<tr><td colspan="2" align="center"><h2>Update your login details </h2></td>
                </tr>
                <tr>
                	<td colspan="2"  style="line-height:5px;">&nbsp;</td>
                </tr>
            	<!--<tr>
                	<td class="required">User Name:</td><td><input type="text" name="username" id="username"  class="input3"/></td>
                </tr>-->
                <tr>
                	<td colspan="2"  style="line-height:5px;">&nbsp;</td>
                </tr>
                <tr>
                	<td>Email :</td><td><input type="text" name="email" id="email" class="input3" onblur="usercheck()"/></td>
                </tr>
                <tr>
                	<td colspan="2"  style="line-height:5px;">&nbsp;</td>
                </tr>
                <tr>
                	<td>Password :</td><td><input type="password" name="password" id="password" class="input3" />
                    						 <input type="hidden" name="rowcount" value=""  id="rowcount">
                    					</td>
                </tr>
                <tr>
                	<td colspan="2"  style="line-height:5px;">&nbsp;</td>
                </tr>
                <tr>
                	<td colspan="2"  align="center"><input type="submit" name="sub" id="sub" value=""  class="linkedinsubmit" onClick="return  funsubmit()"/></td>
                </tr>
                
            </table>
            </form>
         </div>
         
            <div class="clear"></div>
          </div>
          

   </div>
   </div>
  </div>
  
</div>
<div class="canten">
  <div class="clear"></div>
</div>
<?php echo $get_template->process('global_footer.php')?>
</div>



</body>
</html>
