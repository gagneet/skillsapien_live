<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKILL SAPIEN</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">

function  displayCont(){ 
 $('#imagDiv').show();
		};
 function hideCont(){
			if($('#imagDiv').is(':visible')){  
				$('#imagDiv').hide();
			};
		};
		
 function showdesc(id){
 
   $.ajax({
      type: "POST",
      url: "bid_desc.php",
      cache: false,
      data: "desc_id=" + id  ,
      dataType: "html",
      success: function(msg){
	
       $("#job_description").text(msg);
      }
      });

	
	
};
</script>
<script language="javascript">

function ValidateDate(job_start_d,job_end_d)
    {
    var SDate = document.getElementById(job_start_d).value;    	
    var EDate =  document.getElementById(job_end_d).value;
       
	   
	 
     if(parseInt(SDate) > parseInt(EDate))	
    {
        alert("Please enter correct date");
        return false;
    }
}
function Validatemonth(job_start_m,job_end_m)
    {
    var SMonth = document.getElementById(job_start_m).value;    	
    var EMonth =  document.getElementById(job_end_m).value;
       
	   
	 
     if(parseInt(SMonth) > parseInt(EMonth))	
    {
        alert("Please enter correct month");
        return false;
    }
}

function Validateyear(job_start_y,job_end_y)
    {
    var SYear = document.getElementById(job_start_y).value;    	
    var EYear =  document.getElementById(job_end_y).value;
       
	   
	 
     if(parseInt(SYear) > parseInt(EYear))	
    {
        alert("Please enter correct year");
        return false;
    }
}
</script>

</head>
<body>

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


$selbid=mysql_query("select net_bidcost,expence_bidcost from profiles where user_id='$user_id'");
$rowbid=mysql_fetch_array($selbid);
 $net_bidcost=$rowbid['net_bidcost'];
 $expence_bidcost=$rowbid['expence_bidcost'];
$bidleft=$net_bidcost;


$jobid=$_REQUEST['jobid'];
$jpid=$_REQUEST['jpid'];


$skill_title="select * from skills_profiles where user_id='".$jobid."'";
$skill_query=mysql_query($skill_title);
$skillrows=mysql_fetch_array($skill_query);
$title_skill=$skillrows['skills_profile'];

$selprofile1=mysql_query("select * from profiles where user_id='$user_id'");
$rowprofile1=mysql_fetch_array($selprofile1);
 $senderemail=$rowprofile1['primary_email'];


$selprofile=mysql_query("select * from profiles where user_id='$jpid'");
$rowprofile=mysql_fetch_array($selprofile);
$posteremail=$rowprofile['primary_email'];




$seljob=mysql_query("select * from post_job where id='$jobid'");
$rowseljob=mysql_fetch_array($seljob);

$jobname=$rowseljob['title'];
$proid=$rowseljob['profession_id'];
$disid=$rowseljob['disc_id'];


$selpro=mysql_query("select * from profession where id='$proid'");
$rowselpro=mysql_fetch_array($selpro);

$proname=$rowselpro['name'];


$seldis=mysql_query("select * from disciplinelist where id='$disid'");
$rowseldis=mysql_fetch_array($seldis);

$disname=$rowseldis['disc_name'];

