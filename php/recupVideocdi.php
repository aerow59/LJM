<?php
require('configBDD.php');
$requete2 = $bdd->prepare('SELECT * FROM videocdi WHERE numeroDiv=1');
$requete2->execute();

$nbRows = $requete2->rowCount();

if($nbRows == 0 && $_SESSION['levelUser'] >= 3 ){
    ?><form method="POST" action="php/cdiVideo.php" enctype="multipart/form-data">
            <label for="URLVideo">Entrer le titre de la vidéo : </label><br>
            <input type="text" name="URLVideo" class="URL"><br><br><br>
            <input type="file" name="video" class="uploadV" value="video"><br><br><br><br><br>
            <input type="submit" name="Valider" class="btnValiderV">
    </form><?php
}else{
    while($donnees = $requete2->fetch()){
        $cheminVideo = str_replace("../", "", $donnees['nomVideoOrigine']);
        ?><h3 class="titreVideoDivUne"><?php echo $donnees['titre']; ?></h3><?php
        ?><video width="500" height="250" controls="controls">
            <source src="<?php echo $cheminVideo ?>">
          </video>
        <form method="POST" action="php/supprimerVideoUne.php">
            <input type="submit" value="Supprimer la vidéo">
        </form>
        <?php
    }
}
