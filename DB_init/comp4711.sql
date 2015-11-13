-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2015 at 03:12 AM
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
-- Table structure for table `League`
--

CREATE TABLE IF NOT EXISTS `League` (
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
  `Non-Conf` varchar(8) DEFAULT NULL,
  `Streak` varchar(6) DEFAULT NULL,
  `Last5` varchar(6) DEFAULT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `League`
--

INSERT INTO `League` (`TeamName`, `Win`, `Loss`, `Tie`, `Pct`, `PF`, `PA`, `NetPts`, `TD`, `Home`, `Road`, `Division`, `Pct2`, `Conf`, `Pct3`, `Non-Conf`, `Streak`, `Last5`, `Image`) VALUES
('Arizona Cardinals', '6', '2', '0', '0.75', '263', '153', '110', '32', '3-1', '3-1', '1-1', '0.5', '4-1', '0.8', '2-1', '2W', '3-2', 'ARI_logo-80x90.gif'),
('Atlanta Falcons', '6', '3', '0', '0.667', '229', '190', '39', '27', '3-1', '3-2', '0-2', '0', '4-3', '0.571', '2-0', '2L', '2-3', 'ATL_logo-80x90.gif'),
('Baltimore Ravens', '2', '6', '0', '0.25', '190', '214', '-24', '19', '1-2', '1-4', '1-2', '0.333', '2-4', '0.333', '0-2', '1W', '2-3', 'BAL_logo-80x90.gif'),
('Buffalo Bills', '4', '4', '0', '0.5', '209', '190', '19', '26', '2-3', '2-1', '2-1', '0.667', '4-3', '0.571', '0-1', '1W', '2-3', 'BUF_logo-80x90.gif'),
('Carolina Panthers', '8', '0', '0', '1', '228', '165', '63', '26', '5-0', '3-0', '2-0', '1', '5-0', '1', '3-0', '8W', '5-0', 'CAR_logo-80x90.gif'),
('Chicago Bears', '3', '5', '0', '0.375', '162', '221', '-59', '16', '1-3', '2-2', '0-3', '0', '0-5', '0', '3-0', '1W', '3-2', 'CHI_logo-80x90.gif'),
('Cincinnati Bengals', '8', '0', '0', '1', '229', '142', '87', '28', '4-0', '4-0', '3-0', '1', '7-0', '1', '1-0', '8W', '5-0', 'CIN_logo-80x90.gif'),
('Cleveland Browns', '2', '7', '0', '0.222', '177', '247', '-70', '19', '1-3', '1-4', '1-1', '0.5', '2-5', '0.286', '0-2', '4L', '1-4', 'CLE_logo-80x90.gif'),
('Dallas Cowboys', '2', '6', '0', '0.25', '160', '204', '-44', '16', '1-4', '1-2', '2-2', '0.5', '2-5', '0.286', '0-1', '6L', '0-5', 'DAL_logo-80x90.gif'),
('Denver Broncos', '7', '1', '0', '0.875', '192', '139', '53', '19', '3-0', '4-1', '2-0', '1', '4-1', '0.8', '3-0', '1L', '4-1', 'DEN_logo-80x90.gif'),
('Detroit Lions', '1', '7', '0', '0.125', '149', '245', '-96', '18', '1-3', '0-4', '1-2', '0.333', '1-4', '0.2', '0-3', '2L', '1-4', 'DET_logo-80x90.gif'),
('Green Bay Packers', '6', '2', '0', '0.75', '203', '167', '36', '24', '4-0', '2-2', '1-0', '1', '4-1', '0.8', '2-1', '2L', '3-2', 'GB_logo-80x90.gif'),
('Houston Texans', '3', '5', '0', '0.375', '174', '205', '-31', '21', '2-2', '1-3', '2-1', '0.667', '2-3	', '0.4', '1-2', '1W', '2-3', 'HOU_logo-80x90.gif'),
('Indianapolis Colts', '4', '5', '0', '0.444', '200', '227', '-27', '24', '2-3', '2-3', '3-0', '1', '4-3', '0.571', '0-2', '1W', '2-3', 'IND_logo-80x90.gif'),
('Jacksonville Jaguars', '2', '6', '0', '0.25', '170', '235', '-65', '20', '2-2', '0-4', '0-2', '0', '2-4', '0.333', '0-2', '1L', '1-4', 'JAC_logo-80x90.gif'),
('Kansas City Chiefs', '3', '5', '0', '0.375', '195', '182', '13', '21', '2-2', '1-3', '0-1', '0', '2-2', '0.5', '1-3', '2W', '2-3', 'KC_logo-80x90.gif'),
('Miami Dolphins', '3', '5', '0', '0.375', '171', '206', '-35', '22', '1-2', '2-3', '0-4', '0', '2-5', '0.286', '1-0', '2L', '2-3', 'MIA_logo-80x90.gif'),
('Minnesota Vikings', '6', '2', '0', '0.75', '168', '140', '28', '16', '4-0', '2-2', '3-0', '1', '4-1	', '0.8', '2-1', '4W', '4-1', 'MIN_logo-80x90.gif'),
('New England Patriots', '8', '0', '0', '1', '276', '143', '133', '31', '5-0', '3-0', '3-0', '1', '6-0', '1', '2-0', '8W', '5-0', 'NE_logo-80x90.gif'),
('New Orleans Saints', '4', '5', '0', '0.444', '241', '268', '-27', '31', '3-2', '1-3', '1-2', '0.333', '3-4', '0.429', '1-1', '1L', '3-2', 'NO_logo-80x90.gif'),
('New York Giants', '5', '4', '0', '0.556', '247', '226', '21', '27', '3-1', '2-3', '2-2', '0.5', '4-4	', '0.5', '1-0', '1W', '3-2', 'NYG_logo-80x90.gif'),
('New York Jets', '5', '3', '0', '0.625', '200', '162', '38', '23', '3-1', '2-2', '1-1', '0.5', '4-2', '0.667', '1-1', '1W', '3-2', 'NYJ_logo-80x90.gif'),
('Oakland Raiders', '4', '4', '0', '0.5', '213', '211', '2', '25', '2-2', '2-2', '1-1', '0.5', '4-3', '0.571', '0-1', '1L', '2-3', 'OAK_logo-80x90.gif'),
('Philadelphia Eagles', '4', '4', '0', '0.5', '193', '164', '29', '22', '2-1', '2-3', '2-2', '0.5', '3-4', '0.429', '1-0', '1W', '3-2', 'PHI_logo-80x90.gif'),
('Pittsburgh Steelers', '5', '4', '0', '0.556', '206', '182', '24', '22', '3-2', '2-2', '0-2', '0', '2-4', '0.333', '3-0', '1W', '3-2', 'PIT_logo-80x90.gif'),
('San Diego Chargers', '2', '7', '0', '0.222', '210', '249', '-39', '23', '2-3', '0-4', '0-1', '0', '1-4', '0.2', '1-3', '5L', '0-5', 'SD_logo-80x90.gif'),
('San Francisco 49ers', '3', '6', '0', '0.333', '126', '223', '-97', '12', '3-2', '0-4', '0-3', '0', '2-5', '0.286', '1-1', '1W', '2-3', 'SEA_logo-80x90.gif'),
('Seattle Seahawks', '4', '4', '0', '0.5', '167', '140', '27', '16', '2-1', '2-3', '1-1', '0.5', '4-3', '0.571', '0-1', '2W', '3-2', 'SF_logo-80x90.gif'),
('St. Louis Rams', '4', '4', '0', '0.5', '153', '146', '7', '16', '3-1', '1-3', '3-0', '1', '3-3', '0.5', '1-1', '1L', '3-2', 'STL_logo-80x90.gif'),
('Tampa Bay Buccaneers', '3', '5', '0', '0.375', '181', '231', '-50', '18', '1-3', '2-2', '2-1', '.667', '2-3', '0.4', '1-2', '1L', '2-3', 'TB_logo-80x90.gif'),
('Tennessee Titans', '2', '6', '0', '0.25', '159', '187', '-28', '19', '0-4', '2-2', '0-2', '0', '0-5', '0', '2-1', '1W', '1-4', 'TEN_logo-80x90.gif'),
('Washington Redskins', '3', '5', '0', '0.375', '158', '195', '-37', '17', '3-1', '0-4', '1-1', '0.5', '3-2', '0.6', '0-3', '1L', '2-3', 'WAS_logo-80x90.gif');

-- --------------------------------------------------------

--
-- Table structure for table `Players`
--

CREATE TABLE IF NOT EXISTS `Players` (
  `PlayerID` int(11) NOT NULL,
  `Pos` varchar(25) NOT NULL,
  `Num` varchar(25) DEFAULT NULL,
  `PlayerName` varchar(25) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Players`
--

INSERT INTO `Players` (`PlayerID`, `Pos`, `Num`, `PlayerName`, `Image`) VALUES
(2, 'P', '6', 'Allen, Ryan', 'ALL644159.png'),
(3, 'WR', '80', 'Amendola, Danny', 'AME359918.png'),
(4, 'C', '60', 'Andrews, David', 'AND652945.png'),
(5, 'RB', '29', 'Blount, LeGarrette', 'BLO626278.png'),
(6, 'RB', '38', 'Bolden, Brandon', 'BOL167697.png'),
(7, 'OLB', '58', 'Bostic, Jon', 'BOS528427.png'),
(8, 'WR', '82', 'Boyce, Josh', 'BOY049190.png'),
(9, 'QB', '12', 'Brady, Tom', 'BRA371156.png'),
(10, 'DT', '97', 'Branch, Alan', 'BRA489251.png'),
(11, 'DT', '90', 'Brown, Malcom', 'BRO550723.png'),
(12, 'CB', '25', 'Brown, Tarell', 'BRO695589.png'),
(13, 'CB', '21', 'Butler, Malcolm', 'BUT474917.png'),
(14, 'OT', '61', 'Cannon, Marcus', 'CAN637002.png'),
(15, 'LS', '49', 'Cardona, Joe', 'CAR054160.png'),
(16, 'TE', '88', 'Chandler, Scott', 'CHA313999.png'),
(17, 'SS', '23', 'Chung, Patrick', 'CHU126772.png'),
(18, 'CB', '22', 'Coleman, Justin', 'COL294032.png'),
(19, 'OLB', '91', 'Collins, Jamie', 'COL607549.png'),
(20, 'TE', '86', 'Derby, A.J.', 'DER139014.png'),
(21, 'FB', '46', 'Develin, James', 'DEV145356.png'),
(22, 'WR', '17', 'Dobson, Aaron', 'DOB744752.png'),
(23, 'DT', '99', 'Easley, Dominique', 'EAS071808.png'),
(24, 'DB', '43', 'Ebner, Nate', 'EBN177981.png'),
(25, 'WR', '11', 'Edelman, Julian', 'EDE425791.png'),
(26, 'OT', '71', 'Fleming, Cameron', 'FLE157731.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `League`
--
ALTER TABLE `League`
  ADD PRIMARY KEY (`TeamName`);

--
-- Indexes for table `Players`
--
ALTER TABLE `Players`
  ADD PRIMARY KEY (`PlayerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Players`
--
ALTER TABLE `Players`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
