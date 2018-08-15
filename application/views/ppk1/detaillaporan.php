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
                                    <h2 class="col-white">Disini Nama PPK</h2>
                                    <small class="col-white"><i>PENGEMBANGAN PENYEHATAN LINGKUNGAN PERMUKIMAN STRATEGIS KEMENTRIAN PEKERJAAN UMUM</i></small>
                                </td>
                                <td style="padding: 20px;" colspan="1">
                                    <img style="float: right;" src="<?php cetak(base_url('assets/assets1/img/simpandos.png')) ?>"  alt="Logo Simpandos" width="290" height="85">
                                </td>
                            <tr style="font-size: 13px;">
                                <td style="padding: 10px;" colspan="4">
                                    <h3 style="text-align: center;" class="col-tosca">
                                       <i> Disini Nama Paket Nya Cup </i>
                                       <p> (Ini Tahun nya Ex:2017)</p>
                                       <p>(Ini jenis Paket nya : Kontraktual)</p>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Surat Minat Daerah</td>
                                <td class="p-10">Contoh-File2.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Kesiapan Lahan</td>
                                <td class="p-10">Contoh-File3.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kesepakatan Bersama (KSB)</td>
                                <td class="p-10">Contoh-File4.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">Perjanjian Kerjasama (PKS)</td>
                                <td class="p-10">Contoh-File4.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">SPMK</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Naskah Kontrak</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Rencana Mutu Kontrak (RMK)</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">Berita Acara <i>Pre-Construction Meeting</i>(PCM)</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara Lapangan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Lampiran Pendukung</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kurva S revisi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10"><i>Shop Drawing</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">Naskah Adendum I</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Lampiran Pendukung</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kurva S revisi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10"><i>Shop Drawing</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">Naskah Adendum II</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Addendum II -->
                        
                    <!-- Start Addendum III -->
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Lampiran Pendukung</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kurva S revisi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10"><i>Shop Drawing</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">Naskah Adendum III</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Addendum III -->
                    
                    <!-- Start Addendum IV -->
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Justifikasi dan Spesifikasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Lampiran Pendukung</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Kurva S revisi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10"><i>Shop Drawing</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">Berita Acara Klarifikasi dan Negosiasi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">Naskah Adendum IV</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Mingguan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Bulanan Kontraktor</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Sertifikat Pembayaran</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Mingguan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Bulanan konsultan Supervisi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara <i>First Visit</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Berita Acara <i>Second Visit</i> </td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Serah Terima Pekerjaan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara <i>First Visit</i></td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Berita Acara <i>Second Visit</i> </td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Serah Terima Pekerjaan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Rekomendasi Teknis</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Surat Hibah ke Kementrian Keuangan</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Kuitansi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Kartu Pengawasan (Karwas)</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Faktur Pajak</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">5</td>
                                <td class="p-10">PPh dan PPN</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">6</td>
                                <td class="p-10">SPP</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">7</td>
                                <td class="p-10">SPM</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">8</td>
                                <td class="p-10">SP2D</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">2</td>
                                <td class="p-10">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">3</td>
                                <td class="p-10">Rekening Koran</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;" class="bg-grey">
                                <td class="p-10 center">4</td>
                                <td class="p-10">Berita Acara Pemeriksaan Kas</td>
                                <td class="p-10">Contoh-File.pdf</td>
                                <td class="p-10 center">
                                    <img src="<?php echo base_url('assets/img/check.png')?>">
                                    <img src="<?php echo base_url('assets/img/cancel.png')?>">
                                </td>
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