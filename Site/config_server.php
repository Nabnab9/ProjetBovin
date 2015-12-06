<?php

	//ce code permet de se connecter à la base de donnée
	//il est inclu dans chaque partie du site qui a besoin d'effectuer un requete dans la base de donnée
	//ceci permet facilement de changer le nom dutilisateur et le mot de passe du serveur
	
	//Nom du serveur
	$servername = "localhost";
	//nom d'utilisateur
	$username = "root";
	//Mot de passe
	$password = "";
	//nom de la basse de donnée
	$dbname = "microprojetb";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>