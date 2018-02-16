<link rel="stylesheet" href="css/greta.css">
<div class="titreGreta"><h3>GRETA</h3></div>
<?php
        require('php/configBDD.php');
        $requeteAffichFormationGRETA =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'GRETA'");
        $requeteAffichFormationGRETA->execute();

        while($donneesAffichFormationGRETA = $requeteAffichFormationGRETA->fetch())
        {
            echo $donneesAffichFormationGRETA['nomFormation']; ?><br><?php
        }?>
            

