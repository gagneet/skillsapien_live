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
		  

/*
  	edit edit1 tab
*/
if($_SERVER['QUERY_STRING']=="edit1" &&  $_REQUEST['data']=="edit1")
{

	   if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
		 $file="R_".$s->value('R_USER_ID').".".get_extension($_FILES['file']['name']);
 	     UploadImg("".P_IMAGE_FOLDER.$file,$_FILES['file'],true);
		 $add_photo=',`photo` = "'.$file.'"  ';
	    }
		
	 $sql="UPDATE  `recruiter_profile` SET 
  					  `image`='".$file."', 
 		 WHERE `recruiter_profile`.`user_id` =".$s->value('R_USER_ID');	
    $db->query_silent($sql);
	//============================
	 $sql="UPDATE  `profiles` SET 
  					  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
					  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."'
					  ". $add_photo."
		 WHERE `profiles`.`user_id` =".$s->value('R_USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:recruiters-dashboard.php');
		 }
		 else
		 {
		   $error_=$error_msg[5];		  
		 }
}


//edit about us
if($_SERVER['QUERY_STRING']=="edit_abount" && $_REQUEST['data']=="data" )
{

        $sql="UPDATE  `profiles` SET 
 					  `about`='".$db->dataTrim($_REQUEST['edit_abount'])."'
 		 WHERE `profiles`.`user_id` =".$s->value('R_USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:recruiters-dashboard.php');
		 }
		 else
		 {
		   $error_=$error_msg[5];		  
		 }
}


//edit about us
if($_SERVER['QUERY_STRING']=="edit_country" && $_REQUEST['data']=="data")
{

        $sql="UPDATE  `profiles` SET 
 					   `country`='".$db->dataTrim($_REQUEST['country'])."'
 		 WHERE `profiles`.`user_id` =".$s->value('R_USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:recruiters-dashboard.php');
		 }
		 else
		 {
		   $error_=$error_msg[5];		  
		 }
}



	/* GET PROFILE INFO*/	
	if($s->is_set('R_USER_ID')==true)	
	{
			include_once(WM_INCLIDE.WM_CLASS.'class.profile.php');
			
			
			 
			 
			$profile_sql='SELECT * FROM `profiles` WHERE `user_id`='.$s->value('R_USER_ID').' and vertical_id="'.VERTICAL_ID.'" and  `status` like  "'.ENABLE.'" ';
			$profile_run=$db->query_silent($profile_sql);
			//print_r($db->fetch_array($profile_run));
			$profile_info=new profile($db->fetch_array($profile_run));
	 }
	 		
