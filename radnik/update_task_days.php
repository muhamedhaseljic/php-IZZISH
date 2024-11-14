<?php
require_once "../config/config.php";
require_once "../classes/Kupac.php";

// Get the JSON data sent from the JavaScript fetch call
$data = json_decode(file_get_contents("php://input"), true);

$response = ['success' => false];

if (is_array($data)) {
    $stmt = $conn->prepare("UPDATE kupac SET day_of_a_week = ? WHERE customer_id = ?");
    
    // Loop through each task and update its day_of_a_week in the database
    foreach ($data as $task) {
        $day = $task['day'];
        $taskId = $task['id'];
        
        $stmt->bind_param("si", $day, $taskId);
        
        if (!$stmt->execute()) {
            echo json_encode($response);  // If there's an error, respond with success = false
            exit;
        }
    }

    $response['success'] = true;  // If everything went fine, respond with success = true
    $stmt->close();
}

echo json_encode($response);
$conn->close();

header('Location: http://localhost/retro/radnik/index.php?page=home');
        exit();

?>
