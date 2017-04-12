<div id="formations" class="section scrollspy">
    <h3>FORMATIONS</h3>
                    
                    
                    
                    
                    
    <div class="row">

        <form method="post" action="" class="col l12">


            <div class="row">
                           
                           
                <input type="hidden" value="<?= $forma['formation_id'] ?>">
                            
                <div class="input-field col l2">
                    <input id="anneedebut" name="anneedebut" type="text" class="validate" value="<?= $forma['formation_annee_debut'] ?>"/>
                    <label for="anneedebut">Année Début</label>

                </div>
                            
                            
                            
                            
                <div class="input-field col l2">
                    <input id="anneefin" name="anneefin" type="text" class="validate" value="<?= $forma['formation_annee_fin'] ?>"/>
                    <label for="anneefin">Année Fin</label>

                </div>
                            
                            
                            
                            
                <div class="input-field col l2">
                    <input placeholder="1ère  / 2ème" id="anneecourante" name="anneecourante" type="text" class="validate" value="<?= $forma['formation_annee_courante'] ?>"/>
                    <label for="anneecourante">ième année</label>

                </div>
                        
                            
            </div>
                            
                            
                               
                               
            <div class="row">
                              
                               
                <div class="input-field col l3">
                    <input id="intitule" name="intitule" type="text" class="validate" value="<?= $forma['formation_intitule'] ?>"/>
                    <label for="intitule">Intitulé</label>
                </div>
                            
                            
                            
                            
                <div class="input-field col l3">
                    <input id="ecole" name="ecole" type="text" class="validate" value="<?= $forma['formation_ecole'] ?>"/>
                    <label for="ecole">Ecole</label>
                </div>
                            
                           
                <div class="input-field col l3">
                    <input id="ville" name="ville" type="text" class="validate" value="<?= $forma['formation_ville'] ?>"/>
                    <label for="ville">Ville</label>
                </div>
                                
                                
                <div class="input-field col l2">
                    <input id="cp" name="cp" type="text" class="validate" value="<?= $forma['formation_ville_code_postal'] ?>"/>
                    <label for="cp">Code Postal</label>
                </div>
                            
            </div>
                            
                            
                            
                            
            <div class="row">
                   
                <div class="input-field col l6">

                    <textarea name="description" id="description" class="materialize-textarea"><?= $forma['formation_description'] ?></textarea>
                    <label for="description">Description</label>

                </div>
            </div>
                            
                            
            <div class="row">
                            
                <div class="input-field col l4">
                    <input id="lien" name="lien" type="text" class="validate" value="<?= $forma['formation_lien'] ?>"/>
                    <label for="lien">Lien</label>

                </div>
                            
            </div>
                            
                            
            <div class="row">
                <input name="formation" class="btn col l4" type="submit" value="Envoyer"/>
            </div>
 
                       
        </form>


    </div>