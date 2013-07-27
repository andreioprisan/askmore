-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 12:01 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `askmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` bigint(20) NOT NULL AUTO_INCREMENT,
  `moderatorid` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `activefromdate` datetime NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  PRIMARY KEY (`eventid`),
  KEY `id` (`eventid`),
  KEY `moderatorid` (`moderatorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` bigint(20) NOT NULL AUTO_INCREMENT,
  `eventid` bigint(20) NOT NULL,
  `text` varchar(500) NOT NULL,
  `status` enum('active','inactive','spam','answered') NOT NULL,
  `createdat` datetime NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`questionid`),
  KEY `id` (`questionid`),
  KEY `eventid` (`eventid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `handle` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`, `handle`) VALUES
(1, 'Andrei Oprisan', 'andrei@oprisan.com', 'b695810086a5213f4e70736c5e384b646e4363b8', '@andreioprisan'),
(2, 'Joe Moe', 'andrei.oprisan@mac.com', '095cb54da1a3457e964d1d25b795857fb4d4a63f', '@test');
