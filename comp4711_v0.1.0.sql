-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 06:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp4711`
--
CREATE DATABASE IF NOT EXISTS `comp4711` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `comp4711`;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

DROP TABLE IF EXISTS `leagues`;
CREATE TABLE IF NOT EXISTS `leagues` (
  `teamCode` varchar(5) NOT NULL,
  `TeamName` varchar(50) NOT NULL,
  `Win` varchar(1) DEFAULT NULL,
  `Loss` varchar(1) DEFAULT NULL,
  `Tie` varchar(1) DEFAULT NULL,
  `Pct` varchar(5) DEFAULT NULL,
  `PF` varchar(3) DEFAULT NULL,
  `PA` varchar(3) DEFAULT NULL,
  `NetPts` varchar(7) DEFAULT NULL,
  `TD` varchar(2) DEFAULT NULL,
  `Home` varchar(6) DEFAULT NULL,
  `Road` varchar(6) DEFAULT NULL,
  `Division` varchar(6) DEFAULT NULL,
  `Pct2` varchar(5) DEFAULT NULL,
  `Conf` varchar(6) DEFAULT NULL,
  `Pct3` varchar(5) DEFAULT NULL,
  `NonConf` varchar(8) DEFAULT NULL,
  `Streak` varchar(6) DEFAULT NULL,
  `Last5` varchar(6) DEFAULT NULL,
  `Image` varchar(100) NOT NULL,
  `conference` varchar(50) NOT NULL,
  `divisionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `leagues`
--

