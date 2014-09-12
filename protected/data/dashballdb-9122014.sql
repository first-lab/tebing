-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2014 at 12:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashballdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountdata`
--

CREATE TABLE IF NOT EXISTS `accountdata` (
  `accountdataId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`accountdataId`),
  UNIQUE KEY `accountdataId` (`accountdataId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `clubId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clubName` varchar(50) NOT NULL,
  `clubShortName` varchar(5) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `leagueId` int(11) NOT NULL,
  PRIMARY KEY (`clubId`),
  UNIQUE KEY `clubId` (`clubId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`clubId`, `clubName`, `clubShortName`, `coach`, `leagueId`) VALUES
(1, 'Manchester City', 'CITY', 'Manuel Pelegrini', 1),
(2, 'Manchester United', 'MANU', 'Louis Van Gaal', 1),
(3, 'Chelsea', 'CHE', 'Jose Mourinho', 1),
(4, 'Liverpool', 'LIV', 'Brendan Rodgers', 1),
(5, 'Club Atletico de Madrid', 'ATM', 'Unknown', 1),
(6, 'Juventus', 'JUV', 'Unknown', 1),
(7, 'Malmo FF', 'MLM', 'Unknown', 1),
(8, 'Olympiakos FC', 'OLYM', 'Unknown', 1),
(9, 'FC Basel 1893', 'BAS', 'Unknown', 1),
(10, 'PFC Ludogorets Razgrad', 'LUR', 'Unknown', 1),
(11, 'Real Madrid FC', 'REALM', 'Unknown', 1),
(12, 'AS Monaco FC', 'MON', 'Unknown', 1),
(13, 'Bayer 04 Leverkusen', 'LEVK', 'Unknown', 1),
(14, 'FC Zenit', 'ZEN', 'Unknown', 1),
(15, 'SL Benfica', 'BENF', 'Unknown', 1),
(16, 'Arsenal FC', 'ARS', 'Unknown', 1),
(17, 'Borussia Dormund', 'DORM', 'Unknown', 1),
(18, 'Galatasaray AS', 'GALA', 'Unknown', 1),
(19, 'RSC Anderlecht', 'ANDR', 'Unknown', 1),
(20, 'AS Roma', 'ROMA', 'Unknown', 1),
(21, 'FC Bayern Munchen', 'BMUN', 'Unknown', 1),
(22, 'PFC CSKA Moskva', 'CSKA', 'Unknown', 1),
(23, 'AFC Ajax', 'AJAX', 'Unknown', 1),
(24, 'APOEL FC', 'APOEL', 'Unknown', 1),
(25, 'FC Barcelona', 'BARCA', 'Unknown', 1),
(26, 'Paris Saint-Germain', 'PSG', 'Unknown', 1),
(27, 'FC Schalke 04', 'SCK', 'Unknown', 1),
(28, 'NK Maribor', 'MARIB', 'Unknown', 1),
(29, 'Sporting Clube de Portugal', 'SPOR', 'Unknown', 1),
(30, 'Athletic Club', 'ATLC', 'Unknown', 1),
(31, 'FC BATE Borisov', 'BATE', 'Unknown', 1),
(32, 'FC Porto', 'PORTO', 'Unknown', 1),
(33, 'FC Shakhtar Donetsk', 'SHAK', 'Unknown', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clubpoint`
--

CREATE TABLE IF NOT EXISTS `clubpoint` (
  `clubpointId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clubId` int(11) NOT NULL,
  `leagueCupId` int(11) NOT NULL,
  `leagueCupLevelGroup` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `totalPlusGoal` int(11) NOT NULL,
  `totalMinusGoal` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `appearance` int(11) NOT NULL,
  PRIMARY KEY (`clubpointId`),
  UNIQUE KEY `clubpointId` (`clubpointId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `clubpoint`
--

INSERT INTO `clubpoint` (`clubpointId`, `clubId`, `leagueCupId`, `leagueCupLevelGroup`, `win`, `draw`, `lose`, `totalPlusGoal`, `totalMinusGoal`, `point`, `appearance`) VALUES
(2, 5, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(3, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(4, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(5, 8, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(6, 9, 1, 2, 0, 0, 0, 0, 0, 0, 0),
(7, 4, 1, 2, 0, 0, 0, 0, 0, 0, 0),
(8, 10, 1, 2, 0, 0, 0, 0, 0, 0, 0),
(9, 11, 1, 2, 0, 0, 0, 0, 0, 0, 0),
(10, 12, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(11, 13, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(12, 14, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(13, 15, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(14, 16, 1, 4, 0, 0, 0, 0, 0, 0, 0),
(15, 17, 1, 4, 0, 0, 0, 0, 0, 0, 0),
(16, 18, 1, 4, 0, 0, 0, 0, 0, 0, 0),
(17, 19, 1, 4, 0, 0, 0, 0, 0, 0, 0),
(18, 20, 1, 5, 0, 0, 0, 0, 0, 0, 0),
(19, 21, 1, 5, 0, 0, 0, 0, 0, 0, 0),
(20, 1, 1, 5, 0, 0, 0, 0, 0, 0, 0),
(21, 22, 1, 5, 0, 0, 0, 0, 0, 0, 0),
(22, 23, 1, 6, 0, 0, 0, 0, 0, 0, 0),
(23, 24, 1, 6, 0, 0, 0, 0, 0, 0, 0),
(24, 25, 1, 6, 0, 0, 0, 0, 0, 0, 0),
(25, 26, 1, 6, 0, 0, 0, 0, 0, 0, 0),
(26, 3, 1, 7, 0, 0, 0, 0, 0, 0, 0),
(27, 27, 1, 7, 0, 0, 0, 0, 0, 0, 0),
(28, 28, 1, 7, 0, 0, 0, 0, 0, 0, 0),
(29, 29, 1, 7, 0, 0, 0, 0, 0, 0, 0),
(30, 30, 1, 8, 0, 0, 0, 0, 0, 0, 0),
(31, 31, 1, 8, 0, 0, 0, 0, 0, 0, 0),
(32, 32, 1, 8, 0, 0, 0, 0, 0, 0, 0),
(33, 33, 1, 8, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `countryId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `countryName` varchar(50) NOT NULL,
  `countryShortName` varchar(5) NOT NULL,
  UNIQUE KEY `countryId` (`countryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `countryName`, `countryShortName`) VALUES
(1, 'Greece', 'GRE'),
(2, 'England', 'ENG'),
(5, 'Germany', 'GER'),
(6, 'Spain', 'ESP'),
(7, 'France', 'FRA'),
(8, 'Portugal', 'POR'),
(9, 'Turkey', 'TUR'),
(10, 'Netherland', 'NED'),
(11, 'Slovenia', 'SVN'),
(12, 'Russia', 'RUS'),
(14, 'Cyprus', 'CYP'),
(15, 'Ukraine', 'UKR'),
(16, 'Belarus', 'BLR'),
(17, 'Italy', 'ITA');

-- --------------------------------------------------------

--
-- Table structure for table `leaguecupinfo`
--

CREATE TABLE IF NOT EXISTS `leaguecupinfo` (
  `leagueCupId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `leagueCupName` varchar(50) NOT NULL,
  `leagueCupShortName` varchar(5) NOT NULL,
  PRIMARY KEY (`leagueCupId`),
  UNIQUE KEY `leagueCupId` (`leagueCupId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `leaguecupinfo`
--

INSERT INTO `leaguecupinfo` (`leagueCupId`, `leagueCupName`, `leagueCupShortName`) VALUES
(1, 'UEFA Champions League', 'UCL'),
(2, 'UEFA Europe League', 'UEL'),
(3, 'AFC Asian Cup', 'AFC'),
(9, 'UEFA SuperCup', 'USC'),
(10, 'FA Cup', 'FA'),
(11, 'Copa del Rey', 'CDR'),
(12, 'Europe Cup', 'EURO'),
(13, 'FIFA World Cup', 'WORLD');

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `matchId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `dueDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stadiumId` int(11) NOT NULL,
  `leagueId` int(11) NOT NULL,
  `numbRound` int(11) NOT NULL,
  UNIQUE KEY `matchId` (`matchId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`matchId`, `team1`, `team2`, `dueDate`, `stadiumId`, `leagueId`, `numbRound`) VALUES
(1, 1, 2, '2014-09-03 08:30:10', 1, 1, 1),
(2, 3, 4, '2014-09-03 08:30:15', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matchnews`
--

CREATE TABLE IF NOT EXISTS `matchnews` (
  `matchNewsId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `newsStatusId` int(11) NOT NULL,
  `actorPlayerId` int(11) NOT NULL,
  `minute` varchar(5) NOT NULL,
  `matchId` int(11) NOT NULL,
  PRIMARY KEY (`matchNewsId`),
  UNIQUE KEY `matchNewsId` (`matchNewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `matchnews`
--

INSERT INTO `matchnews` (`matchNewsId`, `newsStatusId`, `actorPlayerId`, `minute`, `matchId`) VALUES
(1, 1, 1, '24', 1),
(2, 1, 3, '34', 1),
(3, 2, 2, '11', 1),
(4, 3, 3, '56', 2),
(5, 4, 5, '12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsstatus`
--

CREATE TABLE IF NOT EXISTS `newsstatus` (
  `newsStatusId` int(2) NOT NULL,
  `newsStatusDesc` varchar(50) NOT NULL,
  PRIMARY KEY (`newsStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsstatus`
--

INSERT INTO `newsstatus` (`newsStatusId`, `newsStatusDesc`) VALUES
(1, 'Scoring Goal'),
(2, 'Yellow Card'),
(3, 'Red Card'),
(4, 'Own Goal');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `playerId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `playerName` varchar(50) NOT NULL,
  `clubId` int(11) NOT NULL,
  `goalTotal` int(11) NOT NULL,
  `assistTotal` int(11) NOT NULL,
  `yellowCardTotal` int(11) NOT NULL,
  `redCardTotal` int(11) NOT NULL,
  PRIMARY KEY (`playerId`),
  UNIQUE KEY `playerId` (`playerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`playerId`, `playerName`, `clubId`, `goalTotal`, `assistTotal`, `yellowCardTotal`, `redCardTotal`) VALUES
(1, 'Sergio Aguero', 1, 3, 1, 1, 0),
(2, 'Edin Dzeko', 1, 2, 1, 0, 0),
(3, 'Robin Van Persie', 2, 3, 1, 1, 1),
(4, 'Wayne Rooney', 2, 2, 0, 0, 0),
(5, 'Didier Drogba', 3, 1, 0, 0, 0),
(6, 'Mario Balotelli', 4, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE IF NOT EXISTS `stadium` (
  `stadiumId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `stadiumName` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `countryId` int(11) NOT NULL,
  PRIMARY KEY (`stadiumId`),
  UNIQUE KEY `stadiumId` (`stadiumId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`stadiumId`, `stadiumName`, `region`, `countryId`) VALUES
(1, 'City of Manchester Stadium', 'Manchester', 2),
(2, 'Stamford Bridge', 'London', 2),
(3, 'Juventus Stadium', 'Turin', 17),
(4, 'Stadio Georgios Karaiskakis', 'Piraeus', 1),
(5, 'Stade Louis II', 'Monaco', 7),
(6, 'Estadio do Sport Lisboa e Benfica', 'Lisbon', 8),
(7, 'Ali Sami Yen Spor Kompleksi', 'Istanbul', 9),
(8, 'BVB Stadion Dortmund', 'Dortmund', 5),
(9, 'Stadio Olimpico', 'Rome', 17),
(10, 'Fussball Arena Munchen', 'Munich', 5),
(11, 'Camp Nou', 'Barcelona', 6),
(12, 'Amsterdam Arena', 'Amsterdam', 10),
(13, 'Stadion Ljutski vrt', 'Maribor', 11),
(14, 'Estadio do Dragao', 'Porto', 8),
(15, 'Estadio de San Mames', 'Bilbao', 6),
(16, 'Stadion Lokomotiv', 'Moscow', 12),
(17, 'Parc des Princes', 'Paris', 7),
(18, 'GSP Stadium', 'Nicosia', 14),
(19, 'Jose Alvalade', 'Lisbon', 8),
(20, 'Stadion Gelsenkirchen', 'Gelsenkirchen', 5),
(21, 'Arena Lviv', 'Lviv', 15),
(22, 'Borisov Arena', 'Borisov', 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
