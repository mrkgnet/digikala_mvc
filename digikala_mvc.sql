-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2025 at 08:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digikala_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option`
--

CREATE TABLE `tbl_option` (
  `id` int(255) NOT NULL,
  `setting` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_option`
--

INSERT INTO `tbl_option` (`id`, `setting`, `value`) VALUES
(1, 'special_time', '86400'),
(2, 'limit_slider', '4'),
(3, 'tel', '021-4493993'),
(4, 'email', 'reza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `cat` int(255) NOT NULL,
  `introduction` text NOT NULL,
  `tedad_mojood` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `special` int(1) NOT NULL,
  `time_special` int(255) NOT NULL,
  `only_digikala` int(1) NOT NULL,
  `view` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `price`, `cat`, `introduction`, `tedad_mojood`, `discount`, `special`, `time_special`, `only_digikala`, `view`) VALUES
(1, 'خمیردندان', 20000, 0, '', 5, 0, 1, 1756304650, 1, 400),
(2, 'لباس شویی', 0, 0, '', 0, 0, 1, 1756304650, 1, 0),
(3, 'موبایل سامسونگ', 50000, 0, '', 0, 0, 1, 1756304650, 1, 700),
(4, 'اپل ', 4000, 0, '', 0, 0, 1, 1756304650, 1, 50),
(5, 'تبلت ', 32000, 0, '', 0, 0, 1, 1756304650, 1, 20),
(6, 'مانیتور', 89000, 0, '', 0, 0, 1, 1756304650, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider1`
--

CREATE TABLE `tbl_slider1` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_slider1`
--

INSERT INTO `tbl_slider1` (`id`, `img`, `link`) VALUES
(1, 'public/images/slider1.jpg', 'www.google.com'),
(2, 'public/images/slider2.jpg', 'www.google.com'),
(3, 'public/images/slider3.jpg', 'www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_option`
--
ALTER TABLE `tbl_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider1`
--
ALTER TABLE `tbl_slider1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_option`
--
ALTER TABLE `tbl_option`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_slider1`
--
ALTER TABLE `tbl_slider1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
