<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get signup form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the password meets the minimum length requirement
    if (strlen($password) < 8) {
        // Display alert message for password length less than 8 characters
        echo "<script>alert('Password must be at least 8 characters long. Please try again.');</script>";
        // Redirect back to the signup page
        echo "<script>window.location = 'index.html';</script>";
        exit();
    }

    // Your signup logic goes here
    // For simplicity, let's assume you insert the new user into a database
    // Replace the following with your database connection and insert query

    // Example using PDO (replace with your actual database details)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "movie_review";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO login (name, email, password) VALUES (:name, :email,:password)");
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password); // Store the password as plaintext (ensure it's hashed for security)
        // Execute the statement
        $stmt->execute();

        // Redirect to signup success page after successful signup
        header("Location: index.html");
        exit();
    } catch(PDOException $e) {
        // Check if the error is due to a duplicate entry
        if ($e->getCode() == '23000') {
            // Display an alert message if the email is already registered
            echo "<script>alert('This email is already registered. Please try another one or login with the same email.');</script>";
            // Redirect to index.html after displaying the alert message
            echo "<script>window.location = 'index.html';</script>";
        } else {
            // For other errors, display the error message
            echo "Error: " . $e->getMessage();
        }
    }
    $conn = null;
} else {
    // If the form is not submitted, redirect back to the signup page
    header("Location: index.html");
    exit();
}
?>
