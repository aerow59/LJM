<link rel="stylesheet" href="css/formation.css">
<?php require ('php/configBDD.php'); ?>

<div class="titreFormation"><h3>FORMATION</h3></div>

<div class="PROFESSIONNELLES"> PROFESSIONNELLES </div>
<div class="GENERALES_ET_TECHNOLOGIQUES"> GENERALES <br> ET TECHNOLOGIQUES </div>
<div class="SUPERIEURES">SUPÉRIEURES</div>
<div class="trait1"></div>

    <div class="superieur"> 
        <?php
        $requeteAffichFormationSup =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Supérieures'");
        $requeteAffichFormationSup->execute();

        while($donneesAffichFormationSup = $requeteAffichFormationSup->fetch())
        {
            ?><div class="<?php echo $donneesAffichFormationSup['nomFormation']; ?>"><?php echo $donneesAffichFormationSup['nomFormation']; ?><img class="suppresion" src="images/delete.png" width="4%" height="auto"/> <img class="modif" src="images/write.png" width="20px" height="auto"/></div><br><?php
        }?>
    </div>

    <div class="generalestechno">
        <?php
        $requeteAffichFormationGT =$bdd->prepare("SELECT nomFormation,contenu FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Générales et technologiques'");
        $requeteAffichFormationGT->execute();

        while($donneesAffichFormationGT = $requeteAffichFormationGT->fetch())
        {
            ?><div class="<?php echo $donneesAffichFormationGT['nomFormation']; ?>"><div class="titreF"><?php echo $donneesAffichFormationGT['nomFormation'];?>
                <?php if(isset($_SESSION['levelUser'])){   
                    if($_SESSION['levelUser']==4){
                        ?><img class="suppresion" src="images/delete.png" width="20px" height="auto"/><img class="modif" src="images/write.png" width="20px" height="auto"/><?php
                    }                   
                } ?></div><br>                      
                    <div class="contenuFDiv"><?php echo $donneesAffichFormationGT['contenu']; ?></div><?php
            ?></div><?php           
        }?>
    </div>
    <div class="pro"> 
        <?php
        $requeteAffichFormationPro =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Professionnelles'");
        $requeteAffichFormationPro->execute();

        while($donneesAffichFormationPro = $requeteAffichFormationPro->fetch())
        {
            ?><div class="<?php echo $donneesAffichFormationPro['nomFormation']; ?>"> <?php echo $donneesAffichFormationPro['nomFormation']; ?><img class="suppresion" src="images/delete.png" width="20px" height="auto"/> <img class="modif" src="images/write.png" width="3%" height="auto"/></div><br><?php
        }?>
            
            
    </div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/suppresionModifFormation.js"></script>
