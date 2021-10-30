<?php
require('../../model.php');
$vehicule = new Vehicule($_POST['matricule'], $_POST['marque'], $_POST['police'], $_POST['couleur']);
$vehicule->modifierVehicule($_POST['matriculeAModifiee']);
echo 'bien ajouteee';