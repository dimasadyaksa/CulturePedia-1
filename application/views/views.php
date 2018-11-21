<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CulturePedia | Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css')?>">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
 <style type="text/css">
   td a{
    display: block;
    color: #000;
   }
  .clickable-row:hover td a{
    display: block;
    color: #007fff;
   }
   .clickable-row{
      cursor: pointer;
   }
 </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <header class="main-header" style="background-color: #212529;" >
    <a href="../../index2.html" class="logo" style="background-color: #212529;" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Culture</b>Pedia</span>
    </a>
    <nav class="navbar navbar-static-top" style="background-color: #212529;" >
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/usr/dimas.jpg')?>" class="user-image" alt="User Image">
              <span class="hidden-xs" id="demo">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/usr/dimas.jpg')?>" class="img-circle" alt="User Image">

                <p id="demo">
                 Admin
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-left">
                    <a href="#">Kontent</a>
                  </div>
                  <div class="col-xs-4 text-right">
                    <a href="#">      Rating</a>
                  </div>
                </div>
                <!-- /.row -->

                
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>

  </header>
<aside class="main-sidebar" id="ts">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/usr/dimas.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Navigasi Utama</li>
        <li class="treeview">
          <a href="<?php
              if($_SESSION['akses']=='admin'){
                echo base_url('admin');
              }else{
                echo base_url('user');
              }?>" >
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a> 
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Pesan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
          <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

              <h2 class="box-title"><?php echo $record[0]['nama_provinsi'];?></h2>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="box"></div>
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

    <section class="content" style="height: 570px; overflow: auto;"  >
      <div class="row">
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pakaian Adat</h3>
              <!-- tools box -->
            </div>
            <div class="box-body">
              <p>
                <?php echo $record[0]['pakaian_adat'];?>
              </p>
            </div>

          </div>
        </div>
        <!-- /.col-->
        <img src='<?php echo base_url('assets/img/pakaian/'.$record[0]['pakaian']);?>' 
        style="max-width: 200px;max-height: 500px;" >
      </div>
      
      <!-- ./row -->
      <div class="row">
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rumah Adat</h3>
              <!-- tools box -->
            </div>
            <div class="box-body">
              <p>
                <?php echo $record[0]['rumah_adat'];?>
              </p>
            </div>

          </div>
        </div>
        <!-- /.col-->
        
        <img src='<?php echo base_url('assets/img/rumah/'.$record[0]['rumah']);?>' 
        style="max-width: 200px;max-height: 300px;">
                
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Adat Istiadat</h3>
              <!-- tools box -->
            </div>
            <div class="box-body">
              <p>
              <?php echo $record[0]['adat_istiadat'];?>
              </p>
            </div>

          </div>
        </div>
       
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  </div>






<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js')?>"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>

<script type="text/javascript">
function previewFile(){
  var preview = document.querySelector('img');
  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();
  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);
  if (file){
    reader.readAsDataURL(file);
  }
}
</script>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      "hai";
    }
  };
  xhttp.send();
}
</script>
</body>
</html>
