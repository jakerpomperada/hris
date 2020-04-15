-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 01:09 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hris`
--
CREATE DATABASE IF NOT EXISTS `hris` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hris`;

-- --------------------------------------------------------

--
-- Table structure for table `emp_records`
--

CREATE TABLE IF NOT EXISTS `emp_records` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `personnel` varchar(100) NOT NULL,
  `years_service` int(2) NOT NULL,
  `loyalty_awards` int(2) NOT NULL,
  `turn_over` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `birth_month` varchar(100) NOT NULL,
  `birthday_day` int(2) NOT NULL,
  `leaves` int(2) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=305 ;

--
-- Dumping data for table `emp_records`
--

INSERT INTO `emp_records` (`emp_id`, `firstname`, `lastname`, `gender`, `personnel`, `years_service`, `loyalty_awards`, `turn_over`, `education`, `birth_month`, `birthday_day`, `leaves`) VALUES
(1, 'LUCAS\r\n', 'TURNER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 29, 5, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JANUARY\r\n', 2, 5),
(2, 'NATHALIE\r\n', 'ROBERTSON\r\n', 'MALE\r\n', 'TECHING\r\n', 22, 10, 'RETIRED\r\n', 'MASTERS\r\n', 'MAY\r\n', 4, 6),
(3, 'OWEN\r\n', 'MAY\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 25, 15, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'MARCH\r\n', 23, 9),
(4, 'LUCAS\r\n', 'NEWMAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 23, 20, 'RETIRED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 12, 9),
(5, 'TIM\r\n', 'JAMES\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 17, 25, 'RESIGNED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 18, 10),
(6, 'NEIL\r\n', 'MANNING\r\n', 'MALE\r\n', 'TEACHING\r\n', 23, 30, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 3, 12),
(7, 'SEAN\r\n', 'BROWN\r\n', 'MALE\r\n', 'TEACHING\r\n', 28, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'SEPTEMBER\r\n', 16, 8),
(8, 'ERIC\r\n', 'TERRY\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 6, 40, 'RETIRED\r\n', 'MASTERS\r\n', 'NOVEMBER\r\n', 13, 7),
(9, 'AVA\r\n', 'ALSOP\r\n', 'MALE\r\n', 'TEACHING\r\n', 18, 45, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 25, 12),
(10, 'THOMAS\r\n', 'ABRAHAM\r\n', 'MALE\r\n', 'TEACHING\r\n', 13, 5, 'RETIRED\r\n', 'DOCTORATE\r\n', 'APRIL\r\n', 21, 5),
(11, 'JACOB\r\n', 'CARR\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 5, 10, 'RESIGNED\r\n', 'MASTERS\r\n', 'OCTOBER\r\n', 17, 8),
(12, 'ALAN\r\n', 'RUTHERFORD\r\n', 'MALE\r\n', 'TEACHING\r\n', 35, 15, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'FEBRUARY\r\n', 15, 11),
(13, 'CHLOE\r\n', 'WELCH\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 33, 20, 'RETIRED', 'DOCTORATE\r\n', 'AUGUST\r\n', 8, 10),
(14, 'DONNA\r\n', 'HUGHES\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 19, 25, 'RESIGNED\r\n', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 20, 12),
(15, 'LEAH\r\n', 'HODGES\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 30, 30, 'RETIRED\r\n', 'BACHELORS\r\n', 'MARCH\r\n', 29, 15),
(16, 'ANDREA\r\n', 'VANCE\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 17, 35, 'RETIRED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 2, 7),
(17, 'DAVID\r\n', 'ROBERTS\r\n', 'MALE\r\n', 'TEACHING\r\n', 12, 40, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JULY\r\n', 13, 9),
(18, 'PIPPA\r\n', 'ROBERTSON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 41, 45, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'MAY\r\n', 30, 15),
(19, 'MARY\r\n', 'BAILEY\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 13, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 13, 10),
(20, 'LEONARD\r\n', 'SKINNER\r\n', 'MALE\r\n', 'TEACHING\r\n', 14, 20, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'OCTOBER\r\n', 15, 9),
(21, 'EMMA\r\n', 'PATERSON\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 39, 25, 'RETIRED\r\n', 'MASTERS\r\n', 'JANUARY\r\n', 1, 5),
(22, 'PETER\r\n', 'NORTH\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 30, 30, 'RESIGNED\r\n', 'BACHELORS\r\n', 'NOVEMBER\r\n', 14, 8),
(23, 'LILY\r\n', 'MILLS\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 39, 35, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'APRIL\r\n', 3, 12),
(25, 'STEPHEN\r\n', 'KERR\r\n', 'MALE\r\n', 'TEACHING\r\n', 23, 40, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 14, 6),
(26, 'CHRISTIAN\r\n', 'GRANT\r\n', 'MALE\r\n', 'TEACHING\r\n', 41, 45, 'RETIRED\r\n', 'DOCTORATE\r\n', 'MARCH\r\n', 30, 10),
(27, 'JOHN\r\n', 'WELCH\r\n', 'MALE\r\n\r\n', 'TEACHING\r\n', 5, 5, 'RESIGNED\r\n', 'MASTERS\r\n', 'SEPTEMBER\r\n', 29, 5),
(28, 'CHRISTINE\r\n', 'HILL\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 10, 10, 'RETIRED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 18, 15),
(29, 'WARREN\r\n', 'HILL\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 25, 15, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 1, 13),
(30, 'STEPHEN\r\n', 'MANNING\r\n', 'MALE\r\n', 'TEACHING\r\n', 45, 20, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'MAY\r\n', 30, 7),
(31, 'KATHERINE\r\n', 'WARR\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 40, 25, 'RETIRED\r\n', 'MASTERS\r\n', 'JULY\r\n', 23, 13),
(32, 'PETER\r\n', 'PARR\r\n', 'MALE\r\n', 'TEACHING\r\n', 22, 5, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'DECEMBER\r\n', 25, 10),
(33, 'FRANK\r\n', 'RANDALL\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 1, 10, 'RETIRED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 17, 8),
(34, 'STEVEN\r\n', 'RANDALL\r\n', 'MALE\r\n', 'TEACHING\r\n', 33, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'OCTOBER\r\n', 15, 12),
(35, 'SEAN\r\n', 'ARNOLD\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 15, 20, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 1, 9),
(36, 'JOSEPH\r\n', 'CHAPMAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 27, 25, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JUNE\r\n', 3, 13),
(37, 'ALISON\r\n', 'FERGUSON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 32, 30, 'RETIRED\r\n', 'MASTERS\r\n', 'APRIL\r\n', 1, 6),
(38, 'AUSTIN\r\n', 'FRASER\r\n', 'MALE\r\n', 'TEACHING\r\n', 8, 35, 'RESIGNED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 30, 11),
(39, 'TREVOR\r\n', 'VANCE\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 34, 40, 'RETIRED\r\n', 'DOCTORATE\r\n', 'AUGUST\r\n', 28, 7),
(40, 'OWEN\r\n', 'DUNCAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 38, 45, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JULY\r\n', 23, 6),
(41, 'VIRGINIA\r\n', 'CORNISH\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 33, 5, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'SEPTEMBER', 10, 15),
(42, 'KEVIN\r\n', 'TURNER\r\n', 'MALE\r\n', 'TEACHING\r\n', 12, 10, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'NOVEMBER\r\n', 2, 14),
(43, 'EDWARD\r\n', 'HODGES\r\n', 'MALE\r\n', 'TEACHING\r\n', 28, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'JUNE', 6, 9),
(44, 'JASMINE\r\n', 'WALKER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 4, 20, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'APRIL\r\n', 3, 10),
(45, 'FELICITY\r\n', 'CAMERON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 19, 25, 'RETIRED\r\n', 'MASTERS\r\n', 'OCTOBER\r\n', 14, 12),
(46, 'ANTHONY\r\n', 'ANDERSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 7, 30, 'RESIGNED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 13, 9),
(47, 'ADAM\r\n', 'SANDERSON\r\n', 'MALE\r\n', 'TEACHING \r\n', 43, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'AUGUST\r\n', 15, 7),
(48, 'MATT\r\n', 'ANDERSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 41, 40, 'RETIRED\r\n', 'MASTERS\r\n', 'SEPTEMBER\r\n', 18, 6),
(49, 'MICHELLE\r\n', 'METCALFE\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 18, 5, 'RESIGNED\r\n', 'BACHELORS\r\n', 'MARCH\r\n', 23, 5),
(50, 'DIANA\r\n', 'MITCHELL\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 19, 10, 'RETIRED\r\n', 'BACHELORS\r\n', 'JUNE', 28, 27),
(51, 'NATHALIE\r\n', 'SLATER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 36, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 12, 11),
(52, 'JENNIFER\r\n', 'COLEMAN\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 6, 20, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 16, 11),
(53, 'MAX\r\n', 'WALKER\r\n', 'MALE\r\n', 'TEACHING \r\n', 18, 25, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'DECEMBER\r\n', 19, 15),
(54, 'JOSHUA\r\n', 'PULLMAN\r\n', 'MALE\r\n', 'TEACHING \r\n', 13, 30, 'RETIRED\r\n', 'BACHELORS\r\n', 'OCTOBER\r\n', 30, 12),
(55, 'RACHEL\r\n', 'SKINNER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 1, 35, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 23, 10),
(56, 'JASON\r\n', 'MILLS\r\n', 'MALE\r\n', 'TEACHING\r\n', 28, 40, 'RETIRED\r\n', 'MASTERS\r\n', 'NOVEMBER\r\n', 27, 6),
(57, 'JONATHAN\r\n', 'ROBERTSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 20, 45, 'RESIGNED\r\n', 'MASTERS\r\n', 'APRIL\r\n', 11, 5),
(58, 'BLAKE\r\n', 'FERGUSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 25, 5, 'TRANSFERRED\r\n\r\n', 'DOCTORATE\r\n\r\n', 'FEBRUARY\r\n', 12, 13),
(59, 'NATHAN\r\n', 'REES\r\n', 'MALE\r\n', 'TEACHING\r\n', 14, 10, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'MARCH\r\n', 18, 11),
(60, 'EMILY\r\n', 'ROSS\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 42, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 23, 15),
(61, 'JOE\r\n', 'HARRIS\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 17, 20, 'RESIGNED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 19, 5),
(62, 'BRIAN\r\n', 'OLIVER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 18, 25, 'RETIRED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 24, 9),
(63, 'SARAH\r\n', 'GREENE\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 22, 30, 'RESIGNED\r\n', 'BACHELORS\r\n', 'MAY\r\n', 28, 10),
(64, 'LAUREN\r\n', 'NEWMAN\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 8, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JULY', 25, 8),
(65, 'ROSE\r\n', 'CLARKSON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 13, 40, 'RETIRED\r\n', 'MASTERS\r\n', 'DECEMBER\r\n', 16, 11),
(66, 'DIANA\r\n', 'CARR\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 37, 5, 'RESIGNED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 13, 14),
(67, 'DAVID\r\n', 'GILL\r\n', 'MALE\r\n', 'TEACHING\r\n', 44, 10, 'RETIRED\r\n', 'BACHELORS\r\n', 'OCTOBER\r\n', 17, 15),
(68, 'SEAN\r\n', 'OGDEN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 42, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 16, 10),
(69, 'JASON\r\n', 'JASON\r\n', '\r\nFORSYTH\r\n', '\r\nMALE\r\n', 43, 20, 'NON-TEACHING\r\n', 'TRANSFERRED\r\n', 'MARCH\r\n', 1, 5),
(70, 'BERNADETTE\r\n', 'TURKER\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 25, 25, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'JUNE\r\n', 6, 7),
(71, 'TREVOR\r\n', 'CHAPMAN\r\n', 'MALE\r\n', 'TEACHING\r\n', 18, 30, 'RETIRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 9, 14),
(72, 'CHRISTIAN\r\n', 'MCLEAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 13, 35, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 2, 6),
(73, 'STEPHANIE\r\n', 'CAMERON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 45, 40, 'RETIRED\r\n', 'MASTERS\r\n', 'DECEMBER\r\n', 12, 8),
(74, 'STEPHEN\r\n', 'WALKER\r\n', 'MALE\r\n', 'TEACHING\r\n', 30, 45, 'RETIRED\r\n', 'MASTERS\r\n', 'OCTOBER\r\n', 15, 12),
(75, 'COLIN\r\n', 'WELCH\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 14, 5, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 12, 11),
(76, 'MARIA\r\n', 'BOND\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 21, 10, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'NOVEMBER\r\n', 15, 9),
(77, 'ADAM\r\n', 'JONES\r\n', 'MALE\r\n', 'TEACHING\r\n', 36, 15, 'RETIRED\r\n', 'BACHELORS\r\n', 'APRIL\r\n', 16, 8),
(78, 'PIERS\r\n', 'TAYLOR\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 3, 20, 'RESIGNED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 27, 12),
(79, 'IAN\r\n', 'JONES\r\n', 'MALE\r\n', 'TEACHING\r\n', 7, 25, 'RETIRED\r\n', 'DOCTORATE\r\n', 'MARCH\r\n', 23, 7),
(80, 'ALEXANDER\r\n', 'YOUNG\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 9, 30, 'RESIGNED\r\n', 'MASTERS\r\n', 'SEPTEMBER\r\n', 2, 9),
(81, 'JULIAN\r\n', 'MCLEAN\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 12, 35, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 3, 12),
(82, 'AUDREY\r\n', 'DICKENS\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 11, 40, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 12, 7),
(83, 'OLIVIA\r\n', 'FRASER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 18, 40, 'RETIRED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 19, 10),
(84, 'EMILY\r\n', 'HUDSON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 28, 45, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JULY\r\n', 20, 9),
(85, 'NATHAN\r\n', 'RUTHERFORD\r\n', 'MALE\r\n\r\n', 'NON-TEACHING\r\n', 38, 5, 'RETIRED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 24, 13),
(86, 'PHIL\r\n', 'SLATER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 22, 10, 'RESIGNED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 26, 15),
(87, 'JULIAN\r\n', 'SLATER\r\n', 'MALE\r\n', 'TEACHING\r\n', 11, 15, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'OCTOBER\r\n', 28, 7),
(88, 'LUKE\r\n', 'ELISON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 30, 20, 'RETIRED\r\n', 'BACHELORS\r\n', 'NOVEMBER\r\n', 12, 12),
(89, 'KEITH\r\n', 'HUNTER\r\n', 'MALE\r\n', 'TEACHING\r\n', 10, 25, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 14, 5),
(90, 'DIANE\r\n', 'STEWART\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 11, 5, 'RETIRED\r\n', 'BACHELORS\r\n', 'APRIL\r\n', 23, 15),
(91, 'OLIVIA\r\n', 'ARNOLD\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 14, 10, 'RETIRED\r\n', 'DOCTORATE\r\n', 'DECEMBER\r\n', 15, 6),
(92, 'CHARLEs\r\n', 'FISHER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 40, 15, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'AUGUST\r\n', 19, 11),
(93, 'ROSE\r\n', 'BUTLER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 22, 20, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 23, 8),
(94, 'SIMON\r\n', 'HUGHES\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 20, 25, 'RETIRED\r\n', 'DOCTORATE\r\n\r\n', 'SEPTEMBER\r\n', 25, 11),
(95, 'EVAN\r\n', 'GIBSON\r\n', 'MALE\r\n', 'TEACHING\r\n', 25, 30, 'RESIGNED\r\n', 'MASTERS\r\n', 'NOVEMBER\r\n', 18, 7),
(96, 'STEWART\r\n', 'SHORT\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 19, 35, 'RETIRED\r\n', 'MASTERS\r\n', 'JULY\r\n', 20, 8),
(97, 'BELLA\r\n', 'AVERY\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 4, 40, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'SEPTEMBER\r\n', 23, 8),
(98, 'FELICITY\r\n', 'PIULLMAN\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 12, 45, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'MARCH\r\n', 26, 6),
(99, 'KATHERINE\r\n', 'WRIGHT\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 43, 5, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 31, 12),
(100, 'NEIL\r\n', 'INCE\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 24, 10, 'RETIRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 13, 11),
(101, 'ROSE\r\n', 'INCE\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 6, 15, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 25, 10),
(102, 'HARRY\r\n', 'TURKER\r\n', 'MALE\r\n', 'TEACHING\r\n', 8, 20, 'RETIRED\r\n', 'MASTERS\r\n', 'DECEMBER\r\n', 6, 9),
(103, 'RUTH\r\n', 'CORNISH\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 9, 25, 'RESIGNED\r\n', 'BACHELORS\r\n', 'OCTOBER\r\n', 23, 9),
(104, 'NATALIE\r\n', 'WILKINS\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 26, 30, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JANUARY\r\n', 23, 7),
(105, 'JACK\r\n', 'WATSON\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 35, 35, 'RETIRED', 'BACHELORS\r\n', 'NOVEMBER\r\n', 15, 10),
(106, 'PHIL\r\n', 'CORNISH\r\n', 'MALE\r\n', 'TEACHING\r\n', 39, 40, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'APRIL\r\n', 16, 10),
(107, 'DOROTHY\r\n', 'GIBSON\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 31, 5, 'RETIRED', 'MASTERS\r\n', 'FEBRUARY\r\n', 27, 11),
(108, 'VIRGINIA\r\n', 'WALSH\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 15, 10, 'RETIRED', 'BACHELORS\r\n', 'MARCH\r\n', 28, 6),
(109, 'THERESA\r\n', 'HUNTER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 5, 15, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'SEPTEMBER\r\n', 12, 15),
(110, 'KEVIN\r\n', 'CAMERON\r\n', 'MALE\r\n', 'TEACHING\r\n', 7, 20, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'AUGUST\r\n', 14, 6),
(111, 'JOSHUA\r\n', 'DUNCAN\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 30, 25, 'RETIRED', 'MASTERS\r\n', 'JANUARY\r\n', 17, 9),
(112, 'DIERDE\r\n', 'CAMERON\r\n', 'MALE\r\n', 'TEACHING\r\n', 15, 30, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 18, 11),
(113, 'WILLIAM\r\n', 'BROWN\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 18, 35, 'RETIRED', 'BACHELORS\r\n', 'JULY\r\n', 26, 11),
(114, 'LUKE\r\n', 'PARSON\r\n', 'MALE\r\n', 'TEACHING\r\n', 4, 40, 'RETIRED', 'BACHELORS\r\n', 'DECEMBER\r\n', 27, 15),
(115, 'JOHN\r\n', 'WELCH\r\n', 'MALE\r\n', 'TEACHING\r\n', 5, 5, 'RESIGNED\r\n', 'MASTERS\r\n', 'SEPTEMBER\r\n', 29, 5),
(116, 'CHRISTINE\r\n', 'HILL\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 10, 10, 'RETIRED', 'BACHELORS\r\n', 'AUGUST\r\n', 18, 15),
(117, 'WARREN\r\n', 'HILL\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 25, 15, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 1, 13),
(118, 'BRIAN', 'ABRAHAM', 'MALE\r\n', 'TEACHING\r\n', 24, 35, 'TRANSFERRED', 'DOCTORATE', 'DECEMBER\r\n', 27, 15),
(119, 'HEATHER\r\n', 'TAYLOR\r\n', 'MALE\r\n', 'TEACHING\r\n', 19, 30, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 23, 9),
(120, 'JULIA\r\n', 'CARR\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 32, 40, 'RETIRED', 'MASTERS\r\n', 'NOVEMBER\r\n', 14, 15),
(121, 'DOMINIC\r\n', 'NEWMAN\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 38, 5, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 12, 5),
(122, 'CLAIRE\r\n', 'NORTH\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 31, 10, 'RETIRED', 'BACHELORS\r\n', 'APRIL\r\n', 13, 12),
(123, 'KEVIN\r\n', 'HUDSON\r\n', 'MALE\r\n', 'NON TEACHING\r\n', 45, 15, 'RESIGNED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 11, 7),
(124, 'JAKE\r\n', 'LEE\r\n', 'MALE\r\n', 'TEACHING\r\n', 30, 20, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'AUGUST\r\n', 19, 9),
(125, 'EMILY\r\n', 'FRASER\r\n', 'FEMALE\r\n', 'NON TEACHING\r\n', 14, 25, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'JULY\r\n', 25, 12),
(126, 'CAROLYN\r\n', 'ELISON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 21, 30, 'RETIRED', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 27, 11),
(127, 'CAROLINE\r\n', 'BOWER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 36, 35, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'NOVEMBER\r\n', 23, 15),
(128, 'NICHOLAS\r\n', 'KNOX\r\n', 'MALE\r\n', 'TEACHING\r\n', 3, 40, 'RETIRED', 'MASTERS\r\n', 'JULY\r\n', 29, 6),
(129, 'ELIZABETH\r\n', 'GRAY\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 7, 45, 'RESIGNED\r\n', 'MASTERS\r\n', 'JANUARY\r\n', 12, 8),
(130, 'BORIS\r\n', 'TAYLOR\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 9, 5, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'NOVEMBER\r\n', 16, 7),
(131, 'ELIZABETH\r\n', 'BOWER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 12, 10, 'RETIRED', 'BACHELORS\r\n', 'APRIL\r\n', 14, 9),
(132, 'PHIL\r\n', 'MCDONALD\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 11, 15, 'RESIGNED\r\n', 'BACHELORS\r\n', 'FEBRUARY\r\n', 18, 9),
(133, 'TIM\r\n', 'BALL\r\n', 'MALE\r\n', 'TEACHING\r\n', 18, 20, 'RETIRED', 'BACHELORS\r\n', 'MARCH\r\n', 12, 8),
(134, 'DAVID\r\n', 'NEWMAN\r\n', 'MALE\r\n', 'TEACHING\r\n', 28, 25, 'RETIRED', 'DOCTORATE\r\n', 'SEPTEMBER\r\n', 16, 12),
(135, 'ALAN\r\n', 'PULLMAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 38, 30, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 1, 10),
(136, 'SAMANTHA\r\n', 'HUDSON\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 22, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JANUARY\r\n', 3, 10),
(137, 'VICTOR\r\n', 'STEWART\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 11, 40, 'RETIRED', 'MASTERS\r\n', 'MAY\r\n', 11, 15),
(138, 'LAUREN\r\n', 'WILSON\r\n', 'FEMALE\r\n', 'TEACHING \r\n', 30, 40, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 10, 5),
(139, 'NICOLA\r\n', 'GRAY\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 10, 45, 'RESIGNED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 17, 15),
(140, 'TREVOR\r\n', 'SPRINGER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 11, 30, 'RESIGNED\r\n', 'MASTERS\r\n', 'FEBRUARY\r\n', 12, 7),
(141, 'TREVOR\r\n', 'Randall\r\n', 'MALE\r\n', 'TEACHING\r\n', 14, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'OCTOBER\r\n', 15, 13),
(142, 'AMELIA\r\n', 'RAMPLING\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 40, 40, 'RETIRED', 'MASTERS\r\n', 'NOVEMBER\r\n', 19, 15),
(143, 'GABRIELLE\r\n', 'SPRINGER\r\n', 'MALE\r\n', 'TEACHING\r\n', 22, 5, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JUNE\r\n', 19, 14),
(144, 'RYAN\r\n', 'REES\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 20, 10, 'RETIRED', 'DOCTORATE\r\n', 'APRIL\r\n', 23, 7),
(145, 'MAX\r\n', 'HODGES\r\n', 'MALE\r\n', 'TEACHING\r\n', 32, 15, 'RETIRED', 'MASTERS\r\n', 'DECEMBER\r\n', 27, 9),
(146, 'JOAN\r\n', 'CARR\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 8, 20, 'RESIGNED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 29, 13),
(147, 'MATT\r\n', 'FERGUSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 34, 25, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 23, 11),
(148, 'HEATHER\r\n', 'JONSTON\r\n', 'MALE\r\n', 'TEACHING\r\n', 38, 30, 'RESIGNED\r\n', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 27, 11),
(149, 'JULIA\r\n', 'BUTLER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 33, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'NOVEMBER\r\n', 29, 13),
(150, 'EVAN\r\n', 'CLARKSON\r\n', 'MALE\r\n', 'TEACHING\r\n', 38, 40, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'JULY\r\n', 30, 10),
(151, 'WANDA\r\n', 'HUGHES\r\n', 'FEMALE', 'NON-TEACHING\r\n', 28, 45, 'RETIRED', 'BACHELORS\r\n', 'JANUARY\r\n', 24, 9),
(152, 'TREVOR\r\n', 'PAYNE\r\n', 'MALE\r\n', 'TEACHING\r\n', 4, 5, 'RESIGNED\r\n', 'BACHELORS\r\n', 'NOVEMBER\r\n', 31, 10),
(153, 'DIANE\r\n', 'CLARK\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 19, 10, 'RETIRED', 'BACHELORS\r\n', 'APRIL\r\n', 25, 8),
(154, 'STEPHANIE\r\n', 'DAVIES\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 7, 15, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'FEBRUARY\r\n', 28, 14),
(155, 'PHIL\r\n', 'SMITH\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 43, 20, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'MARCH\r\n', 1, 7),
(156, 'JOAN\r\n', 'FRASER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 41, 25, 'RETIRED', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 12, 9),
(157, 'ALAN\r\n', 'FRASER\r\n', 'MALE\r\n', 'TEACHING\r\n', 18, 30, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'AUGUST\r\n', 13, 8),
(158, 'NATHAN\r\n', 'JONATHAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 19, 35, 'RETIRED', 'MASTERS\r\n', 'JANUARY\r\n', 12, 13),
(159, 'DAN\r\n', 'OLIVER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 36, 40, 'RETIRED', 'MASTERS\r\n', 'MAY\r\n', 1, 15),
(160, 'BLAKE\r\n', 'BAILEY\r\n', 'MALE\r\n', 'TEACHING \r\n', 6, 40, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JULY\r\n', 20, 12),
(161, 'LEOANRD\r\n', 'ABRAHAM\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 18, 45, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 14, 12),
(162, 'DOMINIC\r\n', 'BURGESS\r\n', 'MALE\r\n', 'TEACHING\r\n', 13, 30, 'RETIRED', 'BACHELORS\r\n', 'FEBRUARY\r\n', 10, 14),
(163, 'AVA', 'GLOVER', 'FEMALE', 'NON-TEACHING', 1, 35, 'RESIGNED', 'BACHELORS', 'OCTOBER', 27, 5),
(164, 'ADRIANE', 'WELCH', 'MALE', 'NON-TEACHING', 28, 40, 'RESIGNED', 'DOCTORATE', 'NOVEMBER', 13, 6),
(165, 'PETER', 'HUNTER', 'MALE', 'NON-TEACHING', 20, 5, 'RESIGNED', 'MASTERS', 'JUNE', 15, 8),
(166, 'ALEXANDER', 'PARR', 'MALE', 'NON-TEACHING', 25, 10, 'TRANSFERRED', 'BACHELORS', 'APRIL', 12, 9),
(167, 'ROBERT', 'ABRAHAM', 'MALE', 'TEACHING', 14, 15, 'RETIRED', 'DOCTORATE', 'DECEMBER', 8, 14),
(168, 'IRENE', 'VAUGHAN', 'FEMALE', 'NON-TEACHING', 14, 20, 'RESIGNED', 'DOCTORATE', 'AUGUST', 21, 15),
(169, 'AVA', 'HUGHES', 'FEMALE', 'TEACHING', 21, 25, 'RETIRED', 'DOCTORATE', 'JULY', 29, 13),
(170, 'HARRY', 'MANNING', 'MALE', 'NON-TEACHING', 36, 30, 'RETIRED', 'BACHELORS', 'SEPTEMBER', 18, 8),
(171, 'NEIL', 'HUGHES', 'MALE', 'TEACHING', 3, 35, 'RESIGNED', 'BACHELORS', 'NOVEMBER', 9, 19),
(172, 'SALLY', 'BLAKE', 'FEMALE', 'NON-TEACHING', 7, 40, 'TRANSFERRED', 'DOCTORATE', 'JULY', 15, 14),
(173, 'BELLA', 'POWELL', 'FEMALE', 'TEACHING', 9, 45, 'TRANSFERRED', 'MASTERS', 'JANUARY', 18, 6),
(174, 'BERNADETTE', 'STEWART', 'FEMALE', 'NON-TEACHING', 12, 5, 'RETIRED', 'BACHELORS', 'NOVEMBER', 24, 15),
(175, 'SEAN', 'CLARK', 'MALE', 'TEACHING', 11, 10, 'RESIGNED', 'DOCTORATE', 'APRIL', 14, 7),
(176, 'MAX', 'FISHER', 'MALE', 'NON-TEACHING', 18, 15, 'RETIRED', 'MASTERS', 'FEBRUARY', 5, 15),
(177, 'DAVID', 'COLEMAN', 'MALE', 'TEACHING', 28, 20, 'RESIGNED', 'BACHELORS', 'MARCH', 20, 14),
(178, 'GRACE', 'COLEMAN', 'MALE', 'NON-TEACHING', 38, 25, 'TRANSFERRED', 'BACHELORS', 'SEPTEMBER', 18, 6),
(179, 'RUTH', 'DOWD', 'MALE', 'TEACHING', 22, 30, 'RETIRED', 'BACHELORS', 'AUGUST', 19, 15),
(180, 'ANDREA', 'PIPER', 'MALE', 'NON-TEACHING', 11, 35, 'RESIGNED', 'DOCTORATE', 'JANUARY', 27, 5),
(181, 'JAKE', 'NASH', 'MALE', 'TEACHING', 30, 40, 'RETIRED', 'MASTERS', 'MAY', 26, 5),
(182, 'BENJAMIN', 'MILLER', 'MALE', 'NON-TEACHING', 10, 40, 'RETIRED', 'BACHELORS', 'JULY', 23, 15),
(183, 'NATALIE', 'SUTHERLAND', 'FEMALE', 'TEACHING', 11, 45, 'TRANSFERRED', 'DOCTORATE', 'DECEMBER', 24, 8),
(184, 'STEVEN', 'CLARKSON', 'MALE', 'NON-TEACHING', 14, 45, 'TRANSFERRED', 'MASTERS', 'FEBRUARY', 25, 15),
(185, 'UNA', 'MCLEAN', 'MALE', 'TEACHING', 40, 5, 'RETIRED', 'MASTERS', 'OCTOBER', 26, 6),
(186, 'LILY', 'LAWRENCE', 'FEMALE', 'NON-TEACHING', 22, 10, 'RESIGNED', 'DOCTORATE', 'NOVEMBER', 27, 14),
(187, 'MICHAEL', 'MACKY', 'MALE', 'TEACHING', 20, 15, 'RESIGNED', 'BACHELORS', 'JUNE', 28, 11),
(188, 'ABIGAIL', 'WHITE', 'FEMALE', 'NON-TEACHING', 25, 20, 'RESIGNED', 'BACHELORS', 'APRIL', 29, 10),
(189, 'AVA', 'RAMPLING', 'FEMALE', 'TEACHING', 19, 25, 'TRANSFERRED', 'BACHELORS', 'DECEMBER', 14, 6),
(190, 'ROSE', 'HENDERSON', 'FEMALE', 'NON-TEACHING', 4, 30, 'RETIRED', 'DOCTORATE', 'AUGUST', 16, 8),
(191, 'HANNAH', 'GRAHAM', 'FEMALE', 'TEACHING', 12, 35, 'RESIGNED', 'BACHELORS', 'JULY', 27, 13),
(192, 'SAM', 'MORGAN', 'MALE', 'NON-TEACHING', 43, 40, 'RETIRED', 'DOCTORATE', 'SEPTEMBER', 21, 15),
(193, 'AMANDA', 'BLAKE', 'FEMALE', 'TEACHING', 24, 40, 'RETIRED', 'MASTERS', 'NOVEMBER', 23, 11),
(194, 'UNA', 'WALSH', 'FEMALE', 'NON-TEACHING', 6, 45, 'RETIRED', 'MASTERS', 'JULY', 22, 5),
(195, 'VIRGINIA', 'FERGUSON', 'FEMALE', 'TEACHING', 8, 30, 'RESIGNED', 'DOCTORATE', 'JANUARY', 23, 18),
(196, 'DEIRDRE', 'LAMBERT', 'MALE', 'NON-TEACHING', 9, 35, 'TRANSFERRED', 'BACHELORS', 'NOVEMBER', 26, 15),
(197, 'JULIA', 'SIMPSON', 'FEMALE', 'TEACHING', 26, 40, 'RETIRED', 'BACHELORS', 'APRIL', 27, 9),
(198, 'JAMES', 'MILLER', 'MALE', 'NON TEACHING', 35, 5, 'RESIGNED', 'BACHELORS', 'FEBRUARY', 28, 5),
(199, 'ADRIAN', 'MATTHIS', 'MALE', 'TEACHING', 39, 10, 'RETIRED', 'DOCTORATE', 'MARCH', 18, 14),
(200, 'ISAAC', 'RANDALL', 'MALE', 'NON-TEACHING', 31, 15, 'RETIRED', 'BACHELORS', 'SEPTEMBER', 21, 11),
(201, 'BENJAMIN', 'BALL', 'MALE', 'TEACHING', 15, 20, 'TRANSFERRED', 'DOCTORATE', 'AUGUST', 9, 15),
(202, 'EDWARD', 'ROBERTSON', 'MALE', 'NON-TEACHING', 5, 25, 'TRANSFERRED', 'MASTERS', 'JANUARY', 10, 9),
(203, 'BRANDON', 'BERRY', 'MALE', 'TEACHING', 7, 30, 'RETIRED', 'BACHELORS', 'MAY', 7, 9),
(204, 'FELICITY', 'SHORT', 'FEMALE', 'NON-TEACHING', 30, 15, 'RESIGNED', 'BACHELORS', 'JULY', 6, 8),
(205, 'AUSTIN', 'DUNCAN', 'MALE', 'TEACHING', 15, 20, 'TEACHING', 'MASTERS\r\n', 'DECEMBER\r\n', 19, 20),
(206, 'CAROL\r\n', 'BROWN\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 18, 25, 'RETIRED', 'DOCTORATE\r\n', 'FEBRUARY\r\n', 20, 6),
(207, 'GABRIELLE\r\n', 'DICKENS\r\n', 'MALE\r\n', 'TEACHING\r\n', 4, 30, 'TRANSFERRED\r\n', 'MASTERS\r\n', 'OCTOBER\r\n', 27, 6),
(208, 'DIANNA\r\n', 'DIANNA\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 19, 35, 'RETIRED', 'BACHELORS\r\n', 'NOVEMBER\r\n', 6, 12),
(209, 'LILLIAN\r\n', 'CLARK\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 24, 40, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JUNE\r\n', 17, 5),
(210, 'ELIZABETH\r\n', 'GRAHAM\r\n', 'FEMALE', 'NON-TEACHING', 32, 30, 'RETIRED', 'MASTERS\r\n', 'APRIL\r\n', 4, 11),
(211, 'BRANDON\r\n', 'SPRINGER\r\n', 'MALE\r\n', 'TEACHING\r\n', 38, 35, 'RETIRED', 'BACHELORS\r\n', 'DECEMBER\r\n', 24, 9),
(212, 'IAN\r\n', 'DUNCAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 31, 40, 'RESIGNED\r\n', 'BACHELORS\r\n', 'AUGUST\r\n', 19, 6),
(213, 'CAROL\r\n', 'GLOVER\r\n', 'FEMALE\r\n', 'TEACHING\r\n', 45, 5, 'TRANSFERRED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 28, 8),
(214, 'ERIC\r\n', 'MORGAN\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 30, 10, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'SEPTEMBER\r\n', 12, 10),
(215, 'GAVIN\r\n', 'SANDERSON\r\n', 'MALE\r\n', 'TEACHING\r\n', 14, 15, 'RETIRED', 'MASTERS\r\n', 'NOVEMBER\r\n', 19, 10),
(216, 'CAMERON\r\n', 'GLOVER\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 21, 20, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JULY\r\n', 17, 8),
(217, 'JOE\r\n', 'TURNER\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 36, 25, 'RETIRED', 'BACHELORS\r\n', 'AUGUST\r\n', 22, 6),
(218, 'JOHN\r\n', 'KING\r\n', 'MALE\r\n', 'TEACHING\r\n', 3, 30, 'RESIGNED\r\n', 'BACHELORS\r\n', 'JANUARY\r\n', 2, 8),
(219, 'PETER\r\n', 'CORNISH\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 7, 35, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'MAY\r\n', 5, 5),
(220, 'GABRIELLE\r\n', 'SANDERSON\r\n', 'MALE\r\n', 'NON-TEACHING\r\n', 9, 40, 'RETIRED', 'MASTERS\r\n', 'MASTERS\r\n', 11, 11),
(221, 'EVAN\r\n', 'ALSOP\r\n', 'MALE\r\n', 'TEACHING \r\n', 12, 45, 'RESIGNED\r\n', 'BACHELORS\r\n', 'DECEMBER\r\n', 18, 5),
(222, 'ANNE', 'DAVIDSON', 'FEMALE\r\n', 'NON-TEACHING\r\n', 11, 5, 'RETIRED', 'DOCTORATE\r\n', 'FEBRUARY\r\n', 22, 14),
(223, 'JOSHUA\r\n', 'HARRIS\r\n', 'MALE\r\n', 'TEACHING\r\n', 18, 10, 'RETIRED', 'MASTERS\r\n', 'OCTOBER\r\n', 14, 10),
(224, 'OLIVIA\r\n', 'STEWART\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 28, 15, 'TRANSFERRED', 'MASTERS', 'NOVEMBER', 5, 10),
(225, 'ROBERT', 'BUTLER', 'MALE', 'TEACHING\r\n', 38, 20, 'TRANSFERRED\r\n', 'DOCTORATE\r\n', 'JUNE\r\n', 2, 15),
(226, 'AUDREY', 'HART', 'FEMALE', 'NON-TEACHING', 22, 25, 'RETIRED', 'BACHELORS', 'APRIL', 8, 11),
(227, 'CAROLINE', 'SANDERSON', 'FEMALE', 'TEACHING', 11, 30, 'RESIGNED', 'BACHELORS', 'DECEMBER', 11, 11),
(228, 'OLIVER', 'GILL', 'MALE', 'NON-TEACHING', 30, 35, 'RESIGNED', 'BACHELORS', 'AUGUST', 9, 8),
(229, 'STEPHEN\r\n', 'LEE\r\n', 'MALE\r\n', 'TEACHING\r\n', 10, 40, 'RESIGNED\r\n', 'DOCTORATE\r\n', 'JULY\r\n', 26, 8),
(230, 'ANNE\r\n', 'SIMPSON\r\n', 'FEMALE\r\n', 'NON-TEACHING\r\n', 11, 40, 'TRANSFERRED\r\n', 'MASTERS', 'SEPTEMBER', 4, 9),
(231, 'LIAM', 'PETERS', 'MALE', 'TEACHING', 14, 45, 'RETIRED', 'BACHELORS', 'NOVEMBER', 5, 7),
(232, 'MAX', 'MILLER', 'MALE', 'NON-TEACHING', 40, 30, 'RETIRED', 'DOCTORATE', 'JULY', 20, 12),
(233, 'ANGELA', 'LANGDON', 'FEMALE', 'TEACHING', 45, 35, 'RESIGNED', 'DOCTORATE', 'JANUARY', 22, 6),
(234, 'JASMINE', 'PIPER', 'FEMALE', 'NON-TEACHING', 30, 40, 'TRANSFERRED', 'DOCTORATE', 'NOVEMBER', 4, 12),
(235, 'JOE', 'DICKENS', 'MALE', 'TEACHING', 14, 5, 'RETIRED', 'BACHELORS', 'APRIL', 12, 5),
(236, 'SIMON', 'HAMILTON', 'MALE', 'NON-TEACHING', 21, 10, 'RESIGNED', 'BACHELORS', 'FEBRUARY', 16, 7),
(237, 'JASON', 'GRANT', 'MALE', 'TEACHING', 36, 15, 'RETIRED', 'DOCTORATE', 'MARCH', 9, 12),
(238, 'MOLLY', 'UNDERWOOD', 'FEMALE', 'NON-TEACHING', 3, 20, 'RETIRED', 'MASTERS', 'SEPTEMBER', 15, 13),
(239, 'STEPHEN', 'HARRIS', 'MALE', 'TEACHING', 17, 25, 'TRANSFERRED', 'BACHELORS', 'AUGUST', 24, 8),
(240, 'HEATHER', 'KNOX', 'MALE', 'NON-TEACHING', 9, 30, 'TRANSFERRED', 'DOCTORATE', 'JANUARY', 7, 12),
(241, 'STEPHANIE', 'UNDERWOOD', 'FEMALE', 'TEACHING', 12, 35, 'RETIRED', 'MASTERS', 'MAY', 12, 8),
(242, 'ERIC', 'KNOX', 'MALE', 'NON-TEACHING', 11, 40, 'RESIGNED', 'BACHELORS', 'JULY', 9, 11),
(243, 'AVA', 'BAKER', 'FEMALE', 'TEACHING', 18, 45, 'RESIGNED', 'BACHELORS', 'DECEMBER', 6, 12),
(244, 'MICHAEL', 'CHAPMAN', 'MALE', 'NON-TEACHING', 28, 5, 'RESIGNED', 'BACHELORS', 'FEBRUARY', 20, 11),
(245, 'HEATHER', 'CORNISH', 'FEMALE', 'TEACHING', 38, 10, 'TRANSFERRED', 'DOCTORATE', 'OCTOBER', 4, 10),
(246, 'JUSTIN', 'PEAK', 'MALE', 'NON-TEACHING', 22, 15, 'RETIRED', 'MASTERS', 'NOVEMBER', 10, 11),
(247, 'SUE', 'MARTIN', 'FEMALE', 'TEACHING', 11, 20, 'RESIGNED', 'BACHELORS', 'JUNE', 23, 5),
(248, 'LIAM', 'RANDALL', 'MALE', 'NON-TEACHING', 30, 25, 'RETIRED', 'DOCTORATE', 'APRIL', 12, 15),
(249, 'CHARLES', 'GRAHAM', 'MALE', 'TEACHING ', 10, 30, 'RETIRED', 'MASTERS', 'DECEMBER', 22, 6),
(250, 'MEGAN', 'BLACK', 'FEMALE', 'NON-TEACHING', 34, 35, 'RESIGNED', 'MASTERS', 'AUGUST', 16, 10),
(251, 'JOHN', 'POWELL', 'MALE', 'TEACHING', 14, 40, 'TRANSFERRED', 'DOCTORATE', 'JULY', 24, 8),
(252, 'UNA', 'ALLAN', 'MALE', 'NON-TEACHING', 40, 40, 'TRANSFERRED', 'BACHELORS', 'SEPTEMBER', 19, 7),
(253, 'FAITH', 'KELLY', 'FEMALE', 'NON-TEACHING', 22, 20, 'RETIRED', 'BACHELORS', 'NOVEMBER', 27, 12),
(254, 'CONNOR', 'SLATER', 'MALE', 'TEACHING', 20, 25, 'RESIGNED', 'DOCTORATE', 'JULY', 25, 6),
(255, 'MICHELLE', 'BUTLER', 'MALE', 'NON-TEACHING', 32, 30, 'RETIRED', 'MASTERS', 'JANUARY', 11, 13),
(256, 'MADELIENE', 'MARTIN', 'MALE', 'TEACHING', 8, 35, 'RESIGNED', 'MASTERS', 'NOVEMBER', 5, 10),
(257, 'BELLA', 'PULLMAN', 'MALE', 'NON-TEACHING', 34, 40, 'TRANSFERRED', 'DOCTORATE', 'APRIL', 17, 9),
(258, 'WILLIAM', 'FORSYTH', 'FEMALE', 'TEACHING', 38, 45, 'RETIRED', 'BACHELORS', 'FEBRUARY', 18, 6),
(259, 'ERIC', 'SHARP', 'MALE', 'NON-TEACHING', 33, 5, 'RESIGNED', 'BACHELORS', 'MARCH', 25, 11),
(260, 'SIMON', 'NASH', 'MALE', 'TEACHING ', 38, 10, 'RETIRED', 'BACHELORS', 'SEPTEMBER', 17, 12),
(261, 'MATT', 'JAMES', 'MALE', 'NON-TEACHING', 28, 15, 'RETIRED', 'DOCTORATE', 'AUGUST', 19, 14),
(262, 'LILY', 'THOMSON', 'MALE', 'TEACHING', 4, 20, 'TRANSFERRED', 'BACHELORS', 'JANUARY', 20, 5),
(263, 'KYLIE', 'SIMPSON', 'MALE', 'NON-TEACHING', 19, 25, 'TRANSFERRED', 'DOCTORATE', 'MAY', 22, 15),
(264, 'ZOE', 'CAMERON', 'FEMALE', 'TEACHING', 7, 30, 'RETIRED', 'MASTERS', 'JULY', 16, 10),
(265, 'EMMA', 'DUNCAN', 'MALE', 'TEACHING', 43, 35, 'RESIGNED', 'BACHELOR', 'DECEMBER', 28, 9),
(266, 'STEPHEN', 'GRAHAM', 'FEMALE', 'NON-TEACHING', 41, 40, 'RESIGNED', 'BACHELORS', 'FEBRUARY', 24, 8),
(267, 'COLIN', 'MURRAY', 'FEMALE', 'TEACHING', 18, 40, 'RESIGNED', 'MASTERS', 'AUGUST', 3, 15),
(268, 'PETER', 'ROBERTS', 'MALE', 'NON-TEACHING', 19, 45, 'TRANSFERRED', 'DOCTORATE', 'JANUARY', 7, 8),
(269, 'ALEXANDER', 'BERRY', 'FEMALE', 'TEACHING', 36, 30, 'RETIRED', 'MASTERS', 'MAY', 25, 7),
(270, 'ERIC', 'ROBERTSON', 'MALE', 'TEACHING', 6, 35, 'RETIRED', 'BACHELORS', 'JULY', 16, 15),
(271, 'HEATHER', 'SUTHERLAND', 'FEMALE', 'NON-TEACHING', 18, 40, 'RESIGNED', 'DOCTORATE', 'DECEMBER', 21, 7),
(272, 'ZOE', 'MORGAN', 'MALE', 'TEACHING', 13, 5, 'TRANSFERRED', 'MASTERS', 'FEBRUARY', 20, 6),
(273, 'EMILY', 'ARNOLD', 'MALE', 'TEACHING', 1, 10, 'RETIRED', 'BACHELORS', 'OCTOBER', 22, 6),
(274, 'KIMBERLY', 'MURRAY', 'FEMALE', 'NON TEACHING', 28, 15, 'RESIGNED', 'BACHELORS', 'NOVEMBER', 26, 7),
(275, 'DONNA', 'MORGAN', 'MALE', 'NON-TEACHING', 20, 20, 'RETIRED', 'BACHELORS', 'JUNE', 15, 15),
(276, 'DONNA', 'POWELL', 'MALE', 'NON-TEACHING', 25, 25, 'RETIRED', 'DOCTORATE', 'APRIL', 7, 14),
(277, 'STEPHANIE', 'KELLY\r\n', 'FEMALE\r\n', 'NON-TEACHING', 14, 30, 'TRANSFERRED\r\n', 'MASTERS', 'DECEMBER', 6, 10),
(278, 'JAN', 'HART', 'FEMALE', 'TECHING\r\n', 14, 35, 'TRANSFERRED', 'BACHELORS\r\n', 'AUGUST', 15, 9),
(279, 'DIANE', 'INCE\r\n', 'FEMALE\r\n', 'TEACHING \r\n', 21, 40, 'RETIRED\r\n\r\n', 'BACHELORS\r\n', 'JULY', 10, 9),
(280, 'ANDREW', 'GRAY', 'MALE', 'NON-TEACHING', 36, 45, 'RESIGNED', 'BACHELORS\r\n', 'SEPTEMBER\r\n', 16, 15),
(281, 'DIANNA\r\n', 'GREENE', 'FEMALE', 'TEACHING\r\n', 3, 5, 'RESIGNED\r\n', 'DOCTORATE', 'NOVEMBER', 20, 8),
(282, 'CARL', 'HART', 'FEMALE', 'NON-TEACHING', 7, 10, 'RESIGNED', 'MASTERS', 'JULY', 30, 11),
(283, 'GAVIN', 'WILSON', 'MALE', 'TEACHING', 9, 15, 'TRANSFERRED', 'BACHELORS', 'JANUARY', 4, 7),
(284, 'WARREN', 'ROBERTSON', 'MALE', 'NON-TEACHING', 12, 20, 'RETIRED', 'DOCTORATE', 'NOVEMBER', 29, 11),
(285, 'STEPHANIE', 'BOND', 'MALE', 'TEACHING', 14, 25, 'RESIGNED', 'MASTERS', 'APRIL', 18, 8),
(286, 'PETER', 'ROBERTSON', 'MALE', 'NON-TEACHING', 18, 30, 'RETIRED', 'MASTERS', 'FEBRUARY', 17, 12),
(287, 'PIERS', 'ALSOP', 'MALE', 'TEACHING', 28, 35, 'RETIRED', 'DOCTORATE', 'MARCH', 5, 13),
(288, 'GORDON', 'HENDERSON', 'MALE', 'NON-TEACHING', 38, 40, 'RESIGNED', 'BACHELORS', 'SEPTEMBER', 3, 5),
(289, 'DONNA', 'MACDONALD', 'MALE', 'TEACHING', 22, 40, 'TRANSFERRED', 'BACHELORS', 'AUGUST', 18, 5),
(290, 'LISA', 'PARR', 'MALE', 'NON-TEACHING', 11, 45, 'TRANSFERRED', 'BACHELORS', 'JANUARY', 16, 6),
(291, 'RUTH', 'CAMPBELL', 'FEMALE', 'TEACHING', 30, 30, 'RETIRED', 'DOCTORATE', 'MAY', 19, 13),
(292, 'ABIGAIL', 'PULLMAN', 'MALE', 'NON-TEACHING', 10, 35, 'RESIGNED', 'MASTERS', 'JULY', 10, 13),
(293, 'JOHN', 'QUINN', 'FEMALE', 'TEACHING', 11, 40, 'RETIRED', 'BACHELORS', 'DECEMBER', 1, 14),
(294, 'JULIA', 'DYER', 'MALE', 'NON-TEACHING', 14, 5, 'RESIGNED', 'DOCTORATE', 'FEBRUARY', 13, 12),
(295, 'RYAN', 'GIBSON', 'MALE', 'TEACHING', 40, 10, 'TRANSFERRED', 'DOCTORATE', 'OCTOBER', 3, 9),
(296, 'STEPHEN', 'BALL', 'FEMALE', 'NON-TEACHING', 22, 15, 'RETIRED', 'DOCTORATE', 'NOVEMBER', 7, 6),
(297, 'JOAN', 'FORSYTH', 'FEMALE', 'NON-TEACHING', 20, 20, 'RESIGNED', 'BACHELORS', 'JUNE', 12, 8),
(298, 'CAROL', 'GIBSON', 'MALE', 'NON-TEACHING', 25, 25, 'RETIRED', 'BACHELORS', 'APRIL', 13, 9),
(299, 'IRENE', 'ROBERTSON', 'MALE', 'NON-TEACHING', 19, 30, 'RETIRED', 'DOCTORATE', 'DECEMBER', 8, 7),
(300, 'LUKE', 'MILLS', 'MALE', 'TEACHING', 4, 15, 'TRANSFERRED', 'MASTERS', 'AUGUST', 5, 15),
(301, 'CAMERON', 'MCLEAN', 'MALE', 'NON-TEACHING', 12, 20, 'TRANSFERRED', 'BACHELORS', 'JULY', 17, 15),
(302, 'CAROLYN', 'MAY', 'FEMALE', 'NON-TEACHING', 43, 25, 'RETIRED', 'DOCTORATE', 'SEPTEMBER', 14, 12),
(303, 'PIPPA', 'CAMPBELL', 'FEMALE', 'NON-TEACHING', 24, 30, 'RESIGNED', 'MASTERS', 'NOVEMBER', 19, 12),
(304, 'ANNA', 'JACKSON', 'MALE', 'TEACHING', 16, 35, 'RESIGNED', 'BACHELORS', 'JULY', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_active`
--

CREATE TABLE IF NOT EXISTS `tbl_active` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) NOT NULL,
  `active_emp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_active`
--

INSERT INTO `tbl_active` (`id`, `employee_id`, `active_emp`) VALUES
(1, '23543', 1),
(2, '45345', 1),
(3, '23543', 1),
(4, '23543', 1),
(5, '23543', 0),
(6, '23543', 1),
(7, '45345', 1),
(8, '45345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_additional_info`
--

CREATE TABLE IF NOT EXISTS `tbl_additional_info` (
  `additional_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `question_34_a` varchar(200) NOT NULL,
  `question_34_b` varchar(200) NOT NULL,
  `yes_details_34_b` varchar(200) NOT NULL,
  `question_35_a` varchar(200) NOT NULL,
  `yes_details_35_a` varchar(200) NOT NULL,
  `question_35_b` varchar(200) NOT NULL,
  `question_35_b_datefiled` date NOT NULL,
  `status_cases_35_b` varchar(100) NOT NULL,
  `question_36` varchar(200) NOT NULL,
  `yes_details_36` varchar(200) NOT NULL,
  `question_37` varchar(200) NOT NULL,
  `yes_details_37` varchar(200) NOT NULL,
  `question_38_a` varchar(200) NOT NULL,
  `yes_details_38_a` varchar(200) NOT NULL,
  `question_38_b` varchar(200) NOT NULL,
  `yes_details_38_b` varchar(200) NOT NULL,
  `question_39` varchar(200) NOT NULL,
  `yes_details_39` varchar(200) NOT NULL,
  `question_40_a` varchar(200) NOT NULL,
  `a_yes_details_40` varchar(200) NOT NULL,
  `question_40_b` varchar(200) NOT NULL,
  `b_yes_details_b` varchar(200) NOT NULL,
  `question_40_c` varchar(200) NOT NULL,
  `c_yes_details_c` varchar(200) NOT NULL,
  PRIMARY KEY (`additional_info_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_additional_info`
--

INSERT INTO `tbl_additional_info` (`additional_info_id`, `employee_id`, `question_34_a`, `question_34_b`, `yes_details_34_b`, `question_35_a`, `yes_details_35_a`, `question_35_b`, `question_35_b_datefiled`, `status_cases_35_b`, `question_36`, `yes_details_36`, `question_37`, `yes_details_37`, `question_38_a`, `yes_details_38_a`, `question_38_b`, `yes_details_38_b`, `question_39`, `yes_details_39`, `question_40_a`, `a_yes_details_40`, `question_40_b`, `b_yes_details_b`, `question_40_c`, `c_yes_details_c`) VALUES
(13, '2013208', 'YES', 'YES', 'N/A', 'YES', 'N/A', 'YES', '0000-00-00', '                          N/A', 'YES', '                          N/A', 'YES', 'Resignation - Job Transfer', 'YES', 'N/A', 'YES', '                                                    N/A', 'YES', '                          N/A', 'YES', 'N/A', 'YES', '                          N/A', 'YES', '                          N/A'),
(21, 'F2019-304', 'NO', 'NO', '', 'NO', '', 'NO', '0000-00-00', '', 'NO', '', 'YES', 'Resignation', 'NO', '', 'NO', '', 'NO', '', 'NO', '', 'NO', '', 'NO', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_children`
--

CREATE TABLE IF NOT EXISTS `tbl_children` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) CHARACTER SET latin1 NOT NULL,
  `name_of_children` varchar(900) CHARACTER SET latin1 NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_children`
--

INSERT INTO `tbl_children` (`child_id`, `employee_id`, `name_of_children`, `date_of_birth`) VALUES
(33, '2013208', 'Carly Annajean B. Amodia', '2017-12-02'),
(43, 'F2019-304', 'Samuel Inigo L. Mandia', '2012-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educ`
--

CREATE TABLE IF NOT EXISTS `tbl_educ` (
  `educational_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `ed_level` varchar(200) NOT NULL,
  `name_of_school` varchar(200) NOT NULL,
  `educ_degree` varchar(200) NOT NULL,
  `att_from` date NOT NULL,
  `att_to` date NOT NULL,
  `level_earned` char(100) NOT NULL,
  `year_grad` year(4) NOT NULL,
  `scholarship_honors` varchar(200) NOT NULL,
  PRIMARY KEY (`educational_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `tbl_educ`
--

INSERT INTO `tbl_educ` (`educational_id`, `employee_id`, `ed_level`, `name_of_school`, `educ_degree`, `att_from`, `att_to`, `level_earned`, `year_grad`, `scholarship_honors`) VALUES
(66, '2013208', 'Elementary', 'Silay South Elementary School', 'Elementary Education', '1994-06-01', '2000-03-01', 'N/A', 2000, 'None'),
(67, '2013208', 'Secondary', 'St. Josephs High School', 'High School', '2000-06-01', '2004-03-01', 'N/A', 2004, 'None'),
(68, '2013208', 'Vocational/Trade Course', 'Technical Education And Skill Development Authority', 'Computer Aided Design/Computer Aided Manufacturing', '2009-11-01', '2009-12-01', 'N/A', 2009, 'None'),
(69, '2013208', 'College', 'Technological University Of The Philippines Visayas', 'Bachelors Of Science In Engineering Technology', '2004-06-01', '2007-08-01', 'N/A', 2011, 'None'),
(70, '2013208', 'Graduate Studies', 'Technological University Of The Philippines Manila', 'Master Of Technology', '2012-07-01', '2015-03-01', 'N/A', 2015, 'None'),
(106, 'F2019-304', 'Elementary', 'SILAY NORTH ELEMENTARY SCHOOL', 'ELEMENTARY LEVEL', '1989-06-01', '1994-03-30', 'N/A', 1994, 'N/A'),
(107, 'F2019-304', 'Secondary', 'DOÃ‘A MONTSERRAT LOPEZ MEMORIAL HIGH SCHOOL', 'HIGH SCHOOL LEVEL', '1995-06-01', '1998-03-30', 'N/A', 1998, 'N/A'),
(108, 'F2019-304', 'Vocational/Trade Course', 'N/A', 'N/A', '0000-00-00', '0000-00-00', 'N/A', 0000, 'N/A'),
(109, 'F2019-304', 'College', 'WEST NEGROS COLLEGE', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', '2001-06-01', '2004-03-30', 'N/A', 2004, 'N/A'),
(110, 'F2019-304', 'Graduate Studies', 'UNIVERSITY OF NEGROS OCCIDENTAL - RECOLETOS', 'MASTER OF INFORMATION TECHNOLOGY', '2007-06-01', '0000-00-00', '24', 0000, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educ_qua_chart`
--

CREATE TABLE IF NOT EXISTS `tbl_educ_qua_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teaching` varchar(50) NOT NULL,
  `nos` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_educ_qua_chart`
--

INSERT INTO `tbl_educ_qua_chart` (`id`, `teaching`, `nos`) VALUES
(8, 'MASTERS', 52),
(9, 'BACCALAUREATE', 32),
(10, 'PME', 5),
(11, 'PEE', 2),
(12, 'PECE', 2),
(13, 'DOCTORATE DEGREE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eligibility`
--

CREATE TABLE IF NOT EXISTS `tbl_eligibility` (
  `civil_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `descriptionx` varchar(500) NOT NULL,
  `rating` char(100) NOT NULL,
  `date_exam` date NOT NULL,
  `place_examination` varchar(200) NOT NULL,
  `cert_no` varchar(200) NOT NULL,
  `date_of_validity` date NOT NULL,
  PRIMARY KEY (`civil_service_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_eligibility`
--

INSERT INTO `tbl_eligibility` (`civil_service_id`, `employee_id`, `descriptionx`, `rating`, `date_exam`, `place_examination`, `cert_no`, `date_of_validity`) VALUES
(15, '2013208', 'Career Service Professional Eligibility', '81.7', '2009-11-15', 'Iloilo National High School, La Paz, Iloilo City', '08-114969', '2009-02-22'),
(27, 'F2019-304', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family`
--

CREATE TABLE IF NOT EXISTS `tbl_family` (
  `family_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `relationship` char(50) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `name_extension` char(10) NOT NULL,
  `maidenname` varchar(100) NOT NULL,
  PRIMARY KEY (`family_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbl_family`
--

INSERT INTO `tbl_family` (`family_id`, `employee_id`, `relationship`, `surname`, `first_name`, `middle_name`, `name_extension`, `maidenname`) VALUES
(27, '2013208', 'Father', 'Amodia', 'Jaime', 'Nabatman', 'N/A', ''),
(28, '2013208', 'Mother', 'Amodia', 'Generosa', 'Pollentes', '', 'Parpa'),
(43, 'F2019-304', 'Father', 'Mandia', 'Rodolfo', 'Belonio', 'N/A', ''),
(44, 'F2019-304', 'Mother', 'Mandia', 'Nenita', 'Ayalin', '', 'Lorca');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gov_id`
--

CREATE TABLE IF NOT EXISTS `tbl_gov_id` (
  `government_issued_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `gov_id` varchar(200) NOT NULL,
  `id_no` char(100) NOT NULL,
  `date_place_issuance` varchar(200) NOT NULL,
  PRIMARY KEY (`government_issued_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_gov_id`
--

INSERT INTO `tbl_gov_id` (`government_issued_id`, `employee_id`, `gov_id`, `id_no`, `date_place_issuance`) VALUES
(13, '2013208', 'Prof. Drivers License', 'F01-10-001849', 'Oct. 8, 2015 / LTO Bacolod'),
(21, 'F2019-304', 'TIN', '947-497-069', '05/04/2007 / BACOLOD CITY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership`
--

CREATE TABLE IF NOT EXISTS `tbl_membership` (
  `assoc_org_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `membership_asso_organization` varchar(200) NOT NULL,
  PRIMARY KEY (`assoc_org_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_membership`
--

INSERT INTO `tbl_membership` (`assoc_org_id`, `employee_id`, `membership_asso_organization`) VALUES
(13, '2013208', 'Technological University of the Philippines Visayas Faculty Association'),
(21, 'F2019-304', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonteachingstatus_chart`
--

CREATE TABLE IF NOT EXISTS `tbl_nonteachingstatus_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `non_teaching_status` varchar(100) NOT NULL,
  `nos` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_nonteachingstatus_chart`
--

INSERT INTO `tbl_nonteachingstatus_chart` (`id`, `non_teaching_status`, `nos`) VALUES
(1, 'PERMANENT', '52'),
(2, 'CASUAL', '8'),
(3, 'JOB ORDER / CONTRACT OF SERVICE', '36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonteaching_chart`
--

CREATE TABLE IF NOT EXISTS `tbl_nonteaching_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `non_teaching_status` varchar(100) NOT NULL,
  `nos` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_nonteaching_chart`
--

INSERT INTO `tbl_nonteaching_chart` (`id`, `non_teaching_status`, `nos`) VALUES
(1, 'MASTERS', '13'),
(2, 'DOCTORATE DEGREE', '1'),
(3, 'UNDER GRADUATE / VOCATIONAL TRADE COURSES', '6'),
(4, 'BACCALAUREATE', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_p_info`
--

CREATE TABLE IF NOT EXISTS `tbl_p_info` (
  `emp_id` int(50) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `name_extension` char(20) NOT NULL,
  `date_birth` date NOT NULL,
  `place_of_birth` varchar(200) NOT NULL,
  `sex` char(20) NOT NULL,
  `civil_status` char(50) NOT NULL,
  `height_m` varchar(100) NOT NULL,
  `weight_m` varchar(50) NOT NULL,
  `blood_type` char(15) NOT NULL,
  `gsis_id_no` char(50) NOT NULL,
  `pagibig_id_no` char(50) NOT NULL,
  `philhealth_no` varchar(50) NOT NULL,
  `sss_no` char(50) NOT NULL,
  `tin_no` char(50) NOT NULL,
  `agency_employee_no` varchar(200) NOT NULL,
  `citizenship` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `dual_citizenship` varchar(200) NOT NULL,
  `residential_house_block_lot_no` varchar(200) NOT NULL,
  `residential_street` varchar(200) NOT NULL,
  `residential_subdivision_village` varchar(200) NOT NULL,
  `residential_barangay` varchar(200) NOT NULL,
  `residential_city_municipality` varchar(200) NOT NULL,
  `residential_province` varchar(200) NOT NULL,
  `residential_zipcode` varchar(200) NOT NULL,
  `permanent_house_block_lot_no` varchar(200) NOT NULL,
  `permanent_street` varchar(200) NOT NULL,
  `permanent_subdivision_village` varchar(200) NOT NULL,
  `permanent_barangay` varchar(200) NOT NULL,
  `permanent_city_municipality` varchar(200) NOT NULL,
  `permanent_province` varchar(200) NOT NULL,
  `permanent_zipcode` varchar(200) NOT NULL,
  `telephone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `employment_status` varchar(10) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `tbl_p_info`
--

INSERT INTO `tbl_p_info` (`emp_id`, `employee_id`, `surname`, `first_name`, `middle_name`, `name_extension`, `date_birth`, `place_of_birth`, `sex`, `civil_status`, `height_m`, `weight_m`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_employee_no`, `citizenship`, `country`, `dual_citizenship`, `residential_house_block_lot_no`, `residential_street`, `residential_subdivision_village`, `residential_barangay`, `residential_city_municipality`, `residential_province`, `residential_zipcode`, `permanent_house_block_lot_no`, `permanent_street`, `permanent_subdivision_village`, `permanent_barangay`, `permanent_city_municipality`, `permanent_province`, `permanent_zipcode`, `telephone_no`, `mobile_no`, `email_address`, `employment_status`) VALUES
(121, '2013208', 'Amodia', 'Darly ', 'Polletes ', 'N/A', '1987-09-23', 'E.B. Magalona, Negros Occidental ', 'Male', 'Married', '1.57 m', '79 kg ', 'AB Positive', '957 0289846 01 0', '1020-0264-2579', '030505129381', '07-2296865-3', '258089567', 'F2013-208', 'Filipino', 'Philippines', 'By Birth', 'N/A', 'N/A', 'Sunrise Village', 'Brgy. E. Lopez', 'Silay City', 'Negros Occidental', '6116', 'N/A', 'N/A', 'Sunrise Village', 'Brgy. E. Lopez', 'Silay City', 'Negros Occidental', '6116', 'None', '0921 468 0077', 'daryl_amodia@tup.edu.com', 'Regular'),
(129, 'F2019-304', 'Mandia', 'Jonathan ', 'Lorca ', 'N/A', '1981-05-07', 'Maysan Valenzuela ', 'Male', 'Married', '1.63', '61.235 ', 'B+', 'N/A', '1210-4900-6604', '11-050265797-6', '07-1830210-0', '947-497-069', 'F2019-304', 'Filipino', '', '', 'PH1 BLK94 LT5', 'N/A', 'CELINE HOMES', 'ESTEFANIA', 'Bacolod City', 'Negros Occidental', '6100', 'PH1 BLK94 LT5', 'N/A', 'CELINE HOMES', 'ESTEFANIA', 'Bacolod City', 'Negros Occidental', '6100', 'NONE', '09467685699', 'trigun.master28@gmail.com', 'Regular ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recog`
--

CREATE TABLE IF NOT EXISTS `tbl_recog` (
  `distinction_recog_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `non_academic_distinctions` varchar(200) NOT NULL,
  PRIMARY KEY (`distinction_recog_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_recog`
--

INSERT INTO `tbl_recog` (`distinction_recog_id`, `employee_id`, `non_academic_distinctions`) VALUES
(16, '2013208', 'NONE'),
(24, 'F2019-304', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_references`
--

CREATE TABLE IF NOT EXISTS `tbl_references` (
  `references_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `ref_name` varchar(200) NOT NULL,
  `ref_address` varchar(200) NOT NULL,
  `ref_tel_no` varchar(200) NOT NULL,
  PRIMARY KEY (`references_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tbl_references`
--

INSERT INTO `tbl_references` (`references_id`, `employee_id`, `ref_name`, `ref_address`, `ref_tel_no`) VALUES
(37, '2013208', 'Rodeo P. Suating', 'Central Hawaiian, Silay City', '09164426677'),
(38, '2013208', 'Arnold S. Depasucat', 'Central Hawaiian, Silay City', '09328438859'),
(39, '2013208', 'Wendel M. Canseko', 'Brgy. Macabling, Sta. Rosa, Laguna', '09209224112'),
(57, 'F2019-304', 'MR. RUEL VILLAROSA', 'Talisay City, Negros Occidental', '09090452443'),
(58, 'F2019-304', 'MR. RONALDO DE LA VEGA', 'Golden River Subd., Alijis, Bacolod City', '09331084321'),
(59, 'F2019-304', 'MR. MEJOHN SEGAYO', 'Concepcion, Talisay City', '09127652941');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills_hobbies`
--

CREATE TABLE IF NOT EXISTS `tbl_skills_hobbies` (
  `skills_hobbies_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `special_skills_hobbies` varchar(200) NOT NULL,
  PRIMARY KEY (`skills_hobbies_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_skills_hobbies`
--

INSERT INTO `tbl_skills_hobbies` (`skills_hobbies_id`, `employee_id`, `special_skills_hobbies`) VALUES
(13, '2013208', 'Playing Basketball / Chess'),
(36, 'F2019-304', 'Singing'),
(37, 'F2019-304', 'Programming'),
(38, 'F2019-304', 'WEB DEVELOPER'),
(39, 'F2019-304', 'GRAPHIC DESIGNER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spouse`
--

CREATE TABLE IF NOT EXISTS `tbl_spouse` (
  `spouse_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `spouses_surname` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `name_extension` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `employer_business_name` varchar(200) NOT NULL,
  `business_address` varchar(200) NOT NULL,
  `telephone_no` varchar(200) NOT NULL,
  PRIMARY KEY (`spouse_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_spouse`
--

INSERT INTO `tbl_spouse` (`spouse_id`, `employee_id`, `spouses_surname`, `first_name`, `middle_name`, `name_extension`, `occupation`, `employer_business_name`, `business_address`, `telephone_no`) VALUES
(14, '2013208', 'Amodia', 'Cris Ann', 'Bandiola', 'N/A', 'Housewife', 'N/A', 'N/A', 'N/A'),
(22, 'F2019-304', 'Mandia', 'Mary Janice', 'Lutero', 'N/A', 'Librarian', 'University Of Saint La Salle', 'La Salle Avenue, Bacolod 6100, Negros Occidental', '434-6100 (129)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teaching_chart`
--

CREATE TABLE IF NOT EXISTS `tbl_teaching_chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teaching_status` varchar(100) NOT NULL,
  `nos` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_teaching_chart`
--

INSERT INTO `tbl_teaching_chart` (`id`, `teaching_status`, `nos`) VALUES
(1, 'PERMANENT', '71'),
(2, 'TEMPORARY', '16'),
(3, 'PART-TIME', '44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE IF NOT EXISTS `tbl_training` (
  `training_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `att_from` date NOT NULL,
  `att_to` date NOT NULL,
  `type_of_ld` varchar(200) NOT NULL,
  `no_hours` int(11) NOT NULL,
  `conducted_by` varchar(200) NOT NULL,
  PRIMARY KEY (`training_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`training_id`, `employee_id`, `title`, `att_from`, `att_to`, `type_of_ld`, `no_hours`, `conducted_by`) VALUES
(14, '2013208', 'Fiber Reinforced Plastic (FRP) and Glass Reinforced Plastic (GRP) Technology', '2013-07-31', '2013-07-31', 'Technical', 4, 'Medwest Technical Institute'),
(15, '2013208', 'Industrial Weighing in Mining and Aggregate', '2013-07-31', '2013-07-31', 'Technical', 4, 'Medwest Technical Institute'),
(16, '2013208', 'Selection of the Right Thermoplastic Piping Material and Revolution of Plastic Pipes', '2013-07-31', '2013-07-31', 'Technical', 4, 'Medwest Technical Institute'),
(17, '2013208', 'Trainers Training in Machining', '2013-10-26', '2013-11-16', 'Supervisory', 16, 'Technological University of the Philippines Visayas'),
(18, '2013208', 'Workshop on Outcomes-Based Education (OBE) System', '2014-05-05', '2014-05-09', 'Supervisory', 40, 'Technological University of the Philippines Visayas'),
(19, '2013208', 'Understanding the Requirements of the Standard (ISO 9001:2008)', '2014-11-18', '2014-11-19', 'Supervisory', 16, 'Technological University of the Philippines Visayas'),
(20, '2013208', 'Quality Management System (QMS) Documentation (ISO 9001:2008)', '2014-11-20', '2014-11-21', 'Supervisory', 16, 'Technological University of the Philippines Visayas'),
(21, '2013208', 'Patent Drafting and Research Policies', '2014-12-12', '2014-12-12', 'Supervisory', 8, 'Technological University of the Philippines Visayas'),
(22, '2013208', 'Internal Audit Course Based on ISO 19011;2011', '2015-03-16', '2015-03-18', 'Supervisory', 24, 'Technological University of the Philippines Visayas'),
(23, '2013208', 'Mechanical Engineering Technology Program Mapping and Development of Outcome Based Education Course Syllabus', '2015-03-21', '2015-03-21', 'Supervisory', 8, 'Technological University of the Philippines Visayas'),
(24, '2013208', 'Mechatronics Servicing', '2015-04-13', '2015-04-17', 'Technical', 40, 'Technological University of the Philippines Visayas'),
(25, '2013208', 'Workshop on Kinematics of Machine', '2015-04-20', '2015-04-24', 'Technical', 40, 'Technological University of the Philippines Visayas'),
(26, '2013208', 'Computer Numerical Control (CNC) Lathe Machine', '2016-01-18', '2016-01-20', 'Technical', 24, 'Technological University of the Philippines Visayas'),
(27, '2013208', 'Pneumatics and Electro-Pneumatics Training', '2017-03-10', '2017-03-10', 'Technical', 8, 'Hytec Power Inc.'),
(28, '2013208', 'Pneumatic Trainer', '2017-03-23', '2017-03-23', 'Technical', 8, 'Humil International Corporation'),
(29, '2013208', 'Government Procurement Reform Act. (R.A. 9184)', '2017-10-18', '2017-10-20', 'Supervisory', 24, 'Assoc. of Government Internal Auditors, Inc.'),
(30, '2013208', 'The Philippine Bidding Documents', '2018-02-07', '2018-02-09', 'Supervisory', 24, 'Assoc. of Government Internal Auditors, Inc.'),
(31, '2013208', 'Orientation for Potential Consultants and Trainers', '2018-03-09', '2018-03-09', 'Supervisory', 8, 'Department of Science and Technology, Region 6'),
(76, 'F2019-304', 'Spotting And Handling Students With Depression, Anxiety And Suicidal Ideation In The Classroom', '2019-09-28', '2019-09-28', 'Certificate of Participation', 4, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(77, 'F2019-304', 'In-Service Training Program 2019 (Seminar Workshop)', '2019-05-27', '2019-05-27', 'Certificate of Attendance', 4, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(78, 'F2019-304', 'Robotics For High School (Arduino)', '2019-05-09', '2019-05-10', 'Certificate of Participation', 16, 'techFactors Incorporated'),
(79, 'F2019-304', 'Object-Oriented Programming Level II', '2019-05-06', '2019-05-08', 'Certificate of Participation', 24, 'techFactors Incorporated'),
(80, 'F2019-304', 'Outreach Activity (Elders Of Carmelite)', '2018-12-16', '2018-12-16', 'Certificate of Participation', 4, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(81, 'F2019-304', 'Seminar Workshop On Desktop Publishing', '2018-12-15', '2018-12-16', 'Resource Speaker', 12, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(82, 'F2019-304', 'Livelihood Skills Training', '2018-10-20', '2018-10-20', 'Resource Speaker', 4, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(83, 'F2019-304', 'In-Service Training Program 2017 (Seminar Workshop)', '2017-05-04', '2017-05-29', 'Certificate of Attendance', 52, 'UNIVERSITY OF NEGROS OCCDIDENTAL - RECOLETOS'),
(84, 'F2019-304', 'STEM With Robotics Training', '2018-06-01', '2018-06-01', 'Certificate of Attendance', 4, 'First Eduspecs Incorporated');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_turnover`
--

CREATE TABLE IF NOT EXISTS `tbl_turnover` (
  `turnover_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `date_turnover` date NOT NULL,
  PRIMARY KEY (`turnover_id`),
  UNIQUE KEY `turnover_id` (`turnover_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` set('Male','Female') NOT NULL,
  `password` varchar(64) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_reg` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `image`, `fname`, `lname`, `address`, `contact`, `gender`, `password`, `username`, `date_reg`, `status`) VALUES
(7, '1.jpg', 'admin', 'admin', '', '', 'Male', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2019-11-13', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voluntary_work`
--

CREATE TABLE IF NOT EXISTS `tbl_voluntary_work` (
  `voluntary_work_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `name_address` varchar(200) NOT NULL,
  `voluntary_from` date NOT NULL,
  `voluntary_to` date NOT NULL,
  `no_of_hours` float NOT NULL,
  `position_nature_of_work` varchar(200) NOT NULL,
  PRIMARY KEY (`voluntary_work_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_voluntary_work`
--

INSERT INTO `tbl_voluntary_work` (`voluntary_work_id`, `employee_id`, `name_address`, `voluntary_from`, `voluntary_to`, `no_of_hours`, `position_nature_of_work`) VALUES
(14, '2013208', 'NONE', '0000-00-00', '0000-00-00', 0, 'N/A'),
(22, 'F2019-304', 'N/A', '0000-00-00', '0000-00-00', 0, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_experience`
--

CREATE TABLE IF NOT EXISTS `tbl_work_experience` (
  `work_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(50) NOT NULL,
  `work_from` date NOT NULL,
  `work_to` date NOT NULL,
  `position_title` varchar(200) NOT NULL,
  `department_agency` varchar(200) NOT NULL,
  `monthly_salary` decimal(10,2) NOT NULL,
  `salary_job_step` char(100) NOT NULL,
  `status_appointment` varchar(200) NOT NULL,
  `government_service_y_n` char(5) NOT NULL,
  PRIMARY KEY (`work_experience_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `tbl_work_experience`
--

INSERT INTO `tbl_work_experience` (`work_experience_id`, `employee_id`, `work_from`, `work_to`, `position_title`, `department_agency`, `monthly_salary`, `salary_job_step`, `status_appointment`, `government_service_y_n`) VALUES
(16, '2013208', '2013-06-03', '0000-00-00', 'Instructor 1', 'Mechatronics Technology Technological University of the Philippines Visayas', '22410.00', '12-2', 'Permanent', 'Y'),
(17, '2013208', '2010-04-08', '2013-06-02', 'Engineering Draftsman', 'Hawaiian Philippine Company', '8500.00', 'N/A', 'Regular', 'N'),
(18, '2013208', '2006-06-02', '2010-04-27', 'Computer Aided Designer', 'GU Engineering', '12000.00', 'N/A', 'Contract', 'N'),
(19, '2013208', '2007-07-02', '2009-05-14', 'Production / Technical Staff', 'United Perlite Corporation', '14000.00', 'N/A', 'Regular', 'N'),
(74, 'F2019-304', '2016-11-07', '2019-12-07', 'COMPUTER TEACHER', 'UNIVERSITY OF NEGROS OCCIDENTAL - RECOLETOS', '21000.00', 'N/A', 'Part-Time', 'N'),
(75, 'F2019-304', '2009-06-09', '2016-11-06', 'COMPUTER PROGRAMMING HEAD', 'ASIAN BUSINESS INSTITUTE OF E-Technology', '10500.00', 'N/A', 'Permanent', 'N'),
(76, 'F2019-304', '2007-11-05', '2009-05-29', 'ELECTRONIC-COMMERCE ADVISER', 'IMPACT', '9000.00', 'N/A', 'Permanent', 'N'),
(77, 'F2019-304', '2005-06-06', '2006-11-30', 'INFORMATION TECHNOLOGY INSTRUCTOR', 'APTECH COMPUTER EDUCATION', '7000.00', 'N/A', 'Full-Time', 'N');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_additional_info`
--
ALTER TABLE `tbl_additional_info`
  ADD CONSTRAINT `tbl_additional_info_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_children`
--
ALTER TABLE `tbl_children`
  ADD CONSTRAINT `tbl_children_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_educ`
--
ALTER TABLE `tbl_educ`
  ADD CONSTRAINT `tbl_educ_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_eligibility`
--
ALTER TABLE `tbl_eligibility`
  ADD CONSTRAINT `tbl_eligibility_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_family`
--
ALTER TABLE `tbl_family`
  ADD CONSTRAINT `tbl_family_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_gov_id`
--
ALTER TABLE `tbl_gov_id`
  ADD CONSTRAINT `tbl_gov_id_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_membership`
--
ALTER TABLE `tbl_membership`
  ADD CONSTRAINT `tbl_membership_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_recog`
--
ALTER TABLE `tbl_recog`
  ADD CONSTRAINT `tbl_recog_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_references`
--
ALTER TABLE `tbl_references`
  ADD CONSTRAINT `tbl_references_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_skills_hobbies`
--
ALTER TABLE `tbl_skills_hobbies`
  ADD CONSTRAINT `tbl_skills_hobbies_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_spouse`
--
ALTER TABLE `tbl_spouse`
  ADD CONSTRAINT `tbl_spouse_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD CONSTRAINT `tbl_training_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_turnover`
--
ALTER TABLE `tbl_turnover`
  ADD CONSTRAINT `tbl_turnover_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_voluntary_work`
--
ALTER TABLE `tbl_voluntary_work`
  ADD CONSTRAINT `tbl_voluntary_work_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

--
-- Constraints for table `tbl_work_experience`
--
ALTER TABLE `tbl_work_experience`
  ADD CONSTRAINT `tbl_work_experience_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `tbl_p_info` (`employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
