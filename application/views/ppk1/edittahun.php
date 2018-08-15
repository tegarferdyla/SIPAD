  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit Tahun</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('PPK1') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Input Tahun</li>
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
                                <h5 class="box-title mr-b-0">Tahun Project</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div> 
                                <form action ="<?php echo base_url ('PPK1/updatetahun') ?>"  method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Kode Tahun</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="<?php echo $id_tahun ?>" placeholder="Kode PPK" type="text" name="id_tahun" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama Tahun</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="" placeholder="ex: 2014" type="number" min="1990" name="nama_tahun" value="<?php echo $nama_tahun ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Keterangan</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="" rows="3" name="deskripsi"><?php echo $deskripsi ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                                <button class="btn btn-outline-default btn-rounded" type="reset">Cancel</button>
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