<!--  
	Page affichant les différentes fiches enregistrées
	sur le compte de l'utilisateur (en mode tableau)
-->


<!-- cf base.php-->
<?php $nav_en_cours = 'consultation'; ?>

<!DOCTYPE html >

<html style="background-color:#F8E0E6">
	<head>
		
		<!-- cf base.php -->
		<?php include("head.html"); ?>
		 
	</head>
	<body>
	<!-- cf base.php -->
		<div class="app-bar fixed-top bg-darkCrimson">
				<div class="bg-darkCrimson fg-white fixed-top">
					
					
					<?php include("menu.php"); ?>
					
					<div class="panel bg-darkMagenta">
						<div class="heading bg-darkMagenta">
							<span class="icon mif-books bg-darkMagenta"></span>
							<span class="title">Consultation des livres</span>
						</div>
					</div>
				</div>
				
				
		</div>
		<div class="main-content" style="margin-top: 9rem; margin-left: 10px ; margin-right: 10px">
		
			<?php
			 
					include("config_server.php");
					
					// Selectionne tout les livres de l'utilisateur courant
					$code_boucle = $_GET["code_boucle"];
					$sql = "SELECT * FROM Bovin WHERE code_boucle LIKE ('%$code_boucle%')";
					
					$result =$conn->query($sql);

					 if ($result->num_rows>0){
						 $row =$result->fetch_assoc();
						echo "<table class=\"table striped hovered border bordered \">";
						echo " 
								<thead>
									<tr class=\"border bordered\">  
										<th>code_boucle</th>
										<th>nom_bovin</th>
										<th>pays</th>
										<th>departement</th>
										<th>exploitation</th>
										<th>num_travail </th>
										<th>date_naissance</th>
										<th>date_mort</th>
										<th>race</th>
										<th>sexe</th>
										<th>id_agriculteur</th>
										<th>id_abattoire</th>
									</tr>
								</thead>
							   
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
						</table>";
					 }
					$conn->close();


			?>
			
		</div>
	</body>
</html>
