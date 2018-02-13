
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Obat</h1>
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
                                        <th>ID Obat</th>
                                        <th>Nama Suplier</th>
                                        <th>Nama obat</th>
                                        <th>Produsen</th>
                                        <th>Harga</th>
                                        <th>Stock</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($data as $o) {
                                    echo '
                                    <tr>
                                        <td>'.++$no.'</td>
                                        <td>'.$o->ID_OBAT.'</td>
                                        <td>'.$o->NAMA_SUPPLIER.'</td>
                                        <td>'.$o->NAMA_OBAT.'</td>
                                        <td>'.$o->PRODUSEN.'</td>
                                        <td>'.$o->HARGA.'</td>
                                        <td>'.$o->STOCK.'</td>
                                        <td>'.$o->FOTO.'</td>
                                        <td>
                                            <a href="'.base_url().'index.php/obat/lihat_obat/'.$o->ID_OBAT.'" class="btn btn-primary"><i class="fa fa-search fa-fw"></i> Lihat</a>

                                        </td>
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
