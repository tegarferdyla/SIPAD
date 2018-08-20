 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengarsipan Dokumen Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widgets-list row">
       <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body">
                    <h5 class="sub-heading-font-family mt-3">Laporan Persentasi Paket</h5><span class="sub-heading-font-family mb-3">Periode: 2018</span>
                    <div style="height: 200px" class="my-4 pr-3">
                        <canvas id="barchart"></canvas>
                    </div>
                </div>
            </div>   
        </div> 
    </div>
    <hr>
    <h5 class="sub-heading-font-family mt-3">Daftar Tahun</h5>
    <div class="widget-list row">
        <!-- /.widget-holder -->
        <?php if ($this->session->flashdata('kosong')):?>
            <div class="col-md-12">
                <div class="alert-group">
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data paket yang anda pilih tidak tersedia harap daftarkan paket anda terlebih dahulu
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php foreach ($get_tahun  as $u) { ?>
        <div class="widget-holder widget-sm col-md-3 widget-full-height">
            <a href="<?php echo site_url('PPK1/jenispaket/'.$u['id_tahun'])?>">
            <div class="widget-bg">
                <div class="widget-body">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5"><?php echo $u['deskripsi']; ?></p><span class="counter-title color-info"><span class="counter"><?php echo $u['nama_tahun']; ?></span></span>
                            <!-- /.counter-title -->
                            <div class="progress" style="width: 70%; position: relative; top: 25px">
                                <div class="progress-bar bg-info" style="width: 66%" role="progressbar"><span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.media-body -->
                        <div class="pull-right align-self-center"><i class="list-icon feather feather-file bg-info"></i>
                        </div>
                    </div>
                    <!-- /.counter-w-info -->
                </div>
                <!-- /.widget-body -->
            </div>
            </a>
            <!-- /.widget-bg -->
        </div>
           <?php } ?>
        <!-- /.widget-holder -->

            <!-- /.widget-holder -->
        </div>
        <hr>
        <script type="text/javascript">
            var ctx2 = $('#barchart').get(0).getContext('2d');
            var data2 = {
                labels: [
                <?php foreach ($hasil as $r) {
                    echo "'$r->nama_paket',";
                }?>],
                datasets: [
                {
                    label: "Data",
                    backgroundColor: "#5867c3",
                    data: [
                    <?php foreach ($hasil as $r) {
                        echo "'$r->total',";
                    }?>,100]
                },
                ]
            };

            var chartJsBar = new Chart(ctx2, {
                type: "bar",
                data: data2,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        titleFontColor: "#000",
                        titleMarginBottom: 10,
                        backgroundColor: "rgba(255,255,255,.9)",
                        bodyFontColor: "#000",
                        borderColor: "#e9e9e9",
                        bodySpacing: 10,
                        borderWidth: 3,
                        xPadding: 10,
                        yPadding: 10,
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display:false
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display:false
                            }
                        }]
                    }
                },
                responsive: true
            });
        </script>
    </main>