<link rel="stylesheet" href="css/formation.css">
<div class="titreFormation"><h3>FORMATION</h3></div><br><br><br>
<?php require ('php/configBDD.php'); 
$requeteAffichFormation =$bdd->prepare("SELECT nomFormation FROM formation");
$requeteAffichFormation->execute();

while($donneesAffichFormation = $requeteAffichFormation->fetch())
{
    echo $donneesAffichFormation['nomFormation'];?><br><?php
}
