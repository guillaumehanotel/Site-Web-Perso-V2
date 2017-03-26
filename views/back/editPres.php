 <div id="presentation" class="section scrollspy">
                    <h3>PRESENTATION</h3>
                    
                    
                    <div class="row">

                        <form  method="post" action="" class="col l12">

                           
                           
                           <input type="hidden" value="<?= $pres['presentation_id'] ?>">

                          
                           <div class="row">
                           
                            
                                <div class="input-field col l6">
                                   
                                    <textarea name="description" id="description" class="materialize-textarea"><?= $pres['presentation_description'] ?></textarea>
                                    <label for="description">Description</label>

                                </div>
                            
                            </div>
                            <div class="row">
                            
                            
                                <div class="input-field col l6">
                                   
                                    <textarea name="apropos" id="apropos" class="materialize-textarea"><?= $pres['presentation_apropos'] ?></textarea>
                                    <label for="apropos">A Propos</label>

                                </div>
                            
                            </div>

                            
                      
                            <div class="row">
                   
                               <input name="presentation" class="btn col l4" type="submit" value="Modifier"/>
                   
                   
                           </div>
 
                       
                        </form>


                    </div>