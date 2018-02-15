<link rel="stylesheet" href="css/contact.css">
<form method="POST" action="php/contactEnvoie.php">
    <br><br><br><br><br>
    <h4>Ce formulaire vous permet de poser vos questions : </h4><br>
    <label for="nom">Entrez votre nom : </label>
    <input type="text" class="nom" name="nom"><br><br>
    
    <label for="prenom">Entrez votre prénom : </label>
    <input type="text" class="prenom" name="prenom"><br><br>
    
    <label for="email">Entrez votre email : </label>
    <input type="text" class="email" name="email"><br><br>
    
    <textarea name="message" rows="10" cols="50" placeholder="Entrez votre message ici."></textarea><br><br>
    <input class="validerEnvoie" type="submit" value="Envoyer">
</form>

