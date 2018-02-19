<?php
require('configBDD.php');
$requete = $bdd->prepare('SELECT * FROM videocdi WHERE numeroDiv=2');
$requete->execute();

while($donnees = $requete->fetch()){
    $nomVideo = $donnees['nomVideoOrigine'];
    unlink($nomVideo);
}

$requete2 = $bdd->prepare("DELETE FROM videocdi WHERE numeroDiv=2");
$requete2->execute();

header('Location: ../index.php');