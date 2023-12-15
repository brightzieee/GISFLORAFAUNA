-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 04:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_flora_fauna`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) DEFAULT NULL,
  `ad_username` varchar(32) DEFAULT NULL,
  `ad_email` varchar(100) DEFAULT NULL,
  `ad_number_phone` varchar(13) DEFAULT NULL,
  `ad_password` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_area`
--

CREATE TABLE `tb_area` (
  `kk_id` int(11) NOT NULL,
  `kk_org_id` int(11) NOT NULL,
  `kk_abb_area` varchar(100) DEFAULT NULL,
  `kk_name_area` varchar(100) DEFAULT NULL,
  `kk_species` int(11) DEFAULT NULL,
  `kk_res_area` varchar(100) DEFAULT NULL,
  `kk_address` varchar(225) DEFAULT NULL,
  `kk_province` int(11) DEFAULT NULL,
  `kk_city` int(11) DEFAULT NULL,
  `kk_district` int(11) DEFAULT NULL,
  `kk_code` int(11) DEFAULT NULL,
  `kk_latitude` varchar(100) DEFAULT NULL,
  `kk_longitude` varchar(100) DEFAULT NULL,
  `kk_image` varchar(100) DEFAULT NULL,
  `kk_description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_city`
--

CREATE TABLE `tb_city` (
  `ci_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `ci_name_city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_district`
--

CREATE TABLE `tb_district` (
  `di_id` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `di_name_dis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_organism`
--

CREATE TABLE `tb_organism` (
  `or_id` int(11) NOT NULL,
  `or_kk_id` int(11) NOT NULL,
  `or_name_org` varchar(100) DEFAULT NULL,
  `or_name_latin` varchar(100) DEFAULT NULL,
  `or_type` varchar(100) DEFAULT NULL,
  `or_amount` int(11) DEFAULT NULL,
  `or_class` varchar(100) DEFAULT NULL,
  `or_insitu` varchar(100) DEFAULT NULL,
  `or_eksitu` varchar(100) DEFAULT NULL,
  `or_image` varchar(100) DEFAULT NULL,
  `or_description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE `tb_province` (
  `pr_id` int(11) NOT NULL,
  `pr_name_pro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `rp_id` int(11) NOT NULL,
  `rp_user_id` int(11) NOT NULL,
  `rp_name` varchar(50) DEFAULT NULL,
  `rp_email` varchar(100) DEFAULT NULL,
  `rp_number_phone` varchar(13) DEFAULT NULL,
  `rp_type_org` varchar(100) DEFAULT NULL,
  `rp_name_org` varchar(100) DEFAULT NULL,
  `rp_address` varchar(225) DEFAULT NULL,
  `rp_province` int(11) DEFAULT NULL,
  `rp_city` int(11) DEFAULT NULL,
  `rp_district` int(11) DEFAULT NULL,
  `rp_date` datetime DEFAULT NULL,
  `rp_image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(50) DEFAULT NULL,
  `us_username` varchar(32) DEFAULT NULL,
  `us_email` varchar(100) DEFAULT NULL,
  `us_jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `us_number_phone` varchar(13) DEFAULT NULL,
  `us_address` varchar(255) DEFAULT NULL,
  `us_password` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`kk_id`),
  ADD KEY `or_id` (`kk_org_id`),
  ADD KEY `kk_name_org_id` (`kk_org_id`),
  ADD KEY `kk_org_id` (`kk_org_id`),
  ADD KEY `kk_province` (`kk_province`,`kk_city`,`kk_district`),
  ADD KEY `kk_city` (`kk_city`),
  ADD KEY `kk_district` (`kk_district`);

--
-- Indexes for table `tb_city`
--
ALTER TABLE `tb_city`
  ADD PRIMARY KEY (`ci_id`),
  ADD KEY `pr_id` (`pr_id`);

--
-- Indexes for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`di_id`),
  ADD KEY `ci_id` (`ci_id`);

--
-- Indexes for table `tb_organism`
--
ALTER TABLE `tb_organism`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `kk_id` (`or_kk_id`),
  ADD KEY `or_name_area_id` (`or_kk_id`),
  ADD KEY `or_name_kk_id` (`or_kk_id`),
  ADD KEY `or_kk_id` (`or_kk_id`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`rp_id`),
  ADD KEY `us_id` (`rp_user_id`),
  ADD KEY `rp_province` (`rp_province`,`rp_city`,`rp_district`),
  ADD KEY `rp_user_id` (`rp_user_id`),
  ADD KEY `rp_city` (`rp_city`),
  ADD KEY `rp_district` (`rp_district`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `kk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_city`
--
ALTER TABLE `tb_city`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `di_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_organism`
--
ALTER TABLE `tb_organism`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `rp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_area`
--
ALTER TABLE `tb_area`
  ADD CONSTRAINT `tb_area_ibfk_1` FOREIGN KEY (`kk_province`) REFERENCES `tb_province` (`pr_id`),
  ADD CONSTRAINT `tb_area_ibfk_2` FOREIGN KEY (`kk_city`) REFERENCES `tb_city` (`ci_id`),
  ADD CONSTRAINT `tb_area_ibfk_3` FOREIGN KEY (`kk_district`) REFERENCES `tb_district` (`di_id`),
  ADD CONSTRAINT `tb_area_ibfk_4` FOREIGN KEY (`kk_org_id`) REFERENCES `tb_organism` (`or_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_city`
--
ALTER TABLE `tb_city`
  ADD CONSTRAINT `tb_city_ibfk_1` FOREIGN KEY (`pr_id`) REFERENCES `tb_province` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD CONSTRAINT `tb_district_ibfk_1` FOREIGN KEY (`ci_id`) REFERENCES `tb_city` (`ci_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_organism`
--
ALTER TABLE `tb_organism`
  ADD CONSTRAINT `tb_organism_ibfk_1` FOREIGN KEY (`or_kk_id`) REFERENCES `tb_area` (`kk_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD CONSTRAINT `tb_report_ibfk_1` FOREIGN KEY (`rp_user_id`) REFERENCES `tb_user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_report_ibfk_2` FOREIGN KEY (`rp_province`) REFERENCES `tb_province` (`pr_id`),
  ADD CONSTRAINT `tb_report_ibfk_3` FOREIGN KEY (`rp_city`) REFERENCES `tb_city` (`ci_id`),
  ADD CONSTRAINT `tb_report_ibfk_4` FOREIGN KEY (`rp_district`) REFERENCES `tb_district` (`di_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
