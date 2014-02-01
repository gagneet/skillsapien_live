$(function (){
 	$('#tab1').submit(function(){
 		 $.post('include/contents/condidate_sign_up_insert.php?tab=1',function(data){ $.post('include/contents/condidate_sign_up_tab.php?tab=2',function(data){ $('#form_data').html("");$('#form_data').html(data)}); 
	}) ;
		 //----------------
 		 return false;
 	 })
	
});

function  form2()
{
  
  $.post('include/contents/condidate_sign_up_insert.php?tab=2',function(data){
			$.post('include/contents/condidate_sign_up_tab.php?tab=3',function(data){ $('#form_data').html("");$('#form_data').html(data)});		
			
    });
 	 return false;
} 


 	
function form3(val)
{
 	$.post('include/contents/condidate_sign_up_insert.php?tab=3&data='+val,function(data){
                                 $.post('include/contents/condidate_sign_up_tab.php?tab=4',function(data){ $('#form_data').html("");$('#form_data').html(data)});
     });
 return false;
} 	

 	
function form4()
{
 	$.post('include/contents/condidate_sign_up_insert.php?tab=4',function(data){
		 $.post('include/contents/condidate_sign_up_tab.php?tab=5',function(data){ $('#form_data').html("");$('#form_data').html(data)});
                                
     });
 return false;
} 	

  
// 