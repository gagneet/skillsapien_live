
$(function(){$('#sign_up').submit(function(){
	/*
	validation
	*/
	  
 	
	if($("#first_name").val()=="")
	{
		$('#first_name').focus();
		$("#error1").show();
		return false;
	}
	else
		$("#error1").hide();
	
	
	if($("#last_name").val()=="")
	{
		$('#last_name').focus();
		$("#error2").show();
		return false;
	}
	else
		$("#error2").hide();
 	
	if($("#email").val()=="")
	{
		$('#email').focus();
		$("#error3").show();
		return false;
	}
	else
		$("#error3").hide();
 	
	if(isemail($("#email").val())!=true)
	{
		$('#email').focus();
		$("#error3_1").show();
		return false;
	}
	else
		$("#error3_1").hide();
 	
	/*
	if($("#email").val()!=$("#confirm_email").val())
	{
		$('#confirm_email').focus();
		$("#error4").show();
		return false;
	}
	else
		$("#error4").hide();*/
	
	
	if($("#password").val()=="")
	{
		$('#password').focus();
		$("#error5").show();
		return false;
	}
	else
		$("#error5").hide();
	
	if($("#password").val().lenght<=6 || $("#password").val().lenght>15)
	{
		$('#password').focus();
		$("#error5_1").show();
		return false;
	}
	else
		$("#error5_1").hide();
	

	
/*	if($("#password").val()!=$("#c_password").val())
	{
		$('#c_password').focus();
		$("#error6").show();
		return false;
	}
	else
		$("#error6").hide();*/
	
	if($("input[@name='gender']:checked").length==0)
	{
		$('#gender1').focus();
		$("#error7").show();
		return false;
	}
	else
	$("#error7").hide();
	 
	if($('#dob_date').val()<=0 || $('#dob_month').val()=="" || $('#dob_year').val()<=0)
	{
		if($('#dob_date').val()<=0)
		$('#dob_date').focus();
		
		if($('#dob_month').val()=="" )
		$('#dob_month').focus();
		
		if($('#dob_year').val()<=0)
		$('#dob_year').focus();
		
 		$("#error8").show();
		return false;
	}
	else
		$("#error8").hide();
	
 		return true;
})});


