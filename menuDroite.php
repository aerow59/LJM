<link rel="stylesheet" href="css/menudroite.css">
<?php

require('php/configBDD.php');

$requete = $bdd->prepare("SELECT * FROM menucentral");
$requete->execute();
$idMenuDroite = 0;

?>
<lu><?php
    while($donnees = $requete->fetch()){
        ?><li class="<?php echo $idMenuDroite ?>"><?php echo $donnees['nomLienMenuCentral'];?></li><br><?php
        $idMenuDroite = $idMenuDroite+1;      
    }
?>
</lu>
