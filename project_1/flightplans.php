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

$sql = "SELECT * FROM Flight";
$result = $conn->query($sql);

$flights = array();
while ($row = $result->fetch_assoc()) {
    $flights[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($flights);
?>
