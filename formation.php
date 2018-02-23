<link rel="stylesheet" href="css/formation.css">
<?php require ('php/configBDD.php'); ?>

<div class="titreFormation"><h3>FORMATION</h3></div>

<div class="PROFESSIONNELLES"> PROFESSIONNELLES </div>
<div class="GENERALES_ET_TECHNOLOGIQUES"> GENERALES <br> ET TECHNOLOGIQUES </div>
<div class="trait1"></div>

    <div class="superieur"> 
        <?php
        $requeteAffichFormationSup =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Supérieures'");
        $requeteAffichFormationSup->execute();

        while($donneesAffichFormationSup = $requeteAffichFormationSup->fetch())
        {
            echo $donneesAffichFormationSup['nomFormation']; ?><img src="images/delete.png" /></div><br><?php
        }?>
    </div>

    <div class="generalestechno">
        <?php
        $requeteAffichFormationGT =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Générales et technologiques'");
        $requeteAffichFormationGT->execute();

        while($donneesAffichFormationGT = $requeteAffichFormationGT->fetch())
        {
            echo $donneesAffichFormationGT['nomFormation']; ?><img onclick="suppresion(this)" class="<?php echo $donneesAffichFormationGT['nomFormation']; ?>" src="images/delete.png"/><br><?php
        }?>
    </div>
    <div class="pro"> 
        <?php
        $requeteAffichFormationPro =$bdd->prepare("SELECT nomFormation FROM formation f INNER JOIN typeformation tf ON f.idTypeFormation=tf.idTypeFormation WHERE nomTypeFormation = 'Professionnelles'");
        $requeteAffichFormationPro->execute();

        while($donneesAffichFormationPro = $requeteAffichFormationPro->fetch())
        {
            echo $donneesAffichFormationPro['nomFormation']; ?><img src="images/delete.png"/><br><?php
        }?>
            
            
    </div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/suppresionFormation.js"></script>