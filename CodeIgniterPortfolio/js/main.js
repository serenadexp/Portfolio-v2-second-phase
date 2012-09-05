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
	var projectTech=$('#contentTechDetail ul');
	var ancRel=$('#contentMoreDetail p a');
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
		
		$.ajax({
			type: "GET",
	  		url: baseUrl+"home/newSelection",
	  		data:{projectNum:projectNum},
	  		dataType:'json',
	  		success:function(data){
				console.log(data[0].project_Name);
				console.log(data);
				
				projectName.empty();
				projectSub.empty();
				projectTech.empty();
				projectName.html("Project: "+data[0].project_Name+"");
				projectSub.html(""+data[0].sub_Info+"");
				projectTech.html("<li><img src="+data[0].project_Tech_1+"></li><li><img src="+data[0].project_Tech_2+"></li><li><img src="+data[0].project_Tech_3+"></li><li><img src="+data[0].project_Tech_4+"></li><li><img src="+data[0].project_Tech_5+"></li><li><img src="+data[0].project_Tech_6+"></li>");
				ancRel.attr('href','details/index/'+projectNum+'');
/* 			ancRel.attr('rel',projectNum); */
	  		}

		
		})



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
				console.log(data);
				
				projectName.empty();
				projectSub.empty();
				projectTech.empty();
				projectName.html("Project: "+data[0].project_Name+"");
				projectSub.html(""+data[0].sub_Info+"");
				projectTech.html("<li><img src="+data[0].project_Tech_1+"></li><li><img src="+data[0].project_Tech_2+"></li>");
				ancRel.attr('href','details/index/'+projectNum+'');
/* 				ancRel.attr('rel',projectNum); */
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
		
		$.ajax({
			type: "GET",
	  		url: baseUrl+"home/newSelection",
	  		data:{projectNum:projectNum},
	  		dataType:'json',
	  		success:function(data){
				console.log(data[0].project_Name);
				console.log(data);
				
				projectName.empty();
				projectSub.empty();
				projectTech.empty();
				projectName.html("Project: "+data[0].project_Name+"");
				projectSub.html(""+data[0].sub_Info+"");
				projectTech.html("<li><img src="+data[0].project_Tech_1+"></li><li><img src="+data[0].project_Tech_2+"></li><li><img src="+data[0].project_Tech_3+"></li><li><img src="+data[0].project_Tech_4+"></li><li><img src="+data[0].project_Tech_5+"></li>");
				ancRel.attr('href','details/index/'+projectNum+'');
				/* ancRel.attr('rel',projectNum); */
	  		}

		
		})
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
		$.ajax({
			type: "GET",
	  		url: baseUrl+"home/newSelection",
	  		data:{projectNum:projectNum},
	  		dataType:'json',
	  		success:function(data){
				console.log(data[0].project_Name);
				console.log(data);
				
				projectName.empty();
				projectSub.empty();
				projectTech.empty();
				projectName.html("Project: "+data[0].project_Name+"");
				projectSub.html(""+data[0].sub_Info+"");
				projectTech.html("<li><img src="+data[0].project_Tech_1+"></li><li><img src="+data[0].project_Tech_2+"></li><li><img src="+data[0].project_Tech_3+"></li><li><img src="+data[0].project_Tech_4+"></li><li><img src="+data[0].project_Tech_5+"></li><li><img src="+data[0].project_Tech_6+"></li>");	
				
				ancRel.attr('href','details/index/'+projectNum+'');
				// NOT USING THE REL LIKE HOW I THOUGHT I WOULD LIKE PULL THE REL NUM AND SEND IT TO THE CONTROLLER FROM THE ANCHOR ancRel.attr('rel',projectNum);
				
	  		}

		
		})
		console.log(projectNum);
		
	e.preventDefault();
	});	



});
