
	/*   This function is using in   captcha reload */
	function RefreshCaptcha(path)
	{
		var src =path +'?sid=' + Math.random(); 
		$('#captcha').attr( 'src', src ) ;
	}
	/*   Redirect a page in time interval */
	  function redirectInTime(time,path)
	  {
		  setInterval("redirect('"+path+"')",time);
	  }
     /*   Redirect a page  */
	  function redirect(path)
	  {
		 window.location=path;
	  }
	  
	  
	/* validate email*/	  
	function isemail(email){
		email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
		return email_regex.test(email);
	}
	
	function isWebSite(website)
	{
 			var isWebSite = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/; 
			if(isWebSite.test(website))
			{ 
				return true;
			}
			else
			{ 
				return false;
			} 	
	}
	function isContactDetails(cd)
	{
	    var reg_cd=/^[0-9]{5,20}$/;
		return reg_cd.test(cd);
	}
	
	function resetForm(id) {
			$(id).each(function(){
					this.reset();
			});
		}
		
		
function show(id)
{
		$(id).show('slow');
}

		
function hide(id)
{
		$(id).hide(2000, function () {
        $(this).remove();
      });
}

function url_info(url,showid)
{
 		$.post(url,function(data){ show(showid);$(showid).html(data)});
}
var old;
function faq(id)
{
		show(id);
		hide(old);
		old=id;
		
}

$( function (){
		$('.tr-even').hover (function(){$(this).css('background','#C6DA9D')}, function(){$(this).css('background','#ffffff')} );	 
		$('.tr-odd').hover (function(){$(this).css('background','#C6DA9D')}, function(){$(this).css('background','#F2FFE6')} );	 
	
	 
});

function attache(browsFile,showID){
  		var val = $(browsFile).attr('value');
		$(showID).attr('value', val);
	 };


function clear_form_elements(ele) {

    $(ele).find(':input').each(function() {
        switch(this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });

}

