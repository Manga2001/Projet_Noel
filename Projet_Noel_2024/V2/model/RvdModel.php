<?php

class RendezVous {
    private $connexion;
    private $table = 'Rdv';

    public $id;
    public $date;
    public $heure;
    public $description;
    public $client_id;

    public function __construct($db) {
        $this->connexion = $db;
    }

    public function create() {
        $sql = "INSERT INTO {$this->table} (date, heure, description, client_id) VALUES (:date, :description, :heure, :client_id)";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':heure', $this->heure);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':client_id', $this->client_id);

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
        $sql = "UPDATE {$this->table} SET date = :date, heure = :heure description = :description, client_id = :client_id WHERE id = :id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':heure', $this->heure);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':client_id', $this->client_id);
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
