<?php
require_once("../controller/OuvrierController.php");

$ctrl = new OuvrierController();


    session_start();
    if(isset($_POST['nom'], $_POST['zoneService'])) {
    $ctrl->insert($_POST['nom'], $_POST['zoneService']);
    header("Location: ../view/admin.php");
    exit();
} else {
    session_start();
    $_SESSION['register_error'] = "Veuillez remplir tous les champs requis.";
    header("Location: ../view/ajout_ouvrier.php");
    exit();
}
?>