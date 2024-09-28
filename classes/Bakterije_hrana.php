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

    public function create($bacteria_id, $product_food_id){
        $sql = "INSERT INTO hrane_bakterije (bacteria_id, product_food_id) VALUES ( ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ii", $bacteria_id, $product_food_id);
        $run->execute();
    }

    

    public function delete($product_food_id){
        $sql = "DELETE FROM hrane_bakterije WHERE product_food_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $product_food_id);
        $run->execute();
    }

    
    
    
}
