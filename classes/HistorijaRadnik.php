<?php

class HistorijaRadnik{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM historija_radnika";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function read($employee_id){
        $run = $this->conn->prepare("SELECT * FROM historija_radnik WHERE employee_id=?");
        $run->bind_param("i", $employee_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    
}
?>