-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 06:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `damaged_fse`
--

CREATE TABLE `damaged_fse` (
  `Number` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ShopId` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `damaged_main`
--

CREATE TABLE `damaged_main` (
  `Date` date NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `EmpId` varchar(255) NOT NULL,
  `TpNum` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `FirstName`, `LastName`, `Gender`, `NIC`, `DOB`, `Type`, `EmpId`, `TpNum`, `Address`) VALUES
(1, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(2, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(3, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(4, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(5, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(6, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(7, 'sa', '', '0', '', '0000-00-00', '', '', 0, 'sa'),
(8, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(9, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(10, 'asda', '', '0', '', '0000-00-00', '', '', 0, 'sad'),
(11, 'hjgjh', '', '0', '', '0000-00-00', '', '', 0, ''),
(1, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(2, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(3, 'ggg', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(4, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(5, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(6, 'nabsn', '', '0', '', '0000-00-00', '', '', 0, 'ffff'),
(7, 'sa', '', '0', '', '0000-00-00', '', '', 0, 'sa'),
(8, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(9, 'ASA', '', '0', '', '0000-00-00', '', '', 0, 'dsf'),
(10, 'asda', '', '0', '', '0000-00-00', '', '', 0, 'sad'),
(11, 'hjgjh', '', '0', '', '0000-00-00', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mainstock_summary`
--

CREATE TABLE `mainstock_summary` (
  `Type` varchar(100) NOT NULL,
  `RemainingAmount` int(11) NOT NULL,
  `ReorderLevel` int(11) NOT NULL,
  `BufferLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainstock_summary`
--

INSERT INTO `mainstock_summary` (`Type`, `RemainingAmount`, `ReorderLevel`, `BufferLevel`) VALUES
('20', 588, 150, 100),
('50', 320, 150, 100),
('100', 450, 150, 100),
('200', 250, 150, 100),
('500', 120, 100, 50),
('1000', 180, 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `main_stock_deatils`
--

CREATE TABLE `main_stock_deatils` (
  `Type` int(11) NOT NULL,
  `Serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_stock_deatils`
--

INSERT INTO `main_stock_deatils` (`Type`, `Serial`) VALUES
(200, 23),
(500, 25),
(20, 36),
(20, 37),
(50, 46),
(50, 47),
(50, 48),
(100, 53),
(100, 55),
(100, 56);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `RouteId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `ShopId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `OwnerName` varchar(255) NOT NULL,
  `OwnerNIC` varchar(255) NOT NULL,
  `TPNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `RouteId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Date` date NOT NULL,
  `StockKeeperId` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transferred_stock`
--

CREATE TABLE `transferred_stock` (
  `TransferredDate` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `SerialNumber` varchar(255) NOT NULL,
  `FSEId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferred_stock`
--

INSERT INTO `transferred_stock` (`TransferredDate`, `Type`, `SerialNumber`, `FSEId`) VALUES
('2017-08-30', '200', '22', '3'),
('2017-08-30', '500', '24', '3'),
('2017-08-21', '50', '1', '5'),
('0000-00-00', '1000', '27', 'Select FSE'),
('2017-08-02', '100', '21', '5'),
('2017-08-02', '100', '52', '5'),
('2017-08-12', '50', '2', '3'),
('2017-08-12', '50', '45', '3'),
('2017-08-20', '20', '34', '5'),
('2017-08-20', '20', '35', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `UserName`, `Password`, `Type`) VALUES
(1, 'Ishara', 'papaya', '123', 'Administrator'),
(2, 'Randika', 'randi', '123', 'Manager'),
(3, 'Yasas', 'yasas', '123', 'FSE'),
(4, 'Prabash', 'prabash', '123', 'StockKeeper'),
(5, 'Dilan', 'dilan', '123', 'FSE'),
(6, 'Ruwanari', 'nari', '123', 'FSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `damaged_fse`
--
ALTER TABLE `damaged_fse`
  ADD PRIMARY KEY (`Number`,`SerialNumber`);

--
-- Indexes for table `damaged_main`
--
ALTER TABLE `damaged_main`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `main_stock_deatils`
--
ALTER TABLE `main_stock_deatils`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
