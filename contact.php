<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>William - Contact</title>
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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <?php

           $requesttexte = "SELECT * FROM contacte WHERE id='1' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $reste =$data['lien'];
                $t= "<h2>".$texte."</h2> <p>".$reste."</p>";

               }
               echo $t;
             }
             ?>
        </div>

        

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              
            <?php

           $requesttexte = "SELECT * FROM contacte WHERE id='2' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $reste =$data['lien'];
                $t= "<div class=\"email\">
                <i class=\"icofont-instagram\"></i>
                <h4>".$texte."</h4>
                <a href=\"https://www.instagram.com/_william.lim/\">&nbsp&nbsp&nbspWilliam.lim</a></div>";
               }  
             }

             $requesttexte = "SELECT * FROM contacte WHERE id='3' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $reste =$data['lien'];
                $t.= "<div class=\"email\">
                <i class=\"icofont-linkedin\"></i>
                <h4>".$texte."</h4>
                <a href=\"https://www.linkedin.com/in/william-lim-792ab9195/\">&nbsp&nbsp&nbspWilliam Lim</a></div>";
               }  
             }

             $requesttexte = "SELECT * FROM contacte WHERE id='4' ";
            if($result = $link ->query($requesttexte)){
               while($data = $result->fetch_assoc()){
                $texte =$data['nom'];
                $reste =$data['lien'];
                $t.= "<div class=\"email\">
                <i class=\"icofont-envelope\"></i>
                <h4>".$texte."</h4>
                <p>".$reste."</p></div>";
               }  
               echo $t;
             }
             ?>    

            </div>

          </div>

         <div class="col-lg-8 mt-5 mt-lg-0">

            <form  method="post" role="form" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <?php
if(isset($_POST['mailform']))
{
  if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']))
  {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"Qitoh - Portfolio"<william.lim77360@gmail.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
      <body>
        <div align="center">
          <br />
          <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
          <br />
          '.nl2br($_POST['message']).'
          <br />
        </div>
      </body>
    </html>
    ';

    mail("william.lim77360@gmail.com", "Mon site", $message, $header);
    $msg="Votre message a bien été envoyé !";
  }
  else
  {
    $msg="Tous les champs doivent être complétés !";
  }
}
?>
    <?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>
              </div>
              <div class="text-center php-email-form"><button name="mailform" type="submit">Envoyer</button></div>
            </form>

          </div>

        </div>

      </div>
      </section>
  
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