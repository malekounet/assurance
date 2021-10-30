<?php
session_start();
require("../../model.php");
$idAdmin = $_SESSION['idAdmin'];
// $civilite = $_POST['civilite'];
// $db = con();
// $reponse = $db->query("INSERT INTO clients (police, nomPrenom, localite, pays, cin, idAdmin, dateNaissance) VALUES('".$_POST['police']."', '".$_POST['nomPrenom']."', '".$_POST['localite']."', '".$_POST['pays']."', '".$_POST['cin']."', ".$idAdmin.", '".$_POST['dateNaissance']."');");
// $reponse->execute(array('police' => $this->police, 'nomPrenom' => $this->nomPrenom, 'localite' => $this->localite, 'pays' => $this->pays, 'cin' =>$this->cin, 'idAdmin' =>$this->idAdmin));
$client = new Client($_POST['adresse'], $_POST['cin'],$_POST['dateNaissance'], $idAdmin, $_POST['nomPrenom'], $_POST['police'], $_POST['telephone']);
$client->ajouterClient();
if(!empty($_POST['police']) && !empty($_POST['localite'])){
    echo $idAdmin;
}
else{
    echo 'error';
}