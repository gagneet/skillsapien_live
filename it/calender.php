<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<!--<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>-->
<!--<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>-->
<!--<script type="application/javascript" src="js/jquery-1.6.2.min.js"></script>-->
<!--<script src="js/jquery.min.js"></script>-->
<!--<script src="js/jquery-ui.min.js"></script>-->
<!--<script src="js/jquery-ui-1.8.16.custom.min.js"></script>-->



<!--<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />-->
<!--<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>
    -->
    
    
   <!-- <style type="text/css">
  .highlight {
    background-color: #F5E3E0;
	border: 6px solid #BC5529;
  }
</style>-->
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.15.custom.css" rel="stylesheet" />
<!--<style type="text/css">
input.date_pick {
    background-image: url("images/date_picker.png");
    background-position: right center;
    background-repeat: no-repeat;
    padding-right: 18px;
    text-align: center;
    width: 100px;
}
.current{
  color:#FF0000;
  font-weight:bold;
}
.ui-widget {
  font-size: 0.8em;
}
</style>-->
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="application/javascript">
function brother_date_pick() {
  $('.date_pick').datepicker(
    'destroy'
  ).datepicker({
    firstDay: 1
  , dateFormat: 'yy-mm-dd'
  });
}
$(document).ready(function() {
  brother_date_pick();
});
</script>
</head>

<body>
<table>
<tr><td>
<input type="text" name="date" id="datepicker" value="<?php echo ($_REQUEST['selected_date'] != ''? $_REQUEST['selected_date'] : "");?>" class="date_pick" id="selected_date" name="selected_date" size="11" readonly="true" >
<!--<input id="datepicker" type="text">--></td></tr>
</table>
</body>
</html>
