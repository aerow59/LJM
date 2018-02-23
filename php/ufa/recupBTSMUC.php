<?php
require('php/configBDD.php');

$requeteTitreUfa = $bdd->prepare('SELECT * FROM formation WHERE idTypeFormation = 4');
$requeteTitreUfa->execute();

$requeteApprentissage = $bdd->prepare('SELECT * FROM apprentissage');
$requeteApprentissage->execute();

$i = 0;
?><div class="BTS"><?php
    while($donnees = $requeteTitreUfa->fetch()){
        $idDiv = 'divBTS'.strval($i)?>
        <div class="<?php echo $idDiv ?>">
            <h3><?php echo $donnees['nomFormation']; ?></h3>
            <p><?php echo $donnees['description']; ?></p>
        </div><?php
        $i = $i+1;
    } ?>
</div>
<div class="apprentissage">
    <?php
    $l = 0;
    while($donnees = $requeteApprentissage->fetch()){
        $divApp = 'divApp'.strval($l);?>
        <div class="<?php echo $divApp ?>">
            <h4><?php echo $donnees['titreContenu'] ?></h4>
        </div><?php
        $l = $l + 1;
    }?>
</div>

