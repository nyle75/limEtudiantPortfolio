<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>William Lim Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
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

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <?php
            $requeteSearch1 = "SELECT * FROM menu WHERE id='1'";
            if($result = $link ->query($requeteSearch1)){
             $index="<div class=\"container d-flex flex-column align-items-center\" data-aos=\"zoom-in\" data-aos-delay=\"100\">";
             while($data = $result->fetch_assoc()){
              $nom =$data['texte'];
              $index.= "<h1>".$nom."</h1>";
            }
            }
            $requeteSearch2 = "SELECT * FROM menu WHERE id='2'";
            if($result = $link ->query($requeteSearch2)){
             while($data = $result->fetch_assoc()){
              $nom2 =$data['texte'];
              $index.="<h2>".$nom2."</h2>";
            }
            }

            $requeteSearch3 = "SELECT * FROM menu WHERE id='3'";
            if($result = $link ->query($requeteSearch3)){
              
             while($data = $result->fetch_assoc()){
              $nom3 =$data['texte'];
              $index.= "<a href=\"about.php\" class=\"btn-about\">".$nom3."</a><h2>";

             }
           }
             $index.="</div>";
             echo $index;

             ?>
  </section><!-- End Hero -->

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