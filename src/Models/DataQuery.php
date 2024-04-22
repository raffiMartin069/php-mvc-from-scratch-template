<?php

require 'Interface/DataQueryInterface.php';

// PLEASE ADD TABLE DYNAMICALLY AND NOT HARD CODED.
// This class provides the necessary methods to interact with the database.
// It also has prepared statements to prevent SQL Injection
// and to ensure that the data is sanitized before adding it to the database.
// This SQL class should be modified according to the projects requirements and make it more dynamic.
class DataQuery implements DataQueryInterface{
    
    private $data;
    private $connection;

    public function __construct($data, $connection)
    {
        $this->data = $data;
        $this->connection = $connection;
    }    
    
    // Change this method based on requirements.
    public function fetch($table, $data) {
        $this->data = $data;
        $query = $this->connection->prepare("SELECT * FROM $table WHERE id = ?");
        $query->execute([$this->data]);
        return $query->fetch();
    }

    public function fetchAll($table) {
        $query = $this->connection->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll();
    }

    // $data should be an associative array where the keys represent the column names and the values represent the data to be inserted into those columns.
    // We extract the keys from the $data array to get the column names.
    // We dynamically construct the placeholders for the values in the SQL query based on the number of columns.
    // We prepare the INSERT statement with the dynamic column list and placeholders.
    // We execute the statement with the array of values extracted from the $data array.
    // This way, the function can handle insertions into any table with any number of columns, making it safe and dynamic.
    public function insert($table, $data) {
        $columnNames = array_keys($data);
        $columnList = implode(', ', $columnNames);
        $placeholders = rtrim(str_repeat('?, ', count($columnNames)), ', ');
    
        $query = $this->connection->prepare("INSERT INTO $table ($columnList) VALUES ($placeholders)");
        $query->execute(array_values($data));
        
        return $this->connection->lastInsertId();
    }
    

    public function update($table, $data) {
        $this->data = $data;
        $query = $this->connection->prepare("UPDATE $table SET key = ? WHERE id = ?");
        $query->execute([$this->data->getKey(), $this->data->getId()]);
        return $query->rowCount();
    }
    
    public function delete($table, $data) {
        $this->data = $data;
        $query = $this->connection->prepare("DELETE FROM $table WHERE id = ?");
        $query->execute([$this->data]);
        return $query->rowCount();
    }

    public function search($table, $data) {
        $this->data = $data;
        $query = $this->connection->prepare("SELECT * FROM $table WHERE key = ?");
        $query->execute([$this->data]);
        return $query->fetchAll();
    }
}