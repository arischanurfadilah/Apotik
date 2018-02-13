

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
                                <?php 
                                    if (!empty($notif)) {
                                        echo '<div class="alert alert-danger">'.$notif.'</div>';
                                        }
                                    ?>    
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/pegawai/simpan_pegawai">
                                        <div class="form-group">
                                            <label>ID Pegawai</label>
                                            <input type=" text" name="id_pegawai" class="form-control" value="<?php echo $id_acak; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama_pegawai" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input type="text" name="telp_pegawai" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" value="kasir" readonly>
                                        </div>
                                        
                                        <input type="submit" value="Add" name="submit" class="btn btn-info col-lg-6">
                                        <input type="reset" value="clear" class="btn btn-danger col-lg-6">
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
