-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 05:07 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(23, 'Hall', 'hall.jpg', 'Second'),
(24, 'Deluxe Room', 'deluxe1.jpg', 'Second');

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
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`RowID`, `FirstName`, `LastName`, `ContactNo`, `Address`, `Adult`, `Child`, `days`, `ReservationDate`, `CheckinDate`, `CheckoutDate`, `CheckinTime`, `CheckoutTime`, `RoomType`, `RoomNo`, `ModeOfPayment`, `DownPayment`, `TotalAmount`, `Balance`, `Status`, `Email`) VALUES
(18, 'mark angelo', 'guanez', '09351254152', 'bacoor cavite', 2, 0, 5, '2018-07-18', '2018-07-25', '2018-07-30', '19:47:56', '19:47:56', 'Deluxe Room', '7', 'Pay in Bank', 1000, 7500, 6500, 'Approved', 'recillagimson@gmail.com'),
(19, 'mark angelo', 'guanez', '09351352412', 'bacoor cavite', 1, 0, 3, '2018-07-18', '2018-08-01', '2018-08-04', '20:38:14', '20:38:14', 'Deluxe Room', '8', 'Pay in Bank', 0, 4500, 0, 'Pending', 'recillagimson@gmail.com'),
(20, 'mark angelo', 'guanez', '0942002', 'bacoor cavite', 6, 0, -29, '2018-07-18', '2018-07-30', '2018-08-01', '20:46:54', '20:46:54', 'Fan Room', '3', 'Pay in Bank', 0, -26100, 0, 'Pending', 'recillagimson@gmail.com'),
(21, 'mark angelo', 'guanez', '09351254152', 'bacoor cavite', 1, 0, 2, '2018-07-18', '2018-07-29', '2018-07-31', '20:48:10', '20:48:10', 'Deluxe Room', '9', 'Pay in Bank', 0, 3000, 0, 'Pending', 'recillagimson@gmail.com'),
(22, 'mark angelo', 'guanez', '09512542012', 'bacoor cavite', 1, 0, 1, '2018-07-18', '2018-07-21', '2018-07-22', '20:50:17', '20:50:17', 'Deluxe Room', '10', 'Pay in Bank', 0, 1500, 0, 'Pending', 'recillagimson@gmail.com'),
(23, 'mark angelo', 'guanez', '09512542012', 'bacoor cavite', 1, 0, 1, '2018-07-18', '2018-07-21', '2018-07-22', '20:50:19', '20:50:19', 'Deluxe Room', '10', 'Pay in Bank', 0, 1500, 0, 'Pending', 'recillagimson@gmail.com'),
(24, 'Gimson', 'Recilla', '09351254120', 'California', 6, 0, 6, '2018-07-18', '2018-07-22', '2018-07-28', '20:51:34', '20:51:34', 'Deluxe Room', '11', 'Pay in Bank', 400, 9000, 8600, 'Approved', 'recillagimson@gmail.com'),
(25, 'Gimson', 'Recilla', '09168585045', 'Imus Cavite', 1, 0, 4, '2018-07-25', '2018-07-26', '2018-07-30', '21:37:39', '21:37:39', 'Fan Room', '1', 'Pay in Bank', 2344, 3600, 1256, 'Approved', 'recillagimson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `roomimage`
--

CREATE TABLE `roomimage` (
  `id` int(11) NOT NULL,
  `RoomID` varchar(55) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomimage`
--

INSERT INTO `roomimage` (`id`, `RoomID`, `filename`) VALUES
(5, 'A1', 'ac1.jpg'),
(6, 'D2', 'deluxe1.jpg');

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

--
-- Dumping data for table `roominformation`
--

INSERT INTO `roominformation` (`id`, `RoomID`, `RoomNo`, `RoomName`, `RoomType`, `RoomDescription`, `RoomPrice`, `RoomAvailability`) VALUES
(19, 'A1', 1, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Not Available'),
(20, 'A1', 2, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Available'),
(21, 'A1', 3, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Not Available'),
(22, 'A1', 4, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Available'),
(23, 'A1', 5, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Available'),
(24, 'A1', 6, 'Fan Room', 'Fan Room', 'FAAAAAAAAAAAN ROOOOOOOOOOOOOM', 900, 'Available'),
(25, 'D2', 7, 'Deluxe Room', 'Deluxe Room', 'Deluxe ROOOOOOOOOOOOOM', 1500, 'Not Available'),
(26, 'D2', 8, 'Deluxe Room', 'Deluxe Room', 'This room is deluxe ROOOOOOOOOOOOOM', 1500, 'Not Available'),
(27, 'D2', 9, 'Deluxe Room', 'Deluxe Room', 'deluxe room', 1500, 'Not Available'),
(28, 'D2', 10, 'Deluxe Room', 'Deluxe Room', 'room is deluxr', 1500, 'Not Available'),
(29, 'D2', 11, 'Deluxe Room', 'Deluxe Room', 'deluzx ', 1500, 'Not Available'),
(30, 'D2', 12, 'Deluxe Room', 'Deluxe Room', 'sddasd', 1500, 'Available');

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
(1, '1', 'Joean Diomano', 'Joean', 'aOXFEFrblQEyXFRqqIIeIw==', '', '', '0000-00-00', '', '', '', '', '0000-00-00'),
(2, '2', 'gimson', 'admin', 'tvEXrJBUo5CeG6VYXQ0V/A==', 'admin@gmail.com', 'imus cavite', '0000-00-00', 'male', '', '', '', '2018-05-04');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `bankinfo`
--
ALTER TABLE `bankinfo`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roomimage`
--
ALTER TABLE `roomimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roominformation`
--
ALTER TABLE `roominformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
