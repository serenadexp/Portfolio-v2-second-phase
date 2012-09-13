<html>
	<head>
		<title>Exercise 7 - Move At Your Own Pace </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
  		<link href='../../img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="../../css/reset.css" type="text/css" />
 		<link rel="stylesheet" href="../../css/webVideo.css" type="text/css" /> 
</head>
	<body>
			<div id="headerLanding">
				
				<div id="head">
					<img class="imgBl" id="logo" src="../../img/subLogo.png"/>
					
						<ul id="nav">
							<li><img src="../../img/searchIco.png"/><?php echo anchor('landing','Exercise Finder', ' class="ftNav" ')?></li>
							<li><img src="../../img/acctIco.png"/><?php echo anchor('acct','Account', ' class="ftNav" ')?></li>
							<li><img src="../../img/logOutIco.png"/><?php echo anchor('vid/logOut','Log-Out', ' class="ftNav" ')?></li>
						</ul><!--  nav close -->
				</div><!-- head close -->
	
				
			</div> <!-- header close -->

	
			<div id="content">
				
				<div id="wrapper">
					<div id="videoHolder">
						
						<div id="videoIns">
						<p class="ftNevisVid inN">Instructor <?php echo $pickedUser ; ?> </p>
					
						<form class="inL">
<!-- 						<input name="saveU" value="<?php echo $pickedUser ; ?>"/> -->
						<button rel="<?php echo $pickedUser?>" class="btnSave ftNevisVid " type="submit">Save It</button>
						<img id="saveStar" src="../../img/starIco.png"/>
						</form>
						</div>
						
						<div id="viewVideo">
						<iframe width="460" height="315" src="http://www.youtube.com/embed/MT6CSI3j8GM" frameborder="0" allowfullscreen></iframe>
						
						</div>
					</div><!-- videoHolder close	 -->
					
					<div id="stylesHolder">
						<ul>
						<?php foreach($userVidKinds as $kinds): ?>
							<li id="ancLi" class="ftStyles"><?php echo '<a class="liAnc" href="#'.$kinds->userStyle.'">'?><?php echo $kinds->userStyle?></a></li>
							
						<?php endforeach;?>	
						</ul>
					</div> <!-- stylesholder close -->	
					
					<div id="lessonHolder">
						<div id="introduction">
							<p class="ftTitles">Introduction</p>
							
								<div class="vidThumbHolder">
									<ul>
								
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
									</ul>	
								</div><!-- vidThumbHolder close -->
							
						</div><!-- introduction close -->
						
						<div id="warmUP">
							<p class="ftTitles">Warm-Up</p>
							<div class="vidThumbHolder">
									<ul>
								
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
									</ul>	
								</div><!-- vidThumbHolder close -->

						</div><!-- warmUP close -->
						
						<div id="lessonOne">
							<p class="ftTitles">Lesson One</p>
							<div class="vidThumbHolder">
									<ul>
								
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
										<li><img class="imgBl" src="../../img/vidThumb.jpg"/></li>
									</ul>	
								</div><!-- vidThumbHolder close -->

							
							</div><!-- lessonOne close -->
						
						
					</div><!-- lessonHolder close -->								
				</div> <!-- wrapper close -->
	
			
			</div> <!-- content close -->
		
		<div id="footer">		
				
				<div id="ftHold">
					<p class="ftFont" id="ftLinks">Copyright © 2012 Exercise 7
					<a id="disclaimer" class="ftFont" href="#"/>Disclaimer</a>
					<a id="aboutUs" class="ftFont" href="#"/>About</a>
					</p>
					</p>
						<div id="disclaim" class="hidd" >
							<p class="nevisInfoFt">Disclaimer</p>
							<p class="ftDis">This site is not responsible for how you choose to workout, diet or use any workout machines of any kind. If you get injured you should seek physician of some kind or get medical help immediately. So get fit at your own risk. Thank You.</p>
						</div>	<!-- disclaim close	 -->
		
						<div id="about" class="hidd" >
							<p class="nevisInfoFt">About Us</p>
							<p class="ftDis">Exercise 7 is away for trainees to get fit from there homes. Trainees can search for local instructors and see what lessons they have to offer and instructors can put up there videos they have and learn from other instructors and see what styles they could incorporate into there regiment.</p>
						</div>	<!-- about close -->
				</div><!-- ftHold close -->
				
			
		</div><!-- footer close -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.lightbox_me.js"></script>
	<script type="text/javascript" >
	var baseUrl= "<?php echo(base_url()); ?>";
	

	</script>
	<script type="text/javascript" src="../../js/main.js"></script>
	</body>
</html>