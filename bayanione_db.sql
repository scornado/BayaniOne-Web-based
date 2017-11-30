-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 07:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayanione_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `user_photo` blob NOT NULL,
  `residential_address` varchar(100) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `account_type`, `user_photo`, `residential_address`, `email_address`, `username`, `password`) VALUES
(1, 'individual', 0x69616e2e6a7067, 'lacion', 'ianpareja@gmail.com', 'ian', 'ian'),
(2, 'individual', 0x7374657068616e2e6a706567, 'Maguikay', 'stephencornado@gmail.com', 'stephen', 'stephen'),
(3, 'individual', 0x676c616479732e6a706567, 'Tuburan', 'gladysmontebon@gmail.com', 'gladys', 'gladys'),
(4, 'individual', 0x616e67656c612e6a7067, '2nd Batch', 'maeangelaramirez@gmail.com', 'angela', 'angela'),
(5, 'individual', 0x6368656d61792e6a706567, 'Tipolo, Mandaue City, Cebu', 'cherrymaeestrera8@gmail.com', 'chemay', 'chemay@20'),
(6, 'organization', 0x737175616466616d2e6a7067, 'UCLM', 'squadfam@gmail.com', 'squadfam', 'squadfam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
