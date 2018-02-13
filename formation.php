<link rel="stylesheet" href="css/formation.css">

<div class="titreFormation"><h3>FORMATION</h3></div>

<div class="carre1"> </div>
<div class="carre2"> </div>
<div class="carre3"> </div>

<div class="PROFESSIONNELLES"> PROFESSIONNELLES </div>
<div class="GENERALES_ET_TECHNOLOGIQUES"> GENERALES <br> ET TECHNOLOGIQUES </div>
<div class="trait1">
<?php require ('php/configBDD.php'); 
$requeteAffichFormation =$bdd->prepare("SELECT nomFormation FROM formation");
$requeteAffichFormation->execute();

while($donneesAffichFormation = $requeteAffichFormation->fetch())
{
    echo $donneesAffichFormation['nomFormation'];?><br><?php
}
