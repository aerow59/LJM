<link rel="stylesheet" href="css/cdi.css">
<div class="titreGreta"><h3>CDI</h3></div>
<div id="affichContenuDivUne" onload="cacheDiv()">
    <label for="selectType">Selectionner le type de contenu a ajouter :</label>
    <SELECT name="selectType" id="listeTypeUne">
        <option value="Vidéo">Vidéo</option>
        <option value="Image">Image</option>
        <option value="Texte" selected>Texte</option>
    </SELECT>
</div>
<div id="affichContenuDivUneImage">
    <form method="POST" action="#">
        <label class="titreI" for="titre">Titre de l'image : </label>
        <input type="text" name="titre">
        <br><br>
        <input type="file" name="imageU"><br>
        <p>Commentaire : </p>
        <textarea name="commentaire" rows="3" cols="50"></textarea>
        <input class="validerImage" type="submit" value="Valider">
    </form>
</div>
<div id="affichContenuDivUneTexte">
    <label for="texteDivUne"></label>
    <textarea name="texteDivUne" rows="3" cols="50"></textarea>
    <input class="validerImage" type="submit" value="Valider">
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/cdiModifType.js"></script>
