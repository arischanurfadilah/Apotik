

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/pegawai/update_pegawai/<?php echo $o->ID_PEGAWAI; ?>">
                                        <div class="form-group">
                                            <label>ID Pegawai</label>
                                            <input type=" text" name="id_pegawai" class="form-control" value="<?php echo $o->ID_PEGAWAI; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $o->USERNAME; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $o->PASSWORD; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $o->NAMA_PEGAWAI; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control"><?php echo $o->ALAMAT; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input type="text" name="telp_pegawai" class="form-control" value="<?php echo $o->TELP_PEGAWAI; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" value="kasir" readonly>
                                        </div>
                                        
                                        <input type="submit" name="edit" value="Edit" class="btn btn-primary col-lg-6">
                                        <a href="<?php echo base_url();?>index.php/pegawai/data_pegawai" name="back" class="btn btn-warning col-lg-6" >Cancel</a>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
