<?php
require_once "../config/config.php";
require_once "../classes/Kupac.php";
require_once "../radnik/Radnik.php";
require_once "../tcpdf/tcpdf.php";

$radnik = new Radnik();

$employee_data = $radnik->get_employee_data();
$radnik_id = $employee_data['employee_id'];

$sql = "SELECT * FROM kupac 
        WHERE employee_id  = $radnik_id AND jobs_id =0";   
        $result  = $conn->query($sql);
        

        $customers = [];
while ($row = $result->fetch_assoc()) {
    $customers[] = $row;
}

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Company');
$pdf->SetSubject('Customer Invoice');
$pdf->SetKeywords('Invoice, TCPDF');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(15, 15, 15);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('dejavusans', '', 10);

$pdf->AddPage();

$checked = "\u{2611}"; 
$unchecked = "\u{2610}";
$br=0;
$html = <<<EOD
<table border="0" cellspacing="0" cellpadding="5">
    <tr>
        <td style="width:100%">
            <h2>INSTITUT ZA ZDRAVLJE I SIGURNOST HRANE</h2>
            <p>
                <strong>Adresa: </strong>Fra Ivana Jukić br.2 72000 Zenica<br>
                <strong>E-mail: </strong>info@inz.ba<br>
                <strong>Tel</strong>032/448/001<br>
                <strong>Fax</strong>032/448/000
            </p>
        </td>
        
    </tr>
</table>
<hr>

EOD;
$pdf->writeHTML($html, true, false, false, false, '');
foreach ($customers as $customer) {
    $customer_id = $customer['customer_id'];
    $sqlPersons = "SELECT produkt_osoba.product_person_id, produkt_osoba.first_name, produkt_osoba.last_name 
                   FROM produkt_osoba 
                   LEFT JOIN kupac ON kupac.customer_id = produkt_osoba.customer_id 
                   WHERE produkt_osoba.customer_id = $customer_id";
    $resultPersons = $conn->query($sqlPersons);
    $persons = [];
    while ($person = $resultPersons->fetch_assoc()) {
        $persons[] = $person;
        
    }
$html = <<<EOD
<h2>Customer Information</h2>
<table cellpadding="5" cellspacing="0" border="1">
    <tr><td><b>Customer ID</b></td><td>{$customer['customer_id']}</td></tr>
    <tr><td><b>First Name</b></td><td>{$customer['first_name']}</td></tr>
    <tr><td><b>Last Name</b></td><td>{$customer['last_name']}</td></tr>
    <tr><td><b>Email</b></td><td>{$customer['email']}</td></tr>
    <tr><td><b>Phone Number</b></td><td>{$customer['phone_number']}</td></tr>
    <tr><td><b>Address</b></td><td>{$customer['adress']}</td></tr>
    <tr><td><b>City</b></td><td>{$customer['city']}</td></tr>
    <tr><td><b>Service</b></td><td>{$customer['service']}</td></tr>
    <tr><td><b>Description</b></td><td>{$customer['description']}</td></tr>
    <tr><td><b>Objekat</b></td><td>{$customer['objekat']}</td></tr>
    <tr><td><b>Day of a Week</b></td><td>{$customer['day_of_a_week']}</td></tr>
</table>
<br><br>
EOD;

$html .= <<<EOD
<h2>Associated Persons</h2>
<table cellpadding="5" cellspacing="0" border="1">
    <thead>
        <tr>
            <th><b>Person ID</b></th>
            <th><b>First Name</b></th>
            <th><b>Last Name</b></th>
        </tr>
    </thead>
    <tbody>
EOD;

if (!empty($persons)) {
    foreach ($persons as $person) {
        $html .= <<<EOD
        <tr>
            <td>{$person['product_person_id']}</td>
            <td>{$person['first_name']}</td>
            <td>{$person['last_name']}</td>
        </tr>
        EOD;
    }
} else {
    $html .= '<tr><td colspan="3" align="center">No associated persons found</td></tr>';
}

$html .= <<<EOD
    </tbody>
</table>
<br><br>
EOD;

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->AddPage();
}


$pdf->Output('invoice.pdf', 'I');
$conn->close();

header("Location: http://localhost/retro/radnik/index.php?page=radna_sedmica")

?>