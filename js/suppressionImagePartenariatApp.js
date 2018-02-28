$(document).ready(function(){
    var btnSupr = $('.suprParte');
    
    btnSupr.click(function(){
        var div = $(this).parent();
        var titre = div.find(".titreImagePartenariat").text();
        var srcImage = div.find(".imgPartenariat").attr('src');
        
        var xhr = new XMLHttpRequest();
        xhr.open('GET','../LJM/php/supprimerImagePartenariat.php?nom='+titre+'&chemin='+srcImage,true);
        xhr.send(null);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0)) {
            }
        };       
    });
});
