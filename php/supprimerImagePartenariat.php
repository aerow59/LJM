<?php
require('configBDD.php');
$requeteSupprimeImagePartenariat = $bdd->prepare('SELECT * FROM videocdi WHERE numeroDiv=2');
$requeteSupprimeImagePartenariat->execute();

while($donnees = $requeteSupprimeImagePartenariat->fetch()){
    $nomVideo = $donnees['nomVideoOrigine'];
    unlink($nomVideo);
}

$requete2 = $bdd->prepare("DELETE FROM videocdi WHERE numeroDiv=2");
$requete2->execute();

header('Location: ../index.php');
