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

    public function create($first_name, $last_name, $email, $phone_number, $adress, $description){
        $sql = "INSERT INTO kupac (first_name, last_name, email, phone_number, adress, description) VALUES (?, ?, ?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $adress, $description);
        $run->execute();
    }

    public function read($customer_id){
        $run = $this->conn->prepare("SELECT * FROM kupac WHERE customer_id=?");
        $run->bind_param("i", $customer_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($customer_id, $first_name, $last_name, $email, $phone_number, $adress, $description){
        $sql = "UPDATE kupac SET        first_name = ?,
                                          last_name = ?,
                                          email = ?, 
                                          phone_number = ?,
                                          adress = ?, 
                                          description = ?
                                          WHERE customer_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssssi", $first_name, $last_name, $email, $phone_number, $adress, $description, $customer_id);
        $run->execute();
    }

    public function delete($customer_id){
        $sql = "DELETE FROM kupac WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();
    }

    public function assign_employee($customer_id, $employee_id){
        
       if($employee_id == 0){
            $sql = "UPDATE kupac SET employee_id = 0 
                WHERE employee_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $employee_id);
        $run->execute();
       }
            
        $sql = "UPDATE kupac SET employee_id = ? 
                WHERE customer_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ii", $employee_id, $customer_id);
        $run->execute();
        }
}
