-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:44 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitadt`
--

-- --------------------------------------------------------

--
-- Table structure for table `educationalqualification`
--

CREATE TABLE `educationalqualification` (
  `id` int(255) NOT NULL,
  `Userid` int(255) DEFAULT NULL,
  `ExamPassed` varchar(1000) DEFAULT NULL,
  `PrincipalSubject` varchar(1000) DEFAULT NULL,
  `BoardUniversity` varchar(1000) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL,
  `Marks` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `AdharCard` varchar(12) DEFAULT NULL,
  `Empid` varchar(1000) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Designation` varchar(1000) DEFAULT NULL,
  `LoginStatus` varchar(1000) DEFAULT NULL,
  `Branch` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `AdharCard`, `Empid`, `Password`, `Designation`, `LoginStatus`, `Branch`) VALUES
(1, '123456', '1020231', '123456', 'Assistant Professor', '1', 'CSE'),
(2, '324598760123', '1020084', '123456', 'Professor (HOD)', '1', 'CSE'),
(3, '012345678978', '1020090', '123789', 'Associate Professor', '1', 'CSE'),
(4, '789456123789', '1020092', '456789', 'Assistant Professor', '1', 'CSE'),
(5, '456789456123', '1020300', '789123', 'Professor', '0', 'CSE'),
(6, '741852963741', '1020079  ', '741852', 'Principal Dean (R&D)', '1', 'NULL'),
(7, '963852741852', '1020309', '963852', 'Teaching Assistant', '1', 'CSE'),
(8, '963852741025', '1020101', '159951', 'Associate Professor', '0', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `id` int(255) NOT NULL,
  `Userid` int(255) DEFAULT NULL,
  `NameOfFacultyMember` varchar(1000) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `DateOfJoining` date DEFAULT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `Age` int(255) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `MaritalStatus` varchar(100) DEFAULT NULL,
  `NoOfChildren` int(255) DEFAULT NULL,
  `NoOfDependent` int(255) DEFAULT NULL,
  `Nationality` varchar(1000) DEFAULT NULL,
  `Religion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `Userid`, `NameOfFacultyMember`, `Email`, `DateOfJoining`, `FatherName`, `Age`, `DOB`, `Gender`, `MaritalStatus`, `NoOfChildren`, `NoOfDependent`, `Nationality`, `Religion`) VALUES
(1, 2, 'Prof.Dr.Rajneeshkaur Karamsingh Bedi', 'rajni.sachdeo@mituniversity.edu.in', '2017-06-01', 'Karamsingh Bedi', 41, '1972-04-28', 'Female', 'Married', 2, 2, 'Indian', 'Hindu'),
(2, 3, 'Prof.Reena Dinesh Pagare', 'reena.pagare@mituniversity.edu.in', '2018-02-19', 'Dinesh Pagare', 34, '1987-01-12', 'Female', 'Married', 1, 2, 'Indian', 'Hindu'),
(8, 4, 'Nagesh Jadhav', '', NULL, 'Narayan', 0, '1995-05-10', 'Male', 'Married', NULL, 1, 'Indian', 'Hindu'),
(9, 1, 'Sonali Deshpande', '', NULL, 'ABC', NULL, '1994-03-10', 'Female', 'Married', NULL, 2, 'Indian', 'Hindu'),
(10, 7, 'Gunjan Shekhat', '', NULL, 'Bharatbhai', NULL, '1998-10-04', 'Male', 'No', NULL, 0, 'Indian', 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `section_i`
--

CREATE TABLE `section_i` (
  `id` int(255) NOT NULL,
  `Userid` int(255) NOT NULL,
  `Activity1` varchar(1000) NOT NULL,
  `Activity2` varchar(1000) DEFAULT NULL,
  `Activity3` varchar(1000) DEFAULT NULL,
  `Activity4` varchar(1000) DEFAULT NULL,
  `Activity5` varchar(1000) DEFAULT NULL,
  `Activity6` varchar(1000) NOT NULL,
  `Activity1HR` varchar(255) DEFAULT NULL,
  `Activity2HR` varchar(255) DEFAULT NULL,
  `Activity3HR` varchar(255) DEFAULT NULL,
  `Activity4HR` varchar(255) DEFAULT NULL,
  `Activity5HR` varchar(255) DEFAULT NULL,
  `Activity6HR` varchar(255) DEFAULT NULL,
  `Activity1PR` varchar(255) DEFAULT NULL,
  `Activity2PR` varchar(255) DEFAULT NULL,
  `Activity3PR` varchar(255) DEFAULT NULL,
  `Activity4PR` varchar(255) DEFAULT NULL,
  `Activity5PR` varchar(255) DEFAULT NULL,
  `Activity6PR` varchar(255) DEFAULT NULL,
  `MaxApiScore` varchar(1000) NOT NULL,
  `TotalSelfRating` varchar(1000) NOT NULL,
  `TotalHodRating` varchar(255) DEFAULT NULL,
  `TotalDirectorPrincipalRating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_i`
--

INSERT INTO `section_i` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity6`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity6HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `Activity6PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '4', '4', '4', '4', '4', '4', '9', '8', '7', '11', '5', '8', '15', '15', '15', '15', '8', '8', '', '24', '48', '76'),
(2, 4, '19', '16', '18', '17', '8', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '87', NULL, NULL),
(3, 1, '19', '17', '15', '12', '7', '8', '18', '16', '16', '12', '8', '9', '18', '17', '8', '12', '5', '7', '', '78', '79', '67'),
(7, 7, '15', '15', '15', '14', '8', '9', '15', '14', '15', '16', '9', '8', '15', '15', '15', '16', '7', '7', '', '76', '77', '75'),
(8, 7, '', '', '', '', '', '', '15', '14', '15', '16', '9', '8', '15', '15', '15', '16', '7', '7', '', '0', '77', '75');

-- --------------------------------------------------------

--
-- Table structure for table `section_ii`
--

CREATE TABLE `section_ii` (
  `id` int(255) NOT NULL,
  `Userid` int(255) NOT NULL,
  `Activity1` varchar(1000) NOT NULL,
  `Activity2` varchar(1000) DEFAULT NULL,
  `Activity3` varchar(1000) DEFAULT NULL,
  `Activity4` varchar(1000) DEFAULT NULL,
  `Activity5` varchar(1000) DEFAULT NULL,
  `Activity1HR` varchar(255) DEFAULT NULL,
  `Activity2HR` varchar(255) DEFAULT NULL,
  `Activity3HR` varchar(255) DEFAULT NULL,
  `Activity4HR` varchar(255) DEFAULT NULL,
  `Activity5HR` varchar(255) DEFAULT NULL,
  `Activity1PR` varchar(255) DEFAULT NULL,
  `Activity2PR` varchar(255) DEFAULT NULL,
  `Activity3PR` varchar(255) DEFAULT NULL,
  `Activity4PR` varchar(255) DEFAULT NULL,
  `Activity5PR` varchar(255) DEFAULT NULL,
  `MaxApiScore` varchar(1000) DEFAULT NULL,
  `TotalSelfRating` varchar(1000) DEFAULT NULL,
  `TotalHodRating` varchar(1000) NOT NULL,
  `TotalDirectorPrincipalRating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_ii`
--

INSERT INTO `section_ii` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '6', '6', '6', '6', '6', '4', '8', '10', '9', '7', '6', '6', '6', '', '6', NULL, '30', '38', '24'),
(2, 7, '8', '9', '7', '8', '8', '8', '9', '8', '7', '8', '8', '9', '7', '', '7', NULL, '40', '40', '31');

-- --------------------------------------------------------

--
-- Table structure for table `section_iii`
--

CREATE TABLE `section_iii` (
  `id` int(255) NOT NULL,
  `Userid` int(255) NOT NULL,
  `Activity1` varchar(1000) NOT NULL,
  `Activity2` varchar(1000) DEFAULT NULL,
  `Activity3` varchar(1000) DEFAULT NULL,
  `Activity4` varchar(1000) DEFAULT NULL,
  `Activity1HR` varchar(255) DEFAULT NULL,
  `Activity2HR` varchar(255) DEFAULT NULL,
  `Activity3HR` varchar(255) DEFAULT NULL,
  `Activity4HR` varchar(255) DEFAULT NULL,
  `Activity1PR` varchar(255) DEFAULT NULL,
  `Activity2PR` varchar(255) DEFAULT NULL,
  `Activity3PR` varchar(255) DEFAULT NULL,
  `Activity4PR` varchar(255) DEFAULT NULL,
  `MaxApiScore` varchar(1000) DEFAULT NULL,
  `TotalSelfRating` varchar(1000) NOT NULL,
  `TotalHodRating` varchar(1000) NOT NULL,
  `TotalDirectorPrincipalRating` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_iii`
--

INSERT INTO `section_iii` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '3', '3', '3', '3', '5', '5', '1', '8', '3', '3', '3', '3', NULL, '12', '19', '12'),
(2, 7, '8', '4', '4', '10', '8', '4', '4', '7', '8', '4', '3', '8', NULL, '26', '23', '23');

