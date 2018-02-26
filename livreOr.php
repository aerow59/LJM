<link rel="stylesheet" href="css/livreOr.css">
<div class="titreOr"><h3>Livre d'or</h3></div>
<style>
.blanc 
{ 
    background-color:#FFFFFF; 
} 
.rouge 
{ 
    background-color:red; 
} 
</style>
<script language="javascript">
    function donneesObligatoire()
    {
        if(form.nom.value===''){
            alert("Nom obligatoire !!");
            document.getElementById('nom').className="rouge";
            document.getElementById('nom').focus();
            
        }
        if(form.prenom.value===''){
            alert("Prénom obligatoire !!");
            document.getElementById('prenom').className="rouge";
            document.getElementById('prenom').focus();
        }
        if(form.niveau.value===''){
            alert("Choix du niveau obligatoire !!");
            document.getElementById('niveau').className="rouge";
            document.getElementById('nivezu').focus();
        }
        if(form.message.value===''){
            alert("Message obligatoire !!");
            document.getElementById('message').className="rouge";
            document.getElementById('message').focus();
        }
        
        //recup du reste des variables 
        var nomRecup=document.getElementById('nom').value;
        var prenomRecup=document.getElementById('prenom').value;
        var niveauRecup=document.getElementById('niveau').value;
        var messageRecup=document.getElementById('message').value;
        
        //Envoie des données pour traitement
        var envoie=getXMLHttpRequest();
        
        envoie.open("POST","gestionLivreOr.php",true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        envoie.send("variableNom="+nomRecup+"&variablePrenom="+prenomRecup+"&variableNiv="+niveauRecup+"&variableMessage="+messageRecup);
        
    }
</script>
<div class="formulaireLO" action="gestionLivreOr.php">
    <form method="POST" id="form">
        <legend>Vos informations : </legend>
        <p><label for="nom">Nom : <input type="text" id="nom" name="nom"/></p>
        <p><label for="prenom">Prénom : <input type="text" id="prenom" name="prenom"/></p>
        <p><label>Quel role aviez-vous au sein du lycée ?</label></p>
        <select name="niveau">
            <option selected></option>
            <option value="Etudiant">Etudiant</option>
            <option value="Eleve">Eleve</option>
            <option value="Professeur">Professeur</option>
            <option value="Parent">Parent</option>
        </select><br><br>
        <textarea name="message" rows="10" cols="50" placeholder="Entrez votre message ici."></textarea>
        <input class="validerEnvoie" type="submit" value="Envoyer" onclick="donneesObligatoire()">
    </form>
</div>