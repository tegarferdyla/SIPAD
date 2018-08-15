 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengarsipan Dokumen</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= site_url('Bendahara') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php echo $namappk[0]['nama'] ?></li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">
        <!-- /.widget-holder -->
        <?php if ($this->session->flashdata('kosong')):?>
            <div class="col-md-12">
                <div class="alert-group">
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data paket yang anda pilih tidak tersedia harap daftarkan paket anda terlebih dahulu
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php foreach ($get_tahun  as $u) { ?>
        <div class="widget-holder widget-sm col-md-3 widget-full-height">
            <a href="<?php echo base_url()."Bendahara/jenispaket/".$u['id_tahun']; ?>">
            <div class="widget-bg">
                <div class="widget-body">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5"><?php echo $u['deskripsi']; ?></p><span class="counter-title color-info"><?php echo $u['nama_tahun']; ?></span>
                            <!-- /.counter-title -->
                            <div class="progress" style="width: 70%; position: relative; top: 25px">
                                <div class="progress-bar bg-info" style="width: 66%" role="progressbar"><span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.media-body -->
                        <div class="pull-right align-self-center"><i class="list-icon feather feather-file bg-info"></i>
                        </div>
                    </div>
                    <!-- /.counter-w-info -->
                </div>
                <!-- /.widget-body -->
            </div>
            </a>
            <!-- /.widget-bg -->
        </div>
           <?php } ?>
        <!-- /.widget-holder -->

            <!-- /.widget-holder -->
        </div>
        <hr>
    </main>