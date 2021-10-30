<?php
require('controler.php');

if(isset($_GET['action'])){
    if($_GET['action']=='clients'){
        listClients();
    }
    elseif($_GET['action'] =='vehicules'){
        listVehicule();
    }
    elseif($_GET['action'] == 'assurances'){
        listAssurance();
    }
    }
else{
    echo 'rien';
}