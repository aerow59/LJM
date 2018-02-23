<?php
require('../configBDD.php');
$nomF = $_GET['nomF'];

$requeteS = $bdd->prepare("DELETE FROM formation WHERE nomFormation='$nomF'");
$requeteS->execute();