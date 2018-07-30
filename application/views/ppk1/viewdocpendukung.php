  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen Pendukung</h6>
            <span class="text-muted"><?php echo $show[0]['nama_paket']; ?></span>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('PPK1') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk1/pilihpaket/'.$tahun->id_tahun.'/'.$show[0]['jenis']) ?>"><?php echo ucwords($show[0]['jenis']) ?></a></li>
                <li class="breadcrumb-item active">View Dokumen Pendukung</li>
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
                           <button type="button" class="btn btn-info">BMN</button>
                        </div>
                        <div class="col-md-1">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu list-unstyled card-body">
                                                        <li><a href="<?php echo site_url('PPK1/editdocpend/'. $show[0]['id_paket']) ?>">Edit Dokumen</a></li>
                                                    </ul>
                                            </div>
                                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Alih Status</label>
                                     <p> <?php echo $pendukung->bmn_surat_alih ?>
                                        <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                                            value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bmn_surat_alih) ?>">
                                            <i class="feather feather-eye text-dark"></i>
                                            <input type="hidden" value="<?= $pendukung->bmn_surat_alih ?>">
                                        </button>
                                        <?php if ($pendukung->bmn_surat_alih!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bmn_surat_alih) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Rekomendasi Teknis</label>
                                    <p> <?php echo $pendukung->bmn_rekomendasi; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->bmn_rekomendasi) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->bmn_rekomendasi ?>">
                                        </button>
                                         <?php if ($pendukung->bmn_rekomendasi!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bmn_rekomendasi) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Hibah ke Kementrian Keuangan</label>
                                     <p> <?php echo $pendukung->bmn_surat_hibah; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->bmn_surat_hibah) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $pendukung->bmn_surat_hibah ?>">
                                        </button>
                                         <?php if ($pendukung->bmn_surat_hibah!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bmn_surat_hibah) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-body clearfix">
                    <button type="button" class="btn btn-info">Keuangan</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Permohonan Pembayaran</label>
                                    <p> <?php echo $pendukung->keuangan_permohonan; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_permohonan) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->keuangan_permohonan ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_permohonan!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_permohonan) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kuitansi</label>
                                    <p> <?php echo $pendukung->keuangan_kuitansi; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_kuitansi) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->keuangan_kuitansi ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_kuitansi!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_kuitansi) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Kartu Pengawasan (Karwas)</label>
                                   <p> <?php echo $pendukung->keuangan_kartu; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_kartu) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->keuangan_kartu ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_kartu!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_kartu) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue">Faktur Pajak</label>
                                    <p> <?php echo $pendukung->keuangan_faktur; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_faktur) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->keuangan_faktur ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_faktur!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_faktur) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">PPh dan PPN</label>
                                    <p> <?php echo $pendukung->keuangan_pph; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_pph) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value ="<?php echo $pendukung->keuangan_pph ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_pph!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_pph) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPP</label>
                                <p> <?php echo $pendukung->keuangan_spp; ?>
                                    <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_spp) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value ="<?php echo $pendukung->keuangan_spp ?>">
                                    </button>
                                     <?php if ($pendukung->keuangan_spp!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_spp) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SPM</label>
                                    <p> <?php echo $pendukung->keuangan_spm; ?>
                                       <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_spm) ?>">
                                           <i class="feather feather-eye text-success"></i>
                                           <input type="hidden" value="<?php echo $pendukung->keuangan_spm ?>"> 
                                       </button>
                                        <?php if ($pendukung->keuangan_spm!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_spm) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">SP2D</label>
                                    <p> <?php echo $pendukung->keuangan_sp2d; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->keuangan_sp2d) ?>">
                                        <i class="feather feather-eye text-success"></i>
                                        <input type="hidden" value = "<?php echo $pendukung->keuangan_sp2d ?>">
                                        </button>
                                         <?php if ($pendukung->keuangan_sp2d!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->keuangan_sp2d) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                    </div>
                </div>
                <div class="widget-body clearfix">
                    <button type="button" class="btn btn-info">Bendahara</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">LPJ</label>
                                    <p> <?php echo $pendukung->bendahara_lpj; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target ="#modalCustom" value="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->bendahara_lpj) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $pendukung->bendahara_lpj ?>">
                                        </button>
                                         <?php if ($pendukung->bendahara_lpj!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bendahara_lpj) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</label>
                                     <p> <?php echo $pendukung->bendahara_bapkdr ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target ="#modalCustom" value="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' .$pendukung->bendahara_bapkdr) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $pendukung->bendahara_bapkdr ?>">
                                        </button>
                                         <?php if ($pendukung->bendahara_bapkdr!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bendahara_bapkdr) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Rekening koran</label>
                                    <p> <?php echo $pendukung->bendahara_rekening ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target = "#modalCustom" value="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' .$pendukung->bendahara_rekening) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $pendukung->bendahara_rekening ?>">
                                        </button>
                                         <?php if ($pendukung->bendahara_rekening!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bendahara_rekening) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php }else{ ?>
                                            <a href="" class="btn btn-default disabled" target="_blank"><span class="feather feather-download"></span></a>
                                        <?php } ?>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas</label>
                                    <p> <?php echo $pendukung->bendahara_bapk; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target = "#modalCustom" value="<?php echo base_url('assets/data/'. $tahun->nama_tahun. '/'. $paket[0]['jenis'] . '/' .$paket[0]['nama_paket'] . '/' . $pendukung->bendahara_bapk) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $pendukung->bendahara_bapk ?>">
                                        </button>
                                         <?php if ($pendukung->bendahara_bapk!=NULL) {?>
                                            <a href="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $pendukung->bendahara_bapk) ?>" class="btn btn-default" target="_blank"><span class="feather feather-download"></span></a>
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