-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 11:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `selected_answer` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Pemrograman Dasar', '2020-01-18 23:01:45', '2020-01-18 23:01:45'),
(2, 'Pemrograman Berorientasi Objek', '2020-01-18 23:16:47', '2020-01-18 23:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `schedule_start` datetime NOT NULL,
  `schedule_end` datetime NOT NULL,
  `kkm` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `major_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created`, `modified`, `major_id`) VALUES
(1, 'X ANM 1', '2019-12-26 03:56:19', '2019-12-26 03:56:19', 2),
(2, 'X ANM 2', '2019-12-26 03:56:31', '2019-12-26 03:56:31', 2),
(3, 'X DPIB', '2019-12-26 03:56:45', '2019-12-26 03:56:45', 6),
(4, 'X KPR 1', '2019-12-26 03:57:03', '2019-12-26 03:57:03', 7),
(5, 'X KPR 2', '2019-12-26 03:57:15', '2019-12-26 03:57:15', 7),
(6, 'X KPR 3', '2019-12-26 03:57:26', '2019-12-26 03:57:26', 7),
(7, 'X KPR 4', '2019-12-26 03:57:50', '2019-12-26 03:57:50', 7),
(8, 'X MM 1', '2019-12-26 03:58:03', '2019-12-26 03:58:03', 3),
(9, 'X MM 2', '2019-12-26 03:58:11', '2019-12-26 03:58:11', 3),
(10, 'X MM 3', '2019-12-26 03:58:56', '2019-12-26 03:58:56', 3),
(11, 'X RPL 1', '2019-12-26 03:59:21', '2019-12-26 03:59:21', 1),
(12, 'X RPL 2', '2019-12-26 03:59:30', '2019-12-26 03:59:30', 1),
(13, 'X SIJA', '2019-12-26 03:59:46', '2019-12-26 03:59:46', 5),
(14, 'X TBSM 1', '2019-12-26 03:59:57', '2019-12-26 03:59:57', 9),
(15, 'X TBSM 2', '2019-12-26 04:00:08', '2019-12-26 04:00:08', 9),
(16, 'X TKJ 1', '2019-12-26 04:00:22', '2019-12-26 04:00:22', 4),
(17, 'X TKJ 2', '2019-12-26 04:00:34', '2019-12-26 04:00:34', 4),
(18, 'X TKJ 3', '2019-12-26 04:01:04', '2019-12-26 04:01:04', 4),
(19, 'X TKJ 4', '2019-12-26 04:01:15', '2019-12-26 04:01:15', 4),
(20, 'X TKR 1', '2019-12-26 04:01:35', '2019-12-26 04:01:35', 8),
(21, 'X TKR 2', '2019-12-26 04:01:45', '2019-12-26 04:01:45', 8),
(22, 'X TKR 3', '2019-12-26 04:01:55', '2019-12-26 04:01:55', 8),
(23, 'X TKR 4', '2019-12-26 04:02:19', '2019-12-26 04:02:19', 8),
(24, 'XI ANM 1', '2019-12-26 04:02:31', '2019-12-26 04:02:31', 2),
(25, 'XI ANM 2', '2019-12-26 04:03:05', '2019-12-26 04:03:05', 2),
(26, 'XI DPIB', '2019-12-26 04:03:24', '2019-12-26 04:03:24', 6),
(27, 'XI KPR 1', '2019-12-26 04:03:37', '2019-12-26 04:03:37', 7),
(28, 'XI KPR 2', '2019-12-26 04:03:48', '2019-12-26 04:03:48', 7),
(31, 'XI KPR 3', '2019-12-26 04:04:44', '2019-12-26 04:04:44', 7),
(32, 'XI KPR 4', '2019-12-26 04:04:53', '2019-12-26 04:04:53', 7),
(33, 'XI MM 1', '2019-12-26 04:05:11', '2019-12-26 04:05:11', 3),
(34, 'XI MM 2', '2019-12-26 04:05:23', '2019-12-26 04:05:23', 3),
(35, 'XI MM 3', '2019-12-26 04:05:32', '2019-12-26 04:05:32', 3),
(36, 'XI RPL 1', '2019-12-26 04:05:50', '2019-12-26 04:05:50', 1),
(37, 'XI RPL 2', '2019-12-26 04:06:00', '2019-12-26 04:06:00', 1),
(38, 'XI SIJA', '2019-12-26 04:06:22', '2019-12-26 04:06:22', 5),
(39, 'XI TBSM 1', '2019-12-26 04:06:36', '2019-12-26 04:06:36', 9),
(40, 'XI TBSM 2', '2019-12-26 04:06:46', '2019-12-26 04:06:46', 9),
(41, 'XI TKJ 1', '2019-12-26 04:27:30', '2019-12-26 04:27:30', 4),
(42, 'XI TKJ 2', '2019-12-26 04:27:44', '2019-12-26 04:27:44', 4),
(43, 'XI TKJ 3', '2019-12-26 04:27:55', '2019-12-26 04:27:55', 4),
(44, 'XI TKJ 4', '2019-12-26 04:28:07', '2019-12-26 04:28:07', 4),
(45, 'XI TKR 1', '2019-12-26 04:28:53', '2019-12-26 04:28:53', 8),
(46, 'XI TKR 2', '2019-12-26 04:29:04', '2019-12-26 04:29:04', 8),
(47, 'XI TKR 3', '2019-12-26 04:29:15', '2019-12-26 04:29:15', 8),
(48, 'XII ANM', '2019-12-26 04:29:31', '2019-12-26 04:29:31', 2),
(49, 'XII DPIB', '2019-12-26 04:29:46', '2019-12-26 04:29:46', 6),
(50, 'XII KPR 1', '2019-12-26 04:30:52', '2019-12-26 04:30:52', 7),
(51, 'XII KPR 2', '2019-12-26 04:31:05', '2019-12-26 04:31:05', 7),
(52, 'XII KPR 3', '2019-12-26 04:31:14', '2019-12-26 04:31:14', 7),
(53, 'XII MM 1', '2019-12-26 04:31:27', '2019-12-26 04:31:27', 3),
(54, 'XII MM 2', '2019-12-26 04:31:44', '2019-12-26 04:31:44', 3),
(55, 'XII MM 3', '2019-12-26 04:32:20', '2019-12-26 04:32:20', 3),
(56, 'XII RPL 1', '2019-12-26 04:32:32', '2019-12-26 04:32:32', 1),
(57, 'XII RPL 2', '2019-12-26 04:32:41', '2019-12-26 04:32:41', 1),
(58, 'XII TBSM 1', '2019-12-26 04:33:38', '2019-12-26 04:33:38', 9),
(59, 'XII TBSM 2', '2019-12-26 04:33:58', '2019-12-26 04:33:58', 9),
(60, 'XII TKJ 1', '2019-12-26 04:34:11', '2019-12-26 04:34:11', 4),
(61, 'XII TKJ 2', '2019-12-26 04:34:19', '2019-12-26 04:34:19', 4),
(62, 'XII TKJ 3', '2019-12-26 04:34:29', '2019-12-26 04:34:29', 4),
(63, 'XII TKJ 4', '2019-12-26 04:34:37', '2019-12-26 04:34:37', 4),
(64, 'XII TKR 1', '2019-12-26 04:34:50', '2019-12-26 04:34:50', 8),
(65, 'XII TKR 2', '2019-12-26 04:34:59', '2019-12-26 04:34:59', 8),
(66, 'XII TKR 3', '2019-12-26 04:35:08', '2019-12-26 04:35:08', 8);

