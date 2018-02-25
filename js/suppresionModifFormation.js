$(document).ready(function () {
    
    var suppresion = $('.suppresion');
    var modif = $('.modif');
    var toutTexte = $('.contenuFDiv');
    var blockGT = $('.generalestechno');
    toutTexte.hide();
    
    blockGT.children().each(function(){
       $(this).hover(function(){
           $(this).css('transform','scale(1.5)');
           $(this).css('transition','1s');
                                },
            function(){
               $(this).css('transform','scale(1)');
               $(this).css('transition','1s');
            }                                  
       );
    });

    modif.click(function(){        
        blockGT.children().each(function(){
        $(this).hover(function(){
               $(this).css('transform','scale(1)');
               $(this).css('transition','1s');                                
           });
        });
        
        var nomF = $(this).parent().text();
        var div = $(this).parent().parent();
        var contenuFText = div.find('.contenuFDiv').text();
        div.children().each(function(){
            $(this).hide();
        });
        div.html("<form class='formF' method='GET' action='../LJM/php/panelAdmin/modifFormation.php'>\n\
                    <label class='lblModif' for=''nomF>Nom de la formation : </label>\n\
                    <input type='text' readonly name='nomF' class='titreF'><br><br>\n\
                    <label for='contenuF' class='lblModifFC'>Contenu de la formation : </label><br>\n\
                    <textarea name='contenuF' class='contenuF'></textarea><br><br>\n\
                    <input type='submit' value='Valider' class='btnValiderF'>\n\
                </form>");
        var titreFModif = $('.titreF');
        var contenuF = $('.contenuF');
        titreFModif.val(nomF);
        contenuF.val(contenuFText);
    });
    
    
    suppresion.click(function(){
        var nomFR = $(this).parent().text();
        var nomF = nomFR.trim();
        var xhr = new XMLHttpRequest();
        xhr.open('GET','../LJM/php/panelAdmin/suppresionFormation.php?nomF='+nomF,true);
        xhr.send(null);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0)) {
            }
        };
    });
    
});

/*function modif(nom){
    var element = nom.parentNode;
    var texte = element.innerHTML;
    texte.hide();
}
});*/
