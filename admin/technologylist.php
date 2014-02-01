 <?php 
 
   include 'include/header.php';
   //set user status
 		
		
   
 ?>
</head>
<body  >
	<div align="center">
		<table width="1003" cellpadding="0" cellspacing="0">
			<tbody> 
<?php require('include/admin_header.php');?>			<tr>
				<td id="backgroundLvl5" valign="top">
				<div style="padding-left: 20px;">
	<?php require('include/right.section.php')?>
</div>				</td>
				<td id="mainImg" valign="top" align="center" height="500">
					<div class="section-title" style="height: 32px;">
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;"> List of Technology</div>
							<div style="float:right"><a href="add_technolozy.php">Add New</a></div>
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
					<div class="tableList"><form name="frm1" id="frm1" action="" method="post">
				    <table cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="6">&nbsp;<? echo $_REQUEST['ms'];  ?></td>
                      </tr>
                      <tr>
                        <td width="8%"><strong>Sr.no</strong></td>
                        <td width="21%"><strong>Profession Name</strong></td>
                        <td width="26%"><strong>Discipline Name</strong> </td>
                        <td width="12%"><strong>Role</strong></td>
                        <td width="23%"><strong>Technology</strong></td>
                        <td width="10%"><strong>Action</strong></td>
                      </tr>
					    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
					  <? 
					  if(!isset($_REQUEST['start']))
  					 {   
        					 $_REQUEST['start']=0;
   					 } 
   						$intValue=$start; 
						$rec_inc=50; 
						
						
 $sel=mysql_query("SELECT profession.name, disciplinelist.disc_name,role.role,technology.technology,technology.id FROM profession, disciplinelist, role,technology WHERE profession.id = technology .profession_id
AND disciplinelist.id = technology .disc_id and  role.id=technology.role_id limit ".$_REQUEST['start'].", ".$rec_inc);
					  $i=1;
					  while($row=mysql_fetch_array($sel))
					  {
					  
					  
					  ?>
                    
                      <tr>
                        <td><? echo $i; ?></td>
                        <td><? echo $row['name'] ; ?></td>
                        <td><? echo $row['disc_name'] ; ?></td>
                        <td><? echo $row['role'] ; ?></td>
                        <td><? echo $row['technology'] ; ?></td>
                        <td><a href="edit_technology.php?id=<? echo $row['id'] ; ?>">Edit</a>&nbsp;&nbsp;<a  onClick="return confirm('Do You want to Delete this record.\n\ Proceed to delete  Click on OK   ');" href="delindus.php?id=<? echo $row['id'] ; ?>&page=technology"><font color="#CC0000">Delete</font></a></td>
                      </tr>
					  <?
					  $i++; 
					  }
					  
					  ?>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="6" align="center"> <?php	
				
				 $query4="select * from profession";		
				
		
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
					</form></div>    					
                  
        </td>
			</tr>
 	</tbody></table>
	</div>


</body></html>