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
                <div class="pagesac">
                    <div class="fermersac">
                        <img src="images/retour.png" title="Retour au magasin">
                    </div>
                    <div>
                        <img src="images/sac.png" alt="">
                    </div>
                    <div class="descrsac">
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                        <div class="commandesac">
                            <div class="prixsac">
                                <P></P>
                                <p></p>
                                <p></p>
                            </div> 
                            <div class="quantsac">
                                <p></p>
                                <input type="number" name="Nombre" value="0">
                            </div>
                            <input type="button" name="Panier" value="AJOUTER AU PANIER">           
                        </div>
                    </div>
                </div>
                <div class="pageverre">
                    <div class="fermerverre">
                        <img src="images/retour.png" title="Retour au magasin">
                    </div>
                    <div>
                        <img src="images/verres.png" alt="">
                    </div>
                    <div class="descrverre">
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae itaque illum minima dolorum veniam inventore animi, voluptas eaque quod in nihil laborum vel dignissimos quibusdam expedita impedit, ab, quae omnis?</p>
                        <div class="commandeverre">
                            <div class="prixverre">
                                <P></P>
                                <p></p>
                                <p></p>
                            </div>
                            
                            <div class="quantverre">
                                <p></p>
                                <input type="number" name="Nombre" value="0">
                            </div>
                            <input type="button" name="Panier" value="AJOUTER AU PANIER">           
                        </div>
                    </div>
                </div>
            </div>
            <div class="expositions">
                <?php include('evenements.php'); ?>
            </div>
            <div class="informations">
                <?php include('pageInformation.php'); ?>
            </div>
            <div class="page_connexion">
                <div class="contenu_connexion">
                    <?php include('pageConnexion.php'); ?>
                </div>    
            </div>
            <div class="menuouvrir">
                <img src="images/boutonouvrir.png" alt="" title="Ouvrir destinations">
            </div>
            <div class="menufermer">
                <img src="images/boutonfermer.png" alt="" title="Fermer destinations">
            </div>
            <div class="menu">
              <?php include('menuDroite.php'); ?>
            </div>
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
