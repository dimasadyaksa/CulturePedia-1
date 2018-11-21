
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Culture-CulturePedia</title>


    <link href="<?php echo base_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url('/assets/fontawesome/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/assets/css/montserrat.css');?>" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('/assets/css/Kaushan.css');?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('/assets/css/droid.css');?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('/assets/css/roboto.css');?>' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/img/logos/cptitle.png')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style.css')?>" media="all" />
    <link href='<?php echo base_url('/assets/css/amaranth.css');?>' rel='stylesheet' type='text/css'>

    <link href="<?php echo base_url('/assets/css/agency.min.css')?>" rel="stylesheet">

    <style type="text/css">
      
      #servimg {
      border: 1px solid #ddd; 
      border-radius: 4px; 
      padding: 5px;
      width: 150px; 
      }


      .img-rounded:hover {
          box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
      }
      .img-rounded{
      -webkit-transform: scale(1,1);
      -webkit-transition-timing-function: ease-out;
      -webkit-transition-duration: 250ms;
      -moz-transform: scale(1, 1);
      -moz-transition-timing-function: ease-out;
      -moz-transition-duration: 250ms;
      }

      .col-md-4{
        padding-top: 30px;
      }

      .col-md-4:not(hover) .service-heading{
         animation: mvup 200ms linear;
      }

      .col-md-4:hover .img-rounded{
      -webkit-transform: scale(1,1);
      -webkit-transition-timing-function: ease-out;
      -webkit-transition-duration: 250ms;
      -moz-transform: scale(1.5, 1.5);
      -moz-transition-timing-function: ease-out;
      -moz-transition-duration: 250ms;
      }
      .col-md-4:hover .service-heading{
        animation: mvdown 200ms linear;
        padding-top: 30px;
      }

   
 
      @keyframes mvdown {
          from{padding-top: 0px;}
          to{padding-top: 30px;}
      }
      @keyframes mvup {
          from{padding-top: 30px;}
          to{padding-top: 0px;}
      }
    </style>

  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"  > 
          <img src="<?php echo base_url('/assets/img/logos/title.png')?>" alt="CulturePedia"  /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li>
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control"  placeholder="Search" aria-describedby="sizing-addon3">
                </div>
              </form>
            </li>
            <li>
              <a href="#+">
              <button type="submit" class="btn btn-sm btn-info" >Cari</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#budaya">Budaya Kita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Daerah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php 
                if(isset($_SESSION['state'])){
                    if ($_SESSION['state']=='login') {
                      if($_SESSION['akses']==1){
                        echo base_url('/admin/');
                      }else{
                        echo base_url('/user/');
                      }
                      
                    }else{
                      echo base_url('/login');
                    }
                  }else{
                    echo base_url('/login');
                  }?>">
                  
                <?php
                  if(isset($_SESSION['state'])){
                    if($_SESSION['state']=='login'){
                      echo $_SESSION['username'];
                    }else{
                      echo "Kontributor";
                    }
                  }else{
                    echo "Kontributor";
                  }?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Tentang Kami</a>
            </li>
            <?php
              if(isset($_SESSION['state'])){
                if($_SESSION['state']=='login'){
                  echo '<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href='.base_url('/user/logout').'>Log Out</a>
                    </li>';
                }
              }?>
                        
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Know Culture</div>
          <div class="intro-heading text-uppercase">Save The Future!</div>

        </div>
      </div>
    </header>
    <section id="budaya">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Budaya Kita</h2>
            <h3 class="section-subheading text-muted">"Merawat tradisi, merespon modernisasi" </h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img id="servimg" href="http://www.google.com/" class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/bahasa.png')?>">
            </span>
            <h4 class="service-heading">Bahasa Daerah</h4>
            <p class="text-muted">Suatu bahasa yang dituturkan di suatu wilayah dalam sebuah negara kebangsaan pada suatu daerah kecil, negara bagian federal, provinsi, atau daerah yang lebih luas.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
             <img id="servimg" href="http://www.google.com/" class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/music.png')?>">
            </span>
            <h4 class="service-heading">Lagu Dan Musik Daerah</h4>
            <p class="text-muted">Lagu atau musik yang berasal dari suatu daerah tertentu dan menjadi populer dinyanyikan baik oleh rakyat daerah tersebut maupun rakyat lainnya. </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img id="servimg" href="http://www.google.com/" class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/tarian.png')?>">
            </span>
            <h4 class="service-heading">Tari Daerah</h4>
            <p class="text-muted">Warisan berharga yang dimiliki setiap daerah baik di Indonesia maupun negara lainnya. Tarian daerah merupakan hasil cipta karya seni dari ssuatu budaya. </p>
          </div>
          <br><br>
          <div class="row text-center">
            <div class="col-md-4" id="div-pakaian">
              <span class="fa-stack fa-4x">
                <img id="servimg" href="http://www.google.com/" class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/pakaian.png')?>">
              </span>
              <h4 id="title-pakaian" class="service-heading" >
                  <a href="" style="color: #1f1f1f;" >Pakaian Adat</a> 
              </h4>
              <p class="text-muted">Pakaian yang memiliki cirikhas tertentu yang dijadikan identitas dari sebuah daerah. Ciri tersebut dapat berupa warna, motif, bahan, dll. Di Indonesia hampir setiap wilayah tertentu memiliki pakaian adat yang menjadi identitas masyarakatnya. </p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <img  class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/rumah.png')?>">
                
              </span>
              <h4 class="service-heading">
                <a href="" style="color: #1f1f1f;" >Rumah Adat</a> 
              </h4>
              <p class="text-muted">Bangunan yang memiliki cirikhas khusus, digunakan untuk tempat hunian oleh suatu suku bangsa tertentu.Rumah adat merupakan salah satu representasi kebudayaan yang paling tinggi dalam sebuah komunitas suku/masyarakat.</p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <img id="servimg" href="http://www.google.com/" class="img-rounded" id="pakaian" height="100%" width="100%" src="<?php echo base_url('assets/img/icon/Adat.png')?>">
              </span>
              <h4 class="service-heading">Adat dan Istiadat</h4>
              <p class="text-muted">Gagasan kebudayaan yang terdiri dari nilai-nilai kebudayaan, norma, kebiasaan, kelembagaan, dan hukum adat yang lazim dilakukan di suatu daerah. Apabila adat ini tidak dilaksanakan akan terjadi kerancuan yang menimbulkan sanksi tak tertulis oleh masyarakat setempat terhadap pelaku yang dianggap menyimpang.</p>
            </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Daerah</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div id="loader"></div>

          <?php $i=0;?>
          <?php foreach ($record  as $row ):?>
          
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link"  data-toggle="modal" href="#portfolioModal<?php echo($i);?>">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-search fa-3x" aria-hidden = 'false'></i>
                  </div>
                </div>
               <?php if($i%2==0){?>
                 <img class="img-fluid" id="img-load" src="<?php echo base_url('assets/img/pakaian/'.$row['pakaian']);?>" alt="">
                <?php }else{ ?>
                  <img class="img-fluid" id="img-load" src="<?php echo base_url('assets/img/rumah/'.$row['rumah']);?>" alt="">
                <?php } ?>
              </a>
              <div class="portfolio-caption">
                <h4>
                  <?php echo $row['nama_provinsi'];?>
                </h4>
                <p class="text-muted"></p>
              </div>
            </div>
            <?php $i++;?>
          <?php endforeach;?>
        </div>
      </div>    
    </section>

    <!-- About -->
    
    <!-- Team -->
    <section class="bg-light" id="team" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Know culture and save the future.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/yusuf.jpg')?>" alt="">
              <h4>Yusuf Firmansyah W P</h4>
              <p class="text-muted">Manager Database & Leader</p>
              <!--<ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>-->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/dimas.jpg')?>" alt="">
              <h4>Dimas Adiyaksa T P</P></h4>
              <p class="text-muted">Backend Dev</p>
              <!--<ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>-->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/ryan.jpg')?>" alt="">
              <h4>M Ryan Laksmana Putra</h4>
              <p class="text-muted">Manager UI/UX</p>
              <!--<ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>-->
            </div>
          </div>
            <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/brian.jpg')?>" alt="">
                <h4>Brian Adam Sembiring</h4>
                <p class="text-muted">Konten Suplier</p>
                <!--<ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>-->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/heru.jpg')?>" alt="">
                <h4>Heru Setiawan</h4>
                <p class="text-muted">Frontend Dev</p>
                <!--<ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>-->
              </div>
            </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/Gojek.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/tokopedia.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/themeforest.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/creative-market.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/grab.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/pesona-indonesia.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/themeforest.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/creative-market.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/envato.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/designmodo.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/themeforest.jpg')?>" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/logos/creative-market.jpg')?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="copyright">Copyright &copy; CulturePedia2018</span>
          </div>
          
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <?php $i=0;?>
      <?php foreach ($record  as $row ):?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo($i);?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container" style="padding-left: 0px;">
            <div class="row">
              <div class="col-lg-12 mx-0" style="padding-left: 0px; margin: 0px;">
                <div class="modal-body">
                  <!-- Project Details Go Here -->

                  <h2 class="text-uppercase" id="judul" >
                    <?php echo $row['nama_provinsi'];?>
                    </h2>
                <div class="scrollbar square scrollbar-lady-lips thin">
                  <div class="force-overflow">
                      <section id="pakaian-adat" style="padding: 0px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-left">
                              <h3 class="section-heading text-uppercase" style="margin-bottom: 0px;">Pakaian Adat</h3>
                            </div>
                          </div>
                          <div class="row text-left">
                            <div class="col-md-4" style="padding-top: 0px;">
                              <img width="100%" src="<?php echo base_url('assets/img/pakaian/'.$row['pakaian'])?>">
                            </div>
                            <div class="col-md-8" style="padding-top: 0px; width: 100%;height: auto;" >
                              <h4 class="service-heading" style="margin: 0px;" ></h4>
                              <p class="text-muted" style="vertical-align: text-top; text-align: justify; " ><?php echo $row['pakaian_adat'];?></p>
                            </div>
                          </div>
                        </div>
                      </section>
                      <br><br>
                      <section id="rumah-adat" style="padding: 0px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-left">
                              <h3 class="section-heading text-uppercase" style="margin-bottom: 0px;">Rumah Adat</h3>
                            </div>
                          </div>
                          <div class="row text-left">
                            <div class="col-md-4" style="padding-top: 0px;">
                              <img width="100%" src="<?php echo base_url('assets/img/rumah/'.$row['rumah'])?>">
                            </div>
                            <div class="col-md-8" style="padding-top: 0px; width: 100%;height: auto;" >
                              <h4 class="service-heading" style="margin: 0px;" ></h4>
                              <p class="text-muted" style="vertical-align: text-top;  text-align: justify;" ><?php echo $row['rumah_adat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                      <br><br>
                      <section id="rumah-adat" style="padding: 0px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-left">
                              <h3 class="section-heading text-uppercase" style="margin-bottom: 0px;">Adat Istiadat</h3>
                            </div>
                          </div>
                          <div class="row text-left">
                            
                            <div class="col-md-12" style="padding-top: 0px; width: 100%;height: auto;" >
                              <h4 class="service-heading" style="margin: 0px;" ></h4>
                              <p class="text-muted" style="vertical-align: text-top;text-align: justify;" ><?php echo $row['adat_istiadat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                  </div>
                  </div>
                  
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>

   
     <script src="<?php echo base_url('assets/jQuery/jquery.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

     <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>
     <script src="<?php echo base_url('assets/js/agency.min.js')?>"></script>


    <script type="text/javascript" src="<?php echo base_url('assets/fontawesome/js/all.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slickforms.js')?>"></script>
    
  </body>

</html>