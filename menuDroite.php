<?php

require('php/configBDD.php');

$requete = $bdd->prepare("SELECT * FROM menucentral");
$requete->execute();

?>
<lu><?php
    $var = 0;
    $lienMenu = 'lienMenuDroite'.strval($var);
    while($donnees = $requete->fetch()){
        $lienMenu = 'lienMenuDroite'.strval($var);
        ?><li class="<?php echo $lienMenu ?>"><?php echo $donnees['nomLienMenuCentral'];?></li><br><?php
        $var = $var + 1;
    }
?>
</lu>
