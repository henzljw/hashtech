-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 11:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(20) NOT NULL,
  `admin_email_address` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_email_address`, `admin_password`) VALUES
(1001, 'root@hashtech.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(20) NOT NULL,
  `gadget_model` varchar(300) NOT NULL,
  `gadget_quantity` int(20) NOT NULL,
  `gadget_price` decimal(10,0) NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE `gadget` (
  `gadget_id` int(200) NOT NULL,
  `gadget_model` varchar(300) NOT NULL,
  `gadget_price` decimal(10,2) NOT NULL,
  `gadget_description` text NOT NULL,
  `gadget_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`gadget_id`, `gadget_model`, `gadget_price`, `gadget_description`, `gadget_image`) VALUES
(18, 'ASUS TUF Gaming Laptop', '4199.00', 'Unite the latest AMD Ryzenâ„¢ processor and NVIDIA GeForce GTXâ„¢ graphics on an up to 120Hz IPS-level NanoEdge display with the new ASUS TUF Gaming FX505, which delivers immersive, high-performance gaming at an affordable price. Itâ€™s tested and certified to meet military-grade MIL-STD-810G standards, ensuring the toughness and durability you need to withstand the knocks and bumps of everyday work and play.', 0x617375732e6a706567),
(19, 'Google Pixel 3a', '2000.00', 'mid range phone', 0x676f6f676c652d706978656c2d33612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_id` int(20) NOT NULL,
  `tx_id` varchar(300) NOT NULL,
  `tx_date` varchar(60) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_email_address` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `poscode` int(20) NOT NULL,
  `state` varchar(300) NOT NULL,
  `phone_number` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_id`, `tx_id`, `tx_date`, `user_name`, `user_email_address`, `address`, `city`, `poscode`, `state`, `phone_number`) VALUES
(1, '', '', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(2, '', '', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(3, '', '', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(4, '5d99ac358a1fa', '2019-10-06', 'puteri', 'hanisshamimi252@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(5, '5d99acd7290ee', '2019-10-06', 'puteri', 'hanisshamimi252@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(6, '5d99ad222e5b7', '2019-10-06', 'puteri', 'hanishamimi252@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(7, '5d99adfa9ecb4', '2019-10-06', 'hen', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 676987, 'persiaran multimedia', '0172482672'),
(8, '5d99aec6ba08a', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(9, '5d99af1e7f894', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(10, '5d99af8ed583e', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(11, '5d99fffa1165f', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(12, '5d9a012028628', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(13, '5d9a034a5516d', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(14, '5d9a035f90e7f', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(15, '5d9a03ba251d7', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(16, '5d9a03dce9d23', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(17, '5d9a13b221d34', '2019-10-06', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(18, '5d9a46b97401c', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(19, '5d9a5560df175', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(20, '5d9a5564677dd', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(21, '5d9a567653f62', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(22, '5d9a572dce09c', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(23, '5d9a5a2c5c5c3', '2019-10-06', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(24, '5d9a6f0874496', '2019-10-07', 'puteri', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(25, '5d9a7010e7a2b', '2019-10-07', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(26, '5d9aa3cbaed39', '2019-10-07', 'henry', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672'),
(27, '5d9aad91ab1e2', '2019-10-07', 'henryhkljw', 'henrylawjunwei@gmail.com', 'persiaran multimedia', 'cyberjaya', 63100, 'Selangor', '0172482672');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `reset_id` int(20) NOT NULL,
  `code` varchar(300) NOT NULL,
  `user_email_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`reset_id`, `code`, `user_email_address`) VALUES
