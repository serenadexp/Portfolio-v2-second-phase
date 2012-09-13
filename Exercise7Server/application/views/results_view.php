<html>
	<head>
		<title>Exercise 7 - Move At Your Own Pace </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
  		<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css" />
 		<link rel="stylesheet" href="css/webResults.css" type="text/css" /> 
</head>
	<body>
			<div id="headerLanding">
				
				<div id="head">
					<img class="imgBl" id="logo" src="img/subLogo.png"/>
					
						<ul id="nav">
							<li><img src="img/searchIco.png"/><?php echo anchor('landing','Exercise Finder', ' class="ftNav" ')?></li>
							<li><img src="img/acctIco.png"/><?php echo anchor('acct','Account', ' class="ftNav" ')?></li>
							<li><img src="img/logOutIco.png"/><?php echo anchor('results/logOut','Log-Out', ' class="ftNav" ')?></li>
						</ul><!--  nav close -->
				</div><!-- head close -->
	
				
			</div> <!-- header close -->

	
			<div id="content">
				<div id="mainGraphicLanding">
						<div id="mainSearch">					
							<form id="searchForm" method="get" action="results/searchInfo">
								<input id="searchField" name="usersSearch" class="ftSearch" type="text" placeholder="<?php echo $lastTyped?>"/>
								<button id="searchBtn" class="ftSearchBtn" type="submit">Search</button>
							</form>
						</div>		
					</div><!-- mainGraphic close -->
				<div id="wrapper">
					
					
					<div id="infoTraineeInstruc">
						<div id="resultInstrc">
						
								<ul id="saveIn">
								<?php foreach($userSearch as $results): ?>
								<li>
								<?php echo '<a class="liAnc" href="vid/user/'.$results->userId.'">';?><img class="imgBl thumbImg" src="<?php echo $myResultAvatar= $results->userAvatar ?>"/></a>
								<p class="txtBl ftInstructorName insName"><?php echo $myResultUserName= $results->userName?></p>
								<p class="workSt ftStyles"><?php echo $myResultStyles= $results->userStyles?></p>
								</li>
								<?php endforeach;?>
							
									
								</ul> <!-- saveIn close -->
									
						</div> <!-- savedInstrc close -->
			
					</div><!-- infoTraineeInstruc close -->
					
										
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
						</div>	<!-- about close -->
				</div><!-- ftHold close -->
				
			
		</div><!-- footer close -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>