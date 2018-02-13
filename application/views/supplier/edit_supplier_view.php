

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Data Supplier</h1>
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
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/supplier/update_supplier/<?php echo $o->ID_SUPPLIER; ?>">
                                        <div class="form-group">
                                            <label>ID Supplier</label>
                                            <input type=" text" name="id_supplier" class="form-control" value="<?php echo $o->ID_SUPPLIER; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Supplier</label>
                                            <input type=" text" name="nama_supplier" class="form-control" value="<?php echo $o->NAMA_SUPPLIER; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat_supplier" class="form-control"><?php echo $o->ALAMAT_SUPPLIER; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" name="kota_supplier" class="form-control" value="<?php echo $o->KOTA_SUPPLIER; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input type="text" name="telp_supplier" class="form-control" value="<?php echo $o->TELP_SUPPLIER; ?>">
                                        </div>
                                        <input type="submit" name="Edit" value="Edit" class="btn btn-primary col-lg-6">
                                        <a href="<?php echo base_url(); ?>index.php/supplier/data_supplier/" class="btn btn-warning col-lg-6">Cancel</a>
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
