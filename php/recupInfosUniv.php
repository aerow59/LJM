<?php

$nom = $_GET['id'];

require('configBDD.php');
$requeteInfo = $bdd->prepare("SELECT * FROM partenariat WHERE nomPartenariat='$nom'");
$requeteInfo->execute();

while($donnees = $requeteInfo->fetch()){
    echo "TEST";
}