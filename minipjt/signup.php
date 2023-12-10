<?php
$servername = "localhost"; // Replace with your servername
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "minipjt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming form data is submitted via POST method
if(isset($_POST['submit'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password

    // Insert user data into the database
    $sql = "INSERT INTO signup (username, email,  password) VALUES ('$username','$email' , '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>