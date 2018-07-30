  <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
 <?php foreach ($pendukung as $u) { ?>   
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dokumen Pendukung</h6>
            <span class="text-muted"><?php echo $u['nama_paket']; ?></span>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('bmn') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('bmn/tahun/'.$namappk[0]['id_ppk']) ?>"><?php echo $namappk[0]['nama'] ?></a>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('bmn/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url('bmn/paket'.$paket[0]['jenis'].'/'.$tahun->id_tahun) ?>"><?php echo ucwords($paket[0]['jenis']) ?></a>
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
                           <button type="button" class="btn btn-info">BMN</button>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Alih Status</label>
                                     <p> <?php echo $u['bmn_surat_alih']; ?>
                                        <button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" 
                                            value="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bmn_surat_alih']) ?>">
                                            <i class="feather feather-eye text-dark"></i>
                                            <input type="hidden" value="<?php echo $u['bmn_surat_alih']; ?>">
                                        </button>
                                    </p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Rekomendasi Teknis</label>
                                    <p> <?php echo $u['bmn_rekomendasi']; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bmn_rekomendasi']) ?>">
                                            <i class="feather feather-eye text-dark"></i>
                                            <input type="hidden" value ="<?php echo $u['bmn_rekomendasi'] ?>">
                                        </button>
                                    </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label text-blue" for="">Surat Hibah ke Kementrian Keuangan</label>
                                     <p> <?php echo $u['bmn_surat_hibah']; ?>
                                        <button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" value ="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bmn_surat_hibah']) ?>">
                                            <i class="feather feather-eye text-dark"></i>
                                        <input type="hidden" value ="<?php echo $u['bmn_surat_hibah']; ?>">
                                        </button>
                                    </p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
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
    $(".btn-show").click(function() {
        // alert('test');
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