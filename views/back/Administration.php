<main id="admin">
    <div class="">
        <div class="row">
            <div class="col s12 m9 l11">
               
               
               
    
               
               
                <div id="presentation" class="section scrollspy">
                    <h3>PRESENTATION</h3>
                    

                                 
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="description">Description</th>
                                <th data-field="apropos">A propos</th>
                                <th data-field="modif">Modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($resultat_pres as $value){?>
                                <tr>
                                    <td>
                                        <?= $value['id_presentation'];?>
                                    </td>
                                    <td>
                                        <?= $value['description'];?>
                                    </td>
                                    <td>
                                        <?= $value['apropos'];?>
                                    </td>
                                    <td>Modifier</td>
                                </tr>
                                <?php
                }

                  ?>
                        </tbody>
                    </table>
                    <div class="divider"></div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div id="experiences" class="section scrollspy">
                    <h3>EXPERIENCES</h3>
                    
                    
                    <div class="row">

                        <form method="post" action="" class="col l12">


                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input placeholder="Mois - Mois Année" id="date" name="date" type="text" class="validate"/>
                                    <label for="date">Date</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input placeholder="X Mois" id="duree" name="duree" type="text" class="validate"/>
                                    <label for="duree">Durée</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input id="ville" name="ville" type="text" class="validate"/>
                                    <label for="date">Ville</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input id="cp" name="cp" type="text" class="validate"/>
                                    <label for="cp">Code Postal</label>

                                </div>
                            
                            </div>
                            
                            
                               
                               
                               <div class="row">
                               
                                <div class="input-field col l3">
                                    <input id="intitule" name="intitule" type="text" class="validate"/>
                                    <label for="intitule">Intitulé</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l3">
                                    <input id="entreprise" name="entreprise" type="text" class="validate"/>
                                    <label for="entreprise">Entreprise</label>

                                </div>
                            
                            
                            
                            
                           
                                <div class="input-field col l3">
                                    <input placeholder="Job d'été / Stage" id="type" name="type" type="text" class="validate"/>
                                    <label for="type">Type</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                   
                                <div class="input-field col l6">

                                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                                    <label for="description">Description</label>

                                </div>
                            </div>
                            
                            
                            <div class="row">
                            
                                <div class="input-field col l1">
                                    <input id="ordre" name="ordre" type="text" class="validate"/>
                                    <label for="ordre">Ordre</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                   
                               <input class="btn col l4" type="submit" value="Envoyer"/>
                   
                   
                           </div>
 
                       
                        </form>


                    </div>
                    
                    
                               
                             
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="date">Date</th>
                                <th data-field="duree">Durée</th>
                                <th data-field="ville">Ville</th>
                                <th data-field="cp">Code Postal</th>
                                <th data-field="intitule">Intitulé</th>
                                <th data-field="entreprise">Entreprise</th>
                                <th data-field="type">Type</th>
                                <th data-field="description">Description</th>
                                <th data-field="ordre">Ordre</th>
                                <th data-field="modif">Modifier</th>
                                <th data-field="delete">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($resultat_expe as $value){?>
                                <tr>
                                    <td>
                                        <?= $value['experiences_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_date'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_duree'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_ville'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_codepostal'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_intitule'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_entreprise'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_type'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_description'];?>
                                    </td>
                                    <td>
                                        <?= $value['experiences_ordre'];?>
                                    </td>
                                    <td>Modifier</td>
                                    <td> <a href="<?= BASE_URL." Site-Web-Perso-V2/supprExpe "; ?>/?id=<?= $value['experiences_id'] ?>">X</a> </td>
                                </tr>
                                <?php
                }

                  ?>
                        </tbody>
                    </table>
                    <div class="divider"></div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div id="realisations" class="section scrollspy">
                    <h3>REALISATIONS</h3>
                    
                    
                    
                    
                    <div class="row">

                        <form method="post" name="realisation" action="" class="col l12">


                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="titre" name="titre" type="text" class="validate"/>
                                    <label for="titre">Titre</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l4">
                                    <input id="description" name="description" type="text" class="validate"/>
                                    <label for="description">Description</label>

                                </div>
                            

                            
                                <div class="input-field col l4">
                                    <input id="lien" name="lien" type="text" class="validate"/>
                                    <label for="lien">Lien</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                               <input class="btn col l2" type="submit" value="Envoyer"/>
                           </div>
 
                       
                        </form>


                    </div>
                    
                    
                    
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="link">Lien</th>
                                <th data-field="titre">Titre</th>
                                <th data-field="description">Description</th>
                                <th data-field="modif">Modifier</th>
                                <th data-field="delete">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($resultat_real as $value){?>
                                <tr>
                                    <td>
                                        <?= $value['realisations_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisations_link'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisations_titre'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisations_desc'];?>
                                    </td>
                                    <td>Modifier</td>
                                    <td> <a href="<?= BASE_URL." Site-Web-Perso-V2/supprReal "; ?>/?id=<?= $value['realisations_id'] ?>">X</a> </td>
                                </tr>
                                <?php
                }

                ?>
                        </tbody>
                    </table>
                    <div class="divider"></div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                <div id="competences" class="section scrollspy">
                    <h3>COMPETENCES</h3>
                    
                    
                    
                    
                    <div class="row">

                        <form method="post" name="competences" action="" class="col l12">


                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="intitule" name="intitule" type="text" class="validate"/>
                                    <label for="intitule">Intitulé</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l3">
                                    <select>
                                      <option value="" disabled selected>Niveau de pratique</option>
                                      <option value="1">Je maîtrise très bien (1)</option>
                                      <option value="2">Je maîtrise correctement (2)</option>
                                      <option value="3">Je maîtrise moyennement (3)</option>
                                    </select>
                                    <label>Catégorie</label>
                                </div>

                            
                            </div>
                            
                            
                            <div class="row">
                               <input class="btn col l2" type="submit" value="Envoyer"/>
                           </div>
 
                       
                        </form>


                    </div>
                       
       
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="intitule">Intitulé</th>
                                <th data-field="categorie">Catégorie</th>
                                <th data-field="modif">Modifier</th>
                                <th data-field="delete">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($resultat_comp as $value){?>
                                <tr>
                                    <td>
                                        <?= $value['competences_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['competences_intitule'];?>
                                    </td>
                                    <td>
                                        <?= $value['competences_categorie'];?>
                                    </td>
                                    <td>Modifier</td>
                                    <td> <a href="<?= BASE_URL." Site-Web-Perso-V2/supprComp "; ?>/?id=<?= $value['competences_id'] ?>">X</a> </td>
                                </tr>
                                <?php
                }

                ?>
                        </tbody>
                    </table>
                    <div class="divider"></div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div id="formations" class="section scrollspy">
                    <h3>FORMATIONS</h3>
                    
                    
                    
                    
                    
                    <div class="row">

                        <form method="post" name="formations" action="" class="col l12">


                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="anneedebut" name="anneedebut" type="text" class="validate"/>
                                    <label for="anneedebut">Année Début</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input id="anneefin" name="anneefin" type="text" class="validate"/>
                                    <label for="anneefin">Année Fin</label>

                                </div>
                            
                            
                            
                            
                                <div class="input-field col l2">
                                    <input placeholder="1ère  / 2ème" id="anneecourante" name="anneecourante" type="text" class="validate"/>
                                    <label for="anneecourante">ième année</label>

                                </div>              
                        
                            
                            </div>
                            
                            
                               
                               
                            <div class="row">
                              
                               
                                <div class="input-field col l3">
                                    <input id="intitule" name="intitule" type="text" class="validate"/>
                                    <label for="intitule">Intitulé</label>
                                </div>
                            
                            
                            
                            
                                <div class="input-field col l3">
                                    <input id="ecole" name="ecole" type="text" class="validate"/>
                                    <label for="ecole">Ecole</label>
                                </div>
                            
                           
                                <div class="input-field col l3">
                                    <input id="ville" name="ville" type="text" class="validate"/>
                                    <label for="ville">Ville</label>
                                </div>
                                
                                
                                <div class="input-field col l2">
                                    <input id="cp" name="cp" type="text" class="validate"/>
                                    <label for="cp">Code Postal</label>
                                </div>     
                            
                            </div>
                            
                            
                            
                            
                            <div class="row">
                   
                                <div class="input-field col l6">

                                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                                    <label for="description">Description</label>

                                </div>
                            </div>
                            
                            
                            <div class="row">
                            
                                <div class="input-field col l4">
                                    <input id="lien" name="lien" type="text" class="validate"/>
                                    <label for="lien">Lien</label>

                                </div>
                            
                            </div>
                            
                            
                            <div class="row">
                               <input class="btn col l4" type="submit" value="Envoyer"/>
                           </div>
 
                       
                        </form>


                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th data-field="id">ID</th>
                                <th data-field="anneedebut">Année Début</th>
                                <th data-field="anneefin">Année Fin</th>
                                <th data-field="anneecourante">Num Année</th>
                                <th data-field="intitule">Intitulé</th>
                                <th data-field="ecole">Ecole</th>
                                <th data-field="ville">Ville</th>
                                <th data-field="cp">Code Postal</th>
                                <th data-field="description">Description</th>
                                <th data-field="lien">Lien</th>
                                <th data-field="modif">Modifier</th>
                                <th data-field="delete">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                foreach ($resultat_forma as $value){?>
                                <tr>
                                    <td>
                                        <?= $value['formation_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['annee_debut'];?>
                                    </td>
                                    <td>
                                        <?= $value['annee_fin'];?>
                                    </td>
                                    <td>
                                        <?= $value['annee_courante'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_intitulé'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_ecole'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_ville'];?>
                                    </td>
                                    <td>
                                        <?= $value['ville_code_postal'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_description'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_lien'];?>
                                    </td>
                                    <td>Modifier</td>
                                    <td> <a href="<?= BASE_URL." Site-Web-Perso-V2/supprForma "; ?>/?id=<?= $value['formation_id'] ?>">X</a> </td>
                                </tr>
                                <?php
                }

                ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            
            
            
            

            
            
            
            
            
            <div id="lateral-menu" class="col hide-on-small-only m3 l1">
                <ul class="section table-of-contents">
                    <li><a href="#presentation">Présentation</a></li>
                    <li><a href="#experiences">Experiences</a></li>
                    <li><a href="#realisations">Réalisations</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="#formations">Formations</a></li>
                </ul>
            </div>
            
            
            
            
  
        </div>
    </div>
</main>