TRUNCATE TABLE `leagues`;
--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`teamCode`, `TeamName`, `Win`, `Loss`, `Tie`, `Pct`, `PF`, `PA`, `NetPts`, `TD`, `Home`, `Road`, `Division`, `Pct2`, `Conf`, `Pct3`, `NonConf`, `Streak`, `Last5`, `Image`, `conference`, `divisionName`) VALUES
('ARI', 'Arizona Cardinals', '7', '2', '0', '0.75', '302', '185', '117', '32', '3 - 1', '4 - 1', '2-1', '0.5', '5-1', '0.8', '2-1', '3W', '4-1', 'ARI_logo-80x90.gif', 'NFC', 'NCW'),
('ATL', 'Atlanta Falcons', '6', '3', '0', '0.667', '229', '190', '39', '27', '3 - 1', '3 - 2', '0-2', '0', '4-3', '0.571', '2-0', '2L', '2-3', 'ATL_logo-80x90.gif', 'National', 'NFC South Team'),
('BAL', 'Baltimore Ravens', '2', '7', '0', '0.25', '210', '236', '26', '19', '1 - 3', '1 - 4', '1-2', '0.333', '2-4', '0.333', '0-2', '1W', '2-3', 'BAL_logo-80x90.gif', 'American', 'AFC North Team'),
('BUF', 'Buffalo Bills', '5', '4', '0', '0.5', '231', '207', '24', '26', '2 - 3', '3 - 1', '2-1', '0.667', '4-3', '0.571', '0-1', '1W', '2-3', 'BUF_logo-80x90.gif', 'American', 'AFC East Team'),
('CAR', 'Carolina Panthers', '9', '0', '0', '1', '255', '175', '80', '26', '5 - 0', '4 - 0', '2-0', '1', '5-0', '1', '3-0', '8W', '5-0', 'CAR_logo-80x90.gif', 'National', 'NFC South Team'),
('CHI', 'Chicago Bears', '4', '5', '0', '0.375', '199', '234', '35', '16', '1 - 3', '3 - 2', '0-3', '0', '0-5', '0', '3-0', '1W', '3-2', 'CHI_logo-80x90.gif', 'National', 'NFC North Team'),
('CIN', 'Cincinnati Bengals', '8', '0', '0', '1', '229', '142', '87', '28', '4 - 0', '4 - 0', '3-0', '1', '7-0', '1', '1-0', '8W', '5-0', 'CIN_logo-80x90.gif', 'National', 'AFC North team'),
('CLE', 'Cleveland Browns', '2', '8', '0', '0.222', '186', '277', '91', '19', '1 - 3', '1 - 5', '1-1', '0.5', '2-5', '0.286', '0-2', '4L', '1-4', 'CLE_logo-80x90.gif', 'American', 'AFC North Team'),
('DAL', 'Dallas Cowboys', '2', '7', '0', '0.25', '166', '214', '48', '16', '1 - 4', '1 - 3', '2-2', '0.5', '2-5', '0.286', '0-1', '6L', '0-5', 'DAL_logo-80x90.gif', 'National', 'NFC East Team'),
('DEN', 'Denver Broncos', '7', '2', '0', '0.875', '205', '168', '37', '19', '3 - 1', '4 - 1', '2-0', '1', '4-1', '0.8', '3-0', '1L', '4-1', 'DEN_logo-80x90.gif', 'American', 'AFC West Team'),
('DET', 'Detroit Lions', '2', '7', '0', '0.125', '167', '261', '94', '18', '1 - 3', '1 - 4', '1-2', '0.333', '1-4', '0.2', '0-3', '2L', '1-4', 'DET_logo-80x90.gif', 'National', 'NFC North Team'),
('GB', 'Green Bay Packers', '6', '3', '0', '0.75', '219', '185', '34', '24', '4 - 1', '2 - 2', '1-0', '1', '4-1', '0.8', '2-1', '2L', '3-2', 'GB_logo-80x90.gif', 'National', 'NFC North Team'),
('HOU', 'Houston Texans', '3', '5', '0', '0.375', '174', '205', '31', '21', '2 - 2', '1 - 3', '2-1', '0.667', '2-3	', '0.4', '1-2', '1W', '2-3', 'HOU_logo-80x90.gif', 'American', 'AFC South Team'),
('IND', 'Indianapolis Colts', '4', '5', '0', '0.444', '200', '227', '27', '24', '2 - 3', '2 - 2', '3-0', '1', '4-3', '0.571', '0-2', '1W', '2-3', 'IND_logo-80x90.gif', 'American', 'AFC South Team'),
('JAC', 'Jacksonville Jaguars', '3', '6', '0', '0.25', '192', '255', '63', '20', '2 - 2', '1 - 4', '0-2', '0', '2-4', '0.333', '0-2', '1L', '1-4', 'JAC_logo-80x90.gif', 'American', 'AFC South Team'),
('KC', 'Kansas City Chiefs', '4', '5', '0', '0.375', '224', '195', '29', '21', '2 - 2', '2 - 3', '0-1', '0', '2-2', '0.5', '1-3', '2W', '2-3', 'KC_logo-80x90.gif', 'American', 'AFC West Tean'),
('MIA', 'Miami Dolphins', '4', '5', '0', '0.375', '191', '225', '34', '22', '1 - 2', '3 - 3', '0-4', '0', '2-5', '0.286', '1-0', '2L', '2-3', 'MIA_logo-80x90.gif', 'American', 'AFC East Team'),
('MIN', 'Minnesota Vikings', '7', '2', '0', '0.75', '198', '154', '44', '16', '4 - 0', '3 - 2', '3-0', '1', '4-1	', '0.8', '2-1', '4W', '4-1', 'MIN_logo-80x90.gif', 'National', 'NFC North Team'),
('NE', 'New England Patriots', '9', '0', '0', '1', '303', '169', '134', '31', '5 - 0', '4 - 0', '3-0', '1', '6-0', '1', '2-0', '8W', '5-0', 'NE_logo-80x90.gif', 'American', 'AFC East Team'),
('NO', 'New Orleans Saints', '4', '6', '0', '0.444', '255', '315', '60', '31', '3 - 2', '1 - 4', '1-2', '0.333', '3-4', '0.429', '1-1', '1L', '3-2', 'NO_logo-80x90.gif', 'National', 'NFC South Team'),
('NYG', 'New York Giants', '5', '5', '0', '0.556', '273', '253', '20', '27', '3 - 2', '2 - 3', '2-2', '0.5', '4-4	', '0.5', '1-0', '1W', '3-2', 'NYG_logo-80x90.gif', 'National', 'NFC East Team'),
('NYJ', 'New York Jets', '5', '4', '0', '0.625', '217', '184', '33', '23', '3 - 2', '2 - 2', '1-1', '0.5', '4-2', '0.667', '1-1', '1W', '3-2', 'NYJ_logo-80x90.gif', 'American', 'AFC East Team'),
('OAK', 'Oakland Raiders', '4', '5', '0', '0.5', '227', '241', '14', '25', '2 - 3', '2 - 2', '1-1', '0.5', '4-3', '0.571', '0-1', '1L', '2-3', 'OAK_logo-80x90.gif', 'American', 'AFC West Team'),
('PHI', 'Philadelphia Eagles', '4', '5', '0', '0.5', '212', '184', '28', '22', '2 - 2', '2 - 3', '2-2', '0.5', '3-4', '0.429', '1-0', '1W', '3-2', 'PHI_logo-80x90.gif', 'National', 'NFC East Team'),
('PIT', 'Pittsburgh Steelers', '6', '4', '0', '0.556', '236', '191', '45', '22', '4 - 2', '2 - 2', '0-2', '0', '2-4', '0.333', '3-0', '1W', '3-2', 'PIT_logo-80x90.gif', 'American', 'AFC North Team'),
('SD', 'San Diego Chargers', '2', '7', '0', '0.222', '210', '249', '39', '23', '2 - 3', '0 - 4', '0-1', '0', '1-4', '0.2', '1-3', '5L', '0-5', 'SD_logo-80x90.gif', 'American', 'AFC West Team'),
('SEA', 'San Francisco 49ers', '4', '5', '0', '0.333', '199', '179', '20', '12', '2 - 2', '2 - 3', '0-3', '0', '2-5', '0.286', '1-1', '1W', '2-3', 'SEA_logo-80x90.gif', 'National', 'NFC West Team'),
('SF', 'Seattle Seahawks', '3', '6', '0', '0.5', '126', '223', '97', '16', '3 - 2', '0 - 4', '1-1', '0.5', '4-3', '0.571', '0-1', '2W', '3-2', 'SF_logo-80x90.gif', 'National', 'NFC West Team'),
('STL', 'St. Louis Rams', '4', '5', '0', '0.5', '166', '183', '17', '16', '3 - 2', '1 - 3', '3-0', '1', '3-3', '0.5', '1-1', '1L', '3-2', 'STL_logo-80x90.gif', 'National', 'NFC West Team'),
('TB', 'Tampa Bay Buccaneers', '4', '5', '0', '0.375', '191', '237', '46', '18', '2 - 3', '2 - 2', '2-1', '.667', '2-3', '0.4', '1-2', '1L', '2-3', 'TB_logo-80x90.gif', 'National', 'NFC South Team'),
('TEN', 'Tennessee Titans', '2', '7', '0', '0.25', '169', '214', '45', '19', '0 - 5', '2 - 2', '0-2', '0', '0-5', '0', '2-1', '1W', '1-4', 'TEN_logo-80x90.gif', 'American', 'AFC South Team'),
('WAS', 'Washington Redskins', '4', '5', '0', '0.375', '205', '209', '4', '17', '4 - 1', '0 - 4', '1-1', '0.5', '3-2', '0.6', '0-3', '1L', '2-3', 'WAS_logo-80x90.gif', 'National', 'NFC East Team');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `PlayerID` int(11) NOT NULL,
  `Pos` varchar(25) NOT NULL,
  `Num` varchar(25) DEFAULT NULL,
  `PlayerName` varchar(25) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Weight` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `players`
--

TRUNCATE TABLE `players`;
--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerID`, `Pos`, `Num`, `PlayerName`, `Image`, `Age`, `College`, `Weight`) VALUES
(5, 'RB', '29', 'Blount, LeGarrette', 'BLO626278.png', 28, 'Oregon', 250),
(7, 'OLB', '58', 'Bostic, Jon', 'BOS528427.png', 24, 'Florida', 245),
(8, 'WR', '82', 'Boyce, Josh', 'BOY049190.png', 38, 'Michigan', 225),
(9, 'QB', '12', 'Brady, Tom', 'BRA371156.png', 24, 'Michigan', 225),
(10, 'DT', '97', 'Branch, Alan', 'BRA489251.png', 38, 'Michigan', 350),
(11, 'DT', '90', 'Brown, Malcom', 'BRO550723.png', 21, 'Texas', 320),
(12, 'CB', '25', 'Brown, Tarell', 'BRO695589.png', 30, 'Texas', 190),
(13, 'CB', '21', 'Butler, Malcolm', 'BUT474917.png', 24, 'West Alabama', 190),
(14, 'OT', '61', 'Cannon, Marcus', 'CAN637002.png', 27, 'Texas Christian', 335),
(15, 'LS', '49', 'Cardona, Joe', 'CAR054160.png', 23, 'Navy', 245),
(16, 'TE', '88', 'Chandler, Scott', 'CHA313999.png', 30, 'Iowa', 260),
(17, 'SS', '23', 'Chung, Patrick', 'CHU126772.png', 28, 'Oregon', 215),
(18, 'CB', '22', 'Coleman, Justin', 'COL294032.png', 22, 'Tennessee', 188),
(19, 'OLB', '91', 'Collins, Jamie', 'COL607549.png', 26, 'Southern Mississppi', 250),
(20, 'TE', '86', 'Derby, A.J.', 'DER139014.png', 24, 'Arkansas', 255),
(21, 'FB', '46', 'Develin, James', 'DEV145356.png', 27, 'Brown', 255),
(22, 'WR', '17', 'Dobson, Aaron', 'DOB744752.png', 24, 'Marshall', 205),
(23, 'DT', '99', 'Easley, Dominique', 'EAS071808.png', 23, 'Florida', 285),
(24, 'DB', '43', 'Ebner, Nate', 'EBN177981.png', 26, 'Ohio State', 220),
(25, 'WR', '11', 'Edelman, Julian', 'EDE425791.png', 29, 'Kent State', 200),
(26, 'OT', '71', 'Fleming, Cameron', 'FLE157731.png', 23, 'Standford', 320),
(27, 'Pos', 'Num', 'Test player', '', 32, '4', 123),
(28, 'P', '46', 'testPlayer 32', '69.png', 41, 'BCIT', 5123),
(29, 'ps', '32', 'testPlayer32', '42.png', 42, 'dtest', 42),
(30, 'test', '32', 'Test player 32', '92.png', 42, 'BCIT', 132),
(31, 'P', '35', 'test', '11.png', 32, 'BCIT', 15);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `scoreID` int(11) NOT NULL,
  `homeTeam` varchar(5) NOT NULL,
  `awayTeam` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `homeScore` int(11) NOT NULL,
  `awayScore` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `score`
