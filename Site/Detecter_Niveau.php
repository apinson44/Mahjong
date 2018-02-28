<?php
session_start();

/*Récupération du nom du bouton séléctionné pour en déduire le niveau*/
if (isset($_POST['niv1'])){
	$nbLigne = 5;
	$nbColonne = 5;
	$nbEtage = 2;
	$nbTuiles = 50;
} else{
  	$nbLigne = 2;
	$nbColonne = 2;
	$nbEtage = 5;
	$nbTuiles = 20;
}

$_SESSION['nbLigne'] = $nbLigne;
$_SESSION['nbColonne'] = $nbColonne; 
$_SESSION['nbEtage'] = $nbEtage; 
$_SESSION['nbTuiles'] = $nbTuiles;  
?>
