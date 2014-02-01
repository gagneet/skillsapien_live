<?php
include_once('init.php');
Is_valid_uesr();

 $uuid=$s->value('USER_ID');
if($uuid>0)
			  {
			   	$user_id=$uuid;
			  }
			  if($s->value('R_USER_ID')>0)
			  {
			 	$user_id=$s->value('R_USER_ID');
			  }
 
$bidid=$_REQUEST['bidid'];
$jobposterid=$user_id;
$jobbidderid=$_REQUEST['bidderid'];
$poster=$_REQUEST['poster'];

echo $jobid=$_REQUEST['jobid'];
$post_time=date('Y-m-d');
$post_t=date('H:i:s A');

$daily_rate='';
//payment
if($_REQUEST['action']=='icost')
{

      $jobid_sql="SELECT net_bidcost  from profiles  where user_id='".$jobbidderid."'";
      $result=$db->query_silent($jobid_sql);
          $data=$db->fetch_array($result);
    $daily_rate=$data['net_bidcost'];	
   
 
if($daily_rate<500)
{
$credit_rate=5;
}
else if($daily_rate>=500 and $daily_rate<=750) {
$credit_rate=6;
}
else if($daily_rate>=750 and $daily_rate<=1000) {
$credit_rate=7;
}	 
else if($daily_rate>=1000 and $daily_rate<=1250) {
$credit_rate=8;
}	 
else if($daily_rate>=1250 and $daily_rate<=1500) {
$credit_rate=9;
}	 
else if($daily_rate>=1500 and $daily_rate<=2000) {
$credit_rate=10;
}	 
else if($daily_rate>=2000 and $daily_rate<=3000) {
$credit_rate=15;
}	 
else if($daily_rate>=3000 and $daily_rate<=4000) {
$credit_rate=20;
}	 
else if($daily_rate>=4000 and $daily_rate<=5000) {
$credit_rate=25;
}
else if($daily_rate>=5000) {
$credit_rate=30;
}	 

  $credit_rate;
 
 $net_amount=$daily_rate-$credit_rate;
 
      $payment_query12="update bid set  show_cinfo='1' where id='".$bidid."'"; 
 
	 mysql_query($payment_query12);
  
      $payment_query="update profiles set net_bidcost='".$net_amount."'   where user_id='".$jobbidderid."'"; 
     if(mysql_query($payment_query))
       {
        $result=$db->query_silent("select * from user_login_details where id='".$jobbidderid."'");
        $row=$db->fetch_array($result);
 
//unlocking candidate details 
        $candidate_query="SELECT p.photo, p.username, p.primary_email, p.gender, p.birthdate, p.primary_contact_no, p.other_contact_no, p.city, p.state, p.postcode, p.country, sp.skills_profile, sp.skill_keywords, sp.profile_summary, r.gt_currency, r.gt_amount, r.gt_time_period, uld.id, uld.type  FROM  profiles as p, skills_profiles as sp, rates as r, user_login_details as uld where uld.type='C' and uld.id=p.user_id and uld.id=sp.user_id and uld.id=r.user_id and uld.id='".$jobid."'";
	    $candidate_result=$db->query_silent($candidate_query);
		$candidate_info=$db->fetch_array($candidate_result);
		/*echo "<pre />";
		print_r($candidate_info);*/
		
		$country_query="select countries_name from countries where countries_id='".$candidate_info['country']."'";
		$country_result=$db->query_silent($country_query);
		$country=$db->fetch_array($country_result);
//unlocking candidate details		
        $to = $row['login_id']; 
        $subject = "Candidate details";
		$body ='<table bgcolor=yellow width=80% style="color:black;">
                    <tr><td colspan=2><h1>Candidate Details are as follows:</h1></td></tr>
					<tr><td colspan=2><hr></td></tr>
                    <tr><td width=25%><b>Candidate Id</b>:</td><td width=25%>'.$candidate_info['id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Candidate Name</b>:</td><td width=25%>'.$candidate_info['username'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Email</b>:</td><td width=25%>'.$candidate_info['primary_email'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Contact No.</b>:</td><td width=25%>'.$candidate_info['primary_contact_no'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Other Contact No.</b>:</td><td width=25%>'.$candidate_info['other_contact_no'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>City</b>:</td><td width=25%>'.$candidate_info['city'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>State</b>:</td><td width=25%>'.$candidate_info['state'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Postcode</b>:</td><td width=25%>'.$candidate_info['postcode'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Country</b>:</td><td width=25%>'.$country['countries_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Profile Title</b>:</td><td width=25%>'.$candidate_info['skills_profile'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Skills</b>:</td><td width=25%>'.$candidate_info['skill_keywords'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
                    <tr><td width=25%><b>Rate</b>:</td><td width=25%>'.CURRENCY.''.$candidate_info['gt_amount'].''.$candidate_info['gt_time_period'].''.'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Profile Summary</b>:</td><td width=25%>'.$candidate_info['profile_summary'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
                    <tr><td colspan=2><b>Thanks & Regards</b>,<br>Candidate</td></tr>
                </table>';
				   $headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From:'.$candidate_info['primary_email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
					
      if(mail($to,$subject,$body,$headers))
	      { 
		/*  echo '<script type="text/javascript" language="javascript">alert("Payment has successfully done !")</script>';  */
           $result1=$db->query_silent("select * from user_login_details where id='".$jobid."'");
           $row1=$db->fetch_array($result1);

//unlocking recruiter details
         $recruiter_query="SELECT p.photo, p.username, p.conpany_name, p.conpany_reg_id, p.conpany_reg_type, p.company_details, p.company_phone, p.profession_type, p.primary_email, p.gender, p.birthdate, p.primary_contact_no, p.other_contact_no, p.city, p.state, p.postcode, p.country, uld.id, uld.type  FROM  profiles as p, user_login_details as uld where uld.type='R' and uld.id=p.user_id and uld.id='".$jobbidderid."'";
	    $recruiter_result=$db->query_silent($recruiter_query);
		$recruiter_info=$db->fetch_array($recruiter_result);
		
		$country_query1="select countries_name from countries where countries_id='".$recruiter_info['country']."'";
		$country_result1=$db->query_silent($country_query1);
		$country1=$db->fetch_array($country_result1);
//unlocking recruiter details
          $to1 = $row1['login_id']; 
          $subject1 = "Recruiter Details";
          $body1 ='<table bgcolor=yellow width=80% style="color:black;">
                    <tr><td colspan=2><h1>Recruiter Details are as follows:</h1></td></tr>
					<tr><td colspan=2><hr></td></tr>
                    <tr><td width=25%><b>Recruiter Id</b>:</td><td width=25%>'.$recruiter_info['id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Recruiter Name</b>:</td><td width=25%>'.$recruiter_info['username'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Email</b>:</td><td width=25%>'.$recruiter_info['primary_email'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Comapany Name</b>:</td><td width=25%>'.$recruiter_info['conpany_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Registeration ID</b>:</td><td width=25%>'.$recruiter_info['conpany_reg_id'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Registeration Type</b>:</td><td width=25%>'.$recruiter_info['conpany_reg_type'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Details</b>:</td><td width=25%>'.$recruiter_info['company_details'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Company Phone</b>:</td><td width=25%>'.$recruiter_info['company_phone'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td width=25%><b>Country</b>:</td><td width=25%>'.$country1['countries_name'].'</td></tr>
                    <tr><td colspan=2>&nbsp;</td></tr>
					<tr><td colspan=2><b>Thanks & Regards</b>,<br>Recruiter</td></tr>
                </table>';
				    $headers1  = 'MIME-Version: 1.0' . "\r\n";
					$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers1 .= 'From:'.$recruiter_info['primary_email'] . "\r\n" .
					'Reply-To:' . "\r\n" .
					'X-Mailer: PHP/'.phpversion();
           mail($to1,$subject1,$body1,$headers1);
		  		  echo '<script type="text/javascript">
					<!--
					window.location = "msg_details.php?bidderid='.$jobbidderid.'&jobid='.$jobid.'&bidid='.$bidid.'&status=accept";
					//-->
					</script>';
          }
       }

   

}
?>