<div id="realisations" class="section scrollspy">
                    <h3>REALISATIONS</h3>
                    
                    
                    
                    
                    <div class="row">

                        <form method="post"  action="" class="col l12" enctype="multipart/form-data">


                          <input type="hidden" value="<?= $real['realisation_id'] ?>">
                          
                          
                          
                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="titre" name="titre" type="text" class="validate" value="<?= $real['realisation_titre'] ?>"/>
                                    <label for="titre">Titre</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l4">
                                    <input id="description" name="description" type="text" class="validate" value="<?= $real['realisation_desc'] ?>"/>
                                    <label for="description">Description</label>

                                </div>
                            

                            
                                <div class="input-field col l4">
                                    <input id="lien" name="lien" type="text" class="validate" value="<?= $real['realisation_link'] ?>"/>
                                    <label for="lien">Lien</label>

                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="file-field input-field col m5">

                                    <!-- On limite le fichier à 100Ko -->
                                    <input type="hidden" name="MAX_FILE_SIZE" value="500000">

                                    <div class="btn">
                                        <span>Image</span>
                                        <input type="file" name="avatar">
                                    </div>

                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>

                                </div>

                            </div>
                            
                            <div class="row">
                               <input name="realisation" class="btn col l2" type="submit" value="Modifier"/>
                           </div>
 
                       
                        </form>


                    </div>