<?php
$response = array('errors' => array(), 'success' => false);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = trim($_POST['password']);

    
    if (empty($password)) {
        $response['errors']['password'] = "Name is required.";
    } elseif (strlen($password) < 5) {
        $response['errors']['password'] = "Name must be less than 50 characters.";
    }

    

    if (empty($response['errors'])) {
        $response['success'] = true;
    }
}

echo json_encode($response);
