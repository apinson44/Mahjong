<?php
/*Récupération du nom du bouton séléctionné pour en déduire le niveau*/
if (isset($_POST['niv1'])){
	$nbLigne = 5; $nbColonne = 5; $nbEtage = 2; $nbTuiles = 50; $collection = "Disney";
} else{
  	$nbLigne = 2; $nbColonne = 2; $nbEtage = 5; $nbTuiles = 20; $collection = "Drapeau";
}

/*Création du tableau contenant les tuiles qui vont être utilisés*/
$tuiles = array();
for($i=1; $i<=($nbTuiles)/2; $i++){
	$t = rand(1, 42);
	$tuiles[$i] = $t;
	$tuiles[($nbTuiles)/2+$i] = $t;
}
shuffle($tuiles);

/*Génération de la grille et remplissage des cases*/
$t = 0;
for($k=1; $k<=$nbEtage; $k++){
	echo "<table id=\"grille";
	echo $k;
	echo "\">";
	for($i=1; $i<=$nbLigne; $i++){
		echo "<tr>";
		for($j=1; $j<=$nbColonne; $j++){
				$tuile = $tuiles[$t];
				echo "<td width=\"45px\" height=\"55px\" style=\"background-image: url('../";
				echo $collection;
				echo "/Diapositive";
				echo $tuile;
				echo ".PNG'); background-size: 45px 55px\">";
				echo "</td>";
				$t = $t + 1;
		}
	}
		echo "</tr>";
	echo "</table>";
}

?>
