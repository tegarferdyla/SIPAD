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
                <li class="breadcrumb-item active">Input Dokumen</li>
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
                    <form id="interviewForm">
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
                                                        <li><a href="<?php echo site_url('PPK1/viewdocpendukung') ?>">View Dokumen</a></li>
                                                        <li><a href="#">Edit Dokuken</a></li>
                                                    </ul>
                                            </div>
                                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Alih Status</label>
                                <input class="form-control" type="file" name="file1" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Rekomendasi Teknis</label>
                                <input class="form-control" type="file" name="file2" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Hibah ke Kementrian Keuangan</label>
                                <input class="form-control" type="file" name="file3" accept="application/pdf">
                            </div>
                        </div>
                    </div>
                    <div class="widget-body clearfix">
                    <hr>
                    <button type="button" class="btn btn-info">Keuangan</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Permohonan Pembayaran</label>
                            <input class="form-control" type="file" name="file4" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kuitansi</label>
                            <<input class="form-control" type="file" name="file5" accept="application/pdf">
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kartu Pengawasan (Karwas)</label>
                            <input class="form-control" type="file" name="file6" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Faktur Pajak</label>
                            <input class="form-control" type="file" name="file7" accept="application/pdf">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">PPh dan PPN</label>
                            <input class="form-control" type="file" name="file8" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPP</label>
                            <input class="form-control" type="file" name="file9" accept="application/pdf">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPM</label>
                            <input class="form-control" type="file" name="file10" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SP2D</label>
                            <input class="form-control" type="file" name="file11" accept="application/pdf">
                        </div>
                    </div>
                </div>
                <div class="widget-body clearfix">
                    <hr>
                    <button type="button" class="btn btn-info">Bendahara</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">LPJ</label>
                            <input class="form-control" type="file" name="file12" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</label>
                            <input class="form-control" type="file" name="file13" accept="application/pdf">
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Rekening koran</label>
                            <input class="form-control" type="file" name="file14" accept="application/pdf">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas</label>
                            <input class="form-control" type="file" name="file15" accept="application/pdf">
                        </div>
                    </div>
                </div>
                    <div class="from-group row">
                        <div class="col-md-9 ">
                        </div>
                        <div class="col-md-3 ml-md-auto btn-list">
                            <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                            <button class="btn btn-outline-default btn-rounded" type="reset">Cancel</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
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