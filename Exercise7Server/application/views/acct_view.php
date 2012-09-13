<html>
	<head>
		<title>Exercise 7 - Move At Your Own Pace </title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
 	 	<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css" />
 		<link rel="stylesheet" href="css/webAcct.css" type="text/css" /> 
</head>
	<body>
			<div id="headerLanding">
				
				<div id="head">
					<img class="imgBl" id="logo" src="img/subLogo.png"/>
					
						<ul id="nav">
							<li><img src="img/searchIco.png"/><?php echo anchor('landing','Exercise Finder', ' class="ftNav" ')?></li>
							<li><img src="img/acctIco.png"/><?php echo anchor('acct','Account', ' class="ftNav" ')?></li>
							<li><img src="img/logOutIco.png"/><?php echo anchor('acct/logOut','Log-Out', ' class="ftNav" ')?></li>
						</ul><!--  nav close -->
				</div><!-- head close -->
	
				
			</div> <!-- header close -->

	
			<div id="content">
				
				<div id="wrapper">
					
					<div id="avatarHolder">
						<?php foreach($userInfo as $userI): ?>
						<p id="acctName" class="ftWorkOut"><?php echo $UserName= $userI->userName ?></p>
						<img src="<?php echo $userI->userAvatarBig ?>"/>
						<?php endforeach;?>
			<?php echo form_open_multipart('acct/do_upload'); ?>
<input type="file" name="userfile" />
						<button id="avatarChange" class="ftWorkOut" type="submit">Update Avatar</button>
						</form>
						
					
					</div><!-- avatarHolder close -->
					
					<div id="editHolder">
						
						<div id="editUserInfoTxt">
							<p class="editTitle ftWorkOut">Styles I Enjoy</p> 
							<p id="stylesE" class="editTxt"><a class="ftWorkOut" href="">Edit<img src="img/editIco.png"/></a></p>
							<?php foreach($userInfo as $userI): ?>
							<p id="styleEd" class="styleInfo ftEdit"><?php echo $UserName= $userI->userStyles ?></p>
							<?php endforeach;?>
						</div><!-- editUserInfoTxt close -->
					
						<div id="editUserInfoZip">
							<p class="editTitle ftWorkOut">Zipcode</p> 
							<p id="zipE" class="editTxt"><a class="ftWorkOut" href="">Edit<img src="img/editIco.png"/></a></p>
							<?php foreach($userInfo as $userI): ?>
							<p id="zipEd" class="styleInfo ftEdit"><?php echo $UserZip= $userI->userZip ?></p>
							<?php endforeach;?>
						</div><!-- editUserInfoZip close -->
						
						<div id="linkHolder">
						<div>
							<p id="addLinkTitle" class="editTitle ftWorkOut">Add Video Link</p>
						</div>
						
							<form id="urlLinkForm" method="post" action="acct/addLink">
									<input id="urlType" name="urlType" type="text" placeholder="What Style Is This"/>
									<input id="urlLink" name="urlLink" type="text" placeholder="Paste Youtube Link"/>
									<button id="addBtn" type="submit">Add Link</button>
									<p class="ftExample">Zumba,Yoga<span id="spanExample">http://www.youtube.com/embed/</span></p>
							</form>
						</div>

						<div id="editUserInfoSaved">
							<p class="editTitle ftWorkOut">Saved Instructors</p> 
							<p class="editTxt"><a class="ftWorkOut" href="">Edit<img src="img/editIco.png"/></a></p>
							
							<ul id="saveIn" class="styleInfo">
									
									<?php foreach($usersInfoS->result() as $userISave): ?>
									<li class="ftInstructorName">
										
											<a href="video.html"><img class="imgBl" src="<?php echo $UserName= $userISave->userAvatar?>"/></a>
												<p class="txtBl insName"><?php echo $UserName= $userISave->userName?></p> 
												<p class="workSt ftStyles"><?php echo $UserStyles= $userISave->userStyles?></p>
									</li>
									<?php endforeach;?>
							</ul> <!-- saveIn close -->
						
							
							
						</div><!-- editUserInfoSaved close -->
						
						
					</div><!-- editHolder close -->
										
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
	<script type="text/javascript" src="js/jeditable.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>