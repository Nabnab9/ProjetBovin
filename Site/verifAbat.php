<!DOCTYPE html >

<html >
	<head>
	</head>
	
	<body >
		<div>

			<?php

				if ($_SERVER["REQUEST_METHOD"] != "POST"){
				return -1;
				}
				 
				include("config_server.php");
				
				//On récupère toutes les informations envoyées par le formulaire
				//le bovin
				$code_boucle= $_POST['code_boucle'];
				
				$date_mort= $_POST['date_mort'];
				
				//l'abattoir
				$nom_abat = $_POST['nom_abat'];
				$n_tel_abat = $_POST['n_tel_abat'];
				$adr_abat = $_POST['adr_abat'];
				
				//requete sql pour inserer toutes les information dans la table abattoir
				$requete = "SELECT COUNT(*) as nombre FROM `abattoir` WHERE `nom_abat`='$nom_abat'";
				$reponse = $conn->query($requete);
				$row = $reponse->fetch_array(MYSQLI_ASSOC);
				
				
				if ($row['nombre']>0) {
				
				}
				else
				{
					$sqlAbat = "INSERT INTO abattoir (nom_abat, n_tel_abat, adr_abat) VALUES ('$nom_abat','$n_tel_abat', '$adr_abat' )";
				
				if ($conn->query($sqlAbat) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlAbat . "<br>" . $conn->error;
				}
					
				}
				
			
				
				
				
				
				//Requete sql pour insérer toutes les informations du bovin
				 $sqlBovin =" UPDATE bovin SET date_mort='$date_mort',nom_abat_bovin='$nom_abat' WHERE code_boucle='$code_boucle'";
				 
				 //Vérifie que la requète s'est bien effectuée
				 if ($conn->query($sqlBovin) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlBovin . "<br>" . $conn->error;
				}
				
				$conn->close();

			?>
		</div>

	</body>
</html>