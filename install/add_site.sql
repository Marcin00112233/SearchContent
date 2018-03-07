-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 06:16 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `searchcontent`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_site`
--

CREATE TABLE `add_site` (
  `id` int(11) NOT NULL,
  `url` int(11) NOT NULL,
  `sitemap` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `add_site`
--

INSERT INTO `add_site` (`Field_name`, `Min_value`, `Max_value`, `Min_length`, `Max_length`, `Empties_or_zeros`, `Nulls`, `Avg_value_or_avg_length`, `Std`, `Optimal_fieldtype`) VALUES
(0x736561726368636f6e74656e742e6164645f736974652e6964, NULL, NULL, 0, 0, 0, 0, 0x302e30, 0x302e30, 0x43484152283029204e4f54204e554c4c),
(0x736561726368636f6e74656e742e6164645f736974652e75726c, NULL, NULL, 0, 0, 0, 0, 0x302e30, 0x302e30, 0x43484152283029204e4f54204e554c4c),
(0x736561726368636f6e74656e742e6164645f736974652e736974656d6170, NULL, NULL, 0, 0, 0, 0, 0x302e30, 0x302e30, 0x43484152283029204e4f54204e554c4c),
(0x736561726368636f6e74656e742e6164645f736974652e737461747573, NULL, NULL, 0, 0, 0, 0, 0x302e30, 0x302e30, 0x43484152283029204e4f54204e554c4c);
COMMIT;
