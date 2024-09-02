-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abroad study`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_followup`
--

CREATE TABLE `add_followup` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `audio_url` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_followup`
--

INSERT INTO `add_followup` (`id`, `title`, `audio_url`, `topic`) VALUES
(1, 'follow-up1', 'audio-641dcbe288dd73.20422405.mp3', 'Hotel'),
(2, 'follow-up2', 'audio-641dcc2e674fe0.91681434.mp3', 'Wedding and happy  marriage'),
(3, 'follow-up3', 'audio-641dcc5e038122.59293337.mp3', 'Family'),
(4, 'follow-up 5', 'audio-642013a1237d73.66961269.mp3', 'complaint about'),
(5, 'follow-up 6', 'audio-6420142b356163.78932902.mp3', 'comedian that you think'),
(6, 'follow-up 7', 'audio-64201443798e49.02139188.mp3', 'historical period');

-- --------------------------------------------------------

--
-- Table structure for table `add_intro`
--

CREATE TABLE `add_intro` (
  `id` int(100) NOT NULL,
  `audio_url` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_intro`
--

INSERT INTO `add_intro` (`id`, `audio_url`, `title`, `topic`) VALUES
(18, 'audio-641e821c8e9276.64379660.m4a', 'Introduction 6', 'fruit'),
(19, 'audio-641e823ed482d2.20616077.m4a', 'Introduction 5', 'Learning'),
(20, 'audio-641e82520b1f77.16529383.m4a', 'Introduction 4', 'plans'),
(21, 'audio-641e9ade36a624.08710959.m4a', 'Introduction 3', 'environment'),
(22, 'audio-641f321a46b864.79013460.m4a', 'Introduction 2', 'cooking'),
(23, 'audio-641f324a47efe7.33624504.m4a', 'introduction 1', 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_listening`
--

CREATE TABLE `pdf_listening` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_listening`
--

INSERT INTO `pdf_listening` (`id`, `title`, `source`) VALUES
(1, 'test 1', 'https://www.youtube.com/embed/wamWZym8Kjk'),
(2, 'test 2', 'https://www.youtube.com/embed/2gdDhl0Lcgo'),
(3, 'test 3', 'https://www.youtube.com/embed/2gdDhl0Lcgo'),
(4, 'test 3', 'https://www.youtube.com/embed/Op9huduXZ5A');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_reading`
--

CREATE TABLE `pdf_reading` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_reading`
--

INSERT INTO `pdf_reading` (`id`, `title`, `url`) VALUES
(1, 'Test 3', 'https://drive.google.com/file/d/1QoyrWDjoAmUdt025D9eFIjaRJa-69O-D/preview'),
(2, 'Test 2', 'https://drive.google.com/file/d/1NXTpIiC04SAFe6jDrophWPxdqZmGIrNw/preview\r\n'),
(3, 'Test 1', 'https://drive.google.com/file/d/1k_Jms5RB9VIqAqQN-zjwY8R_PW_dDpj8/preview\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_writing1`
--

CREATE TABLE `pdf_writing1` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_writing1`
--

INSERT INTO `pdf_writing1` (`id`, `title`, `url`) VALUES
(1, 'Pdf 3', 'https://drive.google.com/file/d/14jkTcXl3i-mu3VeAolB6c8-2nDbEqFl0/preview'),
(2, 'pdf 2', 'https://drive.google.com/file/d/1kzNtAQzFxIJgSx9COxzpOnNtyDcAN5HX/preview'),
(3, 'pdf 1', 'https://drive.google.com/file/d/14jkTcXl3i-mu3VeAolB6c8-2nDbEqFl0/preview');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_writing2`
--

CREATE TABLE `pdf_writing2` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_writing2`
--

INSERT INTO `pdf_writing2` (`id`, `title`, `url`) VALUES
(1, 'Test 2', 'https://drive.google.com/file/d/1VIVU7vlF4Rer_BK2CtHuEVriRq3xhJMy/preview'),
(2, 'Test 1', 'https://drive.google.com/file/d/1vXrKkSJL_YwinIg38OxccsVMlykdKDLB/preview');

-- --------------------------------------------------------

--
-- Table structure for table `quecard`
--

CREATE TABLE `quecard` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `audio_url` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quecard`
--

INSERT INTO `quecard` (`id`, `title`, `audio_url`, `topic`) VALUES
(1, 'Que-crad 1', 'audio-641dc2e722bb99.04819101.mp3', 'Decribe toursit attarcation'),
(2, 'Que-crad 2', 'audio-641dc2ffb10e56.49466228.mp3', 'Describe speacial hotel'),
(3, 'Que-crad 3', 'audio-641dc311e98679.21705242.mp3', 'Decribe toursit attarcation'),
(5, 'que-card 4', 'audio-64200941bd5833.87172816.mp3', 'Describe a famous person'),
(6, 'que-card 5', 'audio-64200b453c7859.35250364.mp3', 'decribe a leisure time'),
(7, 'que-card 6', 'audio-64200b75747251.56551801.mp3', 'decribe a sweet home');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `score` varchar(50) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `name`, `score`, `image`) VALUES
(1, 'jay roy', '6.5 band', 'person-2.jpeg'),
(2, 'mira mirza', '7.5 band', 'person-1.jpg'),
(3, 'romil modi', '7.0 band', 'person-4.jpg'),
(4, 'siya shah', '6.0 band', 'person-6.jpeg'),
(5, 'hiren birala', '6.5 band', 'person-5.jpg'),
(6, 'ruhi singh', '8.5 band', 'person-3.avif');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`Name`, `Email`, `Password`) VALUES
('fenil', 'fenilghevariya5577@gmail.com', '$2y$10$Qq8vLxnekZTK/wTvq7K.Dueq0JPF6lsIqcixE07d8uXsnwk70YFsm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addbook`
--

CREATE TABLE `tbl_addbook` (
  `id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_price` varchar(30) NOT NULL,
  `book_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addbook`
--

INSERT INTO `tbl_addbook` (`id`, `book_name`, `book_price`, `book_image`) VALUES
(10, 'reading1', '222', 'img11.jpg'),
(12, 'reading', '300', 'img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `experiance` varchar(255) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `images`, `experiance`, `skills`, `age`, `education`) VALUES
(5, 'mrs. savita maheta', 'person-1.jpg', '2 year', 'english communication', 43, 'bba 3 year ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_followup`
--
ALTER TABLE `add_followup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_intro`
--
ALTER TABLE `add_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_listening`
--
ALTER TABLE `pdf_listening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_reading`
--
ALTER TABLE `pdf_reading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_writing1`
--
ALTER TABLE `pdf_writing1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_writing2`
--
ALTER TABLE `pdf_writing2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quecard`
--
ALTER TABLE `quecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_addbook`
--
ALTER TABLE `tbl_addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_followup`
--
ALTER TABLE `add_followup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `add_intro`
--
ALTER TABLE `add_intro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pdf_listening`
--
ALTER TABLE `pdf_listening`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf_reading`
--
ALTER TABLE `pdf_reading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pdf_writing1`
--
ALTER TABLE `pdf_writing1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pdf_writing2`
--
ALTER TABLE `pdf_writing2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quecard`
--
ALTER TABLE `quecard`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_addbook`
--
ALTER TABLE `tbl_addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
