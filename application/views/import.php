<section id="main-content">
  <section class="wrapper">

<<<<<<< HEAD
    <h3><i class="fa fa-angle-right"></i> Data Siswa</h3>
=======
    <h3><i class="fa fa-angle-right"></i> Import Data Siswa</h3>
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
    <?php
    if(isset($breadcrumb)&& is_array($breadcrumb) && count($breadcrumb) > 0){
      ?>




<<<<<<< HEAD
      <ul class="breadcrumb" id="crumbData">
=======
      <ul class="breadcrumb" id="crumbData2">
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
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

      <?php if (isset($data_error)) {
        print_r($error); 
      } ?>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
<<<<<<< HEAD
            <a href="<?php echo base_url(); ?>dokumen/download"><button class="btn btn-lg btn-block btn-info">Download</button></a><br/>
            <form method="post" action="<?php echo base_url(); ?>dokumen/import_csv" enctype="multipart/form-data">
              <!-- <button class="btn btn-lg btn-block btn-info">Improt CSV</button> -->
              <input type="file" name="userfile" size="36" id="usrFile">
              <input type="submit" id="btnUpload" class="btn btn-success btn-lg btn-block" value="Upload & Export">
            </form>
=======
            <div class="row import">
        
        <div class="col-sm-7 col-md-8 col-lg-11">
            <br>
            <form method="post" action="<?php echo base_url(); ?>dokumen/import_csv" enctype="multipart/form-data">
              <!-- <button class="btn btn-lg btn-block btn-info">Improt CSV</button> -->
              
              <div class="well" id="wellUsr">
                <input type="file" name="userfile" size="36" id="usrFile">
              </div>
               <br>
              <button type="submit" id="btnUpload" class="btn btn-default btn-block"><i class="fa fa-cloud-upload"></i>  Upload & Export</button>
            </form><br/>
            <a href="<?php echo base_url(); ?>dokumen/download"><button class="btn btn-block btn-warning"><i class="fa fa-cloud-download"></i> Download</button></a>
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
          </div>
        </div>
      </div>
    </section>
  </section>