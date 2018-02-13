
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>ID Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pegawai</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Obat</th>
                                        <th>Harga Satuan</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($data as $data) {
                                    echo '
                                    <tr>
                                        <td>'.++$no.'</td>
                                        <td>'.$data->ID_TRANSAKSI.'</td>
                                        <td>'.$data->TGL_TRANS.'</td>
                                        <td>'.$data->NAMA_PEGAWAI.'</td>
                                        <td>'.$data->NAMA_PEMBELI.'</td>
                                        <td>'.$data->NAMA_OBAT.'</td>
                                        <td>'.$data->HARGA.'</td>
                                        <td>'.$data->QTY.'</td>
                                        <td>'.$data->HARGA * $data->QTY.'</td>
                                        
                                    </tr>
                                    ';
                                }
                                    
                                ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
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
