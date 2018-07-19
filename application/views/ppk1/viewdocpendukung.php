  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen Pendukung</h6>
            <span class="text-muted">Konsultasi Supervisi Pembangunan Sanitasi Terpadu Kawasan Strategis 3 Kabupaten Bima</span>
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
    <div class="tab-content">
    <div class="tab-pane active" id="input">
    <div class="widget-list">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                    <div class="widget-body clearfix">
                        <div class="row">
                        <div class="col-md-11">
                           <button type="button" class="btn btn-info">BMN</button>
                        </div>
                        <div class="col-md-1">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu list-unstyled card-body">
                                                        <li><a href="<?php echo site_url('PPK1/inputdokpendukung/'. $show[0]['id_paket']) ?>">Input Dokumen</a></li>
                                                        <li><a href="#">Edit Dokumen</a></li>
                                                    </ul>
                                            </div>
                                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Alih Status</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Rekomendasi Teknis</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Hibah ke Kementrian Keuangan</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-body clearfix">
                    <hr>
                    <button type="button" class="btn btn-info">Keuangan</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Permohonan Pembayaran</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kuitansi</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kartu Pengawasan (Karwas)</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Faktur Pajak</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">PPh dan PPN</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPP</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPM</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SP2D</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                    </div>
                </div>
                <div class="widget-body clearfix">
                    <hr>
                    <button type="button" class="btn btn-info">Bendahara</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">LPJ</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</label>
                                     <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Rekening koran</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas</label>
                                    <p>
                                        <i class="feather feather-eye"data-toggle="modal" style="color: black;" data-target="#myModal"></i>
                                    </p>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
</div>
                    <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Dokumen Data</h4>
                            </div>
                            <div class="modal-body">
                              <p>Lihat PDF</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- Modal -->
<div class="tab-pane" id="profile-tab-bordered-1">

</div>
</div>
</div>
<!-- /.widget-list -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#interviewForm')
            .find('input[type="checkbox"][name="topic[]"]')
                .on('change', function() {
                    var topic      = $(this).val(),
                        $container = $('[data-topic="' + topic + '"]');
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
</script>
</main>