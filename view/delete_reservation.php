<?php
session_start();

require_once '../controller/ReservationController.php';

if (!isset($_SESSION['client_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['reservation_id'])) {
    $reservationId = intval($_POST['reservation_id']);

    $controller = new ReservationController();
    $reservation = $controller->getReservation($reservationId);
    if ($reservation && $reservation['clientId'] == $_SESSION['client_id']) {
        $controller->delete($reservationId);
    }
}

header("Location: compte.php");
exit();
