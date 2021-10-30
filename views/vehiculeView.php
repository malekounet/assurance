<?php ob_start(); ?>

<div class="menu">
            <ul>
                <li><a href="../index.php?action=accueil"><img src="./public/images/maison.png" alt="" style="width: 27px; margin-right:1px;position:relative;top:4px;">Accueil</a></li>
                <li><a href="http://localhost/assurance/index.php?action=clients"><img src="./public/images/avis-client.png" alt="" style="width: 27px; margin-right:1px; position:relative;top:4px;">Client</a></li>
                <li><a href="http://localhost/assurance/index.php?action=vehicules"><img src="./public/images/automobile.png" alt="" style="width: 27px; margin-right:1px; position:relative;top:4px; ">Vehicule</a></li>
                <li><a href="http://localhost/assurance/index.php?action=assurances"><img src="./public/images/sante.png" alt="" style="width: 27px; margin-right:0px; position:relative;top:4px;">Assurance</a></li>
                <li id="deconnecter">Deconnecter</li>
            </ul>
</div>

<?php $menu = ob_get_clean(); 
    ob_start();?>

<div class="contenu">
            <h1>Vehicules</h1>
                <div class="crud">
                    <div class="ajouterClient">Ajouter</div>
                    <div class="modifierClient">Modifier</div>
                    <div class="supprinmerClient">Supprimer</div>
                </div>
                <div class="chercherClient"><input type="text" placeholder="Matricule" id="chercherMatricule" name="matricule"></div>
                
                <br><br><br>

                    <table id="tableInterface">
                        <thead style="text-align: center;"><td>Police</td><td>marque</td><td>couleur</td><td>matricule</td></thead>
                        <?php 
                        
                        while($donnees = $vehicules->fetch()){?>
                        <tr><td><?= $donnees['police'];?></td><td><?= $donnees['marque'];?></td><td><?= $donnees['couleur'];?></td><td><?= $donnees['matricule'];?></td></tr>
                        <?php }
                        $vehicules->closeCursor(); ?>
                    </table>
        </div>

<?php $contenu = ob_get_clean();
    ob_start();?>

<div class="formAjoutClient" id="formAjoutClient">
    <!-- <fieldset>                         -->
        <form action="" method="post" id="form_ajouter_client">
            <table>
                
                <tr><td><label for="policeAjoutVehicule">Police</label></td><td><input type="text" id="policeAjoutVehicule" required name="police"></td></tr>
                <tr><td><label for="marquerAjoutVehicule">marque </label></td><td><input type="text" id="marqueAjoutVehicule" required name="nomPrenom"></td></tr>
                <tr><td><label for="couleurAjoutVehicule">couleur</label></td><td><input type="text" name="" id="couleurAjoutVehicule" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="matriculeAjoutVehicule">matricule </label></td><td><input type="text" id="matriculeAjoutVehicule" required name="cin"></td></tr>
            </table>
            
            
        </form>
        <div id="containerBtn">
        <div id="bton">
                
                <input type="button" id="annulerAjoutClient" value="Fermer">
                <input type="submit" name="ajouter" id="ajouterAjoutVehicule" value="Ajouter" >
                
        </div>
        </div>
        
       
</div>
    <?php $formAjoutClient = ob_get_clean();
        ob_start();?>
    <div class="formModifierClient" id="formModifierClient">
                <tr><td><input type="text" id="matriculeChercherVehicule" placeholder="Police" name="police"></td><td><button id=buttonChercherVehiculeModif>Chercher</button></td></tr>

        <form action="" id="formModifierClientAjax">
            <table id="tableModifierVehicule">
                
             
                <tr><td><label for="policeModifierVehicule">Police</label></td><td><input type="text" id="policeModifierVehicule" required name="police"></td></tr>
                <tr><td><label for="marquerModifierVehicule">marque </label></td><td><input type="text" id="marqueModifierVehicule" required name="nomPrenom"></td></tr>
                <tr><td><label for="couleurModifierVehicule">couleur</label></td><td><input type="text" name="" id="couleurModifierVehicule" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="matriculeModifierVehicule">matricule </label></td><td><input type="text" id="matriculeModifierVehicule" required name="cin"></td></tr>
                
                
            </table>
          
          
            
        </form>
        <div id="containerBtn">
                <div id="bton">
                
                <input type="button" id="annulerModifierClient" value="Fermer">
                <input type="submit" name="ajouter" id="submitFormModifierVehicule" value="Modifier" >
                
                </div>
        </div>
    </div>
<?php $formModifierClient = ob_get_clean();
ob_start();?>
    <div class="formSupprimerClient" id="formSupprimerClient">
<div>
<input type="text" id="matriculeSupprimerVehiculeChercher" placeholder="Matricule" name="matricule"><button id="chercherVehiculeASupprimee">chercher</button>

    </div>
        <div class="divSupprimerClient">
            <table id="tableSupprimerVehicule">
                
                <tr><td><label for="policeSupprimerVehicule">Police</label></td><td><input type="text" id="policeSupprimerVehicule" required name="police"></td></tr>
                <tr><td><label for="marquerSupprimerVehicule">marque </label></td><td><input type="text" id="marqueSupprimerVehicule" required name="nomPrenom"></td></tr>
                <tr><td><label for="couleurSupprimerVehicule">couleur</label></td><td><input type="text" name="" id="couleurSupprimerVehicule" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="matriculeSupprimerVehicule">matricule </label></td><td><input type="text" id="matriculeSupprimerVehicule" required name="cin"></td></tr>
            </table>
            <!-- <div class="button">
                <button id="annulerSupprimerClient">Annuler</button>
                <input type="submit" id="supprimerClientDefin">
            </div> -->
            
         </div>
            <div id="containerBtn">
                <div id="bton">
                
                    <input type="button" id="annulerSupprimerClient" value="Fermer">
                    <input type="submit" name="ajouter" id="supprimerVehiculeDefin" value="Supprimer" >
                
                </div>
            </div>
    </div>
<?php $formSupprimerClient = ob_get_clean();
require('./template.php');?>
