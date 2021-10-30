<?php 
require("../../model.php");
 $client = chercherClientParPolice($_POST['police']);
$clients = $client->fetch(); ?>

                <tr><td><label for="policeClients">Police</label></td><td><input type="text" id="policeClients" value="<?=$_POST['police']?>" name="police"></td></tr>

                <tr><td><label for="nomPrenomModifierClient">Nom Prenom </label></td><td><input type="text" id="nomPrenomModifierClient" value="<?=$clients['nomPrenom']?>"></td></tr>
                <tr><td><label for="adresseModifierClient">adress</label></td><td><input type="text" name="" id="adresseModifierClient" name="adresse" value="<?=$clients['adresse']?>"></td></tr>
                <tr><td><label for="cinModifierClient">CIN </label></td><td><input type="text" id="cinModifierClient" value="<?=$clients['cin']?>"></td></tr>
                <tr><td><label for="dateNaissanceModifierClient">Date Naissance </label></td><td><input type="date" id="dateNaissanceModifierClient" value="<?=$clients['dateNaissance']?>"></td></tr>
                <tr><td><label for="telephoneModifierClient">Telephone </label></td><td><input type="text" id="telephoneModifierClientss" name="telephone" value="<?=$clients['telephone']?>"></td></tr> 
               
