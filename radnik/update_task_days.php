<?php
require_once "../config/config.php";
require_once "../classes/Kupac.php";
require_once "../radnik/Radnik.php";
require_once "../fpdf/fpdf.php";

$radnik = new Radnik();

$employee_data = $radnik->get_employee_data();
$radnik_id = $employee_data['employee_id'];



$data = json_decode(file_get_contents("php://input"), true);

$response = ['success' => false];

if (is_array($data)) {
    $stmt = $conn->prepare("UPDATE kupac SET day_of_a_week = ?, position=?  WHERE customer_id = ?");
    
    foreach ($data as $task) {
        $day = $task['day'];
        $position = $task['position'];
        $taskId = $task['id'];
        
        $stmt->bind_param("sii", $day,$position, $taskId);
        
        if (!$stmt->execute()) {
            echo json_encode($response);  
            exit;
        }
    }

    

    $response['success'] = true;  
    $stmt->close();
}



$_SESSION['message']['type'] = "success";
$_SESSION['message']['text'] = "<i class='fas fa-check-circle'>&nbsp; &nbsp;</i>Poslovi su uspješno spremljeni";

echo json_encode($response);
$conn->close();

?>
