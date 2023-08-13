-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 22 Şub 2022, 23:25:00
-- Sunucu sürümü: 10.3.34-MariaDB
-- PHP Sürümü: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `millibir_sgbilisim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `sira` int(11) NOT NULL,
  `tarih` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ebulten`
--

CREATE TABLE `ebulten` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `ebulten`
--

INSERT INTO `ebulten` (`id`, `email`, `firstname`, `lastname`) VALUES
(4, 'sametertenyb@gmail.com', 'Samet', 'Erten'),
(5, 'sametertenyb@gmail.com', 'Samet', 'Erten'),
(6, 'sametertenrryb@gmail.com', 'Samet', 'Erten'),
(7, 'asdasd@sad.com', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gonullulist`
--

CREATE TABLE `gonullulist` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tckimlik` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL,
  `icerik` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `referans` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `sira` int(11) NOT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `haberler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `iletisim`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilsiteleri`
--

CREATE TABLE `ilsiteleri` (
  `id` int(11) NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `altalanadi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `ilsiteleri`
--

INSERT INTO `ilsiteleri` (`id`, `sehir`, `altalanadi`, `aktif`) VALUES
(1, 'Ankara', 'ankara.localhost', 0),
(2, 'istanbul', 'istanbul.localhost', 0),
(3, 'aydin', 'aydin.localhost', 0),
(4, 'izmir', 'izmir.localhost', 0),
(5, 'balıkesir', 'balıkesir.localhost', 0),
(6, 'canakkale', 'canakkale.localhost', 0),
(7, 'edirne', 'edirne.localhost', 0),
(8, 'kirklareli', 'kirklareli.localhost', 0),
(9, 'tekirdag', 'tekirdag.localhost', 0),
(10, 'bilecik', 'bilecik.localhost', 0),
(11, 'bursa', 'bursa.localhost', 0),
(12, 'kocaeli', 'kocaeli.localhost', 0),
(13, 'sakarya', 'sakarya.localhost', 0),
(14, 'bolu', 'bolu.localhost', 0),
(15, 'eskisehir', 'eskisehir.localhost', 0),
(16, 'kastamonu', 'kastamonu.localhost', 0),
(17, 'antalya', 'antalya.localhost', 0),
(18, 'afyonkarahisar', 'afyonkarahisar.localhost', 0),
(19, 'burdur', 'burdur.localhost', 0),
(20, 'denizli', 'denizli.localhost', 0),
(21, 'isparta', 'isparta.localhost', 0),
(22, 'kutahya', 'kutahya.localhost', 0),
(23, 'manisa', 'manisa.localhost', 0),
(24, 'mugla', 'mugla.localhost', 0),
(25, 'adiyaman', 'adiyaman.localhost', 0),
(26, 'elazıg', 'elazıg.localhost', 0),
(27, 'kmaras', 'kmaras.localhost', 0),
(28, 'malatya', 'malatya.localhost', 0),
(29, 'mersin', 'mersin.localhost', 0),
(30, 'kirsehir', 'kirsehir.localhost', 0),
(31, 'kayseri', 'kayseri.localhost', 0),
(32, 'nevsehir', 'nevsehir.localhost', 0),
(33, 'hatay', 'hatay.localhost', 0),
(34, 'amasya', 'amasya.localhost', 0),
(35, 'corum', 'corum.localhost', 0),
(36, 'giresun', 'giresun.localhost', 0),
(37, 'ordu', 'ordu.localhost', 0),
(38, 'sinop', 'sinop.localhost', 0),
(39, 'sivas', 'sivas.localhost', 0),
(40, 'samsun', 'samsun.localhost', 0),
(41, 'tokat', 'tokat.localhost', 0),
(42, 'artvin', 'artvin.localhost', 0),
(43, 'erzurum', 'erzurum.localhost', 0),
(44, 'erzincan', 'erzincan.localhost', 0),
(45, 'rize', 'rize.localhost', 0),
(46, 'trabzon', 'trabzon.localhost', 0),
(47, 'agri', 'agri.localhost', 0),
(48, 'bingol', 'bingol.localhost', 0),
(49, 'diyarbakir', 'diyarbakir.localhost', 0),
(50, 'mus', 'mus.localhost', 0),
(51, 'bitlis', 'bitlis.localhost', 0),
(52, 'cankiri', 'cankiri.localhost', 0),
(53, 'zonguldak', 'zonguldak.localhost', 0),
(54, 'konya', 'konya.localhost', 0),
(55, 'karaman', 'karaman.localhost', 0),
(56, 'usak', 'usak.localhost', 0),
(57, 'gaziantep', 'gaziantep.localhost', 0),
(58, 'sanliurfa', 'sanlıurfa.localhost', 0),
(59, 'adana', 'adana.localhost', 0),
(60, 'kirikkale', 'kirirkkale.localhost', 0),
(61, 'nigde', 'nigde.localhost', 0),
(62, 'aksaray', 'aksaray.localhost', 0),
(63, 'yozgat', 'yozgat.localhost', 0),
(64, 'gümüshane', 'gümüshane.localhost', 0),
(65, 'bayburt', 'bayburt.localhost', 0),
(66, 'kars', 'kars.localhost', 0),
(67, 'mardin', 'mardin.localhost', 0),
(68, 'batman', 'batman.localhost', 0),
(69, 'siirt', 'siirt.localhost', 0),
(70, 'sirnak', 'sirnak.localhost', 0),
(71, 'tunceli', 'tunceli.localhost', 0),
(72, 'hakkari', 'hakkari.localhost', 0),
(73, 'van', 'van.localhost', 0),
(74, 'ardahan', 'ardahan.localhost', 0),
(75, 'igdir', 'igdir.localhost', 0),
(76, 'kilis', 'kilis.localhost', 0),
(77, 'osmaniye', 'osmaniye.localhost', 0),
(78, 'yalova', 'yalova.localhost', 0),
(79, 'duzce', 'duzce.localhost', 0),
(80, 'karabuk', 'karabuk.localhost', 0),
(81, 'bartin', 'bartin.localhost', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayan`
--

CREATE TABLE `kayan` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `kayan`
--

INSERT INTO `kayan` (`id`, `foto`, `baslik`, `ustBaslik`, `icerik`, `aktif`, `sira`) VALUES
(1, 'anakay2.png', 'resim aciklama 3', 'resim baslik 3', '', 0, 0),
(2, 'anakay1.png', 'Resim Açıklama', 'Resim Baslik1', '', 0, 0),
(3, 'anakay3.png', 'resim aciklama 2', 'resim baslik 2', '', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` char(50) NOT NULL,
  `parola` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Tablo döküm verisi `kullanicilar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayac_ip`
--

CREATE TABLE `sayac_ip` (
  `id` int(11) NOT NULL,
  `tarih` date DEFAULT NULL,
  `tiklama` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayac_online`
--

CREATE TABLE `sayac_online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelist`
--

CREATE TABLE `uyelist` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tckimlik` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `referans` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL,
  `icerik` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `sira` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `yonetim`
--

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `ebulten`
--
ALTER TABLE `ebulten`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `gonullulist`
--
ALTER TABLE `gonullulist`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `ilsiteleri`
--
ALTER TABLE `ilsiteleri`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `kayan`
--
ALTER TABLE `kayan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `sayac_ip`
--
ALTER TABLE `sayac_ip`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `sayac_online`
--
ALTER TABLE `sayac_online`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `uyelist`
--
ALTER TABLE `uyelist`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `ebulten`
--
ALTER TABLE `ebulten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `gonullulist`
--
ALTER TABLE `gonullulist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `ilsiteleri`
--
ALTER TABLE `ilsiteleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `kayan`
--
ALTER TABLE `kayan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `sayac_ip`
--
ALTER TABLE `sayac_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sayac_online`
--
ALTER TABLE `sayac_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyelist`
--
ALTER TABLE `uyelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `yonetim`
--
ALTER TABLE `yonetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
