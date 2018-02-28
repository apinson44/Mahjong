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

<body id="body_regles">
	<!--Texte bandeau-->
	<p id="texte_bandeau"> Sélection du niveau </p>
	
	<!--Tableau conteant les entrées pour les 10 niveaux-->
	<!--Formulaire permet d'envoyer l'id du bouton au fichier php afin de générer la grille selon la difficulté-->
	<table id="tab_niveau">
		<tr>
		<th>
		<!--Boutons niveaux 1 à 5-->
		<a href="Jeu.php">
		<form method="post" action="Jeu.php">
		<input id="niv1" name="niv1" type="submit" value="1" onclick="Jeu.php"/>
		<input id="niv2" name="niv2" type="submit" value="2" onclick="Jeu.php"/>
		<input id="niv3" name="niv3" type="submit" value="3" onclick="Jeu.php"/>
		<input id="niv4" name="niv4" type="submit" value="4" onclick="Jeu.php"/>
		<input id="niv5" name="niv5" type="submit" value="5" onclick="Jeu.php"/>
		</form>
		</a>
		</th>
		</tr>
		<tr>
		<th>
		<!--Boutons niveaux 6 à 10-->
		<a href="Jeu.php">
		<input id="niv6" name="niv6" type="submit" value="6" onclick="Jeu.php"/>
		<input id="niv7" name="niv7" type="submit" value="7" onclick="Jeu.php"/>
		<input id="niv8" name="niv8" type="submit" value="8" onclick="Jeu.php"/>
		<input id="niv9" name="niv9" type="submit" value="9" onclick="Jeu.php"/>
		<input id="niv10" name="niv10" type="submit" value="10" onclick="Jeu.php"/>
		</a>
		</th>
		</tr>
	</table>

	<!--Bouton retour vers la page de profil-->
	<a href="Profil.html">
		<input id="retour" type="image" value="Retour" src="../Image/Fleche retour.png" onclick="Profil.html"/>
	</a>

</body>

</html>
