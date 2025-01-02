<?php

require_once 'model/ClientModel.php';

class ClientController
{
    private $db;
    private $ClientModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->ClientModel = new Client();
    }

    // Afficher tous les clients
    public function index()
    {
        $clientindex = $this->ClientModel->getAll();
        require_once 'view/client/index.php';
    }

    // Créer un rendez-vous
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $this->ClientModel->create($nom, $prenom, $email, $telephone);
            header('Location: /client');
        }
        require_once 'view/client/create.php';
    }

    // Modifier un rendez-vous
    public function edit($id)
    {
        $client = $this->ClientModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $this->ClientModel->create($nom, $prenom, $email, $telephone);
            header('Location: /client');
        }
        require_once 'view/client/edit.php';
    }

    // Supprimer un rendez-vous
    public function delete($id)
    {
        $this->client->delete($id);
        header('Location: /client');
    }
}
