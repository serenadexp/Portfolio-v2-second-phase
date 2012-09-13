$(function(){
	
	var signUpHead= $("#signUptxt span");
	var signUpHold =$("#signUpHold");
	var logInHold =$("#logInHold");
		
	$("#log").click(function(evt){
		evt.preventDefault();
	
			signUpHold.fadeOut('slow', function(){
				signUpHold.empty();
				logInHold.removeClass("hidd");
	
			}).fadeIn(2000);
	
		});
	
	$("#instruc").click(function(evt){
		evt.preventDefault();
	
			$("#reg").lightbox_me({
				centered:true
		
			});
	
	});
	
	$("#disclaimer").click(function(evt){
		evt.preventDefault();
	
			$("#disclaim").lightbox_me({
				centered:true
		
			});
	
	});
	
	$("#aboutUs").click(function(evt){
		evt.preventDefault();
	
			$("#about").lightbox_me({
				centered:true
		
			});
	
	});
	//ACCT SIDE
	
	
	
	
	$("#zipE").click(function(evt){
	
		$("#zipEd").trigger('activate_edit');
	
			$("#zipEd").editable('../acct/editZip',{
				type:'textarea',
				event:'activate_edit',
				cancel:'cancel',
				submit:'OK',
				id:'elementid',
				name:'newvalue'
	
		})
		evt.preventDefault();
	})
	
	
	
	
	$("#stylesE").click(function(evt){
	
		$("#styleEd").trigger('activate_edit');
	
			$("#styleEd").editable('../acct/editStyles',{
				type:'textarea',
				event:'activate_edit',
				cancel:'cancel',
				submit:'OK',
				id:'elementid',
				name:'newvalue'
	
		})
		evt.preventDefault();
	})
	
	
	
	
	
	$(".btnSave").click(function(evt){
		evt.preventDefault();
		var name= $(this).attr('rel');
	$.ajax({
	  		type: "GET",
	  		url: baseUrl+"vid/saveIns",
	  		data:{name:name},
	  		success:function(data){

	  		}
		})
	 			  
			})
	

	$(".stylePick").click(function(evt){
		evt.preventDefault();
		
	$(".stylePick").removeClass('highLight');

	$(this).addClass('highLight');
		
			$('.vidThumbHolder ul').empty();
		
			var name= $(this).attr('rel');
		
		$.ajax({
	  		type: "GET",
	  		url: baseUrl+"vid/clickedStyle",
	  		data:{name:name},
	  		dataType:'json',
	  		success:function(data){
	  				var add;
	  				for(var i=0; i<data.length; i++)
	  				{
	  					console.log("video loaded", data[i].videoLink);
	  					
	  					
	  					$('.vidThumbHolder ul').append( '<li class="vidChoose" rel="'+data[i].videoLink+'"> <img class="imgBl" src="../../img/vidThumb.jpg"/></li>');
	  					
	  				}
	  				
	  				
	  					$(".vidChoose").click(function(evt){
						var url = $(this).attr('rel');
						
						$('#viewVideo').html('<iframe id="videoPlayer" width="460" height="315" src="' + url + '" frameborder="0" allowfullscreen></iframe>');									
						return false;
					});
	  				
	  		},
	  		error:function(xhr,status){
	  			console.log(status);
	  		}
		});
	});

	
				
	



});
