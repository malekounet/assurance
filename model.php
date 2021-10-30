<?php

class Client{

    private $idAdmin;
    private $police;

    private $nomPrenom;
    private $adresse;

    private $cin;
    private $dateNaissance;
    private $telephone;

    

    function __construct($adresse, $cin, $dateNaissance, $idAdmin, $nomPrenom, $police, $telephone){
        
        $this->adresse = $adresse;
        $this->cin = $cin;

        $this->idAdmin = $idAdmin;
 
        $this->nomPrenom = $nomPrenom;
        $this->police = $police;
        $this->dateNaissance = $dateNaissance;
        $this->telephone = $telephone;

    }
    //methods
    public function ajouterClient(){
        $db = con();
        $reponse = $db->query("INSERT INTO `clients`(`adresse`, `cin`, `dateNaissance`, `nomPrenom`, `idAdmin`, `police`, `telephone`) VALUES ('".$this->adresse."','".$this->cin."','".$this->dateNaissance."','".$this->nomPrenom."',".$this->idAdmin.",'".$this->police."','".$this->telephone."')");
    }

    public function modifierClient($police){
        $db = con();
        $reponse = $db->query("UPDATE clients SET  nomPrenom = '".$this->nomPrenom."', adresse = '".$this->adresse."', cin = '".$this->cin."', dateNaissance = '".$this->dateNaissance."', police = '".$this->police."', telephone = '".$this->telephone."' WHERE police = '".$police."'; ");
        // return $reponse->execute(array($police, $typeClient, $civilite, $nomPrenom, $adresse, $localite, $pays, $cin, $dateNaissance));
    }

    // public function supprimerClient($cin){
    //     $db = con();
    //     $reponse = $db->prepare("DELETE FROM client WHERE cin = ?");
    //     return $reponse->execute(array(cin));
    // }

    // public function afficherClients(){
    //     $db = con();
    //     $reponse = $db->query("SELECT * FROM client");
    //     return $reponse;
    // }

    

}


class Vehicule{
    private $matricule;
    private $marque;
    private $police;
    private $couleur;


    public function __construct($matricule, $marque, $police, $couleur){
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->police = $police;
        $this->couleur = $couleur;

    }
    //methods
    public function ajouterVehicule(){
        $db = con();
        $reponse = $db->query("INSERT INTO vehicules (matricule, marque, police, couleur)VALUES('".$this->matricule."', '".$this->marque."', '".$this->police."', '".$this->couleur."');");

    }

    public function modifierVehicule($matricule){
        $db = con();
        $reponse = $db->query("UPDATE vehicules SET marque = '".$this->marque."', police = '".$this->police."', couleur = '".$this->couleur."', matricule = '".$this->matricule."' WHERE matricule = '".$matricule."'; ");
        // $reponse = $reponse->execute(array($this->marque, $this->police, $this->couleur, $this->matricule, $matricule));
        return $reponse;
    }

    public function supprimerVehicule($matricule){
        $db = con();
        $reponse = $db->query("DELETE FROM vehicule where matricule = $matricule");
        return $reponse;
    }
    public function afficherVehicules(){
        $db = con();
        $reponse = $db->query("SELECT * FROM vehicule");
        return $reponse;
    }
}

class Assurance{
    private $effet;
    private $expiration;
    private $typeAssurance;
    private $police;
    private $matricule;
    private $compagnie;
    private $attestation;

  

    //methods

    public function ajouterAssurance($effet, $typeAssurance, $police, $matricule, $expireLe, $compagnie, $attestation){
        $bdd = con();
        $reponse = $bdd->query("INSERT INTO assurances (effet, typeAssurance, police, matricule, expireLe, compagnie, attestation)VALUES('".$effet."','".$typeAssurance."','".$police."','".$matricule."','".$expireLe."','".$compagnie."','".$attestation."');");
        
    }

