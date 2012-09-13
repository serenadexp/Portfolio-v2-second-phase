<html>
	<head>
		<title>Exercise 7 - Move At Your Own Pace</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
 		<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css" />
 		<link rel="stylesheet" href="css/web.css" type="text/css" /> 
</head>
	<body>
			<div id="header">
				
				<div id="head">
					<img class="imgBl" id="logo" src="img/logo.png"/>
					
				</div><!-- head close -->
	
				
			</div> <!-- header close -->

	
			<div id="content">
				
				<div id="wrapper">
					<div id="mainGraphic">						
						<div id="signUp">
							<div id="signUpHold">
								<p id="signUptxt" class="nevisFt"><img id="actIcon" src="img/actIco.png"><span> Sign-Up!</span></p>
									<form action="home/validateSignUp" method="post">
										<input id="signUpUser" class="ftsignup" type="text" name="signUpUser" placeholder="Username"/>
										<input id="signUpPass" class="ftsignup" type="password" name="signUpPass" placeholder="Password"/>
										<button id="signUpBtn" class="ftSignUpBtn" type="submit">Start Now</button>
									</form>
							</div>	<!-- signUpHold close	 -->	
							
							<div id="logInHold" class="hidd">
							<p id="signUptxt" class="nevisFt"><img id="actIcon" src="img/actIco.png"><span>Log-In!</span></p>
									<form action="home/validateLogin" method="post">
										<input id="loginUser" class="ftsignup" name="loginUser" type="text" placeholder="Username"/>
										<input id="loginPass" class="ftsignup" name="loginPass" type="password" placeholder="Password"/>
										<button id="signUpBtn" class="ftSignUpBtn" type="submit">Login</button>
									</form>
							</div><!-- logInHold close	 -->	
						
									<p id="log" class="ftsignup">Already a member? <a class="ftsignupanchor" href="">Login</a></p>
									<p id="instruc" class="ftsignup">Are You an Instructor? <a class="ftsignupanchor" href="">Register</a></p>
									
							
								
										
						</div><!-- signUp close -->
					</div><!-- mainGraphic close -->
					
					<div id="blades">
						<img class="imgBl" src="img/blades.png" />
					</div><!-- blades close -->
				
					<div id="video">
					<p id="titleDesc" class="ftline nevisTitleFt">
						What We Do !	
					</p>
					<p id="descPara" class=" ftTextPara ftline">Exercise 7 enables it's users to view videos from instructors that showcase the different workout styles they can perform. An upcoming person can get into healthy condition by searching around by zip code to see who’s near them that might be showing a off different style they might of not yet seen.</p>
											<div id="arr"><img class="imgBl" src="img/bigArr.png"/></div>
					<!-- <iframe width="460" height="350" src="http://www.youtube.com/embed/MT6CSI3j8GM" frameborder="0" allowfullscreen></iframe> -->
						<!-- <img class="imgBl" src="img/vid.png"/> -->
					</div><!-- video close -->
										
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
		
		<div id="reg" class="hidd">
			<div id="slices">
				<p id="insHead" class="nevisFt"><img src="img/insIco.png"/>Instructors</p>
				<img class="imgBl" src="img/slice2.jpg"/>
				<p class="ftInsSignUp">Post up your lessons.</p>
				<img class="imgBl" src="img/slice3.jpg"/>
				<p class="ftInsSignUp">Another avenue to promote yourself.</p>
			</div><!--  slices close -->
							<div id="regis">
								<form action="home/validateSignUpIns" method="post">
									<input id="insSignUpUser" name="signUpInsUser" class="ftsignup" type="text"placeholder="Username"/>
									<input id="insSignUpPass" name="signUpInsPass" class="ftsignup" type="password" placeholder="Password"/>
									<button id="insSignUpBtn" class="ftSignUpBtn" type="submit">Let's Begin</button>
								</form>
							</div><!-- regis close -->

		</div><!-- reg close -->

				</div><!-- ftHold close -->
				
			
		</div><!-- footer close -->

<!-- 	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>