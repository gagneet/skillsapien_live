<?php
//include("includes/connection.php");
include_once('init.php');
?>
<?php 
if(isset($_REQUEST['submit'])){

     
     $name=$_REQUEST['name'];
	 $email=$_REQUEST['email'];
	  $phone=$_REQUEST['phone_no'];
	   $comment=$_REQUEST['comments'];
	
	 
	 $to="info@skillsapien.com";
	 					
	 $subject .="Contact Us";
	  
      $message .='
	  <table width="833" border="1" bgcolor="#66CCCC">
	 <tr>
		<td height="43" colspan="2" bgcolor="#FFFFFF"><strong>Welcome</strong></td>
	  </tr>
	  <tr>
		<td><font style="color:#FFFFFF"><strong>User Name :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$name.'</font></td>
	  </tr>
	   <tr>
		<td><font style="color:#FFFFFF"><strong>E-mail :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$email.'</font></td>
	  </tr>
	   <tr>
		<td><font style="color:#FFFFFF"><strong>Phone:</strong></font></td>
		<td><font style="color:#FFFFFF">'.$phone.'</font></td>
	  </tr>
	  
	  <tr>
		<td><font style="color:#FFFFFF"><strong>Message :</strong></font></td>
		<td><font style="color:#FFFFFF">'.$comment.'</font></td>
	  </tr>
	 
	  </table>';
	
   					
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From:'.$_REQUEST['email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
					
					if(@mail($to,$subject,$message,$headers)){
          //header("location:Subscrib_email.php?msg=Your Email has been send successfully.");
		  $msg = "Your email has been send successfully.";
		
	   }else{
	      //header("location:Subscrib_email.php?msg=Your Email doesn't send.");
		  $msg = "Your email doesn't send.";
	   }
	   
	
    
	   
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function checkvalue(frm)
{

 var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

	if(frm.name.value=="")
		{
			alert('Please enter your name.');
			frm.name.focus();
			return false;
		}
		 if(frm.email.value=="")
		{
			alert('Please enter your email.');
			frm.email.focus();
			return false;
		}	
		
			if(!pattern.test(frm.email.value)){         
		alert("Please enter correct email-id");
	frm.email.focus();		
  return false;
    }   
	 if(frm.phone_no.value=="")
		{
			alert('Please enter your phone no.');
			frm.phone_no.focus();
			return false;
		}
		 if(frm.comments.value=="")
		{
			alert('Please enter your message.');
			frm.comments.focus();
			return false;
		}


	else {
		return true;
	}
}
</script>

</head>
<body>
<div id="outer">
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="center_left">
      <div><font color="#009900"><?php echo $msg; ?></font></div>
        <h1>Contact Us</h1>
        
        <h2>Please fill in the form below:</h2>
        <div class="form_area">
          <form action="" method="post" name="frm" onSubmit="return checkvalue(this);">
            <div class="row">
              <label class="label_cl">Name* </label>
              <input type="text"  class="input_cl" name="name" />
            </div>
            <div class="row">
              <label class="label_cl">Email*</label>
              <input name="email" type="text"  class="input_cl"/>
            </div>
            <div class="row">
              <label class="label_cl">Phone*</label>
              <input name="phone_no" type="text"  class="input_cl" />
            </div>
            <div class="row">
              <label class="label_cl">Message*</label>
              <textarea name="comments" class="textarea_cl"></textarea>
            </div>
            <div class="row">
             <input type="hidden" name="submit" />
              <input name="submit"  type="image"  src="images/send_buttons.gif"  class="space_lcl"/>
            </div>
          </form>
        </div>
      </div>
      <div class="center_right">
        <div class="contact_box">
        <h2>General Contacts:</h2>
        <p>Phone: +61 (2) 8415 9775<br/>
        Email:	  <a href="mailto:info@skillsapien.com">info@skillsapien.com</a><br/>
        SkypeID:  <a href="skype:Skillsapien?call">Skillsapien</a></br>
        <!--Skype 'Skype Me™!' button
		http://www.skype.com/go/skypebuttons -->
		<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
		<a href="skype:Skillsapien?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_white_124x52.png" style="border: none;" width="124" height="52" alt="Skype Me™!" /></a>
        </p>
<h2>Address:</h2>
<p>Level 17, Coca-Cola Place<br/>
40 Mount Street<br/>
North Sydney<br/>
NSW 2060<br/>
Australia
</p>

<h2>Google Map Link:</h2>
<div><iframe width="325" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.au/maps?q=40+Mount+Street,+North+Sydney,+New+South+Wales&amp;hl=en&amp;sll=-25.335448,135.745076&amp;sspn=58.257118,83.144531&amp;vpsrc=0&amp;hnear=40+Mount+St,+North+Sydney+New+South+Wales+2060&amp;t=m&amp;ie=UTF8&amp;hq=&amp;z=14&amp;iwloc=A&amp;ll=-33.838554,151.205424&amp;output=embed"></iframe>
          </br>
          <small><a href="http://maps.google.com.au/maps?q=40+Mount+Street,+North+Sydney,+New+South+Wales&hl=en&ll=-33.838554,151.205424&spn=0.006773,0.010149&sll=-25.335448,135.745076&sspn=58.257118,83.144531&vpsrc=0&hnear=40+Mount+St,+North+Sydney+New+South+Wales+2060&t=m&z=17" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
		  </br>
		  </br>
          <h2>Customer Service:</h2>
          <p><a href="mailto:customer.service@skillsapien.com">customer.service@skillsapien.com</a></p>
		  <h2>Technical Support:</h2>
          <p><a href="mailto:support@skillsapien.com">support@skillsapien.com</a></p>
          <h2>For Sales:</h2>
          <p><a href="mailto:sales@skillsapien.com">sales@skillsapien.com</a></p>
           <h2>For Careers:</h2>
          <p><a href="mailto:careers@skillsapien.com">careers@skillsapien.com</a></p>
          <h2>To contact the Founder & CEO directly:</h2>
          <p><a href="mailto:victor@skillsapien.com">victor@skillsapien.com</a></p>
        </div>
        <div class="social">
          <div class="social_top">
            <h2>Follow us on:</h2>
          </div>
          <div class="social_di"> <a href="http://www.facebook.com/Skillsapien/"><img src="images/facebook.gif" alt="" /></a> <a href="http://www.linkedin.com/company/skillsapien/"><img src="images/link_in.gif" alt="" /></a> <a href="http://plus.google.com/107493995351899544917/"><img src="images/google_plus.jpg"  alt="" /></a> <a href="http://twitter.com/Skillsapien/"><img src="images/twitter.gif" alt="" /></a>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
        <br/><br/>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="canten">
  <div class="clear"></div>
</div>

<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</div></div>
</body>
</html>