    public function modifierAssurance($police){
        $bd = con();
        $reponse = $bd->prepare("UPDATE assurance SET dateAssurance = ?, typeAssurance = ?, police = ? WHERE matricule = ?;");
        $reponse = $reponse->execute(array($dateAssurance, $typeAssurance, $matricule));
        return $reponse;
    }

    public function supprimerAssurance($matricule){
        $bd = con();
        $reponse = $bd->query("DELETE FROM assurance WHERE matricule = $matricule;");
        return $reponse;
    }
     
    public function afficherAssurances(){
        $bd = con();
        $reponse = $bd->prepare("SELECT * FROM assurance;");
        $reponse->execute();
        return $reponse;
    }
}


function con(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=assurance;charset=utf8", "root", "");
        return $db;
    }
    catch(Exception $e){
        echo "Erreur :".$e->getMessage();
    }
}


function afficherClients(){
    $db = con();
    $reponse = $db->query("SELECT * FROM clients");
    return $reponse;
}

function afficherVehicules(){
    $db = con();
    $reponse = $db->query("SELECT * FROM vehicules");
    return $reponse;
}

function afficherAssurances(){
    $bd = con();
    $reponse = $bd->query("SELECT * FROM assurances;");
    return $reponse;
}

class Connecter{
    private $mail;
    private $pass;
    

    function __construct($mail, $pass){
        $this->mail = $mail;
        $this->pass = $pass;
    }

    public function connect(){
        $db = con();
        $mail = $this->mail;
        $reponse = $db->query("SELECT * FROM admins WHERE mail = '$mail'");
        $donnees = $reponse->fetch();
        $_SESSION['idAdmin'] = $donnees['id'];
        $_SESSION['nomPrenomAdmin'] = $donnees['nomPrenom'];
        return $donnees;

        // if($request->array_count c>0){
        //     // $donnees = $reponse->fetch();
        //     $pass = $this->pass;
        // if($pass == $donnees['pass']){
        //     $_SESSION['idAdmin'] = $donnees['id'];
        //     $_SESSION['nomPrenomAdmin'] = $donnees['nomPrenom'];
        //     return 1;
        //     // header('Location: ../../index.php?action=clients');
        // }
        // else{
        //     // header('Location: ../../views/connecter.php');
        //     return 0;
        // }
        // }else{
        //     // header('Location: ../../views/connecter.php');
        //     return 0;
        // }
    }
}

function chercherClient($cin){
    $db = con();
    $reponse = $db->query("SELECT * FROM clients WHERE cin LIKE '%".$cin."%';");
    return $reponse;
}

function chercherClientParPolice($police){
    $db = con();
    $reponse = $db->query("SELECT * FROM clients WHERE police = '".$police."';");
    return $reponse;
}
function chercherClientASupprimer($police){
    $db=con();
    $reponse = $db->query("SELECT * FROM clients WHERE police ='".$police."'");
    return $reponse;

}

function supprimerClient($police){
    $db = con();
    $reponse = $db->query("DELETE FROM clients WHERE police = '".$police."';");
    return $reponse;
}
function chercherVehiculeParMatricule($matricule){
    $db = con();
    $reponse = $db->query("SELECT * FROM vehicules WHERE matricule = '".$matricule."'");
    return $reponse;
}

function chercherVehiculeASupprimer($matricule){
    $db=con();
    $reponse = $db->query("SELECT * FROM vehicules WHERE matricule ='".$matricule."'");
    return $reponse;

}

function supprimerVehicule($matricule){
    $db = con();
    $reponse = $db->query("DELETE FROM vehicules WHERE matricule = '".$matricule."';");

}
function chercherVehicule($matricule){
    $db = con();
    $reponse = $db->query("SELECT * FROM vehicules WHERE matricule LIKE '%".$matricule."%';");
    return $reponse;
}

function chercherVehiculePourAssurance($matricule){
    $db = con();
    $reponse = $db->query("SELECT * FROM vehicules WHERE matricule = '".$matricule."';");
    return $reponse;
}
