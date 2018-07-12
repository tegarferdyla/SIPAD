
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="http://wiseowl.dharansh.in/default/assets/demo/favicon.png">
     --><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi Pengelolaan Arsip Dokumen (SIPAD) - Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets1/css/baru.css') ?>">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="">
    <div class="body-bg-full profile-page" style="background-image: url(assets/img/image2.jpg)">
    <div id="wrapper" class="row wrapper biru"></div>
    <div class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="<?php echo site_url('home') ?>">
                        <a href="#" class="navbar-brand "><img src="<?php echo base_url('assets/assets1/img/SIPAD-logo.png') ?>" style="max-width:400px; margin-top: -6px;" alt="Logo"><br>
                         <!--<h4 class="mb-0" style="font-size: 40px; font-weight: 900"><span style="color:#FFBD4A">SIP</span>-PPLPS</h4>-->
                    </a>
                </div>
                <!-- /.navbar-header -->
                <div class="row">
                    <?php if ($this->session->flashdata('gagallogin')):?>
                        <div class="col-md-12">
                            <div class="alert-group">
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Username dan Password salah !!
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                  </div>
                <form action="<?php echo base_url('login/ceklogin') ?>"  method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" placeholder="username" class="form-control form-control-line" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="password" class="form-control form-control-line" name="password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit">Login</button>
                    </div>
                    <div class="form-group no-gutters mb-0">
                        <div class="col-md-12 d-flex">
                            <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                                <label class="d-flex">
                                    <input type="checkbox"> <span class="label-text">Ingat Password</span>
                                </label>
                            </div><a href="javascript:void(0)" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i>Lupa Password?</a>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.form-material -->
                <hr>
                <!-- /.btn-list -->
                <footer class="col-sm-12 text-center">
                    <p>Belum punya akun? <a href="" class="text-primary m-l-5"><b>Silakan menghubungi Administrator</b></a>
                    </p>
                </footer>
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    </div> 
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/js/material-design.js') ?> "></script>
</body>

</html>