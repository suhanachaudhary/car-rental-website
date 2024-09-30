<?php

session_start();

$servername = "localhost";
$username = "root";  // Use your MySQL username
$password = "";  // Use your MySQL password
$dbname = "CAR_RENTER_WEBSITE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL to retrieve user data based on the submitted email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user record
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {

            // Set session variables to keep the user logged in
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;

            // Redirect to index.html
            header("Location: index.html");
            exit(); // Important to stop further execution of the script after redirection
        

        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $conn->close();
}
?>
