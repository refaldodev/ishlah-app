-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Mar 10, 2021 at 05:38 AM
=======
-- Generation Time: Mar 10, 2021 at 06:40 AM
>>>>>>> ishlah
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbishlah`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi_proker`
--

CREATE TABLE `divisi_proker` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi_proker`
--

INSERT INTO `divisi_proker` (`id`, `nama_divisi`) VALUES
(7, 'Syiar'),
(8, 'Humas'),
(9, 'Danus'),
(10, 'Penyiar');

-- --------------------------------------------------------

--
-- Table structure for table `isi_proker`
--

CREATE TABLE `isi_proker` (
  `id` int(11) NOT NULL,
  `id_divisi_proker` int(11) NOT NULL,
  `judul_proker` varchar(256) NOT NULL,
  `post_slug` varchar(500) NOT NULL,
  `deskripsi_proker` text NOT NULL,
  `cover_proker` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_proker`
--

<<<<<<< HEAD
INSERT INTO `isi_proker` (`id`, `id_divisi_proker`, `judul_proker`, `deskripsi_proker`, `cover_proker`) VALUES
(1, 1, 'Syiar 1', '<p><strong>Syiar adalah</strong> hal<em> yang baik</em> untuk dilakukan</p>\r\n', 'gambar4.png'),
(2, 2, 'Humas 1', '<p><strong>Lorem ipsum dolor sit a</strong>met consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar3.png'),
(3, 3, 'Danus 1', '<p>Lorem ipsum dolo<em>r sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</em></p>\r\n', 'gambar2.png'),
(4, 2, 'Humas 2', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque </strong>consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar41.png'),
(5, 1, 'Syiar 2', '<p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi la</em>boriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar1.png'),
(7, 4, 'Penyiar 1', '<p>isi dari penyiar 1</p>\r\n', 'gambar33.png'),
(11, 10, 'Siaran Radio 1', '<p>isi penyiar 1</p>\r\n', '121.png'),
(12, 7, 'Syiar 2', '<p>isi syiar 2</p>\r\n', '12.png'),
(13, 10, 'Penyiar 2', '<p>isi penyiar 2</p>\r\n', 'gambar43.png'),
(14, 8, 'Humas 2', '<p>isi humas 2</p>\r\n', 'gambar13.png'),
(15, 8, 'Humas 3', '<p>isi humas 3</p>\r\n', 'gambar35.png'),
(16, 9, 'Danus 2', '<p>isi danus 2</p>\r\n', 'gambar25.png');
=======
INSERT INTO `isi_proker` (`id`, `id_divisi_proker`, `judul_proker`, `post_slug`, `deskripsi_proker`, `cover_proker`) VALUES
(1, 1, 'Syiar 1', '', '<p><strong>Syiar adalah</strong> hal<em> yang baik</em> untuk dilakukan</p>\r\n', 'gambar4.png'),
(2, 2, 'Humas 1', '', '<p><strong>Lorem ipsum dolor sit a</strong>met consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar3.png'),
(3, 3, 'Danus 1', '', '<p>Lorem ipsum dolo<em>r sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</em></p>\r\n', 'gambar2.png'),
(4, 2, 'Humas 2', '', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque </strong>consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi laboriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar41.png'),
(5, 1, 'Syiar 2', '', '<p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, consequuntur quisquam. Qui ullam asperiores expedita eos! Eveniet pariatur alias vel deserunt velit beatae quis. Dignissimos libero temporibus sit. Alias ab fugit rerum doloremque consectetur temporibus suscipit ducimus tempore. Facilis, adipisci! Vero deleniti unde commodi vel ipsa totam dolorum eligendi ipsam, ducimus, qui, iusto labore odio neque fugit quos eos fuga nisi la</em>boriosam? Maxime ipsa ratione dolore iste in accusamus ullam earum provident, atque ea illo sit eos. Nesciunt saepe adipisci odio deleniti nobis voluptatibus sint provident corrupti accusamus repellat earum cupiditate debitis architecto quisquam dolorem, veniam porro ducimus at sunt .</p>\r\n', 'gambar1.png'),
(7, 4, 'Penyiar 1', '', '<p>isi dari penyiar 1</p>\r\n', 'gambar33.png'),
(11, 10, 'Siaran Radio 1', '', '<p>isi penyiar 1</p>\r\n', '121.png'),
(12, 7, 'Syiar 2', '', '<p>isi syiar 2</p>\r\n', '12.png'),
(13, 10, 'Penyiar 2', '', '<p>isi penyiar 2</p>\r\n', 'gambar43.png'),
(14, 8, 'Humas 2', '', '<p>isi humas 2</p>\r\n', 'gambar13.png'),
(15, 8, 'Humas 3', '', '<p>isi humas 3</p>\r\n', 'gambar35.png'),
(16, 9, 'Danus 2', '', '<p>isi danus 2</p>\r\n', 'gambar25.png');
>>>>>>> ishlah

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(256) NOT NULL,
  `post_slug` varchar(500) NOT NULL,
  `isi_artikel` text NOT NULL,
  `post_by` varchar(128) NOT NULL,
  `cover_artikel` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul_artikel`, `post_slug`, `isi_artikel`, `post_by`, `cover_artikel`, `date_created`) VALUES
(1, 'Artikel 1', '', '<h1>Isi artikel 1</h1>\r\n', 'admin', 'gambar213.png', 1613977500),
(2, 'Artikel 2', '', '<p>Mencoba <strong>memakai </strong><em>CK EDITOR</em></p>\r\n', '', 'gambar1.png', 1613978091),
(3, 'Artikel 3', '', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eligendi reprehenderit pariatur porro laudantium voluptas iure rem, at architecto sit. Impedit, fugit. Cupiditate, sit! Perspiciatis consequuntur aspernatur a molestiae harum veniam iste fugit pariatur id. Minima nostrum libero assumenda rem!<br />\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolore alias laborum aliquam earum vero dolorum harum natus, provident nesciunt mollitia ipsum error, eveniet, dolorem quibusdam ad asperiores corporis perspiciatis.<br />\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quo corrupti maiores eius blanditiis non quasi, explicabo molestiae labore, a excepturi ratione cumque nam error reprehenderit soluta, eaque sit eveniet fuga assumenda iste. Recusandae natus soluta ab quod repellendus, placeat maxime porro sint impedit provident aperiam fugiat dicta amet excepturi ipsum molestiae, earum animi perspiciatis ea, eos ipsa iusto at! Non provident rerum quasi nesciunt accusamus voluptatibus illum a temporibus animi aliquid accusantium blanditiis commodi, repellendus corrupti necessitatibus ipsa consequuntur ut eligendi recusandae. Quasi, obcaecati aliquam perferendis, corrupti fugiat ducimus mollitia numquam accusantium reiciendis velit harum eaque sint. Autem saepe maiores soluta veritatis, natus sed provident amet expedita iusto unde repellendus neque ducimus explicabo deserunt sunt quidem nobis. Error quas illum accusantium laudantium quaerat nulla, molestias perferendis eveniet commodi porro voluptates voluptate et illo quis quidem itaque aspernatur ipsum suscipit quae repellendus, atque est rerum distinctio. Officia rem voluptatibus est, inventore officiis veritatis illo aliquid molestiae accusamus nesciunt pariatur rerum aut soluta debitis veniam consectetur nostrum magnam tenetur optio qui eveniet ad. Excepturi obcaecati asperiores est voluptas magnam. Fugit totam consequuntur qui quam. Vero labore in nulla facilis delectus ipsum deserunt provident</p>\r\n', '', 'gambar3.png', 1613984733),
(4, 'Artikel 4', '', '<p>Keutamaan&nbsp;membaca&nbsp;Al-Quran&nbsp;dengan&nbsp;baik&nbsp;dan&nbsp;Benar</p>\r\n', '', 'gambar21.png', 1613984772),
(5, 'Artikel 5', '', '<p>Kenapa CK EDITRO BEDA LORM ISPUSN</p>\r\n', '', 'gambar11.png', 1613988138),
(6, 'Artikel 6', '', '<p>isi ilham</p>\r\n', 'Ilham Fikri Yanuarto', 'gambar17.png', 1614007314),
(7, 'Artikel 7', '', '<p>isi admin</p>\r\n', 'admin', 'gambar22.png', 1614007350),
(8, 'Artikel 9', '', '<p>Artikel Tanggal 23</p>\r\n', '', 'gambar24.png', 1614060326),
(9, 'Artikel 8', '', '<p>Mencoba update</p>\r\n', '', 'gambar4.png', 0),
(11, 'Artikel 10', '', '<p>lorem ipsum askmadsd ad asd a as</p>\r\n', 'admin', 'gambar32.png', 1614084456),
(12, 'Artikel 11', 'artikel-11', '<p>Lorem ipsu dasokjdas Aritkle 11</p>\r\n', 'admin', 'gambar18.png', 1614084855),
(15, 'Artikel 12', 'artikel-12', '<p>Isi artikel 12 lorem ipsi m1bkasboda&nbsp;</p>\r\n', 'admin', 'gambar19.png', 1614161290),
(17, 'Artikel 13', 'artikel-13.html', '<p><em><strong>Isi Artikel 13</strong></em></p>\r\n', 'admin', 'gambar33.png', 1614161341),
<<<<<<< HEAD
(20, 'Artikel 14', 'artikel-14.html', '<p>isi artikel 14 coba slug</p>\r\n', 'admin', 'logo_masjid_3.jpg', 1615303291);
=======
(20, 'Artikel 14', 'artikel-14.html', '<p>isi artikel 14 coba slug</p>\r\n', 'admin', 'logo_masjid_3.jpg', 1615303291),
(21, 'Artikel 15', 'artikel-15.html', '<p>asd</p>\r\n', 'admin', 'logo_masjid_4.png', 1615353058);
>>>>>>> ishlah

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE `tb_fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id`, `nama_fakultas`) VALUES
(1, 'Ekonomi'),
(2, 'Psikologi'),
(3, 'Ilmu Komunikasi'),
(4, 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `image_galeri` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `judul`, `image_galeri`) VALUES
(1, 'Galeri 5', 'gambar42.png'),
(2, 'Galeri 4', 'gambar31.png'),
(3, 'Galeri 3', 'gambar41.png'),
(4, 'Galeri 2', 'gambar21.png'),
(6, 'Galeri 1', 'gambar33.png'),
(8, 'Galeri 6', '123.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `judul_kegiatan` varchar(256) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `waktu` varchar(128) NOT NULL,
  `waktu2` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `judul_kegiatan`, `hari`, `waktu`, `waktu2`, `tempat`, `pic`) VALUES
(1, 'Club Islamic Science', 'Setiap Hari Kamis', '16:00', '17:00', 'Via Zoom', '0877362671'),
(2, 'Webinar Pemasyarakatan', 'Hari Selasa', '15:00', '17:00', 'Via Zoom', '085774313897'),
(3, 'Pengenalan Lingkungan Kampus', '21 Maret 2021', '14:00', '15:00', 'Fakultas Teknik YAI', '2147483647'),
(6, 'Club Islamic Science 2', 'Setiap Hari Jumat', '14:00', '16:00', 'Via Zoom', '2147483647'),
(7, 'Club Islamic Science 3', 'Setiap Hari Kamis', '14:00', '15:00', 'Via Zoom', '085774313897'),
(8, 'Club Islamic Science 4', 'Setiap Hari Sabtu', '16:30', '17:30', 'Via Zoom', '081315014043');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `jkel` varchar(20) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `motivasi` text NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id`, `nama`, `email`, `no_wa`, `jkel`, `id_fakultas`, `id_prodi`, `angkatan`, `motivasi`, `date_created`) VALUES
(1, 'Ilham Fikri Yanuarto', 'ilhmfikri77@gmail.com', '081315014043', 'Laki-laki', 4, 7, '2017', 'Ilham Fikri Yanuarto', '1614488090'),
(2, 'Winanda Marasoli Maksum', 'winanda@gmail.com', '08571231932', 'Laki-laki', 3, 5, '2017', 'ingin menjadi lebih baik lagi', '1614488090'),
(3, 'M Refaldo', 'refaldo@gmail.com', '085713238990', 'Laki-laki', 4, 5, '2017', 'Ingin menambah relasi dan ilmu', '1615301035'),
<<<<<<< HEAD
(4, 'Coba 1', 'admin@test.com', '08571231932', 'Perempuan', 1, 0, '2017', 'lopk', '1615301450');
=======
(4, 'Coba 1', 'admin@test.com', '08571231932', 'Perempuan', 1, 1, '2017', 'lopk', '1615301450'),
(5, 'tes', 'admin@test.com', '08571231932', 'Laki-laki', 2, 3, '2017', 'tes', '1615352199');
>>>>>>> ishlah

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(256) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `nama_prodi`, `id_fakultas`) VALUES
(1, 'Akuntansi', 1),
(2, 'Manajemen', 1),
(3, 'Psikologi', 2),
(4, 'Ilmu Komunikasi', 3),
(5, 'Desain Komunikasi Visual', 3),
(6, 'Teknik Informatika', 4),
(7, 'Sistem Informasi', 4),
(8, 'Teknik Arsitektur', 4),
(9, 'Teknik Sipil', 4),
(10, 'Teknik Industri', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(11) NOT NULL,
  `image_struktur` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `image_struktur`) VALUES
