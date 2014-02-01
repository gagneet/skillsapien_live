<script type='text/javascript' src='./jquery.js'></script>
<link href="./facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="./facebox.js" type="text/javascript"></script>

<script type="text/javascript" >
$(document).ready(function(){

//Read More Popup

	$('a[rel*=facebox]').facebox({

	loadingImage : 'images/Loading.gif',

	closeImage   : 'images/x.png'

	});
	
	
		
	 
});


</script>

<a  rel="facebox" href="login.php" > click me </a>
