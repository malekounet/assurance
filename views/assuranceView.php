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
            <h1>Assurances</h1>
                <div class="crud">
                    <div class="ajouterClient">Ajouter</div>
                    <div class="modifierClient">Modifier</div>
                    <div class="supprinmerClient">Supprimer</div>
                </div>
                <div class="chercherClient"><input type="text" placeholder="Matricule" id="chercherMatricule" name="matricule"></div>
                
                <br><br><br>

                    <table id="tableInterface">
                        <thead style="text-align: center;"><td>Police</td><td>compagnie</td><td>effet</td><td>expire le</td><td>attestation</td><td>matricule</td></thead>
                        <?php 
                        
                        while($donnees = $assurances->fetch()){?>
                        <tr><td><?= $donnees['police'];?></td><td><?= $donnees['compagnie'];?></td><td><?= $donnees['effet'];?></td><td><?= $donnees['expireLe'];?></td><td><a style="color:black;" href="http://localhost/assurance/public/attestations/<?= $donnees['attestation'];?>">Voir</a></td><td><?= $donnees['matricule'];?></td></tr>
                        <?php }
                        $assurances->closeCursor(); ?>
                    </table>
        </div>

<?php $contenu = ob_get_clean();
    ob_start();?>

<div class="formAjoutClient" id="formAjoutClient">
    <!-- <fieldset>                         -->
    <tr><td><input type="text" id="matriculeChercherVehiculeAAssurer" placeholder="matricule" name="police"></td><td><button id=buttonChercherVehiculeAAssurer>Chercher</button></td></tr>

        <form action="" method="post" id="form_ajouter_client" enctype="multipart/form-data">
            <table id="ajoutAssuranceTable">
                
                <tr><td><label for="policeAjoutAssurance">Police</label></td><td><input type="text" id="policeAjoutAssurance" required name="police"></td></tr>
                <tr><td><label for="compagnieAjoutAssurance">compagnie </label></td><td><select name="compagnie" id="compagnieAjoutAssurance"><option value="SAHAM">SAHAM</option><option value="SANAD">SANAD</option><option value="ALLIANZ">ALLIANZ</option><option value="MCMA">MCMA</option><option value="CAT">CAT</option></select></td></tr>
                <tr><td><label for="effetAjoutAssurance">effet</label></td><td><input type="date" name="" id="effetAjoutAssurance" required name="couleur"></td></tr>
                <tr><td><label for="typeeAjoutAssurance">type assurance</label></td><td><select name="type" id="typeeAjoutAssurance"><option value="trimestrielle">trimestrielle</option><option value="semestrielle">semestrielle</option><option value="annuelle">annuelle</option></select></td></tr>
                <tr><td><label for="expireLeAjoutAssurance">expire le </label></td><td><input type="date" id="expireLeAjoutAssurance" required name="matricule"></td></tr>
                <tr><td><label for="attestation">attestation</label></td><td><input type="file" id="attestation" name="fichier"></td></tr>
                <tr><td><input type="button" id="annulerAjoutClient" value="Fermer"></td><td><input type="submit" name="ajouter" id="ajouterAjoutAssurance" value="Ajouter" ></td></tr>
            </table>
            
            
        </form>
        <div id="containerBtn">
        <div id="bton">
                
                <!-- <input type="button" id="annulerAjoutClient" value="Fermer">
                <input type="submit" name="ajouter" id="ajouterAjoutAssurance" value="Ajouter" > -->
                
        </div>
        </div>
        
       
</div>
    <?php $formAjoutClient = ob_get_clean();
        ob_start();?>
    <div class="formModifierClient" id="formModifierClient">
                <tr><td><input type="text" id="matriculeChercherVehicule" placeholder="Police" name="police"></td><td><button id=buttonChercherVehiculeModif>Chercher</button></td></tr>

        <form action="" id="formModifierClientAjax">
            <table id="tableModifierAssurance">
                
             
                <tr><td><label for="policeModifierAssurance">Police</label></td><td><input type="text" id="policeModifierAssurance" required name="police"></td></tr>
                <tr><td><label for="compagnieModifierAssurance">compagnie </label></td><td><input type="text" id="compagnieModifierAssurance" required name="nomPrenom"></td></tr>
                <tr><td><label for="effetModifierAssurance">effet</label></td><td><input type="text" name="" id="effetModifierAssurance" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="expireLeModifierAssurance">expire le </label></td><td><input type="text" id="expireLeModifierAssurance" required name="cin"></td></tr>
                
                
            </table>
          
          
            
        </form>
        <div id="containerBtn">
                <div id="bton">
                
                <input type="button" id="annulerModifierClient" value="Fermer">
                <input type="submit" name="ajouter" id="submitFormModifierAssurance" value="Enregistrer" >
                
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
            <table id="tableSupprimerAssurance">
                
                <tr><td><label for="policeSupprimerAssurance">Police</label></td><td><input type="text" id="policeSupprimerAssurance" required name="police"></td></tr>
                <tr><td><label for="compagnieSupprimerVehicule">compagnie </label></td><td><input type="text" id="compagnieSupprimerVehicule" required name="nomPrenom"></td></tr>
                <tr><td><label for="effetSupprimerVehicule">effet</label></td><td><input type="text" name="" id="effetSupprimerVehicule" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="expireLeSupprimerVehicule">expire le </label></td><td><input type="text" id="expireLeSupprimerVehicule" required name="cin"></td></tr>
            </table>
            <!-- <div class="button">
                <button id="annulerSupprimerClient">Annuler</button>
                <input type="submit" id="supprimerClientDefin">
            </div> -->
            
         </div>
            <div id="containerBtn">
                <div id="bton">
                
                    <input type="button" id="annulerSupprimerClient" value="Fermer">
                    <input type="submit" name="ajouter" id="supprimerAssuranceDefin" value="Supprimer" >
                
                </div>
            </div>
    </div>
<?php $formSupprimerClient = ob_get_clean();
require('./template.php');?>
