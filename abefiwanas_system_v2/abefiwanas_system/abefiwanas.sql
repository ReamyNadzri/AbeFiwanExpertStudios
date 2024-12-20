-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 04:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abefiwanas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` varchar(12) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `adminPass` varchar(20) DEFAULT NULL,
  `adminPhone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `numPlate` varchar(10) NOT NULL,
  `carName` varchar(50) NOT NULL,
  `carType` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `yearManufac` varchar(20) DEFAULT NULL,
  `initialPrice` decimal(10,2) NOT NULL,
  `model_ID` varchar(10) DEFAULT NULL,
  `idimg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`numPlate`, `carName`, `carType`, `color`, `yearManufac`, `initialPrice`, `model_ID`, `idimg`) VALUES
('BVA4433', 'Nissan SYLPHY ', '2.0 LUXURY', 'BLACK', '2009', 19800.00, '09', 37),
('DSA9012', 'VOLKSWAGEN PASSAT CC', '2.0 wty', 'BLACK', '2011', 38800.00, '13', NULL),
('ERJ6521', 'Hyundai GRAND STAREX', '2.5 CRDi', 'BLACK', '2018', 135000.00, '03', 8),
('FDA8412', 'Proton EXORA', '1.6 BOLD', 'WHITE', '2015', 21888.00, '11', 31),
('FFA4545', 'Toyota HARRIER', '2.0 TUBRO PREMIUM', 'WHITE', '2018', 165800.00, '12', 32),
('FHA4713', 'Isuzu D-MAX X-TERRAIN', '3.0L', 'BLACK', '2023', 153400.00, '04', 16),
('FTV6753', 'Mazda 3', '2.0 SEDAN HIGH SKYACTIV', 'CYAN', '2017', 66800.00, '06', 13),
('HSG5624', 'Honda ODYSSEY', '2.4 ABSOLUTE', 'BLACK', '2010', 66800.00, '02', 36),
('HTP1424', 'Mercedes Benz A180', 'AMG EDITION', 'WHITE', '2018', 183800.00, '07', 28),
('KSA7688', 'Mitsubishi AIRTREK', '2.0 TURBO', 'RED', '2004', 25000.00, '08', 26),
('LJG8822', 'Nissan Livina', 'X-GEAR 1.6', 'BLUE', '2013', 24800.00, '09', 24),
('NLM5712', 'Mazda CX-5', '2.0 AWD', 'BLACK', '2015', 57999.00, '06', 12),
('NNP0324', 'Perodua BEZZA ', '1.3 PREMIUM X', 'GREY', '2018', 33800.00, '10', 29),
('QWR3412', 'Honda CIVIC', '1.8 S i-VTEC', 'GREY', '2018', 84800.00, '02', 9),
('REL6572', 'Mitsubishi TRITON', '2.5VGT', 'GREY', '2014', 54888.00, '08', 25),
('RTW8859', 'Perodua MYVI', '1.3 EZi', 'WHITE', '2012', 22800.00, '10', 3),
('RYL5592', 'Volvo XC40', ' 2.0 (A) T5 AWD R-DESIGN', 'WHITE', '2019', 154800.00, '14', NULL),
('TVS4651', 'Ford FOCUS', '2.0 A', 'WHITE', '2015', 47800.00, '01', 10),
('UIO9061', 'VOLVO XC60 ', '3.0 T6', 'GREY', '2009', 34900.00, '14', NULL),
('VHA5732', 'Isuzu D-MAX', ' 2.5 4x2', 'RED', '2002', 29800.00, '04', 17),
('WPR4835', 'Volkswagen ARTEON R-LINE', '2.0L', 'GREY', '2022', 246888.00, '13', 34),
('WPX9123', 'Ford ESCAPE', '2.3 XLS 4x2', 'BLACK', '2010', 22999.00, '01', 11),
('WRH7631', 'Proton SAGA', '1.3 BLM', 'WHITE', '2011', 9900.00, '11', 30),
('WWP7641', 'Hyundai TUCSON ', '2.0 EXECUTIVE PLUS ', 'WHITE', '2013', 35999.00, '03', 7),
('XKA8646', 'Kia SPORTAGE', '2.0SL', 'GREY', '2011', 32900.00, '05', 14),
('XVA4912', 'Kia CERATO', 'K3 2.0', 'BLACK', '2014', 41800.00, '05', 15),
('ZKF5512', 'Mercedes Benz', 'A200 AMG LINE 1.6', 'BLACK', '2016', 132800.00, '07', 27),
('ZXC7840', 'TOYOTA VELLFIRE', '3.5 MODELLISTA wty', 'WHITE', '2018', 208500.00, '12', 33);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_ID` varchar(12) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerTelNum` varchar(25) DEFAULT NULL,
  `customerPass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_ID`, `customerName`, `customerTelNum`, `customerPass`) VALUES
('031013110233', 'Anaqi', '01139225829', 'rahimigay'),
('1', 'Admin AFAS', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `idimg` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `datecreate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(1, , '2023-06-07 01:06:46');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(2, , '2023-06-07 01:45:48');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(3, , '2023-06-07 11:02:27');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(4, , '2023-06-07 11:39:13');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(5, , '2023-06-07 12:05:11');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(6, , '2023-06-07 12:06:12');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(7, , '2023-06-07 12:07:35');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(8, , '2023-06-07 12:09:27');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(9, , '2023-06-07 12:09:58');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(10, , '2023-06-07 12:10:39');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(11, , '2023-06-07 12:13:34');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(12, , '2023-06-07 12:14:13');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(13, , '2023-06-07 12:14:43');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(14, , '2023-06-07 12:15:35');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(15, , '2023-06-07 12:15:59');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(16, , '2023-06-07 12:17:32');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(17, , '2023-06-07 12:17:56'),
(24, , '2023-06-07 12:24:24');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(25, , '2023-06-07 12:25:20');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(26, , '2023-06-07 12:25:41');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(27, , '2023-06-07 12:26:11');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(28, , '2023-06-07 12:26:31');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(29, , '2023-06-07 12:27:03');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(30, , '2023-06-07 12:27:21');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(31, , '2023-06-07 12:27:36');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(32, , '2023-06-07 12:27:57');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(33, , '2023-06-07 12:28:19');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(34, , '2023-06-07 12:28:45');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(35, , '2023-06-07 12:30:24');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(36, , '2023-06-07 12:30:41');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(37, , '2023-06-07 12:30:45');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(38, , '2023-06-07 12:30:56');
INSERT INTO `images` (`idimg`, `image`, `datecreate`) VALUES
(39, , '2023-06-07 12:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_ID` varchar(10) NOT NULL,
  `modelName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_ID`, `modelName`) VALUES
