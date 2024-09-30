<?php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header('Location: login.html');
    exit();
}

// Database connection variables
$servername = "localhost"; // Server name
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "CAR_RENTER_WEBSITE"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare SQL query
    $sql = "INSERT INTO booking (location,start,end, email,phone) VALUES ('$location','$start','$end','$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "You are booking the car successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
