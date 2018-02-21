<?php

require('configBDD.php');

$requeteUnivTitre = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 1');
$requeteUnivTitre->execute();

$requeteNomUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteNomUniv->execute();

$requeteContenuUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteContenuUniv->execute();


?>

<div class="Contenu_Univ">
    <div class="titreUniv">
        <?php
        while($donnees = $requeteUnivTitre->fetch()){
            ?><h4 class="titreUniv"><?php echo $donnees['nomTypePartenariat'] ?></h4><?php
        }?>
    </div>
    <button class="btnPrecUniv">Précédent</button>
    <div class="nomUniv">
        <?php 
        $i = 0;        
        while($donnees = $requeteNomUniv->fetch()){
            $lien = 'lienUniv'.strval($i);
            ?><p class="<?php echo $lien ?>"><?php echo $donnees['nomPartenariat']; ?></p><?php
            $i = $i + 1;
        }?>
    </div>  
</div>
<div class="contenuUniv">
    <?php
        $l = 0;    
    while($donnees = $requeteContenuUniv->fetch()){
        $lien2 = 'contenuUniv'.strval($l);
        ?><p class="<?php echo $lien2; ?>"><?php echo $donnees['contenu']; ?></p><?php
        $l = $l + 1;
    }?>
</div>

<div class="Contenu_Entreprise">
    
</div>
