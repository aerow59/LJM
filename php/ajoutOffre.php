<?php
require('configBDD.php');

$nom = $_POST['nomSoc'];
$mail = $_POST['emailSoc'];
$tel = $_POST['telSoc'];
$contenu = $_POST['caractSoc'];
$fichier = $_FILES['fichierSoc'];
$typeFichier = $fichier['type'];

$chemin = '../upload/';


if(!strstr($typeFichier,'jpg') && !strstr($typeFichier,'png') && !strstr($typeFichier,'pdf') && !strstr($typeFichier,'jpeg') && !strstr($typeFichier,'doc') && !strstr($typeFichier,'docx')){
    exit('Le fichier n\' est pas une image !');
}

if(move_uploaded_file($fichier['tmp_name'], $chemin.$fichier['name'])){
    $cheminE = $chemin.$fichier['name'];
    $requeteInsertionStage = $bdd->prepare("INSERT INTO offreentreprise(nomEntreprise,mailEntreprise,telEntreprise,contenuOffreEntreprise,fichierEntreprise) "
        . "VALUES('$nom','$mail','$tel','$contenu','$cheminE')");
    $requeteInsertionStage->execute();
}



