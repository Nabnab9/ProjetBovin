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
				$id_agriculteur_bovin = $_POST['id_agriculteur_bovin'];
				$id_agriculteur = $_POST['id_agriculteur'];
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