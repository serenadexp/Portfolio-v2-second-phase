$(function(){

/* CONTENT PROJECTS */	
	var myContact=$('#contact');
	var nav=$('#nav li');
	var contactBorder=$('#ancContact');
	var workBorder=$('#ancWork');
	var project_One=$('#projectOne');
	var project_Two=$('#projectTwo');
	var project_Three=$('#projectThree');
	var project_Four=$('#projectFour');
	var firstCon=$('#firstContent');
	var secondCon=$('#secondContent');
	var thirdCon=$('#thirdContent');
	var fourthCon=$('#fourthContent');

/* CONTENT PROJECT INFO */
	var projectName=$("#contentProjectName p");
	var projectSub=$('#contentProjectInfoDetail p');
	$('.navCont').click(function(e)
	{

		if(myContact.hasClass('contactHide'))
		{
	
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


	project_One.click(function(e)
	{
	

		secondCon.removeClass('contentsProjectBorderLight');
		thirdCon.removeClass('contentsProjectBorderLight');
		fourthCon.removeClass('contentsProjectBorderLight');
		firstCon.addClass('contentsProjectBorderLight');
		
		var projectNum = $(this).attr('rel');
		console.log(projectNum);


	e.preventDefault();
	});	
	
		project_Two.click(function(e)
	{

		firstCon.removeClass('contentsProjectBorderLight');
		thirdCon.removeClass('contentsProjectBorderLight');
		fourthCon.removeClass('contentsProjectBorderLight');
		secondCon.addClass('contentsProjectBorderLight');

		var projectNum = $(this).attr('rel');
		
		$.ajax({
			type: "GET",
	  		url: baseUrl+"home/newSelection",
	  		data:{projectNum:projectNum},
	  		dataType:'json',
	  		success:function(data){
				console.log(data[0].project_Name);
				console.log(data[0].sub_Info);
				
				projectName.empty();
				projectSub.empty();
				projectName.html("Project: "+data[0].project_Name+"");
				projectSub.html("Information: "+data[0].sub_Info+"");
	  		}

		
		})
		console.log(projectNum);
		
	e.preventDefault();
	});	

	
	project_Three.click(function(e)
	{

		firstCon.removeClass('contentsProjectBorderLight');
		secondCon.removeClass('contentsProjectBorderLight');
		fourthCon.removeClass('contentsProjectBorderLight');
		thirdCon.addClass('contentsProjectBorderLight');

		var projectNum = $(this).attr('rel');
		console.log(projectNum);
		
	e.preventDefault();
	});	

	project_Four.click(function(e)
	{

		firstCon.removeClass('contentsProjectBorderLight');
		secondCon.removeClass('contentsProjectBorderLight');
		thirdCon.removeClass('contentsProjectBorderLight');
		fourthCon.addClass('contentsProjectBorderLight');

		var projectNum = $(this).attr('rel');
		console.log(projectNum);
		
	e.preventDefault();
	});	



});
