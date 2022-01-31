-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2022 at 04:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exambase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `time`) VALUES
(1, 'admin', '123', '2022-01-11 12:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `answertab`
--

DROP TABLE IF EXISTS `answertab`;
CREATE TABLE IF NOT EXISTS `answertab` (
  `ansid` int(200) NOT NULL AUTO_INCREMENT,
  `questionid` varchar(10000) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `studentid` varchar(10000) NOT NULL,
  `rans` varchar(10000) NOT NULL,
  `cat` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answertab`
--

INSERT INTO `answertab` (`ansid`, `questionid`, `answer`, `studentid`, `rans`, `cat`, `time`) VALUES
(160, '11', 'Ganga', '6', 'Nile', 'Gk', '2022-01-24 12:18:40'),
(159, '10', '30th March', '6', '30th January', 'Gk', '2022-01-24 12:18:40'),
(158, '9', 'New York City', '6', 'New York City', 'Gk', '2022-01-24 12:18:40'),
(157, '8', 'Egypt', '6', 'Egypt', 'Gk', '2022-01-24 12:18:40'),
(156, '7', 'Africa', '6', 'Asia', 'Gk', '2022-01-24 12:18:40'),
(155, '6', 'Jawaharlal Nehru', '6', 'Jawaharlal Nehru', 'Gk', '2022-01-24 12:18:40'),
(154, '5', 'Karnadaka', '6', 'Punjab', 'Gk', '2022-01-24 12:18:40'),
(180, '11', 'Jordhan', '5', 'Nile', 'Gk', '2022-01-26 04:30:00'),
(179, '10', '30th February', '5', '30th January', 'Gk', '2022-01-26 04:30:00'),
(178, '9', 'London', '5', 'New York City', 'Gk', '2022-01-26 04:30:00'),
(177, '8', 'Palestine', '5', 'Egypt', 'Gk', '2022-01-26 04:30:00'),
(176, '7', 'Europe', '5', 'Asia', 'Gk', '2022-01-26 04:30:00'),
(175, '6', 'Dr. Rajendra Prasad', '5', 'Jawaharlal Nehru', 'Gk', '2022-01-26 04:30:00'),
(173, '4', 'Dr. B. R. Ambedkar', '5', 'Dr. B. R. Ambedkar', 'Gk', '2022-01-26 04:30:00'),
(174, '5', 'Punjab', '5', 'Punjab', 'Gk', '2022-01-26 04:30:00'),
(172, '3', 'Jawaharlal Nehru', '5', 'Dr. Rajendra Prasad', 'Gk', '2022-01-26 04:30:00'),
(41, '1', 'Jawaharlal Nehru', '7', 'Mahatma Gandhi', 'Gk', '2022-01-21 07:23:11'),
(42, '3', 'Dr. Rajendra Prasad', '7', 'Dr. Rajendra Prasad', 'Gk', '2022-01-21 07:23:11'),
(43, '4', 'Dr. Rajendra Prasad', '7', 'Dr. B. R. Ambedkar', 'Gk', '2022-01-21 07:23:11'),
(44, '5', 'Goa', '7', 'Punjab', 'Gk', '2022-01-21 07:23:11'),
(45, '6', 'Jawaharlal Nehru', '7', 'Jawaharlal Nehru', 'Gk', '2022-01-21 07:23:11'),
(46, '7', 'Africa', '7', 'Asia', 'Gk', '2022-01-21 07:23:11'),
(47, '8', 'Egypt', '7', 'Egypt', 'Gk', '2022-01-21 07:23:11'),
(48, '9', 'New York City', '7', 'New York City', 'Gk', '2022-01-21 07:23:11'),
(49, '10', '30th March', '7', '30th January', 'Gk', '2022-01-21 07:23:11'),
(50, '11', 'Ganga', '7', 'Nile', 'Gk', '2022-01-21 07:23:11'),
(51, '1', ' Abraham Lincoln', '8', 'Mahatma Gandhi', 'Gk', '2022-01-21 07:31:20'),
(52, '3', 'Dr. Rajendra Prasad', '8', 'Dr. Rajendra Prasad', 'Gk', '2022-01-21 07:31:20'),
(53, '4', 'Dr. Rajendra Prasad', '8', 'Dr. B. R. Ambedkar', 'Gk', '2022-01-21 07:31:20'),
(54, '5', 'Goa', '8', 'Punjab', 'Gk', '2022-01-21 07:31:20'),
(55, '6', 'Jawaharlal Nehru', '8', 'Jawaharlal Nehru', 'Gk', '2022-01-21 07:31:20'),
(56, '7', 'Africa', '8', 'Asia', 'Gk', '2022-01-21 07:31:20'),
(57, '8', 'Egypt', '8', 'Egypt', 'Gk', '2022-01-21 07:31:20'),
(58, '9', 'Paris', '8', 'New York City', 'Gk', '2022-01-21 07:31:20'),
(59, '10', '30th March', '8', '30th January', 'Gk', '2022-01-21 07:31:20'),
(60, '11', 'Amazon', '8', 'Nile', 'Gk', '2022-01-21 07:31:20'),
(153, '4', 'Mahatma Gandhi', '6', 'Dr. B. R. Ambedkar', 'Gk', '2022-01-24 12:18:40'),
(152, '3', 'Dr. Abdul Kalam', '6', 'Dr. Rajendra Prasad', 'Gk', '2022-01-24 12:18:40'),
(171, '1', 'Dr. Abdul Kalam', '5', 'Mahatma Gandhi', 'Gk', '2022-01-26 04:30:00'),
(151, '1', 'Mahatma Gandhi', '6', 'Mahatma Gandhi', 'Gk', '2022-01-24 12:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `questiontab`
--

DROP TABLE IF EXISTS `questiontab`;
CREATE TABLE IF NOT EXISTS `questiontab` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `question` varchar(10000) NOT NULL,
  `opt1` varchar(5000) NOT NULL,
  `opt2` varchar(5000) NOT NULL,
  `opt3` varchar(5000) NOT NULL,
  `opt4` varchar(5000) NOT NULL,
  `rans` varchar(5000) NOT NULL,
  `cat` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiontab`
--

INSERT INTO `questiontab` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `rans`, `cat`, `time`) VALUES
(1, 'Who is the father of our Nation?', 'Dr. Abdul Kalam', 'Mahatma Gandhi', 'Jawaharlal Nehru', 'Abraham Lincon', 'Mahatma Gandhi', 'Gk', '2022-01-25 03:38:05'),
(3, 'Who was the first President of India?', 'Jawaharlal Nehru', 'Dr. Rajendra Prasad', 'Dr. Abdul Kalam', 'Dr. B. R. Ambedkar', 'Dr. Rajendra Prasad', 'Gk', '2022-01-14 05:00:29'),
(4, 'Who is known as Father of Indian Constitution?', 'Dr. B. R. Ambedkar', 'Dr. Rajendra Prasad', 'Mahatma Gandhi', 'Jawaharlal Nehru', 'Dr. B. R. Ambedkar', 'Gk', '2022-01-14 08:19:33'),
(5, 'Giddha is the folk dance of?', 'Punjab', 'Kerala', 'Goa', 'Karnadaka', 'Punjab', 'Gk', '2022-01-14 05:00:53'),
(6, ' Who was the first Prime Minister of India?', 'Dr. Rajendra Prasad', 'Jawaharlal Nehru', 'Mahatma Gandhi', 'Dr. B. R. Ambedkar', 'Jawaharlal Nehru', 'Gk', '2022-01-14 05:01:10'),
(7, 'India lies in which continent?', 'Europe', 'America', 'Africa', 'Asia', 'Asia', 'Gk', '2022-01-14 05:01:26'),
(8, 'Which country are the Giza Pyramids in?', 'Palestine', 'Israel', 'Egypt', 'China', 'Egypt', 'Gk', '2022-01-14 05:01:37'),
(9, 'What city is the statue of liberty in?', 'London', 'New York City', 'Paris', 'Tokyo', 'New York City', 'Gk', '2022-01-14 05:01:47'),
(10, 'Martyrsâ€™ Day is celebrated every year on?', '30th February', '30th March', '30th January', '20th February', '30th January', 'Gk', '2022-01-14 05:51:41'),
(11, 'Which is the longest river on the earth?', 'Jordhan', 'Nile', 'Ganga', 'Amazon', 'Nile', 'Gk', '2022-01-14 04:58:33'),
(12, 'HTML stands for?', 'Hyper Tabular Markup Language', 'Hyper Text Markup Language', 'High Text Markup Language', 'None of these', 'Hyper Text Markup Language', 'WT', '2022-01-14 05:08:05'),
(15, 'Which of the following tag is used to mark a beginning of paragraph ?', '&lt;td&gt;', '&lt;br&gt;', '&lt;tr&gt;', '&lt;p&gt;', '&lt;p&gt;', 'WT', '2022-01-14 05:20:00'),
(16, 'From which tag descriptive list starts ?', '&lt;LL&gt;', '&lt;DL&gt;', '&lt;DD&gt;', '&lt;DS&gt;', '&lt;DL&gt;', 'WT', '2022-01-14 05:21:45'),
(17, 'Correct HTML tag for the largest heading is', '&lt;heading&gt;', '&lt;h1&gt;', '&lt;h6&gt;', '&lt;head&gt;', '&lt;h1&gt;', 'WT', '2022-01-14 05:23:16'),
(18, 'The attribute of &lt;form&gt; tag', 'Action', 'Method', 'Both (a)&amp;(b)', 'None of these', 'Both (a)&amp;(b)', 'WT', '2022-01-14 05:25:29'),
(19, 'www is based on which model?', 'Local-server', 'Client-server', '3-tier', 'None of these', 'Client-server', 'WT', '2022-01-14 05:27:21'),
(20, 'What are Empty elements and is it valid?', 'No, there is no such terms as Empty Element', 'Empty elements are element with no data', 'No, it is not valid to use Empty Element', 'None of these', 'Empty elements are element with no data', 'WT', '2022-01-14 05:29:27'),
(21, 'Which of the following attributes of text box control allow to limit the maximum character?', 'size', 'len', 'maxlength', 'all of these', 'maxlength', 'WT', '2022-01-14 05:32:45'),
(22, 'Web pages starts with which of the following tag?', '&lt;Body&gt;', '&lt;Title&gt;', '&lt;HTML&gt;', '&lt;Form&gt;', '&lt;HTML&gt;', 'WT', '2022-01-14 05:34:05'),
(23, 'HTML is a subset of', 'SGMT', 'SGML', 'SGMD', 'None of these', 'SGML', 'WT', '2022-01-14 05:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(5000) NOT NULL,
  `studentid` varchar(5000) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `phone` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentname`, `studentid`, `email`, `phone`, `time`) VALUES
(7, 'Lakshmi Santhosh', 'IMG-21012022-072039-92', 'lakshmisanthosh@123', '+91 789456123', '2022-01-21 07:21:10'),
(5, 'Prince Moncy', 'IMG-17012022791', 'prince31233@gmail.com', '06282888982', '2022-01-17 08:33:29'),
(6, 'Devanadan vr', 'IMG-17012022592', 'dev123@gmail.com', '8945612370', '2022-01-17 08:34:18'),
(15, 'Adarsh ps', 'IMG-25012022-041102-66', 'Adarsh@gmail.com', '+54 1234567890', '2022-01-25 04:11:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
