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
							 
							<div class="float-left" style="margin-right: 20px; height: 32px; line-height: 32px; vertical-align: middle;"> List of Profession:</div>
							<div style="float:right"><a href="addprofession.php">Add New</a></div>
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
				    <table cellpadding="0" cellspacing="0" width="70%" border="0" bgcolor="def2fd" >
                      <tr>
                        <td colspan="4">&nbsp;<? echo $_REQUEST['ms'];  ?></td>
                      </tr>
                      <tr>
                        <td>Sr.no</td>
                        <td>Name</td>
                        <td>Action</td>
                        <td>&nbsp;</td>
                      </tr>
					  <? 
					  if(!isset($_REQUEST['start']))
  					 {   
        					 $_REQUEST['start']=0;
   					 } 
   						$intValue=$start; 
						$rec_inc=25; 
						
						
					  $sel=mysql_query("select * from profession limit ".$_REQUEST['start'].", ".$rec_inc);
					  $i=1;
					  while($row=mysql_fetch_array($sel))
					  {
					  
					  
					  ?>
                      <tr>
                        <td><? echo $row['id'] ; ?></td>
                        <td><? echo $row['name'] ; ?></td>
                        <td><a href="editprofession.php?id=<? echo $row['id'] ; ?>">Edit</a>&nbsp;&nbsp;<a onClick="return confirm('Do You want to Delete this record.\n\ Proceed to delete  Click on OK   ');"   href="delindus.php?id=<? echo $row['id'] ; ?>&page=professionlist"><font color="#CC0000">Delete</font></a></td>
                        <td>&nbsp;</td>
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
                      </tr>
                      <tr>
                        <td colspan="4" align="center"> <?php	
				
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