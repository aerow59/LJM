$(document).ready(function () {
    
    var textInscr = $('.contenuM');
    var titreInscr = $('.titreModa');
    var clique = 0;
    textInscr.hide();
    
    titreInscr.click(function(){
        if(clique === 0){
            textInscr.fadeIn();  
            clique = 1;
        }else{
           textInscr.fadeOut();  
            clique = 0; 
        }
    });
    
});