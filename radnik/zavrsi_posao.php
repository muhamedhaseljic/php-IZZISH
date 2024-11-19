<?php

    require_once '../config/config.php';


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $customer_id = $_POST['customerId'];
        $reason = $_POST['deleteReason'];

        $leave_start = $_POST['leave_startDate'];
        $taking_time = $_POST['taking-timeDate'];

        $datetime = $leave_start . ' ' . $taking_time;

        
        

        $sql = "SELECT * FROM kupac WHERE customer_id  = $customer_id";   
        $run = $conn->query($sql);
        $results = $run->fetch_assoc();

        $employee_id = $results['employee_id'];
        
        $sql = "SELECT * FROM radnici WHERE employee_id  = $employee_id";
        $run = $conn->query($sql);
        $results_employee = $run->fetch_assoc();

        $car_id_temp = $results_employee['car_id'];

        $sql = "SELECT * FROM automobili WHERE car_id  = $car_id_temp";
        $run = $conn->query($sql);
        $results_car = $run->fetch_assoc();

        $car_name = $results_car['name'];
        $car_model = $results_car['model'];

        $sql = "SELECT COUNT(*) as count 
        FROM produkt_osoba 
        WHERE customer_id = $customer_id";
        $run = $conn->query($sql);
        $count = (int) $run->fetch_assoc()['count'];
        

        if($count === 0){
            $sql_bacteria_ids = "SELECT bacteria_id FROM hrane_bakterije WHERE customer_id = $customer_id";
            $run_bacteria_ids = $conn->query($sql_bacteria_ids);
            $bacteria_ids = $run_bacteria_ids->fetch_all(MYSQLI_ASSOC); 
        
            $bacteria_id_array = array_column($bacteria_ids, 'bacteria_id');

            $bacteria_id_list = implode(",", $bacteria_id_array);

            $sql_sum_prices = "SELECT SUM(price) as total_price FROM bakterije WHERE bacteria_id IN ($bacteria_id_list)";
            $run_sum_prices = $conn->query($sql_sum_prices);
            $total_price = (float) $run_sum_prices->fetch_assoc()['total_price'];

            echo "Total Price: " . $total_price;
        }
        else{
            $total_price = $count*35;
            echo  $total_price;
        }

        
        $sql = "INSERT INTO obavljeni_poslovi (completition_date, car_name, car_model, price)
                VALUES (?, ?, ?, ?)";

        $run = $conn->prepare($sql);
        $run->bind_param("sssi", $datetime, $car_name, $car_model,$total_price);
        $run->execute();

        $jobs_id = $conn->insert_id;

        $sql = "UPDATE kupac SET jobs_id = ? WHERE customer_id = ? ";
        $run = $conn->prepare($sql);
        $run->bind_param("ii", $jobs_id, $customer_id);
        $run->execute();

        

        $_SESSION['uspjeh'] = $message;
        header('location: http://localhost/retro/radnik/index.php?page=poslovi');
        exit;
    }