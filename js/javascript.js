$(document).ready(function () {

    var menu = $('.menu'),
        menuouvrir = $('.menuouvrir'),
        menufermer = $('.menufermer'),
        mic1 = $('.imgmic1'),
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
        boutonMenugreta = $('.lienMenuDroite1'),
        pageGreta = $('.GRETA'),
        page_connexion = $('.page_connexion'),
        boutonMenuUfa = $('.lienMenuDroite2'),
        pageUfa = $('.UFA'),
        boutonMenuFormation = $('.lienMenuDroite0'),
        pageFormation = $('.FORMATION'),
        boutonPartenariat = $('.lienMenuDroite4'),
        pagePartenariat = $('.PARTENARIATAPPR'),
        boutonMenuStagePFMP = $('.lienMenuDroite3'),
        pageStagesPFMP = $('.STAGES'),
        boutonMenuCDI = $('.lienMenuDroite5'),
        pageCDI = $('.CDI'),
        boutMenuPresse = $('.lienMenuDroite6'),
        pagePresse = $('.PRESSE'),
        boutonMenuDepotStage = $('.lienMenuDroite7'),
        pageDepotStage = $('.DEPOT_STAGE'), 
        boutonMenuVoirStage = $('.lienMenuDroite8'),
        pageVoirStage = $('.VOIR_STAGES'),
        boutonMenuContact = $('.lienMenuDroite9'),
        pageContact = $('.CONTACT'),
        boutonMenuLivreOr = $('.lienMenuDroite10'),
        pageLivreOr = $('.LIVREOR'),
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
    
    panier.click(function () {
        back.addClass('transformback');
        panier.addClass('transformbackimg');
        panierimg.addClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        page_connexion.css('transform','translateX(0)').css('transition','0.3s');     
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s'); 
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
    });


    calend.click(function () {
        back.addClass('transformback');
        calend.addClass('transformbackimg');
        calendimg.addClass('transformimg');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        expo.css('transform', 'translateX(0)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)').css('transition','0s');    
        shop.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
    });

    info.click(function () {
        back.addClass('transformback');
        info.addClass('transformbackimg');
        infoimg.addClass('transformimg');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        infos.css('transform', 'translateX(0)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)').css('transition','0s');  
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        shop.css('transform', 'translateX(-2000px)').css('transition', '0s');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
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
        pageFormation.css('transform','translateX(2000px)').css('transition','0');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
    });

    icon.click(function () {
        back.removeClass('transformback');
        panier.removeClass('transformbackimg');
        panierimg.removeClass('transformimg');
        calend.removeClass('transformbackimg');
        calendimg.removeClass('transformimg');
        info.removeClass('transformbackimg');
        infoimg.removeClass('transformimg');
        page_connexion.css('transform','translateX(-2000px)');  
        infos.css('transform', 'translateX(-2000px)');
        expo.css('transform', 'translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform', 'translateX(2000px)').css('transition', '0s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0s');  
        pageFormation.css('transform','translateX(2000px)').css('transition','0');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
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
        expo.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');      
        pageGreta.css('transform', 'translateX(0)').css('transition', '0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuFormation.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(0)').css('transition','0.3s');     
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuUfa.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(0)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuFormation.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(0)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuStagePFMP.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0.3s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(0)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonPartenariat.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(0)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuCDI.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(0)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuFormation.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(0)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutMenuPresse.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(0)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuDepotStage.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(0)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuVoirStage.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(0)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();             
    });
    
    boutonMenuContact.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(0)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
    
    boutonMenuLivreOr.click(function(){
        expo.css('transform', 'translateX(-2000px)').css('transition', '0s');
        infos.css('transform', 'translateX(-2000px)').css('transition', '0s');
        page_connexion.css('transform','translateX(-2000px)');
        shop.css('transform', 'translateX(-2000px)');
        pageGreta.css('transform','translateX(2000px)').css('transition','0.3s');    
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pageUfa.css('transform','translateX(2000px)').css('transition','0.3s');
        pageFormation.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePartenariat.css('transform','translateX(2000px)').css('transition','0.3s');
        pageContact.css('transform','translateX(2000px)').css('transition','0.3s');
        pageStagesPFMP.css('transform','translateX(2000px)').css('transition','0.3s');
        pageCDI.css('transform','translateX(2000px)').css('transition','0.3s');
        pagePresse.css('transform','translateX(2000px)').css('transition','0.3s');
        pageDepotStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageVoirStage.css('transform','translateX(2000px)').css('transition','0.3s');
        pageLivreOr.css('transform','translateX(0)').css('transition','0.3s');
        menu.css('transform', 'translateX(300px)');
        menuouvrir.show();
        menufermer.hide();
    });
});
