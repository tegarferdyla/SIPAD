-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2018 at 03:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
('AD00001', 'admin', 'df70d98996977a7b6f8dcf37c3265a38', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `ppk`
--

CREATE TABLE `ppk` (
  `id_ppk` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppk`
--

INSERT INTO `ppk` (`id_ppk`, `nama`, `keterangan`) VALUES
('PPK0001', 'PPK Ir. Hani Mayanas', 'Satker Ir. Hani Mayanas'),
('PPK0002', 'PPK Nuris Wahyudi, SST', 'Satker Nuris Wahyudi, SSTI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addendumii`
--

CREATE TABLE `tbl_addendumii` (
  `id_addii` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addii_bal` varchar(100) NOT NULL,
  `addii_boq` varchar(100) NOT NULL,
  `addii_jdst` varchar(100) NOT NULL,
  `addii_slp` varchar(100) NOT NULL,
  `addii_kurva` varchar(100) NOT NULL,
  `addii_shop` varchar(100) NOT NULL,
  `addii_bakln` varchar(100) NOT NULL,
  `addii_naii` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addendumiii`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addendumiv`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc1`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc2`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc3`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
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
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama_paket`, `jenis`, `deskripsi`, `input_by`, `id_tahun`, `id_ppk`) VALUES
('PKT0001', 'Paket percobaan lagi', 'kontraktual', 'kontraktual 2099', 'Tegar Ferdyla M', 'THN0001', 'PPK0001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pascamc0`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendukung`
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

--
-- Dumping data for table `tbl_pendukung`
--

INSERT INTO `tbl_pendukung` (`id_pendukung`, `id_paket`, `bmn_surat_alih`, `bmn_rekomendasi`, `bmn_surat_hibah`, `keuangan_permohonan`, `keuangan_kuitansi`, `keuangan_kartu`, `keuangan_faktur`, `keuangan_pph`, `keuangan_spp`, `keuangan_spm`, `keuangan_sp2d`, `bendahara_lpj`, `bendahara_bapkdr`, `bendahara_rekening`, `bendahara_bapk`) VALUES
('DOC0001', 'PKT0001', '', '2099-Paket percobaan lagi-Pendukung-54961-ID-implementasi-pimansu-dalam-pencegahan-na_2.pdf', '2099-Paket percobaan lagi-Pendukung-54961-ID-implementasi-pimansu-dalam-pencegahan-na_3.pdf', '', '2099-Paket percobaan lagi-Pendukung-54961-ID-implementasi-pimansu-dalam-pencegahan-na_4.pdf', '', '', '', '', '', '', '', '2099-Paket percobaan lagi-Pendukung-54961-ID-implementasi-pimansu-dalam-pencegahan-na_5.pdf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pokja`
--

CREATE TABLE `tbl_pokja` (
  `id_pendukung` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `pokja_surat_perintah` varchar(100) NOT NULL,
  `pokja_dokumen_lelang` varchar(100) NOT NULL,
  `pokja_add_dokumen` varchar(100) NOT NULL,
  `pokja_undangan` varchar(100) NOT NULL,
  `pokja_pembuktian` varchar(100) NOT NULL,
  `pokja_aanwijzing` varchar(100) NOT NULL,
  `pokja_pemenang` varchar(100) NOT NULL,
  `pokja_undangan_negosiasi` varchar(100) NOT NULL,
  `pokja_berita_negosiasi` varchar(100) NOT NULL,
  `pokja_hasil_seleksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` varchar(7) NOT NULL,
  `nama_tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_ppk` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `nama_tahun`, `deskripsi`, `input_by`, `id_ppk`) VALUES
('THN0001', '2099', 'Cek toko tahun', 'Tegar Ferdyla M', 'PPK0001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `NIP`, `nama`, `bagian`, `email`, `alamat`, `foto`, `id_ppk`) VALUES
('USR0001', 'tegarferdyla', 'df70d98996977a7b6f8dcf37c3265a38', '123456789011', 'Tegar Ferdyla M', 'PPK', 'tegar@gmail.com', 'Jl.Joglo', 'user1.jpg', 'PPK0001'),
('USR0002', 'hendra', 'df70d98996977a7b6f8dcf37c3265a38', '123456789012', 'Hendra', 'PPK', 'hendra@gmail.com', 'Jl.Meruya', 'user1.jpg', 'PPK0002'),
('USR0003', 'asal', 'df70d98996977a7b6f8dcf37c3265a38', '123456789013', 'Asal', 'PPK', 'asal@gmail.com', 'Jl.Asal', 'user1.jpg', 'PPK0002'),
('USR0004', 'dalas98', 'bc5111e0de8ead33001887d4979536bc', '123456789069', 'Yusuf Farhan', 'PPK', 'dalas98@gmail.com', 'Perum', 'user1.jpg', 'PPK0001'),
('USR0005', 'tegarfm', '3ddeeab4529e3557fd663e618c7d090b', '12456789044', 'Tegar Ferdyla', 'PPK', 'tegarferdyla@gmail.com', 'Komplek DKI', 'user1.jpg', 'PPK0002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id_ppk`);

--
-- Indexes for table `tbl_addendumii`
--
ALTER TABLE `tbl_addendumii`
  ADD PRIMARY KEY (`id_addii`);

--
-- Indexes for table `tbl_addendumiii`
--
ALTER TABLE `tbl_addendumiii`
  ADD PRIMARY KEY (`id_addiii`);

--
-- Indexes for table `tbl_addendumiv`
--
ALTER TABLE `tbl_addendumiv`
  ADD PRIMARY KEY (`id_addiv`);

--
-- Indexes for table `tbl_doc1`
--
ALTER TABLE `tbl_doc1`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indexes for table `tbl_doc2`
--
ALTER TABLE `tbl_doc2`
  ADD PRIMARY KEY (`id_doc2`);

--
-- Indexes for table `tbl_doc3`
--
ALTER TABLE `tbl_doc3`
  ADD PRIMARY KEY (`id_doc3`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tbl_pascamc0`
--
ALTER TABLE `tbl_pascamc0`
  ADD PRIMARY KEY (`id_pasca`);

--
-- Indexes for table `tbl_pendukung`
--
ALTER TABLE `tbl_pendukung`
  ADD PRIMARY KEY (`id_pendukung`);

--
-- Indexes for table `tbl_pokja`
--
ALTER TABLE `tbl_pokja`
  ADD PRIMARY KEY (`id_pendukung`),
  ADD UNIQUE KEY `id_paket` (`id_paket`);

--
-- Indexes for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`),
  ADD KEY `id_ppk` (`id_ppk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
