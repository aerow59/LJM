$(document).ready(function () {
    
    var zoneBase = $('.nomUniv');
    
    var lienSciencePo = $('.lienUniv0');
    var lienEspeme = $('.lienUniv1');
    var lienUniv = $('.lienUniv2');
    
    var block = $('.Contenu_Univ');
    
    var ctn = $('.contenuUniv');
    
    var scienPoTexte = $('.contenuUniv0');
    var espemeTexte = $('.contenuUniv1');
    var univTexte = $('.contenuUniv2');  
    
    var buttonPrec = $('.btnPrecUniv');

    scienPoTexte.hide();
    espemeTexte.hide();
    univTexte.hide();
    buttonPrec.hide();
    
    
    lienSciencePo.click(function(){
        buttonPrec.fadeIn("fast");
        zoneBase.hide();
        ctn.css('margin-left','-500px').css('transition','1s');    
        scienPoTexte.show();
    });  
    
    buttonPrec.click(function(){
        buttonPrec.fadeOut("fast");
        zoneBase.show();
        ctn.css('margin-left','-5000px').css('transition','1s');
        block.css('height','200px').css('transition','1s');
        scienPoTexte.hide("fast"); 
        espemeTexte.hide("fast");
        univTexte.hide("fast");
    });
    
    lienEspeme.click(function(){
        buttonPrec.fadeIn("fast");
        zoneBase.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        block.css('height','600px').css('transition','1s');
        espemeTexte.show();
    });
    
    lienUniv.click(function(){
        buttonPrec.fadeIn("fast");
        zoneBase.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        block.css('height','350px').css('transition','1s');
        univTexte.show();
    });
});