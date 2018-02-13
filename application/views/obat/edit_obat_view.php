

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
                                <?php 
                                    if (!empty($notif)) {
                                        echo '<div class="alert alert-danger">'.$notif.'</div>';
                                        }
                                    ?>    
                                    <form role="form" method="post" action="<?php echo base_url();?>index.php/obat/update_obat/<?php echo $data->ID_OBAT; ?>" enctype="multipart/form-data">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label>ID obat</label>
                                            <input type=" text" name="id_obat" class="form-control" value="<?php echo $data->ID_OBAT; ?>">
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
                                            <input type=" text" name="nama_obat" class="form-control" value="<?php echo $data->NAMA_OBAT; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Produsen</label>
                                            <textarea name="produsen" class="form-control"><?php echo $data->PRODUSEN; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" value="<?php echo $data->HARGA; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock" class="form-control" value="<?php echo $data->STOCK; ?>">
                                        </div>
                                        
                                        <input type="submit" name="edit" value="Edit" class="btn btn-primary col-lg-6">
                                        <a href="<?php echo base_url();?>index.php/obat/data_obat" name="back" class="btn btn-warning col-lg-6" >Cancel</a>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <img src="<?php echo base_url().'/foto/'.$data->FOTO; ?>" width="650px">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <input type="hidden" name="nama_foto" value="<?php echo $data->FOTO; ?>" >
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
