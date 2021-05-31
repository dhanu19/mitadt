-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 05:31 PM
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
  `Marks` varchar(1000) DEFAULT NULL,
  `documentPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educationalqualification`
--

INSERT INTO `educationalqualification` (`id`, `Userid`, `ExamPassed`, `PrincipalSubject`, `BoardUniversity`, `Year`, `Marks`, `documentPath`) VALUES
(1, 115, 'Bachelor', 'CSE', 'MIT', 2009, '85', 'Documents/Educational/115_e_qualification_1.jpg'),
(2, 115, 'Jr College', 'Science', 'Pune', 2005, '95', 'Documents/Educational/115_e_qualification_2.jpg'),
(3, 6, 'vwsdvcw', 'acqd', 'sxcefw', 2012, '85', 'Documents/Educational/6_e_qualification_1.png'),
(4, 6, 'ascefws', 'acscew', 'acsefca', 2025, '76', 'Documents/Educational/6_e_qualification_2.jpg');

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
  `Branch` varchar(1000) DEFAULT NULL,
  `institution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `AdharCard`, `Empid`, `Password`, `Designation`, `LoginStatus`, `Branch`, `institution`) VALUES
(1, '123456789012', '1020231', '123456', 'Assistant Professor', '1', 'CSE', 'SOE'),
(2, '324598760123', '1020084', '123456', 'HOD', '1', 'CSE', 'SOE'),
(3, '012345678978', '1020090', '123789', 'Associate Professor', '1', 'CSE', 'SOE'),
(4, '789456123789', '1020092', '456789', 'Assistant Professor', '1', 'CSE', ''),
(5, '456789456123', '1020300', '789123', 'Professor', '1', 'CSE', ''),
(6, '741852963741', '1020079  ', '741852', 'Principal', '1', 'NULL', ''),
(7, '963852741852', '1020309', '963852', 'Teaching Assistant', '1', 'CSE', ''),
(8, '963852741025', '1020101', '159951', 'Associate Professor', '1', 'CSE', ''),
(9, '745689231015', '1020181', 'abcd', 'HOD', '0', 'AEROSPACE', ''),
(10, '465987210152', '1020088', 'asdf', 'HOD', '0', 'Applied Science & Huminities Department', ''),
(11, '845687523142', '1020056', 'qwerty', 'HOD', '0', 'CIVIL', ''),
(12, '126458632145', '1030014', 'zxcv', 'HOD', '0', 'ECE', ''),
(13, '452618569874', '1020085', 'mnop', 'HOD', '0', 'IT', ''),
(14, '852456985321', '1020001', '159159', 'HOD', '0', 'Mechanical', ''),
(15, '654321585465', '1020163', 'aqws', 'Assistant Professor', '0', 'AEROSPACE', ''),
(16, '456852145698', '1020219', '154154', 'Assistant Professor', '0', 'AEROSPACE', ''),
(17, '145875214596', '1020237', '123123', 'Assistant Professor', '0', 'AEROSPACE', ''),
(18, '542135685421', '1020238', '456456', 'Assistant Professor', '0', 'AEROSPACE', ''),
(19, '852145698521', '1020244', '789789', 'Assistant Professor', '0', 'AEROSPACE', ''),
(20, '152365896542', '1020282', '147147', 'Assistant Professor', '0', 'AEROSPACE', ''),
(21, '485265785623', '1020299', '963963', 'Assistant Professor', '0', 'AEROSPACE', ''),
(22, '495685214563', '1020263', 'cvbn', 'Teaching Assistant', '0', 'AEROSPACE', ''),
(23, '426581235469', '1020028', 'abc123', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(24, '564859654785', '1020011', 'qwertyasdf', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(25, '954687542365', '1020010', 'plm789', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(26, '125468524856', '1020059', 'fgh123', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(27, '756845962358', '1020060', 'trp789', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(28, '452156895632', '1020025', 'pkl456', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(29, '451236521458', '1020026', 'ghijk', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(30, '215365485236', '1020009', 'mnop148', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(31, '154856952354', '1020003', 'zxcv147', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(32, '954856324587', '1020077', 'zxcv159', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(33, '745632458623', '1020029', 'asdf369', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(34, '354685245698', '1020004', 'asdf147', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(35, '854235785698', '1020113', 'qwerty147', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(36, '414751495845', '1020134', 'qwerty456', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(37, '523685485698', '1020135', 'qwerty789', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(38, '845215699884', '1020175', 'asdf789', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(39, '654852365485', '1020184', 'asdf456', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(40, '523658745698', '1020190', 'qwerty159', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(41, '985632145687', '1020248', 'asdf123', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(42, '152365487569', '1020274', '123456', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(43, '123584567895', '1020270', 'dfgh', 'Assistant Professor', '0', 'Applied Science & Huminities Department', ''),
(44, '524867589562', '1020057', 'erty169', 'Assistant Professor', '0', 'CIVIL', ''),
(45, '410257387452', '1020110', 'ghi182', 'Assistant Professor', '0', 'CIVIL', ''),
(46, '257285723893', '1020080', 'kol495', 'Assistant Professor', '0', 'CIVIL', ''),
(47, '572827885874', '1020139', 'mnbv164', 'Assistant Professor', '0', 'CIVIL', ''),
(48, '387527487587', '1020140', 'zsax134', 'Assistant Professor', '0', 'CIVIL', ''),
(49, '872548279832', '1020173', 'mktl756', 'Assistant Professor', '0', 'CIVIL', ''),
(50, '650427545245', '1020172', 'cvgb167', 'Assistant Professor', '0', 'CIVIL', ''),
(51, '725472814278', '1020215', 'mkol45', 'Assistant Professor', '0', 'CIVIL', ''),
(52, '365489758578', '1020216', 'jfkl489', 'Assistant Professor', '0', 'CIVIL', ''),
(53, '278563825496', '1020214', 'cvbn456', 'Assistant Professor', '0', 'CIVIL', ''),
(54, '382456287968', '1020228', 'sdew123', 'Assistant Professor', '0', 'CIVIL', ''),
(55, '274527893327', '1020245', 'asxz', 'Assistant Professor', '0', 'CIVIL', ''),
(56, '897728792758', '1020304', 'azxs', 'Assistant Professor', '0', 'CIVIL', ''),
(57, '643854184865', '1020027', '52458', 'Professor', '0', 'ECE', ''),
(58, '754384124158', '1030016', '5458', 'Associate Professor', '0', 'ECE', ''),
(59, '941538476531', '1020089', 'cgjhvb', 'Associate Professor', '0', 'ECE', ''),
(60, '156484315215', '1020162', 'vgjhv', 'Assistant Professor', '0', 'ECE', ''),
(61, '648451658455', '1020165', 'kjbv', 'Assistant Professor', '0', 'ECE', ''),
(62, '851346384515', '1020166', 'cgnv', 'Assistant Professor', '0', 'ECE', ''),
(63, '348513845541', '1020171', 'kbjh', 'Assistant Professor', '0', 'ECE', ''),
(64, '345584854154', '1020187', '541584', 'Assistant Professor', '0', 'ECE', ''),
(65, '485631454875', '1020208', '574581', 'Teaching Assistant', '0', 'ECE', ''),
(66, '958481524565', '1020236', 'case', 'Assistant Professor', '0', 'ECE', ''),
(67, '841555209415', '1020229', '65415', 'Assistant Professor', '0', 'ECE', ''),
(68, '648531846521', '1020234', '454653', 'Assistant Professor', '0', 'ECE', ''),
(69, '845136845314', '1020303', '1354', 'Assistant Professor', '0', 'ECE', ''),
(70, '796413245122', '1020016', 'asdqw', 'Assistant Professor', '0', 'IT', ''),
(71, '486531684531', '1020022', 'vewd', 'Assistant Professor', '0', 'IT', ''),
(72, '986532684531', '1020006', 'jvgi', 'Assistant Professor', '0', 'IT', ''),
(73, '468531264853', '1020012', '574563', 'Assistant Professor', '0', 'IT', ''),
(74, '124516456464', '1020081', '25451', 'Assistant Professor', '0', 'IT', ''),
(75, '695346943519', '1020233', 'jvgb', 'Assistant Professor', '0', 'IT', ''),
(76, '465316564312', '1020260', 'jcghv', 'Assistant Professor', '0', 'IT', ''),
(77, '463512695493', '1020301', 'wefw', 'Assistant Professor', '0', 'IT', ''),
(78, '325486513548', '1020316', 'vrfw', 'Teaching Assistant', '0', 'IT', ''),
(79, '545248272548', '1020087', 'esvgwg', 'Associate Professor', '0', 'Mechanical', ''),
(80, '785278257288', '1020112', 'rvgsergw', 'Associate Professor', '0', 'Mechanical', ''),
(81, '736454567345', '1020002', 'evavs', 'Assistant Professor', '0', 'Mechanical', ''),
(82, '566985855555', '1020055', 'evwsgvw', 'Assistant Professor', '0', 'Mechanical', ''),
(83, '547876846785', '1020024', '42523', 'Assistant Professor', '0', 'Mechanical', ''),
(84, '425896742578', '1020052', '24f3w4f', 'Assistant Professor', '0', 'Mechanical', ''),
(85, '976354347587', '1020053', '24r2r43', 'Assistant Professor', '0', 'Mechanical', ''),
(86, '152486945787', '1020093', '24tfgtr', 'Associate Professor', '0', 'Mechanical', ''),
(87, '758249874257', '1020054', 'hbtfynr', 'Assistant Professor', '0', 'Mechanical', ''),
(88, '345867422758', '1020104', 'tedber', 'Assistant Professor', '0', 'Mechanical', ''),
(89, '783254368935', '1020137', 'nyrdr', 'Assistant Professor', '0', 'Mechanical', ''),
(90, '468974528748', '1020136', 'nyrdw', 'Assistant Professor', '0', 'Mechanical', ''),
(91, '159786548745', '1020161', 'ergtenj', 'Assistant Professor', '0', 'Mechanical', ''),
(92, '978645872678', '1020164', 'undrwg', 'Assistant Professor', '0', 'Mechanical', ''),
(93, '576897345734', '1020178', 'kdrht', 'Assistant Professor', '0', 'Mechanical', ''),
(94, '852436893457', '1020176', 'wsvgte', 'Assistant Professor', '0', 'Mechanical', ''),
(95, '258674673472', '1020186', 'Arbber', 'Assistant Professor', '0', 'Mechanical', ''),
(96, '236874357854', '1020188', '2353t5', 'Assistant Professor', '0', 'Mechanical', ''),
(97, '345867245683', '1020200', '23r425', 'Assistant Professor', '0', 'Mechanical', ''),
(98, '678524536453', '1020210', '787u56', 'Assistant Professor', '0', 'Mechanical', ''),
(99, '596845267245', '1020239', '5464yhe', 'Professor', '0', 'Mechanical', ''),
(100, '458645123634', '1020240', 'sdbsrg', 'Assistant Professor', '0', 'Mechanical', ''),
(101, '872586734678', '1020241', 'bszd', 'Assistant Professor', '0', 'Mechanical', ''),
(102, '523684753443', '1020242', 'evssaa', 'Assistant Professor', '0', 'Mechanical', ''),
(103, '143563424859', '1020243', 'vsedsgv', 'Assistant Professor', '0', 'Mechanical', ''),
(104, '387624567634', '1020250', 'grbsd', 'Professor', '0', 'Mechanical', ''),
(105, '578476834679', '1020262', 'svxdb', 'Assistant Professor', '0', 'Mechanical', ''),
(106, '234768435347', '1020262', 'xbdavds', 'Associate Professor', '0', 'Mechanical', ''),
(107, '428769458957', '1020306', 'dtbehry', 'Teaching Assistant', '0', 'Mechanical', ''),
(108, '254785857785', '1020313', 'aqegsrh', 'Assistant Professor', '0', 'Mechanical', ''),
(109, '585785854454', '1020091', 'aevgw', 'Assistant Professor', '0', 'CSE', ''),
(110, '875467894587', '1020005', 'rvfedv', 'Assistant Professor', '0', 'CSE', ''),
(111, '237684583784', '1020008', 'tegds', 'Assistant Professor', '0', 'CSE', ''),
(112, '963745374582', '1020138', '346333', 'Associate Professor', '0', 'CSE', 'SOE'),
(113, '125463784538', '1020160', '8765456', 'Assistant Professor', '0', 'CSE', 'SOE'),
(114, '587634536953', '1020158', 'fvgbyt', 'Assistant Professor', '0', 'CSE', 'SOE'),
(115, '785326745345', '1020177', 'fgbnhyuj', 'Assistant Professor', '1', 'CSE', 'SOE'),
(116, '537845358478', '1020169', '3456798', 'Assistant Professor', '0', 'CSE', ''),
(117, '783542386743', '1020167', 'dfinjhbg', 'Assistant Professor', '0', 'CSE', ''),
(118, '974523674595', '1020220', '87654345', 'Assistant Professor', '0', 'CSE', ''),
(119, '641283673489', '1020230', 'vghuty', 'Assistant Professor', '0', 'CSE', ''),
(120, '634782045874', '1020235', 'ervfbg', 'Associate Professor', '0', 'CSE', ''),
(121, '287673435873', '1020247', '123456', 'Assistant Professor', '0', 'CSE', ''),
(122, '397852378348', '1020249', 'oiuyghf', 'Assistant Professor', '0', 'CSE', ''),
(123, '348545254345', '1020261', '768954', 'Assistant Professor', '0', 'CSE', ''),
(124, '537453874589', '1020095', 'fdgvbyhu', 'Assistant Professor', '0', 'CSE', ''),
(125, '374852367846', '1020269', '657876543', 'Assistant Professor', '0', 'CSE', ''),
(126, '257634518735', '1020272', 'dfgbh', 'Assistant Professor', '0', 'CSE', ''),
(127, '158763452577', '1020296', '234567', 'Assistant Professor', '0', 'CSE', ''),
(128, '674502567845', '1020297', 'tbfvds', 'Assistant Professor', '0', 'CSE', ''),
(129, '326784528745', '1020298', '986578', 'Assistant Professor', '0', 'CSE', ''),
(130, '458752543678', '1020253', 'fgbgrte', 'Assistant Professor', '0', 'CSE', ''),
(131, '589743576845', '1020302', '45623567', 'Assistant Professor', '0', 'CSE', ''),
(132, '783458745478', '1020305', 'vgrtes', 'Assistant Professor', '0', 'CSE', ''),
(133, '589673453867', '1020307', '4823456', 'Teaching Assistant', '0', 'CSE', 'SOE'),
(134, '867415036748', '1020310', 'bfgdg', 'Associate Professor', '0', 'CSE', ''),
(135, '569745236784', '1020311', 'btyhr', 'Assistant Professor', '0', 'CSE', ''),
(136, '259845234587', '1020312', 'fvgbytr', 'Assistant Professor', '0', 'CSE', ''),
(137, '965434854378', '1020314', '3456y7', 'Teaching Assistant', '0', 'CSE', ''),
(138, '589743578345', '1020315', 'vgfer', 'Assistant Professor', '0', 'CSE', ''),
(139, '486531296874', '111111', '9999aaaa', 'Admin', '1', NULL, 'MIT');

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
  `Religion` varchar(1000) DEFAULT NULL,
  `profilePhoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `Userid`, `NameOfFacultyMember`, `Email`, `DateOfJoining`, `FatherName`, `Age`, `DOB`, `Gender`, `MaritalStatus`, `NoOfChildren`, `NoOfDependent`, `Nationality`, `Religion`, `profilePhoto`) VALUES
