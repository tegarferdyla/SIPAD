  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen <?php echo ucwords($paket[0]['nama_paket']) ?></h6>
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
                <li class="breadcrumb-item active">Ubah Dokumen</li>
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
                            <button type="button" class="btn btn-info">POKJA</button>
                        </div>
                        <div class="col-md-1">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu list-unstyled card-body">
                                    <li><a href="<?php echo site_url('pokja/editdoc/'. $show[0]['id_paket']) ?>">Edit Dokumen</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Surat Perintah Lelang</label>
                            <p><button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_surat_perintah']) ?>">
                                   <i class="feather feather-eye text-dark"></i>
                                   <input type="hidden" value="<?= $show[0]['pokja_surat_perintah'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_surat_perintah']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_surat_perintah']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_surat_perintah'] ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Dokumen Lelang</label>
                            <p> <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_dokumen_lelang']) ?>">
                                    <i class="feather feather-eye text-success"></i>
                                    <input type="hidden" value ="<?php echo $show[0]['pokja_dokumen_lelang'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_dokumen_lelang']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_dokumen_lelang']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_dokumen_lelang'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Add Dokumen Lelang</label>
                            <p> 
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_add_dokumen']) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $show[0]['pokja_add_dokumen'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_add_dokumen']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_add_dokumen']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_add_dokumen'] ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Undangan Pembuktian</label>
                            <p> 
                                <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan']) ?>">
                                    <i class="feather feather-eye text-success"></i>
                                    <input type="hidden" value ="<?php echo $show[0]['pokja_undangan'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_undangan']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_undangan'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pembuktian</label>
                            <p> 
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pembuktian']) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $show[0]['pokja_pembuktian'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_pembuktian']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pembuktian']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_pembuktian'] ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Aanwijzing</label>
                            <p> 
                                <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_aanwijzing']) ?>">
                                    <i class="feather feather-eye text-success"></i>
                                    <input type="hidden" value ="<?php echo $show[0]['pokja_aanwijzing'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_aanwijzing']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_aanwijzing']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_aanwijzing'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Penetapan Pemenang</label>
                            <p> 
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pemenang']) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $show[0]['pokja_pemenang'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_pemenang']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_pemenang']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_pemenang'] ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Udangan Klarifikasi dan Negosiasi</label>
                            <p> 
                                <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan_negosiasi']) ?>">
                                    <i class="feather feather-eye text-success"></i>
                                    <input type="hidden" value ="<?php echo $show[0]['pokja_undangan_negosiasi'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_undangan_negosiasi']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_undangan_negosiasi']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_undangan_negosiasi'] ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Klarifikasi dan Negosiasi</label>
                            <p> 
                                <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_berita_negosiasi']) ?>">
                                    <i class="feather feather-eye text-dark"></i>
                                    <input type="hidden" value="<?= $show[0]['pokja_berita_negosiasi'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_berita_negosiasi']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_berita_negosiasi']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_berita_negosiasi'] ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Hasil Seleksi</label>
                            <p> 
                                <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $show[0]['pokja_hasil_seleksi']) ?>">
                                    <i class="feather feather-eye text-success"></i>
                                    <input type="hidden" value ="<?php echo $show[0]['pokja_hasil_seleksi'] ?>">
                                </button>
                                <?php if ($show[0]['pokja_hasil_seleksi']!=NULL) {?>
                                    <a href="<?php echo site_url('pokja/download/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $show[0]['pokja_hasil_seleksi']) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                <?php }else{ ?>
                                    <a href="" class="btn btn-default disabled" target="_blank">
                                        <span class="feather feather-download"></span>
                                    </a>
                                <?php } ?>
                                &nbsp;<?php echo $show[0]['pokja_hasil_seleksi'] ?>
                            </p>
                        </div>
                    </div>

                </div>
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
                        var topic      = $(this).val(),
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
    </script>
</main>