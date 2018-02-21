<link rel="stylesheet" href="css/livreOr.css">
<div class="titreOr"><h3>Livre d'or</h3></div>
<div class="formulaireLO">
    <form method="POST" action="php/gestionLivreOr.php">
        <legend>Vos informations : </legend>
        <p><label for="nom">Nom : <input type="text" id="nom" name=""/></p>
        <p><label for="prenom">Prénom : <input type="text" id="prenom" name=""/></p>
        <p><label>Qui étais vous ?</label></p>
        <select name="niveau">
            <option selected></option>
            <option value="Etudiant">Etudiant</option>
            <option value="Eleve">Eleve</option>
            <option value="Professeur">Professeur</option>
            <option value="Parent">Parent</option>
        </select><br><br>
        <textarea name="message" rows="10" cols="50" placeholder="Entrez votre message ici."></textarea>
        <input class="validerEnvoie" type="submit" value="Envoyer">
    </form>
</div>