(1, 2, 'Prof.Dr.Rajneeshkaur Karamsingh Bedi', 'rajni.sachdeo@mituniversity.edu.in', '2017-06-01', 'Karamsingh Bedi', 41, '1972-04-28', 'Female', 'Married', 2, 2, 'Indian', 'Hindu', ''),
(2, 3, 'Prof.Reena Dinesh Pagare', 'reena.pagare@mituniversity.edu.in', '2018-02-19', 'Dinesh Pagare', 34, '1987-01-12', 'Female', 'Married', 1, 2, 'Indian', 'Hindu', ''),
(8, 4, 'Nagesh Jadhav', '', NULL, 'Narayan', 0, '1995-05-10', 'Male', 'Married', NULL, 1, 'Indian', 'Hindu', ''),
(9, 1, 'Sonali Deshpande', '', NULL, 'ABC', NULL, '1994-03-10', 'Female', 'Married', NULL, 2, 'Indian', 'Hindu', ''),
(10, 7, 'Gunjan Shekhat', '', NULL, 'Bharatbhai', NULL, '1998-10-04', 'Male', 'No', NULL, 0, 'Indian', 'Hindu', ''),
(11, 5, 'ABCD XYZ', '', NULL, 'MNO', NULL, '0000-00-00', 'OTHER', '', NULL, 1, '', '', 'assets/images/profile/5_ABCD XYZ.jpg'),
(12, 8, 'ABCD XYZ', '', NULL, 'MNO', NULL, '1998-10-04', 'MALE', 'MARRIED', NULL, 2, 'INDIAN', 'HINDU', 'assets/images/profile/8_ABCD XYZ.png'),
(13, 115, 'Swati Dhopte', '', NULL, 'D', NULL, '1990-05-04', 'Female', 'Married', NULL, 1, 'Indian', 'Hindu', 'assets/images/profile/115_Swati Dhopte.jpg'),
(14, 6, 'Kishore Rawande', '', NULL, 'S', NULL, '1969-05-05', 'Male', 'Married', NULL, 5, 'Indian', 'Hindu', 'assets/images/profile/6_Kishore Rawande.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Userid` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `maritalStatus` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `subCategory` varchar(100) NOT NULL,
  `schoolDeptName` text NOT NULL,
  `permanentAddress` varchar(100) NOT NULL,
  `correspondentAddress` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Userid`, `firstname`, `lastname`, `fathername`, `email`, `mobile`, `password`, `dob`, `gender`, `nationality`, `maritalStatus`, `religion`, `caste`, `subCategory`, `schoolDeptName`, `permanentAddress`, `correspondentAddress`, `designation`) VALUES
(1, 'Niranjan', '', '', '', 2147483647, 'Aeiou@123', '', '', '', '', '', '', '', '0', '', '', ''),
(2, 'Niranjan', '', '', '', 1111111111, 'Aeiou@123', '', '', '', '', '', '', '', '0', '', '', ''),
(3, 'ABCD', '', '', '', 2147483647, 'Abcd@123', '', '', '', '', '', '', '', '0', '', '', ''),
(4, 'asdf', '', '', '', 1234569870, 'Abcd@123', '', '', '', '', '', '', '', '0', '', '', ''),
(5, 'nbgdvf', 'tbgfvqt', 'ewfgh', 't@gmail.com', 1234567890, 'Abcd@1234', '', 'Male', 'Indian', 'unmarried', 'Hindu', 'Open', 'Other', '0', 'rajkot', 'loni', 'student');

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
  `titleCourses` varchar(255) NOT NULL,
  `lectures` varchar(255) NOT NULL,
  `takenLectures` varchar(255) NOT NULL,
  `titlePractical` varchar(255) NOT NULL,
  `practicals` varchar(255) NOT NULL,
  `takenPracticals` varchar(255) NOT NULL,
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
  `TotalHodRating` int(255) DEFAULT NULL,
  `TotalDirectorPrincipalRating` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_i`
--

INSERT INTO `section_i` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity6`, `titleCourses`, `lectures`, `takenLectures`, `titlePractical`, `practicals`, `takenPracticals`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity6HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `Activity6PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '4', '4', '4', '4', '4', '4', '', '', '', '', '', '', '9', '8', '7', '11', '5', '8', '15', '15', '15', '15', '8', '8', '', '24', 48, 76),
(2, 4, '19', '16', '18', '17', '8', '9', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '87', NULL, NULL),
(3, 1, '19', '17', '15', '12', '7', '8', '', '', '', '', '', '', '18', '16', '16', '12', '8', '9', '18', '17', '8', '12', '5', '7', '', '78', 79, 67),
(7, 7, '15', '15', '15', '14', '8', '9', '', '', '', '', '', '', '15', '14', '15', '16', '9', '8', '15', '15', '15', '16', '7', '7', '', '76', 77, 75),
(9, 8, '10', '10', '10', '10', '10', '10', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '60', NULL, 0),
(10, 115, '15', '15', '15', '16', '10', '9', 'Java', '9', '7', 'Mini Project', '5', '4', '15', '15', '15', '16', '10', '9', NULL, NULL, NULL, NULL, NULL, NULL, '', '80', 80, NULL);

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
  `TotalHodRating` int(255) NOT NULL,
  `TotalDirectorPrincipalRating` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_ii`
--

INSERT INTO `section_ii` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '6', '6', '6', '6', '6', '4', '8', '10', '9', '7', '6', '6', '6', '', '6', NULL, '30', 38, 24),
(2, 7, '8', '9', '7', '8', '8', '8', '9', '8', '7', '8', '8', '9', '7', '', '7', NULL, '40', 40, 31),
(3, 8, '8', '8', '8', '5', '5', NULL, NULL, NULL, NULL, NULL, '8', '8', '8', '', '5', NULL, '34', 0, 29),
(4, 115, '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', NULL, NULL, NULL, NULL, NULL, NULL, '40', 40, NULL);

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
  `TotalHodRating` int(255) NOT NULL,
  `TotalDirectorPrincipalRating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_iii`
--

INSERT INTO `section_iii` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '3', '3', '3', '3', '5', '5', '1', '8', '3', '3', '3', '3', NULL, '12', 19, 12),
(2, 7, '8', '4', '4', '10', '8', '4', '4', '7', '8', '4', '3', '8', NULL, '26', 23, 23),
(3, 8, '7', '4', '3', '1', NULL, NULL, NULL, NULL, '7', '4', '3', '1', NULL, '15', 0, 15),
(4, 115, '8', '4', '4', '9', '8', '4', '4', '9', NULL, NULL, NULL, NULL, NULL, '25', 25, 0);

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
  `TotalHodRating` int(255) NOT NULL,
  `TotalDirectorPrincipalRating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_iv`
--

INSERT INTO `section_iv` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `MaxApiScore`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '8', 8, 8),
(2, 7, '4', '4', '3', '5', '', '3', '4', '5', '4', '4', '3', '4', NULL, '16', 12, 15),
(3, 115, '4', '4', '4', '4', '', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, '16', 12, 0);

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
  `TotalHodRating` int(255) DEFAULT NULL,
  `TotalDirectorPrincipalRating` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_v`
