-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 01:42 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `askmore`
--
drop database 'askmore';
drop database 'askmorenow';

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

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('005f1017df361eb0996206ec80647405', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946870, ''),
('03cb28a007ef395f800b71f2f38c366d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945541, ''),
('06c4490c753f1d68dae2ed2dd10ffeb3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945582, ''),
('07734c330336b34b18cef8a43d274a3c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944405, ''),
('0b10e8f8fa9db27020db22081742bc66', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941947, ''),
('0ca6eae1d2f29235ce9c7bf3d01e90ed', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944922, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('0d39a99f17d3cdcae761a15f35df462e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946882, ''),
('134792dc7cdb55a809dab8378761fe2c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945248, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('13578322c4b4730b104b88e789c64344', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945580, ''),
('154c17a5d6f40d37e3e8cf6c5c1dd7c8', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946928, ''),
('1afde7a6d95c8de163bb1d24be9c282e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941944, ''),
('1b58920ec08dcf5e4abb86da08d6b443', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945539, ''),
('2459f881176deb9c347cc1535a89c57d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944417, ''),
('24f6f7315a5c86168c7cc224f76c4b74', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945882, ''),
('268bf624c171ab2fda469b46de1c267e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945469, ''),
('26a36ffde912ba65f618c8b3af9fb9e0', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946928, ''),
('27702706f7da6ea15a7ce742db578d6d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946911, ''),
('287f409f0439041f17afa6c87f3c001a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944894, ''),
('2bcf6cfa04c8f11eb62fe3bd3ef4e41e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946887, ''),
('2ce470202eb86d522dd2ba517c9e6947', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941944, ''),
('2d4d6953a694db5ed6685a040dce5d5d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946889, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('2f68497dc1f0496957b027d398c3594a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941888, ''),
('302a807230266c3ca828be7a50df186e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946199, ''),
('308d8d8a08a558ffe1903f92ab57baeb', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945598, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('3168269cefd4e3a976e47a5890b18608', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946914, ''),
('343548c0c8d9fa4f8641d30a287d68ff', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944165, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('3745eb4d0088867e2bd5779399fb6f18', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945257, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('378e96577e94989eb8ef19c304fe7da7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944377, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('3910ee9993fa8fa3f41db4f1dfc2fb8e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945904, ''),
('3a77d6245aa4c73991a9468b83298129', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946916, ''),
('3cedca653cb243026544e628b78735c7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944368, ''),
('3cff2f3855b94f10cddcaad972c3575b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946890, ''),
('3d76326f7bdbe049e5a9af134c173950', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946211, ''),
('3ec845e88e0d4420048e2603f594eaaa', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946920, ''),
('44394abd49145d071fe206677ee34785', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946678, ''),
('47f7a1c010529c927f0cebc1edd16d29', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945882, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('4859df5e07ee559802b7ba665adf7868', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374946035, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('4ad8e4a17f7b667f73a7fb9ce4a19505', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944820, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('4b73d9e502415a5a0df821106e78c484', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941869, ''),
('4d67f7c0318386297c1f349b094e09e6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945867, ''),
('507938942438f9dd8ab578e9d2631f14', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946889, ''),
('56db6d20ed07120ac0760eae909f76dd', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945146, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('5822bdf26e3b9c6e88b44cf52af3f1c7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944375, ''),
('58760aac727991f9e35c0175a4cedb05', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945967, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('5ae3de1243a95f0e8d8c080ae9360a8e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946418, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('5d3a52131108a26bd5af38021accb61d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945670, ''),
('5e968af8f5c2cd5bf951f27641243993', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944964, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('5f605ccff94d7a854da5f177b6eb4c6f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945799, ''),
('611cccb0d7e564b165c9172bcf5e35f6', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945120, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('6141bd2055ec5bfd81f6112e77c5028d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946309, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('614764a9b1787bf976c144a55b552146', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946886, ''),
('620e3cc69f577371d3c7e2bc625599ca', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374942035, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('6331e18a3ab4f1cba748d05dd81c7238', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374946098, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('6641b24746de71f3d2f633351cc63155', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945799, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('68e7edb98ad1f3ad9b06cab9abf7d39d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945732, ''),
('692177ecfd7896db59b4e6017c01747a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946211, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('694a4814eaa1c1992da4750c8f51d4c9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944189, ''),
('6981d6eb27c8552d336100aea704e2b5', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945881, ''),
('6b5720f3d4a2ab8c76339a3c91de1f4b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945343, ''),
('6b94ef8c397b18c4595637d57ff09e3c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945967, ''),
('6fc23007a77cf17ad5291e43552a7867', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945598, ''),
('701fd67e0ffbfc135911893934515d9e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941993, 'a:1:{s:9:"user_data";s:0:"";}'),
('70db11141670c20922581aeb61531c3a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946858, ''),
('72c641343bef7f9d07c9f75e766eafb2', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946920, ''),
('78cf611ebfef45846087a60d03bf0036', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944222, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('7b1afddaaa39cf74b7c95e6c6cd38cf2', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944235, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('7eca976446df1575f091c168863a20dd', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945332, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('8229c34d2fad8cce549fff8da5e1d777', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944235, ''),
('8261322082fb9b8859222aedb28ecb13', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941888, ''),
('82f4a5623be7349c7de591ccad3c4d73', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945867, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('876025a76cf99cebc48bc8f6ee08d54c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946890, ''),
('87f9363995a6dedac518c3bcda031bb4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946912, ''),
('8b3f6ec1fb3d6379b1c63245f0692a06', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945732, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('90bb45f90e9f0902e6bfd80b2a91c6cc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945456, ''),
('944e04bcda0ccf10960475f13ecdf55a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946924, ''),
('94c9219c3b9bdff027934988733e799a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946882, ''),
('970a27e1530da097d70323de7237b0ff', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945729, ''),
('99bf156ae980136834f529bfebdc68ce', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945229, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('9aa0c1dcd138132157fd48a79b335ea1', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946198, ''),
('9c35805ded23d20a43c9849e7a63e005', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945810, ''),
('9c3b6eb3fbf35d225d6c44a0dc05648f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945975, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('9e61c6738532287dfb06df79fb9a5005', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945342, ''),
('9f0d7aab7370905c7f8870c0a50aa944', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944249, ''),
('a2ac086e747629cc6fa29915402b01cc', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945010, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('a55385ec8977f39a47bd1ee78aa915c3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946380, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('a97e6a442350f087c4c4f3b31d302057', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945904, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('a9944679e9e4f0aedf8536db5e26d899', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374946098, ''),
('aad0d453adf003bcef2a50ce37f07f07', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946924, ''),
('ab0ea1db52e4efa00f5e5cf42a55010c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945024, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('ac17802beb400685d1e62d55e1f30ac3', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941979, ''),
('b2b3f5769887ec561ed78923526b2f6d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941979, 'a:1:{s:9:"user_data";s:0:"";}'),
('b46dd82a1bf78d5d03c0400504d75e3a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946688, ''),
('b50119efd7dd5c851a56ce21517968de', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945584, ''),
('b954032eefca56a6f0f7f2b21537b27e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945469, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('bf82de22357393ff309edc043a3fb4a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941865, ''),
('c1898475919ee0d37935f3f38f81deb7', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946673, ''),
('c2a7212def536f9a02f00c7eaedc3a2e', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944166, ''),
('c3647aa0d05e200f5a01e7fd746ee513', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944914, ''),
('c38fc94cc25f2513ab737ca7599d555f', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946309, ''),
('c5439d67bb2b591fa514325991ca6b78', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941865, ''),
('c7eaa7861f399b2eb227311f2ed008ba', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946923, ''),
('c8019db041b9fa87c51647a6a85cf1a9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946925, ''),
('c83d31a6a824c395eb2e5500f0c08f10', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945437, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('cea11466ee95587431b2a0bd8f8ee67a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945721, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('d358cf5481ebf50812d0228dc8fac72b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945332, ''),
('d44d801401b54817a7ceb73bdc2c42c1', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945027, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('d50c1857b764650651c0766e91a893b9', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945718, ''),
('d88d7c385d0d1530a67a6c1130b9b1ee', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945584, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('da0b6c5a75bc91afde810d33e35bf940', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941920, ''),
('e2bbd7e9e8b4dea6d36791729c24a856', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944405, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('e45a3e11afd3532103d338cb3069a67d', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946396, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('e46a633e1f92180ef145d032beaac690', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941869, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('e97c3bc2269371634da3fe068edf3f57', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946232, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('e9b6a7e90c701dce43e28018b6e0c433', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946886, ''),
('e9e4f427167ef6e54fd0860b904196bd', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945716, ''),
('ee0bc1185bcb42f25230847f51097ae1', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945717, ''),
('ee0fd26c9b6ee404d69f2c8fbd4ba276', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944377, ''),
('ef318d760f0b96a1bb99fc5a1942650c', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946916, ''),
('f10094798c40d78be8bc4fd013c5baf0', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946923, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('f1e21cff7932ce89ab9784595ee5d9a1', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374944820, ''),
('f3d49dec69b081b6a080cae7332b9dad', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941862, ''),
('f4c05067ea05572992a570b3e2eccbca', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946922, ''),
('f63881315f05bdaf5c4371212c6c641b', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374941860, ''),
('f7ce5a5edef89b47082d5373674e0b40', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946861, ''),
('f7ef87886253b64c49d88af552cbfcec', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374945456, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('f9f559872909085e39050fa6670119a2', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1', 1374945721, ''),
('fbc704c1b71f77e81cedb7c69520d4e8', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946914, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}'),
('fee6a977f31824c72db329bf3e4ccdbf', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36', 1374946199, 'a:6:{s:9:"user_data";s:0:"";s:6:"userid";s:1:"2";s:4:"name";s:7:"Joe Moe";s:5:"email";s:22:"andrei.oprisan@mac.com";s:8:"password";s:40:"095cb54da1a3457e964d1d25b795857fb4d4a63f";s:6:"handle";s:5:"@test";}');

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
