<?php
require('configBDD.php');
session_start();

$idU = $_POST['identifiantU'];
$mdpU = $_POST['mdpU'];

$requete = $bdd->prepare("SELECT nomUser,prenomUser,level"
        . " FROM administration a INNER JOIN level l"
        . " WHERE identifiantUser='$idU'"
        . " AND mdpUser='$mdpU' AND a.idLevel=l.idlevel");
$requete->execute();

while($donneesReq = $requete->fetch()){
    $_SESSION['nomUser'] = $donneesReq['nomUser'];
    $_SESSION['prenomUser'] = $donneesReq['prenomUser'];
    $_SESSION['levelUser'] = $donneesReq['level'];
}

header('Location: ../index.php');
