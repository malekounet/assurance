<?php
require('../../model.php');
$vehicule = new Vehicule($_POST['matricule'], $_POST['marque'], $_POST['police'], $_POST['couleur']);
$vehicule->ajouterVehicule();
echo 'bien ajouteee'.$_POST['matricule'];