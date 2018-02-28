<?php
require('configBDD.php');

$nom = $_GET['nom'];
$chemin = $_GET['chemin'];


$requeteSupprimeImagePartenariat = $bdd->prepare("DELETE FROM partenariatapprentissage WHERE nomPartenariat='$nom'");
$requeteSupprimeImagePartenariat->execute();
$chemin = '../'.$chemin;
unlink($chemin);
header('Location: ../index.php');
