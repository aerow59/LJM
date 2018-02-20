<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Lycée Jean Moulin</title>
    </head>
    <body>
        <?php session_start(); ?>
        <img class="logoisaac" src="images/logojeanmoulin.png" alt="">
        <img class="back" src="images/sans titre-9" alt="">
        <div class="contenu">
            <!-- nav GAUCHE-->
            <nav>
                <img class="iconisaac" src="" alt="">
                <div class="home" title="Accueil">
                    <img src="images/home.png" alt="">
                </div>
                <div class="panier" title="Se connecter">
                    <img src="images/connexionlogo.png" alt="">
                </div>
                <div class="calend" title="Calendrier">
                    <img src="images/calendar.png" alt="">
                </div>
                <div class="info" title="Informations">
                    <img src="images/info.png" alt="">
                </div>
            </nav>
            <!--FIN NAV GAUCHE-->
            <div class="slogan">
                <img src="images/maquer2.gif"/>
            </div>
            <!--ACTUALITES-->
            <div class="expositions">
                <?php include('evenements.php'); ?>
            </div>
            
            <!--INFORMATION-->
            <div class="informations">
                <?php include('pageInformation.php'); ?>
            </div>
            <!--FIN INFORMATION-->                     
            
            <!--Connexion-->
            <div class="page_connexion">
                <div class="contenu_connexion">
                    <?php include('pageConnexion.php'); ?>
                </div>    
            </div>
            <!--FIN CONNEXION-->
            
            <!--MENU DROIT-->
            <div class="menuouvrir">
                <img src="images/boutonouvrir.png" alt="" title="Ouvrir destinations">
            </div>
            <div class="menufermer">
                <img src="images/boutonfermer.png" alt="" title="Fermer destinations">
            </div>
            <div class="menu">
              <?php include('menuDroite.php'); ?>
            </div>
            <!--FIN MENU-->

            <!--PAGE GRETA-->
            <div class="GRETA">
                <?php include('greta.php'); ?>
            </div>
            <!--FIN PAGE GRETA-->
            
            <!--PAGE FORMATION-->
            <div class="FORMATION">
                <?php include('formation.php'); ?>
            </div>
            <!--FIN PAGE FORMATION-->
            
            <div class="PARTENARIAT">
                <?php include('partenariat.php'); ?>
            </div>
            
            <div class="STAGES">
                <?php include('stagePFMP.php'); ?>
            </div>
            
            <div class="PRESSE">
                <?php include('panoramaPresse.php'); ?>
            </div>
            
            <div class="LIVREOR">
                <?php include('livreOr.php'); ?>
            </div>
            
            <!--PAGE UFA-->
            <div class="UFA">
                <?php include("ufa.php"); ?>
            </div>
            <!--FIN PAGE UFA-->
                        
            <!--PAGE ¨PARTENARIAT-->
            <div class="PARTENARIATAPPR">
                <?php include("partenariatApprentissage.php"); ?>
            </div>    
            <!--FIN PAGE PARTENARIAT-->
            
            <!--PAGE CDI-->
            <div class="CDI">
                <?php include('cdi.php'); ?>
            </div>
            <!--FIN PAGE CDI-->
            
            <!--PAGE DEPOT STAGE-->
            <div class="DEPOT_STAGE">
                <?php include('depot_Offre_Stage.php'); ?>
            </div>
            <!--FIN PAGE DEPOT STAGE-->
            
            <!--PAGE CONTACT-->
            <div class="CONTACT">
                <?php include('contact.php'); ?>
            </div>
            <!--FIN PAGE CONTACT-->
            
        </div>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/javascript.js"></script>
        <script src="js/tilt.jquery.min.js"></script>
    </body>
</html>
