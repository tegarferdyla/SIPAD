 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengelolaan Arsip Dokumen</p>
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
    <div class="widget-list row">
        <div class="widget-holder widget-full-content widget-full-height col-lg-12 ">
            <div class="widget-bg">
                <div class="widget-heading">
                    <h5 class="widget-title">Persentase Dokumen Pendukung Setiap PPk</h5>
                    <div class="widget-graph-info">
                        <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="index.html#">Action</a>  <a class="dropdown-item" href="index.html#">Another action</a>  <a class="dropdown-item" href="index.html#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget-graph-info -->
                </div>
                <!-- .widget-heading -->
                <div class="widget-body">
                    <div class="container-fluid pd-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pos-relative" style="height: 300px">
                                    <canvas id="chartkurs"></canvas>
                                </div>
                                <!-- /.something -->
                              <!--   <div class="counter-info heading-font-family text-center mt-3 mb-3 fs-13"><span class="color-success"><i class="fa fa-arrow-circle-o-up"></i> <strong>34%</strong> </span>more than last week</div> -->
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-sm-6">
                                <h5 class="h2 fw-semibold mt-0">100%</h5>
                                <div class="progress w-50 mb-3">
                                    <div class="progress-bar bg-info" style="background: linear-gradient(to right, #17bff0, #8be0f9); width: 100%" role="progressbar">
                                    </div>
                                </div>
                                <!-- /.progress -->
                                <p class="heading-font-family fs-13">Total Prosentase
                                    <br>Dokumen yang sudah di unggah</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <?php foreach ($chart as $r) {?>
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #4671bd"></i><?php echo $r->nama ?></p>
                                            <?php } ?>
                                        </div>
                                        <!-- /.col-6 -->
                                        <div class="col-6">
                                        </div>
                                        <!-- /.col-6 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            <!-- /.widget-holder -->
        </div>
        <hr>
        <script type="text/javascript">
            var ctx = $('#chartkurs').get(0).getContext('2d');
            var data3 = {
                labels: [
                <?php foreach ($chart as $r) {
                    echo "'$r->nama',";
                }?>
                ],
                datasets: [{
                    data: [
                    <?php foreach ($chart as $r) {
                        echo "'$r->jumlah_paket',";
                    }?>
                    ],
                    backgroundColor: [
                    "#51bcd4",
                    "#d75151",
                    "#eace52",
                    "#dce5e7",
                    "#fff000"
                    ],
                    hoverBackgroundColor: [
                    "#51bcd4",
                    "#d75151",
                    "#eace52",
                    "#dce5e7",
                    "#fff000",
                    ],
                    hoverBorderColor: '#fff',
                    borderWidth: 8,
                }]
            }
            var chartJsPie = new Chart(ctx,{
                type: "pie",
                data: data3,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        titleFontColor: "#000",
                        titleMarginBottom: 0,
                        backgroundColor: "rgba(255,255,255,.9)",
                        bodyFontColor: "#000",
                        borderColor: "#e9e9e9",
                        bodySpacing: 0,
                        borderWidth: 2,
                        xPadding: 10,
                        yPadding: 10,
                    },
                }
            });
        </script>
    </main>