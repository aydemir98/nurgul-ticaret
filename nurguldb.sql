-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 Ara 2023, 17:27:01
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nurguldb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `isim`, `username`, `password`) VALUES
(1, 'Nurgül Açıkgöz', 'nurgül', 'nrg123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_urun_su`
--

DROP TABLE IF EXISTS `tbl_urun_su`;
CREATE TABLE IF NOT EXISTS `tbl_urun_su` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `detay` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama1` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama2` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama3` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `tbl_urun_su`
--

INSERT INTO `tbl_urun_su` (`id`, `isim`, `fiyat`, `detay`, `aciklama1`, `aciklama2`, `aciklama3`) VALUES
(1, 'Damacana Su', 50, '19L', 'Ev / Mutfak', 'İş Yeri', 'Sebil'),
(2, 'Şişe Su\r\n', 15, '1,5L', 'Ev / Mutfak', 'İş Yeri', 'Büfe / Market'),
(3, 'Küçük Su\r\n', 50, '30x50cc', 'Cemiyetler', 'Toplantı', 'Ev');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_urun_tup`
--

DROP TABLE IF EXISTS `tbl_urun_tup`;
CREATE TABLE IF NOT EXISTS `tbl_urun_tup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `fiyat` float NOT NULL,
  `detay` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama1` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama2` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  `aciklama3` varchar(50) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `tbl_urun_tup`
--

INSERT INTO `tbl_urun_tup` (`id`, `isim`, `fiyat`, `detay`, `aciklama1`, `aciklama2`, `aciklama3`) VALUES
(1, 'Piknik Tüpü\r\n', 185, '2KG', 'Dış Mekan', 'Piknik / Mangal\r\n', 'Ev / Mutfak'),
(2, 'Mutfak Tüpü', 490, '12KG', 'Ev / Mutfak', 'Restoran / Fabrika', 'Piknik / Mangal'),
(3, 'Sanayi Tüpü', 650, '24KG', 'Sanayi / Fabrika', 'Kaynak İşleri', 'Büyük İşletmeler');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
