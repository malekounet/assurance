<?php
require('../../model.php');
$vehicule = chercherVehiculeParMatricule($_POST['matricule']);
$donnees = $vehicule->fetch();
?>

                <tr><td><label for="policeModifierVehicule">Police</label></td><td><input type="text" id="policeModifierVehicule" required name="police" value="<?=$donnees['police']?>"></td></tr>
                <tr><td><label for="marquerModifierVehicule">marque </label></td><td><input type="text" id="marqueModifierVehicule" required name="nomPrenom" value="<?=$donnees['marque']?>"></td></tr>
                <tr><td><label for="couleurModifierVehicule">couleur</label></td><td><input type="text" name="" id="couleurModifierVehicule" cols="26" rows="3" required name="adresse" value="<?=$donnees['couleur']?>"></td></tr>
                <tr><td><label for="matriculeModifierVehicule">matricule </label></td><td><input type="text" id="matriculeModifierVehicule" required name="matricule" value="<?=$donnees['matricule']?>"></td></tr>
