/*jslint devel: true */
/*global $, jQuery, alert*/
$(document).ready(function () {

    var menu = $('.menu'),
        menuouvrir = $('.menuouvrir'),
        menufermer = $('.menufermer'),
        mic1 = $('.imgmic1'),
        mic2 = $('.imgmic2'),
        ondes = $('.ondes1, .ondes2'),
        panier = $('.panier'),
        back = $('.back'),
        panierimg = $('.panier img'),
        calend = $('.calend'),
        calendimg = $('.calend img'),
        info = $('.info'),
        infos = $('.informations'),
        infoimg = $('.info img'),
        logo = $('.logoisaac'),
        shop = $('.shop'),
        expo = $('.expositions'),
        home = $('.home'),
        icon = $('.iconisaac'),
        pagecasquette = $('.pagecasquette'),
        pagesac = $('.pagesac'),
        pageverre = $('.pageverre'),
        casquette = $('.casquette'),
        sac = $('.sac'),
        verre = $('.verre'),
        produits = $('.produits'),
        fermercasq = $('.fermercasq'),
        fermersac = $('.fermersac'),
        boutonMenugreta = $('.0'),
        pageGreta = $('.GRETA'),
        page_connexion = $('.page_connexion'),
        boutonMenuFormation = $('.2'),
        pageFormation = $('.FORMATION'),
        boutonMenuUfa = $('.1'),
        pageUfa = $('.UFA'),
        boutonMenuPartenariat = $('.3'),
        pagePartenariat = $('.PARTENARIAT'),
        boutonMenuCDI = $('.4'),
        fermerverre = $('.fermerverre');

    menuouvrir.click(function () {
        menu.css('transform', 'translateX(0px)');
        menuouvrir.hide();
        menufermer.show();
    });

    menufermer.click(function () {
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });

    mic1.click(function () {
        ondes.css('transform', 'scaleX(1.5) scaleY(1.3) translateY(-10px)').css('opacity', '1');
        mic1.hide();
        mic2.show();
    });

    mic2.click(function () {
        ondes.css('transform', 'scaleX(0) scaleY(0) translateY(0px)').css('opacity', '0');
        mic1.show();
        mic2.hide();
    });
    
    panier.click(function () {
        back.addClass('transformback');
        panier.addClass('transformbackimg');
        panierimg.addClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        logo.addClass('transformlogo1').removeClass('transformlogo2');
        page_connexion.css('transform','translateX(0)').css('transition','0.3s');     
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');   
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');      
        mic1.hide();
        mic2.hide();
    });


    calend.click(function () {
        back.addClass('transformback');
        calend.addClass('transformbackimg');
        calendimg.addClass('transformimg');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        logo.addClass('transformlogo1').removeClass('transformlogo2');
        expo.css('transform', 'translateX(0)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)').css('transition','0s');    
        shop.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');       
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');       
        mic1.hide();
        mic2.hide();
    });

    info.click(function () {
        back.addClass('transformback');
        info.addClass('transformbackimg');
        infoimg.addClass('transformimg');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        logo.addClass('transformlogo1').removeClass('transformlogo2');
        infos.css('transform', 'translateX(0)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)').css('transition','0s');  
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        shop.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');        
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');        
        mic1.hide();
        mic2.hide();
    });

    home.click(function () {
        back.removeClass('transformback');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        logo.addClass('transformlogo2');
        page_connexion.css('transform','translateX(-2000px)');  
        infos.css('transform', 'translateX(-2000px)');
        expo.css('transform', 'translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');             
        mic1.show();
        mic2.hide();
    });

    icon.click(function () {
        back.removeClass('transformback');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        logo.addClass('transformlogo2');
        page_connexion.css('transform','translateX(-2000px)');  
        infos.css('transform', 'translateX(-2000px)');
        expo.css('transform', 'translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');      
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');       
        mic1.show();
        mic2.hide();
    });

    $('.commande input[type="button"]').click(function () {
        alert('Votre commande est enregistrée.');
    });

    pagecasquette.hide();
    pagesac.hide();
    pageverre.hide();

    casquette.click(function () {
        produits.css('opacity', '0');
        pagecasquette.show();
        casquette.css('opacity', '0');
        sac.css('opacity', '0');
        verre.css('opacity', '0');
    });

    $('.commandecasq input[type="button"], .commandesac input[type="button"], .commandeverre input[type="button"]').click(function () {
        alert('Votre commande est enregistrée.');
    });

    fermercasq.click(function () {
        produits.css('opacity', '1');
        pagecasquette.hide();
        casquette.css('opacity', '1');
        sac.css('opacity', '1');
        verre.css('opacity', '1');
    });

    sac.click(function () {
        produits.css('opacity', '0');
        pagesac.show();
        casquette.css('opacity', '0');
        sac.css('opacity', '0');
        verre.css('opacity', '0');
    });

    fermersac.click(function () {
        produits.css('opacity', '1');
        pagesac.hide();
        casquette.css('opacity', '1');
        sac.css('opacity', '1');
        verre.css('opacity', '1');
    });

    verre.click(function () {
        produits.css('opacity', '0');
        pageverre.show();
        casquette.css('opacity', '0');
        sac.css('opacity', '0');
        verre.css('opacity', '0');
    });

    fermerverre.click(function () {
        produits.css('opacity', '1');
        pageverre.hide();
        casquette.css('opacity', '1');
        sac.css('opacity', '1');
        verre.css('opacity', '1');
    });

    $('.home, .calend, .info, .iconisaac').click(function () {
        produits.css('opacity', '1');
        casquette.css('opacity', '1');
        sac.css('opacity', '1');
        verre.css('opacity', '1');
        pagecasquette.hide();
        pagesac.hide();
        pageverre.hide();
    });
    
    mic1.click(function () {
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'audio/vimdone.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
    });
    
    boutonMenugreta.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');      
        pageGreta.css('transform', 'translateX(0)').css('transition', '0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');
        logo.addClass('transformlogo1').removeClass('transformlogo2');
    });
    
    boutonMenuFormation.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pageGreta.css('transform','translateX(2000px)').css('transition','0s');    
        pageFormation.css('transform','translateX(0)').css('transition','0.3s');     
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');
        logo.addClass('transformlogo1').removeClass('transformLogo2');
    });
    
    boutonMenuUfa.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');               
        pageUfa.css('transform','translateX(0)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0');
        logo.addClass('transformlogo1').removeClass('transformLogo2');
    });
    
    boutonMenuPartenariat.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0');               
        pagePartenariat.css('transform','translateX(0)').css('transition','0.3s');
        logo.addClass('transformlogo1').removeClass('transformLogo2');
    });
       
});
