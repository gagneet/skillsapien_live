<?php
include_once('init.php');
Is_valid_uesr();


   $uuid=$s->value('USER_ID');

/*
  	edit edit1 tab
*/
if($_SERVER['QUERY_STRING']=="edit1" &&  $_REQUEST['data']=="edit1")
{

	   if($_FILES['file']['name']!=""  && $_FILES['file']['error']==0)
		{
		 $file="C_".$s->value('USER_ID').".".get_extension($_FILES['file']['name']);
 	     UploadImg("".P_IMAGE_FOLDER.$file,$_FILES['file'],true);
		 $add_photo=',`photo` = "'.$file.'"  ';
	    }
		
		
     $sql="UPDATE  `profiles` SET 
  					  `first_name`='".$db->dataTrim($_REQUEST['first_name'])."', 
					  `last_name`='".$db->dataTrim($_REQUEST['last_name'])."'
					  ". $add_photo."
		 WHERE `profiles`.`user_id` =".$s->value('USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:candidate-dashboard.php');
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
 		 WHERE `profiles`.`user_id` =".$s->value('USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:candidate-dashboard.php');
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
 		 WHERE `profiles`.`user_id` =".$s->value('USER_ID');
		 
		 if($db->query_silent($sql))
		 {
		     header('location:candidate-dashboard.php');
		 }
		 else
		 {
		   $error_=$error_msg[5];		  
		 }
}



	/* GET PROFILE INFO*/	
	if($s->is_set('USER_ID')==true)	
	{
			include_once(WM_INCLIDE.WM_CLASS.'class.profile.php');
			
			
			 
			 
		$profile_sql='SELECT * FROM `profiles` WHERE `user_id`='.$s->value('USER_ID').' and `status` like  "'.ENABLE.'" ';
			$profile_run=$db->query_silent($profile_sql);
			//print_r(mysql_fetch_array($profile_run));
			$profile_info=new profile($db->fetch_array($profile_run));
	 }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $get_template->process('html_header.php')?>
