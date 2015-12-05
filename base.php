<!-- 
	Fichier de base du site : 
	contient le squelette de toutes les pages du site
-->

<!-- 
	permet de reconnaitre la page sur laquelle l'utilisateur navigue pour gérer 
	l'affichage de boutons en fonction (dans le menu plus particulièrement)
-->
<?php $nav_en_cours = 'identifiant_page'; ?>

<!DOCTYPE html >

<html style="background-color:#F8E0E6">
	<head>
		
		<!-- 
			la balise head étant la même pour toutes les pages, elle est regroupée dans un 
			fichier à part nommé "head.html" qui est ajouté ici
			Des balises en plus de celle ci peuvent être ajoutées en plus du fichier "head.html" commun
		-->
		<?php include("head.html"); ?>
		
		 
		 
	</head>
	
	<body>
		<!-- en-tête de la page, contenant le titre du site et le nom de la page avec une icone adaptée -->
		<div class="app-bar bg-darkCrimson">
				<div class="bg-darkCrimson fg-white ">
					
					<!-- 
						on inclue ici le fichier menu.php affichant le menu du site
						qui va varier selon la page (cf menu.php pour plus d'infos)
						
						Si la page a besoin d'interagir avec la base de donnée : 
							include("config_server.php");
						cette commande va inclure ici le code contenu dans le fichier config pour 
						interragir avec la base de donnée
					-->
					<?php require("menu.php"); ?>
					
					<!-- sous partie de la barre (sous-titre + icone) -->
					<div class="panel bg-darkMagenta">
						<div class="heading bg-darkMagenta">
							<span class="icon mif-notre_icone bg-darkMagenta"></span>
							<span class="title">Notre titre</span>
						</div>
						
					</div>
				</div>
				
		</div>
		
		<div class="main-content" style="margin-top: 9rem; margin-left: 10px ; margin-right: 10px">
		
			<!-- contenu principal de la page -->
			
		</div>
		
	</body>
</html>