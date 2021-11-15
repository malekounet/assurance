-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 02:44 PM
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
-- Database: `assurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nomPrenom` varchar(66) DEFAULT NULL,
  `mail` varchar(33) DEFAULT NULL,
  `pass` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nomPrenom`, `mail`, `pass`) VALUES
(1, 'malek ben', 'malek@gmail.com', '123456'),
(2, 'said ben', 'malekounet@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assurances`
--

CREATE TABLE `assurances` (
  `id` int(11) NOT NULL,
  `effet` date DEFAULT NULL,
  `expireLe` date DEFAULT NULL,
  `compagnie` varchar(22) DEFAULT NULL,
  `police` varchar(33) DEFAULT NULL,
  `attestation` varchar(111) DEFAULT NULL,
  `matricule` varchar(33) DEFAULT NULL,
  `typeAssurance` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assurances`
--

INSERT INTO `assurances` (`id`, `effet`, `expireLe`, `compagnie`, `police`, `attestation`, `matricule`, `typeAssurance`) VALUES
(5, '2021-10-11', '2022-10-11', 'ALLIANZ', '1111123445', '2021-10-03_10_03_36pm.png', '2345789098765', 'annuelle'),
(6, '2021-09-28', '2022-09-28', 'CAT', '76895689345', '2021-10-03_10_04_00pm.jpg', 'Y65464564', 'annuelle'),
(7, '2021-10-05', '2022-04-05', 'SAHAM', '7853478534', '2021-10-03_10_04_24pm.jpg', 'U787866', 'semestrielle'),
(8, '2021-09-28', '2021-12-28', 'SAHAM', '89432', '2021-10-03_10_04_49pm.jpg', 'T678678', 'trimestrielle'),
(9, '2021-10-18', '2022-04-18', 'SANAD', '78423748923', '2021-10-03_10_05_26pm.jpg', 'I789789', 'semestrielle'),
(10, '2021-10-15', '2022-01-15', 'CAT', '234789', '2021-10-03_10_05_58pm.jpg', 'K9576', 'trimestrielle'),
(11, '2021-10-05', '2022-04-05', 'SANAD', '3458778', '2021-10-03_10_06_30pm.jpg', 'N45678', 'semestrielle'),
(12, '2021-10-04', '2022-04-04', 'MCMA', '76867867868', '2021-10-17_12_02_58am.png', 'ghjgjhg', 'semestrielle');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `adresse` varchar(22) DEFAULT NULL,
  `cin` varchar(22) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `nomPrenom` varchar(44) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `police` varchar(44) DEFAULT NULL,
  `telephone` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `adresse`, `cin`, `dateNaissance`, `nomPrenom`, `idAdmin`, `police`, `telephone`) VALUES
(1, 'marrakech', 'Y7755643', '2021-09-06', 'Said cccccc', 2, '1111123445', '099887766'),
(2, 'tamelalet', '123456789', '2021-09-07', 'abdelmalek ben amar', 2, '784576893456', '099887766'),
(5, 'marrakech', 'HG77896', '2021-03-09', 'Amine mojahid', 2, '55435346', '789789789'),
(6, 'tamalet', 'Y45654567', '2021-09-06', 'Ayman', 2, '4564564561', '76578765'),
(7, 'marrakech', 'Y7897766', '2021-09-20', 'khlid l3rbi', 2, 'y7458768945', '0564564564'),
(8, 'TAMELALET', 'y678467823', '2021-09-07', 'zakaria mazoz', 2, '6834658348', '0345456456'),
(9, '', '', '0000-00-00', 'vrfg', 2, 'rvrfv', ''),
(10, 'nm,nm,', 'bnmbmbnm', '2021-10-20', 'nm,nm,', 2, 'bnmbnnmbnm789789', '78978678');

-- --------------------------------------------------------

--
-- Table structure for table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `couleur` varchar(22) DEFAULT NULL,
  `marque` varchar(33) DEFAULT NULL,
  `matricule` varchar(44) DEFAULT NULL,
  `police` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicules`
--

INSERT INTO `vehicules` (`id`, `couleur`, `marque`, `matricule`, `police`) VALUES
(8, 'bleu', 'mercedece', '2345789098765', '1111123445'),
(9, 'verte', 'BMW', 'Y65464564', '76895689345'),
(10, 'blanche', 'mercedece', 'U787866', '7853478534'),
(11, 'rouge', 'BMW', 'T678678', '89432'),
(12, 'gris', 'opel', 'I789789', '78423748923'),
(13, 'blanche', 'renault', 'H576576', '423789'),
(14, 'rouge', 'renault', 'N45678', '3458778'),
(15, 'blanche', 'renault', 'K9576', '234789'),
(16, 'bleu', 'bmw', 'ghjgjhg', '76867867868'),
(17, 'rouge', 'mercedece', '76678hin,', '678678678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assurances`
--
ALTER TABLE `assurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `police` (`police`);

--
-- Indexes for table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assurances`
--
ALTER TABLE `assurances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
