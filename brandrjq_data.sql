-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 11:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel_bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `short_info` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `descroption` text NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `type`, `title`, `short_info`, `photo`, `descroption`, `date`) VALUES
(1, 'logo', 'Logo Design - E Revolution Ventures', 'Australia', '423_logo.jpg', 'Logo Design - E Revolution Ventures - Australia', '18-05-2019'),
(2, 'identity', 'Zing Print', 'Finalist Logo and Brand Identity', '941_identity.jpg', 'Zing Print - Finalist Logo and Brand Identity', '18-05-2019'),
(3, 'web', 'Website - KISWE', 'Kolhapur', '253_web.jpg', 'Website - KISWE - Kolhapur', '18-05-2019'),
(4, 'web', 'Website - EDMRC Group', 'Kolhapur', '972_web.jpg', 'Website - EDMRC Group - Kolhapur', '18-05-2019'),
(5, 'logo', 'Bandhan Tourism Logo', 'Kolhapur', '934_logo.jpg', 'Bandhan Tourism Logo - Kolhapur', '18-05-2019'),
(6, 'logo', 'EVO Centric', 'Kolhapur', '314_logo.jpg', 'EVO Centric - Kolhapur', '18-05-2019'),
(7, 'logo', 'Logo - Amrutdhara Hall', 'Kolhapur', '968_logo.jpg', 'Logo - Amrutdhara Hall - Kolhapur', '18-05-2019'),
(8, 'logo', 'Logo Design - ZOO Business Media', 'Australia', '276_logo.jpg', 'Logo Design - ZOO Business Media - Australia', '18-05-2019'),
(9, 'web', 'Website - Konark Win Door', 'Kolhapur', '148_web.jpg', 'Website - Konark Win Door - Kolhapur', '18-05-2019'),
(10, 'logo', 'Logo Design - Zanvar Group', 'Kolhapur', '986_logo.jpg', 'Logo Design - Zanvar Group - Kolhapur', '18-05-2019'),
(11, 'web', 'Website - TEK ID', 'Kolhapur', '936_web.jpg', 'Website - TEK ID - Kolhapur', '18-05-2019'),
(12, 'web', 'Brand Identity - Influx', 'Melborn - Australia', '358_web.jpg', 'Brand Identity - Influx (Melborn - Australia)', '18-05-2019'),
(13, 'logo', 'Logo - Amrutdhara Hall', 'Kolhapur', '495_logo.jpg', 'Logo - Amrutdhara Hall - Kolhapur', '18-05-2019'),
(14, 'web', 'Website - Turkey Cultural', 'Turkey', '834_web.jpg', 'Website - Turkey Cultural', '18-05-2019'),
(15, 'logo', 'Logo - Reshimbandhan', 'Kolhapur', '789_logo.jpg', 'Logo - Reshimbandhan - Kolhapur', '18-05-2019'),
(16, 'logo', 'Logo - Annova LNG', '', '491_logo.jpg', 'Logo - Annova LNG', '18-05-2019'),
(17, 'web', 'Website - Bandhan Tourism', 'Mumbai', '354_web.jpg', 'Website - Bandhan Tourism - Mumbai', '18-05-2019'),
(18, 'logo', 'Logo - Appy Technologies', 'mumbai', '935_logo.jpg', 'Logo - Appy Technologies', '18-05-2019'),
(19, 'logo', 'Logo - devmaster', '', '523_logo.jpg', 'Logo - devmaster', '18-05-2019'),
(20, 'logo', 'Logo - Greggot', 'China', '915_logo.jpg', 'Logo - Greggot (China)', '18-05-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
