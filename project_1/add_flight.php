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

$PlaneID = $_POST['PlaneID'];
$DepartureTime = $_POST['DepartureTime'];
$ArrivalTime = $_POST['ArrivalTime'];
$DepartureAirport = $_POST['DepartureAirport'];
$ArrivalAirport = $_POST['ArrivalAirport'];

$sql = "INSERT INTO Flight (PlaneID, DepartureTime, ArrivalTime, DepartureAirport, ArrivalAirport) VALUES ('$PlaneID', '$DepartureTime', '$ArrivalTime', '$DepartureAirport', '$ArrivalAirport')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
