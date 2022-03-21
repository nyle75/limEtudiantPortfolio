
<?php

        
        $link = new mysqli("localhost", "root", "", "william-lim");
        if (!$link->set_charset("utf8")) {
          printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $link->error);
          exit();
        }
        else {
          printf("", $link->character_set_name());
        }

        try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=william-lim','root',''); //connexion avec Wamp
		//$pdo = new PDO ($dsn, $dbName,$user,$pass);
		$pdo->query ("SET NAME utf8"); //permet de gérer les accents francais
	}

	catch(Exception $e)
	{
		die('Problème:'.$e->getMessage());
	}
        ?>

    