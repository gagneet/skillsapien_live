<script type="text/javascript" >
function funsubmit(){
	
	var username =document.getElementById('username').value;
	var emailid	 =document.getElementById('email').value;
	var password =document.getElementById('password').value;
	if( username ==''){
		alert('Please Enter username');
		return false;
	}
	if( emailid ==''){
		alert('Please Enter your Email id ');
		return false;
	}
	if( password ==''){
		alert('Please Enter your Password');
		return false;
	}
	
	
	if((document.getElementById('user1').checked)){
		document.getElementById('type').value =document.getElementById('user1').value;
	}else if((document.getElementById('user2').checked)){
		document.getElementById('type').value =document.getElementById('user2').value;
	}
	
	
	document.getElementById('lusername').value =document.getElementById('username').value;
	document.getElementById('lemailid').value = document.getElementById('email').value;
	document.getElementById('lpassword').value =document.getElementById('password').value;
	
	if((document.getElementById('rowcount').value)==0 && (document.getElementById('rowcount').value)!=''){
		//alert(document.getElementById('rowcount').value);
		//alert('valid');
		return true;
	}else{
		//alert(document.getElementById('rowcount').value);
		alert('Your Email id is allready existed');
		return false;
	}
	
	
	/*
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
//alert(document.getElementById('rowcount').value);
	if((document.getElementById('rowcount').value)==0){
		//alert(document.getElementById('rowcount').value);
		//alert('valid');
		return true;
	}else{
		//alert(document.getElementById('rowcount').value);
		alert('Your Email id is allready existed');
		return false;
	}*/
		
	
//return false;
	
}

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
//alert(document.getElementById('rowcount').value);
	if((document.getElementById('rowcount').value)==0){
		//alert(document.getElementById('rowcount').value);
		//alert('valid');
		return true;
	}else{
		//alert(document.getElementById('rowcount').value);
		//alert('Your Email id is allready existed');
		return false;
	}
}



</script>


<?php


if(isset($_GET['lusername'])){
	//print'<pre>';
//print_r($_GET);
setcookie("type", $_GET['type'], time()+3600);
setcookie("lusername", $_GET['lusername'], time()+3600);
setcookie("lemailid", $_GET['lemailid'], time()+3600);
setcookie("lpassword", $_GET['lpassword'], time()+3600);

//$_SESSION['type']=$_GET['type'];
//$_SESSION['lusername']=$_GET['lusername'];
//$_SESSION['lemailid']=$_GET['lemailid'];
//$_SESSION['lpassword']=$_GET['lpassword'];
//print_r($_SESSION);



//exit;
}

/**
 * This file is used in conjunction with the 'LinkedIn' class, demonstrating 
 * the basic functionality and usage of the library.
 * 
 * COPYRIGHT:
 *   
 * Copyright (C) 2011, fiftyMission Inc.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a 
 * copy of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in 
 * all copies or substantial portions of the Software.  
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING 
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
 * IN THE SOFTWARE.  
 *
 * SOURCE CODE LOCATION:
 * 
 *   http://code.google.com/p/simple-linkedinphp/
 *    
 * REQUIREMENTS:
 * 
 * 1. You must have cURL installed on the server and available to PHP.
 * 2. You must be running PHP 5+.  
 *  
 * QUICK START:
 * 
 * There are two files needed to enable LinkedIn API functionality from PHP; the
 * stand-alone OAuth library, and the Simple-LinkedIn library. The latest 
 * version of the stand-alone OAuth library can be found on Google Code:
 * 
 *   http://code.google.com/p/oauth/
 * 
 * The latest versions of the Simple-LinkedIn library and this demonstation 
 * script can be found here:
 * 
 *   http://code.google.com/p/simple-linkedinphp/
 *   
 * Install these two files on your server in a location that is accessible to 
 * this demo script. Make sure to change the file permissions such that your 
 * web server can read the files.
 * 
 * Next, make sure the path to the LinkedIn class below is correct.
 * 
 * Finally, read and follow the 'Quick Start' guidelines located in the comments
 * of the Simple-LinkedIn library file.   
 *
 * @version 3.2.0 - November 8, 2011
 * @author Paul Mennega <paul@fiftymission.net>
 * @copyright Copyright 2011, fiftyMission Inc. 
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License 
 */

