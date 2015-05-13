-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 10:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_exam_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_bank`
--

CREATE TABLE IF NOT EXISTS `exam_bank` (
  `question` text NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_bank`
--

INSERT INTO `exam_bank` (`question`, `id`) VALUES
('{"question":"Which HTML attribute is used to define inline styles??","answer":{"sol_1":{"text":"class","order":1},"sol_2":{"text":"style","order":2},"sol_3":{"text":"styles","order":3},"sol_4":{"text":"Font","order":4}},"right":1,"level":0,"description":"CSS"}', 1),
('{"question":"CSS stands for??","answer":{"sol_1":{"text":"Central Style Sheets","order":1},"sol_2":{"text":"Common Style Sheets","order":2},"sol_3":{"text":"Cascading Style Sheets","order":3},"sol_4":{"text":"Control Style Sheets","order":4}},"right":1,"level":1,"description":"CSS"}', 2),
('{"question":"The <link> tag goes inside??","answer":{"sol_1":{"text":"the body sections","order":1},"sol_2":{"text":"the title section","order":2},"sol_3":{"text":"the head section","order":3},"sol_4":{"text":"None of the above","order":4}},"right":1,"level":2,"description":"CSS"}', 3),
('{"question":"What CSS define in HTML??","answer":{"sol_1":{"text":"How to save HTML elements","order":1},"sol_2":{"text":"How to send HTML elements","order":2},"sol_3":{"text":"How to made HTML elements","order":3},"sol_4":{"text":"How to display HTML elements","order":4}},"right":1,"level":0,"description":"CSS"}', 4),
('{"question":"Scripting language is??","answer":{"sol_1":{"text":"High Level Programming language","order":1},"sol_2":{"text":"Assembly Level programming language","order":2},"sol_3":{"text":"Machine level programming language","order":3},"sol_4":{"text":"None of the above","order":4}},"right":1,"level":1,"description":"JavaScript"}', 5),
('{"question":"Which of the following is not true about document object in JavaScript??","answer":{"sol_1":{"text":"It may contain array of forms object.","order":1},"sol_2":{"text":"We can reference the forms object from document","order":2},"sol_3":{"text":"A document object always keeps single form object","order":3},"sol_4":{"text":"Position of first forms object begins from zero","order":4}},"right":1,"level":2,"description":"JavaScript"}', 6),
('{"question":"Which of the following is not true about JavaScript???","answer":{"sol_1":{"text":"It is a scripting language.","order":1},"sol_2":{"text":"It execute with preliminary compilation","order":2},"sol_3":{"text":"It is a lightweight programming language.","order":3},"sol_4":{"text":"It can be embedded directly into HTML pages.","order":4}},"right":1,"level":0,"description":"JavaScript"}', 7),
('{"question":"What is the First name of JavaScript??","answer":{"sol_1":{"text":"Oak","order":1},"sol_2":{"text":"Mocha","order":2},"sol_3":{"text":"JScript","order":3},"sol_4":{"text":"JSL","order":4}},"right":1,"level":1,"description":"JavaScript"}', 8),
('{"question":"You can define a constant by using the define() function. Once a constant is defined??","answer":{"sol_1":{"text":"It can never be changed or undefined","order":1},"sol_2":{"text":"It can never be changed but can be undefined","order":2},"sol_3":{"text":"It can be changed but can not be undefined","order":3},"sol_4":{"text":"It can be changed and can be undefined","order":4}},"right":1,"level":2,"description":"PHP"}', 9),
('{"question":"Which of the following function returns the number of characters in a string variable??","answer":{"sol_1":{"text":"count()","order":1},"sol_2":{"text":"len()","order":2},"sol_3":{"text":"strcount()","order":3},"sol_4":{"text":"strlen()","order":4}},"right":1,"level":1,"description":"PHP"}', 10),
('{"question":"Which of the following function returns the number of characters in a string variable??","answer":{"sol_1":{"text":"count(variable)","order":1},"sol_2":{"text":"len(variable)","order":2},"sol_3":{"text":"strcount(variable)","order":3},"sol_4":{"text":"strlen(variable)","order":4}},"right":1,"level":1,"description":"PHP"}', 11),
('{"question":"What PHP stands for??","answer":{"sol_1":{"text":"Hypertext Preprocessor","order":1},"sol_2":{"text":"Pre Hypertext Processor","order":2},"sol_3":{"text":"Pre Hyper Processor","order":3},"sol_4":{"text":"Pre Hypertext Process","order":4}},"right":1,"level":1,"description":"PHP"}', 12),
('{"question":"The difference between include() and require()??","answer":{"sol_1":{"text":"are different how they handle failure","order":1},"sol_2":{"text":"both are same in every aspects","order":2},"sol_3":{"text":"is include() produced a Fatal Error while require results in a Warning","order":3},"sol_4":{"text":"none of above","order":4}},"right":1,"level":1,"description":"PHP"}', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_bank`
--
ALTER TABLE `exam_bank`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_bank`
--
ALTER TABLE `exam_bank`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
