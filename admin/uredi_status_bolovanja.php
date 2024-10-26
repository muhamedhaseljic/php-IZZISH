<?php

require_once "../config/config.php";
require_once "../classes/Bolovanje.php";


$leaveId = $_GET['id'];
$status = $_GET['status'];

$bolovanje = new Bolovanje();

$bolovanje->update($leaveId, $status, "");

header("Location: ../app/dashboard.php?page=godisnji");

?>