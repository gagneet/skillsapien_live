<?php 
	  session_start();
    error_reporting (0); 
/* Database Host Name */ 
  
 define('host','localhost');
/* Database Username */ 
    
 //define('username','root');
define('username','portfolio');
  
 
// define('password','');
define('password','port123#');
/* Database and Session prefixes */ 
define('DB_PREFIX', ''); ## Do not edit ! 
 
  
define('database','skillsapien'); 
define('WM_WEB_LINK', ''); ## WEB SITE LINK	
define('WM_MEMBERS', 'members/'); ## members folder path
define('WM_INCLIDE', 'include/'); ## include folder path
define('WM_CONTENT', 'contents/'); ## web content html and relatted dynamic work folder path
define('WM_CAPTCHA', 'captcha/'); ## web content html and relatted dynamic work folder path
define('WM_CLASS', 'class/'); ## web class and relatted dynamic work folder path
define('WM_IMAGES', 'images/'); ## web images folder path
define('SITE_PATH', 'http://182.50.141.145/applications/skillsapien/'); ## web content html and relatted dynamic work folder path
define('SITE_NAME', 'SKILL SAPIEN'); ##SET SITE NAME

define('SITE_ROOT', '/skillsapien/'); ##SET SITE ROOT

define('SESSION_PREFIX', 'probid_');

/*
	SET EMAIL INFO
*/
define('LOGIN_USER_EMAIL', 'rajesh@w3csolutions.com'); 
define('LOGIN_USER_SUBJECT', 'User registered'); 


define('ENABLE', 'enable'); ## set status 
define('DISABLE', 'disable'); ## set status

define('REDIRECT_TIME', '15000'); ## set redirect time

define('REDIRECT_PAGE', 'index.php'); ## set redirect page set index.php(root) or page name

/*  profile image setting*/
define('P_MAX_SIZE', ''); ## set MAX SIZE
define('P_IMAGE_FOLDER', 'profile_img/'); ## set PROFILE PHOTO
define('CV_FOLDER', 'cv/'); ## set CV PATH
define('AUDIO_FOLDER', 'audio_video/'); ## set CV PATH
define('POST_JOB_FILE_FOLDER', 'post_job_file/'); ## set CV PATH
//---------------

define('ACCEPT_FOLDER', 'accept_file/'); ## set CV PATH
//ALLOW IMAGE
define('ALLOW_ACCEPT_FILE','gif,jpeg,jpg,png');
define('ALLOW_ACCEPT_SIZE','2097152');
//-----------------------
define('DMY', 'd-m-Y'); ## set date formate

define('HIS', 'h:i:s'); ## set time formate

define('SIGN_UP_TITLE', SITE_NAME." : Sign up"); ## set date formate

//ALLOW IMAGE
define('ALLOW_IMAGE','gif,jpeg,jpg,png');
define('ALLOW_IMAGE_SIZE','2097152');

//ALLOW AUDIO 
define('ALLOW_AUDIO','.mp3,jpeg,jpg,png');
define('ALLOW_AUDIO_SIZE','52428800');//50 M


 
 ini_set('post_max_size','50M');//for audio video upload 
 
 ini_set('upload_max_filesize','50M');//for audio video upload
 
  
 //===========
 //password setting
define("MIN_PASSWORD",6);
define("MAX_PASSWORD",15);

define("CURRENCY",'$');

//////pagnation
define('TEXT_RESULT_PAGE', 'Result Pages:');
define("MAX_DISPLAY_ORDER_HISTORY",'5');
define('PREVNEXT_TITLE_FIRST_PAGE', 'First Page');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Previous Page');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Next Page');
define('PREVNEXT_TITLE_LAST_PAGE', 'Last Page');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Previous Set of %d Pages');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Next Set of %d Pages');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;FIRST');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Prev]');
define('PREVNEXT_BUTTON_NEXT', '[Next&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'LAST&gt;&gt;');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> orders)');
 define('PREV_NEXT_BAR_LOCATION',2);
 define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <strong>%d</strong> to <strong>%d</strong> (of <strong>%d</strong> jobs)');
  define('MAX_DISPLAY_PAGE_LINKS',2);
define('MAX_DISPLAY_SEARCH_RESULTS',2);  
  
 ?>