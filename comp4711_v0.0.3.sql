-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2015 at 02:07 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

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
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`teamCode`, `TeamName`, `Win`, `Loss`, `Tie`, `Pct`, `PF`, `PA`, `NetPts`, `TD`, `Home`, `Road`, `Division`, `Pct2`, `Conf`, `Pct3`, `NonConf`, `Streak`, `Last5`, `Image`, `conference`, `divisionName`) VALUES
('ARI', 'Arizona Cardinals', '7', '2', '0', '0.75', '302', '185', '117', '32', '3-1', '4-1', '2-1', '0.5', '5-1', '0.8', '2-1', '3W', '4-1', 'ARI_logo-80x90.gif', 'NFC', 'NCW'),
('ATL', 'Atlanta Falcons', '6', '3', '0', '0.667', '229', '190', '39', '27', '3-1', '3-2', '0-2', '0', '4-3', '0.571', '2-0', '2L', '2-3', 'ATL_logo-80x90.gif', 'National', 'NFC South Team'),
('BAL', 'Baltimore Ravens', '2', '6', '0', '0.25', '190', '214', '-24', '19', '1-2', '1-4', '1-2', '0.333', '2-4', '0.333', '0-2', '1W', '2-3', 'BAL_logo-80x90.gif', 'American', 'AFC North Team'),
('BUF', 'Buffalo Bills', '4', '4', '0', '0.5', '209', '190', '19', '26', '2-3', '2-1', '2-1', '0.667', '4-3', '0.571', '0-1', '1W', '2-3', 'BUF_logo-80x90.gif', 'American', 'AFC East Team'),
('CAR', 'Carolina Panthers', '8', '0', '0', '1', '228', '165', '63', '26', '5-0', '3-0', '2-0', '1', '5-0', '1', '3-0', '8W', '5-0', 'CAR_logo-80x90.gif', 'National', 'NFC South Team'),
('CHI', 'Chicago Bears', '3', '5', '0', '0.375', '162', '221', '-59', '16', '1-3', '2-2', '0-3', '0', '0-5', '0', '3-0', '1W', '3-2', 'CHI_logo-80x90.gif', 'National', 'NFC North Team'),
('CIN', 'Cincinnati Bengals', '8', '0', '0', '1', '229', '142', '87', '28', '4-0', '4-0', '3-0', '1', '7-0', '1', '1-0', '8W', '5-0', 'CIN_logo-80x90.gif', 'National', 'AFC North team'),
('CLE', 'Cleveland Browns', '2', '7', '0', '0.222', '177', '247', '-70', '19', '1-3', '1-4', '1-1', '0.5', '2-5', '0.286', '0-2', '4L', '1-4', 'CLE_logo-80x90.gif', 'American', 'AFC North Team'),
('DAL', 'Dallas Cowboys', '2', '6', '0', '0.25', '160', '204', '-44', '16', '1-4', '1-2', '2-2', '0.5', '2-5', '0.286', '0-1', '6L', '0-5', 'DAL_logo-80x90.gif', 'National', 'NFC East Team'),
('DEN', 'Denver Broncos', '7', '1', '0', '0.875', '192', '139', '53', '19', '3-0', '4-1', '2-0', '1', '4-1', '0.8', '3-0', '1L', '4-1', 'DEN_logo-80x90.gif', 'American', 'AFC West Team'),
('DET', 'Detroit Lions', '1', '7', '0', '0.125', '149', '245', '-96', '18', '1-3', '0-4', '1-2', '0.333', '1-4', '0.2', '0-3', '2L', '1-4', 'DET_logo-80x90.gif', 'National', 'NFC North Team'),
('GB', 'Green Bay Packers', '6', '2', '0', '0.75', '203', '167', '36', '24', '4-0', '2-2', '1-0', '1', '4-1', '0.8', '2-1', '2L', '3-2', 'GB_logo-80x90.gif', 'National', 'NFC North Team'),
('HOU', 'Houston Texans', '3', '5', '0', '0.375', '174', '205', '-31', '21', '2-2', '1-3', '2-1', '0.667', '2-3	', '0.4', '1-2', '1W', '2-3', 'HOU_logo-80x90.gif', 'American', 'AFC South Team'),
('IND', 'Indianapolis Colts', '4', '5', '0', '0.444', '200', '227', '-27', '24', '2-3', '2-3', '3-0', '1', '4-3', '0.571', '0-2', '1W', '2-3', 'IND_logo-80x90.gif', 'American', 'AFC South Team'),
('JAC', 'Jacksonville Jaguars', '2', '6', '0', '0.25', '170', '235', '-65', '20', '2-2', '0-4', '0-2', '0', '2-4', '0.333', '0-2', '1L', '1-4', 'JAC_logo-80x90.gif', 'American', 'AFC South Team'),
('KC', 'Kansas City Chiefs', '3', '5', '0', '0.375', '195', '182', '13', '21', '2-2', '1-3', '0-1', '0', '2-2', '0.5', '1-3', '2W', '2-3', 'KC_logo-80x90.gif', 'American', 'AFC West Tean'),
('MIA', 'Miami Dolphins', '3', '5', '0', '0.375', '171', '206', '-35', '22', '1-2', '2-3', '0-4', '0', '2-5', '0.286', '1-0', '2L', '2-3', 'MIA_logo-80x90.gif', 'American', 'AFC East Team'),
('MIN', 'Minnesota Vikings', '6', '2', '0', '0.75', '168', '140', '28', '16', '4-0', '2-2', '3-0', '1', '4-1	', '0.8', '2-1', '4W', '4-1', 'MIN_logo-80x90.gif', 'National', 'NFC North Team'),
('NE', 'New England Patriots', '8', '0', '0', '1', '276', '143', '133', '31', '5-0', '3-0', '3-0', '1', '6-0', '1', '2-0', '8W', '5-0', 'NE_logo-80x90.gif', 'American', 'AFC East Team'),
('NO', 'New Orleans Saints', '4', '5', '0', '0.444', '241', '268', '-27', '31', '3-2', '1-3', '1-2', '0.333', '3-4', '0.429', '1-1', '1L', '3-2', 'NO_logo-80x90.gif', 'National', 'NFC South Team'),
('NYG', 'New York Giants', '5', '4', '0', '0.556', '247', '226', '21', '27', '3-1', '2-3', '2-2', '0.5', '4-4	', '0.5', '1-0', '1W', '3-2', 'NYG_logo-80x90.gif', 'National', 'NFC East Team'),
('NYJ', 'New York Jets', '5', '3', '0', '0.625', '200', '162', '38', '23', '3-1', '2-2', '1-1', '0.5', '4-2', '0.667', '1-1', '1W', '3-2', 'NYJ_logo-80x90.gif', 'American', 'AFC East Team'),
('OAK', 'Oakland Raiders', '4', '4', '0', '0.5', '213', '211', '2', '25', '2-2', '2-2', '1-1', '0.5', '4-3', '0.571', '0-1', '1L', '2-3', 'OAK_logo-80x90.gif', 'American', 'AFC West Team'),
('PHI', 'Philadelphia Eagles', '4', '4', '0', '0.5', '193', '164', '29', '22', '2-1', '2-3', '2-2', '0.5', '3-4', '0.429', '1-0', '1W', '3-2', 'PHI_logo-80x90.gif', 'National', 'NFC East Team'),
('PIT', 'Pittsburgh Steelers', '5', '4', '0', '0.556', '206', '182', '24', '22', '3-2', '2-2', '0-2', '0', '2-4', '0.333', '3-0', '1W', '3-2', 'PIT_logo-80x90.gif', 'American', 'AFC North Team'),
('SD', 'San Diego Chargers', '2', '7', '0', '0.222', '210', '249', '-39', '23', '2-3', '0-4', '0-1', '0', '1-4', '0.2', '1-3', '5L', '0-5', 'SD_logo-80x90.gif', 'American', 'AFC West Team'),
('SEA', 'San Francisco 49ers', '3', '6', '0', '0.333', '126', '223', '-97', '12', '3-2', '0-4', '0-3', '0', '2-5', '0.286', '1-1', '1W', '2-3', 'SEA_logo-80x90.gif', 'National', 'NFC West Team'),
('SF', 'Seattle Seahawks', '4', '4', '0', '0.5', '167', '140', '27', '16', '2-1', '2-3', '1-1', '0.5', '4-3', '0.571', '0-1', '2W', '3-2', 'SF_logo-80x90.gif', 'National', 'NFC West Team'),
('STL', 'St. Louis Rams', '4', '4', '0', '0.5', '153', '146', '7', '16', '3-1', '1-3', '3-0', '1', '3-3', '0.5', '1-1', '1L', '3-2', 'STL_logo-80x90.gif', 'National', 'NFC West Team'),
('TB', 'Tampa Bay Buccaneers', '3', '5', '0', '0.375', '181', '231', '-50', '18', '1-3', '2-2', '2-1', '.667', '2-3', '0.4', '1-2', '1L', '2-3', 'TB_logo-80x90.gif', 'National', 'NFC South Team'),
('TEN', 'Tennessee Titans', '2', '6', '0', '0.25', '159', '187', '-28', '19', '0-4', '2-2', '0-2', '0', '0-5', '0', '2-1', '1W', '1-4', 'TEN_logo-80x90.gif', 'American', 'AFC South Team'),
('WAS', 'Washington Redskins', '3', '5', '0', '0.375', '158', '195', '-37', '17', '3-1', '0-4', '1-1', '0.5', '3-2', '0.6', '0-3', '1L', '2-3', 'WAS_logo-80x90.gif', 'National', 'NFC East Team');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

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

