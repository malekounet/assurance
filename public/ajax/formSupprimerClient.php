<?php
require('../../model.php');
$reponse = chercherClientASupprimer($_POST['police']);
$donnees = $reponse->fetch();?>


                <tr><td><label for="policeSupprimerClient"></label></td><td><input type="text" id="policeSupprimerClient"  name="police" value="<?=$donnees['police']?>"></td></tr>
                <tr><td><label for="nomPrenomSupprimerClient">Nom Prenom </label></td><td><input type="text" id="nomPrenomSupprimerClient" name="nomPrenom" value="<?=$donnees['nomPrenom']?>"></td></tr>
                <tr><td><label for="adresseSupprimerClient">adress</label></td><td><input type="text" name="" id="adresseSupprimerClient" value="<?=$donnees['adresse']?>"></td></tr>
                <tr><td><label for="cinSupprimerClient">CIN </label></td><td><input type="text" id="cinSupprimerClient" value="<?=$donnees['cin']?>"></td></tr>
                <tr><td><label for="dateNaissanceSupprimerClient">Date Naissance </label></td><td><input type="date" id="dateNaissanceSupprimerClient" value="<?=$donnees['dateNaissance']?>"></td></tr>


