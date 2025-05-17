<?php
require_once("../controller/AdminController.php");


$ctrl = new AdminController();


if(isset($_POST['email'], $_POST['password'])) {

    $admin = $ctrl->getAdminByEmail($_POST['email']);
    
    if($admin && $admin['motDePasse'] == $_POST['password']) {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_nom'] = $admin['nom'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['is_logged_in'] = true;
        
        header("Location: ../view/admin.php");
        exit();
    } else {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['admin_login_error'] = "Email ou mot de passe incorrect!";
        header("Location: ../view/loginadmin.php");
        exit();
    }
} else {
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['admin_login_error'] = "Veuillez remplir tous les champs requis.";
    header("Location: ../view/loginadmin.php");
    exit();
}
?>