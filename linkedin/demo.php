<?php
    session_start();
include_once('../init.php');
    /*$config['base_url'] = 'http://thinkdiff.net/demo/linkedin/auth.php';
    $config['callback_url'] = 'http://thinkdiff.net/demo/linkedin/demo.php';
    $config['linkedin_access'] = '';
    $config['linkedin_secret'] = '';*/
	
	$config['base_url'] = 'http://182.50.141.145/applications/skillsapien/linkedin/auth.php';
    $config['callback_url'] = 'http://182.50.141.145/applications/skillsapien/linkedin/demo.php';
    $config['linkedin_access'] = 'z8ff1crc6qmu';
    $config['linkedin_secret'] = '8AMUJFqIvOHPILkN';

    include_once "linkedin.php";
   
    
    # First step is to initialize with your consumer key and secret. We'll use an out-of-band oauth_callback
    $linkedin = new LinkedIn($config['linkedin_access'], $config['linkedin_secret'], $config['callback_url'] );
    //$linkedin->debug = true;

   if (isset($_REQUEST['oauth_verifier'])){
        $_SESSION['oauth_verifier'] = $_REQUEST['oauth_verifier'];

        $linkedin->request_token = unserialize($_SESSION['requestToken']);
        $linkedin->oauth_verifier = $_SESSION['oauth_verifier'];
        $linkedin->getAccessToken($_REQUEST['oauth_verifier']);

        $_SESSION['oauth_access_token'] = serialize($linkedin->access_token);
        header("Location: " . $config['callback_url']);
        exit;
   }
   else{
        $linkedin->request_token = unserialize($_SESSION['requestToken']);
        $linkedin->oauth_verifier = $_SESSION['oauth_verifier'];
        $linkedin->access_token = unserialize($_SESSION['oauth_access_token']);
   }


    # You now have a $linkedin->access_token and can make calls on behalf of the current member
 $xml_response = $linkedin->getProfile("~:(id,first-name,last-name,headline,picture-url,main-address,summary,date-of-birth)"); 
$index  = array(); 
$xml_array  = array(); 
$parser = xml_parser_create(); 
xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
xml_parse_into_struct($parser, $xml_response, $xml_array, $index);
xml_parser_free($parser);

 $candidate_id=$xml_array[1][value];
 $candidate_name=$xml_array[2][value].' '.$xml_array[3][value];
 $candidate_headline=$xml_array[4][value];
 $candidate_picture=$xml_array[5][value];
 $candidate_address=$xml_array[6][value];
 $candidate_summary=$xml_array[7][value]; 
 $candidate_dob=$xml_array[9][value].'-'.$xml_array[10][value].'-'.$xml_array[11][value];

	
//  $test=explode(" ",$xml_response);
//  $candidate_name=$test[7];
//  print_r($test);
// 	$candidate_id = $linkedin->getProfile("~:(id)");
//	$candidate_name = $linkedin->getProfile("~:(first-name)");
	$pass=md5('123456');
	$cur_date=date("Y-m-d");
//arvind test
    $sql = "SELECT * FROM user_login_details WHERE login_id  = '". $candidate_id ."'";	
	$req = mysql_query($sql);
	$count=mysql_num_rows($req);   
    $row=mysql_fetch_array($req);
    $user_id=$row['id'];
	if($count > 0){	
	
 	 $s->set('USER_ID',$user_id);
     $s->set('USER_LOGIN',"true");
	//	$res = mysql_fetch_array($req);
	//  $_SESSION["usaro"] = $res[1];
	//	$encript = md5(md5(md5($res[1])));
	//	setcookie("myname","Katerine Hall", time()+ (3600*24*30), '/');
	//	setcookie("ENTER_SS", $encript,0, '/');
	//	setcookie("ENTER_SSUS", $res[1], time()+ (3600*24*30), '/');	 
	 //   $s->set('UESR_ID','231');
		header("location:../candidate-dashboard.php");
		exit;
	}else{
		//$ins = "INSERT INTO user_login_details (name,login_id,password,type,date,status) VALUES ('$xml_response2','$xml_response1','$pass','C','now()','enable')";
		$ins ="INSERT INTO `skillsapien`.`user_login_details` (`name`, `login_id`, `password`, `type`, `date`, `status`) VALUES ('$candidate_name', '$candidate_id', '$pass', 'C', '$cur_date', 'enable')";
 	//	mysql_query($ins);
		$db->query_silent($ins);
		$user_id=$db->insert_id(); 
		
	      $profile_query="INSERT INTO  `profiles` ( `user_id`, `first_name`, `gender`, `birthdate`, `primary_email`, `date`, `status`,`company_details`,`about`,`photo`) VALUES ( '".$user_id."', '".$candidate_name."','M', '".$candidate_dob."',  '', now(),'".ENABLE."', '', '".$candidate_summary."', '".$candidate_picture."');";
		$db->query_silent($profile_query);
		header('location:demo.php');
		//echo "hi";
		
	//	echo insert_id();
	 //	header("location:../sign-up-candidate-profile.php");
	}
	
//	exit();
//arvind test

  /*  echo '<pre>';
    echo 'My Profile Info';
    echo $xml_response;
    echo '<br />';
    echo '</pre>';
*/

  //  $search_response = $linkedin->search("?company-name=facebook&count=10");
    //$search_response = $linkedin->search("?title=software&count=10");

   // echo $search_response;
   // $xml = simplexml_load_string($search_response);

    /*echo '<pre>';
    echo 'Look people who worked in facebook';
    print_r($xml);
    echo '</pre>';*/
?>