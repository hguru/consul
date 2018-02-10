-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2016 at 07:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nisn`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `place_birth` varchar(30) NOT NULL,
  `date_birth` date NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `name`, `sex`, `place_birth`, `date_birth`) VALUES
(2012020201, 'Doni Yen', 'Male', 'Aceh', '1996-04-10'),
(2012020202, 'Andri Doni', 'Male', 'Papua Barat', '1993-01-05'),
(2012020206, 'Doni Persada', 'Male', 'Surabaya', '1994-01-19'),
(2012020208, 'Panca Indra', 'Male', 'Medan', '1996-01-12'),
(2012020301, 'Yeni Rahmawati', 'Female', 'Sigli', '1995-01-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
