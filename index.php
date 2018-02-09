<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Lycée Jean Moulin</title>
    </head>
    <body>
        <img class="logoisaac" src="images/logojeanmoulin.png" alt="">
        <img class="back" src="images/Sans%20titrem.png" alt="">
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
            <div class="shop">
                <p class="produits"></p>                          
                <div class="pagecasquette">
                    <div class="fermercasq">
                        <img src="" title="Retour au magasin">
                    </div>
                    <div>
                        <img src="images/casquette.png" alt="">
                    </div>                 
                </div>              
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
            
            <div class="mic">
                <img class="imgmic1" src="images/mic.png" alt="" title="Recherche vocale">
                <img class="imgmic2" src="images/mic.png" alt="" title="Recherche vocale">
                <div class="ondes1"></div>
                <div class="ondes2"></div>
            </div>
        </div>
        <script src="js/mn.js"></script>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/javascript.js"></script>
        <script src="js/tilt.jquery.min.js"></script>
    </body>
</html>