-- --------------------------------------------------------

--
-- Table structure for table `section_iv`
--

CREATE TABLE `section_iv` (
  `id` int(255) NOT NULL,
  `Userid` int(255) NOT NULL,
  `Activity1` varchar(1000) NOT NULL,
  `Activity2` varchar(1000) DEFAULT NULL,
  `Activity3` varchar(1000) DEFAULT NULL,
  `Activity4` varchar(1000) DEFAULT NULL,
  `Activity1HR` varchar(255) DEFAULT NULL,
  `Activity2HR` varchar(255) DEFAULT NULL,
  `Activity3HR` varchar(255) DEFAULT NULL,
  `Activity4HR` varchar(255) DEFAULT NULL,
  `Activity1PR` varchar(255) DEFAULT NULL,
  `Activity2PR` varchar(255) DEFAULT NULL,
  `Activity3PR` varchar(255) DEFAULT NULL,
  `Activity4PR` varchar(255) DEFAULT NULL,
  `MaxApiScore` varchar(1000) DEFAULT NULL,
  `TotalSelfRating` varchar(1000) NOT NULL,
  `TotalHodRating` varchar(1000) NOT NULL,
  `TotalDirectorPrincipalRating` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_iv`
--

INSERT INTO `section_iv` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '2', '2', '2', '2', NULL, NULL, NULL, NULL, '2', '2', '2', '2', NULL, '8', '', '8'),
(2, 7, '4', '4', '3', '5', '', '3', '4', '5', '4', '4', '3', '4', NULL, '16', '12', '15');

-- --------------------------------------------------------

--
-- Table structure for table `section_v`
--

CREATE TABLE `section_v` (
  `id` int(255) NOT NULL,
  `Userid` int(255) NOT NULL,
  `Activity1` varchar(1000) NOT NULL,
  `Activity2` varchar(1000) DEFAULT NULL,
  `Activity3` varchar(1000) DEFAULT NULL,
  `Activity4` varchar(1000) DEFAULT NULL,
  `Activity5` varchar(1000) DEFAULT NULL,
  `Activity1HR` varchar(255) DEFAULT NULL,
  `Activity2HR` varchar(255) DEFAULT NULL,
  `Activity3HR` varchar(255) DEFAULT NULL,
  `Activity4HR` varchar(255) DEFAULT NULL,
  `Activity5HR` varchar(255) DEFAULT NULL,
  `Activity1PR` varchar(255) DEFAULT NULL,
  `Activity2PR` varchar(255) DEFAULT NULL,
  `Activity3PR` varchar(255) DEFAULT NULL,
  `Activity4PR` varchar(255) DEFAULT NULL,
  `Activity5PR` varchar(255) DEFAULT NULL,
  `TotalSelfRating` varchar(1000) DEFAULT NULL,
  `TotalHodRating` varchar(1000) DEFAULT NULL,
  `TotalDirectorPrincipalRating` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_v`
--

INSERT INTO `section_v` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '3', '2', '1', '4', '5', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '15', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(255) NOT NULL,
  `Userid` int(255) DEFAULT NULL,
  `SectionI` varchar(1000) DEFAULT NULL,
  `SectionII` varchar(1000) NOT NULL,
  `SectionIII` varchar(1000) NOT NULL,
  `SectionIV` varchar(1000) NOT NULL,
  `SectionV` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `Userid`, `SectionI`, `SectionII`, `SectionIII`, `SectionIV`, `SectionV`) VALUES
