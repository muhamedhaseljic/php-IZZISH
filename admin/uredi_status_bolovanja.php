<?php

require_once "../config/config.php";
require_once "../radnik/Radnik.php";
require_once "../classes/Bolovanje.php";

$radnik = new Radnik();

$employee_data = $radnik->get_employee_data();
$employee_name = $employee_data['first_name'];

$leaveId = $_GET['id'];
$status = $_GET['status'];
$name = $_GET['name'];

$bolovanje = new Bolovanje();

$bolovanje->update($leaveId, $status, "",$employee_name);

header("Location: ../app/dashboard.php?page=godisnji");

?>