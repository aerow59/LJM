$(document).ready(function () {
    
    var lien = $('.lienUniv');
    var btnPrecedent
    
    lien.click(function(){ 
       var id = $(this).attr('id');
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function(){
           if (this.readyState === 4 && this.status === 200) {
               document.getElementById("UNIVERSITES").innerHTML = this.responseText;
           }
       };
       xhttp.open("GET", "php/recupInfosUniv.php?nom="+id, true);
       xhttp.send(null); 
    });
});