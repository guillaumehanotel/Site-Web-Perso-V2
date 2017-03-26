<?php if(isset($reload)){
        header("Refresh:0");
    }
?>
   

   
   <main id="admin">
    <div class="">
        <div class="row">
            <div class="col s12 m9 l11">
               
               
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
                                        <?= $value['presentation_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['presentation_description'];?>
                                    </td>
                                    <td>
                                        <?= $value['presentation_apropos'];?>
                                    </td>
                                    <td> <a href="<?= BASE_URL."/editPres"; ?>/?id=<?= $value['presentation_id'] ?>">Modifier</a></td>
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

                        <form  method="post" action="" class="col l12">


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
                   
                               <input name="experience" class="btn col l4" type="submit" value="Envoyer"/>
                   
                   
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
                                        <?= $value['experience_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_date'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_duree'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_ville'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_codepostal'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_intitule'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_entreprise'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_type'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_description'];?>
                                    </td>
                                    <td>
                                        <?= $value['experience_ordre'];?>
                                    </td>
                                    <td> <a href="<?= BASE_URL."/editExpe"; ?>/?id=<?= $value['experience_id'] ?>">Modifier</a></td>
                                    <td> <a href="<?= BASE_URL."/supprExpe"; ?>/?id=<?= $value['experience_id'] ?>">X</a> </td>
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

                        <form method="post"  action="" class="col l12">


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
                               <input name="realisation" class="btn col l2" type="submit" value="Envoyer"/>
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
                                        <?= $value['realisation_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisation_link'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisation_titre'];?>
                                    </td>
                                    <td>
                                        <?= $value['realisation_desc'];?>
                                    </td>
                                    <td> <a href="<?= BASE_URL."/editReal"; ?>/?id=<?= $value['realisation_id'] ?>">Modifier</a></td>
                                    <td> <a href="<?= BASE_URL."/supprReal"; ?>/?id=<?= $value['realisation_id'] ?>">X</a> </td>
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

                        <form method="post" action="" class="col l12">


                           <div class="row">
                            
                                <div class="input-field col l2">
                                    <input id="intitule" name="intitule" type="text" class="validate"/>
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
                               <input name="competence" class="btn col l2" type="submit" value="Envoyer"/>
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
                                        <?= $value['competence_id'];?>
                                    </td>
                                    <td>
                                        <?= $value['competence_intitule'];?>
                                    </td>
                                    <td>
                                        <?= $value['competence_categorie'];?>
                                    </td>
                                    <td> <a href="<?= BASE_URL."/editComp"; ?>/?id=<?= $value['competence_id'] ?>">Modifier</a></td>
                                    <td> <a href="<?= BASE_URL."/supprComp"; ?>/?id=<?= $value['competence_id'] ?>">X</a> </td>
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

                        <form method="post" action="" class="col l12">


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
                               <input name="formation" class="btn col l4" type="submit" value="Envoyer"/>
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
                                        <?= $value['formation_annee_debut'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_annee_fin'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_annee_courante'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_intitule'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_ecole'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_ville'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_ville_code_postal'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_description'];?>
                                    </td>
                                    <td>
                                        <?= $value['formation_lien'];?>
                                    </td>
                                    <td> <a href="<?= BASE_URL."/editForma"; ?>/?id=<?= $value['formation_id'] ?>">Modifier</a></td>
                                    <td> <a href="<?= BASE_URL."/supprForma"; ?>/?id=<?= $value['formation_id'] ?>">X</a> </td>
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




<footer class="page-footer">
          
    <div class="footer-copyright">
        <div class="container">
            © 2017 Guillaume HANOTEL
        </div>
            
    </div>
</footer>


</body>
</html>