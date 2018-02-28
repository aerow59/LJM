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
        var titre = $(this).parent().parent().find('.titreBTS').text();
        var div = $(this).parent().parent();
        
        if(titre == "BTS NDRC"){
           div.css('margin-left','150px');
        }if(titre == "BTS SAM"){
            
        }else{
            
        }
        
        portail.show();
        titreBTS.show();
        contenuBTS.show();
        apprentissage.show();
        moda.show();
        
        $(this).hide();
        $(this).parent().parent().find('.contenuUfa').hide()
    });
    
    titreBTS.click(function(){
        var titre = $(this).text();
        var div = $(this).parent();
        var contenu = div.find('.contenuUfa');      
        contenu.css('width','70%');
        contenu.css('height','600px');
        contenu.css('margin-top','-5%');
        
        if(titre == "BTS NDRC"){
            div.css('margin-left','-20%');
        }if(titre == "BTS SAM"){
            
        }else{
            
        } 
        
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
