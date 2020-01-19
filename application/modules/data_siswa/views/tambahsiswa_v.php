<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">About RSRZ</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="<?php base_url();?>home_admin">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Siswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <div class="col-md-12">
     <form role="form" method="post" action="<?php echo base_url()."data_siswa/post_siswa" ?>">
        

            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="input-field col s12">
                                        <input name="nis" type="text" data-length="10" >
                                        <label>NIS</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="nama_lengkap" type="text" data-length="10" >
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="nama_panggilan" type="text" data-length="10" >
                                        <label>Nama Panggilan</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="tempat_lahir" type="text" data-length="10" >
                                        <label>Tempat Lahir</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="tanggal_lahir" type="date" data-length="10" >
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    
                                    <div class="input-field col s12">
                                        <input name="alamat" type="text" data-length="10" >
                                        <label>Alamat</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="hobi" type="text" data-length="10" >
                                        <label>Hobi</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select class="form-control" name="jenis_kelamin" >
                                            <option value="0">Pilih Jenis Kelamin</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                        <select class="form-control" name="kelas_id" >
                                            <option> Pilih Kelas</option>
                                            <?php foreach ($kelas as $k): ?>
                                                <option value="<?= $k->id?>"><?= $k->nama_kelas ?></option>                
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <!-- <div class="input-field col s12">
                                    <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload one or more foto siswa">
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <div class="input-field col s12">
                                        <input name="nama_ibu" type="text" data-length="10" >
                                        <label>Nama Ibu</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="nama_ayah" type="text" data-length="10" >
                                        <label>Nama Ayah</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="no_hp" type="text" data-length="10" >
                                        <label>Nomor HP Ortu</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="email" type="text" data-length="10" >
                                        <label>Email Ortu</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="nama_fb" type="text" data-length="10" >
                                        <label>Facebook Ortu</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input name="nama_ig" type="text" data-length="10" >
                                        <label>Instagram Ortu</label>
                                    </div>
                                </div>
                            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
            </div>

        </div>

        
    </form>
</div>
</div>
</div>
</div>
</div>
                <!-- End PAge Content -->
</div>