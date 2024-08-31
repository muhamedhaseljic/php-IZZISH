<?php

class Radnik{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM radnici";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function read($employee_id){
        $run = $this->conn->prepare("SELECT * FROM radnici WHERE employee_id=?");
        $run->bind_param("i", $employee_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($employee_id, $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes){
        $sql = "UPDATE radnici SET        first_name = ?,
                                          last_name = ?,
                                          email = ?, 
                                          phone_number = ?,
                                          date_of_birth = ?, 
                                          place_of_birth = ?,
                                          gender = ?, 
                                          jmbg = ?, 
                                          photo_path = ?, 
                                          adress = ?, 
                                          date_of_employment = ?, 
                                          status = ?,
                                          salary = ?, 
                                          position = ?, 
                                          notes = ? WHERE employee_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("sssssssisssssssi", $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes, $employee_id);
        $run->execute();
    }
}
?>