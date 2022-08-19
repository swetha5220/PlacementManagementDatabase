-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 12:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'neha', 'neha@gmail.com', 'neha'),
(2, 'rohan', 'rohan@gmail.com', 'rohan');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `drive_date` date NOT NULL,
  `eligibility` float NOT NULL,
  `branch` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `website` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `drive_date`, `eligibility`, `branch`, `description`, `website`) VALUES
(1, 'VMware', '2020-12-01', 7.5, 'Computer Science,Information Science,Electronics & Communication', 'We sopport you as a individual which leads to the companies growth', 'www.vmware.com'),
(2, 'Mindtree', '2021-01-01', 6.5, 'Computer Science,Information Science,Electronics & Communication', 'software based company with innovative technologies.', 'www.mindtree.com'),
(3, 'Microsoft', '2021-01-28', 7, 'Computer Science,Information Science,Electronics & Communication', 'Make the best in what you do.', 'www.microsoft.com'),
(5, 'infosys', '2021-02-05', 9, 'Computer Science,Information Science,Electronics & Communication', 'Infosys\' Vision is “To be a globally respected corporation that provides best-of-breed business solutions, leveraging technology, delivered by best-in-class people.”', 'www.vmware.com'),
(8, 'Acctencture', '2021-02-20', 6.5, 'Computer Science,Electronics & Communication', 'Make things excited and interesting as you wish', 'www.accenture .com'),
(9, 'BMW', '2021-08-08', 8, 'Electronics & Communication,Mechanical', 'Bayerische Motoren Werke AG, commonly known as Bavarian Motor Works, BMW or BMW AG, is a German automobile, motorcycle and engine manufacturing company founded in 1916. BMW is headquartered in Munich, Bavaria. It also owns and produces Mini cars, and is the parent company of Rolls-Royce Motor Cars.', 'www.bmw.com'),
(10, 'qualcomm', '2021-08-06', 8.5, 'Computer Science,Information Science,Electronics & Communication', 'Qualcomm Incorporated operates as a multinational semiconductor and telecommunications equipment company. The Company develops and delivers digital wireless communications products and services based on CDMA digital technology. Qualcomm serves customers worldwide.', 'www.qualcomm.com'),
(11, 'google', '2021-08-08', 9, 'Computer Science,Information Science', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware', 'www.google.com'),
(12, 'CM builders', '2021-08-22', 6, 'Civil,Mechanical', 'We oversee, coordinate and work on the construction, repair and renovation of homes and other buildings', 'www.cmbuilders.com'),
(13, 'Rohan ', '2021-08-21', 7, 'Computer Science', 'fgfgffgf', 'google.com');

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE `incharge` (
  `branch` varchar(50) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`branch`, `name`, `email`, `password`) VALUES
('civil', 'rashmi', 'rashmi@gmail.com', 'rashmi'),
('Computer Science', 'eshaan', 'eshaan@gmail.com', 'eshaan'),
('Electronics and communication', 'vineet', 'bhat@gmail.com', 'bhat'),
('Information Science', 'niki', 'niki@gmail.com', 'niki'),
('mechanical', 'ram', 'ram@gmail.com', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `usn` varchar(22) NOT NULL,
  `company_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`usn`, `company_id`) VALUES
('1233', 1),
('1233', 3),
('1233', 8),
('2456', 1),
('3456', 1),
('3456', 3),
('3456', 8),
('4679', 1),
('4679', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(22) NOT NULL,
  `usn` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(22) NOT NULL,
  `branch` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `10th` float NOT NULL,
  `12th` float NOT NULL,
  `BE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `usn`, `email`, `password`, `DOB`, `address`, `state`, `branch`, `gender`, `10th`, `12th`, `BE`) VALUES
('dhanush', '1233', 'dhanush@gmail.com', 'dhanush', '2012-06-15', 'sirsi', 'Karnataka', 'Computer Science', 'male', 8, 9, 9),
('likitha', '2456', 'likitha@gmail.com', 'likitha', '2020-03-03', 'Gangolli,kundapura', 'karnataka', 'Computer Science', 'female', 9, 9, 8.5),
('shankar', '3359', 'shankar@gmail.com', 'shankar', '2003-07-19', 'yelhanka', 'Karnataka', 'civil', 'male', 8.8, 7.6, 8.3),
('vineet', '3456', 'vineet@gmail.c', 'vineet', '2000-03-22', 'sirsi', 'karnataka', 'Computer Science', 'male', 8, 9, 8.8),
('Akshatha Palekar', '4444', 'neha@gmail.com', 'gg', '2013-11-07', 'Flat no. 405 ,mizaaz apartments\r\nTilak nagara road', 'Karnataka', 'Computer Science', 'female', 8, 9, 8),
('Sampath ', '4678', 'sampath@gmail.com', 'sampath', '2000-10-31', 'Koteshwara,udupi', 'karnataka', 'mechanical', 'male', 8, 8, 10),
('sneha', '4679', 'sneha@gmail.com', 'sneha', '2000-07-27', 'karwar', 'karnataka', 'Computer Science', 'female', 8, 8, 8.1),
('sham', '4728', 'sham@gmail.com', 'sham', '2003-06-30', 'Flat no. 405 ,mizaaz apartments\r\nTilak nagara road', 'Karnataka', 'Electronics and commun', 'male', 7.9, 9.3, 9.5),
('prathiksha', '5555', 'prathiksha@gmail.com', 'shriman', '2002-02-28', 'koteshwara', 'Karnataka', 'Information Science', 'female', 9.2, 7.9, 4.6),
('shriman', '5565', 'shriman@gmail.com', 'shriman', '2003-06-11', 'koteshwara', 'Karnataka', 'Information Science', 'male', 8.9, 8.9, 8.9),
('shreya', '5566', 'shreya@gmail.com', 'shreya', '2001-02-23', 'Flat no. 405 ,mizaaz apartments\r\nTilak nagara road', 'Karnataka', 'Electronics and commun', 'female', 8.8, 9.6, 8.9),
('thirthan', '5589', 'thirthan@gmail.com', 'thirthan', '2000-11-24', 'coorg', 'Karnataka', 'civil', 'male', 8.8, 9.1, 8.5),
('vaishnavi', '6885', 'vaishnavi@gmail.com', 'vaishnavi', '2000-01-11', 'bejadi', 'karnataka', 'mechanical', 'female', 6, 6, 5),
('laxman', '7765', 'laxman@gmail.com', 'laxman', '2002-07-27', 'bangalore', 'Karnataka', 'Electronics and commun', 'male', 7.9, 9, 8.5);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(11) NOT NULL,
  `training_course` varchar(20) NOT NULL,
  `faculty_name` varchar(20) NOT NULL,
  `schedule` date NOT NULL,
  `time` varchar(22) NOT NULL,
  `venue` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `training_course`, `faculty_name`, `schedule`, `time`, `venue`) VALUES
(1, 'Logical Reasoning', 'mamatha', '2021-01-30', '2 pm', 'NMIT campus'),
(2, 'Verbal Ability', 'Rajesh', '2021-02-21', '2:00-4:00', 'room number-106'),
(3, 'Quantitative', 'Ramesh', '2021-03-05', '2:00-4:00', 'Basketball Court');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`branch`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`usn`,`company_id`),
  ADD KEY `USN` (`usn`,`company_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
