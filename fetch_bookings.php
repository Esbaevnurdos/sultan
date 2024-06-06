<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "root"; // Replace with your MySQL password
$dbname = "bookings";
$port = 3307; // Specify your port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

$bookings = array();
while ($row = $result->fetch_assoc()) {
    $bookings[] = $row;
}

$conn->close();

echo json_encode($bookings);
?>
