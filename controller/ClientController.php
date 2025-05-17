<?php
include_once('../model/ClientModel.php');
include_once('../config/db.php');

class ClientController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($nom, $email, $password) {
        $query = "INSERT INTO client(nom, email, motDePasse) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$nom, $email, $password]);
    }
    //hethi id
    function getClientbyid($id) {
        $query = "SELECT * FROM client WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    // hethi email
    function getClientByEmail($email) {
        $query = "SELECT * FROM client WHERE email = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    function delete($id) {
        $query = "DELETE FROM client WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }

    function liste() {
        $query = "SELECT * FROM client";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function update(Client $c) {
        $query = "UPDATE client SET nom = ?, email = ?, motDePasse = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$c->getNom(), $c->getEmail(), $c->getMotDePasse(), $c->getId()]);
    }
}

?>