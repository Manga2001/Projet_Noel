<?php

 require_once './db.php';

 function getAllEtudiant(){
   global $connexion;
   $sql="SELECT *  FROM Etudiant";
   $etudiant = pg_query($connexion,$sql);
   return $etudiant;
}

function addEtudiant($nom,$prenom,$email,$filiere){
   global $connexion;
   $sql="INSERT INTO Etudiant (nom,prenom,email,filiere) values
    ('$nom','$prenom','$email','$filiere')";
    pg_query($connexion,$sql);
   
}
 
function getEtudiantById($id){
   global $connexion;
   $sql="SELECT * FROM Etudiant where id=$id";
   $etudiant = pg_fetch_assoc(pg_query($connexion,$sql));
   return $etudiant;
 }

 function updateEtudiant($id,$nom,$prenom,$email,$filiere){
   global $connexion;
   $sql="UPDATE Etudiant SET nom ='$nom', prenom='$prenom', email =$email where id=$id ";
    pg_query($connexion,$sql);
   
}

function deleteEtudiant($id){
   global $connexion;
   $sql="DELETE from Etudiant  where id = $id";
    pg_query($connexion,$sql);
   
}

?>