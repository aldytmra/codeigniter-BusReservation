-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 06:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busres`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_bus`
--

CREATE TABLE `assign_bus` (
  `assign_bus_no` int(5) NOT NULL COMMENT 'this is primary key',
  `userName` varchar(10) NOT NULL COMMENT 'System User Name',
  `busNo` varchar(10) NOT NULL COMMENT 'Bus Route Number',
  `date` date NOT NULL COMMENT 'Route assing Date',
  `sql` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store who is assing Route for Bus';

--
-- Dumping data for table `assign_bus`
--

INSERT INTO `assign_bus` (`assign_bus_no`, `userName`, `busNo`, `date`, `sql`) VALUES
(9, 'Nevil', 'NB6079', '2014-05-22', 'I'),
(10, 'Nevil', 'ND2345', '2014-05-22', 'I'),
(11, 'Nevil', 'JD4530', '2014-05-22', 'I'),
(12, 'Nevil', 'NA6890', '2014-05-22', 'I'),
(13, 'Nevil', 'NB1290', '2014-05-22', 'I'),
(14, 'Nevil', 'NB1290', '2014-05-22', 'U'),
(15, 'Nevil', 'NB1290', '2014-05-22', 'D'),
(16, 'Nevil', 'qwer', '2014-09-24', 'I'),
(17, 'Nevil', 'qwe', '2014-09-24', 'U'),
(18, 'Nevil', 'qwe', '2014-09-24', 'U'),
(19, 'Nevil', 'qwe', '2014-09-24', 'U'),
(20, 'Nevil', 'qw', '2014-09-24', 'U'),
(21, 'Nevil', 'qw', '2014-09-24', 'U'),
(22, 'Nevil', 'qwe', '2014-09-24', 'U'),
(23, 'Nevil', 'qwe', '2014-10-01', 'D'),
(24, 'Nevil', 'JD4530', '2014-10-01', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `available_seat`
--

CREATE TABLE `available_seat` (
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number',
  `busNo` varchar(10) NOT NULL COMMENT 'SLTB Bus Number',
  `journeyNo` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL COMMENT 'Seat Status',
  `date` date NOT NULL COMMENT 'Status Date',
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is current Stauts a Bus Seat';

--
-- Dumping data for table `available_seat`
--

INSERT INTO `available_seat` (`seatNo`, `busNo`, `journeyNo`, `status`, `date`, `time`) VALUES
(1, 'NA6890', 'BCA057002', 'B', '2014-10-01', '16:12:46'),
(2, 'NA6890', 'BCA057002', 'B', '2014-10-01', '16:12:46'),
(3, 'NA6890', 'BCA057002', 'B', '2014-10-01', '16:12:46'),
(3, 'ND2345', 'BAC057001', 'B', '2014-10-11', '21:20:57'),
(4, 'ND2345', 'BAC057001', 'B', '2014-10-11', '14:35:25'),
(5, 'ND2345', 'BAC057001', 'B', '2014-10-11', '14:35:25'),
(7, 'ND2345', 'BAC057001', 'B', '2014-10-11', '09:25:32'),
(28, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(31, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:24:13'),
(34, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(34, 'NB6079', 'ACJ057001', 'P', '2018-12-23', '19:56:57'),
(35, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:24:13'),
(35, 'NB6079', 'ACJ057001', 'P', '2018-12-23', '19:56:57'),
(36, 'JD4530', 'ACA015001', 'B', '2014-10-01', '16:14:14'),
(36, 'JD4530', 'ACA015001', 'B', '2014-10-11', '09:28:08'),
(36, 'ND2345', 'BAC057001', 'B', '2014-10-07', '12:32:41'),
(36, 'ND2345', 'BAC057001', 'B', '2014-10-11', '09:27:11'),
(37, 'JD4530', 'ACA015001', 'B', '2014-10-01', '16:14:14'),
(37, 'JD4530', 'ACA015001', 'B', '2014-10-11', '09:28:13'),
(38, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(38, 'NA6890', 'BCA057002', 'B', '2018-12-24', '11:52:31'),
(38, 'NB6079', 'ACJ057001', 'P', '2018-12-23', '19:56:57'),
(38, 'ND2345', 'BAC057001', 'B', '2014-10-11', '21:17:50'),
(39, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:24:13'),
(39, 'NB6079', 'ACJ057001', 'P', '2018-12-23', '19:56:57'),
(39, 'ND2345', 'BAC057001', 'B', '2014-10-11', '21:17:50'),
(40, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(40, 'ND2345', 'BAC057001', 'B', '2014-10-11', '21:17:50'),
(42, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(42, 'NA6890', 'BCA057002', 'B', '2018-12-24', '11:52:31'),
(43, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:24:13'),
(44, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(45, 'NA6890', 'BCA057002', 'B', '2014-10-01', '16:11:47'),
(46, 'NA6890', 'BCA057002', 'B', '2014-10-01', '16:11:47'),
(46, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(48, 'NA6890', 'BCA057002', 'P', '2018-12-23', '19:20:36'),
(49, 'NA6890', 'BCA057002', 'B', '2014-10-07', '16:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `booker`
--

CREATE TABLE `booker` (
  `bookerNICNo` varchar(10) NOT NULL COMMENT 'Bus Booker NIC Number',
  `bookerName` varchar(20) NOT NULL COMMENT 'Booker Short Name',
  `bookerMNo` varchar(10) NOT NULL COMMENT 'Booker Mobile Number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Booker Data';

--
-- Dumping data for table `booker`
--

INSERT INTO `booker` (`bookerNICNo`, `bookerName`, `bookerMNo`) VALUES
('435672894v', 'kalam', '0112345678'),
('782423567v', 'kamal', '0784325678'),
('881239472v', 'saman', '0752234567'),
('881691035v', 'nevil', '0717226079'),
('881691036v', 'Ranathunge', '1234567890'),
('8923435638', 'sunil', '0213456789'),
('901234353v', 'saman', '0372345678'),
('903456721v', 'sanath', '0717226079'),
('987654325v', 'wimal', '0717226079'),
('wdadwa', 'dwadwa', 'dwadawdwa');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` varchar(25) NOT NULL COMMENT 'Bus Ticket Number',
  `bookerNICNo` varchar(10) NOT NULL COMMENT 'Bus Booker NIC Number',
  `busNo` varchar(10) NOT NULL COMMENT 'Bus Number',
  `journeyNo` varchar(10) NOT NULL,
  `no_of_seat` int(2) NOT NULL,
  `entryPointNo` int(2) NOT NULL,
  `ammount` float NOT NULL COMMENT 'Total Amount of Bus ticket',
  `date` date NOT NULL COMMENT 'Ticket receive Date',
  `payment_status` varchar(2) NOT NULL DEFAULT 'P',
  `s_bookin_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store Receive booking invoice';

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `bookerNICNo`, `busNo`, `journeyNo`, `no_of_seat`, `entryPointNo`, `ammount`, `date`, `payment_status`, `s_bookin_time`) VALUES
('JD4530ACA01500114100100', '881691035v', 'JD4530', 'ACA015001', 2, 1, 1800, '2014-10-01', 'Ok', '16:25:14'),
('JD4530ACA01500114101100', '881691035v', 'JD4530', 'ACA015001', 1, 8, 900, '2014-10-11', 'Ok', '09:39:13'),
('JD4530ACA01500114101101', '881691036v', 'JD4530', 'ACA015001', 1, 7, 900, '2014-10-11', 'Ok', '09:39:08'),
('NA6890BCA05700214100100', '881691035v', 'NA6890', 'BCA057002', 2, 15, 1500, '2014-10-01', 'Ok', '16:22:47'),
('NA6890BCA05700214100101', '881691036v', 'NA6890', 'BCA057002', 3, 14, 2250, '2014-10-01', 'Ok', '16:23:46'),
('NA6890BCA05700214100700', '881691035v', 'NA6890', 'BCA057002', 1, 15, 750, '2014-10-07', 'Ok', '16:30:04'),
('NA6890BCA05700218122400', 'wdadwa', 'NA6890', 'BCA057002', 2, 15, 1500, '2018-12-24', 'Ok', '12:03:31'),
('ND2345BAC05700114100701', '881691036v', 'ND2345', 'BAC057001', 1, 11, 750, '2014-10-07', 'Ok', '12:43:41'),
('ND2345BAC05700114101100', '881691036v', 'ND2345', 'BAC057001', 3, 1, 2250, '2014-10-11', 'Ok', '21:28:50'),
('ND2345BAC05700114101101', '881691035v', 'ND2345', 'BAC057001', 1, 9, 750, '2014-10-11', 'Ok', '21:31:57'),
('ND2345BAC05700114101102', '881691035v', 'ND2345', 'BAC057001', 1, 1, 750, '2014-10-11', 'Ok', '09:36:32'),
('ND2345BAC05700114101103', '881691036v', 'ND2345', 'BAC057001', 1, 1, 750, '2014-10-11', 'Ok', '09:38:11'),
('ND2345BAC05700114101104', '881691036v', 'ND2345', 'BAC057001', 2, 1, 1500, '2014-10-11', 'Ok', '14:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busNo` varchar(10) NOT NULL COMMENT 'Bus Number',
  `busModel` varchar(15) NOT NULL COMMENT 'Bus Model',
  `numberOfSeat` int(2) NOT NULL COMMENT 'Number Of Seat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Data';

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busNo`, `busModel`, `numberOfSeat`) VALUES
('JD4530', 'Harum Prima', 35),
('NA6890', 'Safari Dharma R', 35),
('NB6079', 'Pahala Kencana', 35),
('ND2345', 'Garuda Mas', 35),
('ND2347', 'Haryanto', 35);

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

CREATE TABLE `journey` (
  `journeyNo` varchar(10) NOT NULL,
  `routeNo` varchar(5) NOT NULL COMMENT 'Bus Route Number',
  `journeyFrom` varchar(30) NOT NULL COMMENT 'Bus Route Start Point',
  `journeyTo` varchar(30) NOT NULL COMMENT 'Bus Route End Point',
  `departureTime` time NOT NULL COMMENT 'Bus Departure Time',
  `arrivalTime` time NOT NULL COMMENT 'Bus Arrival Time',
  `price` float NOT NULL COMMENT 'Bus Ticket Price',
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Route Data';

--
-- Dumping data for table `journey`
--

INSERT INTO `journey` (`journeyNo`, `routeNo`, `journeyFrom`, `journeyTo`, `departureTime`, `arrivalTime`, `price`, `is_deleted`) VALUES
('AAC057001', '57', 'PuloGadung', 'Bandung(Leuwi Panjang)', '20:15:00', '01:00:00', 80000, 0),
('AAC057021', '57', 'PuloGadung', 'Bandung(Leuwi Panjang)', '14:10:00', '20:15:00', 80000, 0),
('AAC057034', '57', 'PuloGadung', 'Bandung(Leuwi Panjang)', '16:00:00', '23:00:00', 1300, 0),
('ACA015001', '15', 'PuloGadung', 'Cirebon (Harjamukti)', '14:10:00', '20:15:00', 900, 0),
('ACA057001', '57', 'PuloGadung', 'Tegal-Pekalongan', '06:15:00', '12:45:00', 750, 0),
('ACA057002', '57', 'PuloGadung', 'Semarang (Terboyo)', '02:05:00', '07:00:00', 750, 0),
('ACA057003', '57', 'PuloGadung', 'Kudus', '18:05:00', '23:30:00', 750, 0),
('ACJ057001', '57', 'PuloGadung', 'Pati', '20:00:00', '03:45:00', 1300, 0),
('BAC057001', '57', 'PuloGadung', 'Jepara', '23:55:00', '05:20:00', 750, 0),
('BCA015001', '15', 'PuloGadung', 'Purwodadi', '01:00:00', '06:00:00', 900, 0),
('BCA057001', '57', 'PuloGadung', 'Tuban', '14:15:00', '20:15:00', 750, 0),
('BCA057002', '57', 'PuloGadung', 'Cepu', '20:20:00', '24:00:00', 750, 0),
('BCA057003', '57', 'PuloGadung', 'Surabaya (Purabaya)', '22:15:00', '04:15:00', 750, 0),
('BCJ057001', '57', 'PuloGadung', 'Denpasar (Ubung)', '13:15:00', '20:20:00', 1300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `journey_for_bus`
--

CREATE TABLE `journey_for_bus` (
  `journey_for_bus_No` int(3) NOT NULL,
  `busNo` varchar(10) NOT NULL,
  `journeyNo` varchar(10) NOT NULL,
  `busModel` varchar(15) NOT NULL,
  `numberOfSeat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey_for_bus`
--

INSERT INTO `journey_for_bus` (`journey_for_bus_No`, `busNo`, `journeyNo`, `busModel`, `numberOfSeat`) VALUES
(30, 'NA6890', 'ACA057002', '', 0),
(31, 'NA6890', 'BCA057002', '', 0),
(32, 'JD4530', 'ACA015001', '', 0),
(33, 'JD4530', 'BCA015001', '', 0),
(34, 'NB6079', 'BCJ057001', '', 0),
(35, 'NB6079', 'ACJ057001', '', 0),
(36, 'ND2345', 'AAC057001', '', 0),
(37, 'ND2345', 'BAC057001', '', 0),
(38, 'ND2347', 'AAC057021', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `judul_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `judul_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Home', '#', 'fa fa-home', 0),
(2, 'Schedule', 'bus/schedule', 'fa fa-calendar', 0),
(3, 'My Ticket', 'booker/ticket', 'fa fa-ticket', 0),
(4, 'Bus Types', 'bus', 'fa fa-bus', 0),
(5, 'Change Password', 'dashboard/pass', 'fa fa-lock', 0),
(6, 'Logout', 'dashboard/logout', 'fa fa-sign-out', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menuadmin`
--

CREATE TABLE `menuadmin` (
  `id` int(11) NOT NULL,
  `judul_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuadmin`
--

INSERT INTO `menuadmin` (`id`, `judul_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Home', '#', 'fa fa-home', 0),
(2, 'Schedule', 'schedule', 'fa fa-calendar', 0),
(3, 'Report', 'report', 'fa fa-file', 0),
(4, 'Bus Types', 'bustype', 'fa fa-bus', 0),
(5, 'Change Password', 'dashboard/pass', 'fa fa-lock', 0),
(6, 'Logout', 'dashboard/logout', 'fa fa-sign-out', 0);

-- --------------------------------------------------------

--
-- Table structure for table `receive_ticke`
--

CREATE TABLE `receive_ticke` (
  `ticketNo` varchar(25) NOT NULL,
  `passengerName` varchar(25) NOT NULL COMMENT 'Passenger Name',
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number',
  `gender` varchar(1) NOT NULL COMMENT 'Passenger Gender',
  `bookingID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store booking data';

--
-- Dumping data for table `receive_ticke`
--

INSERT INTO `receive_ticke` (`ticketNo`, `passengerName`, `seatNo`, `gender`, `bookingID`) VALUES
('JD4530ACA01500114100136', 'Usre1', 36, 'M', 'JD4530ACA01500114100100'),
('JD4530ACA01500114100137', 'User2', 37, 'M', 'JD4530ACA01500114100100'),
('JD4530ACA01500114101136', 'User1', 36, 'M', 'JD4530ACA01500114101101'),
('JD4530ACA01500114101137', 'Usre1', 37, 'M', 'JD4530ACA01500114101100'),
('NA6890BCA0570021410011', 'user2', 1, 'F', 'NA6890BCA05700214100101'),
('NA6890BCA0570021410012', 'nevil', 2, 'M', 'NA6890BCA05700214100101'),
('NA6890BCA0570021410013', 'user3', 3, 'M', 'NA6890BCA05700214100101'),
('NA6890BCA05700214100145', 'nevil', 45, 'M', 'NA6890BCA05700214100100'),
('NA6890BCA05700214100146', 'user2', 46, 'M', 'NA6890BCA05700214100100'),
('NA6890BCA05700214100749', 'Usre1', 49, 'M', 'NA6890BCA05700214100700'),
('NA6890BCA05700218122438', 'dwada', 38, 'M', 'NA6890BCA05700218122400'),
('NA6890BCA05700218122442', 'dwadawd', 42, 'M', 'NA6890BCA05700218122400'),
('ND2345BAC05700114100736', 'Usre1', 36, 'M', 'ND2345BAC05700114100701'),
('ND2345BAC0570011410113', 'Usre1', 3, 'M', 'ND2345BAC05700114101101'),
('ND2345BAC05700114101136', 'User1', 36, 'M', 'ND2345BAC05700114101103'),
('ND2345BAC05700114101138', 'User3', 38, 'M', 'ND2345BAC05700114101100'),
('ND2345BAC05700114101139', 'User2', 39, 'M', 'ND2345BAC05700114101100'),
('ND2345BAC0570011410114', 'User1', 4, 'M', 'ND2345BAC05700114101104'),
('ND2345BAC05700114101140', 'User1', 40, 'M', 'ND2345BAC05700114101100'),
('ND2345BAC0570011410115', 'User2', 5, 'F', 'ND2345BAC05700114101104'),
('ND2345BAC0570011410117', 'Usre1', 7, 'M', 'ND2345BAC05700114101102');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Seat Number';

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seatNo`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51);

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE `system_user` (
  `userName` varchar(10) NOT NULL COMMENT 'User Name for login to System',
  `empolyeeNo` varchar(8) NOT NULL COMMENT 'Empoyee Number of System User',
  `empolyeeName` varchar(20) NOT NULL COMMENT 'oyee Name of System User',
  `empolyeeMNo` varchar(10) NOT NULL COMMENT 'oyee Mobile Number of System User',
  `password` varchar(250) DEFAULT NULL COMMENT 'Password for login to system',
  `privilege` varchar(8) NOT NULL DEFAULT 'Not User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store System User Data and Login Data';

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`userName`, `empolyeeNo`, `empolyeeName`, `empolyeeMNo`, `password`, `privilege`) VALUES
('Admin', '001', 'Ranathinge', '0717226079', '77f1e0d1689830af276804f07b05408c', 'Admin'),
('aldytamara', '002', 'aldytamara', '0717226079', '77f1e0d1689830af276804f07b05408c', 'Booker'),
('Kasun', '003', 'Kasun ', '0717226079', '77f1e0d1689830af276804f07b05408c', 'Booker'),
('Nevil', '002', 'Nevil', '0717226079', '77f1e0d1689830af276804f07b05408c', 'Admin'),
('Sumith', '004', 'Sumith', '1234567890', '77f1e0d1689830af276804f07b05408c', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_bus`
--
ALTER TABLE `assign_bus`
  ADD PRIMARY KEY (`assign_bus_no`),
  ADD KEY `userName` (`userName`,`busNo`),
  ADD KEY `routeNo` (`busNo`);

--
-- Indexes for table `available_seat`
--
ALTER TABLE `available_seat`
  ADD PRIMARY KEY (`seatNo`,`busNo`,`journeyNo`,`date`),
  ADD KEY `seatNo` (`seatNo`,`busNo`),
  ADD KEY `busNo` (`busNo`);

--
-- Indexes for table `booker`
--
ALTER TABLE `booker`
  ADD PRIMARY KEY (`bookerNICNo`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `bookerNICNo` (`bookerNICNo`,`busNo`),
  ADD KEY `bookerNICNo_2` (`bookerNICNo`),
  ADD KEY `busNo` (`busNo`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busNo`);

--
-- Indexes for table `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`journeyNo`);

--
-- Indexes for table `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  ADD PRIMARY KEY (`journey_for_bus_No`),
  ADD KEY `busNo` (`busNo`),
  ADD KEY `journeyNo` (`journeyNo`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuadmin`
--
ALTER TABLE `menuadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_ticke`
--
ALTER TABLE `receive_ticke`
  ADD PRIMARY KEY (`ticketNo`),
  ADD KEY `bookerNICNo` (`passengerName`),
  ADD KEY `seatNo` (`seatNo`),
  ADD KEY `ticketNo` (`ticketNo`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seatNo`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`userName`),
  ADD KEY `empoyeeName` (`empolyeeName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_bus`
--
ALTER TABLE `assign_bus`
  MODIFY `assign_bus_no` int(5) NOT NULL AUTO_INCREMENT COMMENT 'this is primary key', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  MODIFY `journey_for_bus_No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menuadmin`
--
ALTER TABLE `menuadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seatNo` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Bus Seat Number', AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_bus`
--
ALTER TABLE `assign_bus`
  ADD CONSTRAINT `assign_bus_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `system_user` (`userName`);

--
-- Constraints for table `available_seat`
--
ALTER TABLE `available_seat`
  ADD CONSTRAINT `available_seat_ibfk_1` FOREIGN KEY (`seatNo`) REFERENCES `seat` (`seatNo`),
  ADD CONSTRAINT `available_seat_ibfk_2` FOREIGN KEY (`busNo`) REFERENCES `bus` (`busNo`);

--
-- Constraints for table `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  ADD CONSTRAINT `journey_for_bus_ibfk_1` FOREIGN KEY (`busNo`) REFERENCES `bus` (`busNo`),
  ADD CONSTRAINT `journey_for_bus_ibfk_2` FOREIGN KEY (`journeyNo`) REFERENCES `journey` (`journeyNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
