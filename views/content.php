
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
              <button type="submit" class="btn btn-sm">Submit</button>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Contents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
      <h2 class="text-uppercase" id="judul" >
          <?php echo $row['nama_provinsi'];?>
      </h2>

                  <div id="sidebar">
                    <div id="logo"><a href="#page-top"  ><img src="<?php echo base_url('/assets/img/logos/logo-title.png')?>" alt="Caprice"  /></a></div>
                    <div id="menu" class="menu-v">
                    <ul class="smooth-scroll list-unstyled">
                      <li><a href="" class="nav-link js-scroll-trigger" class="nav-link js-scroll-trigger">Pakaian Adat</a></li>
                      <li><a href="" class="nav-link js-scroll-trigger">Rumah Adat</a></li>
                      <li><a href="blog.html">Tarian Adat</a></li>
                      <li><a href="buttons-boxes-images.html">Lagu Daerah</a></li>
                      <li><a href="contact.html">Adat Istiadat</a></li>
                      <li><a href="contact.html">Bahasa Daerah</a></li>
                    </ul>
                  </div>
                </div>
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
                              <p class="text-muted" style="vertical-align: text-top;" ><?php echo $row['pakaian_adat'];?><?php echo $row['pakaian_adat'];?><?php echo $row['pakaian_adat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section id="rumah-adat" style="padding: 0px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-left">
                              <h3 class="section-heading text-uppercase" style="margin-bottom: 0px;">Pakaian Adat</h3>
                            </div>
                          </div>
                          <div class="row text-left">
                            <div class="col-md-4" style="padding-top: 0px;">
                              <img width="100%" src="<?php echo base_url('assets/img/rumah/'.$row['rumah'])?>">
                            </div>
                            <div class="col-md-8" style="padding-top: 0px; width: 100%;height: auto;" >
                              <h4 class="service-heading" style="margin: 0px;" ></h4>
                              <p class="text-muted" style="vertical-align: text-top;" ><?php echo $row['pakaian_adat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                  </div>
                  </div>
    <!-- Team -->
    <section class="bg-light" id="team">
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
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/dimas.jpg')?>" alt="">
              <h4>Dimas Adiyaksa T P</P></h4>
              <p class="text-muted">Back And End Dev</p>
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
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/ryan.jpg')?>" alt="">
              <h4>M Ryan Laksmana Putra</h4>
              <p class="text-muted">Manager UI/UX</p>
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
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/brian.jpg')?>" alt="">
                <h4>Brian Adam Sembiring</h4>
                <p class="text-muted">Konten Suplier</p>
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
            <div class="col-sm-4">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/heru.jpg')?>" alt="">
                <h4>Heru Setiawan</h4>
                <p class="text-muted">Front End and Dev</p>
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
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
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

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="<?php echo base_url('/index.php/Beranda/send_mail');?>" id="contactForm" name="sentMessage" novalidate="novalidate" method = 'POST'>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
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
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use CulturePedia</a>
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

                  <div id="sidebar">
                    <div id="logo"><a href="#page-top"  ><img src="<?php echo base_url('/assets/img/logos/logo-title.png')?>" alt="Caprice"  /></a></div>
                    <div id="menu" class="menu-v">
                    <ul class="smooth-scroll list-unstyled">
                      <li><a href="" class="nav-link js-scroll-trigger" class="nav-link js-scroll-trigger">Pakaian Adat</a></li>
                      <li><a href="" class="nav-link js-scroll-trigger">Rumah Adat</a></li>
                      <li><a href="blog.html">Tarian Adat</a></li>
                      <li><a href="buttons-boxes-images.html">Lagu Daerah</a></li>
                      <li><a href="contact.html">Adat Istiadat</a></li>
                      <li><a href="contact.html">Bahasa Daerah</a></li>
                    </ul>
                  </div>
                </div>
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
                              <p class="text-muted" style="vertical-align: text-top;" ><?php echo $row['pakaian_adat'];?><?php echo $row['pakaian_adat'];?><?php echo $row['pakaian_adat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section id="rumah-adat" style="padding: 0px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 text-left">
                              <h3 class="section-heading text-uppercase" style="margin-bottom: 0px;">Pakaian Adat</h3>
                            </div>
                          </div>
                          <div class="row text-left">
                            <div class="col-md-4" style="padding-top: 0px;">
                              <img width="100%" src="<?php echo base_url('assets/img/rumah/'.$row['rumah'])?>">
                            </div>
                            <div class="col-md-8" style="padding-top: 0px; width: 100%;height: auto;" >
                              <h4 class="service-heading" style="margin: 0px;" ></h4>
                              <p class="text-muted" style="vertical-align: text-top;" ><?php echo $row['pakaian_adat'];?> </p>
                            </div>
                          </div>
                        </div>
                      </section>
                  </div>
                  </div>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>

   
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