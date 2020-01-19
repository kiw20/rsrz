<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Materi Pembelajaran</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="<?php echo base_url();?>home_admin">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Materi Pembelajaran RSRZ</li>
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
                            <strong>Materi Pembelajaran</strong> Rumah Seni Rupa Kak Zulfa</h2>
                            <br>
                            <br>
                            <br>
                            <a href="<?php echo base_url()."mapel/tambahmapel" ?>" class="btn btn-dark m-b-10 m-l-5"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Materi</th>
                                            <th>Level</th>
                                            <th>Kelas</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                           foreach($materi_pembelajaran->result() as $row): 
                                    ?>
                                    <tr>
                                        <?php $i=1; ?>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row->nama_materi; ?></td>
                                        <td><?php echo $row->level; ?></td>
                                        <td><?php echo $row->nama_kelas; ?></td>
                                        <td><?php echo $row->file_materi; ?></td>
                                        <td align="center">
                                             <a href="<?php echo base_url()."mapel/edit_data/".$row->id ?>" title="Edit <?php echo $row->id ?>"><i class="fa fa-edit"></i></a>
                                              <a href="<?php echo base_url()."mapel/hapus_data/".$row->id ?>" title="Hapus <?php echo $row->id?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php 
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




   

