<?php
require('configBDD.php');
$requete = $bdd->prepare('SELECT * FROM videocdi WHERE numeroDiv=1');
$requete->execute();

while($donnees = $requete->fetch()){
    $nomVideo = $donnees['nomVideoOrigine'];
    unlink($nomVideo);
}

$requete2 = $bdd->prepare("DELETE FROM videocdi WHERE numeroDiv=1");
$requete2->execute();

header('Location: ../index.php');