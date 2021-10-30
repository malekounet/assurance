<?php
require('../../model.php');
$vehicule = chercherVehiculeASupprimer($_POST['matricule']);
$donnees = $vehicule->fetch();
?>
                <tr><td><label for="policeSupprimerVehicule">Police</label></td><td><input type="text" id="policeSupprimerVehicule" required name="police" value="<?=$donnees['police']?>"></td></tr>
                <tr><td><label for="marquerSupprimerVehicule">marque </label></td><td><input type="text" id="marqueSupprimerVehicule" required name="nomPrenom" value="<?=$donnees['marque']?>"></td></tr>
                <tr><td><label for="couleurSupprimerVehicule">couleur</label></td><td><input type="text" name="" id="couleurSupprimerVehicule" cols="26" rows="3" required name="adresse" value="<?=$donnees['couleur']?>"></td></tr>
                <tr><td><label for="matriculeSupprimerVehicule">matricule </label></td><td><input type="text" id="matriculeSupprimerVehicule" required name="cin" value="<?=$donnees['matricule']?>"></td></tr>