CREATE TABLE IF NOT EXISTS `score` (
  `scoreID` int(11) NOT NULL,
  `homeTeam` varchar(5) NOT NULL,
  `awayTeam` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `homeScore` int(11) NOT NULL,
  `teamScore` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scoreID`, `homeTeam`, `awayTeam`, `date`, `homeScore`, `teamScore`) VALUES
(1, 'PIT', 'NE', '2015-09-10', 21, 28),
(2, 'CAR', 'JAC', '2015-09-13', 20, 9),
(3, 'CLE', 'NYJ', '2015-09-13', 10, 31),
(4, 'GB', 'CHI', '2015-09-13', 31, 23),
(5, 'IND', 'BUF', '2015-09-13', 14, 27),
(6, 'KC', 'HOU', '2015-09-13', 27, 20),
(7, 'MIA', 'WAS', '2015-09-13', 17, 10),
(8, 'SEA', 'STL', '2015-09-13', 31, 34),
(9, 'DET', 'SD', '2015-09-13', 28, 33),
(10, 'NO', 'ARI', '2015-09-13', 19, 31),
(11, 'BAL', 'DEN', '2015-09-13', 13, 19),
(12, 'CIN', 'OAK', '2015-09-13', 33, 13),
(13, 'TEN', 'TB', '2015-09-13', 42, 14),
(14, 'NYG', 'DAL', '2015-09-13', 26, 27),
(15, 'PHI', 'ATL', '2015-09-14', 24, 26),
(16, 'MIN', 'SF', '2015-09-14', 3, 20),
(17, 'DEN', 'KC', '2015-09-17', 31, 24),
(18, 'ARI', 'CHI', '2015-09-20', 48, 23),
(19, 'ATL', 'NYG', '2015-09-20', 24, 20),
(20, 'DET', 'MIN', '2015-09-20', 16, 26),
(21, 'HOU', 'CAR', '2015-09-20', 17, 24),
(22, 'NE', 'BUF', '2015-09-20', 40, 32),
(23, 'SD', 'CIN', '2015-09-20', 19, 24),
(24, 'SF', 'PIT', '2015-09-20', 18, 43),
(25, 'STL', 'WAS', '2015-09-20', 10, 24),
(26, 'TB', 'NO', '2015-09-20', 26, 19),
(27, 'TEN', 'CLE', '2015-09-20', 14, 28),
(28, 'BAL', 'OAK', '2015-09-20', 33, 37),
(29, 'MIA', 'JAC', '2015-09-20', 20, 23),
(30, 'DAL', 'PHI', '2015-09-20', 20, 10),
(31, 'SEA', 'GB', '2015-09-20', 17, 27),
(32, 'NYJ', 'IND', '2015-09-21', 20, 7),
(33, 'WAS', 'NYG', '2015-09-24', 21, 32),
(34, 'ATL', 'DAL', '2015-09-27', 39, 28),
(35, 'CIN', 'BAL', '2015-09-27', 28, 24),
(36, 'IND', 'TEN', '2015-09-27', 35, 33),
(37, 'JAC', 'NE', '2015-09-27', 17, 51),
(38, 'NO', 'CAR', '2015-09-27', 22, 27),
(39, 'OAK', 'CLE', '2015-09-27', 27, 20),
(40, 'PHI', 'NYJ', '2015-09-27', 24, 17),
(41, 'PIT', 'STL', '2015-09-27', 12, 6),
(42, 'SD', 'MIN', '2015-09-27', 14, 31),
(43, 'TB', 'HOU', '2015-09-27', 9, 19),
(44, 'SF', 'ARI', '2015-09-27', 7, 47),
(45, 'BUF', 'MIA', '2015-09-27', 41, 14),
(46, 'CHI', 'SEA', '2015-09-27', 0, 26),
(47, 'DEN', 'DET', '2015-09-27', 24, 12);

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
  MODIFY `scoreID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
