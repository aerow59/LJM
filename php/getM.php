<?php
require('configBDD.php');

$req = $bdd->prepare("SELECT * FROM menu WHERE 1");
$req->execute();
?><div class="menuArt"><?php
    while ($donnees=$req->fetch()){
        ?><p><?php echo $donnees['nomPartieMenu']; ?></p><?php
    }?>
</div>

