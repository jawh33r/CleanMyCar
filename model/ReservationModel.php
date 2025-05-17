<?php
class ReservationModel
{
    private $id, $date, $heure, $typeService, $adresse, $statut, $montant, $clientId, $ouvrierId;

    function __construct($id = "", $date = "", $heure = "", $typeService = "", $adresse = "", $statut = "", $montant = 0.0, $clientId = "", $ouvrierId = "") {
        $this->id = $id;
        $this->date = $date;
        $this->heure = $heure;
        $this->typeService = $typeService;
        $this->adresse = $adresse;
        $this->statut = $statut;
        $this->montant = $montant;
        $this->clientId = $clientId;
        $this->ouvrierId = $ouvrierId;
    }

    public function getId() {
         return $this->id; 
    }
    public function getDate() {
         return $this->date; 
    }

    public function setDate($date) {
         $this->date = $date; 
    }

    public function getHeure() { 
        return $this->heure; 
    }

    public function setHeure($heure) {
         $this->heure = $heure; 
    }

    public function getTypeService() { 
        return $this->typeService; 
    }

    public function setTypeService($typeService) {
         $this->typeService = $typeService; 
    }

    public function getAdresse() {
         return $this->adresse; 
    }

    public function setAdresse($adresse) { 
        $this->adresse = $adresse; 
    }

    public function getStatut() { 
        return $this->statut; 
    }

    public function setStatut($statut) {
         $this->statut = $statut; 
        }
    public function getMontant() { 
        return $this->montant; 
    }
    public function setMontant($montant) {
         $this->montant = $montant; 
    }
    public function getClientId() {
         return $this->clientId; 
    }
    public function setClientId($clientId) {
         $this->clientId = $clientId; 
    }

    public function getOuvrierId() { 
        return $this->ouvrierId; 
    }

    public function setOuvrierId($ouvrierId) { 
        $this->ouvrierId = $ouvrierId; 
    }
    
}
?>
