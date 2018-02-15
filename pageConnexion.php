<?php 
if(!isset($_SESSION['nomUser']) && !isset($_SESSION['prenomUser'])){?>
   <form method="POST" action="php/connexionPhp.php">
    <link rel="stylesheet" href="css/connexion.css">
    <div class="connexion"><h2>Connexion</h2></div>
    <div class="textco"> <p>Connectez vous pour pouvoir accéder à vos <br> informations et/ou à moodle.</p></div>
        <input class="Rectangle_arrondi_2" type="text" name="identifiantU"><br><br>
        <input class="Rectangle_arrondi_1" type="password" name="mdpU"><br><br>
        <input class="boutonvalider" type="image" src="images/validerblanc.png" value="Valider"> 
    </form>
    <div class="aide">
        <div class="Ellipse_1">    <img src="images/cercleViolet.png">Pas encore inscrit ?</div>
        <div class="Ellipse_2"> <img src="images/cercleBleu.png">Mot de passe perdu ?</div>
        <div class="Ellipse_3"> <img src="images/cercleJaune.png">Besoin d'aide ?</div>
    </div> 
<?php } 
else{?>
<h3>Vos informations : </h3> <br>
    <div class="titreCoPers"><p>Vous etes connecté</p></div>
    
        <p>Nom : <?php echo $_SESSION['nomUser']; ?></p>
        <p>Prenom : <?php echo $_SESSION['prenomUser']; ?></p>
        <p>Niveau : <?php echo $_SESSION['levelUser']; ?></p>
        <a href="http://www.jean-moulin-roubaix.savoirsnumeriques5962.fr"><h2>Acceder a l'ENT</h2></a>
        <?php 
        echo "Nike ta mère";
        if($_SESSION['levelUser']==4)
        {
            echo "Level User";
        }
    ?>
       
    
    
    
<?php }


