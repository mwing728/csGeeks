-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:23 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matthewwingdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE database matthewwingdatabase;
CREATE TABLE `admin` (
  `First` text NOT NULL,
  `Last` text NOT NULL,
  `Username` mediumtext NOT NULL,
  `Password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`First`, `Last`, `Username`, `Password`) VALUES
('Matthew ', 'Wing', 'wingm1', 'cs123');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID` int(100) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `username`, `pass`) VALUES
('Matthew', 'Wing', 'wingm1', 'password'),
('', '', '', ''),
('Alex', 'Esposito', 'espositoa1', '1234'),
('John ', 'Smith', 'smithj1', 'smith'),
('rob', 'gronk', 'gronkr1@montclair.edu', 'patriots87'),
('John', 'Doe', 'doej1', '123');
COMMIT;
GRANT SELECT, INSERT, DELETE, UPDATE
ON matthewwingdatabase
TO matthewwing@localhost
IDENTIFIED BY 'matthewwingpass';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
