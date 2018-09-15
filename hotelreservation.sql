-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 09:12 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Description` varchar(1055) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `filename`, `Description`) VALUES
(1, 'about-img.jpg', 'The Spring Plaza Hotel is a budget hotel located in the developed city of Dasmarinas City, Cavite. Conveniently located away from the hustle and bustle of the city but close to everything. Only 15 minutes away from Tagaytay and within easy access to two of the cities leading department stores, this is the ideal choice for those wanting for a quiet and private retreat without breaking the bank.We present travellers clean and amazingly affordable rooms. Guests will enjoy the laid back and serene environment of our location.');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `Title` varchar(55) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `Title`, `Description`) VALUES
(1, '', ''),
(2, 'Hifi Sound System', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus.'),
(3, 'Ideal Location', 'Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus auctor fermentum in.'),
(4, 'Security Service', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `RowID` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `AuditDate` date NOT NULL,
  `AuditTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bankinfo`
--

CREATE TABLE `bankinfo` (
  `RowID` int(11) NOT NULL,
  `BankName` varchar(255) NOT NULL,
  `AccountName` varchar(255) NOT NULL,
  `AccountNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankinfo`
--

INSERT INTO `bankinfo` (`RowID`, `BankName`, `AccountName`, `AccountNumber`) VALUES
(1, 'BDO', 'hotelreservation', 124512520);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `ImageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `filename`, `ImageName`) VALUES
(1, 'spring.jpg', 'Slide1'),
(2, 'stair.jpg', 'Slide2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `TelNo` int(15) NOT NULL,
  `MobileNo` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Address`, `TelNo`, `MobileNo`) VALUES
(1, 'Sampaloc, Dasmarinas, Cavite 2', 7811542, 7811542);

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(11) NOT NULL,
  `floors` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floors`) VALUES
(1, 'Second'),
(2, 'Third');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `Floor` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `ImageName`, `filename`, `Floor`) VALUES
(21, 'Hallway', 'hallway.jpg', 'First'),
(22, 'Fan Room', 'ac1.jpg', 'First'),
(24, 'Deluxe Room', 'deluxe1.jpg', 'Third');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(6) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `RowID` int(11) NOT NULL,
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
  `CheckinStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations_temp`
--

CREATE TABLE `reservations_temp` (
  `RowID` int(11) NOT NULL,
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
  `ReservationID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservedate`
--

CREATE TABLE `reservedate` (
  `RowID` int(11) NOT NULL,
  `reservationID` varchar(255) NOT NULL,
  `ReservationDate` date NOT NULL,
  `Checkin` varchar(255) NOT NULL,
  `Checkout` date NOT NULL,
  `Roomno` int(11) NOT NULL,
  `Roomtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomimage`
--

CREATE TABLE `roomimage` (
  `id` int(11) NOT NULL,
  `RoomID` varchar(55) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roominformation`
--

CREATE TABLE `roominformation` (
  `id` int(11) NOT NULL,
  `RoomID` varchar(55) NOT NULL,
  `RoomNo` int(11) NOT NULL,
  `RoomName` varchar(55) NOT NULL,
  `RoomType` varchar(55) NOT NULL,
  `RoomDescription` varchar(255) NOT NULL,
  `RoomPrice` double NOT NULL,
  `RoomAvailability` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `dateadded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `name`, `username`, `password`, `email`, `address`, `birthday`, `gender`, `deptid`, `positionid`, `image`, `dateadded`) VALUES
(1, '1', 'Joean Diomano', 'Joean', 'aOXFEFrblQEyXFRqqIIeIw==', 'jo@email.com', 'asdasdasd', '0000-00-00', '', '', '', '', '0000-00-00'),
(2, '2', 'gimson', 'admin', 'tvEXrJBUo5CeG6VYXQ0V/A==', 'admin@gmail.com', 'imus cavite', '0000-00-00', 'male', '', '', '', '2018-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`RowID`);

--
-- Indexes for table `bankinfo`
--
ALTER TABLE `bankinfo`
  ADD PRIMARY KEY (`RowID`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`RowID`);

--
-- Indexes for table `reservations_temp`
--
ALTER TABLE `reservations_temp`
  ADD PRIMARY KEY (`RowID`);

--
-- Indexes for table `reservedate`
--
ALTER TABLE `reservedate`
  ADD PRIMARY KEY (`RowID`);

--
-- Indexes for table `roomimage`
--
ALTER TABLE `roomimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roominformation`
--
ALTER TABLE `roominformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bankinfo`
--
ALTER TABLE `bankinfo`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations_temp`
--
ALTER TABLE `reservations_temp`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservedate`
--
ALTER TABLE `reservedate`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomimage`
--
ALTER TABLE `roomimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roominformation`
--
ALTER TABLE `roominformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
