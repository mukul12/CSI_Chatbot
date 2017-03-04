-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 05:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi_chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `team_name` varchar(400) NOT NULL,
  `member1_name` varchar(400) NOT NULL,
  `member1_email` varchar(400) NOT NULL,
  `member1_contact` varchar(400) NOT NULL,
  `member2_name` varchar(400) NOT NULL,
  `member2_email` varchar(400) NOT NULL,
  `member2_contact` varchar(400) NOT NULL,
  `member3_name` varchar(400) NOT NULL,
  `member3_email` varchar(400) NOT NULL,
  `member3_contact` varchar(400) NOT NULL,
  `member4_name` varchar(400) NOT NULL,
  `member4_email` varchar(400) NOT NULL,
  `member4_contact` varchar(400) NOT NULL,
  `otp` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `team_name`, `member1_name`, `member1_email`, `member1_contact`, `member2_name`, `member2_email`, `member2_contact`, `member3_name`, `member3_email`, `member3_contact`, `member4_name`, `member4_email`, `member4_contact`, `otp`) VALUES
(4, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', ''),
(5, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', ''),
(6, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', ''),
(8, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', '6418'),
(9, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', '7752'),
(10, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', '7269'),
(11, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', '5931'),
(12, '$team_name', '$member1_name', '$member1_email', '$member1_contact', '$member2_name', '$member2_email', '$member2_contact', '$member3_name', '$member3_email', '$member3_contact', '$member4_name', '$member4_email', '$member4_contact', '3579');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
