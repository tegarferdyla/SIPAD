<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen Utama</h6>
            <span class="text-muted"><?php echo $show[0]['nama_paket']; ?></span>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('PPK1') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/pilihpaket/'.$tahun->id_tahun.'/'.$paket[0]['jenis']) ?>"><?php echo ucwords($paket[0]['jenis']) ?></a></li>
                <li class="breadcrumb-item active">View Dokumen</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="row">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('updateberhasil')): ?>
                <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> File berhasil di upload.
                </div>
            <?php endif?>
        </div>
    </div>
    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <div class="row">
                        <div class="col-md-11">
                        <h4 class="box-title mr-b-0" >Kelompok 1</h4>
                        </div>
                        <div class="col-md-1">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu list-unstyled card-body">
                                    <!-- <li><a href="<?php echo site_url('ppk1/inputdokutama/' . $show[0]['id_paket']) ?>">Input Dokumen</a></li> -->
                                    <li><a href="<?php echo site_url('ppk1/editdocutama/' . $show[0]['id_paket']) ?>">Edit Dokumen</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket"> -->
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Minat Daerah</label>
                            <p> <?php echo $doc1->surat_md ?>
                               <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                               value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_md) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->surat_md ?>">
                                </button>
                                <?php if ($doc1->surat_md!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_md) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>

                            <!-- <input type="file" name="file1" accept="application/pdf" class="form-control"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Menerima Hibah</label>
                            <p> <?php echo $doc1->surat_mh ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_mh) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->surat_mh ?>">
                                </button>
                                <?php if ($doc1->surat_mh!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_mh) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Kesiapan Lahan</label>
                            <p><?php echo $doc1->surat_kl ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_kl) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->surat_kl ?>">
                                </button>
                                <?php if ($doc1->surat_kl!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_kl) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file3" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kesepakatan Bersama (KSB)</label>
                            <p><?php echo $doc1->kesepakatan_bersama ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->kesepakatan_bersama) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->kesepakatan_bersama ?>">
                                </button>
                                <?php if ($doc1->kesepakatan_bersama!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->kesepakatan_bersama) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                          <!--   <input class="form-control" type="file" name="file4" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Perjanjian Kerja Sama</label>
                            <p><?php echo $doc1->perjanjian_kerjasama ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->perjanjian_kerjasama) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->perjanjian_kerjasama ?>">
                                </button>
                                <?php if ($doc1->perjanjian_kerjasama!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->perjanjian_kerjasama) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                           <!--  <input class="form-control" type="file" name="file5" accept="application/pdf"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 2</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPBJ</label>
                            <p><?php echo $doc1->sppbj ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                                   value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->sppbj) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->sppbj ?>">
                                </button>
                                <?php if ($doc1->sppbj!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->sppbj) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file6" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPMK</label>
                            <p><?php echo $doc1->spmk ?>
                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                               value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->spmk) ?>">
                                <i class="feather feather-eye text-dark"></i>
                                <input type="hidden" value="<?= $doc1->spmk ?>">
                                </button>
                                <?php if ($doc1->spmk!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->spmk) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                        </p>
                           <!--  <input class="form-control" type="file" name="file7" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Naskah Kontrak</label>
                            <p><?php echo $doc1->naskah_kontrak ?>
                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                               value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->naskah_kontrak) ?>">
                                <i class="feather feather-eye text-dark"></i>
                                <input type="hidden" value="<?= $doc1->naskah_kontrak ?>">
                                </button>
                                <?php if ($doc1->naskah_kontrak!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->naskah_kontrak) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file8" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Rencana Mutu Kontrak</label>
                            <p><?php echo $doc1->rencana_mk ?>
                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                               value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->rencana_mk) ?>">
                                <i class="feather feather-eye text-dark"></i>
                                <input type="hidden" value="<?= $doc1->rencana_mk ?>">
                                </button>  
                                <?php if ($doc1->rencana_mk!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->rencana_mk) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                           <!--  <input class="form-control" type="file" name="file9" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita acara Pre-Construction</label>
                            <p><?php echo $doc1->bcp ?>
                            <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                               value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->bcp) ?>">
                                <i class="feather feather-eye text-dark"></i>
                                <input type="hidden" value="<?= $doc1->bcp ?>">
                                </button>
                                <?php if ($doc1->bcp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->bcp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file10" accept="application/pdf"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">MC0</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Design Drawing</label>
                            <p><?php echo $doc1->mc0_dd ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_dd) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->mc0_dd ?>">
                                </button>
                                <?php if ($doc1->mc0_dd!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_dd) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file11" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                            <p><?php echo $doc1->mc0_bal ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_bal) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->mc0_bal ?>">
                                </button>
                                <?php if ($doc1->mc0_bal!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_bal) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                           <!--  <input class="form-control" type="file" name="file12" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                            <p><?php echo $doc1->mc0_jdst ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_jdst) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc1->mc0_jdst ?>">
                                </button>
                                <?php if ($doc1->mc0_jdst!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_jdst) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file13" accept="application/pdf"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Hasil Klarifikasi Pasca MC0</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                            <p><?php echo $doc4->pasca_boq ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_boq) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_boq ?>">
                                </button>
                                <?php if ($doc4->pasca_boq!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_boq) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" value="" name="file14" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                            <p><?php echo $doc4->pasca_jdst ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_jdst) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_jdst ?>">
                                </button>
                                <?php if ($doc4->pasca_jdst!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_jdst) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file15" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                            <p><?php echo $doc4->pasca_slp ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_slp) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_slp ?>">
                                </button>
                                <?php if ($doc4->pasca_slp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_slp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                           <!--  <input class="form-control" type="file" name="file16" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                            <p><?php echo $doc4->pasca_kurva ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_kurva) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_kurva ?>">
                                </button>
                                <?php if ($doc4->pasca_kurva!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_kurva) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                           <!--  <input class="form-control" type="file" name="file17" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                            <p><?php echo $doc4->pasca_shop ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_shop) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_shop ?>">
                                </button>
                                <?php if ($doc4->pasca_shop!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_shop) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file18" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                            <p><?php echo $doc4->pasca_bakn ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_bakn) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_bakn ?>">
                                </button>
                                <?php if ($doc4->pasca_bakn!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_bakn) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file19" accept="application/pdf"> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Naskah Adendum I</label>
                            <p><?php echo $doc4->pasca_nai ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_nai) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc4->pasca_nai ?>">
                                </button>
                                <?php if ($doc4->pasca_nai!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_nai) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" name="file20" accept="application/pdf"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                        <div class="card card-outline-success">
                            <div class="card-header" role="tab" id="heading4">
                                <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse21" aria-expanded="true" aria-controls="collapse21">ADDENDUM II</a></h6>
                            </div>
                            <!-- /.card-header -->
                            <div id="collapse21" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                                            <p><?php echo $doc5->addii_bal ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bal) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_bal ?>">
                                                </button>
                                                <?php if ($doc5->addii_bal!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bal) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <p><?php echo $doc5->addii_boq ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_boq) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_boq ?>">
                                                </button>
                                                <?php if ($doc5->addii_boq!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_boq) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        <!-- <input class="form-control" type="file" name="file22" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                            <p><?php echo $doc5->addii_jdst ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_jdst) ?>">
                                                <i class="feather feather-eye text-dark"></i>
                                                <input type="hidden" value="<?= $doc5->addii_jdst ?>">
                                                </button>
                                                <?php if ($doc5->addii_jdst!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_jdst) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                            <p><?php echo $doc5->addii_slp ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_slp) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_slp ?>">
                                                </button>
                                                <?php if ($doc5->addii_bal!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bal) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                            <p><?php echo $doc5->addii_kurva ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_kurva) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_kurva ?>">
                                                </button>
                                                <?php if ($doc5->addii_kurva!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_kurva) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                            <p><?php echo $doc5->addii_shop ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_shop) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_shop ?>">
                                                </button>
                                                <?php if ($doc5->addii_shop!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_shop) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                            <p><?php echo $doc5->addii_bakln ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bakln) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_bakln ?>">
                                                </button>
                                                <?php if ($doc5->addii_bakln!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bakln) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Adendum II</label>
                                            <p><?php echo $doc5->addii_naii ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_naii) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc5->addii_naii ?>">
                                                </button>
                                                <?php if ($doc5->addii_naii!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_naii) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div><!-- /.card-collapse -->
                        </div><!-- /.panel -->
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                        <div class="card card-outline-success">
                            <div class="card-header" role="tab" id="heading4">
                                <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse20" aria-expanded="true" aria-controls="collapse20">ADDENDUM III</a></h6>
                            </div>
                            <!-- /.card-header -->
                            <div id="collapse20" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                                            <p><?php echo $doc6->addiii_bal ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bal) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_bal ?>">
                                                </button>
                                                <?php if ($doc6->addiii_bal!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bal) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <p><?php echo $doc6->addiii_boq ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_boq) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_boq ?>">
                                                </button>
                                                <?php if ($doc6->addiii_boq!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_boq) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                            <p><?php echo $doc6->addiii_jdst ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_jdst) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_jdst ?>">
                                                </button>
                                                <?php if ($doc6->addiii_jdst!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_jdst) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                            <p><?php echo $doc6->addiii_slp ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_slp) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_slp ?>">
                                                </button>
                                                <?php if ($doc6->addiii_slp!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_slp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                            <p><?php echo $doc6->addiii_kurva ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_kurva) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_kurva ?>">
                                                </button>
                                                <?php if ($doc6->addiii_kurva!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_kurva) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                            <p><?php echo $doc6->addiii_shop ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_shop) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_shop ?>">
                                                </button>
                                                <?php if ($doc6->addiii_shop!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_shop) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                            <p><?php echo $doc6->addiii_bakln ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bakln) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addiii_bakln ?>">
                                                </button>
                                                <?php if ($doc6->addiii_bakln!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bakln) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Adendum III</label>
                                            <p><?php echo $doc6->addii_naiii ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addii_naiii) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc6->addii_naiii ?>">
                                                </button>
                                                <?php if ($doc6->addii_naiii!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addii_naiii) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div><!-- /.card-collapse -->
                        </div><!-- /.panel -->
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                        <div class="card card-outline-success">
                            <div class="card-header" role="tab" id="heading4">
                                <h6 class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse23" aria-expanded="false" aria-controls="collapse23">ADDENDUM IV</a></h6>
                            </div>
                            <!-- /.card-header -->
                            <div id="collapse23" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                                            <p><?php echo $doc7->addiv_bal ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bal) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_bal ?>">
                                                </button>
                                                <?php if ($doc7->addiv_bal!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bal) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <p><?php echo $doc7->addiv_boq ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_boq) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_boq ?>">
                                                </button>
                                                <?php if ($doc7->addiv_boq!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_boq) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                            <p><?php echo $doc7->addiv_jdst ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_jdst) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_jdst ?>">
                                                </button>
                                                <?php if ($doc7->addiv_jdst!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_jdst) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                            <p><?php echo $doc7->addiv_slp ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_slp) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_slp ?>">
                                                </button>
                                                <?php if ($doc7->addiv_slp!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_slp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                            <p><?php echo $doc7->addiv_kurva ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_kurva) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_kurva ?>">
                                                </button>
                                                <?php if ($doc7->addiv_kurva!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_kurva) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                            <p><?php echo $doc7->addiv_shop ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_shop) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_shop ?>">
                                                </button>
                                                <?php if ($doc7->addiv_shop!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_shop) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                            <p><?php echo $doc7->addiv_bakn ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bakn) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_bakn ?>">
                                                </button>
                                                <?php if ($doc7->addiv_bakn!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bakn) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Adendum IV</label>
                                            <p><?php echo $doc7->addiv_naiv ?>
                                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_naiv) ?>">
                                                    <i class="feather feather-eye text-dark"></i>
                                                    <input type="hidden" value="<?= $doc7->addiv_naiv ?>">
                                                </button>
                                                <?php if ($doc7->addiv_naiv!=NULL) {?>
                                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_naiv) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div><!-- /.card-collapse -->
                        </div><!-- /.panel -->
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 3</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Laporan Harian</label>
                            <p><?php echo $doc2->laporan_harian1 ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian1) ?>">
                                <i class="feather feather-eye text-dark"></i>
                                <input type="hidden" value="<?= $doc2->laporan_harian1 ?>">
                                </button>
                                <?php if ($doc2->laporan_harian1!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian1) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Mingguan</label>
                            <p><?php echo $doc2->laporan_mingguan1 ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan1) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->laporan_mingguan1 ?>">
                                </button>
                                <?php if ($doc2->laporan_mingguan1!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan1) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Bulanan Kontraktor</label>
                            <p><?php echo $doc2->bulanan_kontraktor ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_kontraktor) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->bulanan_kontraktor ?>">
                                </button>
                                <?php if ($doc2->bulanan_kontraktor!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_kontraktor) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                            <!-- <input class="form-control" type="file" value="" name="file47" accept="application/pdf"> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Sertifikat Pembayaran</label>
                            <p><?php echo $doc2->sertifikat_pembayaran ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->sertifikat_pembayaran) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->sertifikat_pembayaran ?>">
                                </button>
                                <?php if ($doc2->laporan_harian1!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian1) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 4</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Laporan Harian</label>
                            <p><?php echo $doc2->laporan_harian2 ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian2) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->laporan_harian2 ?>">
                                </button>
                                <?php if ($doc2->laporan_harian2!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian2) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Mingguan</label>
                            <p><?php echo $doc2->laporan_mingguan2 ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan2) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->laporan_mingguan2 ?>">
                                </button>
                                <?php if ($doc2->laporan_mingguan2!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan2) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Bulanan Konsultan Supervisi</label>
                            <p><?php echo $doc2->bulanan_konsultan ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_konsultan) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->bulanan_konsultan ?>">
                                </button>
                                <?php if ($doc2->bulanan_konsultan!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_konsultan) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 5</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pengujian Material</label>
                            <p><?php echo $doc2->berita_apm ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_apm) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->berita_apm ?>">
                                </button>
                                <?php if ($doc2->berita_apm!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_apm) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 6</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Show Cause Meeting (SCM)</label>
                            <p><?php echo $doc2->berita_ascm ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_ascm) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->berita_ascm ?>">
                                </button>
                                <?php if ($doc2->berita_ascm!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_ascm) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Provisional Hand Over (PHO)</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Pemohonan PHO</label>
                            <p><?php echo $doc2->provisional_sp ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_sp) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->provisional_sp ?>">
                                </button>
                                <?php if ($doc2->provisional_sp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_sp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label>
                            <p><?php echo $doc2->provisional_bafv ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bafv) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->provisional_bafv ?>">
                                </button>
                                <?php if ($doc2->provisional_bafv!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bafv) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label>
                            <p><?php echo $doc2->provisional_basv ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_basv) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->provisional_basv ?>">
                                </button>
                                <?php if ($doc2->provisional_basv!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_basv) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Berita Acara Serah Terima Pekerjaan</label>
                            <p><?php echo $doc2->provisional_bastp ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bastp) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc2->provisional_bastp ?>">
                                </button>
                                <?php if ($doc2->provisional_bastp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bastp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Final Hand Over (PHO)</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Pemohonan FHO</label>
                            <p><?php echo $doc3->final_sp ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_sp) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc3->final_sp ?>">
                                </button>
                                <?php if ($doc3->final_sp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_sp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label>
                            <p><?php echo $doc3->final_bafv ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bafv) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc3->final_bafv ?>">
                                </button>
                                <?php if ($doc3->final_bafv!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bafv) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label>
                            <p><?php echo $doc3->final_basv ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_basv) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc3->final_basv ?>">
                                </button>
                                <?php if ($doc3->final_sp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_sp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Berita Acara Serah Terima</label>
                            <p><?php echo $doc3->final_bastp ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bastp) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc3->final_bastp ?>">
                                </button>
                                <?php if ($doc3->final_bastp!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bastp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h4 class="box-title mr-b-0">Kelompok 7</h4><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Dokumentasi</label>
                            <p><?php echo $doc3->final_dokumentasi ?>
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_dokumentasi) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $doc3->final_dokumentasi ?>">
                                </button>
                                <?php if ($doc3->final_dokumentasi!=NULL) {?>
                                    <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_dokumentasi) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="modalCustom" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <embed src="ucup" width="100%" height="500px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  <!-- Modal -->



 </main>
<!-- /.widget-list -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic1"]')
        .on('change', function() {
            $container = $('[data-topic="addendumii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic2"]')
        .on('change', function() {
            var topic      = $(this).val(),
            $container = $('[data-topic="addendumiii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic3"]')
        .on('change', function() {
            $container = $('[data-topic="addendumiv"]');
            $container.toggle();
            });
    });
    $(".btn-show").click(function() {
        var value = $(this).val()
        var value2 = $(this).find("input").val()
        if (value2 == "" ) {
            $("#modalCustom .modal-body").find("embed").hide()
        $("#modalCustom .modal-header .modal-title").html("no data")
                        }
        else{
            $("#modalCustom .modal-body").find("embed").show()
        var a = $("#modalCustom .modal-body").find("embed").prop("src",value)
        $("#modalCustom .modal-header .modal-title").html(value2)
        // alert(a)
        }
    });
</script>