SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'laporan_harian1' file, a.laporan_harian1 value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'laporan_mingguan1' file, a.laporan_mingguan1 value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bulanan_kontraktor' file, a.bulanan_kontraktor value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'sertifikat_pembayaran' file, a.sertifikat_pembayaran value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'laporan_harian2' file, a.laporan_harian2 value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'laporan_mingguan2' file, a.laporan_mingguan2 value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bulanan_konsultan' file, a.bulanan_konsultan value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'berita_apm' file, a.berita_apm value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'berita_ascm' file, a.berita_ascm value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') i
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'provisional_sp' file, a.provisional_sp value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') j
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'provisional_bafv' file, a.provisional_bafv value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') k
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'provisional_basv' file, a.provisional_basv value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') l
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'provisional_bastp' file, a.provisional_bastp value
from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') m
)n
GROUP by id_paket



---- QUERY TBL_DOC3 
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'final_sp' file, a.final_sp value
from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'final_bafv' file, a.final_bafv value
from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'final_basv' file, a.final_basv value
from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'final_bastp' file, a.final_bastp value
from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'final_dokumentasi' file, a.final_dokumentasi value
from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
)n
GROUP by id_paket

--- QUERY `tbl_addendumii`
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_bal' file, a.addii_bal value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_boq' file, a.addii_boq value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_jdst' file, a.addii_jdst value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_slp' file, a.addii_slp value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_kurva' file, a.addii_kurva value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_shop' file, a.addii_shop value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_bakln' file, a.addii_bakln value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addii_naii' file, a.addii_naii value
from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
)n
GROUP by id_paket

--- Query tbl_addendumiii
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_bal' file, a.addiii_bal value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_boq' file, a.addiii_boq value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_jdst' file, a.addiii_jdst value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_slp' file, a.addiii_slp value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_kurva' file, a.addiii_kurva value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_shop' file, a.addiii_shop value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_bakln' file, a.addiii_bakln value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiii_naiii' file, a.addii_naiii value
from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
)n
GROUP by id_paket

--- Query tbl_addendumiv
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_bal' file, a.addiv_bal value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_boq' file, a.addiv_boq value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_jdst' file, a.addiv_jdst value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_slp' file, a.addiv_slp value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_kurva' file, a.addiv_kurva value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_shop' file, a.addiv_shop value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_bakn' file, a.addiv_bakn value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'addiv_naiv' file, a.addiv_naiv value
from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
)n
GROUP by id_paket


--- Query tbl_pascamc0
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_boq' file, a.pasca_boq value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_jdst' file, a.pasca_jdst value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_slp' file, a.pasca_slp value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_kurva' file, a.pasca_kurva value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_shop' file, a.pasca_shop value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_bakn' file, a.pasca_bakn value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'pasca_nai' file, a.pasca_nai value
from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
)n
GROUP by id_paket


-- Query tbl_pendukung
SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bmn_surat_alih' file, a.bmn_surat_alih value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bmn_rekomendasi' file, a.bmn_rekomendasi value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bmn_surat_hibah' file, a.bmn_surat_hibah value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_permohonan' file, a.keuangan_permohonan value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_kuitansi' file, a.keuangan_kuitansi value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_kartu' file, a.keuangan_kartu value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_faktur' file, a.keuangan_faktur value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_pph' file, a.keuangan_pph value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_spp' file, a.keuangan_spp value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') i
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_spm' file, a.keuangan_spm value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') j
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'keuangan_sp2d' file, a.keuangan_sp2d value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') k
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bendahara_lpj' file, a.bendahara_lpj value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') l
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bendahara_bapkdr' file, a.bendahara_bapkdr value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') m
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bendahara_rekening' file, a.bendahara_rekening value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') n
UNION
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bendahara_bapk' file, a.bendahara_bapk value
from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') o
)n
GROUP by id_paket