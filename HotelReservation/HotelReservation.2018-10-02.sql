

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `Description` varchar(1055) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO about VALUES
("1","about-img.jpg","The Spring Plaza Hotel is a budget hotel located in the developed city of Dasmarinas City, Cavite. Conveniently located away from the hustle and bustle of the city but close to everything. Only 15 minutes away from Tagaytay and within easy access to two of the cities leading department stores, this is the ideal choice for those wanting for a quiet and private retreat without breaking the bank.We present travellers clean and amazingly affordable rooms. Guests will enjoy the laid back and serene environment of our location.");




CREATE TABLE `amenities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(55) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO amenities VALUES
("1","",""),
("2","Hifi Sound System","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus."),
("3","Ideal Location","Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus auctor fermentum in."),
("4","Security Service","sd");




CREATE TABLE `audit` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `AuditDate` date NOT NULL,
  `AuditTime` time NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;


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
("17","gimson","Approve Reservation: 201800000002","2018-10-01","08:54:28"),
("18","gimson","Approve Reservation: 201800000002","2018-10-01","08:54:53");




CREATE TABLE `bankinfo` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `BankName` varchar(255) NOT NULL,
  `AccountName` varchar(255) NOT NULL,
  `AccountNumber` int(11) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO bankinfo VALUES
("1","BDO","hotelreservation","124512520");




CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO carousel VALUES
("1","spring.jpg","Slide1"),
("2","stair.jpg","Slide2");




CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL,
  `TelNo` int(15) NOT NULL,
  `MobileNo` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO contact VALUES
("1","Sampaloc, Dasmarinas, Cavite 2","7811542","7811542");




CREATE TABLE `floors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floors` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO floors VALUES
("1","Second"),
("2","Third");




CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ImageName` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Floor` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;


INSERT INTO gallery VALUES
("21","Hallway","hallway.jpg","First"),
("22","Fan Room","ac1.jpg","First"),
("24","Deluxe Room","deluxe1.jpg","Third");




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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO reservations VALUES
("1","Mark","Angelo","09168285045","Imus","1","0","1","2018-09-25","2018-09-25","2018-09-25","13:39:55","13:39:55","Deluxe","1","Pay in Bank","500","123","0","Approved","markangeloguanez@gmail.com","500","201800000001","Checkin"),
("2","Mark","Angelo","09168285045","Imus","1","0","1","2018-09-25","2018-09-25","2018-09-25","13:39:55","13:39:55","Fan Room","1","Pay in Bank","500","123","0","Approved","markangeloguanez@gmail.com","500","201800000001","Checkin"),
("3","Gimson","Recilla","09168285045","Imus","1","0","1","2018-09-25","2018-09-25","2018-09-25","13:39:55","13:39:55","Fan Room","3","Pay in Bank","3000","123","-2100","Approved","markangeloguanez@gmail.com","3000","201800000002","Checkin");




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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO reservations_temp VALUES
("1","Mark","Angelo","09168285045","Imus","1","0","1","2018-09-25","2018-09-25","2018-09-26","13:39:55","13:39:55","Deluxe","1","Pay in Bank","0","123","123","Pending","markangeloguanez@gmail.com","0","201800000001");




CREATE TABLE `reservedate` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `reservationID` varchar(255) NOT NULL,
  `ReservationDate` date NOT NULL,
  `Checkin` varchar(255) NOT NULL,
  `Checkout` date NOT NULL,
  `Roomno` int(11) NOT NULL,
  `Roomtype` varchar(255) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO reservedate VALUES
("1","201800000001","2018-09-25","2018-09-25","2018-09-25","0","deluxe"),
("2","201800000001","2018-09-25","2018-09-25","2018-09-26","1","Deluxe"),
("3","201800000001","2018-09-25","2018-09-26","2018-09-26","1","Deluxe");




CREATE TABLE `roomimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` varchar(55) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO roomimage VALUES
("1","12","Picture2.png"),
("2","12","E-commerce-banner-1400x466.jpg"),
("3","13",""),
("4","14",""),
("5","13","");




CREATE TABLE `roominformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RoomID` varchar(55) NOT NULL,
  `RoomNo` int(11) NOT NULL,
  `RoomName` varchar(55) NOT NULL,
  `RoomType` varchar(55) NOT NULL,
  `RoomDescription` varchar(255) NOT NULL,
  `RoomPrice` double NOT NULL,
  `RoomAvailability` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO roominformation VALUES
("1","12","0","asd","asd","asdasd","123","Available"),
("2","12","11","asd","asd","asdasd","123123","Available"),
("3","13","1","Deluxe","Deluxe","azsasd\n","123","Available"),
("4","14","123","Fan Room","Fan Room","asasd\n","2222","Available"),
("5","13","1","Deluxe","Deluxe","asdadasd","312","Available");




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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("1","1","Joean Diomano","Joean","aOXFEFrblQEyXFRqqIIeIw==","jo@email.com","asdasdasd","0000-00-00","","","","","0000-00-00"),
("2","2","gimson","admin","tvEXrJBUo5CeG6VYXQ0V/A==","admin@gmail.com","imus cavite","0000-00-00","male","","","","2018-05-04");


