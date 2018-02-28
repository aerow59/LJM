$(document).ready(function(){
    
    var portail = $('.portailNet');
    var contenuFormation = $('.contenuUfa');
    var titreBTS = $('.titreBTS');
    var contenuBTS = $('.descriptionBTS');
    var apprentissage = $('.apprentissage');
    var moda = $('.MODALITE');
    
    var btnPrecUFA = $('.btnPrecBTS');
    
    contenuFormation.hide();
    
    btnPrecUFA.click(function(){
        var div = $(this).parent();
        
        portail.show();
        titreBTS.show();
        contenuBTS.show();
        apprentissage.show();
        moda.show();
        
        $(this).hide();  
        div.hide();
    });
    
    titreBTS.click(function(){
        var titre = $(this).text();
        var div = $(this).parent();
        var contenu = div.find('.contenuUfa');      
        contenu.css('width','70%');
        contenu.css('height','600px');
        contenu.css('margin-top','-5%');
        
        contenu.css('margin-left','-2%');
        contenu.css('overflow-y','scroll');
        btnPrecUFA.css('width','100%');
        portail.hide();
        titreBTS.hide();
        contenuBTS.hide();
        apprentissage.hide();
        moda.hide();
        
        btnPrecUFA.show();
        contenu.show();
    });
});
