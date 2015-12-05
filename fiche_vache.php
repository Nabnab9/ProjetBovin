<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Super Meat Bio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
	
	

<input id="text" type="text" value="http://jindo.dev.naver.com/collie" style="width:80%" /><br />
<div id="qrcode"></div>

<script type="text/javascript">
	var qrcode = new QRCode("qrcode");

function makeCode () {      
    var elText = document.getElementById("text");
    
    if (!elText.value) {
        alert("Input a text");
        elText.focus();
        return;
    }
    
    qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
</script>
	
	<?php
			 
					include("config_server.php");
					
					// Selectionne tout les livres de l'utilisateur courant
					$code_boucle = $_GET["code_boucle"];
					$sql = "SELECT * FROM Bovin WHERE code_boucle LIKE ('%$code_boucle%')";
					
					$result =$conn->query($sql);

					 if ($result->num_rows>0){
						 $row =$result->fetch_assoc();
						//echo "<table class=\"table striped hovered border bordered \">";
						/*echo " 
							   <tr style=\"text-align:center;\">
									<td>". $row["code_boucle"]."		</td>
									<td>". $row["nom_bovin"]."			</td>
									<td>". $row["pays"]."			</td>
									<td>". $row["departement"]."		</td>
									<td>". $row["exploitation"]."			</td>
									<td>". $row["num_travail"]."			</td>
									<td>". $row["date_naissance"]."	</td>
									<td>". $row["date_mort"]."		</td>
									<td>". $row["race"]."		</td>
									<td>". $row["sexe"]."			</td>
									<td>". $row["id_agriculteur"]."	</td>
									<td>". $row["id_abattoire"]."	</td>
								</tr>
						</table>";*/
					 }
					


			
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
			  <h4><u>Pays :</u>". $row["race"]."</h4>
			  <h4><u>Departement :</u>". $row["departement"]."</h4>
			  <h4><u>Adresse :</u> 123 rue de l'Algérie </h4>
			  <h4><u>N° Tel :</u> 01 123 123 69</h4>
			</div>
			
			<div class=\"container-fluid bg-1 text-center\">
				<h3>Mon terminus</h3>
				<h4><u>Nom :</u> Algérie</h4>
				<h4><u>Adresse :</u> 11 rue du général de Gaulle</h4>
				<h4><u>N° Tel :</u> 06 69 69 69 69</h4>
				<h4><u>Date de mort :</u>". $row["date_mort"]."</h4>
			</div>";
		$conn->close();	
		?>
		</body>
</html>
