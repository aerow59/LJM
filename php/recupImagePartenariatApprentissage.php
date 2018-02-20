<?php
require('configBDD.php');
//$requeteAffichImagePart = $bdd->prepare('SELECT * FROM partenariatapprentissage PA INNER JOIN multimediapartenariatapprentissage MPA ON PA.idPartenariat=MPA.idPartenariat');
$requeteAffichImagePart = $bdd->prepare('SELECT nomMultimediaApp FROM multimediapartenariatapprentissage ');
$requeteAffichImagePart->execute();

$nbRowsDiv1 = $requeteAffichImagePart->rowCount();
?><?php
    if($nbRowsDiv1 == 0){
        if(isset($_SESSION['levelUser'])){
            if($_SESSION['levelUser']>=3){
                ?>
<div class="formImagePartenariat">
    <form method="POST" action="php/imagePart.php" enctype="multipart/form-data">
        <label for="nomEntreprise">Nom de l'entreprise : </label><input type="text" name="nomEntreprise" class="URL">
        <input type="file" name="image" class="uploadI" value="video"><br>
        <input type="submit" name="Valider" class="btnValiderV">
    </form>             
</div>
                <?php
            }
        }else{
            ?><h3>Aucune vidéo n'est disponible</h3><?php
        }
    }else{
        while($donnees = $requeteAffichImagePart->fetch()){
            $cheminImage = str_replace("../", "", $donnees['nomMultimediaApp']);
            ?><img src="<?php echo $cheminImage ?>"/>
                <?php
                if(isset($_SESSION['levelUser'])){
                    if($_SESSION['levelUser']>=3){
                        ?>
                        <form method="POST" action="php/supprimerImagePartenariat.php">
                            <input type="submit" value="Supprimer l'image">
                        </form><?php
                    }
                }   
        }
    }


