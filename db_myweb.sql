-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2021 pada 07.30
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `pass`, `nama_lengkap`) VALUES
(1, 'dika', '123', 'baladika al-hariri'),
(2, 'bala', '222', 'baladika al-hariri'),
(3, 'admin', 'admin', 'admin mithlabs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) UNSIGNED NOT NULL,
  `foto_banner` varchar(100) NOT NULL,
  `slogan1_banner` varchar(50) NOT NULL,
  `slogan2_banner` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `foto_banner`, `slogan1_banner`, `slogan2_banner`) VALUES
(1, '1-cover.png', 'SELAMAT DATANG', 'Di Mithlabs'),
(2, '2-cover.png', 'TAS TREND TERBARU', 'Dengan model-model unik'),
(3, '3-cover.png', 'SEMUA ADA DISINI', 'Bisa untuk Pria dan Wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `desc_produk` text DEFAULT NULL,
  `label_produk` varchar(50) NOT NULL,
  `foto1_produk` varchar(100) NOT NULL,
  `foto2_produk` varchar(100) NOT NULL,
  `link_shoppe` varchar(512) DEFAULT NULL,
  `link_zalora` varchar(512) DEFAULT NULL,
  `link_blibli` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `desc_produk`, `label_produk`, `foto1_produk`, `foto2_produk`, `link_shoppe`, `link_zalora`, `link_blibli`) VALUES
(35, 'Gia Totes', '- Tote bag dengan ethnic patch sebagai statement\r\n- Warna hitam\r\n- Material satin\r\n- 1 kompartemen utama\r\n- Non adjustable strap', 'New', 'mithlabs_gia_totes_full01_p62ipc2u.jpg', 'b4e0e638dc363c806c2b52ecc3d053c0_tn.jpeg', 'https://shopee.co.id/Gia-Totes-i.27969180.9734743656', 'https://zalora.co.id/mithlabs-gia-totes-black-2645105.html?from=search', 'https://www.blibli.com/p/gia-totes/ps--MIS-60207-00082?ds=MIS-60207-00082-00001&source=BRAND_PAGE&sid=943e9fbba5e345f3&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00082'),
(36, 'Marine Saddle Bag', '', 'Trend', 'mithlabs_marine_saddle_bag_full05_eaduj108.jpg', 'mithlabs_marine_saddle_bag_full04_r1m0zq3i.jpg', 'https://shopee.co.id/Marine-Saddle-Bag-i.27969180.5161242950', 'https://www.zalora.co.id/mithlabs-marine-saddle-bag-red-grey-2479419.html?from=search', 'https://www.blibli.com/p/marine-saddle-bag/ps--MIS-60207-00005?ds=MIS-60207-00005-00001&source=BRAND_PAGE&sid=943e9fbba5e345f3&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00005'),
(37, 'Cotta Ethnic', '', 'Normal', 'mithlabs_cotta_ethnic_full01_lkh6pjf8.jpg', 'mithlabs_cotta_ethnic_full02_o3fynyvq.jpg', 'https://shopee.co.id/Cotta-Ethnic-Navy-i.27969180.9334744937', 'https://www.zalora.co.id/mithlabs-cotta-ethnic-navy-2645109.html', 'https://www.blibli.com/p/cotta-ethnic/ps--MIS-60207-00089?ds=MIS-60207-00089-00001&source=BRAND_PAGE&sid=943e9fbba5e345f3&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00089'),
(38, 'Zolia Bag Macra', '', 'New', 'mithlabs_zolia_bag_macra_full09_lw5pps2j.jpg', 'mithlabs_zolia_bag_macra_full08_r1f5jcu7.jpg', 'https://shopee.co.id/Zolia-Black-i.27969180.9915022913', 'https://www.zalora.co.id/macra-by-mithlabs-zolia-black-2527886.html?from=search', 'https://www.blibli.com/p/zolia-bag-macra/ps--MIS-60207-00015?ds=MIS-60207-00015-00002&source=BRAND_PAGE&sid=943e9fbba5e345f3&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00015'),
(39, 'Circe', '', 'Normal', 'mithlabs_circe_full11_c7lhrdwv.jpg', 'mithlabs_circe_full15_iim1v6nf.jpg', 'https://shopee.co.id/Circe-Grey-i.27969180.8414704021', 'https://www.zalora.co.id/mithlabs-circe-black-brown-2628675.html?from=search', 'https://www.blibli.com/p/circe/ps--MIS-60207-00066?ds=MIS-60207-00066-00001&source=BRAND_PAGE&sid=943e9fbba5e345f3&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00066'),
(40, 'Uma Bagguete Bag', '', 'Normal', 'mithlabs_uma_bagguete_bag_full16_qpbbtwm5.jpg', 'mithlabs_uma_bagguete_bag_full17_mnwjj60g.jpg', 'https://shopee.co.id/Uma-Baguette-Bag-Yelow-i.27969180.9615357955', 'https://www.zalora.co.id/mithlabs-uma-bagguete-bag-black-2298383.html?from=search', 'https://www.blibli.com/p/uma-bagguete-bag/ps--MIS-60207-00013?ds=MIS-60207-00013-00001&source=MERCHANT_PAGE&sid=be9613255206b659&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00013'),
(41, 'Yasmen Bag', '', 'New', 'mithlabs-macra-yasmeen-1.jpg', 'mithlabs-macra-by--9292-5887252-2.jpg', 'https://shopee.co.id/Yasmen-i.27969180.7359390160', 'https://www.zalora.co.id/macra-by-mithlabs-yasmen-purple-2527885.html?from=search', 'https://www.blibli.com/p/yasmen-bag/ps--MIS-60207-00084?ds=MIS-60207-00084-00001&source=MERCHANT_PAGE&sid=be9613255206b659&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00084'),
(42, 'Ganza Ethnic', '', 'Jangan Tampilkan', 'mithlabs_ganza_ethnic_full01_uizmbcgi.jpg', 'mithlabs_ganza_ethnic_full02_ldeq9yx5.jpg', 'https://shopee.co.id/Ganza-Pouch-i.27969180.8102234265', 'https://www.zalora.co.id/macra-by-mithlabs-ganza-red-2608145.html?from=search', 'https://www.blibli.com/p/ganza-ethnic/ps--MIS-60207-00092?ds=MIS-60207-00092-00001&source=MERCHANT_PAGE&sid=be9613255206b659&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00092'),
(43, 'Hemmy Bag', '', 'Normal', 'mithlabs_hemmy_bag_full06_g1ctszhg.jpg', 'mithlabs_hemmy_bag_full07_fr9qohnl.jpg', 'https://shopee.co.id/Hemmy-Bag-i.27969180.4654601163', 'https://www.zalora.co.id/macra-by-mithlabs-hemmy-bag-black-2527887.html', 'https://www.blibli.com/p/hemmy-bag/ps--MIS-60207-00075?ds=MIS-60207-00075-00001&source=MERCHANT_PAGE&sid=be9613255206b659&cnc=false&pickupPointCode=PP-3164910&pid=MIS-60207-00075');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
