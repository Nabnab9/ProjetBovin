<!-- 
	on envoie ici les informations de la fiche dans la base de donnée de l'utilisateur connecté
-->

<?php $nav_en_cours = 'verif'; ?>
<!DOCTYPE html >

<html style="background-color:#F8E0E6">
	<head>
		<?php include("head.html"); ?>
		<!--<meta http-equiv="refresh" content="1; URL=consultation.php">-->
	</head>
	
	<body >

		<div class="app-bar bg-darkCrimson">
			<div class="bg-darkCrimson fg-white">
			
				<?php include("menu.php"); ?>
				
				
				<div class="panel bg-darkMagenta">
					<div class="heading bg-darkMagenta">
						<span class="icon mif-user-check bg-darkMagenta"></span>
						<span class="title">Inscription</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="main-content" style="margin-top: 8rem">

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
				$id_agriculteur= $_POST['id_agriculteur'];
				$id_abattoire= $_POST['id_abattoire'];
				
				//Requete sql pour insérer toutes les informations du bovin
				 $sql =" INSERT INTO Bovin (code_boucle, nom_bovin, pays, departement, exploitation, num_travail, date_naissance, date_mort, race, sexe, id_agriculteur, id_abattoire)
				 VALUES ('$code_boucle','$nom_bovin','$pays','$departement','$exploitation','$num_travail','$date_naissance','$date_mort','$race','$sexe','$id_agriculteur','$id_abattoire')";
				 
				 //Vérifie que la requète s'est bien effectué
				 if ($conn->query($sql) === TRUE) {
					
					echo "<div class=\"progress small padding100 \" style= \"background-color:#F8E0E6\" id=\"pb1\" data-role=\"progressBar\" data-value=\"0\" data-color=\"bg-crimson\"></div>";
				}
				else{
				
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();

			?>
		</div>

	</body>
</html>