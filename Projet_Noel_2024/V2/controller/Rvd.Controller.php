<?php

require_once 'model/RdvModel.php';

class RdvController
{
    private $db;
    private $RdvModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->RdvModel = new Rdv();
    }

    // Afficher tous les rendez-vous
    public function index()
    {
        $Rdvindex = $this->RdvModel->getAll();
        require_once 'view/rdv/index.php';
    }

    // Créer un rendez-vous
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $description = $_POST['description'];
            $clientId = $_POST['client_id'];
            $this->RdvModel->create($date, $heure, $description, $clientId);
            header('Location: /rdv');
        }
        require_once 'view/rdv/create.php';
    }

    // Modifier un rendez-vous
    public function edit($id)
    {
        $rdv = $this->RdvModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $description = $_POST['description'];
            $this->RdvModel->update($id, $date, $heure, $description);
            header('Location: /rdv');
        }
        require_once 'view/rdv/edit.php';
    }

    // Supprimer un rendez-vous
    public function delete($id)
    {
        $this->rdv->delete($id);
        header('Location: /rdv');
    }
}