if($_REQUEST['hide']=="data")
{

$ideal_currencys=$_REQUEST['currency'];	
$totalestimatedcost=$_REQUEST['ideal_rate'];
$time_uoms=$_REQUEST['time_uom'];
$max_currencys=$_REQUEST['currency_max'];
$maxsel_rates=$_REQUEST['maxsel_rate'];
$max_time_uoms=$_REQUEST['time_uom_max'];
$job_start_ys=$_REQUEST['job_start_y'];
$job_start_ms=$_REQUEST['job_start_m'];
$job_start_ds=$_REQUEST['job_start_d'];
$proposed_date=$job_start_ys.'-'.$job_start_ms.'-'.$job_start_ds;
$job_end_ys=$_REQUEST['job_end_y'];
$job_end_ms=$_REQUEST['job_end_m'];
$job_end_ds=$_REQUEST['job_end_d'];
$finish_dates= $job_end_ys.'-'.$job_end_ms.'-'.$job_end_ds;
$biddetails=$_REQUEST['biddetails'];


$dd=date('Y-m-d');
$advertised_jobss=$_REQUEST['advertised_job'];
$posted_jobs=$_REQUEST['posted_job'];
$job_descriptions=$_REQUEST['job_description'];


/*$upload=$_FILES['upload']['name'];
$uploadsize=$_FILES['upload']['size'];
$uploadtype=$_FILES['upload']['type'];
$upload_tmp=$_FILES['upload']['tmp_name'];*/


/*$bidcost=$_REQUEST['bidcost'];


if($bidcost>0)
{
$addbid=1;
}
else
{
$addbid=3;

}

  
$upnetbid=$net_bidcost-$addbid;
$upexpencebid=$expence_bidcost+$addbid;*/

     
		  
		  
		  
		
  /*$msg .="There Are Folowing Information About User bid on  $jobname <br>";  
                 $msg .="<b>Name</b>------------------" . $_REQUEST['name'] . "<br>";
			 $msg .="<b>Company Name</b>------------------" . $_REQUEST['company'] . "<br>";
			 $msg .="<b>Email</b>-------------------" .$_REQUEST['email']. "<br>";
			 $msg .="<b>Details</b>--------------------" . $_REQUEST['biddetails'] . "<br>";
   
        $sub="Bid Enquiry";
          $from=$_REQUEST['email'];
          $to=$posteremail;
            $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			      $headers .= 'From:'.$_REQUEST['email'] . "\r\n" .		   
               
                     'Reply-To:ravi.php08@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();
        
          
          @mail($to,$sub,$msg,$headers);*/
		  
		  
 $body="Congratulations <Recruiter Name>!
Your bid of <$$$> per <time unit> on Candidate <Candidate ID> with Profile <Profile Name> was successful!

However, you do not currently have enough Skillsapien Credits to complete the transaction in order to interview this Candidate.

You can purchase or top-up your credits by clicking on the following link:
<http://182.50.141.145/applications/skillsepian_new/msg.php>
(Note: This transaction will consume <amount> Skillsapien Credits)

As you as you have completed the payment we will unlock the Candidate’s contact details.
Good luck and thanks for using Skillsapien!

Warm Regards,
The Skillsapien Team
<Date>";
$email=$_REQUEST['email'];
$atrand=rand(1111,2222);
$attachment = $_FILES['upload']['tmp_name'];


$attachment_name = $_FILES['upload']['name']; 


$attchname=$atrand.$attachment_name;

$insertbid=mysql_query("insert into bid set bidderid='$user_id',job_poster_profile_id='$jpid',jobid='$jobid',category_type='$proid',bids_left='',cost_for_premium='',proposal_status='$proposed_date' ,finish_date='$finish_dates' ,bid_details='$biddetails',ideal_currency='$ideal_currencys', total_estimated_cost='$totalestimatedcost',time_uom='$time_uoms',max_currency='$max_currencys',Max_cel_rate='$maxsel_rates',max_time_uom='$max_time_uoms',advertised_jobs='$advertised_jobss',posted_job='$posted_jobs',job_description='$job_descriptions',attach_files='$attchname',bid_at_cost='$bidcost',agreement='$agreement',bid_date='$dd'");
//$upbid=mysql_query("update  profiles set  net_bidcost='$upnetbid',expence_bidcost='$upexpencebid' where user_id='$user_id'");


move_uploaded_file($_FILES['upload']['tmp_name'],"bid_attach_file/".$attchname);

if (is_uploaded_file($attachment)) { 
  $fp = fopen($attachment, "rb"); 
  $data = fread($fp, filesize($attachment)); 
  $data = chunk_split(base64_encode($data)); 
    fclose($fp);
}

$headers = "From: $email<$email>\n";
$headers .= "Reply-To: <$email>\n"; 
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/related; type=\"multipart/alternative\"; boundary=\"----=MIME_BOUNDRY_main_message\"\n"; 
$headers .= "X-Sender: $first_name $family_name<$email>\n";
$headers .= "X-Mailer: PHP4\n";
$headers .= "X-Priority: 3\n"; 
$headers .= "Return-Path: <$email>\n"; 
$headers .= "This is a multi-part message in MIME format.\n";
$headers .= "------=MIME_BOUNDRY_main_message \n"; 
$headers .= "Content-Type: multipart/alternative; boundary=\"----=MIME_BOUNDRY_message_parts\"\n"; 

$message = "------=MIME_BOUNDRY_message_parts\n";
$message .= "Content-Type: text/html; charset=\"utf-8\"\n"; 
$message .= "Content-Transfer-Encoding: quoted-printable\n"; 
$message .= "\n"; 
$message .= "$body\n";
$message .= "\n"; 
$message .= "------=MIME_BOUNDRY_message_parts--\n"; 
$message .= "\n"; 
$message .= "------=MIME_BOUNDRY_main_message\n"; 
$message .= "Content-Type: application/octet-stream;\n\tname=\"" . $attachment_name . "\"\n";
$message .= "Content-Transfer-Encoding: base64\n";
$message .= "Content-Disposition: attachment;\n\tfilename=\"" . $attachment_name . "\"\n\n";
$message .= $data; //The base64 encoded message
$message .= "\n"; 
$message .= "------=MIME_BOUNDRY_main_message--\n";
 $message .=$_REQUEST['name'];
			
$subject = 'Bid Enquiry';
$to=$posteremail;
mail($to,$subject,$message,$headers); 
		  
		  
		  
		  
		  
		  
		  
		  
		  
	
	
	$msg1 .="Congratulations <Recruiter Name>!
Your bid of <$$$> per <time unit> on Candidate <Candidate ID> with Profile <Profile Name> was successful!

You can now go ahead and interview this Candidate by clicking on the following link to unlock their contact details!
<URL link to site>
(Note: This transaction will consume <amount> Skillsapien Credits from your account)

Good luck and thanks for using Skillsapien to secure your skills requirement!


Warm Regards,
The Skillsapien Team
<Date>";  
        $sub1=" Sucessfully Bid On  $jobname";
		
          $from=$posteremail;
          $to1=$_REQUEST['email'];
            $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   
			      $headers .= 'From:'.$posteremail. "\r\n" .		   
               
                     'Reply-To:'.$posteremail . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();
        
          
          //@mail($to1,$sub1,$msg1,$headers);
		  
		  if(@mail($to1,$sub1,$msg1,$headers)){
          //header("location:Subscrib_email.php?msg=Your Email has been send successfully.");
		 $msg = "<font color='green'>Your bid has been send successfully.</font>";
		
	   }else{
	      //header("location:Subscrib_email.php?msg=Your Email doesn't send.");
		 $msg = "<font color='green'>Your bid doesn't send.</font>";
	   }
header("location:bid_list.php");

}
?>
<div id="men">
  <?php echo $get_template->process('global_header.php')?>
  <div class="canten">
    <form name="form1" id="form1" action="" method="post" enctype="multipart/form-data">
	<div class="center_in">
     <div style="margin-left:100px;"><h3><?php echo $msg ; ?></h3></div>
      <div class="sign_cl">  <h1>Bid Detail Page </h1>
        <div class="form_area2">
          <div class="row2">
		  
            <label class="label_cl2">Candidate ID :</label><div class="text-area"><?php echo $jobid ; ?></div>
			           
            <div class="clear"></div>
          </div>
          <?php /*?><div class="row2">
            <label class="label_cl2">Category Type  : </label>
          
         <div class="text-area">  <? echo $proname; ?>  &amp; <? echo $disname; ?></div>
            <div class="clear"></div>
          </div><?php */?>
          <div class="row2">
            <label class="label_cl2">Candidate Skill Title: </label>
        <div class="text-area"><?php echo $title_skill ; ?></div>
            <div class="clear"></div>
          </div>
             <div class="row2">
            <label class="label_cl2">Ideal Bid Rate (Minimum) : </label>
            <div class="currency">
            <select name="currency" size="1" class="bordernune"  id="currency">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>" <?php if($C_data['id']==$data['lt_currency']){ echo ' selected="selected" ';}?> ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="ideal_rate" type="text"  id="ideal_rate"  src="type" class="currency1" />
            <div class="currency">
            <select name="time_uom" size="1" class="bordernune"  id="time_uom">
               <option value="Hour">Hour</option>
               <option value="Day">Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>
             <div class="clear"></div>
              
            </div>
            <div class="row2">
            <label class="label_cl2">Maximum Ceiling Rate : </label>
            <div class="currency">
            <select name="currency_max" size="1" class="bordernune"  id="currency_max">
              <option selected="selected" value="">Currency</option>
              <?php
			
			$C_sql='SELECT `id`, `name` FROM `currency` WHERE 1 ORDER BY `currency`.`name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['id']?>" <?php if($C_data['id']==$data['lt_currency']){ echo ' selected="selected" ';}?> ><?php echo $C_data['name']?></option>
             <?php 
			}
			?>
            </select>
            </div>
            <input name="maxsel_rate" type="text"  id="maxsel_rate"  src="type" class="currency1" />
            <div class="currency">
            <select name="time_uom_max" size="1" class="bordernune"  id="time_uom_max">
               <option value="Hour">Hour</option>
               <option value="Day">Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
              <option value="Year">Year</option>
            </select>
            </div>
             <div class="clear"></div>
              
            </div>
          
          <!--<div class="row2">
            <label class="label_cl2">Proposed Start Date :</label><input name="proposed_date" id="proposed_date" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>-->
          <div class="row2">
            <label class="label_cl2">Proposed Start Date : </label>
            <table  border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70">
                          <select name="job_start_d" id="job_start_d"   class="input5" onchange="ValidateDate('job_start_d','job_end_d');">
						
							    <option selected="selected" value="">-Date-</option>							  
							 <?php
							
							
							 for($d=1;$d<=31;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle">
						  <select name="job_start_m" id="job_start_m"   class="input4" onchange="Validatemonth('job_start_m','job_end_m');">
                            <option value="" selected>-Month-</option>
                            <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
                            <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>>
                              <?php  echo $month[$d]?>
                            </option>
                            <?php 
							 }
							  
							  ?>
                          </select></td>
						  <td width="80" align="center" valign="middle"><select name="job_start_y" id="job_start_y"   class="input4" onchange="Validateyear('job_start_y','job_end_y');">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo ' selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select></td>
                            <td>
                            	<?php if($errorstart!="") {?> <div class="error_msg"><?php echo $errorstart?></div><?php }?>                            </td>
						</tr>
					  </table>
                     
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Proposed Finish Date: </label>
            <table  border="0" cellspacing="0" cellpadding="0">
						<tr>
						  <td width="70"><select name="job_end_d" id="job_end_d"   class="input5" onchange="ValidateDate('job_start_d','job_end_d');">
							  <option selected="selected" value="">-Date-</option>
							 <?php
							 for($d=1;$d<=31;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>" <?php if($job_end_d==$d){ echo '  selected="selected" ';}?>><?php   printf('%02s',$d)?></option>
							 <?php 
							 }
							 ?>
							</select>						  </td>
						  <td width="80" align="center" valign="middle"><select name="job_end_m" id="job_end_m"   class="input4" onchange="Validatemonth('job_start_m','job_end_m');">
                            <option value="" selected>-Month-</option>
                            <?php
							  $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							 for($d=0;$d<count($month);$d++)
							 {
							 ?>
                            <option value="<?php echo $d?>" <?php if($job_end_m==$d){ echo '  selected="selected" ';}?>>
                              <?php  echo $month[$d]?>
                            </option>
                            <?php 
							 }
							  
							  ?>
                          </select></td>
						  <td width="80" align="center" valign="middle"><select name="job_end_y" id="job_end_y"   class="input4" onchange="Validateyear('job_start_y','job_end_y');">
							  <option value="" selected>-Select-</option>
							 <?php
							 for($d=date('Y');$d<= date('Y')+10;$d++)
							 {
							 ?>
							 <option value="<?php echo $d?>"  <?php if($job_end_y==$d){ echo '  selected="selected" ';}?>><?php   printf('%d',$d)?></option>
							 <?php 
							 }
							 ?>
							   
							</select>  </td>
                            <td>
                            	<?php if($error6!="") {?> <div class="error_msg"><?php echo $error6?></div><?php }?>                            </td>
						</tr>
					  </table>
                     
            <div class="clear"></div>
          </div>
          <!--<div class="row2">
            <label class="label_cl2">Proposed Finish Date:</label><input name="finish_date" id="finish_date" type="text"  class="input_cl2" />
            <div class="clear"></div>
          </div>-->
          <div class="row2">
            <label class="label_cl2">Linked to an advertised job  :</label>
            <input name="advertised_job" id="advertised_job" type="radio" value="1"  onclick="displayCont();"   style="margin-right:10px; margin-top:5px;"/>
            Yes
            <input name="advertised_job" id="advertised_job" type="radio" value="0"  onclick="hideCont()"  checked="checked"  style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            No
			<input type="hidden" name="name" id="name" value="<? echo $rowprofile1['first_name']; ?>" />
			<input type="hidden" name="company" id="company" value="<? echo $rowprofile1['conpany_name']; ?>" />
			<input type="hidden" name="email" id="email" value="<? echo $rowprofile1['primary_email']; ?>" />
			
            <div class="clear"></div>
          </div>
          <div id="imagDiv" style="display:none;">
  <div class="row2">
            <label class="label_cl2"> My Posted Job : </label>
            <div class="select-hold"><select  id="posted_job" size="1" class="select_cl2" name="posted_job" onchange="showdesc(this.value);" >
            <option value="" selected="selected">Select My Posted Job</option>
               <?php  $postedjob="select * from post_job where user_id='$jpid'";
              $postedjob_query=mysql_query($postedjob);
              while($myjob=mysql_fetch_array($postedjob_query)) {
              $myjobs=$myjob['title'];
			    $mypost_id=$myjob['id'];
			  ?>
              <option value="<?php echo $mypost_id; ?>" ><?php echo $myjobs; ?></option>
              <?php } ?>
            </select>
            </div>
            <div class="clear"></div>
          </div>
          <div class="row2">
         
            <label class="label_cl2">Job Description :</label>
            <textarea name="job_description" id="job_description" class="textarea_cl2"></textarea>
            <div class="clear"></div>
          </div>
         </div>
          <div class="row2">
            <label class="label_cl2">Bid Description/Reason for Bid :</label>
            <textarea name="biddetails" id="biddetails" class="textarea_cl2"></textarea>
            <div class="clear"></div>
          </div>
          <!--<div class="row2">
            <label class="label_cl2">Enter Total Estimated Cost : </label>
            <input name="totalestimatedcost" id="totalestimatedcost" type="text"  class="input_cl2" />
          
            <div class="clear"></div>
          </div>-->
		  
		  <!--<div class="row2">
            <label class="label_cl2"> Attach Files<strong>(C.V/Detail) </strong> :</label>
           <strong> <input name="upload" type="file" class="attach" /></strong>
            <div class="clear"></div>
          </div>-->
		  
		  
         <!-- <div class="row2">
            <label class="label_cl2"> Attach Files<strong>(C.V/Detail) </strong> :</label>
            <input name="input" type="text"  class="attach" />
            <input name="input" type="image"   src="images/browse_buttons.gif" class="space_lc3" />
            <div class="clear"></div>
          </div>-->
          
         <!-- <div class="row2">
            <label class="label_cl2">Standard Bid at a cost :</label><input name="bidcost" id="bidcost" type="radio" value="1" checked="checked" style="margin: 10px  4px 0px 5px;" />
            1Bid
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Premium Bid at a cost :</label>
            <input name="bidcost" id="bidcost" type="radio" value="0" style="margin: 10px  4px 0px 5px;" />
            3Bid
            <div class="clear"></div>
          </div>-->
          <!--<div class="row2">
            <label class="label_cl2">Click Agreement Checkboxes  :</label>
            <input name="agreement" id="agreement" type="radio" value="1" checked="checked"  style="margin-right:10px; margin-top:5px; "/>
            Yes
            <input name="agreement" id="agreement" type="radio" value="0" style="margin-right:10px; margin-left:10px; margin-top:5px;" />
            No
			<input type="hidden" name="name" id="name" value="<? //echo $rowprofile1['first_name']; ?>" />
			<input type="hidden" name="company" id="company" value="<? //echo $rowprofile1['conpany_name']; ?>" />
			<input type="hidden" name="email" id="email" value="<? //echo $rowprofile1['primary_email']; ?>" />
			
            <div class="clear"></div>
          </div>-->
          <div class="row ">
           <input  type="image"  src="images/yesbitBtn.gif" class="space_lc4"  />
            <div class="clear"></div>
          </div>
          
          <div  class="clear"><input type="hidden" name="hide" id="hide" value="data" /></div>
        </div>
        <div  class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
	</form>
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
