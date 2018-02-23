$(document).ready(function () {
    
    //Zone des noms affichés dans les blocks
    var zoneBaseUniv = $('.nomUniv');
    var zoneBaseEntr = $('.nomEntr');
    var zoneBaseAssoc = $('.nomAssoc');
    
    //lien cliquable pour dérouler le texte -- block université
    var lienSciencePo = $('.lienUniv0');
    var lienEspeme = $('.lienUniv1');
    var lienUniv = $('.lienUniv2');
    
    //lien cliquable pour dérouler le texte -- block entreprise
    var lienKPMG = $('.nomEntr0');
    var lienKIABI = $('.nomEntr1');
    
    //lien cliquable pour dérouler le texte -- block association
    var lienAppr = $('.nomAssoc0');
    var lienBGE = $('.nomAssoc1');
    var lienANEP = $('.nomAssoc2');
    var lienAssoSup = $('.nomAssoc3');
    var lienAssoc = $('.nomEtab');
    
    //Block pour redimenssioner en fonction des textes
    var blockUniv = $('.Contenu_Univ');
    var blockEntr = $('.Contenu_Entreprise');
    var blockAssoc = $('.Contenu_Assoc');
    var blockAutreEtab = $('.contenu_AutreEtab');
    
    //Texte caché qui se déplace (infos)
    var ctn = $('.contenuUniv');
    var ctnEntr = $('.contenuEntr');
    var ctnAssoc = $('.contenuAssoc');
    
    //Texte Déroulant -- université
    var scienPoTexte = $('.contenuUniv0');
    var espemeTexte = $('.contenuUniv1');
    var univTexte = $('.contenuUniv2');
    
    //Texte Déroulant -- entreprise
    var KPMGTexte = $('.contenuEntr0');
    var KIABITexte = $('.contenuEntr1');
    
    //Texte Déroulant -- association
    var AssocTexte = $('.contenuAssoc0');
    var BGETexte = $('.contenuAssoc1');
    var ANEPTexte = $('.contenuAssoc2');
    var AssoSupTexte = $('.contenuAssoc3');
    
    //Bouttons de retour pour faire revenir les noms des partenariats
    var btnPrecUniv = $('.btnPrecUniv');
    var btnPrecEntr = $('.btnPrecEntr');
    var btnPrecAssoc = $('.btnPrecAssoc');
    var btnPrecEtab = $('.btnPrecEtab');

    //On cache tout les textes et bouttons
    scienPoTexte.hide();
    espemeTexte.hide();
    univTexte.hide();
    btnPrecUniv.hide();
    btnPrecAssoc.hide();
    btnPrecEtab.hide();
    
    KPMGTexte.hide();
    KIABITexte.hide();
    btnPrecEntr.hide();
    
    AssocTexte.hide();
    BGETexte.hide();
    ANEPTexte.hide();
    AssoSupTexte.hide();
    
    
    lienSciencePo.click(function(){
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();
        ctn.css('margin-left','-500px').css('transition','1s');    
        scienPoTexte.show();
    });  
    
    btnPrecUniv.click(function(){
        btnPrecUniv.fadeOut("fast");
        zoneBaseUniv.show();
        blockAssoc.show();
        ctn.css('margin-left','-5000px').css('transition','1s');
        blockUniv.css('height','200px').css('transition','1s');
        scienPoTexte.hide("fast"); 
        espemeTexte.hide("fast");
        univTexte.hide("fast");
    });
    
    lienEspeme.click(function(){
        blockAssoc.hide();
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        blockUniv.css('height','600px').css('transition','1s');
        espemeTexte.show();
    });
    
    lienUniv.click(function(){
        blockAssoc.hide();
        btnPrecUniv.fadeIn("fast");
        zoneBaseUniv.hide();    
        ctn.css('margin-left','-500px').css('transition','1s');
        blockUniv.css('height','350px').css('transition','1s');
        univTexte.show();
    });
    
    lienKPMG.click(function(){
       btnPrecEntr.fadeIn();
       zoneBaseEntr.hide();
       KPMGTexte.show();
       blockAutreEtab.hide();
       ctnEntr.css('margin-left','850px').css('transition','1s');
       blockEntr.css('height','400px').css('transition','1s');
    });
    
    lienKIABI.click(function(){
       btnPrecEntr.fadeIn();
       zoneBaseEntr.hide();
       KIABITexte.show();
       ctnEntr.css('margin-left','850px').css('transition','1s');
       blockEntr.css('height','200px').css('transition','1s');
    });
    
    btnPrecEntr.click(function(){
       btnPrecEntr.fadeOut();
       zoneBaseEntr.show();
       ctnEntr.css('margin-left','-800px').css('transition','1s');
       KPMGTexte.hide();
       KIABITexte.hide();
       blockEntr.css('height','200px').css('transition','1s');
       blockAutreEtab.show();
    });
    
    lienAppr.click(function(){
        blockUniv.hide();
        btnPrecAssoc.fadeIn();
        zoneBaseAssoc.hide();
        blockAssoc.css('height','500px').css('transition','1s');
        blockAssoc.css('margin-top','200px').css('transition','1s');
        ctnAssoc.css('margin-left','250px').css('transition','1s');
        ctnAssoc.css('margin-top','250px').css('transition','1s');
        AssocTexte.show();
    });
    
    lienBGE.click(function(){
        btnPrecAssoc.fadeIn();
        zoneBaseAssoc.hide();
        blockAssoc.css('height','350px').css('transition','1s');
        ctnAssoc.css('margin-left','250px').css('transition','1s');
        ctnAssoc.css('margin-top','400px').css('transition','1s');
        BGETexte.show();
    });
    
    lienANEP.click(function(){
        btnPrecAssoc.fadeIn();
        zoneBaseAssoc.hide();
        blockAssoc.css('height','250px').css('transition','1s');
        ctnAssoc.css('margin-left','250px').css('transition','1s');
        ctnAssoc.css('margin-top','400px').css('transition','1s');
        ANEPTexte.show(); 
    });
    
    lienAssoSup.click(function(){
        btnPrecAssoc.fadeIn();
        zoneBaseAssoc.hide();
        blockAssoc.css('height','250px').css('transition','1s');
        ctnAssoc.css('margin-left','250px').css('transition','1s');
        ctnAssoc.css('margin-top','400px').css('transition','1s');
        AssoSupTexte.show();
    });
    
    btnPrecAssoc.click(function(){
        blockUniv.show();
        btnPrecAssoc.fadeOut();
        zoneBaseAssoc.show();
        blockAssoc.css('height','200px').css('transition','1s');
        blockAssoc.css('margin-top','350px').css('transition','1s');
        ctnAssoc.css('margin-left','-4000px').css('transition','1s');
        ctnAssoc.css('margin-top','250px').css('transition','1s');
        AssocTexte.hide();
        BGETexte.hide();
        ANEPTexte.hide();
        AssoSupTexte.hide();
    });
    
    lienAssoc.click(function(){
        btnPrecAssoc.fadeIn();
        zoneBaseAssoc.hide();
        blockAssoc.css('height','250px').css('transition','1s');
        ctnAssoc.css('margin-left','250px').css('transition','1s');
        ctnAssoc.css('margin-top','400px').css('transition','1s');
        AssoSupTexte.show();
    });
});