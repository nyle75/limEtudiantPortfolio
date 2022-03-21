<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>A propos de moi</title>
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

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <?php
          $requesttexte = "SELECT * FROM about WHERE id='1' ";
          if($result = $link ->query($requesttexte)){
             $menuTexteP="<div class=\"container\" data-aos=\"fade-up\">";
             while($data = $result->fetch_assoc()){
              $nom =$data['texte'];
              $menuTexteP.= "<div class=\"section-title\">
              <h2>".$nom."</h2>";

             }
           }
             ?>
              <?php
          $requesttexte = "SELECT * FROM about WHERE id='2' ";
          if($result = $link ->query($requesttexte)){
             while($data = $result->fetch_assoc()){
              $nom =$data['texte'];
              $menuTexteP.= "<p>".$nom."</p>";

             }
             $menuTexteP.="</div>";
              echo $menuTexteP;

           }
             ?>
   
         <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/moi.jpg" class="img-fluid" alt="">
          </div>
  
             
         <?php 
         
            $requesttexte = "SELECT * FROM about WHERE id='3' ";
            if($result = $link ->query($requesttexte)){
               $t2="<div class=\"col-lg-8 pt-4 pt-lg-0 content\">";
               while($data = $result->fetch_assoc()){
                $texte =$data['texte'];
                $t2.= "<h3>".$texte."</h3>";

               }
               
             }
               ?>
               <?php
            $requesttexte = "SELECT * FROM about WHERE id='4' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['texte'];
                $t2.= "<p class=\"font-italic\">".$texte."</p>";

               }
               echo $t2;
             }
             ?>
             
             <?php
          $requesttexte = "SELECT * FROM about2 ";
          if($result = $link ->query($requesttexte)){
             $liste="<div class=\"row\"><div class=\"col-lg-6\">
              <ul>";
             while($data = $result->fetch_assoc()){
              $nom =$data['nom'];
              $texte =$data['texte'];
              $liste.= "                  <li><i class=\"icofont-rounded-right\"></i> <strong>".$nom."</strong>".$texte."</li>";

             }
             $liste.="</ul></div>
            </div>";
             echo $liste;
           }

             ?>
<?php
          $requesttexte = "SELECT * FROM about WHERE id='6' ";
          if($result = $link ->query($requesttexte)){
             while($data = $result->fetch_assoc()){
              $nom =$data['texte'];
              $menuTextePa= "<p>".$nom."</p>";

             }
              echo $menuTextePa;

           }
             ?>
           
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
 <?php
            $requesttexte = "SELECT * FROM about WHERE id='13' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['texte'];
                $t3= "<div class=\"section-title\"><h2>".$texte."</h2>";

               }
             }
              $requesttexte = "SELECT * FROM about WHERE id='5' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['texte'];
                $t3.= "<p>".$texte."</p></div>";

               }
               echo $t3;
             }
             ?>

<?php
   $requesttexte = "SELECT * FROM skill WHERE test ='1'  ";
            if($result = $link ->query($requesttexte)){
              $t4= "<div class=\"row skills-content\">
                <div class=\"col-lg-6\">";
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $pour =$data['pourcentage'];
                $t4.= " <div class=\"progress\">
              <span class=\"skill\">".$texte." <i class=\"val\">".$pour."%</i></span>
              <div class=\"progress-bar-wrap\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$pour."\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>";

               }
               $t4.="</div>";
               echo $t4;
             }

              $requesttexte = "SELECT * FROM skill WHERE test ='2'  ";
            if($result = $link ->query($requesttexte)){
              $t42= "<div class=\"col-lg-6\">";
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $pour =$data['pourcentage'];
                $t42.= " <div class=\"progress\">
              <span class=\"skill\">".$texte." <i class=\"val\">".$pour."%</i></span>
              <div class=\"progress-bar-wrap\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$pour."\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>";

               }
               $t42.="</div></div>";
               echo $t42;
             }
             ?>
        

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

      
      </div>
    </section><!-- End Facts Section -->

    
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