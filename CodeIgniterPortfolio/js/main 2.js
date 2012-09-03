$(function(){
	
	var myContact=$('#contact');
	var nav=$('#nav li');
	var contactBorder=$('#ancContact');
	var workBorder=$('#ancWork');
	
$('.navCont').click(function(e){

	if(myContact.hasClass('contactHide')){
	
	nav.removeClass('bott');
	contactBorder.addClass('bottContact');
	myContact.slideDown('slow').removeClass('contactHide').addClass('contactShow');
	
	}
	else if(myContact.hasClass('contactShow'))
	{
	contactBorder.removeClass('bottContact');
	workBorder.addClass('bott');
	myContact.slideUp('slow').removeClass('contactShow').addClass('contactHide');	
	}
	
e.preventDefault();
})	
				
	



});
