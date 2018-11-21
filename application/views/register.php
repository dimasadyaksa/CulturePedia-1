<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css')?>">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
 <style type="text/css">
   body {
    background-image: url('/culturepedia.com/assets/hd/5.jpg');
  }

 </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body  >
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('beranda')?>" style="margin-left: 20px;">
    <img src="<?php echo base_url('/assets/img/logos/title.png')?>" width="150px" alt="">
  </a>
</nav>
<div class="register-box" style="margin-top: 50px;">
  <div class="register-logo">
    <a href="../../index2.html" style="color: #fff; -webkit-text-stroke: 1px #001f3f; font-size: 55px;"><b>Daftar</b></a>
  </div>

  <div class="register-box-body" >
    <p class="login-box-msg">Daftar untuk mulai berkontribusi!</p>

    <?php echo form_open('/register/form'); ?>
     <?php echo form_error('nama-lengkap'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="nama-lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <?php echo form_error('username'); ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="user_name" value="" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <span id="user_exist" ></span>
       <?php echo form_error('email'); ?>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
       <?php echo form_error('password'); ?>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="confirm_password" placeholder="Ulangi Password" name="repeatpass">
        <span class="glyphicon glyphicon-log-in form-control-feedback" ></span>
      </div>
      <span id="message" ></span>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck"style="padding-left: 20px;">
            <label>
              <input type="checkbox" > Saya menyetujui <a href="#">syarat dan ketentuan</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="daftar">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url('/login')?>" class="text-center">Sudah punya akun?</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

 <script src="<?php echo base_url('assets/jQuery/jquery.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

     <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/agency.min.js')?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
  $('#user_name').keyup(function(){
   var username = $('#user_name').val();
   if(username != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>register/user_exists",
     method: "POST",
     data: {username:username},
     success: function(data){
      $('#user_exist').html(data);
     }
    });
   }
  });
 });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    if($('#user_name,#name,#password,#email,#confirm_password').val()==''){
      document.getElementById("daftar").disabled = true;
    }else{
      document.getElementById("daftar").disabled = false;
    }
  })

  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('Sesuai').css('color', 'green');
    } else 
      $('#message').html('Tidak Sesuai').css('color', 'red');
  });
</script>

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
