-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 09:17 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `bus` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `setnumber` varchar(100) NOT NULL,
  `booker` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`, `bus`, `transactionum`, `payable`, `status`, `setnumber`, `booker`) VALUES
(9, 'sid', 'khatrichetri', '0987654321', 'kathmandu', '1', '2qagztr8', '500', '', '["16"]', 'sushan'),
(10, 'sushan', 'madhikarmi', '9876543210', 'duwakot', '1', 'p8shfqfq', '500', '', '["4"]', 'sushan'),
(13, 'sushan', 'madhikarmi', '9843303885', 'duwakot', '9', '70fqcm4b', '600', '', '["1"]', 'sushan'),
(14, 'sushan', 'madhikarmi', '9843303885', 'duwakot', '1', 'kjiwxh4h', '500', '', '["2"]', 'sushan'),
(15, 'sushan', 'madhikarmi', '9843303885', 'duwakot', '1', 'vyf2p0ef', '500', '', '["25"]', 'sushan');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sushan', 'sushanbkt@gmail.com', 'add', 'fasdfdf'),
(2, 'sushan', 'sushanbkt@gmail.com', 'asd', 'asssddd');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice` varchar(255) NOT NULL,
  `specialoffer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `specialoffer`) VALUES
(5, 'All the passengers are notified to board the buses in time', 'Sunday and Monday 10% Discount'),
(6, 'Bus will not wait for any passegers if he/she is late', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `bus`, `seat_reserve`, `transactionnum`, `seat`) VALUES
(9, '1516230000', '1', '1', '2qagztr8', '["16"]'),
(10, '1516230000', '1', '1', 'p8shfqfq', '["4"]'),
(13, '1516230000', '9', '1', '70fqcm4b', '["1"]'),
(14, '1516230000', '1', '1', 'kjiwxh4h', '["2"]'),
(15, '1517353200', '1', '1', 'vyf2p0ef', '["25"]');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) VALUES
(1, 'Kathmandu-Pokhara', 'Rs.500 ', 25, 'Deluxe', '8:00 AM'),
(2, 'Kathmandu-Pokhara', 'Rs.500', 25, 'Deluxe', '5:00 PM'),
(3, 'Pokhara-Kathmandu', 'Rs.500', 25, 'Deluxe', '8:00 AM'),
(4, 'Pokhara-Kathmandu', 'Rs.500', 25, 'Deluxe', '5:00 PM'),
(5, 'Kathmandu-Chitwan', 'Rs.400', 30, 'Aircon', '7:00 AM'),
(6, 'Kathmandu-Chitwan', 'Rs.400', 30, 'Aircon', '4:00 PM'),
(7, 'Chitwan-Kathmandu', 'Rs.400', 30, 'Super Deluxe', '7:00 AM'),
(8, 'Chitwan-Kathmandu', 'Rs.400', 30, 'Super Deluxe', '4:00 PM'),
(9, 'Kathmandu-Baglung', 'Rs.600', 30, 'Super Deluxe', '9:00 AM'),
(10, 'Baglung-Kathmandu', 'Rs.600', 30, 'Sleeper Bus', '8:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `username`, `password`, `usertype`) VALUES
(8, '', '', '', 'admin', 'admin', 1),
(10, 'suman', 'suman@gmail.com', '123456789', 'suman', 'suman', 2),
(11, 'sushan', 'sushanbkt@gmail.com', '9843303885', 'sushan', 'sushan', 2),
(12, 'aaa', 'aaaa@gmail.com', '345678', 'sad', 'sad', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
