<?php 
	  session_start();
	  error_reporting (0); 
/* Database Host Name */ 
  
 define('host','localhost');
/* Database Username */ 
    
// define('username','portfolio');
 define('username','root');
  
 
// define('password','port123#');
 define('password','');
/* Database and Session prefixes */ 
define('DB_PREFIX', ''); ## Do not edit ! 
 
  
define('database','skillsapien'); 
define('WM_WEB_LINK', ''); ## WEB SITE LINK	
define('WM_MEMBERS', 'members/'); ## members folder path
define('WM_INCLIDE', 'include/'); ## include folder path
define('WM_CONTENT', 'content/'); ## web content html and relatted dynamic work folder path
define('WM_CAPTCHA', 'captcha/'); ## web content html and relatted dynamic work folder path
define('WM_IMAGES', 'images/'); ## web images folder path
define('SITE_PATH', 'http://182.50.141.145/applications/welthmash/'); ## web content html and relatted dynamic work folder path
define('SITE_NAME', 'WealthMash'); ##SET SITE NAME

define('SITE_ROOT', '/welthmash/'); ##SET SITE ROOT

define('UPLOAD_PATH', 'applications/welthmash/'); ##SET UPLOAD FILE PATH

define('SESSION_PREFIX', 'probid_');

/*
	SET EMAIL INFO
*/

define('OWNER_EMAIL', 'rajesh@w3csolutions.com'); 
define('OWNER_NAME', 'WealthMash'); 


define('LOGIN_USER_EMAIL', 'rajesh@w3csolutions.com'); 
define('LOGIN_USER_SUBJECT', 'User registered'); 


define('ENABLE', 'enable'); ## set status 
define('DISABLE', 'disable'); ## set status

define('REDIRECT_TIME', '15000'); ## set redirect time

define('REDIRECT_PAGE', 'index.php'); ## set redirect page set index.php(root) or page name

/*  profile image setting*/
define('P_MAX_SIZE', ''); ## set MAX SIZE
define('P_IMAGE_FOLDER', 'profile_img/'); ## set MAX SIZE
//---------------

define('DMY', 'd-m-Y'); ## set date formate
//--------------error auto hide time
define('ERROR_AUTO_HIDE_TIME',3000);//3S
define('CURRENCY','$');//3S
?>