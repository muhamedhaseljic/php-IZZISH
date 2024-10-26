<?php

class Godisnji{

protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
        $sql = "SELECT * FROM bolovanje";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($leave_date, $return_date){
        $interval = $leave_date->diff($return_date);
        $days = $interval->days;
        $sql = "INSERT INTO bolovanje (leave_date, return_date, days) VALUES (?, ?, ?)";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssi", $leave_date, $return_date, $days);
        $run->execute();
    }

    public function read($employee_id){
        $run = $this->conn->prepare("SELECT * FROM bolovanje WHERE employee_id=?");
        $run->bind_param("i", $employee_id);
        $run->execute();
        $result = $run->get_result();
        return $result->fetch_assoc();
    }

    public function update($leave_id, $status, $reason){
        $sql = "UPDATE bolovanje SET        status = ?,
                                          reason = ?
                                          WHERE leave_id = ? ";
        $run = $this->conn->prepare($sql);
        $run->bind_param("ssi", $status, $reason, $leave_id);
        $run->execute();
    }

    
}
