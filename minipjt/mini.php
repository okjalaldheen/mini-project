<?php
// Assuming your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minipjt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$feedback = $_POST['feedback'];

// Prepare SQL query
$sql = "INSERT INTO feedback (firstname, lastname, username, feedback) VALUES ('$firstname', '$lastname', '$username', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
}
?>
