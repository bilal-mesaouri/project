-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 10:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `user` varchar(256) NOT NULL,
  `psd` varchar(256) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`user`, `psd`, `status`) VALUES
('l3arbe', '1234', NULL),
('omar', '1234', 1),
('yolo', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `username` varchar(256) NOT NULL,
  `psd` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `age` int(3) NOT NULL,
  `num` int(10) NOT NULL,
  `pic` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`username`, `psd`, `prenom`, `nom`, `age`, `num`, `pic`) VALUES
('l3arbe', '1234', 'l3arbe', 'sekka', 150, 159357456, NULL),
('omar', '1234', 'omar', 'arroud', 21, 1234, NULL),
('yolo', '1234', 'laila', 'adraoui', 111, 111, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
