<?php
require('../../model.php');
$police = chercherVehiculePourAssurance($_POST['matricule']);
$donnees = $police->fetch();

?>
                <tr><td><label for="policeAjoutAssurance">Police</label></td><td><input type="text" id="policeAjoutAssurance" required name="police" value="<?=$donnees['police'];?>"></td></tr>
                <tr><td><label for="matricule">matricule</label></td><td><input type="text" id="matricule" name="matricule" required value="<?=$donnees['matricule'];?>"></td></tr>
                <tr><td><label for="compagnieAjoutAssurance">compagnie </label></td><td><select name="compagnie" id="compagnieAjoutAssurance" ><option value="SAHAM">SAHAM</option><option value="SANAD">SANAD</option><option value="ALLIANZ">ALLIANZ</option><option value="MCMA">MCMA</option><option value="CAT">CAT</option></select></td></tr>
                <tr><td><label for="effetAjoutAssurance">effet</label></td><td><input type="date" name="effet" id="effetAjoutAssurance" ></td></tr>
                <tr><td><label for="typeeAjoutAssurance">type assurance</label></td><td><select name="type" id="typeeAjoutAssurance"><option value="trimestrielle">trimestrielle</option><option value="semestrielle">semestrielle</option><option value="annuelle">annuelle</option></select></td></tr>

                <tr><td><label for="expireLeAjoutAssurance">expire le </label></td><td><input type="date" id="expireLeAjoutAssurance" required name="expireLe"></td></tr>
                <tr><td><label for="attestation">attestation</label></td><td><input type="file" id="attestation" name="fichier"></td></tr>
                <tr><td><input type="button" id="annulerAjoutClient" value="Fermer" onclick="$('#formAjoutClient').fadeOut();"></td><td><input type="submit" name="ajouter" id="ajouterAjoutAssurance" value="Ajouter" ></td></tr>
        <script>
            $('#typeeAjoutAssurance').change(function(){
                let effet = new Date($('#effetAjoutAssurance').val());
                let type = $('#typeeAjoutAssurance').val();
                let result = ' ';
                if(type == 'trimestrielle'){
                    effet.setMonth(effet.getMonth()+3);
                    
                    let day = ('0' + effet.getDate()).slice(-2);
                    let month = ('0' + (effet.getMonth()+1)).slice(-2);
                    result = effet.getFullYear() + '-'+ month + '-' + day;
                    $('#expireLeAjoutAssurance').val(result);
                }
                else if(type == 'semestrielle')
                {
                    effet.setMonth(effet.getMonth()+6);
                    let day = ('0' + effet.getDate()).slice(-2);
                    let month = ('0' + (effet.getMonth()+1)).slice(-2);
                    result = effet.getFullYear() + '-'+ month + '-' + day;
                    $('#expireLeAjoutAssurance').val(result);
                }
                else if(type == 'annuelle')
                {
                    effet.setFullYear(effet.getFullYear()+1);
                    let day = ('0' + effet.getDate()).slice(-2);
                    let month = ('0' + (effet.getMonth()+1)).slice(-2);
                    result = effet.getFullYear() + '-'+ month + '-' + day;
                    $('#expireLeAjoutAssurance').val(result);
                }

                
                
                
            });

            $('#ajouterAjoutAssurance').click(function(e){
                e.preventDefault();
                let form = document.getElementById('form_ajouter_client');
                let formData = new FormData(form);
                $.ajax({
                    url:'http://localhost/assurance/public/ajax/formAjouterAssuranceDatabase.php',
                    method:'POST',
                    data:formData,
                    success:function(){
                        alert('bien ajouteee');
                    },
                    cache:false,
                    contentType:false,
                    processData:false
                });
    
   
            });


        </script>
<?php
$police->closeCursor();
?>
