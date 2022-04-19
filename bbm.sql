-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 01:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `pass`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bbm_recive`
--

CREATE TABLE `bbm_recive` (
  `id` int(120) NOT NULL,
  `patient_name` varchar(120) NOT NULL,
  `patient_age` varchar(120) NOT NULL,
  `blood_group` varchar(120) NOT NULL,
  `need` int(10) NOT NULL,
  `mobile` varchar(120) NOT NULL,
  `word` int(120) NOT NULL,
  `disease` varchar(120) NOT NULL,
  `hospital_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bbm_recive`
--

INSERT INTO `bbm_recive` (`id`, `patient_name`, `patient_age`, `blood_group`, `need`, `mobile`, `word`, `disease`, `hospital_name`) VALUES
(2, 'Abul', '50', 'B+', 0, '1400134509', 131, 'RTA', 'BIRDEM General Hospital'),
(3, 'Bulbul', '32', 'A+', 5, '021389389', 122, 'Head Injur-Major', 'BIRDEM General Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `blood_sends`
--

CREATE TABLE `blood_sends` (
  `id` int(120) NOT NULL,
  `doner_name` varchar(120) NOT NULL,
  `doner_age` varchar(120) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `doner_num` int(120) NOT NULL,
  `blood_bag_num` varchar(120) NOT NULL,
  `donate_date` date NOT NULL,
  `doner_physical_status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_sends`
--

INSERT INTO `blood_sends` (`id`, `doner_name`, `doner_age`, `hospital_name`, `blood_group`, `doner_num`, `blood_bag_num`, `donate_date`, `doner_physical_status`) VALUES
(1, 'Mr.Tamim', '24', 'BIRDEM General Hospital', 'B+', 1700689373, 'BGHBD002345', '2022-03-08', 'Good'),
(2, 'Mrs Akhi ', '23', 'BIRDEM General Hospital', 'B+', 1700689373, 'BGHBD002346', '2022-03-08', 'Good'),
(3, 'Mr.Tamim', '24', 'BIRDEM General Hospital', 'B+', 1700689373, 'BGHBD002347', '2022-03-08', 'Good'),
(4, 'Mr.Tamim', '24', 'BIRDEM General Hospital', 'B+', 1700689373, 'BGHBD002348', '2022-03-31', 'Good'),
(5, 'Mr.Tamim', '24', 'BIRDEM General Hospital', 'B+', 1700689373, 'BGHBD002348', '2022-03-31', 'Good'),
(6, 'Santo', '26', 'BIRDEM General Hospital', 'A+', 11122321, 'BGHBD00000123', '2022-03-13', 'Good'),
(7, 'Santo', '26', 'BIRDEM General Hospital', 'A+', 11122321, 'BGHBD00000126', '2022-03-13', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `hospital_name` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(120) NOT NULL,
  `number` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hospital_name`, `username`, `email`, `pass`, `number`) VALUES
(5, 'BIRDEM General Hospital', 'BIRDEMGH', 'admin@birdem.org', '3d08433143746a5e5d3f3fb683e8b27d', '01700689373'),
(8, 'Dhaka Medical College', 'DMC', 'admin@dmc.org', '3d08433143746a5e5d3f3fb683e8b27d', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbm_recive`
--
ALTER TABLE `bbm_recive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_sends`
--
ALTER TABLE `blood_sends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bbm_recive`
--
ALTER TABLE `bbm_recive`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_sends`
--
ALTER TABLE `blood_sends`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
