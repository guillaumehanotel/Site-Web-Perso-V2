<div id="realisations" class="section scrollspy">
                    <h3>REALISATIONS</h3>
                    
                    
                    
                    
                    <div class="row">

                        <form method="post"  action="" class="col l12">


                          <input type="hidden" value="<?= $real['realisations_id'] ?>">
                          
                          
                          
                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="titre" name="titre" type="text" class="validate" value="<?= $real['realisations_titre'] ?>"/>
                                    <label for="titre">Titre</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l4">
                                    <input id="description" name="description" type="text" class="validate" value="<?= $real['realisations_desc'] ?>"/>
                                    <label for="description">Description</label>

                                </div>
                            

                            
                                <div class="input-field col l4">
                                    <input id="lien" name="lien" type="text" class="validate" value="<?= $real['realisations_link'] ?>"/>
                                    <label for="lien">Lien</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                               <input name="realisation" class="btn col l2" type="submit" value="Modifier"/>
                           </div>
 
                       
                        </form>


                    </div>