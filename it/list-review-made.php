<?php
include_once('init.php');
Is_valid_uesr();
 
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
      <div class="select_area">
        <div class="select_1clact">Sign UP </div>
        <div class="select_2cl">Fill-in your skills </div>
        <div class="select_3cl"> Record an audio/video clip about yourself </div>
        <div class="select_4cl " >Set your rates</div>
        <div class="clear"></div>
      </div>
       <div class="listOfTable">
      
       
          
            <?php 
	if($_REQUEST['did']>0){
	  $delete_sql='UPDATE  `review` SET `status` = "'.DISABLE.'" WHERE `review`.`id` ='.$_REQUEST['did']." and `recruiters_id` =".$s->value('R_USER_ID')."";
		if($db->query_silent($delete_sql))
		{
			header('location:list-review-made.php'); 
		}
	}
			
	//==============================================		
	 
	
	if($edit==true){		
	 /* $data=$db->fetch_array($run);
	  
	  
	  if(isset($_REQUEST['title'])==true)
	  {
		  $title=$_REQUEST['title'];
		  $description=$_REQUEST['description'];
		  $positions=$_REQUEST['positions'];
		  $budget=$_REQUEST['budget'];
		  $attached_profile_img=$_REQUEST['attached_profile_img'];
		  $job_end_d=$_REQUEST['job_end_d'];
		  $job_end_m=$_REQUEST['job_end_m'];
		  $job_end_y=$_REQUEST['job_end_y'];
		  $keywords=$_REQUEST['keywords'];
	  }
	  else
	  {
		   $title=$data['title'];
		  $description=$data['description'];
		  $positions=$data['positions'];
		  $budget=$data['budget'];
		  $attached_profile_img=$data['attached_profile_img'];
		  $temp=explode('-',$data['job_end_date']);
		  $job_end_d=$temp[2];
		  $job_end_m=date('m',strtotime($data['job_end_date']));	  
		  $job_end_y=$temp[0];
		  $keywords=$data['keywords'];
	  }
	  
	  require(WM_INCLIDE.WM_CONTENT.'post-job-requirements.php');
*/	 } 
	  else{?> 
      <div><h1>Review Made<div style="float:right"><div class="confBtnSet"><input  class="action-input"  value="Make New Offers" onclick="javascript:window.location='review-make-offers-skill-profiles.php'" type="Button"></div></div></h1></div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
           <tr>
            <th width="6%">ID</th>
            <th width="10%">Job title </th>
            <th width="20%">Subject</th>
            <th width="20%">Description</th>
            <th width="10%">Total Replied</th>
            <th width="10%">Posted Date</th>
            <th>Action</th>
          </tr><?php
		  
		  //===============================================
 			  $run=$db->query_silent(" SELECT pj.title,r.subject,rc.comment,r.date,r.id,r.comment_id FROM review AS r
					LEFT JOIN post_job AS pj  ON pj.id = r.job_title 
					LEFT JOIN review_comment as rc  ON r.`comment_id`=rc.id WHERE  r.`recruiters_id` =".$s->value('R_USER_ID')." and r.`status` like '".ENABLE."' ");
		  while($data=$db->fetch_array($run))
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
            <td><?php echo $data['subject']?></td>
            <td><?php echo $data['comment']?></td>
             <td><?php
             $sql='SELECT * FROM `review_comment` WHERE `parent_id`="'.$data['comment_id'].'" and  `status` like "'.ENABLE.'"';
			 echo $db->num_rows($db->query_silent($sql) )  ;
			 ?></td>
            <td><?php echo date(DMY,strtotime($data['date']))?></td>
            <td><!--<a href="javascript:void(0)" onclick="show('#e<?php //echo $row?>')">Edit</a>-->&nbsp;&nbsp;<a   href="javascript:void(0)" onclick="show('#d<?php echo $row?>')">Delete</a></td>
          </tr>
          <tr>
              <td colspan="7"><div id="e<?php echo $row?>" class="conf"><div class="confirm-text">Are you sure you want to edit?</div>  
                  <div class="confBtnSet">
                    <input value="Confirm" class="action-input" onclick="javascript:window.location='?id=<?php echo $data['id']?>'" type="Button">
                    <input value="Cancel" class="action-input" onclick="hide('#e<?php echo $row?>')" type="Button">
                  </div>
              </div>
              <div id="d<?php echo $row?>" class="conf delt" >
                  <div class="confirm-text">Are you sure you want to delete?</div>
                   
                  <div class="confBtnSet">
                    <input value="Confirm" class="action-input" onclick="javascript:window.location='?did=<?php echo $data['id']?>'" type="Button">
                    <input value="Cancel" class="action-input" onclick="hide('#d<?php echo $row?>')" type="Button">
                  </div>
                  </div>              </td>
             </tr>
          <?php	   
		  }
		  
		  //no result found
		  if($db->num_rows($run)<=0)
		  {
		   ?>
           <tr>
              <td colspan="7" class="noresultfound" align="center"><?php echo $error_msg[46]?></td>
          </tr> 
           <?php 
		  }
	}	 
		  ?>
        </table>
        <br />

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
