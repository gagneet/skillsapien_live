<?php
function get_fb_info($token){
    if ($token == ''){
        return false;
    }
    
    $fb_info_url = 'https://graph.facebook.com/me?access_token='.$token;
    
    return json_decode(curl_get_contents($fb_info_url));
    
}
function get_fb_token($code){
    
    if ($code == ''){
        return false;
    }
    
    $app_id = "109075260944";
	$API_SECRET="c25f460c49ad4302ee96271b9dc0d058";
	$fb_token_url = 'https://graph.facebook.com/oauth/access_token?client_id='. $app_id .'&redirect_uri=http://www.vootar.com/facebook/index.php&client_secret='. $API_SECRET .'&code='. $code;
    $token = curl_get_contents($fb_token_url);
    $token = explode('&',$token);
    $token = explode('=',$token[0]);
    $token = $token[1];
    
    return $token;
}


function curl_get_contents($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_TIMEOUT, 5);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}


function get_user_info($id){
	global $db;
	
	if ($id == ''){
		return false;
	}
        
        $info = file_get_contents("https://api.facebook.com/method/fql.query?query=select name,pic from user where uid = $id&format=json");
	
	return $info;
}
?>