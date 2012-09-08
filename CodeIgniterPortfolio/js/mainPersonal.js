$(function(){
	
	var myContact=$('#contact');
	var nav=$('#nav li');
	var contactBorder=$('#ancContact');
	var personalBorder=$('#ancPersonal');
	
	var first=$('#firstLast');
var email=$('#email');
var subject=$('#subject');
var send=$('#sendBtn');	
var message=$('#message');
var warn=$('#warn');
$('.navCont').click(function(e){

	if(myContact.hasClass('contactHide')){
	
		nav.removeClass('bott');
		contactBorder.addClass('bottContact');
		myContact.slideDown('slow').removeClass('contactHide').addClass('contactShow');
	
	}
	else if(myContact.hasClass('contactShow'))
	{
		contactBorder.removeClass('bottContact');
		personalBorder.addClass('bott');
		myContact.slideUp('slow').removeClass('contactShow').addClass('contactHide');	
	}
	
e.preventDefault();
})	
				
	
	send.click(function(e){
	
	if(first.val()==''||email.val()==''||subject.val()==''||message.val()=='')
	{
		warn.removeClass('warnHide').addClass('warnShow');
	}
	else
	
	{
		if(warn.hasClass('warnShow')){
			warn.removeClass('warnShow').addClass('warnHide');
		}
		$.ajax({
			type:"GET",
	  		url: baseUrl+"personal/emailSend",
	  		data:{firstLast:first.val(),email:email.val(),subject:subject.val(),message:message.val()},
	  		success:function(data){
				if(myContact.hasClass('contactShow'))
				{
					contactBorder.removeClass('bottContact');
					personalBorder.addClass('bott');
					myContact.slideUp('slow').removeClass('contactShow').addClass('contactHide');	
				}

	  		}

	
	})

	
	
	
	}
		
	
	e.preventDefault();
	})	





});
