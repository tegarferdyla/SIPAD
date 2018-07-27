    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- Sidebar Menu -->
             <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-info ripple fw-600" href="">Unit Kerja <br><?php echo $nama ?></a>
            </div>
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page <?php if($this->uri->segment(2)==""){echo 'active';}?>"><a href="<?php echo site_url('ppk1') ?>"><i class="list-icon feather feather-pie-chart"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="menu-item-has-children <?php if ( $this->uri->segment(2)=="daftartahun" OR $this->uri->segment(2)=="inputtahun"){
                        echo 'active';} ?>"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Tahun</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="<?php if($this->uri->segment(2)=="daftartahun"){echo 'active daftartahun-active';} ?>"><a href="<?php echo site_url('ppk1/daftartahun') ?>">Daftar Tahun</a>
                            </li>
                            <li class="<?php if($this->uri->segment(2)=="inputtahun"){echo 'active inputtahun-active';} ?>"><a href="<?php echo site_url('ppk1/inputtahun') ?>">Input Tahun</a>
                            </li>
                        </ul>
                    </li>
                     <li class="current-page <?php if($this->uri->segment(2)=="inputpaket"){echo 'active';}?>"><a href="<?php echo site_url('ppk1/inputpaket') ?>"><i class="list-icon feather feather-plus"></i><span class="hide-menu">Unggah Paket</span></a>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>