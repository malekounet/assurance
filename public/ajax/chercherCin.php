<?php
require("../../model.php");
$clients = chercherClient($_POST['cin']);
?>
                        <thead style="text-align: center;"><td>Police</td><td>Nom Prenom</td><td>adresse</td><td>CIN</td><td>Date Naissance</td></thead>
<?php
while($donnees = $clients->fetch()){?>
    <tr><td><?= $donnees['police'];?></td><td><?= $donnees['nomPrenom'];?></td><td><?= $donnees['adresse'];?></td><td><?= $donnees['cin'];?></td><td><?= $donnees['dateNaissance'];?></td></tr>
<?php
}
$clients->closeCursor();
?>