<?php
class OuvrierModel
{
    private $id, $nom, $zoneService, $disponible;

    function __construct($id = "", $nom = "", $zoneService = "", $disponible = 1) {
        $this->id = $id;
        $this->nom = $nom;
        $this->zoneService = $zoneService;
        $this->disponible = $disponible;
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

    public function getZoneService() {
         return $this->zoneService; 
    }

    public function setZoneService($zoneService) { 
        $this->zoneService = $zoneService; 
    }

    public function isDisponible() { 
        return $this->disponible; 
    }

    public function setDisponible($disponible) {
         $this->disponible = $disponible; 
    }
    
}
?>
