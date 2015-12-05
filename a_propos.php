<!--
  Page à propos : présente le copyright du site ainsi 
  que quelques précisions sur la construction du site 
  sous forme de slides animés
-->


<!--
  permet de reconnaître la page actuelle pour gérer l'affichage en fonction de la connexion ou non
  dans l'en-tête du site, cela est en effet géré dans un seul fichier "menu.php"
-->
<?php $nav_en_cours = 'a_propos'; ?>


<!-- début du code  -->
<!DOCTYPE html>

<html style="background-color:#F8E0E6">

	<head>
<!--
  inclue simplement l'en-tête du document (includes des CSS + balises script) 
  contenue dans le fichier "head.html" : partie commune à tous les codes sources du site
-->
		<?php include("head.html"); ?>	

	</head>

	<body>
    <!-- Début division de la barre de menu (fixed top : reste en haut de la page même si l'utilisateur descend en bas de la page -->
		<div class="app-bar bg-darkCrimson">
			<div class="bg-darkCrimson fg-white fixed-top">
			
      
        <!-- affiche le menu ainsi que les boutons connexion/inscription/déconnexion au bon moment  -->
				<?php include("menu.php"); ?>
				
        <!-- panneau affichant le titre de la page (icone + titre)-->
				<div class="panel bg-darkMagenta">
					<div class="heading bg-darkMagenta">
						<span class="icon mif-info bg-darkMagenta"></span>
						<span class="title">À propos</span>
					</div>
				</div>
			</div>
		</div>
		<!-- fin division barre de menu -->
    
    
    <!-- début corps "réel" de la page-->
		<div class="main-content" style="margin-top: 8rem">
			
			<!-- ici, affichage de slides animées-->
			<div class="bg-crimson margin100">
				<div class="carousel square-bullets fg-white" data-height="200" data-role="carousel" data-period="7000" data-effect="slowdown"  >
        
          <!-- premiere slide-->
					<div class="slide">
            
            <!-- comporte une grille de 3 cellules (deux photos et un texte)-->
						<div class = "grid" style="padding-left:10%">
							<div class="row cells3 ">
								<div class="cell ">
									<div class="tile bg-crimson" >
										<div class="image-container bordered handing ani image-format-hd">
											   
											<div class="frame">
												<img src="Icon/Auteur_Metro_ui.jpg">
											</div>
										</div>
									</div>
								</div>
								<div class="cell margin10">
									
										<p >
											Metro UI CSS : <br>
											Copyright © 2012-2015 Sergey Pimeno
											
										</p>
									
								</div>
								<div class="cell">
									<div class="tile bg-crimson " >
										<div class="image-container bordered handing ani image-format-hd">
											   
											<div class="frame">
												<img src="Icon/Auteur_Metro_ui.jpg">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
          <!-- deuxième slide-->
					<div class="slide" style="padding-left:10%; padding-top:2%">
						<h2>Réalisation</h2>
						<p>
							Site réalisé à l'aide du framework Metro UI CSS
						</p>
					</div>
				</div>
			</div>
      <!-- fin affichage des slides-->
				
		</div>
    <!-- fin corps de la page -->
	</body>

<html>