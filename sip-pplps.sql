-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2018 pada 07.11
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip-pplps`
--
CREATE DATABASE IF NOT EXISTS `sip-pplps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sip-pplps`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
('AD00001', 'admin', 'df70d98996977a7b6f8dcf37c3265a38', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppk`
--

CREATE TABLE `ppk` (
  `id_ppk` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ppk`
--

INSERT INTO `ppk` (`id_ppk`, `nama`, `keterangan`) VALUES
('PPK0001', 'PPK Ir. Hani Mayanas', 'Satker Ir. Hani Mayanas'),
('PPK0002', 'PPK Nuris Wahyudi, SST', 'Satker Nuris Wahyudi, SSTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_addendumii`
--

CREATE TABLE `tbl_addendumii` (
  `id_addii` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `addii_bal` int(11) NOT NULL,
  `addii_boq` int(11) NOT NULL,
  `addii_jdst` int(11) NOT NULL,
  `addii_slp` int(11) NOT NULL,
  `addii_kurva` int(11) NOT NULL,
  `addii_shop` int(11) NOT NULL,
  `addii_bakln` int(11) NOT NULL,
  `addii_naii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_addendumii`
--

INSERT INTO `tbl_addendumii` (`id_addii`, `id_paket`, `addii_bal`, `addii_boq`, `addii_jdst`, `addii_slp`, `addii_kurva`, `addii_shop`, `addii_bakln`, `addii_naii`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_addendumiii`
--

CREATE TABLE `tbl_addendumiii` (
  `id_addiii` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addiii_bal` varchar(100) NOT NULL,
  `addiii_boq` varchar(100) NOT NULL,
  `addiii_jdst` varchar(100) NOT NULL,
  `addiii_slp` varchar(100) NOT NULL,
  `addiii_kurva` varchar(100) NOT NULL,
  `addiii_shop` varchar(100) NOT NULL,
  `addiii_bakln` varchar(100) NOT NULL,
  `addii_naiii` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_addendumiii`
--

INSERT INTO `tbl_addendumiii` (`id_addiii`, `id_paket`, `addiii_bal`, `addiii_boq`, `addiii_jdst`, `addiii_slp`, `addiii_kurva`, `addiii_shop`, `addiii_bakln`, `addii_naiii`) VALUES
('AD30001', 'PKT0005', 'E-Learning 2.PDF', 'q', 'w', 's', 'h', 'w', 'c', 't');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_addendumiv`
--

CREATE TABLE `tbl_addendumiv` (
  `id_addiv` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addiv_bal` varchar(100) NOT NULL,
  `addiv_boq` varchar(100) NOT NULL,
  `addiv_jdst` varchar(100) NOT NULL,
  `addiv_slp` varchar(100) NOT NULL,
  `addiv_kurva` varchar(100) NOT NULL,
  `addiv_shop` varchar(100) NOT NULL,
  `addiv_bakn` varchar(100) NOT NULL,
  `addiv_naiv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_addendumiv`
--

INSERT INTO `tbl_addendumiv` (`id_addiv`, `id_paket`, `addiv_bal`, `addiv_boq`, `addiv_jdst`, `addiv_slp`, `addiv_kurva`, `addiv_shop`, `addiv_bakn`, `addiv_naiv`) VALUES
('AD40001', 'PKT0005', 'E-Learning 3.PDF', '1', '2', '3', '4', 's', 'we', 'cd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_doc1`
--

CREATE TABLE `tbl_doc1` (
  `id_doc` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `surat_md` varchar(100) NOT NULL,
  `surat_mh` varchar(100) NOT NULL,
  `surat_kl` varchar(100) NOT NULL,
  `kesepakatan_bersama` varchar(100) NOT NULL,
  `perjanjian_kerjasama` varchar(100) NOT NULL,
  `sppbj` varchar(100) NOT NULL,
  `spmk` varchar(100) NOT NULL,
  `naskah_kontrak` varchar(100) NOT NULL,
  `rencana_mk` varchar(100) NOT NULL,
  `bcp` varchar(100) NOT NULL,
  `mc0_dd` varchar(100) NOT NULL,
  `mc0_bal` varchar(100) NOT NULL,
  `mc0_jdst` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_doc1`
--

INSERT INTO `tbl_doc1` (`id_doc`, `id_paket`, `surat_md`, `surat_mh`, `surat_kl`, `kesepakatan_bersama`, `perjanjian_kerjasama`, `sppbj`, `spmk`, `naskah_kontrak`, `rencana_mk`, `bcp`, `mc0_dd`, `mc0_bal`, `mc0_jdst`) VALUES
('DOC0001', 'PKT0005', '263-561-1-SM.pdf', '', '', '', '', '1307.3061.pdf', '', '', '', '', '1601-3760-1-PB.pdf', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_doc2`
--

CREATE TABLE `tbl_doc2` (
  `id_doc2` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `laporan_harian1` varchar(100) NOT NULL,
  `laporan_mingguan1` varchar(100) NOT NULL,
  `bulanan_kontraktor` varchar(100) NOT NULL,
  `sertifikat_pembayaran` varchar(100) NOT NULL,
  `laporan_harian2` varchar(100) NOT NULL,
  `laporan_mingguan2` varchar(100) NOT NULL,
  `bulanan_konsultan` varchar(100) NOT NULL,
  `berita_apm` varchar(100) NOT NULL,
  `berita_ascm` varchar(100) NOT NULL,
  `provisional_sp` varchar(100) NOT NULL,
  `provisional_bafv` varchar(100) NOT NULL,
  `provisional_basv` varchar(100) NOT NULL,
  `provisional_bastp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_doc2`
--

INSERT INTO `tbl_doc2` (`id_doc2`, `id_paket`, `laporan_harian1`, `laporan_mingguan1`, `bulanan_kontraktor`, `sertifikat_pembayaran`, `laporan_harian2`, `laporan_mingguan2`, `bulanan_konsultan`, `berita_apm`, `berita_ascm`, `provisional_sp`, `provisional_bafv`, `provisional_basv`, `provisional_bastp`) VALUES
('DC20001', 'PKT0005', 'E-Learning 4.PDF', '', '', '', 'E-Learning 5.PDF', '', '', 'Jurnal Rapid (1).pdf', 'Jurnal Rapid (2).pdf', 'Jurnal Rapid 13.15.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_doc3`
--

CREATE TABLE `tbl_doc3` (
  `id_doc3` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `final_sp` varchar(100) NOT NULL,
  `final_bafv` varchar(100) NOT NULL,
  `final_basv` varchar(100) NOT NULL,
  `final_bastp` varchar(100) NOT NULL,
  `final_dokumentasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_doc3`
--

INSERT INTO `tbl_doc3` (`id_doc3`, `id_paket`, `final_sp`, `final_bafv`, `final_basv`, `final_bastp`, `final_dokumentasi`) VALUES
('DC30001', 'PKT0005', 'Jurnal-RAPID.pdf', '', '', '', 'SK-KURIKULUM-2017-Program-Studi-Teknik-Informatik-4.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` varchar(7) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `jenis` enum('kontraktual','suakelola') NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_tahun` varchar(7) NOT NULL,
  `id_ppk` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama_paket`, `jenis`, `deskripsi`, `input_by`, `id_tahun`, `id_ppk`) VALUES
('PKT0001', 'Konsultan Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima', 'kontraktual', '', 'Tegar Ferdyla', 'THN0001', 'PPK0001'),
('PKT0002', 'Coba', 'suakelola', '', 'Tegar Ferdyla', 'THN0003', 'PPK0002'),
('PKT0004', 'Suakelola1', 'suakelola', '', 'Teteh', 'THN0002', 'PPK0001'),
('PKT0005', 'suakelola', 'suakelola', '', 'Tegar', 'THN0001', 'PPK0001'),
('PKT0006', 'Test 2014', 'suakelola', 'Tahun 2014', 'Tegar Ferdyla M', 'THN0001', 'PPK0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pascamc0`
--

CREATE TABLE `tbl_pascamc0` (
  `id_pasca` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `pasca_boq` varchar(100) NOT NULL,
  `pasca_jdst` varchar(100) NOT NULL,
  `pasca_slp` varchar(100) NOT NULL,
  `pasca_kurva` varchar(100) NOT NULL,
  `pasca_shop` varchar(100) NOT NULL,
  `pasca_bakn` varchar(100) NOT NULL,
  `pasca_nai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pascamc0`
--

INSERT INTO `tbl_pascamc0` (`id_pasca`, `id_paket`, `pasca_boq`, `pasca_jdst`, `pasca_slp`, `pasca_kurva`, `pasca_shop`, `pasca_bakn`, `pasca_nai`) VALUES
('PSC0001', 'PKT0005', 'Ekivalensi-Matakuliah.pdf', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendukung`
--

CREATE TABLE `tbl_pendukung` (
  `id_pendukung` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `bmn_surat_alih` varchar(100) NOT NULL,
  `bmn_rekomendasi` varchar(100) NOT NULL,
  `bmn_surat_hibah` varchar(100) NOT NULL,
  `keuangan_permohonan` varchar(100) NOT NULL,
  `keuangan_kuitansi` varchar(100) NOT NULL,
  `keuangan_kartu` varchar(100) NOT NULL,
  `keuangan_faktur` varchar(100) NOT NULL,
  `keuangan_pph` varchar(100) NOT NULL,
  `keuangan_spp` varchar(100) NOT NULL,
  `keuangan_spm` varchar(100) NOT NULL,
  `keuangan_sp2d` varchar(100) NOT NULL,
  `bendahara_lpj` varchar(100) NOT NULL,
  `bendahara_bapkdr` varchar(100) NOT NULL,
  `bendahara_rekening` varchar(100) NOT NULL,
  `bendahara_bapk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` varchar(7) NOT NULL,
  `nama_tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_ppk` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `nama_tahun`, `deskripsi`, `input_by`, `id_ppk`) VALUES
('THN0001', '2014', 'Tahun 2014', 'Tegar Ferdyla M', 'PPK0001'),
('THN0002', '2015', 'Tahun 2015', 'Tegar Ferdyla M', 'PPK0001'),
('THN0003', '2014', 'Tahun 2014', 'Hendra', 'PPK0002'),
('THN0004', '2090', 'ini', 'Tegar Ferdyla M', 'PPK0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_ppk` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `NIP`, `nama`, `bagian`, `email`, `alamat`, `foto`, `id_ppk`) VALUES
('USR0001', 'tegarferdyla', 'df70d98996977a7b6f8dcf37c3265a38', '123456789011', 'Tegar Ferdyla M', 'PPK', 'tegar@gmail.com', 'Jl.Joglo', 'user1.jpg', 'PPK0001'),
('USR0002', 'hendra', 'df70d98996977a7b6f8dcf37c3265a38', '123456789012', 'Hendra', 'PPK', 'hendra@gmail.com', 'Jl.Meruya', 'user1.jpg', 'PPK0002'),
('USR0003', 'asal', 'df70d98996977a7b6f8dcf37c3265a38', '123456789013', 'Asal', 'PPK', 'asal@gmail.com', 'Jl.Asal', 'user1.jpg', 'PPK0002'),
('USR0004', 'dalas98', 'c5ebe0460ee34d946551ebb6c4999199', '123456789069', 'Yusuf Farhan', 'PPK', 'dalas98@gmail.com', 'Perum', 'user1.jpg', 'PPK0001'),
('USR0005', 'tegarfm', '3ddeeab4529e3557fd663e618c7d090b', '12456789044', 'Tegar Ferdyla', 'PPK', 'tegarferdyla@gmail.com', 'Komplek DKI', 'user1.jpg', 'PPK0002');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id_ppk`);

--
-- Indeks untuk tabel `tbl_addendumii`
--
ALTER TABLE `tbl_addendumii`
  ADD PRIMARY KEY (`id_addii`);

--
-- Indeks untuk tabel `tbl_addendumiii`
--
ALTER TABLE `tbl_addendumiii`
  ADD PRIMARY KEY (`id_addiii`);

--
-- Indeks untuk tabel `tbl_addendumiv`
--
ALTER TABLE `tbl_addendumiv`
  ADD PRIMARY KEY (`id_addiv`);

--
-- Indeks untuk tabel `tbl_doc1`
--
ALTER TABLE `tbl_doc1`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indeks untuk tabel `tbl_doc2`
--
ALTER TABLE `tbl_doc2`
  ADD PRIMARY KEY (`id_doc2`);

--
-- Indeks untuk tabel `tbl_doc3`
--
ALTER TABLE `tbl_doc3`
  ADD PRIMARY KEY (`id_doc3`);

--
-- Indeks untuk tabel `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `tbl_pascamc0`
--
ALTER TABLE `tbl_pascamc0`
  ADD PRIMARY KEY (`id_pasca`);

--
-- Indeks untuk tabel `tbl_pendukung`
--
ALTER TABLE `tbl_pendukung`
  ADD PRIMARY KEY (`id_pendukung`);

--
-- Indeks untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`),
  ADD KEY `id_ppk` (`id_ppk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
