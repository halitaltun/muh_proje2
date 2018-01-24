-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Oca 2018, 20:10:47
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `notekle`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_notekle`
--

CREATE TABLE `tbl_notekle` (
  `not_id` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `not_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `not_icerik` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbl_notekle`
--

INSERT INTO `tbl_notekle` (`not_id`, `tarih`, `not_baslik`, `not_icerik`) VALUES
(1, '2017-12-29', 'deneme1', 'deneme not1'),
(3, '2017-12-29', 'deneme2', 'deneme not2'),
(7, '2018-01-20', 'deneme3', 'deneme not 3'),
(8, '2018-01-20', 'deneme4', 'deneme not 4'),
(9, '2018-01-24', 'deneme8', 'deneme not8'),
(16, '2018-01-01', 'not1', 'not içerik1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_notekle`
--
ALTER TABLE `tbl_notekle`
  ADD PRIMARY KEY (`not_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_notekle`
--
ALTER TABLE `tbl_notekle`
  MODIFY `not_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
