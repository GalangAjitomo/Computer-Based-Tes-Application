-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 03:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Enjang', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '08033527716', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
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
-- Table structure for table `general_message`
--

CREATE TABLE `general_message` (
  `general_message_id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_message`
--

INSERT INTO `general_message` (`general_message_id`, `user_id`, `message`, `date`) VALUES
(1, 'admin-1', 'This is a general notice from the desk of the administrator. Please ensure you come to the admin office for your payment information', 1589392800),
(2, 'student-1', 'This is me and I am the student of the computer science', 1589392800),
(3, 'student-1', 'tes', 1633194000);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `materi_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`materi_id`, `program_id`, `name`) VALUES
(1, 2, 'FARMAKOLOGI'),
(2, 2, 'PATOLOGI');

-- --------------------------------------------------------

--
-- Table structure for table `myprogram`
--

CREATE TABLE `myprogram` (
  `myprogram_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `expired_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_exam`
--

CREATE TABLE `online_exam` (
  `online_exam_id` int(11) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `minimum_percentage` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `online_exam`
--

INSERT INTO `online_exam` (`online_exam_id`, `code`, `title`, `program_id`, `start_date`, `end_date`, `duration`, `minimum_percentage`, `status`) VALUES
(6, '5f69ce5', 'TRY OUT 2025', 6, '2021-11-16 00:00:00', '2021-11-16 23:59:59', 60, '60', 'pending'),
(7, '', 'Try Out CBT 2022', 1, '2021-11-14 00:00:00', '2021-11-17 23:59:59', 80, '60', 'pending'),
(8, '', 'Try Out CBT 2023', 1, '2021-11-01 00:00:00', '2022-01-29 23:59:59', 90, '70', 'pending'),
(9, '3245363', 'TRY OUT 1', 1, '2021-11-16 00:00:00', '2021-11-30 23:59:59', 100, '60', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `online_exam_result`
--

CREATE TABLE `online_exam_result` (
  `online_exam_result_id` int(11) UNSIGNED NOT NULL,
  `online_exam_id` int(11) DEFAULT NULL,
  `question_bank_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `answer_script` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `isDoubt` int(1) NOT NULL,
  `obtained_mark` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `exam_started_timestamp` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_timezone` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` longtext COLLATE utf8_unicode_ci NOT NULL,
  `serial` longtext COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  `jwb_benar` int(11) NOT NULL,
  `jwb_salah` int(11) NOT NULL,
  `hasil_skor` text COLLATE utf8_unicode_ci NOT NULL,
  `hasil_benar` int(11) NOT NULL,
  `hasil_salah` int(11) NOT NULL,
  `hasil_ragu` int(11) NOT NULL,
  `finish_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `online_exam_result`
--

INSERT INTO `online_exam_result` (`online_exam_result_id`, `online_exam_id`, `question_bank_id`, `student_id`, `answer_script`, `isDoubt`, `obtained_mark`, `status`, `exam_started_timestamp`, `start_timezone`, `result`, `pin`, `serial`, `counter`, `jwb_benar`, `jwb_salah`, `hasil_skor`, `hasil_benar`, `hasil_salah`, `hasil_ragu`, `finish_exam`) VALUES
(551, 6, 8, 4, '0', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 0, 1, '28.571428571429', 2, 5, 1, 1),
(552, 6, 9, 4, '3', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 1, 0, '28.571428571429', 2, 5, 1, 1),
(553, 6, 10, 4, '0', 1, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 0, 1, '28.571428571429', 2, 5, 1, 1),
(554, 6, 11, 4, '2', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 0, 1, '28.571428571429', 2, 5, 1, 1),
(555, 6, 12, 4, '3', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 1, 0, '28.571428571429', 2, 5, 1, 1),
(556, 6, 13, 4, '1', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 0, 1, '28.571428571429', 2, 5, 1, 1),
(557, 6, 14, 4, '3', 0, NULL, 'submitted', '1643294509649', '', NULL, '', '', 0, 0, 1, '28.571428571429', 2, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `category` varchar(150) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `name`, `category`, `price`) VALUES
(1, 'Try Out UKAI CBT 2022', 'Try Out', 300000),
(2, 'Kelas Online Zoom : Juni 2022', 'Kelas Online', 1300000),
(3, 'Try Out UKAI CBT : 2021', 'Free Trial', 0),
(4, 'TEST', 'Try Out', 500000),
(5, 'TEST 2', 'Try Out', 300000),
(6, 'TEST PROGRAM BARU', 'Kelas Online', 123);

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `question_bank_id` int(11) UNSIGNED NOT NULL,
  `online_exam_id` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL,
  `question_title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `correct_answers` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `explanation` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`question_bank_id`, `online_exam_id`, `no`, `question_title`, `category`, `options`, `correct_answers`, `explanation`, `reference`, `keywords`) VALUES
(5, 1, 0, 'berapa sekarang', 'multiple_choice', '[\"A\",\"B\",\"C\",\"D\",\"E\"]', '3', NULL, NULL, ''),
(6, 2, 0, 'BERAPA', 'multiple_choice', '[\"A\",\"B\",\"C\",\"D\",\"E\"]', '4', NULL, NULL, ''),
(8, 6, 1, 'Pasien laki2 40 th, BB 52 kg, kejang diberikan infus diazepam dosis 20 mg/kgBB. Kecepatan infus 50 mg/menit.\r\n\r\nBerapa menit kecepatan infus yang diberikan kepada pasien?', 'CATEGORY A', '[\"5 menit\",\"10 menit\",\"30 menit\",\"90 menit\",\"200 menit\"]', '5', 'adad', 'asd', 'asd'),
(9, 6, 2, 'Dari laporan laba rugi apotek Gerai Sehat periode Jan-Des 2021 diketahui :\r\nPersediaan awal Rp. 53.210.600,\r\nPembelian bersih Rp. 496.100.700.\r\nPersediaan akhir Rp. 67.451.300.\r\n\r\nBerapa nilai HPP (harga pokok penjualan)?', '', '[\"10\",\"324\",\"34\",\"435\",\"564\"]', '3', 'tes', 'asd', 'asd'),
(10, 6, 3, 'Rheologi menggambarkan aliran zat cair atau deformasi zat padat di bawah tekanan.\r\n\r\nSuspensi dengan kandungan padatan 40-50% memiliki tipe aliran ....', '', '[\"Plastis\",\"Tiksotropik\",\"Pseudoplastis\",\"Dilatan\",\"Antitiksotropik\"]', '2', 'qwdq', 'asdad', 'adsasd'),
(11, 6, 4, 'Industri farmasi akan mengembangkan kapsul berisi ekstrak kering A yang besifat higroskopis sebanyak 160 mg/kapsul. Target bobot isi kapsul adalah 200 mg.\r\n\r\nMetode apa yang disarankan?', '', '[\"Pencampuran - pengisian kapsul\",\"Granulasi basah - pengisian kapsul\",\"Granulasi kering - pengisian kapsul\",\"Hot melt extrusion - pengisian kapsul\",\"Triturasi - pengisian kapsul\"]', '3', 'Zat aktif berupa ekstrak kering yang umumnya alirannya buruk, persentase zat aktif/bobot adalah 160mg/200mg (kandungan zat aktif tinggi, sehingga sifat aliran sangat dipengaruhi zat aktif) untuk menjamin keseragaman pengisian kapsul, maka perlu digra', '/', 'Kapsul, ekstrak'),
(12, 6, 5, 'Seorang ibu datang ke apotek membawa resep sebagai berikut:\r\nR/\r\nParasetamol 250 mg\r\nPseudoefedrin ¼ tab\r\nLoratadine ¼ tab\r\nMf pulv dtd No XII\r\nS 3 dd pulv I\r\nJika diapotek terdapat Parasetamol 500mg, Pseudoefedrin 25 mg, Loratadine 5 mg.\r\n\r\nBerapa tablet yang diambil?', '', '[\"asd\",\"asd\",\"asd\",\"dvsd\",\"eee\"]', '3', 'tes', 'tes', 'tes'),
(13, 6, 6, 'TES', '', '[\"ASD\",\"VDSVX\",\"REWRQW\",\"VFVSVS\",\"FASD\"]', '3', 'tessssss', 'ASDASD', 'tesss'),
(14, 6, 7, 'adsa', 'Category C', '[\"asd\",\"as\",\"s\",\"s\",\"s\"]', '1', 'asd', 'sad', 'asd'),
(15, 9, 1, 'SIAPA ANAK ENJANG', 'CATEGORY A', '[\"Budi\",\"anton\",\"ANDI\",\"KEVIN\",\"LILI\"]', '3', 'TIDAK TAU BELUM PUNYA ANAK', 'KE MAUK', 'ANAK, MAUK');

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE `question_type` (
  `question_type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`question_type_id`, `name`) VALUES
(1, 'CATEGORY A'),
(2, 'Category C');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `submateri_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `submateri_id`, `name`) VALUES
(2, 5, 'QUIZ 3'),
(3, 3, 'QUIZ 2');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Hai Apoteker'),
(2, 'system_title', 'Hai Apoteker'),
(3, 'address', 'address here'),
(4, 'phone', '09066021052'),
(6, 'currency', 'USD'),
(7, 'system_email', 'optimumproblemsolver@gmail.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'green'),
(21, 'session', '2020-2021'),
(22, 'footer', 'Hai Apoteker 2021. All Right Reserved'),
(116, 'paypal_email', 'clone@paypalemail.com'),
(117, 'timezone', 'Africa/Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `session` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `sex`, `phone`, `address`, `email`, `password`, `session`) VALUES
(4, 'Enjang', 'MALE', '081212345678', 'MAUK', 'student@student.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-2021'),
(5, 'Galang', '', '111111', 'TEST', 'galang@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-2021'),
(6, 'student1', NULL, NULL, NULL, 'student1@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(7, 'student2', NULL, NULL, NULL, 'student2@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(8, 'student3', NULL, NULL, NULL, 'student3@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(9, 'student4', NULL, NULL, NULL, 'student4@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(10, 'student5', NULL, NULL, NULL, 'student5@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(11, 'test', NULL, NULL, NULL, 'test@test.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(12, 'tes2', NULL, NULL, NULL, 'tes2@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL),
(13, 'Lingga', NULL, NULL, NULL, 'lingga@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submateri`
--

CREATE TABLE `submateri` (
  `submateri_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submateri`
--

INSERT INTO `submateri` (`submateri_id`, `materi_id`, `name`) VALUES
(3, 1, 'FARMAKOLOGI BAB 1'),
(4, 1, 'FARMAKOLOGI BAB 2'),
(5, 2, 'PATOLOGI BAB 1'),
(6, 2, 'PATOLOGI BAB 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `general_message`
--
ALTER TABLE `general_message`
  ADD PRIMARY KEY (`general_message_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`materi_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `myprogram`
--
ALTER TABLE `myprogram`
  ADD PRIMARY KEY (`myprogram_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `online_exam`
--
ALTER TABLE `online_exam`
  ADD PRIMARY KEY (`online_exam_id`);

--
-- Indexes for table `online_exam_result`
--
ALTER TABLE `online_exam_result`
  ADD PRIMARY KEY (`online_exam_result_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`question_bank_id`);

--
-- Indexes for table `question_type`
--
ALTER TABLE `question_type`
  ADD PRIMARY KEY (`question_type_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `submateri_id` (`submateri_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Indexes for table `submateri`
--
ALTER TABLE `submateri`
  ADD PRIMARY KEY (`submateri_id`),
  ADD KEY `materi_id` (`materi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_message`
--
ALTER TABLE `general_message`
  MODIFY `general_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myprogram`
--
ALTER TABLE `myprogram`
  MODIFY `myprogram_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_exam`
--
ALTER TABLE `online_exam`
  MODIFY `online_exam_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `online_exam_result`
--
ALTER TABLE `online_exam_result`
  MODIFY `online_exam_result_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `question_bank_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `question_type`
--
ALTER TABLE `question_type`
  MODIFY `question_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submateri`
--
ALTER TABLE `submateri`
  MODIFY `submateri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `myprogram`
--
ALTER TABLE `myprogram`
  ADD CONSTRAINT `myprogram_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`submateri_id`) REFERENCES `submateri` (`submateri_id`);

--
-- Constraints for table `submateri`
--
ALTER TABLE `submateri`
  ADD CONSTRAINT `submateri_ibfk_1` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`materi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
