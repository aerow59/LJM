<link rel="stylesheet" href="css/stages.css">
<div class="titreStages"><h3>Voir les propositions de stages actuelles : </h3></div><br>
<?php

require('php/configBDD.php');
$requeteStage = $bdd->prepare('SELECT * FROM offreentreprise WHERE etatOffre = 1');
$requeteStage->execute();

?>
<div class="stagesC"><?php
    while($donneesStage = $requeteStage->fetch()){
    ?><p>Objet du stage :</p><?php echo $donneesStage['objetStage']; ?>
    <p>Déposé par :</p><?php echo $donneesStage['nomEntreprise']; ?>
    <p>Les caractéristiques requises sont : </p><?php echo $donneesStage['contenuOffreEntreprise'];
}?>
</div>