</head>
<body>
<div id="men">
    <?php echo $get_template->process('global_header.php')?>

  <div class="canten">
    <div class="center_in">
      <div class="sign_cl space_mn">
      
        <div class="form_area2">
          <div class="row2">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
    <td width="51%" align="left" valign="top" class="font-13"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Candidate ID:</td>
            <td width="52%" align="left" valign="top"><?php echo $profile_info->get_id() ?></td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">Username:</td>
            <td width="52%" align="left" valign="top"><?php echo $profile_info->get_recu_name() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Email Address:</td>
            <td align="left" valign="top"><?php echo $profile_info->get_email() ?></td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td width="48%" align="left" valign="top">Skill Profiles:</td>
            <td width="52%" align="left" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" style="border:solid 1px #999999;">
              <?php 
			  $skill_query="select * from skills_profiles where user_id='".$profile_info->get_id()."'";
			  $skill_result=$db->query_silent($skill_query);
			  $skill_info=$db->fetch_array($skill_result);
			  $skill=explode(',',$skill_info['skill_keywords']);
			  //print_r($skill);
			  foreach($skill as $test)
			  { ?>
			  <tr><td style="border-bottom:solid 1px #999999; padding:3px;"><?php echo $test;?></td></tr>
			  <?php
			  }
			  ?>
			  <!--<tr><td style="border-bottom:solid 1px #999999; padding:3px;"><b>ABCD</b></td></tr>
			  <tr><td style="border-bottom:solid 1px #999999;  padding:3px;">EFGH</td></tr>
			  <tr><td style="padding:3px;">IJKL</td></tr>
			  -->
			  </table></td>
          </tr>
         
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top">My Birthdate:</td>
            <td width="52%" align="left" valign="top"><?php echo $profile_info->get_birthdate() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">My Location:</td>
            <td align="left" valign="top"><?php echo $profile_info->get_address() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Base Country:</td>
            <td align="left" valign="top"><?php echo $profile_info->getCountry() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Preferred Currency:</td>
            <td align="left" valign="top">AUD</td>
          </tr>
          <tr>
            <td align="left" valign="top">My Rate (Minimum):</td>
            <td align="left" valign="top"><?php echo $profile_info->get_rate() ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      
    </table></td>
    <td width="49%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><!--<img src="images/photo_area.gif" alt="" width="320" height="183" />--><img src="<?php echo $profile_info->get_big_img()?>" alt="" width="320" height="183" /></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="font-13">
          <tr>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="47%" align="left" valign="top">Member Since:</td>
            <td width="53%" align="left" valign="top"><?php echo $profile_info->Since() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">Last Sign-in:</td>
            <td align="left" valign="top"><?php echo $profile_info->last_login() ?></td>
          </tr>
          <tr>
            <td align="left" valign="top">My profile was viewed:</td>
            <td align="left" valign="top">12 times in the last 7 days</td>
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
              <?php /*?><tr>
                <td><?php
				if($_SERVER['QUERY_STRING']=="edit1")
				{
				 ?> 
                <form method="post" enctype="multipart/form-data">
                 <div class="row2">
                    <?php if($error_!="") {?> <div><?php echo $error_?></div><?php }?>
                 </div> 
                  <div class="row2">
            <label class="label_cl2">User Name </label>
            <input name="first_name" id="first_name" type="text"  class="input_cl2" />
           <?php if($error1!="") {?> <div><?php echo $error1?></div><?php }?>
            <div class="clear"></div>
          </div>
          <!--<div class="row2">
            <label class="label_cl2">Last Name </label>
            <input name="last_name" id="last_name" type="text"  class="input_cl2" />
             <?php //if($error2!="") {?> <div><?php //echo $error2?></div><?php //}?>
            <div class="clear"></div>
          </div>-->
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
             &nbsp;&nbsp; <img src="images/cancle_buttons.gif" width="125" height="35" border="0"  onclick="javascript:window.location='candidate-dashboard.php'"  />
                </form>
                 <?php 
				}
                ?></td>
              </tr><?php */?>
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
                        &nbsp;&nbsp; <img src="images/cancle_buttons.gif"  width="125" height="35" border="0"   onclick="javascript:window.location='candidate-dashboard.php'"  />
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
                    <td align="left" valign="top">
					
					<table width="100%" border="0" cellpadding="0" cellspacing="0" class="font-12">
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
            <?php
			
		echo	$C_sql='SELECT `countries_id`, `countries_name` FROM `countries` WHERE 1 ORDER BY `countries`.`countries_name` ASC';
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
          </div><input  type="image"  src="images/submit_buttons.gif" class="fleft"  />
                    <input type="hidden" name="data" id="data" value="data" />
                  &nbsp;&nbsp; <img src="images/cancle_buttons.gif"  width="125" height="35" border="0"   onclick="javascript:window.location='candidate-dashboard.php'"  />
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
                      
                    </table>
					
					
					
					
					</td>
                  </tr>
                  
                  
                  
                </table></td>
              </tr><?php */?>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top" class="font-13"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="16%" align="left" valign="top"><strong>My Activity Summary:</strong></td>
            <td width="13%" align="left" valign="top">&nbsp;</td>
            <td width="14%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="24%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="10%" align="left" valign="top">&nbsp;</td>
            <td width="3%" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">Total Bids:   </td>
            <td align="left" valign="top">18</td>
            <td align="left" valign="top">Bids Accepted:</td>
            <td align="left" valign="top">6</td>
            <td align="left" valign="top">Interviews Completed:     </td>
            <td align="left" valign="top">5</td>
            <td align="left" valign="top">Jobs Won:  </td>
            <td align="left" valign="top">2</td>
          </tr>
          <tr>
            <td align="left" valign="top">Feedbacks Given: </td>
            <td align="left" valign="top">2</td>
            <td align="left" valign="top">Avg Feedback Rating:</td>
            <td align="left" valign="top">99%</td>
            <td align="left" valign="top">Avg Daily Rate over past Jobs:</td>
            <td align="left" valign="top">$850</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top">Next Available: </td>
            <td align="left" valign="top">  01-APR-2012</td>
            <td align="left" valign="top">&nbsp; </td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
              </tr>
             <tr>
                <td colspan="2" align="left" valign="top" ></td><br /><br />
              </tr>
              <tr>
    <td colspan="2" align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="font-13">
                  <tbody>
                   <td colspan="4" align="left" valign="top" class="col_bor2l"><strong>My Jobs list:</strong></td>
                  <tr>
                    <td class="col_bor2"><a href="#"><u>ERP Project Manager</u></a></td>
                    <td class="col_bor2">Start Date:  01-FEB-2011</td>
                    <td class="col_bor2">Finish Date:  31-JUL-2011</td>
                    <td class="col_bor2">Daily Rate:  $950</td>
                  </tr>
                    <tr>
                      <td class="col_bor2"><a href="#"><u>IT Development Manager</u></a></td>
                      <td class="col_bor2">Start Date:  01-AUG-2011</td>
                      <td class="col_bor2">Finish Date:  *On-going*</td>
                      <td class="col_bor2">Daily Rate:  $875</td>
                    </tr>
                     <td colspan="4" align="left" valign="top" class="col_bor2l"></td>
                    
                </tbody></table></td>
    </tr>
              <?php /*?><tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0"  class="font-12">
                  <tr>
                    <td class="col_bor"><?php 
					$post_run=$db->query_silent("SELECT * FROM `post_job`  WHERE id in (SELECT `job_id` FROM `applied` WHERE `user_id`=".$s->value('USER_ID').") and `status` like '".ENABLE."'  ");
					echo $db->num_rows($post_run)?> Jobs Applied</td>
                    <td class="col_bor"><?php echo C_awarded()?> Jobs Awarded<br />
                      0% Awards Radio</td>
                    <td class="col_bor">0 Feedback Given<br />
                      O Feedback Received</td>
                    <td class="col_bor">$0 Earning</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="50" class="border_cl3"><table width="100%" border="0" cellpadding="0" cellspacing="0"  class="font-12">
                  <tr>
                    <td><table width="200" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td>All Catgories  <img src="images/arrow_1.gif" alt="" align="absmiddle" /></td>
                        <td>All Jobs   <img src="images/arrow_1.gif" alt="" align="absmiddle" /></td>
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
  		   $post_run=$db->query_silent("SELECT * FROM `post_job`  WHERE `user_id`='$uuid' ");
		 
		  
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
           <td><?php echo $data['title']?></td>
           
            <td><?php echo $data['description']?></td>
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
          <br />
<br />
<br />



          <div  class="clear"></div>
        </div>
        <div  class="clear"></div>
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
