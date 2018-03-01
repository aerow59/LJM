<?php
require('php/configBDD.php');

$requeteTitreUfa = $bdd->prepare('SELECT * FROM formation WHERE idTypeFormation = 4');
$requeteTitreUfa->execute();


$i = 0;
?><div class="BTSUFA"><?php
    while($donnees = $requeteTitreUfa->fetch()){
        $idDiv = 'divBTS'.strval($i)?>
        <div class="<?php echo $idDiv ?>">
            <h3 class="titreBTS"><?php echo $donnees['nomFormation']; ?></h3>
            <p class="descriptionBTS"><?php echo $donnees['description']; ?></p>
            <p class="contenuUfa"><?php echo $donnees['contenu']; ?><br>
                <button class="btnPrecBTS">Précédent</button>
            </p>
        </div><?php
        $i = $i+1;
    } ?>
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/ufa.js"></script>


