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
  .clickable-row:hover #rw{
    display: block;
    color: #1f1f1f;
   }
   .clickable-row{
      cursor: pointer;
   }
   .tKonten{
    margin-right: 80px;
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
          <a href="<?php base_url('admin');?>" ">
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
          <div class="box" style="width: 100%;">
            <div class="box-header" style="width: 80%;">
              <h3 class="box-title">Konten CulturePedia</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit"  class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid tKonten">
              <div class="row">
                <div class="col-xs-10">
                <div class="box-body table-responsive no-padding" id="tbl"  style="overflow: auto; height: 520px; width: 900px;" >
              <table class="table table-hover" style="width: ">
                <thead style="width: 900px; background-color: #fff;">
                <tr >
                  <th >No</th>
                  <th style="padding-right: 0px; width: 142px;">Daerah</th>
                  <th style="width: 550px;" >Isi</th>
                  <th style="width: 142px; background-color: #fff;">Aksi</th>
                </tr>
                </thead>
                <tbody>
              
                <?php $i=0;?>
                <?php foreach ($record  as $row ):?>
                
                <tr class="clickable-row" data-href="#" style="overflow: auto; ">
                  <td><a id="rw" href="<?=base_url('admin/view/'.$row['kode_provinsi']);?>"><?php echo $i+1;?></a></td>
                  <td style="width: 142px;">
                  <a id="rw" href="<?=base_url('admin/view/'.$row['kode_provinsi']);?>"><?php echo $row['nama_provinsi'];?></a>
                  </td>
                  <td>
                    <a id="rw" href="<?=base_url('admin/view/'.$row['kode_provinsi']);?>"><p style="width: 500px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    <?php echo $row['adat_istiadat'];?>
                    </p>
                    </a>
                  </td>
                  <td>
                    <div class='btn-group'>
                    <button type='button' onclick="location.href='<?=base_url('admin/edit/'.$row['kode_provinsi']);?>';" class='btn btn-info'>Edit</button>
                    <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                    <span class='caret'></span>
                    <span class='sr-only'>Toggle Dropdown</span>
                    </button>
                    <ul class='dropdown-menu' role='menu'>
                      <li><a href='<?php echo base_url('admin/edit/'.$record[0]['kode_provinsi']);?>'>Edit</a></li>
                      <li><a href='#'>Hapus</a></li>
                    </ul>
                    </div>
                </td>
                </tr>
                
                <?php $i++;?>
              <?php endforeach;?>
              </tbody>
              </table>
              
            </div>      



                </div>
                <div class="col-xs-2">
                  <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 250px;">
                        <a href="<?php echo base_url('/user/tambah_konten');?>">
                        <button class="btn btn-success" style="margin-left: 20px;" >Tambah Konten</button>
                        </a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->

            

            <!-- /.box-body -->
            
            

          </div>
          <!-- /.box -->
          
        </div>
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
<script >
    $(document).ready(function(){
      var dt = 3;
        $("#tbl").load("http://127.0.0.1/culturepedia.com/index.php/admin/loadtbl"
    });
  </script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

<script type="text/javascript">
    function load(){
      var hr = new XMLHttpRequest();
      var url = ""
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
