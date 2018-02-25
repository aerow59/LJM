<?php
require('../configBDD.php');
$titre =  $_GET['nomF'];
$contenu = nl2br($_GET['contenuF']);

$requeteModifF = $bdd->prepare("UPDATE formation SET contenu='$contenu' WHERE nomFormation='$titre'");
$requeteModifF->execute();