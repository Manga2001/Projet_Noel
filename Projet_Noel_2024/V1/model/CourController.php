<?php

 require_once './db.php';

 function getAllCour(){
   global $connexion;
   $sql="SELECT *  FROM Cour";
   $cour = pg_query($connexion,$sql);
   return $cour;
}

function addCour($nom_cour, $code_cour, $nbr_heure){
   global $connexion;
   $sql="INSERT INTO Cour (nom_cour, code_cour, nbr_heure) values
    ('$nom_cour', $code_cour, $nbr_heure)";
    pg_query($connexion,$sql);
   
}
 
function getEtudiantById($id){
   global $connexion;
   $sql="SELECT * FROM Cour where id=$id";
   $cour = pg_fetch_assoc(pg_query($connexion,$sql));
   return $cour;
 }

 function updateEtudiant($nom_cour, $code_cour, $nbr_heure){
   global $connexion;
   $sql="UPDATE Cour SET nom_cour='$nom_cour', code_cour='$code_cour', nbr_heure =$nbr_heure where id=$id ";
    pg_query($connexion,$sql);
   
}

function deleteEtudiant($id){
   global $connexion;
   $sql="DELETE from Cour  where id = $id";
    pg_query($connexion,$sql);
   
}

?>