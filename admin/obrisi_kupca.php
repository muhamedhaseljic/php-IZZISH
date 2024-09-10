<?php

require_once "../config/config.php";
require_once "../classes/Kupac.php";

$customer = new Kupac();

    
    $customer_id = $_GET['id'];

    $customer->delete($customer_id);

    header("Location: ../app/dashboard.php?page=kupci");

?>