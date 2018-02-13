

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
                                    <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>/index.php/obat/simpan_obat">
                                        <div class="form-group">
                                            <label>ID obat</label>
                                            <input type=" text" name="id_obat" class="form-control" value="<?php echo $id_acak; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Suplier</label>
                                            <select class="form-control" name="supplier">
                                            <?php
                                                foreach ($supplier as $a) { ?>
                                                    <option value="<?php echo $a->ID_SUPPLIER; ?>"><?php echo $a->NAMA_SUPPLIER; ?></option>
                                                <?php }
                                                ?>
                                             
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama obat</label>
                                            <input type=" text" name="nama_obat" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Produsen</label>
                                            <textarea name="produsen" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="harga" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="number" name="stock" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                        
                                        <input type="submit" value="Add" name="submit" class="btn btn-default col-lg-6">
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
