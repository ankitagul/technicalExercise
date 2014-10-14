-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2014 at 05:48 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ankita', 'ankitagulati17@gmail.com', '1138dd6fdda5d617dfe218898ee02077'),
(4, 'ankitapec', 'ankitagulati17@gmail.com', '1138dd6fdda5d617dfe218898ee02077'),
(5, 'ankitag', 'ankitagulati17@gmail.com', '1138dd6fdda5d617dfe218898ee02077'),
(6, 'ankitagulati', 'ankitagulati17@gmail.com', '1138dd6fdda5d617dfe218898ee02077');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `country` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `username_id`, `firstname`, `lastname`, `position`, `organization`, `email`, `phone`, `street`, `city`, `province`, `country`) VALUES
(4, 4, 'kjkjhj', 'kjhjk', 'khjk', 'kjhjkh', 'kjhk@gmail.com', 'j', 'jghj', 'jhgjh', 'jhg', '0'),
(6, 6, 'khujk123', 'uiyuiy', 'iuyui', 'uiyuiy', 'ankitagulati17@gmail.com', 'hjgjg', 'jgjhg', 'jgjh', 'gjhgjh', 'jhgjh'),
(9, 6, 'kjhhkhkh', 'kjhjkhk', 'khkjhk', 'khkjhk', 'kjhjkh@jkhjh.com', 'jghjhg', 'jhgjh', 'jhgjhg', 'jhgjhg', 'jhgjhg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
