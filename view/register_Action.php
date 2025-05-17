<?php
require_once("../controller/ClientController.php");

$ctrl = new ClientController();

if ($ctrl->getClientByEmail($_POST['email'])) {
    session_start();
    //message de existe email
    $_SESSION['register_error'] = "Email : ".$_POST['email']." existe déjà!";
    header("Location: ../view/register.php");
    exit();
} elseif(isset($_POST['nom'], $_POST['email'], $_POST['password'])) {
    $ctrl->insert($_POST['nom'], $_POST['email'], $_POST['password']);
    header("Location: ../view/login.php");
    exit();
} else {
    session_start();
    $_SESSION['register_error'] = "Veuillez remplir tous les champs requis.";
    header("Location: ../view/register.php");
    exit();
}
?>