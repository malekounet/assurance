$(document).ready(function(){

    $('button').click(function(e){
        e.preventDefault()
    });
    $('#ajouterAjoutClient').click(function(e){
        e.preventDefault();
    });


    $('#formAjoutClient').hide();
    $('#formModifierClient').hide();
    $('#formSupprimerClient').hide();


    $('.ajouterClient').click(function(){
        $('.formAjoutClient').fadeIn(); 
    });
    $('.modifierClient').click(function(){
        $('.formModifierClient').fadeIn(); 
    });
    $('.supprinmerClient').click(function(){
        $('.formSupprimerClient').fadeIn();
    });


    $("#annulerAjoutClient").click(function(){
        $('.formAjoutClient').fadeOut();
    });



    $("#annulerModifierClient").click(function(){
        $('#formModifierClient').fadeOut();
       
    });
    $("#annulerSupprimerClient").click(function(){
        $('.formSupprimerClient').fadeOut();
       
    });

    $("#ajouterAjoutClient").click(function(){
        $.ajax({
            type:"POST",
            url : "http://localhost/assurance/public/ajax/formAjouterClient.php",
            data : {
                police:$('#policeAjoutClient').val(),
                nomPrenom:$("#nomPrenomAjoutClient").val(),
                adresse:$('#adresseAjoutClient').val(),
                cin:$('#cinAjoutClient').val(),
                dateNaissance:$('#dateNaissanceAjoutClient').val(),
                telephone:$('#telephoneAjoutClient').val()
            },
            success : function(r){
                alert('ajoutee avec success');
                
                
            }
        });
    });

    $('#chercherCin').keypress(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/chercherCin.php',
            method:'POST',
            data : {
               cin: $('#chercherCin').val()
            },
            success : function(donnees){
                $('#tableInterface').html(donnees);
            }
        });
    });
  
    $('#buttonChercherClientModif').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formModifierClientLoad.php',
            method:'POST',
            data:{
                police:$("#policeChercherClient").val()
            },
            success:function(donnees){
                $('#tableModifierClient').html(donnees);
            }
        });
    });

    $('#submitFormModifierClient').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formModifierClientDatabase.php',
            method:'POST',
            data:{
                
                police : $('#policeClients').val(),
                nomPrenom:$('#nomPrenomModifierClient').val(),
                adresse:$('#adresseModifierClient').val(),
                cin:$('#cinModifierClient').val(),
                telephone:$('#telephoneModifierClientss').val(),
                dateNaissance:$("#dateNaissanceModifierClient").val()
                },
            success : function(r){
                alert('Modifier avec success');
            }
        });
    });

    $('#chercherClientASupprimee').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formSupprimerClient.php',
            method:'POST',
            data : {
                police:$('#policeSupprimerClientChercher').val()

            },
            success:function(e){
                $('#tableSupprimerClient').html(e);
            }
        });
    });

    $('#supprimerClientDefin').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formSupprimerClientDefini.php',
            method:'POST',
            data:{
                police:$('#policeSupprimerClientChercher').val()
            },
            success:function(e){
                alert('Client supprime');
            }
        });
    });

    $('#ajouterAjoutVehicule').click(function(){
            $.ajax({
                url: "http://localhost/assurance/public/ajax/formAjouterVehicule.php",
                method: 'POST',
                data:{
                    police:$('#policeAjoutVehicule').val(),
                    marque:$('#marqueAjoutVehicule').val(),
                    couleur:$('#couleurAjoutVehicule').val(),
                    matricule:$('#matriculeAjoutVehicule').val()

                },
                success:function(r){
                    alert('ajoutee avec success');
                    
                }
            });
    });

    $('#buttonChercherVehiculeModif').click(function(){
        $.ajax({
            url:"http://localhost/assurance/public/ajax/formModifierVehiculeLoad.php",
            method:'POST',
            data:{
                matricule : $('#matriculeChercherVehicule').val()
            },
            success:function(r){
                $('#tableModifierVehicule').html(r);
            }
        });
    });

    $('#submitFormModifierVehicule').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formModifierVehiculeDatabase.php',
            method:'POST',
            data:{
                police:$('#policeModifierVehicule').val(),
                marque:$('#marqueModifierVehicule').val(),
                couleur:$('#couleurModifierVehicule').val(),
                matricule:$('#matriculeModifierVehicule').val(),
                matriculeAModifiee:$('#matriculeChercherVehicule').val()
            },
            success:function(r){
                alert('modifiee avec success');
                
            }
        });
    });

    $('#chercherVehiculeASupprimee').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formSupprimerVehicule.php',
            method:'POST',
            data:{
                matricule:$('#matriculeSupprimerVehiculeChercher').val()
            },
            success:function(e){
                $('#tableSupprimerVehicule').html(e)
            }
        });
    });

    $('#supprimerVehiculeDefin').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formSupprimerVehiculeDefini.php',
            method:'POST',
            data:{
                matricule:$('#matriculeSupprimerVehicule').val()
            },
            success:function(e){
                alert('Vehicule Supprimee');
                
            }
        });
    });

    $('#chercherMatricule').keypress(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/chercherMatricule.php',
            method:'POST',
            data:{
                matricule:$('#chercherMatricule').val()
            },
            success:function(e){
                $('#tableInterface').html(e);
            }
        });
    });

    $('#effetAjoutAssurance').change(function(){
        let typeAssurance = $('#typeeAjoutAssurance').val();
        let effet = new Date($('#effetAjoutAssurance').val());
        if(typeAssurance == 'trimestrielle')
            effet.setDate($('#effetAjoutAssurance').val()+90);
        
        elseif(typeAssurance == 'semestrielle')
            effet.setDate($('#effetAjoutAssurance').val()+180);
        
        elseif(typeAssurance == 'annuelle')
            effet.setDate($('#effetAjoutAssurance').val()+360);
        
        
    });

    $('#buttonChercherVehiculeAAssurer').click(function(){
        $.ajax({
            url:'http://localhost/assurance/public/ajax/formAjouterAssuranceLoad.php',
            method:'POST',
            data:{
                matricule : $('#matriculeChercherVehiculeAAssurer').val()
            },
            success:function(e){
                $('#ajoutAssuranceTable').html(e);
            }
        });
    });

// $('#ajouterAjoutAssurance').click(function(){
//         var fd = new FormData();
//         var files = $('#attestation')[0].files;
        
//         // Check file selected or not
//         if(files.length > 0 )
//            fd.append('file',files[0]);

//     $.ajax({
//         url:'http://localhost/assurance/public/ajax/formAjouterAssuranceDatabase.php',
//         method:'POST',
//         data:{
//             fichier:fd,
//             typee:$('#typeeAjoutAssurance').val()
//         },
//         processData: false,
//         contentType: false,
//         success:function(e){
//             $('.menu').html(e);
//         }
//     });
// });




});


