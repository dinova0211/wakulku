<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
<<<<<<< HEAD
<link href="<?php echo base_url();?>template/assets/img/Maskot_Wakula.png" rel="icon">
  <link href="<?php echo base_url();?>template/assets/img/Maskot_Wakula.png" rel="Maskot_Wakula">
=======
  <link href="<?php echo base_url();?>template/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

>>>>>>> master
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>template/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="<?php echo site_url('home/index') ?>">Wakulku</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo site_url('home/index') ?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Kategori</a>
            <ul>
              <li><a href="<?php echo site_url('kuliner/sejarah') ?>">Sejarah</a></li>
<<<<<<< HEAD
            
=======
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
>>>>>>> master
              <li><a href="<?php echo site_url('kuliner/resep_kuliner') ?>">Resep Kuliner</a></li>
              <li><a href="<?php echo site_url('kuliner/info_festival') ?>">Informasi & Festival</a></li>
              <li><a href="<?php echo site_url('kuliner/data_penjual') ?>">Data Penjual</a></li>
              <li><a href="<?php echo site_url('kuliner/cerita_kuliner') ?>">Cerita Kuliner</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?php echo $title ?></li>
        </ol>
        <h2><?php echo $title ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <!-- <div class="owl-carousel portfolio-details-carousel">
            <img src="template/assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="template/assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="template/assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div> -->

<<<<<<< HEAD
         
=======
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
            
              <li><strong>Name</strong>: </li>
              <li><strong>Category</strong>: </li>
              <li><strong>Project date</strong>:</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              
            </ul>
          </div>
>>>>>>> master

        </div>

        <div class="portfolio-description">
          <!-- <h2 class="center">This is an example of portfolio detail</h2> -->
          
          <?php foreach($konten as $kntn):?>
<<<<<<< HEAD

            <a style="text-decoration: none; color:black;" href="<?php echo base_url('kuliner/detail_konten')?>"><h1 style="text-align:center"><?php echo $kntn['judul'];?></h1></a>

            <div class="fakeimg" style="height:200px;">
                    <img src="<?php echo base_url(); ?>template/img/thumb/<?php echo $kntn['foto'] ?>" width="50%" height="180">
            </div>                      
            <span><?php echo $kntn['tanggal'].' | '.$kntn['nama'];?></span>
            <p><?php echo $kntn['isi_konten'] ?></p>
                
           <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <?php endforeach; ?>    
                </div>


                
=======
            <h3><?php echo $kntn['judul'];?></h3>
            <li><strong>Category</strong> : <?php echo $kntn['nama']; ?> </li>
            <li><strong>Project date</strong> : <?php echo $kntn['tanggal'];?></li>
            <div class="fakeimg" style="height:200px;">
                    <img src="<?php echo base_url(); ?>template/img/thumb/<?php echo $kntn['foto'] ?>" width="50%" height="180">
                   
          
                </div>
                
                
            <h2></h2>
            <?php endforeach; ?>        
>>>>>>> master
        
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
<<<<<<< HEAD
            <h4>Join With Me</h4>
           <form action="" method="post">
              
=======
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
>>>>>>> master
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

<<<<<<< HEAD
          

         

          <div class="col-lg-3 col-md-6 footer-links">
            
=======
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
>>>>>>> master
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
<<<<<<< HEAD
           <p>Temukan Kami di link yang tertera dibawah ini</p>>
=======
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
>>>>>>> master
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
<<<<<<< HEAD
        &copy; Copyright <strong><span>Dinova Widytianto</span></strong>. All Rights Reserved
=======
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
>>>>>>> master
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>template/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>template/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>template/assets/js/main.js"></script>

</body>

</html>