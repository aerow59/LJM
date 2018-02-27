<link rel="stylesheet" href="css/depotStage.css">
<div class="titreDepotStage"><h3>Deposer une offre de stage</h3></div>
<div class="formStage">
    <form method="POST" action="php/ajoutOffre.php">
            <label for="nomSoc">Nom de votre société : </label>
            <input type="text" name="nomSoc"><br><br>
            <label for="nomSoc">Votre e-mail : </label>
            <input type="email" name="emailSoc"><br><br>
            <label for="telSoc">Votre numéro de téléphone : </label>
            <input type="tel" name="telSoc"><br><br>
            <label for="caractSoc">Indiquez les caractéristiques requises pour le stage :</label><br>
            <textarea name="caractSoc"></textarea><br><br>
            <label for="fichierSoc">(Optionel) indiquez d'autre informations sur un fichier (Word,fichier texte ou image) : </label><br>
            <input type="file" name="fichierSoc"><br><br>
            <input type="submit" value="Valider">
</form>
</div>