<?php
session_start();
require_once '../controller/OuvrierController.php';
require_once '../controller/ReservationController.php';

if (isset($_POST['sl'], $_POST['sl2'], $_POST['montant'])) {
    $ouvrierId = $_POST['sl2'];
    $reservationId = $_POST['sl2'];
    $montant = $_POST['montant'];

    $ouvrierCtrl = new OuvrierController();
    $reservationCtrl = new ReservationController();

    $successReservation = $reservationCtrl->updatestatutmontant($montant, $ouvrierId, $reservationId);

    $successOuvrier = $ouvrierCtrl->updatestatut($ouvrierId);

    if ($successReservation && $successOuvrier) {
        header("Location: admin.php");
        exit();
    } else {
        $_SESSION['error'] = "Une erreur s'est produite lors du traitement.";
        header("Location: admin.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Champs manquants.";
    header("Location: admin.php");
    exit();
}
