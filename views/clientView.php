<?php $titre = 'Clients';?>
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
            <h1>Client</h1>
                <div class="crud">
                    <div class="ajouterClient">Ajouter</div>
                    <div class="modifierClient">Modifier</div>
                    <div class="supprinmerClient">Supprimer</div>
                </div>
                <div class="chercherClient"><input type="text" placeholder="CIN" id="chercherCin" name="cin"></div>
                <br><br><br>

                    <table id="tableInterface">
                        <thead style="text-align: center;"><td>Police</td><td>Nom Prenom</td><td>adresse</td><td>CIN</td><td>Date Naissance</td><td>Telephone</td></thead>
                        <?php 
                        
                        while($donnees = $clients->fetch()){?>
                        <tr><td><?= $donnees['police'];?></td><td><?= $donnees['nomPrenom'];?></td><td><?= $donnees['adresse'];?></td><td><?= $donnees['cin'];?></td><td><?= $donnees['dateNaissance'];?></td><td><?=$donnees['telephone']?></td></tr>
                        <?php }
                        $clients->closeCursor() ?>
                    </table>
        </div>

<?php $contenu = ob_get_clean();
    ob_start();?>

<div class="formAjoutClient" id="formAjoutClient">
    <!-- <fieldset>                         -->
        <form action="./pblic/js/formAjouterClient.php" method="post" id="form_ajouter_client">
            <table>
                
                <tr><td><label for="policeAjoutClient">Police</label></td><td><input type="text" id="policeAjoutClient" required name="police"></td></tr>
                <tr><td><label for="nomPrenomAjoutClient">Nom Prenom </label></td><td><input type="text" id="nomPrenomAjoutClient" required name="nomPrenom"></td></tr>
                <tr><td><label for="adresseAjoutClient">adress</label></td><td><input type="text" name="" id="adresseAjoutClient" cols="26" rows="3" required name="adresse"></td></tr>
                <tr><td><label for="cinAjoutClient">CIN </label></td><td><input type="text" id="cinAjoutClient" required name="cin"></td></tr>
                <tr><td><label for="dateNaissanceAjoutClient">Date Naissance </label></td><td><input type="date" id="dateNaissanceAjoutClient" name="dateNaissance"></td></tr>
                <tr><td><label for="telephoneAjoutClient">Telephone </label></td><td><input type="text" id="telephoneAjoutClient" required name="telephone"></td></tr>
            </table>
            
            
        </form>
        <div id="containerBtn">
        <div id="bton">
                
                <input type="button" id="annulerAjoutClient" value="Fermer">
                <input type="submit" name="ajouter" id="ajouterAjoutClient" value="Ajouter" >
                
        </div>
        </div>
        
       
</div>
    <?php $formAjoutClient = ob_get_clean();
        ob_start();?>
    <div class="formModifierClient" id="formModifierClient">
                <tr><td><input type="text" id="policeChercherClient" placeholder="Police" name="police"></td><td><button id=buttonChercherClientModif>Chercher</button></td></tr>

        <form action="" id="formModifierClientAjax">
            <table id="tableModifierClient">
                
             
                <tr><td>police</td><td><input type="text"  placeholder="Police" name="police"></td></tr>

                <tr><td><label for="nomPrenomModifierClient">Nom Prenom </label></td><td><input type="text" id="nomPrenomModifierClient" name="nomPrenom"></td></tr>
                <tr><td><label for="adresseModifierClient">adress</label></td><td><input type="text" name="adresse" id="adresseModifierClient" ></td></tr>
                <tr><td><label for="cinModifierClient">CIN </label></td><td><input type="text" id="cinModifierClient" name="cin"></td></tr>
                <tr><td><label for="dateNaissanceModifierClient">Date Naissance </label></td><td><input type="date" id="dateNaissanceModifierClient" name="dateNaissance"></td></tr>
                <tr><td><label for="telephoneModifierClient">Telephone </label></td><td><input type="text" id="telephoneModifierClient" name="telephone"></td></tr> 
                
                
            </table>
           <!-- <div class="button">
                <button id="annulerModifierClient">Annuler</button>
                <button>Modifier</button>
                <input type="submit" id="submitFormModifierClient" value="submit">
            </div> -->
          
            
        </form>
        <div id="containerBtn">
                <div id="bton">
                
                <input type="button" id="annulerModifierClient" value="Fermer">
                <input type="submit" name="ajouter" id="submitFormModifierClient" value="Modifier" >
                
                </div>
        </div>
    </div>
<?php $formModifierClient = ob_get_clean();
ob_start();?>
    <div class="formSupprimerClient" id="formSupprimerClient">
<div>
<input type="text" id="policeSupprimerClientChercher" placeholder="Police" name="police"><button id="chercherClientASupprimee">chercher</button>

    </div>
        <div class="divSupprimerClient">
            <table id="tableSupprimerClient">
                
                <tr><td><label for="nomPrenomSupprimerClient">Nom Prenom </label></td><td><input type="text" id="nomPrenomSupprimerClient" name="nomPrenom"></td></tr>
                <tr><td><label for="adresseSupprimerClient">adress</label></td><td><input type="text" name="" id="adresseSupprimerClient"></td></tr>
                <tr><td><label for="cinSupprimerClient">CIN </label></td><td><input type="text" id="cinSupprimerClient"></td></tr>
                <tr><td><label for="dateNaissanceSupprimerClient">Date Naissance </label></td><td><input type="date" id="dateNaissanceSupprimerClient"></td></tr>
            </table>
            <!-- <div class="button">
                <button id="annulerSupprimerClient">Annuler</button>
                <input type="submit" id="supprimerClientDefin">
            </div> -->
            
         </div>
            <div id="containerBtn">
                <div id="bton">
                
                    <input type="button" id="annulerSupprimerClient" value="Fermer">
                    <input type="submit" name="ajouter" id="supprimerClientDefin" value="Supprimer" >
                
                </div>
            </div>
    </div>
<?php $formSupprimerClient = ob_get_clean();
require('./template.php');?>