('01', 'FORD'),
('02', 'HONDA'),
('03', 'HYUNDAI'),
('04', 'ISUZU'),
('05', 'KIA'),
('06', 'MAZDA'),
('07', 'MERCEDES-BENZ'),
('08', 'MITSUBISHI'),
('09', 'NISSAN'),
('10', 'PERODUA'),
('11', 'PROTON'),
('12', 'TOYOTA'),
('13', 'VOLKSWAGEN'),
('14', 'VOLVO');

-- --------------------------------------------------------

--
-- Table structure for table `postcode`
--

CREATE TABLE `postcode` (
  `postCode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_ID` int(10) NOT NULL,
  `customer_ID` varchar(12) DEFAULT NULL,
  `numPlate` varchar(10) DEFAULT NULL,
  `purchaseDate` date NOT NULL,
  `deposit` decimal(10,2) NOT NULL,
  `balancePayment` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_ID`, `customer_ID`, `numPlate`, `purchaseDate`, `deposit`, `balancePayment`) VALUES
(3, '031013110233', 'ZXC7840', '2023-06-13', 2500.00, 206000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`numPlate`),
  ADD KEY `model_ID` (`model_ID`),
  ADD KEY `fk_idimg` (`idimg`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimg`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_ID`);

--
-- Indexes for table `postcode`
--
ALTER TABLE `postcode`
  ADD PRIMARY KEY (`postCode`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_ID`),
  ADD KEY `customer_ID` (`customer_ID`),
  ADD KEY `numPlate` (`numPlate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idimg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`model_ID`) REFERENCES `model` (`model_ID`),
  ADD CONSTRAINT `fk_idimg` FOREIGN KEY (`idimg`) REFERENCES `images` (`idimg`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customer` (`customer_ID`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`numPlate`) REFERENCES `car` (`numPlate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
