
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter</title>
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css"/>
   <script src="Z-verification-nom-photo.js"></script>
</head>
<body>
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="page-admin.php">William - Admin </a></h1>
    

     <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="page-admin.php">Images</a></li>
          <li><a href="video.php">Videos</a></li>
          </ul>
        </nav>
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
<section><br><br>
<div class="container">
  <form enctype="multipart/form-data" method="POST">
    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" name="fname" id="pseudo" placeholder="Enter Name" Required>
    </div>
    <div class="form-group">
      <label for="email">Lien:</label>
      <input type="file" name="upload_file"> <br />
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Valider">
    <div class="feedBack"></div>


    <?php
require_once 'dbConfig.php';

if (isset($_POST['submit'])) 
{
    $maxSize = 50000000;
    $validtext = array('.jpg', '.jpeg', '.gif', '.png');

    if ($_FILES['upload_file']['error'] > 0) 
    {
        echo "Une erreur est survenue lors du transfert";
        die;
    }

    $fileSize = $_FILES['upload_file']['size'];

    if ($fileSize > $maxSize) 
    {
        echo "le fichier est trop gros";
        die;
    }

    $fileName = $_FILES['upload_file']['name'];

    $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));

    if (!in_array($fileExt, $validtext)) {
        echo "le fichier n'est pas une image !";
        die;
    }

    $tmpName = $_FILES['upload_file']['tmp_name'];
    $Nom = $_POST["fname"];
    $fileName = "assets/img/portfolio/" . $Nom . $fileExt;
    $resultat = move_uploaded_file($tmpName, $fileName);

    if ($resultat) 
    {
        echo "Upload Réussi ! ";
    }
    $insert = $link->query("INSERT into portfolio (nom,lien) VALUES ('$Nom','$fileName')"); 
           
}

?>

  </form>
</div>
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
