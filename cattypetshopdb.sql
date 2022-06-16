-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cattypetshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aboutus`
--

CREATE TABLE `tb_aboutus` (
  `id_aboutus` int(4) NOT NULL,
  `title_aboutus` varchar(80) DEFAULT NULL,
  `desc_aboutus` varchar(80) DEFAULT NULL,
  `img_aboutus` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aboutus`
--

INSERT INTO `tb_aboutus` (`id_aboutus`, `title_aboutus`, `desc_aboutus`, `img_aboutus`, `flag_active`) VALUES
(1, 'We are #1', 'Provided top service', 'download.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_coreval`
--

CREATE TABLE `tb_coreval` (
  `id_coreval` int(4) NOT NULL,
  `title_coreval` varchar(80) DEFAULT NULL,
  `desc_coreval` varchar(80) DEFAULT NULL,
  `src_coreval` longtext DEFAULT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active || 0=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_coreval`
--

INSERT INTO `tb_coreval` (`id_coreval`, `title_coreval`, `desc_coreval`, `src_coreval`, `flag_active`) VALUES
(1, 'Heart', 'Heart Lottie', 'https://assets3.lottiefiles.com/packages/lf20_bojn7fmw.json	      ', 1),
(2, 'Hello', 'Hello Lottie', 'https://assets3.lottiefiles.com/packages/lf20_eusamc.json	      ', 1),
(3, 'Courier', 'Courier send', '	      https://assets3.lottiefiles.com/packages/lf20_1nfsbmja.json', 1),
(4, 'Fireworks', 'Fireworks lottie', 'https://assets3.lottiefiles.com/packages/lf20_n9juuqmm.json	      ', 1),
(5, 'Sparks', 'Sparks lottie', 'https://assets3.lottiefiles.com/packages/lf20_qgclz5o0.json	      ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(4) NOT NULL,
  `img_gallery` longtext DEFAULT NULL,
  `alt_gallery` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active || 0=not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `img_gallery`, `alt_gallery`, `flag_active`) VALUES
(2, 'https://images.unsplash.com/photo-1602491453631-e2a5ad90a131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80', 'Tiger', 1),
(3, 'https://images.unsplash.com/photo-1484406566174-9da000fda645?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=689&q=80', 'Deer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(4) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `member_password` varchar(80) DEFAULT NULL,
  `priv_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Admin || 0=user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `first_name`, `last_name`, `email`, `member_password`, `priv_type`) VALUES
(1, 'Andrew Virya', 'Victorio', 'andrew@gmail.com', '12345', 1),
(2, 'Vincent George', 'Chandra', 'vincent@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(4) NOT NULL,
  `product_name` varchar(80) DEFAULT NULL,
  `product_desc` varchar(80) DEFAULT NULL,
  `product_price` varchar(10) DEFAULT NULL,
  `product_disc` varchar(10) DEFAULT NULL,
  `product_img` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active || 0=not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `product_name`, `product_desc`, `product_price`, `product_disc`, `product_img`, `flag_active`) VALUES
(1, 'Dog Food', 'Enak', '999', '10', 'W_2013_199.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(4) NOT NULL,
  `title_service` varchar(80) DEFAULT NULL,
  `img_service` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active || 0=not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id_service`, `title_service`, `img_service`, `flag_active`) VALUES
(1, 'Pet Grooming', 'default.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(4) NOT NULL,
  `title_video` varchar(80) DEFAULT NULL,
  `desc_video` longtext DEFAULT NULL,
  `file_video` varchar(80) DEFAULT NULL,
  `file_image` varchar(80) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1 COMMENT '1=active || 0=not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `title_video`, `desc_video`, `file_video`, `file_image`, `flag_active`) VALUES
(1, 'Rick Roll', 'Rick Morty Video', 'Rick Astley - Never Gonna Give You Up (Official Music Video).mp4', 'pexels-pixabay-60597.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  ADD PRIMARY KEY (`id_aboutus`);

--
-- Indexes for table `tb_coreval`
--
ALTER TABLE `tb_coreval`
  ADD PRIMARY KEY (`id_coreval`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`email`),
  ADD KEY `INDEX` (`id_member`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  MODIFY `id_aboutus` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_coreval`
--
ALTER TABLE `tb_coreval`
  MODIFY `id_coreval` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
