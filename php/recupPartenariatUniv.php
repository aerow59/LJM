<?php
$requeteUniv = $bdd->prepare('SELECT * FROM typepartenariat WHERE idTypePartenariat=1');
$requeteUniv->execute();

?><div class="UNIVERSITES"><?php
    while($donnees = $requeteUniv->fetch()){
        ?><p class="titreUniv"><?php echo $donnees['nomTypePartenariat'];?></p><?php
    }?>
</div>