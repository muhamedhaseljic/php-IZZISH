<?php
require_once '../config/config.php';

$query = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT first_name FROM radnici WHERE first_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%" . $query . "%";
$stmt->bind_param("s", $searchTerm);

$stmt->execute();
$result = $stmt->get_result();

$names = [];
while ($row = $result->fetch_assoc()) {
    $names[] = $row['name'];
}

header('Content-Type: application/json');
echo json_encode($names);

$stmt->close();
$conn->close();
?>
