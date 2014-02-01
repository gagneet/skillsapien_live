 <?php 
 
   include 'include/header.php';
   //set user status
 		
		
   
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
            <div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;"> List Of Qualification </div>
          <div style="float:right"><a href="addqualification.php">Add New</a></div>
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
          <div class="tableList">
            <form name="frm1" id="frm1" action="" method="post">
                <table cellpadding="0" cellspacing="0" width="100%" border="0" bgcolor="def2fd" >
                  <tr>
                    <td colspan="7">&nbsp;<? echo $_REQUEST['ms'];  ?></td>
                  </tr>
                  <tr>
                    <td width="7%" ><strong>Sr.no</strong></td>
                    <td width="18%"><strong>Profession Name</strong></td>
                    <td width="23%"><strong>Discipline Name</strong> </td>
                    <td width="10%"><strong>Role</strong></td>
                    <td width="18%"><strong>Technology</strong></td>
                    <td width="14%"><strong>Functional Area</strong> </td>
                     <td width="18%"><strong>Skillset</strong> </td>
                      <td width="18%"><strong>Qualification</strong>&nbsp;&nbsp;&nbsp; </td>
                    <td width="10%"><strong>Action</strong></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
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
						
						
 $sel=mysql_query("SELECT profession.name, disciplinelist.disc_name, role.role, technology.technology, functional_area.func_area_name, functional_area.id FROM profession, disciplinelist, role, technology, functional_area WHERE profession.id = functional_area.profession_id AND disciplinelist.id = functional_area.disc_id  AND role.id = functional_area.role_id AND technology.id = functional_area.tech_id limit ".$_REQUEST['start'].", ".$rec_inc);
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
                    <td><? echo $row['func_area_name'] ; ?></td>
                     <td><? echo $row[''] ; ?></td>
                      <td><? echo $row[''] ; ?></td>
                    <td><a href="edit_technology.php?id=<? echo $row['id'] ; ?>">Edit</a>&nbsp;&nbsp;<a  onClick="return confirm('Do You want to Delete this record.\n\ Proceed to delete  Click on OK   ');" href="delindus.php?id=<? echo $row['id'] ; ?>&page=role"><font color="#CC0000">Delete</font></a></td>
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

                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="7" align="center"><?php	
				
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
            </form>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>


</body></html>