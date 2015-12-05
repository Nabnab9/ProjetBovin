<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Super Meat Bio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
	</head>

	<style>
	.bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
	}
	.bg-2 {
		background-color: #474e5d; /* Dark Blue */
		color: #ffffff;
	}
	.bg-3 {
		background-color: #ffffff; /* White */
		color: #555555;
	}$
	
	.container-fluid {
		padding-top: 70px;
		padding-bottom: 70px;
	}
	</style>
	
	
	<?php
			 
					include("config_server.php");
					
					
					
					
					$code_boucle = $_GET["code_boucle"];
					
					
					if(isset($code_boucle)){
					
						//$sql = "SELECT * FROM bovin WHERE code_boucle LIKE ('%$code_boucle%')";
						//$sql = "SELECT nom_bovin, pays, departement, exploitation, num_travail, date_naissance, date_mort, race, sexe, id_agriculteur_bovin, nom_abat_bovin, n_tel_abat, adr_abat, nom_agri, prenom_agri, n_tel_agri, adr_agri
						//FROM bovin 
						//INNER JOIN agriculteur ON (id_agriculteur_bovin = id_agriculteur)
						//INNER JOIN abattoir ON (nom_abat_bovin = nom_abat)
						//WHERE code_boucle LIKE ('%$code_boucle%')";
						
						$sql = "SELECT *
						FROM bovin 
						INNER JOIN agriculteur ON (id_agriculteur_bovin = id_agriculteur)
						INNER JOIN abattoir ON (nom_abat_bovin = nom_abat)
						WHERE code_boucle LIKE ('%$code_boucle%')";
						
						$result =$conn->query($sql);

						 if ($result->num_rows>0){
							 $row =$result->fetch_assoc();
						 
						


				
							echo"
								<body>
									<div class=\"container-fluid bg-1 text-center\">
										<h3>Qui suis je ?</h3>
										<img src=\"vache.jpg\"  class=\"img-circle\" alt=\"Cow\">
										<h3>". $row["nom_bovin"]."</h3>
									</div>
									<div class=\"container-fluid bg-2 text-center\">
									  <h3>Mes caractéristiques</h3>
									  <h4><u>Date de naissance :</u>". $row["date_naissance"]."</h4>
									  <h4><u>Race :</u> ". $row["race"]."</h4>
									  <h4><u>Sexe :</u>". $row["sexe"]."</h4>
									</div>

									<div class=\"container-fluid bg-3 text-center\">
									  <h3>Mon exploitation</h3>
									  <h4><u>Pays :</u>". $row["payss"]."</h4>
									  <h4><u>Departement :</u>". $row["departement"]."</h4>
									  <h4><u>Adresse :</u>". $row["adr_agri"]."</h4>
									  <h4><u>N° Tel :</u>". $row["n_tel_agri"]."</h4>
									</div>
									
									<div class=\"container-fluid bg-1 text-center\">
										<h3>Mon terminus</h3>
										<h4><u>Nom :". $row["nom_abat"]."</h4>
										<h4><u>Adresse :</u> ". $row["adr_abat"]."</h4>
										<h4><u>N° Tel :</u>". $row["n_tel_abat"]."</h4>
										<h4><u>Date de mort :</u>". $row["date_mort"]."</h4>
									</div>
								</body>";
						 }else{
							 echo"
								<body>
									<h1>Le code boucle n'existe pas dans la base de donnée</h1>
								</body>
							";
						 }
						 
								
					}else{
					
							echo"
								<body>
									<h1>Le code boucle n'a pas été saisi</h1>
								</body>
							";
					
					}
								
		$conn->close();	
		?>
		
</html>
