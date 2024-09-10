<?php

require_once "../config/config.php";
require_once "../classes/Automobili.php";

$car = new Automobil();

    
    $car_id = $_GET['id'];

    $car->delete($car_id);

    header("Location: ../app/dashboard.php?page=automobili");

?>