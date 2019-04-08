-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 02:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outpass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `outpasstable2`
--

CREATE TABLE `outpasstable2` (
  `rollno` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sphone` int(10) NOT NULL,
  `pphone` int(10) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpasstable2`
--

INSERT INTO `outpasstable2` (`rollno`, `name`, `email`, `sphone`, `pphone`, `place`) VALUES
('', '', '', 0, 0, ''),
('1234', ' 7ygguy', 'deeksharana08@gmail.com', 77, 0, 'ghj'),
('15423', ' fghj', 'deeksharana08@gmail.com', 5678, 67688, 'ghumarwin'),
('16101', ' pratibha', 'pratibharehalia@gmail.com', 5, 5, '5'),
('16162', ' simpy', 'simpyurmila@gmail.com', 6, 2147483647, '8'),
('16511', ' gunjan', 'singhnidhibst@gmail.com', 6, 6, '6'),
('16515', ' dkjjh', 'deeksharana08@gmail.com', 0, 0, 'Bilaspur'),
('16522', ' fsfhf', 'shubhamguleria1999@gmail.com', 2147483647, 637536, 'Ghumarwin'),
('16572', ' muskan', 'doiteverydaysk@gmail.com', 5, 5, '5'),
('16573', ' nidhi', 'singhnidhibst@gmail.com', 2147483647, 7, '9'),
('16mi11', ' muskan', 'doiteverydaysk@gmail.com', 8, 2147483647, '0'),
('16mi511', ' 7', 'doiteverydaysk@gmail.com', 9, 2147483647, '9'),
('16mi533', ' muskan', 'imsimpyk@gmail.com', 2147483647, 2147483647, 'lucknow'),
('16mi544', ' simpy', 'simpyurmil', 2147483647, 1234567890, 'lucknow'),
('16mi77', ' simpy', 'simpyurmila@gmail.com', 7, 2147483647, '9'),
('16mi99', ' 6', 'simpyurmila@gmail.com', 9, 2147483647, '0'),
('17349', 'kush', 'kushagraporwal12@gmail.com', 0, 68468161, 'alld'),
('18328', ' Abhijeet', 'abhijeetcatches33@gmail.com', 2147483647, 2147483647, 'Delhi'),
('34521', ' Deeksha', 'deeksharana08@gmail.com', 2147483647, 2147483647, 'patna'),
('3454', ' huiyguy', 'deeksharana08@gmail.com', 8675765, 7657657, 'gfgg');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `rollno` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sphone` int(10) NOT NULL,
  `pphone` int(10) NOT NULL,
  `deptdate` varchar(10) NOT NULL,
  `deptime` varchar(10) NOT NULL,
  `arrdate` varchar(10) NOT NULL,
  `arrtime` varchar(10) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`rollno`, `name`, `email`, `sphone`, `pphone`, `deptdate`, `deptime`, `arrdate`, `arrtime`, `place`) VALUES
('16mi544', ' simpy', 'simpyurmila@gmail.com', 2147483647, 1234567890, '5', '5', '5', '5', 'lucknow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outpasstable2`
--
ALTER TABLE `outpasstable2`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
