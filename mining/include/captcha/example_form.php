<?php

/**
 * Project:     Securimage: A PHP class for creating and managing form CAPTCHA images<br />
 * File:        form.php<br /><br />
 *
 * This is a very simple form sending a username and password.<br />
 * It demonstrates how you can integrate the image script into your code.<br />
 * By creating a new instance of the class and passing the user entered code as the only parameter, you can then immediately call $obj->checkCode() which will return true if the code is correct, or false otherwise.<br />
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or any later version.<br /><br />
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.<br /><br />
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA<br /><br />
 * 
 * Any modifications to the library should be indicated clearly in the source code 
 * to inform users that the changes are not a part of the original software.<br /><br />
 *
 * If you found this script useful, please take a quick moment to rate it.<br />
 * http://www.hotscripts.com/rate/49400.html  Thanks.
 *
 * @link http://www.phpcaptcha.org Securimage PHP CAPTCHA
 * @link http://www.phpcaptcha.org/latest.zip Download Latest Version
 * @link http://www.phpcaptcha.org/Securimage_Docs/ Online Documentation
 * @copyright 2007 Drew Phillips
 * @author drew010 <drew@drew-phillips.com>
 * @version 1.0.3.1 (March 23, 2008)
 * @package Securimage
 *
 */

  session_start();

?>
<html>
<head>
  <title>Securimage Test Form</title> 
<meta  name="google-site-verification" content="FeghUdvZog2MpOZkldiQkZ6pIMJr3IZ3pKQEQie5l4o" />
<meta name="google-site-verification" content="XKqOWsBkdoTZwm7D6bp4dR3fYVAvAKNuCAs668yL3Bk" /></head><body>

<!-- pass a session id to the query string of the script to prevent ie caching -->
<img src="securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>">


</body>
</html>
