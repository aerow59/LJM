<link rel="stylesheet" href="css/contact.css">
<div class="formContact" id="form">
    <div class="messages">
    </div>
    <form method="POST" action="php/contactEnvoie.php">
        <br><br><br><br><br>
        <h4>Pour toutes éventuelles remarques ou questions, vous pouvez nous contacter via ce petit formulaire en énoncant vos idées.</h4><br>
         Civilité : 
		<input type="radio" name="civi2" value="Mme" /> Madame
		<input type="radio" name="civi2" value="Mlle" /> Mademoiselle
		<input type="radio" name="civi2" value="Mr" /> Monsieur <br>
        
        <label for="nom">Nom</label>
        <input type="text" class="nom" name="nom" placeholder="Nom" id="name"><br><br>
		
		<label for="prenom">Prénom</label>
        <input type="text" class="prenom" name="prenom" placeholder="Prenom" id="FIRSTNAME"><br><br>

        <label for="email">Mail</label>
        <input type="text" class="email" name="email" placeholder="Email" id="email"><br><br>
    
        <textarea name="message" rows="10" cols="50" placeholder="Entrez votre message ici."></textarea><br><br>
        <input class="validerEnvoie" type="submit" value="Envoyer" name="mailform" id="IDMESSAGE">
    </form>
    
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/contact.js"></script>

