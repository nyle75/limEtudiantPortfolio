<!doctype html> 

<html> 

<head> 
     <title>Photos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   <link rel="stylesheet" href="assets/css/style.css"/>

 

<title>Liste</title> 

</head> 

<body> 
    <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="page-admin.php">Admin </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="page-admin.php">Images</a></li>
          <li><a href="video.php">Videos</a></li>
          </ul>

      </nav><!-- .nav-menu -->
<div class="header-social-links">
     <?php
session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

  echo '<a href="logout.php"><i class="icofont-logout"></i></a>';
}
else {
  header ('location: index.php');
}
?>
</div>
  </header>

<section>


    <table class="table table-hover">
         <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Lien</th>
                <th>Video</th>

                <th>Modifier/Supprimer</th>
                <th><a href="ajouter-video.php" class="btn btn-primary" style="float:right;">Rajouter une video</a></th>
            </tr>
         </thead>



     <?php
include 'dbConfig.php';
     include 'fonction.php';
    $customerObj = new Customers();
    



     $sql ="SELECT * FROM video";
     $query = $link->query($sql);



  	if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
        echo'$id';
      $deleteId = $_GET['deleteId'];
      $customerObj->SupprimerV($deleteId);}



     while($r = $query->fetch_assoc()){
     ?>
        <tr>
          <td><?php echo $r['id'] ?></td>
          <td><?php echo $r['nom'] ?></td>
          <td><?php echo $r['lien'] ?></td>
           <td><div style="padding:100%;position:relative;"><iframe src="<?php echo $r['lien'] ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow=autoplay; fullscreen; picture-in-picture allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
              </div></td>
 <td></td>
          <td>
            <a href="editer-video.php?editId=<?php echo $r['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp&nbsp
            <a href="video.php?deleteId=<?php echo $r['id'] ?>"  style="color:red" onclick="confirm('Voulez-vous vraiment le supprimer ?')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php

     }

?>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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