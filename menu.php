<!--
	Cette page contient la barre de menu située en haut de chaque page du site
	Le contenu va varier selon la page visitée par l'utilisateur
-->



<div class="margin10 ">
	<!--  grille de 3 cellules : Titre du site Web puis 
			une cellule pouvant contenir un bouton connexion/inscription si l'utilisateur n'est pas connecté, ou un bouton déconnexion si l'utilisateur est connecté et enfin une cellule contenant le menu du site-->
			
	<div class = "grid">
		<div class="row cells3">
			<!-- 1ere Cellule -->
			<div class= "cell">
				<h1>
					Super Meat Bio
				</h1>
			</div>
			<div class= "cell">
				
			</div>
			
			<!-- Menu : chaque partie du menu n'est affichée uniquement si l'utilisateur n'est pas déjà sur la page, si oui, le lien dans le menu n'est pas affiché (ceci encore grâce à la variable $nav_en_cours initialisée à chaque début de page. -->
			<div class= "cell">
				<div class="inline-block place-right">
					<button class="button dropdown-toggle bg-crimson fg-white"> Menu </button>
					<ul class="split-content d-menu place-right " data-role="dropdown">
					
					<!-- lien vers l'accueil + icone -->
					<?php if ($nav_en_cours != 'accueil') {  echo" <li><a href=\"accueil.php\" class=\"bg-hover-crimson \"><span class=\"mif-home\"></span>  Accueil</a></li>";} ?>
					<!-- lien vers la saisie d'une nouvelle fiche + icone -->
					<?php if ($nav_en_cours != 'saisie_fiche') {  echo" <li><a href=\"saisie_fiche.php\" class=\"bg-hover-crimson\"><span class=\"mif-file-text\"></span>  Saisir nouvelle fiche</a></li> ";} ?>
					<!-- lien vers la consultation des fiches + icone -->
					<?php if ($nav_en_cours != 'consultation' && $nav_en_cours != 'frise_chrono') {  echo" <li><a href=\"consultation.php\" class=\"bg-hover-crimson\"><span class=\"mif-books\"></span>  Consultation fiches</a></li> ";} ?>				
					
					
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	