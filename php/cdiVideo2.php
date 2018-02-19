<?php
if(isset($_FILES['video']) && $_POST['URLVideo']){
    $titre = $_POST['URLVideo'];
    $nomVideo = $_FILES['video']['name'];
    $video_filename = stripslashes($nomVideo);
    $extension_upload = strtolower(substr(strrchr($_FILES['video']['name'],'.'),1));
    $extension_valides = array('mpeg','mkv','mp4','avi','mov','webm');
    if(!in_array($extension_upload, $extension_valides)){
        echo "L'extension n'est pas au format mpeg,mkv,mp4,avi,mov ou webm !";
    }else{
        $chemin = "../upload/".$nomVideo;
        if(move_uploaded_file($_FILES['video']['tmp_name'], $chemin)){
        require('configBDD.php');
        $requete = $bdd->prepare("INSERT INTO videocdi(nomVideoOrigine,titre,numeroDiv) VALUES ('$chemin','$titre',2)");
        $requete->execute();
        header('Location ../index.php');
        }else{
            echo $chemin;
        }
    }      
}else{
    echo 'Le formulaire est vide !';
}

