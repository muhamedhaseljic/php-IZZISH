<?php

class Bakterije_hrana{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM hrane_bakterije";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($bacteria_id, $customer_id){
        $sql = "INSERT INTO hrane_bakterije (bacteria_id, customer_id) VALUES ( ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ii", $bacteria_id, $customer_id);
        $run->execute();
    }

    

    public function delete($customer_id){
        $sql = "DELETE FROM hrane_bakterije WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
    }

    
    
    
}
