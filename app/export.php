<?php

require_once '../config/config.php';

$conn->set_charset("utf8mb4");

$sql = "SELECT  employee_id, first_name, last_name, email, phone_number, date_of_birth,
                place_of_birth, gender, jmbg, adress, date_of_employment,
                status, salary, position, notes FROM radnici
        WHERE is_admin = 0";

$csv_cols = [
    "employee_id",
    "Ime",
    "Prezime",
    "Email",
    "Telefon",
    "Datum rođenja",
    "Mjesto rođenja",
    "Spol",
    "Jmbg",
    "Adresa",
    "Datum zaposlenja",
    "Status",
    "Plata",
    "Pozicija",
    "Bilješke"
];
$run = $conn->query($sql);

$results = $run->fetch_all(MYSQLI_ASSOC);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=' . $_GET['what'] . ".csv");

$output = fopen('php://output', 'w');
fwrite($output, "\xEF\xBB\xBF");

fputcsv($output, $csv_cols);

foreach($results as $result){
    fputcsv($output, $result);

}

fclose($output);

?>