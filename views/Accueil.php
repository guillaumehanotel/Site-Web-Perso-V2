<!-- Page accueil visible par les visiteurs -->



<main id="accueil">
    <div id="section0" class="section container">
        <h2 id="titre0">Guillaume HANOTEL</h2>
        <div id="toplink0" class="toplink"></div>
        <div class="row"> <img class="circle responsive-img col l2 offset-l5 m4 offset-m4 col s6 offset-s3   " src="<?= BASE_URL."Site-Web-Perso-V2/img/1.jpg " ?>" alt="Picture of me" width="300" height="300"> </div>
        <div class="row">
           
           <?php 
    
            foreach($resultat_pres as $value){
    
    
            ?>
           
            <p class="center-align col m6 offset-m3"><?= $value['description'] ?></p>
        </div>
        <div id="apropos" class="divider"></div>
        <h3>A Propos de Moi...</h3>
        <div class="row">
            <p class="col s10 offset-s1"><?= $value['apropos'] ?></p>
            
            <?php
            }
                
            ?>
            
            
        </div>
        <div class="divider"></div>
    </div>
    
    
    
    
    
    
    
    
    
    <!-- ======= EXPERIENCES PROFESSIONNELLES ========= -->
    <div id="section1" class="section container">
        <h2 id="titre1">EXPERIENCES PROFESSIONNELLES</h2>
        <div id="toplink1" class="toplink"></div>
        
        
        
        
        
        
        <?php
        
        foreach($resultat_expe as $value){
            
            
        ?>
        
        
        
        
        <div class="expe">
            <div id="border-top">
                <div class="bordure" id="top-left"></div>
                <div class="bordure" id="top-right"></div>
            </div>
            <div id="content">
                <div class="row valign-wrapper">
                    <p id="intitule" class="col l3 m3 s12">- <?= $value['experiences_type'] ?> -</p>
                    <h4 id="titre" class="col l5 m6 s12"><?= $value['experiences_intitule'] ?></h4>
                    <p id="date" class="col l3 offset-l1 m3  s12"><?= $value['experiences_date'] ?>
                        <br>(<?= $value['experiences_duree'] ?>)</p>
                </div>
                <div class="row">
                    <p id="entreprise" class="col l2"><?= $value['experiences_entreprise'] ?></p>
                    <p id="ville" class="col l2"><?= $value['experiences_ville'] ?>(<?= $value['experiences_codepostal'] ?>)</p>
                </div>
                <p><?= $value['experiences_description'] ?></p>
            </div>
            <div id="border-bottom">
                <div class="bordure" id="bottom-left"></div>
                <div class="bordure" id="bottom-right"></div>
                <div class="clear"></div>
            </div>
        </div>
        
        <?php
            
        }
        
        ?>
        
        

        
        
        
        <div class="divider"></div>
    </div>
    
    
        <!-- ======= REALISATIONS ========= -->
    <div id="section2" class="section container">
        <h2 id="titre2">REALISATIONS</h2>
        <div id="toplink2" class="toplink"></div>
        <div class="row">
           
           
           <?php
        
            foreach($resultat_real as $value){
            
            
            ?>
           
           
            <div class="real col s12 m6 l4">  
               
                
                <div class="contour">
                             
                    <img src="<?= BASE_URL."Site-Web-Perso-V2/img/github-logo.png " ?>" alt="" class="responsive-img">

                   <a target="_blank" href="<?= $value['realisations_link'] ?>">
                    <div class="backimg">
                        <div class="back"></div>
                        <div class="desc">
                            <h6><?= $value['realisations_titre'] ?></h6>
                            <p><?= $value['realisations_desc'] ?></p>
                        </div>
                   
                    </div>
                </a>
                
                
                </div>       
            </div> 
            
            
            <?php
            
            }

            ?>
            
      
            
            
        </div>
            
            
            
            
            
        <div class="divider"></div>
    </div>
    
    
    
    
        <!-- ======= COMPETENCES ========= -->
    <div id="section3" class="section ">
        <h2 id="titre3">COMPETENCES</h2>
        <div id="toplink3" class="toplink"></div>
        
        
        <div id="row_skill" class="row">
            <div class="tab_skill col l3 m3 s8 offset-s2">
                <div class="title_skill">
                    <h6 class="">Ce que je maîtrise très bien :</h6>
                </div>
                
                <div id="skill" class="row">

                   
                    <?php
                        foreach($resultat_comp1 as $value){
                    ?>
                   
                     <p class="col l6 s12">- <?= $value['competences_intitule'] ?></p>

                    <?php
                        }
                    ?>                    

                    
                </div>
                
                
            </div>
            
            
            <div class="tab_skill col l3 m3 s8 offset-l1 offset-m1 offset-s2">
                <div class="title_skill">
                    <h6 class="">Ce que je maîtrise correctement :</h6>
                </div>
                
                
                    <?php
                        foreach($resultat_comp2 as $value){
                    ?>
                   
                     <p class="col l6 s12">- <?= $value['competences_intitule'] ?></p>

                    <?php
                        }
                    ?>               
                
                
                
            </div>
            
            
            <div class="tab_skill col l3 m3 s8 offset-l1 offset-m1 offset-s2">
                <div class="title_skill">
                    <h6 class="">Ce que je maîtrise moyennement :</h6>
                </div>
                
                
                    <?php
                        foreach($resultat_comp3 as $value){
                    ?>
                   
                     <p class="col l6 s12">- <?= $value['competences_intitule'] ?></p>

                    <?php
                        }
                    ?>              
                
        
            </div>
        </div>
        
        

        <div class="container">
            <div class="divider"></div>
        </div>
        
    </div>
    
    
    
    
    
        <!-- ======= FORMATIONS ========= -->
    <div id="section4" class="section container">
        <h2 id="titre4">FORMATIONS</h2>
        <div id="toplink4" class="toplink"></div>
        
        <div class="row">
           
           
           <?php
                foreach($resultat_forma as $value){
            ?>
           
            <div id="card" class="card">
                <p id="annee"><?= $value['annee_debut'] ?>-<?= $value['annee_fin'] ?></p>
                
                <h5><?= $value['formation_intitulé'] ?><span> <?= $value['annee_courante'] ?> année</span></h5>
                
                <p id="formation_coord"><?= $value['formation_ecole'] ?> - <span id="formation_ville"><?= $value['formation_ville'] ?> (<?= $value['ville_code_postal'] ?>)</span></p>
                
                <p><?= $value['formation_description'] ?></p>
                
                <div class="card-action">
                    <a href="<?= $value['formation_lien'] ?>" class="black-text" target="_blank">Lien de la formation</a>
                </div>
                
                
            </div>
            
            <?php
                }
            ?>
                    
            
            
        </div>
        
        
        <div class="divider"></div>
    </div>
    
    
    
    
    
        <!-- ======= CONTACT ========= -->
    <div id="section5" class="section container">
        <h2 id="titre5">CONTACT</h2>
        <div id="toplink5" class="toplink"></div>
        
        
        <!-- Token Error  -->
        <?php
            if(isset($token_error) && $token_error == true){
        ?>
        
        <div hidden="hidden" id="token_error" class="token"><?= $_SESSION["erreur"] ?></div>
        
        <?php
            }
            $token_error = false;
            unset($_SESSION["erreur"]);
        
        ?>
        
        
        
        <div class="row">
            
            <div class="center-align col s4">
            <a target="_blank" href="https://github.com/guillaumehanotel"><i class="fa fa-github fa-5x" aria-hidden="true"></i></a></div>
            
            <div class="center-align col s4">
                <a target="_blank" href="https://twitter.com/GHanosql"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a>
            </div>
            <div class="center-align col s4">
                <a target="_blank" href="https://www.linkedin.com/in/guillaume-hanotel-538b81106"><i class="fa fa-linkedin fa-5x" aria-hidden="true"></i></a>
            </div>
         
            
               
                     
        </div>
    
        
        
        
        <div class="row">
        
            <form method="post" action="" class="col l8 s12 offset-l2">

            <h4>Envoyez moi un message</h4>
               
               
               
                <div class="row">
                    <div class="input-field col m6 s10 offset-m3 offset-s1">
                        <input id="nom" name="nom" type="text" class="validate"/>
                        <label for="title">Nom</label>

                    </div>
                </div>



                <div class="row">
                    <div class="input-field col m6 s10 offset-m3 offset-s1">

                        <input id="email" name="email" class="validate"/>
                        <label for="email">Adresse Mail</label>

                    </div>
                </div>


                <div class="row">
                    <div class="input-field col m6 s10 offset-m3 offset-s1">
                        <input id="sujet" name="sujet" type="text" class="validate"/>
                        <label for="sujet">Sujet</label>

                    </div>
                </div>           
           
           
               <div class="row">
                   
                   <div class="input-field col m8 s12 offset-m2 ">
                   
                        <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Message</label>
                   
                   </div>
               </div>
               
               
               
               <div class="row">
                   
                   <input id="submit_mail" name="mail" class="btn col m4 s8 offset-m4 offset-s2" type="submit" value="Envoyer"/>
                   
                   
               </div>
           
           
           
           
           
           
           
           
           
           
            </form>
        
        
        </div>
        
        

    </div>
    
    
    

    
</main>


<footer class="page-footer">
          
    <div class="footer-copyright">
        <div class="container">
            © 2017 Guillaume HANOTEL
        </div>
            
    </div>
</footer>









</body>

</html>