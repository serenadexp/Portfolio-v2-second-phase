<html>
	<head>
		<title>Andre Allen Web Developer & Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  
 		<link href='img/portIco.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="../../css/reset.css" type="text/css"/>
 		<link rel="stylesheet" href="../../css/webDetail.css" type="text/css"/> 
 		<link rel="stylesheet" href="../../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	
 		
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
				<div id="homeReturn"><p class="txtInd"><?php echo anchor('home','Andre Allen</br>Web Developer & Designer','class="anc nameFnt"')?></p>
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
					?>	
				<?php endforeach;?>

					<div id="finalScreens">
					<p class="projectFnt"><?php echo $projectName; ?></p>
						<ul>
				<?php foreach($informD->result() as $infoDetails):
					$projectFinal=$infoDetails->final_Img_Thumb;
					$projectFinalFull=$infoDetails->final_Img_Full;
				?>
						<li><a href="../../<?php echo $projectFinalFull;?>" rel="prettyPhoto[final]" title="Test"><img class="imgBlock" src="../../<?php echo $projectFinal;?>" alt="this is the title"/></a></li>
		
				<?php endforeach;?>	
						
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
					<?php foreach($informTech->result() as $infoDetails):
					$projectTech=$infoDetails->used_Tech;
					
					?>
					<li><img src="../../<?php echo $projectTech;?>"/></li>
					<?php endforeach;?>	
						
					
					</ul>	
				</div>	<!--closed techDetailLogos -->
			</div><!-- closed technologyUsed -->
			<div id="productionScreens">
				<p class="headDetailFnt">Production Screens</p>
				<div id="productionScrHolder">
					<ul>
					<?php foreach($dInfo->result() as $infoDetails):
					$projectProd=$infoDetails->prod_Img_Thumb;
					
					$projectProdFull=$infoDetails->prod_Img_Full;
					?>
						<li><a href="../../<?php echo $projectProdFull;?>" rel="prettyPhoto[production]" title="Test"><img class="imgBlock" src="../../<?php echo $projectProd; ?>" alt="this is the title"/></a></li>
					<?php endforeach;?>	
					<!--
	<li><a href="../../img/prod/exer/full/exerPro2.jpg" rel="prettyPhoto[production]" title="Test"><img class="imgBlock" src="../../img/prod/exer/thumb/exerPro2thumb.jpg" alt="this is the title"/></a></li>
						<li><a href="../../img/prod/exer/full/exerPro3.jpg" rel="prettyPhoto[production]" title="Test"><img class="imgBlock" src="../../img/prod/exer/thumb/exerPro3thumb.jpg" alt="this is the title"/></a></li>
						<li><a href="../../img/prod/exer/full/exerPro4.jpg" rel="prettyPhoto[production]" title="Test"><img class="imgBlock" src="../../img/prod/exer/thumb/exerPro4thumb.jpg" alt="this is the title"/></a></li>
-->
					</ul>
				
				
				</div><!-- closed productionScrHolder -->
			</div><!--closed productionScreens -->
			<div id="footer">
				<div id="footTop"></div><!-- closed footTop -->

					<p class="footFnt txtInd">Copyright &copy; Andre Allen 2012</p>
			</div><!-- closed footer -->	
		</div><!-- closed wrapper -->
		<script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
		<script src="../../js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../../js/main.js"></script>

		<script type="text/javascript" charset="utf-8">
 			 $(document).ready(function(){
 			   $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal'});
 			   
			  });
		</script>
		</body>
</html>