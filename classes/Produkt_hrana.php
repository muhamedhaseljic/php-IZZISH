<?php

class Produkt_hrana{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM produkt_hrana";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($name, $type, $description, $customer_id){
        $sql = "INSERT INTO produkt_hrana (name, type, description, customer_id) VALUES ( ?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("sssi", $name, $type, $description, $customer_id);
        $run->execute();
    }

    

    public function delete($customer_id){
        $sql = "DELETE FROM produkt_hrana WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
    }

    
}
