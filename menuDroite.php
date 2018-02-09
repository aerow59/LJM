<?php

require('php/configBDD.php');

$requete = $bdd->prepare("SELECT * FROM menucentral");
$requete->execute();

?>
<lu><?php
    while($donnees = $requete->fetch()){
        ?><li><a href="<?php echo$donnees['redirectionMenuCentral']; ?>"><?php echo$donnees['nomLienMenuCentral']; ?></a></li><br><?php
    }
?>
</lu>
