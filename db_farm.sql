-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_group`
--

CREATE TABLE `tb_group` (
  `IdGroup` int(11) NOT NULL,
  `Group` varchar(10) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_group`
--

INSERT INTO `tb_group` (`IdGroup`, `Group`, `img`) VALUES
(1, 'Group 1', 'skd286223sdc_XS.jpg'),
(2, 'Group 2', 'tori.jpg'),
(3, 'Group 3', 'kale.jpg'),
(4, 'Group 4', 'Vegetable-Free-PNG-Image.png'),
(5, 'Group 5', 'fresh2.jpg'),
(6, 'Group 6', 'skd286223sdc_XS.jpg'),
(7, 'Group 7', 'tori.jpg'),
(8, 'Group 8', 'kale.jpg'),
(9, 'Group 9', 'Vegetable-Free-PNG-Image.png'),
(10, 'Group 10', 'fresh2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `IDMember` int(10) NOT NULL COMMENT 'ลำดับสมาชิก',
  `Name` varchar(200) NOT NULL COMMENT 'ชื่อ',
  `LastName` varchar(200) NOT NULL COMMENT 'นามสกุล',
  `EMail` varchar(50) NOT NULL COMMENT 'E-Mail',
  `Mobile` varchar(10) NOT NULL COMMENT 'เบอร์มือ',
  `Address` text NOT NULL COMMENT 'ที่อยู่',
  `Province` varchar(50) NOT NULL COMMENT 'จังหวัด',
  `District` varchar(50) NOT NULL COMMENT 'อำเภอ/เขต',
  `SubDistrict` varchar(50) NOT NULL COMMENT 'ตำบล/แขวง',
  `ZipCode` varchar(10) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `Password` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `Status` varchar(50) NOT NULL COMMENT 'สถานะ',
  `FarmersGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`IDMember`, `Name`, `LastName`, `EMail`, `Mobile`, `Address`, `Province`, `District`, `SubDistrict`, `ZipCode`, `Password`, `Status`, `FarmersGroup`) VALUES
(2, 'xxxxx', 'xxxxxx', 'test1@gmaii.com', '000000000', 'asdasdsadasd', 'dasdsadsa', 'dasdasdas', 'dasdasd', 'asdasdasd', '1234', 'ผู้ซื้อสินค้า', 1),
(3, 'adsas', 'dasdasd', 'asdasdasd@gmail.com', '545555445', 'sadasd', 'asdss', 'dasdasd', 'asdasda', '0000000000', 'x3', 'ผู้ขายสินค้า', 2),
(4, 'asadfd', 'asdsadasd', 'test2@gmaii.com', '545555445', 'adsdasd', 'asdasd', 'asdasdasd', 'asdasdas', '444444444', '0000', 'ผู้ซื้อสินค้า', 3),
(5, 'zz', 'xx', 'test3@gmaii.com', '545555445', 'asdsdads', 'dasdas', 'dasdasd', 'asdasdas', 'asdasdas', '01', 'ผู้ขายสินค้า', 4),
(6, 'dsaadsdsda', 'addsas', 'dadsasdas1@gmail.com', '545555445', 'sfdfsdf', 'fdfsdfsd', 'fsdfsdfsd', 'fsdfds', 'fsdfsdf', 'x1', 'ผู้ซื้อสินค้า', 5),
(7, 'sasadsda', 'sdsdaasadsdas', 'adsasdas2@gmail.com', '000000', 'dsdsadd', 'dasdsa', 'dsasads', 'sdasdas', 'dasadssdas', 'x2', 'ผู้ซื้อและขายสินค้า', 6),
(31, 'test', 'user', 'testuser999.12@gmail.com', '0988297756', 'Rangsit', 'thanyaburi', 'asd', 'asd', '12130', '123', 'ผู้ซื้อสินค้า', 0),
(35, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'ผู้ขายสินค้า', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `ItemsOrderedID` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Seller` int(11) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`ItemsOrderedID`, `Name`, `Amount`, `Price`, `TotalPrice`, `Seller`, `OrderDate`) VALUES
(1, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(2, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(3, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(4, '[value-2]', 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `idProducts` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Summary Info` text NOT NULL,
  `PostOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`idProducts`, `Name`, `Price`, `Summary Info`, `PostOn`) VALUES
(1, 1, 100, 'gdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfg', '2022-07-28'),
(2, 1, 100, 'gdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfg', '2022-07-28'),
(3, 1, 100, 'gdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfg', '2022-07-28'),
(4, 1, 100, 'gdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfggdsfgsdfg', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `IdSales` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Buyer` int(11) NOT NULL,
  `OrderAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sales`
--

INSERT INTO `tb_sales` (`IdSales`, `Name`, `Amount`, `Price`, `TotalPrice`, `Buyer`, `OrderAt`) VALUES
(1, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(2, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(3, '[value-2]', 0, 0, 0, 0, '0000-00-00'),
(4, '[value-2]', 0, 0, 0, 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`IdGroup`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`IDMember`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`ItemsOrderedID`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`idProducts`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`IdSales`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `IdGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `IDMember` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับสมาชิก', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `ItemsOrderedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `IdSales` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
