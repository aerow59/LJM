<?php

$nom = $_GET['nom'];

require('configBDD.php');
$requeteInfo = $bdd->prepare("SELECT * FROM partenariat WHERE nomPartenariat='$nom'");
$requeteInfo->execute();

while($donnees = $requeteInfo->fetch()){
    ?><button>Précédent</button><br><?php
    echo $donnees['contenu'];
}

?>
<script src="js/infosUniv.js"></script>