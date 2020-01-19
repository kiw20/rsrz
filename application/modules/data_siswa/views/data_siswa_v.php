<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">About RSRZ</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="<?php echo base_url();?>home_admin">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Sejarah RSRZ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
    <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Sejarah</strong> Rumah Seni Rupa Kak Zulfa</h2>
                            <br>
                            <br>
                            <br>
                            <a href="<?php echo base_url()."data_siswa/tambahsiswa" ?>" class="btn btn-dark m-b-10 m-l-5"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama Lengkap</th>
                                            <th>Kelas</th>
                                            <th>Nama Ibu</th>
                                            <th>Foto Siswa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                           foreach($siswa->result() as $row): 
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->nis; ?></td>
                                        <td><?php echo $row->nama_lengkap; ?></td>
                                        <td><?php echo $row->nama_kelas; ?></td>
                                        <td><?php echo $row->nama_ibu; ?></td>
                                        <td><?php echo $row->foto_siswa; ?></td>
                                        <td align="center">
                                            <a href="<?php echo base_url()."data_siswa/edit_data/".$row->nis ?>" title="Edit <?php echo $row->nis ?>"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url()."data_siswa/hapus_data/".$row->nis ?>" title="Hapus <?php echo $row->nis?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php 
                                    $no++;
                                    endforeach; 
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- #END# Exportable Table -->
