-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 06:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_login`
--

CREATE TABLE `tab_login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_login`
--

INSERT INTO `tab_login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('lutfi', '$2y$10$SfOp4s/8q51rFpk3h31xeOr9X'),
('tzuyu', '$2y$10$20/Qtg9nYcvuznpAdTn2IOcad'),
('alex', '$2y$10$T/tXyRHzumSw1Uxkpib67Oy9H'),
('twice', '$2y$10$lGBmVCiCMtdQcG99rFppPej.h'),
('', '$2y$10$ObgkMdr3qNPgqHC3QggSyezqE'),
('asdas', '$2y$10$K1.eYRuJoZ/4cP84zd.FHODIC'),
('prama', '$2y$10$F.21W3U7Lqlt8s3l1hqQ/e0g0'),
('sana', '202cb962ac59075b964b07152d234b70'),
('saddam', '65ded5353c5ee48d0b7d48c591b8f430'),
('aque', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
