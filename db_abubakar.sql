-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 02:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abubakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `lwd_banner`
--

CREATE TABLE `lwd_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_type` enum('banner','slide') NOT NULL DEFAULT 'slide',
  `banner_link` varchar(255) NOT NULL,
  `banner_alt` varchar(255) NOT NULL,
  `banner_pub` enum('88','99') NOT NULL DEFAULT '88',
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_category`
--

CREATE TABLE `lwd_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_name_en` varchar(255) NOT NULL,
  `category_seq` int(11) NOT NULL COMMENT 'sequence / urutan',
  `category_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publis',
  `category_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_catinfo`
--

CREATE TABLE `lwd_catinfo` (
  `catinfo_id` int(11) NOT NULL,
  `catinfo_name` varchar(255) NOT NULL,
  `catinfo_link` varchar(255) NOT NULL,
  `catinfo_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publis'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_catinfo`
--

INSERT INTO `lwd_catinfo` (`catinfo_id`, `catinfo_name`, `catinfo_link`, `catinfo_pub`) VALUES
(1, 'Our Firm', 'our-firm', '99'),
(2, 'Our Partners', 'our-partners', '99'),
(3, 'Our Clients', 'our-clients', '99'),
(4, 'Benefits for Our Client', 'benefits-for-our-client', '99'),
(5, 'International Association', 'international-association', '99');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_contact`
--

CREATE TABLE `lwd_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_maps` text NOT NULL,
  `contact_fb` varchar(255) NOT NULL,
  `contact_yt` varchar(255) NOT NULL,
  `contact_tw` varchar(255) NOT NULL,
  `contact_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_contact`
--

INSERT INTO `lwd_contact` (`contact_id`, `contact_phone`, `contact_fax`, `contact_email`, `contact_address`, `contact_maps`, `contact_fb`, `contact_yt`, `contact_tw`, `contact_in`) VALUES
(1, '021 - 54381328', '021 - 54394828', 'info@your-web.com', 'Jl. Jembatan Batu No. 82 - 83\r\nPinangsia Jakarta 11110', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.4297126470617!2d106.70244424152723!3d-6.149574103835754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f812814e7aa7%3A0xf9b7032a017de8d3!2sMitra+Asia+Synergy.+PT!5e0!3m2!1sen!2sid!4v1524547293072" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'https://www.facebook.com/', 'http://youtube.com', 'https://www.twitter.com/', 'http://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_image`
--

CREATE TABLE `lwd_image` (
  `image_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image_parent_name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_seq` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_image`
--

INSERT INTO `lwd_image` (`image_id`, `parent_id`, `image_parent_name`, `image_name`, `image_seq`) VALUES
(1, 1, 'firm', '-1071.jpg', 0),
(2, 2, 'firm', '-3199.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lwd_info`
--

CREATE TABLE `lwd_info` (
  `info_id` int(11) NOT NULL,
  `catinfo_id` int(11) NOT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_desc` text NOT NULL,
  `info_pub` enum('88','99') NOT NULL DEFAULT '88' COMMENT '99 = publish',
  `info_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_info`
--

INSERT INTO `lwd_info` (`info_id`, `catinfo_id`, `info_name`, `info_desc`, `info_pub`, `info_image`) VALUES
(2, 1, 'aditya', '<p>asdsd</p>', '99', '');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_news`
--

CREATE TABLE `lwd_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` text NOT NULL,
  `news_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news_pub` enum('88','99') NOT NULL DEFAULT '88',
  `news_image` varchar(255) NOT NULL,
  `news_alt` varchar(255) NOT NULL,
  `news_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_seo`
--

CREATE TABLE `lwd_seo` (
  `seo_id` int(11) NOT NULL,
  `seo_page` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_seo`
--

INSERT INTO `lwd_seo` (`seo_id`, `seo_page`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES
(1, 'company', 'Company', 'company keyword', 'company desc'),
(2, 'product', 'Product', 'product keyword', 'product desc'),
(3, 'news', 'News', 'berita, news, mitra asia', 'description'),
(4, 'contact-us', 'Contact Us', 'contact us keyword', 'contact us desc'),
(5, 'our-distribution', 'Our Distribution', 'Distribution Mitra Asia', 'description'),
(6, 'brand-history', 'Brand History', 'Brand, mitra asia, history', 'description'),
(7, 'manufacture', 'Manufacture', 'manufaktur, manufacure, mitra asia', 'description'),
(8, 'services', 'Services', 'layanan, service, mitra asia', 'description'),
(9, 'event', 'Event', 'event, acara, mitra asia', 'description'),
(10, 'video', 'Video', 'video mitra asia', 'description');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_services`
--

CREATE TABLE `lwd_services` (
  `services_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_desc` text NOT NULL,
  `services_alt` varchar(255) NOT NULL COMMENT 'alt untuk gambar',
  `services_pub` enum('88','99') NOT NULL COMMENT '99 = publish',
  `services_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_site`
--

CREATE TABLE `lwd_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_desc` text NOT NULL,
  `site_keyword` text NOT NULL,
  `site_favicon` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_site`
--

INSERT INTO `lwd_site` (`site_id`, `site_name`, `site_title`, `site_desc`, `site_keyword`, `site_favicon`, `site_logo`, `site_email`) VALUES
(1, 'Mitra Asia', 'Mitra Asia', 'mitra asia', 'mitra asia', '', '', 'aditlawave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lwd_text`
--

CREATE TABLE `lwd_text` (
  `text_id` int(8) NOT NULL,
  `text_footer` text NOT NULL,
  `text_service` text NOT NULL,
  `text_home` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lwd_user`
--

CREATE TABLE `lwd_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_level` enum('owner','admin','user') NOT NULL DEFAULT 'owner',
  `user_status` enum('active','block') NOT NULL DEFAULT 'active',
  `user_image` varchar(255) NOT NULL,
  `user_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lwd_user`
--

INSERT INTO `lwd_user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_email`, `user_level`, `user_status`, `user_image`, `user_session`) VALUES
(1, 'admin', '074c0845506eb57dfbc3ef6dfdf3a3d48251871c', 'admin', 'admin@email.com', 'admin', 'active', '', '3eb96e4775d7fb40889013e778b5a09d428ec820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lwd_banner`
--
ALTER TABLE `lwd_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `lwd_category`
--
ALTER TABLE `lwd_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `lwd_catinfo`
--
ALTER TABLE `lwd_catinfo`
  ADD PRIMARY KEY (`catinfo_id`);

--
-- Indexes for table `lwd_contact`
--
ALTER TABLE `lwd_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `lwd_image`
--
ALTER TABLE `lwd_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `lwd_info`
--
ALTER TABLE `lwd_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `lwd_news`
--
ALTER TABLE `lwd_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `article_id` (`news_id`),
  ADD KEY `article_id_2` (`news_id`);

--
-- Indexes for table `lwd_seo`
--
ALTER TABLE `lwd_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `lwd_services`
--
ALTER TABLE `lwd_services`
  ADD PRIMARY KEY (`services_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `lwd_site`
--
ALTER TABLE `lwd_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `lwd_text`
--
ALTER TABLE `lwd_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `lwd_user`
--
ALTER TABLE `lwd_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lwd_banner`
--
ALTER TABLE `lwd_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lwd_category`
--
ALTER TABLE `lwd_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lwd_catinfo`
--
ALTER TABLE `lwd_catinfo`
  MODIFY `catinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lwd_contact`
--
ALTER TABLE `lwd_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lwd_image`
--
ALTER TABLE `lwd_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lwd_info`
--
ALTER TABLE `lwd_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lwd_news`
--
ALTER TABLE `lwd_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lwd_seo`
--
ALTER TABLE `lwd_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lwd_services`
--
ALTER TABLE `lwd_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lwd_text`
--
ALTER TABLE `lwd_text`
  MODIFY `text_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lwd_user`
--
ALTER TABLE `lwd_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
