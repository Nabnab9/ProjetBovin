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
				
				
				
				
				
				
				
				//requete sql pour inserer toutes les information dans la table agriculeur
				
				
				
				
				//requete sql pour inserer toutes les information dans la table abattoir
				
				
				//Requete sql pour insérer toutes les informations du bovin
				 $sqlBovin =" INSERT INTO bovin (code_boucle)
				 VALUES ('$code_boucle')";
				 
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