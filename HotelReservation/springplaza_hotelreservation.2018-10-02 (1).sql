

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `Description` varchar(1055) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO about VALUES
("1","sp1.jpg","ahm");




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
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=latin1;


INSERT INTO audit VALUES
("336","","Add Reservation: 201800000002","2018-10-02","12:31:15"),
("337","Christian Carl Dela Cruz","Approve Reservation: 201800000002","2018-10-02","12:32:25"),
("338","","Add Reservation: 201800000003","2018-10-02","12:34:22"),
("339","Christian Carl Dela Cruz","Checkin: 201800000003","2018-10-02","12:35:25"),
("340","Christian Carl Dela Cruz","Checkout: 201800000001","2018-10-02","12:37:04"),
("341","Christian Carl Dela Cruz","Add image in carousel: sp4.jpg","2018-10-02","12:38:29"),
("342","Christian Carl Dela Cruz","Add image gallery: ","2018-10-02","12:39:32"),
("343","Christian Carl Dela Cruz","Update About: ","2018-10-02","12:39:59"),
("344","Christian Carl Dela Cruz","Update About: ","2018-10-02","12:40:20"),
("345","Christian Carl Dela Cruz","Add Room: 206","2018-10-02","12:40:52"),
("346","Christian Carl Dela Cruz","Update Room: 1","2018-10-02","12:40:57"),
("347","Christian Carl Dela Cruz","Add Floor: Rooftop","2018-10-02","12:41:10"),
("348","Christian Carl Dela Cruz","Add user: mam","2018-10-02","12:41:50"),
("349","","Add Reservation: 201800000004","2018-10-02","12:44:08"),
("350","","Add Reservation: 201800000005","2018-10-02","12:44:58"),
("351","","Add Reservation: 201800000006","2018-10-02","12:45:35"),
("352","Christian Carl Dela Cruz","Approve Reservation: 201800000006","2018-10-02","12:57:56");




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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO carousel VALUES
("3","sp.jpg","Deluxe"),
("6","sp2.jpg",""),
("7","sp4.jpg","");




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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO floors VALUES
("3","Deluxe Room"),
("4","Fan Room"),
("5","Function Hall"),
("7","Rooftop");




CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ImageName` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Floor` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;


INSERT INTO gallery VALUES
("27","","P_20180815_165156.jpg","Deluxe Room"),
("28","","P_20180815_165213.jpg","Deluxe Room"),
("29","","P_20180815_165229.jpg","Deluxe Room"),
("33","","sp6.jpg","Function Hall"),
("34","","sp4.jpg","Function Hall"),
("35","","sp7.jpg","Function Hall"),
("36","","ac1.jpg","Fan Room"),
("37","","lanay.jpg","Fan Room"),
("39","","cafe.jpg","Fan Room"),
("40","","aw.jpg","Deluxe Room");




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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;


INSERT INTO reservations VALUES
("51","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-02","12:22:11","12:22:11","Deluxe Room","201","Pay in Bank","1500","3000","0","Approved","dianebhe09@gmail.com","3000","201800000001","checkout"),
("52","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:31:15","12:31:15","Deluxe Room","202","Pay in Bank","3000","3000","0","Approved","dianebhe09@gmail.com","3000","201800000002",""),
("53","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:33:35","12:33:35","Deluxe Room","203","Paypal","1500","3000","0","Approved","dianebhe09@gmail.com","3000","201800000003","Checkin"),
("54","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","17808","2018-10-02","1970-01-01","2018-10-04","12:44:08","12:44:08","Deluxe Room","204","Pay in Bank","0","26712000","26712000","Pending","dianebhe09@gmail.com","0","201800000004",""),
("55","Rachel","Dela Cueva","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:44:58","12:44:58","Deluxe Room","205","Pay in Bank","0","3000","3000","Pending","dianebhe09@gmail.com","0","201800000005",""),
("56","Jacky","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:45:35","12:45:35","Deluxe Room","206","Pay in Bank","3000","3000","0","Approved","dianebhe09@gmail.com","3000","201800000006","");




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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;


