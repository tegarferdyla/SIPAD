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
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">View Dokumen</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
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
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu list-unstyled card-body">
                                                        <li><a href="<?php echo site_url('ppk1/inputdokutama/' . $show[0]['id_paket']) ?>">Input Dokumen</a></li>
                                                        <li><a href="#">Edit Dokuken</a></li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket"> -->
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Minat Daerah</label>
                                            <p> <?php echo $doc1->surat_md ?>
                                                <i class="feather col-md-6 feather-eye text-dark" data-toggle="modal" data-target="#myModal1"></i>
                                            </p>

                                            <!-- <input type="file" name="file1" accept="application/pdf" class="form-control"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Menerima Hibah</label>
                                            <p> <?php echo $doc1->surat_mh ?>
                                                <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal2"></i>
                                            </p>
                                            <!-- <input class="form-control" type="file" name="file2" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Kesiapan Lahan</label>
                                            <p><?php echo $doc1->surat_kl ?>
                                                <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal3"></i>
                                            </p>
                                            <!-- <input class="form-control" type="file" name="file3" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kesepakatan Bersama (KSB)</label>
                                            <p><?php echo $doc1->kesepakatan_bersama ?>
                                                <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal4"></i>
                                            </p>
                                          <!--   <input class="form-control" type="file" name="file4" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Perjanjian Kerja Sama</label>
                                            <p><?php echo $doc1->perjanjian_kerjasama ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal5"></i>
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal6"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file6" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">SPMK</label>
                                            <p><?php echo $doc1->spmk ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal7"></i>
                                        </p>
                                           <!--  <input class="form-control" type="file" name="file7" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Kontrak</label>
                                            <p><?php echo $doc1->naskah_kontrak ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal8"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file8" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Rencana Mutu Kontrak</label>
                                            <p><?php echo $doc1->rencana_mk ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal9"></i>
                                        </p>
                                           <!--  <input class="form-control" type="file" name="file9" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita acara Pre-Construction</label>
                                            <p><?php echo $doc1->bcp ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal10"></i>
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal11"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file11" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                            <p><?php echo $doc1->mc0_bal ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal12"></i>
                                        </p>
                                           <!--  <input class="form-control" type="file" name="file12" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <p><?php echo $doc1->mc0_jdst ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal13"></i>
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal14"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file14" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <p><?php echo $doc4->pasca_jdst ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal15"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file15" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                            <p><?php echo $doc4->pasca_slp ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal16"></i>
                                        </p>
                                           <!--  <input class="form-control" type="file" name="file16" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                            <p><?php echo $doc4->pasca_kurva ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal17"></i>
                                        </p>
                                           <!--  <input class="form-control" type="file" name="file17" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                            <p><?php echo $doc4->pasca_shop ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal18"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file18" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                            <p><?php echo $doc4->pasca_bakn ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal19"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" name="file19" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Adendum I</label>
                                            <p><?php echo $doc4->pasca_nai ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal20"></i>
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
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal21"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" name="file21" accept="application/pdf"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                                            <p><?php echo $doc5->addii_boq ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal22"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" name="file22" accept="application/pdf"> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                                            <p><?php echo $doc5->addii_jdst ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal23"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file23" accept="application/pdf"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                                            <p><?php echo $doc5->addii_slp ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal24"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file24" accept="application/pdf"> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                                            <p><?php echo $doc5->addii_kurva ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal25"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file25" accept="application/pdf"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                                            <p><?php echo $doc5->addii_shop ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal26"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file26" accept="application/pdf"> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                                            <p><?php echo $doc5->addii_bakln ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal27"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file27" accept="application/pdf"> -->
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="form-control-label text-blue" for="">Naskah Adendum II</label>
                                                            <p><?php echo $doc5->addii_naii ?>
                                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal28"></i>
                                                        </p>
                                                            <!-- <input class="form-control" type="file" value="" name="file28" accept="application/pdf"> -->
                                                        </div>
                                                    </div>
                                                </div><!-- /.card-body -->
                                             </div><!-- /.card-collapse -->
                                        </div>
                                        <!-- /.panel -->
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
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal29"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file29" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                                    <p><?php echo $doc6->addiii_boq ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal30"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file30" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                                    <p><?php echo $doc6->addiii_jdst ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal31"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file31" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                                    <p><?php echo $doc6->addiii_slp ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal32"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file32" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                                    <p><?php echo $doc6->addiii_kurva ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal33"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file33" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                                    <p><?php echo $doc6->addiii_shop ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal34"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file34" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                                    <p><?php echo $doc6->addiii_bakln ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal35"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file35" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Naskah Adendum III</label>
                                                    <p><?php echo $doc6->addii_naiii ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal36"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file36" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card-collapse -->
                                </div>
                                <!-- /.panel -->
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
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal37"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file37" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                                    <p><?php echo $doc7->addiv_boq ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal38"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file38" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                                    <p><?php echo $doc7->addiv_jdst ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal39></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file39" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                                    <p><?php echo $doc7->addiv_slp ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal40"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file40" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                                    <p><?php echo $doc7->addiv_kurva ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal41"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file41" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                                    <p><?php echo $doc7->addiv_shop ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal42"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file42" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                                    <p><?php echo $doc7->addiv_bakn ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal43"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file43" accept="application/pdf"> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Naskah Adendum IV</label>
                                                    <p><?php echo $doc7->addiv_naiv ?>
                                                    <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal44"></i>
                                                </p>
                                                    <!-- <input class="form-control" type="file" value="" name="file44" accept="application/pdf"> -->
                                                </div>
                                            </div>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card-collapse -->
                                </div>
                                <!-- /.panel -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal45"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file45" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Mingguan</label>
                                            <p><?php echo $doc2->laporan_mingguan1 ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal46"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file46" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bulanan Kontraktor</label>
                                            <p><?php echo $doc2->bulanan_kontraktor ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal47"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file47" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Sertifikat Pembayaran</label>
                                            <p><?php echo $doc2->sertifikat_pembayaran ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal48"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file48" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal49"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file49" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Mingguan</label>
                                            <p><?php echo $doc2->laporan_mingguan2 ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal50"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file50" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bulanan Konsultan Supervisi</label>
                                            <p><?php echo $doc2->bulanan_konsultan ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal51"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file51" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal52"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file52" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal53"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file53" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal54"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file54" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label>
                                            <p><?php echo $doc2->provisional_bafv ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal55"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file55" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label>
                                            <p><?php echo $doc2->provisional_basv ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal56"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file56" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Berita Acara Serah Terima Pekerjaan</label>
                                            <p><?php echo $doc2->provisional_bastp ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal57"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file57" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal58"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file58" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label>
                                            <p><?php echo $doc3->final_bafv ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal59"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file59" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label>
                                            <p><?php echo $doc3->final_basv ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal60"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file60" accept="application/pdf"> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Berita Acara Serah Terima</label>
                                            <p><?php echo $doc3->final_bastp ?>
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal61"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file61" accept="application/pdf"> -->
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
                                            <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal62"></i>
                                        </p>
                                            <!-- <input class="form-control" type="file" value="" name="file62" accept="application/pdf"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <!-- Modal -->
                    <?php for($i=1;$i<=62;$i++){ 
                        if ($i==1) {
                            $hasil = $doc1->surat_md;
                        }elseif ($i==2) {
                            $hasil = $doc1->surat_mh;
                        }elseif ($i==3){
                            $hasil = $doc1->surat_kl;
                        }elseif ($i==4){
                            $hasil = $doc1->kesepakatan_bersama;
                        }elseif ($i==5){
                            $hasil = $doc1->perjanjian_kerjasama;
                        }elseif ($i==6){
                            $hasil = $doc1->sppbj;
                        }elseif ($i==7){
                            $hasil = $doc1->spmk;
                        }elseif ($i==8){
                            $hasil = $doc1->naskah_kontrak;
                        }elseif ($i==9){
                            $hasil = $doc1->rencana_mk;
                        }elseif ($i==10){
                            $hasil = $doc1->bcp;
                        }elseif ($i==11){
                            $hasil = $doc1->mc0_dd;
                        }elseif ($i==12){
                            $hasil = $doc1->mc0_bal;
                        }elseif ($i==13){
                            $hasil = $doc1->mc0_jdst;
                        }elseif ($i==14){
                            $hasil = $doc4->pasca_boq;
                        }elseif ($i==15){
                            $hasil = $doc4->pasca_jdst;
                        }elseif ($i==16){
                            $hasil = $doc4->pasca_slp;
                        }elseif ($i==17){
                            $hasil = $doc4->pasca_kurva;
                        }elseif ($i==18){
                            $hasil = $doc4->pasca_shop;
                        }elseif ($i==19){
                            $hasil = $doc4->pasca_bakn;
                        }elseif ($i==20){
                            $hasil = $doc4->pasca_nai;
                        }elseif ($i==21){
                            $hasil = $doc5->addii_bal;
                        }elseif ($i==22){
                            $hasil = $doc5->addii_boq;
                        }elseif ($i==23){
                            $hasil = $doc5->addii_jdst;
                        }elseif ($i==24){
                            $hasil = $doc5->addii_slp;
                        }elseif ($i==25){
                            $hasil = $doc5->addii_kurva;
                        }elseif ($i==26){
                            $hasil = $doc5->addii_shop;
                        }elseif ($i==27){
                            $hasil = $doc5->addii_bakln;
                        }elseif ($i==28){
                            $hasil = $doc5->addii_naii;
                        }elseif ($i==29){
                            $hasil = $doc6->addiii_bal;
                        }elseif ($i==30){
                            $hasil = $doc6->addiii_boq;
                        }elseif ($i==31){
                            $hasil = $doc6->addiii_jdst;
                        }elseif ($i==32){
                            $hasil = $doc6->addiii_slp;
                        }elseif ($i==33){
                            $hasil = $doc6->addiii_kurva;
                        }elseif ($i==34){
                            $hasil = $doc6->addiii_shop;
                        }elseif ($i==35){
                            $hasil = $doc6->addiii_bakln;
                        }elseif ($i==36){
                            $hasil = $doc6->addiii_naiii;
                        }elseif ($i==37){
                            $hasil = $doc7->addiv_bal;
                        }elseif ($i==38){
                            $hasil = $doc7->addiv_boq;
                        }elseif ($i==39){
                            $hasil = $doc7->addiv_jdst;
                        }elseif ($i==40){
                            $hasil = $doc7->addiv_slp;
                        }elseif ($i==41){
                            $hasil = $doc7->addiv_kurva;
                        }elseif ($i==42){
                            $hasil = $doc7->addiv_shop;
                        }elseif ($i==43){
                            $hasil = $doc7->addiv_bakn;
                        }elseif ($i==44){
                            $hasil = $doc7->addiv_naiv;
                        }elseif ($i==45){
                            $hasil = $doc2->laporan_harian1;
                        }elseif ($i==46){
                            $hasil = $doc2->laporan_mingguan1;
                        }elseif ($i==47){
                            $hasil = $doc2->bulanan_kontraktor;
                        }elseif ($i==48){
                            $hasil = $doc2->sertifikat_pembayaran;
                        }elseif ($i==49){
                            $hasil = $doc2->laporan_harian2;
                        }elseif ($i==50){
                            $hasil = $doc2->laporan_mingguan2;
                        }elseif ($i==51){
                            $hasil = $doc2->bulanan_konsultan;
                        }elseif ($i==52){
                            $hasil = $doc2->berita_apm;
                        }elseif ($i==53){
                            $hasil = $doc2->berita_ascm;
                        }elseif ($i==54){
                            $hasil = $doc2->provisional_sp;
                        }elseif ($i==55){
                            $hasil = $doc2->provisional_bafv;
                        }elseif ($i==56){
                            $hasil = $doc2->provisional_basv;
                        }elseif ($i==57){
                            $hasil = $doc2->provisional_bastp;
                        }elseif ($i==58){
                            $hasil = $doc3->final_sp;
                        }elseif ($i==59){
                            $hasil = $doc3->final_bafv;
                        }elseif ($i==60){
                            $hasil = $doc3->final_basv;
                        }elseif ($i==61){
                            $hasil = $doc3->final_bastp;
                        }elseif ($i==62){
                            $hasil = $doc3->final_dokumentasi;
                        }
                    ?>
                      <div class="modal fade" id="myModal<?php echo $i ?>" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><?=$hasil?></h4>
                            </div>
                            <div class="modal-body">
                                <?php if ($hasil!=NULL) {?>
                              <embed src="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $hasil) ?>" width="100%" height="500px">
                              <?php }else{ ?>
                                <p>Data Kosong</p>
                            <?php } ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php } ?>
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
    </script>
</main>