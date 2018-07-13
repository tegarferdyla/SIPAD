 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengarsipan Dokumen Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
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
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data yang anda pilih kosong harap isi terlebih dahulu
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php foreach ($get_tahun  as $u) { ?>
        <div class="widget-holder widget-sm col-md-3 widget-full-height">
            <a href="<?php echo site_url('ppk1/jenispaket/'.$u['id_tahun'])?>">
            <div class="widget-bg">
                <div class="widget-body">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5"><?php echo $u['deskripsi']; ?></p><span class="counter-title color-info"><span class="counter">10</span></span>
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