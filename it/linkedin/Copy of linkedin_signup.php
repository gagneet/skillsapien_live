<?php

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
    'appKey'       => 'jp3aj1x67wzj',
	  'appSecret'    => 'TqQXN15HQZ3R4iGk',
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

        echo "<pre>" . print_r($response['linkedin'], TRUE) . "</pre>";
			  require('../init.php');
			  $insertValues = array();
			  
			  foreach($response['linkedin'] as $row){
				  $insertValues[] = $row;
				  
			  }
			  
			    $linkedinID 	= $insertValues[0];
				$linkedinID		= base64_encode($linkedinID);
			    $fName 			= $insertValues[1];
			    $lName 			= $insertValues[2];
				$profileImage	= $insertValues[3];
				$address		= $insertValues[4];
				$industry 		= $insertValues[5];
				$distance 		= $insertValues[6];
				$headline 		= $insertValues[7];
				echo $location 		= $insertValues['location']['name'];
echo 				$dob 		= $insertValues[9];exit;
				
			
			 $sql = "Select user_id from profiles where first_name = '".$fName."' AND last_name= '".$lName."' AND industry= '".$industry."'
					AND linkedin_photo= '".$profileImage."'";
			 $getVal = $db->query_silent($sql);
			if (!$getVal) {
				die('Invalid query: ' . mysql_error());
			}
			 $getCount = mysql_num_rows($getVal);
		
			if($getCount <=0){
			echo $sql="INSERT INTO  `".database."`.`user_login_details` ( `name`, `login_id`, `type`, `date`, `signup_date`, `status`) 
				   VALUES ( '', '".$fName."', 'C', now(), now(),'".ENABLE."')"; 
							
			$getNewQry = $db->query_silent($sql);
			if (!$getNewQry) {
				die('Invalid query: ' . mysql_error());
			}
			$user_id=$db->insert_id();  
			
			 $profileSql="INSERT INTO  `".database."`.`profiles` ( `user_id`, `username`, `gender`, `birthdate`, `primary_email`, `date`, 
						`status`,`profession_type`,`linkedin_photo`,`first_name`,`last_name`,`industry`) VALUES 
						( '".$user_id."', '".$fName."','', 
						'',  
						'', now(),'".ENABLE."', 
						'','".$profileImage."','".$fName."','".$lName."','".$industry."');";
						
					
			if($db->query_silent($profileSql)){
				session_start();
					$s->set('USER_LOGIN',"true");
			 
			 		$s->set('USER_TYPE',"C");
			 
					$s->set('USER_ID',$user_id);
					
					$s->set('linkedinid',$linkedinID);
					
					$s->set('USER_NAME',base64_encode($fName));
					
					$s->set('USER_LOGIN_ID',base64_encode($fName));
				
					header('location:../candidate-dashboard.php');
					
			}
			}else {
				 $data = mysql_fetch_assoc($getVal);
				 $user_id = $data['user_id'];
				
				session_start();
					$s->set('USER_LOGIN',"true");
			 
			 		$s->set('USER_TYPE',"C");
			 
					$s->set('USER_ID',$user_id);
					
					$s->set('linkedinid',$linkedinID);
					
					$s->set('USER_NAME',base64_encode($fName));
					
					$s->set('USER_LOGIN_ID',base64_encode($fName));
					
					header('location:../candidate-dashboard.php');
			}
			if (!$db->query_silent($profileSql)) {
				die('Invalid query: ' . mysql_error());
			}
			
            } else {
              // request failed
              echo "Error retrieving profile information:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response) . "</pre>";
            } 
          } else {
            // user isn't connected
            ?>
            <form id="linkedin_connect_form" action="imp/linkedin_signup.php" method="get">
              <input type="hidden" name="<?php echo LINKEDIN::_GET_TYPE;?>" id="<?php echo LINKEDIN::_GET_TYPE;?>" value="initiate" />
              <input type="submit" style="background-image:url(imp/linkedin_signup.png);width:156px; height:28px;border:none;position:relative;left:135px;cursor:pointer;" value="" />
            </form>
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