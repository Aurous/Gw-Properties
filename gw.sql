-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 11:30 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gw`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE IF NOT EXISTS `housing` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `dataAvailable` varchar(30) NOT NULL,
  `type` enum('House','Apartment','Duplex','Fourplex','Condo','Townhome','Commercial','Villa') NOT NULL,
  `rent` varchar(30) NOT NULL,
  `deposit` varchar(30) NOT NULL,
  `utilities` enum('Yes','No') NOT NULL,
  `children` enum('Yes','No','Upon Approval') NOT NULL,
  `pets` enum('Yes','No','Upon Approval') NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bedroomDescription` mediumtext NOT NULL,
  `baths` int(11) NOT NULL,
  `kitchen` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `dining` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `living` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `family` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `den` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `study` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `deck` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `patio` enum('Yes, Large','Yes, Medium','Yes, Small','No') NOT NULL,
  `washer` enum('Yes','No','Yes, in basement') NOT NULL,
  `dish` enum('Yes','No') NOT NULL,
  `ranged` enum('Yes, Electric') NOT NULL,
  `refrigerator` enum('Yes','No') NOT NULL,
  `fireplace` enum('Yes','No') NOT NULL,
  `air` enum('Yes, Central','Yes, Wall','No') NOT NULL,
  `garage` enum('Yes','No') NOT NULL,
  `fence` enum('Yes, Chainlink','Yes, Privacy','No') NOT NULL,
  `city` enum('Leavenworth','Lansing','Weston','Pleasant Ridge') NOT NULL,
  `remarks` mediumtext,
  `keywords` longtext,
  `available` enum('yes','no') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id`, `name`, `address`, `description`, `dataAvailable`, `type`, `rent`, `deposit`, `utilities`, `children`, `pets`, `bedrooms`, `bedroomDescription`, `baths`, `kitchen`, `dining`, `living`, `family`, `den`, `study`, `deck`, `patio`, `washer`, `dish`, `ranged`, `refrigerator`, `fireplace`, `air`, `garage`, `fence`, `city`, `remarks`, `keywords`, `available`) VALUES
(3, 'testin', 'testing', 'testing', 'testing', 'Duplex', 'testing', 'testing', 'No', 'No', 'No', 2, 'testing', 0, 'Yes, Large', 'Yes, Medium', 'Yes, Small', 'No', 'No', 'Yes, Large', 'No', 'No', 'Yes, in basement', 'Yes', '', 'No', 'No', 'Yes, Wall', 'Yes', 'Yes, Privacy', 'Leavenworth', 'testing', 'testing', ''),
(6, 'testtest', 'test', 'tests', 'tset', 'House', 'tset', 'tset', 'Yes', 'Yes', 'Yes', 0, 'tset', 0, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', 'Yes, Electric', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', '', '', 'yes'),
(7, '', 'address', 'a nice house', 'date', 'Apartment', '100', '200', 'No', 'Upon Approval', 'Upon Approval', 2, 'good', 8, 'Yes, Large', 'Yes, Medium', 'Yes, Small', 'Yes, Medium', 'Yes, Small', 'Yes, Large', 'Yes, Small', 'Yes, Large', 'No', 'No', 'Yes, Electric', 'Yes', 'No', 'Yes, Wall', 'No', 'No', 'Lansing', '', '', 'yes'),
(8, '215 Elm', '215 Elm', 'a good house', '1', 'House', '1000', '1000', 'Yes', 'Yes', 'Yes', 1, 'test', 1, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', '', '', ''),
(9, '1519 Klemp', '1519 Klemp', '1', '1', 'House', '1', '1', 'Yes', 'Yes', 'Yes', 1, '1', 1, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', 'Yes, Electric', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', NULL, NULL, 'yes'),
(11, '520 n 7th', '520 n 7th', 'JnJ Tech', 'time', 'House', '1', '1', 'Yes', 'Yes', 'Yes', 1, '1', 1, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', 'Yes, Electric', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', NULL, NULL, 'yes'),
(12, 'test', 'test 123', 'test123', '123', 'House', '1', '1', 'Yes', 'Yes', 'Yes', 1, '123', 1, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', 'Yes, Electric', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', NULL, NULL, 'yes'),
(15, NULL, 'test 1234', 'test 1234', '1234', 'House', '1', '1', 'Yes', 'Yes', 'Yes', 1, '1', 1, 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes, Large', 'Yes', 'Yes', 'Yes, Electric', 'Yes', 'Yes', 'Yes, Central', 'Yes', 'Yes, Chainlink', 'Leavenworth', NULL, NULL, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `logging`
--

CREATE TABLE IF NOT EXISTS `logging` (
  `date` date NOT NULL,
  `protocol` varchar(32) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `port` varchar(32) NOT NULL,
  `agent` mediumtext NOT NULL,
  `ref` varchar(32) NOT NULL,
  `hostname` varchar(32) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logging`
--

INSERT INTO `logging` (`date`, `protocol`, `ip`, `port`, `agent`, `ref`, `hostname`, `time`) VALUES
('2017-06-13', 'HTTP/1.1', '192.168.125.49', '63309', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 'http://192.168.125.49:8080/', 'gw-properties.com', '18:04:00'),
('2017-06-13', 'HTTP/1.1', '::1', '63200', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36', 'http://localhost:8080/', 'LW-01.ncs-grp.hdq', '17:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `admin` enum('1','0') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'tests', 'test@test.test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '1'),
(2, 'testing', 'testing@test.test', '098f6bcd4621d373cade4e832627b4f6', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `housing`
--
ALTER TABLE `housing`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `logging`
--
ALTER TABLE `logging`
 ADD PRIMARY KEY (`ip`), ADD UNIQUE KEY `ip` (`ip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housing`
--
ALTER TABLE `housing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
