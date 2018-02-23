<?php
require('php/configBDD.php');

$requeteNomTypeFormation = $bdd->prepare('SELECT * FROM typeformation');
$requeteNomTypeFormation->execute();

?>
<br>
<form class="ajoutF" method="GET" action="php/panelAdmin/envoieFormation.php">
    <label class="labelF" for="typeF">Le type de formation : </label>
    <SELECT class="typeF" name="typeF"><?php
        while($donnees = $requeteNomTypeFormation->fetch()){
            ?><OPTION value="<?php echo $donnees['idTypeFormation']; ?>"><?php echo $donnees['nomTypeFormation']; ?></OPTION><?php
        }?>
    </SELECT><br><br>
    <label for="nomF" class="labelN">Nom : </label>
    <input type="text" class="nomF" name="nomF"><br><br>

    <label class="contenuF" for="contenuF">Contenu : </label><br>
    <textarea name="contenuF" rows="5" cols="10"></textarea><br><br>
    <input type="submit" value="Valider" class="subF">
</form>