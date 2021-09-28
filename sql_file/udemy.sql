-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2020 at 02:34 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Sheg Udemy', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '08033527716', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('001dq5eihcc4a6d3oi71mocfhqs31im1', '127.0.0.1', 1572300768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330303736383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('00cbp626fa5r5ase6hb4gtusdsbik877', '127.0.0.1', 1572293582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239333538323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('32554bukq6gskpmc7qod5oga9qtfs90q', '127.0.0.1', 1572304088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343038383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('619hop63a4q7qh1n1gjchme8f783fcr7', '127.0.0.1', 1580029838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393833383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('70dfngk89mnotbi8urd1bnslhu2oej3o', '127.0.0.1', 1580030140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303033303134303b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('7r7qu6klijvn00g62komglqadm7d1bs8', '127.0.0.1', 1580029158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393135383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('8tiri85c67jdo9ouisegu3i8jo33jnsn', '127.0.0.1', 1572298949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239383934393b),
('c4rpeot7p2i6e7bhtpkm82mu02fv2gb4', '127.0.0.1', 1572303777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330333737373b),
('d311k8db71p6gikrjfnqtngn6puur9q9', '127.0.0.1', 1572301474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330313437343b),
('djb2jfmlndq32khq5d8teo3l49nk85cl', '127.0.0.1', 1572293243, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239333234333b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('eto8ll3famtr3q6hln09cngph1klnlhd', '127.0.0.1', 1580028821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032383832313b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('gghcarbdp8fv7901nstqt5ivbq6pjf7j', '127.0.0.1', 1572304823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343832333b),
('ghtfb9hnftr2lbsd0r29k036g4nm8n8p', '127.0.0.1', 1572302906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330323930363b6572726f725f6d6573736167657c733a32303a22496e76616c6964204c6f67696e2044657461696c223b5f5f63695f766172737c613a313a7b733a31333a226572726f725f6d657373616765223b733a333a226f6c64223b7d),
('n867phmuemnm9sm76ceshe8e16isdeg6', '127.0.0.1', 1572304538, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343533383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('nm98573n3rmbcdgljvti8o089k85p17b', '127.0.0.1', 1580029468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393436383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('p0nuernv942dni5vmds5ri6p8qtt67mp', '127.0.0.1', 1580030378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303033303337383b),
('p57bpq8kos2b4i2anht4tkgeegkoo3fj', '127.0.0.1', 1572292174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239313938353b),
('qd3obl2dov09ld7189kgtlk6drk0slna', '127.0.0.1', 1572299559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239393535393b),
('re86ouansimg7gsai1u6rb2nbre7a8a8', '127.0.0.1', 1572300042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330303034323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226e6577223b7d),
('rv3oue3n0nrm5u0k6fjd2k1cji6kh93g', '127.0.0.1', 1572298465, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239383436353b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('sk50c4rmgo44v9glgq1jpeamj4i3n2cf', '127.0.0.1', 1572302520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330323532303b);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `name_numeric` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `teacher_id`, `name_numeric`) VALUES
(2, 'Class A', 2, 'Green Class');

-- --------------------------------------------------------

--
-- Table structure for table `general_message`
--

DROP TABLE IF EXISTS `general_message`;
CREATE TABLE IF NOT EXISTS `general_message` (
  `general_message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`general_message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_message`
--

INSERT INTO `general_message` (`general_message_id`, `user_id`, `message`, `date`) VALUES
(1, 'admin-1', 'This is a general notice from the desk of the administrator. Please ensure you come to the admin office for your payment information', 1589392800),
(2, 'student-1', 'This is me and I am the student of the computer science', 1589392800);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`phrase_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_exam`
--

DROP TABLE IF EXISTS `online_exam`;
CREATE TABLE IF NOT EXISTS `online_exam` (
  `online_exam_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `title` text COLLATE utf8_unicode_ci,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `exam_date` int(11) DEFAULT NULL,
  `time_start` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_end` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8_unicode_ci COMMENT 'duration in second',
  `minimum_percentage` text COLLATE utf8_unicode_ci,
  `instruction` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `running_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`online_exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_exam_result`
--

DROP TABLE IF EXISTS `online_exam_result`;
CREATE TABLE IF NOT EXISTS `online_exam_result` (
  `online_exam_result_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `online_exam_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `answer_script` longtext COLLATE utf8_unicode_ci,
  `obtained_mark` text COLLATE utf8_unicode_ci,
  `status` text COLLATE utf8_unicode_ci,
  `exam_started_timestamp` longtext COLLATE utf8_unicode_ci,
  `result` text COLLATE utf8_unicode_ci,
  `pin` longtext COLLATE utf8_unicode_ci NOT NULL,
  `serial` longtext COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`online_exam_result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `online_exam_result`
--

INSERT INTO `online_exam_result` (`online_exam_result_id`, `online_exam_id`, `student_id`, `answer_script`, `obtained_mark`, `status`, `exam_started_timestamp`, `result`, `pin`, `serial`, `counter`) VALUES
(5, 1, 1, '[{\"question_bank_id\":\"1\",\"submitted_answer\":\"\",\"correct_answers\":\"[\\\"2\\\"]\"},{\"question_bank_id\":\"2\",\"submitted_answer\":\"\",\"correct_answers\":\"[\\\"1\\\"]\"},{\"question_bank_id\":\"3\",\"submitted_answer\":\"\",\"correct_answers\":\"[\\\"1\\\"]\"},{\"question_bank_id\":\"4\",\"submitted_answer\":\"\",\"correct_answers\":\"[\\\"2\\\"]\"}]', '0', 'submitted', '1589480610', 'fail', '', '', 0),
(6, NULL, 1, NULL, NULL, 'attended', '1589480610', NULL, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

DROP TABLE IF EXISTS `question_bank`;
CREATE TABLE IF NOT EXISTS `question_bank` (
  `question_bank_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `online_exam_id` int(11) DEFAULT NULL,
  `question_title` longtext COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_options` int(11) DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci,
  `correct_answers` longtext COLLATE utf8_unicode_ci,
  `mark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`question_bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`question_bank_id`, `online_exam_id`, `question_title`, `type`, `number_of_options`, `options`, `correct_answers`, `mark`) VALUES
(1, 1, '2 + 1', 'multiple_choice', 2, '[\"5\",\"3\"]', '[\"2\"]', '10'),
(2, 1, 'What is computer ?', 'multiple_choice', 2, '[\"Machine\",\"paper\"]', '[\"1\"]', '30'),
(3, 1, 'Define computer', 'multiple_choice', 2, '[\"Electronic machine\",\"Electronic Engine\"]', '[\"1\"]', '30'),
(4, 1, 'How days in a week', 'multiple_choice', 2, '[\"3\",\"7\"]', '[\"2\"]', '3');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `nick_name`, `class_id`, `teacher_id`) VALUES
(2, 'First Term', 'Term One', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Computer based test web and mobile app'),
(2, 'system_title', 'MBBS APP'),
(3, 'address', 'address here'),
(4, 'phone', '09066021052'),
(6, 'currency', 'USD'),
(7, 'system_email', 'optimumproblemsolver@gmail.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'purple'),
(21, 'session', '2020-2021'),
(22, 'footer', 'Developed by Optimum Linkup Computers. All Right Reserved'),
(116, 'paypal_email', 'clone@paypalemail.com'),
(117, 'timezone', 'Africa/Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `session` longtext NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `class_id`, `section_id`, `sex`, `phone`, `address`, `email`, `password`, `session`) VALUES
(1, 'Micheal Brown', 2, 2, 'Male', '09066021052', '546787, Kertz shopping complext, Silicon Valley, United State of America, New York city.', 'student@student.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `teacher_id`, `class_id`) VALUES
(2, 'English', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(150) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `email`, `phone`) VALUES
(2, 'Udemy Kelly White', 'teacher@teacher.com', '08033506435');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
