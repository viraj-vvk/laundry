-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 08:38 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_contact` bigint(10) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complent`
--

CREATE TABLE `complent` (
  `comp_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `comp_flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_contact` bigint(15) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_image` varchar(255) NOT NULL,
  `c_username` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_address`, `c_contact`, `c_email`, `c_image`, `c_username`, `c_password`, `c_flag`) VALUES
(1, 'Herman Beck', 'Ashowk Chowk', 8793696255, 'herman@gmail.com', '1.jpg', 'Herman', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'Messsy Adam', 'Jule Solapur', 9112066924, 'messsy@gmail.com', '2.jpg', 'Messsy', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'John Richards', 'Balives Solapur', 1234567890, 'john@gmail.com', '3.jpg', 'John', 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, 'Peter Meggik', 'samrat Chowk', 7867904523, 'peter@gmail.com', '4.jpg', 'Peter', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'Edward', 'Shelgi', 8967452312, 'edward@gmail.com', '5.jpg', 'Edward', 'e10adc3949ba59abbe56e057f20f883e', 0),
(6, 'John Doe', 'vidi Gharkul', 3456789012, 'johnd@gmail.com', '6.jpg', 'Jhond', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'Henry Tom', 'samrat Chowk', 4567890123, 'henry@gmail.com', '7.jpg', 'Henry', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `ratings` int(5) NOT NULL,
  `f_flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordercust`
--

CREATE TABLE `ordercust` (
  `o_id` int(10) NOT NULL,
  `c_username` int(10) NOT NULL,
  `o_date` varchar(255) NOT NULL,
  `o_rec_date` varchar(255) NOT NULL,
  `o_payment` int(10) NOT NULL,
  `o_status` int(5) NOT NULL,
  `o_pay_status` int(5) NOT NULL,
  `o_flag` int(5) NOT NULL,
  `o_cont` bigint(10) NOT NULL,
  `o_mail` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercust`
--

INSERT INTO `ordercust` (`o_id`, `c_username`, `o_date`, `o_rec_date`, `o_payment`, `o_status`, `o_pay_status`, `o_flag`, `o_cont`, `o_mail`, `c_address`) VALUES
(1, 1, '1', '1', 1, 1, 1, 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_title` varchar(25) NOT NULL,
  `s_description` varchar(25) NOT NULL,
  `s_category` int(3) NOT NULL,
  `s_prize` int(5) NOT NULL,
  `s_flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`s_id`, `s_name`, `s_title`, `s_description`, `s_category`, `s_prize`, `s_flag`) VALUES
(1, 'l1', 'Wash & Fold', '', 1, 59, 0),
(2, 'l2', 'Wash & Iron', '', 1, 89, 0),
(3, 'l3', 'Premium Laundry', '', 1, 149, 0),
(4, 'm1', 'Shirt', '', 2, 79, 0),
(5, 'm2', 'T-Shirt', '', 2, 79, 0),
(6, 'm3', 'Trouser', '', 2, 79, 0),
(7, 'm4', 'Trouser Heavy', '', 2, 100, 0),
(8, 'm5', 'Kurta Plain', '', 2, 79, 0),
(9, 'm6', 'Kurta Fancy', '', 2, 100, 0),
(10, 'm7', 'Kurta Heavy', '', 2, 140, 0),
(11, 'm8', 'Coat/Blazer', '', 2, 150, 0),
(12, 'm9', 'Coat/Blazer Heavy', '', 2, 200, 0),
(13, 'm10', 'Dhoti', '', 2, 80, 0),
(14, 'm11', 'Pajama', '', 2, 79, 0),
(15, 'm12', 'Sherwani', '', 2, 750, 0),
(16, 'm13', 'Shorts', '', 2, 50, 0),
(17, 'm14', 'Sweater', '', 2, 80, 0),
(18, 'm15', 'Leather Jacket', '', 2, 600, 0),
(19, 'm16', 'Rexine Hacket', '', 2, 350, 0),
(20, 'm17', 'Nehru Jacket', '', 2, 150, 0),
(21, 'w1', 'Kurta Plain', '', 3, 79, 0),
(22, 'w2', 'Kurta Heavy', '', 3, 140, 0),
(23, 'w3', 'Dress small', '', 3, 80, 0),
(24, 'w4', 'Dress Long', '', 3, 150, 0),
(25, 'w5', 'Anarkali Suite Heavy', '', 3, 450, 0),
(26, 'w6', 'Top', '', 3, 79, 0),
(27, 'w7', 'Saree Plain', '', 3, 130, 0),
(28, 'w8', 'Saree Heavy', '', 3, 160, 0),
(29, 'w9', 'Saree fancy', '', 3, 250, 0),
(30, 'w10', 'Lehenga', '', 3, 250, 0),
(31, 'w11', 'Lehenga Bridal', '', 3, 450, 0),
(32, 'w12', 'Lehenga Bridal Heavy', '', 3, 750, 0),
(33, 'w13', 'Blouse With Work', '', 3, 200, 0),
(34, 'w14', 'Blouse', '', 3, 60, 0),
(35, 'w15', 'Blouse Fancy', '', 3, 100, 0),
(36, 'w16', 'Skirt Long', '', 3, 130, 0),
(37, 'w17', 'Salwar', '', 3, 70, 0),
(38, 'w18', 'Stole', '', 3, 60, 0),
(39, 'w19', 'Dupatta', '', 3, 60, 0),
(40, 'w20', 'Dupatta Fancy', '', 3, 100, 0),
(41, 'w21', 'Gown Heavy', '', 3, 750, 0),
(43, 'h1', 'Carpet', 'Per sq ft', 4, 25, 0),
(44, 'h2', 'Hand Towel', '', 4, 50, 0),
(45, 'h3', 'Towel', '', 4, 100, 0),
(46, 'h4', 'Bathrobe', '', 4, 150, 0),
(47, 'h5', 'Bedsheet', '', 4, 70, 0),
(48, 'h6', 'Mat Small', '', 4, 60, 0),
(49, 'h7', 'Mat Big', '', 4, 100, 0),
(50, 'h8', 'Table Mat', '', 4, 65, 0),
(51, 'h9', 'Table Cover', '', 4, 140, 0),
(52, 'h10', 'Cushion', '', 4, 300, 0),
(53, 'h11', 'Cushion Cover', '', 4, 40, 0),
(54, 'h12', 'Pillow Small', '', 4, 150, 0),
(55, 'h13', 'Pillow Large', '', 4, 250, 0),
(56, 'h14', 'Pillow XL', '', 4, 350, 0),
(57, 'h15', 'Pillow Cover', '', 4, 40, 0),
(58, 'h16', 'Curtain Window', 'Without Liner', 4, 70, 0),
(59, 'h17', 'Curtain Window', 'With Liner', 4, 110, 0),
(60, 'h18', 'Curtain Door', 'Without Liner', 4, 110, 0),
(61, 'h19', 'Curtain Door', 'With Liner', 4, 150, 0),
(62, 'h20', 'Curtain Ceiling', 'Without Liner', 4, 150, 0),
(63, 'h21', 'Curtain Ceiling', 'With Liner', 4, 200, 0),
(64, 'h22', 'Curtain Blinds', '', 4, 150, 0),
(65, 'h23', 'Curtain Roll Down', '', 4, 150, 0),
(66, 'h24', 'Dari', 'Per sq ft', 4, 15, 0),
(67, 'wo1', 'JACKET', '', 5, 150, 0),
(68, 'wo2', 'HEAVY JACKET', '', 5, 200, 0),
(69, 'wo3', 'SWEATER LIGHT', '', 5, 80, 0),
(70, 'wo4', 'SWEATER MEDIUM', '', 5, 110, 0),
(71, 'wo5', 'SWEATER HEAVY', '', 5, 150, 0),
(72, 'wo6', 'OVERCOAT MEDIUM', '', 5, 200, 0),
(73, 'wo7', 'OVERCOAT LONG', '', 5, 250, 0),
(74, 'wo8', 'BLANKET SINGLE', '', 5, 200, 0),
(75, 'wo9', 'BLANKET DOUBLE', '', 5, 300, 0),
(76, 'wo10', 'BLANKET MEDIUM', '', 5, 250, 0),
(77, 'wo11', 'BLANKET HEAVY', '', 5, 350, 0),
(78, 'wo12', 'QUILT SINGLE', '', 5, 250, 0),
(79, 'wo13', 'QUILT DOUBLE', '', 5, 350, 0),
(80, 'wo14', 'QUILT MEDIUM', '', 5, 300, 0),
(81, 'wo15', 'QUILT HEAVY', '', 5, 400, 0),
(82, 'wo16', 'MUFFLER', '', 5, 70, 0),
(83, 'wo17', 'SHAWL', '', 5, 80, 0),
(84, 'wo18', 'SHAWL HEAVY', '', 5, 150, 0),
(85, 'wo19', 'PASHMINA SHAWL', '', 5, 240, 0),
(86, 'wo20', 'QUILT COVER SINGLE', '', 5, 150, 0),
(87, 'wo21', 'QUILT COVER DOUBLE', '', 5, 250, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `complent`
--
ALTER TABLE `complent`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `ordercust`
--
ALTER TABLE `ordercust`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `complent`
--
ALTER TABLE `complent`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordercust`
--
ALTER TABLE `ordercust`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