INSERT INTO reservations_temp VALUES
("50","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:22:11","12:22:11","Deluxe Room","201","Pay in Bank","0","3000","3000","Pending","dianebhe09@gmail.com","0","201800000001"),
("51","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:31:15","12:31:15","Deluxe Room","202","Pay in Bank","0","3000","3000","Pending","dianebhe09@gmail.com","0","201800000002"),
("52","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:33:35","12:33:35","Deluxe Room","203","Paypal","1500","3000","1500","Approved","dianebhe09@gmail.com","1500","201800000003"),
("53","Christian Carl","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","17808","2018-10-02","1970-01-01","2018-10-04","12:44:08","12:44:08","Deluxe Room","204","Pay in Bank","0","26712000","26712000","Pending","dianebhe09@gmail.com","0","201800000004"),
("54","Rachel","Dela Cueva","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:44:58","12:44:58","Deluxe Room","205","Pay in Bank","0","3000","3000","Pending","dianebhe09@gmail.com","0","201800000005"),
("55","Jacky","Dela Cruz","09750991500","291 Alapan 1-B City of Imus, Cavite","1","0","2","2018-10-02","2018-10-02","2018-10-04","12:45:35","12:45:35","Deluxe Room","206","Pay in Bank","0","3000","3000","Pending","dianebhe09@gmail.com","0","201800000006");




CREATE TABLE `reservedate` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `reservationID` varchar(255) NOT NULL,
  `ReservationDate` date NOT NULL,
  `Checkin` varchar(255) NOT NULL,
  `Checkout` date NOT NULL,
  `Roomno` int(11) NOT NULL,
  `Roomtype` varchar(255) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;


INSERT INTO reservedate VALUES
("256","201800000001","2018-10-02","2018-10-02","2018-10-04","201","Deluxe Room"),
("257","201800000001","2018-10-02","2018-10-03","2018-10-04","201","Deluxe Room"),
("258","201800000001","2018-10-02","2018-10-04","2018-10-04","201","Deluxe Room"),
("259","201800000002","2018-10-02","2018-10-02","2018-10-04","202","Deluxe Room"),
("260","201800000002","2018-10-02","2018-10-03","2018-10-04","202","Deluxe Room"),
("261","201800000002","2018-10-02","2018-10-04","2018-10-04","202","Deluxe Room"),
("262","201800000003","2018-10-02","2018-10-02","2018-10-04","203","Deluxe Room"),
("263","201800000003","2018-10-02","2018-10-03","2018-10-04","203","Deluxe Room"),
("264","201800000003","2018-10-02","2018-10-04","2018-10-04","203","Deluxe Room"),
("265","201800000004","2018-10-02","1970-01-01","2018-10-04","204","Deluxe Room"),
("266","201800000004","2018-10-02","1970-01-02","2018-10-04","204","Deluxe Room"),
("267","201800000004","2018-10-02","1970-01-03","2018-10-04","204","Deluxe Room"),
("268","201800000004","2018-10-02","1970-01-04","2018-10-04","204","Deluxe Room"),
("269","201800000004","2018-10-02","1970-01-05","2018-10-04","204","Deluxe Room"),
("270","201800000004","2018-10-02","1970-01-06","2018-10-04","204","Deluxe Room"),
("271","201800000004","2018-10-02","1970-01-07","2018-10-04","204","Deluxe Room"),
("272","201800000004","2018-10-02","1970-01-08","2018-10-04","204","Deluxe Room"),
("273","201800000004","2018-10-02","1970-01-09","2018-10-04","204","Deluxe Room"),
("274","201800000004","2018-10-02","1970-01-10","2018-10-04","204","Deluxe Room"),
("275","201800000004","2018-10-02","1970-01-11","2018-10-04","204","Deluxe Room"),
("276","201800000004","2018-10-02","1970-01-12","2018-10-04","204","Deluxe Room"),
("277","201800000004","2018-10-02","1970-01-13","2018-10-04","204","Deluxe Room"),
("278","201800000004","2018-10-02","1970-01-14","2018-10-04","204","Deluxe Room"),
("279","201800000004","2018-10-02","1970-01-15","2018-10-04","204","Deluxe Room"),
("280","201800000004","2018-10-02","1970-01-16","2018-10-04","204","Deluxe Room"),
("281","201800000004","2018-10-02","1970-01-17","2018-10-04","204","Deluxe Room"),
("282","201800000004","2018-10-02","1970-01-18","2018-10-04","204","Deluxe Room"),
("283","201800000004","2018-10-02","1970-01-19","2018-10-04","204","Deluxe Room"),
("284","201800000004","2018-10-02","1970-01-20","2018-10-04","204","Deluxe Room"),
("285","201800000004","2018-10-02","1970-01-21","2018-10-04","204","Deluxe Room"),
("286","201800000004","2018-10-02","1970-01-22","2018-10-04","204","Deluxe Room"),
("287","201800000004","2018-10-02","1970-01-23","2018-10-04","204","Deluxe Room"),
("288","201800000004","2018-10-02","1970-01-24","2018-10-04","204","Deluxe Room"),
("289","201800000004","2018-10-02","1970-01-25","2018-10-04","204","Deluxe Room"),
("290","201800000004","2018-10-02","1970-01-26","2018-10-04","204","Deluxe Room"),
("291","201800000004","2018-10-02","1970-01-27","2018-10-04","204","Deluxe Room"),
("292","201800000004","2018-10-02","1970-01-28","2018-10-04","204","Deluxe Room"),
("293","201800000004","2018-10-02","1970-01-29","2018-10-04","204","Deluxe Room"),
("294","201800000004","2018-10-02","1970-01-30","2018-10-04","204","Deluxe Room"),
("295","201800000004","2018-10-02","1970-01-31","2018-10-04","204","Deluxe Room"),
("296","201800000005","2018-10-02","2018-10-02","2018-10-04","205","Deluxe Room"),
("297","201800000005","2018-10-02","2018-10-03","2018-10-04","205","Deluxe Room"),
("298","201800000005","2018-10-02","2018-10-04","2018-10-04","205","Deluxe Room"),
("299","201800000006","2018-10-02","2018-10-02","2018-10-04","206","Deluxe Room"),
("300","201800000006","2018-10-02","2018-10-03","2018-10-04","206","Deluxe Room"),
("301","201800000006","2018-10-02","2018-10-04","2018-10-04","206","Deluxe Room");




