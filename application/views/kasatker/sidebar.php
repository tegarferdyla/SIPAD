    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- Sidebar Menu -->
             <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-info ripple fw-600" href="<?php echo base_url('kasatker') ?>">KASATKER<br><!-- <?php echo $nama ?> --></a>
            </div>
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="menu-item-has-children <?php if ( $this->uri->segment(2)=="tahun" OR $this->uri->segment(2)=="test"){
                        echo 'active';} ?>"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Divisi</span></a>
                        <ul class="list-unstyled sub-menu">
                        <?php foreach ($get_ppk  as $u) { ?>
                            <li><a href="<?php echo base_url()."kasatker/tahun/".$u['id_ppk']; ?>"=><?php echo $u['nama']; ?></a>
                        <?php } ?>    
                        </ul>
                    </li>
                     <li class="current-page <?php if ( $this->uri->segment(2)=="editprofile" ){
                        echo 'active';} ?>"><a href="<?php echo site_url('kasatker/editprofile') ?>"><i class="list-icon feather feather-user"></i><span class="hide-menu">User Profile</span></a>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>