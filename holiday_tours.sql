-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 10:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holiday tours`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total` (OUT `total` VARCHAR(11))  NO SQL
SELECT sum(price) into total from package$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(15) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `address`, `phone`, `email_id`, `gender`) VALUES
(100, 'manoj', 'mamam', '659595', 'msimimi', 'msj'),
(101, 'manoj', 'mamam', '659595', 'msimimi', 'msj');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` varchar(4) NOT NULL,
  `e_name` varchar(15) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `address`, `phone`, `email_id`, `gender`, `salary`) VALUES
('111', 'inn', 'jn', '555', 'un8n', 'm', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` varchar(6) NOT NULL,
  `h_name` varchar(15) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `h_name`, `address`, `rating`) VALUES
('22', 'kjhb', 'jonhiu', 5);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` varchar(20) NOT NULL,
  `p_name` varchar(15) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `places` varchar(20) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `departure` date DEFAULT NULL,
  `arrival` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `p_name`, `price`, `places`, `rating`, `departure`, `arrival`) VALUES
('200', 'kemke', 3000, 'kmk', 5, '2019-12-04', '2019-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `r_id` int(20) NOT NULL,
  `p_method` varchar(25) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `r_id`, `p_method`, `p_date`) VALUES
(222, 256, 'CASH', '2019-12-04'),
(568, 32, 'cash', '2019-12-12');

--
-- Triggers `payment`
--
DELIMITER $$
CREATE TRIGGER `asj` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO voucher 
(r_id,c_id,p_id,price)
SELECT pa.r_id,r.c_id,.p.p_id,p.price
FROM  reservation r,package p,payment pa
WHERE pa.r_id=new.r_id AND r.p_id=p.p_id AND pa.r_id=r.r_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `r_id` int(10) NOT NULL,
  `v_no` varchar(10) DEFAULT NULL,
  `h_id` varchar(6) DEFAULT NULL,
  `p_id` varchar(20) NOT NULL,
  `c_id` int(8) NOT NULL,
  `no_of_heads` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `v_no`, `h_id`, `p_id`, `c_id`, `no_of_heads`) VALUES
(32, '5555', '22', '200', 100, '6'),
(256, '5555', '22', '200', 101, '3');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_no` varchar(15) NOT NULL,
  `v_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_no`, `v_name`) VALUES
('5555', 'ojoioj');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`r_id`, `c_id`, `p_id`, `price`) VALUES
(32, 100, '200', 3000),
(256, 101, '200', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `cdx` (`r_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`r_id`,`c_id`) USING BTREE,
  ADD KEY `v_no` (`v_no`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `f` (`c_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_no`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`r_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `cdx` FOREIGN KEY (`r_id`) REFERENCES `reservation` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `f` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`v_no`) REFERENCES `vehicle` (`v_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hotel` (`h_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
