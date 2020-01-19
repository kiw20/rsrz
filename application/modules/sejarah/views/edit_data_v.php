<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">

                      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Edit Data</h4>
                      
                      
                      
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url()."sejarah/update_data" ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SEJARAH</label>
                              <div class="col-sm-10">
                                  <input type="hidden" name="id_sejarah" value="<?php echo $sejarah->id ?>">
                                  <input type="text" class="form-control" value ="<?php echo $sejarah->sejarah ?>" name="sejarah">
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