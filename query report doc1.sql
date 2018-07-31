SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'surat_md' file, a.surat_md value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') a
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'surat_mh' file, a.surat_mh value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'surat_kl' file, a.surat_kl value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'kesepakatan_bersama' file, a.kesepakatan_bersama value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') d
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'perjanjian_kerjasama' file, a.perjanjian_kerjasama value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') e
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'sppbj' file, a.sppbj value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') f
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'spmk' file, a.spmk value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') g
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'naskah_kontrak' file, a.naskah_kontrak value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') h
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'rencana_mk' file, a.rencana_mk value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') i
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'bcp' file, a.bcp value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') j
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'mc0_dd' file, a.mc0_dd value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') k
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'mc0_bal' file, a.mc0_bal value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') l
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'mc0_jdst' file, a.mc0_jdst value
from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') m
)n
GROUP by id_paket



SELECT id_paket, sum(hasil) hasil from (
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'file_1' file, a.file_1 value
from doc_1 a , tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001' ) a
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'file_2' file, a.file_2 value
from doc_1 a , tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') b
union
select * , if(value = "",0,1) as hasil from(
select a.id_paket, 'file_3' file, a.file_3 value
from doc_1 a , tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = 'THN0001') c) d
GROUP by id_paket

select a.* , b.id_tahun from doc_1 a , tbl_paket b WHERE a.id_paket = b.id_paket AND b.id_tahun = 'THN0001'