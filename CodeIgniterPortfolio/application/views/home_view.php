<html>
	<head>
		<title>Andre Allen Web Developer & Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  
 		<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css"/>
 		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
 		<link rel="stylesheet" href="css/web.css" type="text/css"/> 
 		
</head>
	<body>
	<div id="contact" class="contactHide">
		<div id="headContact">
			<p class="contactHeadFnt">Interested At Reaching Out To Me</p>
		</div><!-- closed headContact -->
		<div id="titlesContact">
			<form action="" method="post">
				<input class="inputStyle inputFnt inputColor" id="firstLast" type="text" name="firstLast" placeholder="Your First & Last Name"/>
				<input class="inputStyle inputFnt inputColor" id="email" type="text" name="email" placeholder="Your Email"/>
				<input class="inputStyle inputFnt inputColor" id="subject" type="text" name="subject" placeholder="Subject Title"/>
			
		</div><!-- closed titlesContact -->
		<div id="messageContact">
				<input class="inputFnt inputColor" id="subject" type="text" name="subject" placeholder="Place Message Here"/>

				<button class="sendBtnFnt sendBtnStyle" id="sendBtn" type="submit">Send</button>
			</form><!-- closed form -->
		</div><!-- closed messageContact -->
	</div><!-- closed contact -->
	

		<div id="wrapper">
		
			<div id="header">
				<div id="homeReturn"><p class="txtInd"><a class="anc nameFnt" href="">Andre Allen</br>Web Developer & Designer</a></p>
				</div><!-- closed homeReturn -->
				<div id="navHolder">
					<ul id="nav">
						<li id="ancWork" class="bott"><?php echo anchor('home','My Work','class="anc navFnt navWork"') ?></li>
						<li id="ancPersonal"><?php echo anchor('personal','Personal','class="anc navFnt navPers"') ?></li>
						<li id="ancContact"><a class="anc navFnt navCont" href="">Contact</a></li>
					</ul>
				</div><!-- closed navHolder -->
			</div><!-- closed header -->
			<div id="contentIntro">
				<p class="introducFnt txtInd">I’m Andre Allen</br> a guy who’s obsessed with all things web and strives to see technology pushed to the cutting edge.</p>
			
			</div><!--closed contentIntro -->
			<div id="contentSlider">
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="img/exercise.jpg" alt="Exercise 7" title="Exercise 7" id="wows1_0"/></li>
							<li><img src="img/look.jpg" alt="Logos" title="Looker" id="wows1_1"/></li>
							<li><img src="img/afro.jpg" alt="Looker" title="Logos" id="wows1_2"/></li>
							<li><img src="img/cas.jpg" alt="CAS" title="CAS" id="wows1_3"/></li>
						</ul>
					</div>
				<div class="ws_bullets">
				<div>
				<a href="#" title="Exercise 7"><img src="data1/tooltips/exercise.jpg" alt="Exercise 7"/>1</a>
				<a href="#" title="Loooker"><img src="data1/tooltips/look.jpg" alt="Logos"/>2</a>
				<a href="#" title="Logos"><img src="data1/tooltips/afro.jpg" alt="Looker"/>3</a>
				<a href="#" title="CAS"><img src="data1/tooltips/cas.jpg" alt="CAS"/>4</a>
				</div>
				</div>

	<div class="ws_shadow"></div>
	</div>
			</div><!--closed contentSlider -->
			<div id="contentProjectInfo">
			
					 <?php foreach($inPulls->result() as $pulls):
						$projectName=$pulls->project_Name;
						$projectSubInfo=$pulls->sub_Info;
						$projectSubTech1=$pulls->project_Tech_1;
						$projectSubTech2=$pulls->project_Tech_2;
						$projectSubTech3=$pulls->project_Tech_3;
						$projectSubTech4=$pulls->project_Tech_4;
						$projectSubTech5=$pulls->project_Tech_5;
						$projectSubTech6=$pulls->project_Tech_6;
					?>	
					<?php endforeach;?>
				<div id="trans"></div><!--closed trans -->
				<div id="contentProjectName">	
					<p class="contentInfoHeadFnt txtInd">Project: <?php echo $projectName; ?></p>
				</div><!--closed contentProjectName -->
				<div id="contentProjectInfoHead">	
					<p class="contentInfoHeadFnt txtInd">Information</p>
				</div><!--closed contentProjectInfo -->
				<div id="contentProjectInfoDetail"><p class="contentInfoFnt txtIndAgain"><?php echo $projectSubInfo; ?></p>
				</div><!--closed contentProjectInfoDetail -->
				<div id="contentProjectTechno">	
					<p class="contentInfoHeadFnt txtInd">Technology</p>
				</div>	<!--closed contentProjectTechno -->
				<div id="contentTechDetail">
					<ul id="techLogos">
						<li><img src="<?php echo $projectSubTech1; ?>"/></li>
						<li><img src="<?php echo $projectSubTech2; ?>"/></li>
						<li><img src="<?php echo $projectSubTech3; ?>"/></li>
						<li><img src="<?php echo $projectSubTech4; ?>"/></li>
						<li><img src="<?php echo $projectSubTech5; ?>"/></li>
						<li><img src="<?php echo $projectSubTech6; ?>"/></li>
					</ul>	
				</div>	<!--closed contentTechDetail -->
				<div id="contentMoreDetail">
					<p><?php echo anchor('details','More Details',array('class'=>'anc contentInfoDetailFnt detailAnc','rel'=>"")) ?></p>
				</div><!-- closed contentMoreDetail -->
			</div><!-- closed contentProjectInfo -->
			<div id="contentProjects">
				<div id="contentProjectRight">
				<div class="transTxt"></div>
					<div id="firstContent" class="contentsProjectBorderLight">
						<a href="" rel="1" class="anc">
							<img class="imgBlock imgBorder" src="img/exban.jpg"/>
								<p class="contentProjectsFnt "><span>Exercise 7</span></p>
						</a>
					</div><!-- closed firstContent -->
					<div class="transTxt"></div>
					<div id="secondContent" class="contentsProjectBorder">
						<a href="" rel="2" class="anc">
							<img class="imgBlock imgBorder" src="img/afroban.jpg"/>
								<p class="contentProjectsFnt">Logos</p>
						</a>	
					</div>	<!-- closed secondContent -->
				</div><!-- closed contentProjectRight -->
				<div id="contentProjectLeft">
				<div class="transTxt"></div>
					<div id="thirdContent" class="contentsProjectBorder">
						<a href="" rel="3" class="anc">
							<img class="imgBlock imgBorder" src="img/lookban.jpg"/>
							<p class="contentProjectsFnt txtInd"><span>Looker</span></p>
						</a>	
					</div><!-- closed thirdContent -->
					<div class="transTxt"></div>
					<div id="fourthContent" class="contentsProjectBorder">
						<a href="" rel="4" class="anc">
							<img class="imgBlock imgBorder" src="img/casban.jpg"/>
								<p class="contentProjectsFnt txtInd">CAS</p>
						</a>		
					</div>	<!-- closed fourthContent -->
				
				</div>	
				
			</div><!--closed contentProjects -->
			<div id="footer">
				<div id="footTop"></div><!-- closed footTop -->

					<p class="footFnt txtInd">Copyright &copy; Andre Allen 2012</p>
			</div><!-- closed footer -->	
		</div><!-- closed wrapper -->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>