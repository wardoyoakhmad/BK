 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-pencil"></i> Edit Data</h3>
            
          <?php
            if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){
          ?>
            <ul class="breadcrumb" id="crumbData">
          <?php
            foreach ($breadcrumb as $key=>$value) {
            if($value!=''){
          ?>
            <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a> <span class="divider"></span></li>
          <?php }else{?>
            <li class="active"><?php echo $key; ?></li>
          <?php }
            }
          ?>     
            </ul>
          <?php
            }
          ?>
            
            <div class="row data">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <div class="row ms">
                        <form class="form-inline" role="form">
                        <div class="form-group">
                        <label class="control-label" for="select">Tahun</label>
                               <input type="email" class="form-control" id="inputTahun" placeholder="Enter email">
                       
                        </div>
                        <input type="password" class="form-control" id="inputBulan" placeholder="Password">
                        <select class="form-control" id="selectKetentuan">
                        <option>NIS</option>
                        <option>Nama</option>
                        <option>Kelas</option>
                        <option>Keterangan</option>
                        <option>No. HP</option>
                        </select>
                          
                      </form>
                      <br>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                        <label class="control-label" for="select">Kelas</label>
                        &nbsp
                        <select class="form-control" id="selectKelas">
                        <option>X</option>
                        <option>XI</option>
                        <option>XII</option>
                       
                        </select>
                        </div>
                      </form>
                      </div>
                          <table class="footable table-bordered table-striped">
                            
                              <thead>
                              <tr>
                                  <th id="colNama"><i class="fa fa-bullhorn"></i> Company</th>
                                  <th id="colPesan"><i class="fa fa-question-circle"></i> Descrpition</th>
                                  <th data-hide="phone,tablet" id="colHP"><i class="fa fa-bookmark"></i> Profit</th>
                                  <th data-hide="phone,tablet" id="colTanggal"><i class=" fa fa-edit"></i> Status</th>
                                  <th data-hide="phone,tablet" id="colAksi"><i class=" fa fa-edit"></i> Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td id="colIsi">Company Ltd</td>
                                  <td class="hidden-phone" id="colIsi">Lorem Ipsum dolor</td>
                                  <td id="colIsi">12000.00$ </td>
                                  <td id="colIsi"><span class="label label-info label-mini">Due</span></td>
                                  <td id="colIsi">
                                  <button type="button" class="btn btn-primary btn-xs tooltips" data-placement="left" data-original-title="Edit" data-toggle="modal" data-target="#modalEdit">
                                  <i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-danger btn-xs tooltips" data-placement="right" data-original-title="Hapus" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <td colspan="5">
                                  <div class="pagination pagination-centered hide-if-no-paging"></div>
                                </td>
                              </tr>
                              </tfoot>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

  <!-- Modal Edit -->
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
      </div>
      <br>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Text :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Text :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Text :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Text :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Delete Data</h4>
      </div>
      <br>
      <div class="modal-body">
        <form>
          <p>Hapus Data ?</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Ya</button>
      </div>
    </div>
  </div>
</div>

            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->

      