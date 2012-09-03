<html>
	<head>
		<title>Andre Allen Web Developer & Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  
 		<link href='img/urlIcon.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css"/>
 		<link rel="stylesheet" href="css/webDetail.css" type="text/css"/> 
 		
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
			<div id="projectName">
				 <?php foreach($dInfo->result() as $infoDetails):
						$projectName=$infoDetails->project_Name;
						$projectConcept=$infoDetails->concept_Info;
						$projectDesign=$infoDetails->design_Info;
						$projectDevelopment=$infoDetails->development_Info;
						$projectFinal1=$infoDetails->final_Img_1;
						$projectFinal2=$infoDetails->final_Img_2;
						$projectFinal3=$infoDetails->final_Img_3;
						$projectFinal4=$infoDetails->final_Img_4;
						$projectFinal5=$infoDetails->final_Img_5;
						$projectFinal6=$infoDetails->final_Img_6;
						$projectProd1=$infoDetails->production_Img_1;
						$projectProd2=$infoDetails->production_Img_2;
						$projectProd3=$infoDetails->production_Img_3;
						$projectProd4=$infoDetails->production_Img_4;
						
					?>	
					<?php endforeach;?>

					<div id="finalScreens">
					<p class="projectFnt"><?php echo $projectName; ?></p>
						<ul>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
							<li><img class="imgBlock" src="img/finalscr.jpg"/></li>
						</ul>
					</div><!--closed finalScreens -->
			</div><!--closed projectName -->
			<div id="projectDetails">
				<div id="transDetail"></div>
				<p class="threeCoresFnt txtInd">The Concept</p>
				<p class="describeFnt txtInd"><?php echo $projectConcept;?></p>
				<p class="threeCoresFnt txtInd">Design</p>
				<p class="describeFnt txtInd"><?php echo $projectDesign;?></p>
			<p class="threeCoresFnt txtInd">Development</p>
			<p class="describeFnt txtInd"><?php echo $projectDevelopment;?></p>
			</div><!--closed projectDetails -->
			<div id="technologyUsed">
				<p class="headDetailFnt">Technology Used</p>
				<div id="techDetailLogo">
					<ul id="detailLogos">
						<li><img src="img/sql.png"/></li>
						<li><img src="img/illu.png"/></li>
						<li><img src="img/photo.png"/></li>
						<li><img src="img/css3.png"/></li>
						<li><img src="img/html5.png"/></li>
						<li><img src="img/codeIg.png"/></li>
						<li><img src="img/php.png"/></li>
						<li><img src="img/jQuery.png"/></li>
					</ul>	
				</div>	<!--closed techDetailLogos -->
			</div><!-- closed technologyUsed -->
			<div id="productionScreens">
				<p class="headDetailFnt">Production Screens</p>
				<div id="productionScrHolder">
					<ul>
						<li><img class="imgBlock" src="img/proscr.jpg"/></li>
						<li><img class="imgBlock" src="img/proscr.jpg"/></li>
						<li><img class="imgBlock" src="img/proscr.jpg"/></li>
						<li><img class="imgBlock" src="img/proscr.jpg"/></li>
					</ul>
				
				
				</div><!-- closed productionScrHolder -->
			</div><!--closed productionScreens -->
			<div id="footer">
				<div id="footTop"></div><!-- closed footTop -->

					<p class="footFnt txtInd">Copyright &copy; Andre Allen 2012</p>
			</div><!-- closed footer -->	
		</div><!-- closed wrapper -->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox_me.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>