<?php
require('../../model.php');
$vehicule = chercherVehicule($_POST['matricule']);
?>
        <thead style="text-align: center;"><td>Police</td><td>marque</td><td>couleur</td><td>matricule</td></thead>
<?php
        while($donnees = $vehicule->fetch()){
?>
        <tr><td><?= $donnees['police'];?></td><td><?= $donnees['marque'];?></td><td><?= $donnees['couleur'];?></td><td><?= $donnees['matricule'];?></td></tr>
    <?php 
                        }
        $vehicule->closeCursor();
    ?>

