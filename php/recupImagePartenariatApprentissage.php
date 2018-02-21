<?php
require('configBDD.php');
//$requeteAffichImagePart = $bdd->prepare('SELECT * FROM partenariatapprentissage PA INNER JOIN multimediapartenariatapprentissage MPA ON PA.idPartenariat=MPA.idPartenariat');
$requeteAffichImagePart = $bdd->prepare('SELECT nomMultimediaApp FROM multimediapartenariatapprentissage ');
$requeteAffichImagePart->execute();

?><?php
        if(isset($_SESSION['levelUser']))
        {
            if($_SESSION['levelUser']>=3)
            {
                ?>
                <div class="formImagePartenariat">
                    <form method="POST" action="php/imagePart.php" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><label for="nomEntreprise">Nom de l'entreprise : </label></td>
                                <td><input type="text" name="nomEntreprise" class="URL"></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="image" class="uploadI" value="video"></td> 
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="Valider" class="btnValiderV"></td>
                            </tr>
                        </table>
                    </form>             
                </div>
                <div class="affichImage"><?php
                    while($donnees = $requeteAffichImagePart->fetch())
                    {
                        $cheminImage = str_replace("../", "", $donnees['nomMultimediaApp']);
                        ?><img src="<?php echo $cheminImage ?>" width="60%" height="auto"/>
                            <?php
                            if(isset($_SESSION['levelUser']))
                            {
                                if($_SESSION['levelUser']>=3)
                                {
                                    ?>
                                    <form method="POST" action="php/supprimerImagePartenariat.php">
                                        <input type="submit" value="Supprimer l'image">
                                    </form>
                            <?php
                                }
                            }   
                    }?>
            </div>
                <?php
            }
        }
        else
        {?>
          <div class="affichImage"><?php
            while($donnees = $requeteAffichImagePart->fetch())
            {
                $cheminImage = str_replace("../", "", $donnees['nomMultimediaApp']);
                ?><img src="<?php echo $cheminImage ?>" width="60%" height="auto"/>
                    <?php
                    if(isset($_SESSION['levelUser'])){
                        if($_SESSION['levelUser']>=3){
                            ?>
                            <form method="POST" action="php/supprimerImagePartenariat.php">
                                <input type="submit" value="Supprimer l'image">
                            </form><?php
                        }
                    }   
            }?>
        </div><?php  
        }
        ?>

<?php
    