CREATE TABLE `roomimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` varchar(55) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


INSERT INTO roomimage VALUES
("6","1","aw.jpg"),
("7","2","fanroom.jpg"),
("9","1",""),
("10","1",""),
("11","1",""),
("12","1",""),
("13","1",""),
("14","2",""),
("15","1","");




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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


INSERT INTO roominformation VALUES
("6","1","201","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("7","2","401","Fan Room","Fan Room","The room consists of Electric fan, Queen size bed, and Toiletries. <br><br>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","900","Available"),
("8","1","202","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("10","1","203","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("11","1","204","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("12","1","205","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("13","1","206","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available"),
("14","2","402","Fan Room","Fan Room","The room consists of Electric fan, Queen size bed, and Toiletries. <br><br>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","900","Available"),
("15","1","206","Deluxe Room","Deluxe Room","The room consists of Airconditioned, Queen size bed, Television and Toiletries <br><BR>\nROOM ACCOMODATION <br>\nCHECK-IN TIME: 2:00PM <br>\nCHECK-OUT TIME: 12:00NN <br> <br>\nADDITIONAL FEE:\nEXTRA BED with PERSON: 650.0 <BR> \nNotes: All Type of Rooms is good for two Persons.","1500","Available");




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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("2","2","Christian Carl Dela Cruz","admin","tvEXrJBUo5CeG6VYXQ0V/A==","admin@gmail.com","imus cavite","0000-00-00","male","","","","2018-05-04"),
("3","","Jacky Dela Cueva","jacky","tvEXrJBUo5CeG6VYXQ0V/A==","jackydelacueva3@gmail.com","291 Alapan","0000-00-00","","","","","0000-00-00"),
("4","","Jessa Mae Magbanua","jessa","jx+TSLCOLKKFeKaRXhhwDQ==","rachelannejunio2000@gmail.com","Dasma","0000-00-00","","","","","0000-00-00"),
("5","","Angelica Joyce Garcia","mam","afzzwMFyF2Tla6wVWpWrsA==","","291 Alapan 1-B City of Imus, Cavite","0000-00-00","","","","","0000-00-00");


