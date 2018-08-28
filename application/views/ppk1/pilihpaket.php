 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Daftar Paket <?php echo ucwords($jenis[0]['jenis']) ?></h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('PPK1') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('PPK1/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a>
                </li>
                <li class="breadcrumb-item active"><?php echo ucwords($jenis[0]['jenis']) ?></li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list">
        <div class="row">
            <div class="widget-holder col-md-12">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="box-title">Pilih Paket</h5>
                            </div>
                            <div class="col-md-2">
                                <a href="<?php echo site_url('PPK1/laporanpaket/'.$tahun->id_tahun.'/'.$jenis[0]['jenis']) ?>" style="float: right;"><i class="list-icon feather feather-printer" title="Cetak Laporan"></i> Cetak Laporan</a>
                            </div> 
                        </div>
                        <div class="row">

                        </div>
                        <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                            <?php foreach ($hasil as $u) {?>
                            <div class="card card-outline-info">
                                <div class="card-header" role="tab" id="heading4">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#<?php echo $u->id_paket ?>" aria-expanded="false" aria-controls="<?php echo $u->id_paket ?>">
                                    <div class="row">
                                        <div class="col-md-11">
                                        <h5 class="card-title"><b><?php echo $u->nama_paket ?></b></h2>
                                        </div>
                                        <div class="col-md-1">
                                            <h5 class="card-title <?php if($u->total<50){echo "text-danger";}else{echo "text-white";} ?>"><b><?php echo $u->total; ?>%</b></h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div id="<?php echo $u->id_paket ?>" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <a href="<?php echo site_url('PPK1/viewdocutama/' . $u->id_paket) ?>"><li class="list-group-item">Dokumen Utama</li></a>
                                            <a href="<?php echo site_url('PPK1/viewdocpendukung/'.$u->id_paket) ?>"><li class="list-group-item">Dokumen Pendukung</li></a>
                                            <li class="list-group-item"><p style="color: blue">- Keterangan :</p>
                                                <p><?php echo $u->deskripsi; ?></p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                                <!-- /.panel-group -->
                </div>
            </div>
                    <!-- /.widget-body -->
        </div>
                <!-- /.widget-bg -->
    </div>
            <!-- /.widget-holder -->
</div>
    <!-- /.widget-list -->
</main>