-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 08:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(255) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `ans_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Home Toll Markup Language', 1),
(2, 'hyperlinks and text markup Language', 1),
(3, 'hypertext markup Language', 1),
(4, 'None ', 1),
(5, 'The first div element  ', 2),
(6, 'All div elements', 2),
(7, 'last div elements', 2),
(8, 'none', 2),
(9, 'the head section', 3),
(10, 'the body section', 3),
(11, 'both head and body section', 3),
(12, 'None', 3),
(13, 'function myfunction()', 4),
(14, 'function:myfunction()', 4),
(15, 'function=myfunction()', 4),
(16, 'None', 4),
(17, '.container', 5),
(18, '.container-fixed', 5),
(19, '.container-fluid', 5),
(20, 'None', 5),
(23, 'cvb', 2),
(24, 's', 1),
(25, 'd', 3),
(26, 'f', 4),
(27, 'g', 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `ans_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`) VALUES
(1, 'What does HTML stands for?', 1),
(2, 'Look at the following selector :$(\"div\") what does it select?', 5),
(3, 'where is the correct place to insert javascript ?', 9),
(4, 'how do you create function in javascript?', 13),
(5, 'Which class provides responsive fixed width container?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(255) DEFAULT NULL,
  `answerscorrect` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, '', 5, 3),
(2, 'suraj', 5, 3),
(3, 'sunita', 5, 5),
(4, 'suraj', 5, 0),
(5, 'suraj', 5, 0),
(6, '', 5, 4),
(7, '', 5, 4),
(8, '', 5, 4),
(9, 'suraj', 5, 0),
(10, 'suraj', 5, 5),
(11, 'suraj', 5, 5),
(12, 'suraj', 5, 1),
(13, 'suraj', 5, 0),
(14, 'suraj', 5, 2),
(15, 'suraj', 5, 2),
(16, 'suraj', 5, 2),
(17, 'suraj', 5, 2),
(18, 'suraj', 5, 2),
(19, 'suraj', 5, 5),
(20, 'suraj', 5, 4),
(21, 'sunita', 5, 3),
(22, 'sunita', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
