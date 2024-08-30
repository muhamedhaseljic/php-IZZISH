<?php



    require_once 'config/config.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $employee_id = $_POST['employee_id'];

        $sql = "DELETE FROM radnici WHERE employee_id = ?";
        $run = $conn->prepare($sql);
        $run->bind_param("i", $employee_id);
        $message = "";

        if($run->execute()){
           $message =  "radnik je obrisan";
        } else{
            $message = "radnik nije obrisan";
        }

        $_SESSION['uspjeh'] = $message;
        header('location: http://localhost/retro/dashboard.php?page=radnici');
        exit;
    }