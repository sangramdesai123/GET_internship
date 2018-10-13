-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 12:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `day` varchar(250) DEFAULT NULL,
  `cname` varchar(250) DEFAULT NULL,
  `statu` varchar(250) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`day`, `cname`, `statu`, `contact`, `city`, `id`) VALUES
('29/9/2018', 'newbosten', 'Applied', '9898989898', 'pune', 1),
('29/9/2018', 'newbosten', 'Applied', '9898989898', 'pune', 2),
('29/9/2018', 'mmtuts', 'Review', '2121212112', 'pune', 3),
('29/9/2018', 'Gate', 'Applied', '987777778', 'mumbai', 4),
('29/9/2018', 'newbosten', 'Applied', '9898989898', 'Goa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cname` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `jobtype` varchar(256) DEFAULT NULL,
  `duration` varchar(256) DEFAULT NULL,
  `stipend` varchar(256) DEFAULT NULL,
  `c_name` varchar(256) NOT NULL,
  `pwd` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cname`, `email`, `mobile`, `location`, `jobtype`, `duration`, `stipend`, `c_name`, `pwd`) VALUES
('company', 'as@gmail.com', '2131454', 'pune', 'web', '3', '3000', 'ajay', 'djhavahgvdhgvc'),
('Marketing', 'rip@gmail.com', '9898874511', 'dadar', 'java', '3', '5000', 'javabootcamp', '$2y$10$MWYfQaDo3W7MH5.TbSaxkOJOcgs0VesU76hmG1KUeZAOyqArnHSUG'),
('newbosten', 'as@gmail.com', '216546532', 'pune', 'android', '3', '1000', 'sang', '$2y$10$vKMgq0loFm/Sr0Pm2b0lKuwVBR99Y8FaGfm7rsxQcURrcT.LNrEJu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(255) DEFAULT NULL,
  `clgname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `uname` varchar(256) NOT NULL,
  `pwd` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `clgname`, `email`, `mobile`, `city`, `uname`, `pwd`) VALUES
('Ajay', 'sndasdb', 'Ajay@gmail.com', '84846632', 'Mnascbjhb', 'Ajay', '$2y$10$05Fwzilgu/lRkohLHw5KQOsIUJ33/shfjSC45T2R5FcnHUmNGW8Ve'),
('rupesh', 'DYPatie', 'rupesh@gmail.com', '9898989898', 'kanpur', 'rupesh', '$2y$10$dUJrnz/M/xpK206CrQC75eeAu61oOhUy8GLDrd6QHgvGPaw.xa3vq'),
('SangramDesai', 'KJSomaiya', 'san@gmail.com', '9898989898', 'Mumbai', 'sangram', '$2y$10$CUOLB5P7A3gSajfbFYzX1.tQLccZf4pdF2LVmOMvYdrBGkpBoGChi'),
('SanketMangle', 'DnyandeepVidhya', 'sanket@gmail.com', '9797979797', 'Thane', 'sanket', '$2y$10$qImFV.F/pKMyrriziqHA2.p2xm7WnviCld4kTVr9W4cAr0W91Kn7.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
