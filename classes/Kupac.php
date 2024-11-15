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

    public function create($first_name, $last_name, $email, $phone_number, $adress, $description, $objekat, $day_of_a_week){
        $sql = "INSERT INTO kupac (first_name, last_name, email, phone_number, adress, description, objekat, day_of_a_week) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssssssss", $first_name, $last_name, $email, $phone_number, $adress, $description, $objekat, $day_of_a_week);
        $run->execute();
    }

    public function read($customer_id){
        $run = $this->conn->prepare("SELECT * FROM kupac WHERE customer_id=?");
        $run->bind_param("i", $customer_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($customer_id, $first_name, $last_name, $email, $phone_number, $adress, $description, $objekat){
        $sql = "UPDATE kupac SET        first_name = ?,
                                          last_name = ?,
                                          email = ?, 
                                          phone_number = ?,
                                          adress = ?, 
                                          description = ?,
                                          objekat = ?
                                          WHERE customer_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("sssssssi", $first_name, $last_name, $email, $phone_number, $adress, $description,$objekat, $customer_id);
        $run->execute();
    }

    public function delete($customer_id){
        $sql = "DELETE FROM kupac WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();

        $sql = "DELETE FROM produkt_osoba WHERE customer_id = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $customer_id);
        $run->execute();

        $sql = "DELETE FROM produkt_hrana WHERE customer_id = ?";
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

        public function assign_sanitarna($first_name, $last_name, $customer_id){
            $sql = "INSERT INTO produkt_osoba (first_name, last_name, customer_id) VALUES (?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssi", $first_name, $last_name, $customer_id);
        $run->execute();
        }

        public function assign_deratizacija($name, $type, $description, $customer_id){
        $sql = "INSERT INTO produkt_hrana (name, type, description, customer_id) VALUES (?, ?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("sssi", $name, $type, $description, $customer_id);
        $run->execute();
        }

        public function get_latest_id_by_name($name, $last_name) {
            $sql = "SELECT MAX(customer_id) AS latest_id FROM kupac WHERE first_name = ? AND last_name = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ss", $name, $last_name);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                return $row['latest_id'];  
            } else {
                return null; 
            }
        }
}
