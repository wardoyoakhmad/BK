
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-inbox"></i> Kotak Masuk</h3>
            
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

            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="content-panel">

    <div class="row pesan">
        
        <div class="col-sm-9 col-md-10 col-lg-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-pencil">
                </span>Buat Pesan</a></li>
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span>
                    Inbox&nbsp;<span class="badge">42</span></a></li>
                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-comment"></span>
                    Outbox&nbsp;<span class="badge">42</span></a></li>
               
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    


                    <form class="form-horizontal" method="get">
                    

                      <div class="form-group">
                      <label for="select" class="col-md-1 control-label">No. HP</label>
                          <div class="col-md-3">
                          <select class="form-control" id="select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                          </div>
                      </div>

                      <div class="form-group">
                            <label for="textArea" class="col-md-1 control-label">Pesan</label>
                            <div class="col-lg-6">
                              
                              <textarea class="form-control" rows="3" id="textArea"></textarea>
                              <span class="help-block">Tuliskan pesan pada kolom di atas ini.</span>
                            </div>
                      </div>

                      <div class="form-group">
                          <div class="col-lg-5 col-lg-offset-1">
                          <button class="btn btn-danger">Batal</button>
                          <button type="submit" class="btn btn-success">Kirim</button>
                          </div>
                      </div>  

                    </form>
                               
                              
                   
                </div>

                <div class="tab-pane fade in" id="profile">
                    <table class="footable table-bordered" data-page-size="7">
                            
                              <thead>
                              <tr>
                                  <th data-type="numeric" id="colNomer"> No</th>
                                  <th class="hidden-phone" id="colHP"><i class="fa fa-mobile fa-2x"></i>&nbsp; No. HP</th>
                                  <th id="colPesan"><i class="fa fa-envelope"></i>&nbsp; Pesan</th>
                                  <th id="colTanggal"><i class=" fa fa-calendar"></i>&nbsp; Tanggal</th>
                                  <th id="colAksi"><i class=" fa fa-wrench"></i>&nbsp; Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Lorem Ipsum dolor</td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    2
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>17900.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    3
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>14400.00$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    4
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>22000.50$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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
                </div>

                <div class="tab-pane fade in" id="messages">

                   <table class="footable table-bordered" data-page-size="7">
                            
                              <thead>
                              <tr>
                                  <th data-type="numeric" id="colNomer"> No</th>
                                  <th class="hidden-phone" id="colHP"><i class="fa fa-mobile fa-2x"></i>&nbsp; No. HP</th>
                                  <th id="colPesan"><i class="fa fa-envelope"></i>&nbsp; Pesan</th>
                                  <th id="colTanggal"><i class="fa fa-calendar"></i>&nbsp; Tanggal</th>
                                  <th id="colTanggal"><i class=" fa fa-wifi"></i>&nbsp; Status</th>
                                  <th id="colAksi"><i class=" fa fa-wrench"></i>&nbsp; Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Lorem Ipsum dolor</td>
                                  <td>12000.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    2
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>17900.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    3
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>14400.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    4
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>22000.50$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td class="hidden-phone">Lorem Ipsum dolor</td>
                                  <td>12120.00$ </td>
                                  <td>12000.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                     
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                              <tfoot>
    <tr>
      <td colspan="6">
        <div class="pagination pagination-centered hide-if-no-paging"></div>
      </td>
    </tr>
  </tfoot>
                          </table>

                </div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
            
            <div class="row-md-12">

            </div>
        </div>
    </div>


                  
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->   
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

     