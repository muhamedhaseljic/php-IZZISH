<?php
require_once 'config/config.php';

// Get the search query from the URL parameter
$query = isset($_GET['q']) ? $_GET['q'] : '';

// Prepare the SQL statement
$sql = "SELECT first_name FROM radnici WHERE first_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%" . $query . "%";
$stmt->bind_param("s", $searchTerm);

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Fetch all results
$names = [];
while ($row = $result->fetch_assoc()) {
    $names[] = $row['name'];
}

// Return results as JSON
header('Content-Type: application/json');
echo json_encode($names);

// Close connections
$stmt->close();
$conn->close();
?>
