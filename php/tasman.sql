-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 10:29 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tasman`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `address`, `phone`, `email`) VALUES
(23, 'Eunji Kime', 'Auckland', 1234544445, 'eunjikim@gmail.com'),
(24, 'Emma', 'Queen Street', 1095098487, 'eunjieunji007@gmail.com'),
(25, 'Jimin', 'Seoul, South Korea', 1030290399, 'jiminlove@gmail.com'),
(27, 'Eunji', 'Auckland', 123920192, 'eunjieunji007@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE IF NOT EXISTS `first` (
  `tires` int(19) NOT NULL,
  `oil` int(19) NOT NULL,
  `spark` int(19) NOT NULL,
  `ordered` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`tires`, `oil`, `spark`, `ordered`, `address`, `subtotal`, `total`) VALUES
(2, 0, 5, 7, 'address', 155, 171),
(0, 3, 7, 10, 'address2', 377, 415),
(5, 6, 0, 11, 'Auckland3', 850, 935),
(3, 3, 3, 9, 'Seoul', 483, 531.3),
(3, 0, 5, 8, '290 Qn ts', 205, 225.5),
(0, 0, 0, 0, '290 Qn ts', 0, 0),
(0, 0, 0, 0, '290 Qn ts', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `grocery_admin`
--

CREATE TABLE IF NOT EXISTS `grocery_admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_pw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery_admin`
--

INSERT INTO `grocery_admin` (`admin_id`, `admin_pw`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_brand`
--

CREATE TABLE IF NOT EXISTS `grocery_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery_brand`
--

INSERT INTO `grocery_brand` (`brand_id`, `brand_name`) VALUES
(11, 'Baby Care'),
(101, 'Select'),
(102, 'Homebrand'),
(103, 'Loveme');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_product`
--

CREATE TABLE IF NOT EXISTS `grocery_product` (
  `brand_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_desc` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery_product`
--

INSERT INTO `grocery_product` (`brand_id`, `product_id`, `product_name`, `product_desc`, `product_price`) VALUES
(101, 1, 'Red Bull', 'This is really strong energy drink', 1),
(101, 2, 'Salt', 'Seriously good salt', 4),
(102, 3, 'Bread', 'This is really good', 1),
(102, 4, 'tomatoes', 'Very Healthy Vegetables', 5),
(103, 5, 'Yogurt', 'yummy and healthy food', 3),
(11, 101, 'Avveno', 'Soothing', 12);

-- --------------------------------------------------------

--
-- Table structure for table `grocery_user`
--

CREATE TABLE IF NOT EXISTS `grocery_user` (
  `user_id` varchar(10) NOT NULL,
  `user_pw` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grocery_user`
--

INSERT INTO `grocery_user` (`user_id`, `user_pw`, `user_name`, `user_email`, `user_phone`, `user_address`) VALUES
('Sohee', 1234, 'Sohee', 'sohee@gmail.com', 2123439092, 'Auckland New Zealand'),
('Emma', 1234, 'Emma Kim', 'eunjieunji007@gmail.', 2123439092, 'Auckland New Zealand'),
('Eunji', 1234, 'Eunji', 'eunjieunji007@gmail.', 2123439092, 'Auckland New Zealand'),
('har', 0, 'har', 'har@gmail.com', 2147483647, '290 Qn st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery_brand`
--
ALTER TABLE `grocery_brand`
 ADD PRIMARY KEY (`brand_id`), ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
