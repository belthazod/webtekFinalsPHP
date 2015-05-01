-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: localhost    Database: enrollment
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
  `courseno` varchar(45) NOT NULL,
  `days` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `slots` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `enrolled` int(11) DEFAULT NULL,
  `status` enum('OPEN TO SCHOOL','OPEN TO ALL','CLOSED') DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classcode`),
  KEY `fk_class_courseno_idx` (`courseno`),
  CONSTRAINT `fk_class_courseno` FOREIGN KEY (`courseno`) REFERENCES `course` (`courseno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (9334,'MATH 4A','MTWTH','7:30-8:30','S525',45,NULL,NULL,NULL,NULL),(9346,'ICS 321L','WS','7:30-9:00','S422',45,NULL,NULL,NULL,NULL),(9348,'RESEARCH 1','MWF','7:30-8:30','S416',45,NULL,NULL,NULL,NULL),(9392,'LIS 223','TF','7:30-9:00','S421',45,NULL,NULL,NULL,NULL),(9396,'COMP 4A','TF','7:30-9:00','S422',45,NULL,NULL,NULL,NULL),(9405,'LIS 411','','','',NULL,NULL,NULL,NULL,NULL),(9406,'MATH 1B','MTWTHF','7:30-8:30','P607',45,NULL,NULL,NULL,NULL),(9409,'CHEM 1AL','S','7:30-10:30','A304',45,NULL,NULL,NULL,NULL),(9413,'PHYS 1AL','TTH','7:30-9:00','A203',NULL,NULL,NULL,NULL,NULL),(9434,'IT 111','WS','7:30-8:30','S527',NULL,NULL,NULL,NULL,NULL),(9435,'IT 111L','MTH','7:30-9:00','S421',NULL,NULL,NULL,NULL,NULL),(9446,'IT 112','TF','7:30-8:30','S425',NULL,NULL,NULL,NULL,NULL),(9447,'IT 112L','MTH','7:30-9:00','S422',NULL,NULL,NULL,NULL,NULL),(9479,'ENGL 1','TTHS','7:30-8:30','P605',NULL,NULL,NULL,NULL,NULL),(9490,'FIL 1','TTHS','7:30-8:30','P608',NULL,NULL,NULL,NULL,NULL),(9507,'IT 112L','WS','7:30-9:00','S421',NULL,NULL,NULL,NULL,NULL),(9509,'ENGL 1','MWF','7:30-8:30','P605',NULL,NULL,NULL,NULL,NULL),(9520,'IT 132','MWF','7:30-8:30','S526',NULL,NULL,NULL,NULL,NULL),(9528,'IT 211','TF','7:30-8:30','S423',NULL,NULL,NULL,NULL,NULL),(9529,'IT 211L','MTH','7:30-9:00','S326',NULL,NULL,NULL,NULL,NULL),(9540,'PHILOS 2','MWF','7:30-8:30','P604',NULL,NULL,NULL,NULL,NULL),(9546,'THEO 3','TTHS','7:30-8:30','P606',NULL,NULL,NULL,NULL,NULL),(9652,'IT 412','','','',NULL,NULL,NULL,NULL,NULL),(9690,'IT 019','','','',NULL,NULL,NULL,NULL,NULL),(9691,'ITF 003','','','',NULL,NULL,NULL,NULL,NULL);
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
  `depid` varchar(45) NOT NULL,
  PRIMARY KEY (`courseno`,`depid`),
  KEY `fk_coursedetails_depid_idx` (`depid`),
  CONSTRAINT `fk_coursedetails_courseno` FOREIGN KEY (`courseno`) REFERENCES `course` (`courseno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_coursedetails_depid` FOREIGN KEY (`depid`) REFERENCES `department` (`depid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursedetails`
--

LOCK TABLES `coursedetails` WRITE;
/*!40000 ALTER TABLE `coursedetails` DISABLE KEYS */;
INSERT INTO `coursedetails` VALUES ('Comp 1','BLIS'),('Comp 2','BLIS'),('Comp 3','BLIS'),('comp 4a','BLIS'),('Ecol 1a','BLIS'),('Econ 1','BLIS'),('educ 102a','BLIS'),('educ 104a','BLIS'),('educ 105','BLIS'),('educ 107','BLIS'),('educ 109','BLIS'),('educ 112','BLIS'),('Engl 1','BLIS'),('Engl 2','BLIS'),('Engl 26a','BLIS'),('Fil 1','BLIS'),('Fil 2','BLIS'),('Fil 3','BLIS'),('Hist 1','BLIS'),('Hist 2','BLIS'),('Hum 1a','BLIS'),('LIS 111','BLIS'),('LIS 121','BLIS'),('LIS 123','BLIS'),('LIS 123a','BLIS'),('LIS 131','BLIS'),('lis 131a','BLIS'),('LIS 211','BLIS'),('lis 211a','BLIS'),('LIS 213','BLIS'),('lis 214','BLIS'),('LIS 221','BLIS'),('LIS 222','BLIS'),('lis 222a','BLIS'),('LIS 223','BLIS'),('lis 223a','BLIS'),('LIS 231','BLIS '),('LIS 311','BLIS'),('lis 311a','BLIS'),('lis 311c','BLIS'),('lis 312','BLIS'),('lis 313','BLIS '),('lis 314','BLIS'),('LIS 315','BLIS'),('lis 316','BLIS'),('lis 317','BLIS'),('lis 319','BLIS'),('lis 321','BLIS'),('lis 321a','BLIS'),('lis 321b','BLIS'),('lis 322','BLIS'),('lis 322a','BLIS'),('lis 323','BLIS'),('LIS 324','BLIS'),('lis 325','BLIS'),('lis 326','BLIS'),('lis 327','BLIS'),('lis 332','BLIS'),('lis 333','BLIS'),('lis 411','BLIS'),('lis 421','BLIS'),('lis e01','BLIS'),('lis e02','BLIS'),('lis e03','BLIS'),('lis e04','BLIS'),('lis e05','BLIS'),('lis e06','BLIS'),('Litt 1','BLIS'),('Litt 2','BLIS '),('Math 1a','BLIS'),('math 7','BLIS'),('Math 8','BLIS'),('Nat Sc 1','BLIS'),('Nat Sc 2','BLIS'),('NSTP-CWTS 1','BLIS'),('NSTP-CWTS 2','BLIS '),('PE 1','BLIS'),('PE 2','BLIS'),('PE 3','BLIS'),('PE 4','BLIS'),('Philos 1','BLIS'),('Polit Sc 1N','BLIS'),('Psycho 1','BLIS'),('Socio 1','BLIS'),('Theo 1','BLIS'),('Theo 2','BLIS'),('Theo 3','BLIS'),('Theo 4','BLIS'),('calc 1','BS MATH'),('Calc 2','BS MATH'),('calc 3','BS MATH'),('chem 1a','BS MATH'),('chem 1al','BS MATH'),('Chem 2a','BS MATH'),('Chem 2al','BS MATH'),('comp 1','BS MATH'),('comp 2','BS MATH'),('comp 3','BS MATH'),('comp 4','BS MATH'),('econ 1','BS MATH'),('econ 2','BS MATH'),('educ 3','BS MATH'),('Educ 3a','BS MATH'),('engl 1','BS MATH'),('Engl 2','BS MATH'),('engl 4','BS MATH'),('Engl 7','BS MATH'),('fil 1','BS MATH'),('Fil 2','BS MATH'),('hist 1','BS MATH'),('Hist 2','BS MATH'),('math 13','BS MATH'),('math 14','BS MATH'),('math 16','BS MATH'),('math 17','BS MATH'),('math 18','BS MATH'),('Math 19','BS MATH'),('math 1b','BS MATH'),('math 21','BS MATH'),('math 22','BS MATH'),('math 23','BS MATH'),('math 24','BS MATH'),('math 26','BS MATH'),('math 27','BS MATH'),('math 28','BS MATH'),('math 29','BS MATH'),('math 2a','BS MATH'),('math 30','BS MATH'),('Math 3b','BS MATH'),('Math 3d','BS MATH'),('math 6a','BS MATH'),('Math 9','BS MATH'),('math ed 1','BS MATH'),('math ed 2','BS MATH'),('math res 1','BS MATH'),('math res 2','BS MATH'),('nstp-cwts 1','BS MATH'),('NSTP-CWTS 2','BS MATH'),('pe 1','BS MATH'),('pe 2','BS MATH'),('pe 3','BS MATH'),('pe 4','BS MATH'),('philos 1','BS MATH'),('Philos 2','BS MATH'),('phys 1a','BS MATH'),('phys 1al','BS MATH'),('Phys 2a','BS MATH'),('Phys 2al','BS MATH'),('polit sc 1n','BS MATH'),('Psycho 1','BS MATH'),('Socio 1','BS MATH'),('stat 1','BS MATH'),('Stat 2','BS MATH'),('Theo 1','BS MATH'),('Theo 2','BS MATH'),('theo 3','BS MATH'),('Theo 4','BS MATH'),('Chem 1A','BSCS'),('Chem 1AL','BSCS'),('CS 311A','BSCS'),('CS 311B','BSCS'),('CS 321a','BSCS'),('CS 321B','BSCS'),('CS 321C','BSCS'),('CS 321d','BSCS'),('CS 322','BSCS'),('CS 411A','BSCS'),('CS 411B','BSCS'),('CS 411C','BSCS'),('CS 412','BSCS'),('CS 421A','BSCS'),('CS 421B','BSCS'),('CS 421C','BSCS'),('CS 422A','BSCS'),('CS 422B','BSCS'),('Econ 1','BSCS'),('Engl 1','BSCS'),('Engl 2','BSCS'),('Engl 4','BSCS'),('Engl 7','BSCS'),('Fil 1','BSCS'),('Fil 2','BSCS'),('Hist 1','BSCS'),('Hist 2','BSCS'),('ICS 111','BSCS'),('ICS 111L','BSCS'),('ICS 112','BSCS'),('ICS 112L','BSCS'),('ICS 121','BSCS'),('ICS 121L','BSCS'),('ICS 122','BSCS'),('ICS 122L','BSCS'),('ICS 211','BSCS'),('ICS 211L','BSCS'),('ICS 221','BSCS'),('ICS 222','BSCS'),('ICS 222L','BSCS'),('ICS 311','BSCS'),('ICS 311A','BSCS'),('ICS 311L','BSCS'),('ICS 312','BSCS'),('ICS 312L','BSCS'),('ICS 313','BSCS'),('ICS 321','BSCS'),('ICS 321L','BSCS'),('ICS 322','BSCS'),('ICS 322L','BSCS'),('ICS 411','BSCS'),('ICS 411A','BSCS'),('ICS 411B','BSCS'),('ICS 421A','BSCS'),('ICS 421B','BSCS'),('IT 013','BSCS'),('IT 311','BSCS'),('IT 311A','BSCS'),('IT 311B','BSCS'),('IT 321B','BSCS'),('IT 324','BSCS'),('IT 324L','BSCS'),('IT 411A','BSCS'),('IT 411B','BSCS'),('IT 412','BSCS'),('IT 413','BSCS'),('IT 421A','BSCS'),('IT 421B','BSCS'),('IT 422','BSCS'),('Math 1a','BSCS'),('Math 2a','BSCS'),('Math 3B','BSCS'),('Math 4a','BSCS'),('Math 5a','BSCS'),('Math 7A','BSCS'),('Math 8a','BSCS'),('NSTP-CWTS 1','BSCS'),('NSTP-CWTS 2','BSCS'),('PE 1','BSCS'),('PE 2','BSCS'),('PE 3','BSCS'),('PE 4','BSCS'),('Philos 1','BSCS'),('Philos 2','BSCS'),('Phys 1a','BSCS'),('Phys 1aL','BSCS'),('Phys 2B','BSCS'),('Polit Sc 1N','BSCS'),('Psycho 1','BSCS'),('Research 1','BSCS'),('Research 2','BSCS'),('Theo 1','BSCS'),('Theo 2','BSCS'),('Theo 3','BSCS'),('Theo 4','BSCS'),('Comp 1','BSIS'),('Econ 1','BSIS'),('Engl 1','BSIS'),('Engl 2','BSIS'),('Engl 4','BSIS'),('Engl 7','BSIS'),('Fil 1','BSIS'),('Fil 2','BSIS'),('Hist 1','BSIS'),('Hist 2','BSIS'),('Hum 1A','BSIS'),('IS 111','BSIS'),('IS 112','BSIS'),('IS 112L','BSIS'),('IS 121','BSIS'),('IS 121L','BSIS'),('IS 122','BSIS'),('IS 122L','BSIS'),('IS 131','BSIS'),('IS 211','BSIS'),('IS 211L','BSIS'),('IS 212','BSIS'),('IS 221','BSIS'),('IS 222','BSIS'),('IS 231','BSIS'),('IS 231L','BSIS'),('IS 311','BSIS'),('IS 311L','BSIS'),('IS 312','BSIS'),('IS 313','BSIS'),('IS 314','BSIS'),('IS 321','BSIS'),('IS 321L','BSIS'),('IS 322','BSIS'),('IS 323','BSIS'),('IS 323L','BSIS'),('IS 324','BSIS'),('IS 325A','BSIS'),('IS 335B','BSIS'),('IS 411','BSIS'),('IS 412','BSIS'),('IS 413','BSIS'),('IS 414','BSIS'),('IS 415','BSIS'),('IS 421','BSIS'),('IS 422','BSIS'),('IS 423','BSIS'),('ISE 01','BSIS'),('ISE 02','BSIS'),('ISE 03','BSIS'),('ISE 04','BSIS'),('ISE 05','BSIS'),('ISE 06','BSIS'),('ISE 07','BSIS'),('ISE 08','BSIS'),('ISE 09','BSIS'),('ISE 10','BSIS'),('ISE 11','BSIS'),('ISE 12','BSIS'),('ISE 13','BSIS'),('ISE 14','BSIS'),('ISE 15','BSIS'),('ISE 16','BSIS'),('ISE 17','BSIS'),('ISE 18','BSIS'),('ISE 19','BSIS'),('ISF 01','BSIS'),('ISF 02','BSIS'),('ISF 03','BSIS'),('ISF 04','BSIS'),('Math 1A','BSIS'),('Math 4C','BSIS'),('Math 7a','BSIS'),('Mgmt 1','BSIS'),('Mgmt 2','BSIS'),('Mgmt 3','BSIS'),('Mgmt 4','BSIS'),('Nat Sc 1','BSIS'),('Nat Sc 2','BSIS'),('NSTP-CWTS 1','BSIS'),('NSTP-CWTS 2','BSIS'),('PE 1','BSIS'),('PE 2','BSIS'),('PE 3','BSIS'),('PE 4','BSIS'),('Philos 1','BSIS'),('Philos 2','BSIS'),('Polit Sc 1N','BSIS'),('Psycho 1','BSIS'),('Socio 1','BSIS'),('Theo 1','BSIS'),('Theo 2','BSIS'),('Theo 3','BSIS'),('Theo 4','BSIS'),('Chem 1A','BSIT'),('Chem 1AL','BSIT'),('Econ 1','BSIT'),('Engl 1','BSIT'),('Engl 2','BSIT'),('Engl 4A','BSIT'),('Engl 7','BSIT'),('Fil 1','BSIT'),('Fil 2','BSIT'),('Hist 1','BSIT'),('Hist 2','BSIT'),('IT 001','BSIT'),('IT 002','BSIT'),('IT 003','BSIT'),('IT 004','BSIT'),('IT 005','BSIT'),('IT 006','BSIT'),('IT 007','BSIT'),('IT 008','BSIT'),('IT 009','BSIT'),('IT 010','BSIT'),('IT 011','BSIT'),('IT 012','BSIT'),('IT 013','BSIT'),('IT 014','BSIT'),('IT 015','BSIT'),('IT 016','BSIT'),('IT 017','BSIT'),('IT 018','BSIT'),('IT 019','BSIT'),('IT 020','BSIT'),('IT 021','BSIT'),('IT 022','BSIT'),('IT 023','BSIT'),('IT 111','BSIT'),('IT 111L','BSIT'),('IT 112','BSIT'),('IT 112L','BSIT'),('IT 121','BSIT'),('IT 121L','BSIT'),('IT 122','BSIT'),('IT 122L','BSIT'),('IT 131','BSIT'),('IT 131L','BSIT'),('IT 132','BSIT'),('IT 211','BSIT'),('IT 211L','BSIT'),('IT 212','BSIT'),('IT 221','BSIT'),('IT 221L','BSIT'),('IT 311','BSIT'),('IT 312','BSIT'),('IT 312L','BSIT'),('IT 314','BSIT'),('IT 314L','BSIT'),('IT 315','BSIT'),('IT 322','BSIT'),('IT 322L','BSIT'),('IT 323','BSIT'),('IT 323L','BSIT'),('IT 324','BSIT'),('IT 324L','BSIT'),('IT 325N','BSIT'),('IT 411','BSIT'),('IT 412a','BSIT'),('IT 412b','BSIT'),('IT 421','BSIT'),('IT 422','BSIT'),('IT 423','BSIT'),('IT 424','BSIT'),('ITF 001','BSIT'),('ITF 002','BSIT'),('ITF 003','BSIT'),('ITF 004','BSIT'),('Math 1a','BSIT'),('Math 2a','BSIT'),('Math 3B','BSIT'),('Math 4','BSIT'),('Math 7aN','BSIT'),('NSTP-CWTS 2','BSIT'),('NSTP-WTS 1','BSIT'),('PE 1','BSIT'),('PE 2','BSIT'),('PE 3','BSIT'),('PE 4','BSIT'),('Philos 1','BSIT'),('Philos 2','BSIT'),('Phys 1A','BSIT'),('Phys 1AL','BSIT'),('Polit Sc 1N','BSIT'),('Psycho 1','BSIT'),('Socio 1','BSIT'),('Theo 1','BSIT'),('Theo 2','BSIT'),('Theo 3','BSIT'),('Theo 4','BSIT');
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
  `schoolid` int(11) NOT NULL,
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
INSERT INTO `department` VALUES ('AAT','Associate in Accounting Technology',8),('BA COM','Bachelor of Arts in Communication',2),('BA ENGL','Bachelor of Arts in English',2),('BA LS','Bachelor of Arts in Legal Studies',2),('BA PIS','Bachelor of Arts in Philosophy and Interdisci',2),('BA POLIT SC','Bachelor of Arts in Political Science',2),('BARVS','Bachelor of Arts in Religious and Values Stud',2),('BEED GEN ED','Bachelor of Elementary Educ with specializati',4),('BEED PRE SCHL','Bachelor of Elementary Educ with specializati',4),('BEED SPED','Bachelor of Elementary Educ with specializati',4),('BEED THE','Bachelor of Elementary Educ major in Tech and',4),('BEED VAL','Bachelor of Elementary Educ major in Values E',4),('BLIS','Bachelor of Library and Information Science',9),('BMLS','Bachelor in Medical Laboratory Science',6),('BS ARCH','Bachelor of Science in Architecture',1),('BS BIOL','Bachelor of Science in Biology',6),('BS Entrep','Bachelor of Science in Entrepreneurship',8),('BS MATH','Bachelor of Science in Mathematics',9),('BS PHARM','Bachelor of Science in Pharmacy',6),('BS PSYCH','Bachelor of Science in Psychology',2),('BS S WK','Bachelor of Science in Social Work',2),('BSAc','Bachelor of Science in Accountancy',8),('BSBA Bus Econ','Bachelor of Science in Business Administratio',8),('BSBA Finman','Bachelor of Science in Business Administratio',8),('BSBA HRDM','Bachelor of Science in Business Administratio',8),('BSBA Mktg','Bachelor of Science in Business Administratio',8),('BSCE','Bachelor of Science in Civil Engineering',1),('BSCHE','Bachelor of Science in Chemical Engineering',1),('BSCS','Bachelor of Science in Computer Science',9),('BSECE','Bachelor of Science in Electronics Engineerin',1),('BSED BIOL SCI','Bachelor of Secondary Educ major in Biologica',4),('BSED ENGL','Bachelor of Secondary Educ major in English',4),('BSED FIL','Bachelor of Secondary Educ major in Filipino',4),('BSED MAPEH','Bachelor of Secondary Educ major in Music, Ar',4),('BSED MAT','Bachelor of Secondary Educ major in Mathemati',4),('BSED PHYS SCI','Bachelor of Secondary Educ major in Physical ',4),('BSED SS','Bachelor of Secondary Educ major in Social St',4),('BSEE','Bachelor of Science in Electrical Engineering',1),('BSEM','Bachelor of Science in Mining Engineering',1),('BSGE','Bachelor of Science in Geodetic Engineering',1),('BSHTM HRRM','Bachelor of Science in Hospitality And Touris',8),('BSHTM TTM','Bachelor of Science in Hospitality and Touris',8),('BSIE','Bachelor of Science in Industrial Engineering',1),('BSIS','Bachelor of Science in Information Science',9),('BSIT','Bachelor of Science in Information Technology',9),('BSMA','Bachelor of Science in Managment Accounting',8),('BSME','Bachelor of Science in Mechanical Engineering',1),('BSMecE','Bachelor of Science in Mechatronics Engineeri',1),('BSN','Bachelor of Science in Nursing',5),('BSRT','Bachelor of Science in Radiologic Tech',6),('LLB','Bachelor of Law',3),('MD','Doctor of Medicine',7);
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
  `date` varchar(45) NOT NULL,
  `time` time NOT NULL,
  `validuntil` varchar(45) NOT NULL,
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
  `schoolid` int(11) NOT NULL,
  `schoolacronym` varchar(45) NOT NULL,
  `schoolname` varchar(45) NOT NULL,
  PRIMARY KEY (`schoolid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
INSERT INTO `school` VALUES (1,'SEA','School of Engineering and Architecture'),(2,'SOH','School of Humanities'),(3,'SOL','School of Law'),(4,'STE','School of Teacher Education'),(5,'SON','School of Nursing'),(6,'SNS','School of Natural Sciences'),(7,'SOM','School of Medicine'),(8,'SABM','School of Accountancy and Business Management'),(9,'SCIS','School of Computing and Information Sciences ');
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
INSERT INTO `student` VALUES (2110000,'Tribiani','Joey','BSN',4,'M','23 Aurora Hill, Baguio City','Dagupan, Pangasinan','SLU','Filipino','Filipino','Cesar Tribiani','09361112233','Mason','Judith Tribiani','09645894612','Housewife','Single','Roman Catholic','Mary Allen Tribiani','7546395','Sister','23 Aurora Hill, Baguio City'),(2110001,'Green','Rachel','BSBA',4,'F','Ridgewood Subdivision, Baguio City','Ridgewood Subdivision, Baguio City','SLU','Filipino','Filipino','Richard Green','7896542','Businessman','Alice Green','7513696','Businesswoman','Single','Roman Catholic','Mindy Green','09261324567','Cousin','Ridgewood Subdivision, Baguio City'),(2110002,'Bing','Chandler','BSIT',4,'M','Leonila Hill, Baguio City','Leonila Hill, Baguio City','SLU','Filipino','Filipino','Carl Bing','1236548','Dancer','Charlotte Bing','09614527854','Actress','Single','Roman Catholic','Benedict Su','7569542','Godfather','Leonila Hill, Baguio City'),(2110003,'Gellar','Ross','BSCS',4,'M','La Trinidad, Benguet','La Trinidad, Benguet','SLU','Filipino','Filipino','Jack Gellar','09631231125','Mechanic','Rose Gellar','7896542','Social Worker','Single','Roman Catholic','Lily Gellar','7893215','Aunt','La Trinidad, Benguet'),(2110004,'Gellar','Monica','BSIT',4,'F','La Trinidad, Benguet','La Trinidad, Benguet','SLU','Filipino','Filipino','Jack Gellar','09631231125','Mechanic','Rose Gellar','7896542','Social Worker','Single','Roman Catholic','Lily Gellar','7893215','Aunt','La Trinidad, Benguet'),(2110005,'Buffet','Phoebe','BSN',4,'F','Queen of Peace, Baguio City','Queen of Peace, Baguio City','SLU','Filipino','Filipino','Kenny Buffet','9864521','Medical Representative','Lily Buffet','0963456235','Artist','Single','Roman Catholic','Ursula Buffet','78923255','Sister','Palma Street, Labsan, Baguio City');
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

-- Dump completed on 2015-05-01 19:27:18
