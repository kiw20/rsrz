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
                            <li class="breadcrumb-item active">Materi Pembelajaran</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    <div class="card">
                        <div class="boxs mail_listing">
                            <div class="inbox-center table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="1">
                                                <div class="inbox-header">
                                                    Tambah Materi Pembelajaran
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> 
                            <div class="col-md-12">
                                <form role="form" method="post" action="<?php echo base_url()."mapel/post_mapel" ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="composeForm">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama_materi" class="form-control" placeholder="Judul Materi">
                                                <input type="text" name="level_id" class="form-control" placeholder="Level">
                                            </div>
                                        </div>
                                <div class="form-group">
                                    <label>
                                        <input class="with-gap" name="kelas_id" type="radio" checked />
                                        <span>Coding</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="kelas_id" type="radio" />
                                        <span>Seni Rupa</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="kelas_id" type="radio" />
                                        <span>Fotografi</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="kelas_id" type="radio" />
                                        <span>Robotic</span>
                                    </label>
                                </div>
                                        <div class="compose-editor m-t-20">
                                            <div id="summernote"></div>
                                            <input type="file" name="file_materi" class="default" multiple>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->