-- --------------------------------------------------------

--
-- Table structure for table `levels_exams`
--

CREATE TABLE `levels_exams` (
  `levels_id` int(11) NOT NULL,
  `examsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Rekayasa Perangkat Lunak', '2019-11-17 15:52:15', '2019-11-17 15:52:15'),
(2, 'Animasi', '2019-11-18 13:32:19', '2019-11-18 13:32:19'),
(3, 'Multimedia', '2019-11-18 13:32:30', '2019-11-18 13:32:30'),
(4, 'Teknik Komputer dan Jaringan', '2019-11-18 13:32:44', '2019-11-18 13:32:44'),
(5, 'Sistem Informasi Jaringan dan Aplikasi', '2019-11-18 13:33:43', '2019-11-18 13:33:43'),
(6, 'Desain Pemodelan dan Informasi Bangunan', '2019-11-18 13:34:03', '2019-12-28 15:28:03'),
(7, 'Keperawatan', '2019-11-18 13:34:16', '2019-11-18 13:34:16'),
(8, 'Teknik Kendaraan Ringan', '2019-11-18 13:34:26', '2019-11-18 13:34:26'),
(9, 'Teknik dan Bisnis Sepeda Motor', '2019-11-18 13:35:01', '2019-11-18 13:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `manager_files`
--

CREATE TABLE `manager_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` enum('0','1','2') NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_files`
--

INSERT INTO `manager_files` (`id`, `name`, `file`, `type`, `created`) VALUES
(24, 'Bima Laksana Putra', '17eeeb60c25ed0b798d2a6b739ba01cba6500f74.jpg', '0', '2020-01-25 17:53:58'),
(25, 'Guitar', '1a816b9c0a0d9a9f9f71b9ead6b818ba26478476.wav', '1', '2020-01-25 17:55:29'),
(26, 'Suliyana Bohoso Moto', '3d549141e57792f8afa680c3e400aca8214b3959.mp3', '1', '2020-01-25 18:29:37'),
(27, 'bima', '927bf0d4d96fd5ccb731feb177fdb9304069487a.jpg', '0', '2020-01-25 19:08:18'),
(29, 'Bima Laksana Putra, S.ST', '1697fc7e68555a2b7f37d489425f6cddcdccf15c.jpg', '0', '2020-01-25 21:17:23'),
(31, 'Bima Werkudara', '1697fc7e68555a2b7f37d489425f6cddcdccf15cbdae.jpg', '0', '2020-01-25 21:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_1` text DEFAULT NULL,
  `option_2` text DEFAULT NULL,
  `option_3` text DEFAULT NULL,
  `option_4` text DEFAULT NULL,
  `option_5` text DEFAULT NULL,
  `question_media` int(11) DEFAULT NULL,
  `option1_media` int(11) DEFAULT NULL,
  `option2_media` int(11) DEFAULT NULL,
  `option3_media` int(11) DEFAULT NULL,
  `option4_media` int(11) DEFAULT NULL,
  `option5_media` int(11) DEFAULT NULL,
  `correct_answer` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_courses`
--

CREATE TABLE `question_courses` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `total_question` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_courses`
--

INSERT INTO `question_courses` (`id`, `tahun_ajaran`, `total_question`, `created`, `modified`, `teacher_id`, `course_id`) VALUES
(1, '2019-2020', 40, '2020-01-18 23:05:50', '2020-01-18 23:05:50', 78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `total_grade` int(11) NOT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userame` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nis`, `name`, `userame`, `password`, `email`, `phone`, `address`, `created`, `modified`, `level_id`) VALUES
(1, '4530/410.063', 'Bima Laksana Putra', '39847292', 'asdf1234', 'werkudara94@gmail.com', '085707749997', 'Jl. Pelabuhan Bakahuno No 1 Bakalankrajan\r\nSMKN 11MALANG', '2020-01-18 23:02:58', '2020-01-18 23:02:58', 11),
(2, '5434/410.063', 'Mia Khalifa', '398472131', 'asdf1234', 'mia@mail.com', '085707749997', 'Jl. Pelabuhan Bakahuno No 1 Bakalankrajan\r\nSMKN 11MALANG', '2020-01-18 23:40:12', '2020-01-18 23:40:12', 12);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `nip`, `email`, `phone`, `address`, `created`, `modified`, `user_id`) VALUES
(1, 'Drs. Gunawan Dwiyono, S.ST, M.Pd', '19670930 199512 1 002', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(2, 'Sri Wahyuni, S.Pd', '19630618 198512 2 002', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(3, 'Dra. Tutik Sulistyowati', '19620502 198703 2 012', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(4, 'Dra. Anggraeni S', '19611031 198803 2 003', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(5, 'Drs. Soetrisno, MM', '19620203 198902 1 003', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(6, 'Didit Fajar', '19650316 199112 1 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(7, 'Dra. Silviani', '19670825 199103 2 005', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(8, 'Dwi Novianto, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(9, 'Drs. M. Alfan', '19680808 199702 1 004', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(10, 'Edi Purwanto, BA', '19600924 198203 1 005', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(11, 'Eva Leona A, S.Pd', '19770811 200312 2 007', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(12, 'Endah Suaku, SS, MA', '19660614 200312 2 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(13, 'Imam Ghozali, S.Ag', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(14, 'Drs. Suryanto, M.Pd', '19670605 199303 1 014', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(15, 'Dra. Eli Sunarsih', '19680703 201407 2 004', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(16, 'Baroroh Rohmah,S.Pd', '19710503 200501 2 011', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(17, 'Saifudin, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(18, 'Kasmonah, S.Pd', '19660214 199003 2 012', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(19, 'Dedi Restu, S.Pd', '19811216 201403 1 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(20, 'Ristina Wahyuni, M.Pd', '19791013 200604 2 021', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(21, 'Muh. Rizqi Prayogo, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(22, 'Eko Setyawan, S.Pd', '19811011 200604 1 017', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(23, 'Dewi Huzaimah, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(24, 'Delby Silvia I, M.Pd', '19800316 200604 2 018', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(25, 'Nikmatul Makrifah,S.Pd', '19800703 200604 2 026', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(26, 'Drs.F U Haryono', '19620927 200801 1 003', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(27, 'Dra. Annekewati', '19611216 200701 2 004', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(28, 'Santi Praptiani,M.Pd', '19770717 200604 2 046', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(29, 'Diana Nur Utami, M.Pd', '19750422 200903 2 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(30, 'Yuyut Setyorini, S.Pd', '19790314 200903 2 003', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(31, 'Siti Ulfatu Nikmah, S.Pd', '', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(32, 'Wiwik Wicaksono,S.Pd', '19690920 201406 2 005', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(33, 'Dra. Siti Anisah', '19671027 201406 2 002', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(34, 'Dra. Sri Lestari S', '19630916 201406 2 002', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(35, 'Haryadi,S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(36, 'Qurrotul Aini,S.Ag', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(37, 'Rahma Widarti, S.Pd', '19790721 201407 2 002', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(38, 'Drs.Gerardus Gili ', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(39, 'M. Fuad Rizka, S.Kom', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(40, 'Bambang Soetrisno, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(41, 'Trianto Atmojo, S.Pd', '19740208 201409 1 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(43, 'Yuda Eka Pratama,S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(44, 'Aditya Dewata, ST', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(45, 'Iin Widyawati, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(46, 'Dodik Budi P,S.Pd', '19800314 201001 1 020', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(47, 'Novita Nuraini, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(48, 'Marta Ery Iskandar, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(49, 'Hendrik Wahyudi, S.Pd', '19800422 201001 1 012', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(50, 'Erwin Tito A, S.Sn', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(51, 'Slamet Wahyudianto, S.Pd', '19800612 201001 1 023', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(52, 'Kusmadi, S.ST', '19831208 201001 1 016', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(53, 'Dian Tri Wulandari, S.Sn', '19830325 201001 2 030', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(54, 'Budiyanti, S.Pd', '19700911 201001 2 004', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(55, 'Denny Hendrifika S, S.Sn', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(56, 'Siti Khoiriyah, S.ST', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(57, 'M. Arief Darmansyah, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(58, 'Maulida Pratamasari, S.Kep', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(59, 'Aditya Noorman Yudha W, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(60, 'Kustiani, S.Ag', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(61, 'Yuanita Prihatiningsih, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(62, 'Solikin, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(63, 'Nanik Nurhayati, S.Kep', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(64, 'Imam Badrudin, S.Kom', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(65, 'Sutopo, S.Pd', '19610412 198403 1 015', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(66, 'Dewi Yuda Ningrat, S.Pd', '19931215 201903 2 019', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(67, 'Akbar Joko A.Y, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(68, 'Winda Dwi S, S.Kep', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(69, 'Heny Ekawati S, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(70, 'Tutut Erna P, S.Pd', '19700419 201407 2 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(71, 'Rizki Isfandri Wijaya, S.Pd', '19911216 201903 1 011', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(72, 'Wiyana Eva Cuntaka, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(73, 'Rian Kusumas Tutik, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(74, 'Hikmah Ilmiyana, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(75, 'M. Syakroni, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(76, 'Willy Alga S, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(77, 'Mutomimah, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(78, 'Bima Laksana Putra, S.ST', '-', 'bimalaksanaw@smkjatim.id', '085707749997', 'Perum BMI Blok U2 No 18 Malang', '2019-12-26 03:56:19', '2020-01-18 22:50:31', 1),
(79, 'Nur Kholis', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(80, 'Febri Yuni Kartika, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(81, 'Nur Salimah, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(82, 'Alan Tri Anafi, S.Pd', '19920508 201903 1 007', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(83, 'Rahadhian Adhiwardhana, S.Pd, MT', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(84, 'Ananda Septi Kartika Putri ', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(85, 'Misti Madyarini, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(86, 'Galih Adhi Kurniawan, S.Pd', '19940424 201903 1 011', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(87, 'Mochamad Nurul Ansory, S.Pd', '19720416 201407 1 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(88, 'Triasih Janarti, S.Pd', '19950104 201903 2 014', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(89, 'Sufiatul Munadhiroh, S.Ag, M.Ag', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(90, 'Drs. Misbahul Munir', '196511141 199003 1 001', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(91, 'Azizi Purwita, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(92, 'Ulum Hilmatus Syahara, S.Pd', '-', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL),
(93, 'Irza Aulia Noviyanti, S.Pd', '19941127 201903 2 015', NULL, NULL, 'NULL', '2019-12-26 03:56:19', '2019-12-26 03:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `total_hours` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`id`, `tahun_ajaran`, `semester`, `total_hours`, `created`, `modified`, `teacher_id`, `course_id`, `level_id`) VALUES
(2, '2019-2020', 'Genap', 34, '2020-01-25 12:42:44', '2020-01-25 12:42:44', 78, 2, NULL),
(7, '2019-2020', 'Ganjil', 12, '2020-01-25 13:16:52', '2020-01-25 13:16:52', 78, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Guru','Admin') NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `created`, `modified`) VALUES
(1, 'bima', 'bima', 'Admin', '2020-01-14 15:47:24', '2020-01-14 15:47:24'),
(2, 'putra', 'putra', 'Guru', '2020-01-14 15:47:40', '2020-01-14 15:47:40'),
(3, 'laksana', 'laksana', 'Guru', '2020-01-14 23:18:43', '2020-01-14 23:18:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKanswers797820` (`student_id`),
  ADD KEY `FKanswers342352` (`question_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `FKexams389373` (`course_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `FKlevels306134` (`major_id`);

--
-- Indexes for table `levels_exams`
--
ALTER TABLE `levels_exams`
  ADD PRIMARY KEY (`levels_id`,`examsid`),
  ADD KEY `examsid` (`examsid`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `manager_files`
--
ALTER TABLE `manager_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKquestions551456` (`course_id`);

--
-- Indexes for table `question_courses`
--
ALTER TABLE `question_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKquestion_c391838` (`course_id`),
  ADD KEY `FKquestion_c981160` (`teacher_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKresults489984` (`exam_id`),
  ADD KEY `FKresults149661` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `name` (`name`),
  ADD KEY `FKstudents732985` (`level_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `FKteachers770221` (`user_id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKteacher_co332932` (`teacher_id`),
  ADD KEY `FKteacher_co743609` (`course_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `token` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manager_files`
--
ALTER TABLE `manager_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_courses`
--
ALTER TABLE `question_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `FKanswers342352` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKanswers797820` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `FKexams389373` FOREIGN KEY (`course_id`) REFERENCES `question_courses` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `FKlevels306134` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `levels_exams`
--
ALTER TABLE `levels_exams`
  ADD CONSTRAINT `levels_exams_ibfk_1` FOREIGN KEY (`examsid`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `levels_exams_ibfk_2` FOREIGN KEY (`levels_id`) REFERENCES `levels` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `FKquestions551456` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `question_courses`
--
ALTER TABLE `question_courses`
  ADD CONSTRAINT `FKquestion_c391838` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKquestion_c981160` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `FKresults149661` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKresults489984` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FKstudents732985` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `FKteachers770221` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD CONSTRAINT `FKteacher_co332932` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `FKteacher_co743609` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `teacher_courses_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
