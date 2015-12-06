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
				
				//l'agriculteur
				$id_agriculteur = $_POST['id_agriculteur'];
				$nom_agri = $_POST['nom_agri'];
				$prenom_agri = $_POST['prenom_agri'];
				$n_tel_agri = $_POST['n_tel_agri'];
				$adr_agri = $_POST['adr_agri'];
				
		
				
				//requete sql pour inserer toutes les information dans la table agriculeur
				$sqlAgri = "INSERT INTO agriculteur (id_agriculteur, nom_agri, prenom_agri, n_tel_agri, adr_agri) VALUES ('$id_agriculteur', '$nom_agri', '$prenom_agri', '$n_tel_agri', '$adr_agri' )";
				
				if ($conn->query($sqlAgri) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlAgri . "<br>" . $conn->error;
				}
				
				$conn->close();

			?>
		</div>

	</body>
</html>