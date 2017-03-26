$(document).ready(function() {
            
            
    /* Materialize Menu */
    $(".button-collapse").sideNav();
    
   
    /* Materialize Scrollspy */
    $('.scrollspy').scrollSpy();
    
    /* Materialize SELECT */
    $('select').material_select();
    
    
    /* Code pour mettre en blanc l'élément du menu sur lequel on passe*/
    $('#toplink0').on('scrollSpy:enter', function() {
        $('#linksection0').css({"color":"white"});
        disableCSS(0);
    });
     
    $('#toplink1').on('scrollSpy:enter', function() {
        $('#linksection1').css({"color":"white"});
        disableCSS(1);
    });
    
    $('#toplink2').on('scrollSpy:enter', function() {
        $('#linksection2').css({"color":"white"});
        disableCSS(2);
    });
      
    $('#toplink3').on('scrollSpy:enter', function() {
        $('#linksection3').css({"color":"white"}); 
        disableCSS(3); 
    });
  
    $('#toplink4').on('scrollSpy:enter', function() {
        $('#linksection4').css({"color":"white"});
        disableCSS(4);  
    });
    
    $('#toplink5').on('scrollSpy:enter', function() {
        $('#linksection5').css({"color":"white"});
        disableCSS(5);
    });
    

    function disableCSS(nb){   
        if(nb!=0){
            $('#linksection0').css({"color":"#C8C9CA"});
        }
        
        if(nb!=1){
            $('#linksection1').css({"color":"#C8C9CA"});
        }
        
        if(nb!=2){
            $('#linksection2').css({"color":"#C8C9CA"});
        }
        
        if(nb!=3){
            $('#linksection3').css({"color":"#C8C9CA"});
        }
        
        if(nb!=4){
            $('#linksection4').css({"color":"#C8C9CA"});
        }
        
        if(nb!=5){
            $('#linksection5').css({"color":"#C8C9CA"});
        }
    }
    
    
    /* Plugin Scrollspy */
    $('.lien').scrollSpy();
    $('.toplink').scrollSpy();
             
    
    
    $("#section2 .contour").mouseenter(function(){
        $(this).find("div").fadeIn("slow");       
    });
    
    $("#section2 .contour").mouseleave(function(){                      
        $(this).find("div").fadeOut("slow");           
    });
    
    
    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }
    
        
    

    /* Lors du traitement php, si une variable de session erreur est créé, 
     * alors on déclare un booléen token_error à true
     * le html est chargé, si token_error existe et est vrai, 
     * on ajoute une div dans laquelle on affiche la session error
     * puis le traitement ci dessous va récupérer l'erreur si elle existe,
     * l'enregistrer dans une variable qui se conservera meme avec
     * des rafraichissements de pages
     * puis on revient en arrière sur la page pour revenir au formulaire déjà rempli
     * et là on récupère le msg d'erreur enregistré auparant pour l'afficher 
     * dans un toast Materialize
     */
    
    
    // si l'erreur existe dans le html
    if ($("#token_error").length > 0 ){
        // on récupère le contenu de l'erreur
        var contenu = $("#token_error").html();
        //console.log(contenu);
        localStorage.setItem("error",contenu);

        window.history.back(); //reload
        
    } else if(localStorage.getItem("error") != null){
        
        var err = localStorage.getItem("error");
        Materialize.toast(err,5000);
        localStorage.removeItem("error");
        
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});