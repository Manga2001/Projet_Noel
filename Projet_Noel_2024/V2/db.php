<?php

class Database {


private $serveur="localhost";
private $port = "5432";
private $user="postgres";
private $pwd="manga";
private $dbname="Projet_Noel_2024";

public function get_Connexion(){
    try{
        $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

}
}