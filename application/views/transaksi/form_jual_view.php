

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Transaksi Penjualan</h1>
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
                                    <form role="form" method="post" action="<?php echo base_url(); ?>/index.php/transaksi/do_jual">
                                        <div class="form-group">
                                            <label>ID Transaksi</label>
                                            <input type="text" name="id_transaksi" class="form-control" value="<?php echo $id_acak; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $this->session->userdata('NAMA_PEGAWAI'); ?>" readonly>
                                            <input type="hidden" name="pegawai" value="<?php echo $this->session->userdata('ID_PEGAWAI'); ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <select class="form-control" name="obat">
                                            <?php
                                                foreach ($obat as $a) { ?>
                                                    <option value="<?php echo $a->ID_OBAT; ?>"><?php echo $a->NAMA_OBAT; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pembeli</label>
                                            <input type="text" name="nama_pembeli" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="text" name="tgl_trans" class="form-control" value="<?php echo date('Y - m - d'); ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" name="qty" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="number" name="total" class="form-control" value="<?php echo $total; ?>" readonly>
                                        </div>

                                        <input type="submit" name="jual" value="Lakukan Transaksi" class="btn btn-info col-lg-6">
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
