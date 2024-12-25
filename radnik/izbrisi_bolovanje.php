<?php

require_once "../config/config.php";
require_once "../classes/Bolovanje.php";

$bolovanje = new Bolovanje();

    
    $leave_id = $_GET['id'];

    $bolovanje->delete($leave_id);

    header("Location: http://localhost/retro/radnik/index.php?page=bolovanje");

?>