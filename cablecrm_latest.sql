-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 05:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cablecrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_request_registration`
--

CREATE TABLE IF NOT EXISTS `customer_request_registration` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(90) NOT NULL,
  `location` varchar(100) NOT NULL,
  `plans` varchar(100) NOT NULL,
  `commets` tinytext NOT NULL,
  `operator_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_request_registration`
--

INSERT INTO `customer_request_registration` (`id`, `name`, `mobile`, `email`, `location`, `plans`, `commets`, `operator_id`) VALUES
(1, 'raghuram', '9885900119', 'raghuram4243@gmail.com', 'hyderabad', 'xyz', 'helloworld', 3),
(2, 'raghuram', '9885900119', 'raghuram4243@gmail.com', 'hyderabad', 'xyz', 'Hello', 3),
(3, 'raghuram', '9885900119', 'raghuram4243@gmail.com', 'hyderabad', 'xyz', 'yes', 2),
(4, 'vara', '9985797140', 'cholleti.cena@gmail.com', 'hyd', '1gb', 'hello', 2),
(6, 'shiva', '8019811981', 'egollapushivashankar@gmail.com', 'hyderabad', '1gb', 'test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE IF NOT EXISTS `operators` (
`id` int(11) NOT NULL,
  `lco_id` varchar(50) NOT NULL,
  `lco_name` varchar(100) NOT NULL,
  `lco_location` varchar(100) NOT NULL,
  `lco_sublocation` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `lco_id`, `lco_name`, `lco_location`, `lco_sublocation`) VALUES
(2, '', 'ACT', 'Hyderabad', 'Begumpet'),
(3, '', 'ACT1', 'Secundrabad', 'Shameerpet');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_locations`
--

CREATE TABLE IF NOT EXISTS `sub_locations` (
`id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `sub_location_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_request_registration`
--
ALTER TABLE `customer_request_registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_locations`
--
ALTER TABLE `sub_locations`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_request_registration`
--
ALTER TABLE `customer_request_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_locations`
--
ALTER TABLE `sub_locations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
