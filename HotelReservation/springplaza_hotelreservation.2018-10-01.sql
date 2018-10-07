

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `Description` varchar(1055) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO about VALUES
("1","about-img.jpg","OMAYGAS!");




CREATE TABLE `amenities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(55) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO amenities VALUES
("1","High Speed Internet","High-speed Internet is Internet access provided by a network of servers that transfers data via high-speed cable, satellite and wireless connections."),
("2","Hifi Sound System","Around the time home record and tape playing equipment was transitioning from mono to stereo, and consumers were becoming particular about the quality."),
("3","Ideal Location","Location is especially important for businesses in the retail and hospitality trades because they rely a great deal on visibility and exposure to their target markets."),
("4","Security Service","There is a great potential for risk . These risks must be identified and analyzed and the appropriate security concepts have to be developed.");




CREATE TABLE `audit` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `AuditDate` date NOT NULL,
  `AuditTime` time NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;


INSERT INTO audit VALUES
("1","gimson","Add Room: asd","2018-09-20","09:31:46"),
("2","gimson","Add Room: 11","2018-09-25","10:32:24"),
("3","gimson","Add Room: 01","2018-09-25","10:32:57"),
("4","gimson","Add Room: 123","2018-09-25","10:33:12"),
("5","gimson","Add Room: 01","2018-09-25","10:39:12"),
("6","","Add Reservation: 201800000001","2018-09-25","13:39:55"),
("7","gimson","Approve Reservation: 201800000001","2018-09-25","13:40:58"),
("8","gimson","Approve Reservation: 201800000001","2018-09-25","13:40:59"),
("9","gimson","Approve Reservation: 201800000001","2018-09-25","14:24:35"),
("10","gimson","Checkin: ","2018-09-25","14:26:12"),
("11","gimson","Checkin: 201800000001","2018-09-25","14:44:10"),
("12","gimson","Checkin: 201800000001","2018-09-25","14:47:00"),
("13","gimson","Checkout: ","2018-09-25","14:51:32"),
("14","gimson","Checkout: ","2018-09-25","14:54:55"),
("15","gimson","Checkout: 201800000001","2018-09-25","14:56:55"),
("16","gimson","Checkin: 201800000001","2018-09-25","15:06:19"),
("17","gimson","Delete User: 1","2018-09-30","13:41:42"),
("18","gimson","Update User: 2","2018-09-30","13:42:04"),
("19","Christian Carl Dela Cruz","Delete Floor: 1","2018-09-30","13:52:04"),
("20","Christian Carl Dela Cruz","Delete Floor: 2","2018-09-30","13:52:08"),
("21","Christian Carl Dela Cruz","Add Floor: Deluxe Room","2018-09-30","13:52:21"),
("22","Christian Carl Dela Cruz","Add Floor: Fan Room","2018-09-30","13:52:29"),
("23","Christian Carl Dela Cruz","Delete image gallery: 21","2018-09-30","13:52:59"),
("24","Christian Carl Dela Cruz","Delete image gallery: 22","2018-09-30","13:53:03"),
("25","Christian Carl Dela Cruz","Delete image gallery: 24","2018-09-30","13:53:07"),
("26","Christian Carl Dela Cruz","Add image gallery: Awits","2018-09-30","13:55:08"),
("27","Christian Carl Dela Cruz","Add image gallery: Awits","2018-09-30","13:56:20"),
("28","Christian Carl Dela Cruz","Delete Room: 12","2018-09-30","14:11:41"),
("29","Christian Carl Dela Cruz","Add Room: 201","2018-09-30","14:18:40"),
("30","Christian Carl Dela Cruz","Add Room: 401","2018-09-30","14:18:56"),
("31","Christian Carl Dela Cruz","Update Amenities: High Speed Internet","2018-09-30","14:20:42"),
("32","Christian Carl Dela Cruz","Update Contact of Spring Plaza","2018-09-30","14:34:07"),
("33","Christian Carl Dela Cruz","Update Contact of Spring Plaza","2018-09-30","14:37:13"),
("34","Christian Carl Dela Cruz","Update Contact of Spring Plaza","2018-09-30","14:37:41"),
("35","Christian Carl Dela Cruz","Delete image in carousel: 1","2018-09-30","14:44:04"),
("36","Christian Carl Dela Cruz","Delete image in carousel: 2","2018-09-30","14:44:32"),
("37","Christian Carl Dela Cruz","Add image in carousel: sp.jpg","2018-09-30","14:47:22"),
("38","Christian Carl Dela Cruz","Add image in carousel: sp5.jpg","2018-09-30","14:48:19"),
("39","Christian Carl Dela Cruz","Delete image in carousel: 4","2018-09-30","14:48:33"),
("40","Christian Carl Dela Cruz","Add Floor: Function Hall","2018-09-30","14:51:42"),
("41","Christian Carl Dela Cruz","Delete image gallery: 25","2018-09-30","14:52:18"),
("42","Christian Carl Dela Cruz","Delete image gallery: 26","2018-09-30","14:52:22"),
("43","Christian Carl Dela Cruz","Add image gallery: ","2018-09-30","14:53:07"),
("44","Christian Carl Dela Cruz","Add image gallery: ","2018-09-30","14:53:45"),
("45","Christian Carl Dela Cruz","Add image gallery: ","2018-09-30","14:54:52"),
("46","","Add Reservation: 201800000004","2018-09-30","15:30:48"),
("47","","Add Reservation: 201800000005","2018-09-30","15:31:20"),
("48","","Add Reservation: 201800000006","2018-09-30","15:32:15"),
("49","","Add Reservation: 201800000007","2018-09-30","15:33:12"),
("50","","Add Reservation: 201800000008","2018-09-30","15:36:05"),
("51","Christian Carl Dela Cruz","Approve Reservation: 201800000008","2018-09-30","15:40:48"),
("52","Christian Carl Dela Cruz","Checkin: ","2018-09-30","15:42:40"),
("53","","Add Reservation: 201800000001","2018-09-30","15:57:56"),
("54","","Add Reservation: ","2018-09-30","15:58:04"),
("55","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-09-30","15:58:26"),
("56","Christian Carl Dela Cruz","Checkin: 201800000001","2018-09-30","15:59:37"),
("57","Christian Carl Dela Cruz","Disapprove Reservation: ","2018-09-30","16:00:04"),
("58","Christian Carl Dela Cruz","Disapprove Reservation: ","2018-09-30","16:00:14"),
("59","Christian Carl Dela Cruz","Checkout: ","2018-09-30","16:04:17"),
("60","Christian Carl Dela Cruz","Checkout: ","2018-09-30","16:06:48"),
("61","Christian Carl Dela Cruz","Checkout: ","2018-09-30","16:08:26"),
("62","","Add Reservation: 201800000001","2018-09-30","16:20:55"),
("63","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-09-30","16:21:32"),
("64","Christian Carl Dela Cruz","Checkin: 201800000001","2018-09-30","16:21:44"),
("65","Christian Carl Dela Cruz","Update Room: 1","2018-09-30","16:38:48"),
("66","Christian Carl Dela Cruz","Update Room: 2","2018-09-30","16:39:10"),
("67","Christian Carl Dela Cruz","Add Room: 202","2018-09-30","16:40:29"),
("68","Christian Carl Dela Cruz","Update Room: 1","2018-09-30","16:40:36"),
("69","","Add Reservation: 201800000001","2018-09-30","22:25:57"),
("70","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-09-30","22:36:13"),
("71","Christian Carl Dela Cruz","Checkin: 201800000001","2018-09-30","22:47:39"),
("72","Christian Carl Dela Cruz","Update About: ","2018-09-30","23:29:56"),
("73","Christian Carl Dela Cruz","Update About: ","2018-09-30","23:34:32"),
("74","Christian Carl Dela Cruz","Checkout: ","2018-09-30","23:38:25"),
("75","Christian Carl Dela Cruz","Checkout: ","2018-09-30","23:38:33"),
("76","Christian Carl Dela Cruz","Disapprove Reservation: 12","2018-09-30","23:39:28"),
("77","Christian Carl Dela Cruz","Update About: ","2018-10-01","08:40:27"),
("78","Christian Carl Dela Cruz","Update About: ","2018-10-01","08:41:47"),
("79","Christian Carl Dela Cruz","Update About: ","2018-10-01","08:48:32"),
("80","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-10-01","08:49:21"),
("81","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","08:57:42"),
("82","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","08:58:30"),
("83","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","08:58:36"),
("84","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","08:58:37"),
("85","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:04:20"),
("86","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:04:24"),
("87","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:04:47"),
("88","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:05:23"),
("89","Christian Carl Dela Cruz","Add image in carousel: Screenshot_20181001-000423.png","2018-10-01","09:14:50"),
("90","Christian Carl Dela Cruz","Delete image in carousel: 5","2018-10-01","09:15:41"),
("91","Christian Carl Dela Cruz","Add user: jacky","2018-10-01","09:16:28"),
("92","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:17:48"),
("93","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:18:03"),
("94","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-10-01","09:18:45"),
("95","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-10-01","09:20:38"),
("96","Christian Carl Dela Cruz","Approve Reservation: ","2018-10-01","09:35:19"),
("97","Christian Carl Dela Cruz","Approve Reservation: 201800000001","2018-10-01","09:35:51"),
("98","","Add Reservation: 201800000002","2018-10-01","10:36:59"),
("99","","Add Reservation: 201800000003","2018-10-01","10:42:46"),
("100","","Add Reservation: 201800000004","2018-10-01","10:44:40");
INSERT INTO audit VALUES
("101","","Add Reservation: ","2018-10-01","10:44:46"),
("102","","Add Reservation: ","2018-10-01","10:45:02"),
("103","","Add Reservation: 201800000005","2018-10-01","10:45:34"),
("104","","Add Reservation: 201800000005","2018-10-01","10:51:17"),
("105","","Add Reservation: 201800000005","2018-10-01","10:51:29"),
("106","Christian Carl Dela Cruz","Approve Reservation: 201800000004","2018-10-01","10:53:17"),
("107","","Add Reservation: 201800000005","2018-10-01","10:53:39"),
("108","","Add Reservation: ","2018-10-01","10:53:59"),
("109","","Add Reservation: 201800000005","2018-10-01","10:54:05"),
("110","Christian Carl Dela Cruz","Checkin: 201800000004","2018-10-01","10:54:20"),
("111","Christian Carl Dela Cruz","Checkout: ","2018-10-01","10:54:48"),
("112","","Add Reservation: 201800000005","2018-10-01","11:11:04"),
("113","","Add Reservation: ","2018-10-01","11:19:00"),
("114","","Add Reservation: ","2018-10-01","11:19:04"),
("115","","Add Reservation: 201800000006","2018-10-01","11:19:05"),
("116","","Add Reservation: ","2018-10-01","11:20:36"),
("117","Christian Carl Dela Cruz","Disapprove Reservation: 13","2018-10-01","11:20:41"),
("118","Christian Carl Dela Cruz","Disapprove Reservation: 14","2018-10-01","11:20:47"),
("119","Christian Carl Dela Cruz","Checkout: ","2018-10-01","11:20:56"),
("120","","Add Reservation: ","2018-10-01","11:21:57"),
("121","","Add Reservation: 201800000007","2018-10-01","11:22:12"),
("122","","Add Reservation: 201800000007","2018-10-01","11:22:24"),
("123","","Add Reservation: ","2018-10-01","11:25:22"),
("124","","Add Reservation: 201800000007","2018-10-01","11:27:15"),
("125","","Add Reservation: 201800000007","2018-10-01","11:27:28"),
("126","Christian Carl Dela Cruz","Approve Reservation: 201800000005","2018-10-01","11:28:07"),
("127","","Add Reservation: 201800000007","2018-10-01","11:37:44"),
("128","","Add Reservation: ","2018-10-01","11:40:02"),
("129","","Add Reservation: 201800000008","2018-10-01","11:40:11"),
("130","Christian Carl Dela Cruz","Update About: ","2018-10-01","11:50:09"),
("131","Christian Carl Dela Cruz","Update About: ","2018-10-01","11:50:30"),
("132","Christian Carl Dela Cruz","Update Amenities: Security Service","2018-10-01","11:52:03"),
("133","Christian Carl Dela Cruz","Update Amenities: Security Service","2018-10-01","11:52:14"),
("134","Christian Carl Dela Cruz","Update Amenities: Hifi Sound System","2018-10-01","11:52:54"),
("135","Christian Carl Dela Cruz","Update Amenities: Ideal Location","2018-10-01","11:53:16"),
("136","","Add Reservation: 201800000008","2018-10-01","11:56:27"),
("137","","Add Reservation: 201800000010","2018-10-01","11:57:29"),
("138","","Add Reservation: 201800000011","2018-10-01","11:59:19"),
("139","","Add Reservation: 201800000011","2018-10-01","11:59:33"),
("140","","Add Reservation: 201800000011","2018-10-01","11:59:35"),
("141","","Add Reservation: 201800000011","2018-10-01","11:59:39"),
("142","","Add Reservation: 201800000011","2018-10-01","12:02:27"),
("143","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:11:07"),
("144","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:11:50"),
("145","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:12:34"),
("146","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:13:04"),
("147","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:13:20"),
("148","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:13:50"),
("149","Christian Carl Dela Cruz","Delete image gallery: 30","2018-10-01","12:13:56"),
("150","Christian Carl Dela Cruz","Delete image gallery: 31","2018-10-01","12:14:01"),
("151","Christian Carl Dela Cruz","Delete image gallery: 32","2018-10-01","12:14:05"),
("152","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:14:50"),
("153","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:15:07"),
("154","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:15:18"),
("155","Christian Carl Dela Cruz","Delete image gallery: 38","2018-10-01","12:15:37"),
("156","Christian Carl Dela Cruz","Add image gallery: ","2018-10-01","12:15:50"),
("157","","Add Reservation: 201800000013","2018-10-01","13:23:37"),
("158","","Add Reservation: 201800000011","2018-10-01","13:32:28"),
("159","","Add Reservation: 201800000014","2018-10-01","13:42:18"),
("160","","Add Reservation: 201800000015","2018-10-01","13:42:49"),
("161","","Add Reservation: 201800000016","2018-10-01","13:44:05"),
("162","","Add Reservation: 201800000016","2018-10-01","13:49:54"),
("163","","Add Reservation: 201800000016","2018-10-01","13:50:25"),
("164","","Add Reservation: 201800000016","2018-10-01","13:50:47"),
("165","","Add Reservation: 201800000016","2018-10-01","13:50:50"),
("166","","Add Reservation: 201800000016","2018-10-01","13:50:58"),
("167","","Add Reservation: 201800000016","2018-10-01","14:14:30"),
("168","","Add Reservation: ","2018-10-01","14:27:37"),
("169","","Add Reservation: ","2018-10-01","14:28:14"),
("170","","Add Reservation: 201800000017","2018-10-01","14:30:51"),
("171","","Add Reservation: 201800000018","2018-10-01","14:31:34"),
("172","","Add Reservation: 201800000018","2018-10-01","14:33:56"),
("173","","Add Reservation: 201800000019","2018-10-01","14:34:06"),
("174","","Add Reservation: 201800000019","2018-10-01","14:34:53"),
("175","","Add Reservation: 201800000019","2018-10-01","14:37:55"),
("176","","Add Reservation: 201800000019","2018-10-01","14:47:00"),
("177","","Add Reservation: 201800000019","2018-10-01","14:47:53"),
("178","","Add Reservation: 201800000019","2018-10-01","14:49:03"),
("179","","Add Reservation: 201800000019","2018-10-01","14:52:53"),
("180","","Add Reservation: 201800000020","2018-10-01","14:53:05"),
("181","","Add Reservation: 201800000021","2018-10-01","14:53:36"),
("182","","Add Reservation: 201800000022","2018-10-01","15:06:18"),
("183","","Add Reservation: 201800000004","2018-10-01","15:21:48"),
("184","","Add Reservation: 201800000004","2018-10-01","15:23:09"),
("185","","Add Reservation: 201800000004","2018-10-01","15:23:44"),
("186","","Add Reservation: 201800000004","2018-10-01","15:33:38"),
("187","","Add Reservation: 201800000004","2018-10-01","15:43:13"),
("188","","Add Reservation: 201800000005","2018-10-01","15:43:53"),
("189","","Add Reservation: 201800000006","2018-10-01","15:46:41"),
("190","Christian Carl Dela Cruz","Checkin: 201800000004","2018-10-01","15:54:51"),
("191","Christian Carl Dela Cruz","Checkout: 201800000004","2018-10-01","15:55:46"),
("192","","Add Reservation: 201800000008","2018-10-01","16:08:49"),
("193","","Add Reservation: 201800000009","2018-10-01","16:11:08");




CREATE TABLE `bankinfo` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `BankName` varchar(255) NOT NULL,
  `AccountName` varchar(255) NOT NULL,
  `AccountNumber` varchar(25) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO bankinfo VALUES
("1","Bank of the Philippine Island","Leodegario Hembrador","3206315593");




CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO carousel VALUES
("3","sp.jpg","Deluxe");




CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `TelNo` varchar(50) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO contact VALUES
("1","Sampaloc II, Bucal, City of Dasmarinas, Cavite ","(046) 683-3464","0929-372-3064/0935-781-8453");




CREATE TABLE `floors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floors` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO floors VALUES
("3","Deluxe Room"),
("4","Fan Room"),
("5","Function Hall");




CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ImageName` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Floor` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;


INSERT INTO gallery VALUES
("27","","P_20180815_165156.jpg","Deluxe Room"),
("28","","P_20180815_165213.jpg","Deluxe Room"),
("29","","P_20180815_165229.jpg","Deluxe Room"),
("33","","sp6.jpg","Function Hall"),
("34","","sp4.jpg","Function Hall"),
("35","","sp7.jpg","Function Hall"),
("36","","ac1.jpg","Fan Room"),
("37","","lanay.jpg","Fan Room"),
("39","","cafe.jpg","Fan Room");




CREATE TABLE `payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;






