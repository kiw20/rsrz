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
                            <li class="breadcrumb-item active">Tambah Data Sejarah</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid">
                <!-- Start Page Content -->
              <div class="row">
                    <div class="col-12">
                        <div class="card">
    <div class="col-md-12">
     <form role="form" method="post" action="<?php echo base_url()."sejarah/post_sejarah" ?>">
        <div class="row"> 

            <div class="col-md-12">
                <div class="form-group">
                    <br><br>
                    <label class="control-label"><h5>SEJARAH RSRZ</h5></label>
                    <input type="text" name="sejarah" placeholder="isi sejarah" class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <br><button type="submit" class="btn btn-primary">Simpan</button>
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