  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit Profile</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Kasatker') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Edit Profile</h5>
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l16">Change Foto</label>
                                        <div class="col-md-9">
                                            <input id="l16" type="file">
                                            <br><small class="text-muted">maximum * 2kb</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama Lengkap</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Nama Lengkap" type="text">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="l15" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary btn-rounded" type="button">Submit</button>
                                                <button class="btn btn-outline-default btn-rounded" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>