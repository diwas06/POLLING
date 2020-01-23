-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 04:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkx`
--

CREATE TABLE `checkx` (
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `ans` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkx`
--

INSERT INTO `checkx` (`uid`, `qid`, `ans`) VALUES
(1711141040, 90, 'yes'),
(1711141040, 93, 'no'),
(1711141040, 90, 'no'),
(1711141040, 93, 'no'),
(1711141040, 94, 'no'),
(1711141040, 95, 'yes'),
(1711141040, 96, 'yes'),
(1711141040, 97, 'yes'),
(1711141040, 98, 'yes'),
(1711141040, 99, 'yes'),
(1711141040, 100, 'yes'),
(1711141040, 101, 'yes'),
(1711141040, 123, 'yes'),
(1711141040, 117, 'no'),
(1711141040, 107, 'yes'),
(1711141040, 102, 'no'),
(1711141040, 108, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionId` int(11) NOT NULL,
  `yesCount` int(11) NOT NULL,
  `noCount` int(11) NOT NULL,
  `questionTxt` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionId`, `yesCount`, `noCount`, `questionTxt`) VALUES
(93, 2, 8, '			Enter your new question here\r\n		kjhkgf'),
(94, 0, 8, '			Enter your new question here\r\n		asdadas'),
(96, 1, 7, '			Enter your new question here\r\n		sadasdasd'),
(97, 1, 7, '			Enter your new question here\r\n		dsadadasd'),
(98, 1, 7, '			Enter your new question here\r\n		'),
(100, 1, 6, 'enter question'),
(101, 2, 5, 'what is your name srishti?'),
(102, 0, 1, '			Enter your new question here\r\n		'),
(107, 1, 0, 'akdl;akdlaksd;laksdasdasd'),
(108, 1, 0, 'sadda'),
(109, 0, 0, 'wew'),
(110, 0, 0, 'qewqe'),
(111, 0, 0, 'sdsada'),
(112, 0, 0, 'hello here some text will be updated that will act as a question'),
(114, 0, 0, 'hello what is your name'),
(115, 0, 0, 'hjkhjkj'),
(116, 0, 0, 'bhjlhnkj.k'),
(117, 0, 1, 'hello jhjkh'),
(123, 1, 0, 'baby do you love me?'),
(124, 0, 0, 'jkdsajdkalsjdl'),
(125, 0, 0, 'enter new question....');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `priv` varchar(8) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `pass`, `priv`, `phone`) VALUES
('1711141038', 'diwas', '123456', 'admin', '1234567891'),
('1711141039', 'diwas', '123456', 'admin', '9760986576'),
('1711141040', 'disha', '123456', 'user', '1234567890'),
('20122012', 'disha1', '1234', 'admin', '7535049192'),
('2012542', 'disha', '1234', 'admin', '7535049192');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
