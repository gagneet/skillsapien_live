<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="tengcalendar_files/scripts.css">

<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<title>Big Search</title>

<style>
.mycode{
font-family: Courier;
font-size: 11px;
background-color:#EFEFEF;
}

table
{
	background-color:#caf6ff;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	margin-top: 28px;
}

.button
{
	text-align:center;
	vertical-align:middle;
	height:40px;
}

table p
{
	font-size:15px;
	font-weight:bold;
	text-align:center;
	color:#063;
}

.color
{
	background-color:#a3ddf3;
	padding-left:20px;
}

</style>

<script language="javascript" type="text/javascript" src="js/datetimepicker.js">
</script>
<script async src="tengcalendar_files/s_dd6e9fbb78d92ec298f6119b05509777.js" id="_bsap_js_dd6e9fbb78d92ec298f6119b05509777" type="text/javascript"></script>
</head>




<body>
<form action="bigsearchmenu.php" method="post" name="bigSearch">
<table>
<tr>
<td colspan="5"><p>Skill Search Criteria</p></td>
</tr>


<tr>
<td>Industry *</td>
<td>
<select name="industry" id="industry">
<option value="">select</option>
<option value="1">IT</option>
<option value="2">Mining</option>
</select>
</td>
<td>Location</td>
<td><input type="text" size="15" value="city"  name="city" id="city" onFocus="if(this.value=='city') this.value=''" onBlur="if(this.value=='') this.value='city'" /></td> 
<td><input type="text" size="15" value="country"  name="country"  id="country" onFocus="if(this.value=='country') this.value=''" onBlur="if(this.value=='') this.value='Country'" /></td>
</tr>





<tr>
<td>Skill keywords *</td>
<td colspan="4"><input type="text" size="65"  name="skillkeyword" id="skillkeyword"/></td>
</tr>


<tr>
<td colspan="5">
<table cellpadding="0" cellspacing="0" width="580px" class="color">
<tr>
<td colspan="2" width="300px"><p>Availability Required</p></td>
<td colspan="2" width="300px"><p>Rates</p></td>
</tr>


<tr>
<td width="60px">From Date *</td>
<td >


  <input value="" id="fdate" name="fdate" size="20" onClick="javascript:NewCal('fdate','ddmmyyyy',true,12)" class="scriptbreadcrumb">
      <a href="javascript:NewCal('fdate','ddmmyyyy',true,12)"><img alt="Pick a date" src="images/cal.gif" height="16" border="0" width="16"></a>

  
</td>

<td>Ideal Rate</td>
<td><input type="text" size="20"  name="rate" id="idealrate"/></td>
</tr>
<tr>
<td style="line-height:5px;">&nbsp;</td>
</tr>


<tr>
<td width="86px">To Date *</td>
<td>
<input type="text" name="todate" value=""  size="20" id="todate" onClick="javascript:NewCal('todate','ddmmyyyy',true,12)">
 <a href="javascript:NewCal('todate','ddmmyyyy',true,12)"><img alt="Pick a date" src="images/cal.gif" height="16" border="0" width="16"></a>

</td>

<td>Max Rate</td>
<td><input type="text" size="20"   id="maxrate" name="maxrate"/></td>
</tr>

<tr>
<td style="line-height:5px;">&nbsp;</td>
</tr>

<tr>
<td colspan="5"  class="button">
<input type="submit" name="sub" style="background-image: url('./images/submit.png');width:121px;height:27px;background-color:#a3ddf3; border:none; cursor:pointer;" value="">
</td>
</tr>
<tr>
<td style="line-height:15px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>



</table>




</form></body>
</html>