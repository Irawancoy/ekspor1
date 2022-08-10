-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2022 pada 09.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspor1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `admin_username` varchar(128) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `admin_view_password` varchar(128) NOT NULL,
  `admin_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_username`, `admin_password`, `admin_view_password`, `admin_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buyers`
--

CREATE TABLE `data_buyers` (
  `id_buyers` int(100) NOT NULL,
  `negara_buyers` varchar(100) NOT NULL,
  `nama_perusahaan_buyers` varchar(100) NOT NULL,
  `email_buyers` varchar(100) NOT NULL,
  `produk_buyers` varchar(100) NOT NULL,
  `dilihat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buyers`
--

INSERT INTO `data_buyers` (`id_buyers`, `negara_buyers`, `nama_perusahaan_buyers`, `email_buyers`, `produk_buyers`, `dilihat`) VALUES
(1, 'Uni Emirat Arab', 'Chunilal Purshottam & Company LLC', 'trading@cpdubai.com', 'Natural Honey', 0),
(2, 'Uni Emirat Arab', 'International Group Trading Company LLC', 'Info@intgroupuae.com sales@intgroupuae.com', 'Natural Honey', 0),
(3, 'Uni Emirat Arab', 'Pearl Dairy Farms Limited', 'info@latomilk.com', 'Natural Honey', 0),
(10, 'amerika', 'pt maju mapan', 'a@gmail.com', 'buah', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_materi`
--

CREATE TABLE `kategori_materi` (
  `id_kategori_materi` int(11) NOT NULL,
  `nama_kategori_materi` varchar(100) NOT NULL,
  `status_kategori_materi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_materi`
--

INSERT INTO `kategori_materi` (`id_kategori_materi`, `nama_kategori_materi`, `status_kategori_materi`) VALUES
(22, 'dssssss', '1'),
(23, 'dssssss', '1'),
(24, 'dssssss', '1'),
(25, 'dssssss', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mainmenu`
--

CREATE TABLE `mainmenu` (
  `seq` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `active_menu` varchar(50) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `link_menu` varchar(50) NOT NULL,
  `menu_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mainmenu`
--

INSERT INTO `mainmenu` (`seq`, `idmenu`, `nama_menu`, `active_menu`, `icon_class`, `link_menu`, `menu_akses`, `entry_date`, `entry_user`) VALUES
(9, 9, 'Beranda', '', 'fas fa-home fa-2x', 'Admin', '', '2020-04-18 06:02:37', NULL),
(19, 19, 'Kontak', '', 'fa fa-phone fa-2x', 'Kontak', '', '2020-04-21 17:04:45', NULL),
(27, 27, 'Setting Ukuran', '', 'fas fa-cogs fa-2x', 'Setting_ukuran', '', '2020-03-13 20:53:59', NULL),
(21, 21, 'Setting Title', '', 'fas fa-wrench fa-2x', 'Setting_title', '', '2020-03-13 20:51:06', NULL),
(22, 22, 'Setting User', '', 'fas fa-user fa-2x', 'setting_user', '', '2020-03-13 20:51:10', NULL),
(10, 10, 'Slider', '', 'fas fa-sliders-h fa-2x', 'C_slider', '', '2020-04-23 21:07:49', NULL),
(11, 11, 'Tentang', '', 'fas fa-info fa-2x', 'C_tentang', '', '2020-04-24 11:39:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(100) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `id_kategori_materi` varchar(10) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `isi_materi` text NOT NULL,
  `foto_materi` varchar(50) NOT NULL,
  `tags_materi` varchar(100) NOT NULL,
  `dibaca_materi` enum('tidak aktif','aktif') NOT NULL DEFAULT 'tidak aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `id_kategori_materi`, `id_penulis`, `isi_materi`, `foto_materi`, `tags_materi`, `dibaca_materi`) VALUES
(1, '3 Cara Mengurangi Biaya Legalitas Bisnis Anda', '1', 0, 'Sebagai bos dari bisnis tertentu, semua keputusan terbesar pada akhirnya akan jatuh ke tangan Anda. Meskipun Anda memiliki tim yang dapat diandalkan, yang datang dalam bentuk SDM dan manajemen, Anda sebagai CEO dan pemilik akan selalu memiliki keputusan akhir. Namun, ini bukan akhir dari keputusan besar. Tidak semuanya. Sebagai orang nomor satu yang bertanggung jawab atas segalanya, hal-hal sehari-hari juga akan menjadi milik Anda untuk ditinjau dan dijaga. Artinya, Anda harus selalu waspada jika terjadi sesuatu.\n\nSalah satu hal yang paling penting di sini adalah biaya berbagai kebutuhan bisnis Anda. Mengurangi biaya adalah hal yang lazim untuk mendapatkan lebih banyak pendapatan dan kesuksesan di masa mendatang. Bos yang baik akan selalu berusaha meminimalkan biaya aspek-aspek tertentu. Satu hal yang layak disebutkan adalah biaya hukum, sisi bisnis yang tidak ingin dipikirkan oleh siapa pun sampai mereka harus melakukannya. Jika Anda tidak tahu apa itu biaya hukum dan bagaimana Anda dapat menguranginya, jangan khawatir.', 'service-details-1.jpg', 'makan', ''),
(2, '5 Strategi Pemasaran Produk Yang Bisa Bikin Bisnis Melejit!', '2', 0, 'Pemasaran produk adalah hal yang sangat penting dalam berbisnis. Ada banyak strategi pemasaran produk yang dapat diterapkan oleh para pengusaha maupun perusahaan di jaman yang serba canggih seperti sekarang ini. Meski demikian, beda perusahaan, beda juga cara memasarkan produk yang bisa diterapkan. Untuk itu, penting untuk membuat strategi pemasaran yang sesuai dengan perusahaan.\n\nPentingnya Strategi Pemasaran Produk Bagi Perusahaan\nTidak peduli sebaik apa kualitas produk yang kamu jual, hal tersebut tidak akan banyak berarti jika tidak ada yang tahu eksistensi produk tersebut. Di sinilah peran pemasaran. Dengan pemasaran, orang bisa tahu produkmu.\n\nTujuan pemasaran pada dasarnya untuk menarik perhatian orang. Saat orang tertarik, mereka akan mencari tahu lebih banyak tentang produk yang ditawarkan. Jika tahu saja tidak, rasanya mustahil membuat orang mau membeli produkmu. Itulah kenapa pemasaran sangat penting bagi sebuah perusahaan.\n\nBagaimana Menentukan Strategi Pemasaran yang Efektif untuk Bisnis\nPerlu dipahami, tidak ada strategi baku untuk pemasaran. Semua tergantung pada beberapa parameter. Produk yang berbeda butuh strategi pemasaran yang berbeda. Cara yang sukses diterapkan oleh perusahaan tertentu belum tentu memberi hasil yang sama saat diadopsi oleh perusahaan lain.\n\nAda beberapa komponen yang bisa membantu menentukan strategi pemasaran yang efektif untuk bisnis. Beberapa diantaranya adalah produk itu sendiri dan target pasar yang diincar. Selain itu, evaluasi juga harus dilakukan secara konsisten. Karena pasar terus berubah, perbaikan juga harus terus dilakukan.', 'service-details-2.jpg', 'minum', ''),
(3, 'Foto Produk: Jenis, Tips, Panduan Untuk Pemula, Serta Contohnya', '3', 0, 'Punya bisnis online? Foto produk jadi salah satu hal terpenting yang berpengaruh pada penjualan. Agar bisa menarik target pasar dalam berbelanja online, kamu harus menampilkan foto yang jelas serta menarik dari produk.\r\n\r\nLaporan oleh Justuno yang bertajuk “65 Surprising E-Commerce Consumer Psychology Statistics” melaporkan bahwa 93% konsumen mempertimbangkan aspek visual suatu produk menjadi salah satu faktor yan diperimbangkan dalam memutuskan pembelian.\r\n\r\nKebanyakan fotografer sudah mengerti dan paham bagaimana cara mengambil foto produk yang baik. Dari itu jangan heran bila foto produk yang dihasilkan bagus dan berkualitas. Namun, tidak menutup kemungkinan foto produk yang bagus juga bisa dihasilkan oleh omula.\r\n\r\nArtikel ini akan membahas tips dan trik bagi pemula agar bisa menghasilkan foto produk yang menarik. Sebelum itu, alangkah lebih baik bila kamu memahami jenis-jenis dari foto produk terlebih dahulu.', 'service-details-3.jpg', 'Branding, Bisnis', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(100) NOT NULL,
  `username_member` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `email_member` varchar(255) NOT NULL,
  `no_hp_member` int(11) NOT NULL,
  `website_member` varchar(255) NOT NULL,
  `status_member` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username_member`, `password_member`, `nama_member`, `email_member`, `no_hp_member`, `website_member`, `status_member`) VALUES
(11, 'a', '123', 'aa', 'a@gmail.com', 12, 'a', '1'),
(12, 'as', 'aa', 'aa', 'aa', 0, 'aa', '0'),
(13, 'a', 'a', 'a', 'a@gmail.com', 0, 'a', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL,
  `deskripsi_penulis` text NOT NULL,
  `website_penulis` varchar(100) NOT NULL,
  `email_penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `deskripsi_penulis`, `website_penulis`, `email_penulis`) VALUES
(4, 'a', 's', 's', 'sss'),
(11, 'a', 'ss', 's', 's.eptyoirawan8@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link_sub` varchar(50) NOT NULL,
  `sub_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `mainmenu_idmenu`, `active_sub`, `icon_class`, `link_sub`, `sub_akses`, `entry_date`, `entry_user`) VALUES
(1, 'Entry User', 8, '', '', 'User', '', '2017-10-18 21:28:25', NULL),
(2, 'Kategori Produk', 4, '', '', 'Produk', '', '2017-10-18 21:34:17', NULL),
(3, 'Produk', 4, '', '', 'Produk/detail', '', '2017-10-18 21:34:26', NULL),
(4, 'Album', 5, '', '', 'Gallery', '', '2017-10-18 21:34:34', NULL),
(5, 'Foto', 5, '', '', 'Gallery/foto', '', '2017-10-18 21:34:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_akses_mainmenu`
--

CREATE TABLE `tab_akses_mainmenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT 0,
  `r` int(11) DEFAULT 0,
  `u` int(11) DEFAULT 0,
  `d` int(11) DEFAULT 0,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_akses_mainmenu`
--

INSERT INTO `tab_akses_mainmenu` (`id`, `id_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, NULL, 1, NULL, NULL, '2017-09-26 20:49:01', 'direktur'),
(8, 7, 1, 0, 1, 0, 0, '2017-10-28 00:52:10', ''),
(9, 9, 1, 0, 1, 0, 0, '2018-01-21 02:05:57', ''),
(10, 10, 1, 0, 1, 0, 0, '2018-12-28 08:29:38', ''),
(11, 11, 1, 0, 1, 0, 0, '2018-12-28 08:29:38', ''),
(12, 12, 1, 0, 1, 0, 0, '2018-12-28 08:29:38', ''),
(13, 13, 1, 0, 1, 0, 0, '2019-01-09 09:27:14', ''),
(14, 14, 1, 0, 1, 0, 0, '2019-01-10 08:43:47', ''),
(15, 15, 1, 0, 1, 0, 0, '2019-01-10 12:59:44', ''),
(23, 16, 1, 0, 1, 0, 0, '2019-02-08 08:00:02', ''),
(24, 17, 1, 0, 1, 0, 0, '2020-01-23 23:30:13', ''),
(25, 18, 1, 0, 1, 0, 0, '2020-01-23 23:30:13', ''),
(26, 19, 1, 0, 1, 0, 0, '2020-03-13 20:46:38', ''),
(27, 25, 1, 0, 1, 0, 0, '2020-02-24 10:49:48', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_akses_submenu`
--

CREATE TABLE `tab_akses_submenu` (
  `id` int(11) NOT NULL,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT 0,
  `r` int(11) DEFAULT 0,
  `u` int(11) DEFAULT 0,
  `d` int(11) DEFAULT 0,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `entry_user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_akses_submenu`
--

INSERT INTO `tab_akses_submenu` (`id`, `id_sub_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, 0, 1, 0, 0, '2017-10-14 21:45:40', ''),
(2, 2, 1, 0, 1, 0, 0, '2017-10-17 02:59:02', ''),
(3, 3, 1, 0, 0, 0, 0, '2017-10-19 08:12:32', ''),
(4, 4, 1, 0, 1, 0, 0, '2017-10-17 02:59:16', ''),
(5, 5, 1, 0, 0, 0, 0, '2017-10-19 08:12:33', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_buyers`
--
ALTER TABLE `data_buyers`
  ADD PRIMARY KEY (`id_buyers`);

--
-- Indeks untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  ADD PRIMARY KEY (`id_kategori_materi`);

--
-- Indeks untuk tabel `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`seq`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indeks untuk tabel `tab_akses_mainmenu`
--
ALTER TABLE `tab_akses_mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_akses_submenu`
--
ALTER TABLE `tab_akses_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_buyers`
--
ALTER TABLE `data_buyers`
  MODIFY `id_buyers` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  MODIFY `id_kategori_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
