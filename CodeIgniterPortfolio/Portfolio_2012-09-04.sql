# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9-log)
# Database: Portfolio
# Generation Time: 2012-09-04 14:58:12 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table projectImages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectImages`;

CREATE TABLE `projectImages` (
  `project_Img_Id` int(11) NOT NULL AUTO_INCREMENT,
  `final_Img_1` varchar(200) DEFAULT NULL,
  `final_Img_2` varchar(200) DEFAULT NULL,
  `final_Img_3` varchar(200) DEFAULT NULL,
  `final_Img_4` varchar(200) DEFAULT NULL,
  `final_Img_5` varchar(200) DEFAULT NULL,
  `final_Img_6` varchar(200) DEFAULT NULL,
  `production_Img_1` varchar(200) DEFAULT NULL,
  `production_Img_2` varchar(200) DEFAULT NULL,
  `production_Img_3` varchar(200) DEFAULT NULL,
  `production_Img_4` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`project_Img_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `projectImages` WRITE;
/*!40000 ALTER TABLE `projectImages` DISABLE KEYS */;

INSERT INTO `projectImages` (`project_Img_Id`, `final_Img_1`, `final_Img_2`, `final_Img_3`, `final_Img_4`, `final_Img_5`, `final_Img_6`, `production_Img_1`, `production_Img_2`, `production_Img_3`, `production_Img_4`)
VALUES
	(1,'pic',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `projectImages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectInformation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectInformation`;

CREATE TABLE `projectInformation` (
  `project_Info_Id` int(11) NOT NULL AUTO_INCREMENT,
  `concept_Info` varchar(500) DEFAULT NULL,
  `design_Info` varchar(500) DEFAULT NULL,
  `development_Info` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`project_Info_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `projectInformation` WRITE;
/*!40000 ALTER TABLE `projectInformation` DISABLE KEYS */;

INSERT INTO `projectInformation` (`project_Info_Id`, `concept_Info`, `design_Info`, `development_Info`)
VALUES
	(1,'The idea came from actually working out on the bench press at a local gym while trying to figure out a project that me as an individual could enjoy doing. So I like exercise and I wanted to see how I could bring this hobby of mine and stick it into the sandwich that we all call the web.','I knew I\'d want a site that gives off a clean open feel that doesn\'t make the user feel too cluttered and easy on the eyes. That\'s what I was shooting for.','This site is powered by the CodeIgniter framework and pulls data in and out of the database to bring videos the user has chosen.'),
	(2,'Pretty much I decided that I wanted to make something a little fun with actionscript.\rOne day after my instructor wrote some LOL (Laugh Out Loud) on the white board the \ridea came. Why not make an application that users can look up abbreviated words and \rsee their meanings.','The colors used where to give a little energy to its user as well as trying to make it small so it didn?t consume too much real estate on their machine.','This was completely built out of flash builder with flex and actionscript. With the design starting from paper to illustrator and then sliding into the flash IDE.'),
	(3,'Sometimes I just create things to get the ideas flowing or ill have people ask me if I would\rmake them something that they could show off or have something unique to them. I just \rmake i have fun with it.','I aim for simple something you can put on a black and white business card and still tell what the icon is but depending on the request it can grow further.','Occasionally ill use good old Photoshop but its more productive for me to create these items in illustrator since I can easily manipulate vector graphics than pixels.'),
	(4,'My enjoyment in fighting games runs deep and I wanted to attempt to make a site that brought users information on not just one major companies games but 3 big hitters. So I chose Capcom for Street fighter, Arc Systems for guilty gear and SNK for King of Fighters.','Use the colors of each company but don?t go over board with it and clearly define what section the user is currently on to.','The site is built on HTML 5, XML and CSS3 the sites wires and design comps where mostly done in Illustrator with some minor Photoshop added.');

/*!40000 ALTER TABLE `projectInformation` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectProdImg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectProdImg`;

CREATE TABLE `projectProdImg` (
  `prod_Img_Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `prod_Assign_Img_Num` int(11) DEFAULT NULL,
  `prod_Img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prod_Img_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `project_Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_Name` varchar(100) NOT NULL DEFAULT '',
  `project_Info_Id` int(11) NOT NULL,
  `project_Img_Id` int(11) NOT NULL,
  `project_Tech_Id` int(11) NOT NULL,
  `project_Sub_Id` int(11) NOT NULL,
  PRIMARY KEY (`project_Id`),
  KEY `project_Info_Id` (`project_Info_Id`),
  KEY `project_Img_id` (`project_Img_Id`),
  KEY `project_Tech_Id` (`project_Tech_Id`),
  KEY `project_Sub_Id` (`project_Sub_Id`),
  CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`project_Info_Id`) REFERENCES `projectInformation` (`project_Info_Id`),
  CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`project_Img_id`) REFERENCES `projectImages` (`project_Img_Id`),
  CONSTRAINT `projects_ibfk_3` FOREIGN KEY (`project_Tech_Id`) REFERENCES `projectTechnology` (`project_Tech_Id`),
  CONSTRAINT `projects_ibfk_4` FOREIGN KEY (`project_Sub_Id`) REFERENCES `projectSubInfo` (`project_Sub_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`project_Id`, `project_Name`, `project_Info_Id`, `project_Img_Id`, `project_Tech_Id`, `project_Sub_Id`)
VALUES
	(1,'Exercise 7',1,1,1,1),
	(2,'Looker App',2,2,2,2),
	(3,'Logos',3,3,3,3),
	(4,'CAS News',4,4,4,4);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectSubInfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectSubInfo`;

CREATE TABLE `projectSubInfo` (
  `project_Sub_Id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_Info` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`project_Sub_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `projectSubInfo` WRITE;
/*!40000 ALTER TABLE `projectSubInfo` DISABLE KEYS */;

INSERT INTO `projectSubInfo` (`project_Sub_Id`, `sub_Info`)
VALUES
	(1,'Allows users to find workout instructors located near them and watch the videos they offer.'),
	(2,'Pull up abbreviations or synonyms with an easy desktop application.'),
	(3,'Personal icons created for my own use and for people who wanted that could represent them.'),
	(4,'Brings news about competitive fighting games. Those involve Capcom, Arc System and SNK.');

/*!40000 ALTER TABLE `projectSubInfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectTechnology
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectTechnology`;

CREATE TABLE `projectTechnology` (
  `project_Tech_Id` int(11) NOT NULL AUTO_INCREMENT,
  `project_Tech_1` varchar(100) DEFAULT NULL,
  `project_Tech_2` varchar(100) DEFAULT NULL,
  `project_Tech_3` varchar(100) DEFAULT NULL,
  `project_Tech_4` varchar(100) DEFAULT NULL,
  `project_Tech_5` varchar(100) DEFAULT NULL,
  `project_Tech_6` varchar(100) DEFAULT NULL,
  `project_Tech_7` varchar(100) DEFAULT NULL,
  `project_Tech_8` varchar(100) DEFAULT NULL,
  `project_Tech_9` varchar(100) DEFAULT NULL,
  `project_Tech_10` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`project_Tech_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `projectTechnology` WRITE;
/*!40000 ALTER TABLE `projectTechnology` DISABLE KEYS */;

INSERT INTO `projectTechnology` (`project_Tech_Id`, `project_Tech_1`, `project_Tech_2`, `project_Tech_3`, `project_Tech_4`, `project_Tech_5`, `project_Tech_6`, `project_Tech_7`, `project_Tech_8`, `project_Tech_9`, `project_Tech_10`)
VALUES
	(1,'img/sql.png','img/illu.png','img/photo.png','img/css3.png','img/html5.png','img/jQuery.png',NULL,NULL,NULL,NULL),
	(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `projectTechnology` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
