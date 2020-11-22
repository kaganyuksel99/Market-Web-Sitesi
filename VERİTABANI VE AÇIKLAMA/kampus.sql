-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Tem 2020, 17:40:33
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kampus`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `eklenen`
--

CREATE TABLE `eklenen` (
  `id` int(11) NOT NULL,
  `urun_adi` varchar(100) CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL,
  `tedarikci_adi` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `resim` varchar(300) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `eklenen`
--

INSERT INTO `eklenen` (`id`, `urun_adi`, `tedarikci_adi`, `stok`, `fiyat`, `resim`) VALUES
(1, 'Süt', '0', 150, 5, 'indir.jpg'),
(2, 'Süt', '0', 10, 5, 'indir.jpg'),
(3, 'Süt', 'Pınar', 100, 5, 'indir.jpg'),
(4, 'Çikolata', 'Ülker', 150, 2, 'indir.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icecekler`
--

CREATE TABLE `icecekler` (
  `id` int(11) NOT NULL,
  `isim` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(300) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `icecekler`
--

INSERT INTO `icecekler` (`id`, `isim`, `resim`, `fiyat`) VALUES
(1, 'Kola', 'kola.jpg', 7.00),
(2, 'Fuse Tea ', 'fuse.jpg', 6.00),
(3, 'İçim Karışık', 'msuyu.jpg', 4.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kozmetik`
--

CREATE TABLE `kozmetik` (
  `id` int(11) NOT NULL,
  `isim` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(300) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kozmetik`
--

INSERT INTO `kozmetik` (`id`, `isim`, `resim`, `fiyat`) VALUES
(1, 'Şampuan', 'sampuan.jpg', 15.00),
(2, 'Orjin Parfüm', 'parfum.jpg', 150.00),
(3, 'Ruj', 'ruj.jpg', 75.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `email`, `sifre`) VALUES
(1, 'asdadas@gmail.com', '123546'),
(2, 'asad@gmail.com', '2132465'),
(3, '1@1', '1'),
(4, '2@2', '2'),
(5, 'kaanyk07@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `evlilik` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `dogum_yeri` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `ad`, `sifre`, `evlilik`, `dogum_yeri`, `bolum`) VALUES
(1, 'kagan', '59', 'evli', 'Tekirdağ', 'Müdür'),
(2, 'yasin', '61', 'bekar', 'Trabzon', 'Müdür Yardımcısı'),
(3, 'burak', '57', 'bekar', 'Sinop', 'Depo Müdürü'),
(4, 'görkem', '59', 'bekar', 'Tekirdağ', 'İnsan Kaynakları'),
(5, 'tuna', '59', 'bekar', 'Tekirdağ', 'Doktor'),
(6, 'kerem', '25', 'bekar', 'Erzurum', 'Bilgi İşlem'),
(7, 'atakan', '25', 'bekar', 'Trabzon', 'Reyon Görevlisi'),
(8, 'mutlu', '31', 'bekar', 'Hatay', 'Reyon Görevlisi'),
(9, 'X Æ A-12', '1', 'bekar', 'USA', 'Temizlik Görevlisi'),
(10, 'messi', '61', 'evli', 'Arjantin', 'Spor Ürünleri Sorumlusu'),
(11, 'Kuzey Tekinoğlu', '8654', 'evli', 'İstanbul', 'Güvenlik'),
(12, 'Ezel Bayrakyar', '2', 'evli', 'İstanbul', 'Güvenlik'),
(13, 'Hüsamettin Kuruyemiş', '61', 'evli', 'Nijeya', 'Maskot'),
(15, 'xox@gmail.com', '123', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `ad_soyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres1` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sehir` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `posta_kodu` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ulke` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `ad_soyad`, `adres1`, `sehir`, `posta_kodu`, `ulke`) VALUES
(1, 'kağan yüksel', 'saşdlkaşdslk', 'reşadiye', '59', 'türkiye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sut`
--

CREATE TABLE `sut` (
  `id` int(11) NOT NULL,
  `isim` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(300) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sut`
--

INSERT INTO `sut` (`id`, `isim`, `resim`, `fiyat`) VALUES
(1, 'Süt', 'sut.jpg', 5.00),
(2, 'Peynir', 'peynir.jpg', 25.00),
(3, 'Kaşar', 'kasar.jpg', 15.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `isim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `isim`, `resim`, `fiyat`) VALUES
(1, 'elma', 'elm.jpg', 5.00),
(2, 'cilek', 'cilek.jpg', 15.00),
(3, 'biber', 'bober.jpg', 10.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `eklenen`
--
ALTER TABLE `eklenen`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icecekler`
--
ALTER TABLE `icecekler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kozmetik`
--
ALTER TABLE `kozmetik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `sut`
--
ALTER TABLE `sut`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `eklenen`
--
ALTER TABLE `eklenen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `icecekler`
--
ALTER TABLE `icecekler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kozmetik`
--
ALTER TABLE `kozmetik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sut`
--
ALTER TABLE `sut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
