<?php
// At the top of each PHP script
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mboair";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Personnel";
$result = $conn->query($sql);

$personnel = array();
while ($row = $result->fetch_assoc()) {
    $personnel[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($personnel);
?>
