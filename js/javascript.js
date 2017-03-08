$(document).ready(function() {
            
            
    $(".button-collapse").sideNav();
    
   
    /* Materialize Scrollspy */
    $('.scrollspy').scrollSpy();
    
    /* Materialize SELECT */
    $('select').material_select();
    
    
    
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
    
        
    

    /* Lors 
     *
     *
     */
    
    
    // si l'erreur existe dans le html
    if ($("#token_error").length > 0 ){
        // on récupère le contenu de l'erreur
        var contenu = $("#token_error").html();
        console.log(contenu);
        localStorage.setItem("error",contenu);

        window.history.back(); //reload
        
    } else if(localStorage.getItem("error") != null){
        
        var err = localStorage.getItem("error");
        Materialize.toast(err,5000);
        localStorage.removeItem("error");
        
    }

        
        




    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});