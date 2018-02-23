<?php

$requeteApprentissage = $bdd->prepare('SELECT * FROM apprentissage');
$requeteApprentissage->execute();

?><div class="apprentissage">
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