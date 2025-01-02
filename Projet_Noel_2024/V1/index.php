<?php

    require_once './controller/EtudiantController.php';
    require_once('../controller/CourController.php');


    $action = $_GET['action'] ?? '';

    switch ($action) {
    case 'indexEtudiant':
        indexEtudiant();
        break;
    case 'save':
        save();
        break;
    case 'editEtudiant':
        $id = $_GET['id'];
        editEtudiant($id);
        break;
    case 'deleteEtudiant':
        $id = $_GET['id'];
        deleteEtudiant($id);
        break;
        case 'indexCour':
            indexCour();
            break;
        case 'createCour':
            createCour();
            break;
        case 'editCour':
            $id = $_GET['id'];
            editCour($id);
            break;
        case 'deleteCours':
            $id = $_GET['id'];
            deleteCour($id);
            break;
        default:
            indexEtudiant();
            break;
    }
    

?>