-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 07:06 AM
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
(1, 'logo', 'Logo Design - E Revolution Ventures', 'Australia', '423_logo.jpg', 'E Revolution Ventures is a data-driven e-commerce company using smart algorithms to track and sell millions of products across more than a dozen product categories online. Originating from brick and mortar roots with several retail stores today, E Revolution was recently included in Internet Retailer magazine\'s list of the top 500 e-commerce businesses.Logo is looking corporate, but also modern and clean. Customer want incorporate an graphic into the typography.<br>This is our award winning logo design.', '18-05-2019'),
(2, 'identity', 'Zing Print', 'Finalist Logo and Brand Identity', '941_identity.jpg', 'ZingPrint is Online digital printing company targeting both business to business and business to consumer. Offering business cards, brochures, direct mail, etc. Client was selected as finalist it means that client is impressed by our work.', '18-05-2019'),
(3, 'web', 'Website - KISWE', 'New York', '253_web.jpg', 'Website - KISWE - Kolhapur', '18-05-2019'),
(4, 'web', 'Website - EDMRC Group', 'Pune', '972_web.jpg', 'Website - EDMRC Group - Kolhapur', '18-05-2019'),
(5, 'logo', 'Bandhan Tourism Logo', 'Kolhapur', '934_logo.jpg', 'Bandhan Tourism Logo - Kolhapur', '18-05-2019'),
(6, 'logo', 'EVO Centric', 'Kolhapur', '314_logo.jpg', '\"Evo-Centric is specialize in sourcing race prepared vehicles and performance parts for the Mitsubishi Lancer Evolution in Japan.\"<br>\r\n\r\nThe target audience is people who are normally over the age of 20, Male, enjoy the Japanese car culture and taking their cars to the race track or just modifying their cars to go faster and handle better on the street.', '18-05-2019'),
(7, 'logo', 'Logo - Amrutdhara Hall', 'Kolhapur', '968_logo.jpg', 'Logo - Amrutdhara Hall - Kolhapur', '18-05-2019'),
(8, 'logo', 'Logo Design - ZOO Business Media', 'Australia', '276_logo.jpg', 'We specialise in customer experience marketing. This includes point-of-entry marketing like telephone voice prompts and messaging, branded music channels, aroma marketing and other types of \'new media\'.<br>\r\n\r\nHave regestered domain zbm.com.au, so could possibly look at highlighting the first letter of each word?\r\nAlso like the idea of having the word Zoo much larger than the other two as the business will be no doubt be known as just \'Zoo\' for short.', '18-05-2019'),
(9, 'web', 'Website - Konark Win Door', 'Kolhapur', '148_web.jpg', 'Website - Konark Win Door - Kolhapur', '18-05-2019'),
(10, 'logo', 'Logo Design - Zanvar Group', 'Kolhapur', '986_logo.jpg', 'Logo Design - Zanvar Group - Kolhapur', '18-05-2019'),
(11, 'web', 'Website - TEK ID', 'Shanghai China', '936_web.jpg', 'Website - TEK ID - Kolhapur', '18-05-2019'),
(12, 'logo', 'Brand Identity - Influx', 'Melborn - Australia', '358_web.jpg', 'Influx has a team of customer support specialists that can partner with small businesses and tech startups to answer support emails and help them grow.\r\npretty much overused concept so we\'r even more in love with unique piece I created ;)<br>This is our award winning logo design.', '18-05-2019'),
(13, 'logo', 'Logo - Amrutdhara Hall', 'Kolhapur', '495_logo.jpg', 'Logo - Amrutdhara Hall - Kolhapur', '18-05-2019'),
(14, 'web', 'Website - Turkey Cultural', 'Turkey', '834_web.jpg', 'Website - Turkey Cultural', '18-05-2019'),
(15, 'logo', 'Logo - Reshimbandhan', 'Kolhapur', '789_logo.jpg', 'Logo - Reshimbandhan - Kolhapur', '18-05-2019'),
(16, 'logo', 'Logo - Annova LNG', 'Texas, United States', '491_logo.jpg', 'Annova LNG is a company that produces liquefied natural gas (LNG) from the United States for export around the world. LNG is simply the same natural gas in your home that has been cooled to -160 degrees centigrade. Annova LNG will be one of the first companies to develop this method of transporting natural gas from the US. Some symbols that are associated with natural gas is a flame of course, but Annova LNG looking for creativity and simplicity.', '18-05-2019'),
(17, 'web', 'Website - Bandhan Tourism', 'Mumbai', '354_web.jpg', 'Website - Bandhan Tourism - Mumbai', '18-05-2019'),
(18, 'logo', 'Logo - Appy Technologies', '', '935_logo.jpg', 'Logo - Appy Technologies', '18-05-2019'),
(19, 'logo', 'Logo - devmaster', '', '523_logo.jpg', 'Logo - devmaster', '18-05-2019'),
(20, 'logo', 'Logo - Greggot', 'China', '915_logo.jpg', 'Greggot blog is about martial arts (kung fu, boxing, kick boxing), conditioning, personal training.<br>\r\n\r\nCustomer name is Greg Gothelf. Audience is 70% men.<br>\r\n\r\n\r\nThe website is http://www.greggot.com (in french).', '18-05-2019'),
(21, 'web', 'Website - Easy Will India', 'Kolhapur', '163_web.jpg', 'Website - Easy Will India - Kolhapur', '19-05-2019'),
(22, 'logo', 'Logo - Halworth Design-Manage-Construct', '', '514_logo.jpg', 'Halworth provide a boutique-style home building services to a high-end, demanding and discerning clientele. Halworth intentionally, a small company with tight controls on processes while, at the same time, having immeasurable flexibility so as to provide an unique and satisfying experience for each one of clients.', '19-05-2019'),
(23, 'logo', 'Logo - Inet People', '', '894_logo.jpg', 'Inet People is Tech Consulting & Investments\r\nHosting, Cloud, Backbone, Datacenter, Software Development\r\nsustainable development technology\r\n', '19-05-2019'),
(24, 'logo', 'Logo - JT Engineering', '', '734_logo.jpg', 'JT Engineering specializes in installation work packages for video surveillance and communication systems. Work packages include design prints, installation instructions, scope of work and bill of materials. ', '19-05-2019'),
(25, 'logo', 'Logo - Intly Smart Business Software', '', '823_logo.jpg', 'Enterprise resource planning software for small and medium sized businesses of all industries.<br>\r\n\r\nClient requires logo should look like a Fortune 500 company.', '19-05-2019'),
(26, 'web', 'Website - AutoCast', '', '421_web.jpg', 'Website - AutoCast', '19-05-2019'),
(27, 'logo', 'Logo - Kyati Foods', '', '869_logo.jpg', 'Logo - Kyati Foods', '19-05-2019'),
(28, 'logo', 'Logo - Packup', '', '672_logo.jpg', 'Logo - Packup', '19-05-2019'),
(29, 'logo', 'Logo - Pehnawa', '', '516_logo.jpg', 'Logo - Pehnawa', '19-05-2019'),
(30, 'logo', 'Logo - Qualist', '', '746_logo.jpg', 'Logo - Qualist', '19-05-2019'),
(31, 'logo', 'Logo - Recovery Point Zero', '', '534_logo.jpg', 'Recovery Point Zero disaster recovery and real-time backup solution provides real-time server protection that captures all changes to all your data, not just files, and securely stores them in a secure offsite location either a cloud based service or your own offsite location.\r\n', '19-05-2019'),
(32, 'logo', 'Logo - Pdf Creator', '', '148_logo.jpg', 'PDFCreator started as a free tool to convert all printable files to PDFs. With the time, we have added several business editions. The range of editions targets all customers from beginners/home users to advanced corporate users and administrators.\r\n', '19-05-2019'),
(33, 'web', 'Website - Net Set Academy', '', '786_web.jpg', 'Website - Net Set Academy', '19-05-2019'),
(34, 'logo', 'Logo - Angle', '', '389_logo.jpg', 'Logo - Angle', '19-05-2019'),
(35, 'web', 'Website - Portfolio Gorilla', '', '436_web.jpg', 'Website - Portfolio Gorilla', '19-05-2019'),
(36, 'logo', 'Logo - SP Enterprises', '', '597_logo.jpg', 'Logo - SP Enterprises', '19-05-2019'),
(37, 'web', 'Website - Online Faxes', '', '516_web.jpg', 'Website - Online Faxes', '19-05-2019'),
(38, 'logo', 'Logo - Vidtitan', '', '183_logo.jpg', 'Logo - Vidtitan', '19-05-2019'),
(39, 'logo', 'Logo - Think Rite', '', '859_logo.jpg', 'ThinkRite is a trusted authority on improving communication and collaboration within groups.<br>\r\n\r\nWe provide consulting services to small and medium businesses and large enterprises, to help them improve the ways their employees communicate, to drive down the costs of doing business. We also sell, design, deploy, and support software solutions in the communication/collaboration space.<br>\r\n\r\nThe logo is incorporated with a distinctive graphic, some sort of a variation of a brain, and include the company name \"ThinkRite\". We like shape of the lines in The brain in the power brain logo.', '19-05-2019');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
