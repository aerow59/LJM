<?php
if(isset($_FILES['image']) && $_POST['nomEntreprise'])
{
    $titre = $_POST['nomEntreprise'];
    $nomImage = $_FILES['image']['name'];
    //var_dump($_FILES['image']);
    $video_filename = stripslashes($nomImage);
    $extension_upload = strtolower(substr(strrchr($_FILES['image']['name'],'.'),1));
    $extension_valides = array('jpg','jpeg','png','svg','bmp','gif');
    if(!in_array($extension_upload, $extension_valides))
    {
        echo "L'extension n'est pas au bon format !!!";
    }
    else
    {
        $chemin = "../upload/".$nomImage;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $chemin))
        {
            //Appel du fichier de configuration
            require('configBDD.php');
            //requete d'insertion
            $requete = $bdd->prepare("INSERT INTO partenariatapprentissage(nomPartenariat, nomChemin) VALUES ('$titre','$chemin')");
            $requete->execute();
            header('Location: ../index.php');
        }
        else
        {
            echo $chemin;
        }
    }      
}
else
{
    echo 'Le formulaire est vide !';
}