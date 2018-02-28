<?php
require('configBDD.php');
//$requeteAffichImagePart = $bdd->prepare('SELECT * FROM partenariatapprentissage PA INNER JOIN multimediapartenariatapprentissage MPA ON PA.idPartenariat=MPA.idPartenariat');
$requeteAffichImagePart = $bdd->prepare('SELECT nomPartenariat,nomChemin FROM partenariatapprentissage ');
$requeteAffichImagePart->execute();

?><?php
    if(isset($_SESSION['levelUser']))
    {
        if($_SESSION['levelUser']>=3)
        {
            ?>
            <div class="formImagePartenariat">
                <form method="POST" action="php/imagePart.php" enctype="multipart/form-data">
                            <label for="nomEntreprise">Nom de l'entreprise : </label>
                            <input type="text" name="nomEntreprise" class="InputTitreEntreprise" required="required">
                            <input type="file" name="image" class="uploadI" value="video" required="required">
                            <input type="submit" name="Valider" class="btnValiderE">
                </form>             
            </div>
            <div class="affichImage"><?php
                while($donnees = $requeteAffichImagePart->fetch())
                {
                    $cheminImage = str_replace("../", "", $donnees['nomChemin']);
                    ?>
                    <p class="titreImagePartenariat"><?php echo $donnees['nomPartenariat'] ?></p>
                    <img class="imgPartenariat" src="<?php echo $cheminImage ?>" width="100%" height="auto"/><br>
                        <?php
                        if(isset($_SESSION['levelUser']))
                        {
                            if($_SESSION['levelUser']>=3)
                            {
                                ?>
                    <button class="suprParte">Supprimer cette image</button>
                        <?php
                            }
                        }   
                }?>
        </div>
            <?php
        }
    }
    else
        //Affichage tout publics
    {?>
      <div class="affichImage"><?php
        while($donnees = $requeteAffichImagePart->fetch())
        {
            $cheminImage = str_replace("../", "", $donnees['nomChemin']);
    ?>      <p><?php echo $donnees['nomPartenariat'] ?></p>
            <img src="<?php echo $cheminImage ?>" width="60%" height="auto"/>
    <?php  
        }?>
    </div><?php  
    }
    ?>
<script src="../LJM/js/jquery-3.2.1.js"></script>
<script src="../LJM/js/suppressionImagePartenariatApp.js"></script>