(1, 3, '1', '1', '1', '1', '0'),
(2, 4, '1', '0', '0', '0', '0'),
(3, 1, '1', '1', '1', '1', '0'),
(4, 7, '1', '1', '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `workexperience`
--

CREATE TABLE `workexperience` (
  `id` int(255) NOT NULL,
  `Userid` int(255) DEFAULT NULL,
  `NameOfEmployee` varchar(1000) DEFAULT NULL,
  `Duration` varchar(1000) DEFAULT NULL,
  `LastDesignation` varchar(1000) DEFAULT NULL,
  `JobProfile` varchar(1000) DEFAULT NULL,
  `Salary` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educationalqualification`
--
ALTER TABLE `educationalqualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`Userid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `section_i`
--
ALTER TABLE `section_i`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `section_ii`
--
ALTER TABLE `section_ii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `section_iii`
--
ALTER TABLE `section_iii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `section_iv`
--
ALTER TABLE `section_iv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `section_v`
--
ALTER TABLE `section_v`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userid` (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educationalqualification`
--
ALTER TABLE `educationalqualification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section_i`
--
ALTER TABLE `section_i`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section_ii`
--
ALTER TABLE `section_ii`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_iii`
--
ALTER TABLE `section_iii`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_iv`
--
ALTER TABLE `section_iv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_v`
--
ALTER TABLE `section_v`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educationalqualification`
--
ALTER TABLE `educationalqualification`
  ADD CONSTRAINT `UserId` FOREIGN KEY (`Userid`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
