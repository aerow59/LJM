<?php

require('../configBDD.php');

$typeFormation = $_GET['typeF'];
$nomFormation = $_GET['nomF'];
$contenuFormation = $_GET['contenuF'];

$requeteInserton = $bdd->prepare("INSERT INTO formation(nomFormation,contenu,idTypeFormation)"
        . "VALUES('$nomFormation','$contenuFormation','$typeFormation')");
$requeteInserton->execute();