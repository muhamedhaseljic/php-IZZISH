<?php

require_once "../config/config.php";
require_once "../classes/Kupac.php";

$customer = new Kupac();

    
    $customer_id = $_GET['id'];

    $customer->delete($customer_id);

    $_SESSION['message']['type'] = "success";
    $_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Posao uspješno izbrisan";
    header("Location: ../app/dashboard.php?page=kupci");

?>