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
                    <button type="button" class="btn btn-info">Bendahara</button><br><br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">LPJ</label>
                                    <p> <?php echo $u['bendahara_lpj']; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target ="#modalCustom" value="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bendahara_lpj']) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $u['bendahara_lpj']; ?>">
                                        </button>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas dan Rekonsiliasi</label>
                                     <p><?php echo $u['bendahara_bapkdr']; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target ="#modalCustom" value="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bendahara_bapkdr']) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $u['bendahara_bapkdr']; ?>">
                                        </button>
                                    </p>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Rekening koran</label>
                                    <p> <?php echo $u['bendahara_rekening']; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target = "#modalCustom" value="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bendahara_rekening']) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value=" <?php echo $u['bendahara_rekening']; ?>">
                                        </button>
                                    </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-control-label text-blue" for="">Berita Acara Pemeriksaan Kas</label>
                                    <p><?php echo $u['bendahara_bapk']; ?>
                                        <button class="btn btn-show" data-toggle = "modal" data-target = "#modalCustom" value="<?php echo base_url('assets/data/'.$u['nama_tahun'].'/kontraktual/'.$u['nama_paket'].'/'.$u['bendahara_bapk']) ?>">
                                            <i class="feather feather-eye text-success"></i>
                                            <input type="hidden" value="<?php echo $u['bendahara_bapk']; ?>">
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