--

INSERT INTO `section_v` (`id`, `Userid`, `Activity1`, `Activity2`, `Activity3`, `Activity4`, `Activity5`, `Activity1HR`, `Activity2HR`, `Activity3HR`, `Activity4HR`, `Activity5HR`, `Activity1PR`, `Activity2PR`, `Activity3PR`, `Activity4PR`, `Activity5PR`, `TotalSelfRating`, `TotalHodRating`, `TotalDirectorPrincipalRating`) VALUES
(1, 3, '3', '2', '1', '4', '5', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '15', NULL, 0);

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
  `SectionIHOD` int(1) NOT NULL,
  `SectionIIHOD` int(1) NOT NULL,
  `SectionIIIHOD` int(1) NOT NULL,
  `SectionIVHOD` int(1) NOT NULL,
  `SectionVHOD` varchar(255) NOT NULL,
  `SectionIPrincipal` int(1) NOT NULL,
  `SectionIIPrincipal` int(1) NOT NULL,
  `SectionIIIPrincipal` int(1) NOT NULL,
  `SectionIVPrincipal` int(1) NOT NULL,
  `SectionVPrincipal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `Userid`, `SectionI`, `SectionII`, `SectionIII`, `SectionIV`, `SectionIHOD`, `SectionIIHOD`, `SectionIIIHOD`, `SectionIVHOD`, `SectionVHOD`, `SectionIPrincipal`, `SectionIIPrincipal`, `SectionIIIPrincipal`, `SectionIVPrincipal`, `SectionVPrincipal`) VALUES
(1, 3, '1', '1', '1', '1', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(2, 4, '1', '0', '0', '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(3, 1, '1', '0', '0', '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(4, 7, '1', '1', '1', '1', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(5, 5, '0', '0', '0', '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(6, 8, '1', '1', '1', '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(7, 115, '1', '1', '1', '1', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0),
(9, 6, '0', '0', '0', '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0);

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
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Userid`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_i`
--
ALTER TABLE `section_i`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section_ii`
--
ALTER TABLE `section_ii`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_iii`
--
ALTER TABLE `section_iii`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_iv`
--
ALTER TABLE `section_iv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_v`
--
ALTER TABLE `section_v`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
