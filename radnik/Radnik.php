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
        $run->bind_param("sssssssssssssssi", $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes, $employee_id);
        $run->execute();
        
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Uspješno uređen radnik ".$first_name;
    }

    public function login($email, $password){
        $sql = "SELECT employee_id, password FROM radnici where email = ?";
        $run = $this->conn->prepare($sql);
        $run->bind_param("s", $email);
        $run->execute();

        $results = $run->get_result();
        
        if($results->num_rows == 1){
            $employee = $results->fetch_assoc();

            if(password_verify($password, $employee['password'])){
                $_SESSION['employee_id'] = $employee['employee_id'];

                return true;
            }
        }
        return false;
    }

    public function is_logged(){
        if(isset($_SESSION['employee_id'])){
            return true;
        }
        return false;
    }

    public function get_employee_data() {
        if($this->is_logged()) {
            $employee_id = $_SESSION['employee_id'];
            
            $stmt = $this->conn->prepare("SELECT * FROM radnici WHERE employee_id = ?");
            $stmt->bind_param("i", $employee_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($result->num_rows > 0) {
                $employee_data = $result->fetch_assoc();
                return $employee_data; 
            }
        }
        return false; 
    }

    public function is_admin() {
        $sql = "SELECT * FROM radnici where employee_id = ? AND is_admin = 1";
        $run = $this->conn->prepare($sql);
        $run->bind_param("i", $_SESSION['employee_id']);
        $run->execute();

        $results = $run->get_result();
        if($results->num_rows >0){
            return true;
        }
        return false;
    }

    public function logout(){
        unset($_SESSION['employee_id']);
    }
}
?>