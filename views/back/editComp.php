<div id="competences" class="section scrollspy">
                    <h3>COMPETENCES</h3>
                    
                    
                    
                    
                    <div class="row">

                        <form method="post" action="" class="col l12">

                           <input type="hidden" value="<?= $comp['competence_id'] ?>">

                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="intitule" name="intitule" type="text" class="validate" value="<?= $comp['competence_intitule'] ?>"/>
                                    <label for="intitule">Intitulé</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l3">
                                    <select name="categorie">
                                      <option value="" disabled selected>Niveau de pratique</option>
                                      <option value="1">Je maîtrise très bien (1)</option>
                                      <option value="2">Je maîtrise correctement (2)</option>
                                      <option value="3">Je maîtrise moyennement (3)</option>
                                    </select>
                                    <label>Catégorie</label>
                                </div>

                            
                            </div>
                            
                            
                            <div class="row">
                               <input name="competence" class="btn col l2" type="submit" value="Modifier"/>
                           </div>
 
                       
                        </form>


                    </div>