<!DOCTYPE html>
<html lang="id">
<head>
    <style>
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
    .body{
        line-height: normal;
        font-family: open sans, tahoma, sans-serif;
        margin: 0;
        -webkit-print-color-adjust: exact
    }
    .header {
        background-color: #006666;
        align-items: center;
        display: flex;
        padding: 20px;
    }
    .col-yellow {
        color: #fede00;
    }
    .bg-tosca {
        background-color: #006666;
    }
    .bg-grey {
        background-color: rgba(222, 238, 221, 0.8);
    }
    .col-white {
        color: #FFFFFF;
    }
    .col-tosca {
        color: #006666;
        -webkit-print-color-adjust: exact;
    }
    .col-header {
        background-color: rgba(0, 102, 102, 0.8);;
    }
    .p-5 {
        padding: 5px;
    }
    .p-10 {
        padding: 10px;
    }
    .p-20 {
        padding: 20px;
    }
    .center {
        text-align: center;
    }
    .cetak {
        text-align: right;
        padding-right: 15px;
    }
    .nama-mitra {
        font-size: 13px; font-weight: 600;
    }
    .isi-laporan {
        width: 100%;text-align: center; border: 1px solid rgba(0,0,0,0.1); padding: 8px 15px 8px 15px;
    }
</style>
<title>Laporan Detail Paket</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css"> -->
</head>
<body>
    <div style="background: url(assets/img/logo-tni-opacity.png) center no-repeat;background-size: contain;width: 790px;">
        <table width="790" cellspacing="0" cellpadding="0" class="container" style="width: 790px; padding: 20px;">
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="0" class="p-20">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                   <img src="<?php echo base_url('assets/assets1/img/logo1.jpg') ?>" alt="Logo PU" width="40%"">
                                </td>
                                <td class="cetak no-print" colspan="2">
                                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.print()">
                                        <span style="vertical-align: middle;">Cetak</span>
                                        <img src="<?php echo base_url('assets/img/print.png')?>" style="vertical-align: middle;height: 20px;width: 20px;">
                                    </a>
                                </td>                                
                            </tr>
                        </tbody>
                    </table>
                        
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%;">
                        <tbody>
                            <tr class="col-header nama-mitra">
                                <td style="padding: 20px;" colspan="3">
                                    <h2 class="col-white"><?php echo $ppk ?></h2>
                                    <small class="col-white"><i>PENGEMBANGAN PENYEHATAN LINGKUNGAN PERMUKIMAN STRATEGIS KEMENTRIAN PEKERJAAN UMUM</i></small>
                                </td>
                                <td style="padding: 20px;" colspan="1">
                                    <img style="float: right;" src="<?php cetak(base_url('assets/assets1/img/simpandos.png')) ?>"  alt="Logo Simpandos" width="290" height="85">
                                </td>
                            <tr style="font-size: 13px;">
                                <td style="padding: 10px;" colspan="4">
                                    <h3 style="text-align: center;" class="col-tosca">
                                       <i><?php echo $show[0]['nama_paket']; ?></i>
                                       <p> <?php echo $tahun->nama_tahun ?></p>
                                       <p><?php echo $show[0]['jenis']; ?></p>
                                    </h3>
                                </td>
                            </tr>
                            <tr style="font-size: 20px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    Dokumen Utama
                                </td>
                            </tr>
                            <!-- Start Kelompok Surat 1 -->
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    I. Kelompok Surat 1
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                            <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Surat Minat Daerah</td>
                                <?php if ($doc1->surat_md!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->surat_md ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Surat Minat Daerah</td>
                                <?php if ($doc1->surat_mh!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->surat_mh ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Kesiapan Lahan</td>
                                <?php if ($doc1->surat_kl!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->surat_kl ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kesepakatan Bersama (KSB)</td>
                                <?php if ($doc1->kesepakatan_bersama!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->kesepakatan_bersama ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">Perjanjian Kerjasama (PKS)</td>
                                <?php if ($doc1->perjanjian_kerjasama!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->perjanjian_kerjasama ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 1 -->

                    <!-- Start Kelompok Surat 2 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    II. Kelompok Surat 2
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">SPPBJ</td>
                                <?php if ($doc1->sppbj!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->sppbj ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">SPMK</td>
                                <?php if ($doc1->spmk!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->spmk ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Naskah Kontrak</td>
                                <?php if ($doc1->naskah_kontrak!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->naskah_kontrak ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Rencana Mutu Kontrak (RMK)</td>
                                <?php if ($doc1->rencana_mk!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->rencana_mk ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">Berita Acara <i>Pre-Construction Meeting</i>(PCM)</td>
                                <?php if ($doc1->bcp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->bcp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 2 -->

                    <!-- Start MC0 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    III. MC0
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10"><i>Design Drawing</i></td>
                                <?php if ($doc1->mc0_dd!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->mc0_dd ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara Lapangan</td>
                                <?php if ($doc1->mc0_bal!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->mc0_bal ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <?php if ($doc1->mc0_jdst!=NULL): ?>
                                    <td class="p-10"><?php echo $doc1->mc0_jdst ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End MC0 -->

                    <!-- Start Hasil Kalrifikasi Pasca MC0 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    IV. Hasil Klarifikasi Pasca MC0
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10"><i>Bill of Quantity</i></td>
                                <?php if ($doc4->pasca_boq!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_boq ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <?php if ($doc4->pasca_jdst!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_jdst ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Lampiran Pendukung</td>
                                <?php if ($doc4->pasca_slp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_slp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kurva S revisi</td>
                                <?php if ($doc4->pasca_kurva!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_kurva ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10"><i>Shop Drawing</i></td>
                                <?php if ($doc4->pasca_shop!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_shop ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                <?php if ($doc4->pasca_bakn!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_bakn ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">Naskah Adendum I</td>
                                <?php if ($doc4->pasca_nai!=NULL): ?>
                                    <td class="p-10"><?php echo $doc4->pasca_nai ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Hasil Klarifikasi MC0 -->

                    <!-- ------------------------------------- -->
                    <!-- ATTTENTION CUP -->
                    <!-- BACA NIH -->
                    <!-- Nah dibawah ini tabel buat view adendum II, III dan IV ditampilin kalo ada datanya aja cup , kalo ga ada jangan di tampilin tabel view nya,pokok nya dia nampilin yang sesuai ada datanya aja misal data nya cuma ada di adendum II yaudah table view adendum II aja yang ditampilin, Oke -->
                    <!-- Semangat Bray-->
                    <!-- -------------------------------------- -->

                    <!-- Start Addendum II -->
                    <?php if (($doc5->addii_bal||$doc5->addii_boq||$doc5->addii_jdst||$doc5->addii_slp||$doc5->addii_kurva||$doc5->addii_shop||$doc5->addii_naii)!=NULL): ?>
                        <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                        V. Addendum II
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr size="10" noshade style="background-color: #fede00; border: none;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100% isi-laporan">
                            <tbody>
                                 <tr>
                                    <td class="p-10 col-white bg-tosca">NO</td>
                                    <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                    <td class="p-10 col-white bg-tosca">FILE</td>
                                    <td class="p-10 col-white bg-tosca">STATUS</td>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">1</td>
                                    <td class="p-10"><i>Bill of Quantity</i></td>
                                    <?php if ($doc5->addii_bal!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_bal ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">2</td>
                                    <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                    <?php if ($doc5->addii_boq!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_boq ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">3</td>
                                    <td class="p-10">Surat Lampiran Pendukung</td>
                                    <?php if ($doc5->addii_jdst!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_jdst ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">4</td>
                                    <td class="p-10">Kurva S revisi</td>
                                    <?php if ($doc5->addii_slp!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_slp ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">5</td>
                                    <td class="p-10"><i>Shop Drawing</i></td>
                                    <?php if ($doc5->addii_kurva!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_kurva ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">6</td>
                                    <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                    <?php if ($doc5->addii_shop!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_shop ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">7</td>
                                    <td class="p-10">Naskah Adendum II</td>
                                    <?php if ($doc5->addii_naii!=NULL): ?>
                                        <td class="p-10"><?php echo $doc5->addii_naii ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                            </tbody>
                        </table>
                    <?php endif ?>
                    <!-- End Addendum II -->
                        
                    <!-- Start Addendum III -->
                    <?php if (($doc6->addiii_bal||$doc6->addiii_boq||$doc6->addiii_jdst||$doc6->addiii_slp||$doc6->addiii_kurva||$doc6->addiii_shop||$doc6->addii_naiii)!=NULL): ?>
                        <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                        VI. Addendum III  
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr size="10" noshade style="background-color: #fede00; border: none;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100% isi-laporan">
                            <tbody>
                                 <tr>
                                    <td class="p-10 col-white bg-tosca">NO</td>
                                    <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                    <td class="p-10 col-white bg-tosca">FILE</td>
                                    <td class="p-10 col-white bg-tosca">STATUS</td>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">1</td>
                                    <td class="p-10"><i>Bill of Quantity</i></td>
                                    <?php if ($doc6->addiii_bal!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_bal ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">2</td>
                                    <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                    <?php if ($doc6->addiii_boq!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_boq ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">3</td>
                                    <td class="p-10">Surat Lampiran Pendukung</td>
                                    <?php if ($doc6->addiii_jdst!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_jdst ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">4</td>
                                    <td class="p-10">Kurva S revisi</td>
                                    <?php if ($doc6->addiii_slp!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_slp ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">5</td>
                                    <td class="p-10"><i>Shop Drawing</i></td>
                                    <?php if ($doc6->addiii_kurva!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_kurva ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">6</td>
                                    <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                    <?php if ($doc6->addiii_shop!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_shop ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">7</td>
                                    <td class="p-10">Berita Acara Lapangan</td>
                                    <?php if ($doc6->addiii_bakln!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addiii_bakln ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">7</td>
                                    <td class="p-10">Naskah Adendum III</td>
                                    <?php if ($doc6->addii_naiii!=NULL): ?>
                                        <td class="p-10"><?php echo $doc6->addii_naiii ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                            </tbody>
                        </table>
                    <?php endif ?>
                    <!-- End Addendum III -->
                    
                    <!-- Start Addendum IV -->
                    <?php if (($doc7->addiv_bal||$doc7->addiv_boq||$doc7->addiv_jdst||$doc7->addiv_slp||$doc7->addiv_kurva||$doc7->addiv_shop||$doc7->addiv_naiv)!=NULL): ?>
                        <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                            <tbody>
                                <tr style="font-size: 13px;">
                                    <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                        VII. Addendum IV 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <hr size="10" noshade style="background-color: #fede00; border: none;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100% isi-laporan">
                            <tbody>
                                 <tr>
                                    <td class="p-10 col-white bg-tosca">NO</td>
                                    <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                    <td class="p-10 col-white bg-tosca">FILE</td>
                                    <td class="p-10 col-white bg-tosca">STATUS</td>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">1</td>
                                    <td class="p-10"><i>Bill of Quantity</i></td>
                                    <?php if ($doc7->addiv_bal!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_bal ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">2</td>
                                    <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                    <?php if ($doc7->addiv_boq!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_boq ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">3</td>
                                    <td class="p-10">Surat Lampiran Pendukung</td>
                                    <?php if ($doc7->addiv_jdst!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_jdst ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">4</td>
                                    <td class="p-10">Kurva S revisi</td>
                                    <?php if ($doc7->addiv_slp!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_slp ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">5</td>
                                    <td class="p-10"><i>Shop Drawing</i></td>
                                    <?php if ($doc7->addiv_kurva!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_kurva ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">6</td>
                                    <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                    <?php if ($doc7->addiv_shop!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_shop ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">7</td>
                                    <td class="p-10">Berita Acara Lapangan</td>
                                    <?php if ($doc7->addiv_bakn!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_bakn ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center">7</td>
                                    <td class="p-10">Naskah Adendum III</td>
                                    <?php if ($doc7->addiv_naiv!=NULL): ?>
                                        <td class="p-10"><?php echo $doc7->addiv_naiv ?></td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/check.png')?>">
                                        </td>
                                    <?php else: ?>
                                        <td class="p-10">Data Belum di Upload</td>
                                        <td class="p-10 center">
                                            <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                        </td>
                                    <?php endif ?>
                                </tr>
                            </tbody>
                        </table>
                    <?php endif ?>
                    <!-- End Addendum IV -->
                        
                    <!-- Start Kelompok Surat 3   -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    VIII. Kelompok Surat 3
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Laporan Harian</td>
                                <?php if ($doc2->laporan_harian1!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->laporan_harian1 ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Mingguan</td>
                                <?php if ($doc2->laporan_mingguan1!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->laporan_mingguan1 ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Bulanan Kontraktor</td>
                                <?php if ($doc2->bulanan_kontraktor!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->bulanan_kontraktor ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Sertifikat Pembayaran</td>
                                <?php if ($doc2->sertifikat_pembayaran!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->sertifikat_pembayaran ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 3 -->

                    <!-- Start Kelompok Surat 4 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    IX. Kelompok Surat 4
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Laporan Harian</td>
                                <?php if ($doc2->laporan_harian2!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->laporan_harian2 ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Mingguan</td>
                                <?php if ($doc2->laporan_mingguan2!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->laporan_mingguan2 ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Bulanan konsultan Supervisi</td>
                                <?php if ($doc2->bulanan_konsultan!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->bulanan_konsultan ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 4 -->

                    <!-- Start Kelompok Surat 5 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    X. Kelompok Surat 5
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Berita Acara Pengujian Material</td>
                                <?php if ($doc2->berita_apm!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->berita_apm ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 5  -->

                    <!-- Start Kelompok Surat 6 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    XI. Kelompok Surat 6
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Berita Acara <i>Show Cause Meeting</i> (SCM)</td>
                                <?php if ($doc2->berita_ascm!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->berita_ascm ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Kelompok Surat 6 -->

                    <!-- Start Provisional Hand Over (PHO) -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    XII. <i>Provisional Hand Over</i> (PHO)
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10"><i>Surat Permohonan PHO</i></td>
                                <?php if ($doc2->provisional_sp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->provisional_sp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara <i>First Visit</i></td>
                                <?php if ($doc2->provisional_bafv!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->provisional_bafv ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Berita Acara <i>Second Visit</i> </td>
                                <?php if ($doc2->provisional_basv!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->provisional_basv ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Serah Terima Pekerjaan</td>
                                <?php if ($doc2->provisional_bastp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc2->provisional_bastp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Provisional Hand Over (PHO) -->

                    <!-- Start Final Hand Over -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    XIII. <i>Final Hand Over</i> (PHO)
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10"><i>Surat Permohonan PHO</i></td>
                                <?php if ($doc3->final_sp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc3->final_sp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara <i>First Visit</i></td>
                                <?php if ($doc3->final_bafv!=NULL): ?>
                                    <td class="p-10"><?php echo $doc3->final_bafv ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Berita Acara <i>Second Visit</i> </td>
                                <?php if ($doc3->final_basv!=NULL): ?>
                                    <td class="p-10"><?php echo $doc3->final_basv ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Serah Terima Pekerjaan</td>
                                <?php if ($doc3->final_bastp!=NULL): ?>
                                    <td class="p-10"><?php echo $doc3->final_bastp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Final Hand Over -->
                    <!-- Start Kelompok Surat 5 -->
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 50px">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    XIV. Dokumentasi
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Dokumentasi</td>
                                <?php if ($doc3->final_dokumentasi!=NULL): ?>
                                    <td class="p-10"><?php echo $doc3->final_dokumentasi ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Dokumentasi  -->
                    
                    <!-- Star BMN -->
                    <table width="100%" style="width: 100%; border-top: 1px dashed #DDD; padding: 25px 0px; margin-top: 50px;">
                        <tbody>
                            <tr style="font-size: 20px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    Dokumen Pendukung
                                </td>
                            </tr>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    I. BMN
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                            <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Surat Alih Status</td>
                                <?php if ($pendukung->bmn_surat_alih!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bmn_surat_alih ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Rekomendasi Teknis</td>
                                <?php if ($pendukung->bmn_rekomendasi!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bmn_rekomendasi ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Hibah ke Kementrian Keuangan</td>
                                <?php if ($pendukung->bmn_surat_hibah!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bmn_surat_hibah ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End BMN -->

                    <!-- Start Keuangan -->
                    <table width="100% isi-laporan">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    II. KEUANGAN
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">Permohonan Pembayaran</td>
                                <?php if ($pendukung->keuangan_permohonan!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_permohonan ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Kuitansi</td>
                                <?php if ($pendukung->keuangan_kuitansi!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_kuitansi ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Kartu Pengawasan (Karwas)</td>
                                <?php if ($pendukung->keuangan_kartu!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_kartu ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Faktur Pajak</td>
                                <?php if ($pendukung->keuangan_faktur!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_faktur ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">PPh dan PPN</td>
                                <?php if ($pendukung->keuangan_pph!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_pph ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">SPP</td>
                                <?php if ($pendukung->keuangan_spp!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_spp ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">SPM</td>
                                <?php if ($pendukung->keuangan_spm!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_spm ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">8</td>
                                <td class="p-10">SP2D</td>
                                <?php if ($pendukung->keuangan_sp2d!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->keuangan_sp2d ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Keuangan -->
                       <br><br>  
                 <!-- Start Bendahara -->
                 <table width="100% isi-laporan">
                        <tbody>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="4" class="col-tosca">
                                    III. BENDAHARA
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                             <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">NAMA SURAT</td>
                                <td class="p-10 col-white bg-tosca">FILE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">1</td>
                                <td class="p-10">LPJ</td>
                                <?php if ($pendukung->bendahara_lpj!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bendahara_lpj ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</td>
                                <?php if ($pendukung->bendahara_bapkdr!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bendahara_bapkdr ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Rekening Koran</td>
                                <?php if ($pendukung->bendahara_rekening!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bendahara_rekening ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Pemeriksaan Kas</td>
                                <?php if ($pendukung->bendahara_bapk!=NULL): ?>
                                    <td class="p-10"><?php echo $pendukung->bendahara_bapk ?></td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/check.png')?>">
                                    </td>
                                <?php else: ?>
                                    <td class="p-10">Data Belum di Upload</td>
                                    <td class="p-10 center">
                                        <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    </table>
                 <!-- End Bendahara -->
                </td>
            </tr>
        </table>
    </div>
</body>
</html>