(1, '15d9756f4b0a07', 'lawjunwei@gmail.com'),
(2, '15d9758c920015', 'lawjunwei@gmail.com'),
(3, '15d975976c1a5d', 'lawjunwei@gmail.com'),
(4, '15d9759d8ae475', 'lawjunwei@gmail.com'),
(5, '15d975b5cc71ea', 'lawjunwei@gmail.com'),
(6, '15d975d3692588', 'lawjunwei@gmail.com'),
(7, '15d975dafc0487', 'lawjunwei@gmail.com'),
(8, '15d975e921daa9', 'lawjunwei@gmail.com'),
(9, '15d975fd898546', ''),
(10, '15d976097af011', ''),
(11, '15d9760c671123', 'lawjunwei@gmail.com'),
(12, '15d97624ca5c2d', 'lawjunwei@gmail.com'),
(14, '15d97a9ee084fc', 'lawjunwei@gmail.com'),
(15, '15d97aa1d7a6d9', 'lawjunwei@gmail.com'),
(16, '15d97aa8f8aaf4', 'lawjunwei@gmail.com'),
(17, '15d97aacc57f7b', 'lawjunwei@gmail.com'),
(18, '15d97ab1e24130', 'lawjunwei@gmail.com'),
(19, '15d97ab52f2688', 'lawjunwei@gmail.com'),
(20, '15d98472365de1', 'lawjunwei@gmail.com'),
(24, '15d9971905a81d', 'hanisshamimi252@gmail.com'),
(28, '15d9aa2ecd8987', 'henrylawjunwei@gmail.com'),
(31, '15d9abe3bc7863', 'lawjunwei@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `proof_of_payment`
--

CREATE TABLE `proof_of_payment` (
  `file_id` int(20) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `file_size` int(20) NOT NULL,
  `downloads` int(20) NOT NULL,
  `tx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proof_of_payment`
--

INSERT INTO `proof_of_payment` (`file_id`, `file_name`, `file_size`, `downloads`, `tx_id`) VALUES
(1, 'google-pixel-3a.jpg', 69572, 1, '5d99af8ed583e'),
(2, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(3, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(4, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(5, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(6, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(7, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(8, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(9, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(10, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(11, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(12, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(13, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(14, 'google-pixel-3a.jpg', 69572, 0, '5d99af8ed583e'),
(15, 'google-pixel-3a.jpg', 69572, 0, '5d99fffa1165f'),
(16, 'google-pixel-3a.jpg', 69572, 0, '5d99fffa1165f'),
(17, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(18, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(19, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(20, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(21, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(22, 'google-pixel-3a.jpg', 69572, 0, '5d9a012028628'),
(23, 'google-pixel-3a.jpg', 69572, 0, '5d9a034a5516d'),
(24, 'google-pixel-3a.jpg', 69572, 0, '5d9a035f90e7f'),
(25, 'google-pixel-3a.jpg', 69572, 0, '5d9a03ba251d7'),
(26, 'google-pixel-3a.jpg', 69572, 0, '5d9a03dce9d23'),
(27, 'google-pixel-3a.jpg', 69572, 0, '5d9a03dce9d23'),
(28, 'google-pixel-3a.jpg', 69572, 0, '5d9a03dce9d23'),
(29, 'google-pixel-3a.jpg', 69572, 0, '5d9a03dce9d23'),
(30, 'google-pixel-3a.jpg', 69572, 0, '5d9a03dce9d23'),
(31, 'google-pixel-3a.jpg', 69572, 0, '5d9a13b221d34'),
(32, 'google-pixel-3a.jpg', 69572, 0, '5d9a46b97401c'),
(33, 'google-pixel-3a.jpg', 69572, 0, '5d9a5564677dd'),
(34, 'google-pixel-3a.jpg', 69572, 0, '5d9a567653f62'),
(35, 'google-pixel-3a.jpg', 69572, 0, '5d9a572dce09c'),
(36, 'google-pixel-3a.jpg', 69572, 0, '5d9a5a2c5c5c3'),
(37, 'WhatsApp Image 2019-09-06 at 10.54.26 PM.jpeg', 51545, 0, '5d9a6f0874496'),
(38, 'WhatsApp Image 2019-09-06 at 10.54.26 PM.jpeg', 51545, 0, '5d9a7010e7a2b'),
(39, 'WhatsApp Image 2019-09-06 at 10.54.26 PM.jpeg', 51545, 0, '5d9aa3cbaed39'),
(40, 'WhatsApp Image 2019-09-06 at 10.54.26 PM.jpeg', 51545, 0, '5d9aad91ab1e2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_email_address` varchar(300) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `phone_number` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `date_of_birth` varchar(300) NOT NULL,
  `gender` enum('male','female','rather not say') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email_address`, `user_password`, `phone_number`, `address`, `city`, `date_of_birth`, `gender`) VALUES
(5, 'henry', 'lawjunwei@gmail.com', '1171201084', '0172482672', 'persiaran multimedia', 'cyberjaya', '1999-12-07', 'male'),
(7, 'henry', 'henrylawjunwei@gmail.com', '0172482672', '0172482672', 'persiaran multimedia', 'pj', '1999-12-07', 'male'),
(8, 'puteri', 'hanisshamimi252@gmail.com', '1171200172', '01123295076', 'persiaran multimedia', 'cyberjaya', '1999-12-07', 'male'),
(9, 'henryhkljw', 'lawjunwei@gmail.com', '1171201084', '0172482672', 'persiaran multimedia', 'cyberjaya', '1999-07-12', 'male'),
(10, 'puteri', 'henrylawjunwei@gmail.com', '1171201084', '0172482672', 'persiaran multimedia', 'cyberjaya', '1999-12-07', 'male'),
(11, '111', 'henrylawjunwei@gmail.com', '1171201084', '0172482672', 'persiaran multimedia', 'cyberjaya', '1999-12-07', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
  ADD PRIMARY KEY (`gadget_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`reset_id`);

--
-- Indexes for table `proof_of_payment`
--
ALTER TABLE `proof_of_payment`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `gadget_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `reset_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `proof_of_payment`
--
ALTER TABLE `proof_of_payment`
  MODIFY `file_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
