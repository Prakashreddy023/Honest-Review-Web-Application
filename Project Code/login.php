<?php
// Start the session
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define error messages
$error_messages = [
    1 => "Incorrect email or password.",
    // Add more error messages as needed
];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get login form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Your database credentials
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "movie_review";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to fetch user data
    $stmt = $conn->prepare("SELECT email, password FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and verify password
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password === $row["password"]) {
            // Authentication successful, store email in session
            $_SESSION["email"] = $email;
            // Redirect to the dashboard page
            header("Location: home.html");
            exit();
        } else {
            // Incorrect password, display alert with error message
            echo "<script>alert('" . $error_messages[1] . "'); window.location.href = 'index.html';</script>";
        }
    } else {
        // User not found, display alert with error message
        echo "<script>alert('" . $error_messages[1] . "'); window.location.href = 'index.html';</script>";
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: index.html");
    exit();
}
?>
