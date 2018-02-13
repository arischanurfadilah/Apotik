

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Tambah Obat</h1>
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
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/supplier/simpan_supplier">
                                        <div class="form-group">
                                            <label>ID Supplier</label>
                                            <input type=" text" name="id_supplier" class="form-control" value="<?php echo $id_acak; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Supplier</label>
                                            <input type=" text" name="nama_supplier" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat_supplier" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" name="kota_supplier" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input type="text" name="telp_supplier" class="form-control">
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
