<?php
require('../configBDD.php');

$nomF = $_GET['nomF'];

$requeteS = $bdd->prepare("DELETE from formation WHERE nomFormation='$nomF'");
$requeteS->execute();

echo $nomF;