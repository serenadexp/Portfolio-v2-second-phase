<html>
	<head>
		<title>Exercise 7 - Move at your own Pace </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
  		<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css" />
 		<link rel="stylesheet" href="css/webLand.css" type="text/css" /> 
</head>
	<body>
			<div id="headerLanding">
				
				<div id="head">
					<img class="imgBl" id="logo" src="img/subLogo.png"/>
					
						<ul id="nav">							
							<li><img src="img/searchIco.png"/><a class="ftNav" href="landing">Exercise Finder</a></li>
							<li><img src="img/acctIco.png"/><?php echo anchor('acct','Account', ' class="ftNav" ')?></li>
							<li><img src="img/logOutIco.png"/><?php echo anchor('landing/logOut','Log-Out', ' class="ftNav" ')?></li>
						</ul><!--  nav close -->
				</div><!-- head close -->
	
				
			</div> <!-- header close -->

	
			<div id="content">
				<div id="mainGraphicLanding">
						<div id="mainSearch">					
							<form id="searchForm" method="get" action="landing/searchInfo">
								<input id="searchField" name="usersSearch" class="ftSearch" type="text" placeholder="Zipcode or Instructor Name"/>
								<button id="searchBtn" class="ftSearchBtn" type="submit">Search</button>
							</form>
						</div>		
					</div><!-- mainGraphic close -->
				<div id="wrapper">
					
					
					<div id="infoTraineeInstruc">
						<div id="savedInstrc">
						
							<p class="nevisInfoFt">Saved Instructors For You</p>
								<ul id="saveIn">
									<?php foreach($pullS->result() as $saves):?>
								

							
									<li class="ftInstructorName">
										
		 					<?php echo '<a class="liAnc" href="vid/user/'.$saves->userId.'">';?><img class="imgBl" src="<?php echo $mySaveUserAvatar= $saves->userAvatar;?>"/></a>	
		 									 <p class="txtBl insName"><?php echo $mySaveUserName= $saves->userName;?></p>
				 							 <p class="workSt ftStyles"><?php echo $mySaveUserStyles= $saves->userStyles;?></p>
				 						 
									</li>

									<?php endforeach;?>

											
									</ul> <!-- saveIn close -->
						
						</div> <!-- savedInstrc close -->
			

<!--
select vusers.user_name, pusers.user_name from vusers 
	join pusers 
				   on vusers.parent_id = pusers.user_id 
				   where pusers.user_id= 2;
-->
			
						<div id="recommendedInstrc">
						
						
						<p class="nevisInfoFt">Recommended Instructors</p>
							<ul id="recommendedIn">
							<?php foreach($pullR->result() as $recomm): ?>
								<li class="ftInstructorName">
									
		 						<?php echo '<a class="liAnc" href="vid/user/'.$recomm->userId.'">';?><img class="imgBl" src="<?php echo $mySaveUserAvatar= $recomm->userAvatar ?>"/></a>
		 									 <p class="txtBl insName"><?php echo $mySaveUserName= $recomm->userName?></p>
				 							 <p class="workSt ftStyles"><?php echo $mySaveUserStyles= $recomm->userStyles?></p>
									</li>
						<?php endforeach;?>
							</ul> <!-- recommendedIn close -->
					
					</div> <!-- recommendedInstrc close -->

					
					</div>
					
										
				</div> <!-- wrapper close -->
	
			
			</div> <!-- content close -->
		
		<div id="footer">		
				
				<div id="ftHold">
					<p class="ftFont" id="ftLinks">Copyright © 2012 Exercise 7
					<a id="disclaimer" class="ftFont" href="#"/>Disclaimer</a>
					<a id="aboutUs" class="ftFont" href="#"/>About Us</a>
					</p>
						<div id="disclaim" class="hidd" >
								<p class="nevisInfoFt">Disclaimer</p>
								<p class="ftDis ftline">This site is not responsible for how you choose to workout, diet or use any workout machines of any kind. If you get injured you should seek physician of some kind or get medical help immediately. So get fit at your own risk. Thank You.</p>
		</div>	<!-- disclaim close	 -->
		
		<div id="about" class="hidd" >
								<p class="nevisInfoFt">About Us</p>
								<p class="ftDis ftline">Exercise 7 is away for trainees to get fit from there homes. Trainees can search for local instructors and see what lessons they have to offer and instructors can put up there videos they have and learn from other instructors and see what styles they could incorporate into there regiment.</p>
		</div>	<!-- about close	 -->
				</div><!-- ftHold close -->
				
			
		</div><!-- footer close -->
		

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>