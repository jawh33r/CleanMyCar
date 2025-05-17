<?php
class AvisModel
{
    private $id, $note, $commentaire, $reservationId;

    function __construct($id = "", $note = "", $commentaire = "", $reservationId = "") {
        $this->id = $id;
        $this->note = $note;
        $this->commentaire = $commentaire;
        $this->reservationId = $reservationId;
    }

    public function getId() { 
        return $this->id; 
    }

    public function getNote() { 
        return $this->note; 
    }

    public function setNote($note) {
         $this->note = $note; 
    }

    public function getCommentaire() { 
        return $this->commentaire; 
    }

    public function setCommentaire($commentaire) { 
        $this->commentaire = $commentaire; 
    }

    public function getReservationId() { 
        return $this->reservationId; 
    }

    public function setReservationId($reservationId) {
         $this->reservationId = $reservationId; 
    }

}
?>
