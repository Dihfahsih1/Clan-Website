-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 01:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bamugoya`
--

-- --------------------------------------------------------

--
-- Table structure for table `elder_signup`
--

CREATE TABLE `elder_signup` (
  `id` int(5) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `lineage` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elder_signup`
--

INSERT INTO `elder_signup` (`id`, `fname`, `lname`, `email`, `telephone`, `location`, `lineage`, `password`, `gender`) VALUES
(1, 'Mugoya', 'Dihfahsih', 'dihfahsihm@gmail.com', '751612792', 'Kampala', 'muleme', 'MugoYA23?', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_signup`
--

CREATE TABLE `member_signup` (
  `id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `lineage` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_signup`
--

INSERT INTO `member_signup` (`id`, `fname`, `lname`, `email`, `telephone`, `location`, `lineage`, `gender`, `password`) VALUES
(0, 'Mugoya', 'Dihfahsih', 'dihfahsihm@gmail.com', '0751612792', 'SIRONKO', 'wandidi', '', 'MugoYA23?');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fname`, `lname`, `mail`, `phone`, `message`) VALUES
(1, 'mugoya', 'dihfahsih', 'di@gmail.com', '0751612792', 'thanks'),
(2, 'mugoya', 'dickson', 'dixon@gmail.com', '0753728567', 'Mwanyara nabi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elder_signup`
--
ALTER TABLE `elder_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_signup`
--
ALTER TABLE `member_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elder_signup`
--
ALTER TABLE `elder_signup`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
