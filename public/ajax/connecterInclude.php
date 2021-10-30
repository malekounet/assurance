<?php
session_start();
require("../../model.php");
if(!empty($_POST['mail']) && !empty($_POST['pass'])){
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $con = new Connecter($mail, $pass);
    $reponse = $con->connect();
    
    if($pass == $reponse['pass']){
        header("Location: ../../index.php?action=clients");
    }
    else{
        header("Location: ../../views/connecter.php");
    }
    
}
else{
    header("Location: ../../views/connecter.php");
}