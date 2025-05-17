<?php 
include_once('../model/OuvrierModel.php');
include_once('../config/db.php');

class OuvrierController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($nom ,$zoneService) {
        $query = "INSERT INTO ouvrier(nom, zoneService, disponible) VALUES (?, ?, 1)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$nom ,$zoneService]);
    }

    function getOuvrier($id) {
        $query = "SELECT * FROM ouvrier WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    function delete($id) {
        $query = "DELETE FROM ouvrier WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }

    function liste() {
        $query = "SELECT * FROM ouvrier";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function update(Ouvrier $o) {
        $query = "UPDATE ouvrier SET nom = ?, zoneService = ?, disponible = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$o->getNom(), $o->getZoneService(), $o->getDisponible(), $o->getId()]);
    }
    //disponibilité
    function updatestatut($id) {
        $query = "UPDATE ouvrier SET disponible = 0 WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }
}

?>