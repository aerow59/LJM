<?php

require('configBDD.php');

$requeteUnivTitre = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 1');
$requeteUnivTitre->execute();

$requeteTitreEntr = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 2');
$requeteTitreEntr->execute();

$requeteTitreAssoc = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 3');
$requeteTitreAssoc->execute();

$requeteTitreEtab = $bdd->prepare('SELECT nomTypePartenariat FROM typepartenariat WHERE idTypePartenariat = 3');
$requeteTitreEtab->execute();

$requeteNomUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteNomUniv->execute();

$requeteNomEntr = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 2');
$requeteNomEntr->execute();

$requeteNomAssoc = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 3');
$requeteNomAssoc->execute();

$requeteContenuUniv = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 1');
$requeteContenuUniv->execute();

$requeteContenuEntr = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 2');
$requeteContenuEntr->execute();

$requeteContenuAssoc = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 3');
$requeteContenuAssoc->execute();

$requeteContenuEtab = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 4');
$requeteContenuEtab->execute();

$requeteContenuEtab2 = $bdd->prepare('SELECT * FROM partenariat WHERE idTypePartenariat = 4');
$requeteContenuEtab2->execute();
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


<div class="Contenu_Assoc">
    <?php
        while($donnees = $requeteTitreAssoc->fetch()){
            ?><h4 class="titreAssoc"><?php echo $donnees['nomTypePartenariat'] ?></h4><?php
    }?>
    <button class="btnPrecAssoc">Précédent</button>
    <div class="nomAssoc">
        <?php 
        $t = 0;
        while($donnees = $requeteNomAssoc->fetch()){
            $lien4 = 'nomAssoc'. strval($t);
            ?><p class="<?php echo $lien4 ?>"><?php echo $donnees['nomPartenariat']; ?></p><?php
            $t = $t + 1;
        }?>  
    </div>
</div>
<div class="contenuAssoc">
    <?php
    $v = 0;    
    while($donnees = $requeteContenuAssoc->fetch()){
        $lien3 = 'contenuAssoc'.strval($v);
        ?><p class="<?php echo $lien3; ?>"><?php echo $donnees['contenu']; ?></p><?php
        $v = $v + 1;
    }?> 
</div>

<div class="contenu_AutreEtab">
    <?php 
        while($donnees = $requeteContenuEtab->fetch()){
            ?><p class="titreEtab"><?php echo $donnees['nomPartenariat']; ?></p><?php
        }?> 
    <div class="nomEtab">
        <?php 
        while($donnees = $requeteContenuEtab2->fetch()){
            ?><p class="TexteEtab"><?php echo $donnees['contenu']; ?></p><?php
        }?>  
    </div>        
</div>