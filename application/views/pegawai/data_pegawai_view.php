
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
                                        <th>ID Pegawai</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama Pegawai</th>
                                        <th>Alamat</th>
                                        <th>No. Telepon</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($data as $data) {
                                    echo '
                                    <tr>
                                        <td>'.++$no.'</td>
                                        <td>'.$data->ID_PEGAWAI.'</td>
                                        <td>'.$data->USERNAME.'</td>
                                        <td>'.$data->PASSWORD.'</td>
                                        <td>'.$data->NAMA_PEGAWAI.'</td>
                                        <td>'.$data->ALAMAT.'</td>
                                        <td>'.$data->TELP_PEGAWAI.'</td>
                                        <td>'.$data->JABATAN.'</td>
                                        <td>
                                            <a href="'.base_url().'index.php/pegawai/edit_pegawai/'.$data->ID_PEGAWAI.'" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                            <a href="'.base_url().'index.php/pegawai/hapus_pegawai/'.$data->ID_PEGAWAI.'" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus</a>

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