CREATE TABLE `reservations` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Adult` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `ReservationDate` date NOT NULL,
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL,
  `CheckinTime` time NOT NULL,
  `CheckoutTime` time NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `RoomNo` varchar(255) NOT NULL,
  `ModeOfPayment` varchar(255) NOT NULL,
  `DownPayment` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TotalPaid` int(11) NOT NULL,
  `ReservationID` varchar(250) NOT NULL,
  `CheckinStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


INSERT INTO reservations VALUES
("1","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-01","2018-10-01","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004","checkout"),
("2","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004","checkout"),
("3","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004","checkout"),
("4","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004","checkout"),
("5","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004","checkout"),
("6","Gimson","Recilla","45451","asdas","1","0","27","2018-10-01","2018-10-02","2018-10-29","15:43:53","15:43:53","Deluxe Room","201","Pay in Bank","0","40500","40500","Pending","recillagimson@gmail.com","0","201800000005",""),
("7","Mark","angelo","123123123","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:45:29","15:45:29","Deluxe Room","202","Paypal","40500","40500","0","Approved","markangeloguanez@gmail.com","40500","201800000006",""),
("8","Jacky","Dela Cueva","09750991500","291 Alapan","1","0","6","2018-10-01","2018-11-16","2018-11-22","16:07:46","16:07:46","Deluxe Room","201","Paypal","4500","9000","4500","Approved","dianebhe09@gmail.com","4500","201800000008",""),
("9","Christian Carl","Dela Cueva","09750991500","291 Alapan","1","0","5","2018-10-01","2018-11-22","2018-11-27","16:11:08","16:11:08","Deluxe Room","202","Pay in Bank","0","7500","7500","Pending","dianebhe09@gmail.com","0","201800000009","");




CREATE TABLE `reservations_temp` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Adult` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `ReservationDate` date NOT NULL,
  `CheckinDate` varchar(250) NOT NULL,
  `CheckoutDate` varchar(250) NOT NULL,
  `CheckinTime` time NOT NULL,
  `CheckoutTime` time NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `RoomNo` varchar(255) NOT NULL,
  `ModeOfPayment` varchar(255) NOT NULL,
  `DownPayment` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TotalPaid` int(11) NOT NULL,
  `ReservationID` varchar(250) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


INSERT INTO reservations_temp VALUES
("1","Mark","Guanez","09168548854","asdasd","1","0","26","2018-10-01","2018-10-03","2018-10-29","15:10:08","15:10:08","Fan Room","401","Paypal","23400","23400","0","Approved","markangeloguanez@gmail.com","23400","201800000001"),
("2","Mark","Guanez","09168548854","asdasd","1","0","26","2018-10-01","2018-10-03","2018-10-29","15:16:27","15:16:27","Fan Room","401","Paypal","23400","23400","0","Approved","markangeloguanez@gmail.com","23400","201800000002"),
("3","Eduardo ","Herbosa","094154824","asdasd","1","0","27","2018-10-01","2018-10-02","2018-10-29","15:18:58","15:18:58","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000003"),
("4","Eduardo","Herbosa","48554848","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:21:20","15:21:20","Fan Room","401","Paypal","24300","24300","0","Approved","markangeloguanez@gmail.com","24300","201800000004"),
("5","Gimson","Recilla","45451","asdas","1","0","27","2018-10-01","2018-10-02","2018-10-29","15:43:53","15:43:53","Deluxe Room","201","Pay in Bank","0","40500","40500","Pending","recillagimson@gmail.com","0","201800000005"),
("6","Mark","angelo","123123123","asdasd","1","0","27","2018-10-01","2018-10-03","2018-10-30","15:45:29","15:45:29","Deluxe Room","202","Paypal","40500","40500","0","Approved","markangeloguanez@gmail.com","40500","201800000006"),
("7","Jacky","Dela Cueva","09750991500","291 Alapan","1","0","6","2018-10-01","2018-11-16","2018-11-22","16:07:19","16:07:19","Deluxe Room","201","Paypal","4500","9000","4500","Approved","dianebhe09@gmail.com","4500","201800000007"),
("8","","","","","0","0","0","2018-10-01","1970-01-01","1970-01-01","16:07:33","16:07:33","","","Paypal","0","0","0","Approved","","0",""),
("9","Jacky","Dela Cueva","09750991500","291 Alapan","1","0","6","2018-10-01","2018-11-16","2018-11-22","16:07:46","16:07:46","Deluxe Room","201","Paypal","4500","9000","4500","Approved","dianebhe09@gmail.com","4500","201800000008"),
("10","Christian Carl","Dela Cueva","09750991500","291 Alapan","1","0","5","2018-10-01","2018-11-22","2018-11-27","16:11:08","16:11:08","Deluxe Room","202","Pay in Bank","0","7500","7500","Pending","dianebhe09@gmail.com","0","201800000009");




CREATE TABLE `reservedate` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `reservationID` varchar(255) NOT NULL,
  `ReservationDate` date NOT NULL,
  `Checkin` varchar(255) NOT NULL,
  `Checkout` date NOT NULL,
  `Roomno` int(11) NOT NULL,
  `Roomtype` varchar(255) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;


INSERT INTO reservedate VALUES
("1","201800000004","2018-10-01","2018-10-01","2018-10-30","401","Fan Room"),
("2","201800000004","2018-10-01","2018-10-04","2018-10-30","401","Fan Room"),
("3","201800000004","2018-10-01","2018-10-05","2018-10-30","401","Fan Room"),
("4","201800000004","2018-10-01","2018-10-06","2018-10-30","401","Fan Room"),
("5","201800000004","2018-10-01","2018-10-07","2018-10-30","401","Fan Room"),
("6","201800000004","2018-10-01","2018-10-08","2018-10-30","401","Fan Room"),
("7","201800000004","2018-10-01","2018-10-09","2018-10-30","401","Fan Room"),
("8","201800000004","2018-10-01","2018-10-10","2018-10-30","401","Fan Room"),
("9","201800000004","2018-10-01","2018-10-11","2018-10-30","401","Fan Room"),
("10","201800000004","2018-10-01","2018-10-12","2018-10-30","401","Fan Room"),
("11","201800000004","2018-10-01","2018-10-13","2018-10-30","401","Fan Room"),
("12","201800000004","2018-10-01","2018-10-14","2018-10-30","401","Fan Room"),
("13","201800000004","2018-10-01","2018-10-15","2018-10-30","401","Fan Room"),
("14","201800000004","2018-10-01","2018-10-16","2018-10-30","401","Fan Room"),
("15","201800000004","2018-10-01","2018-10-17","2018-10-30","401","Fan Room"),
("16","201800000004","2018-10-01","2018-10-18","2018-10-30","401","Fan Room"),
("17","201800000004","2018-10-01","2018-10-19","2018-10-30","401","Fan Room"),
("18","201800000004","2018-10-01","2018-10-20","2018-10-30","401","Fan Room"),
("19","201800000004","2018-10-01","2018-10-21","2018-10-30","401","Fan Room"),
("20","201800000004","2018-10-01","2018-10-22","2018-10-30","401","Fan Room"),
("21","201800000004","2018-10-01","2018-10-23","2018-10-30","401","Fan Room"),
("22","201800000004","2018-10-01","2018-10-24","2018-10-30","401","Fan Room"),
("23","201800000004","2018-10-01","2018-10-25","2018-10-30","401","Fan Room"),
("24","201800000004","2018-10-01","2018-10-26","2018-10-30","401","Fan Room"),
("25","201800000004","2018-10-01","2018-10-27","2018-10-30","401","Fan Room"),
("26","201800000004","2018-10-01","2018-10-28","2018-10-30","401","Fan Room"),
("27","201800000004","2018-10-01","2018-10-29","2018-10-30","401","Fan Room"),
("28","201800000004","2018-10-01","2018-10-30","2018-10-30","401","Fan Room"),
("29","201800000004","2018-10-01","2018-10-03","2018-10-30","401","Fan Room"),
("30","201800000004","2018-10-01","2018-10-04","2018-10-30","401","Fan Room"),
("31","201800000004","2018-10-01","2018-10-05","2018-10-30","401","Fan Room"),
("32","201800000004","2018-10-01","2018-10-06","2018-10-30","401","Fan Room"),
("33","201800000004","2018-10-01","2018-10-07","2018-10-30","401","Fan Room"),
("34","201800000004","2018-10-01","2018-10-08","2018-10-30","401","Fan Room"),
("35","201800000004","2018-10-01","2018-10-09","2018-10-30","401","Fan Room"),
("36","201800000004","2018-10-01","2018-10-10","2018-10-30","401","Fan Room"),
("37","201800000004","2018-10-01","2018-10-11","2018-10-30","401","Fan Room"),
("38","201800000004","2018-10-01","2018-10-12","2018-10-30","401","Fan Room"),
("39","201800000004","2018-10-01","2018-10-13","2018-10-30","401","Fan Room"),
("40","201800000004","2018-10-01","2018-10-14","2018-10-30","401","Fan Room"),
("41","201800000004","2018-10-01","2018-10-15","2018-10-30","401","Fan Room"),
("42","201800000004","2018-10-01","2018-10-16","2018-10-30","401","Fan Room"),
("43","201800000004","2018-10-01","2018-10-17","2018-10-30","401","Fan Room"),
("44","201800000004","2018-10-01","2018-10-18","2018-10-30","401","Fan Room"),
("45","201800000004","2018-10-01","2018-10-19","2018-10-30","401","Fan Room"),
("46","201800000004","2018-10-01","2018-10-20","2018-10-30","401","Fan Room"),
("47","201800000004","2018-10-01","2018-10-21","2018-10-30","401","Fan Room"),
("48","201800000004","2018-10-01","2018-10-22","2018-10-30","401","Fan Room"),
("49","201800000004","2018-10-01","2018-10-23","2018-10-30","401","Fan Room"),
("50","201800000004","2018-10-01","2018-10-24","2018-10-30","401","Fan Room"),
("51","201800000004","2018-10-01","2018-10-25","2018-10-30","401","Fan Room"),
("52","201800000004","2018-10-01","2018-10-26","2018-10-30","401","Fan Room"),
("53","201800000004","2018-10-01","2018-10-27","2018-10-30","401","Fan Room"),
("54","201800000004","2018-10-01","2018-10-28","2018-10-30","401","Fan Room"),
("55","201800000004","2018-10-01","2018-10-29","2018-10-30","401","Fan Room"),
("56","201800000004","2018-10-01","2018-10-30","2018-10-30","401","Fan Room"),
("57","201800000004","2018-10-01","2018-10-03","2018-10-30","401","Fan Room"),
("58","201800000004","2018-10-01","2018-10-04","2018-10-30","401","Fan Room"),
("59","201800000004","2018-10-01","2018-10-05","2018-10-30","401","Fan Room"),
("60","201800000004","2018-10-01","2018-10-06","2018-10-30","401","Fan Room"),
("61","201800000004","2018-10-01","2018-10-07","2018-10-30","401","Fan Room"),
("62","201800000004","2018-10-01","2018-10-08","2018-10-30","401","Fan Room"),
("63","201800000004","2018-10-01","2018-10-09","2018-10-30","401","Fan Room"),
("64","201800000004","2018-10-01","2018-10-10","2018-10-30","401","Fan Room"),
("65","201800000004","2018-10-01","2018-10-11","2018-10-30","401","Fan Room"),
("66","201800000004","2018-10-01","2018-10-12","2018-10-30","401","Fan Room"),
("67","201800000004","2018-10-01","2018-10-13","2018-10-30","401","Fan Room"),
("68","201800000004","2018-10-01","2018-10-14","2018-10-30","401","Fan Room"),
("69","201800000004","2018-10-01","2018-10-15","2018-10-30","401","Fan Room"),
("70","201800000004","2018-10-01","2018-10-16","2018-10-30","401","Fan Room"),
("71","201800000004","2018-10-01","2018-10-17","2018-10-30","401","Fan Room"),
("72","201800000004","2018-10-01","2018-10-18","2018-10-30","401","Fan Room"),
("73","201800000004","2018-10-01","2018-10-19","2018-10-30","401","Fan Room"),
("74","201800000004","2018-10-01","2018-10-20","2018-10-30","401","Fan Room"),
("75","201800000004","2018-10-01","2018-10-21","2018-10-30","401","Fan Room"),
("76","201800000004","2018-10-01","2018-10-22","2018-10-30","401","Fan Room"),
("77","201800000004","2018-10-01","2018-10-23","2018-10-30","401","Fan Room"),
("78","201800000004","2018-10-01","2018-10-24","2018-10-30","401","Fan Room"),
("79","201800000004","2018-10-01","2018-10-25","2018-10-30","401","Fan Room"),
("80","201800000004","2018-10-01","2018-10-26","2018-10-30","401","Fan Room"),
("81","201800000004","2018-10-01","2018-10-27","2018-10-30","401","Fan Room"),
("82","201800000004","2018-10-01","2018-10-28","2018-10-30","401","Fan Room"),
("83","201800000004","2018-10-01","2018-10-29","2018-10-30","401","Fan Room"),
("84","201800000004","2018-10-01","2018-10-30","2018-10-30","401","Fan Room"),
("85","201800000004","2018-10-01","2018-10-03","2018-10-30","401","Fan Room"),
("86","201800000004","2018-10-01","2018-10-04","2018-10-30","401","Fan Room"),
("87","201800000004","2018-10-01","2018-10-05","2018-10-30","401","Fan Room"),
("88","201800000004","2018-10-01","2018-10-06","2018-10-30","401","Fan Room"),
("89","201800000004","2018-10-01","2018-10-07","2018-10-30","401","Fan Room"),
("90","201800000004","2018-10-01","2018-10-08","2018-10-30","401","Fan Room"),
("91","201800000004","2018-10-01","2018-10-09","2018-10-30","401","Fan Room"),
("92","201800000004","2018-10-01","2018-10-10","2018-10-30","401","Fan Room"),
("93","201800000004","2018-10-01","2018-10-11","2018-10-30","401","Fan Room"),
("94","201800000004","2018-10-01","2018-10-12","2018-10-30","401","Fan Room"),
("95","201800000004","2018-10-01","2018-10-13","2018-10-30","401","Fan Room"),
("96","201800000004","2018-10-01","2018-10-14","2018-10-30","401","Fan Room"),
("97","201800000004","2018-10-01","2018-10-15","2018-10-30","401","Fan Room"),
("98","201800000004","2018-10-01","2018-10-16","2018-10-30","401","Fan Room"),
("99","201800000004","2018-10-01","2018-10-17","2018-10-30","401","Fan Room"),
("100","201800000004","2018-10-01","2018-10-18","2018-10-30","401","Fan Room");
INSERT INTO reservedate VALUES
("101","201800000004","2018-10-01","2018-10-19","2018-10-30","401","Fan Room"),
("102","201800000004","2018-10-01","2018-10-20","2018-10-30","401","Fan Room"),
("103","201800000004","2018-10-01","2018-10-21","2018-10-30","401","Fan Room"),
("104","201800000004","2018-10-01","2018-10-22","2018-10-30","401","Fan Room"),
("105","201800000004","2018-10-01","2018-10-23","2018-10-30","401","Fan Room"),
("106","201800000004","2018-10-01","2018-10-24","2018-10-30","401","Fan Room"),
("107","201800000004","2018-10-01","2018-10-25","2018-10-30","401","Fan Room"),
("108","201800000004","2018-10-01","2018-10-26","2018-10-30","401","Fan Room"),
("109","201800000004","2018-10-01","2018-10-27","2018-10-30","401","Fan Room"),
("110","201800000004","2018-10-01","2018-10-28","2018-10-30","401","Fan Room"),
("111","201800000004","2018-10-01","2018-10-29","2018-10-30","401","Fan Room"),
("112","201800000004","2018-10-01","2018-10-30","2018-10-30","401","Fan Room"),
("113","201800000004","2018-10-01","2018-10-03","2018-10-30","401","Fan Room"),
("114","201800000004","2018-10-01","2018-10-04","2018-10-30","401","Fan Room"),
("115","201800000004","2018-10-01","2018-10-05","2018-10-30","401","Fan Room"),
("116","201800000004","2018-10-01","2018-10-06","2018-10-30","401","Fan Room"),
("117","201800000004","2018-10-01","2018-10-07","2018-10-30","401","Fan Room"),
("118","201800000004","2018-10-01","2018-10-08","2018-10-30","401","Fan Room"),
("119","201800000004","2018-10-01","2018-10-09","2018-10-30","401","Fan Room"),
("120","201800000004","2018-10-01","2018-10-10","2018-10-30","401","Fan Room"),
("121","201800000004","2018-10-01","2018-10-11","2018-10-30","401","Fan Room"),
("122","201800000004","2018-10-01","2018-10-12","2018-10-30","401","Fan Room"),
("123","201800000004","2018-10-01","2018-10-13","2018-10-30","401","Fan Room"),
("124","201800000004","2018-10-01","2018-10-14","2018-10-30","401","Fan Room"),
("125","201800000004","2018-10-01","2018-10-15","2018-10-30","401","Fan Room"),
("126","201800000004","2018-10-01","2018-10-16","2018-10-30","401","Fan Room"),
("127","201800000004","2018-10-01","2018-10-17","2018-10-30","401","Fan Room"),
("128","201800000004","2018-10-01","2018-10-18","2018-10-30","401","Fan Room"),
("129","201800000004","2018-10-01","2018-10-19","2018-10-30","401","Fan Room"),
("130","201800000004","2018-10-01","2018-10-20","2018-10-30","401","Fan Room"),
("131","201800000004","2018-10-01","2018-10-21","2018-10-30","401","Fan Room"),
("132","201800000004","2018-10-01","2018-10-22","2018-10-30","401","Fan Room"),
("133","201800000004","2018-10-01","2018-10-23","2018-10-30","401","Fan Room"),
("134","201800000004","2018-10-01","2018-10-24","2018-10-30","401","Fan Room"),
("135","201800000004","2018-10-01","2018-10-25","2018-10-30","401","Fan Room"),
("136","201800000004","2018-10-01","2018-10-26","2018-10-30","401","Fan Room"),
("137","201800000004","2018-10-01","2018-10-27","2018-10-30","401","Fan Room"),
("138","201800000004","2018-10-01","2018-10-28","2018-10-30","401","Fan Room"),
("139","201800000004","2018-10-01","2018-10-29","2018-10-30","401","Fan Room"),
("140","201800000004","2018-10-01","2018-10-30","2018-10-30","401","Fan Room"),
("141","201800000005","2018-10-01","2018-10-02","2018-10-29","201","Deluxe Room"),
("142","201800000005","2018-10-01","2018-10-03","2018-10-29","201","Deluxe Room"),
("143","201800000005","2018-10-01","2018-10-04","2018-10-29","201","Deluxe Room"),
("144","201800000005","2018-10-01","2018-10-05","2018-10-29","201","Deluxe Room"),
("145","201800000005","2018-10-01","2018-10-06","2018-10-29","201","Deluxe Room"),
("146","201800000005","2018-10-01","2018-10-07","2018-10-29","201","Deluxe Room"),
("147","201800000005","2018-10-01","2018-10-08","2018-10-29","201","Deluxe Room"),
("148","201800000005","2018-10-01","2018-10-09","2018-10-29","201","Deluxe Room"),
("149","201800000005","2018-10-01","2018-10-10","2018-10-29","201","Deluxe Room"),
("150","201800000005","2018-10-01","2018-10-11","2018-10-29","201","Deluxe Room"),
("151","201800000005","2018-10-01","2018-10-12","2018-10-29","201","Deluxe Room"),
("152","201800000005","2018-10-01","2018-10-13","2018-10-29","201","Deluxe Room"),
("153","201800000005","2018-10-01","2018-10-14","2018-10-29","201","Deluxe Room"),
("154","201800000005","2018-10-01","2018-10-15","2018-10-29","201","Deluxe Room"),
("155","201800000005","2018-10-01","2018-10-16","2018-10-29","201","Deluxe Room"),
("156","201800000005","2018-10-01","2018-10-17","2018-10-29","201","Deluxe Room"),
("157","201800000005","2018-10-01","2018-10-18","2018-10-29","201","Deluxe Room"),
("158","201800000005","2018-10-01","2018-10-19","2018-10-29","201","Deluxe Room"),
("159","201800000005","2018-10-01","2018-10-20","2018-10-29","201","Deluxe Room"),
("160","201800000005","2018-10-01","2018-10-21","2018-10-29","201","Deluxe Room"),
("161","201800000005","2018-10-01","2018-10-22","2018-10-29","201","Deluxe Room"),
("162","201800000005","2018-10-01","2018-10-23","2018-10-29","201","Deluxe Room"),
("163","201800000005","2018-10-01","2018-10-24","2018-10-29","201","Deluxe Room"),
("164","201800000005","2018-10-01","2018-10-25","2018-10-29","201","Deluxe Room"),
("165","201800000005","2018-10-01","2018-10-26","2018-10-29","201","Deluxe Room"),
("166","201800000005","2018-10-01","2018-10-27","2018-10-29","201","Deluxe Room"),
("167","201800000005","2018-10-01","2018-10-28","2018-10-29","201","Deluxe Room"),
("168","201800000005","2018-10-01","2018-10-29","2018-10-29","201","Deluxe Room"),
("169","201800000006","2018-10-01","2018-10-03","2018-10-30","202","Deluxe Room"),
("170","201800000006","2018-10-01","2018-10-04","2018-10-30","202","Deluxe Room"),
("171","201800000006","2018-10-01","2018-10-05","2018-10-30","202","Deluxe Room"),
("172","201800000006","2018-10-01","2018-10-06","2018-10-30","202","Deluxe Room"),
("173","201800000006","2018-10-01","2018-10-07","2018-10-30","202","Deluxe Room"),
("174","201800000006","2018-10-01","2018-10-08","2018-10-30","202","Deluxe Room"),
("175","201800000006","2018-10-01","2018-10-09","2018-10-30","202","Deluxe Room"),
("176","201800000006","2018-10-01","2018-10-10","2018-10-30","202","Deluxe Room"),
("177","201800000006","2018-10-01","2018-10-11","2018-10-30","202","Deluxe Room"),
("178","201800000006","2018-10-01","2018-10-12","2018-10-30","202","Deluxe Room"),
("179","201800000006","2018-10-01","2018-10-13","2018-10-30","202","Deluxe Room"),
("180","201800000006","2018-10-01","2018-10-14","2018-10-30","202","Deluxe Room"),
("181","201800000006","2018-10-01","2018-10-15","2018-10-30","202","Deluxe Room"),
("182","201800000006","2018-10-01","2018-10-16","2018-10-30","202","Deluxe Room"),
("183","201800000006","2018-10-01","2018-10-17","2018-10-30","202","Deluxe Room"),
("184","201800000006","2018-10-01","2018-10-18","2018-10-30","202","Deluxe Room"),
("185","201800000006","2018-10-01","2018-10-19","2018-10-30","202","Deluxe Room"),
("186","201800000006","2018-10-01","2018-10-20","2018-10-30","202","Deluxe Room"),
("187","201800000006","2018-10-01","2018-10-21","2018-10-30","202","Deluxe Room"),
("188","201800000006","2018-10-01","2018-10-22","2018-10-30","202","Deluxe Room"),
("189","201800000006","2018-10-01","2018-10-23","2018-10-30","202","Deluxe Room"),
("190","201800000006","2018-10-01","2018-10-24","2018-10-30","202","Deluxe Room"),
("191","201800000006","2018-10-01","2018-10-25","2018-10-30","202","Deluxe Room"),
("192","201800000006","2018-10-01","2018-10-26","2018-10-30","202","Deluxe Room"),
("193","201800000006","2018-10-01","2018-10-27","2018-10-30","202","Deluxe Room"),
("194","201800000006","2018-10-01","2018-10-28","2018-10-30","202","Deluxe Room"),
("195","201800000006","2018-10-01","2018-10-29","2018-10-30","202","Deluxe Room"),
("196","201800000006","2018-10-01","2018-10-30","2018-10-30","202","Deluxe Room"),
("197","201800000008","2018-10-01","2018-11-16","2018-11-22","201","Deluxe Room"),
("198","201800000008","2018-10-01","2018-11-17","2018-11-22","201","Deluxe Room"),
("199","201800000008","2018-10-01","2018-11-18","2018-11-22","201","Deluxe Room"),
("200","201800000008","2018-10-01","2018-11-19","2018-11-22","201","Deluxe Room");
INSERT INTO reservedate VALUES
("201","201800000008","2018-10-01","2018-11-20","2018-11-22","201","Deluxe Room"),
("202","201800000008","2018-10-01","2018-11-21","2018-11-22","201","Deluxe Room"),
("203","201800000008","2018-10-01","2018-11-22","2018-11-22","201","Deluxe Room"),
("204","201800000009","2018-10-01","2018-11-22","2018-11-27","202","Deluxe Room"),
("205","201800000009","2018-10-01","2018-11-23","2018-11-27","202","Deluxe Room"),
("206","201800000009","2018-10-01","2018-11-24","2018-11-27","202","Deluxe Room"),
("207","201800000009","2018-10-01","2018-11-25","2018-11-27","202","Deluxe Room"),
("208","201800000009","2018-10-01","2018-11-26","2018-11-27","202","Deluxe Room"),
("209","201800000009","2018-10-01","2018-11-27","2018-11-27","202","Deluxe Room");




CREATE TABLE `roomimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` varchar(55) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


INSERT INTO roomimage VALUES
("6","1","aw.jpg"),
("7","2","fanroom.jpg");




CREATE TABLE `roominformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` varchar(55) NOT NULL,
  `RoomNo` int(11) NOT NULL,
  `RoomName` varchar(55) NOT NULL,
  `RoomType` varchar(55) NOT NULL,
  `RoomDescription` varchar(300) NOT NULL,
  `RoomPrice` double NOT NULL,
  `RoomAvailability` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


INSERT INTO roominformation VALUES
("6","1","201","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("7","2","401","Fan Room","Fan Room","The room consists of Electric fan, Queen size bed, and Toiletries. <br><br>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","900","Available"),
("8","1","202","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available");




CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(55) NOT NULL,
  `deptid` varchar(55) NOT NULL,
  `positionid` varchar(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dateadded` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("2","2","Christian Carl Dela Cruz","admin","tvEXrJBUo5CeG6VYXQ0V/A==","admin@gmail.com","imus cavite","0000-00-00","male","","","","2018-05-04"),
("3","","Jacky Dela Cueva","jacky","tvEXrJBUo5CeG6VYXQ0V/A==","jackydelacueva3@gmail.com","291 Alapan","0000-00-00","","","","","0000-00-00");


