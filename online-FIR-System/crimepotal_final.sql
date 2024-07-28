-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 05:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimepotal_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `a_no` varchar(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `type_crime` varchar(30) NOT NULL,
  `d_o_c` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `inc_status` varchar(30) NOT NULL,
  `pol_status` varchar(40) NOT NULL,
  `p_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `u_email`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, '', '', 'Ranchi', 'Theft', '2021-10-01T08:07', 'dshfsd ', 'Unassigned', ' manoj kumar', ' a123'),
(2, '', '', 'Ranchi', 'Theft', '2021-10-01T08:07', 'dshfsd ', '', '', ''),
(3, '', '', 'Ranchi', 'Theft', '2021-10-01T08:07', 'dshfsd ', 'Case has Been moved to court', ' manoj kumar ', ' a123'),
(4, '', '', 'Ranchi', 'Theft', '2021-09-30T10:14', 'fdfgdf sdf', '', '', ''),
(5, 'manojgum@gmail.com', '', 'Ranchi', 'Theft', '2021-09-30T10:14', 'fdfgdf sdf', '', '', ''),
(6, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Theft', '2021-09-30T10:14', 'fdfgdf sdf', 'Assigned', ' manoj kumar', ' a123'),
(7, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Theft', '2021-09-30T10:14', 'fdfgdf sdf', '', '', ''),
(8, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Robbery', '2021-10-01T08:21', 'robbery', 'Assigned', ' rajesh kumar', 'a113'),
(9, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Theft', '2021-10-01T08:26', 'ddmflksdjf dsaf ', 'Criminal Accepted the Crime', ' rajesh kumar', ' a123'),
(10, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Theft', '2021-09-27T08:30', 'fsdfsdf', 'Unassigned', '', ''),
(11, 'manojgum@gmail.com', '2147483647', 'Ranchi', 'Theft', '2021-10-01T08:32', 'xfd fshdf sj jksdh f', 'Unassigned', '', ''),
(12, 'RAJ@GMAIL.COM', '12354356546', 'Ranchi', 'Pick Pocket', '2021-10-01T12:23', ' kl jk kj ', 'Unassigned', '', ''),
(13, 'sm@gmail.com', '12345645667', 'lohardaga', 'Pick Pocket', '2021-10-01T15:03', 'gwcjhdfhebfjwevh whjef', 'Unassigned', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crimenal_list`
--

CREATE TABLE `crimenal_list` (
  `criminal_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hight` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crimenal_list`
--

INSERT INTO `crimenal_list` (`criminal_id`, `name`, `hight`, `weight`, `date`, `gender`, `address`) VALUES
(1, 'manoj kumar', '5.3', '48', '20/05/1998', 'male', ' kjdj skf ksjfs djks'),
(2, 'manoj kumar', '6', '44', '2021-10-12', ' male', 'RAM NAGER NEAR GYAN GANGA TAILENT SCHOOL GUMLA '),
(3, 'bang bang', '3', '56', '2007-06-04', ' male', 'ranchi'),
(4, 'deepak kumar', '6', '56', '2007-06-04', ' male', 'ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `headid` varchar(30) NOT NULL,
  `headpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`headid`, `headpass`) VALUES
('admin@gum', 'admin'),
('admin@gum.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(30) NOT NULL,
  `u_id` varchar(40) NOT NULL,
  `u_pass` varchar(30) NOT NULL,
  `u_addr` varchar(12) NOT NULL,
  `a_no` varchar(11) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `mob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('manoj kumar', 'manojgum@gmail.com', '123456', 'raj nager gu', '2147483647', 'Male', '7909012986'),
('gautam kumar', 'manojkumar@gmail.com', '1234567', 'gumla', '2147483647', 'Male', '7909012986'),
('GAUTAM KUMAR', 'gautam@gmail.com', '123456', 'NNN', '2147483647', 'Male', '9876567898'),
('RAJ', 'RAJ@GMAIL.COM', '123456', 'RAJ HOME', '12354356546', 'Male', '7909012986'),
('sohan', 'sohan@gmail.com', '123456', 'sohan home', '12343456754', 'Male', '7909012986'),
('mohan', 'mohan@gmail.com', '123456', 'mohan', '12345634565', 'Male', '7909012986'),
('manoj kumar', 'raja@gmail.com', '123456', 'kdsfj', '23456787654', 'Male', '7909012986'),
('manoj kumar', 'man@gmail.com', '123456', 'ajsd', '43567656787', 'Male', '8787987678'),
('manoj kumar', 'mano@gmail.com', '123456', 'ajsd', '43567656787', 'Male', '8787987678'),
('smriti kumari 12 10', 'sm@gmail.com', '123456', 'dwjkhjk', '12345645667', 'Male', '7689876545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `crimenal_list`
--
ALTER TABLE `crimenal_list`
  ADD PRIMARY KEY (`criminal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `crimenal_list`
--
ALTER TABLE `crimenal_list`
  MODIFY `criminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
