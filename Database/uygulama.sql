-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Şub 2020, 16:01:51
-- Sunucu sürümü: 10.3.16-MariaDB
-- PHP Sürümü: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygulama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `adSoyad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `adSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `meslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `egitim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `egitimTarihi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `egitim2` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `egitim2Tarihi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `mailadres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `id` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`adSoyad`, `meslek`, `hakkimda`, `resim`, `egitim`, `egitimTarihi`, `egitim2`, `egitim2Tarihi`, `telefon`, `mailadres`, `id`, `facebook`, `twitter`, `instagram`) VALUES
('Muhammet ', 'Bilgisayar Mühendisi', '\r\nWeb Tasarım (HTML, CSS, Javascript, Jquery, PHP) Mobil Uygulama(Android, Firebase, UML) alanları ile uğraşıyorum.', '', 'Cumhuriyet Üniversitesi Bilgisayar Mühendisliği', '', '', '', '', '', '100', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `mail` (`mail`,`mesaj`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
