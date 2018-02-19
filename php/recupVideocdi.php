<?php
require('configBDD.php');
$requeteDiv1 = $bdd->prepare('SELECT * FROM videocdi WHERE numeroDiv=1');
$requeteDiv1->execute();

$nbRowsDiv1 = $requeteDiv1->rowCount();
?><div id="affichContenuDivUne"><?php
    if($nbRowsDiv1 == 0){
        if(isset($_SESSION['levelUser'])){
            if($_SESSION['levelUser']>=3){
                ?><form method="POST" action="php/cdiVideo.php" enctype="multipart/form-data">
                <label for="URLVideo">Entrer le titre de la vidéo : </label><br>
                <input type="text" name="URLVideo" class="URL"><br><br><br>
                <input type="file" name="video" class="uploadV" value="video"><br><br><br><br><br>
                <input type="submit" name="Valider" class="btnValiderV">
            </form><?php
            }
        }else{
            ?><h3>Aucune vidéo n'est disponible</h3><?php
        }
    }else{
        while($donnees = $requeteDiv1->fetch()){
            $cheminVideo = str_replace("../", "", $donnees['nomVideoOrigine']);
            ?><h3 class="titreVideoDivUne"><?php echo $donnees['titre']; ?></h3><?php
            ?><video width="500" height="250" controls="controls">
                <source src="<?php echo $cheminVideo ?>">
            </video>
                <?php
                if(isset($_SESSION['levelUser'])){
                    if($_SESSION['levelUser']>=3){
                        ?>
                        <form method="POST" action="php/supprimerVideoUne.php">
                            <input type="submit" value="Supprimer la vidéo">
                        </form><?php
                    }
                }   
        }
    }?>
</div><?php

$requeteDiv2 = $bdd->prepare("SELECT * FROM videocdi WHERE numeroDiv=2");
$requeteDiv2->execute();
$nbRowsDiv2 = $requeteDiv2->rowCount();

?>
<div id="affichContenuDivDeux"><?php
    if($nbRowsDiv2 == 0){
        if(isset($_SESSION['levelUser'])){
            if($_SESSION['levelUser'] >=3 ){
                ?><form method="POST" action="php/cdiVideo2.php" enctype="multipart/form-data">
                <label for="URLVideo">Entrer le titre de la vidéo : </label><br>
                <input type="text" name="URLVideo" class="URL"><br><br><br>
                <input type="file" name="video" class="uploadV" value="video"><br><br><br><br><br>
                <input type="submit" name="Valider" class="btnValiderV">
            </form><?php  
            }
        }else{
            ?><h3>Aucune vidéo n'est disponible</h3><?php
        }
    }else{
        while($donnees = $requeteDiv2->fetch()){
            $cheminVideo = str_replace("../", "", $donnees['nomVideoOrigine']);
            ?><h3 class="titreVideoDivUne"><?php echo $donnees['titre']; ?></h3><?php
            ?><video width="500" height="250" controls="controls">
                <source src="<?php echo $cheminVideo ?>">
            </video>
            <?php if(isset($_SESSION['levelUser'])){
                    if($_SESSION['levelUser']>=3){
                        ?>
                        <form method="POST" action="php/supprimerVideoDeux.php">
                            <input type="submit" value="Supprimer la vidéo">
                        </form><?php
                    }
                }
        }
    }?>    
</div>
