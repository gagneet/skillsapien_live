<?php
//include("includes/connection.php");
include_once('init.php');

 $candidate_ids=$_REQUEST['candidate_id'];
 $recuiter_ids=$_REQUEST['recuiter_id'];


if(isset($_REQUEST['submit'])){

     
     $name=$_REQUEST['name'];
	 $email=$_REQUEST['email'];
	  $phone=$_REQUEST['phone_no'];
	   $feedback_ratings=$_REQUEST['feedback_rating'];
	    $comment=$_REQUEST['comments'];
	   
		$ins=" INSERT INTO `all_feedbackS` (
		`id` ,
		`user_id` ,
		`recruiter_id` ,
		`name` ,
		`email` ,
		`phone` ,
		`comments` ,
		`date` ,
		`status` ,
		`feedback_rating` 		
		)
		VALUES (
		NULL , '".$candidate_ids."', '".$recuiter_ids."', '".$name."', '".$email."', '".$phone."', '".$comment."', Now(), '0', '".$feedback_ratings."')";
		mysql_query($ins);
		header('location:recruiters-dashboard.php');
		
		
	 //$to="info@skillsapien.com";
	$to="ajit@w3csolutions.com";
	 					
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
			alert('Please enter your comments.');
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
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <div class="center_in">
      <div class="center_left-feedb">
      <div><font color="#009900"><?php echo $msg; ?></font></div>
        <h1><font color="#0066CC">Please Feedback Given</font></h1>
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
            <div class="row2">
            <label class="label_cl">Feedback Rating Point : </label>
                          <select name="feedback_rating" id="feedback_rating" style="border: solid 1px #CCCCCC; padding:2px;">
							    <option selected="selected" value=""> -Select-&nbsp; </option>	
                                <option value="1"> 1 </option>	
                               <option value="2"> 2</option>	
                               <option value="3"> 3 </option>	
                               <option value="4"> 4 </option>	
                               <option value="5"> 5 </option>	
                                <option value="6"> 6 </option>	
                               <option value="7"> 7</option>	
                               <option value="8"> 8 </option>	
                               <option value="9"> 9 </option>	
                               <option value="10"> 10 </option>	
							</select>
          </div>
            <div class="row">
              <label class="label_cl">Comment </label>
              <textarea name="comments" class="textarea_cl"></textarea>
            </div>
          <div class="row">
             <input type="hidden" name="submit" />
              <input name="submit"  type="image"  src="images/submit_buttons.gif"  class="space_lcl"/>
            </div>
          </form>
        </div>
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
</div>
<!--Footer-->
<?php echo $get_template->process('global_footer.php')?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
