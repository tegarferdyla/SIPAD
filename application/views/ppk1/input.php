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
                <li class="breadcrumb-item"><a href="<?php echo site_url('PPK1') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/pilihpaket/'.$tahun->id_tahun.'/'.$show[0]['jenis']) ?>"><?php echo ucwords($show[0]['jenis']) ?></a></li>
                <li class="breadcrumb-item active">Input Dokumen</li>
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
                        </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Fileberhasil di upload.
                    </div>
                 <?php endif ?>
            </div>
        </div> 
                <div class="widget-list">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <form id="interviewForm" method="post" action="<?php echo site_url('PPK1/simpandoc') ?>" enctype="multipart/form-data">
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
                                                        <li><a href="<?php echo site_url('ppk1/viewdocutama/'.$show[0]['id_paket']) ?>">View Dokumen</a></li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Minat Daerah</label>
                                            <input type="file" name="file1" accept="application/pdf" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Menerima Hibah</label>
                                            <input class="form-control" type="file" name="file2" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Kesiapan Lahan</label>
                                            <input class="form-control" type="file" name="file3" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kesepakatan Bersama (KSB)</label>
                                            <input class="form-control" type="file" name="file4" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Perjanjian Kerja Sama</label>
                                            <input class="form-control" type="file" name="file5" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body clearfix">
                                    <hr>
                                    <h4 class="btn btn-info">Kelompok 2</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">SPBJ</label>
                                            <input class="form-control" type="file" name="file6" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">SPMK</label>
                                            <input class="form-control" type="file" name="file7" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Kontrak</label>
                                            <input class="form-control" type="file" name="file8" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Rencana Mutu Kontrak</label>
                                            <input class="form-control" type="file" name="file9" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita acara Pre-Construction</label>
                                            <input class="form-control" type="file" name="file10" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body clearfix">
                                    <hr>
                                    <h4 class="box-title mr-b-0">MC0</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Design Drawing</label>
                                            <input class="form-control" type="file" name="file11" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label>
                                            <input class="form-control" type="file" name="file12" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <input class="form-control" type="file" name="file13" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-body clearfix">
                                    <hr>
                                    <h4 class="box-title mr-b-0">Hasil Klarifikasi Pasca MC0</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                                            <input class="form-control" type="file" value="" name="file14" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                            <input class="form-control" type="file" name="file15" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                            <input class="form-control" type="file" name="file16" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                            <input class="form-control" type="file" name="file17" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Shop Drawing</label>
                                            <input class="form-control" type="file" name="file18" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label>
                                            <input class="form-control" type="file" name="file19" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Naskah Adendum I</label>
                                            <input class="form-control" type="file" name="file20" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="check">
                                        <h4 class="box-title mr-b-0">Addendum II
                                            <input type="checkbox" name="topic1" />
                                        </h4>
                                    </div>
                                    <br>
                                    <div style="display: none;" data-topic="addendumii">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Bill of Quantity</label>
                                                    <input class="form-control" type="file" name="file21" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label>
                                                    <input class="form-control" type="file" name="file22" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label>
                                                    <input class="form-control" type="file" value="" name="file23" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Kurva R Revisi</label>
                                                    <input class="form-control" type="file" value="" name="file24" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Shop Drawing</label> 
                                                    <input class="form-control" type="file" value="" name="file25" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label> 
                                                    <input class="form-control" type="file" value="" name="file26" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label> 
                                                    <input class="form-control" type="file" value="" name="file27" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Naskah Adendum II</label> 
                                                    <input class="form-control" type="file" value="" name="file28" accept="application/pdf">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <hr>
                                    <div class="check">
                                        <h4 class="box-title mr-b-0">Addendum III
                                            <input type="checkbox" name="topic2"/>
                                        </h4>
                                    </div><br>
                                    <div style="display: none;" data-topic="addendumiii">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Bill of Quantity</label> 
                                                    <input class="form-control" type="file" value="" name="file29" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label> 
                                                    <input class="form-control" type="file" value="" name="file30" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label> 
                                                    <input class="form-control" type="file" value="" name="file31" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Kurva R Revisi</label> 
                                                    <input class="form-control" type="file" value="" name="file32" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Shop Drawing</label> 
                                                    <input class="form-control" type="file" value="" name="file33" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label> 
                                                    <input class="form-control" type="file" value="" name="file34" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label> 
                                                    <input class="form-control" type="file" value="" name="file35" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Naskah Adendum III</label> 
                                                    <input class="form-control" type="file" value="" name="file36" accept="application/pdf">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <hr>
                                    <div class="check">
                                        <h4 class="box-title mr-b-0">Addendum IV
                                            <input type="checkbox" name="topic3"/>
                                        </h4>
                                    </div>
                                    <div style="display: none;" data-topic="addendumiv">
                                        <fieldset>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Bill of Quantity</label> 
                                                    <input class="form-control" type="file" value="" name="file37" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Justifikasi dan Spesifikasi Teknis</label> 
                                                    <input class="form-control" type="file" value="" name="file38" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Surat Lampiran Pendukung</label> 
                                                    <input class="form-control" type="file" value="" name="file39" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Kurva R Revisi</label> 
                                                    <input class="form-control" type="file" value="" name="file40" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Shop Drawing</label> 
                                                    <input class="form-control" type="file" value="" name="file41" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi Negosiasi</label> 
                                                    <input class="form-control" type="file" value="" name="file42" accept="application/pdf">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Berita Acara Lapangan</label> 
                                                    <input class="form-control" type="file" value="" name="file43" accept="application/pdf">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-control-label text-blue" for="">Naskah Adendum IV</label> 
                                                    <input class="form-control" type="file" value="" name="file44" accept="application/pdf">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Kelompok 3</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Laporan Harian</label> 
                                            <input class="form-control" type="file" value="" name="file45" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Mingguan</label> 
                                            <input class="form-control" type="file" value="" name="file46" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bulanan Kontraktor</label> 
                                            <input class="form-control" type="file" value="" name="file47" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Sertifikat Pembayaran</label> 
                                            <input class="form-control" type="file" value="" name="file48" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Kelompok 4</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Laporan Harian</label> 
                                            <input class="form-control" type="file" value="" name="file49" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Mingguan</label> 
                                            <input class="form-control" type="file" value="" name="file50" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Bulanan Konsultan Supervisi</label> 
                                            <input class="form-control" type="file" value="" name="file51" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Kelompok 5</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Pengujian Material</label> 
                                            <input class="form-control" type="file" value="" name="file52" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Kelompok 6</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Show Cause Meeting (SCM)</label> 
                                            <input class="form-control" type="file" value="" name="file53" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Provisional Hand Over (PHO)</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Pemohonan PHO</label> 
                                            <input class="form-control" type="file" value="" name="file54" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label> 
                                            <input class="form-control" type="file" value="" name="file55" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label> 
                                            <input class="form-control" type="file" value="" name="file56" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Berita Acara Serah Terima Pekerjaan</label> 
                                            <input class="form-control" type="file" value="" name="file57" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Final Hand Over (PHO)</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Surat Pemohonan FHO</label> 
                                            <input class="form-control" type="file" value="" name="file58" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara First Visit</label> 
                                            <input class="form-control" type="file" value="" name="file59" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Berita Acara Second Visit</label> 
                                            <input class="form-control" type="file" value="" name="file60" accept="application/pdf">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue">Berita Acara Serah Terima</label> 
                                            <input class="form-control" type="file" value="" name="file61" accept="application/pdf">
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="box-title mr-b-0">Kelompok 7</h4><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label text-blue" for="">Dokumentasi</label> 
                                            <input class="form-control" type="file" value="" name="file62" accept="application/pdf">
                                        </div>
                                    </div>
                                    <div class="from-group row">
                                        <div class="col-md-9 ">
                                        </div>
                                        <div class="col-md-3 ml-md-auto btn-list">
                                            <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                            <a href="<?php echo site_url('ppk1/viewdocutama/'.$show[0]['id_paket'] ) ?>" class="btn btn-outline-default btn-rounded">Cancel</a>
                                            <!-- <button class="btn btn-outline-default btn-rounded" type="reset">Cancel</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    <!-- /.widget-list -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#interviewForm')
            .find('input[type="checkbox"][name="topic1"]')
            .on('change', function() {
                $container = $('[data-topic="addendumii"]');
                $container.toggle();

                    // var display = $container.css('display');
                    // switch (true) {
                    //     case ('css' == topic && 'block' == display):
                    //         $('#interviewForm').bootstrapValidator('addField', 'css_frameworks[]', {
                    //             validators: {
                    //                 notEmpty: {
                    //                     message: 'Please choose at least 1 framework'
                    //                 }
                    //             }
                    //         });
                    //         break;
                    //     case ('css' == topic && 'none' == display):
                    //         $('#interviewForm').bootstrapValidator('removeField', 'css_frameworks[]');
                    //         break;
                    //     case ('javascript' == topic && 'block' == display):
                    //         $('#interviewForm').bootstrapValidator('addField', 'js_frameworks[]', {
                    //             validators: {
                    //                 notEmpty: {
                    //                     message: 'The name of framework is required'
                    //                 }
                    //             }
                    //         });
                    //         break;
                    //     case ('javascript' == topic && 'none' == display):
                    //         $('#interviewForm').bootstrapValidator('removeField', 'js_frameworks[]');
                    //         break;
                    // }
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