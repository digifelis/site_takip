-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Ara 2019, 15:46:57
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `site_takip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pcaccess`
--

CREATE TABLE IF NOT EXISTS `pcaccess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) COLLATE utf8_bin NOT NULL,
  `referer` longtext COLLATE utf8_bin NOT NULL,
  `first_seen` datetime NOT NULL,
  `last_seen` datetime NOT NULL,
  `site_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `pcaccess`
--

INSERT INTO `pcaccess` (`id`, `ip`, `referer`, `first_seen`, `last_seen`, `site_id`) VALUES
(1, '::1', 'http://localhost/site_takip/benim_kod/test.php', '2019-12-01 15:38:51', '2019-12-01 15:30:05', 1),
(2, '::1', 'http://localhost/site_takip/benim_kod/test.php', '2019-12-01 15:39:21', '2019-12-01 15:31:46', 1),
(3, 'UNKNOWN', '', '2019-12-01 15:39:33', '2019-12-01 15:39:33', 1),
(4, '::1', 'http://localhost/site_takip/benim_kod/test.php', '2019-12-01 15:40:01', '2019-12-01 15:32:46', 1),
(5, '::1', 'http://localhost/site_takip/benim_kod/test.php', '2019-12-01 15:43:06', '2019-12-01 15:46:35', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
