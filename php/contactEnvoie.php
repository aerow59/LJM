<?php
	
	/*
     * Verification de tous les champs
     */
	if($_POST['FIRSTNAME']=='' & $_POST['name']=='' & $_POST['mail']==''){
        echo '<div class="error" >Merci de compléter entièrement votre formulaire.</div>';        
		exit();
    }

    /*
     * Verification du prenom
     */

    if($_POST['FIRSTNAME']==''){
        echo '<div class="error" >Vous n\'avez pas compléter votre prénom.</div>';        
    }
	
    elseif (strlen($_POST['FIRSTNAME'])<2) 
    {
        echo '<div class="error" >Votre prénom n\'est pas valide (trop court) ! </div>';
        //exit();
    }
    elseif (!preg_match("~^[\w\-\sàäâéèëêçîï]+$~", $_POST['FIRSTNAME']))
    {
        echo '<div class="error" >Votre prénom n\'est pas valide. (Attention aux accents) </div>';
        //exit();
    }
    else{
        $nom=$_POST['FIRSTNAME'];
    }
    
    
    /*
     * Verification du nom
     */

    if($_POST['name']==''){
        echo '<div class="error" >Vous n\'avez pas compléter votre nom.</div>';
        //exit();
    }
    elseif (strlen($_POST['name'])<2) 
    {
        echo '<div class="error" >Votre nom n\'est pas valide (trop court) ! </div>';
        //exit();
    }
    elseif( !preg_match("~^[\w\-\sàäâéèëêçîï]+$~", $_POST['name'])){
        echo '<div class="error" >Votre nom n\'est pas valide. (Attention aux accents)</div>';
        //exit();
    }
    else{
        $nom=$_POST['name'];
    }

    /*
     * Verification du mail 
     */

    if($_POST['mail']==''){
        echo '<div class="error" >Vous n\'avez pas compléter votre email.</div>';
        //exit();
    }
    elseif (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
        echo '<div class="error" >Votre mail n\'est pas valide ! </div>';
        //exit();
    }
    else{
        $mail=$_POST['mail'];
    }

    /*
     * Verification du message
     */

    if($_POST['IDMESSAGE']==''){
        echo '<div class="error" >Merci de bien compléter votre message.</div>';
        //exit();
    }
    /*elseif (strlen($_POST['IDMESSAGE'])<50) 
    {
        echo '<div class="error" >Votre message n\'est pas assez long (Min 50 caractères) ! </div>';
        //exit();
    }*/
    else
    {
        $message=$_POST['IDMESSAGE'];
    }
    
if($_POST['IDMESSAGE']=='' && $_POST['name']!=='' && strlen($_POST['name'])>=2 && preg_match("~^[\w\-\sàäâéèëêçîï]+$~", $_POST['name']) && $_POST['FIRSTNAME']!=='' && strlen($_POST['FIRSTNAME'])>=2 && preg_match("~^[\w\-\sàäâéèëêçîï]+$~", $_POST['FIRSTNAME']) && $_POST['mail']!=='' && $_POST['IDMESSAGE']!=='' && filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
    $to = 'franckhannedouche1@gmail.com';
    
    $header="Mime-VErsion 1.0\r\n";
    $header.='Content-type: text/html; charset="utf-8"' . "\n";
    $header.='Content-Transfer-Encoding: 8bit';
    
    $premiereLigne='<b>Envoyé par </b> : '.$_POST['FIRSTNAME'].' '.$_POST['name'];
    
    mail($to,"Demande de contact", $premiereLigne, $message,$header);
    
    echo '<div class="success"><h4> Mail envoyé !</h4><br> Merci '.$_POST['name'].' pour votre message.</div>';
}
    
    
