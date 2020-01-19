
<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">

                      <h4 class="mb"><i class="fa fa-angle-right"></i>Form Edit Data Siswa</h4>
                      
                      
                      
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url()."mapel/update_data" ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">DATA SISWA</label>
                              <div class="col-sm-10">
                                  <input type="hidden" name="id" value="<?php echo $materi->id ?>">
                                  <input type="text" class="form-control" value ="<?php echo $materi->nama_materi ?>" name="judul materi">
                              </div>
                              <div class="col-sm-10">
                                  <input type="hidden" name="id" value="<?php echo $materi->id ?>">
                                  <input type="text" class="form-control" value ="<?php echo $materi->level_id ?>" name="level">
                              </div>
                              <div class="col-sm-10">
                                  <input type="hidden" name="id" value="<?php echo $materi->id ?>">
                                  <input type="text" class="form-control" value ="<?php echo $materi->kelas_id ?>" name="Kelas">
                              </div>
                              <div class="col-sm-10">
                                  <input type="hidden" name="id" value="<?php echo $materi->id ?>">
                                  <input type="text" class="form-control" value ="<?php echo $materi->file_materi ?>" name="File">
                              </div>
                          </div>
                            <div class="form-group">
                                      <center><button type="submit" class="btn btn-primary">Simpan</button>
                                   </div>                 
                              </div>
                          </div>
                              </form>
                      
                        </form>
                    </div>
                </div>
</div> 