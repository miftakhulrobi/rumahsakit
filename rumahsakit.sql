-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2019 pada 06.47
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dashboard`
--

CREATE TABLE `tb_dashboard` (
  `id_head` int(11) NOT NULL,
  `header` text NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `aside` text NOT NULL,
  `footer` text NOT NULL,
  `background` varchar(200) NOT NULL,
  `profil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dashboard`
--

INSERT INTO `tb_dashboard` (`id_head`, `header`, `alamat`, `isi`, `aside`, `footer`, `background`, `profil`) VALUES
(3, '<h1><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#000066\"><strong>RS. MUGI WARAS</strong></span></span></h1>\r\n', '<p><strong><span style=\"font-family:Comic Sans MS,cursive\">Alamat JL. Yos Sudarso Ds. Kedungputri Kec. Paron Kab. Ngawi</span></strong></p>\r\n', '<p><span style=\"color:#2c3e50\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae accusantium repellendus, quia quo minus repellat ab perspiciatis, sed tempora, debitis rem id. Sequi optio aspernatur earum aliquam recusandae repellat?</span></p>\r\n\r\n<p><span style=\"color:#2c3e50\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae accusantium repellendus, quia quo minus repellat ab perspiciatis, sed tempora, debitis rem id. Sequi optio aspernatur earum aliquam recusandae repellat?</span></p>\r\n\r\n<p><span style=\"color:#2c3e50\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae accusantium repellendus, quia quo minus repellat ab perspiciatis, sed tempora, debitis rem id. Sequi optio aspernatur earum aliquam recusandae repellat?</span></p>\r\n\r\n<p><span style=\"color:#2c3e50\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae accusantium repellendus, quia quo minus repellat ab perspiciatis, sed tempora, debitis rem id. Sequi optio aspernatur earum aliquam recusandae repellat?</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '<p><span style=\"font-family:Courier New,Courier,monospace\"><strong><em>2019 - Copyright - Miftakhul Muqorobin</em></strong></span></p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('0457f8af-37db-43ad-b987-e1b356820e06', 'Dr. Sutrisno .STW hh', 'Penyakit Luar negri', 'Jl. Mbangan No.4 Kedungputri', '0987676567'),
('0521215a-7af3-46a9-93f4-540a8ed19abc', 'Dr. Benok .Spd .SMS', 'Penyakit Panu', 'Jl. mbangan No. 31 Kedungputri Ngawi', '0856789433411');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL,
  `aturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`, `aturan`) VALUES
('28c3452f-25cd-46f2-b1a7-76940c1b1468', 'Mikorek', 'Obat panu', '2 x 1 habiskan'),
('490477b2-0a6d-11e9-8a2c-1062e554e633', 'Paramex', 'Obat sakit endas', '3 x 1 oke'),
('4904c4fb-0a6d-11e9-8a2c-1062e554e633', 'Ultraflu', 'Obat flu', '2 x 2 = 4'),
('4904eeec-0a6d-11e9-8a2c-1062e554e633', 'Komix', 'Obat batuk', '1+2 = 3'),
('4905174c-0a6d-11e9-8a2c-1062e554e633', 'Konidin', 'Obat batuk', '4 x 4 = 16'),
('811adba7-5c3d-4fd2-8bcb-b7570d5870cd', 'fff', 'ff', '456'),
('949b9a4b-97c9-43c1-ac2d-d2f4009e65f9', 'Obh', 'Obat batuk', ''),
('b0fb1ec6-8d9d-40b2-9133-8ca20fa32690', 'Komix Herbal Lemon', 'Obat batuk berdahak', ''),
('d44518dd-09e4-11e9-8a2c-1062e554e633', 'Paracetamol', 'Obat penurun panas', ''),
('ec9d64e3-6ca9-406c-a42c-550f3bb41de5', 'gg', 'ggg', '2 x 5'),
('fdbf0b3d-3787-41c4-97a4-90399a4f0788', 'obat kudis', 'lol', '5 x 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('01f1fd5c-4deb-4e5a-8a92-10d00462a4f4', '4444', 'fffff', 'P', 'fffff', '33333'),
('14bf96a2-e934-4b11-b9e8-2d297c5270c8', '8390398983973', 'Jerapah', 'L', 'Gentong', '083736363773'),
('2c090147-c532-4369-80d2-11e032092aea', '893983773973', 'Gajah', 'P', 'Gerdon', '0867373637474'),
('324ed341-6b08-47fa-b163-659913572eee', '0727794794947', 'Jaran Jaranan Kuda', 'P', 'Ds. Semen RT. 12 RW. 01 Kec. Paron Kab. Ngawi', '083737378733'),
('3bcc5458-13ea-4dbf-b500-0be20b67f28c', '35356666', 'kodok', 'P', 'Indo', '083682920293'),
('74ce722e-bd76-49e4-9b20-3fb491ccc30e', '839373739334', 'Tenguuuu', 'P', 'Ngawi', '0839399303033'),
('78b1e8f6-a2aa-4ef0-9174-d946a3c20141', '93983988383', 'Boyo', 'L', 'Jaduk', '082929282893'),
('c0d5eca6-0e32-412e-8fcc-e03e33e573ba', '484874799404', 'Kebo', 'P', 'Paron', '083736277282'),
('e51ece72-1db0-4af8-b22c-8f62978a9d97', '938397739973', 'Semut', 'L', 'Jaduk', '098373787383'),
('f1357dcb-1187-4c3e-a3b9-041c0ac39065', '369837636939', 'wedus', 'P', 'Dunggalar', '0864738783733'),
('fe4dc57e-a214-485e-b86b-06f2f0339760', '99877866666', 'Cecak', 'P', 'Kerten', '0836367373773');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('04c472a9-2953-4a3f-b363-c53e40a029c1', '1dd', 'adfdd'),
('85994acd-fa5a-4807-bc9f-31278d5a7de6', '1cd', 'addd'),
('c7587850-f323-4a34-a42f-8dca9de1e24c', 'Poli 3 a', 'Gedung Kamboja A'),
('e7ef7b51-6f32-4815-b91a-994a1cfc7d62', 'Poli 1 a', 'Gedung Melati A'),
('ef2f8d0a-6876-4e9f-8190-2685b3de2321', 'Poli 2 a', 'Gedung Dahlia A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('12ff471d-6ddb-4441-87ca-3840f4d0452b', '74ce722e-bd76-49e4-9b20-3fb491ccc30e', 'Mencret', '0521215a-7af3-46a9-93f4-540a8ed19abc', 'Diare', 'ef2f8d0a-6876-4e9f-8190-2685b3de2321', '2018-12-31'),
('8b783720-1827-4441-b0f6-dbc410f3863c', '14bf96a2-e934-4b11-b9e8-2d297c5270c8', 'mumet', '0457f8af-37db-43ad-b987-e1b356820e06', 'Gak due duet', 'ef2f8d0a-6876-4e9f-8190-2685b3de2321', '2018-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(1, '8b783720-1827-4441-b0f6-dbc410f3863c', '28c3452f-25cd-46f2-b1a7-76940c1b1468'),
(2, '8b783720-1827-4441-b0f6-dbc410f3863c', '490477b2-0a6d-11e9-8a2c-1062e554e633'),
(3, '12ff471d-6ddb-4441-87ca-3840f4d0452b', '4905174c-0a6d-11e9-8a2c-1062e554e633'),
(4, '12ff471d-6ddb-4441-87ca-3840f4d0452b', 'b0fb1ec6-8d9d-40b2-9133-8ca20fa32690'),
(5, '12ff471d-6ddb-4441-87ca-3840f4d0452b', 'd44518dd-09e4-11e9-8a2c-1062e554e633');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` int(30) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama_user`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_telp`, `level`) VALUES
(14, 'Ibnu Asfiyak Mashuri', 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'laki-laki', 'Ngawi', '089736353564', 'operator'),
(15, 'Khoirul Anam', 'anam', 'f7065414948b7a471604f1501faddeaef69b30d4', 'laki-laki', 'Dungputri', '08765657765', 'operator'),
(29, 'Shofa Miftakhul Muqorobin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'laki-laki', 'kedungputri Ngawi', '085607030051', 'admin'),
(31, 'Yusuf Rodhian Rifa\'i', 'y', '95cb0bfd2977c761298d9624e4b4d4c72a39974a', 'laki-laki', 'Kedunggalar Ngawi', '08576873836', 'operator'),
(32, 'Sodik Sodikin', 'sodik', 'f23060e0831dd91891aca2b48857c9849a252cd8', 'laki-laki', 'Kedungkayon', '0977665566767', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dashboard`
--
ALTER TABLE `tb_dashboard`
  ADD PRIMARY KEY (`id_head`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`) USING BTREE;

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `tb_rekammedis_ibfk_1` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_rm_2` (`id_rm`),
  ADD KEY `id_obat_2` (`id_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dashboard`
--
ALTER TABLE `tb_dashboard`
  MODIFY `id_head` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kode_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Ketidakleluasaan untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
