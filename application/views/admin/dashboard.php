 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengelolaan Arsip Dokumen - Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Home</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->
    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list row">
        <div class="widget-holder widget-sm col-md-4 widget-full-height">
            <div class="widget-bg">
                <div class="widget-body">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5">Total Dokumen</p><span class="counter-title color-primary"><span class="counter">2860</span> </span>
                            <!-- /.counter-title -->
                            <div class="mr-t-20"><span data-toggle="sparklines" data-height="15" data-width="70" data-line-color="#1976d2" data-line-width="3" data-spot-radius="1" data-fill-color="rgba(0,0,0,0)" data-spot-color="undefined" data-min-spot-color="undefined"
                                data-max-spot-color="undefined" data-highlight-line-color="undefined"><!-- 10,5,7,8,3,0,4,12,10,8,12 --></span>
                            </div>
                        </div>
                        <!-- /.media-body -->
                        <div class="pull-right align-self-center"><i class="list-icon feather feather-file bg-primary"></i>
                        </div>
                    </div>
                    <!-- /.counter-w-info -->
                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <!-- /.widget-holder -->
        <div class="widget-holder widget-sm col-md-4 widget-full-height">
            <div class="widget-bg">
                <div class="widget-body">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5">Total User Aktif</p><span class="counter-title color-info"><span class="counter"><?php echo $jmluser ?></span></span>
                            <!-- /.counter-title -->
                            <div class="progress" style="width: 70%; position: relative; top: 25px">
                                <div class="progress-bar bg-info" style="width: 66%" role="progressbar"><span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.media-body -->
                        <div class="pull-right align-self-center"><i class="list-icon feather feather-user bg-info"></i>
                        </div>
                    </div>
                    <!-- /.counter-w-info -->
                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <!-- /.widget-holder -->
       
        <div class="widget-holder widget-sm col-md-4 widget-full-height">
            <div class="widget-bg">
                <div class="widget-body">
                     <a href=" <?php echo site_url('admin/daftarppk') ?>">
                    <div class="counter-w-info media">
                        <div class="media-body">
                            <p class="text-muted mr-b-5">Total PPK</p><span class="counter-title color-pink"><span class="counter"><?php echo $jmlppk; ?></span> </span>
                            <!-- /.counter-title -->
                            <div style="margin-top: 15px"><span data-toggle="sparklines" data-height="15" data-bar-width="3" data-type="bar" data-chart-range-min="0" data-bar-spacing="3" data-bar-color="#ff6b88"><!-- 2,4,5,3,2,3,5,3,2,3,5,4,2 --></span>
                            </div>
                        </div>
                        <!-- /.media-body -->
                        <div class="pull-right align-self-center"><i class="list-icon feather feather-briefcase bg-pink"></i>
                        </div>
                    </div>
                    <!-- /.counter-w-info -->
                    </a>
                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        
        <!-- /.widget-holder -->
        <div class="widget-holder widget-full-content widget-full-height col-lg-12 ">
            <div class="widget-bg">
                <div class="widget-heading">
                    <h5 class="widget-title">Prosentasi Dokumen</h5>
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
                                <div class="pos-relative" style="height: 200px">
                                    <canvas id="chartJsDoughnutLegend"></canvas><span class="h6 fw-600 text-muted fs-13 text-uppercase m-0 absolute-center">Prosentase</span>
                                </div>
                                <!-- /.something -->
                              <!--   <div class="counter-info heading-font-family text-center mt-3 mb-3 fs-13"><span class="color-success"><i class="fa fa-arrow-circle-o-up"></i> <strong>34%</strong> </span>more than last week</div> -->
                                <!-- /.counter-info -->
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-sm-6">
                                <h5 class="h2 fw-semibold mt-0">58.3%</h5>
                                <div class="progress w-50 mb-3">
                                    <div class="progress-bar bg-info" style="background: linear-gradient(to right, #17bff0, #8be0f9); width: 58.3%" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                                <p class="heading-font-family fs-13">Total Prosentase
                                    <br>Dokumen yang sudah di unggah</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #4671bd"></i> Document A</p>
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #199bfc"></i> Document B</p>
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #54c273"></i> Document C</p>
                                        </div>
                                        <!-- /.col-6 -->
                                        <div class="col-6">
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #25d7fb"></i> Document D</p>
                                            <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #c4fa5e"></i> Document E</p>
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
    </main>