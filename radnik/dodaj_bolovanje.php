<?php

    require_once '../config/config.php';


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $employee_id = $_POST['employeeId'];
        $reason = $_POST['deleteReason'];

        $leave_start = $_POST['leave_startDate'];
        $leave_end = $_POST['leave_endDate'];

        $startDate = new DateTime($leave_start);
        $endDate = new DateTime($leave_end);

        $dateDiff = $startDate->diff($endDate);

        $daysDiff = $dateDiff->days;

        $status = "pending";
        
        $sql = "INSERT INTO bolovanje (status, leave_date, return_date, days, employee_id)
                VALUES (?, ?, ?, ?,?)";

        $run = $conn->prepare($sql);
        $run->bind_param("sssii", $status, $leave_start, $leave_end,$daysDiff,$employee_id);
        $run->execute();

        

        $_SESSION['uspjeh'] = $message;
        header('location: http://localhost/retro/radnik/index.php?page=bolovanje');
        exit;
    }