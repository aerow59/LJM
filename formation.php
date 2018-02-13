<link rel="stylesheet" href="css/formation.css">

<div class="titreFormation"><h3>FORMATION</h3></div>

<div class="carre1"> </div>
<div class="carre2"> </div>
<div class="carre3"> </div>

<div class="PROFESSIONNELLES"> PROFESSIONNELLES </div>
<div class="GENERALES_ET_TECHNOLOGIQUES"> GENERALES <br> ET TECHNOLOGIQUES </div>
<div class="trait1"></div>

<?php require ('php/configBDD.php'); 
    /*
     * Affiche les formations Pro
     */
    echo "Formation Pro : ";?><br><?php
    $requeteAffichFormationPro =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Professionnelles'");
    $requeteAffichFormationPro->execute();

    while($donneesAffichFormationPro = $requeteAffichFormationPro->fetch())
    {
        echo $donneesAffichFormationPro['nomFormation']; ?><br><?php
    }
    
    /*
     *Affiche les formations generales et techno 
     */
    echo "Formation GT : ";?><br><?php
    $requeteAffichFormationGT =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Générales et technologiques'");
    $requeteAffichFormationGT->execute();

    while($donneesAffichFormationGT = $requeteAffichFormationGT->fetch())
    {
        echo $donneesAffichFormationGT['nomFormation']; ?><br><?php
    }
    
    /*
     *Affiche les formations supérieurs
     */
    echo "Formation Supérieurs : ";?><br><?php
    $requeteAffichFormationSup =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Supérieurs'");
    $requeteAffichFormationSup->execute();

    while($donneesAffichFormationSup = $requeteAffichFormationSup->fetch())
    {
        echo $donneesAffichFormationSup['nomFormation']; ?><br><?php
    }
