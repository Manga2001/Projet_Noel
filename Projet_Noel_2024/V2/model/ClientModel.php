<?php

class Client {
    private $connexion;
    private $table = 'client';

    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $telephone;

    public function __construct($db) {
        $this->connexion = $db;
    }

    public function create() {
        $sql = "INSERT INTO {$this->table} (nom, prenom, email, telephone) VALUES (:nom, :prenom, :email, :telephone)";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telephone', $this->telephone);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function update() {
        $sql = "UPDATE {$this->table} SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, WHERE id = :id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telephone', $this->telephone);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
