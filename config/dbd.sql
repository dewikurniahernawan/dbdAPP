-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 09:25 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'dewi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(255) NOT NULL,
  `timestamp` date NOT NULL,
  `coordinates` text NOT NULL,
  `ns_1` varchar(255) NOT NULL,
  `fday` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` enum('L','P') NOT NULL,
  `prevd` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `timestamp`, `coordinates`, `ns_1`, `fday`, `age`, `sex`, `prevd`) VALUES
('0411641A666081', '2019-07-20', '-6.876499, 107.560066', 'N', 2, 87, 'L', 'Y'),
('0411641A6661081', '2019-08-05', '-6.876478, 107.560089', 'N', 2, 52, 'P', 'N'),
('0411641B666081', '2019-07-20', '-6.876515, 107.560059', 'N', 63, 23, 'P', 'Y'),
('0411641C666081', '2019-07-22', '-6.876496, 107.560097', 'N', 9, 9, 'P', 'N'),
('0411641D666081', '2019-07-22', '-6.876485, 107.560104', 'N', 9, 5, 'P', 'N'),
('0411641E666081', '2019-07-22', '-6.876493, 107.560097', 'N', 9, 6, 'P', 'N'),
('0411641F666081', '2019-07-22', '-6.876491, 107.560112', 'N', 6, 10, 'P', 'N'),
('0411641G666081', '2019-07-20', '-6.876508, 107.560112', 'N', 9, 5, 'P', 'Y'),
('0411641H666081', '2019-07-22', '-6.876512, 107.560089', 'N', 2, 8, 'L', 'Y'),
('0411641I666081', '2019-07-22', '-6.876532, 107.560127', 'N', 6, 5, 'P', 'Y'),
('0411641J666081', '2019-07-22', '-6.876531, 107.560120', 'N', 5, 6, 'P', 'N'),
('0411641K666081', '2019-07-22', '-6.876541, 107.560097', 'N', 6, 5, 'L', 'N'),
('0411641L666081', '2019-07-22', '-6.876544, 107.560081', 'N', 2, 5, 'P', 'N'),
('0411641M666081', '2019-08-31', '-6.21462, 106.84513', 'N', 3, 11, 'P', 'Y'),
('0411641N666081', '2019-08-14', '-6.21462, 106.84513', 'Y', 3, 12, 'L', 'N'),
('0411641P666081', '2019-08-25', '-7.55611, 110.83167', 'Y', 1, 45, 'P', 'N'),
('0411641Q666081', '2019-09-03', '-7.55611, 110.83167', 'N', 11, 55, 'L', 'Y'),
('0411641R666081', '2019-09-28', '-0.94924, 100.35427', 'N', 11, 68, 'L', 'Y'),
('0411641S666081', '2019-10-30', '-0.94924, 100.35427', 'Y', 10, 73, 'P', 'Y'),
('0411641T666081', '2019-10-08', '-0.94930, 102.35427', 'Y', 10, 83, 'P', 'N'),
('0411641U666081', '2019-11-30', '-0.94930, 102.35440', 'N', 2, 91, 'P', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1565771555),
('m190814_085325_dbd', 1565773299);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` smallint(10) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `role`, `created_at`, `update_at`) VALUES
(1, 'dewi kurnia', '1230', 'dewikurnia1230', 'dewikurnia12345', 'dewikurnia703@gmail.com', 100, 1, 1, 1),
(2, 'risa', 'risa123', 'risa123', 'risa123', 'risaaria123@gmail.com', 2, 2, 2, 2),
(3, 'riris', 'riss', 'riss', 'riss', 'riss@gmail.com', 3, 3, 3, 3),
(4, 'deww', 'dew123', 'dew123', 'dew123', 'dewi@gmail.com', 4, 4, 4, 4),
(5, 'wiwi', 'wiwi456', 'wiwi456', 'wiwi456', 'wiwiw@gmail.com', 5, 5, 5, 5),
(6, 'user', 'use123', 'use123', 'use123', 'user@gmail.com', 6, 6, 6, 6),
(7, 'dewi', 'dew123', 'dew123', 'dew123', 'dewi@gmail.com', 7, 7, 7, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
