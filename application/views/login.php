<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>CulturePedia | LOGIN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css')?>">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
 <style type="text/css">
   body {
    background-image: url('/culturepedia.com/assets/hd/2.jpg') ;
    background-repeat:no-repeat;
  }


 </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body >
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('beranda')?>" style="margin-left: 20px;">
    <img src="<?php echo base_url('/assets/img/logos/title.png')?>" width="150px" alt="">
  </a>
</nav>
<div class="login-box">
  <div class="login-logo" style="color: #fff;">
    <h1><b>Masuk</b></h1>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masuk untuk mulai berkontribusi!</p>

   

    <?php echo form_open('/login/logging_in'); ?>
      <span id="eror" style="color: red;" ><?php 
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }?></span>
      <?php echo form_error('username'); ?>
      <div class="form-group has-feedback">
        

        <input type="text" class="form-control" name="username" id="user-name" value="<?php echo set_value('username'); ?>" placeholder="username" style="text-transform: lowercase;">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

        <?php echo form_error('password'); ?>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="pass-word" value="<?php echo set_value('password'); ?>" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck" style="padding-left: 20px;">

            <label>
              <input type="checkbox"> Ingat Saya
            </label>
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="sign-in" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <a href="#">Lupa Password?</a><br>
    <a href="<?php echo base_url('/register')?>" class="text-center">Daftar</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo base_url('assets/jQuery/jquery.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

     <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/agency.min.js')?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
