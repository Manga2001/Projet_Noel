<?php

require_once './model/EtudiantModel.php';

function indexEtudiant(){
    $etudiant = getAllEtudiant();
    require_once './view/Etudiant/index.php';
}

function create(){
    require_once './view/Etudiant/create.php';
}

function save(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $filiere =$_POST['filiere'];

    addEtudiant($nom,$prenom,$email,$filiere);
    header('location:index.php?controller=Etudiant');
    }
    require_once './view/Etudiant/create.php';
}

function remove(){
    $id =$_GET['id'];
    deleteEtudiant($id);
    header('location:index.php?controller=Etudiant');

}

function edit(){
    $id =$_GET['id'];
    $etudiant = getEtudiantById($id);
     require_once './view/Etudiant/edit.php';
}

function update(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        $email =$_POST['email'];
        $filiere =$_POST['filiere'];
    
    updateEtudiant($id,$nom,$prenom,$email,$filiere);
    header('location:index.php?controller=Etudiant');

}
require_once './view/Etudiant/edit.php';

}

?>