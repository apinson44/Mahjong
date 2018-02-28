<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Mahjong </title>
	<link rel="stylesheet" type="text/css" href="CSS_Mahjong.css" />
</head>

<body id="body_jeu">
	<!--Génération de la grille / Execution dans un autre fichier php-->
	<div id="grille">
	<?php
		include("Generer_Grille.php");
	?>
	</div>

	<!--Bouton retour vers la page profil-->
	<a href="Profil.html">
		<input id="retour" type="image" value="Retour" src="../Image/Fleche retour.png" alt="Retour" onclick="Profil.html"/>
	</a>
</body>

</html>
