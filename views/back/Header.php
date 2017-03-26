<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Guillaume HANOTEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    
    <!-------- FICHIER CSS --------->
    
    <!-- Font Awesome CSS -->  
    <link rel="stylesheet" href="<?= BASE_URL."Site-Web-Perso-V2/css/font-awesome.min.css" ?>"/>
    
    <!-- Materialize CSS -->  
    <link rel="stylesheet" href="<?= BASE_URL."Site-Web-Perso-V2/css/materialize.min.css" ?>"/>
     
    
    <!-- mon CSS  -->
    <link href="<?= BASE_URL."Site-Web-Perso-V2/css/style2.css "; ?>" rel="stylesheet" type="text/css" />

    
    <!-- ICONES -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    <!-------- FICHIER JS --------->
    
    <!-- Jquery -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso-V2/js/jquery-3.1.1.min.js" ?>"></script>
    
    <!-- Jquery UI -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    
    <!-- Scrollpsy JS -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso-V2/js/scrollspy/scrollspy.js" ?>"></script>
    
    <!-- Materialize JS -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso-V2/js/materialize.js" ?>"></script>
 
    <!-- mon JS -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso-V2/js/javascript.js" ?>"></script>
    
    
    

    
    
</head>


<body>
    <header>
       

        <nav id="menu1" class="navbar-fixed">
            <div class="nav-content nav-wrapper container menu_admin">
         
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           
           
                <ul class="tabs-transparent hide-on-med-and-down">
        
                    <li><a id="linksection0" href="<?= BASE_URL."Site-Web-Perso-V2/index/#lien0" ?>">PRESENTATION</a></li>
                    <li><a id="linksection1" href="#lien1">EXPERIENCES</a></li>              
                    <li><a id="linksection2" href="#lien2">REALISATIONS</a></li> 
                    <li><a id="linksection3" href="#lien3">COMPETENCES</a></li>           
                    <li><a id="linksection4" href="#lien4">FORMATIONS</a></li>         
                    <li><a id="linksection5" href="#lien5">CONTACT</a></li>
                    <li><a class="redd" href="<?= BASE_URL."Site-Web-Perso-V2/deconnexion/" ?>">DECONNEXION</a></li>
                    <li><a class="redd" href="<?= BASE_URL."Site-Web-Perso-V2/admin/" ?>">ADMIN</a></li>

                </ul>      
       
            </div>
        
        </nav>

        <!-- MENU MOBILE -->
        <ul class="side-nav" id="mobile-demo">

            <li><a id="linksection0" href="<?= BASE_URL."Site-Web-Perso-V2/index/#lien0" ?>">PRESENTATION</a></li>
            <li><a href="#lien1">EXPERIENCES</a></li>  
            <li><a href="#lien2">REALISATIONS</a></li> 
            <li><a href="#lien3">COMPETENCES</a></li>           
            <li><a href="#lien4">FORMATIONS</a></li>         
            <li><a href="#lien5">CONTACT</a></li>
            <li><a class="orangee" href="<?= BASE_URL."Site-Web-Perso-V2/deconnexion/" ?>">DECONNEXION</a></li>
            <li><a href="<?= BASE_URL."Site-Web-Perso-V2/admin/" ?>">ADMIN</a></li>

        </ul>

       

    </header>     
           
           
           
           
            
            
    <a href='".BASE_URL."Site-Web-Perso-V2/deconnexion/'>Deconnexion</a>






