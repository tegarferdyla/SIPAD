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
<title>Laporan SC</title>
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
                                    <h2 class="col-white"><?php echo $hasil[0]->nama_ppk ?></h2>
                                    <small class="col-white"><i>PENGEMBANGAN PENYEHATAN LINGKUNGAN PERMUKIMAN STRATEGIS KEMENTRIAN PEKERJAAN UMUM</i></small>
                                </td>
                                <td style="padding: 20px;" colspan="1">
                                    <img style="float: right;" src="<?php cetak(base_url('assets/assets1/img/simpandos.png')) ?>"  alt="Logo Simpandos" width="290" height="85">
                                </td>
                            </tr>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="3" class="col-tosca">
                                   Tahun : <?php echo $tahun->nama_tahun ?>
                                </td>
                                <td style="font-weight: 600;" class="col-tosca" style="padding: 20px;" colspan="1">
                                   <p style="float: right;">Jenis Paket : <?php echo ucwords($hasil[0]->jenis) ?></p>
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
                                <td class="p-10 col-white bg-tosca">NAMA PAKET</td>
                                <td class="p-10 col-white bg-tosca">PERSENTASE</td>
                            </tr>
                            <?php $no = 0; foreach ($hasil as $r) {
                                $no++?>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center"><?php echo $no;?></td>
                                    <td class="p-10"><?php echo $r->nama_paket ?></td>
                                    <td class="p-10 center"><?php echo $r->total ?>%</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>