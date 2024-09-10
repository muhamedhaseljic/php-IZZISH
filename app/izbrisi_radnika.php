<?php



    require_once 'config/config.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $employee_id = $_POST['employeeId'];
        $reason = $_POST['deleteReason'];

        $sql = "SELECT * FROM radnici WHERE employee_id  = $employee_id";
            $run = $conn->query($sql);
            $results = $run->fetch_assoc();

        $first_name= $results['first_name'];
        $last_name = $results['last_name'];
        $email = $results['email'];
        $phone_number = $results['phone_number'];
        $employment_status = $results['status'];
        $mjesto_rodjenja = $results['place_of_birth'];
        $adresa_boravista = $results['adress'];
        $date_of_birth = $results['date_of_birth'];
        $jmbg = $results['jmbg'];
        $photo_path = $results['photo_path'];
        $position = $results['position'];
        $start_date = $results['date_of_employment'];
        $plata = $results['salary'];
        $gender = $results['gender'];
        $notes = $results['notes'];

        
        $sql = "INSERT INTO historija_radnika (first_name, last_name, email, phone_number, date_of_birth, place_of_birth,gender, jmbg, photo_path, adress, date_of_employment, status,
                                      salary, position, notes, reason_notes)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

        $run = $conn->prepare($sql);
        $run->bind_param("sssssssissssssss", $first_name, $last_name, $email, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes, $reason);
        $run->execute();
        
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