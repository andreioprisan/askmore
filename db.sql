-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2013 at 12:22 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `askmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `hashtag` varchar(80) NOT NULL,
  `activefromdate` datetime NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `slug` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`eventid`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `phone` (`phone`),
  KEY `id` (`eventid`),
  KEY `moderatorid` (`moderatorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `moderatorid`, `name`, `location`, `description`, `hashtag`, `activefromdate`, `startdate`, `enddate`, `slug`, `phone`) VALUES
(7, 2, 'Startup Weekend Boston', 'boston, ma', 'The Greatest!', 'swboston', '2013-07-01 00:00:00', '2013-07-31 00:00:00', '2013-08-28 00:00:00', 'f195', '(617) 934-2290'),
(8, 2, 'event1', 'boston, ma', 'whatever', 'mememe', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'bbe0', '(617) 446-3082');

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
  `source` enum('sms','voice','twitter','web','mobile') NOT NULL COMMENT 'web',
  `score` bigint(20) DEFAULT '0',
  PRIMARY KEY (`questionid`),
  KEY `id` (`questionid`),
  KEY `eventid` (`eventid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `eventid`, `text`, `status`, `createdat`, `author`, `source`, `score`) VALUES
(1, 8, 'Test Me', 'active', '2013-07-27 22:05:36', 'anonymous', 'sms', 0),
(2, 8, 'Test Me2', 'active', '2013-07-27 22:12:39', 'anonymous', 'sms', 0),
(3, 8, 'Test Me2', 'active', '2013-07-27 22:12:59', 'anonymous', 'sms', 0);

-- --------------------------------------------------------

--
-- Table structure for table `raw`
--

CREATE TABLE `raw` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `raw`
--

INSERT INTO `raw` (`id`, `data`) VALUES
(1, 0x7b226e616d65223a2252616661656c20536167756c61222c2270686f6e65223a2233333230373830227d),
(2, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(3, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(4, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(5, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(6, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(7, 0x7b22546f223a222b3136313739333432323930222c22426f6479223a2254657374204d65227d),
(8, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(9, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(10, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(11, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(12, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(13, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(14, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(15, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(16, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(17, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d),
(18, 0x7b22546f223a222b3136313734343633303832222c22426f6479223a2254657374204d6532227d);

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



-- twitter

CREATE TABLE IF NOT EXISTS `search_terms` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `term` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO `search_terms` (`id`, `term`) VALUES 
(1, 'yolo'),
(2, 'fact');

CREATE TABLE `tweets` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `author` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `text` varchar(250) NOT NULL,
  `hash` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hash` (`hash`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;



