-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2011 at 01:40 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bibleoteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE `autor` (
  `COD` int(10) NOT NULL AUTO_INCREMENT,
  `NUME` varchar(45) NOT NULL,
  PRIMARY KEY (`COD`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`COD`, `NUME`) VALUES
(1, 'Orson Scott Card'),
(2, 'Ion Creanga'),
(7, 'Cretulescu Radu');

-- --------------------------------------------------------

--
-- Table structure for table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE `carte` (
  `ID_CARTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_AUTOR` int(11) NOT NULL,
  `ID_EDITURA` int(11) NOT NULL,
  `TITLU` varchar(50) NOT NULL,
  `AN_APARITIE` varchar(4) NOT NULL,
  PRIMARY KEY (`ID_CARTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`ID_CARTE`, `ID_AUTOR`, `ID_EDITURA`, `TITLU`, `AN_APARITIE`) VALUES
(1, 1, 1, 'Jocul lui Ender', '1986'),
(3, 1, 1, 'genocid', '1992'),
(4, 1, 1, 'Vorbitor in numele mortilor', '1987'),
(5, 2, 3, 'Insula misterioasa', '1902');

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

DROP TABLE IF EXISTS `carti`;
CREATE TABLE `carti` (
  `titlu` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editura` varchar(50) NOT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `an_aparitie` date NOT NULL,
  UNIQUE KEY `cod` (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`titlu`, `autor`, `editura`, `cod`, `an_aparitie`) VALUES
('Genocid', 'Orson Scott Card', 'Nemira', 1, '1986-01-07'),
('Jocul lui Ender', 'Orson Scott Card', 'Nemira', 2, '1984-03-21'),
('Vorbitor in numele mortilor', 'Orson Scott Card', 'Nemira', 3, '1990-12-12'),
('Harry Potter si piatra filosofala', 'J.K.Rollings', 'Astra', 4, '2003-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `editura`
--

DROP TABLE IF EXISTS `editura`;
CREATE TABLE `editura` (
  `NUME_ED` varchar(25) NOT NULL,
  `ID_EDITURA` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_EDITURA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `editura`
--

INSERT INTO `editura` (`NUME_ED`, `ID_EDITURA`) VALUES
('Nemira', 1),
('', 2),
('Teora', 3);

-- --------------------------------------------------------

--
-- Table structure for table `imprumut`
--

DROP TABLE IF EXISTS `imprumut`;
CREATE TABLE `imprumut` (
  `ID_USER` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARTE1` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `imprumut`
--

INSERT INTO `imprumut` (`ID_USER`, `ID`, `ID_CARTE1`) VALUES
(6, 1, 1),
(1, 2, 5),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` int(2) NOT NULL,
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `type`, `id`) VALUES
('rakasan', '5ca0668393023690883ce4fda09da1509be6b22e', 1, 1),
('coco', '09f836894fc1fe9af6f429fc24dcccc2e6847fe0', 2, 2),
('svstfn', 'b223ca876eda071400c6836f73a79e0df53ad498', 1, 3),
('Joker', 'f0744d60dd500c92c0d37c16174cc58d3c4bdd8e', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `loseri`
--

DROP TABLE IF EXISTS `loseri`;
CREATE TABLE `loseri` (
  `NUME` varchar(25) NOT NULL,
  `PRENUME` varchar(10) NOT NULL,
  `ADRESA` varchar(25) NOT NULL,
  `TELEFONFIX` int(10) NOT NULL,
  `TELEFONMOBIL` int(10) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `CNP` int(13) NOT NULL,
  `ID` int(11) NOT NULL,
  `FACULTATE` varchar(25) NOT NULL,
  `ID_CURENT` int(11) NOT NULL AUTO_INCREMENT,
  `NR_CARTI` int(11) NOT NULL,
  PRIMARY KEY (`ID_CURENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loseri`
--

INSERT INTO `loseri` (`NUME`, `PRENUME`, `ADRESA`, `TELEFONFIX`, `TELEFONMOBIL`, `EMAIL`, `CNP`, `ID`, `FACULTATE`, `ID_CURENT`, `NR_CARTI`) VALUES
('Racasan', 'Vlad', 'Aleea Petuniei ', 369401903, 75229631, 'lord_rakasan@ya', 2147483647, 0, 'Hermann Oberth', 1, 0),
('Homar', 'Sebastian', 'bla bla', 369123456, 727874941, 'vladracasan@gmail.com', 2147483647, 0, 'inginerie', 2, 0),
('Racasan', 'Bogdan', 'Aleea Petuniei', 369401903, 75554470, 'racasan_bogdan@yahoo.com', 2147483647, 4, 'Psihologie', 3, 0),
('racasan', 'Bogdan', 'Aleea Daliei nr 11', 369401930, 747872324, 'racasan_bogdan@yahoo.com', 2147483647, 6, 'nam', 5, 0);
