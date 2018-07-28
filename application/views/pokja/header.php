
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!--  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pace.css') ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi Pengelolaan Arsip Dokumen - Satker Pengembangan Penyehatan Lingkungan Permukiman Strategis</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/material-icons/material-icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/mono-social-icons/monosocialiconsfont.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/vendors/feather-icons/feather.css') ?>" rel="stylesheet" type="text/css"> 
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <!-- CSS -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>  -->
</head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <!-- <p class="logo-expand" alt=""><span style="color:#007fff">SIPAD</span></p> -->
                    <img class="logo-expand" style="width:150px; " src="<?php echo base_url('assets/assets1/img/sipadtulis.png') ?>" alt="">
                    <img class="logo-collapse" alt="" src="<?php echo base_url('assets/assets1/img/sipadlog.png') ?>">
                    <!-- <p>BonVue</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search d-none d-sm-block" role="search"><i class="feather feather-search list-icon"></i>
                <input type="search" class="search-query" placeholder="Pencarian Dokumen ..."> <a href="javascript:void(0);" class="remove-focus"><i class="feather feather-x"></i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
                <!-- /.dropdown -->
                <!--  -->
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown"><span class="avatar thumb-xs2"><span style="color:#007fff"><?php echo ucwords($user['nama']); ?></span> &nbsp;<img src="<?php echo base_url('assets/img/'.$user['foto']) ?>" class="rounded-circle" alt=""> <i class="feather feather-chevron-down list-icon"></i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                    <div class="card">
                    <ul class="list-unstyled card-body">
                        <li><a href="<?php echo site_url('pokja/editprofile') ?>"><span><span class="align-middle">Pengaturan Akun</span></span></a>
                        </li>
                        <li><a href="#"><span><span class="align-middle">Ubah Password</span></span></a></li>
                        <li><a href="<?php echo base_url('login?logout=signout'); ?>"><span><span class="align-middle">Keluar</span></span></a></li>
                </li>
            </ul>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.dropdown-card-profile -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-nav -->
</nav>
    <!-- /.navbar -->