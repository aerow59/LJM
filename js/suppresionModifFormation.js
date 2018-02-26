$(document).ready(function () {
    
    var suppresion = $('.suppresion');
    var modif = $('.modif');
    var toutTexte = $('.contenuFDiv');
    var blockGT = $('.generalestechno');
    var blockPro = $('.pro');
    var blockSup = $('.superieur');
    var titreclique = $('.titreF');
    
    var btnPrec = $('.btnPrec');
   
    blockGT.css('overflow','auto');
    
    toutTexte.hide();
    btnPrec.hide();
    
    blockGT.children().each(function(){
        var titre = $(this).find('.titreF');
       $(this).hover(function(){
           titre.css('cursor','pointer');
           titre.css('font-style','italic');
           titre.css('text-decoration','underline');
           titre.css('transition','1s');},
            function(){
               titre.css('text-decoration','none');
               titre.css('font-style','normal');
               titre.css('transition','1s');
            }                                  
       );
    });
    
    blockPro.children().each(function(){
       var titre = $(this).find('.titreF');
       $(this).hover(function(){
           titre.css('cursor','pointer');
           titre.css('font-style','italic');
           titre.css('text-decoration','underline');
           titre.css('transition','1s');},
            function(){
               titre.css('text-decoration','none');
               titre.css('font-style','normal');
               titre.css('transition','1s');
            }                                   
       );
    });
    
    blockSup.children().each(function(){
       var titre = $(this).find('.titreF');
       $(this).hover(function(){
           titre.css('cursor','pointer');
           titre.css('font-style','italic');
           titre.css('text-decoration','underline');
           titre.css('transition','1s');},
            function(){
               titre.css('text-decoration','none');
               titre.css('font-style','normal');
               titre.css('transition','1s');
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
        var div = $(this).parent().parent().parent();
        var contenuFText = div.find('.contenuFDiv').text();
        div.children().each(function(){
            $(this).hide();
        });
        div.html("<button class='btnPrecDivF'>Précédent</button>\n\
                    <form class='formF' method='GET' action='../LJM/php/panelAdmin/modifFormation.php'>\n\
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
    
    titreclique.click(function(){
        var texte = $(this).parent().find('.contenuFDiv');
        var div = $(this).parent().parent();       
        div.children().each(function(){
            $(this).find('.titreF').hide();
        });      
        texte.show();
        div.find('.btnPrec').show();
    });
    
    btnPrec.click(function(){
       var div = $(this).parent();       
       div.children().each(function(){
            $(this).find('.titreF').show();
            $(this).find('.contenuFDiv').hide();
       });            
       $(this).hide();
    });
});
