<?php
require_once 'dbConfig.php';

$requesttexte = "SELECT * FROM connexion WHERE id='1'";
if($result = $link ->query($requesttexte)){
while($data = $result->fetch_assoc()){
$login_valide = $data['login'];
$pwd_valide = $data['pdw'];
}

if (isset($_POST['login']) && isset($_POST['pwd'])) {

	
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
		
		session_start ();
		
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];
		
		header ('Location: page-admin.php');
	}
	else {
		
		echo '<body onLoad="alert(\'Membre non reconnu\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
}
?>
