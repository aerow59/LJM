function suppresion(nom){
    var nomF = nom.className;
    var xhr = new XMLHttpRequest();
    xhr.open('GET','../LJM/php/panelAdmin/suppresionFormation.php?nomF='+nomF,true);
    xhr.send(null);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0)) {
            window.location.href="../LJM/index.php";
        }
    };
}

