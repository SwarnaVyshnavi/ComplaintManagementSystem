-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 07:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dateof` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `filename` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `access` varchar(100) NOT NULL DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`sno`, `name`, `id`, `cat`, `type`, `dateof`, `description`, `dept`, `filename`, `status`, `access`) VALUES
(1, 'Swarna', '1', 'Library', 'Grivance', '2022-12-23', 'No books', 'cse', '', 'closed', 'H'),
(2, 'sowjanya', '2', 'Academics', 'type', '2022-12-23', 'syllabus delay', 'CSE', '', 'closed', 'H'),
(3, 'pavan kumar', '21l35a0519', 'Classroom', 'Grivance', '2002-03-01', 'In our classroom there is insufficiency of benches and some benches are not appropriate for student usage', 'cse', '', 'closed', 'H'),
(4, 'murali', '21l35a0523', 'Accounts and Billing', 'Complaint', '2002-07-13', 'im getting issues on my fee payment. i have paid my academic fee but its not updated.', 'cse', '', 'pending', 'H'),
(5, 'deepika', '21l35a0524', 'Library', 'Grivance', '2002-07-07', 'i would request you to allow smart gadgets can be carried while going to library.', 'cse', '', 'pending', 'H'),
(6, 'ravi', '21l35a0521', 'Canteen', 'Grivance', '2003-02-04', 'i would request the college authority to insist in the change the quality of the food that is being provided in the cafeteria', 'cse', '', 'In-processing', 'C'),
(7, 'Swarna', '1', 'Laboratories', 'Complaint', '2022-12-23', 'improper systems', 'cse', '', 'pending', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--
-- Error reading structure for table project.complaints: #1932 - Table &#039;project.complaints&#039; doesn&#039;t exist in engine
-- Error reading data for table project.complaints: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `project`.`complaints`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `cord`
--

CREATE TABLE `cord` (
  `sno` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cord`
--

INSERT INTO `cord` (`sno`, `id`, `name`, `mail`, `dept`, `pass`) VALUES
(1, '1', 'Swarna', 'swarnavyshnavi0111@gmail.com', 'CSE', '123'),
(2, '2', 'pavan', 'pavan@gmail.com', 'CSE', 'pavan1');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `sno` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`sno`, `id`, `name`, `mail`, `dept`, `pass`) VALUES
(1, '1', 'Swarna', 'swarnavyshnavi0111@gmail.com', 'cse', '123'),
(3, '2', 'ishak', 'ishaksk199@gmail.com', 'cse', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`sno`, `name`, `id`, `dep`, `email`, `pass`) VALUES
(1, 'Swarna', '1', 'cse', 'swarnavyshnavi0111@gmail.com', '123'),
(2, 'sowjanya', '2', 'CSE', 'sowjanya@gmail.com', '123'),
(3, 'pavan kumar', '21l35a0519', 'cse', 'pavanpebbuli44@gmail.com', 'Pavan@01'),
(4, 'murali', '21l35a0523', 'cse', 'muralibeast143@gmail.com', 'muralijhosna'),
(5, 'deepika', '21l35a0524', 'cse', 'deepika@gmail.com', 'deepika'),
(6, 'ravi', '21l35a0521', 'cse', 'ravi@gmail.com', 'rave1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cord`
--
ALTER TABLE `cord`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cord`
--
ALTER TABLE `cord`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
