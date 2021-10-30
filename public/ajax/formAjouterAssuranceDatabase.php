<?php
require('../../model.php');
if(isset($_FILES['fichier']) AND isset($_POST['expireLe'])){
    $infoFichier = pathinfo($_FILES['fichier']['name']);
    $extensionFichier = $infoFichier['extension'];
    $extensionAutorisee = array('jpg', 'jpeg', 'png');
    if(in_array($extensionFichier, $extensionAutorisee)){
        $rst = date("Y-m-d h:i:sa");
        $rst = str_replace(':','_',$rst);
        $rst = str_replace(' ','_',$rst);
        $rst = $rst.'.'.$extensionFichier;
        $assurance = new Assurance();
        $assurance->ajouterAssurance($_POST['effet'], $_POST['type'], $_POST['police'], $_POST['matricule'], $_POST['expireLe'], $_POST['compagnie'], $rst);
        move_uploaded_file($_FILES['fichier']['tmp_name'], '../attestations/'.$rst);
        echo 'ajoutee avec success';
    }
}