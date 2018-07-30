  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen Pokja</h6>
            <!-- <span class="text-muted"><?php echo ucwords($show[0]['nama_paket']) ?></span> -->
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url('Pokja') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('Pokja/tahun/'.$namappk[0]['id_ppk']) ?>"><?php echo $namappk[0]['nama'] ?></a>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('Pokja/jenispaket/'.$dapattahun[0]['id_tahun']) ?>"><?php echo $dapattahun[0]['nama_tahun'] ?></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('Pokja/paket'.$show[0]['jenis'].'/'.$dapattahun[0]['id_tahun']) ?>"><?php echo ucwords($show[0]['jenis']) ?></a>
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
                    <form method="post" action="<?php echo site_url('Pokja/savedoc') ?>" enctype="multipart/form-data">
                    <div class="widget-body clearfix">
                        <div class="row">
                        <div class="col-md-11">
                           <button type="button" class="btn btn-info">Pokja</button>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Perintah Lelang</label>
                                <input type="hidden" name="id_paket" value="<?php echo $show[0]['id_paket'] ?>">
                                <input class="form-control" type="file" name="file1" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Dokumen Lelang</label>
                                <input class="form-control" type="file" name="file2" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Add Dokumen Lelang</label>
                                <input class="form-control" type="file" name="file3" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Undangan Pembuktian</label>
                                <input class="form-control" type="file" name="file4" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Pembuktian</label>
                                <input class="form-control" type="file" name="file5" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Aanwijzing</label>
                                <input class="form-control" type="file" name="file6" accept="application/pdf">
                            </div>
                        </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Penetapan Pemenang</label>
                                <input class="form-control" type="file" name="file7" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Udangan Klarifikasi dan Negosiasi</label>
                                <input class="form-control" type="file" name="file8" accept="application/pdf">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi dan Negosiasi</label>
                                <input class="form-control" type="file" name="file9" accept="application/pdf">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Hasil Seleksi</label>
                                <input class="form-control" type="file" name="file10" accept="application/pdf">
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
                });
    });
</script>
</main>