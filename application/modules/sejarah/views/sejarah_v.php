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

                            <a href="<?php echo base_url()."sejarah/tambahsejarah" ?>" class="btn btn-dark m-b-10 m-l-5"><i class="fa fa-plus"></i> Tambah Data</a>

                            <?php
                            if($this->session->flashdata('success')){
                                echo '<div class="alert alert-success">';
                                echo $this->session->flashdata('flash');
                                echo'</div>';
                            }
                            ?>
                    </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            <th>Isi Sejarah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                           foreach($sejarah->result() as $row): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row->sejarah; ?></td>
                                        <td align="center">
                                             <a href="<?php echo base_url()."sejarah/edit_data/".$row->id ?>" title="Edit <?php echo $row->sejarah ?>"><i class="fa fa-edit"></i></a>
                                              <a href="<?php echo base_url()."sejarah/hapus_data/".$row->id ?>" title="Hapus <?php echo $row->sejarah?>"><i class="fa fa-trash"></i></a>
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




   

