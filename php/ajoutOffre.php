<?php
require('configBDD.php');

$nom = $_POST['nomSoc'];
$mail = $_POST['emailSoc'];
$tel = $_POST['telSoc'];
$contenu = $_POST['caractSoc'];
$fichier = $_FILES['fichierSoc'];

$extensionV = array('doc','docx','txt','jpg','png','pdf');
$extensionDuFichier = strtolower(substr(strrchr($_FILES['fichierSoc']['name'],'.'),1));
if(in_array($extensionDuFichier,$extensionV)){
    echo 'GOOD';
}else{
    echo 'NOTGOOD';
}


$requeteInsertionStage = $bdd->prepare("INSERT INTO offreentreprise(nomEntreprise,mailEntreprise,telEntreprise,contenuOffreEntreprise,fichierEntreprise) "
        . "VALUES('$nom','$mail','$tel','$contenu')");
