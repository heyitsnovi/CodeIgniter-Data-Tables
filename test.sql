-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 02:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane_models`
--

CREATE TABLE `airplane_models` (
  `model_id` int(11) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airplane_models`
--

INSERT INTO `airplane_models` (`model_id`, `manufacturer`, `model`) VALUES
(1, 'Bombardier', 'CL 605'),
(2, 'Beechcraft', 'Hawker'),
(3, 'Bombardier', 'CL 604'),
(4, 'Bombardier', 'Global Express'),
(5, 'Airbus', 'ACJ'),
(6, 'Embraer', 'Lineage 1000'),
(7, 'Embraer', 'Legacy 650'),
(8, 'Gulfstream', 'G 650'),
(9, 'Gulfstream', 'G 550'),
(10, 'Gulfstream', 'G 200'),
(11, 'Gulfstream', 'G 400'),
(12, 'Gulfstream', 'G 450'),
(13, 'Dassault', 'Falcon 900 EX Easy'),
(14, 'Boeing', 'BBJ'),
(15, 'Bombardier', 'Global Classic'),
(16, 'Bombardier', 'Global Vision'),
(17, 'Gulfstream', 'G 500'),
(18, 'Bombardier', 'CL 850'),
(19, 'Gulfstream', 'G 150'),
(20, 'Embraer', 'Phenom 300'),
(21, 'Embraer', 'Phenom 100'),
(22, 'Dassault', 'Falcon 7X'),
(23, 'Bombardier', 'Challenger 300'),
(24, 'Bombardier', 'Challenger 350'),
(25, 'Dassault', 'Falcon 900'),
(26, 'Dassault', 'Falcon 2000'),
(27, 'Bombardier', 'CL 300'),
(28, 'LearJet', '25'),
(29, 'LearJet', '28'),
(30, 'LearJet', '35'),
(31, 'Bombardier', 'Challenger 604'),
(32, 'Bombardier', 'Challenger 605'),
(33, 'Bombardier', 'Challenger 650'),
(34, 'Embraer', 'Legacy 600'),
(35, 'Bombardier', 'Global 5000'),
(36, 'Bombardier', 'Global 6000'),
(37, 'Dassault', 'Falcon 8X'),
(38, 'LearJet', '45'),
(39, 'Embraer', 'E 170'),
(40, 'Embraer', 'E 190'),
(41, 'Cessna', 'Citation'),
(42, 'Gulfstream', 'G 300'),
(43, 'Bombardier', 'CL 601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane_models`
--
ALTER TABLE `airplane_models`
  ADD PRIMARY KEY (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airplane_models`
--
ALTER TABLE `airplane_models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
