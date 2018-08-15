  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen</h6>
            <!-- <span class="text-muted"><?php echo $paket[0]['nama_paket']; ?></span> -->
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('Pokja') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('Pokja/tahun/'.$namappk[0]['id_ppk']) ?>"><?php echo $namappk[0]['nama'] ?></a>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('Pokja/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('Pokja/paket'.$paket[0]['jenis'].'/'.$tahun->id_tahun) ?>"><?php echo ucwords($paket[0]['jenis']) ?></a>
                </li>
                <li class="breadcrumb-item active">Lihat Dokumen</li>
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
                <form  method="post" action="<?php echo site_url('Pokja/updatedoc') ?>" enctype="multipart/form-data">
                    <div class="widget-body clearfix">
                        <div class="row">
                        <div class="col-md-11">
                            <h6 class="text-muted"><?php echo ucwords($paket[0]['nama_paket']) ?></h6>
                        </div>
                        <div class="col-md-1">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu list-unstyled card-body">
                                   <li><a href="<?php echo site_url('Pokja/viewdoc/'. $show[0]['id_paket']) ?>">Lihat Dokumen</a></li>
                                </ul>
                            </div>
                        </div>    
                        </div>
                    <div class="row">  
                        <h4 class="box-title mr-b-0" >POKJA</h4>
                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Perintah Lelang</label>
                                <p><button class="btn btn-show" type="button" type="button" data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_surat_perintah']) ?>">
                                       <i class="feather feather-eye text-dark"></i>
                                       <input type="hidden" value="<?= $show[0]['pokja_surat_perintah'] ?>" name="delf1">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_surat_perintah'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file1" accept="application/pdf">
                                        </p>
                                        <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket">
                                    </div>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Dokumen Lelang</label>
                                <p> <button class="btn btn-show" type="button" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_dokumen_lelang']) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $show[0]['pokja_dokumen_lelang'] ?>" name="delf2">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_dokumen_lelang'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file2" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Add Dokumen Lelang</label>
                                <p> 
                                    <button class="btn btn-show" type="button"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_add_dokumen']) ?>">
                                        <i class="feather feather-eye text-dark"></i>
                                        <input type="hidden" value="<?= $show[0]['pokja_add_dokumen'] ?>" name="delf3">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_add_dokumen'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file3" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Undangan Pembuktian</label>
                                <p> 
                                    <button class="btn btn-show" type="button" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan']) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $show[0]['pokja_undangan'] ?>" name="delf4">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_undangan'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file4" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Pembuktian</label>
                                <p> 
                                    <button class="btn btn-show" type="button"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pembuktian']) ?>">
                                        <i class="feather feather-eye text-dark"></i>
                                        <input type="hidden" value="<?= $show[0]['pokja_pembuktian'] ?>" name="delf5">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_pembuktian'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file5" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Aanwijzing</label>
                                <p> 
                                    <button class="btn btn-show" type="button" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_aanwijzing']) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $show[0]['pokja_aanwijzing'] ?>" name="delf6">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_aanwijzing'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file6" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Penetapan Pemenang</label>
                                <p> 
                                    <button class="btn btn-show" type="button"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pemenang']) ?>">
                                        <i class="feather feather-eye text-dark"></i>
                                        <input type="hidden" value="<?= $show[0]['pokja_pemenang'] ?>" name="delf7">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_pemenang'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file7" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Udangan Klarifikasi dan Negosiasi</label>
                                <p> 
                                    <button class="btn btn-show" type="button" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan_negosiasi']) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $show[0]['pokja_undangan_negosiasi'] ?>" name="delf8">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_undangan_negosiasi'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file8" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi dan Negosiasi</label>
                                <p> 
                                    <button class="btn btn-show" type="button"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_berita_negosiasi']) ?>">
                                        <i class="feather feather-eye text-dark"></i>
                                        <input type="hidden" value="<?= $show[0]['pokja_berita_negosiasi'] ?>" name="delf9">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_berita_negosiasi'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file9" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Berita Acara Hasil Seleksi</label>
                                <p> 
                                    <button class="btn btn-show" type="button" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_hasil_seleksi']) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $show[0]['pokja_hasil_seleksi'] ?>" name="delf10">
                                    </button>
                                    &nbsp;<?php echo $show[0]['pokja_hasil_seleksi'] ?>
                                    <div class="col-sm-10">
                                        <p class="file-upload btn btn-primary">
                                            Perbaharui <input type="file" name="file10" accept="application/pdf">
                                        </p>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <input type="submit" name="update" value="Ubah" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <!-- /.widget-list -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#interviewForm')
            .find('input[type="checkbox"][name="topic[]"]')
            .on('change', function() {
                var topic  = $(this).val(),
                $container = $('[data-topic="' + topic + '"]');
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
        $('.file-upload').click(function() {
            $('.file-upload').file_upload();
        });
    </script>
</main>