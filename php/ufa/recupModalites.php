<?php

require('php/configBDD.php');

$requeteTitreModa = $bdd->prepare('SELECT titre FROM modalites');
$requeteTitreModa->execute();

$requeteContenuModa = $bdd->prepare('SELECT contenu FROM modalites');
$requeteContenuModa->execute();
?>
<div class="MODALITE">
    <?php
        while($donnees = $requeteTitreModa->fetch()){
            ?><h4 class="titreModa"><?php echo $donnees['titre'];?></h4><?php
    }?>
    <div class="contenuM">
    <?php
        while($donnees = $requeteContenuModa->fetch()){
            echo $donnees['contenu'];
    }?>  
    </div>
</div>
        