/**
 * Session existance check.
 * 
 * Helper function that checks to see that we have a 'set' $_SESSION that we can
 * use for the demo.   
 */ 
function oauth_session_exists() {
  if((is_array($_SESSION)) && (array_key_exists('oauth', $_SESSION))) {
    return TRUE;
	
  } else {
    return FALSE;
  }
}

try {
  // include the LinkedIn class
  require_once('linkedin_3.2.0.class.php');
  
  // start the session
  if(!session_start()) {
    throw new LinkedInException('This script requires session support, which appears to be disabled according to session_start().');
  }
  
  // display constants
  $API_CONFIG = array(
    'appKey'       => 'l3ew77lgm0hi',
	  'appSecret'    => 'RKgN0zFLwr413tdc',
	  'callbackUrl'  => NULL 
  );
  define('DEMO_GROUP', '4010474');
  define('DEMO_GROUP_NAME', 'Simple LI Demo');
  define('PORT_HTTP', '80');
  define('PORT_HTTP_SSL', '443');

  // set index
  $_REQUEST[LINKEDIN::_GET_TYPE] = (isset($_REQUEST[LINKEDIN::_GET_TYPE])) ? $_REQUEST[LINKEDIN::_GET_TYPE] : '';
  switch($_REQUEST[LINKEDIN::_GET_TYPE]) {
    case 'initiate':
      /**
       * Handle user initiated LinkedIn connection, create the LinkedIn object.
       */
        
      // check for the correct http protocol (i.e. is this script being served via http or https)
      if($_SERVER['HTTPS'] == 'on') {
        $protocol = 'https';
      } else {
        $protocol = 'http';
      }
      
      // set the callback url
      $API_CONFIG['callbackUrl'] = $protocol . '://' . $_SERVER['SERVER_NAME'] . ((($_SERVER['SERVER_PORT'] != PORT_HTTP) || ($_SERVER['SERVER_PORT'] != PORT_HTTP_SSL)) ? ':' . $_SERVER['SERVER_PORT'] : '') . $_SERVER['PHP_SELF'] . '?' . LINKEDIN::_GET_TYPE . '=initiate&' . LINKEDIN::_GET_RESPONSE . '=1';
      $OBJ_linkedin = new LinkedIn($API_CONFIG);
      
      // check for response from LinkedIn
      $_GET[LINKEDIN::_GET_RESPONSE] = (isset($_GET[LINKEDIN::_GET_RESPONSE])) ? $_GET[LINKEDIN::_GET_RESPONSE] : '';
      if(!$_GET[LINKEDIN::_GET_RESPONSE]) {
        // LinkedIn hasn't sent us a response, the user is initiating the connection
        
        // send a request for a LinkedIn access token
        $response = $OBJ_linkedin->retrieveTokenRequest();
		
        if($response['success'] === TRUE ) {
			
          // store the request token
          $_SESSION['oauth']['linkedin']['request'] = $response['linkedin'];
          
          // redirect the user to the LinkedIn authentication/authorisation page to initiate validation.
          header('Location: ' . LINKEDIN::_URL_AUTH . $response['linkedin']['oauth_token']);
		  
        } else {
          // bad token request
          echo "Request token retrieval failed:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
        }
      } else {
        // LinkedIn has sent a response, user has granted permission, take the temp access token, the user's secret and the verifier to request the user's real secret key
        $response = $OBJ_linkedin->retrieveTokenAccess($_SESSION['oauth']['linkedin']['request']['oauth_token'], $_SESSION['oauth']['linkedin']['request']['oauth_token_secret'], $_GET['oauth_verifier']);
        if($response['success'] === TRUE) {
          // the request went through without an error, gather user's 'access' tokens
          $_SESSION['oauth']['linkedin']['access'] = $response['linkedin'];
          
          // set the user as authorized for future quick reference
          $_SESSION['oauth']['linkedin']['authorized'] = TRUE;
            
          // redirect the user back to the demo page
          header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
          // bad token access
          echo "Access token retrieval failed:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
        }
      }
      break;

    case 'revoke':
      /**
       * Handle authorization revocation.
       */
                    
      // check the session
      if(!oauth_session_exists()) {
        throw new LinkedInException('This script requires session support, which doesn\'t appear to be working correctly.');
      }
      
      $OBJ_linkedin = new LinkedIn($API_CONFIG);
      $OBJ_linkedin->setTokenAccess($_SESSION['oauth']['linkedin']['access']);
      $response = $OBJ_linkedin->revoke();
      if($response['success'] === TRUE) {
        // revocation successful, clear session
        session_unset();
        $_SESSION = array();
        if(session_destroy()) {
          // session destroyed
          header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
          // session not destroyed
          echo "Error clearing user's session";
        }
      } else {
        // revocation failed
        echo "Error revoking user's token:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
      }
      break;
    default:
      // nothing being passed back, display demo page
      
      // check PHP version
      if(version_compare(PHP_VERSION, '5.0.0', '<')) {
        throw new LinkedInException('You must be running version 5.x or greater of PHP to use this library.'); 
      } 
      
      // check for cURL
      if(extension_loaded('curl')) {
        $curl_version = curl_version();
        $curl_version = $curl_version['version'];
      } else {
        throw new LinkedInException('You must load the cURL extension to use this library.'); 
      }
      ?>
      <!DOCTYPE html>
      <html lang="en">
        <head>
        
          
         
        </head>
        <body>
         
          <?php
          $_SESSION['oauth']['linkedin']['authorized'] = (isset($_SESSION['oauth']['linkedin']['authorized'])) ? $_SESSION['oauth']['linkedin']['authorized'] : FALSE;
          if($_SESSION['oauth']['linkedin']['authorized'] === TRUE) {
            $OBJ_linkedin = new LinkedIn($API_CONFIG);
            $OBJ_linkedin->setTokenAccess($_SESSION['oauth']['linkedin']['access']);
          	$OBJ_linkedin->setResponseFormat(LINKEDIN::_RESPONSE_XML);
            ?>
            <!--<ul>
              <li><a href="#manage">Manage LinkedIn Authorization</a></li>
              <li><a href="#application">Application Information</a></li>
              <li><a href="#profile">Your Profile</a></li>
              <li><a href="demo/network.php">Your Network</a>
                <ul>
                  <li><a href="demo/network.php#networkStats">Stats</a></li>
                  <li><a href="demo/network.php#networkConnections">Your Connections</a></li>
                  <li><a href="demo/network.php#networkInvite">Invite Others to Join your LinkedIn Network</a></li>
                  <li><a href="demo/network.php#networkUpdates">Recent Connection Updates</a></li>
              	  <li><a href="demo/network.php#peopleSearch">People Search</a></li>
                </ul>
              </li>
              <li><a href="demo/company.php">Company API</a>
                <ul>
                  <li><a href="demo/company.php#companySpecific">Specific Company</a></li>
                  <li><a href="demo/company.php#companyFollowed">Followed Companies</a></li>
                  <li><a href="demo/company.php#companySuggested">Suggested Companies</a></li>
                  <li><a href="demo/company.php#companySearch">Company Search</a></li>
                </ul>
              </li>
              <li><a href="demo/jobs.php">Jobs API</a>
                <ul>
                  <li><a href="demo/jobs.php#jobsBookmarked">Bookmarked Jobs</a></li>
                  <li><a href="demo/jobs.php#jobsSuggested">Suggested Jobs</a></li>
                  <li><a href="demo/jobs.php#jobsSearch">Jobs Search</a></li>
                </ul>
              </li>
              <li><a href="demo/content.php">Creating / Sharing Content</a>
                <ul>
                  <li><a href="demo/content.php#contentUpdate">Post Network Update</a></li>
                  <li><a href="demo/content.php#contentShare">Post Share</a></li>
                </ul>
              </li>-->
<?php /*?>              <?php
            	
            	// check if the viewer is a member of the test group
            	$response = $OBJ_linkedin->group(DEMO_GROUP, ':(relation-to-viewer:(membership-state))');
              if($response['success'] === TRUE) {
          		  $result         = new SimpleXMLElement($response['linkedin']);
          		  $membership     = $result->{'relation-to-viewer'}->{'membership-state'}->code;
          		  $in_demo_group  = (($membership == 'non-member') || ($membership == 'blocked')) ? FALSE : TRUE;
	              ?>
	            	<li><a href="demo/groups.php">Groups API</a>
	                <ul>
	                  <li><a href="demo/groups.php#groupsSuggested">Suggested Groups</a></li>
	                  <li><a href="demo/groups.php#groupMemberships">Group Memberships</a></li>
	                  <li><a href="demo/groups.php#manageGroup">Manage '<?php echo DEMO_GROUP_NAME;?>' Group Membership</a></li>
	                  <?php 
	                  if($in_demo_group) {
	                    ?>
		                  <li><a href="demo/groups.php#groupSettings">Group Settings</a></li>
		                  <li><a href="demo/groups.php#groupPosts">Group Posts</a></li>
		                  <li><a href="demo/groups.php#createPost">Create a Group Post</a></li>
			                <?php 
		                }
		                ?>
		              </ul>
		            </li>
		            <?php 
			  		  } else {
			  		    // request failed
          			echo "Error retrieving group membership information: <br /><br />RESPONSE:<br /><br /><pre>" . print_r ($response, TRUE) . "</pre>";
			  		  }
		          ?>
            </ul><?php */?>
            <?php
          } else {
            ?>
           
            <?php
          }
          ?>
          
     
        
         
          <?php
          if($_SESSION['oauth']['linkedin']['authorized'] === TRUE) {
            // user is already connected
            ?>
            <!--<form id="linkedin_revoke_form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <input type="hidden" name="<?php echo LINKEDIN::_GET_TYPE;?>" id="<?php echo LINKEDIN::_GET_TYPE;?>" value="revoke" />
              <input type="submit" value="Revoke Authorization" />
            </form>-->
            
          
          <!--
            <h2 id="application">Application Information:</h2>
            
            <ul>
              <li>Application Key: 
                <ul>
                  <li><?php echo $OBJ_linkedin->getApplicationKey();?></li>
                </ul>
              </li>
            </ul>
            
            <hr />
            -->
           
            
            <?php
            $response = $OBJ_linkedin->profile('~:(id,first-name,last-name,picture-url,main-address,industry,distance,headline,location:(name),date-of-birth,skills,educations,interests,positions,languages,phone-numbers,member-url-resources:(url))');
			
            if($response['success'] === TRUE) {
              $response['linkedin'] = new SimpleXMLElement($response['linkedin']);

			  require('../init.php');
			  $xmlobj = $response['linkedin'];
			  
			  // Xml to array coversion
			  function toArray($xml) {
				$array = json_decode(json_encode($xml), TRUE);
			   
				foreach ( array_slice($array, 0) as $key => $value ) {
					if ( empty($value) ) $array[$key] = NULL;
					elseif ( is_array($value) ) $array[$key] = toArray($value);
				}
		
				return $array;
			}
			
			 // Get Personal, skill, education information from Linked in
			 $getAllValues = toArray($xmlobj);
			 
			 /*print'<pre>';
			 print_r($getAllValues);
			 exit;*/
			 
				 
			 
			 
			 
			 
			 
			// Get Only  Skill informatations
			 foreach($getAllValues['skills']['skill'] as $key){
				 foreach($key as $value){
					 foreach($value as $exactVal){
						$keywords= $keywords.",".$exactVal;
					 }
				 }
			 }
			$linkedInSkillKeywords = substr($keywords, 1);
			
			
			// Get Only  Educational informatations
			 foreach($getAllValues['educations']['education'] as $val){
				 foreach($val as $value){
					 if(!is_array($value)){
					 $edu = $edu.",".$value;
					 }
					 else
					 {
						 foreach($value as $val){
							 $edu = $edu.",".$val;
						 }
					 }
					 
				 }
				$edu .= "<br>";
			 }
			
			 $eductionInformations = $edu;
			
			// Get contact number
			 foreach($getAllValues['phone-numbers']['phone-number'] as $val){
				 
				  $val;
			 }
			 $phoneNo =$val;
			
			 //echo $linkedInSkillKeywords;
			 //print'<pre>';print_r($getAllValues['skills']['skill']);exit;
			 
			 
			    $linkedinID 	= $getAllValues['id'];
				$linkedinID		= base64_encode($linkedinID);
			    $fName 			= $getAllValues['first-name'];
				$lName 			= $getAllValues['last-name'];
				$profileImage 	= $getAllValues['picture-url'];
				$address 		= $getAllValues['main-address'];
				$industry 		= $getAllValues['industry'];
				$distance 		= $getAllValues['distance'];
				$headline 		= $getAllValues['headline'];
				$locationDetails 	= $getAllValues['location']['name'];
				$locationAry 	= explode (',',$locationDetails);
				
				// created by naresh on 18-may for insert login details into user_login_details table .
				/*$loginname 		=$_SESSION['lusername'];
				$loginemailid	=$_SESSION['lemailid'];
				$loginpassword	=$_SESSION['lpassword'];
				$type			=$_SESSION['type'];*/
				
				$loginname 		=$_COOKIE["lusername"];
				$loginemailid	=$_COOKIE["lemailid"];
				$loginpassword	=$_COOKIE["lpassword"];
				$type			=$_COOKIE["type"];
				
				//echo $loginname;
				//echo $loginemailid;
				//echo $loginpassword;
				//echo $type;
				
				
				setcookie("type", "", time()-3600);
				setcookie("lusername", "", time()-3600);
				setcookie("lemailid", "", time()-3600);
				setcookie("lpassword", "", time()-3600);
				
				
				$country = $locationAry[count($locationAry)-1];
				
				if(count($locationAry) == 3){
					$state = $locationAry[count($locationAry)-2];
					$location  = $locationAry[count($locationAry)-3];
				}elseif(count($locationAry) == 2){
					
					$state = "";
					$location  = $locationAry[count($locationAry)-2];
				}elseif(count($locationAry) == 1){
					$state = "";
					$location  = "";
				}
				
				$dob 	= $getAllValues['date-of-birth']['year'].'-'.$getAllValues['date-of-birth']['month'].'-'.$getAllValues['date-of-birth']['day'];
							 
				
			
			 /*$sql = "Select user_id from profiles where first_name = '".$fName."' AND last_name= '".$lName."' AND industry= '".$industry."'
					AND linkedin_photo= '".$profileImage."'";
			 $getVal = $db->query_silent($sql);
			if (!$getVal) {
				die('Invalid query1: ' . mysql_error());
			}
			 $getCount = mysql_num_rows($getVal);
		
			if($getCount <=0)*/
			
			
			//print_r($_SESSION);exit;
			
			
			
			if($s->is_set('USER_ID') || $s->is_set('R_USER_ID')){
				
				$userType =$s->value('USER_TYPE');
				if($userType =='C'){
					$userId =$s->value('USER_ID');
				}else{
					$userId =$s->value('R_USER_ID');
				}
				
				$updateProfile = "UPDATE `profiles` 
						SET
						first_name='".$fName."',
						last_name='".$lName."',
						primary_contact_no='".$phoneNo."',
						city='".$location."',
						state='".$state."',
						country='".$country."',
						birthdate='".$dob."',
						industry='".$industry."',
						linkedin_photo='".$profileImage."',
						lin_address='".$address."',
						lin_headline='".$headline."'
						 WHERE user_id = '".$userId."'";
							 	
						$resc = mysql_query($updateProfile);
						
						if($userType =='C'){
								$updateSkillProfiles ="UPDATE skills_profiles 
											SET
											skill_keywords='".$linkedInSkillKeywords."',
											date='now()' where user_id ='".$userId."'";	
												
								$resc = mysql_query($updateSkillProfiles);
												
										}
										
						
					echo '<script type="text/javascript">';
						echo 'window.location="../update_account.php?update=sucess"';
						echo '</script>';	
						
										
										
										
										
										
			}			
			else
			{
				
			// User login details insertion query	
			 $sql="INSERT INTO  `".database."`.`user_login_details` ( `name`, `login_id`, `password`, `type`, `date`, `signup_date`, `status`,`vertical_id`) 
				   VALUES ( '".$loginname."', '".$loginemailid."', '".md5($loginpassword)."', '".$type."', now(), now(),'".ENABLE."','".VERTICAL_ID."')"; 
				   //exit;
							
			$getNewQry = $db->query_silent($sql);
			if (!$getNewQry) {
				die('Invalid query2: ' . mysql_error());
			}
			$user_id=$db->insert_id(); 
			
			// Skills insertion query
			if($type =='C'){
		 		$skillInsert="INSERT INTO  `skills_profiles` (`user_id`, `skill_keywords`, `date`,  `status`, `vertical_id`) 
								values ('".$user_id."','".$linkedInSkillKeywords."',now(),'".ENABLE."','".VERTICAL_ID."')";
					$db->query_silent($skillInsert);
					
					
						$cvsInsert =" INSERT INTO cvs ( id,  user_id, date, status) values (NULL, '".$user_id."', now(), '".ENABLE."')";
						$db->query_silent($cvsInsert);
						
						$rateInsert =" INSERT INTO rates ( id, user_id, date, status, vertical_id) values (NULL, '".$user_id."', now(), '".ENABLE."', ".VERTICAL_ID.")";
						$db->query_silent($rateInsert);
			}else{
				
				$rateInsert =" INSERT INTO recruiter_profile ( id,  user_id, date, status) values (NULL, '".$user_id."', now(), '".ENABLE."')";
						$db->query_silent($rateInsert);
				
			}
			
			
			
			
			
			
			
			
			// profile insertion query	
			 $profileSql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `username`, `gender`, `primary_email`, `date`, 
						`status`,`profession_type`,`linkedin_photo`,`first_name`,`last_name`,`industry`,`birthdate`,`city`,`state`,`country`,`lin_address`,`lin_headline`,`vertical_id`) VALUES 
						( '".$user_id."', '".$fName."','', 
						'', now(),'".ENABLE."', 
						'','".$profileImage."','".$fName."','".$lName."','".$industry."','".$dob."','".$location."','".$state."','".$country."'
						,'".$address."','".$headline."','".VERTICAL_ID."');";
					
					
						
					
			if($db->query_silent($profileSql)){
				session_start();
					$s->set('USER_LOGIN',"true");
			 
			 		$s->set('USER_TYPE', $type);
			 
				
					
					$s->set('linkedinid',$linkedinID);
					
				
				
					//header('location:../candidate-dashboard.php');
					if($type =='C'){
						
						$s->set('USER_ID',$user_id);
						$s->set('USER_NAME',base64_encode($fName));
						$s->set('USER_LOGIN_ID',base64_encode($fName));
						
						echo '<script type="text/javascript">';
						echo 'window.location="../candidate-dashboard.php"';
						echo '</script>';
						
					}elseif($type =='R'){
						
						$s->set('R_USER_ID',$user_id);
						$s->set('R_USER_NAME',base64_encode($fName));
						$s->set('R_USER_LOGIN_ID',base64_encode($fName));
						
						echo '<script type="text/javascript">';
						echo 'window.location="../recruiters-dashboard.php"';
						echo '</script>';
					}
			}
			}
			/*else {
				 $data = mysql_fetch_assoc($getVal);
				 $user_id = $data['user_id'];
				
				session_start();
					$s->set('USER_LOGIN',"true");
			 
			 		$s->set('USER_TYPE', $type);
			 
					$s->set('USER_ID',$user_id);
					
					$s->set('linkedinid',$linkedinID);
					
					$s->set('USER_NAME',base64_encode($fName));
					
					$s->set('USER_LOGIN_ID',base64_encode($fName));
					
					//header('location:../candidate-dashboard.php');
					
					echo '<script type="text/javascript">';
					echo 'window.location="../candidate-dashboard.php"';
					echo '</script>';
			}*/
			
            } else {
              // request failed
              echo "Error retrieving profile information:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response) . "</pre>";
            } 
          } else {
            // user isn't connected
            ?>
            <div style="position:absolute; top:250px; left:-25px;">
            <form id="linkedin_connect_form" action="linkedin/linkedin_signup.php" method="get">
            
            <input type="hidden" name="type" value=""  id="type">
            <input type="hidden" name="lusername" value=""  id="lusername">
            <input type="hidden" name="lemailid" value=""  id="lemailid">
            <input type="hidden" name="lpassword" value=""  id="lpassword">
            <input type="hidden" name="rowcount" value=""  id="rowcount">
			
            <div id="emailerror" >
            </div>
            
              <input type="hidden" name="<?php echo LINKEDIN::_GET_TYPE;?>" id="<?php echo LINKEDIN::_GET_TYPE;?>" value="initiate" />
              <input type="submit" style="background-image:url(linkedin/linkedin-new.png);width:207px; height:32px;border:none;position:relative;left:50px;cursor:pointer;" value=""  onClick="return  funsubmit()"/>
            </form>
            </div>
            <?php
          }
          ?>
          
        </body>
      </html>
      <?php
      break;
  }
} catch(LinkedInException $e) {
  // exception raised by library call
  echo $e->getMessage();
}

?>