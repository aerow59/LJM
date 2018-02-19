<?php
$requeteUniv = $bdd->prepare('SELECT * FROM typepartenariat WHERE idTypePartenariat=1');
$requeteUniv->execute();

$requeteTitre = $bdd->prepare("SELECT nomPartenariat FROM partenariat WHERE idTypePartenariat=1");
$requeteTitre->execute();

?><div id="UNIVERSITES"><?php
    while($donnees = $requeteUniv->fetch()){
        ?><h5 class="titreUniv"><?php echo $donnees['nomTypePartenariat'];?></h5><?php
    }
    while($donnees = $requeteTitre->fetch()){
        ?><p class="lienUniv" id="<?php echo $donnees['nomPartenariat']; ?>"><?php echo $donnees['nomPartenariat']; ?></p><?php
    }?>
</div>