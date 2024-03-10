<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "database1"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database,4306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$city = $_POST['city'];

// Insert data into database
$sql = "INSERT INTO admin_clients (id, name, city) VALUES ('$id', '$name', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
