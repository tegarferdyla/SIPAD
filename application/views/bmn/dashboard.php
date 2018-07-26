 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <p class="page-title-description mr-0 d-none d-md-inline-block">Sistem Informasi Pengarsipan Dokumen Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</p>
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
        <!-- /.widget-holder -->
        <?php if ($this->session->flashdata('kosong')): ?>
            <div class="col-md-12">
                <div class="alert-group">
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data paket yang anda pilih tidak tersedia harap daftarkan paket anda terlebih dahulu
                    </div>
                </div>
            </div>
        <?php endif?>


        <h5 class="box-title">BMN</h5>
                                <div class="row">
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="ui-cards.html#">
                                                    <img src="assets/demo/cards/blog-post-1.jpg" alt="Blog Post 1">
                                                </a>
                                            </figure>
                                            <header>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="ui-cards.html#">5 Amazing places to visit before you die</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="ui-cards.html#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="ui-cards.html#">
                                                    <img src="assets/demo/cards/blog-post-2.jpeg" alt="">
                                                </a>
                                            </figure>
                                            <header>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="ui-cards.html#">8 Practical ways to improve yourself</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="ui-cards.html#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-md-4 mr-b-30 d-flex">
                                        <div class="blog-post blog-post-card text-center">
                                            <figure>
                                                <a href="ui-cards.html#">
                                                    <img src="assets/demo/cards/blog-post-3.jpeg" alt="">
                                                </a>
                                            </figure>
                                            <header>
                                                <h4 class="h3 fw-300 m-1 blog-post-title"><a href="ui-cards.html#">3 Benefits of waking up early</a></h4>
                                            </header>
                                            <footer class="mr-t-30"><a href="ui-cards.html#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                                            </footer>
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->

            <!-- /.widget-holder -->
        </div>
        <hr>
    </main>