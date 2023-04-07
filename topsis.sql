-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `nama` varchar(45) NOT NULL,
  `nilai` varchar(45) NOT NULL,
  `id_hp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`nama`, `nilai`, `id_hp`) VALUES
('POCO M4 pro (6GB+128GB)', '0', '1'),
('Realme C33 (4GB+64GB)', '1', '2'),
('Realme C30 (4GB+64GB)', '1', '3'),
('Realme C35 (4GB+128GB)', '0.5', '4'),
('Realme C33 (4GB+64GB)', '1', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hp`
--

CREATE TABLE `tb_hp` (
  `id_hp` int(5) NOT NULL,
  `nama_hp` varchar(45) NOT NULL,
  `harga_hp` int(45) NOT NULL,
  `ram_hp` int(45) NOT NULL,
  `rom_hp` int(45) NOT NULL,
  `procesor_hp` varchar(100) NOT NULL,
  `rank_pro` varchar(10) NOT NULL,
  `kamdpn_hp` int(45) NOT NULL,
  `kamblkg_hp` int(45) NOT NULL,
  `batrai_hp` int(45) NOT NULL,
  `os_hp` varchar(45) NOT NULL,
  `layar_hp` varchar(45) NOT NULL,
  `link_hp` varchar(100) NOT NULL,
  `warna_hp` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hp`
--

INSERT INTO `tb_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `rom_hp`, `procesor_hp`, `rank_pro`, `kamdpn_hp`, `kamblkg_hp`, `batrai_hp`, `os_hp`, `layar_hp`, `link_hp`, `warna_hp`, `foto`) VALUES
(18, 'Redmi 10 5G (4GB+128GB)', 2599000, 4, 128, 'Dimensity 700', 'C', 5, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_10_5g-11425.php', 'Hitam, Putih, Hijau', 'xiaomi-redmi-10-5g-1.jpg'),
(19, 'Redmi 10 5G (6GB+128GB)', 2799000, 6, 128, 'Dimensity 700', 'C', 5, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_10_5g-11425.php', 'Hitam, Putih', 'xiaomi-redmi-10-5g-1.jpg'),
(20, 'Redmi note 11 (6GB+128GB)', 2799000, 6, 128, 'Snapdragon 680', 'C', 13, 50, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_11-11336.php', 'Hitam, Biru', 'xiaomi-redmi-note-11-global-1.jpg'),
(21, 'Redmi note 11 pro (6GB+64GB)', 3599000, 6, 64, 'Helio G96', 'C', 16, 108, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_11_pro-11334.php', 'Hitam, Putih, Hijau', 'xiaomi-redmi-note-11-pro-global-0.jpg'),
(22, 'Redmi note 11 pro 5G(8GB+128GB)', 3899000, 8, 128, 'Snapdragon 695', 'C', 16, 108, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_11_pro_5g-11333.php', 'Hitam, Putih, Biru', 'xiaomi-redmi-note-11-pro-global-0.jpg'),
(23, 'Redmi note 10 5G (4GB+128GB)', 2599000, 4, 128, 'Dimensity 700', 'C', 8, 48, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_10_5g-10768.php', 'Putih, Biru, Hijau', 'xiaomi-redmi-note10-5g-0.jpg'),
(24, 'Redmi note 10 5G (6GB+128GB)', 2899000, 6, 128, 'Dimensity 700', 'C', 8, 48, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_10_5g-10768.php', 'Putih, Biru', 'xiaomi-redmi-note10-5g-0.jpg'),
(25, 'Redmi note 10 pro (6GB+128GB)', 3499000, 6, 128, 'Snapdragon 732G', 'C', 16, 108, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_redmi_note_10_pro-10662.php', 'Hitam, Biru, Kuning', 'xiaomi-redmi-note10-pro-1.jpg'),
(26, 'Redmi 9A (2GB+32GB)', 1199000, 2, 32, 'Helio G25', 'D', 5, 13, 5000, '10', 'HD+', 'https://www.gsmarena.com/xiaomi_redmi_9a-10279.php', 'Hitam, Biru, Hijau', 'redmi-9a-01.jpg'),
(27, 'Redmi 9C (4GB+64GB)', 1549000, 4, 64, 'Helio G35', 'D', 5, 13, 5000, '10', 'HD+', 'https://www.gsmarena.com/xiaomi_redmi_9c-10278.php', 'Hitam, Biru', 'xiaomi-redmi-9c-1.jpg'),
(28, 'POCO M4 pro (6GB+128GB)', 2999000, 6, 128, 'Helio G96', 'C', 16, 64, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_poco_m4_pro-11388.php', 'Hitam, Biru, Kuning', 'xiaomi-poco-m4-pro-4g-3.jpg'),
(29, 'POCO M4 pro (8GB+256GB)', 3499000, 8, 256, 'Helio G96', 'C', 16, 64, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/xiaomi_poco_m4_pro-11388.php', 'Hitam, Biru, Kuning', 'xiaomi-poco-m4-pro-4g-3.jpg'),
(30, 'POCO F4 (6GB+128GB)', 5199000, 6, 128, 'Snapdragon 870 5G', 'B', 20, 64, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_poco_f4-11627.php', 'Hitam, Putih', 'xiaomi-poco-f4-5g-2.jpg'),
(31, 'POCO F4 GT (12GB+256GB)', 8999000, 12, 256, 'Snapdragon 8 Gen 1', 'A+', 20, 64, 4700, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_poco_f4_gt-11479.php', 'Hitam, Kuning', 'xiaomi-poco-f4-gt-1.jpg'),
(32, 'Xiaomi 12 lite (8GB+256GB)', 5799000, 8, 256, 'Snapdragon 778G', 'B', 32, 108, 4300, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_12_lite-11472.php', 'Hitam, Pink', 'xiaomi-12-lite-1.jpg'),
(33, 'Xiaomi 12 (8GB+256GB)', 8999000, 8, 256, 'Snapdragon 8 Gen 1', 'A+', 32, 150, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_12-11285.php', 'Hitam, Biru, Ungu', 'xiaomi-12-1.jpg'),
(34, 'Xiaomi 12 pro (12GB+256GB)', 12999000, 12, 256, 'Snapdragon 8 Gen 1', 'A+', 32, 150, 4600, '12', 'Full HD+', 'https://www.gsmarena.com/xiaomi_12_pro-pictures-11287.php', 'Hitam, Biru, Ungu', 'xiaomi-12-1.jpg'),
(35, 'VIVO V25 (8GB+256GB)', 5999000, 8, 256, 'Dimensity 900', 'C', 50, 64, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/vivo_v25-11772.php', 'Hitam, Biru, Kuning', 'vivo-x80-lite-0.jpg'),
(36, 'VIVO V25e (8GB+128GB)', 3999000, 8, 128, 'Helio G99', 'C', 32, 64, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/vivo_v25e-11833.php', 'Hitam, Kuning', 'vivo-v25e-1.jpg'),
(37, 'VIVO Y01 (2GB+32GB)', 1399000, 2, 32, 'Helio P35 ', 'D', 5, 13, 5000, '11', 'HD+', 'https://www.gsmarena.com/vivo_y01-11413.php', 'Hitam, Biru', 'vivo-y01-1.jpg'),
(38, 'VIVO Y16 (4GB+32GB)', 1799000, 4, 32, 'Helio P35', 'D', 5, 13, 5000, '12', 'HD+', 'https://www.gsmarena.com/vivo_y16-11874.php', 'Hitam, Kuning', 'vivo-y16-1.jpg'),
(39, 'VIVO Y22 (4GB+64GB)', 2399000, 4, 64, 'Helio G85', 'C', 8, 50, 5000, '12', 'HD+', 'https://www.gsmarena.com/vivo_y22-11852.php', 'Hitam, Biru', 'vivo-y22-2022-1.jpg'),
(40, 'VIVO Y22 (6GB+128GB)', 2999000, 6, 128, 'Helio G85', 'C', 8, 50, 5000, '12', 'HD+', 'https://www.gsmarena.com/vivo_y22-11852.php', 'Hitam, Kuning', 'vivo-y22-2022-1.jpg'),
(41, 'VIVO Y35 5G (8GB+128GB)', 3399000, 8, 128, 'Dimensity 700', 'C', 5, 13, 5000, '13', 'Full HD+', 'https://www.gsmarena.com/vivo_y35_5g-12019.php', 'Hitam, Biru, Pink', 'vivo-y35-5g-1.jpg'),
(42, 'Samsung Galaxy A23 (6GB+128GB)', 3299000, 6, 128, 'Snapdragon 680', 'C', 8, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_a23-11373.php', 'Hitam, Putih, Biru, Pink', 'samsung-galaxy-a23-1.jpg'),
(43, 'Samsung Galaxy A13 (6GB+128GB)', 2699000, 6, 128, 'Exynos 850', 'D', 8, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_a13-11402.php', 'Hitam, Putih, Pink', 'samsung-galaxy-a13-1.jpg'),
(44, 'Samsung Galaxy A33 (8GB+128GB)', 4799000, 8, 128, 'Exynos 1280', 'C', 13, 48, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_a33_5g-11429.php', 'Hitam, Putih, Biru, Pink', 'samsung-galaxy-a33-5g-1.jpg'),
(45, 'Samsung Galaxy A33 (8GB+256GB)', 5299000, 8, 256, 'Exynos 1280', 'C', 13, 48, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_a33_5g-11429.php', 'Hitam, Putih, Pink', 'samsung-galaxy-a33-5g-1.jpg'),
(46, 'Samsung Galaxy A73 (8GB+256GB)', 7799000, 8, 256, 'Snapdragon 778G', 'B', 32, 108, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_a73_5g-11257.php', 'Hitam, Putih, Biru', 'samsung-galaxy-a73-5g-1.jpg'),
(47, 'Samsung Galaxy A03 (4GB+64GB)', 1699000, 4, 64, 'Unisoc T606', 'Tidak Ada', 5, 48, 5000, '11', 'HD', 'https://www.gsmarena.com/samsung_galaxy_a03-11244.php', 'Hitam, Merah, Biru', 'samsung-galaxy-a03-1.jpg'),
(48, 'Samsung Galaxy A03 Core (2GB+32GB)', 1249000, 2, 32, 'Unisoc SC9863A', 'Tidak Ada', 5, 8, 5000, '11', 'HD+', 'https://www.gsmarena.com/samsung_galaxy_a03_core-11215.php', 'Hitam, Biru', 'samsung-galaxy-a03-core-1.jpg'),
(49, 'Samsung Galaxy A03s (4GB+32GB)', 1499000, 4, 32, 'Helio P35', 'D', 5, 13, 5000, '12', 'HD+', 'https://www.gsmarena.com/samsung_galaxy_a03s-10937.php', 'Hitam, Putih, Biru', 'samsung-galaxy-a03s-00.jpg'),
(50, 'Samsung Galaxy S22 5G (8GB+256GB)', 12499000, 8, 256, 'Snapdragon 8 Gen 1', 'A+', 10, 50, 3700, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_s22_5g-11253.php', 'Hitam, Putih, Pink', 'samsung-galaxy-s22-5g-2.jpg'),
(51, 'Samsung Galaxy S21 FE 5G (8GB+256GB)', 9999000, 8, 256, 'Exynos 2100', 'A', 32, 12, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/samsung_galaxy_s21_fe_5g-10954.php', 'Hitam, Putih, Ungu', 'samsung-galaxy-s21-fe-5g-1.jpg'),
(52, 'Realme GT neo 3 (8GB+256GB)', 6999000, 8, 256, 'Dimensity 8100', 'A', 16, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/realme_gt_neo_3-11436.php', 'Hitam, Biru', 'realme-gt-neo3-0.jpg'),
(53, 'Realme 9i (6GB+128GB)', 2899000, 6, 128, 'Snapdragon 680', 'C', 16, 50, 5000, '11', 'Full HD+', 'https://www.gsmarena.com/realme_9i-11259.php', 'Hitam, Biru', 'realme-9i-1.jpg'),
(54, 'Realme 9 (8GB+128GB)', 3399000, 8, 128, 'Snapdragon 695', 'C', 16, 50, 5000, '12', 'Full HD+', 'https://www.gsmarena.com/realme_9_5g-11514.php', 'Hitam, Putih', 'realme-9-5g-global-1.jpg'),
(55, 'Realme C35 (4GB+64GB)', 2299000, 4, 64, 'Unisoc Tiger T616', 'D', 8, 50, 5000, '11', 'Full HD', 'https://www.gsmarena.com/realme_c35-11353.php', 'Hitam, Putih', 'realme-c35-1.jpg'),
(56, 'Realme C35 (4GB+128GB)', 2499000, 4, 128, 'Unisoc Tiger T616', 'D', 8, 50, 5000, '11', 'Full HD', 'https://www.gsmarena.com/realme_c35-11353.php', 'Hitam, Putih', 'realme-c35-1.jpg'),
(57, 'Realme C33 (4GB+64GB)', 1799000, 4, 64, 'Unisoc Tiger T612', 'D', 5, 50, 5000, '12', 'HD+', 'https://www.gsmarena.com/realme_c33-pictures-11849.php', 'Hitam, Putih, Hijau', 'realme-c33-2.jpg'),
(58, 'Realme C30 (2GB+32GB)', 1299000, 2, 32, 'Unisoc Tiger T612', 'D', 5, 8, 5000, '11', 'HD', 'https://www.gsmarena.com/realme_c30-11621.php', 'Biru, Hijau', 'realme-c30-1.jpg'),
(59, 'Realme C30 (4GB+64GB)', 1599000, 4, 64, 'Unisoc Tiger T612', 'D', 5, 8, 5000, '11', 'HD', 'https://www.gsmarena.com/realme_c30-11621.php', 'Biru, Hijau', 'realme-c30-1.jpg'),
(60, 'OPPO Reno8 5G (8GB+256GB)', 7999000, 8, 256, 'Dimensity 1300', 'A', 32, 50, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/oppo_reno8-11684.php', 'Hitam', 'oppo-reno8-02.jpg'),
(61, 'OPPO Reno8 Z (8GB+256GB)', 5999000, 8, 256, 'Snapdragon 695 5G', 'C', 16, 64, 4500, '12', 'Full HD+', 'https://www.gsmarena.com/oppo_reno8_z-11735.php', 'Hitam, Kuning', 'reno8-z-5g-1.jpg'),
(62, 'Oppo A16K (4GB+64GB)', 2199000, 4, 64, 'Helio G35', 'D', 5, 13, 4230, '11', 'HD+', 'https://www.gsmarena.com/oppo_a16k-11200.php', 'Hitam, Biru', 'oppo-a16k-1.jpg'),
(63, 'Oppo A57 (4GB+64GB)', 2399000, 4, 64, 'Dimensity 810', 'C', 8, 13, 5000, '12', 'HD+', 'https://www.gsmarena.comsmarena.com/oppo_a57-11476.php', 'Hitam, Putih, Biru, Ungu', 'oppo-a57-5g-1.jpg'),
(64, 'Oppo A54 (6GB+128GB)', 2799000, 6, 128, 'Helio P35', 'D', 16, 13, 5000, '10', 'HD+', 'https://www.gsmarena.com/oppo_a54-10818.php', 'Hitam, Biru', 'oppo-a54-1.jpg'),
(65, 'Oppo A77s (8GB+128GB)', 3499000, 8, 128, 'Snapdragon 680 4G', 'C', 8, 50, 5000, '12', 'HD+', 'https://www.gsmarena.com/oppo_a77s-11907.php', 'Hitam', 'oppo-a77s-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hp_user`
--

CREATE TABLE `tb_hp_user` (
  `id_hp` int(11) NOT NULL,
  `nama_hp` varchar(255) NOT NULL,
  `harga_hp` int(64) NOT NULL,
  `ram_hp` int(45) NOT NULL,
  `rom_hp` int(64) NOT NULL,
  `procesor_hp` varchar(45) NOT NULL,
  `rank_pro` varchar(64) NOT NULL,
  `kamdpn_hp` int(64) NOT NULL,
  `kamblkg_hp` int(64) NOT NULL,
  `batrai_hp` int(64) NOT NULL,
  `os_hp` varchar(64) NOT NULL,
  `layar_hp` varchar(64) NOT NULL,
  `warna_hp` varchar(64) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hp_user`
--

INSERT INTO `tb_hp_user` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `rom_hp`, `procesor_hp`, `rank_pro`, `kamdpn_hp`, `kamblkg_hp`, `batrai_hp`, `os_hp`, `layar_hp`, `warna_hp`, `foto`) VALUES
(1, 'POCO M4 pro (6GB+128GB)', 2999000, 6, 128, 'Helio G96', 'C', 16, 64, 5000, '11', 'Full HD+', 'Biru', 'xiaomi-poco-m4-pro-4g-3.jpg'),
(2, 'Realme C33 (4GB+64GB)', 1799000, 4, 64, 'Unisoc Tiger T612', 'D', 5, 50, 5000, '12', 'HD+', 'Hijau', 'realme-c33-2.jpg'),
(3, 'Realme C30 (4GB+64GB)', 1599000, 4, 64, 'Unisoc Tiger T612', 'D', 5, 8, 5000, '11', 'HD', 'Biru', 'realme-c30-1.jpg'),
(4, 'Realme C35 (4GB+128GB)', 2499000, 4, 128, 'Unisoc Tiger T616', 'D', 8, 50, 5000, '11', 'Full HD', 'Hitam', 'realme-c35-1.jpg'),
(5, 'Realme C33 (4GB+64GB)', 1799000, 4, 64, 'Unisoc Tiger T612', 'D', 5, 50, 5000, '12', 'HD+', 'Hijau', 'realme-c33-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kriteria` varchar(45) NOT NULL,
  `kriteria2` varchar(45) NOT NULL,
  `bobot` varchar(10) NOT NULL,
  `atribut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama`, `kriteria`, `kriteria2`, `bobot`, `atribut`) VALUES
(1, 'ram_1', '2', '', '1', ''),
(2, 'ram_2', '4', '', '2', ''),
(3, 'ram_3', '6', '', '3', ''),
(4, 'ram_4', '8', '', '4', ''),
(5, 'ram_5', '12', '', '5', ''),
(6, 'rom_1', '16', '', '1', ''),
(7, 'rom_2', '32', '', '2', ''),
(8, 'rom_3', '64', '', '3', ''),
(9, 'rom_4', '128', '', '4', ''),
(10, 'rom_5', '256', '', '5', ''),
(11, 'pro_1', 'D', '', '1', ''),
(12, 'pro_2', 'C', '', '2', ''),
(13, 'pro_3', 'B', '', '3', ''),
(14, 'pro_4', 'A', '', '4', ''),
(15, 'pro_5', 'A+', '', '5', ''),
(16, 'layar_1', 'HD', '', '1', ''),
(17, 'layar_2', 'HD+', '', '2', ''),
(18, 'layar_3', 'Full HD', '', '3', ''),
(19, 'layar_4', 'Full HD+', '', '4', ''),
(20, 'layar_5', '4K', '', '5', ''),
(21, 'kamb_1', '<', '19', '1', ''),
(22, 'kamb_2', '20', '49', '2', ''),
(23, 'kamb_3', '50', '79', '3', ''),
(24, 'kamb_4', '80', '119', '4', ''),
(25, 'kamb_5', '>', '120', '5', ''),
(26, 'kamd_1', '<', '7', '1', ''),
(27, 'kamd_2', '8', '12', '2', ''),
(28, 'kamd_3', '13', '17', '3', ''),
(29, 'kamd_4', '18', '24', '4', ''),
(30, 'kamd_5', '>', '25', '5', ''),
(31, 'os_1', '9', '', '1', ''),
(32, 'os_2', '10', '', '2', ''),
(33, 'os_3', '11', '', '3', ''),
(34, 'os_4', '12', '', '4', ''),
(35, 'os_5', '13', '', '5', ''),
(36, 'bat_1', '<', '3999', '1', ''),
(37, 'bat_2', '4000', '4499', '2', ''),
(38, 'bat_3', '4500', '4999', '3', ''),
(39, 'bat_4', '5000', '5499', '4', ''),
(40, 'bat_5', '>', '5500', '5', ''),
(55, 'pro_6', 'Tidak Ada', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rekomendasi` varchar(45) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `harga` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `rom` varchar(45) NOT NULL,
  `procesor` varchar(45) NOT NULL,
  `kamb` varchar(45) NOT NULL,
  `kamd` varchar(45) NOT NULL,
  `batrai` varchar(45) NOT NULL,
  `os` varchar(45) NOT NULL,
  `layar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_warna`
--

CREATE TABLE `tb_warna` (
  `id_warna` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_warna`
--

INSERT INTO `tb_warna` (`id_warna`, `nama`, `keterangan`) VALUES
(1, 'Hitam', 'Populer'),
(2, 'Merah', 'Kurang'),
(3, 'Putih', 'Populer'),
(4, 'Biru', 'Sedang'),
(5, 'Kuning', 'Sedang'),
(10, 'Hijau', 'Sedang'),
(11, 'Pink', 'Kurang'),
(12, 'Ungu', 'Kurang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hp`
--
ALTER TABLE `tb_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `tb_hp_user`
--
ALTER TABLE `tb_hp_user`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `tb_warna`
--
ALTER TABLE `tb_warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_hp`
--
ALTER TABLE `tb_hp`
  MODIFY `id_hp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_hp_user`
--
ALTER TABLE `tb_hp_user`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_warna`
--
ALTER TABLE `tb_warna`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
