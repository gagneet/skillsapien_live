<?
$name="ravi";
  $msg .="There Are Folowing Information About User<br>";  
             $msg .="<b>Name</b>------------------" . $name. "<br>";
   
        $sub="User Enquiry";
          $from=$_REQUEST[email];
          $to="ravi.php08@gmail.com";
            $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:kk.p@gmail.com' . "\r\n" .
                     'Reply-To:ravi.php08@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();
        
          
          @mail($to,$sub,$msg,$headers);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
