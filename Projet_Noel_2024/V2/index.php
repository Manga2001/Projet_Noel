<?php



require_once '../db.php';
require_once '../controller/RdvController.php';
include '../controller/ClientController.php';

$db = new Database();
$connection = $data->connect();

$RdvController = new RdvController($connection);


if ($_GET['controller'] == 'Rdv') {
    // Routes pour rendez-vous
    if ($_GET['action'] == 'index') {
        $RvdController->index();
    }
    // Autres actions
}

if ($_GET['controller'] == 'client') {
    // Routes pour clients
    if ($_GET['action'] == 'index') {
        $ClientController->index();
    }
    // Autres actions
}

?>
