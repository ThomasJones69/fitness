-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 02:43 PM
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
-- Database: `thomas`
--
CREATE DATABASE IF NOT EXISTS `thomas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thomas`;

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `idAccount` bigint(20) NOT NULL,
  `idTrainers` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Postcode` int(11) NOT NULL,
  `Telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`idAccount`, `idTrainers`, `email`, `Password`, `FirstName`, `LastName`, `Address`, `City`, `Postcode`, `Telephone`) VALUES
(1, 0, 'tjones@ziggo.nl', '123456', 'Thomas', 'Jones', 'Kol 17', 'Hoog', 7908, '06-99999999'),
(2, 0, 'bjones@ziggo.nl', '123456', 'Bryan', 'Jones', 'Kalk 25', 'Zwolle', 1111, '06-88888888');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `idCategories` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`idCategories`, `Name`) VALUES
(1, 'Fitness'),
(2, 'Cardio'),
(3, 'Personal Training');

-- --------------------------------------------------------

--
-- Table structure for table `FitSchedule`
--

CREATE TABLE `FitSchedule` (
  `idFitSchedule` int(20) NOT NULL,
  `idCategories` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `DatePosted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FitSchedule`
--

INSERT INTO `FitSchedule` (`idFitSchedule`, `idCategories`, `Name`, `Description`, `DatePosted`) VALUES
(1, 1, 'BodyBuilding kwartaal 1', 'Bodybuilding schema voor eerste kwartaal', '2018-04-17 17:00:00'),
(2, 1, 'BodyBuilding kwartaal 2', 'Bodybuilding schma voor tweede kwartaal', '2018-04-08 00:00:00'),
(3, 2, 'Cardio schema 1', 'Cardio schema voor beginners', '2018-04-17 00:00:00'),
(4, 2, 'Cardio schema 2', 'Cardio schema voor gemiddelden', '2018-04-16 00:00:00'),
(5, 2, 'Cardio Schema 3', 'Cardio schema voor experts', '2018-04-02 00:00:00'),
(6, 3, 'PT schema 1', 'Voor beinners', '2018-04-17 00:00:00'),
(7, 3, 'PT schema 2', 'Voor nog fittere leden', '2018-04-15 00:00:00'),
(8, 3, 'PT schema 3', 'Voor experts en Boot Camp leden', '0000-00-00 00:00:00'),
(9, 3, 'PT schema 4', 'Dit is voor de extra zwaar gevorderden', '2018-04-17 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `Trainers`
--

CREATE TABLE `Trainers` (
  `idTrainers` int(11) NOT NULL,
  `nameTrainer` varchar(255) NOT NULL,
  `emailTrainer` varchar(255) NOT NULL,
  `telTrainer` varchar(255) NOT NULL,
  `dicipline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Trainers`
--

INSERT INTO `Trainers` (`idTrainers`, `nameTrainer`, `emailTrainer`, `telTrainer`, `dicipline`) VALUES
(1, 'Thomas', 'thomastrainer@ziggo.nl', '06-21685525', 'Personal Training'),
(2, 'Bryan', 'bryan@bryan.com', '98475938457394', 'BodyCombat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`idAccount`);

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`idCategories`);

--
-- Indexes for table `FitSchedule`
--
ALTER TABLE `FitSchedule`
  ADD PRIMARY KEY (`idFitSchedule`);

--
-- Indexes for table `Trainers`
--
ALTER TABLE `Trainers`
  ADD PRIMARY KEY (`idTrainers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accounts`
--
ALTER TABLE `Accounts`
  MODIFY `idAccount` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `idCategories` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `FitSchedule`
--
ALTER TABLE `FitSchedule`
  MODIFY `idFitSchedule` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Trainers`
--
ALTER TABLE `Trainers`
  MODIFY `idTrainers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
