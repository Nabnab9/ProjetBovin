<!--
	Cette page est l'acceuil du site : elle contient les boutons principaux
	- saisir une nouvelle fiche
	- consulter les fiches
	- rechercher une fiche
	- page à propos du site
-->



<!-- cf début page à propos-->
<?php $nav_en_cours = 'accueil'; ?>

<!DOCTYPE html>

<html style="background-color:#F8E0E6">

	<head>
		<!-- cf page à propos-->
		<?php include("head.html"); ?>
	</head>

	<body>

		
		<!-- cf page à propos-->
		<div class="app-bar bg-darkCrimson">
		
			<div class="bg-darkCrimson fg-white fixed-top">
			
				<?php include("menu.php"); ?>
				
				<div class="panel bg-darkMagenta">
					<div class="heading bg-darkMagenta">
						<span class="icon mif-home bg-darkMagenta"></span>
						<span class="title">Accueil</span>
					</div>
				</div>
			</div>
		</div>
		

		
		<!-- début du corps de la page-->
		
		<div class="main-content" style="margin-top: 8rem">
			 
			 <!-- contient une grille de 4 cellules-->
			 <div class = "grid">
				<div class="row cells4 padding100">
					
					<!-- première cellule, étant un lien vers la page de saisie d'une fiche
						sous forme d'une tuile windows 8	
					-->
					<div class= "cell1">
		 
						<a href="saisie_fiche.php">
							<div class="tile-large fg-white" data-role="tile">
								<div class="tile-content slide-left">
									<div class="slide padding30 bg-crimson">
										
										<!-- image de la tuile-->
										<img src="Icon/fiche.png" data-role="fitImage" data-format="fill">
									</div>
									
									<!-- contenu de la tuile lorsque la souris passe au dessus de celle ci-->
									<div class="slide-over text padding10 op-crimson align-justify">
										Remplir une nouvelle fiche de lecture sur le dernier livre que vous avez lu (et apprécié .. ou pas) !
									</div>
									<div class="tile-label fg-white">
										<center>
											Nouvelle saisie
										</center>
									</div>
								</div>
							</div>
						</a>
					</div>
					
					<!-- deuxieme tuile -->
					<div class= "cell2">
						
						<!-- lien vers la page de consultation des fiches-->
						<a href="consultation.php">
							<div class="tile-large fg-white" data-role="tile">
								<div class="tile-content zooming-out">
									<div class="slide padding30 bg-crimson">
										<img src="Icon/liste_fiches.png">
									</div>
									<div class="tile-label">Fiches réalisées</div>
								</div>
							</div>
						</a>
					</div>
					
			
					<!-- 4ième cellule-->
					<div class= "cell4">
						<!-- lien vers la page à propos du site-->
						<a href="a_propos.php">
							<div class="tile-large" data-role="tile">
								<div class="tile-content">
									<div class="image-container">
										<div class="frame">
											<img src="Icon/info.png">
										</div>
										<div class="image-overlay op-darkRed">
											<h2>Info</h2>
											<p>
												Copyright framework du site<br>
												Informations & détails sur la construction du site
											</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>	
		</div>
		<!-- fin du corps de la page-->
	</body>

<html>