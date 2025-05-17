<?php
require_once("../controller/ClientController.php");


$ctrl = new ClientController();


if(isset($_POST['email'], $_POST['password'])) {

    $client = $ctrl->getClientByEmail($_POST['email']);
    
    if($client && $client['motDePasse'] == $_POST['password']) {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION['client_id'] = $client['id'];
        $_SESSION['client_nom'] = $client['nom'];
        $_SESSION['client_email'] = $client['email'];
        $_SESSION['is_logged_in'] = true;
        
        header("Location: ../view/compte.php");
        exit();
    } else {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['login_error'] = "Email ou mot de passe incorrect!";
        header("Location: ../view/login.php");
        exit();
    }
} else {
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['login_error'] = "Veuillez remplir tous les champs requis.";
    header("Location: ../view/login.php");
    exit();
}
?>