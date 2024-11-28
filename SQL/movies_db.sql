-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 08:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Rat` float NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Name`, `Image`, `Video`, `Rat`, `Description`) VALUES
(1, 'THE WALKING DEAD', 'img1.jpg', 'video1.mp4', 5.2, 'Description of THE WALKING DEAD.'),
(2, 'THE BLACK LIST', 'img2.jpg', 'video2.mp4', 6, 'Description of THE BLACK LIST.'),
(3, 'DIVERGENT', 'img3.jpg', 'video3.mp4', 4.9, 'Description of DIVERGENT'),
(4, 'مندوب الليل', 'img4.jpg', 'video3.mp4', 4.9, 'Description of مندوب الليل');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
