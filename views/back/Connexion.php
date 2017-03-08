

<main id="login">

    
    
    
 	<div id="connexion" class="container">
       
       

        <div class="row">
          

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
           
           
            
            <form method="post" name="login" action="" class="col l6 s12 offset-l3">

          
              <h4>CONNEXION</h4>
       
                <div class="row">
                    <div class="input-field col l8 s6 offset-l2">
                        <input id="login" name="login" type="text"/>
                        <label for="login">Login</label>
                    </div>
                </div>

                
                
                

                <div class="row">
                    <div class="input-field col l8 s6 offset-l2">
                        <input id="password" name="password" type="password"/>
                        <label for="password">Mot de Passe</label>
                    </div>
                </div>

               
                <input class="btn col l6 offset-l3" type="submit" value="Se connecter"/>

            </form>
            
            
        </div>
    </div>		
   
    



</main>