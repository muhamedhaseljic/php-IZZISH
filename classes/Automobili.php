<?php

class Automobil{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM automobili";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($name, $model, $registration, $date_of_production, $price, $kilometers){
        $sql = "INSERT INTO automobili (name, model, registration, date_of_production, price, kilometers) VALUES (?, ?, ?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssss", $name, $model, $registration, $date_of_production, $price, $kilometers);
        $run->execute();
    }

    public function read($car_id){
        $run = $this->conn->prepare("SELECT * FROM automobili WHERE car_id=?");
        $run->bind_param("i", $car_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($car_id, $name, $model, $registration, $date_of_production, $price, $kilometers){
        $sql = "UPDATE automobili SET        name = ?,
                                          model = ?,
                                          registration = ?, 
                                          date_of_production = ?,
                                          price = ?, 
                                          kilometers = ?
                                          WHERE car_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssssi", $name, $model, $registration, $date_of_production,$price, $kilometers, $car_id);
        $run->execute();
    }

    public function delete($car_id){
        $sql = "DELETE FROM automobili WHERE car_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $car_id);
        $run->execute();
    }
}
