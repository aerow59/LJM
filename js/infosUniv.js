$(document).ready(function () {
    
    var zoneBaseUniv = $('.nomUniv');
    var zoneBaseEntr = $('.nomEntr');
    
    //lien cliquable pour dérouler le texte -- block université
    var lienSciencePo = $('.lienUniv0');
    var lienEspeme = $('.lienUniv1');
    var lienUniv = $('.lienUniv2');
    
    //lien cliquable pour dérouler le texte -- block entreprise
    var lienKPMG = $('.nomEntr0');
    var lienKIABI = $('.nomEntr1');
    
    var block = $('.Contenu_Univ');
    
    var ctn = $('.contenuUniv');
    var ctnEntr = $('.contenuEntr');
    
    //Texte Déroulant -- université
    var scienPoTexte = $('.contenuUniv0');
    var espemeTexte = $('.contenuUniv1');
    var univTexte = $('.contenuUniv2');
    
    //Texte Déroulant -- entreprise
    var KPMGTexte = $('.contenuEntr0');
    var KIABITexte = $('.contenuEntr1');
    
    var btnPrecUniv = $('.btnPrecUniv');
    var btnPrecEntr = $('.btnPrecEntr');

    scienPoTexte.hide();
    espemeTexte.hide();
    univTexte.hide();
    btnPrecUniv.hide();
    
    KPMGTexte.hide();
    KIABITexte.hide();
    btnPrecEntr.hide();
    
    
    lienSciencePo.click(function(){
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();
        ctn.css('margin-left','-500px').css('transition','1s');    
        scienPoTexte.show();
    });  
    
    btnPrecUniv.click(function(){
        btnPrecUniv.fadeOut("fast");
        zoneBaseUniv.show();
        ctn.css('margin-left','-5000px').css('transition','1s');
        block.css('height','200px').css('transition','1s');
        scienPoTexte.hide("fast"); 
        espemeTexte.hide("fast");
        univTexte.hide("fast");
    });
    
    lienEspeme.click(function(){
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        block.css('height','600px').css('transition','1s');
        espemeTexte.show();
    });
    
    lienUniv.click(function(){
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        block.css('height','350px').css('transition','1s');
        univTexte.show();
    });
    
    lienKPMG.click(function(){
       zoneBaseEntr.hide();
       KPMGTexte.show();
       ctnEntr.css('margin-left','850px').css('transition','0.3s');
    });
});