(1, 'gambar3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(246) NOT NULL,
  `level` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `level`, `is_active`, `date_created`) VALUES
(4, 'Ega Anggrayni', 'ega', 'default.jpg', '$2y$10$Ph/RennKlX4e9sNM9nQJYuERhO2jTJUcGOsjIAOqsu0AN5TXyVd56', 1, 1, 1613639822),
(9, 'admin', 'admin', 'default.jpg', '$2y$10$WbBmtYUZ1r3ZDy7lZPwshOELGPdxyfxDYrwMQHvJu1oTOHpZqAIj2', 1, 1, 1613641592),
(11, 'Winanda', 'nanda', 'default.jpg', '$2y$10$AOCH/84/09ECDPbPVNFIrehC14k2/zS1skp149RKbgEo50XVYhkJC', 2, 1, 1613971333),
(13, 'Ilham Fikri Yanuarto', 'ilham', 'default.jpg', '$2y$10$.mPnrM/4i.p44yNMES4RF.HtHLSX7L8KwVd/0cxwxPuCIQaZBKeu6', 2, 1, 1613972976);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi_proker`
--
ALTER TABLE `divisi_proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_proker`
--
ALTER TABLE `isi_proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi_proker`
--
ALTER TABLE `divisi_proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `isi_proker`
--
ALTER TABLE `isi_proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
>>>>>>> ishlah

--
-- AUTO_INCREMENT for table `tb_fakultas`
--
ALTER TABLE `tb_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> ishlah

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
