<link rel="stylesheet" href="css/formation.css">

<div class="titreFormation"><h3>FORMATION</h3></div>

<div class="carre1"> </div>
<div class="carre2"> </div>
<div class="carre3"> </div>

<div class="titreFormation"><h3>FORMATION</h3></div><br><br><br>
<?php require ('Config_SQL.php'); 
/*
 * Affiche les 3 types de formation simples
 */
$requeteAffichTypeFormation = $bdd->prepare("SELECT nomTypeFormation WHERE nomTypeFormation = 'Générales et Technologiques' AND nomTypeformation = 'Professionnelles' "
        . "AND nomTypeFormation='Supérieurs'");
$requeteAffichTypeFormation->execute();
while($donneesAffichTypeFormation = $requeteAffichFormation->fetch())
{
    echo $donneesAffichTypeFormation['nomTypeFormation'];?><br><?php
}

$requeteAffichFormation =$bdd->prepare("SELECT nomFormation FROM formation");
$requeteAffichFormation->execute();

while($donneesAffichFormation = $requeteAffichFormation->fetch())
{
    echo $donneesAffichFormation['nomFormation'];?><br><?php
}?>

<div class="titreFormation"><h3>FORMATION</h3></div><br><br><br>
<?php require ('php/configBDD.php'); 
$requeteAffichFormation =$bdd->prepare("SELECT nomFormation FROM formation");
$requeteAffichFormation->execute();

while($donneesAffichFormation = $requeteAffichFormation->fetch())
{
    echo $donneesAffichFormation['nomFormation'];?><br><?php
}
