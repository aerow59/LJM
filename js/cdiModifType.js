/*jslint devel: true */
/*global $, jQuery, alert*/
$(document).ready(function () {
    var divUneNature = $('#affichContenuDivUne');
    
    var divUneImage = $('#affichContenuDivUneImage');
    divUneImage.hide();
    
    var divUneTexte = $('#affichContenuDivUneTexte');
    divUneTexte.hide();
    
    var listeTypeDivUne = $('#listeTypeUne');
    
    listeTypeDivUne.change(function(){
        if(listeTypeDivUne.val() === "Image"){
            divUneNature.hide();
            divUneImage.show();
        }
        if(listeTypeDivUne.val() === "Texte"){
            divUneNature.hide();
            divUneTexte.show();
        } 
    });
});
