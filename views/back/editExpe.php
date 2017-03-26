 <div id="experiences" class="section scrollspy">
                    <h3>EXPERIENCES</h3>
                    
                    
                    <div class="row">

                        <form  method="post" action="" class="col l12">


                           <div class="row">
                           
                           
                               <input type="hidden" value="<?= $expe['experience_id'] ?>">
                           
                           
                            
                                <div class="input-field col l2">
                                    <input placeholder="Mois - Mois Année" id="date" name="date" type="text" class="validate" value="<?= $expe['experience_date'] ?>"/>
                                    <label for="date">Date</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input placeholder="X Mois" id="duree" name="duree" type="text" class="validate" value="<?= $expe['experience_duree'] ?>"/>
                                    <label for="duree">Durée</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input id="ville" name="ville" type="text" class="validate" value="<?= $expe['experience_ville'] ?>"/>
                                    <label for="date">Ville</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input id="cp" name="cp" type="text" class="validate" value="<?= $expe['experience_codepostal'] ?>"/>
                                    <label for="cp">Code Postal</label>

                                </div>
                            
                            </div>
                            
                            
                               
                               
                               <div class="row">
                               
                                <div class="input-field col l3">
                                    <input id="intitule" name="intitule" type="text" class="validate" value="<?= $expe['experience_intitule'] ?>"/>
                                    <label for="intitule">Intitulé</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l3">
                                    <input id="entreprise" name="entreprise" type="text" class="validate" value="<?= $expe['experience_entreprise'] ?>"/>
                                    <label for="entreprise">Entreprise</label>

                                </div>
                            
                            
                            
                            
                           
                                <div class="input-field col l3">
                                    <input placeholder="Job d'été / Stage" id="type" name="type" type="text" class="validate" value="<?= $expe['experience_type'] ?>"/>
                                    <label for="type">Type</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                   
                                <div class="input-field col l6">

                                    <textarea name="description" id="description" class="materialize-textarea"><?= $expe['experience_description'] ?></textarea>
                                    <label for="description">Description</label>

                                </div>
                            </div>
                            
                            
                            <div class="row">
                            
                                <div class="input-field col l1">
                                    <input id="ordre" name="ordre" type="text" class="validate" value="<?= $expe['experience_ordre'] ?>"/>
                                    <label for="ordre">Ordre</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                   
                               <input name="experience" class="btn col l4" type="submit" value="Modifier"/>
                   
                   
                           </div>
 
                       
                        </form>


                    </div>