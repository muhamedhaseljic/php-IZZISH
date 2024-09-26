<?php

class Produkt_osoba{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM produkt_osoba";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($first_name, $last_name, $customer_id){
        $sql = "INSERT INTO produkt_osoba (first_name, last_name, customer_id) VALUES ( ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssi", $first_name, $last_name, $customer_id);
        $run->execute();
    }

    

    public function delete($customer_id){
        $sql = "DELETE FROM produkt_osoba WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
    }

    
}
