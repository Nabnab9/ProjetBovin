<?php $nav_en_cours = 'saisie_fiche'; ?>
<!DOCTYPE html>

<html style="background-color:#F8E0E6">
	<head>

		<?php include("head.html"); ?>
	</head>

	<body>
		<div class="app-bar fixed-top bg-darkCrimson">
			<div class="bg-darkCrimson fg-white fixed-top">
				<?php include("menu.php"); ?>
				
				<div class="panel bg-darkMagenta">
					<div class="heading bg-darkMagenta">
						<span class="icon mif-file-text bg-darkMagenta"></span>
						<span class="title">Formulaire de saisie</span>
						
					</div>
			
					
				</div>
			</div>
		</div>
			<?php
			echo"
				
			<div class=\"main-content\" style=\"margin-top: 8rem\">
				<form action=\"verif.php\" method=\"POST\" class=\"padding10\">
					<fieldset class=\"bd-crimson\">
						<legend class=\"sub-header fg-crimson\"> Informations du livre </legend>
						<br>
						
						<div class = \"grid\">
							<div class=\"row cells5\">
								<div class= \"cell\">
										code_boucle * : <br>
									<div class=\"input-control text \">
										<input type = \"text\" id=\"code_boucle\" required  name=\"code_boucle\" class = \"  bg-white \"/>
										<br><br>
									</div>
								</div>	
								
								<div class= \"cell\">
									nom_bovin * : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"nom_bovin\" required name=\"nom_bovin\" class = \"bg-white\" placeholder=\"Ex : Pikachu, Kéliane\"/>
										<br><br>
									</div>
								</div>	
								
								<div class= \"cell\">
									pays * : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"pays\" required name=\"pays\" class = \"  bg-white\"/>
										<br><br>
									</div>
								</div>	
								
								<div class= \"cell\">
									departement * : <br>
									<div class=\"input-control text\">
										<input type = \"number\" id=\"departement\" required name=\"departement\" class = \"  bg-white\"/>
										<br><br>
									</div>
								</div>	
								
								<div class= \"cell\">
									exploitation : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"exploitation\" name=\"exploitation\" class = \"  bg-white\"/>
										<br><br>
									</div>
								</div>	
									
								
							</div>	
							
							<div class=\"row cells5 \">
								<div class= \"cell\">
									num_travail : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"num_travail\" name=\"num_travail\" class = \"  bg-white\"/>
										<br><br>
									</div>
								</div>	
									
								<div class = \"cell\">
									date_naissance : <br>
									<div class=\"input-control text\" data-role=\"datepicker\" id=\"date_naissance\" >
										<input type=\"text\" name=\"date_naissance\" >
										<button class=\"button\"><span class=\"mif-calendar\"></span></button>
									</div>
								</div>
									
								<div class = \"cell\">
									date_mort : <br>
									<div class=\"input-control text\" data-role=\"datepicker\" id=\"date_mort\" >
										<input type=\"text\" name=\"date_mort\" >
										<button class=\"button\"><span class=\"mif-calendar\"></span></button>
									</div>
								</div>
									
								<div class= \"cell\">	
									race * : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"race\" required name=\"race\" class = \"bg-white\" placeholder = \"Ex : Roman\"/>
									</div>
									<br><br>
								</div>	
									
								<div class= \"cell\">	
									sexe * : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"sexe\" required name=\"sexe\" class = \" bg-white \" placeholder = \"Ex : Policier\"/>
										<br><br>
									</div>
								</div>
							</div>
							
							<div class=\"row cells2\">
								<div class= \"cell\">	
									id_agriculteur : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"id_agriculteur\" name=\"id_agriculteur\" class=\"bg-white\"></text>
										<br><br>
									</div>
								</div>	
									
								<div class= \"cell\">	
									id_abattoire : <br>
									<div class=\"input-control text\">
										<input type = \"text\" id=\"id_abattoire\" name=\"id_abattoire\" class=\"bg-white\"> </text>
										<br><br>
									</div>
								</div>	
							</div>
						</div>
						
						<p> * Champs obligatoires </p>
					</fieldset>
					
					
					<br>

					<div class=\"margin20 \">
						<input type =\"submit\" value = \"Valider\" class=\"bg-crimson fg-white\">
						<input type=\"reset\" value=\"Effacer\" class=\"bg-crimson fg-white\">
					</div>
				
				</form>
			</div>
				
		";
		?>
	</body>
</html>