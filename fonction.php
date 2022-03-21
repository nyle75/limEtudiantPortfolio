<?php



	class Customers
	{
		
		public  $link;

		public function EnvoyerVersBase($post)
		{
			 include 'dbConfig.php';
			$nom = $link->real_escape_string($_POST['nom']);
			$query="INSERT INTO liste(nom,lien) VALUES('$nom','$lien')";
			$sql = $link->query($query);
			if ($sql==true) {
				header("Location:page-admin.php?msg1=insert");
			}else{
				echo "Echec";
			}
		}

		public function RecupDonnee($id)
		{
			 include 'dbConfig.php';
			$query = "SELECT * FROM portfolio WHERE id = '$id'";
			$result = $link->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Introuvable";
			}
		}

		public function Mofifier($postData)
		{
			 include 'dbConfig.php';
			$nom = $link->real_escape_string($_POST['unom']);
			$lien = $link->real_escape_string($_POST['uprenom']);
			$id = $link->real_escape_string($_POST['id']);
			if (!empty($id) && !empty($postData)) {
				$query = "UPDATE portfolio SET nom = '$nom', lien = '$lien' WHERE id = '$id'";
				$sql = $link->query($query);
				if ($sql==true) {
					header("Location:page-admin.php?msg2=update");
				}else{
					echo "Echec";
				}
			}
			
		}

	public function Supprimer($id)
		{
			 include 'dbConfig.php';
			$query = "DELETE FROM portfolio WHERE id = '$id'";
			$sql = $link->query($query);
			if ($sql==true) {

				echo " <br> Suppression réussi";
			
			}else{
				echo "Echec de la suppression";
			}
		}





		public function EnvoyerVersBaseV($post)
		{
			include 'dbConfig.php';
			$nom = $link->real_escape_string($_POST['nom']);
			$query="INSERT INTO video(lien,nom) VALUES('$lien','$nom')";
			$sql = $link->query($query);
			if ($sql==true) {
				header("Location:Z-video.php?msg1=insert");
			}else{
				echo "Echec";
			}
		}

		public function RecupDonneeV($id)
		{
			include 'dbConfig.php';
			$query = "SELECT * FROM video WHERE id = '$id'";
			$result = $link->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Introuvable";
			}
		}

		public function MofifierV($postData)
		{
			include 'dbConfig.php';
			$nom = $link->real_escape_string($_POST['unom']);
			$lien = $link->real_escape_string($_POST['uprenom']);
			$id = $link->real_escape_string($_POST['id']);
			if (!empty($id) && !empty($postData)) {
				$query = "UPDATE video SET  lien = '$lien', nom = '$nom' WHERE id = '$id'";
				$sql = $link->query($query);
				if ($sql==true) {
					header("Location:Z-video.php?msg2=update");
				}else{
					echo "Echec";
				}
			}
			
		}
		public function SupprimerV($id)
		{
			include 'dbConfig.php';
			$query = "DELETE FROM video WHERE id = '$id'";
			$sql = $link->query($query);
			if ($sql==true) {
				echo " <br> Suppression réussi";
			}else{
				echo "Echec de la suppression";
			}
		}
	}
	

	

?>

