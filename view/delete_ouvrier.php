<?php
session_start();

require_once '../controller/OuvrierController.php';

if (!isset($_SESSION['ouvrier_id'])) {
    header("Location: admin.php");
    exit();
}

if (isset($_POST['ouvrier_id'])) {
    $ouvrierId = intval($_POST['ouvrier_id']);

    $controller = new OuvrierController();
    $ouvrier = $controller->getouvrier($ouvrierId);
    if ($ouvrier && $ouvrier['ouvrier_id']) {
        $controller->delete($ouvrierId);
    }
}

header("Location: admin.php");
exit();
