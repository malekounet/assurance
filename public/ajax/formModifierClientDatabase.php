<?php
session_start();
require('../../model.php');
$idAdmin = $_SESSION['idAdmin'];
$client = new Client( $_POST['adresse'], $_POST['cin'], $_POST['dateNaissance'], $idAdmin, $_POST['nomPrenom'], $_POST['police'], $_POST['telephone']);
$client->modifierClient($_POST['police']);
// police, $typeClient,$nomPrenom, $localite, $pays, $cin, $dateNaissance, $idAdmin
