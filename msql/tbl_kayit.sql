-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Oca 2018, 17:22:30
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
-- Veritabanı: `kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_kayit`
--

CREATE TABLE `tbl_kayit` (
  `kayit_id` int(11) NOT NULL,
  `ad` char(15) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` char(15) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbl_kayit`
--

INSERT INTO `tbl_kayit` (`kayit_id`, `ad`, `soyad`, `email`, `parola`) VALUES
(20, 'mehmet', 'ali', 'mehmet@ali', '12ewqed'),
(21, 'mustafa', 'veli', 'mustafa@veli', '123456'),
(22, 'halit', 'altun', 'halit@altun', 'halit'),
(23, 'ali', 'veli', 'ali@veli', 'a12345'),
(24, 'ad', 'asd', 'asda@aa', '213edf'),
(25, 'mehmet', 'deniz', 'mehmet@deniz', 'mehmet'),
(30, 'aaa', 'aaaa', 'aaaa@aaaa', '11111111'),
(31, 'fefs', 'retr', 'bbbb@bbbbb', '11111111'),
(32, 'ibrahim', 'dikmen', 'ibrahim@dikmen', '1234456667'),
(33, 'asdf', 'asdf', 'asdf@asdf', 'wer4321');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_kayit`
--
ALTER TABLE `tbl_kayit`
  ADD PRIMARY KEY (`kayit_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_kayit`
--
ALTER TABLE `tbl_kayit`
  MODIFY `kayit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
