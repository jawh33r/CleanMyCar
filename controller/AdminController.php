<?php 
include_once('../model/AdminModel.php');
include_once('../config/db.php');

class AdminController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert($nom, $email, $password) {
        $query = "INSERT INTO admin(nom, email, motDePasse) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$nom, $email, $password]);
    }

    function getAdmin($id) {
        $query = "SELECT * FROM admin WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    //email
    function getAdminByEmail($email) {
        $query = "SELECT * FROM admin WHERE email = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    function delete($id) {
        $query = "DELETE FROM admin WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }

    function liste() {
        $query = "SELECT * FROM admin";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function update(Admin $a) {
        $query = "UPDATE admin SET nom = ?, email = ?, motDePasse = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$a->getNom(), $a->getEmail(), $a->getMotDePasse(), $a->getId()]);
    }
}

?>