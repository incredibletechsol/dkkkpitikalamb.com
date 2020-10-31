DROP TABLE tbl_alumini;

CREATE TABLE `tbl_alumini` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `alumininame` varchar(100) NOT NULL,
  `aluminideptname` varchar(100) NOT NULL,
  `aluminiyearofpassing` varchar(4) NOT NULL,
  `aluminicurrentlyworkingin` varchar(100) NOT NULL,
  `aluminimobileno` varchar(12) NOT NULL,
  `aluminiemailId` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tbl_alumini VALUES("6","UDGIRKAR MANOJ SUBHASH","ELECTRICIAN","2010","ITI","8308023013","manoj.udgirkar@gmail.com");
INSERT INTO tbl_alumini VALUES("7","DNYANDEO DASHARATH JADHAV","ELECTRICIAN","2013","nature dairy","9518586454","jdnyandeo158@gmail.com");



DROP TABLE tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE tbl_faculty;

CREATE TABLE `tbl_faculty` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO tbl_faculty VALUES("47","Teaching","Mr. Sapkal Amarsinh Vamanrao","Welder Instructor","S.S.C., I.T.I., N.C.T.V.T.","9","Mr. Sapkal Amarsinh Vamanrao.JPG");
INSERT INTO tbl_faculty VALUES("34","Teaching","Mr.Tambe Anil Bapurao","Principal","DME/ITI .N.C.T.V.T","8","Mr. Tambe Anil Bapurao.jpg");
INSERT INTO tbl_faculty VALUES("42","Teaching","Mr. Bhosale Ganesh Nandkumar","Mech. Diesel Instructor","H.S.C, I.T.I. N.C.T.V.T","10","Mr. Bhosale Ganesh Nandkumar.JPG");
INSERT INTO tbl_faculty VALUES("43","Teaching","Mr. Kolekar Hanumant Kisan","Fitter Instructor","S.S.C., M.M.W.","14","Mr. Kolekar Hanumant Kisan.JPG");
INSERT INTO tbl_faculty VALUES("46","Teaching","Mr. Pawar Shahaji Maruti","Fitter Instructor","S.S.C., I.T.I., N.C.T.V.T.","5","Mr. Pawar Shahaji Maruti.JPG");
INSERT INTO tbl_faculty VALUES("44","Teaching","Mr. Devshete Vijay Shivling","Fitter Instructor","S.S.C., I.T.I., N.C.T.V.T.","7","Mr. Devshete Vijay Shivling.JPG");
INSERT INTO tbl_faculty VALUES("49","Teaching","Mr. Desai Rajendra Gopalrao","Mech. Diesel Instructor","S.S.C., I.T.I., N.C.T.V.T.","7","Mr. Desai Rajendra Gopalrao.png");
INSERT INTO tbl_faculty VALUES("50","Teaching","Mr. Pawar Dhanaji Sopana","Draughtsman Mech. Instructor","S.S.C., I.T.I.","11","Mr. Pawar Dhanaji Sopana.JPG");
INSERT INTO tbl_faculty VALUES("67","Teaching","Miss. Ranaware Swati Harishchandra","W/Sc. Cal & Science Instructor","B.Sc.","2","Miss. Ranaware Swati Harishchandra.JPG");
INSERT INTO tbl_faculty VALUES("52","Teaching","Mr. Chavan Ganesh Jaykumar ","Fitter Instructor","DME","6","Mr. Chavan Ganesh Jaykumar .JPG");
INSERT INTO tbl_faculty VALUES("53","Teaching","Mr. Jadhav Sagar Ashok","Electrician Instructor","S.S.C., I.T.I., N.C.T.V.T.","6","Mr. Jadhav Sagar Ashok.JPG");
INSERT INTO tbl_faculty VALUES("68","Teaching","Miss. Waghmode Shalu Arun","Emplyability Skills Instructor","B.B.A.","3","Miss. Waghmode Shalu Arun.JPG");
INSERT INTO tbl_faculty VALUES("55","Teaching","Mr. Kashid Vishal Prakash ","Electrician Instructor","B.E. (ELECTRICAL)","4","Mr. Kashid Vishal Prakash .JPG");
INSERT INTO tbl_faculty VALUES("56","Teaching","Mr. Adsul Amit Uttam","Painter General Instructor","H.S.C., I.T.I., N.C.T.V.T.","7","Mr. Adsul Amit Uttam.JPG");
INSERT INTO tbl_faculty VALUES("59","Non-Teaching","Mr. Keskar Nitin Dadasaheb","Office Administrator","M.COM., B.ED., G.D.C.&A.","9","Mr. Keskar Nitin Dadasaheb.JPG");
INSERT INTO tbl_faculty VALUES("61","Non-Teaching","Mrs. Wagh Swati Suhas","Clerk","B.A.","1","Mrs. Wagh Swati Suhas.jpeg");
INSERT INTO tbl_faculty VALUES("64","Non-Teaching","Mrs. Jagtap Nanda Somnath ","Swipper","3rd","6","Mrs. Jagtap Nanda Somnath .JPG");



DROP TABLE tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gallery VALUES("66","Haier Appliences Ranjangaon.jpg","Haier Placement");
INSERT INTO tbl_gallery VALUES("67","IMG-20170529-WA0002 copy.jpg","YIN SUMMIT");
INSERT INTO tbl_gallery VALUES("70","DSC_8182.jpg","Unmesh 2017 Winner Team");
INSERT INTO tbl_gallery VALUES("73","DSC_8262.jpg","Sanskuti Bhushan 2018");
INSERT INTO tbl_gallery VALUES("74","DSC_8235.jpg","Sanskuti Bhushan 2018");
INSERT INTO tbl_gallery VALUES("76","IMG_20180818_153853.jpg","MNC");
INSERT INTO tbl_gallery VALUES("77","IMG_20180807_123402.jpg","Bharat Forge");
INSERT INTO tbl_gallery VALUES("78","IMG_20180904_110455.jpg","Welcome Day");
INSERT INTO tbl_gallery VALUES("79","20181229_125730.jpg","Alumini Programme");
INSERT INTO tbl_gallery VALUES("80","IMG_0949.jpg","Alumini Programme");



DROP TABLE tbl_login;

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_login VALUES("1","itiadmin","Phadtare12#$","Nitin","Kasekar");



DROP TABLE tbl_news;

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` date NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO tbl_news VALUES("32","2020-07-24","Admission","सत्र २०२०-२१ साठी प्रवेश सुरु झाले आहेत. तरी इच्छुक विद्यार्थ्यांनी खालील नंबरवर संपर्क साधावा.\nमो. 9890104820 / 9766555976","95806782_2649951715287480_8456751465787031552_o.jp","");



