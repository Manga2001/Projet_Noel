<?php

require_once './model/CourModel.php';

function indexCour(){
    $cour = getAllCour();
    require_once './view/Cour/index.php';
}

function create(){
    require_once './view/Cour/create.php';
}

function save(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nom_cour =$_POST['nom_cour'];
    $code_cour =$_POST['code_cour'];
    $nbr_heure =$_POST['nbr_heure'];
    
    addCour($nom_cour, $code_cour, $nbr_heure);
    header('location:index.php?controller=Cour');
    }
    require_once './view/Cour/create.php';
}

function remove(){
    $id =$_GET['id'];
    deleteCour($id);
    header('location:index.php?controller=Cour');

}

function edit(){
    $id =$_GET['id'];
    $Cour = getCourById($id);
     require_once './view/Cour/edit.php';
}

function update(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom_cour =$_POST['nom_cour'];
        $code_cour =$_POST['code_cour'];
        $nbr_heure =$_POST['nbr_heure'];
        
        addCour($nom_cour, $code_cour, $nbr_heure);
        header('location:index.php?controller=Cour');
        }
        require_once './view/Cour/create.php';

}

?>