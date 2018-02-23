<?php
    require('php/configBDD.php');
    $requeteAffichFormationUFA =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Apprentissage'");
    $requeteAffichFormationUFA->execute();
    while($donneesAffichFormationUFA = $requeteAffichFormationUFA->fetch()){
        echo $donneesAffichFormationUFA['nomFormation']; ?><br><?php
    }
