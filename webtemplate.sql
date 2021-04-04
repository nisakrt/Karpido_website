-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 May 2020, 07:04:03
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webtemplate`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `usersurname` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mail` text NOT NULL,
  `Mesaj` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`ID`, `username`, `usersurname`, `date`, `mail`, `Mesaj`) VALUES
(5, 'FHS', 'SHS', '2020-05-12 20:49:57', 'furkan.sakaci@gmail.com', 'asdasdasdad');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UrunKodu` int(11) NOT NULL,
  `UrunAdi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Cinsiyet` text NOT NULL,
  `Renk` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Baslangic` int(11) NOT NULL,
  `Bitis` int(11) NOT NULL,
  `Kumas` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Fiyat` int(11) NOT NULL,
  `Konum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`ID`, `Tarih`, `UrunKodu`, `UrunAdi`, `Cinsiyet`, `Renk`, `Baslangic`, `Bitis`, `Kumas`, `Fiyat`, `Konum`) VALUES
(1, '2020-05-16 22:24:18', 1233123, 'asdasd', 'Erkek', 'Siyah', 0, 0, 'Keten', 12, 'disaridan_gelenler/IMG_20200314_140736.jpg'),
(2, '2020-05-16 22:39:56', 3404, 'Pantolon', 'Erkek', 'Siyah', 2, 6, 'Keten', 30, 'disaridan_gelenler/pexels-photo-981619.jpeg'),
(3, '2020-05-16 22:42:31', 3404, 'Pantolon', 'Erkek', 'Siyah', 2, 6, 'Keten', 30, 'disaridan_gelenler/etk1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
