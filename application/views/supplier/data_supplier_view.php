
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
                                        <th>No.</th>
                                        <th>ID Supplier</th>
                                        <th>Nama Supplier</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No. Telp</th>
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
                                        <td>'.$o->ID_SUPPLIER.'</td>
                                        <td>'.$o->NAMA_SUPPLIER.'</td>
                                        <td>'.$o->ALAMAT_SUPPLIER.'</td>
                                        <td>'.$o->KOTA_SUPPLIER.'</td>
                                        <td>'.$o->TELP_SUPPLIER.'</td>
                                        <td>
                                            <a href="'.base_url().'index.php/supplier/edit_supplier/'.$o->ID_SUPPLIER.'" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i> Edit</a>
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