--

TRUNCATE TABLE `score`;
--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scoreID`, `homeTeam`, `awayTeam`, `date`, `homeScore`, `awayScore`) VALUES
(1, 'NE', 'PIT', '2015-09-10', 21, 28),
(2, 'JAC', 'CAR', '2015-09-13', 20, 9),
(3, 'NYJ', 'CLE', '2015-09-13', 10, 31),
(4, 'CHI', 'GB', '2015-09-13', 31, 23),
(5, 'BUF', 'IND', '2015-09-13', 14, 27),
(6, 'HOU', 'KC', '2015-09-13', 27, 20),
(7, 'WAS', 'MIA', '2015-09-13', 17, 10),
(8, 'STL', 'SEA', '2015-09-13', 31, 34),
(9, 'SD', 'DET', '2015-09-13', 28, 33),
(10, 'ARI', 'NO', '2015-09-13', 19, 31),
(11, 'DEN', 'BAL', '2015-09-13', 13, 19),
(12, 'OAK', 'CIN', '2015-09-13', 33, 13),
(13, 'TB', 'TEN', '2015-09-13', 42, 14),
(14, 'DAL', 'NYG', '2015-09-13', 26, 27),
(15, 'ATL', 'PHI', '2015-09-14', 24, 26),
(16, 'SF', 'MIN', '2015-09-14', 3, 20),
(17, 'KC', 'DEN', '2015-09-17', 31, 24),
(18, 'CHI', 'ARI', '2015-09-20', 48, 23),
(19, 'NYG', 'ATL', '2015-09-20', 24, 20),
(20, 'MIN', 'DET', '2015-09-20', 16, 26),
(21, 'CAR', 'HOU', '2015-09-20', 17, 24),
(22, 'BUF', 'NE', '2015-09-20', 40, 32),
(23, 'CIN', 'SD', '2015-09-20', 19, 24),
(24, 'PIT', 'SF', '2015-09-20', 18, 43),
(25, 'WAS', 'STL', '2015-09-20', 10, 24),
(26, 'NO', 'TB', '2015-09-20', 26, 19),
(27, 'CLE', 'TEN', '2015-09-20', 14, 28),
(28, 'OAK', 'BAL', '2015-09-20', 33, 37),
(29, 'JAC', 'MIA', '2015-09-20', 20, 23),
(30, 'PHI', 'DAL', '2015-09-20', 20, 10),
(31, 'GB', 'SEA', '2015-09-20', 17, 27),
(32, 'IND', 'NYJ', '2015-09-21', 20, 7),
(33, 'NYG', 'WAS', '2015-09-24', 21, 32),
(34, 'DAL', 'ATL', '2015-09-27', 39, 28),
(35, 'BAL', 'CIN', '2015-09-27', 28, 24),
(36, 'TEN', 'IND', '2015-09-27', 35, 33),
(37, 'NE', 'JAC', '2015-09-27', 17, 51),
(38, 'CAR', 'NO', '2015-09-27', 22, 27),
(39, 'CLE', 'OAK', '2015-09-27', 27, 20),
(40, 'NYJ', 'PHI', '2015-09-27', 24, 17),
(41, 'STL', 'PIT', '2015-09-27', 12, 6),
(42, 'MIN', 'SD', '2015-09-27', 14, 31),
(43, 'HOU', 'TB', '2015-09-27', 9, 19),
(44, 'ARI', 'SF', '2015-09-27', 7, 47),
(45, 'MIA', 'BUF', '2015-09-27', 41, 14),
(46, 'SEA', 'CHI', '2015-09-27', 0, 26),
(47, 'DET', 'DEN', '2015-09-27', 24, 12),
(48, 'GB', 'KC', '2015-09-28', 28, 38),
(49, 'PIT', 'BAL', '2015-10-01', 23, 20),
(50, 'MIA', 'NYJ', '2015-10-04', 27, 14),
(51, 'TB', 'CAR', '2015-10-04', 37, 23),
(52, 'ATL', 'HOU', '2015-10-04', 21, 48),
(53, 'IND', 'JAC', '2015-10-04', 13, 16),
(54, 'CIN', 'KC', '2015-10-04', 21, 36),
(55, 'BUF', 'NYG', '2015-10-04', 24, 10),
(56, 'CHI', 'OAK', '2015-10-04', 20, 22),
(57, 'WAS', 'PHI', '2015-10-04', 20, 23),
(58, 'SD', 'CLE', '2015-10-04', 27, 30),
(59, 'SF', 'GB', '2015-10-04', 17, 3),
(60, 'DEN', 'MIN', '2015-10-04', 20, 23),
(61, 'ARI', 'STL', '2015-10-04', 24, 22),
(62, 'NO', 'DAL', '2015-10-04', 20, 26),
(63, 'SEA', 'DET', '2015-10-05', 10, 13),
(64, 'HOU', 'IND', '2015-10-08', 27, 20),
(65, 'TEN', 'BUF', '2015-10-11', 14, 13),
(66, 'KC', 'CHI', '2015-10-11', 18, 17),
(67, 'BAL', 'CLE', '2015-10-11', 33, 30),
(68, 'TB', 'JAC', '2015-10-11', 31, 38),
(69, 'PHI', 'NO', '2015-10-11', 17, 39),
(70, 'CIN', 'SEA', '2015-10-11', 24, 27),
(71, 'GB', 'STL', '2015-10-11', 10, 24),
(72, 'ATL', 'WAS', '2015-10-11', 19, 25),
(73, 'DET', 'ARI', '2015-10-11', 42, 17),
(74, 'OAK', 'DEN', '2015-10-11', 16, 10),
(75, 'DAL', 'NE', '2015-10-11', 30, 6),
(76, 'NYG', 'SF', '2015-10-11', 27, 30),
(77, 'SD', 'PIT', '2015-10-12', 24, 20),
(78, 'NO', 'ATL', '2015-10-15', 21, 31),
(79, 'PIT', 'ARI', '2015-10-18', 13, 25),
(80, 'DET', 'CHI', '2015-10-18', 34, 37),
(81, 'BUF', 'CIN', '2015-10-18', 34, 21),
(82, 'CLE', 'DEN', '2015-10-18', 26, 23),
(83, 'JAC', 'HOU', '2015-10-18', 31, 20),
(84, 'MIN', 'KC', '2015-10-18', 10, 16),
(85, 'TEN', 'MIA', '2015-10-18', 38, 10),
(86, 'NYJ', 'WAS', '2015-10-18', 20, 34),
(87, 'SEA', 'CAR', '2015-10-18', 27, 23),
(88, 'SF', 'BAL', '2015-10-18', 20, 25),
(89, 'GB', 'SD', '2015-10-18', 20, 27),
(90, 'IND', 'NE', '2015-10-18', 34, 27),
(91, 'PHI', 'NYG', '2015-10-19', 7, 27),
(92, 'SF', 'SEA', '2015-10-22', 20, 3),
(93, 'JAC', 'BUF', '2015-10-25', 31, 34),
(94, 'TEN', 'ATL', '2015-10-25', 10, 7),
(95, 'STL', 'CLE', '2015-10-25', 6, 24),
(96, 'MIA', 'HOU', '2015-10-25', 26, 44),
(97, 'DET', 'MIN', '2015-10-25', 28, 19),
(98, 'IND', 'NO', '2015-10-25', 27, 21),
(99, 'NE', 'NYJ', '2015-10-25', 23, 30),
(100, 'KC', 'PIT', '2015-10-25', 13, 23),
(101, 'WAS', 'TB', '2015-10-25', 30, 31),
(102, 'SD', 'OAK', '2015-10-25', 37, 29),
(103, 'NYG', 'DAL', '2015-10-25', 20, 27),
(104, 'CAR', 'PHI', '2015-10-25', 16, 27),
(105, 'ARI', 'BAL', '2015-10-26', 18, 26),
(106, 'NE', 'MIA', '2015-10-29', 7, 36),
(107, 'KC', 'DET', '2015-11-01', 10, 45),
(108, 'CLE', 'ARI', '2015-11-01', 34, 20),
(109, 'PIT', 'CIN', '2015-11-01', 16, 10),
(110, 'CHI', 'MIN', '2015-11-01', 23, 20),
(111, 'NO', 'NYG', '2015-11-01', 49, 52),
(112, 'BAL', 'SD', '2015-11-01', 26, 29),
(113, 'STL', 'SF', '2015-11-01', 6, 27),
(114, 'ATL', 'TB', '2015-11-01', 23, 20),
(115, 'HOU', 'TEN', '2015-11-01', 6, 20),
(116, 'OAK', 'NYJ', '2015-11-01', 20, 34),
(117, 'DAL', 'SEA', '2015-11-01', 13, 12),
(118, 'DEN', 'GB', '2015-11-01', 10, 29),
(119, 'CAR', 'IND', '2015-11-02', 26, 29),
(120, 'CIN', 'CLE', '2015-11-05', 10, 31),
(121, 'CAR', 'GB', '2015-11-08', 29, 37),
(122, 'NYJ', 'JAC', '2015-11-08', 23, 28),
(123, 'BUF', 'MIA', '2015-11-08', 17, 33),
(124, 'PIT', 'OAK', '2015-11-08', 35, 38),
(125, 'MIN', 'STL', '2015-11-08', 18, 21),
(126, 'NO', 'TEN', '2015-11-08', 34, 28),
(127, 'NE', 'WAS', '2015-11-08', 10, 27),
(128, 'SF', 'ATL', '2015-11-08', 16, 17),
(129, 'TB', 'NYG', '2015-11-08', 32, 18),
(130, 'IND', 'DEN', '2015-11-08', 24, 27),
(131, 'DAL', 'PHI', '2015-11-08', 33, 27),
(132, 'SD', 'CHI', '2015-11-09', 22, 19),
(133, 'NYJ', 'BUF', '2015-11-12', 22, 17),
(134, 'TEN', 'CAR', '2015-11-15', 27, 10),
(135, 'STL', 'CHI', '2015-11-15', 37, 13),
(136, 'PIT', 'CLE', '2015-11-15', 9, 30),
(137, 'TB', 'DAL', '2015-11-15', 6, 10),
(138, 'GB', 'DET', '2015-11-15', 18, 16),
(139, 'BAL', 'JAC', '2015-11-15', 22, 20),
(140, 'PHI', 'MIA', '2015-11-15', 20, 19),
(141, 'WAS', 'NO', '2015-11-15', 14, 47),
(142, 'OAK', 'MIN', '2015-11-15', 30, 14),
(143, 'DEN', 'KC', '2015-11-15', 29, 13),
(144, 'NYG', 'NE', '2015-11-15', 27, 26),
(145, 'SEA', 'ARI', '2015-11-15', 39, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`teamCode`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PlayerID`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`scoreID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `scoreID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
