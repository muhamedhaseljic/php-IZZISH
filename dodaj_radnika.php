<?php

    require_once 'config/config.php';

    $response = array('errors' => array(), 'success' => false);
    $target_dir = "images/";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $first_name= $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $employment_status = $_POST['employment_status'];
        $mjesto_rodjenja = $_POST['mjesto_rodjenja'];
        $adresa_boravista = $_POST['adresa_boravista'];
        $date_of_birth = $_POST['date_of_birth'];
        $jmbg = $_POST['jmbg'];
        $position = $_POST['position'];
        $start_date = $_POST['start_date'];
        $plata = $_POST['plata'];
        $gender = $_POST['gender'];
        $notes = $_POST['notes'];

        //photo
        $photo_path = basename($_FILES['photo_path']['name']);
        $target_file = $target_dir . $photo_path;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (strlen($password) < 5) {
            echo "<script>alert('Password must be at least 5 characters long.'); window.history.back();</script>";
            exit();
        }


        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file);

        
        $sql = "INSERT INTO radnici (first_name, last_name, email, password, phone_number, date_of_birth, place_of_birth,gender, jmbg, photo_path, adress, date_of_employment, status,
                                      salary, position, notes)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

        $run = $conn->prepare($sql);
        $run->bind_param("ssssssssisssssss", $first_name, $last_name, $email, $password, $phone_number,$date_of_birth, $mjesto_rodjenja,$gender, $jmbg, $photo_path, $adresa_boravista, $start_date, $employment_status, $plata, $position, $notes);
        $run->execute();

        $_SESSION['message']['type'] = "radnik uspjesno dodat";
        
        
        header('location: http://localhost/retro/dashboard.php?page=radnici');
        exit();}
    