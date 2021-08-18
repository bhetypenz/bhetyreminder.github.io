-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 18. Aug 2021 um 14:28
-- Server-Version: 5.7.31
-- PHP-Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `myevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datepicker` varchar(100) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventreminder` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `datepicker`, `eventname`, `eventreminder`) VALUES
(35, '10/16/2022', 'Hochzeit', 'Two Weeks'),
(33, '08/18/2021', 'Connor', 'One Week'),
(34, '08/18/2021', 'Hochzeit', 'Four Days'),
(26, '08/24/2021', 'Maria Wedding', 'One Day'),
(27, '08/25/2021', 'Hochzeit', 'Four Days'),
(28, '08/18/2021', 'Kikikiki', 'Two Weeks');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
