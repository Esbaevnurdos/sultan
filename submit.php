<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bookings";
$port = 3307; // Specify the custom port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form values
$fullname = $_POST['fullname'];  // Added fullname
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['number'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$description = $_POST['description'];

// Convert date to YYYY-MM-DD format
$date = date("Y-m-d", strtotime($date));

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (fullname, date, time, number, age, gender, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
  die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("sssisss", $fullname, $date, $time, $number, $age, $gender, $description);

// Execute the statement
if ($stmt->execute()) {
  $message = "New record created successfully";
} else {
  $message = "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();

// Redirect to chat page with form data
header("Location: chat.php?message=" . urlencode($message) . "&fullname=" . urlencode($fullname) . "&date=" . urlencode($date) . "&time=" . urlencode($time) . "&number=" . urlencode($number) . "&age=" . urlencode($age) . "&gender=" . urlencode($gender) . "&description=" . urlencode($description));
exit();
?>
