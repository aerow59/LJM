<?php 
if(!isset($_SESSION['nomUser']) && !isset($_SESSION['prenomUser'])){?>
   <form method="POST" action="php/connexionPhp.php">
    <link rel="stylesheet" href="css/connexion.css">
    <div class="connexion"><h7>Connexion</h7></div>
    <div class="textco"> <p>Connectez vous pour pouvoir accéder à vos <br> informations et/ou à moodle.</p></div>
        <input class="Rectangle_arrondi_2" type="text" name="identifiantU"><br><br>
        <input class="Rectangle_arrondi_1" type="password" name="mdpU"><br><br>
        <input class="boutonvalider" type="image" src="images/validerblanc.png" value="Valider"> 
    </form>
    <div class="aide">
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_1"><img src="images/cercleViolet.png"></div> <div class="petittexte"> <p>Pas encore inscrit ?</p> </div></div>
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_2"><img src="images/cercleBleu.png"></div> <div class="petittexte2"> <p>Mot de passe perdu ?</p> </div></div>
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_3"><img src="images/cercleJaune.png"></div><div class="petittexte3"> <p>Besoin d'aide ? </p> </div></div>
    </div> 

<?php } 
else{?>

 
<h2><B>Vos informations : </B></h2> <br>
    <div class="titreCoPers"><h2>Vous etes connecté</h2></div>
    <div class="connexion3">
        <h2>Nom : <?php echo $_SESSION['nomUser']; ?></h2>
        <h2>Prenom : <?php echo $_SESSION['prenomUser']; ?></h2>
        <h2>Nom du niveau : <?php echo $_SESSION['nomLevelUser']; ?></h2>
        <h2>N° niveau : <?php echo $_SESSION['levelUser']; ?></h2><br>

        <a href="http://www.jean-moulin-roubaix.savoirsnumeriques5962.fr"><h2>Acceder a l'ENT</h2></a>
        
    </div>    

    
<?php }?>
    <script>
    
    </script>

