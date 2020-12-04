-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 11:19 AM
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
-- Database: `id15587736_bloodbank_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_sample`
--

CREATE TABLE `available_sample` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `units_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `available_sample`
--

INSERT INTO `available_sample` (`id`, `blood_group`, `hospital_name`, `units_available`) VALUES
(1, 'O+', 'city hospiatal', 2),
(2, 'B-', 'city hospiatal', 2),
(3, 'O+', 'asd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bb_user_info`
--

CREATE TABLE `bb_user_info` (
  `User_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Role` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bb_user_info`
--

INSERT INTO `bb_user_info` (`User_Email`, `User_Password`, `User_Role`) VALUES
('123@gmail.com', 'az12sx34', 'RECEIVER'),
('abc@abc.com', 'az12sx34', 'RECEIVER'),
('hhospital@hospital.com', 'az12sx34', 'HOSPITAL'),
('new@newhospital.com', 'az12sx34', 'HOSPITAL'),
('new@newreceiver.com', 'az12sx34', 'RECEIVER'),
('shahraj@outlook.com', 'az12sx3', 'RECEIVER');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_table`
--

CREATE TABLE `hospital_table` (
  `Hospital_Id` int(11) NOT NULL,
  `User_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hospital_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` int(20) NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospital_table`
--

INSERT INTO `hospital_table` (`Hospital_Id`, `User_Email`, `Hospital_Name`, `Contact`, `Address`) VALUES
(1, 'hhospital@hospital.com', 'city hospiatal', 1234567890, 'near shiv shakti yog ashram,bagh coliny'),
(2, 'new@newhospital.com', 'asd', 1234567890, 'dsafasdf');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_table`
--

CREATE TABLE `receiver_table` (
  `User_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(200) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BG` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receiver_table`
--

INSERT INTO `receiver_table` (`User_Email`, `Full_name`, `Age`, `Contact`, `Address`, `BG`) VALUES
('123@gmail.com', '123', 18, 1234567890, 'asdfsadfadsfa', 'O+'),
('abc@abc.com', 'abc', 18, 1234567890, 'near shiv shakti yog ashram,bagh coliny', 'B-'),
('new@newreceiver.com', 'az12sx34', 18, 123123123, 'dsafasdfasfdsadf', 'O+'),
('shahraj@outlook.com', 'az12sx34', 18, 1234567890, 'near shiv shakti yog ashram,bagh coliny', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `view_requests`
--

CREATE TABLE `view_requests` (
  `request_id` int(11) NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `view_requests`
--

INSERT INTO `view_requests` (`request_id`, `user_email`) VALUES
(1, '123@gmail.com'),
(3, '123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_sample`
--
ALTER TABLE `available_sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_user_info`
--
ALTER TABLE `bb_user_info`
  ADD PRIMARY KEY (`User_Email`);

--
-- Indexes for table `hospital_table`
--
ALTER TABLE `hospital_table`
  ADD PRIMARY KEY (`User_Email`),
  ADD UNIQUE KEY `Hospital_Id` (`Hospital_Id`);

--
-- Indexes for table `receiver_table`
--
ALTER TABLE `receiver_table`
  ADD PRIMARY KEY (`User_Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_sample`
--
ALTER TABLE `available_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital_table`
--
ALTER TABLE `hospital_table`
  MODIFY `Hospital_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
