<?php
class AdminModel
{
    private $id, $nom, $email, $motDePasse;

    function __construct($id = "", $nom = "", $email = "", $motDePasse = "") {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
    }

    public function getId() { 
        return $this->id; 
    }

    public function getNom() { 
        return $this->nom; 
    }

    public function setNom($nom) { 
        $this->nom = $nom; 
    }

    public function getEmail() { 
        return $this->email; 
    }

    public function setEmail($email) { 
        $this->email = $email; 
    }

    public function getMotDePasse() { 
        return $this->motDePasse; 
    }

    public function setMotDePasse($motDePasse) {
         $this->motDePasse = $motDePasse; 
    }
    
}
?>
