<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>Login</title>
    <!-- Custom CSS -->
    <link rel="shortcut icon" href="<?= base_url().'asset/images/logo.png'?>"/>

    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/bootstrap.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/bootflat/css/bootflat.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/fontawesome/css/font-awesome.min.css';?>"/>
    <link href="<?= base_url().'asset/css/pagestyle.css';?>" rel="stylesheet">
    <link href="<?= base_url().'asset/css/pagestyle-responsive.css';?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <div id="login-page">
        <div class="container">
        
              <form class="form-login" method="post" action="<?php echo base_url(); ?>login/masuk" role="login">
                <h2 class="form-login-heading">Login</h2>
                <div class="login-wrap">
                    <input type="text" name="email" class="form-control" placeholder="Username" required class="form-control input-lg" autofocus>
                    <br>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required class="form-control input-lg">
                    <br>
                    <button class="btn btn-default btn-block" type="submit"><i class="fa fa-lock"></i> Login</button>
                    <br>
                   
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Lupa Password?</a>
                    </span>
                    <br>
                    </div>
                    <p class="form-login-footer">copyright <i class="fa fa-copyright"></i> 2015
                        blackomsi</p>
                    </div>
        
                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Lupa Password ?</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Masukkan alamat email untuk me-reset password</p>
                                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
        
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-info" type="button">Submit</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        
              </form>       
        
        </div>
      </div>

    <script src="<?= base_url().'asset/js/jquery.js';?>"></script>
    <script src="<?= base_url().'asset/js/bootstrap.min.js';?>"></script>

    <script type="text/javascript" src="<?= base_url().'asset/js/jquery.backstretch.min.js'?>"></script>

  </body>
</html>