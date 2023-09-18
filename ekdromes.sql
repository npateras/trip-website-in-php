-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 07:29 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekdromes`
--

-- --------------------------------------------------------

--
-- Table structure for table `kataxwriseis`
--

CREATE TABLE `kataxwriseis` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Arrival` date NOT NULL,
  `Departure` date NOT NULL,
  `Trip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hmeres_Diamonis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tickets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teliki_Timi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kataxwriseis`
--

INSERT INTO `kataxwriseis` (`ID`, `Username`, `Fullname`, `Phone_Number`, `Email`, `Arrival`, `Departure`, `Trip`, `Hmeres_Diamonis`, `Tickets`, `Teliki_Timi`) VALUES
(1, 'nik', 'Nikos', '6977777777', 'nikolas.98@live.com', '2018-01-11', '2018-01-19', 'Κύπρος - Πάφος', '8', '2', '1040'),
(2, 'nik', 'Nikos', '6977777777', 'nikolas.98@live.com', '2018-01-31', '2018-02-14', 'Θεσσαλονίκη', '14', '2', '1260');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kataxwriseis`
--
ALTER TABLE `kataxwriseis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kataxwriseis`
--
ALTER TABLE `kataxwriseis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
