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
				//$pays= $_POST['pays'];
				//$departement= $_POST['departement'];
				//$exploitation= $_POST['exploitation'];
				//$num_travail= $_POST['num_travail'];
				$date_naissance= $_POST['date_naissance'];
				//$date_mort= $_POST['date_mort'];
				$race= $_POST['race'];
				$sexe= $_POST['sexe'];
				$id_agriculteur_bovin = $_POST['id_agriculteur_bovin'];
				//$nom_abat_bovin = $_POST['nom_abat_bovin'];
				
				//l'agriculteur
				$id_agriculteur = $_POST['id_agriculteur'];
				$nom_agri = $_POST['nom_agri'];
				$prenom_agri = $_POST['prenom_agri'];
				$n_tel_agri = $_POST['n_tel_agri'];
				$adr_agri = $_POST['adr_agri'];
				
				/*//l'abattoir
				$nom_abat = $_POST['nom_abat'];
				$n_tel_abat = $_POST['n_tel_abat'];
				$adr_abat = $_POST['adr_abat'];
				*/
				
				
				
				
				
				//requete sql pour inserer toutes les information dans la table agriculeur
				$sqlAgri = "INSERT INTO agriculteur (id_agriculteur, nom_agri, prenom_agri, n_tel_agri, adr_agri) VALUES ('$id_agriculteur', '$nom_agri', '$prenom_agri', '$n_tel_agri', '$adr_agri' )";
				
				if ($conn->query($sqlAgri) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlAgri . "<br>" . $conn->error;
				}
				
				
				
				//requete sql pour inserer toutes les information dans la table abattoir
				$sqlAbat = "INSERT INTO abattoir (nom_abat, n_tel_abat, adr_abat) VALUES ('$nom_abat','$n_tel_abat', '$adr_abat' )";
				
				if ($conn->query($sqlAbat) === TRUE) {
					
				}
				else{
				
					echo "Error: " . $sqlAbat . "<br>" . $conn->error;
				}
				
				//Requete sql pour insérer toutes les informations du bovin
				 $sqlBovin =" INSERT INTO bovin (code_boucle, nom_bovin, pays, departement, exploitation, num_travail, date_naissance, date_mort, race, sexe, id_agriculteur_bovin, nom_abat_bovin)
				 VALUES ('$code_boucle','$nom_bovin','$pays','$departement','$exploitation','$num_travail','$date_naissance','$date_mort','$race','$sexe','$id_agriculteur_bovin','$nom_abat_bovin')";
				 
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