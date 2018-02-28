<link rel="stylesheet" href="css/contact.css">
<div class="formContact" id="form">
    <div class="messages">
    </div>
    <form method="POST" action="php/contactEnvoie.php">
        <br><br><br><br><br>
        <h4>Ce formulaire vous permet de poser vos questions : </h4><br>
        
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" class="prenom" name="prenom" placeholder="Prenom" id="FIRSTNAME"><br><br>
        
        <label for="nom">Entrez votre nom : </label>
        <input type="text" class="nom" name="nom" placeholder="Nom" id="name"><br><br>

        <label for="email">Entrez votre email : </label>
        <input type="text" class="email" name="email" placeholder="Email" id="email"><br><br>
    
        <textarea name="message" rows="10" cols="50" placeholder="Entrez votre message ici."></textarea><br><br>
        <input class="validerEnvoie" type="submit" value="Envoyer" name="mailform" id="MESSAGE">
    </form>
    
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/contact.js"></script>

