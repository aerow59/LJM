<?php 
if(!isset($_SESSION['nomUser']) && !isset($_SESSION['prenomUser'])){?>
   <form method="POST" action="php/connexionPhp.php">
    <link rel="stylesheet" href="css/connexion.css">
    <div class="connexion"><h7>Connexion</h7></div>
    <div class="textco"> <p>Bienvenue sur le site du Lycée Jean Moulin de Roubaix. <br> 
	Ici, vous pouvez trouver un accès à vos informations <br>
	personnelles ainsi que d'autres ressources utiles, <br>
	comme l'accès à Moodle ou l'ENT.</p></div>
        
		<input class="Rectangle_arrondi_2" type="text" placeholder=" Identifiant" name="identifiantU"><br><br>
        <input class="Rectangle_arrondi_1" type="password"  placeholder=" Mot de passe" name="mdpU"><br><br>
        <input class="boutonvalider" type="image" src="images/validerblanc.png" value="Valider"> 
    </form>
    <div class="aide">
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_1"><img src="images/cercleViolet.png"></div> <div class="petittexte"> <p>Pas encore inscrit ?</p> </div></div>
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_2"><img src="images/cercleBleu.png"></div> <div class="petittexte2"> <p>Mot de passe perdu ?</p> </div></div>
        <div onclick="alert('Veuillez contacter votre administrateur réseau')"><div class="Ellipse_3"><img src="images/cercleJaune.png"></div><div class="petittexte3"> <p>Besoin d'aide ? </p> </div></div>
    </div> 

<?php } 
else{?>

    
<?php }?>
<div class="panelAdmin1"><?php
    if(isset($_SESSION['nomUser']) && isset($_SESSION['prenomUser'])){
        ?>
        <div class="titrePanelAdmin1">Panel administration des formations :</div>       
        <?php
        if($_SESSION['levelUser']==4)
        {
            include('php/panelAdmin/recupFormation.php');
        }
        else{
            echo "Vous n'avez pas les droits necessaires afin d'ajouter des formations !";
        }
        
    }?>
</div>

<div class="ESPACE_INFO"><?php
    if(isset($_SESSION['nomUser']))
        {?>
    <h2 class="titreINFO">Vos informations : </h2> <br>
    <div class="connexion3">
        <h2 class="infoE0">Nom : <?php echo $_SESSION['nomUser']; ?></h2>
        <h2 class="infoE1">Prenom : <?php echo $_SESSION['prenomUser']; ?></h2>
        <h2 class="infoE2">Nom du niveau : <?php echo $_SESSION['nomLevelUser']; ?></h2><br><br>
        <a href="php/deconnexion.php"><h2 class="infoE2">Se déconnecter</h2></a>
    </div>
        <div class="lienUtiles">
            <p class="titreUtile">Liens utiles :</p>
            <a class="lienInfo" href="http://www.jean-moulin-roubaix.savoirsnumeriques5962.fr" target="_blank"><h2>Accéder à l'ENT</h2></a>
            <a class="lienInfo" href="https://extranet.lycee-jean-moulin.com:8443/intranet/" target="_blank"><h2>Accéder à l'Intranet du lycée</h2></a>
            <a class="lienInfo" href="http://www.google.fr" target="_blank"><h2>Accéder à Google</h2></a>
            <a class="lienInfo" href="#" target="_blank"><h2>Accéder à Moodle</h2></a>
        </div>   
    <?php }?>
</div>
