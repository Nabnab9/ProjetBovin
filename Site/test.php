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
				$pays= $_POST['pays'];
				$departement= $_POST['departement'];
				$exploitation= $_POST['exploitation'];
				$num_travail= $_POST['num_travail'];
				$date_naissance= $_POST['date_naissance'];
				$date_mort= $_POST['date_mort'];
				$race= $_POST['race'];
				$sexe= $_POST['sexe'];
				$id_agriculteur_bovin = $_POST['id_agriculteur_bovin'];
				$nom_abat_bovin = $_POST['nom_abat_bovin'];
				echo "<h1>code boucle : $code_boucle id_agriculteur : $id_agriculteur </h1>";
				
				$sqlAgri = "INSERT INTO agriculteur (id_agriculteur) VALUES ('$id_agriculteur')";
				
				if ($conn->query($sqlAgri) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlAgri . "<br>" . $conn->error;
				}
				$sqlBovin = "INSERT INTO bovin (code_boucle,id_agriculteur_bovin) VALUES ('$code_boucle','$id_agriculteur_bovin')";
				 
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