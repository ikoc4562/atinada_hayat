-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2020 at 02:09 AM
-- Server version: 10.2.26-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aikatalo_hostel`
--
CREATE DATABASE IF NOT EXISTS `aikatalo_hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aikatalo_hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `adminsayfa`
--

CREATE TABLE `adminsayfa` (
  `id` int(11) NOT NULL,
  `adi` text NOT NULL,
  `ustid` int(11) NOT NULL,
  `codeID` varchar(225) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(225) NOT NULL,
  `include` varchar(225) NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `kat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminsayfa`
--

INSERT INTO `adminsayfa` (`id`, `adi`, `ustid`, `codeID`, `link`, `icon`, `include`, `durum`, `tarih`, `kat`) VALUES
(11, 'Admin Sayfa', 0, 'A47E903A', '', 'fa-arrows', '', 0, '2014-06-22 16:03:42', 0),
(12, 'Sayfalar', 11, 'B828A1BC', '', 'fa-arrows', 'sayfa/admin/adminsayfa.php', 1, '2014-06-22 16:04:55', 0),
(24, 'Sayfalar', 23, '03BD2BA1', '', '', 'sayfa/icerik/sayfa.php', 1, '2014-06-23 06:19:17', 0),
(32, 'Sayfa Parçacıkları', 28, 'D2EFF768', '', '', 'sayfa/siteyonetimi/sayfaparcacigi.php', 1, '2014-07-01 05:23:20', 0),
(33, 'Yritys', 0, 'DB976F03', '', 'fa-gear', '', 1, '2014-07-02 02:44:29', 0),
(34, 'Yritystiedot', 33, '314A55E5', '', '', 'sayfa/Kurumsal/index.php', 1, '2014-07-02 02:46:01', 0),
(106, 'Admin Käyttäjä', 83, '4EDE1D29', '', '', 'sayfa/Users/admin.php', 1, '2019-12-20 15:04:37', 0),
(47, 'Huoneita Hallitus', 0, '5E46F4A6', '', 'fa-archive', '', 1, '2014-07-21 03:17:51', 0),
(48, 'Huoneita', 47, '5951760F', '', '', 'sayfa/Odalar/index.php', 1, '2014-07-21 03:18:39', 0),
(96, 'Menu', 95, '2539E0F9', '', '', 'sayfa/slider/index.php', 1, '2018-05-25 11:03:24', 0),
(95, 'Slider Hallitus', 0, '60B8B65C', '', 'fa-sign-in', '', 1, '2018-05-25 11:01:06', 0),
(77, 'Neuvoja ja viestejä', 0, 'CC3A483E', '', 'fa-envelope', '', 1, '2014-10-14 05:24:10', 0),
(78, 'Saapuvat viestit', 77, '31E247D7', '', '', 'sayfa/Oneri/index.php', 1, '2014-10-14 05:24:48', 0),
(83, 'Käyttäjät Hallitus', 0, 'CDB2FA2E', '', 'fa-bullhorn', 'sayfa/Users/index.php', 1, '2014-11-01 09:03:53', 0),
(84, 'Normalit Käyttäjät', 83, '4EDE1D28', '', '', 'sayfa/Users/index.php', 0, '2014-11-01 09:04:58', 0),
(107, 'Huoneet Typpi', 47, '5951760C', '', '', 'sayfa/Odatipleri/index.php', 1, '2020-01-02 14:25:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kurumsal`
--

CREATE TABLE `kurumsal` (
  `id` int(11) NOT NULL,
  `kat` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `baslik2` varchar(255) NOT NULL,
  `sira` int(11) NOT NULL,
  `icerik` longtext NOT NULL,
  `icerik_eng` longtext NOT NULL,
  `yonlendir` varchar(255) NOT NULL,
  `googlemap` varchar(1000) NOT NULL,
  `www` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `fotograf` varchar(255) NOT NULL,
  `fotograf2` varchar(255) NOT NULL,
  `fotograf3` varchar(255) NOT NULL,
  `fotograf4` varchar(255) NOT NULL,
  `fotograf5` varchar(255) NOT NULL,
  `fotograf6` varchar(255) NOT NULL,
  `fotograf7` varchar(255) NOT NULL,
  `fotograf8` varchar(255) NOT NULL,
  `fotograf9` varchar(255) NOT NULL,
  `fotograf10` varchar(255) NOT NULL,
  `anasayfa` int(11) NOT NULL,
  `aktif` int(11) NOT NULL,
  `ilk` int(11) NOT NULL,
  `gosterim` int(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurumsal`
--

INSERT INTO `kurumsal` (`id`, `kat`, `baslik`, `baslik2`, `sira`, `icerik`, `icerik_eng`, `yonlendir`, `googlemap`, `www`, `address`, `email`, `phone`, `facebook`, `instagram`, `twitter`, `fotograf`, `fotograf2`, `fotograf3`, `fotograf4`, `fotograf5`, `fotograf6`, `fotograf7`, `fotograf8`, `fotograf9`, `fotograf10`, `anasayfa`, `aktif`, `ilk`, `gosterim`) VALUES
(10, 0, 'Aikatalo Hostel Helsinki City Center', 'Tervetuloa Hostelliimme', 13, '<p>Aikatalon hostelli sijaitsee aivan Helsingin keskustassa, p&auml;&auml;rautatieaseman v&auml;litt&ouml;m&auml;ss&auml; l&auml;heisyydess&auml;, josta on hyv&auml;t yhteydet julkisia kulkuv&auml;lineit&auml; k&auml;ytt&auml;en mm. lentoasemalle ja muualle Suomeen sek&auml; Ven&auml;j&auml;lle. Matkaa ajallisesti rautatieasemalle k&auml;vellen on noin viisi minuuttia liikennevaloista riippuen. Hostellista voi varata yksityisen huoneen. Kylpyhuone- ja wc-tilat ovat yhteisk&auml;yt&ouml;ss&auml;. Hostellissa on my&ouml;s yhteinen oleskelutila, jossa on televisio, tietokonep&ouml;yti&auml; ja ruokailup&ouml;yt&auml; tuoleineen. Hostellissa on ilmastointi/viilennys ja ilmainen wifi.</p>\r\n', '', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.6722005025397!2d24.942439315530283!3d60.16960535040821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bcc3af5b0ab%3A0x8d5d0fcd912dfef9!2sMikonkatu%208%207.kerros%2C%2000100%20Helsinki!5e0!3m2!1sen!2sfi!4v1577917362149!5m2!1sen!2sfi', 'http://www.aikatalohostel.fi', 'Mikonkatu 8, 7.kerros, 00100 Helsinki, Finland', 'info@aikatalohostelhelsinkicitycenter.fi', '+358 44 491 8368', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 0, 1331);

-- --------------------------------------------------------

--
-- Table structure for table `kurumsaldosya`
--

CREATE TABLE `kurumsaldosya` (
  `id` int(11) NOT NULL,
  `kat` int(11) NOT NULL,
  `baslik` longtext NOT NULL,
  `baslik_eng` longtext NOT NULL,
  `sira` int(11) NOT NULL,
  `fotograf` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kurumsalgaleri`
--

CREATE TABLE `kurumsalgaleri` (
  `id` int(11) NOT NULL,
  `kat` int(11) NOT NULL,
  `baslik` longtext NOT NULL,
  `baslik_eng` varchar(255) DEFAULT NULL,
  `anasayfa` int(11) NOT NULL DEFAULT 0,
  `sira` int(11) NOT NULL,
  `fotograf` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurumsalgaleri`
--

INSERT INTO `kurumsalgaleri` (`id`, `kat`, `baslik`, `baslik_eng`, `anasayfa`, `sira`, `fotograf`, `aktif`) VALUES
(3, 10, 'Tervetuloa AikaTaloon2', NULL, 1, 1, '45121464d82e065.jpg', 1),
(6, 10, 'k1', '', 0, 2, '6ac2df4b93e3bc9.png', 1),
(7, 10, 'k2', '', 0, 3, 'd3d6449517c4990.png', 1),
(8, 10, 'k3', '', 0, 4, '84af895428e1181.png', 1),
(9, 10, 'k4', '', 0, 5, '301b2617aec5b6e.png', 1),
(10, 10, 'k5', '', 0, 6, 'c982ec19a49c8a4.png', 1),
(11, 10, 'k6', '', 0, 7, '349229ceec58eee.png', 1),
(12, 10, 'k7', '', 0, 8, '6d3bdb7ec4dab65.png', 1),
(13, 10, 'k8', '', 0, 9, 'e71f1ff489a0248.png', 1),
(14, 10, 'k9', '', 0, 10, '44191291845a829.png', 1),
(15, 10, 'k10', '', 0, 11, 'b37ebc082b1b328.png', 1),
(16, 10, 'k11', '', 0, 12, '772c22806fb5d90.png', 1),
(17, 10, 'k12', '', 0, 13, 'ae29864998dbe82.png', 1),
(18, 10, 'k13', '', 0, 14, 'c42777c3904bc33.png', 1),
(19, 10, 'k14', '', 0, 15, 'b9a33d9582b6582.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurumsalziyaret`
--

CREATE TABLE `kurumsalziyaret` (
  `id` int(50) NOT NULL,
  `ip` varchar(75) NOT NULL,
  `tarih` varchar(12) NOT NULL,
  `kat` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `odadolutarihleri`
--

CREATE TABLE `odadolutarihleri` (
  `id` int(11) NOT NULL,
  `odaid` int(11) NOT NULL,
  `tarih1` date NOT NULL,
  `tarih2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `odagaleri`
--

CREATE TABLE `odagaleri` (
  `id` int(11) NOT NULL,
  `kat` int(11) NOT NULL,
  `baslik` longtext NOT NULL,
  `sira` int(11) NOT NULL,
  `anaresim` int(11) NOT NULL,
  `fotograf` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odagaleri`
--

INSERT INTO `odagaleri` (`id`, `kat`, `baslik`, `sira`, `anaresim`, `fotograf`, `aktif`) VALUES
(71, 8, '', 27, 0, 'b9147f00d18f187.jpg', 1),
(70, 8, '', 26, 0, '8bad8874d729c5d.jpg', 1),
(45, 1, '', 1, 1, 'ad6063149b5537e.jpg', 1),
(46, 1, '', 2, 0, '697af82975ac9ad.jpg', 1),
(47, 1, '', 3, 0, 'c444ee7f8dbc7dd.jpg', 1),
(48, 1, '', 4, 0, '469fc0e77631b0a.jpg', 1),
(49, 2, '', 5, 0, '162c3694721d494.jpg', 1),
(50, 2, '', 6, 1, '8d3e77f5f062969.jpg', 1),
(51, 2, '', 7, 0, 'd648071548f8fd5.jpg', 1),
(52, 2, '', 8, 0, '67921d6385da868.jpg', 1),
(53, 3, '', 9, 1, 'dcab7b9e3b442b6.jpg', 1),
(54, 3, '', 10, 0, 'b503c3b7cddd83c.jpg', 1),
(55, 3, '', 11, 0, 'f32ff8b7aeaab1a.jpg', 1),
(56, 3, '', 12, 0, 'bbfae3e60aeac97.jpg', 1),
(57, 4, '', 13, 0, 'f4880f2d33e898e.jpg', 1),
(58, 4, '', 14, 1, '35568b5095a6817.jpg', 1),
(59, 4, '', 15, 0, 'c59da8158129b59.jpg', 1),
(60, 4, '', 16, 0, 'e444a2ec775145a.jpg', 1),
(61, 5, '', 17, 1, '2ac7d4cb474fc94.jpg', 1),
(62, 5, '', 18, 0, '22d5b4627341852.jpg', 1),
(63, 5, '', 19, 0, '29526348b0c1291.jpg', 1),
(64, 5, '', 20, 0, '7d4dca0e9963755.jpg', 1),
(65, 7, '', 21, 1, '0b38d921cb37056.jpg', 1),
(66, 7, '', 22, 0, '9447cb8eb36b7fb.jpg', 1),
(67, 7, '', 23, 0, '250e5708d0a8de1.jpg', 1),
(68, 7, '', 24, 0, 'dd2b7c171cf9e2b.jpg', 1),
(69, 8, '', 25, 1, '5eb41b082716089.jpg', 1),
(72, 8, '', 28, 0, '9adc11df368f61f.jpg', 1),
(73, 6, '', 29, 0, '7bd84f0f0fd77a8.jpg', 1),
(74, 6, '', 30, 1, '4773b92cfd9edfb.jpg', 1),
(75, 6, '', 31, 0, '4e4fa1e35213894.jpg', 1),
(76, 6, '', 32, 0, '07ff855a0d49e33.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `odalar`
--

CREATE TABLE `odalar` (
  `id` int(11) NOT NULL,
  `otid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT 1,
  `kat` int(11) DEFAULT 0,
  `sira` int(11) DEFAULT NULL,
  `manzara` varchar(255) DEFAULT NULL,
  `metrekare` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odalar`
--

INSERT INTO `odalar` (`id`, `otid`, `name`, `aktif`, `kat`, `sira`, `manzara`, `metrekare`) VALUES
(1, 8, 'Huone 1', 1, 0, NULL, 'Mikonkadulle', NULL),
(2, 2, 'Huone 2', 1, 0, NULL, 'Mikonkadulle', NULL),
(3, 3, 'Huone 3', 1, 0, NULL, 'Mikonkadulle', NULL),
(4, 4, 'Huone 6', 1, 0, NULL, NULL, NULL),
(5, 5, 'Huone 7', 1, 0, NULL, NULL, NULL),
(6, 6, 'Huone 9', 1, 0, NULL, NULL, NULL),
(12, 7, 'Huone 10', 1, 0, 7, NULL, NULL),
(13, 1, 'Huone 4', 1, 0, 8, 'Mikonkadulle', NULL),
(14, 1, 'Huone 5', 1, 0, 9, 'Mikonkadulle', NULL),
(15, 3, 'Huone 11', 1, 0, 10, NULL, NULL),
(16, 5, 'Huone 8', 1, 0, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `odatipleri`
--

CREATE TABLE `odatipleri` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fiyat` float DEFAULT NULL,
  `yetiskin` int(11) DEFAULT NULL,
  `cocuk` int(11) DEFAULT NULL,
  `yataksayisi` varchar(255) DEFAULT NULL,
  `aciklama` varchar(2000) DEFAULT NULL,
  `aktif` int(11) NOT NULL DEFAULT 1,
  `sira` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odatipleri`
--

INSERT INTO `odatipleri` (`id`, `name`, `fiyat`, `yetiskin`, `cocuk`, `yataksayisi`, `aciklama`, `aktif`, `sira`) VALUES
(1, 'Kahden hengen huone jossa on 2 erillistä sänkyä.', 99, 2, NULL, '2 erillistä vuodetta ', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(2, 'Viiden hengen huone jossa on 3 erillistä sänkyä sekä kerrossänky.', 149, 5, NULL, ' erillistä sänkyä sekä kerrossänky', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(3, 'Kolmen hengen huone jossa on 3 erillistä sänkyä.', 119, 3, NULL, '3 erillistä sänkyä', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(4, 'Neljän hengen huone jossa 2 erillistä sänkyä sekä soffasänky kahdelle.\r\n\r\n', 129, 4, NULL, '2 erillistä sänkyä sekä soffasänky kahdelle', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(5, '6 hengen huone jossa 2 erillistä sänkyä ja 2 kerrossänkyä.\r\n\r\n', 169, 6, NULL, 'erillistä sänkyä ja 2 kerrossänkyä', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(6, 'Viiden hengen huone jossa 1 erillinen sänky ja 2 kerrossänkyä.\r\n\r\n', 139, 5, NULL, '1 erillinen sänky ja 2 kerrossänkyä', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(7, 'Kuuden hengen huone jossa 2 erillistä sänkyä, soffasänky kahdelle sekä kerrossänky.\r\n\r\n', 169, 6, NULL, ' erillistä sänkyä, soffasänky kahdelle sekä kerrossänky', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL),
(8, 'Kahden hengen huone jossa on 2 erillistä sänkyä.', 99, 2, 0, '2 erillistä vuodetta ', '\r\n<p><input checked=\"checked\" name=\"a\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Suihku&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"d\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmastointi</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Jaettu kylpyhuone</p>\r\n\r\n<p><input checked=\"checked\" name=\"e\" type=\"checkbox\" value=\"e\" disabled>&nbsp;WC</p>\r\n\r\n<p><input checked=\"checked\" name=\"f\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Kokolattiamatto&nbsp;</p>\r\n\r\n<p><input checked=\"checked\" name=\"q\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Bidee</p>\r\n\r\n<p><input checked=\"checked\" name=\"w\" type=\"checkbox\" value=\"w\" disabled>&nbsp;Pyyhkeet</p>\r\n\r\n<p><input checked=\"checked\" name=\"g\" type=\"checkbox\" value=\"e\" disabled>&nbsp;Liinavaatteet</p>\r\n\r\n<p><input checked=\"checked\" name=\"h\" type=\"checkbox\" value=\"a\" disabled>&nbsp;Vaateteline</p>\r\n\r\n<p><input checked=\"checked\" name=\"s\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Ilmainen WiFi</p>\r\n\r\n<p><input name=\"x\" type=\"checkbox\" value=\"q\" disabled>&nbsp;Tupakointi </p>', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oneri`
--

CREATE TABLE `oneri` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) NOT NULL,
  `telefon` longtext DEFAULT NULL,
  `email` longtext NOT NULL,
  `aciklama` longtext NOT NULL,
  `tarih` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oneri`
--

INSERT INTO `oneri` (`id`, `adi`, `telefon`, `email`, `aciklama`, `tarih`, `aktif`) VALUES
(2, 'Ceyda Nil', '0504498686', 'info@aikatalohostelhelsinkicitycenter.fi', 'Kokemus viesti', '09-01-20 03:06:35pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siteayarlari`
--

CREATE TABLE `siteayarlari` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` longtext NOT NULL,
  `renk` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siteayarlari`
--

INSERT INTO `siteayarlari` (`id`, `title`, `description`, `keywords`, `renk`) VALUES
(1, 'Aikatalo', '', 'Aikatalo', ''),
(1, 'Aikatalo', '', 'Aikatalo', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `baslik2` varchar(255) NOT NULL,
  `fotograf` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL,
  `tarih` date DEFAULT NULL,
  `sira` int(11) NOT NULL,
  `kat` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `baslik`, `baslik2`, `fotograf`, `aktif`, `tarih`, `sira`, `kat`) VALUES
(137, 'Tervetuloa Aikatalo Hostelliin', 'Keskellä Helsinkiä', 'e2656b49726bce4.jpg', 1, '2019-12-15', 3, 0),
(138, 'Keskeinen sijainti', 'Tervetuloa meille!', '59497fd38d37f45.jpg', 1, '2019-12-15', -6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `adsoyad` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kullaniciadi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL,
  `kod` longtext NOT NULL,
  `online` varchar(255) NOT NULL,
  `statu` int(11) NOT NULL,
  `tarih` varchar(255) NOT NULL,
  `songiris` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `meslek` varchar(255) NOT NULL,
  `il` varchar(255) NOT NULL,
  `hakkinda` varchar(255) NOT NULL,
  `adres` varchar(1000) NOT NULL,
  `firma` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `adsoyad`, `telefon`, `email`, `kullaniciadi`, `sifre`, `aktif`, `kod`, `online`, `statu`, `tarih`, `songiris`, `resim`, `meslek`, `il`, `hakkinda`, `adres`, `firma`) VALUES
(19, 'Fatih Meriç KOÇ', '5061437933', 'fmkcnk@gmail.com', 'fmkcnk', 'fmkcnk', 1, '8239c7d06340d2660af8e80cc48fc4d42169aa677e37548a26e87f955a9b8220e43570b570c44231273a03ea2c1d963d061cf0cdd967569a881633272b133348', '', 1, '10-11-2014', '', '977dbae2a74cb2a.png', '', 'ANKARA', '1966 yilinda muzisyen bir ailenin cocugu olarak Corlu\' da dunyaya gelmistir. Klarnete 8 yasinda basladi.  Ortaokul ve liseyi Corlu\'da bitirdikten sonra Marmara Universitesi ogretim uyesi kemani Cafer Unal\'dan nota, usul, nazariyat dersleri aldi. Cesitli m', '', ''),
(566, '', '', 'qqq', 'qqq', 'qqq', 0, '4e55caffb7c2cd5402b9e636e517e0678ab2bad6e9f3699b269b0638d90440f112f1cd10f5dbca12ad8ea7d56a75dcd5efae18eb342564f4756c42f6b44bd352', '', 0, '01-07-2018', '', '', '', '', '', '', ''),
(567, '', '', 'fmk_2006@outlook.com', 'rrr', 'rrr', 1, '2c95ea2bb9729637d5a159432b483d65e249b0ce57137bdd07a8aa0dab1456f8b98591c859eb1e7bd692af15e95e4bb3c7402a02292f30d53d0a0f9604540e73', '', 0, '07-07-2018', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `codeID` varchar(50) DEFAULT NULL,
  `adsoyad` varchar(50) DEFAULT NULL,
  `eposta` varchar(50) DEFAULT NULL,
  `kayittarihi` text DEFAULT NULL,
  `songiristarihi` text DEFAULT NULL,
  `uyegrubu` varchar(30) DEFAULT NULL,
  `durum` int(11) DEFAULT NULL,
  `sifre` varchar(225) DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL,
  `dogumtarihi` varchar(30) DEFAULT NULL,
  `cinsiyet` varchar(20) DEFAULT NULL,
  `avatar` varchar(225) DEFAULT NULL,
  `telefon` varchar(225) DEFAULT NULL,
  `ceptelefonu` varchar(225) DEFAULT NULL,
  `ilid` int(11) DEFAULT NULL,
  `ulkeid` int(11) DEFAULT NULL,
  `tckimlik` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `codeID`, `adsoyad`, `eposta`, `kayittarihi`, `songiristarihi`, `uyegrubu`, `durum`, `sifre`, `groupID`, `dogumtarihi`, `cinsiyet`, `avatar`, `telefon`, `ceptelefonu`, `ilid`, `ulkeid`, `tckimlik`) VALUES
(2, '213124', 'Admin', 'Aikatalo', '', '', '', 1, 'c38d81b08b8b09610aadee4252e65a97febff245a8e089177ddd645d2e95d56b', 1, '09-09-1996', 'bayan', '', '', '', 1, 1, '12312431231234'),
(1, '', '', 'isakoc', '', '', '', 1, '85e0775376cb6e94bb9151a8d13b5ea7393899e1b4d177724d935d3c648d7d79', 0, '', '', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsayfa`
--
ALTER TABLE `adminsayfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurumsal`
--
ALTER TABLE `kurumsal`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kurumsalgaleri`
--
ALTER TABLE `kurumsalgaleri`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `odadolutarihleri`
--
ALTER TABLE `odadolutarihleri`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `odagaleri`
--
ALTER TABLE `odagaleri`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `odalar`
--
ALTER TABLE `odalar`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `odatipleri`
--
ALTER TABLE `odatipleri`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `oneri`
--
ALTER TABLE `oneri`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `uyeler`
--
ALTER TABLE `uyeler`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurumsal`
--
ALTER TABLE `kurumsal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kurumsalgaleri`
--
ALTER TABLE `kurumsalgaleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `odadolutarihleri`
--
ALTER TABLE `odadolutarihleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odagaleri`
--
ALTER TABLE `odagaleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `odalar`
--
ALTER TABLE `odalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `odatipleri`
--
ALTER TABLE `odatipleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oneri`
--
ALTER TABLE `oneri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;

--
-- AUTO_INCREMENT for table `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
