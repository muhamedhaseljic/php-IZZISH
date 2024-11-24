<?php
require_once "../config/config.php";
require_once "../classes/Kupac.php";
require_once "../radnik/Radnik.php";
require_once "../tcpdf/tcpdf.php";

$radnik = new Radnik();

$employee_data = $radnik->get_employee_data();
$radnik_id = $employee_data['employee_id'];

$sql = "SELECT * FROM kupac 
        WHERE employee_id  = $radnik_id AND jobs_id = 0 AND day_of_a_week !='poslovi'
        ORDER BY FIELD(kupac.day_of_a_week, 'Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak'),
                  kupac.position;";   
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
            <h1 style="text-align: center;" >INSTITUT ZA ZDRAVLJE I SIGURNOST HRANE</h1><br>
            <p>
                <strong>Adresa: </strong>Fra Ivana Jukić br.2<br>
                <strong>Grad: </strong>72000 Zenica<br>
                <strong>E-mail: </strong>info@inz.ba<br>
                <strong>Tel: </strong>032/448/001<br>
                <strong>Fax: </strong>032/448/000
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
                   WHERE produkt_osoba.customer_id = $customer_id";
    $resultPersons = $conn->query($sqlPersons);
    $persons = [];
    while ($person = $resultPersons->fetch_assoc()) {
        $persons[] = $person;
    }

    $sqlProducts = "SELECT name, type, description 
                    FROM produkt_hrana 
                    WHERE customer_id = $customer_id";
    $resultProducts = $conn->query($sqlProducts);
    $products = [];
    while ($product = $resultProducts->fetch_assoc()) {
        $products[] = $product;
    }

    $sqlAllBacteria = "SELECT * FROM bakterije LIMIT 10"; 
    $resultAllBacteria = $conn->query($sqlAllBacteria);
    $bacteriaList = [];
    while ($bacteria = $resultAllBacteria->fetch_assoc()) {
        $bacteriaList[] = $bacteria;
    }

    $sqlAssociatedBacteria = "SELECT bacteria_id FROM hrane_bakterije WHERE customer_id = $customer_id";
    $resultAssociatedBacteria = $conn->query($sqlAssociatedBacteria);
    $associatedBacteria = [];
    while ($row = $resultAssociatedBacteria->fetch_assoc()) {
        $associatedBacteria[] = $row['bacteria_id'];
    }

    $bacteriaHtml = '';
    foreach ($bacteriaList as $bacteria) {
        $isChecked = in_array($bacteria['bacteria_id'], $associatedBacteria) ? $checked : $unchecked;
        $bacteriaHtml .= <<<EOD
        <tr>
            <td style="width:70%" >{$bacteria['name']}</td>
            <td style="width:15%" align="center">{$isChecked}</td>
            <td style="width:15%" >{$bacteria['price']}</td>
        </tr>
        EOD;
    }

    $html = <<<EOD
    <h2>NARUDŽBENICA BROJ: {$customer['customer_id']}</h2>
    <h2>Podaci o kupcu</h2>
    <table cellpadding="5" cellspacing="0" border="1">
        <tr><td><b>Ime</b></td><td>{$customer['first_name']}</td></tr>
        <tr><td><b>Prezime</b></td><td>{$customer['last_name']}</td></tr>
        <tr><td><b>Email</b></td><td>{$customer['email']}</td></tr>
        <tr><td><b>Broj telefona</b></td><td>{$customer['phone_number']}</td></tr>
        <tr><td><b>Adresa</b></td><td>{$customer['adress']}</td></tr>
        <tr><td><b>Grad</b></td><td>{$customer['city']}</td></tr>
        <tr><td><b>Posao</b></td><td>{$customer['service']}</td></tr>
        <tr><td><b>Opis usluge</b></td><td>{$customer['description']}</td></tr>
        <tr><td><b>Objekat</b></td><td>{$customer['objekat']}</td></tr>
        <tr><td><b>Dan obavljanja</b></td><td>{$customer['day_of_a_week']}</td></tr>
    </table>
    <br><br>
    EOD;

    if (!empty($persons)) {
        $html .= <<<EOD
        <h2>U prilogu su podaci uposlenika</h2>
        <table cellpadding="5" cellspacing="0" border="1">
            <thead>
                <tr style="background-color:#f2f2f2; font-weight:bold;">
                    <th><b>Rb.</b></th>
                    <th><b>Ime</b></th>
                    <th><b>Prezime</b></th>
                </tr>
            </thead>
            <tbody>
        EOD;

        foreach ($persons as $person) {
            $html .= <<<EOD
<tr>
    <td>{$person['product_person_id']}</td>
    <td>{$person['first_name']}</td>
    <td>{$person['last_name']}</td>
</tr>
EOD;
        }

        $html .= <<<EOD
            </tbody>
        </table>
        <br><br>
        EOD;
    } else if (empty($persons) and $customer['service'] != 'Deratizacija') {
        $html .= <<<EOD
        <h2>Podaci o uzorku</h2>
        <table cellpadding="5" cellspacing="0" border="1">
            <thead>
                <tr style="background-color:#f2f2f2; font-weight:bold;">
                    <th><b>Naziv uzorka</b></th>
                    <th><b>Vrsta uzorka</b></th>
                    <th><b>Opis uzorka</b></th>
                </tr>
            </thead>
            <tbody>
        EOD;

        foreach ($products as $product) {
            $html .= <<<EOD
<tr>
    <td>{$product['name']}</td>
    <td>{$product['type']}</td>
    <td>{$product['description']}</td>
</tr>
EOD;
        }

        $html .= <<<EOD
            </tbody>
        </table>
        <br><br>

        <h2>Podaci o obimu ispitivanja</h2>
        <table cellpadding="5" cellspacing="0" border="1">
            <thead>
                <tr style="background-color:#f2f2f2; font-weight:bold;">
                    <th style="width:70%"><b>Naziv ispitivanja</b></th>
                    <th style="width:15%" ><b>Status</b></th>
                    <th style="width:15%"><b>Cijena</b></th>
                </tr>
            </thead>
            <tbody>
                {$bacteriaHtml}
            </tbody>
        </table>
        <br><br>
        EOD;
    }

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->AddPage();
}

$pdf->Output('C:\xampp\htdocs\retro\radnik\customers.pdf', 'F');
$conn->close();

header("Location: http://localhost/retro/radnik/index.php?page=radna_sedmica");
?>
