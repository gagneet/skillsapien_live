 <?php 
 
   include 'include/header.php';
   //set user status
 	$id=$_REQUEST['id'];
if(isset($_REQUEST['action'])&& $_REQUEST["action"]=="delete" && $_REQUEST['id']!=""){
  
   $id = $_REQUEST['id'];
   mysql_query("delete from  pages where id='".$id."'");
 
 
 
 header("location:manage_description.php?msg=Data Has Been Deleted Successully");
 exit;
 
 }
   
 ?>
</head>
<body  >
<div align="center">
  <table width="1003" cellpadding="0" cellspacing="0">
    <tbody>
      <?php require('include/admin_header.php');?>
      <tr>
        <td id="backgroundLvl5" valign="top"><div style="padding-left: 20px;">
            <?php require('include/right.section.php')?>
        </div></td>
        <td id="mainImg" valign="top" align="center" height="500"><div class="section-title" style="height: 32px;">
            <div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;"> Manage Description</div>
          <div style="float:right"><a href="add_description.php">Add New</a></div>
          <div style="clear: both"></div>
        </div>
            <div style="clear: both">&nbsp;</div>
          <script type="text/javascript">
					$(document).ready(function() {
						/*
						*   Examples - images
						*/
			
						$("a#add_faq").fancybox({
							'titleShow'		: false
						});
			
						 
					});
	</script>
            <div class="clear"></div>
          <div class="tableList" style="width:100%">
            <form name="frm1" id="frm1" action="" method="post">
                <table cellpadding="0" cellspacing="0" width="100%" border="1" bgcolor="def2fd" bordercolor="#66FFFF">
                  
                  <tr>
                    <td width="5%"><strong>Sr.no</strong></td>
                    <td width="15%"><strong>title</strong></td>
                    <td width="70%"><strong>Description</strong> </td>
                   <td width="10%"><strong>Action</strong> </td>
                  </tr>
                  
                  <? 
					  if(!isset($_REQUEST['start']))
  					 {   
        					 $_REQUEST['start']=0;
   					 } 
   						$intValue=$start; 
						$rec_inc=50; 
						
						
 $sel=mysql_query("SELECT  * from pages ");
					  $i=1;
					  while($row=mysql_fetch_array($sel))
					  {
					  					  
					  ?>
                  <tr>
                    <td width="5%" valign="top"><? echo $i; ?></td>
                    <td width="15%" valign="top"><? echo $row['title'] ; ?></td>
                    <td width="70%"><? echo $row['description'] ; ?></td>
                    
                    <td width="15%" valign="top"><a href="edit_description.php?id=<? echo $row['id'] ; ?>">Edit</a>&nbsp;&nbsp;<a href="?action=delete&id=<?php echo $row["id"]; ?>" onClick="return confirm('Are you sure want to delete this users');"><font color="#CC0000">Delete</font></a></td>
                  </tr>
                  <?
					  $i++; 
					  }
					  
					  ?>
                  
                  </tr>
                  <tr>
                    <td colspan="9" align="center"><?php	
				
				 $query4="select * from pages";		
				
		
		 	 $result4=mysql_query($query4);
  
      				
      				 $nume=mysql_num_rows($result4);

      echo "<table align = 'center' width='80%' border=0><tr><td  align='center' >";

      if($_REQUEST['start']>0) 
	  { 

       print "<a href='professionlist.php?start=".($_REQUEST['start']-$rec_inc)."'>PREV</a>                 				              &nbsp;&nbsp;&nbsp;&nbsp;"; 

      } 

//echo "</td><td align=center >";

    for($i=0;$i<ceil($nume/$rec_inc);$i=$i+1){

    if(($i*$rec_inc) <> $_REQUEST['start']){

    echo "&nbsp;&nbsp;<a href='professionlist.php?start=".($i*$rec_inc)."'>".($i+1)."</a>&nbsp;&nbsp;";

    }

   else { echo "".($i+1)."";}      

    }

    //echo "</td><td  align='right' width='20%'>";

   if((($i-1)*$rec_inc) > $_REQUEST['start']) { 

print "&nbsp;&nbsp;&nbsp;&nbsp;<a href='professionlist.php?start=".($_REQUEST['start']+$rec_inc)."'>NEXT</a>";} 
  echo "</td></tr></table>";

?></td>
                  </tr>
                </table>
            </form>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>


</body></html>