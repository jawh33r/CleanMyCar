<?php
class ClientModel 
{
    private $id,$nom,$email,$MDP;
    function __construct($id="",$nom="",$email="",$MDP="") {
	
        $this->id=$id;
        $this->nom=$nom;
        $this->email=$email;
        $this->MDP=$MDP;
    }
    public function getid(){
        return $this->id;
    }
    
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
            $this->nom = $nom;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
            $this->email = $email;
    }
    public function getMDP(){
        return $this->MDP;
    }

    public function setMDP($MDP){
            $this->mdp = $MDP;
    }

}

?>