<?php
session_start();

	include_once('../init.php');


include("fb_functions.php");
$app_id = "271741099535245";
$fb_authorize_url = 'https://graph.facebook.com/oauth/authorize?client_id='. $app_id .'&redirect_uri=http://182.50.141.145/applications/skillsapien/facebook/test.php&scope=user_activities,user_birthday,user_hometown,user_location,email';


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
	
	  $email=$_SESSION['user']['email'] = $info->email;
      $name=$_SESSION['user']['name'] = $info->name;	
      $fname=$_SESSION['user']['first_name'] = $info->first_name;
      $lname=$_SESSION['user']['last_name'] = $info->last_name;
      $uid=$_SESSION['user']['fb_id'] = $info->id;
	  $birthday=$_SESSION['user']['birthday'] = $info->birthday;
      $gender=$_SESSION['user']['gender'] = $info->gender;
	  $hometown=$_SESSION['user']['hometown'] = $info->hometown->name; 
	  $test=explode(',',$hometown); 
	  $hometown1= $test[1]; 
	  $country_query="select countries_id from countries where countries_name='".trim($hometown1)."'"; 
      $country_result=mysql_query($country_query); 
	  $country=mysql_fetch_array($country_result);
	  $country['countries_id']; 
	 if($gender=='male')
	 {
	 $gender1='M';
	 }
	 else
	 {
	 $gender1='F';
	 }
	 
	 //arvind test
    $pass=md5('123456');
	$cur_date=date("Y-m-d");
    $sql = "SELECT * FROM user_login_details WHERE login_id  = '". $uid ."'";	
	$req = mysql_query($sql);
	$count=mysql_num_rows($req);   
    $row=mysql_fetch_array($req);
    $user_id=$row['id'];
	if($count > 0){	
	
 	 $s->set('USER_ID',$user_id);
     $s->set('USER_LOGIN',"true");
	
		header("location:../candidate-dashboard.php");
		exit;
	}else{
		$ins ="INSERT INTO `skillsapien`.`user_login_details` (`name`, `login_id`, `password`, `type`, `date`, `status`) VALUES ('$name', '$uid', '$pass', 'C', '$cur_date', 'enable')";
	
		$db->query_silent($ins);
		$user_id=$db->insert_id(); 
	      $profile_query="INSERT INTO  `profiles` ( `user_id`, `first_name`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`country`,`photo`) VALUES ( '".$user_id."', '".$name."','".$gender1."', '".$birthday."',  '".$email."', now(),'".ENABLE."', '', '".$country['countries_id']."', '');"; 
		$db->query_silent($profile_query);
		header('location:test.php');
	}
	
//arvind test
	 
	 
	 
	 
   //$image = str_replace('##user##',$info->id,'https://graph.facebook.com/##user##/picture');
  /* 
	$sql = "SELECT us_email
, us_code
, us_pass
, us_activo  
FROM usuarios 
WHERE TRUE 
AND us_email = '". $mails ."'";	
	$req = mysql_query($sql);
	if(mysql_num_rows($req) > 0){
		$res = mysql_fetch_array($req);
		$_SESSION["usaro"] = $res[1];
		$encript = md5(md5(md5($res[1])));
		//setcookie("myname","Katerine Hall", time()+ (3600*24*30), '/');
		setcookie("ENTER_SS", $encript,0, '/');
		setcookie("ENTER_SSUS", $res[1], time()+ (3600*24*30), '/');
		header("location:../index.php");
		exit;
	}else{
		$ins = "INSERT INTO usuarios (us_email, us_code, us_pass , us_activo, fb_id , fuser_name) VALUES ('$mails','$fname', '1234567', 1 ,'$uid' , '$name')";
		mysql_query($ins);
	}
	echo "<script>window.location.href='http://www.vootar.com/php-includes/cargar_header.php'</script>";
	exit();
*/
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