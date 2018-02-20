$(document).ready(function () {
    
    var zoneBase = $('.nomUniv');
    
    var lienSciencePo = $('.lienUniv0');
    var lienEspeme = $('.lienUniv1');
    var lienUniv = $('.lienUniv2');
    
    var ctn = $('.contenuUniv');
    
    var scienPoTexte = $('.contenuUniv0');
    var espemeTexte = $('.contenuUniv1');
    var univTexte = $('.contenuUniv2');  
    
    var buttonPrec = $('.btnPrec');

    scienPoTexte.hide();
    espemeTexte.hide();
    univTexte.hide();
    buttonPrec.hide();
    
    
    lienSciencePo.click(function(){
        zoneBase.hide();
        ctn.css('margin-left','-500px').css('transition','1s'); 
        buttonPrec.css('margin-left','0').css('transition','1s');    
        scienPoTexte.show();
        buttonPrec.fadeIn("slow");
    });  
    
    buttonPrec.click(function(){
        
    });
});