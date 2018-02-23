<?php

//$nomPersonne=$_POST['nom'];
//$prenomPersonne=$_POST['prenom'];
//
//$commentairePersonne= $_POST['message'];
//$date=date("d-m-y"); 
//
//
//
//echo $nomPersonne;
//echo $prenomPersonne;
//echo $commentairePersonne;
//echo $date;



//header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 
//
//$nomPersonne = (isset($_POST["variableNom"])) ? $_GET["variable1"] : NULL;
////$variable2 = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
//
//if ($variable1 && $variable2) {
//	// Faire quelque chose...
//	echo "OK";
//} else {
//	echo "FAIL";
//}


$nomPersonne=$_POST['variableNom'];
$prenomPersonne=$_POST['variablePrenom'];
$messagePersonne=$_POST['variableMessage'];
$niveauPersonne=$_POST['variableNiv'];


$requeteEnvoieDonneesLivreOr=$bdd->prepare('INSERT INTO livreor')

?>

