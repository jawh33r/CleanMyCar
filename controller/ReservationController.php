<?php
include_once('../model/ReservationModel.php');
include_once('../config/db.php');

class ReservationController extends Connexion {
    function __construct() {
        parent::__construct();
    }


    function insert($date, $heure, $typeService, $adresse, $statut, $montant, $clientId, $ouvrierId) {
        $query = "INSERT INTO reservation(date, heure, typeService, adresse, statut, montant, clientId, ouvrierId) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$date, $heure, $typeService, $adresse, $statut, $montant, $clientId, $ouvrierId]);
    }
    
    function getReservation($id) {
        $query = "SELECT * FROM reservation WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    function getReservationsByClientId($clientId) {
    $query = "SELECT * FROM `reservation` WHERE `clientId`=?";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$clientId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}


    function delete($id) {
        $query = "DELETE FROM reservation WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }


    function liste() {
        $query = "SELECT * FROM reservation";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function update(ReservationModel $r) {
        $query = "UPDATE reservation SET 
                    date = ?, 
                    heure = ?, 
                    typeService = ?, 
                    adresse = ?, 
                    statut = ?, 
                    montant = ?, 
                    clientId = ?, 
                    ouvrierId = ? 
                  WHERE id = ?";
                  
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$r->getDate(),$r->getHeure(),$r->getTypeService(),$r->getAdresse(),$r->getStatut(),$r->getMontant(),$r->getClientId(),$r->getOuvrierId(),$r->getId()]);
    }
    //reserver
    function updatestatutmontant($montant,$ouvrierId,$id) {
        $query = "UPDATE reservation SET statut = 'En cour ...', montant = ?,ouvrierId = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$montant,$ouvrierId,$id]);
    }

    function getByClient($clientId) {
        $query = "SELECT * FROM reservation WHERE clientId = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt;
    }
}
?>