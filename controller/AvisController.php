<?php 
include_once('../model/AvisModel.php');
include_once('../config/db.php');

class AvisController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(Avis $a) {
        $query = "INSERT INTO avis(note, commentaire, reservationId) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$a->getNote(), $a->getCommentaire(), $a->getReservationId()]);
    }

    function getAvis($id) {
        $query = "SELECT * FROM avis WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    function delete($id) {
        $query = "DELETE FROM avis WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }

    function liste() {
        $query = "SELECT * FROM avis";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function update(Avis $a) {
        $query = "UPDATE avis SET note = ?, commentaire = ?, reservationId = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$a->getNote(), $a->getCommentaire(), $a->getReservationId(), $a->getId()]);
    }
}
?>