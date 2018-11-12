
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Culture-CulturePedia</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('/assets/css/montserrat.css');?>" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('/assets/css/Kaushan.css');?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('/assets/css/droid.css');?>' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url('/assets/css/roboto.css');?>' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/img/logos/cptitle.png')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/style.css')?>" media="all" />
    <link href='<?php echo base_url('/assets/css/amaranth.css');?>' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/assets/css/agency.min.css')?>" rel="stylesheet">

    <style type="text/css">
      
      #servimg {
      border: 1px solid #ddd; /* Gray border */
      border-radius: 4px;  /* Rounded border */
      padding: 5px; /* Some padding */
      width: 150px; /* Set a small width */
      }

      /* Add a hover effect (blue shadow) */
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" style="background-color: #212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"  > 
          <img src="<?php echo base_url('/assets/img/logos/title.png')?>" alt="CulturePedia"  /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Konten</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Konten</h2>
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
                <p class="text-muted">
                  <a href="" style="color: #000;" >Edit</a>
                  <a href="" style="color: #000;">Hapus</a>
                </p>
              </div>
            </div>
            <?php $i++;?>
          <?php endforeach;?>
        </div>
      </div>    
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; CulturePedia2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
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
            </ul>
          </div>
          
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <?php $i=0;?>
      <?php foreach ($record  as $row ):?>
    <form>
      
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
                                    <textarea ows="15" cols="80"  ><?php echo $row['pakaian_adat'];?></textarea>
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
                                    <textarea rows="15" cols="80"  ><?php echo $row['rumah_adat'];?></textarea>
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
                                   
                                    <textarea ows="15" cols="80"  ><?php echo $row['adat_istiadat'];?></textarea>
                                  </div>
                                </div>
                              </div>
                            </section>
                        </div>
                        </div>
                        
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $i++;?>
          <?php endforeach;?>
    </form>
   
     <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
     <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

     <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

     <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js')?>"></script>
     <script src="<?php echo base_url('assets/js/contact_me.js')?>"></script>

     <script src="<?php echo base_url('assets/js/agency.min.js')?>"></script>

     <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.6.4.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/ddsmoothmenu.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.jcarousel.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/carousel.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexslider-min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.masonry.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slickforms.js')?>"></script>
  </body>

</html>