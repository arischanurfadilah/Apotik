

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                 
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label>ID obat</label>
                                            <input type=" text" name="id_obat" class="form-control" value="<?php echo $data->ID_OBAT; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Suplier</label>
                                            <input type=" text" name="id_obat" class="form-control" value="<?php echo $supplier->NAMA_SUPPLIER; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama obat</label>
                                            <input type=" text" name="nama_obat" class="form-control" value="<?php echo $data->NAMA_OBAT; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Produsen</label>
                                            <textarea name="produsen" class="form-control" disabled><?php echo $data->PRODUSEN; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" value="<?php echo $data->HARGA; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control" value="<?php echo $data->STOCK; ?>" disabled>
                                        </div>
                                        
                                        <div class="form-group">
                                            <a href="<?php echo base_url(); ?>index.php/obat/data_obat_kasir" class="btn btn-success btn-block"> Back </a>
                                        </div>
                                        
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <img src="<?php echo base_url().'/foto/'.$data->FOTO; ?>" width="400px" height="400px">
                                            </div>
                                        </div>

                                    </form>
                                
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
