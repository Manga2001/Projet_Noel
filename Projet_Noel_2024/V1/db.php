<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="manga";
$dbname="Projet_Noel_2024";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   echo "succes";
}
