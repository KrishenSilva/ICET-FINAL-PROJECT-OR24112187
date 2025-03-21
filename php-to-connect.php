<?php
$host = "localhost"; 
$user = "root"; 
$pass = "1234"; 
$dbname = "bookstore"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password for security

// Prepare SQL query
$sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
$stmt = $conn->prepare($sql);

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