$member="select * from user_login_details where id='".$s->value('R_USER_ID')."' and vertical_id='".VERTICAL_ID."'";
$memberresult=mysql_query($member);
$signups=mysql_fetch_array($memberresult);
//$Regist_time=$signups["signup_date"];
 $Regist_time=date('M d, Y',strtotime($signups['signup_date'])); 

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="outer">
<div id="men">
    <?php echo $get_template->process('global_header.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="sign_cl space_mn">
      
        <div class="form_area2">
          <div class="row2">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
    <td width="49%" align="left" valign="top" class="font-13"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Recruiter ID:</td>
            <td width="52%" align="left" valign="top"><?php echo $profile_info->get_id() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Username:</td>
            <td align="left" valign="top"><!--<a href="mailto:victor@skillsapien.com">--><?php echo $profile_info->get_recu_name() ?><!--</a>--></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Company Name:</td>
            <td width="52%" align="left" valign="top"><strong><?php echo $profile_info->get_company_name() ?></strong></td>
          </tr>
          <tr>
            <td align="left" valign="top">Registration Type:</td>
            <td align="left" valign="top"><?php echo $profile_info->get_registration_type() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Registration ID:</td>
            <td align="left" valign="top"><?php echo $profile_info->get_registration_id() ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Company Address:</td>
            <td width="52%" align="left" valign="top"><?php echo $profile_info->get_comaddress() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Base Country:</td>
            <td align="left" valign="top"><?php echo $profile_info->getCountry() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Base Currency:</td>
            <td align="left" valign="top">AUD</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Current Subscription level:</td>
            <td width="52%" align="left" valign="top">None</td>
          </tr>
          <tr>
            <td align="left" valign="top">Skillsapien Credits:</td>
            <td align="left" valign="top"><?php echo $profile_info->get_credit() ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      
    </table></td>
    <td width="51%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="26%" align="left" valign="top" class="font-13">Company Logo: </td>
        <td width="74%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="<?php echo $profile_info->get_big_img()?>" alt="" width="320" height="183" /></td>
  </tr>
  <tr>
    <td height="30" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="font-12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="49%" align="left" valign="top">Member Since:</td>
        <td width="51%" align="left" valign="top"><?php echo $Regist_time; ?> </td>
      </tr>
      <tr>
        <td align="left" valign="top">Last Sign-in:</td>
        <td align="left" valign="top"><?php echo $profile_info->last_login() ?></td>
      </tr>
    </table></td>
  </tr>
  
  
  
</table></td>
      </tr>
    </table></td>
  </tr>
              <?php /*?><tr>
                <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="300"><table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="50" height="60" align="center" valign="top"><img src="<?php echo $profile_info->get_big_img()?>" alt="" width="40" height="50" /></td>
                        <td width="70%" align="left" valign="top"><?php echo $profile_info->get_name() ?><br /><br />
<img src="images/radio_bu.gif" alt="" /></td>
                      </tr>
                      <tr>
                      <?php
					  if($_SERVER['QUERY_STRING']!="edit1")
					  {
					  ?>
                        <td align="center"><a href="?edit1"><img src="images/edit_buttons.gif" alt="" width="41" height="19" /></a></td>
                      <?php }?>  
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr><?php */?>
              
              <!--<tr>
                <td><?php
				/*if($_SERVER['QUERY_STRING']=="edit1")
				{
				 ?> 
                <form method="post" enctype="multipart/form-data">
                 <div class="row2">
                    <?php if($error_!="") {?> <div><?php echo $error_?></div><?php }?>
                 </div> 
                  <div class="row2">
            <label class="label_cl2">First Name </label>
            <input name="first_name" id="first_name" type="text"  class="input_cl2" />
           <?php if($error1!="") {?> <div><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <div class="row2">
            <label class="label_cl2">Last Name </label>
            <input name="last_name" id="last_name" type="text"  class="input_cl2" />
             <?php if($error2!="") {?> <div><?php echo $error2?></div><?php }?>
            <div class="clear"></div>
          </div>
             <div class="row2">
             	<div class="browseInput" style="width:auto;">
                    <label class="label_cl2">Photo</label>
            <input   type="text"  class="attach" id="attached_profile_img" name="attached_profile_img" />
            <img src="images/browse_buttons.gif" class="space_lc3" alt="Browse" />
            <input type="file" class="browsFile" id="file"  name="file" size="50" onchange="attache('#file','#attached_profile_img')"/>
            </div>
             </div>
                  
            <input type="hidden" id="data" name="data" value="edit1" />
            <input  type="image"  src="images/submit_buttons.gif" class="space_lc4"  />
             &nbsp;&nbsp; <img src="images/cancle_buttons.gif"  width="125" height="35" border="0"   onclick="javascript:window.location='recruiters-dashboard.php'"  />
                </form>
                 <?php 
				}*/
                ?></td>
              </tr>-->
              
              <?php /*?><tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="font_20">About<br /></td>
                    <td class="edit_pcl"><?php
					  if($_SERVER['QUERY_STRING']!="edit_abount")
					  {
					  ?>
                     <a href="?edit_abount"><img src="images/edit_buttons.gif" alt="" width="41" height="19" align="left" /></a>
                      <?php }?>  
                    </td>
                    <td width="397" class="font_20" >Identity</td>
                  </tr>
                  <tr>
                    <td width="225" valign="top" class="font-12">
                    <?php
					if($_SERVER['QUERY_STRING']=="edit_abount")
					{
					?>
                    <form method="post">
                    <textarea  name="edit_abount" id="edit_abount"><?php echo $profile_info->abount_me();?></textarea>
                    <div class="buttonSet">
                        <input type="hidden" id="data" name="data" value="edit1" />
                        <input  type="image"  src="images/submit_buttons.gif" class="fleft"  />
                        <input type="hidden" name="data" id="data" value="data" />
                         &nbsp;&nbsp; <img src="images/cancle_buttons.gif"  width="125" height="35" border="0"   onclick="javascript:window.location='recruiters-dashboard.php'"  />
                    </div>
                    </form>
                    <?php 
					}
					else
					{
					   echo $profile_info->abount_me();
					}
					?>
                    </td>
                    <td width="234" height="150" align="center" valign="middle"><img src="<?php echo $profile_info->get_big_img()?>" alt="" width="162" height="122" /></td>
                    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="font-12">
                      <tr>
                        <td>Location</td>
                        <td><?php echo $profile_info->getCountry()?><!--&nbsp;&nbsp;&nbsp;<img src="images/india_f.gif" alt="" width="16" height="11" />-->
                        <?php
                        if($_SERVER['QUERY_STRING']=="edit_country")
						{?>
						 <form method="post">
                         <div class="row2">
            <label class="label_cl2">Country </label>
            <select name="country"  id="country" size="1" class="select_cl2">
            
			 <option value="13">Australia</option>
			<?php
						$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1  ORDER BY `countries`.`countries_name` ASC';
			$C_run=$db->query_silent($C_sql);
			while($C_data=$db->fetch_array($C_run))
			{
			 ?>
             <option value="<?php echo $C_data['countries_id']?>"  ><?php echo $C_data['countries_name']?></option>
             <?php 
			}
			?>
            </select>
            <div class="clear"></div>
          </div>
                         <input name="image"  type="image" class="fleft"  src="images/submit_buttons.gif"  />
                         <input type="hidden" name="data" id="data" value="data" />
                     &nbsp;&nbsp; <img src="images/cancle_buttons.gif"  width="125" height="35" border="0"   onclick="javascript:window.location='recruiters-dashboard.php'"  />
                         </form>
						<?php }
						?>                        </td>
                       <?php
					      if($_SERVER['QUERY_STRING']!="edit_country")
						  {
						   echo '  <td><a href="?edit_country"><img src="images/edit_buttons.gif" alt="" width="41" height="19" /></a></td>';
						  }
					   ?>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2" class="border_cl2">Member Since   <?php echo $profile_info->last_login()?></td>
                        </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                        <td height="30" colspan="2" valign="middle" >Last Sign-in <?php  echo $profile_info->last_login()?></td>
                        </tr>
                      
                    </table></td>
                  </tr>
                  
                  
                  
                </table></td>
              </tr><?php */?>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top" class="font-13"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="23%" align="left" valign="top"><strong>My Activity Summary:</strong></td>
          
            <td width="40%" align="left" valign="top">&nbsp;</td>
            <td width="37%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
              <?php 
			 $sql="select count(bidderid)  as total from bid where bidderid='".$profile_info->get_id()."' and vertical_id='".VERTICAL_ID."'";
			     $records=mysql_query($sql);
				   $rows=mysql_fetch_array($records);
				
			 $sql1="select count(bidderid)  as baccept from bid where bidderid='".$profile_info->get_id()."' and status='accept' and vertical_id='".VERTICAL_ID."'";
			     $records1=mysql_query($sql1);
				   $rows1=mysql_fetch_array($records1);
	   
	       $sql12="select count(bidderid)  as breject from bid where bidderid='".$profile_info->get_id()."' and status='reject' and vertical_id='".VERTICAL_ID."'";
			     $records12=mysql_query($sql12);
				   $rows12=mysql_fetch_array($records12);
      
	       $sql123="select count(bidderid)  as counter from bid where bidderid='".$profile_info->get_id()."' and status='counter' and vertical_id='".VERTICAL_ID."'";
			     $records123=mysql_query($sql123);
				   $rows123=mysql_fetch_array($records123);
				   
				$conduct="select count(recruiter_id)  as conduct from interview_success_details where recruiter_id='".$profile_info->get_id()."' and interview_complete='1' and vertical_id='".VERTICAL_ID."'";
			     $conduct_result=mysql_query($conduct);
				   $conduct_row=mysql_fetch_array($conduct_result);
				   
	$made="select count(recruiter_id)  as made from interview_success_details where recruiter_id='".$profile_info->get_id()."' and interview_complete='1' and status='1' and vertical_id='".VERTICAL_ID."'";
			     $made_result=mysql_query($made);
				   $made_row=mysql_fetch_array($made_result);
				   
				  $active="select count(recruiter_id)  as active from interview_success_details where recruiter_id='".$profile_info->get_id()."' and status='0' and vertical_id='".VERTICAL_ID."'";
			     $active_result=mysql_query($active);
				   $active_row=mysql_fetch_array($active_result);
      ?>
       
            <td align="left" valign="top"><?php echo $rows['total']; ?>  Bids in total</td>
            <td align="left" valign="top"><?php echo $rows1['baccept']; ?>  Bids Successful</td>
            <td align="left" valign="top"> <?php echo $conduct_row['conduct']; ?>  Interviews conducted</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top"> <?php echo $rows123['counter']; ?> 	Bids <a href="#">Countered</a> </td>
            <td align="left" valign="top"> <?php echo $made_row['made']; ?> 	Placements made</td>
          </tr>
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top"><?php echo $rows12['breject']; ?>  	Bids Rejected</td>
            <td align="left" valign="top"> <?php echo $active_row['active']; ?>	Placements active</td>
          </tr>
        </table></td>
              </tr>
               <tr>
                <td colspan="2" align="left" valign="top"></td>
              </tr>
              <tr>
                <?php /*?><td><table width="100%" border="0" cellpadding="0" cellspacing="0"  class="font-12">
                  <tr>
                    <td class="col_bor"><?php echo $profile_info->total_job_post()?> Jobs Posted</td>
                    <td class="col_bor"><?php echo Awarded()?> Jobs Awarded<br />
                      0% Awards Radio</td>
                    <td class="col_bor">0 Feedback Given<br />
                      O Feedback Received</td>
                    <td class="col_bor">$0 Purchased</td>
                  </tr>
                </table></td><?php */?>
                <td colspan="2" align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="font-13">
                  <tbody>
                  <td colspan="4" align="left" valign="top" class="col_bor2l"><strong>My Placements:</strong></td>
                   <?php
	       $fetch="select * from interview_success_details where status='1' and recruiter_id='".$profile_info->get_id()."' and vertical_id='".VERTICAL_ID."'";
			     $fetch12=mysql_query($fetch);
				   while($rowws=mysql_fetch_array($fetch12)) { 
				    $useriddd=$rowws['user_id'];
				     
			 $query="select * from bid where jobid='".$useriddd."' and vertical_id='".VERTICAL_ID."'";
			     $query_result=mysql_query($query);
				   $pos=mysql_fetch_array($query_result);
				   $ratess=$pos['total_estimated_cost'];
				    $idsss=$pos['jobid'];
				   
				    $query12="select * from profiles where user_id='".$idsss."' and vertical_id='".VERTICAL_ID."'";
			     $query_result12=mysql_query($query12);
				   $pos12=mysql_fetch_array($query_result12);
				   $namess=$pos12['username'];
				   
      ?>
                  <tr>
                    <td class="col_bor2">Candidate Name  <a href="#"><u><?php echo  $namess;  ?></u></a></td>
                    <td class="col_bor2">On Job:<a href="#"><u> <?php echo $pos['posted_job']; ?></u>		
                    </a></td>
                    <td class="col_bor2">Date Started:  <?php echo $rowws['date']; ?></td>
                    <td class="col_bor2">Daily Rate:  $ <?php echo $pos['total_estimated_cost']; ?>	</td>
                  </tr>
                  <?php } ?>
                      <td colspan="4" align="left" valign="top" class="col_bor2l"></td>
                </tbody></table></td>
              </tr>
              
              
              <?php /*?><tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="50" class="border_cl3"><table width="100%" border="0" cellpadding="0" cellspacing="0"  class="font-12">
                  <tr>
                    <td><table width="200" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td>All Catgories  <img src="images/arrow_1.gif" alt="" align="absmiddle" /></td>
                        <td>All Jobs<img src="images/arrow_1.gif" alt="" align="absmiddle" /></td>
                      </tr>
                    </table></td>
                    <td><table width="150" border="0" align="right" cellpadding="0" cellspacing="0">
                      <tr>
                        
                        <td>Sorty: Date   <img src="images/arrow_1.gif" alt="" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/sorty_date.gif" alt="" /></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td class="font-12"><table width="100%" border="0" cellpadding="0" cellspacing="0">
           <tr>
            <th width="6%">ID</th>
            <th width="10%">Job title </th>
            <th width="20%">Description</th>
            <th width="18%">Number of positions</th>
            <th width="10%">Budget</th>
            <th width="10%"> File upload </th>
            <th width="10%">Posted Date</th>
            <th width="10%"> Job end date</th>
            <th width="15%">Keywords</th>
            </tr><?php
		  
		  //===============================================
  		  $post_run=$db->query_silent("SELECT * FROM `post_job`  WHERE `user_id`='$user_id' ");
		  
		  while($data=$db->fetch_array($post_run))
		  {
		  
		      $row++;
			  if($row%2!=0)
			  	$class=' class="odd"  ';
			  else
				$class=' class="even"  ';
			
		  ?>
            
          <tr <?php echo $class?>>
            <td><?php echo $row?></td>
           <td><a href="check_bidder.php?jobid=<?php echo $data['id']?>"><?php echo $data['title']?></a></td>
           
            <td><?php echo substr($data['description'],0,59) ;?></td>
             <td><?php echo $data['positions']?></td>
             <td><?php echo CURRENCY.$data['budget']?></td>
            <td><img src="images/fileImg.png" width="43" title="<?php echo $data['file']?>" alt="<?php echo $data['file']?>" /></td>
			
             <td><?php echo date(DMY,strtotime($data['date']))?></td>
             <td><?php echo date(DMY,strtotime($data['job_end_date']))?></td>
            <td><?php echo $data['keywords']?></td>
             </tr>
          
          <?php	
			     
		  }
		 
		 
			  if($db->num_rows($post_run)<=0)
			  {
			     ?>
                   <tr>
		                      <td colspan="9" class="noresultfound"><?php echo $error_msg[46]?></td>
                      </tr>
                 <?php 
			  }
	 	 
		  ?>
        </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr><?php */?>
            </table>
         </div>
         
            <div class="clear"></div>
          </div>
          

   </div>
   </div>
  </div>
  
</div>
<div class="canten">
  <div class="clear"></div>
</div>
<?php echo $get_template->process('global_footer.php')?>
</div>



</body>
</html>
