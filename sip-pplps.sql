-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.28-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk sip-pplps
CREATE DATABASE IF NOT EXISTS `sip-pplps` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sip-pplps`;

-- membuang struktur untuk table sip-pplps.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.admin: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
	('AD00001', 'admin', 'df70d98996977a7b6f8dcf37c3265a38', 'Administrator');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.ppk
CREATE TABLE IF NOT EXISTS `ppk` (
  `id_ppk` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_ppk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.ppk: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `ppk` DISABLE KEYS */;
REPLACE INTO `ppk` (`id_ppk`, `nama`, `keterangan`) VALUES
	('PPK0001', 'PPK Ir. Hani Mayanas', 'Satker Ir. Hani Mayanas'),
	('PPK0002', 'PPK Nuris Wahyudi, SST', 'Satker Nuris Wahyudi, SSTI');
/*!40000 ALTER TABLE `ppk` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_addendumii
CREATE TABLE IF NOT EXISTS `tbl_addendumii` (
  `id_addii` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addii_bal` varchar(100) NOT NULL,
  `addii_boq` varchar(100) NOT NULL,
  `addii_jdst` varchar(100) NOT NULL,
  `addii_slp` varchar(100) NOT NULL,
  `addii_kurva` varchar(100) NOT NULL,
  `addii_shop` varchar(100) NOT NULL,
  `addii_bakln` varchar(100) NOT NULL,
  `addii_naii` varchar(100) NOT NULL,
  PRIMARY KEY (`id_addii`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_addendumii: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_addendumii` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_addendumii` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_addendumiii
CREATE TABLE IF NOT EXISTS `tbl_addendumiii` (
  `id_addiii` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addiii_bal` varchar(100) NOT NULL,
  `addiii_boq` varchar(100) NOT NULL,
  `addiii_jdst` varchar(100) NOT NULL,
  `addiii_slp` varchar(100) NOT NULL,
  `addiii_kurva` varchar(100) NOT NULL,
  `addiii_shop` varchar(100) NOT NULL,
  `addiii_bakln` varchar(100) NOT NULL,
  `addii_naiii` varchar(100) NOT NULL,
  PRIMARY KEY (`id_addiii`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_addendumiii: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_addendumiii` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_addendumiii` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_addendumiv
CREATE TABLE IF NOT EXISTS `tbl_addendumiv` (
  `id_addiv` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `addiv_bal` varchar(100) NOT NULL,
  `addiv_boq` varchar(100) NOT NULL,
  `addiv_jdst` varchar(100) NOT NULL,
  `addiv_slp` varchar(100) NOT NULL,
  `addiv_kurva` varchar(100) NOT NULL,
  `addiv_shop` varchar(100) NOT NULL,
  `addiv_bakn` varchar(100) NOT NULL,
  `addiv_naiv` varchar(100) NOT NULL,
  PRIMARY KEY (`id_addiv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_addendumiv: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_addendumiv` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_addendumiv` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_doc1
CREATE TABLE IF NOT EXISTS `tbl_doc1` (
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
  `mc0_jdst` varchar(100) NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_doc1: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_doc1` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_doc1` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_doc2
CREATE TABLE IF NOT EXISTS `tbl_doc2` (
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
  `provisional_bastp` varchar(100) NOT NULL,
  PRIMARY KEY (`id_doc2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_doc2: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_doc2` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_doc2` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_doc3
CREATE TABLE IF NOT EXISTS `tbl_doc3` (
  `id_doc3` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `final_sp` varchar(100) NOT NULL,
  `final_bafv` varchar(100) NOT NULL,
  `final_basv` varchar(100) NOT NULL,
  `final_bastp` varchar(100) NOT NULL,
  `final_dokumentasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_doc3`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_doc3: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_doc3` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_doc3` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_paket
CREATE TABLE IF NOT EXISTS `tbl_paket` (
  `id_paket` varchar(7) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `jenis` enum('kontraktual','suakelola') NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_tahun` varchar(7) NOT NULL,
  `id_ppk` varchar(7) NOT NULL,
  PRIMARY KEY (`id_paket`),
  KEY `id_tahun` (`id_tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_paket: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_paket` DISABLE KEYS */;
REPLACE INTO `tbl_paket` (`id_paket`, `nama_paket`, `jenis`, `deskripsi`, `input_by`, `id_tahun`, `id_ppk`) VALUES
	('PKT0001', 'Test 2014', 'kontraktual', 'Ini Tahun 2014', 'Tegar Ferdyla M', 'THN0001', 'PPK0001');
/*!40000 ALTER TABLE `tbl_paket` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_pascamc0
CREATE TABLE IF NOT EXISTS `tbl_pascamc0` (
  `id_pasca` varchar(7) NOT NULL,
  `id_paket` varchar(7) NOT NULL,
  `pasca_boq` varchar(100) NOT NULL,
  `pasca_jdst` varchar(100) NOT NULL,
  `pasca_slp` varchar(100) NOT NULL,
  `pasca_kurva` varchar(100) NOT NULL,
  `pasca_shop` varchar(100) NOT NULL,
  `pasca_bakn` varchar(100) NOT NULL,
  `pasca_nai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pasca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_pascamc0: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_pascamc0` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pascamc0` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_pendukung
CREATE TABLE IF NOT EXISTS `tbl_pendukung` (
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
  `bendahara_bapk` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pendukung`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_pendukung: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_pendukung` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pendukung` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.tbl_tahun
CREATE TABLE IF NOT EXISTS `tbl_tahun` (
  `id_tahun` varchar(7) NOT NULL,
  `nama_tahun` varchar(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `input_by` varchar(50) NOT NULL,
  `id_ppk` varchar(7) NOT NULL,
  PRIMARY KEY (`id_tahun`),
  KEY `id_ppk` (`id_ppk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.tbl_tahun: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tbl_tahun` DISABLE KEYS */;
REPLACE INTO `tbl_tahun` (`id_tahun`, `nama_tahun`, `deskripsi`, `input_by`, `id_ppk`) VALUES
	('THN0001', '2014', 'Tahun 2014', 'Tegar Ferdyla M', 'PPK0001');
/*!40000 ALTER TABLE `tbl_tahun` ENABLE KEYS */;

-- membuang struktur untuk table sip-pplps.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(7) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_ppk` varchar(7) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel sip-pplps.user: ~5 rows (lebih kurang)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id_user`, `username`, `password`, `NIP`, `nama`, `bagian`, `email`, `alamat`, `foto`, `id_ppk`) VALUES
	('USR0001', 'tegarferdyla', 'df70d98996977a7b6f8dcf37c3265a38', '123456789011', 'Tegar Ferdyla M', 'PPK', 'tegar@gmail.com', 'Jl.Joglo', 'user1.jpg', 'PPK0001'),
	('USR0002', 'hendra', 'df70d98996977a7b6f8dcf37c3265a38', '123456789012', 'Hendra', 'PPK', 'hendra@gmail.com', 'Jl.Meruya', 'user1.jpg', 'PPK0002'),
	('USR0003', 'asal', 'df70d98996977a7b6f8dcf37c3265a38', '123456789013', 'Asal', 'PPK', 'asal@gmail.com', 'Jl.Asal', 'user1.jpg', 'PPK0002'),
	('USR0004', 'dalas98', 'bc5111e0de8ead33001887d4979536bc', '123456789069', 'Yusuf Farhan', 'PPK', 'dalas98@gmail.com', 'Perum', 'user1.jpg', 'PPK0001'),
	('USR0005', 'tegarfm', '3ddeeab4529e3557fd663e618c7d090b', '12456789044', 'Tegar Ferdyla', 'PPK', 'tegarferdyla@gmail.com', 'Komplek DKI', 'user1.jpg', 'PPK0002');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
