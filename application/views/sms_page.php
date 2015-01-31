
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Kirim Pesan</h3>
          	
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



                    <form class="form-horizontal" method="post">
                    <fieldset id="formSms">

                      <div class="form-group">
                      <label for="select" class="col-md-1 control-label">No. HP</label>
                          <div class="col-md-3">
                            <textarea class="form-control" rows="3" id="textArea"><?php 
                            foreach ($no as $data) {
                               # code...
                              print_r($data['no']);
                              echo "\n";
                             } 
        
                            ?></textarea>
                          </div>
                      </div>

                      <div class="form-group">
                            <label for="textArea" class="col-md-1 control-label">Pesan</label>
                            <div class="col-lg-6">
                              
                              <textarea class="form-control" rows="3" id="textArea"></textarea>
                              <span class="help-block">Tuliskan pesan pada kolom dibawah ini.</span>
                            </div>
                      </div>

                      <div class="form-group">
                          <div class="col-lg-5 col-lg-offset-1">
                          <button class="btn btn-danger">Batal</button>
                          <button type="submit" class="btn btn-primary">Kirim</button>
                          </div>
                      </div>  

                    </fieldset>
                    </form>
                  
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row --> 	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

     