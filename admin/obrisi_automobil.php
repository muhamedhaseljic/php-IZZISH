<?php

require_once "../config/config.php";
require_once "../classes/Automobili.php";

$car = new Automobil();

    
    $car_id = $_GET['id'];

    $car->delete($car_id);
    $_SESSION['message']['type'] = "success";
    $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Uspješno izbrisan automobil";


    header("Location: ../app/dashboard.php?page=automobili");

?>