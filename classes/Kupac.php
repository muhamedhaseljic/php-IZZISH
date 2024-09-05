<?php

class Kupac{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM kupac";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($first_name, $last_name, $email, $phone_number, $type, $description){
        $sql = "INSERT INTO kupac (first_name, last_name, email, phone_number, type, description) VALUES (?, ?, ?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $type, $description);
        $run->execute();
    }

    public function read($car_id){
        $run = $this->conn->prepare("SELECT * FROM automobili WHERE car_id=?");
        $run->bind_param("i", $car_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($customer_id, $first_name, $last_name, $email, $phone_number, $type, $description){
        $sql = "UPDATE kupac SET        first_name = ?,
                                          last_name = ?,
                                          email = ?, 
                                          phone_number = ?,
                                          type = ?, 
                                          description = ?
                                          WHERE customer_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssssi", $first_name, $last_name, $email, $phone_number, $type, $description, $customer_id);
        $run->execute();
    }

    public function delete($customer_id){
        $sql = "DELETE FROM kupac WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
    }

    public function assign_employee($customer_id, $employee_id){
        
            $sql = "UPDATE radnici SET customer_id = 0 
                WHERE customer_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
        
            
        $sql = "UPDATE radnici SET customer_id = ? 
                WHERE employee_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ii", $customer_id, $employee_id);
        $run->execute();
        }
}
