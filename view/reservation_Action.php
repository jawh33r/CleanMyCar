<?php
session_start();

require_once '../controller/ReservationController.php';
$controller = new ReservationController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $date = $_POST['date'];
    $heure = $_POST['time'];
    $typeService = $_POST['service'];
    $statut = "en attente"; 
    $montant = 0; 
    $ouvrierId = null; 

    if (isset($_SESSION['client_id'])) {
        $clientId = $_SESSION['client_id'];

        $success = $controller->insert($date, $heure, $typeService, $adresse, $statut, $montant, $clientId, $ouvrierId);

        if ($success) {
            header("Location: compte.php");
            exit();
        } else {
            echo "Erreur lors de l'enregistrement de la réservation.";
        }
    } else {
        $_SESSION['register_error'] = "Veuillez login pour reserver.";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: reservation.php");
    exit();
}
?>
