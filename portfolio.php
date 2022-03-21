<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v2.1.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="index.php">William Lim Portfolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       <?php

        
        require_once 'dbConfig.php';
        $requeteSearch = "SELECT * FROM lien";
        if($result = $link ->query($requeteSearch)){
        
      ?>
      <nav class="nav-menu d-none d-lg-block">
        <?php
             $menuNavigation="<ul class=\"\">";
             while($data = $result->fetch_assoc()){
              $nom =$data['nom'];
              $lien =$data['lien'];
              $menuNavigation.= "<li class=\"nav-item\">
              <a class=\"nav-link js-scroll-trigger\" href=\"".$lien."\">".$nom."</a>
              </li>";

             }
             $menuNavigation.="</ul>";
             echo $menuNavigation;
            }
             ?>

      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://www.instagram.com/_william.lim/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/william-lim-792ab9195/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        <a href="Connexion.php" class="instagram"><i class="icofont-key"></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <?php
          $requesttexte = "SELECT * FROM portfoliotexte WHERE id='1' ";
          if($result = $link ->query($requesttexte)){
             $menuTexteP="<div class=\"section-title\">";
             while($data = $result->fetch_assoc()){
              $nom =$data['texte'];
              $menuTexteP.= "<h2>Portfolio</h2>
              <p>".$nom."</p>";

             }
             $menuTexteP.="</div>";
             echo $menuTexteP;
           }
             ?>
       


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        	   <?php
           $requestvideo = "SELECT * FROM video ";
          if($result = $link ->query($requestvideo)){
             $portfoliov="<div>";
             while($data = $result->fetch_assoc()){
              $lienv =$data['lien'];
              $portfoliov.= "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div style=\"padding:56.25% 0 0 0;position:relative;\"><iframe src=\"".$lienv."\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\" frameborder=\"0\" allow=\autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe></div><script src=\"https://player.vimeo.com/api/player.js\"></script>
              </div>";
             }
             $portfoliov.="</div>";
             echo $portfoliov;
           }
             ?>
           <?php
           $requestphoto = "SELECT * FROM portfolio ORDER BY id ";
          if($result = $link ->query($requestphoto)){
             $portfolio="<div>";
             while($data = $result->fetch_assoc()){
              $nomp =$data['nom'];
              $lienp =$data['lien'];
              $portfolio.= "<div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"".$lienp."\" class=\"img-fluid\">
              <div class=\"portfolio-info\">
                <h4>".$nomp."</h4>
                <div class=\"portfolio-links\">
                  <a href=\"".$lienp."\" data-gall=\"portfolioGallery\" class=\"venobox\" ><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.php\" data-gall=\"portfolioDetailsGallery\" data-vbtype=\"iframe\" class=\"venobox\" <i class=\"bx bx-link\"></i></a>
                </div>
              </div>
              </div>
            </div>";
             }
             $portfolio.="</div>";
             echo $portfolio;
           }
             ?>
          

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>