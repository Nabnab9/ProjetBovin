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
				$nom_bovin= $_POST['nom_bovin'];
				$date_naissance= $_POST['date_naissance'];
				$race= $_POST['race'];
				$sexe= $_POST['sexe'];
				
				//on récupère les infos à partie du code scané
				$res = array();
				$res = explode(" ", $code_boucle);
				$pays = $res[0];
				$departement = $res[1];
				$id_agriculteur_bovin = $res[2];
				$num_travail = $res[3];
				
				//Requete sql pour insérer toutes les informations du bovin
				 $sqlBovin =" INSERT INTO bovin (code_boucle, nom_bovin, pays, departement, num_travail, date_naissance, date_mort, race, sexe, id_agriculteur_bovin, nom_abat_bovin)
				 VALUES ('$code_boucle','$nom_bovin','$pays','$departement','$num_travail','$date_naissance','$date_mort','$race','$sexe','$id_agriculteur_bovin','$nom_abat_bovin')";
				 
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