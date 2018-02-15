<link rel="stylesheet" href="css/cdi.css">
<div class="titreGreta"><h3>CDI</h3></div>
<div id="affichContenuDivUne" onload="cacheDiv()">
    <label for="selectType">Selectionner le type de contenu a ajouter :</label>
    <SELECT name="selectType" id="listeTypeUne" onchange="changeType()">
        <option value="Vidéo">Vidéo</option>
        <option value="Image">Image</option>
        <option value="Texte" selected>Texte</option>
    </SELECT>
</div>
<div id="affichContenuDivUne2">
    <p>TEST</p>
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/cdiModifType.js"></script>
