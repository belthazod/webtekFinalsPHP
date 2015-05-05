-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: localhost    Database: enrollment2
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `classcode` int(11) NOT NULL,
  `days` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `slots` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `enrolled` int(11) DEFAULT NULL,
  `status` enum('OPEN TO SCHOOL','OPEN TO ALL','CLOSED') DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  `schoolid` varchar(45) NOT NULL,
  `courseno` varchar(45) NOT NULL,
  PRIMARY KEY (`classcode`),
  KEY `fk_class_coursno_idx` (`courseno`),
  KEY `fk_class_schoolid_idx` (`schoolid`),
  CONSTRAINT `fk_class_courseno` FOREIGN KEY (`courseno`) REFERENCES `coursedetails` (`courseno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_class_schoolid` FOREIGN KEY (`schoolid`) REFERENCES `coursedetails` (`schoolid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (9300,'TTHS','9:30-10:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 1'),(9303,'MWF','9:30-10:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','HIST 1'),(9316,'WS','9:30-10:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','ICS 111'),(9317,'MTH','9:00-10:30','S422',50,NULL,NULL,NULL,NULL,'SCIS','ICS 111L'),(9324,'MWF','9:30-10:30','S523',50,NULL,NULL,NULL,NULL,'SCIS','MATH 1A'),(9325,'TTHS','9:30-10:30','S523',50,NULL,NULL,NULL,NULL,'SCIS','MATH 2A'),(9330,'TTHS','8:30-9:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','THEO 3'),(9331,'MWF','8:30-9:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 4'),(9332,'MWF','9:30-10:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 1'),(9333,'TTHS','10:30-11:30','S522',50,NULL,NULL,NULL,NULL,'SCIS','ECON 1'),(9334,'MTWTH','7:30-8:30','S525',50,NULL,NULL,NULL,NULL,'SCIS','MATH 4A'),(9339,'MTH','9:30-10:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','ICS 311'),(9340,'WS','9:00-10:30','S422',50,NULL,NULL,NULL,NULL,'SCIS','ICS 311L'),(9343,'TTHS','10:30-11:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','CS 311A'),(9345,'MTH','8:30-9:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','ICS 321'),(9346,'WS','7:30-9:00','S422',50,NULL,NULL,NULL,NULL,'SCIS','ICS 321L'),(9347,'MWF','10:30-11:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','ICS 411'),(9348,'MWF','7:30-8:30','S416',50,NULL,NULL,NULL,NULL,'SCIS','RESEARCH 1'),(9350,'TWF','8:30-9:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','CS 321B'),(9354,'MWF','9:30-10:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 1'),(9357,'TTHS','9:30-10:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 1'),(9363,'MWF','9:30-10:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 3'),(9364,'MWF','10:30-11:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 4'),(9365,'TTHS','10:30-11:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','POLIT SC 1N'),(9366,'TTHS','8:30-9:30','S522',50,NULL,NULL,NULL,NULL,'SCIS','NAT SC 2'),(9367,'MWF','8:30-9:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MGMT 1'),(9373,'TF','9:00-10:30','S422',50,NULL,NULL,NULL,NULL,'SCIS','IS 311L'),(9379,'MWF','10:30-11:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MGMT 2'),(9387,'TTHS','9:30-10:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','LIS 111'),(9390,'TTHS','9:30-10:30','S522',50,NULL,NULL,NULL,NULL,'SCIS','ECOL 1A'),(9392,'TF','7:30-9:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','LIS 223'),(9393,'MWF','10:30-11:30','S524',50,NULL,NULL,NULL,NULL,'SCIS','LIS 211'),(9396,'TF','7:30-9:00','S422',50,NULL,NULL,NULL,NULL,'SCIS','COMP 4A'),(9397,'MWF','10:30-11:30','S525',50,NULL,NULL,NULL,NULL,'SCIS','STAT 1'),(9402,'TTHS','10:30-11:30','S524',50,NULL,NULL,NULL,NULL,'SCIS','LIS 211A'),(9403,'MWF','9:30-10:30','S524',50,NULL,NULL,NULL,NULL,'SCIS','LIS 311C'),(9404,'TTHS','9:30-10:30','S524',50,NULL,NULL,NULL,NULL,'SCIS','LIS E04'),(9406,'MTWTHF','7:30-8:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','MATH 1B'),(9407,'MWF','8:30-9:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','MATH 2A'),(9409,'S','7:30-10:30','A304',50,NULL,NULL,NULL,NULL,'SCIS','CHEM 1AL'),(9412,'MWF','8:30-9:30','S525',50,NULL,NULL,NULL,NULL,'SCIS','PHYS 1A'),(9413,'TTH','7:30-9:00','A203',50,NULL,NULL,NULL,NULL,'SCIS','PHYS 1AL'),(9416,'MTWTHF','10:30-11:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','CALC 3'),(9422,'TTHS','8:30-9:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','MATH 17'),(9424,'MWF','9:30-10:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','MATH 26'),(9425,'MTWTHFS','8:00-8:30','P607',50,NULL,NULL,NULL,NULL,'SCIS','RESEARCH 1'),(9434,'WS','7:30-8:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 111'),(9435,'MTH','7:30-9:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 111L'),(9436,'TF','9:30-10:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','IT 112'),(9437,'WS','9:00-10:30','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 112L'),(9442,'TTHS','9:30-10:30','S525',50,NULL,NULL,NULL,NULL,'SCIS','MATH 1A'),(9445,'MTH','10:30-12:00','S422',50,NULL,NULL,NULL,NULL,'SCIS','IT 111L'),(9446,'TF','7:30-8:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','IT 112'),(9447,'MTH','7:30-9:00','S422',50,NULL,NULL,NULL,NULL,'SCIS','IT 112L'),(9454,'TF','9:30-10:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','IT 111'),(9455,'MTH','9:00-10:30','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 111L'),(9457,'WS','10:30-12:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 112l'),(9466,'MTH','9:30-10:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','IT 112'),(9467,'TF','9:00-10:30','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 112L'),(9468,'MWF','10:30-11:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 1'),(9470,'MWF','9:30-10:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','FIL 1'),(9479,'TTHS','7:30-8:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 1'),(9481,'TTHS','8:30-9:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','HIST 1'),(9483,'MWF','9:30-10:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MATH 2A'),(9487,'TF','10:30-12:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 112L'),(9489,'TTHS','8:30-9:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 1'),(9490,'TTHS','7:30-8:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','FIL 1'),(9495,'MTH','10:30-12:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 111L'),(9498,'TTHS','10:30-11:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 1'),(9499,'TTHS','9:30-10:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 1'),(9506,'MTH','8:30-9:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','IT 112'),(9507,'WS','7:30-9:00','S421',50,NULL,NULL,NULL,NULL,'SCIS','IT 112L'),(9508,'MWF','8:30-9:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 1'),(9509,'MWF','7:30-8:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 1'),(9510,'TTHS','10:30-11:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','FIL 1'),(9511,'MWF','10:30-11:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','HIST 1'),(9520,'MWF','7:30-8:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','IT 132'),(9521,'MTWTH','8:30-9:30','S523',50,NULL,NULL,NULL,NULL,'SCIS','MATH 3B'),(9526,'TTHS','10:30-11:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','HIST 2'),(9527,'TTHS','9:30-10:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MATH 4'),(9528,'TF','7:30-8:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','IT 211'),(9529,'MTH','7:30-9:00','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 211L'),(9532,'MWF','10:30-11:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 2'),(9535,'TTHS','10:30-11:30','S523',50,NULL,NULL,NULL,NULL,'SCIS','MATH 4'),(9536,'MTH','9:30-10:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','IT 211'),(9537,'TF','9:00-10:30','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 211L'),(9540,'MWF','7:30-8:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 2'),(9541,'MWF','8:30-9:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','SOCIO 1'),(9545,'TF','10:30-12:00','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 211L'),(9546,'TTHS','7:30-8:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','THEO 3'),(9547,'TTHS','10:30-11:30','P605',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 4A'),(9548,'TTHS','8:30-9:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 2'),(9549,'MWF','8:30-9:30','P604',50,NULL,NULL,NULL,NULL,'SCIS','SOCIO 1'),(9550,'MWF','10:30-11:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','HIST 2'),(9557,'MWF','8:30-9:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','SOCIO 1'),(9558,'MWF','7:30-8:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','HIST 2'),(9564,'TTHS','8:30-9:30','P606',50,NULL,NULL,NULL,NULL,'SCIS','PHILOS 2'),(9566,'TTHS','9:30-10:30','P608',50,NULL,NULL,NULL,NULL,'SCIS','HIST 2'),(9571,'TTHS','9:30-10:30','P609',50,NULL,NULL,NULL,NULL,'SCIS','ENGL 7'),(9575,'WS','8:30-9:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','IT 315'),(9576,'TF','7:30-9:00','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 314L'),(9577,'TTHS','10:30-11:30','S425',50,NULL,NULL,NULL,NULL,'SCIS','IT 315'),(9578,'TTHS','9:30-10:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 321B'),(9580,'MWF','10:30-11:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 311'),(9586,'TTHS','10:30-11:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 010'),(9591,'WS','9:30-10:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','IT 315'),(9592,'MTH','9:00-10:30','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 314L'),(9597,'TF','9:30-10:30','S423',50,NULL,NULL,NULL,NULL,'SCIS','IT 312'),(9598,'WS','9:00-10:30','S326',50,NULL,NULL,NULL,NULL,'SCIS','IT 312L'),(9604,'MWF','9:30-10:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 311'),(9613,'TTHS','8:30-9:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','IT 423'),(9616,'TTHS','7:30-8:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','IT 314'),(9617,'TTHS','9:30-10:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','ITF 004'),(9621,'MWF','7:30-8:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','IT 424'),(9622,'TTHS','8:30-9:30','S527',50,NULL,NULL,NULL,NULL,'SCIS','IT 413'),(9627,'MTWTHFS','8:00-8:30','S426',50,NULL,NULL,NULL,NULL,'SCIS','IT 424'),(9633,'MTWTHFS','8:00-8:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','IT 424'),(9635,'MWF','9:30-10:30','S526',50,NULL,NULL,NULL,NULL,'SCIS','ITF 004'),(9644,'TTHS','8:30-9:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MATH 2A'),(9646,'MWF','8:30-9:30','S522',50,NULL,NULL,NULL,NULL,'SCIS','MATH 2A'),(9647,'MTWTH','7:30-8:30','S521',50,NULL,NULL,NULL,NULL,'SCIS','MATH 3B'),(9648,'MWF','9:30-10:30','S522',50,NULL,NULL,NULL,NULL,'SCIS','MATH 7A');
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `courseno` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `units` int(11) NOT NULL,
  `priceperunit` double NOT NULL,
  `semester` enum('First','Second','Short') DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`courseno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES ('Calc 1','Calculus 1',5,593,'First',2),('Calc 2','Calculus 2',5,593,'Second',3),('Calc 3','Calculus 3',5,593,'First',3),('Chem 1A ','General and Inorganic Chemistry I (Lec)',3,593,'Second',1),('Chem 1AL','General and Inorganic Chemistry I (Lab)',1,593,'Second',1),('Chem 2A','General and Inorganic Chemistry II (Lec)',2,593,'Second',1),('Chem 2AL','General and Inorganic Chemistry II (Lab)',1,593,'Second',1),('Comp 1','Intro to Computer Concepts and Information',3,593,'First',1),('Comp 2','Web Page Design',3,593,'Short',3),('Comp 3','Computer Applications I',3,593,'First',3),('Comp 4','Computer Applications',3,593,'First',4),('Comp 4A','Computer Application 2',3,593,'First',3),('CS 311A','Object Oriented Programming',3,593,'First',3),('CS 311B','Compiler Design',3,593,'First',4),('CS 321a','Introduction to Automata and Formal Languages',3,593,'Second',3),('CS 321B','Artificial Intelligence',3,593,'First',4),('CS 321C','Intro to Parallel Computing',3,593,'First',3),('CS 321d','Structure of Programming Languages',3,593,'Second',3),('CS 322','Methods of research in Computer Science',3,593,'Second',3),('CS 411A','Advanced Computer Architecture',3,593,'Second',4),('CS 411B','Distributed Systems',3,593,'Second',4),('CS 411C','Special Topics in Computer Science',3,593,'Second',4),('CS 412','Practicum',3,593,'Short',3),('CS 421A','Interfacing and Communicating',3,593,'First',4),('CS 421B','Computer Graphics',3,593,'First',4),('CS 421C','Computer Performance Modeling',3,593,'Second',3),('CS 422','System Resource Management',3,593,'Second',4),('CS 422A','Modeling and Simlulation Theory',3,593,'Second',4),('CS 422B','Intro to Robotics',3,593,'Second',4),('Ecol 1A','Introducation to Ecology',3,593,'First',2),('Econ 1','Basic Economics with Taxation and Agrarian Re',3,593,'Second',2),('Econ 2','Macroeconomics Theory',3,593,'First',2),('EDUC 102A','Child and Adolescent Development',3,593,'Second',3),('EDUC 104A','Faciiltating Learning',3,593,'Second',3),('EDUC 105','Principles of Teaching 1',3,593,'Second',3),('EDUC 107','Education Technology 1',3,593,'Second',4),('EDUC 109','Assessment of Students Learning',3,593,'Second',4),('EDUC 112','Social Dimensions of Education',3,593,'Second',4),('Educ 3','Principles and Methods of Teaching',3,593,'First',3),('Educ 3a','Educational Psychology',3,593,'Second',3),('Engl 1','Communication Arts I',3,593,'First',1),('Engl 2','Communication Arts II',3,593,'Second',1),('Engl 26A','Phonetics and Developmental Reading',3,593,'First',2),('Engl 4','Public Speaking and Argumentation',3,593,'First',2),('Engl 4A','Effective Communication with Phonetics',3,593,'First',2),('Engl 7','Technical Writing',3,593,'Second',2),('Fil 1','Komunikasyon sa Akademikong Filipino',3,593,'First',1),('Fil 2','Pagbasa at Pasulat Tungo sa Pananaliksik',3,593,'Second',1),('Fil 3','Masining na Pagpapahayag',3,593,'First',2),('Hist 1','Philippine History',3,593,'First',1),('Hist 2','Life and Works of Rizal',3,593,'First',1),('Hum 1a','Intro to Humanities/Art Appreciation',3,593,'Short',1),('ICS 111','Introduction to Computer Science (Lec)',2,623,'First',1),('ICS 111L','Introduction to Computer Science (Lab)',1,623,'First',1),('ICS 112','Computer Programming I',2,623,'First',1),('ICS 112L','Computer Programming I (Lab)',1,623,'First',1),('ICS 121','Introduction to Computer Science II (Lec)',2,623,'Second',1),('ICS 121L',' Introduction to Computer Science II (Lab)',1,623,'Second',1),('ICS 122','Computer Programming II (Lec)',2,623,'Second',1),('ICS 122L','Computer Programming II (Lab)',1,623,'Second',1),('ICS 211','Data Structures with Algorithm Development (L',2,623,'First',2),('ICS 211L','Data Structures with Algorithm Development (L',1,623,'First',2),('ICS 221','File Organization',3,623,'Second',2),('ICS 222','Computer Architecture (Lec)',2,623,'Second',2),('ICS 222L','Computer Architecture (Lab)',1,623,'Second',2),('ICS 311','Operating Systems (Lec)',2,623,'First',3),('ICS 311A','Numerial Methods',3,593,'First',3),('ICS 311L','Operating Systems (Lab)',1,623,'First',3),('ICS 312','Programming Applications (Lec)',2,623,'First',3),('ICS 312L','Programming Applications (Lab)',1,623,'First',3),('ICS 313','Discrete Mathematics',3,593,'Short',2),('ICS 321','Database Management Systems (Lec)',2,623,'First',3),('ICS 321L','Database Management Systems (Lab)',1,623,'First',3),('ICS 322','Data Communications and Computer Networks (Le',2,623,'Second',3),('ICS 322L','Data Communications and Computer Networks (La',1,623,'Second',3),('ICS 411','Quality Consciousness, Habit and Processes',3,593,'First',4),('ICS 411A','Intro to Operations Research',3,593,'First',4),('ICS 411B','Advanced Operating Systems',3,593,'Second',4),('ICS 421A','Advanced Networking Topics',3,593,'First',4),('ICS 421B','Knowledge and Complex Adaptive Systems',3,593,'First',4),('IS 111','IS Fundamentals 1',3,623,'First',1),('IS 112','Programming Fundamentals 1 (Lec)',2,623,'First',1),('IS 112L','Programming Fundamentals 1 (Lab)',1,623,'First',1),('IS 121','IS Fundamentals 2 (Lec)',2,623,'Second',1),('IS 121L','IS Fundamentals 2 (Lab)',1,623,'Second',1),('IS 122','Programming Fundamentals 2 (Lec)',2,623,'Second',1),('IS 122L','Programming Fundamentals 2 (Lab)',1,623,'Second',1),('IS 131','Intro to the IS Profession and Ethics',3,593,'Short',1),('IS 211','Data Structures for IS (Lec)',2,623,'First',2),('IS 211L','Data Structures for IS (Lab)',1,623,'First',2),('IS 212','Discrete Structures',3,593,'First',2),('IS 221','Business Processes',3,593,'Second',2),('IS 222','Financial Systems',3,593,'Second',2),('IS 231','Networks and Internet Technology (Lec)',2,623,'Short',2),('IS 231L','Networks and Internet Technology (Lab)',1,623,'Short',2),('IS 311','Databse Managment Systems for IS (Lec)',2,623,'First',3),('IS 311L','Databse Managment Systems for IS (Lab)',1,623,'First',3),('IS 312','Human Computer Interaction',3,593,'First',3),('IS 313','Infromation Systems Planning',3,593,'First',3),('IS 314','Management of Technology',3,593,'First',3),('IS 321','Applications Development (Lec)',2,623,'Second',3),('IS 321L','Applications Development (Lab)',1,623,'Second',3),('IS 322','Systems Analysis and Design',3,593,'Second',3),('IS 323','Web Technologies (Lec)',2,623,'Second',3),('IS 323L','Web Technologies (Lab)',1,623,'Second',3),('IS 324','System Infrastructure and Integration',3,593,'Second',3),('IS 325A','Practicum 1',3,593,'Second',3),('IS 335B','Practicum 2',6,593,'Short',3),('IS 411','Enterprise Architecture',3,3,'First',4),('IS 412','Deployment, Maintenance and Services',3,3,'First',4),('IS 413','Software Engineering',3,3,'First',4),('IS 414','Analysis and Evaluation of Business Performan',3,3,'First',4),('IS 415','Capstone Project 1',3,3,'First',4),('IS 421','Capstone Project 2',3,593,'Second',4),('IS 422','IS Project Management and Quality System',3,593,'Second',4),('IS 423','Quality Consciousness, Habit and Processes',3,593,'Second',4),('ISE 01','Customer Relations Management',3,593,'First',3),('ISE 02','2D Drawing and Animation',3,593,'First',3),('ISE 03','3D Drawing and Animation',3,593,'First',3),('ISE 04','Interactive Media',3,593,'First',3),('ISE 05','E-Commerce',3,593,'First',3),('ISE 06','Applied Operating Systems',3,593,'First',4),('ISE 07','IT Security and Risk Managment',3,593,'First',4),('ISE 08','Information Technology Certification Review',3,593,'First',4),('ISE 09','Advanced Web Technologies',3,593,'First',4),('ISE 10','Communication of Information Technology/Techn',3,593,'First',4),('ISE 11','IT Audit and Contrls',3,593,'Second',3),('ISE 12','Operations Research',3,593,'Second',3),('ISE 13','Business Intelligence',3,593,'Second',3),('ISE 14','Economics of Infromation Processing',3,593,'Second',3),('ISE 15','Enterprise Systenms',3,593,'Second',4),('ISE 16','Supply Chain Management',3,593,'Second',4),('ISE 17','Enterprise Resource Planning',3,593,'Second',4),('ISE 18','IT Resource Planning',3,593,'Second',4),('ISE 19','Fieldtrips, Seminars and Workshops',3,593,'Second',4),('ISF 01','Human Resource Management',3,593,'First',3),('ISF 02','Foreign Language',3,593,'First',3),('ISF 03','Organizational Development',3,593,'First',4),('ISF 04','Personality Development',3,593,'First',4),('IT 001','Object Oriented Programming',3,593,'First',3),('IT 002','Artificial Intelligence',3,593,'First',3),('IT 003','Neural Networks',3,593,'First',3),('IT 004','Knowledge Base and Expert Systems',3,593,'First',3),('IT 005','Advanced Database Management Systems',3,593,'First',3),('IT 006','Robotics',3,593,'First',3),('IT 007','Distributed Systems',3,593,'Second',3),('IT 008','E-Commerce',3,593,'Second',3),('IT 009','Information Assurance and Security',3,593,'Second',3),('IT 010','Information Management Concepts and Fundament',3,593,'Second',3),('IT 011','System Integration and Architecture',3,593,'Second',3),('IT 012','Multimedia Systems',3,593,'First',4),('IT 013','Data Mining',3,593,'First',4),('IT 014','Data Warehousing',3,593,'First',4),('IT 015','Graphics Technology and Animation',3,593,'First',4),('IT 016','Games Technology',3,593,'Second',4),('IT 017','Mobile Technology',3,593,'Second',4),('IT 018','Human computer Interaction',3,593,'Second',4),('IT 019','Digital Arts',3,593,'Second',4),('IT 020','Animation',3,593,'Second',4),('IT 021','Information Technology Certification Review',3,593,'First',4),('IT 022','Programming Certification Review ',3,593,'First',4),('IT 023','Technology Cerifitication Review',3,593,'First',4),('IT 111','Information Technology Fundamentals I',2,623,'First',1),('IT 111L','Information Technology Fundamentals I (Lab)',1,623,'First',1),('IT 112','Programming Fundamentals I',2,623,'First',1),('IT 112L','Programming Fundamentals I (Lab)',1,623,'First',1),('IT 121','Information Technology Fundamentals II',2,623,'Second',1),('IT 121L','Information Technology Fundamentals II (Lab)',1,623,'Second',1),('IT 122','Programming Fundamentals II',2,623,'Second',1),('IT 122L','Programming Fundamentals II (Lab)',1,623,'Second',1),('IT 131','Computer Architecture',2,623,'Short',1),('IT 131L','Computer Architecture (Lab)',1,623,'Short',1),('IT 132','Information System Fundamentals',3,623,'Short',1),('IT 211','Data Structures with Algorithm Development',2,623,'First',2),('IT 211L','Data Structures with Algorithm Development (L',1,623,'First',2),('IT 212','Discrete Mathematics',3,593,'Short',2),('IT 221','Operating Systems',2,623,'Second',2),('IT 221L','Operating Systems (Lab)',1,623,'Second',2),('IT 311','Software Modeling and Analysis',3,593,'First',3),('IT 311A','E-Commerce',3,593,'First',3),('IT 311B','Human Computer Interaction',3,593,'First',3),('IT 312','Programming Applications (Lec)',2,623,'First',3),('IT 312L','Programming Applications (Lab)',1,623,'First',3),('IT 314','Database Management Systems (Lec)',2,623,'First',3),('IT 314L','Database Management Systems (Lab)',1,623,'First',3),('IT 315','Financial Systems',3,593,'First',3),('IT 321B','Data Warehousing',3,593,'First',3),('IT 322','Network Technology with Administration and Ma',2,623,'Second',3),('IT 322L','Network Technology with Administration and Ma',1,623,'Second',3),('IT 323','Integrative Programming and Technologies (Lec',2,623,'Second',3),('IT 323L','Integrative Programming and Technologies (Lab',1,623,'Second',3),('IT 324','Web Systems and Technologies (Lec)',2,623,'Second',3),('IT 324L','Web Systems and Technologies (Lab)',1,623,'Second',3),('IT 325N','Software Engineering Fundamentals',3,593,'First',4),('IT 411',' IT Project I',3,593,'First',4),('IT 411A','Introduction to Neural Networks',3,593,'Second',4),('IT 411B','Advanced Database Management Systems',3,593,'Second',4),('IT 412','Practicum',3,593,'Second',3),('IT 412a','Practicum 1',3,593,'Second',3),('IT 412b','Practicum 2',6,593,'Short',3),('IT 413','Software Engineering',3,593,'First',4),('IT 421','IT Project II',3,593,'Second',4),('IT 421A','Advance Software Engineering',3,593,'First',3),('IT 421B','IT Organization Management',3,593,'Second',3),('IT 422','Social and Professional Issues in Information',3,593,'First',4),('IT 423','Information Systems Planning / Information Re',3,593,'Second',4),('IT 424','Field Trips and Seminars',3,593,'First',4),('ITF 001','Foreign Language',3,593,'Second',3),('ITF 002','Personality Development',3,593,'Second',3),('ITF 003','Video Production and Editing',3,593,'Second',4),('ITF 004','Technology Presentation and Communication',3,593,'Second',4),('LIS 111','Intro to Library and Info Science',3,593,'First',1),('LIS 121','Info Sources and Sevices',3,593,'Second',1),('LIS 123','Collection Management',3,593,'Second',2),('LIS 123A','Specilaization in Collection Management',3,593,'Second',2),('LIS 131','Library and Information Managment',3,593,'Short',1),('LIS 131A','Specialization in Library and Information Man',3,593,'Second',3),('LIS 211','Organization of Info Sources I',3,593,'First',2),('LIS 211A','Specialization in Organization of info Source',3,593,'First',3),('LIS 213','Information Technology',3,593,'Second',1),('LIS 214','Filipiana with Emphasis on Local Collection',3,593,'First',3),('LIS 221','Organization of Info Sources II',3,593,'Second',2),('LIS 222','Info Sources and Services II',3,593,'First',2),('LIS 222A','Specialization in info Sources and Services',3,593,'First',3),('LIS 223','Information Technology II',3,593,'First',2),('LIS 223A','Specialization in Information Technology',3,593,'Second',3),('LIS 231','Academics Libraries with Field Trips',3,593,'Short',2),('LIS 311','Indexing and Abstracting',3,593,'Second',2),('LIS 311A','Fundamentals of E-Commerce',3,593,'First',3),('LIS 311C','Specialization in indexing and Abstracting',3,593,'First',3),('LIS 312','Archice Management',3,593,'Second',3),('LIS 313','Public Libraries with Field Trips',3,593,'Short',3),('LIS 314','Records Management',3,593,'Second',3),('LIS 315','Library and Information Sciences Ethics',3,593,'First',3),('LIS 316','Medical Librarian',3,593,'First',3),('LIS 317','Law Librarianship',3,593,'First',3),('LIS 319','Special Materials (with Projects)',3,593,'First',3),('LIS 321','Special Libraries',3,593,'Short',3),('LIS 321A','Knowledge Management',3,593,'First',3),('LIS 321B','Systems Analysis and Design',3,593,'Second',3),('LIS 322','School Library Media Centers',3,593,'First',4),('LIS 322A','Special Topics in Library Information Systems',3,593,'Second',4),('LIS 323','Research Methods',3,593,'Second',3),('LIS 324','Library Database Management',3,593,'Second',4),('LIS 325','Human Computer Interaction',3,593,'First',3),('LIS 326','Office Information Systems',3,593,'Second',3),('LIS 327','Library Literatures for Children and Yound Ad',3,593,'First',3),('LIS 332','Storytelling',3,593,'Second',3),('LIS 333','Music and Sound as Information',3,593,'First',4),('LIS 411','Library Practicum 1',9,593,'First',4),('LIS 421','Library Practicum II',9,593,'Second',4),('LIS E01','Archiving and Digitizing',3,593,'First',3),('LIS E02','Foreign Language',3,593,'First',3),('LIS E03','Multimedia Design and Production',3,593,'First',4),('LIS E04','Promotions and Libraries',3,593,'First',4),('LIS E05','Web Information System',3,593,'Second',3),('LIS E06','Wolrd Librarianship',3,593,'Second',4),('Litt 1','The Literature of the Philippines',3,593,'Short',1),('Litt 2','The Literature of the World',3,593,'Short',2),('Math 13','Theory of Equations',3,593,'First',3),('Math 14','Linear Algebra',3,593,'First',3),('Math 16','Operations Research 1',3,593,'Second',3),('Math 17','Operations Research II',3,593,'First',4),('Math 18','Numerical Methods',3,593,'Second',4),('Math 19','Set Theory and Logic',3,593,'Second',3),('Math 1A','College Algebra',3,593,'First',1),('Math 1B','College Algebra',5,593,'First',1),('Math 21','Mathematics of Investment',3,593,'First',3),('Math 22','Real Analysis',3,593,'First',3),('Math 23','Number Theory',3,593,'First',4),('Math 24','Abstract Algebra',3,593,'Second',3),('Math 26','Graph Theory',3,593,'First',4),('Math 27','Vector Analysis',3,593,'Second',4),('Math 28','Complex Analysis',3,593,'Second',4),('Math 29','Modern Geometry',3,593,'Second',3),('Math 2A','Plane and Spherical Trigonometry',3,593,'First',3),('Math 30','Combinatorics',3,593,'Second',4),('Math 3B','Analytic Geometry',4,593,'Second',3),('Math 3D','Plane and Solid Geometry with Mensuration',5,593,'Second',3),('Math 4','Mathematical Analysis for Business',3,593,'First',4),('Math 4A','Differential Calculus',3,593,'First',4),('Math 4C','Mathematical Analysis for Business',3,593,'Second',1),('MATH 5A','Integral Calculus',4,593,'Second',3),('Math 6A','Differential Equaions',3,593,'Second',3),('Math 7','Basic Statistics',3,593,'First',3),('Math 7A','Fundamentals of Probability and Statistics',3,593,'Second',4),('Math 7aN','Fundamentals of Probability and Statistics',3,593,'First',4),('Math 8','Basic Mathematics',3,593,'Second',2),('Math 8A','Abstract Algebra',3,593,'Second',3),('Math 9','History and Foundations of Mathematics',3,593,'Second',3),('Math Ed 1','Observation and Participation',3,593,'First',3),('Math Ed 2','Practicum',3,593,'Second',3),('Math Res 1','Research 1',3,593,'First',4),('Math Res 2','Research 2',3,593,'Second',4),('Mgmt 1','Principles of Organization and Management',3,593,'First',2),('Mgmt 2','Strategic Management',3,593,'Second',3),('Mgmt 3','Quality Management',3,593,'Second',4),('Mgmt 4','Production and Operations Management',3,593,'Second',4),('Nat Sc 1','Intro to Biological Science',3,593,'First',1),('Nat Sc 2','Intro to Physical Science',3,593,'First',2),('NSTP-CWTS 1','National Service Training Program I',3,593,'Short',3),('NSTP-CWTS 2','National Service Training Program II',3,593,'Short',2),('NSTP-WTS 1','National Service Training Program I',3,593,'Short',1),('PE 1','Physical Fitness',2,593,'First',1),('PE 2','Rhythmic Activities',2,593,'Second',1),('PE 3','Individual / Dual Sports and Games',2,593,'First',2),('PE 4','Team Sports and Games',2,593,'Second',2),('Philos 1','Logic',3,593,'Second',1),('Philos 2','Ethics',3,593,'First',2),('Phys 1A','College Physics I (Lec)',3,593,'Second',2),('Phys 1AL','College Physics I (Lab)',1,593,'Second',2),('Phys 2A','College Physics 2 (Lec)',3,593,'Second',2),('Phys 2AL','College Physics 2 (Lab)',1,593,'Second',2),('Phys 2B','Electromagnetism and Electricity',3,593,'Short',2),('Polit Sc 1N','Politics and Governance with Philippine Const',3,593,'Second',4),('Psycho 1','General Psychology with Drug Prevention',3,593,'Second',2),('Research 1','CS Thesis I',3,593,'First',4),('Research 2','CS Thesis II',3,593,'Second',4),('Socio 1','Society and Culture with Family Planning',3,593,'First',2),('Stat 1','Statistics 1',3,593,'First',1),('Stat 2','Statistics 2',3,593,'Second',2),('Theo 1','I Believe',3,593,'First',1),('Theo 2','Believing into Discipleship',3,593,'Second',1),('Theo 3','Discipleship in Community',3,593,'First',2),('Theo 4','Living Like Jesus',3,593,'Second',2);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coursedetails`
--

DROP TABLE IF EXISTS `coursedetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coursedetails` (
  `courseno` varchar(45) NOT NULL,
  `schoolid` varchar(45) NOT NULL,
  PRIMARY KEY (`courseno`,`schoolid`),
  KEY `fk_coursedetails_schoolid_idx` (`schoolid`),
  CONSTRAINT `fk_coursedetails_courseno` FOREIGN KEY (`courseno`) REFERENCES `course` (`courseno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_coursedetails_schoolid` FOREIGN KEY (`schoolid`) REFERENCES `school` (`schoolid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursedetails`
--

LOCK TABLES `coursedetails` WRITE;
/*!40000 ALTER TABLE `coursedetails` DISABLE KEYS */;
INSERT INTO `coursedetails` VALUES ('Calc 1','SCIS'),('Calc 2','SCIS'),('Calc 3','SCIS'),('Chem 1A ','SCIS'),('Chem 1AL','SCIS'),('Chem 2A','SCIS'),('Chem 2AL','SCIS'),('Comp 1','SCIS'),('Comp 2','SCIS'),('Comp 3','SCIS'),('Comp 4','SCIS'),('Comp 4A','SCIS'),('CS 311A','SCIS'),('CS 311B','SCIS'),('CS 321a','SCIS'),('CS 321B','SCIS'),('CS 321C','SCIS'),('CS 321d','SCIS'),('CS 322','SCIS'),('CS 411A','SCIS'),('CS 411B','SCIS'),('CS 411C','SCIS'),('CS 412','SCIS'),('CS 421A','SCIS'),('CS 421B','SCIS'),('CS 421C','SCIS'),('CS 422','SCIS'),('CS 422A','SCIS'),('CS 422B','SCIS'),('Ecol 1A','SCIS'),('Econ 1','SCIS'),('Econ 2','SCIS'),('EDUC 102A','SCIS'),('EDUC 104A','SCIS'),('EDUC 105','SCIS'),('EDUC 107','SCIS'),('EDUC 109','SCIS'),('EDUC 112','SCIS'),('Educ 3','SCIS'),('Educ 3a','SCIS'),('Engl 1','SCIS'),('Engl 2','SCIS'),('Engl 26A','SCIS'),('Engl 4','SCIS'),('Engl 4A','SCIS'),('Engl 7','SCIS'),('Fil 1','SCIS'),('Fil 2','SCIS'),('Fil 3','SCIS'),('Hist 1','SCIS'),('Hist 2','SCIS'),('Hum 1a','SCIS'),('ICS 111','SCIS'),('ICS 111L','SCIS'),('ICS 112','SCIS'),('ICS 112L','SCIS'),('ICS 121','SCIS'),('ICS 121L','SCIS'),('ICS 122','SCIS'),('ICS 122L','SCIS'),('ICS 211','SCIS'),('ICS 211L','SCIS'),('ICS 221','SCIS'),('ICS 222','SCIS'),('ICS 222L','SCIS'),('ICS 311','SCIS'),('ICS 311A','SCIS'),('ICS 311L','SCIS'),('ICS 312','SCIS'),('ICS 312L','SCIS'),('ICS 313','SCIS'),('ICS 321','SCIS'),('ICS 321L','SCIS'),('ICS 322','SCIS'),('ICS 322L','SCIS'),('ICS 411','SCIS'),('ICS 411A','SCIS'),('ICS 411B','SCIS'),('ICS 421A','SCIS'),('ICS 421B','SCIS'),('IS 111','SCIS'),('IS 112','SCIS'),('IS 112L','SCIS'),('IS 121','SCIS'),('IS 121L','SCIS'),('IS 122','SCIS'),('IS 122L','SCIS'),('IS 131','SCIS'),('IS 211','SCIS'),('IS 211L','SCIS'),('IS 212','SCIS'),('IS 221','SCIS'),('IS 222','SCIS'),('IS 231','SCIS'),('IS 231L','SCIS'),('IS 311','SCIS'),('IS 311L','SCIS'),('IS 312','SCIS'),('IS 313','SCIS'),('IS 314','SCIS'),('IS 321','SCIS'),('IS 321L','SCIS'),('IS 322','SCIS'),('IS 323','SCIS'),('IS 323L','SCIS'),('IS 324','SCIS'),('IS 325A','SCIS'),('IS 335B','SCIS'),('IS 411','SCIS'),('IS 412','SCIS'),('IS 413','SCIS'),('IS 414','SCIS'),('IS 415','SCIS'),('IS 421','SCIS'),('IS 422','SCIS'),('IS 423','SCIS'),('ISE 01','SCIS'),('ISE 02','SCIS'),('ISE 03','SCIS'),('ISE 04','SCIS'),('ISE 05','SCIS'),('ISE 06','SCIS'),('ISE 07','SCIS'),('ISE 08','SCIS'),('ISE 09','SCIS'),('ISE 10','SCIS'),('ISE 11','SCIS'),('ISE 12','SCIS'),('ISE 13','SCIS'),('ISE 14','SCIS'),('ISE 15','SCIS'),('ISE 16','SCIS'),('ISE 17','SCIS'),('ISE 18','SCIS'),('ISE 19','SCIS'),('ISF 01','SCIS'),('ISF 02','SCIS'),('ISF 03','SCIS'),('ISF 04','SCIS'),('IT 001','SCIS'),('IT 002','SCIS'),('IT 003','SCIS'),('IT 004','SCIS'),('IT 005','SCIS'),('IT 006','SCIS'),('IT 007','SCIS'),('IT 008','SCIS'),('IT 009','SCIS'),('IT 010','SCIS'),('IT 011','SCIS'),('IT 012','SCIS'),('IT 013','SCIS'),('IT 014','SCIS'),('IT 015','SCIS'),('IT 016','SCIS'),('IT 017','SCIS'),('IT 018','SCIS'),('IT 019','SCIS'),('IT 020','SCIS'),('IT 021','SCIS'),('IT 022','SCIS'),('IT 023','SCIS'),('IT 111','SCIS'),('IT 111L','SCIS'),('IT 112','SCIS'),('IT 112L','SCIS'),('IT 121','SCIS'),('IT 121L','SCIS'),('IT 122','SCIS'),('IT 122L','SCIS'),('IT 131','SCIS'),('IT 131L','SCIS'),('IT 132','SCIS'),('IT 211','SCIS'),('IT 211L','SCIS'),('IT 212','SCIS'),('IT 221','SCIS'),('IT 221L','SCIS'),('IT 311','SCIS'),('IT 311A','SCIS'),('IT 311B','SCIS'),('IT 312','SCIS'),('IT 312L','SCIS'),('IT 314','SCIS'),('IT 314L','SCIS'),('IT 315','SCIS'),('IT 321B','SCIS'),('IT 322','SCIS'),('IT 322L','SCIS'),('IT 323','SCIS'),('IT 323L','SCIS'),('IT 324','SCIS'),('IT 324L','SCIS'),('IT 325N','SCIS'),('IT 411','SCIS'),('IT 411A','SCIS'),('IT 411B','SCIS'),('IT 412','SCIS'),('IT 412a','SCIS'),('IT 412b','SCIS'),('IT 413','SCIS'),('IT 421','SCIS'),('IT 421A','SCIS'),('IT 421B','SCIS'),('IT 422','SCIS'),('IT 423','SCIS'),('IT 424','SCIS'),('ITF 001','SCIS'),('ITF 002','SCIS'),('ITF 003','SCIS'),('ITF 004','SCIS'),('LIS 111','SCIS'),('LIS 121','SCIS'),('LIS 123','SCIS'),('LIS 123A','SCIS'),('LIS 131','SCIS'),('LIS 131A','SCIS'),('LIS 211','SCIS'),('LIS 211A','SCIS'),('LIS 213','SCIS'),('LIS 214','SCIS'),('LIS 221','SCIS'),('LIS 222','SCIS'),('LIS 222A','SCIS'),('LIS 223','SCIS'),('LIS 223A','SCIS'),('LIS 231','SCIS'),('LIS 311','SCIS'),('LIS 311A','SCIS'),('LIS 311C','SCIS'),('LIS 312','SCIS'),('LIS 313','SCIS'),('LIS 314','SCIS'),('LIS 315','SCIS'),('LIS 316','SCIS'),('LIS 317','SCIS'),('LIS 319','SCIS'),('LIS 321','SCIS'),('LIS 321A','SCIS'),('LIS 321B','SCIS'),('LIS 322','SCIS'),('LIS 322A','SCIS'),('LIS 323','SCIS'),('LIS 324','SCIS'),('LIS 325','SCIS'),('LIS 326','SCIS'),('LIS 327','SCIS'),('LIS 332','SCIS'),('LIS 333','SCIS'),('LIS 411','SCIS'),('LIS 421','SCIS'),('LIS E01','SCIS'),('LIS E02','SCIS'),('LIS E03','SCIS'),('LIS E04','SCIS'),('LIS E05','SCIS'),('LIS E06','SCIS'),('Litt 1','SCIS'),('Litt 2','SCIS'),('Math 13','SCIS'),('Math 14','SCIS'),('Math 16','SCIS'),('Math 17','SCIS'),('Math 18','SCIS'),('Math 19','SCIS'),('Math 1A','SCIS'),('Math 1B','SCIS'),('Math 21','SCIS'),('Math 22','SCIS'),('Math 23','SCIS'),('Math 24','SCIS'),('Math 26','SCIS'),('Math 27','SCIS'),('Math 28','SCIS'),('Math 29','SCIS'),('Math 2A','SCIS'),('Math 30','SCIS'),('Math 3B','SCIS'),('Math 3D','SCIS'),('Math 4','SCIS'),('Math 4A','SCIS'),('Math 4C','SCIS'),('MATH 5A','SCIS'),('Math 6A','SCIS'),('Math 7','SCIS'),('Math 7A','SCIS'),('Math 7aN','SCIS'),('Math 8','SCIS'),('Math 8A','SCIS'),('Math 9','SCIS'),('Math Ed 1','SCIS'),('Math Ed 2','SCIS'),('Math Res 1','SCIS'),('Math Res 2','SCIS'),('Mgmt 1','SCIS'),('Mgmt 2','SCIS'),('Mgmt 3','SCIS'),('Mgmt 4','SCIS'),('Nat Sc 1','SCIS'),('Nat Sc 2','SCIS'),('NSTP-CWTS 1','SCIS'),('NSTP-CWTS 2','SCIS'),('NSTP-WTS 1','SCIS'),('PE 1','SCIS'),('PE 2','SCIS'),('PE 3','SCIS'),('PE 4','SCIS'),('Philos 1','SCIS'),('Philos 2','SCIS'),('Phys 1A','SCIS'),('Phys 1AL','SCIS'),('Phys 2A','SCIS'),('Phys 2AL','SCIS'),('Phys 2B','SCIS'),('Polit Sc 1N','SCIS'),('Psycho 1','SCIS'),('Research 1','SCIS'),('Research 2','SCIS'),('Socio 1','SCIS'),('Stat 1','SCIS'),('Stat 2','SCIS'),('Theo 1','SCIS'),('Theo 2','SCIS'),('Theo 3','SCIS'),('Theo 4','SCIS');
/*!40000 ALTER TABLE `coursedetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `depid` varchar(45) NOT NULL,
  `depname` varchar(45) NOT NULL,
  `schoolid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`depid`),
  KEY `fk_department_schoolid_idx` (`schoolid`),
  CONSTRAINT `fk_department_schoolid` FOREIGN KEY (`schoolid`) REFERENCES `school` (`schoolid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('AAT','Associate in Accounting Technology','SABM'),('BA COM','Bachelor of Arts in Communication','SOH'),('BA ENGL','Bachelor of Arts in English','SOH'),('BA LS','Bachelor of Arts in Legal Studies','SOH'),('BA PIS','Bachelor of Arts in Philosophy and Interdisci','SOH'),('BA POLIT SC','Bachelor of Arts in Political Science','SOH'),('BARVS','Bachelor of Arts in Religious and Values Stud','SOH'),('BEED GEN ED','Bachelor of Elementary Educ with specializati','STE'),('BEED PRE SCHL','Bachelor of Elementary Educ with specializati','STE'),('BEED SPED','Bachelor of Elementary Educ with specializati','STE'),('BEED THE','Bachelor of Elementary Educ major in Tech and','STE'),('BEED VAL','Bachelor of Elementary Educ major in Values E','STE'),('BLIS','Bachelor of Library and Information Science','SCIS'),('BMLS','Bachelor in Medical Laboratory Science','SNS'),('BS ARCH','Bachelor of Science in Architecture','SEA'),('BS BIOL','Bachelor of Science in Biology','SNS'),('BS Entrep','Bachelor of Science in Entrepreneurship','SABM'),('BS MATH','Bachelor of Science in Mathematics','SCIS'),('BS PHARM','Bachelor of Science in Pharmacy','SNS'),('BS PSYCH','Bachelor of Science in Psychology','SOH'),('BS S WK','Bachelor of Science in Social Work','SOH'),('BSAc','Bachelor of Science in Accountancy','SABM'),('BSBA Bus Econ','Bachelor of Science in Business Administratio','SABM'),('BSBA Finman','Bachelor of Science in Business Administratio','SABM'),('BSBA HRDM','Bachelor of Science in Business Administratio','SABM'),('BSBA Mktg','Bachelor of Science in Business Administratio','SABM'),('BSCE','Bachelor of Science in Civil Engineering','SEA'),('BSCHE','Bachelor of Science in Chemical Engineering','SEA'),('BSCS','Bachelor of Science in Computer Science','SCIS'),('BSECE','Bachelor of Science in Electronics Engineerin','SEA'),('BSED BIOL SCI','Bachelor of Secondary Educ major in Biologica','STE'),('BSED ENGL','Bachelor of Secondary Educ major in English','STE'),('BSED FIL','Bachelor of Secondary Educ major in Filipino','STE'),('BSED MAPEH','Bachelor of Secondary Educ major in Music, Ar','STE'),('BSED MAT','Bachelor of Secondary Educ major in Mathemati','STE'),('BSED PHYS SCI','Bachelor of Secondary Educ major in Physical ','STE'),('BSED SS','Bachelor of Secondary Educ major in Social St','STE'),('BSEE','Bachelor of Science in Electrical Engineering','SEA'),('BSEM','Bachelor of Science in Mining Engineering','SEA'),('BSGE','Bachelor of Science in Geodetic Engineering','SEA'),('BSHTM HRRM','Bachelor of Science in Hospitality And Touris','SABM'),('BSHTM TTM','Bachelor of Science in Hospitality and Touris','SABM'),('BSIE','Bachelor of Science in Industrial Engineering','SEA'),('BSIS','Bachelor of Science in Information Science','SCIS'),('BSIT','Bachelor of Science in Information Technology','SCIS'),('BSMA','Bachelor of Science in Managment Accounting','SABM'),('BSME','Bachelor of Science in Mechanical Engineering','SEA'),('BSMecE','Bachelor of Science in Mechatronics Engineeri','SEA'),('BSN','Bachelor of Science in Nursing','SON'),('BSRT','Bachelor of Science in Radiologic Tech','SNS'),('LLB','Bachelor of Law',NULL),('MD','Doctor of Medicine',NULL);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enrollment` (
  `enrolid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `validuntil` date NOT NULL,
  `idno` int(11) NOT NULL,
  `downpayment` double NOT NULL,
  `totalfee` double NOT NULL,
  PRIMARY KEY (`enrolid`),
  KEY `idno_idx` (`idno`),
  CONSTRAINT `idno` FOREIGN KEY (`idno`) REFERENCES `student` (`idno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrollment`
--

LOCK TABLES `enrollment` WRITE;
/*!40000 ALTER TABLE `enrollment` DISABLE KEYS */;
INSERT INTO `enrollment` VALUES (1,'2015-05-04','08:00:00','2015-05-06',2110005,5000,15000);
/*!40000 ALTER TABLE `enrollment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enrollmentdetails`
--

DROP TABLE IF EXISTS `enrollmentdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enrollmentdetails` (
  `enrolid` int(11) NOT NULL,
  `classcode` int(11) NOT NULL,
  PRIMARY KEY (`enrolid`,`classcode`),
  KEY `fk_ed_classcode_idx` (`classcode`),
  CONSTRAINT `fk_ed_classcode` FOREIGN KEY (`classcode`) REFERENCES `class` (`classcode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ed_enrolid` FOREIGN KEY (`enrolid`) REFERENCES `enrollment` (`enrolid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrollmentdetails`
--

LOCK TABLES `enrollmentdetails` WRITE;
/*!40000 ALTER TABLE `enrollmentdetails` DISABLE KEYS */;
INSERT INTO `enrollmentdetails` VALUES (1,9367),(1,9616),(1,9644);
/*!40000 ALTER TABLE `enrollmentdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `orno` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `idno` int(11) NOT NULL,
  `method` enum('PAYPAL','BANK','CREDITCARD') NOT NULL,
  PRIMARY KEY (`orno`),
  KEY `idno_idx` (`idno`),
  CONSTRAINT `idno_payment` FOREIGN KEY (`idno`) REFERENCES `student` (`idno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `schoolid` varchar(45) NOT NULL,
  `schoolname` varchar(45) NOT NULL,
  PRIMARY KEY (`schoolid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES ('SABM','School of Accountancy and Business Management'),('SCIS','School of Computing and Information Sciences '),('SEA','School of Engineering and Architecture'),('SNS','School of Natural Sciences'),('SOH','School of Humanities'),('SOL','School of Law'),('SOM','School of Medicine'),('SON','School of Nursing'),('STE','School of Teacher Education');
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `idno` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `baguio_address` varchar(45) NOT NULL,
  `home_address` varchar(45) DEFAULT NULL,
  `last_school_attended` varchar(45) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT 'Filipino',
  `nationality` varchar(45) DEFAULT 'Filipino',
  `father_name` varchar(45) DEFAULT NULL,
  `father_contact` varchar(45) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `mother_contact` varchar(45) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `civilstatus` varchar(45) DEFAULT 'Single',
  `religion` varchar(45) DEFAULT NULL,
  `guardian_name` varchar(45) DEFAULT NULL,
  `guardian_contact` varchar(45) DEFAULT NULL,
  `guardian_relationship` varchar(45) DEFAULT NULL,
  `guardian_address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (2110000,'pizza','Tribiani','Joey','BSN',4,'M','23 Aurora Hill, Baguio City','Dagupan, Pangasinan','SLU','Filipino','Filipino','Cesar Tribiani','09361112233','Mason','Judith Tribiani','09645894612','Housewife','Single','Roman Catholic','Mary Allen Tribiani','7546395','Sister','23 Aurora Hill, Baguio City'),(2110001,'karen','Green','Rachel','BSBA',4,'F','Ridgewood Subdivision, Baguio City','Ridgewood Subdivision, Baguio City','SLU','Filipino','Filipino','Richard Green','7896542','Businessman','Alice Green','7513696','Businesswoman','Single','Roman Catholic','Mindy Green','09261324567','Cousin','Ridgewood Subdivision, Baguio City'),(2110002,'janice','Bing','Chandler','BSIT',4,'M','Leonila Hill, Baguio City','Leonila Hill, Baguio City','SLU','Filipino','Filipino','Carl Bing','1236548','Dancer','Charlotte Bing','09614527854','Actress','Single','Roman Catholic','Benedict Su','7569542','Godfather','Leonila Hill, Baguio City'),(2110003,'dino','Gellar','Ross','BSCS',4,'M','La Trinidad, Benguet','La Trinidad, Benguet','SLU','Filipino','Filipino','Jack Gellar','09631231125','Mechanic','Rose Gellar','7896542','Social Worker','Single','Roman Catholic','Lily Gellar','7893215','Aunt','La Trinidad, Benguet'),(2110004,'bing','Gellar','Monica','BSIT',4,'F','La Trinidad, Benguet','La Trinidad, Benguet','SLU','Filipino','Filipino','Jack Gellar','09631231125','Mechanic','Rose Gellar','7896542','Social Worker','Single','Roman Catholic','Lily Gellar','7893215','Aunt','La Trinidad, Benguet'),(2110005,'mike','Buffet','Phoebe','BSN',4,'F','Queen of Peace, Baguio City','Queen of Peace, Baguio City','SLU','Filipino','Filipino','Kenny Buffet','9864521','Medical Representative','Lily Buffet','0963456235','Artist','Single','Roman Catholic','Ursula Buffet','78923255','Sister','Palma Street, Labsan, Baguio City');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-04 23:34:04
