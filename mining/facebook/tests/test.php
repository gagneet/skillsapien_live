<?php
session_start();

	require("../php-includes/core/global.managementdb.class.php");

	$inicl = new dbManagement;


include("fb_functions.php");
$app_id = "109075260944";
$fb_authorize_url = 'https://graph.facebook.com/oauth/authorize?client_id='. $app_id .'&redirect_uri=http://www.vootar.com/facebook/test.php&scope=user_activities,user_birthday,user_hometown,user_location,email';

if (!isset($_GET['code'])){
     $_SESSION['referer_to'] = $_SERVER['HTTP_REFERER'];
     header('Location: '.$fb_authorize_url);
	/*echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";*/
}else{
    if (isset($_GET['code'])){
        $_SESSION['connection']['fb_code'] = $_GET['code'];
    }
    
    //echo '<pre> Codigo -->>'. print_r($_GET['code'],true) .'</>';
    
    $token = get_fb_token($_GET['code']);
    
    //echo '<pre> Token -->>'. print_r($token,true) .'</>';
    
    $_SESSION['connection']['fb_token'] = $token;
    
    $info = get_fb_info($token);
	
	/*echo "<pre>";
	print_r($info);
	echo "</pre>";*/
	 echo  $mails=$_SESSION['user']['email'] = $info->email;
     echo $name=$_SESSION['user']['name'] = $info->name;	
    echo $fname=$_SESSION['user']['first_name'] = $info->first_name;
    echo  $lname=$_SESSION['user']['last_name'] = $info->last_name;
     echo $uid=$_SESSION['user']['fb_id'] = $info->id;
	 
	 
   //$image = str_replace('##user##',$info->id,'https://graph.facebook.com/##user##/picture');
   
 echo $ins="INSERT INTO usuarios (us_email, us_pass , us_activo, fb_id , fuser_name) VALUES ('$mails', '123456', 1 ,'$uid' , '$name')";
   mysql_query($ins);

	//select * from usuarios where us_email='krbrajesh6@gmail.com';
	
}

/*if (isset($_GET['code'])){

$uid=$_POST['id'];

$name=$_POST['name'];

$mail=$_POST['email'];

$fname=$_POST['first_name'];

$times=$_POST['updated_time'];

$ins="INSERT INTO usuarios (us_email, us_code, us_pass, us_activo, fb_id) VALUES ('$mail', '$name', '$clave', 1,'$uid')";
mysql_query($ins);
}*/
?>