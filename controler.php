<?php
require('model.php');

function listClients(){
    $clients = afficherClients();
    require("views/clientView.php");
}

function listVehicule(){
    $vehicules = afficherVehicules();
    require('views/vehiculeView.php');

}

function listAssurance(){
    $assurances = afficherAssurances();
    require('views/assuranceView.php');
}