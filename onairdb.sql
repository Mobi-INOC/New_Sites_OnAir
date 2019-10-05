-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2019 at 06:29 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onairdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` varchar(6) NOT NULL,
  `type` longtext NOT NULL,
  `band` varchar(20) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `site_name` varchar(250) NOT NULL,
  `wp` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` varchar(191) DEFAULT '',
  `defined_by` varchar(20) NOT NULL,
  `defined_date` datetime DEFAULT NULL,
  `npa_config_status` varchar(20) NOT NULL DEFAULT 'No',
  `npa_remark` varchar(191) DEFAULT '',
  `npa_config_by` varchar(20) NOT NULL,
  `npa_config_date` datetime DEFAULT NULL,
  `cs_config_status` varchar(20) NOT NULL DEFAULT 'No',
  `cs_config_by` varchar(20) NOT NULL,
  `cs_config_date` datetime DEFAULT NULL,
  `cs_remark` varchar(191) DEFAULT '',
  `pcn_config_status` varchar(20) NOT NULL DEFAULT 'No',
  `pcn_config_by` varchar(20) NOT NULL,
  `pcn_config_date` datetime DEFAULT NULL,
  `pcn_remark` varchar(191) DEFAULT '',
  `region` varchar(10) NOT NULL,
  `activation_informed_by` varchar(50) NOT NULL,
  `activated_date` datetime NOT NULL,
  `activated_by` varchar(20) NOT NULL,
  `alarms_on_activation` longtext NOT NULL,
  `sms` varchar(3) NOT NULL,
  `removed_date` datetime NOT NULL,
  `removed_by` datetime NOT NULL,
  `remove_remark` varchar(100) NOT NULL,
  `pat_pass` varchar(10) NOT NULL,
  `pat_by` varchar(20) NOT NULL,
  `pat_date` datetime NOT NULL,
  `bsc` varchar(20) NOT NULL,
  `technology` varchar(20) NOT NULL,
  `on_air` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_index` (`wp`,`site_id`,`band`,`type`(100))
) ENGINE=MyISAM AUTO_INCREMENT=7770 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_id`, `type`, `band`, `vendor`, `site_name`, `wp`, `status`, `remark`, `defined_by`, `defined_date`, `npa_config_status`, `npa_remark`, `npa_config_by`, `npa_config_date`, `cs_config_status`, `cs_config_by`, `cs_config_date`, `cs_remark`, `pcn_config_status`, `pcn_config_by`, `pcn_config_date`, `pcn_remark`, `region`, `activation_informed_by`, `activated_date`, `activated_by`, `alarms_on_activation`, `sms`, `removed_date`, `removed_by`, `remove_remark`, `pat_pass`, `pat_by`, `pat_date`, `bsc`, `technology`, `on_air`) VALUES
(7722, 'QCZKV1', '4G', '1800', 'Huawei', 'View Residencies', '4G Implementation', 'Defined', '', 'RO', '2019-10-03 20:54:30', 'Yes', '', 'NPA', '2019-10-03 20:57:43', 'Yes', 'CS', '2019-10-04 09:17:42', 'done', 'Yes', 'PCN', '2019-10-04 09:42:08', 'done', '', '', '2019-09-18 05:00:00', '', '', '', '2019-09-25 18:00:00', '2019-09-10 00:29:00', '', '', '', '2019-09-03 00:33:00', '', '', 0),
(7723, 'QCZSD1', '4G', '1800', 'Huawei', 'National Data Center', '4G Implementation', 'Defined', '', 'RO', '2019-10-03 20:54:30', 'Yes', '', 'NPA', '2019-10-03 20:57:43', 'Yes', 'CS', '2019-10-04 09:17:42', 'done', 'Yes', 'PCN', '2019-10-04 09:42:08', 'done', '', '', '2019-09-19 10:00:00', '', '', '', '2019-09-09 00:00:00', '2019-09-02 10:00:00', '', '', '', '2019-09-02 05:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
CREATE TABLE IF NOT EXISTS `user_account` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activated` int(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `user_type`, `password`, `activated`) VALUES
(1, 'admin', 1, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'RNO', 2, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'RAO', 3, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(4, 'CS', 4, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(5, 'PCN', 5, '81dc9bdb52d04dc20036dbd8313ed055', 1),
(6, 'Vendor', 6, '81dc9bdb52d04dc20036dbd8313ed055', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
