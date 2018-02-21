<?php

require('configBDD.php');

$requeteUnivTitre = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 1');
$requeteUnivTitre->execute();

$requeteTitreEntr = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 2');
$requeteTitreEntr->execute();

$requeteNomUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteNomUniv->execute();

$requeteNomEntr = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 2');
$requeteNomEntr->execute();

$requeteContenuUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteContenuUniv->execute();

$requeteContenuEntr = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 2');
$requeteContenuEntr->execute();


?>

<div class="Contenu_Univ">
        <?php
        while($donnees = $requeteUnivTitre->fetch()){
            ?><h4 class="titreUniv"><?php echo $donnees['nomTypePartenariat'] ?></h4><?php
        }?>
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
    <?php while($donnees = $requeteTitreEntr->fetch()){
        ?><h4 class="titreEntr"><?php echo $donnees['nomTypePartenariat']; ?></h4><?php
    }?>
        <button class="btnPrecEntr">Précédent</button>
        <div class="nomEntr">
            <?php 
            $p = 0;
            while($donnees = $requeteNomEntr->fetch()){
                $lien3 = 'nomEntr'. strval($p);
                ?><p class="<?php echo $lien3 ?>"><?php echo $donnees['nomPartenariat']; ?></p><?php
                $p = $p + 1;
            }?>
        </div>
</div>
<div class="contenuEntr">
    <?php
    $u = 0;    
    while($donnees = $requeteContenuEntr->fetch()){
        $lien3 = 'contenuEntr'.strval($u);
        ?><p class="<?php echo $lien3; ?>"><?php echo $donnees['contenu']; ?></p><?php
        $u = $u + 1;
    }?>      
</div>